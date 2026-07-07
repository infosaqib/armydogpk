<!-- Gallery Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">
                Our <span class="text-primary">Gallery</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                Explore our extensive portfolio of trained military and security dogs in action, showcasing their
                exceptional skills, discipline, and capabilities in real-world operations.
            </p>
        </div>

        <div class="flex flex-wrap flex-col md:flex-row -m-1 md:-m-2">

            <div class="flex flex-wrap w-full md:w-1/2">
                <div class="p-1 md:p-2 w-full sm:w-1/2 lg:w-1/2">
                    <img src="{{ asset('images/site_images/gallery-k9-detection-airport-luggage.jpeg') }}"
                        alt="K9 detection dog inspecting luggage at baggage claim, Delhi Indira Gandhi International Airport"
                        width="1200" height="900" class="w-full object-cover h-48 sm:h-64 lg:h-full object-center block" loading="lazy">
                </div>
                <div class="p-1 md:p-2 w-full sm:w-1/2 lg:w-1/2">
                    <img src="{{ asset('images/site_images/gallery-k9-search-rescue-airport.jpeg') }}"
                        alt="K9 search and rescue dog inspecting a suitcase in the airport terminal with its police handler"
                        width="1200" height="900" class="w-full object-cover h-48 sm:h-64 lg:h-full object-center block" loading="lazy">
                </div>
                <div class="p-1 md:p-2 w-full">
                    <img src="{{ asset('images/site_images/gallery-k9-tracking-baggage-claim.jpeg') }}"
                        alt="K9 tracking dog inspecting luggage on the baggage carousel with its handler"
                        width="1200" height="900" class="w-full object-cover h-48 sm:h-64 lg:h-full object-center block" loading="lazy">
                </div>
            </div>

            <div class="flex flex-wrap w-full md:w-1/2">
                <div class="p-1 md:p-2 w-full">
                    <img src="{{ asset('images/site_images/home-hero-k9-search-rescue-dog-handler.jpeg') }}"
                        alt="Army Dog Center K9 search and rescue dog inspecting luggage at a conference venue"
                        width="1200" height="900" class="w-full object-cover h-48 sm:h-64 lg:h-full object-center block" loading="lazy">
                </div>
                <div class="p-1 md:p-2 w-full sm:w-1/2 lg:w-1/2">
                    <img src="{{ asset('images/site_images/why-choose-us-k9-army-dog-home-search.jpeg') }}"
                        alt="Army K9 handler and police officer searching luggage with a trained dog during a home security check"
                        width="1200" height="900" class="w-full object-cover h-48 sm:h-64 lg:h-full object-center block" loading="lazy">
                </div>
                <div class="p-1 md:p-2 w-full sm:w-1/2 lg:w-1/2">
                    <img src="{{ asset('images/site_images/about-hero-police-k9-airport-field-patrol.jpeg') }}"
                        alt="Army Dog Center police K9 dogs on duty at the airport, a rural property search, and a field patrol"
                        width="1200" height="900" class="w-full object-cover h-48 sm:h-64 lg:h-full object-center block" loading="lazy">
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.filter-btn {
    @apply px-4 py-2 border-2 border-gray-300 rounded-full text-gray-700 font-semibold hover: border-primary hover:text-primary transition;
}

.filter-btn.active {
    @apply border-primary text-primary bg-primary-100;
}
</style>