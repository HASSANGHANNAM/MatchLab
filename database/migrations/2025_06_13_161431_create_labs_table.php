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
        Schema::create('labs', function (Blueprint $table) {
            $table->id();
            $table->string('lab_name', 45)->unique();
            $table->string('contact_info');
            $table->float('price_of_global_unit');
            $table->boolean('subscriptions_status');
            // $table->unsignedBigInteger('lab_owner_id');
            // $table->foreign('lab_owner_id')->references('id')->on('lab_owners')->onDelete('cascade');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            // $table->unique(['lab_name', 'lab_owner_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labs');
    }
};
