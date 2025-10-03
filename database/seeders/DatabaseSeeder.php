<?php

namespace Database\Seeders;

use App\Models\CommunityCategory;
use App\Models\CommunityPost;
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

        // Recipe templates (ingredients + instructions aligned)
        $recipes = [
            [
                'name' => 'Spaghetti Carbonara',
                'ingredients' => [
                    "400g spaghetti",
                    "200g pancetta or guanciale, diced",
                    "4 large eggs",
                    "100g Pecorino Romano cheese, grated",
                    "100g Parmigiano-Reggiano cheese, grated",
                    "Freshly ground black pepper",
                    "Salt for pasta water"
                ],
                'instructions' => [
                    "Bring a large pot of salted water to boil. Cook spaghetti until al dente.",
                    "In a skillet, cook pancetta until crispy.",
                    "Whisk eggs, cheeses, and black pepper together in a bowl.",
                    "Drain spaghetti, reserving some cooking water.",
                    "Toss spaghetti with pancetta and remove from heat.",
                    "Quickly stir in the egg mixture, adding pasta water if needed.",
                    "Serve with extra cheese and black pepper."
                ]
            ],
            [
                'name' => 'Chicken Stir Fry',
                'ingredients' => [
                    "500g chicken breast, sliced",
                    "1 onion, chopped",
                    "1 red bell pepper, diced",
                    "2 cloves garlic, minced",
                    "1 tbsp soy sauce",
                    "1 tsp chili flakes",
                    "1 tbsp olive oil"
                ],
                'instructions' => [
                    "Heat oil in a pan and sauté garlic until fragrant.",
                    "Add onion and bell pepper, cook until softened.",
                    "Add chicken and cook until browned.",
                    "Stir in soy sauce and chili flakes.",
                    "Simmer briefly and serve hot with rice."
                ]
            ],
            [
                'name' => 'Caprese Salad',
                'ingredients' => [
                    "200g cherry tomatoes, halved",
                    "200g fresh mozzarella, sliced",
                    "Fresh basil leaves",
                    "2 tbsp olive oil",
                    "1 tbsp balsamic glaze",
                    "Salt and pepper to taste"
                ],
                'instructions' => [
                    "Arrange tomato and mozzarella slices alternately on a plate.",
                    "Tuck basil leaves between slices.",
                    "Drizzle with olive oil and balsamic glaze.",
                    "Season with salt and pepper, then serve fresh."
                ]
            ],
            [
                'name' => 'Vegetable Omelette',
                'ingredients' => [
                    "3 large eggs",
                    "1 onion, diced",
                    "1 red bell pepper, diced",
                    "50g grated cheese",
                    "1 tbsp olive oil",
                    "Salt and pepper to taste"
                ],
                'instructions' => [
                    "Beat eggs with salt and pepper in a bowl.",
                    "Heat oil in a skillet, sauté onion and pepper until soft.",
                    "Pour in eggs and cook until nearly set.",
                    "Sprinkle cheese on top and fold omelette.",
                    "Cook for another minute, then serve."
                ]
            ],
            [
                'name' => 'Garlic Butter Shrimp',
                'ingredients' => [
                    "400g shrimp, peeled",
                    "3 cloves garlic, minced",
                    "2 tbsp butter",
                    "1 tbsp olive oil",
                    "1 tbsp lemon juice",
                    "Fresh parsley for garnish",
                    "Salt and pepper to taste"
                ],
                'instructions' => [
                    "Heat oil and butter in a pan.",
                    "Sauté garlic until fragrant.",
                    "Add shrimp and cook until pink.",
                    "Season with salt, pepper, and lemon juice.",
                    "Garnish with parsley and serve immediately."
                ]
            ],
            [
                'name' => 'Tomato Basil Pasta',
                'ingredients' => [
                    "300g spaghetti",
                    "200g cherry tomatoes",
                    "2 cloves garlic, minced",
                    "2 tbsp olive oil",
                    "Fresh basil leaves",
                    "Salt and pepper to taste"
                ],
                'instructions' => [
                    "Cook pasta until al dente.",
                    "In a skillet, sauté garlic in olive oil.",
                    "Add cherry tomatoes and cook until softened.",
                    "Toss in cooked pasta and basil leaves.",
                    "Season with salt and pepper, serve warm."
                ]
            ],
            [
                'name' => 'Classic Pancakes',
                'ingredients' => [
                    "200g flour",
                    "2 tbsp sugar",
                    "2 tsp baking powder",
                    "1 egg",
                    "250ml milk",
                    "2 tbsp butter, melted",
                    "Pinch of salt"
                ],
                'instructions' => [
                    "Mix flour, sugar, baking powder, and salt.",
                    "Whisk in milk, egg, and melted butter.",
                    "Heat a pan and pour batter to form pancakes.",
                    "Cook until bubbles form, then flip.",
                    "Serve warm with syrup or fruit."
                ]
            ],
            [
                'name' => 'Grilled Chicken Salad',
                'ingredients' => [
                    "2 chicken breasts",
                    "200g mixed salad greens",
                    "100g cherry tomatoes",
                    "1 cucumber, sliced",
                    "2 tbsp olive oil",
                    "1 tbsp lemon juice",
                    "Salt and pepper to taste"
                ],
                'instructions' => [
                    "Season chicken with salt and pepper, then grill until cooked.",
                    "Slice grilled chicken into strips.",
                    "Arrange greens, cucumber, and tomatoes in a bowl.",
                    "Top with grilled chicken.",
                    "Drizzle with olive oil and lemon juice, then serve."
                ]
            ],
            [
                'name' => 'Vegetable Soup',
                'ingredients' => [
                    "1 onion, chopped",
                    "2 carrots, diced",
                    "2 potatoes, diced",
                    "1 red bell pepper, diced",
                    "1L vegetable stock",
                    "2 tbsp olive oil",
                    "Salt and pepper to taste"
                ],
                'instructions' => [
                    "Heat oil in a pot and sauté onion until soft.",
                    "Add carrots, potatoes, and bell pepper.",
                    "Pour in vegetable stock and bring to a boil.",
                    "Simmer until vegetables are tender.",
                    "Season with salt and pepper, then serve warm."
                ]
            ]
        ];

        // Insert recipes
        foreach ($recipes as $data) {
            $recipe = Recipe::create([
                'id' => Str::uuid(),
                'name' => $data['name'],
                'description' => fake()->paragraph(),
                'user_id' => 1, // Or $user->id if you have a user
                'category_id' => fake()->randomElement($categories),
                'difficulty_level_id' => fake()->randomElement($difficulties),
                'ingredients' => implode("\n", $data['ingredients']),
                'instructions' => implode("\n", $data['instructions']),
                'prep_time' => fake()->numberBetween(10, 40),
                'cook_time' => fake()->numberBetween(10, 50),
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
            $recipe->dietaryPreferences()->sync(
                fake()->randomElements($diets, fake()->numberBetween(0, 2))
            );

            // $community_categories = [
            //     'Healthy & Wellness',
            //     'Quick & Easy',
            //     'Global Flavors',
            //     'Comfort Food',
            //     'Desserts & Baking',
            //     'Budget-Friendly'
            // ];

            // foreach ($community_categories as $community_category) {
            //     CommunityCategory::firstOrCreate([
            //         'name' => $community_category
            //     ]);
            // }

            // $categories = CommunityCategory::pluck('id', 'name')->toArray();

            $posts = [
                [
                    'title' => '5 Easy Breakfast Ideas for Busy Mornings',
                    'slug' => '5-easy-breakfast-ideas',
                    'content' => 'Start your day right with these quick and healthy breakfast options. From overnight oats to smoothie bowls, these recipes will keep you full and energized without taking up much of your time.',
                    'category' => 'Quick & Easy',
                    'image' => 'https://source.unsplash.com/800x600/?breakfast,healthy'
                ],
                [
                    'title' => 'The Benefits of a Mediterranean Diet',
                    'slug' => 'benefits-of-mediterranean-diet',
                    'content' => 'The Mediterranean diet is one of the most researched eating patterns in the world. Learn how it supports heart health, boosts energy, and introduces flavorful meals inspired by the Mediterranean region.',
                    'category' => 'Healthy & Wellness',
                    'image' => 'https://source.unsplash.com/800x600/?mediterranean,food'
                ],
                [
                    'title' => 'Exploring Thai Street Food',
                    'slug' => 'exploring-thai-street-food',
                    'content' => 'Thailand’s street food scene is vibrant, diverse, and incredibly flavorful. Here’s a guide to must-try dishes like Pad Thai, Som Tum, and Mango Sticky Rice.',
                    'category' => 'Global Flavors',
                    'image' => 'https://source.unsplash.com/800x600/?thai,streetfood'
                ],
                [
                    'title' => 'Cozy Soups to Warm You Up This Winter',
                    'slug' => 'cozy-soups-for-winter',
                    'content' => 'Nothing beats a warm bowl of soup on a chilly day. From creamy tomato to hearty chicken noodle, discover comforting soup recipes perfect for cold evenings.',
                    'category' => 'Comfort Food',
                    'image' => 'https://source.unsplash.com/800x600/?soup,winter'
                ],
                [
                    'title' => 'Budget-Friendly Dinners Under $10',
                    'slug' => 'budget-friendly-dinners-under-10',
                    'content' => 'Eating well doesn’t have to break the bank. These budget-friendly meals are delicious, nutritious, and cost less than $10 per serving.',
                    'category' => 'Budget-Friendly',
                    'image' => 'https://source.unsplash.com/800x600/?budget,meal'
                ],
                [
                    'title' => 'Chocolate Cake That Always Impresses',
                    'slug' => 'chocolate-cake-that-impresses',
                    'content' => 'Learn how to make a moist, rich chocolate cake that is guaranteed to wow your friends and family. This simple recipe is a crowd-pleaser for any occasion.',
                    'category' => 'Desserts & Baking',
                    'image' => 'https://source.unsplash.com/800x600/?chocolate,cake'
                ],
                [
                    'title' => 'Meal Prep Tips for a Healthier Week',
                    'slug' => 'meal-prep-tips-for-healthier-week',
                    'content' => 'Meal prepping can save time, reduce stress, and help you stick to your health goals. Here are 5 practical tips to make your meal prep routine effective and enjoyable.',
                    'category' => 'Healthy & Wellness',
                    'image' => 'https://source.unsplash.com/800x600/?mealprep,healthy'
                ],
            ];

            foreach ($posts as $post) {
                $category = CommunityCategory::firstOrCreate(['name' => $post['category']]);

                CommunityPost::firstOrCreate(
                    ['slug' => $post['slug']],
                    [
                        'title' => $post['title'],
                        'slug' => $post['slug'],
                        'content' => $post['content'],
                        'image' => $post['image'],
                        'category_id' => $category->id, // 👈 direct assignment
                        'user_id' => 1,
                        'published_at' => now(),
                    ]
                );
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
