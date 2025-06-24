<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->unsignedBigInteger('lab_owner_id')->nullable();
            $table->foreign('lab_owner_id')->references('id')->on('lab_owners');
            // $table->unsignedBigInteger('super_admin_id')->nullable();
            // $table->foreign('super_admin_id')->references('id')->on('super_admins');
            $table->string('message');
            $table->enum("type", ["paid", "unpaid", "wallet", "cash"]);
            $table->dateTime('send_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
