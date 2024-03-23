<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo')->nullable();
            $table->string('icono')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frases');
    }
}
