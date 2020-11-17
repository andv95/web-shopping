<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('customer_id')->nullable();
            $table->string('description', 500)->nullable();
            $table->string('avatar', 255)->nullable();
            $table->unsignedInteger('ratting')->nullable();
            $table->unsignedInteger('flg_show')->nullable()->comment('Flag show comment');

            $table->unsignedSmallInteger('lang')->nullable()->default('1')->comment('1=vi, 2=en');
            $table->unsignedInteger('post_relate_lang')->nullable()->comment('Product relate language');
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
        Schema::dropIfExists('reviews');
    }
}
