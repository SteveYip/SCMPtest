<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert(['name' => 'super_admin',    'label' => 'Super Admin']);
        DB::table('roles')->insert(['name' => 'admin', 'label' => 'Admin']);


        DB::table('role_user')->insert(['role_id' => 1, 'user_id' => 1]);
        DB::table('role_user')->insert(['role_id' => 2, 'user_id' => 2]);

        DB::table('permissions')->insert(['name' => 'can_login',        'label' => 'Login']);
        DB::table('permissions')->insert(['name' => 'can_view_data', 'label' => 'See Data']);

        DB::table('permission_role')->insert(['permission_id' => 1, 'role_id' => 1]);
        DB::table('permission_role')->insert(['permission_id' => 2, 'role_id' => 1]);
        DB::table('permission_role')->insert(['permission_id' => 1, 'role_id' => 2]);
        
    }
}
