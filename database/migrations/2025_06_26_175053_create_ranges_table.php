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
        Schema::create('ranges', function (Blueprint $table) {
            $table->id();
            $table->foreign('lab_analys_id')->references('id')->on('lab_analyses')->onDelete('cascade');
            $table->unsignedBigInteger('lab_analys_id')->unique();
            $table->double('newborns_min');
            $table->double('newborns_max');
            $table->double('children_min');
            $table->double('children_max');
            $table->double('adults_min');
            $table->double('adults_max');
            $table->double('women_min');
            $table->double('women_max');
            $table->double('men_min');
            $table->double('men_max');
            $table->string('unit');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ranges');
    }
};
