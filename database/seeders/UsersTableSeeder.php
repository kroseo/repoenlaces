<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('admin')
        ]);
        User::factory()->create([
            'name' => 'comercio',
            'email' => 'comercio@cpilosenlaces.com',
            'password' => Hash::make('comercio')
        ]);
        User::factory()->create([
            'name' => 'imagen',
            'email' => 'imagen@cpilosenlaces.com',
            'password' => Hash::make('imagen')
        ]);
        User::factory()->create([
            'name' => 'informatica',
            'email' => 'informatica@cpilosenlaces.com',
            'password' => Hash::make('informatica')
        ]);
        User::factory()->create([
            'name' => 'informatica',
            'email' => 'ruben.manero@cpilosenlaces.com',
            'password' => Hash::make('losenlaces')
        ]);
        User::factory()->create([
            'name' => 'comercio',
            'email' => 'juan.lopez@cpilosenlaces.com',
            'password' => Hash::make('losenlaces')
        ]);
        User::factory()->create([
            'name' => 'comercio',
            'email' => 'antonio.medrano@cpilosenlaces.com',
            'password' => Hash::make('losenlaces')
        ]);
        User::factory()->create([
            'name' => 'imagen',
            'email' => 'laura.cachon@cpilosenlaces.com',
            'password' => Hash::make('losenlaces')
        ]);
        User::factory()->create([
            'name' => 'imagen',
            'email' => 'javier.arriaga@cpilosenlaces.com',
            'password' => Hash::make('losenlaces')
        ]);
    }
}
