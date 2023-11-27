<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {

            $table->id();
            $table->string('description', 128);
            $table->decimal('value', '8', '2')->default(0.00);
            $table->unsignedBigInteger('payment_method_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('status');
            $table->unsignedInteger('installments')->default(1);
            $table->unsignedBigInteger('card');
            $table->date('purchase_date');
            $table->timestamps();

            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
            $table->foreign('category_id')->references('id')->on('expenses_categories');
            $table->foreign('status')->references('id')->on('cards_statuses');
            $table->foreign('card')->references('id')->on('cards');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
