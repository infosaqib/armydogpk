<section class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">
                Where We <span class="text-primary">Serve</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Army Dog Centre provides professional dog training and security services throughout Pakistan with rapid
                deployment capabilities in every province and major city.
            </p>
        </div>

        <!-- Province Filter -->
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button class="px-4 py-2 rounded-full bg-dark text-white text-sm font-semibold hover:bg-primary transition"
                onclick="filterProvinces('all')">
                All Provinces
            </button>
            <button
                class="px-4 py-2 rounded-full bg-gray-200 text-dark text-sm font-semibold hover:bg-primary hover:text-white transition"
                onclick="filterProvinces('punjab')">
                Punjab
            </button>
            <button
                class="px-4 py-2 rounded-full bg-gray-200 text-dark text-sm font-semibold hover:bg-primary hover:text-white transition"
                onclick="filterProvinces('sindh')">
                Sindh
            </button>
            <button
                class="px-4 py-2 rounded-full bg-gray-200 text-dark text-sm font-semibold hover:bg-primary hover:text-white transition"
                onclick="filterProvinces('kpk')">
                KPK
            </button>
            <button
                class="px-4 py-2 rounded-full bg-gray-200 text-dark text-sm font-semibold hover:bg-primary hover:text-white transition"
                onclick="filterProvinces('balochistan')">
                Balochistan
            </button>
        </div>

        <!-- Service Locations Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Punjab -->
            <div class="location-card" data-province="punjab">
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-primary">
                    <div class="flex items-start gap-4">

                        <div class="">
                            <h3 class="text-lg font-bold text-dark mb-1">Lahore, Punjab</h3>

                        </div>
                    </div>
                </div>
            </div>

            <div class="location-card" data-province="punjab">
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-primary">
                    <div class="flex items-start gap-4">

                        <div class="">
                            <h3 class="text-lg font-bold text-dark mb-1">Islamabad, Punjab</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="location-card" data-province="punjab">
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-primary">
                    <div class="flex items-start gap-4">

                        <div class="">
                            <h3 class="text-lg font-bold text-dark mb-1">Rawalpindi, Punjab</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sindh -->
            <div class="location-card" data-province="sindh">
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-primary">
                    <div class="flex items-start gap-4">

                        <div class="">
                            <h3 class="text-lg font-bold text-dark mb-1">Karachi, Sindh</h3>

                        </div>
                    </div>
                </div>
            </div>

            <div class="location-card" data-province="sindh">
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-primary">
                    <div class="flex items-start gap-4">

                        <div class="">
                            <h3 class="text-lg font-bold text-dark mb-1">Hyderabad, Sindh</h3>

                        </div>
                    </div>
                </div>
            </div>

            <!-- KPK -->
            <div class="location-card" data-province="kpk">
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-primary">
                    <div class="flex items-start gap-4">

                        <div class="">
                            <h3 class="text-lg font-bold text-dark mb-1">Peshawar, KPK</h3>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Balochistan -->
            <div class="location-card" data-province="balochistan">
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-primary">
                    <div class="flex items-start gap-4">

                        <div class="">
                            <h3 class="text-lg font-bold text-dark mb-1">Quetta, Balochistan</h3>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Locations -->
            <div class="location-card" data-province="all">
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-primary">
                    <div class="flex items-start gap-4">

                        <div class="">
                            <h3 class="text-lg font-bold text-dark mb-1">Faisalabad, Punjab</h3>

                        </div>
                    </div>
                </div>
            </div>

            <div class="location-card" data-province="all">
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-primary">
                    <div class="flex items-start gap-4">

                        <div class="">
                            <h3 class="text-lg font-bold text-dark mb-1">Multan, Punjab</h3>

                        </div>
                    </div>
                </div>
            </div>

            <div class="location-card" data-province="all">
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-primary">
                    <div class="flex items-start gap-4">

                        <div class="">
                            <h3 class="text-lg font-bold text-dark mb-1">Abbottabad, KPK</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-16 text-center">
            <p class="text-gray-600 mb-6">Our services are available nationwide with rapid deployment capabilities for
                emergency situations</p>
            <a href="/contact"
                class="inline-block bg-primary hover:bg-amber-700 text-dark px-8 py-4 rounded-lg font-bold transition">
                Request Service in Your Area
            </a>
        </div>
    </div>
</section>

<script>
function filterProvinces(province) {
    const cards = document.querySelectorAll('.location-card');
    const buttons = document.querySelectorAll('button');

    // Update button styles
    buttons.forEach(btn => {
        if (btn.textContent.toLowerCase().includes('all provinces') && province === 'all') {
            btn.classList.add('bg-dark', 'text-white');
            btn.classList.remove('bg-gray-200', 'text-dark');
        } else if (btn.textContent.toLowerCase().includes(province)) {
            btn.classList.add('bg-dark', 'text-white');
            btn.classList.remove('bg-gray-200', 'text-dark');
        } else if (province !== 'all') {
            btn.classList.remove('bg-dark', 'text-white');
            btn.classList.add('bg-gray-200', 'text-dark');
        }
    });

    // Show/hide cards
    cards.forEach(card => {
        const cardProvince = card.getAttribute('data-province');
        if (province === 'all' || cardProvince === province) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}
</script>