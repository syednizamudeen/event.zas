<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultAccessRemovePicture extends Migration
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
                'name'=>'remove picture',
                'guard_name'=>'web'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'22',
                'role_id'=>'3'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'22',
                'role_id'=>'4'
            )
        );

        DB::table('role_has_permissions')->insert(
            array(
                'permission_id'=>'22',
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
