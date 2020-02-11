<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'password' => Hash::make('Auto1234'),
                'is_admin' => 1
            ],
            [
                'name' => 'User',
                'email' => 'user@test.com',
                'password' => Hash::make('Auto1234'),
                'is_admin' => 0
            ],
        ];
        foreach($users as $user) {
            User::create($user);
        }
    }
}
