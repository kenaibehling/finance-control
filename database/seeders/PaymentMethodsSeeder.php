<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_methods')->insert([
            'description' => 'Boleto',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('payment_methods')->insert([
            'description' => 'Pix',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('payment_methods')->insert([
            'description' => 'Dinheiro',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('payment_methods')->insert([
            'description' => 'Transferência Bancária',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('payment_methods')->insert([
            'description' => 'Escambo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('payment_methods')->insert([
            'description' => 'Cheque',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('payment_methods')->insert([
            'description' => 'Pagamento Recorrente',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('payment_methods')->insert([
            'description' => 'Voucher',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('payment_methods')->insert([
            'description' => 'Criptomoedas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('payment_methods')->insert([
            'description' => 'Cartão',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
