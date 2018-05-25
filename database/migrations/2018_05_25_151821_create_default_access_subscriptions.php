<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultAccessSubscriptions extends Migration
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
                'name'=>'view subscriptions',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'edit subscriptions',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'add subscriptions',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'delete subscriptions',
                'guard_name'=>'web'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'6',
                'role_id'=>'2'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'7',
                'role_id'=>'2'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'8',
                'role_id'=>'2'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'9',
                'role_id'=>'2'
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
