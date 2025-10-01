<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Recipe;
use App\Models\RecipeCategory;
use App\Models\DifficultyLevel;
use App\Models\DietaryPreference;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::pluck('id')->toArray();
        $categories = RecipeCategory::pluck('id')->toArray();
        $difficulties = DifficultyLevel::pluck('id')->toArray();
        $diets = DietaryPreference::pluck('id')->toArray();

        if (empty($users) || empty($categories) || empty($difficulties)) {
            $this->command->warn('⚠️ Please seed Users, Categories, and Difficulty Levels first.');
            return;
        }

        for ($i = 0; $i < 10; $i++) {
            DB::transaction(function () use ($users, $categories, $difficulties, $diets) {
                $recipe = Recipe::create([
                    'id' => Str::uuid(),
                    'name' => fake()->sentence(3),
                    'description' => fake()->paragraph(),
                    'user_id' => fake()->randomElement($users),
                    'category_id' => fake()->randomElement($categories),
                    'difficulty_level_id' => fake()->randomElement($difficulties),
                    'ingredients' => fake()->words(6, true),
                    'instructions' => fake()->paragraphs(3, true),
                    'prep_time' => fake()->numberBetween(10, 60),
                    'cook_time' => fake()->numberBetween(15, 90),
                    'servings' => fake()->numberBetween(1, 6),
                    'image' => null,
                ]);

                // Nutrition
                $recipe->nutrition()->create([
                    'id' => Str::uuid(),
                    'calories' => fake()->numberBetween(200, 800),
                    'protein' => fake()->numberBetween(5, 40),
                    'carbohydrates' => fake()->numberBetween(20, 100),
                    'fat' => fake()->numberBetween(5, 30),
                    'fiber' => fake()->numberBetween(2, 15),
                ]);

                // Attach dietary preferences (0–2 random ones)
                if (!empty($diets)) {
                    $recipe->dietaryPreferences()->sync(fake()->randomElements($diets, fake()->numberBetween(0, 2)));
                }
            });
        }
    }
}
