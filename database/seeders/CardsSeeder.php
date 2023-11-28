<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cards')->insert([
            'name' => 'Nubank 400c',
            'type_id' => 3,
            'provider_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards')->insert([
            'name' => 'Inter (Pessoal)',
            'type_id' => 2,
            'provider_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards')->insert([
            'name' => 'Itaú (Salário)',
            'type_id' => 3,
            'provider_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
