<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // ADMIN
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@agencia.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]);

        // AGENTE
        User::create([
            'name' => 'Agente 1',
            'email' => 'agente@agencia.com',
            'password' => Hash::make('12345678'),
            'role' => 'agente'
        ]);
    }
}
