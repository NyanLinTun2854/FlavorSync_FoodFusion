<?php

namespace Database\Seeders;

use App\Models\CommunityCategory;
use App\Models\User;
use App\Models\Recipe;
use App\Models\RecipeCategory;
use App\Models\DifficultyLevel;
use App\Models\DietaryPreference;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed test user
        $user = User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
        ]);

        // Seed Recipe Categories
        $recipe_categories = [
            'Italian',
            'Asian',
            'Mexican',
            'Mediterranean',
            'American',
            'Vegetarian',
            'Desserts',
            'Breakfast',
            'Appetizers',
            'Soups & Stews'
        ];
        foreach ($recipe_categories as $recipe_category) {
            RecipeCategory::create(['name' => $recipe_category]);
        }

        // Seed Difficulty Levels
        $difficulty_levels = ['Beginner', 'Intermediate', 'Advanced', 'Expert'];
        foreach ($difficulty_levels as $difficulty_level) {
            DifficultyLevel::create(['name' => $difficulty_level]);
        }

        // Seed Dietary Preferences
        $dietary_preferences = [
            'Vegetarian',
            'Vegan',
            'Gluten-Free',
            'Diatary-Free',
            'Low-Carb',
            'Keto',
            'Paleo',
            'Nut-Free'
        ];
        foreach ($dietary_preferences as $dietary_preference) {
            DietaryPreference::create(['name' => $dietary_preference]);
        }

        // Gather IDs
        $categories = RecipeCategory::pluck('id')->toArray();
        $difficulties = DifficultyLevel::pluck('id')->toArray();
        $diets = DietaryPreference::pluck('id')->toArray();

        // Example ingredient pool
        $ingredientPool = [
            "400g spaghetti",
            "200g pancetta or guanciale, diced",
            "4 large eggs",
            "100g Pecorino Romano cheese, grated",
            "100g Parmigiano-Reggiano cheese, grated",
            "Freshly ground black pepper",
            "Salt for pasta water",
            "2 cloves garlic, minced",
            "1 tbsp olive oil",
            "500g chicken breast",
            "1 onion, chopped",
            "1 red bell pepper, diced",
            "1 tbsp soy sauce",
            "1 tsp chili flakes",
            "200g cherry tomatoes"
        ];

        // Example instruction pool
        $instructionPool = [
            "Bring a large pot of salted water to boil. Cook spaghetti according to package directions until al dente.",
            "While pasta cooks, heat a large skillet over medium heat. Add pancetta and cook until crispy, about 5-7 minutes.",
            "In a bowl, whisk together eggs, both cheeses, and a generous amount of black pepper.",
            "Reserve 1 cup of pasta cooking water before draining the spaghetti.",
            "Add hot, drained pasta to the skillet with pancetta. Remove from heat.",
            "Quickly pour the egg mixture over the pasta, tossing constantly to create a creamy sauce. Add pasta water as needed.",
            "Serve immediately with extra cheese and black pepper.",
            "Heat oil in a pan and sauté garlic until fragrant.",
            "Add onion and bell pepper, cook until soft.",
            "Stir in chicken and cook until browned.",
            "Add soy sauce and chili flakes, stir well.",
            "Simmer for 10 minutes.",
            "Serve hot with fresh herbs."
        ];

        // Create recipes
        for ($i = 0; $i < 10; $i++) {
            $ingredients = implode("\n", array_rand_values($ingredientPool, rand(5, 8)));
            $instructions = implode("\n", array_rand_values($instructionPool, rand(5, 8)));

            $recipe = Recipe::create([
                'id' => Str::uuid(),
                'name' => fake()->sentence(3),
                'description' => fake()->paragraph(),
                'user_id' => $user->id,
                'category_id' => fake()->randomElement($categories),
                'difficulty_level_id' => fake()->randomElement($difficulties),
                'ingredients' => $ingredients,
                'instructions' => $instructions,
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

            // Attach random dietary preferences
            $recipe->dietaryPreferences()->sync(fake()->randomElements($diets, fake()->numberBetween(0, 2)));

            $community_categories = [
                'Healthy & Wellness',
                'Quick & Easy',
                'Global Flavors',
                'Comfort Food',
                'Desserts & Baking',
                'Budget-Friendly'
            ];

            foreach ($community_categories as $community_category) {
                CommunityCategory::firstOrCreate([
                    'name' => $community_category
                ]);
            }

        }
    }
}

/**
 * Helper function to get random values from array without keys
 */
function array_rand_values(array $array, int $count): array
{
    $keys = array_rand($array, $count);
    return array_map(fn($k) => $array[$k], (array) $keys);
}
