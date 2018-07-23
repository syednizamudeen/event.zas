<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->char('iso',2);
            $table->char('currencycode',3);
            $table->string('currencyname');
            $table->string('currencysymbol');
            $table->string('taxname');
            $table->char('taxcode',3);
            $table->decimal('taxrate', 5, 4);
            $table->integer('countrycode');
            $table->timestamps();
        });
        DB::table('countries')->insert(
            array(
                'name'=>'Singapore',
                'iso'=>'SG',
                'currencycode'=>'SGD',
                'currencyname'=>'Singapore Dollar',
                'currencysymbol'=>'S$',
                'taxname'=>'G.S.T',
                'taxcode'=>'GST',
                'taxrate'=>7.00,
                'countrycode'=>0065
            )
        );
        DB::table('countries')->insert(
            array(
                'name'=>'Malaysia',
                'iso'=>'MY',
                'currencycode'=>'MYR',
                'currencyname'=>'Malaysia Ringgit',
                'currencysymbol'=>'RM',
                'taxname'=>'G.S.T',
                'taxcode'=>'GST',
                'taxrate'=>6.00,
                'countrycode'=>0060
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
        Schema::dropIfExists('countries');
    }
}
