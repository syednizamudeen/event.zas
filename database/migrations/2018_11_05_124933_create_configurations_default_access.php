<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationsDefaultAccess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('permissions')->insert(
            array(
                'name'=>'View Configurations',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'Edit Configurations',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'Add Configurations',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'Delete Configurations',
                'guard_name'=>'web'
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
