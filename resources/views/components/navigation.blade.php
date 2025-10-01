{{-- {{ dd(request()->routeIs('about')) }} --}}
<nav
    class="sticky top-0 z-50 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
    <div class="container mx-auto px-4">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <a class="flex items-center gap-2 font-bold text-xl" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chef-hat h-8 w-8 text-primary">
                    <path
                        d="M17 21a1 1 0 0 0 1-1v-5.35c0-.457.316-.844.727-1.041a4 4 0 0 0-2.134-7.589 5 5 0 0 0-9.186 0 4 4 0 0 0-2.134 7.588c.411.198.727.585.727 1.041V20a1 1 0 0 0 1 1Z" />
                    <path d="M6 17h12"></path>
                </svg>
                <span class="text-primary">
                    Flavor
                    <span class="text-secondary">Sync</span>
                </span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-6">
                <a href="{{ route('home') }}"
                    class="nav-link {{ request()->routeIs('home') ? '!text-primary !font-bold' : '' }}">
                    Home
                </a>

                <a href="{{ route('about') }}"
                    class="nav-link {{ request()->routeIs('about') ? '!text-primary !font-bold' : '' }}">
                    About Us
                </a>

                <a href="{{ route('recipes.index') }}"
                    class="nav-link {{ request()->routeIs('recipes.*') ? '!text-primary !font-bold' : '' }}">
                    Recipe Collection
                </a>

                <a href="{{ route('community.index') }}"
                    class="nav-link {{ request()->routeIs('community.*') ? '!text-primary !font-bold' : '' }}">
                    Community Cookbook
                </a>

                <a href="{{ route('contact.index') }}"
                    class="nav-link {{ request()->routeIs('contact.*') ? '!text-primary !font-bold' : '' }}">
                    Contact Us
                </a>

                <a href="/resources"
                    class="nav-link {{ request()->is('resources') ? '!text-primary !font-bold' : '' }}">
                    Culinary Resources
                </a>

                <a href="/education"
                    class="nav-link {{ request()->is('education') ? '!text-primary !font-bold' : '' }}">
                    Educational Resources
                </a>
            </div>

            <!-- Desktop Auth Buttons -->
            <div class="hidden lg:flex items-center gap-3">
                @auth
                    <div class="relative flex items-center gap-3 group">
                        <div
                            class="flex items-center gap-2 bg-gray-100 dark:bg-gray-700 px-3 py-1 rounded-full shadow-sm cursor-pointer">
                            <span class="font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->first_name }}</span>
                            <span class="inline-block w-2 h-2 bg-green-500 rounded-full" title="Online"></span>
                        </div>

                        <div
                            class="absolute top-full right-0 mt-2 w-48 bg-white dark:bg-gray-800 border rounded shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-opacity duration-200 z-50">
                            @if(Auth::user()->isAdmin())
                                <a href="{{ route('admin.recipes.index') }}"
                                    class="block px-4 py-2 text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Admin
                                </a>
                            @endif
                            <a href=""
                                class="block px-4 py-2 text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">
                                Profile
                            </a>

                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Sign Out
                                </button>
                            </form>
                        </div>
                    </div>
                @endauth

                @guest
                    <button onclick="openModal('signInModal')" class="btn-outline">Sign In</button>
                    <button onclick="openModal('joinUsModal')" class="btn-primary">Join Us</button>
                @endguest
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" onclick="handleBurger()"
                class="lg:hidden inline-flex items-center justify-center p-2 rounded-md hover:bg-accent" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu h-6 w-6">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <line x1="4" x2="20" y1="6" y2="6"></line>
                    <line x1="4" x2="20" y1="18" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobileMenu" class="lg:hidden hidden border-t bg-background">
        <div class="flex flex-col space-y-2 p-4">
            <a href="{{ route('home') }}"
                class="nav-link {{ request()->routeIs('home') ? '!text-primary !font-bold' : '' }}">
                Home
            </a>

            <a href="{{ route('about') }}"
                class="nav-link {{ request()->routeIs('about') ? '!text-primary !font-bold' : '' }}">
                About Us
            </a>

            <a href="{{ route('recipes.index') }}"
                class="nav-link {{ request()->routeIs('recipes.*') ? '!text-primary !font-bold' : '' }}">
                Recipe Collection
            </a>

            <a href="{{ route('community.index') }}"
                class="nav-link {{ request()->routeIs('community.*') ? '!text-primary !font-bold' : '' }}">
                Community Cookbook
            </a>

            <a href="{{ route('contact.index') }}"
                class="nav-link {{ request()->routeIs('contact.*') ? '!text-primary !font-bold' : '' }}">
                Contact Us
            </a>

            <a href="/resources" class="nav-link {{ request()->is('resources') ? '!text-primary !font-bold' : '' }}">
                Culinary Resources
            </a>

            <a href="/education" class="nav-link {{ request()->is('education') ? '!text-primary !font-bold' : '' }}">
                Educational Resources
            </a>

            @auth
                <form action="{{ route('logout') }}" method="POST" class="mt-2">
                    @csrf
                    <button type="submit"
                        class="px-3 h-8 rounded-md bg-red-600 text-white hover:bg-red-700 text-sm font-medium w-full">
                        Sign Out
                    </button>
                </form>
            @endauth

            @guest
                <button onclick="openModal('signInModal')" class="btn-outline w-full">Sign In</button>
                <button onclick="openModal('joinUsModal')" class="btn-primary w-full">Join Us</button>
            @endguest
        </div>
    </div>
</nav>