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
        Schema::create('cuestionarios', function (Blueprint $table) {
            $table->id();
            $table->string('marca_temporal');
            $table->string('correo');
            $table->string('docente');
            $table->string('pregunta1');
            $table->string('pregunta2');
            $table->string('pregunta3');
            $table->string('pregunta4');
            $table->string('pregunta5');
            $table->string('pregunta6');
            $table->string('pregunta7');
            $table->string('pregunta8');
            $table->string('pregunta9');
            $table->string('pregunta10');
            $table->string('pregunta11');
            $table->longText('pregunta12',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuestionarios');
    }
};
