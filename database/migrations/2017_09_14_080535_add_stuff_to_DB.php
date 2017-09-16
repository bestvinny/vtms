<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStuffToDB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Insert some admin
        DB::table('admins')->insert(
            array(
                'name' => 'Administrator',
                'email' => 'admin@mail.com',
                'password' => bcrypt('admin12')
            )
        );

        // Insert some user
        DB::table('users')->insert(
            array(
                'firstname' => 'Sacha',
                'middlename' => 'Baron',
                'lastname' => 'Cohen',
                'gender' => 'Male',
                'phone_no' => '0777001122',
                'id_no' => '00112233',
                'group_name' => 'Comics',
                'is_assigned' => '0',
                'is_approved' => '0',
                'email' => 'user@mail.com',
                'password' => bcrypt('user12')
            )
        );

        // Insert some vehicle
        DB::table('vehicles')->insert(
            array(
                'model' => 'Lamborghini',
                'color' => 'Blue',
                'reg_no' => 'KKK 012 K',
                'description' => 'Best Car',
                'user_id' => '1'
            )
        );
    }



}
