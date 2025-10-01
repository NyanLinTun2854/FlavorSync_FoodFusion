@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="mb-8">
                <div class="aspect-video relative overflow-hidden rounded-lg mb-6"><img alt="Classic Spaghetti Carbonara"
                        class="w-full h-full object-cover" src="{{ $recipe->imageUrl() }}"></div>
                <div class="flex flex-wrap gap-2 mb-4"><span data-slot="badge"
                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-primary-foreground [a&amp;]:hover:bg-primary/90">{{ $recipe->toArray()['category']['name'] }}</span><span
                        data-slot="badge"
                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground">{{ $recipe->toArray()['difficulty_level']['name'] }}</span><span
                        data-slot="badge"
                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&amp;]:hover:bg-secondary/90">By
                        {{$recipe->toArray()['user']['first_name']}} {{$recipe->toArray()['user']['last_name']}}</span>
                </div>
                <h1 class="text-4xl font-bold mb-4">{{$recipe->toArray()['name']}}</h1>
                <p class="text-xl text-muted-foreground mb-6">{{$recipe->toArray()['description']}}
                </p>
                <div class="flex items-center gap-6 mb-6">
                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-clock h-5 w-5 text-muted-foreground">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg><span class="text-sm">{{ $recipe->toArray()['prep_time'] + $recipe->toArray()['cook_time'] }}
                            min total
                            ({{ $recipe->toArray()['prep_time'] }} prep, {{ $recipe->toArray()['cook_time'] }} cook)</span>
                    </div>
                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-users h-5 w-5 text-muted-foreground">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg><span class="text-sm">{{ $recipe->toArray()['servings'] }} servings</span></div>
                    {{-- <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-star h-5 w-5 fill-yellow-400 text-yellow-400">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                            </path>
                        </svg><span class="text-sm">4.8 (127 reviews)</span>
                    </div> --}}
                </div>
                {{-- <div class="flex gap-3"><button data-slot="button"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-9 px-4 py-2 has-[&gt;svg]:px-3"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-heart mr-2 h-4 w-4">
                            <path
                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                            </path>
                        </svg>Save Recipe</button><button data-slot="button"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 has-[&gt;svg]:px-3"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-share2 mr-2 h-4 w-4">
                            <circle cx="18" cy="5" r="3"></circle>
                            <circle cx="6" cy="12" r="3"></circle>
                            <circle cx="18" cy="19" r="3"></circle>
                            <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                            <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                        </svg>Share</button><button data-slot="button"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 has-[&gt;svg]:px-3"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-printer mr-2 h-4 w-4">
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                            <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6"></path>
                            <rect x="6" y="14" width="12" height="8" rx="1"></rect>
                        </svg>Print</button></div> --}}
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 space-y-8">
                    <div data-slot="card"
                        class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                        <div data-slot="card-header"
                            class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                            <div data-slot="card-title" class="font-semibold text-2xl">Ingredients</div>
                        </div>
                        <div data-slot="card-content" class="px-6">
                            <ul class="space-y-3">
                                @foreach ($recipe->toArray()['ingredients'] as $ingredient)
                                    <li class="flex items-start gap-3">
                                        <div class="h-2 w-2 rounded-full bg-primary mt-2 flex-shrink-0"></div>
                                        <span>{{$ingredient}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div data-slot="card"
                        class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                        <div data-slot="card-header"
                            class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                            <div data-slot="card-title" class="font-semibold text-2xl">Instructions</div>
                        </div>
                        <div data-slot="card-content" class="px-6">
                            <ol class="space-y-4">
                                @foreach ($recipe->toArray()['instructions'] as $index => $instruction)
                                    <li class="flex gap-4">
                                        <div
                                            class="h-8 w-8 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-semibold flex-shrink-0">
                                            {{$index + 1}}
                                        </div>
                                        <p class="pt-1">{{$instruction}}</p>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                    {{-- <div data-slot="card"
                        class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                        <div data-slot="card-header"
                            class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                            <div data-slot="card-title" class="font-semibold text-2xl">Chef's Tips</div>
                        </div>
                        <div data-slot="card-content" class="px-6">
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chef-hat h-5 w-5 text-primary mt-0.5 flex-shrink-0">
                                        <path
                                            d="M17 21a1 1 0 0 0 1-1v-5.35c0-.457.316-.844.727-1.041a4 4 0 0 0-2.134-7.589 5 5 0 0 0-9.186 0 4 4 0 0 0-2.134 7.588c.411.198.727.585.727 1.041V20a1 1 0 0 0 1 1Z">
                                        </path>
                                        <path d="M6 17h12"></path>
                                    </svg><span class="text-muted-foreground">Use room temperature eggs to prevent
                                        scrambling</span></li>
                                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chef-hat h-5 w-5 text-primary mt-0.5 flex-shrink-0">
                                        <path
                                            d="M17 21a1 1 0 0 0 1-1v-5.35c0-.457.316-.844.727-1.041a4 4 0 0 0-2.134-7.589 5 5 0 0 0-9.186 0 4 4 0 0 0-2.134 7.588c.411.198.727.585.727 1.041V20a1 1 0 0 0 1 1Z">
                                        </path>
                                        <path d="M6 17h12"></path>
                                    </svg><span class="text-muted-foreground">Work quickly when combining pasta with egg
                                        mixture</span></li>
                                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chef-hat h-5 w-5 text-primary mt-0.5 flex-shrink-0">
                                        <path
                                            d="M17 21a1 1 0 0 0 1-1v-5.35c0-.457.316-.844.727-1.041a4 4 0 0 0-2.134-7.589 5 5 0 0 0-9.186 0 4 4 0 0 0-2.134 7.588c.411.198.727.585.727 1.041V20a1 1 0 0 0 1 1Z">
                                        </path>
                                        <path d="M6 17h12"></path>
                                    </svg><span class="text-muted-foreground">Traditional carbonara doesn't include cream or
                                        garlic</span></li>
                                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chef-hat h-5 w-5 text-primary mt-0.5 flex-shrink-0">
                                        <path
                                            d="M17 21a1 1 0 0 0 1-1v-5.35c0-.457.316-.844.727-1.041a4 4 0 0 0-2.134-7.589 5 5 0 0 0-9.186 0 4 4 0 0 0-2.134 7.588c.411.198.727.585.727 1.041V20a1 1 0 0 0 1 1Z">
                                        </path>
                                        <path d="M6 17h12"></path>
                                    </svg><span class="text-muted-foreground">Save some pasta water - it helps create the
                                        perfect sauce consistency</span></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
                <div class="space-y-6">
                    <div data-slot="card"
                        class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                        <div data-slot="card-header"
                            class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                            <div data-slot="card-title" class="leading-none font-semibold">Nutrition Information</div>
                            <p class="text-sm text-muted-foreground">Per serving</p>
                        </div>
                        <div data-slot="card-content" class="px-6 space-y-3">
                            <div class="flex justify-between"><span>Calories</span><span
                                    class="font-semibold">{{$recipe->toArray()['nutrition']['calories']}}</span>
                            </div>
                            <div class="flex justify-between"><span>Protein</span><span
                                    class="font-semibold">{{ rtrim(rtrim(number_format($recipe->toArray()['nutrition']['protein'], 2, '.', ''), '0'), '.') }}g</span>
                            </div>
                            <div class="flex justify-between"><span>Carbohydrates</span><span
                                    class="font-semibold">{{ rtrim(rtrim(number_format($recipe->toArray()['nutrition']['carbohydrates'], 2, '.', ''), '0'), '.') }}g</span>
                            </div>
                            <div class="flex justify-between"><span>Fat</span><span
                                    class="font-semibold">{{ rtrim(rtrim(number_format($recipe->toArray()['nutrition']['fat'], 2, '.', ''), '0'), '.') }}g</span>
                            </div>
                            <div class="flex justify-between"><span>Fiber</span><span
                                    class="font-semibold">{{ rtrim(rtrim(number_format($recipe->toArray()['nutrition']['fiber'], 2, '.', ''), '0'), '.') }}g</span>
                            </div>
                        </div>
                    </div>
                    <div data-slot="card"
                        class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                        <div data-slot="card-header"
                            class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                            <div data-slot="card-title" class="leading-none font-semibold">Recipe Stats</div>
                        </div>
                        <div data-slot="card-content" class="px-6 space-y-4">
                            <div class="flex items-center justify-between"><span>Difficulty</span><span data-slot="badge"
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground">{{$recipe->toArray()['difficulty_level']['name']}}</span>
                            </div>
                            <div class="flex items-center justify-between"><span>Prep
                                    Time</span><span>{{ $recipe->toArray()['prep_time'] }} minutes</span>
                            </div>
                            <div class="flex items-center justify-between"><span>Cook
                                    Time</span><span>{{ $recipe->toArray()['cook_time'] }} minutes</span>
                            </div>
                            <div class="flex items-center justify-between"><span>Total Time</span><span
                                    class="font-semibold">{{ $recipe->toArray()['prep_time'] + $recipe->toArray()['cook_time'] }}
                                    minutes</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Servings</span><span>{{ $recipe->toArray()['servings'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection