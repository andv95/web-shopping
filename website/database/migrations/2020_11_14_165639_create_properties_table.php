<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->string('name', 255)->nullable()->comment('Name of size, or color');
            $table->string('slug', 255)->nullable();

            $table->string('name_en', 255)->nullable()->comment('Name of size, or color by english');
            $table->string('slug_en', 255)->nullable()->comment('Name of size, or color by english');

            $table->string('type')->nullable()->comment('1=size, 2=color');

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
        Schema::dropIfExists('properties');
    }
}
