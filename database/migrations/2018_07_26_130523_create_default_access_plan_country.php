<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultAccessPlanCountry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DELETE FROM `role_has_permissions` WHERE `role_id`=1 AND `permission_id` IN (2,3,4,5);');

        DB::table('permissions')->insert(
            array(
                'name'=>'view plans',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'edit plans',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'add plans',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'delete plans',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'view countries',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'edit countries',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'add countries',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'delete countries',
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
