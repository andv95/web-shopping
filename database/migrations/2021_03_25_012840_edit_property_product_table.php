<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditPropertyProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_property', function (Blueprint $table) {
            $table->dropColumn('size_id');
            $table->dropColumn('color_id');
            $table->unsignedInteger('property_id');
            $table->unsignedInteger('property_id_relate');
            $table->unsignedInteger('group_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_property', function (Blueprint $table) {
            $table->dropColumn('property_id');
            $table->dropColumn('property_id_relate');
            $table->dropColumn('group_id');
        });
    }
}
