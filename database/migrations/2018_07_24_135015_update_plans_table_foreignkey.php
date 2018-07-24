<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePlansTableForeignkey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->integer('type_id')->unsigned()->change();
            $table->integer('duration_id')->unsigned()->change();
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('duration_id')->references('id')->on('durations');
        });
        DB::table('plans')->insert(
            array(
                'name'=>'Basic',
                'amount'=>0.00,
                'country_id'=>1,
                'type_id'=>1,
                'duration_id'=>7,
                'expire_at'=>'2020-12-31 00:00:00',
            )
        );
        DB::table('plans')->insert(
            array(
                'name'=>'Monthly',
                'amount'=>1.99,
                'country_id'=>1,
                'type_id'=>1,
                'duration_id'=>4,
                'expire_at'=>'2020-12-31 00:00:00',
            )
        );
        DB::table('plans')->insert(
            array(
                'name'=>'Yearly',
                'amount'=>18.00,
                'country_id'=>1,
                'type_id'=>1,
                'duration_id'=>7,
                'expire_at'=>'2020-12-31 00:00:00',
            )
        );
        DB::table('plans')->insert(
            array(
                'name'=>'Feature Wall',
                'amount'=>5.00,
                'country_id'=>1,
                'type_id'=>2,
                'duration_id'=>2,
                'expire_at'=>'2020-12-31 00:00:00',
            )
        );
        DB::table('plans')->insert(
            array(
                'name'=>'Feature Logo',
                'amount'=>7.00,
                'country_id'=>1,
                'type_id'=>2,
                'duration_id'=>2,
                'expire_at'=>'2020-12-31 00:00:00',
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
        //
    }
}
