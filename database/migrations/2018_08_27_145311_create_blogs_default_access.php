<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsDefaultAccess extends Migration
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
                'name'=>'view blog',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'edit blog',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'add blog',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'delete blog',
                'guard_name'=>'web'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'23',
                'role_id'=>'4'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'24',
                'role_id'=>'4'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'25',
                'role_id'=>'4'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'26',
                'role_id'=>'4'
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
