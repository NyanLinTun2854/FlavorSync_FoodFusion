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
        Schema::create('recipes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->text('description');
            $table->text('ingredients');
            $table->longText('instructions');

            $table->foreignId('user_id')->constrained("users")->onDelete('cascade');

            $table->uuid('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('recipe_categories') // or the correct table name
                ->onDelete('cascade');

            $table->uuid('difficulty_level_id');
            $table->foreign('difficulty_level_id')
                ->references('id')
                ->on('difficulty_levels') // or the correct table name
                ->onDelete('cascade');

            $table->integer('prep_time');   // minutes
            $table->integer('cook_time');   // minutes
            $table->integer('servings');

            $table->string('image')->nullable();

            $table->string('is_approved')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
