<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdminUsers extends Migration
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
                'username' => 'admin',
                'name' => 'name',
                'password' => '$2y$10$AjMzWjleaC3kpJDOq3tgGu.QnHdek1kTPlEn/LS1ONnEL0kEBeYoS',
                'subs' => 1,
                'created_at' => '2019-02-23 10:57:30',
                'updated_at' => '2019-02-23 10:57:30'
            )
        );

        DB::table('users')->insert(
            array(
                'username' => 'zoran',
                'name' => 'zoran',
                'password' => '$2y$10$AjMzWjleaC3kpJDOq3tgGu.QnHdek1kTPlEn/LS1ONnEL0kEBeYoS',
                'subs' => 0,
                'created_at' => '2019-02-23 10:57:30',
                'updated_at' => '2019-02-23 10:57:30'
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
