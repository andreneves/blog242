<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'André Neves - ADMIN',
            'email' => 'andr@admin.com.br',
            'password' => Hash::make('123456789'),
            'perfil' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'André Neves - PADRAO',
            'email' => 'andr@padrao.com.br',
            'password' => Hash::make('123456789'),
            'perfil' => 'padrao',
        ]);

    }
}
