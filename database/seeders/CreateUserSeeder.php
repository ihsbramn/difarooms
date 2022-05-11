<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@difarooms.com',
                'is_admin' => '1',
                'password' => bcrypt('admin432'),
            ],
            [
                'name' => 'dummy_user1',
                'email' => 'dummy1@difarooms.com',
                'is_admin' => '0',
                'password' => bcrypt('dummy432'),
            ],
            [
                'name' => 'dummy_user2',
                'email' => 'dummy2@difarooms.com',
                'is_admin' => '0',
                'password' => bcrypt('dummy432'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
