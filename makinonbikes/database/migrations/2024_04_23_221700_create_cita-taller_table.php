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
        Schema::create('cita_taller', function (Blueprint $table) {
            $table->id('id_cita_taller');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id_usuario')
                ->on('usuario')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->date('fecha');
            $table->time('hora');
            $table->string('estado', 100);
            $table->string('comentario', 1000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cita_taller');
    }
};
