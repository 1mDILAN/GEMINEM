<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('concierto_id');
            $table->unsignedBigInteger('organizador_id');
            $table->string('rol');
            $table->foreign('concierto_id')->references('id')->on('conciertos');
            $table->foreign('organizador_id')->references('id')->on('organizadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participaciones');
    }
};

