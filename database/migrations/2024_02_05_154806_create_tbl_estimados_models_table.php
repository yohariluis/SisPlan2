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
        Schema::create('tbl_estimados', function (Blueprint $table) {
            $table->id();
            $table->integer('aiddetalle');
            // $table->unsignedInteger('idplan')->nullable();
            $table->foreignId('aidplan')
                ->references('id')->on('tbl_planes')
                ->onDelete('cascade');
            $table->integer('afecha');
            $table->string('ames');
            $table->decimal('aestimado',$precision = 12, $scale = 2);
            $table->text('aobservaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_estimados');
    }
};
