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
        Schema::create('tarjeta_credito', function (Blueprint $table) {
            $table->id("id_tarjeta");
            $table->unsignedBigInteger("id_usuario")->constrained("usuario");
            $table->foreign("id_usuario")->references("id_usuario")
                ->on("usuario")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->string("numero_tarjeta", 16);
            $table->string("nombre_titular", 100);
            $table->string("fecha_vencimiento", 5);
            $table->string("cvv", 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarjeta_credito');
    }
};
