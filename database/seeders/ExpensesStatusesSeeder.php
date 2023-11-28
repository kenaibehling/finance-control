<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpensesStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expenses_statuses')->insert([
            'description' => 'Pago',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('expenses_statuses')->insert([
            'description' => 'Pendente',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('expenses_statuses')->insert([
            'description' => 'Reembolso',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
