// Smooth Scrolling
document.querySelectorAll('nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});

// Contact Form Alert
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert("Your message has been sent successfully!");
});
