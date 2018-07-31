<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendors', function($table)
        {
            $table->integer('service_id')->nullable()->change();
            $table->longText('address')->nullable()->change();
            $table->integer('country_id')->nullable()->change();
            $table->integer('postalcode')->nullable()->change();
            $table->integer('contactno')->nullable()->change();
            $table->string('website')->nullable()->change();
            $table->binary('logo')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
