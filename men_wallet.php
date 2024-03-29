<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Collection</title>
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
        <h1>Wallet</h1>
        <section id="men-items">
            <!-- Men's items will be populated by PHP -->
            <?php
            // Simulated data for men's items
            $menItems = array(
                array(
                    'name' => "Richman Wallet",
                    'code' => "WD001",
                    'material' => "leather",
                    'price' => "$499.99",
                    'image' => "images/Richman_wallet.jpeg"
                ),
                array(
                    'name' => "Easy Wallet",
                    'code' => "WD002",
                    'material' => "leather",
                    'price' => "$499.99",
                    'image' => "images/easy_wallet.webp"
                ),
                array(
                    'name' => "Sailor Wallet",
                    'code' => "WD003",
                    'material' => "leather",
                    'price' => "$499.99",
                    'image' => "images/sailor_wallet.jpg"
                ),
                array(
                    'name' => "Lotto Wallet",
                    'code' => "WD004",
                    'material' => "leather",
                    'price' => "$499.99",
                    'image' => "images/lotto_wallet.webp"
                ),
                array(
                    'name' => "Bata Wallet",
                    'code' => "WD005",
                    'material' => "leather",
                    'price' => "$499.99",
                    'image' => "images/bata_wallet.webp"
                ),
                array(
                    'name' => "Apex Wallet",
                    'code' => "WD006",
                    'material' => "leather",
                    'price' => "$499.99",
                    'image' => "images/apex_wallet.jpg"
                ),
                // Add more men's items as needed
            );

            // Display men's items
            foreach ($menItems as $item) {
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
