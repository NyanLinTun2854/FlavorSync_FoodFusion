<div id="cookieConsent"
    class="fixed bottom-0 left-0 right-0 z-50 hidden bg-card border-t border-gray-200 shadow-lg animate-slide-up">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-4 py-4">
        <div class="text-gray-700 text-sm md:text-base max-w-3xl text-center md:text-left">
            <p>
                We use cookies to enhance your browsing experience and provide personalized content.
                By continuing to use our site, you agree to our
                <a href="#" class="text-primary font-medium hover:underline">Cookie Policy</a>.
            </p>
        </div>
        <div class="flex flex-col md:flex-row gap-2 w-full md:w-auto">
            <button onclick="declineCookies()"
                class="inline-flex items-center justify-center text-sm font-medium border border-gray-300 px-4 py-2 rounded-md hover:bg-accent hover:text-accent-foreground transition">
                Decline
            </button>
            <button onclick="acceptCookies()"
                class="inline-flex items-center justify-center text-sm font-medium bg-primary text-primary-foreground px-4 py-2 rounded-md shadow hover:bg-primary/90 transition">
                Accept All
            </button>
        </div>
    </div>
</div>