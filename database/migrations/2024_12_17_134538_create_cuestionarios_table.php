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
            $table->string('col1');
            $table->string('col2');
            $table->string('col3');
            $table->string('col4');
            $table->string('col5');
            $table->string('col6');
            $table->string('col7');
            $table->string('col8');
            $table->string('col9');
            $table->string('col10');
            $table->string('col11');
            $table->string('col12');
            $table->string('col13');
            $table->string('col14');
            $table->string('col15');
            $table->longText('col16',255)->nullable();
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
