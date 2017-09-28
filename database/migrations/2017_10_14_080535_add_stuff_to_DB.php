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


        // Insert some Group
        DB::table('groups')->insert(
            array(
                'group_name' => 'Comics',
                'is_assigned' => '0',
                'is_approved' => '0'
            )
        );

        DB::table('groups')->insert(
            array(
                'group_name' => 'HR',
                'is_assigned' => '0',
                'is_approved' => '0'
            )
        );

        DB::table('groups')->insert(
            array(
                'group_name' => 'IT',
                'is_assigned' => '0',
                'is_approved' => '0'
            )
        );

        // Insert some vehicle
        DB::table('vehicles')->insert(
            array(
                'model' => 'Lamborghini',
                'color' => 'Blue',
                'reg_no' => 'KKK 012 K',
                'description' => 'Best Car',
                'is_used' => '0',
                'group_id' => '2'
            )
        );

        DB::table('vehicles')->insert(
            array(
                'model' => 'Mercedes',
                'color' => 'Grey',
                'reg_no' => 'KMM 111 M',
                'description' => 'Good Car',
                'is_used' => '0',
                'group_id' => '1'
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
                'dob' => '1975',
                'email' => 'user@mail.com',
                'password' => bcrypt('user12'),
                'vehicle_id' => '1',
                'group_id' => '1'
            )
        );

        DB::table('users')->insert(
            array(
                'firstname' => 'Sean',
                'middlename' => 'William',
                'lastname' => 'Scott',
                'gender' => 'Male',
                'phone_no' => '0786001154',
                'id_no' => '00982533',
                'dob' => '1988',
                'email' => 'sean@mail.com',
                'password' => bcrypt('sean12'),
                'vehicle_id' => '1',
                'group_id' => '1'
            )
        );

        DB::table('users')->insert(
            array(
                'firstname' => 'Jane',
                'middlename' => 'Kelly',
                'lastname' => 'Carey',
                'gender' => 'Female',
                'phone_no' => '0776342122',
                'id_no' => '06903233',
                'dob' => '1970',
                'email' => 'jane@mail.com',
                'password' => bcrypt('jane12'),
                'vehicle_id' => '2',
                'group_id' => '2'
            )
        );

        DB::table('users')->insert(
            array(
                'firstname' => 'Rita',
                'middlename' => 'Orah',
                'lastname' => 'Brown',
                'gender' => 'Female',
                'phone_no' => '0754098122',
                'id_no' => '09126573',
                'dob' => '1993',
                'email' => 'rita@mail.com',
                'password' => bcrypt('rita12'),
                'vehicle_id' => '2',
                'group_id' => '2'
            )
        );

        DB::table('users')->insert(
            array(
                'firstname' => 'Bill',
                'middlename' => 'Gates',
                'lastname' => 'Guru',
                'gender' => 'Male',
                'phone_no' => '0757831022',
                'id_no' => '08673293',
                'dob' => '1964',
                'email' => 'bill@mail.com',
                'password' => bcrypt('bill12'),
                'vehicle_id' => '1',
                'group_id' => '3'
            )
        );

        DB::table('users')->insert(
            array(
                'firstname' => 'Denis',
                'middlename' => 'Ritchie',
                'lastname' => 'C',
                'gender' => 'Male',
                'phone_no' => '0578462492',
                'id_no' => '08465013',
                'dob' => '1940',
                'email' => 'denis@mail.com',
                'password' => bcrypt('denis12'),
                'vehicle_id' => '1',
                'group_id' => '3'
            )
        );


    }



}
