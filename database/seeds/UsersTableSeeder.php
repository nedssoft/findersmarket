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
        $users = [
            [
                'email' => 'admin@fm.ng',
                'name' => 'ADMIN',
                'password' => bcrypt('admin@fm'),
            ]
        ];

        DB::table('users')->insert($users);
    }
}
