<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('companyregno')->unique();
            $table->integer('service_id');
            $table->longText('address');
            $table->integer('country_id');
            $table->integer('postalcode');
            $table->integer('contactno');
            $table->string('website');
            $table->binary('logo');
            $table->timestamps();
        });
        Schema::table('vendors', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->change();
            $table->integer('service_id')->unsigned()->change();
            $table->integer('country_id')->unsigned()->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
