<?php

namespace Database\Seeders;

use App\Enum\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => RolesEnum::ADMIN->value]);      # Administrator Role
        Role::create(['name' => RolesEnum::MENTOR->value]);     # Mentor Role
        Role::create(['name' => RolesEnum::OFFLINE->value]);    # Offline Student Role
        Role::create(['name' => RolesEnum::ONLINE->value]);     # Online Student Role
        Role::create(['name' => RolesEnum::SCHOOL->value]);     # School Role
    }
}
