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
        DB::table('users')->insert([
            'name' => 'admin user',
            'email' => 'admin_user@test.com',
            'password' => bcrypt('compare'),
            'active'=>1
        ]);
    }
}
