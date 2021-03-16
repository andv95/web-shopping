<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('menu_id')->nullable();
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('name', 255)->nullable();
            $table->string('link', 500)->nullable();
            $table->unsignedInteger('type')->comment('0: normal, 1: _blank')->default('0')->nullable();
            $table->unsignedInteger('order')->nullable();

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
        Schema::dropIfExists('menu_items');
    }
}
