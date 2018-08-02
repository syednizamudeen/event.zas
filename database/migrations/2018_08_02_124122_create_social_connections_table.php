<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_connections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });
        DB::table('social_connections')->insert(
            array(
                'name'=>'Facebook'
            )
        );
        DB::table('social_connections')->insert(
            array(
                'name'=>'Twitter'
            )
        );
        DB::table('social_connections')->insert(
            array(
                'name'=>'Instagram'
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
        Schema::dropIfExists('social_connections');
    }
}
