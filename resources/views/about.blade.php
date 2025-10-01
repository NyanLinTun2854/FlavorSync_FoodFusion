@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">

        <!-- Header Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                About
                <span class="text-primary">Flavor</span>
                <span class="text-secondary">Sync</span>
            </h1>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                We believe that cooking is more than just preparing food—it's about bringing people together, sharing
                cultures, and
                creating memories that last a lifetime. Our mission is to inspire home cooks everywhere to explore new
                flavors and
                techniques.
            </p>
        </div>


        <!-- Ours Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
            <div data-slot="card"
                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm border-primary/20">
                <div data-slot="card-header"
                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                    <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-heart h-6 w-6 text-primary">
                            <path
                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                            </path>
                        </svg>
                    </div>
                    <div data-slot="card-title" class="font-semibold text-2xl">Our Mission</div>
                </div>
                <div data-slot="card-content" class="px-6">
                    <p class="text-muted-foreground leading-relaxed">To create a vibrant global community where food
                        enthusiasts can
                        discover, share, and celebrate the art of home cooking. We strive to make culinary knowledge
                        accessible to
                        everyone, regardless of their skill level or background.</p>
                </div>
            </div>
            <div data-slot="card"
                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm border-secondary/20">
                <div data-slot="card-header"
                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                    <div class="h-12 w-12 rounded-full bg-secondary/10 flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-globe h-6 w-6 text-secondary">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                            <path d="M2 12h20"></path>
                        </svg>
                    </div>
                    <div data-slot="card-title" class="font-semibold text-2xl">Our Vision</div>
                </div>
                <div data-slot="card-content" class="px-6">
                    <p class="text-muted-foreground leading-relaxed">To become the world's most trusted platform for
                        culinary
                        inspiration and education, where every home cook feels empowered to experiment, learn, and share
                        their
                        unique culinary journey with others.</p>
                </div>
            </div>
        </div>

        <!-- Core Values Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-12">
                Our Core Values
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-users h-8 w-8 text-primary">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Community First</h3>
                    <p class="text-muted-foreground">
                        We believe in the power of community and the magic that happens when
                        people share
                        their culinary passions together.
                    </p>
                </div>
                <div class="text-center">
                    <div class="h-16 w-16 rounded-full bg-secondary/10 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-book-open h-8 w-8 text-secondary">
                            <path d="M12 7v14"></path>
                            <path
                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Continuous Learning</h3>
                    <p class="text-muted-foreground">Every recipe is an opportunity to learn something new. We encourage
                        experimentation
                        and growth in the kitchen.
                    </p>
                </div>
                <div class="text-center">
                    <div class="h-16 w-16 rounded-full bg-accent/10 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-award h-8 w-8 text-accent">
                            <path
                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                            </path>
                            <circle cx="12" cy="8" r="6"></circle>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Quality &amp; Authenticity</h3>
                    <p class="text-muted-foreground">
                        We curate high-quality recipes and celebrate authentic flavors from cultures around
                        the world.
                    </p>
                </div>
            </div>
        </div>

        <!-- Our Team -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-12">
                Our Core Values
            </h2>
            <div class="gap-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <div class="bg-card text-card-foreground flex flex-col rounded-xl border py-6 shadow-sm">
                    <div class="px-6 text-center">
                        <div class="h-24 w-24 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chef-hat h-12 w-12 text-primary">
                                <path
                                    d="M17 21a1 1 0 0 0 1-1v-5.35c0-.457.316-.844.727-1.041a4 4 0 0 0-2.134-7.589 5 5 0 0 0-9.186 0 4 4 0 0 0-2.134 7.588c.411.198.727.585.727 1.041V20a1 1 0 0 0 1 1Z">
                                </path>
                                <path d="M6 17h12"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Chef Maria Rodriguez</h3><span data-slot="badge"
                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&amp;]:hover:bg-secondary/90 mb-3">Founder
                            &amp; Head Chef</span>
                        <p class="text-muted-foreground text-sm">
                            With 15 years of culinary experience across three continents, Maria brings
                            authentic flavors and techniques to our community.
                        </p>
                    </div>

                </div>
                <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                    <div class="px-6 text-center">
                        <div class="h-24 w-24 rounded-full bg-secondary/10 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-users h-12 w-12 text-secondary">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">David Kim</h3><span data-slot="badge"
                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&amp;]:hover:bg-secondary/90 mb-3">Community
                            Manager</span>
                        <p class="text-muted-foreground text-sm">David ensures our community remains welcoming and
                            supportive, helping
                            members connect and share their culinary journeys.</p>
                    </div>
                </div>
                <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                    <div class="px-6 text-center">
                        <div class="h-24 w-24 rounded-full bg-accent/10 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-book-open h-12 w-12 text-accent">
                                <path d="M12 7v14"></path>
                                <path
                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Sarah Johnson</h3><span data-slot="badge"
                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&amp;]:hover:bg-secondary/90 mb-3">Content
                            Director</span>
                        <p class="text-muted-foreground text-sm">Sarah curates our recipe collection and educational
                            content, ensuring
                            every piece of content meets our high standards.</p>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm bg-gradient-to-r from-primary/5 to-secondary/5 border-primary/20">
            <div data-slot="card-title" class="px-6 font-semibold text-2xl text-center">Our Story</div>
            <div class="px-6 space-y-4">
                <p class="text-muted-foreground leading-relaxed">FoodFusion was born from a simple idea: that the best meals
                    are
                    the ones shared with others. Our founder, Chef Maria Rodriguez, noticed that while there were countless
                    recipe websites, few truly captured the community spirit that makes cooking so special.</p>
                <p class="text-muted-foreground leading-relaxed">Starting in 2020 with just a handful of family recipes,
                    FoodFusion has grown into a thriving community of over 10,000 home cooks from around the world. We've
                    facilitated thousands of recipe shares, hosted hundreds of virtual cooking classes, and helped countless
                    people discover their love for cooking.</p>
                <p class="text-muted-foreground leading-relaxed">Today, we continue to innovate and expand our platform,
                    always
                    keeping our core mission at heart: to make cooking accessible, enjoyable, and social for everyone.</p>
            </div>
        </div>
    </main>
@endsection