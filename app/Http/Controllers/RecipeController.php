<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeCreateRequest;
use App\Models\DietaryPreference;
use App\Models\DifficultyLevel;
use App\Models\Recipe;
use App\Models\RecipeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RecipeController extends Controller
{
    // public function index()
    // {
    //     $categories = RecipeCategory::pluck('name', 'id')->toArray();

    //     $difficulty_levels = DifficultyLevel::pluck('name', 'id')->toArray();

    //     $dietary_preference = DietaryPreference::pluck('name', 'id')->toArray();

    //     return view("recipes.index", ["categories" => $categories, "difficulty_levels" => $difficulty_levels, "dietary_preference" => $dietary_preference]);
    // }

    public function index(Request $request)
    {
        $categories = RecipeCategory::pluck('name', 'id')->toArray();
        $difficulty_levels = DifficultyLevel::pluck('name', 'id')->toArray();
        $dietary_preference = DietaryPreference::pluck('name', 'id')->toArray();

        $recipes = Recipe::with(['category', 'difficultyLevel', 'dietaryPreferences'])
            ->where('is_approved', '1')
            ->when($request->search_txt, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            })
            ->when($request->category_id, fn($query, $cat) => $query->where('category_id', $cat))
            ->when($request->difficulty_level_id, fn($query, $diff) => $query->where('difficulty_level_id', $diff))
            ->when($request->dietary_preference_id, function ($query, $diet) {
                $query->whereHas('dietaryPreferences', fn($q) => $q->where('id', $diet));
            })
            ->latest()
            ->paginate(6)
            ->withQueryString();

        return view("recipes.index", [
            "categories" => $categories,
            "difficulty_levels" => $difficulty_levels,
            "dietary_preference" => $dietary_preference,
            "recipes" => $recipes,
        ]);
    }


    public function show($id)
    {// Find recipe by id or fail with 404
        $recipe = Recipe::with(['category', 'difficultyLevel', 'nutrition', 'dietaryPreferences', 'user'])
            ->findOrFail($id);

        // dd($recipe);

        $recipe->instructions = array_filter(
            array_map('trim', preg_split("/[\n\/]+/", $recipe->instructions))
        );

        $recipe->ingredients = array_filter(
            array_map('trim', preg_split("/[\n\/]+/", $recipe->ingredients))
        );

        return view("recipes.show", ["recipe" => $recipe]);
    }

    public function create()
    {
        $categories = RecipeCategory::pluck('name', 'id')->toArray();

        $difficulty_levels = DifficultyLevel::pluck('name', 'id')->toArray();

        $dietary_preference = DietaryPreference::pluck('name', 'id')->toArray();

        return view("recipes.create", ["categories" => $categories, "difficulty_levels" => $difficulty_levels, "dietary_preference" => $dietary_preference]);
    }

    public function store(RecipeCreateRequest $request)
    {
        $data = $request->validated();

        try {
            DB::beginTransaction();

            // Handle image upload
            $imagePath = null;
            if (!empty($data['image'])) {
                $imagePath = $data['image']->store('posts', 'public');
            }

            // Create recipe
            $recipe = Recipe::create([
                'name' => $data['name'],
                'description' => $data['description'] ?? null,
                'user_id' => auth()->id(),
                'category_id' => $data['category_id'],
                'difficulty_level_id' => $data['difficulty_level_id'],
                'ingredients' => $data['ingredients'] ?? null,
                'instructions' => $data['instructions'] ?? null,
                'prep_time' => $data['prep_time'] ?? null,
                'cook_time' => $data['cook_time'] ?? null,
                'servings' => $data['servings'] ?? null,
                'image' => $imagePath,
            ]);

            // Nutrition
            $recipe->nutrition()->create([
                'calories' => $data['calories'] ?? 0,
                'protein' => $data['protein'] ?? 0,
                'carbohydrates' => $data['carbohydrates'] ?? 0,
                'fat' => $data['fat'] ?? 0,
                'fiber' => $data['fiber'] ?? 0,
            ]);

            // Dietary Preferences
            if (!empty($data['diet_preferences'])) {
                $recipe->dietaryPreferences()->sync($data['diet_preferences']);
            }

            DB::commit();

            return redirect()->route('recipes.index')->with('toast', [
                'title' => 'Recipe Created Successfully!',
                'type' => 'success',
            ]);
        } catch (\Throwable $e) {
            DB::rollBack();

            // Log full error for debugging
            Log::error('Recipe creation failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            // Return error toast
            return redirect()->back()->with('toast', [
                'title' => 'Recipe creation failed!',
                'type' => 'error',
                'description' => [$e->getMessage()], // pass error messages array
            ]);
        }
    }

    public function community()
    {
        $categories = RecipeCategory::pluck('name', 'id')->toArray();

        $difficulty_levels = DifficultyLevel::pluck('name', 'id')->toArray();

        $dietary_preference = DietaryPreference::pluck('name', 'id')->toArray();

        return view("community", ["categories" => $categories, "difficulty_levels" => $difficulty_levels, "dietary_preference" => $dietary_preference]);
    }
}
