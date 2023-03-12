<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::firstOrCreate(['name' => 'Administrator']);
        $user = User::firstOrCreate(
            ['email' => 'admin@webmasjid.org'],
            ['password' => bcrypt('bismillah'), 'name' => 'Admin', 'email_verified_at' => now()]
        );
        $user->assignRole($role);
    }
}
