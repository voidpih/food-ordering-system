<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create(
            [
                [
                    'name' => 'Ahmad Afifuddin',
                    'email' => 'apih@admin.com',
                    'role' => 1,
                    'password' => '1234'
                ],
                [
                    'name' => 'Siti Nur Fatihah',
                    'email' => 'tyha@manager.com',
                    'role' => 2,
                    'password' => '1234'
                ],
                [
                    'name' => 'Fatimah Az-zahra',
                    'email' => 'fatimah@user.com',
                    'role' => 3,
                    'password' => '1234'
                ]
            ]
        );
    }
}
