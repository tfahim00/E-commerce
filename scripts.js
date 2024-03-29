// Fetch featured items from the server and populate the #featured-items section
document.addEventListener('DOMContentLoaded', function() {
    fetch('featured_items.php')
        .then(response => response.json())
        .then(data => {
            const featuredItemsSection = document.getElementById('featured-items');
            data.forEach(item => {
                const article = createArticle(item);
                featuredItemsSection.appendChild(article);
            });
        })
        .catch(error => console.error('Error fetching featured items:', error));

    fetch('women.php')
        .then(response => response.json())
        .then(data => {
            const womenItemsSection = document.getElementById('women-items');
            data.forEach(item => {
                const article = createArticle(item);
                womenItemsSection.appendChild(article);
            });
        })
        .catch(error => console.error('Error fetching women items:', error));

    function createArticle(item) {
        const article = document.createElement('article');
        article.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <h2>${item.name}</h2>
            <p>Price: $${item.price}</p>
            <button>Add to Cart</button>
        `;
        return article;
    }
    document.addEventListener('DOMContentLoaded', function() {
        const wishlistBtn = document.getElementById('wishlistBtn');
    
        // Function to handle adding product to wishlist
        function addToWishlist(event) {
            // Get product details (name, price, etc.)
            const product = event.target.closest('article');
            const productName = product.querySelector('h2').innerText;
            const productPrice = product.querySelector('p').innerText;
    
            // Create a new wishlist item element
            const wishlistItem = document.createElement('li');
            wishlistItem.textContent = productName + ' - ' + productPrice;
    
            // Add wishlist item to the wishlist
            wishlistBtn.appendChild(wishlistItem);
        }
    
        // Attach click event listener to all "Add to Cart" buttons
        const addToCartButtons = document.querySelectorAll('button');
        addToCartButtons.forEach(button => {
            button.addEventListener('click', addToWishlist);
        });
    });
    
    
});
