<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name', 200)->nullable();
            $table->string('slug', 200)->nullable();
            $table->string('except', 255)->nullable();
            $table->text('image')->nullable();
            $table->text('image_hover')->nullable();
            $table->text('images')->nullable()->comment('Multiple image, slide detail');
            $table->double('price')->nullable();
            $table->integer('quantity_warehouse')->nullable()->comment('Quantity product in warehouse');
            $table->unsignedSmallInteger('flg_warehouse')->nullable()->comment('Flag show warehouse');

            $table->text('description')->nullable()->comment('Tab detail description');
            $table->text('descriptions_images')->nullable()->comment('Tab detail, with images and texts');
            $table->text('image_feedback')->nullable()->comment('Tab detail slide image');

            $table->unsignedSmallInteger('lang')->nullable()->default('1')->comment('1=vi, 2=en');
            $table->unsignedInteger('post_relate_lang')->nullable()->comment('Product relate language');
            $table->timestamps();

            $table->string('meta_title', 150)->nullable();
            $table->string('meta_keywords', 500)->nullable();
            $table->string('meta_description', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
