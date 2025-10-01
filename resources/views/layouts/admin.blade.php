<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin - {{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">

    <div class="flex min-h-screen">
        {{-- Sidebar --}}
        @include('admin.components.sidebar')

        {{-- Main content --}}
        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>

    <div id="toast-container" class="fixed top-4 right-4 space-y-3 z-[9999] flex flex-col items-end"></div>

    <script>
        window.toastData = @json(session('toast', null));
    </script>
    @stack('scripts')
</body>

</html>