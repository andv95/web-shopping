<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            $table->string('name', 255)->nullable();
            $table->string('slug', 200)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('except', 255)->nullable();

            $table->string('name_en', 255)->nullable();
            $table->string('slug_en', 200)->nullable();
            $table->string('except_en', 255)->nullable();

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
        Schema::dropIfExists('categories');
    }
}
