<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FuncionarioSeeder::class,
            UserSeeder::class,
            CategoriaSeeder::class,
            PostagemSeeder::class,
            ComentarioSeeder::class,
            CurtidaSeeder::class,
            DenunciaPostagemSeeder::class,
        ]);
    }
}
