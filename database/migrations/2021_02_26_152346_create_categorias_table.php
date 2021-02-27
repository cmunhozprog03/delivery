<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('setor_id');

            $table->string('name')->uinique();
            $table->string('description')->nullable();
            $table->text('body')->nullable();
            $table->string('slug')->unique();
            $table->boolean('active');
            $table->integer('position');
            $table->string('image');

            $table->timestamps();

            $table->foreign('setor_id')->references('id')->on('setores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
