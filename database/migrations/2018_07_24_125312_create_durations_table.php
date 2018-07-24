<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('durations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('noofdays');
        });
        DB::table('durations')->insert(
            array(
                'name'=>'Daily',
                'noofdays'=>1
            )
        );
        DB::table('durations')->insert(
            array(
                'name'=>'Weekly',
                'noofdays'=>7
            )
        );
        DB::table('durations')->insert(
            array(
                'name'=>'Fortnight',
                'noofdays'=>14
            )
        );
        DB::table('durations')->insert(
            array(
                'name'=>'Monthly',
                'noofdays'=>30
            )
        );
        DB::table('durations')->insert(
            array(
                'name'=>'Quarterly',
                'noofdays'=>90
            )
        );
        DB::table('durations')->insert(
            array(
                'name'=>'Half Yearly',
                'noofdays'=>180
            )
        );
        DB::table('durations')->insert(
            array(
                'name'=>'Yearly',
                'noofdays'=>365
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
        Schema::dropIfExists('durations');
    }
}
