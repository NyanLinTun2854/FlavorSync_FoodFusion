@extends('layouts.app')
@section('content')
    <div class="py-4">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-2xl font-bold mb-4">{{$post->title}}</h1>
                <div class="flex flex-row justify-between gap-4">
                    <div class="flex flex-row gap-2 items-start">
                        <x-user-avatar :user="$post->user" />
                        <div>
                            <x-follow-ctr :user="$post->user" class="flex gap-2">
                                <span class="">
                                    {{ $post->user->first_name }} {{ $post->user->last_name }}
                                </span>
                                @if(auth()->check() && auth()->id() !== $post->user->id)
                                    <a href="#" data-follow-btn class="cursor-pointer"></a>
                                @endif
                            </x-follow-ctr>

                            <div class="flex gap-2 text-gray-500">
                                {{ $post->readTime() }} min read
                                &middot;
                                {{ $post->created_at->format('M d, Y') }}
                            </div>
                        </div>
                    </div>
                    <x-clap-button :post="$post" />
                </div>
                <div class="mt-8">
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full ">

                    <div class="mt-4">
                        {{$post->content}}
                    </div>
                </div>
                <div class="my-8">
                    <span class="p-4 bg-gray-200 rounded-lg">{{ $post->category->name }}</span>
                </div>
                <div class="mt-14" action="{{ route('recipes.store') }}" method="POST">
                    <h1 class="text-xl font-bold mb-4">Comments</h1>
                    <form action="{{ route('community.comment', $post->id) }}" method="POST">
                        @csrf
                        <x-text-area field="body" title="Your Comment" placeholder="Share you thoughts about this recipe"
                            :isMandatory="true" />
                        <div class="flex justify-end mt-4">
                            @auth
                                <button data-slot="button" type="submit"
                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm cursor-pointer font-medium transition-all shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-9 rounded-md gap-1.5 px-6">
                                    Post
                                </button>
                            @endauth
                            @guest
                                <button type="button" onclick="showToast({title: 'Need to login first!'})"
                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm cursor-pointer font-medium transition-all shrink-0 bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-9 rounded-md gap-1.5 px-6">
                                    Post
                                </button>
                            @endguest
                        </div>
                    </form>

                    {{-- Comments Lists --}}
                    <div class="mt-8 space-y-6">
                        @forelse($post->comments()->latest()->get() as $comment)
                            <div class="flex gap-3">
                                <x-user-avatar :user="$comment->user" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-semibold">{{ $comment->user->first_name }}
                                            {{$comment->user->last_name}}</span>
                                        <span class="text-gray-400 text-sm">{{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p class="text-gray-700 mt-1">{{ $comment->body }}</p>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500">No comments yet. Be the first one!</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection