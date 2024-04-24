<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProduitsLanguesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produits_langue')->insert([
            [
                'id_langue'=>'1',
                'id_produit' => '1',
                'produit' => 'Crayon de mine',
                'description' => 'Paquet de 10 crayons de marque HB'
            ],
            [
                'id_langue'=>'1',
                'id_produit' => '2',
                'produit' => 'Stylo bleu',
                'description' => 'Paquet de 10 stylos de marque BIC'
            ],
            [
                'id_langue'=>'1',
                'id_produit' => '3',
                'produit' => 'Calculatrice',
                'description' => 'Calculatrice de comptabilité'
            ],
            [
                'id_langue'=>'1',
                'id_produit' => '4',
                'produit' => 'Aiguisoir électrique',
                'description' => 'Aiguisoir électrique de marque GE'
            ],
            [
                'id_langue'=>'1',
                'id_produit' => '5',
                'produit' => 'Gomme à effacer',
                'description' => 'Paquet de 5 effaces'
            ],
            [
                'id_langue'=>'2',
                'id_produit' => '1',
                'produit' => 'Pencil',
                'description' => 'Pack of 10 HB pencils'
            ],
            [
                'id_langue'=>'2',
                'id_produit' => '2',
                'produit' => 'Blue pen',
                'description' => 'Pack of 10 blue pens from Bic brand'
            ],
            [
                'id_langue'=>'2',
                'id_produit' => '3',
                'produit' => 'Calculator',
                'description' => 'accounting calculator'
            ],
            [
                'id_langue'=>'2',
                'id_produit' => '4',
                'produit' => 'Electric sharpener',
                'description' => 'Electronic sharpener from GE brand'
            ],
            [
                'id_langue'=>'2',
                'id_produit' => '5',
                'produit' => 'Eraser',
                'description' => 'Pack of 5 erasers'
            ]
        ]);
    }
}
