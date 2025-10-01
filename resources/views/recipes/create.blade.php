@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <section class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Recipe
                <span class="text-primary">Create</span>
            </h1>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                Discover amazing recipes from around the world, carefully curated and organized by cuisine, difficulty, and
                dietary
                preferences
            </p>
        </section>

        <div class="bg-card rounded-xl shadow-sm border p-6 flex flex-col gap-6" id="share-recipe-section"
            data-community-section="share-recipe">
            <div class="space-y-2">
                <h4 class="font-semibold text-2xl">Share Your Recipe</h4>
                <p class="text-muted-foreground">Share your favorite recipe with the FoodFusion community and inspire
                    fellow food enthusiasts</p>
            </div>
            <form class="space-y-6" action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-4">
                    <h6 class="text-lg font-semibold">Basic Information</h6>
                    <x-text-input field="name" title="Recipe Title" placeholder="Enter your recipe title"
                        :isMandatory="true" />
                    <x-text-area field="description" title="Description"
                        placeholder="Describe your recipe in a few sentences" :isMandatory="true" />
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <x-select field="category_id" label="Category" :options="$categories" placeholder="Select category"
                            width="w-full md:w-auto" :isMandatory="true" />
                        <x-select field="difficulty_level_id" label="Difficult Level" :options="$difficulty_levels"
                            placeholder="Select difficulty" width="w-full md:w-auto" :isMandatory="true" />
                    </div>
                </div>
                <div class="space-y-4">
                    <h6 class="text-lg font-semibold">Recipe Details</h6>
                    <x-text-area field="ingredients" title="Ingredients"
                        placeholder="List all ingredients (one per line or separated by commas)" :isMandatory="true" />
                    <x-text-area field="instructions" title="Instructions"
                        placeholder="Provide step-by-step cooking instructions" :isMandatory="true" />
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <x-text-input field="prep_time" type="number" title="Prep Time (minutes)" placeholder="15" />
                        <x-text-input field="cook_time" type="number" title="Cook Time (minutes)" placeholder="30" />
                        <x-text-input field="servings" type="number" title="Servings" placeholder="4" />
                    </div>
                </div>
                <div class="space-y-4">
                    <h6 class="text-lg font-semibold">Nutrition Information</h6>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <x-text-input field="calories" type="number" title="Calories" placeholder="0" />
                        <x-text-input field="protein" type="number" title="Protein" placeholder="0" />
                        <x-text-input field="carbohydrates" type="number" title="Carbohydrates" placeholder="0" />
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <x-text-input field="fat" type="number" title="Fat" placeholder="0" />
                        <x-text-input field="fiber" type="number" title="Fiber" placeholder="0" />
                    </div>
                </div>
                <div class="space-y-4">
                    <h6 class="text-lg font-semibold">Dietary Preferences</h6>
                    <x-checkbox-group field="diet_preferences" label="Select all that apply to your recipe"
                        :options="$dietary_preference" />

                </div>
                <div class="space-y-4">
                    <h6 class="text-lg font-semibold">Recipe Image</h6>
                    <x-file-input field="image" title="Upload Image" placeholder="No file chosen" :isMandatory="true" />
                </div>
                <button data-slot="button" type="submit"
                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all shrink-0 outline-none bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 w-full h-10 rounded-md gap-1.5 px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-plus mr-2 h-4 w-4">
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
                    </svg>
                    Submit Recipe
                </button>
            </form>
        </div>
    </main>
@endsection