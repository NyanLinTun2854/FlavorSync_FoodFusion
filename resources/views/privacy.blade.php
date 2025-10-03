@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-8">

        <!-- Breadcrumb -->
        <nav class="text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
            <ol class="list-reset flex">
                <li>
                    <a href="{{ route('home') }}" class="text-blue-600 hover:underline">Home</a>
                </li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-700 font-semibold">Privacy & Cookies Policies</li>
            </ol>
        </nav>

        <!-- Page Header -->
        <header class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Privacy & Cookies Policies</h1>
            <p class="text-gray-600 mt-2">Your privacy is important to us. Here’s how FoodFusion uses and protects your
                information.</p>
        </header>

        <!-- Privacy Policy Content -->
        <section class="bg-white rounded-lg shadow-md p-6 space-y-6">
            <h2 class="text-2xl font-semibold text-gray-800">1. Introduction</h2>
            <p class="text-gray-700">At FoodFusion, we are committed to protecting your privacy and ensuring the security of
                your personal information. This policy explains how we collect, use, and store your data when you use our
                platform.</p>

            <h2 class="text-2xl font-semibold text-gray-800">2. Data We Collect</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Personal details such as name, email address, and profile information.</li>
                <li>Recipes and posts shared on the platform.</li>
                <li>Messages exchanged via our messaging system.</li>
            </ul>

            <h2 class="text-2xl font-semibold text-gray-800">3. How We Use Your Data</h2>
            <p class="text-gray-700">We use your data to provide and improve our services, communicate with you, and ensure
                security. We never sell your personal information to third parties.</p>

            <h2 class="text-2xl font-semibold text-gray-800">4. Cookies</h2>
            <p class="text-gray-700">We use cookies to enhance your experience, improve functionality, and gather analytics.
                You can control cookie settings through your browser.</p>

            <h2 class="text-2xl font-semibold text-gray-800">5. Your Rights</h2>
            <p class="text-gray-700">You have the right to access, correct, or delete your personal information. You can
                also opt out of cookies at any time.</p>

            <h2 class="text-2xl font-semibold text-gray-800">6. Changes to This Policy</h2>
            <p class="text-gray-700">We may update this policy occasionally. Changes will be posted here with an updated
                date.</p>

            <p class="text-sm text-gray-500">Last Updated: October 2, 2025</p>
        </section>
    </div>
@endsection