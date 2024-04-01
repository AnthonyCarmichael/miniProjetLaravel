<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id_categorie' => 1,
            'categorie' => 'Papeterie',
            'description' => 'Article de bureau en lien avec la papeterie'],
            ['id_categorie' => 2,
            'categorie' => 'Électronique',
            'description' => 'Article de bureau électronique']
            ]);
    }
}
