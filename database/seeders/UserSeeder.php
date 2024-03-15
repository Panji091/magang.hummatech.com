<?php

namespace Database\Seeders;

use App\Enum\RolesEnum;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@example.com',
        ])->assignRole(RolesEnum::ADMIN);

        User::factory()->create([
            'name' => 'Test User Siswa Offline',
            'email' => 'siswa_offline@example.com',
        ])->assignRole(RolesEnum::OFFLINE);

        User::factory()->create([
            'name' => 'Test User Siswa Online',
            'email' => 'siswa_online@example.com',
        ])->assignRole(RolesEnum::ONLINE);
    }
}
