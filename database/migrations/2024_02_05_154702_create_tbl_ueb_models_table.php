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
        Schema::create('tbl_ueb', function(Blueprint $table){
            $table->id();
            $table->string('aueb');
            $table->integer('aorden');
            $table->boolean('acma');
            $table->boolean('adetective');
            $table->boolean('aproteccion');
            $table->boolean('aproyecto');
            $table->boolean('atrasladoValores');
            $table->boolean('asalaConteo');
            $table->boolean('atecnica');
            $table->boolean('atsp');
            $table->boolean('asinplan');
            $table->integer('aestado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ueb');
    }
};
