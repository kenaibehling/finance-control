<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardsBrandsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cards_brands')->insert([
            'description' => 'MasterCard',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_brands')->insert([
            'description' => 'Visa',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_brands')->insert([
            'description' => 'Elo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_brands')->insert([
            'description' => 'American Express',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards_brands')->insert([
            'description' => 'Hipercard',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
