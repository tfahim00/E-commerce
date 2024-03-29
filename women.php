<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's Collection</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Women's Collection</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="men.php">Men</a></li>
                <li><a href="kids.php">Kids</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="women-items">
            <!-- Women's items will be populated by PHP -->
            <?php
            // Simulated data for women's items
            $womenItems = array(
                array(
                    'name' => "Stunning Dress",
                    'code' => "WD001",
                    'material' => "Premium Polyester",
                    'price' => "$499.99",
                    'image' => "images/women_dress.jpg"
                ),
                array(
                    'name' => "Designer Jeans",
                    'code' => "WJ002",
                    'material' => "Luxury Denim",
                    'price' => "$399.99",
                    'image' => "images/women_jeans.jpg"
                ),
                // Add more women's items as needed
            );

            // Display women's items
            foreach ($womenItems as $item) {
                echo '<article>';
                echo '<img src="' . $item['image'] . '" alt="' . $item['name'] . '">';
                echo '<h2>' . $item['name'] . '</h2>';
                echo '<p>Code: ' . $item['code'] . '</p>';
                echo '<p>Material: ' . $item['material'] . '</p>';
                echo '<p>Price: ' . $item['price'] . '</p>';
                echo '<button>Add to Cart</button>';
                echo '</article>';
            }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 E-Commerce Store. All rights reserved.</p>
    </footer>
</body>
</html>
