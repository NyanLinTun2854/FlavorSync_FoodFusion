<aside class="w-64 bg-white border-r shadow-sm">
    <div class="p-4 text-xl font-bold text-primary">
        Admin Panel
    </div>

    <nav class="mt-6 space-y-2">
        {{-- <a href=""
            class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-200 font-semibold' : '' }}">
            Dashboard
        </a> --}}

        <a href="{{ route('admin.recipes.index') }}"
            class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('admin.recipes.*') ? 'bg-gray-200 font-semibold' : '' }}">
            Recipes
        </a>

        <a href="{{ route('admin.messages.index') }}"
            class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('admin.messages.*') ? 'bg-gray-200 font-semibold' : '' }}">
            Messages
        </a>

        {{-- <a href=""
            class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('admin.users.*') ? 'bg-gray-200 font-semibold' : '' }}">
            Users
        </a> --}}
    </nav>

    <div class="p-4">
        <a href="/"
            class="block w-full text-center bg-primary text-white px-4 py-2 rounded hover:bg-primary-dark transition">
            Back to User Side
        </a>
    </div>
</aside>