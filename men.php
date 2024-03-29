<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Collection</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Men's Collection</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="women.php">Women</a></li>
                <li><a href="kids.php">Kids</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="men-items">
            <!-- Men's items will be populated by PHP -->
            <?php
            // Fetch featured items from the server
            $featuredItemsJson = file_get_contents('http://localhost/e-commerce/featured_items.php');
            $featuredItems = json_decode($featuredItemsJson, true);

            // Check if $featuredItems is an array and not null
            if (is_array($featuredItems) && !empty($featuredItems)) {
                // Display men's items (same as featured items)
                foreach ($featuredItems as $item) {
                    echo '<article>';
                    echo '<img src="' . $item['image'] . '" alt="' . $item['name'] . '">';
                    echo '<h2>' . $item['name'] . '</h2>';
                    echo '<p>Price: ' . $item['price'] . '</p>';
                    echo '<button>Add to Cart</button>';
                    echo '</article>';
                }
            } else {
                echo '<p>No featured items available</p>';
            }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 E-Commerce Store. All rights reserved.</p>
    </footer>
</body>
</html>
