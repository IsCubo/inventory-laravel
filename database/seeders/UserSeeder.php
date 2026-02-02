<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'ADMIN')->first();
        $userRole = Role::where('name', 'USER')->first();
        $adminUser = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
        ]);
        User::factory(9)->create()->each(function ($user) use ($userRole) {
            $user->roles()->sync($userRole->id);
        });
        $adminUser->roles()->sync($adminRole->id);
    }
}
