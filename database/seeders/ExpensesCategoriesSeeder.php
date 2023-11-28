<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpensesCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expenses_categories')->insert([
            'description' => 'Mercado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('expenses_categories')->insert([
            'description' => 'Moradia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Alimentação',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Transporte',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Saúde',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Educação',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Lazer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Roupas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Seguros',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Empréstimos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Dívidas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Imposto',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Viagem',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Investimento',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Casa',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_types')->insert([
            'description' => 'Outros',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
