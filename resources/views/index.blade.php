@extends('layout')

@section('title', 'Home - Army Dog Center')
@section('description', 'Professional dog training, protection, and search & rescue services.')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-dark to-gray-800 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-5xl font-bold mb-6">Professional Dog Training & Protection</h1>
                <p class="text-xl text-gray-300 mb-8">Expert military and civilian dog training services in Pakistan. Available 24/7 for emergency response.</p>
                <div class="flex gap-4">
                    <a href="/contact" class="btn-primary">Call us - 03000000000</a>
                </div>
            </div>
            <div class="text-center">
                <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGRvZ3xlbnwwfHwwfHx8MA%3D%3D" alt="">
            </div>
        </div>
    </div>
</section>


<!-- Why We Are Different Section -->
<!-- <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-4">
            Why We Are <span class="text-primary">Different</span>
        </h2>
        <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
            Our commitment to excellence sets us apart from ordinary dog trainers
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="text-4xl mb-4">🎖️</div>
                <h3 class="text-xl font-bold mb-3">Military Expertise</h3>
                <p class="text-gray-600">Trained by military professionals with decades of field experience in tactical operations and emergency response.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="text-4xl mb-4">🏆</div>
                <h3 class="text-xl font-bold mb-3">Proven Results</h3>
                <p class="text-gray-600">Our dogs have successfully completed hundreds of high-risk operations across Pakistan with exceptional performance.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="text-4xl mb-4">⚡</div>
                <h3 class="text-xl font-bold mb-3">Rapid Deployment</h3>
                <p class="text-gray-600">Available 24/7 for emergency situations with fastest response time in the country for critical operations.</p>
            </div>
        </div>
    </div>
</section> -->

<!-- About Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center">
                <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGRvZ3xlbnwwfHwwfHx8MA%3D%3D" alt="Elite Tactical Dog" class="w-full max-w-md rounded-lg shadow-lg">
            </div>
            <div>
                <h2 class="text-4xl text-primary font-bold mb-4 mt-2">
                    About Us
                </h2>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Our elite tactical dogs undergo rigorous training programs designed specifically for high-pressure security and emergency response situations. Each canine is carefully selected, bred, and trained to meet the strictest international standards.
                </p>
                <p class="text-gray-700 mb-8 leading-relaxed">
                    With specialized handlers accompanying each dog, we ensure seamless integration with existing security protocols and guaranteed success in real-world operations.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-4">
            Our <span class="text-primary">Services</span>
        </h2>
        <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
            Comprehensive canine security and emergency response solutions
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                <div class="bg-gradient-to-br from-primary to-amber-700 h-48 flex items-center justify-center">
                    <span class="text-6xl">🔍</span>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-3">Detection Dogs</h3>
                    <p class="text-gray-600 mb-4">Specialized training for explosive, narcotics, and hazard detection for security checkpoints and operations.</p>
                </div>
            </div>
            
            <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                <div class="bg-gradient-to-br from-primary to-amber-700 h-48 flex items-center justify-center">
                    <span class="text-6xl">🛡️</span>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-3">Protection Dogs</h3>
                    <p class="text-gray-600 mb-4">Elite canines trained for personal protection, VIP security, and facility defense with precision control.</p>
                </div>
            </div>
            
            <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                <div class="bg-gradient-to-br from-primary to-amber-700 h-48 flex items-center justify-center">
                    <span class="text-6xl">🚨</span>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-3">Search & Rescue</h3>
                    <p class="text-gray-600 mb-4">Specialized dogs for disaster response, missing persons search, and emergency rescue operations nationwide.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery -->
@include('components.gallery')

<!-- Training Process Section -->
<section class="py-20 bg-dark text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-4">
            Our <span class="text-primary">Training Process</span>
        </h2>
        <p class="text-center text-gray-300 mb-12 max-w-2xl mx-auto">
            Comprehensive military-grade training methodology
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="bg-primary rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">1</div>
                <h3 class="text-lg font-bold mb-2">Selection</h3>
                <p class="text-gray-300">Carefully breed or source dogs with ideal genetics and temperament for training.</p>
            </div>
            
            <div class="text-center">
                <div class="bg-primary rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">2</div>
                <h3 class="text-lg font-bold mb-2">Foundation</h3>
                <p class="text-gray-300">6-month intensive obedience and behavioral foundation training program.</p>
            </div>
            
            <div class="text-center">
                <div class="bg-primary rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">3</div>
                <h3 class="text-lg font-bold mb-2">Specialization</h3>
                <p class="text-gray-300">12-month specialized training for detection, protection, or search & rescue role.</p>
            </div>
            
            <div class="text-center">
                <div class="bg-primary rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">4</div>
                <h3 class="text-lg font-bold mb-2">Deployment</h3>
                <p class="text-gray-300">Final certification and field deployment with dedicated professional handler.</p>
            </div>
        </div>
    </div>
</section>

<!-- Cities we serve -->
@include('components.where-we-serve')

<!-- Stats Section -->
<section class="py-20 bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold mb-2" data-counter="500">0+</div>
                <p class="text-lg opacity-90">Dogs Trained</p>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold mb-2" data-counter="1000">0+</div>
                <p class="text-lg opacity-90">Operations Completed</p>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold mb-2" data-counter="25">0+</div>
                <p class="text-lg opacity-90">Years Experience</p>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold mb-2">24/7</div>
                <p class="text-lg opacity-90">Emergency Response</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Our Dogs Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-4">
            Why Our <span class="text-primary">Dogs</span>
        </h2>
        <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
            What makes our canines the preferred choice for security and rescue operations
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-4 font-bold">1</div>
                <h3 class="text-xl font-bold mb-3">Advanced Genetics</h3>
                <p class="text-gray-600">Carefully bred from superior genetics to ensure intelligence, agility, and natural instinct for security work.</p>
                <div><img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGRvZ3xlbnwwfHwwfHx8MA%3D%3D" alt=""></div>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-4 font-bold">2</div>
                <h3 class="text-xl font-bold mb-3">Intensive Training</h3>
                <p class="text-gray-600">Minimum 18-24 months of continuous, military-grade training with certified handlers and specialists.</p>
                <div><img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGRvZ3xlbnwwfHwwfHx8MA%3D%3D" alt=""></div>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-4 font-bold">3</div>
                <h3 class="text-xl font-bold mb-3">Behavioral Excellence</h3>
                <p class="text-gray-600">Each dog is psychologically evaluated and trained for perfect obedience and controlled aggression.</p>
                <div><img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGRvZ3xlbnwwfHwwfHx8MA%3D%3D" alt=""></div>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-4 font-bold">4</div>
                <h3 class="text-xl font-bold mb-3">Real-World Testing</h3>
                <p class="text-gray-600">Deployed in actual security operations to validate training and ensure combat-ready capabilities.</p>
                <div><img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGRvZ3xlbnwwfHwwfHx8MA%3D%3D" alt=""></div>               
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-4 font-bold">5</div>
                <h3 class="text-xl font-bold mb-3">Handler Partnership</h3>
                <p class="text-gray-600">Paired with dedicated handlers during training to build unbreakable bonds and perfect synchronization.</p>
                <div><img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGRvZ3xlbnwwfHwwfHx8MA%3D%3D" alt=""></div>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-4 font-bold">6</div>
                <h3 class="text-xl font-bold mb-3">Ongoing Support</h3>
                <p class="text-gray-600">Lifetime support, refresher training, and handler consultation to maintain peak performance.</p>
                <div><img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGRvZ3xlbnwwfHwwfHx8MA%3D%3D" alt=""></div>
            </div>
        </div>
    </div>
</section>
@endsection
