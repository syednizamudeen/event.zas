<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->decimal('amount', 5, 2);
            $table->timestamps();
        });
        DB::table('subscriptions')->insert(
            array(
                'name'=>'Startup',
                'amount'=>0.00
            )
        );
        DB::table('subscriptions')->insert(
            array(
                'name'=>'Intermediate',
                'amount'=>1.99
            )
        );
        DB::table('subscriptions')->insert(
            array(
                'name'=>'Enterprise',
                'amount'=>18.00
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
