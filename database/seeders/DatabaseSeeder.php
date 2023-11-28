<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(CardsBrandsSeeder::class);
        $this->call(CardsTypesSeeder::class);
        $this->call(CardsStatusesSeeder::class);
        $this->call(ExpensesCategoriesSeeder::class);
        $this->call(ExpensesStatusesSeeder::class);
        $this->call(PaymentMethodsSeeder::class);
        $this->call(CardsProvidersSeeder::class);
        $this->call(CardsSeeder::class);
        $this->call(ExpensesSeeder::class);
    }
}
