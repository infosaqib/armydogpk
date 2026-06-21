@extends('layout')

@section('title', 'Home - Army Dog Center')
@section('description', 'Professional dog training, protection, and search & rescue services.')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-b from-dark via-gray-900 to-dark text-white py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <h1 class="text-5xl lg:text-6xl font-bold mb-6">
                Why Big Canines <span class="text-primary">Matters</span>
            </h1>
            <p class="text-xl text-gray-300 mb-8">
                At Army Dog Centre Pakistan, we understand that elite canines are more than just dogs—they&apos;re critical assets for security, detection, and rescue operations. Our extensively trained military dogs provide unparalleled service.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="/contact" class="btn-primary">Contact Us</a>
                <a href="#services" class="btn-secondary">Explore Services</a>
            </div>
        </div>
    </div>
</section>

<!-- Why We Are Different Section -->
<section class="py-20 bg-gray-50">
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
</section>

<!-- Featured Dog Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center">
                <img src="/images/tactical-dog.png" alt="Elite Tactical Dog" class="w-full max-w-md rounded-lg shadow-lg">
            </div>
            <div>
                <span class="text-primary font-semibold">Elite Canine</span>
                <h2 class="text-4xl font-bold mb-4 mt-2">
                    Tactical Training at Its <span class="text-primary">Best</span>
                </h2>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Our elite tactical dogs undergo rigorous training programs designed specifically for high-pressure security and emergency response situations. Each canine is carefully selected, bred, and trained to meet the strictest international standards.
                </p>
                <p class="text-gray-700 mb-8 leading-relaxed">
                    With specialized handlers accompanying each dog, we ensure seamless integration with existing security protocols and guaranteed success in real-world operations.
                </p>
                <a href="/services" class="text-primary font-semibold text-lg hover:underline">Learn About Our Training Process →</a>
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
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-4 font-bold">2</div>
                <h3 class="text-xl font-bold mb-3">Intensive Training</h3>
                <p class="text-gray-600">Minimum 18-24 months of continuous, military-grade training with certified handlers and specialists.</p>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-4 font-bold">3</div>
                <h3 class="text-xl font-bold mb-3">Behavioral Excellence</h3>
                <p class="text-gray-600">Each dog is psychologically evaluated and trained for perfect obedience and controlled aggression.</p>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-4 font-bold">4</div>
                <h3 class="text-xl font-bold mb-3">Real-World Testing</h3>
                <p class="text-gray-600">Deployed in actual security operations to validate training and ensure combat-ready capabilities.</p>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-4 font-bold">5</div>
                <h3 class="text-xl font-bold mb-3">Handler Partnership</h3>
                <p class="text-gray-600">Paired with dedicated handlers during training to build unbreakable bonds and perfect synchronization.</p>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-4 font-bold">6</div>
                <h3 class="text-xl font-bold mb-3">Ongoing Support</h3>
                <p class="text-gray-600">Lifetime support, refresher training, and handler consultation to maintain peak performance.</p>
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
                    <a href="/services" class="text-primary font-semibold hover:underline">View Details →</a>
                </div>
            </div>
            
            <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                <div class="bg-gradient-to-br from-primary to-amber-700 h-48 flex items-center justify-center">
                    <span class="text-6xl">🛡️</span>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-3">Protection Dogs</h3>
                    <p class="text-gray-600 mb-4">Elite canines trained for personal protection, VIP security, and facility defense with precision control.</p>
                    <a href="/services" class="text-primary font-semibold hover:underline">View Details →</a>
                </div>
            </div>
            
            <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                <div class="bg-gradient-to-br from-primary to-amber-700 h-48 flex items-center justify-center">
                    <span class="text-6xl">🚨</span>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-3">Search & Rescue</h3>
                    <p class="text-gray-600 mb-4">Specialized dogs for disaster response, missing persons search, and emergency rescue operations nationwide.</p>
                    <a href="/services" class="text-primary font-semibold hover:underline">View Details →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dog Breeds Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-4">
            Our <span class="text-primary">Dog Breeds</span>
        </h2>
        <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
            Carefully selected breeds trained for specialized security operations
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-3">German Shepherd</h3>
                <p class="text-gray-600 mb-4">The preferred choice for military and police work worldwide. Highly intelligent, loyal, and trainable with exceptional work ethic.</p>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>✓ Superior intelligence and trainability</li>
                    <li>✓ Natural protective instinct</li>
                    <li>✓ Excellent agility and endurance</li>
                    <li>✓ Versatile for multiple roles</li>
                </ul>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-3">Belgian Malinois</h3>
                <p class="text-gray-600 mb-4">Elite detection and protection dogs used by special forces globally. Exceptional drive, speed, and bite strength for tactical operations.</p>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>✓ Extreme work drive and stamina</li>
                    <li>✓ Superior detection capabilities</li>
                    <li>✓ Explosive athletic ability</li>
                    <li>✓ Ideal for rapid deployment</li>
                </ul>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-3">Doberman Pinscher</h3>
                <p class="text-gray-600 mb-4">Sleek, powerful protection dogs with sharp intellect and fearlessness. Perfect for personal security and VIP protection services.</p>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>✓ Natural alertness and awareness</li>
                    <li>✓ Powerful bite force</li>
                    <li>✓ Elegant and intimidating presence</li>
                    <li>✓ Loyal and devoted protectors</li>
                </ul>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-3">Labrador Retriever</h3>
                <p class="text-gray-600 mb-4">Exceptional detection dogs with natural search instinct and friendly disposition. Preferred for rescue and narcotics detection.</p>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>✓ Outstanding sense of smell</li>
                    <li>✓ Natural retrieving ability</li>
                    <li>✓ Great water detection</li>
                    <li>✓ Eager and friendly temperament</li>
                </ul>
            </div>
        </div>
    </div>
