<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imagen')->nullable();
            $table->string('Nombre')->nullable();
            $table->string('Descripcion')->nullable();
            $table->string('color1')->nullable();
            $table->string('color2')->nullable();
            $table->string('whats')->nullable();
            $table->string('insta')->nullable();
            $table->string('face')->nullable();
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
        Schema::dropIfExists('socios');
    }
}
