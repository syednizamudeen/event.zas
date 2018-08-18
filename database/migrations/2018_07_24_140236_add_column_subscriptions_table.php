<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('subscriptions');
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendor_id');
            $table->integer('plan_id');            
            $table->integer('plan_id')->unsigned()->change();
            // $table->foreign('plan_id')->references('id')->on('plans');
            $table->dateTime('activationdate');
            $table->dateTime('expirydate');
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
        //
    }
}
