<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardsStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cards_statuses')->insert([
            'description' => 'Ativo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_statuses')->insert([
            'description' => 'Inativo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_statuses')->insert([
            'description' => 'Bloqueado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_statuses')->insert([
            'description' => 'Cancelado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_statuses')->insert([
            'description' => 'Expirado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_statuses')->insert([
            'description' => 'Suspenso',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_statuses')->insert([
            'description' => 'Perdido / Roubado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_statuses')->insert([
            'description' => 'Estourado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
