// Pages array with URLs
const pages = [
    'index.html',
    'about_us.html',
    'services.html',
    'contact_us.html',
    'Clientele.html',
    'technology_partners.html',
    'machine_installation.html',
    'environmental_engineering.html',
    // Add more pages as needed
];

// Show the search box when the search button is clicked
document.querySelector('.search_btn').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('.header_search_content').style.display = 'block';
});

// Hide the search box when the close button is clicked
document.querySelector('.close_btn').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('.header_search_content').style.display = 'none';
});

// Handle the search form submission
document.getElementById('searchbox').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get the search query
    const query = document.getElementById('search_query_top').value.toLowerCase().trim();
    let found = false;

    // Function to fetch page content
    function fetchPageContent(page) {
        return fetch(page)
            .then(response => response.text())
            .then(html => {
                // Check if the query is present in the HTML content
                if (html.toLowerCase().includes(query)) {
                    window.location.href = page; // Redirect if match found
                    found = true;
                }
            })
            .catch(error => console.error(`Error fetching ${page}:`, error));
    }

    // Fetch each page content and check for match
    Promise.all(pages.map(page => fetchPageContent(page))).then(() => {
        if (!found) {
            alert('No matching content found on any page.');
        }
    });
});
