<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardsTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cards_types')->insert([
            'description' => 'Crédito',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Débito',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Crédito / Débito',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Loja (Crédito)',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Crédito',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Vale Alimentação',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Vale Refeição',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Vale Transporte',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Vale Combustível',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Outro',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
