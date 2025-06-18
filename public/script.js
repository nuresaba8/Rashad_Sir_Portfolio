// Get the current path from the URL (e.g., 'contact' from '/contact')
const currentPath = window.location.pathname.replace(/^\/|\/$/g, '') || '/';

// Loop through all navigation links
document.querySelectorAll('.nav-link').forEach(link => {
    // Get href and normalize it
    let href = link.getAttribute('href');

    // Convert full URL to just path if necessary
    try {
        href = new URL(href, window.location.origin).pathname;
    } catch (e) {
        // If it's a relative path, it will stay as is
    }

    // Normalize href for comparison
    const normalizedHref = href.replace(/^\/|\/$/g, '') || '/';

    if (normalizedHref === currentPath) {
        link.classList.add(
            'bg-gradient-to-r',
            'from-indigo-600',
            'to-purple-600',
            'text-white',
            'shadow-md',
            'font-semibold'
        );
    } else {
        link.classList.remove(
            'bg-gradient-to-r',
            'from-indigo-600',
            'to-purple-600',
            'text-white',
            'shadow-md',
            'font-semibold'
        );
    }
});
