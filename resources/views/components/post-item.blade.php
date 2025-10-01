<a href="{{ route('community.show', $post['id']) }}">
    <div class="flex bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-8">
        <div class="flex-1 p-5">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $post->title }}
            </h5>


            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{ Str::words($post->content, 15) }}
            </p>
            <x-primary-button>
                Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </x-primary-button>
        </div>
        <img class="w-48 h-full max-h-64 object-fit rounded-r-lg" src="{{ Storage::url($post->image) }}" alt="" />
    </div>
</a>