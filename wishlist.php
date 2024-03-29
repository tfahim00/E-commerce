<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Wishlist</h1>
    </header>

    <main>
        <ul>
            <?php
            // Check if wishlist items are stored in session
            session_start();
            if(isset($_SESSION['wishlist']) && !empty($_SESSION['wishlist'])) {
                // Display wishlist items
                foreach ($_SESSION['wishlist'] as $item) {
                    echo '<li>' . $item['name'] . ' - ' . $item['price'] . '</li>';
                }
            } else {
                echo '<li>No items in wishlist</li>';
            }
            ?>
        </ul>
    </main>

    <footer>
        <p>&copy; 2024 E-Commerce Store. All rights reserved.</p>
    </footer>
</body>
</html>
