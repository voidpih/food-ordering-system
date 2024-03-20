<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Ahmad Afifuddin',
                'email' => 'apih@admin',
                'role' => 'admin',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'Siti Nur Fatihah',
                'email' => 'apih@manager.com',
                'role' => 'manager',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'Fatimah Az-Zahra',
                'email' => 'fatimah@customer.com',
                'role' => 'customer',
                'password' => bcrypt('1234')
            ]
        ];

        foreach ($userData as $user) {
            \App\Models\User::create($user);
        }
    }
}
