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
        Schema::create('producto', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('nombre', 100);
            $table->string('tipo', 100);
            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_marca')->references('id_marca')
                ->on('marca')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_proveedor');
            $table->foreign('id_proveedor')->references('id_proveedor')
                ->on('proveedor')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->float('precio', 8, 2);
            $table->string('descripcion_corta', 2000);
            $table->string('descripcion_larga', 10000);
            $table->string('imagen', 300);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
