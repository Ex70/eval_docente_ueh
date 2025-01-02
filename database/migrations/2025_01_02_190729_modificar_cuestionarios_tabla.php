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
        Schema::table('cuestionarios', function (Blueprint $table) {
            $table->integer('pregunta1')->change();
            $table->integer('pregunta2')->change();
            $table->integer('pregunta3')->change();
            $table->integer('pregunta4')->change();
            $table->integer('pregunta5')->change();
            $table->integer('pregunta6')->change();
            $table->integer('pregunta7')->change();
            $table->integer('pregunta8')->change();
            $table->integer('pregunta9')->change();
            $table->integer('pregunta10')->change();
            $table->integer('pregunta11')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cuestionarios', function (Blueprint $table) {
            $table->string('pregunta1')->change();
            $table->string('pregunta2')->change();
            $table->string('pregunta3')->change();
            $table->string('pregunta4')->change();
            $table->string('pregunta5')->change();
            $table->string('pregunta6')->change();
            $table->string('pregunta7')->change();
            $table->string('pregunta8')->change();
            $table->string('pregunta9')->change();
            $table->string('pregunta10')->change();
            $table->string('pregunta11')->change();
        });
    }
};
