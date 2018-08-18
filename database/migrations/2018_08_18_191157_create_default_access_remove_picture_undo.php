<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultAccessRemovePictureUndo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DELETE FROM `permissions` WHERE `permissions`.`id` = 22;');
        DB::statement('DELETE FROM `role_has_permissions` WHERE `role_has_permissions`.`permission_id` = 22 AND `role_has_permissions`.`role_id` = 2;');
        DB::statement('DELETE FROM `role_has_permissions` WHERE `role_has_permissions`.`permission_id` = 22 AND `role_has_permissions`.`role_id` = 3;');
        DB::statement('DELETE FROM `role_has_permissions` WHERE `role_has_permissions`.`permission_id` = 22 AND `role_has_permissions`.`role_id` = 4;');
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
