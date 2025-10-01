@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<main>
    <section class="relative py-20 bg-gradient-to-br from-background via-card to-muted">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-balance mb-6">
                    Welcome to
                    <span class="text-primary">Flavor</span>
                    <span class="text-secondary">Sync</span>
                </h1>
                <p
                    class="text-xl md:text-2xl text-muted-foreground text-balance mb-8 max-w-3xl mx-auto leading-relaxed">
                    Your culinary journey starts here. Discover amazing recipes, share your cooking adventures, and
                    connect
                    with a vibrant
                    community of food enthusiasts who share your passion for home cooking.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
                    <button data-slot="button"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-10 rounded-md has-[&gt;svg]:px-4 text-lg px-8 py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chef-hat mr-2 h-5 w-5">
                            <path
                                d="M17 21a1 1 0 0 0 1-1v-5.35c0-.457.316-.844.727-1.041a4 4 0 0 0-2.134-7.589 5 5 0 0 0-9.186 0 4 4 0 0 0-2.134 7.588c.411.198.727.585.727 1.041V20a1 1 0 0 0 1 1Z">
                            </path>
                            <path d="M6 17h12"></path>
                        </svg>Join Our Community
                    </button>
                    <button data-slot="button"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md has-[&gt;svg]:px-4 text-lg px-8 py-6 bg-transparent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-book-open mr-2 h-5 w-5">
                            <path d="M12 7v14"></path>
                            <path
                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                            </path>
                        </svg>Explore Recipes
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="flex flex-col items-center text-center p-6 rounded-lg bg-card border">
                        <div class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-users h-8 w-8 text-primary">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Vibrant Community</h3>
                        <p class="text-muted-foreground">Connect with fellow food lovers, share experiences, and learn
                            from
                            each other</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6 rounded-lg bg-card border">
                        <div class="h-16 w-16 rounded-full bg-secondary/10 flex items-center justify-center mb-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-book-open h-8 w-8 text-secondary">
                                <path d="M12 7v14"></path>
                                <path
                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                </path>
                            </svg></div>
                        <h3 class="text-xl font-semibold mb-2">Curated Recipes</h3>
                        <p class="text-muted-foreground">Discover diverse recipes from around the world, organized by
                            cuisine and difficulty
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6 rounded-lg bg-card border">
                        <div class="h-16 w-16 rounded-full bg-accent/10 flex items-center justify-center mb-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-heart h-8 w-8 text-accent">
                                <path
                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                </path>
                            </svg></div>
                        <h3 class="text-xl font-semibold mb-2">Culinary Growth</h3>
                        <p class="text-muted-foreground">Access educational resources, tutorials, and tips to enhance
                            your
                            cooking skills
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Culinary Insights -->
    <section class="py-16 bg-muted/30">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Latest Culinary <span
                        class="text-primary">Insights</span>
                </h2>
                <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                    Stay updated with the latest cooking tips, trends, and techniques from our community of culinary
                    experts
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                {{-- <div data-slot="card"
                    class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="aspect-video relative overflow-hidden">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiLuvzVloGHlxw_H3NpjTPva0b6Ah2xkYroA&s"
                            alt="5 Essential Spices Every Home Cook Should Have"
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div data-slot="card-header"
                        class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6 pb-3">
                        <div class="flex items-center gap-2 text-sm text-muted-foreground mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-user h-4 w-4">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span>Chef Sarah Johnson</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-clock h-4 w-4 ml-2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span>2 hours ago</span>
                        </div>
                        <div data-slot="card-title"
                            class="font-semibold text-xl leading-tight hover:text-primary transition-colors">5
                            Essential Spices Every Home Cook Should Have
                        </div>
                    </div>
                    <div data-slot="card-content" class="px-6 pt-0">
                        <p class="text-muted-foreground mb-4 line-clamp-3">
                            Discover the must-have spices that will transform your
                            cooking and add incredible flavor to any dish. From aromatic cumin to versatile paprika,
                            these
                            pantry
                            staples are game-changers.
                        </p>
                        <button data-slot="button"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent dark:hover:bg-accent/50 has-[&gt;svg]:px-3 p-0 h-auto font-semibold text-primary hover:text-primary/80">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 h-4 w-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div data-slot="card"
                    class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="aspect-video relative overflow-hidden">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTX7p8x8tZ4_gSRSjT3JtbHx5Aha5Vr0gFVvQ&s"
                            alt="5 Essential Spices Every Home Cook Should Have"
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div data-slot="card-header"
                        class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6 pb-3">
                        <div class="flex items-center gap-2 text-sm text-muted-foreground mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-user h-4 w-4">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span>Chef Sarah Johnson</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-clock h-4 w-4 ml-2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span>2 hours ago</span>
                        </div>
                        <div data-slot="card-title"
                            class="font-semibold text-xl leading-tight hover:text-primary transition-colors">5
                            Essential Spices Every Home Cook Should Have
                        </div>
                    </div>
                    <div data-slot="card-content" class="px-6 pt-0">
                        <p class="text-muted-foreground mb-4 line-clamp-3">
                            Discover the must-have spices that will transform your
                            cooking and add incredible flavor to any dish. From aromatic cumin to versatile paprika,
                            these
                            pantry
                            staples are game-changers.
                        </p>
                        <button data-slot="button"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent dark:hover:bg-accent/50 has-[&gt;svg]:px-3 p-0 h-auto font-semibold text-primary hover:text-primary/80">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 h-4 w-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div data-slot="card"
                    class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="aspect-video relative overflow-hidden">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQmfV3nlpeq7yCPiM7vSMQ8klFYu_jhyJu2g&s"
                            alt="5 Essential Spices Every Home Cook Should Have"
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div data-slot="card-header"
                        class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6 pb-3">
                        <div class="flex items-center gap-2 text-sm text-muted-foreground mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-user h-4 w-4">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span>Chef Sarah Johnson</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-clock h-4 w-4 ml-2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span>2 hours ago</span>
                        </div>
                        <div data-slot="card-title"
                            class="font-semibold text-xl leading-tight hover:text-primary transition-colors">5
                            Essential Spices Every Home Cook Should Have
                        </div>
                    </div>
                    <div data-slot="card-content" class="px-6 pt-0">
                        <p class="text-muted-foreground mb-4 line-clamp-3">
                            Discover the must-have spices that will transform your
                            cooking and add incredible flavor to any dish. From aromatic cumin to versatile paprika,
                            these
                            pantry
                            staples are game-changers.
                        </p>
                        <button data-slot="button"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent dark:hover:bg-accent/50 has-[&gt;svg]:px-3 p-0 h-auto font-semibold text-primary hover:text-primary/80">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 h-4 w-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div> --}}
                @forelse ($recipes as $recipe)
                    <x-recipe-card :recipe="$recipe" />
                @empty
                    <p class="text-muted-foreground">No recipes found.</p>
                @endforelse
            </div>
            <div class="text-center mt-12">
                <button data-slot="button"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md px-6 has-[&gt;svg]:px-4">View
                    All Articles
                </button>
            </div>
        </div>
    </section>

    <!-- Cooking Events --->
    <section class="py-16 bg-background">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Upcoming <span class="text-primary">Cooking
                        Events</span>
                </h2>
                <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                    Join our hands-on cooking classes and workshops to enhance your culinary skills
                </p>
            </div>
            <div class="relative max-w-4xl mx-auto">
                <div class="overflow-hidden rounded-lg">
                    <div class="carousel-container">
                        <div class="carousel-slide">
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm mx-2">
                                <div class="grid md:grid-cols-2 gap-0">
                                    <div class="aspect-video md:aspect-square relative overflow-hidden">
                                        <img src="http://localhost:3000/vegan-baking-workshop.png"
                                            alt="Italian Cooking Masterclass" class="w-full h-full object-cover">
                                    </div>
                                    <div class="p-8 flex flex-col justify-center">
                                        <span data-slot="badge"
                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&amp;]:hover:bg-secondary/90 w-fit mb-4">Upcoming
                                            Event
                                        </span>
                                        <div data-slot="card-title" class="font-semibold text-2xl mb-4">Italian Cooking
                                            Masterclass
                                        </div>
                                        <p class="text-muted-foreground mb-6 text-lg">Learn to make authentic pasta from
                                            scratch
                                            with Chef Marco</p>
                                        <div class="space-y-3 mb-6">
                                            <div class="flex items-center gap-2 text-muted-foreground">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-calendar h-5 w-5">
                                                    <path d="M8 2v4"></path>
                                                    <path d="M16 2v4"></path>
                                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                    <path d="M3 10h18"></path>
                                                </svg>
                                                <span>Feb 15, 2025 • 2:00 PM</span>
                                            </div>
                                            <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-map-pin h-5 w-5">
                                                    <path
                                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                    </path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg><span>FoodFusion Culinary Studio</span></div>
                                        </div><button data-slot="button"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-9 px-4 py-2 has-[&gt;svg]:px-3 w-fit">Register
                                            Now<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-external-link ml-2 h-4 w-4">
                                                <path d="M15 3h6v6"></path>
                                                <path d="M10 14 21 3"></path>
                                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                </path>
                                            </svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm mx-2">
                                <div class="grid md:grid-cols-2 gap-0">
                                    <div class="aspect-video md:aspect-square relative overflow-hidden"><img
                                            src="http://localhost:3000/vegan-baking-workshop.png"
                                            alt="Vegan Baking Workshop" class="w-full h-full object-cover"></div>
                                    <div class="p-8 flex flex-col justify-center"><span data-slot="badge"
                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&amp;]:hover:bg-secondary/90 w-fit mb-4">Upcoming
                                            Event</span>
                                        <div data-slot="card-title" class="font-semibold text-2xl mb-4">Vegan Baking
                                            Workshop</div>
                                        <p class="text-muted-foreground mb-6 text-lg">Discover the secrets of delicious
                                            plant-based
                                            desserts</p>
                                        <div class="space-y-3 mb-6">
                                            <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-calendar h-5 w-5">
                                                    <path d="M8 2v4"></path>
                                                    <path d="M16 2v4"></path>
                                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                    <path d="M3 10h18"></path>
                                                </svg><span>Feb 22, 2025 • 10:00 AM</span></div>
                                            <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-map-pin h-5 w-5">
                                                    <path
                                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                    </path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg><span>Community Kitchen Downtown</span></div>
                                        </div><button data-slot="button"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-9 px-4 py-2 has-[&gt;svg]:px-3 w-fit">Register
                                            Now<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-external-link ml-2 h-4 w-4">
                                                <path d="M15 3h6v6"></path>
                                                <path d="M10 14 21 3"></path>
                                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                </path>
                                            </svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm mx-2">
                                <div class="grid md:grid-cols-2 gap-0">
                                    <div class="aspect-video md:aspect-square relative overflow-hidden"><img
                                            src="http://localhost:3000/vegan-baking-workshop.png"
                                            alt="Knife Skills Bootcamp" class="w-full h-full object-cover"></div>
                                    <div class="p-8 flex flex-col justify-center"><span data-slot="badge"
                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&amp;]:hover:bg-secondary/90 w-fit mb-4">Upcoming
                                            Event</span>
                                        <div data-slot="card-title" class="font-semibold text-2xl mb-4">Knife Skills
                                            Bootcamp</div>
                                        <p class="text-muted-foreground mb-6 text-lg">Master essential knife techniques
                                            for
                                            efficient cooking</p>
                                        <div class="space-y-3 mb-6">
                                            <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-calendar h-5 w-5">
                                                    <path d="M8 2v4"></path>
                                                    <path d="M16 2v4"></path>
                                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                    <path d="M3 10h18"></path>
                                                </svg><span>Mar 1, 2025 • 4:00 PM</span></div>
                                            <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-map-pin h-5 w-5">
                                                    <path
                                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                    </path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg><span>FoodFusion Culinary Studio</span></div>
                                        </div><button data-slot="button"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-9 px-4 py-2 has-[&gt;svg]:px-3 w-fit">Register
                                            Now<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-external-link ml-2 h-4 w-4">
                                                <path d="M15 3h6v6"></path>
                                                <path d="M10 14 21 3"></path>
                                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                </path>
                                            </svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm mx-2">
                                <div class="grid md:grid-cols-2 gap-0">
                                    <div class="aspect-video md:aspect-square relative overflow-hidden"><img
                                            src="http://localhost:3000/vegan-baking-workshop.png"
                                            alt="Farm-to-Table Experience" class="w-full h-full object-cover"></div>
                                    <div class="p-8 flex flex-col justify-center"><span data-slot="badge"
                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&amp;]:hover:bg-secondary/90 w-fit mb-4">Upcoming
                                            Event</span>
                                        <div data-slot="card-title" class="font-semibold text-2xl mb-4">Farm-to-Table
                                            Experience
                                        </div>
                                        <p class="text-muted-foreground mb-6 text-lg">Cook with fresh, local ingredients
                                            straight
                                            from the farm</p>
                                        <div class="space-y-3 mb-6">
                                            <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-calendar h-5 w-5">
                                                    <path d="M8 2v4"></path>
                                                    <path d="M16 2v4"></path>
                                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                    <path d="M3 10h18"></path>
                                                </svg><span>Mar 8, 2025 • 11:00 AM</span></div>
                                            <div class="flex items-center gap-2 text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-map-pin h-5 w-5">
                                                    <path
                                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                    </path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg><span>Sunny Acres Farm</span></div>
                                        </div><button data-slot="button"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-9 px-4 py-2 has-[&gt;svg]:px-3 w-fit">Register
                                            Now<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-external-link ml-2 h-4 w-4">
                                                <path d="M15 3h6v6"></path>
                                                <path d="M10 14 21 3"></path>
                                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                </path>
                                            </svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-slot="button" onclick="previousSlide()"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 size-9 absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-background/80 backdrop-blur">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-left h-4 w-4">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                </button>
                <button data-slot="button" onclick="nextSlide()"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 size-9 absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-background/80 backdrop-blur">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-right h-4 w-4">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </button>
                {{-- <div class="flex justify-center gap-2 mt-6">
                    <button class="w-3 h-3 rounded-full transition-colors bg-muted-foreground/30"></button>
                    <button class="w-3 h-3 rounded-full transition-colors bg-muted-foreground/30"></button>
                    <button class="w-3 h-3 rounded-full transition-colors bg-muted-foreground/30"></button>
                    <button class="w-3 h-3 rounded-full transition-colors bg-primary"></button>
                </div> --}}
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');

    const totalSlides = slides.length;

    function showSlide(index) {
        const container = document.querySelector('.carousel-container');
        container.style.transform = `translateX(-${index * 100}%)`;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function previousSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    // Auto-advance carousel
    setInterval(nextSlide, 5000);
</script>
@endpush