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
        Schema::create('lab_have_analyses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lab_id');
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
            $table->unsignedBigInteger('lab_analys_id');
            $table->foreign('lab_analys_id')->references('id')->on('lab_analyses')->onDelete('cascade');
            $table->unique(['lab_id', 'lab_analys_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_have_analyses');
    }
};
