<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultAccessAccountProfilePictureConnection extends Migration
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
                'name'=>'update account',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'update profile',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'update picture',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'update social connection',
                'guard_name'=>'web'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'18',
                'role_id'=>'3'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'20',
                'role_id'=>'3'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'21',
                'role_id'=>'3'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'18',
                'role_id'=>'4'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'19',
                'role_id'=>'4'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'20',
                'role_id'=>'4'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'21',
                'role_id'=>'4'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'18',
                'role_id'=>'2'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'20',
                'role_id'=>'2'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'21',
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
