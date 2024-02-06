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
        // COMENTARIO DE PRUEBA
        Schema::create('tbl_planes', function (Blueprint $table) {
            $table->id();
            $table->integer('ayear');
            //$table->unsignedInteger('aidtipoplan')->nullable();
            $table->integer('aestado')->default(1);

            $table->foreignId('aidtipoplan')
                ->references('id')->on('tbl_tiposplan')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_planes');
    }
};
