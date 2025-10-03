@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <section class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Community
                <span class="text-primary">Cook</span>
                <span class="text-secondary">book</span>
            </h1>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                A collaborative space where our community shares their favorite recipes, cooking tips, and culinary
                experiences. Join
                the conversation and contribute your own creations!
            </p>
        </section>

        <div class="py-4">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                @auth
                    <div class="mb-2">
                        <a href="{{ route('community.create') }}"
                            class="w-full md:w-[200px] inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-8 rounded-md gap-1.5 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-plus-icon lucide-plus">
                                <path d="M5 12h14" />
                                <path d="M12 5v14" />
                            </svg>
                            Add Post
                        </a>
                    </div>
                @endauth

                @guest
                    <div class="mb-2">
                        <button onclick="showToast({title: 'Need to Login First!!'})"
                            class="w-full md:w-[200px] inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-8 rounded-md gap-1.5 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-plus-icon lucide-plus">
                                <path d="M5 12h14" />
                                <path d="M12 5v14" />
                            </svg>
                            Add Post
                        </button>
                    </div>
                @endguest

                <div class="bg-card overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 text-gray-900">
                        <x-category-tabs :categories="$categories" :selectedCategory="$selectedCategory">No
                            Categories</x-category-tabs>
                    </div>
                </div>

                <div class="mt-8 text-gray-900">
                    @forelse ($posts as $post)
                        <x-post-item :post="$post" />
                    @empty
                        <div class="text-center text-gray-400 py-16">No Posts Found!</div>
                    @endforelse
                </div>

                <div>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection