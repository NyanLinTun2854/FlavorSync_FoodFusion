@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <section class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Contact
                <span class="text-primary">Us</span>
            </h1>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                Have a question, recipe request, or feedback? We'd love to hear from you! Reach out to our team and we'll
                get back to
                you as soon as possible.
            </p>
        </section>

        <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <div class="space-y-8">
                <div class="bg-card rounded-xl border shadow-sm p-6 flex flex-col gap-6">
                    <div class="flex flex-col gap-1.5 items-start">
                        <h4 class="text-2xl font-semibold">Get in Touch</h4>
                        <p class="text-muted-foreground">Whether you're looking for a specific recipe, want to share
                            feedback,
                            or have a partnership inquiry, we're here to help.</p>
                    </div>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-mail h-6 w-6 text-primary">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h6 class="font-semibold mb-1">
                                    Email Us
                                </h6>
                                <p class="text-muted-foreground mb-2">Send us an email and we'll respond within 24 hours</p>
                                <a class="text-primary hover:underline">hello@foodfusion.com</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-phone h-6 w-6 text-secondary">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h6 class="font-semibold mb-1">
                                    Call Us
                                </h6>
                                <p class="text-muted-foreground mb-2">Speak directly with our team</p>
                                <a class="text-primary hover:underline">+959 955158471</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-map-pin h-6 w-6 text-accent">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                    </path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div>
                                <h6 class="font-semibold mb-1">
                                    Visit Us
                                </h6>
                                <p class="text-muted-foreground mb-2">Come by our culinary studio</p>
                                <address class="text-muted-foreground not-italic">
                                    123 Culinary Street <br> Food District, FC 12345 <br>
                                    United States
                                </address>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-muted flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-clock h-6 w-6 text-muted-foreground">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <div>
                                <h6 class="font-semibold mb-1">
                                    Business Hours
                                </h6>
                                <div class="text-muted-foreground space-y-1">
                                    <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                                    <p>Saturday: 10:00 AM - 4:00 PM</p>
                                    <p>Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-card rounded-xl border shadow-sm p-6 flex flex-col gap-6">
                    <h5 class="font-semibold">Frequently Asked Questions</h5>
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <h6 class="font-semibold">How can I submit my own recipe?</h6>
                            <p class="text-muted-foreground text-sm">Visit our Community Cookbook page and click on "Share
                                Recipe" to submit
                                your culinary creations.</p>
                        </div>
                        <div class="space-y-2">
                            <h6 class="font-semibold">Can I request a specific recipe?</h6>
                            <p class="text-muted-foreground text-sm">Use the contact form and select "Recipe Request" as
                                your inquiry type.</p>
                        </div>
                        <div class="space-y-2">
                            <h6 class="font-semibold">Do you offer cooking classes?</h6>
                            <p class="text-muted-foreground text-sm">Yes! Check out our upcoming cooking events on the
                                homepage or contact us for private classes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-card rounded-xl border shadow-sm p-6 flex flex-col gap-6">
                    <div>
                        <h4 class="text-2xl font-bold mb-2">Send us a message</h4>
                        <p class="text-muted-foreground">Fill out the form below and we'll get back to you soon</p>
                    </div>
                    <form class="space-y-6" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <x-text-input field="subject" title="Subject" placeholder="Brief subject line"
                            :isMandatory="true" />
                        <x-text-area field="message" title="Message" placeholder="Write your thoughts here..."
                            :isMandatory="true" />

                        <div class="grid grid-cols-1 gap-4">

                            @auth
                                <button type="submit"
                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all shrink-0 outline-none bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 w-full h-10 rounded-md gap-1.5 px-3">
                                    Send Message
                                </button>
                            @endauth
                            @guest
                                <button type="button" onclick="showToast({title: 'Need to login first!'})"
                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all shrink-0 outline-none bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 w-full h-10 rounded-md gap-1.5 px-3">
                                    Send Message
                                </button>
                            @endguest
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection