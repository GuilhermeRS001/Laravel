<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Importando o DB

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            'name' => 'Lápis',
            'price' => 1.00,
            'description' => 'O lápis escreve histórias.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("products")->insert([
            'name' => 'caneta',
            'price' => 1.50,
            'description' => 'A caneta escreve histórias.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}