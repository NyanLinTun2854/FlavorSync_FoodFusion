@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <section class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Recipe
                <span class="text-primary">Collection</span>
            </h1>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                Discover amazing recipes from around the world, carefully curated and organized by cuisine, difficulty, and
                dietary
                preferences
            </p>
        </section>

        <!-- Add & Filtering Card -->
        <section>
            @auth
                <div class="mb-4">
                    <a data-slot="button" href="{{ route('recipes.create') }}"
                        class="w-full md:w-[200px] inline-flex items-center justify-center whitespace-nowrap text-sm cursor-pointer font-medium transition-all shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-8 rounded-md gap-1.5 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-plus-icon lucide-plus">
                            <path d="M5 12h14" />
                            <path d="M12 5v14" />
                        </svg>
                        Add Recipe
                    </a>
                </div>
            @endauth
            @guest
                <div class="mb-4">
                    <button data-slot="button" onclick="showToast({title: 'Need to Login First!!'})"
                        class="w-full md:w-[200px] inline-flex items-center justify-center whitespace-nowrap text-sm cursor-pointer font-medium transition-all shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-8 rounded-md gap-1.5 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-plus-icon lucide-plus">
                            <path d="M5 12h14" />
                            <path d="M12 5v14" />
                        </svg>
                        Add Recipe
                    </button>
                </div>
            @endguest
            <form method="GET" action="{{ route('recipes.index') }}"
                class="bg-card rounded-xl border p-6 shadow-sm mb-8 w-full">
                <div class="flex gap-2 mb-4 md:mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-filter h-5 w-5">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                    </svg>
                    <h6 class="txt- font-semibold leading-none">Filter Recipes</h6>
                </div>

                <div class="mb-4 md:mb-8">
                    <label for="search_txt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Search Recipes
                    </label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-search absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-muted-foreground">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </svg>
                        </div>
                        <input type="text" id="search_txt" name="search_txt" value="{{ request('search_txt') }}" {{-- 👈
                            persist old value --}}
                            class="bg-inherit border border-input shadow-2xs text-gray-900 text-sm rounded-lg focus:ring-ring/50 focus:border-ring block w-full ps-10 p-2.5"
                            placeholder="Search by recipe name">
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-0 mb-4 md:mb-8">
                    <x-select field="category_id" label="Cuisine Type" :options="$categories"
                        :selected="request('category_id')" {{-- 👈 persist --}} placeholder="All Cuisines"
                        width="w-full md:w-auto" :isPlaceholderDisabled="false" />

                    <x-select field="difficulty_level_id" label="Difficulty Level" :options="$difficulty_levels"
                        :selected="request('difficulty_level_id')" {{-- 👈 persist --}} placeholder="All Levels"
                        width="w-full md:w-auto" :isPlaceholderDisabled="false" />

                    <x-select field="dietary_preference_id" label="Dietary Preference" :options="$dietary_preference"
                        :selected="request('dietary_preference_id')" {{-- 👈 persist --}} placeholder="All Diets"
                        width="w-full md:w-auto" :isPlaceholderDisabled="false" />
                </div>

                <div class="flex justify-end">
                    <button data-slot="button"
                        class="w-full md:w-[100px] inline-flex items-center justify-center whitespace-nowrap text-sm cursor-pointer font-medium transition-all shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-8 rounded-md gap-1.5 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-funnel-icon lucide-funnel">
                            <path
                                d="M10 20a1 1 0 0 0 .553.895l2 1A1 1 0 0 0 14 21v-7a2 2 0 0 1 .517-1.341L21.74 4.67A1 1 0 0 0 21 3H3a1 1 0 0 0-.742 1.67l7.225 7.989A2 2 0 0 1 10 14z" />
                        </svg>
                        Filter
                    </button>
                </div>
            </form>
        </section>

        <section>
            <h4 class="text-muted-foreground mb-6">
                Showing {{ $recipes->count() }} of {{ $recipes->total() }} recipes
            </h4>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @forelse ($recipes as $recipe)
                    <x-recipe-card :recipe="$recipe" />
                @empty
                    <p class="text-muted-foreground">No recipes found.</p>
                @endforelse
            </div>

            <div>
                {{ $recipes->links() }}
            </div>
        </section>

    </main>
@endsection