<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSellwithayamisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellwithayamis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('receive_a_home')->nullable();
            $table->string('property_type1')->nullable();
            $table->string('unit')->nullable();
            $table->string('property_type2')->nullable();
            $table->string('condition_property')->nullable();
            $table->string('property_type3')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sellwithayamis');
    }
}
