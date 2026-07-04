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
            <button class="province-filter-btn px-4 py-2 rounded-full bg-dark text-white ..." data-province="all"
                onclick="filterProvinces('all')">
                All Provinces
            </button>

            @foreach($provinces as $province)
            <button class="province-filter-btn px-4 py-2 rounded-full bg-gray-200 ..."
                data-province="{{ $province['key'] }}" onclick="filterProvinces('{{ $province['key'] }}')">
                {{ $province['name'] }}
            </button>
            @endforeach
        </div>

        <!-- Service Locations Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($provinces as $province)
            @foreach($province['cities'] as $city)

            <a href="{{ url('services/' . $city->slug . '.html') }}" class="location-card block"
                data-province="{{ $province['key'] }}">

                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-primary">
                    <h3 class="text-lg font-bold text-dark mb-1">
                        {{ $city->city }}
                    </h3>
                </div>

            </a>

            @endforeach
            @endforeach

        </div>

        <div id="no-locations-message" class="hidden text-center py-12">
            <h3 class="text-2xl font-semibold text-gray-700">
                No service locations available.
            </h3>

            <p class="mt-2 text-gray-500">
                We're expanding to this province soon.
            </p>
        </div>

        <!-- Call to Action -->
        <div class="mt-16 text-center">
            <p class="text-gray-600 mb-6">Our services are available nationwide with rapid deployment capabilities for
                emergency situations</p>
        </div>
    </div>
</section>

<script>
function filterProvinces(province) {

    const cards = document.querySelectorAll('.location-card');
    const buttons = document.querySelectorAll('.province-filter-btn');
    const emptyMessage = document.getElementById('no-locations-message');

    let visibleCount = 0;

    // Update button styles
    buttons.forEach(button => {

        const value = button.dataset.province;

        if (value === province) {
            button.classList.remove('bg-gray-200', 'text-dark');
            button.classList.add('bg-dark', 'text-white');
        } else {
            button.classList.remove('bg-dark', 'text-white');
            button.classList.add('bg-gray-200', 'text-dark');
        }

    });

    // Filter cards
    cards.forEach(card => {

        const cardProvince = card.dataset.province;

        if (province === 'all' || cardProvince === province) {
            card.style.display = '';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }

    });

    // Empty state
    if (visibleCount === 0) {
        emptyMessage.classList.remove('hidden');
    } else {
        emptyMessage.classList.add('hidden');
    }

}
</script>