// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mobileMenu = document.getElementById('mobileMenu');

if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close menu when a link is clicked
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });
}

// Counter Animation for Stats
function animateCounters() {
    const counters = document.querySelectorAll('.counter');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const start = Date.now();
        
        function updateCount() {
            const now = Date.now();
            const progress = Math.min((now - start) / duration, 1);
            const current = Math.floor(progress * target);
            counter.textContent = current;
            
            if (progress < 1) {
                requestAnimationFrame(updateCount);
            } else {
                counter.textContent = target;
            }
        }
        
        // Only animate if element is visible
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                updateCount();
                observer.unobserve(counter);
            }
        });
        
        observer.observe(counter);
    });
}

// Initialize counters on page load
document.addEventListener('DOMContentLoaded', () => {
    animateCounters();
});

// Form Validation and Submission
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData);
        
        // Basic validation
        if (!data.name || !data.email || !data.phone || !data.message) {
            alert('Please fill in all required fields.');
            return;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(data.email)) {
            alert('Please enter a valid email address.');
            return;
        }
        
        // Phone validation
        const phoneRegex = /^\d{10,}$/;
        if (!phoneRegex.test(data.phone.replace(/\D/g, ''))) {
            alert('Please enter a valid phone number.');
            return;
        }
        
        // Show success message (in real implementation, this would send to server)
        alert('Thank you for your message! We will contact you soon.');
        contactForm.reset();
    });
}

// Smooth Scroll for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

// Scroll to Top Button
function initScrollToTop() {
    const scrollButton = document.createElement('button');
    scrollButton.innerHTML = '↑';
    scrollButton.className = 'fixed bottom-6 right-6 bg-amber-500 hover:bg-amber-600 text-gray-900 font-bold w-12 h-12 rounded-full hidden transition-all z-50';
    scrollButton.id = 'scrollToTop';
    document.body.appendChild(scrollButton);
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollButton.classList.remove('hidden');
        } else {
            scrollButton.classList.add('hidden');
        }
    });
    
    scrollButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

document.addEventListener('DOMContentLoaded', initScrollToTop);

// Active Navigation Link
function setActiveNavLink() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('nav a[href]');
    
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath || 
            (currentPath === '/' && link.getAttribute('href') === 'index.php')) {
            link.classList.add('text-amber-500', 'font-semibold');
        } else {
            link.classList.remove('text-amber-500', 'font-semibold');
        }
    });
}

document.addEventListener('DOMContentLoaded', setActiveNavLink);

// Service Selection in Contact Form
const serviceRadios = document.querySelectorAll('input[name="service"]');
const serviceTypeSelect = document.querySelector('select[name="service_type"]');

serviceRadios.forEach(radio => {
    radio.addEventListener('change', () => {
        if (serviceTypeSelect) {
            serviceTypeSelect.value = radio.value;
        }
    });
});

console.log('Army Dog Center website initialized successfully');
