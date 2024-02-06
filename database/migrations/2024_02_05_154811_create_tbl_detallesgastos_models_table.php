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
        Schema::create('tbl_detallesgastos', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('aidplan')->nullable();
            // $table->unsignedInteger('aidueb')->nullable();
            // $table->unsignedInteger('aidtipogasto')->nullable();
            $table->string('ames');
            $table->decimal('aplangasto',$precision = 12, $scale = 2);
            $table->decimal('arealgasto',$precision = 12, $scale = 2);
            $table->text('aobservaciones');

            $table->foreignId('aidplan')
                ->references('id')->on('tbl_planes')
                ->onDelete('cascade');
            $table->foreignId('aidueb')
                ->references('id')->on('tbl_ueb')
                ->onDelete('cascade');
            $table->foreignId('aidtipogasto')
                ->references('id')->on('tbl_tiposgastos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_detallesgastos');
    }
};