</section>

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

<!-- Capabilities Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-4">
            Our <span class="text-primary">Capabilities</span>
        </h2>
        <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
            Comprehensive security solutions backed by proven expertise
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-6 border-l-4 border-primary">
                <h3 class="text-xl font-bold mb-2">Explosive Detection</h3>
                <p class="text-gray-600">Highly trained dogs capable of detecting trace amounts of explosives at checkpoints, airports, and public venues with 99.8% accuracy.</p>
            </div>
            
            <div class="p-6 border-l-4 border-primary">
                <h3 class="text-xl font-bold mb-2">Narcotics Detection</h3>
                <p class="text-gray-600">Specialized olfactory training for detecting illegal drugs across borders, ports, and law enforcement checkpoints.</p>
            </div>
            
            <div class="p-6 border-l-4 border-primary">
                <h3 class="text-xl font-bold mb-2">Personal Protection</h3>
                <p class="text-gray-600">Elite dogs trained for VIP security, executive protection, and high-risk environments with precision-controlled response.</p>
            </div>
            
            <div class="p-6 border-l-4 border-primary">
                <h3 class="text-xl font-bold mb-2">Property Defense</h3>
                <p class="text-gray-600">Trained for facility security, perimeter protection, and off-leash defense of sensitive military and governmental locations.</p>
            </div>
            
            <div class="p-6 border-l-4 border-primary">
                <h3 class="text-xl font-bold mb-2">Search & Rescue</h3>
                <p class="text-gray-600">Disaster response dogs trained to locate missing persons in collapsed structures, disaster zones, and wilderness areas.</p>
            </div>
            
            <div class="p-6 border-l-4 border-primary">
                <h3 class="text-xl font-bold mb-2">Handler Training</h3>
                <p class="text-gray-600">Comprehensive handler certification programs ensuring maximum effectiveness and safety during deployment.</p>
            </div>
        </div>
    </div>
</section>

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

<!-- CTA Section -->
<section class="py-20 bg-dark text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-4">
            Ready to Experience <span class="text-primary">Elite Canine</span> Security?
        </h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Contact our team today for a consultation and discover how our trained dogs can enhance your security operations.
        </p>
        <a href="/contact" class="inline-block bg-primary hover:bg-amber-700 text-dark px-8 py-4 rounded-lg font-bold text-lg transition">
            Request Consultation
        </a>
    </div>
</section>

@endsection
