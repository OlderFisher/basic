<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.admin',
            'password' => Hash::make('password')
        ]);
        $this->call([
            CompaniesSeeder::class,
            EmployeesSeeder::class,
            CategorySeeder::class,
            PostsSeeder::class
        ]);
    }
}
