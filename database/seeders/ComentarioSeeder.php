<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comentarios')->insert([
            'postagem_id' => 1,
            'user_id' => 1,
            'conteudo' => 'Achei muito legal para não dizer o contrário!',
        ]);

        DB::table('comentarios')->insert([
            'postagem_id' => 1,
            'user_id' => 1,
            'conteudo' => 'Você calado eh um poeta!',
        ]);

    }
}
