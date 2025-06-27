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
        Schema::create('lab_analys_have_samples', function (Blueprint $table) {
            $table->id();
            $table->foreign('lab_analys_id')->references('id')->on('lab_analyses')->onDelete('cascade');
            $table->unsignedBigInteger('lab_analys_id');
            $table->foreign('sample_id')->references('id')->on('samples')->onDelete('cascade');
            $table->unsignedBigInteger('sample_id');
            $table->unique(['lab_analys_id', 'sample_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_analys_have_samples');
    }
};
