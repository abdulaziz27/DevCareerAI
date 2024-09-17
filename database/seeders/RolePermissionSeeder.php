<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $ownerRole = Role::create([
            'name' => 'owner'
        ]);

        $teacherRole = Role::create([
            'name' => 'teacher'
        ]);

        $studentRole = Role::create([
            'name' => 'student'
        ]);

        $userOwner = User::create([
            'name' => 'admin',
            'avatar' => 'images/default-avatar.png',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $userOwner->assignRole($ownerRole);
    }
}
