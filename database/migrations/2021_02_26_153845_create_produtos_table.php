<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->uinique();
            $table->string('description')->nullable();
            $table->text('body')->nullable();
            $table->string('slug')->unique();
            $table->boolean('active');
            $table->integer('position');
            $table->string('image');
            $table->decimal('cost', 10,2);
            $table->decimal('sale', 10,2);
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
        Schema::dropIfExists('produtos');
    }
}
