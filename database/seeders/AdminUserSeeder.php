<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar usuário administrador padrão
        User::firstOrCreate(
            ['email' => 'admin@bocayuvatintas.com.br'],
            [
                'name' => 'Administrador',
                'email' => 'admin@bocayuvatintas.com.br',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // Criar usuário Luis Felipe
        User::firstOrCreate(
            ['email' => 'luisfelipearaujopimenta@gmail.com'],
            [
                'name' => 'Luis Felipe',
                'email' => 'luisfelipearaujopimenta@gmail.com',
                'password' => Hash::make('Mp13151319'),
                'email_verified_at' => now(),
            ]
        );

        $this->command->info('Usuários administradores criados:');
        $this->command->info('1. Email: admin@bocayuvatintas.com.br | Senha: admin123');
        $this->command->info('2. Email: luisfelipearaujopimenta@gmail.com | Senha: Mp13151319');
        $this->command->warn('Lembre-se de alterar as senhas após o primeiro login!');
    }
}
