<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->text('description');
            $table->unsignedBigInteger('categoria');
            $table->bigInteger('price');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categorie');
            $table->timestamps();
        });

        Schema::create('categorie_consulting', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('consulting_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->unique(['consulting_id', 'category_id']);
            $table->foreign('consulting_id')->references('id')->on('consultings');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultings');
    }
}
