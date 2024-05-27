<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin.repositorio@cpilosenlaces.com',
            'password' => 'admin'
        ]);
        User::factory()->create([
            'name' => 'comercio',
            'email' => 'comercio@cpilosenlaces.com',
            'password' => 'comercio'
        ]);
        User::factory()->create([
            'name' => 'imagen',
            'email' => 'imagen@cpilosenlaces.com',
            'password' => 'imagen'
        ]);
        User::factory()->create([
            'name' => 'informatica',
            'email' => 'informatica@cpilosenlaces.com',
            'password' => 'informatica'
        ]);
    }
}
