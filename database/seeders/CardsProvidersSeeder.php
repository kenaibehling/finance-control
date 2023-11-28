<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardsProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cards_providers')->insert([
            'name' => 'Nubank',
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_providers')->insert([
            'name' => 'Inter',
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_providers')->insert([
            'name' => 'MercadoPago',
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_providers')->insert([
            'name' => 'itaú',
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
