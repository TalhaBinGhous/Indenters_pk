 // Search button event listener
 document.querySelector('.search_btn').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('.header_search_content').style.display = 'block';
});

// Close button event listener
document.querySelector('.close_btn').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('.header_search_content').style.display = 'none';
});

// Search form event listener
document.getElementById('searchbox').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get the search query
    const query = document.getElementById('search_query_top').value.toLowerCase().trim();

    // Define your pages and their keywords
    const pages = [
        { url: 'about.html', keywords: ['about', 'company', 'info'] },
        { url: 'services.html', keywords: ['services', 'offer', 'products'] },
        { url: 'contact_us.html', keywords: ['contact', 'support', 'help'] }
        // Add more pages and keywords as needed
    ];

    // Find a matching page
    const matchedPage = pages.find(page => page.keywords.some(keyword => keyword.includes(query)));

    if (matchedPage) {
        window.location.href = matchedPage.url; // Redirect to the matched page
    } else {
        alert('No matching page found.'); // Show an alert if no match is found
    }
});