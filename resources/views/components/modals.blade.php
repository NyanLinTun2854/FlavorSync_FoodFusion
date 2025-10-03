<!-- Sign In Modal -->
<div id="signInModal" class="fixed inset-0 hidden flex items-center justify-center bg-black/50 z-50"
    onclick="closeModal('signInModal')">

    <!-- stopPropagation prevents closing when clicking inside -->
    <div class="modal-content w-full max-w-md bg-white rounded-lg shadow-lg p-4 
              transform transition-transform duration-300 scale-95" onclick="event.stopPropagation()">

        <button class="modal-close absolute top-2 right-2 text-xl" onclick="closeModal('signInModal')">
            &times;
        </button>


        <!-- Your modal content -->
        <div class="flex flex-col items-center gap-2 mb-4">
            <h2 class="text-2xl font-bold">Sign In</h2>
            <p class="text-muted-foreground text-sm text-center">Welcome back! Sign in to access your account and share
                recipes with
                the community.</p>
        </div>

        <form class="space-y-4" action="{{ route('login') }}" method="POST">
            @csrf
            <x-text-input field="email" type="email" title="Email" placeholder="Enter your email" isMandatory="true" />

            <x-text-input field="password" type="password" title="Password" placeholder="Enter your password"
                isMandatory="true" />
            @if ($errors->login->any())
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
                    {{ collect($errors->login->all())->last() }}
                </div>
            @endif

            <button data-slot="button" type="submit"
                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 w-full h-8 rounded-md gap-1 px-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-log-in mr-2 h-4 w-4">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                    <polyline points="10 17 15 12 10 7"></polyline>
                    <line x1="15" x2="3" y1="12" y2="12"></line>
                </svg>
                Sign In
            </button>
            <p class="text-sm text-muted-foreground text-center">Don't have an account?
                <a class="text-primary cursor-pointer hover:underline"
                    onclick="closeModal('signInModal'); openModal('joinUsModal');">Join FoodFusion</a>
            </p>
        </form>
    </div>
</div>

<!-- Join Us Modal -->
<div id="joinUsModal" class="fixed inset-0 hidden flex items-center justify-center bg-black/50 z-50"
    onclick="closeModal('joinUsModal')">

    <div class="modal-content w-full max-w-md bg-white rounded-lg shadow-lg p-4 
              transform transition-transform duration-300 scale-95" onclick="event.stopPropagation()">

        <button class="modal-close absolute top-2 right-2 text-xl" onclick="closeModal('joinUsModal')">
            &times;
        </button>

        <!-- Modal header -->
        <div class="flex flex-col items-center gap-2 mb-4">
            <h2 class="text-2xl font-bold">Join FoodFusion</h2>
            <p class="text-muted-foreground text-sm text-center">Create your account to start sharing recipes and
                connecting with fellow food enthusiasts</p>
        </div>

        <!-- Registration form -->
        <form class="space-y-4" action="{{ route('register') }}" method="POST">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <x-text-input field="first_name" title="First Name" placeholder="Enter your first name"
                    isMandatory="true" />
                <x-text-input field="last_name" title="Last Name" placeholder="Enter your last name"
                    isMandatory="true" />
            </div>

            <x-text-input field="email" type="email" title="Email" placeholder="Enter your email" isMandatory="true" />

            <x-text-input field="password" type="password" title="Password" placeholder="Enter your password"
                isMandatory="true" />
            <x-text-input field="password_confirmation" type="password" title="Confirm Password"
                placeholder="Confirm your password" isMandatory="true" />

            @if ($errors->register->any())
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
                    <strong>&#x2022;</strong> {{ collect($errors->register->all())->last() }}
                </div>
            @endif

            <button data-slot="button" type="submit"
                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 w-full h-10 rounded-md gap-1 px-3">
                Create Account
            </button>
        </form>

        <!-- Sign in prompt -->
        <div class="mt-6 text-center text-sm text-gray-600">
            Already have an account?
            <a class="text-primary font-medium cursor-pointer hover:underline"
                onclick="closeModal('joinUsModal'); openModal('signInModal');">
                Sign in
            </a>
        </div>
    </div>
</div>