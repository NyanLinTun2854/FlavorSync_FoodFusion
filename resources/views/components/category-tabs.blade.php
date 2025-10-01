@props(['categories', 'selectedCategory' => null])

<ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 gap-2 dark:text-gray-400 justify-center">
    <li class="">
        <a href="{{ route('community.index') }}"
            class="inline-block px-4 py-2 rounded-lg {{ is_null($selectedCategory) ? 'bg-primary text-white' : '' }}">
            All
        </a>
    </li>

    @forelse ($categories as $category)
        <li class="">
            <a href="{{ route('community.index', ['category' => $category->id]) }}"
                class="inline-block px-4 py-2 rounded-lg {{ $selectedCategory == $category->id ? 'bg-primary text-white' : '' }}">
                {{ $category->name }}
            </a>
        </li>
    @empty
        {{ $slot }}
    @endforelse
</ul>