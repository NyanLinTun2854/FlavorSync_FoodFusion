@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <section class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Community
                <span class="text-primary">Cookbook</span>
                <span class="text-secondary"> Create</span>
            </h1>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                Discover amazing recipes from around the world, carefully curated and organized by cuisine, difficulty, and
                dietary
                preferences
            </p>
        </section>
        <div class="py-4">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-card overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <form action="{{ route('community.store') }}" enctype="multipart/form-data" method="post"
                        class="space-y-8">

                        @csrf

                        <!-- Image Upload -->
                        {{-- <div>
                            <x-input-label for="image" :value="__('Avatar')" />
                            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"
                                :value="old('image')" autofocus />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div> --}}
                        <x-file-input field="image" title="Image" placeholder="No file chosen" :isMandatory="true" />

                        <!-- Title -->
                        {{-- <div class="mt-4">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                :value="old('title')" autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div> --}}
                        <x-text-input field="title" title="Title" :isMandatory="true" />

                        <!-- Category -->
                        {{-- <div class="mt-4">
                            <x-input-label for="category_id" :value="__('Category')" />
                            <select id="category_id" name="category_id"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-auto">
                                <option value="">Select a Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id')==$category->id)>
                                    {{ $category->name }}
                                </option>
                                @endforeach

                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div> --}}
                        <x-select field="category_id" label="Category" :options="$categories" width="w-full md:w-auto"
                            :isMandatory="true" />

                        <!-- Content -->
                        {{-- <div class="mt-4">
                            <x-input-label for="content" :value="__('Content')" />
                            <x-input-textarea id="content" class="block mt-1 w-full"
                                name="content">{{old('content')}}</x-input-textarea>
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div> --}}
                        <x-text-area field="content" title="Content" :isMandatory="true" />

                        <button data-slot="button" type="submit"
                            class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all shrink-0 outline-none bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 w-full h-10 rounded-md gap-1.5 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-plus mr-2 h-4 w-4">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            Submit Post
                        </button>


                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection