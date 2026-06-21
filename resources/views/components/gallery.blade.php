<!-- Gallery Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">
                Our <span class="text-primary">Gallery</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                Explore our extensive portfolio of trained military and security dogs in action, showcasing their exceptional skills, discipline, and capabilities in real-world operations.
            </p>
            
            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-3">
                <button class="filter-btn active" data-filter="all">
                    <span class="inline-block h-8 w-8 bg-primary rounded-full mr-2"></span>
                    All
                </button>
                <button class="filter-btn" data-filter="training">Training</button>
                <button class="filter-btn" data-filter="operations">Operations</button>
                <button class="filter-btn" data-filter="ceremonies">Ceremonies</button>
                <button class="filter-btn" data-filter="detection">Detection</button>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" id="gallery">
            <!-- Item 1: Large featured -->
            <div class="gallery-item md:col-span-2 md:row-span-2 group" data-filter="training">
                <div class="relative h-96 md:h-full bg-gradient-to-br from-primary to-amber-700 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-white text-center">
                            <div class="text-5xl font-bold">800 x 600</div>
                            <div class="text-lg mt-2 opacity-80">Training Operations</div>
                        </span>
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition"></div>
                </div>
                <div class="mt-4">
                    <span class="inline-block px-3 py-1 bg-primary text-white text-sm rounded-full mb-2">Training</span>
                    <p class="text-gray-700 font-semibold">Advanced tactical training showcasing precision and discipline</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="gallery-item group" data-filter="ceremonies">
                <div class="relative h-64 bg-gradient-to-br from-amber-600 to-amber-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-white text-center">
                            <div class="text-3xl font-bold">400 x 300</div>
                            <div class="text-sm mt-2 opacity-80">Ceremonies</div>
                        </span>
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition"></div>
                </div>
                <div class="mt-4">
                    <span class="inline-block px-3 py-1 bg-amber-600 text-white text-sm rounded-full mb-2">Ceremonies</span>
                    <p class="text-gray-700 font-semibold">Recognition and award ceremonies</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="gallery-item group" data-filter="detection">
                <div class="relative h-64 bg-gradient-to-br from-green-600 to-green-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-white text-center">
                            <div class="text-3xl font-bold">400 x 300</div>
                            <div class="text-sm mt-2 opacity-80">Detection Work</div>
                        </span>
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition"></div>
                </div>
                <div class="mt-4">
                    <span class="inline-block px-3 py-1 bg-green-600 text-white text-sm rounded-full mb-2">Detection</span>
                    <p class="text-gray-700 font-semibold">Explosive and narcotics detection</p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="gallery-item group" data-filter="operations">
                <div class="relative h-64 bg-gradient-to-br from-red-600 to-red-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-white text-center">
                            <div class="text-3xl font-bold">400 x 300</div>
                            <div class="text-sm mt-2 opacity-80">Field Operations</div>
                        </span>
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition"></div>
                </div>
                <div class="mt-4">
                    <span class="inline-block px-3 py-1 bg-red-600 text-white text-sm rounded-full mb-2">Operations</span>
                    <p class="text-gray-700 font-semibold">Real-world security operations</p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="gallery-item group" data-filter="training">
                <div class="relative h-64 bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-white text-center">
                            <div class="text-3xl font-bold">400 x 300</div>
                            <div class="text-sm mt-2 opacity-80">Training Session</div>
                        </span>
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition"></div>
                </div>
                <div class="mt-4">
                    <span class="inline-block px-3 py-1 bg-blue-600 text-white text-sm rounded-full mb-2">Training</span>
                    <p class="text-gray-700 font-semibold">Handler and dog training integration</p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="gallery-item group" data-filter="operations">
                <div class="relative h-64 bg-gradient-to-br from-purple-600 to-purple-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-white text-center">
                            <div class="text-3xl font-bold">400 x 300</div>
                            <div class="text-sm mt-2 opacity-80">Operations</div>
                        </span>
                    </div>
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition"></div>
                </div>
                <div class="mt-4">
                    <span class="inline-block px-3 py-1 bg-purple-600 text-white text-sm rounded-full mb-2">Operations</span>
                    <p class="text-gray-700 font-semibold">Multi-dog tactical operations</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .filter-btn {
        @apply px-4 py-2 border-2 border-gray-300 rounded-full text-gray-700 font-semibold hover:border-primary hover:text-primary transition;
    }
    
    .filter-btn.active {
        @apply border-primary text-primary bg-primary bg-opacity-10;
    }
</style>

<script>
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const filter = this.dataset.filter;
        
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        
        document.querySelectorAll('.gallery-item').forEach(item => {
            if (filter === 'all' || item.dataset.filter === filter) {
                item.style.display = '';
                setTimeout(() => item.style.opacity = '1', 10);
            } else {
                item.style.opacity = '0';
                setTimeout(() => item.style.display = 'none', 300);
            }
        });
    });
});
</script>
