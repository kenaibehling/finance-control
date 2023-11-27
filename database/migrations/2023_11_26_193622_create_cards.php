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
        Schema::create('cards', function (Blueprint $table) {

            $table->id();
            $table->string("description", 32);
            $table->unsignedBigInteger("type_id");
            $table->unsignedBigInteger("provider_id");
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('cards_types');
            $table->foreign('provider_id')->references('id')->on('cards_providers');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
