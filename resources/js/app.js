import '../css/app.css';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/// Mobile menu toggle
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Set up the Intersection Observer for counters instead of running them immediately
    setupCounterObserver();

    // Close mobile menu on link click
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });
});

function setupCounterObserver() {
    const counters = document.querySelectorAll('[data-counter]');
    
    const observerOptions = {
        root: null, // uses the viewport
        threshold: 0.2 // triggers when 20% of the element is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            // Check if the element has scrolled into view
            if (entry.isIntersecting) {
                const counter = entry.target;
                animateSingleCounter(counter);
                // Stop observing this specific element so it doesn't re-animate if they scroll up and down again
                observer.unobserve(counter);
            }
        });
    }, observerOptions);

    // Tell the observer to watch each counter
    counters.forEach(counter => observer.observe(counter));
}

function animateSingleCounter(counter) {
    const target = parseInt(counter.getAttribute('data-counter'), 10);
    let current = 0;
    const increment = target / 30;

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            counter.textContent = target + '+';
            clearInterval(timer);
        } else {
            counter.textContent = Math.floor(current) + '+';
        }
    }, 50);
}