<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's Collection</title>
    <script src="https://kit.fontawesome.com/b3c62463fb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Men</a>
                <div class="dropdown-content">
                    <a href="men_formal.php?type=formal">Formal</a>
                    <a href="men_casual.php?type=casual">Casual</a>
                    <a href="men_wallet.php?type=wallet">Wallet</a>
                 </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Women</a>
                <div class="dropdown-content">
                    <a href="women_dress.php?type=dress">Dress</a>
                    <a href="women_jewelry.php?type=jewelry">Jewelry</a>
                    <a href="women_accessories.php?type=accessories">Accessories</a>
                </div>
            </li>
            <li><a href="kids.php">Kids</a></li>
            <li><a href="contactUs.php">Contact Us</a></li> <!-- Add wishlist button -->
        </ul>
    </nav>
</header>


    <main>
        <h1>Jwelleries</h1>
        <section id="women-items">
            <!-- Women's items will be populated by PHP -->
            <?php
            // Simulated data for women's items
            $womenItems = array(
                array(
                    'name' => "Sita har",
                    'code' => "WD015",
                    'material' => "Gold",
                    'price' => "$499.99",
                    'image' => "images/sitahar.jpg"
                ),
                array(
                    'name' => "Bracelet",
                    'code' => "WD015",
                    'material' => "Gold",
                    'price' => "$499.99",
                    'image' => "images/bracelet.jpg"
                ),
                array(
                    'name' => "Nose Pin",
                    'code' => "WD015",
                    'material' => "Gold",
                    'price' => "$499.99",
                    'image' => "images/nose_pin.jpg"
                ),
                array(
                    'name' => "Ear Ring",
                    'code' => "WD015",
                    'material' => "Gold",
                    'price' => "$499.99",
                    'image' => "images/ear_ring.webp"
                ),
                array(
                    'name' => "Payel",
                    'code' => "WD015",
                    'material' => "Gold",
                    'price' => "$499.99",
                    'image' => "images/payel.jpg"
                ),
                array(
                    'name' => "Locket",
                    'code' => "WD015",
                    'material' => "Gold",
                    'price' => "$499.99",
                    'image' => "images/locket.jpeg"
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
        <a href="#"><i class="fa-brands fa-facebook" style="color: #74C0FC"></i></a>
        <a href="#"><i class="fa-brands fa-instagram" style="color: #74C0FC"></i></a>
        <a href="#"><i class="fa-brands fa-twitter" style="color: #74C0FC"></i></a>
        <p>&copy; 2024 E-Commerce Store. All rights reserved.</p>
    </footer>
</body>
</html>
