<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('user_id')->nullable();
            $table->string('user_name', 255)->nullable();
            $table->string('user_phone', 100)->nullable();
            $table->string('email', 150)->nullable();
            $table->text('address')->nullable();
            $table->unsignedInteger('total')->nullable();
            $table->unsignedInteger('status')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
