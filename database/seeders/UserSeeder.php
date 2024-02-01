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
        /* Administrador */
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@minertecnologia.com',
            'password' => bcrypt('12345678'),
            'is_admin' => true,
        ]);

        /* Usuários padrões */
        User::create([
            'name' => 'Usuário padrão 1',
            'email' => 'user1@minertecnologia.com',
            'password' => bcrypt('12345678'),
            'is_admin' => false,
        ]);

        User::create([
            'name' => 'Usuário padrão 1',
            'email' => 'user2@minertecnologia.com',
            'password' => bcrypt('12345678'),
            'is_admin' => false,
        ]);
    }
}
