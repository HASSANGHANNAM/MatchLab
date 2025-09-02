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
        Schema::create('appointment_lab_have_analys', function (Blueprint $table) {
            $table->id();
            $table->float('result')->nullable();
            // $table->unsignedBigInteger('lab_have_analys_id');
            // $table->foreign('lab_have_analys_id')->references('id')->on('lab_have_analyses')->onDelete('cascade');
            $table->unsignedBigInteger('lab_analys_id');
            $table->foreign('lab_analys_id')->references('id')->on('lab_analyses')->onDelete('cascade');
            $table->unsignedBigInteger('appointment_id');
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_lab_have_analys');
    }
};
