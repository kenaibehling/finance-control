<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expenses')->insert([
            'description' => 'Compra do mês',
            'value' => 340.56,
            'status' => 1,
            'card' => 1,
            'purchase_date' => now(),
            'category_id' => 1,
            'payment_method_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
