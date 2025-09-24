<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@csz.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Create regular user
        User::create([
            'name' => 'John Doe',
            'email' => 'user@csz.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);

        // Create additional test users
        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@csz.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Bob Wilson',
            'email' => 'bob@csz.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);
    }
}
