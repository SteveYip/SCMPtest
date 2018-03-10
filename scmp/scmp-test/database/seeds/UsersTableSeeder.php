<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' =>'super admin',
            'username' => 'steve',
            'email' => 'steveriven94@gmail.com',
            'password' => bcrypt('12341234'),
            'type' => 'staff',
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => '1234@1234.com',
            'password' => bcrypt('12341234'),
            'username' => 'admin',
            'type' => 'staff',
        ]);
    }
}
