<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultUsersRolesPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(
            array(
                'name'=>'Super Admin',
                'email'=>'superadmin@demo.com',
                'password'=>'$2y$10$NLK2RwNReUVRQAtDaIWh9OnH622N.ePdUZD9AL11L0hphxXdhLN6u',
                'remember_token'=>'Ddkcrcfa15zPB0nAogqS1FSZjj7ZzwlSLpnh1CpJYnbmPoBZXLl9aXeYpPr9'
            )
        );

        DB::table('users')->insert(
            array(
                'name'=>'Administrator',
                'email'=>'admin@demo.com',
                'password'=>'$2y$10$NLK2RwNReUVRQAtDaIWh9OnH622N.ePdUZD9AL11L0hphxXdhLN6u',
                'remember_token'=>'Ddkcrcfa15zPB0nAogqS1FSZjj7ZzwlSLpnh1CpJYnbmPoBZXLl9aXeYpPr9'
            )
        );

        DB::table('users')->insert(
            array(
                'name'=>'Visitor',
                'email'=>'visitor@demo.com',
                'password'=>'$2y$10$NLK2RwNReUVRQAtDaIWh9OnH622N.ePdUZD9AL11L0hphxXdhLN6u',
                'remember_token'=>'Ddkcrcfa15zPB0nAogqS1FSZjj7ZzwlSLpnh1CpJYnbmPoBZXLl9aXeYpPr9'
            )
        );

        DB::table('users')->insert(
            array(
                'name'=>'Vendor',
                'email'=>'vendor@demo.com',
                'password'=>'$2y$10$NLK2RwNReUVRQAtDaIWh9OnH622N.ePdUZD9AL11L0hphxXdhLN6u',
                'remember_token'=>'Ddkcrcfa15zPB0nAogqS1FSZjj7ZzwlSLpnh1CpJYnbmPoBZXLl9aXeYpPr9'
            )
        );

        DB::table('roles')->insert(
            array(
                'name'=>'super-admin',
                'guard_name'=>'web'
            )
        );

        DB::table('roles')->insert(
            array(
                'name'=>'admin',
                'guard_name'=>'web'
            )
        );

        DB::table('roles')->insert(
            array(
                'name'=>'visitor',
                'guard_name'=>'web'
            )
        );

        DB::table('roles')->insert(
            array(
                'name'=>'vendor',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'Administer roles & permissions',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'view services',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'edit services',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'add services',
                'guard_name'=>'web'
            )
        );

        DB::table('permissions')->insert(
            array(
                'name'=>'delete services',
                'guard_name'=>'web'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'1',
                'role_id'=>'1'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'2',
                'role_id'=>'1'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'3',
                'role_id'=>'1'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'4',
                'role_id'=>'1'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'5',
                'role_id'=>'1'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'2',
                'role_id'=>'2'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'3',
                'role_id'=>'2'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'4',
                'role_id'=>'2'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'5',
                'role_id'=>'2'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'2',
                'role_id'=>'4'
            )
        );

        DB::table('model_has_roles')->insert(
            array(
                'role_id'=>'1',
                'model_id'=>'1',
                'model_type'=>'App\User'
            )
        );

        DB::table('model_has_roles')->insert(
            array(
                'role_id'=>'2',
                'model_id'=>'2',
                'model_type'=>'App\User'
            )
        );

        DB::table('model_has_roles')->insert(
            array(
                'role_id'=>'3',
                'model_id'=>'3',
                'model_type'=>'App\User'
            )
        );

        DB::table('model_has_roles')->insert(
            array(
                'role_id'=>'4',
                'model_id'=>'4',
                'model_type'=>'App\User'
            )
        );

        DB::table('model_has_permissions')->insert(
            array(
                'permission_id'=>'1',
                'model_id'=>'1',
                'model_type'=>'App\User'
            )
        );

        DB::table('model_has_permissions')->insert(
            array(
                'permission_id'=>'2',
                'model_id'=>'1',
                'model_type'=>'App\User'
            )
        );

        DB::table('model_has_permissions')->insert(
            array(
                'permission_id'=>'3',
                'model_id'=>'1',
                'model_type'=>'App\User'
            )
        );

        DB::table('model_has_permissions')->insert(
            array(
                'permission_id'=>'4',
                'model_id'=>'1',
                'model_type'=>'App\User'
            )
        );

        DB::table('model_has_permissions')->insert(
            array(
                'permission_id'=>'5',
                'model_id'=>'1',
                'model_type'=>'App\User'
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
