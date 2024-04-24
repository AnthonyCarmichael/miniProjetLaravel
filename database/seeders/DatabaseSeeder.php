<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
        $this->call([
            // Vous pouvez ajouter d’autres "seeders" en les séparant par des virgules.
            LangueSeeder::class,
            CategorieSeeder::class,
            ProduitSeeder::class,
            CategoriesLanguesSeeder::class,
            ProduitsLanguesSeeder::class,
            RoleSeeder::class
        ]);
    }
}
