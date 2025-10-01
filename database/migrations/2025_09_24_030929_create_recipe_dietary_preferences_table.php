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
        Schema::create('recipe_dietary_preferences', function (Blueprint $table) {

            $table->uuid('recipe_id');
            $table->uuid('preference_id');
            $table->timestamps();

            $table->foreign('recipe_id')
                ->references('id')
                ->on('recipes') // or the correct table name
                ->onDelete('cascade');
            $table->foreign('preference_id')
                ->references('id')
                ->on('dietary_preferences')
                ->onDelete('cascade');

            $table->primary(['recipe_id', 'preference_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_dietary_preferences');
    }
};
