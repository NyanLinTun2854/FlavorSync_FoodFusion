<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */

            @layer base {

                *,
                :after,
                :before,
                ::backdrop {
                    box-sizing: border-box;
                    border: 0 solid;
                    margin: 0;
                    padding: 0
                }

                ::file-selector-button {
                    box-sizing: border-box;
                    border: 0 solid;
                    margin: 0;
                    padding: 0
                }

                html,
                :host {
                    -webkit-text-size-adjust: 100%;
                    -moz-tab-size: 4;
                    tab-size: 4;
                    line-height: 1.5;
                    font-family: var(--default-font-family, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");
                    font-feature-settings: var(--default-font-feature-settings, normal);
                    font-variation-settings: var(--default-font-variation-settings, normal);
                    -webkit-tap-highlight-color: transparent
                }

                body {
                    line-height: inherit
                }

                hr {
                    height: 0;
                    color: inherit;
                    border-top-width: 1px
                }

                abbr:where([title]) {
                    -webkit-text-decoration: underline dotted;
                    text-decoration: underline dotted
                }

                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
                    font-size: inherit;
                    font-weight: inherit
                }

                a {
                    color: inherit;
                    -webkit-text-decoration: inherit;
                    text-decoration: inherit
                }

                b,
                strong {
                    font-weight: bolder
                }

                code,
                kbd,
                samp,
                pre {
                    font-family: var(--default-mono-font-family, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);
                    font-feature-settings: var(--default-mono-font-feature-settings, normal);
                    font-variation-settings: var(--default-mono-font-variation-settings, normal);
                    font-size: 1em
                }

                small {
                    font-size: 80%
                }

                sub,
                sup {
                    vertical-align: baseline;
                    font-size: 75%;
                    line-height: 0;
                    position: relative
                }

                sub {
                    bottom: -.25em
                }

                sup {
                    top: -.5em
                }

                table {
                    text-indent: 0;
                    border-color: inherit;
                    border-collapse: collapse
                }

                :-moz-focusring {
                    outline: auto
                }

                progress {
                    vertical-align: baseline
                }

                summary {
                    display: list-item
                }

                ol,
                ul,
                menu {
                    list-style: none
                }

                img,
                svg,
                video,
                canvas,
                audio,
                iframe,
                embed,
                object {
                    vertical-align: middle;
                    display: block
                }

                img,
                video {
                    max-width: 100%;
                    height: auto
                }

                button,
                input,
                select,
                optgroup,
                textarea {
                    font: inherit;
                    font-feature-settings: inherit;
                    font-variation-settings: inherit;
                    letter-spacing: inherit;
                    color: inherit;
                    opacity: 1;
                    background-color: #0000;
                    border-radius: 0
                }

            }
        </style>
    @endif
</head>

<body class="font-sans __variable_fb8f2c __variable_f910ec">

    <div class="min-h-screen">
        @include('components.navigation')

        @yield('content')
        @include('components.cookie-consent')
        @include('components.footer')
    </div>

    <!-- Toast container -->
    <div id="toast-container" class="fixed top-4 right-4 space-y-3 z-[9999] flex flex-col items-end">
    </div>

    @include('components.modals')

    @if ($errors->any() || session('errorBag'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                let errorBag = @json(session('errorBag'));

                if (errorBag === 'login') {
                    openModal('signInModal');
                } else if (errorBag === 'register') {
                    openModal('joinUsModal');
                }
            });
        </script>
    @endif

    <script>
        window.openSignInModal = @json(session('open_signin_modal', false));
        window.toastData = @json(session('toast', null));
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>