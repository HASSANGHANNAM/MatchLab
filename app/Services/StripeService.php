<?php

namespace App\Services;

use App\Models\Advertisement;
use App\Models\Sample;
use App\Models\User;
use App\Services\NotificationService;
use Exception;
use Google\Cloud\Core\Testing\TestHelpers;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Stripe\Stripe;
use Stripe\Account;
use Stripe\AccountLink;
use Stripe\Balance;
use Stripe\Charge;
use Stripe\Exception\ApiErrorException;
use Stripe\Customer;
use Stripe\PaymentIntent;
use Stripe\StripeClient;
use Stripe\Transfer;

class StripeService
{
    public function createStripeAccount(string $email, string $first_name, string $last_name): array
    {
        try {
            $stripe = new StripeClient(config('services.stripe.secret'));
            Stripe::setApiKey(config('services.stripe.secret'));
            \Stripe\Stripe::setApiVersion('2023-10-16');
            $account = Account::create([
                'type' => 'custom',
                'country' => 'US',
                'business_type' => 'individual',
                'individual' => [
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $email,
                    'phone' => '+15005550006',
                    'address' => [
                        'line1' => '123 Medical Street',
                        'city' => 'San Francisco',
                        'state' => 'CA',
                        'postal_code' => '94103',
                        'country' => 'US'
                    ],
                    'dob' => [
                        'day' => 1,
                        'month' => 1,
                        'year' => 1980
                    ],
                    'id_number' => '000000000'
                ],
                'capabilities' => [
                    'card_payments' => ['requested' => true],
                    'transfers' => ['requested' => true]
                ],
                'business_profile' => [
                    'url' => 'https://medical-service.com',
                    'mcc' => '8099'
                ],
                'tos_acceptance' => [
                    'date' => time(),
                    'ip' => request()->ip(),
                    'service_agreement' => 'full'
                ],
                'settings' => [
                    'payouts' => [
                        'schedule' => ['interval' => 'manual']
                    ],
                    'payments' => [
                        'statement_descriptor' => 'MEDICAL SERVICE'
                    ]
                ],
                'metadata' => ['account_type' => 'medical']
            ]);
            try {
                Account::update($account->id, [
                    'individual' => [
                        'verification' => [
                            'document' => [
                                'front' => 'file_identity_document_success'
                            ],
                            'status' => 'verified'
                        ],
                        'ssn_last_4' => '0000'
                    ]
                ]);
                $capabilities = $account->capabilities;
                $transfersCapabilityId = $capabilities->transfers->id;
                Account::updateCapability(
                    $transfersCapabilityId,
                    ['status' => 'active']
                );
                Account::update($account->id, [
                    'settings' => [
                        'payouts' => [
                            'debit_negative_balances' => true
                        ]
                    ]
                ]);
                Account::createExternalAccount($account->id, [
                    'external_account' => [
                        'object' => 'bank_account',
                        'country' => 'US',
                        'currency' => 'usd',
                        'routing_number' => '110000000',
                        'account_number' => '000123456789'
                    ]
                ]);
            } catch (\Exception $e) {
                $account = Account::retrieve($account->id);
                if (class_exists('\Stripe\TestHelpers\Account')) {
                    \Stripe\TestHelpers\Account::markCapabilityAsActive(
                        $account->id,
                        'transfers'
                    );
                }
                Account::update($account->id, [
                    'settings' => [
                        'payouts' => [
                            'debit_negative_balances' => true,
                            'schedule' => ['interval' => 'manual']
                        ]
                    ]
                ]);
            }
            $account = Account::retrieve($account->id);
            $data['Account_id'] = $account->id;
            return ['message' => "succes create stripe account", 'data' => $data, 'code' => 200];
        } catch (ApiErrorException $e) {
            return ['message' => "fail create stripe account", 'data' => null, 'code' => 401];
        }
        return $account;
    }
    public function getPlatformBalance(): array
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $balance = Balance::retrieve();
            $data['currency'] = strtoupper($balance->available[0]->currency);
            $data['total'] = ($balance->available[0]->amount + $balance->pending[0]->amount) / 100;
            return ['message' => "succes getPlatformBalance", 'data' => $data, 'code' => 200];
        } catch (ApiErrorException $e) {
            return ['message' => "fail getPlatformBalance", 'data' => null, 'code' => 401];
        }
    }
    public function getBalance(): array
    {
        if (Auth::user()->hasRole('Patient') || Auth::user()->hasRole('LabOwner') || Auth::user()->hasRole('SuperAdmin')) {
            $user =  DB::table('users')->where('id', Auth::id())->first();
            return $this->getConnectedAccountBalance($user->stripe_account_id);
        } else {
            $message = 'Unauthorized access!';
            return ['message' => $message, 'data' => null, 'code' => 403];
        }
    }
    public function depositBalance($amount): array
    {
        if (Auth::user()->hasRole('Patient') || Auth::user()->hasRole('LabOwner') || Auth::user()->hasRole('SuperAdmin')) {
            $user =  DB::table('users')->where('id', Auth::id())->first();
            return $this->push($user->stripe_account_id, $amount);
        } else {
            $message = 'Unauthorized access!';
            return ['message' => $message, 'data' => null, 'code' => 403];
        }
    }
    public function withdrawBalance($amount): array
    {
        if (Auth::user()->hasRole('Patient') || Auth::user()->hasRole('LabOwner') || Auth::user()->hasRole('SuperAdmin')) {
            $user =  DB::table('users')->where('id', Auth::id())->first();
            return $this->pull($user->stripe_account_id, $amount);
        } else {
            $message = 'Unauthorized access!';
            return ['message' => $message, 'data' => null, 'code' => 403];
        }
    }
    public function getConnectedAccountBalance($accountId): array
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $balance = Balance::retrieve([
                'stripe_account' => $accountId
            ]);
            $data['currency'] = strtoupper($balance->available[0]->currency);
            $data['total'] = ($balance->available[0]->amount + $balance->pending[0]->amount) / 100;
            return ['message' => "succes getBalance", 'data' => $data, 'code' => 200];
        } catch (ApiErrorException $e) {
            return ['message' => "fail getBalance", 'data' => null, 'code' => 401];
        }
    }
    public function pull($AccountId, $amount): array
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $platformAccountId = env('STRIPE_ACCOUNT_ID');
        $description = "withdraw from {$AccountId} balance";
        $checkBalance = $this->getConnectedAccountBalance($AccountId);
        if ($checkBalance['data']['total'] < $amount) {
            return ['message' => "fail withdrawBalance because amount gretar than balance", 'data' => null, 'code' => 401];
        }
        try {
            $transfer = Transfer::create([
                'amount' => $amount * 100,
                'currency' => 'usd',
                'destination' => $platformAccountId,
                'source_transaction' => null,
                'description' => $description
            ], [
                'stripe_account' => $AccountId
            ]);
            return ['message' => "succes withdrawBalance", 'data' => null, 'code' => 200];
        } catch (\Exception $e) {
            return ['message' => "fail withdrawBalance", 'data' => null, 'code' => 401];
        }
    }
    public function push($AccountId, $amount): array
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $description = "deposit from {$AccountId} balance";
        try {
            $charge = Charge::create([
                'amount' => $amount * 100,
                'currency' => 'usd',
                'source' => 'tok_visa',
                'destination' => [
                    'account' => $AccountId,
                    'amount' => $amount * 100,
                ],
                'description' => $description
            ]);
            $data['charge_id'] = $charge->id;
            return ['message' => "succes depositBalance", 'data' => $data, 'code' => 200];
        } catch (\Exception $e) {
            return ['message' => "fail depositBalance", 'data' => null, 'code' => 401];
        }
    }
    public function transactionAmount($sourceAccountId, $destinationAccountId, $amount): array
    {
        $checkPull = $this->pull($sourceAccountId, $amount);
        if ($checkPull['code'] != 200) {
            return ['message' => "fail transactionAmount", 'data' => null, 'code' => 401];
        }
        $checkPush = $this->push($destinationAccountId, $amount);
        if ($checkPush['code'] != 200) {
            return ['message' => "succes pull and fail push amount", 'data' => null, 'code' => 401];
        }
        return ['message' => "succes transactionAmount", 'data' => null, 'code' => 200];
    }
}
