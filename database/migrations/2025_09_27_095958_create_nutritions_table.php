<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nutritions', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('recipe_id');
            $table->foreign('recipe_id')
                ->references('id')
                ->on('recipes')
                ->onDelete('cascade');

            $table->integer('calories');
            $table->decimal('protein', 6, 2); // g
            $table->decimal('carbohydrates', 6, 2); // g
            $table->decimal('fat', 6, 2); // g
            $table->decimal('fiber', 6, 2); // g
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutritions');
    }
};
