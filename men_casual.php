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
        <h1>Casual</h1>
        <section id="men-items">
            <!-- Men's items will be populated by PHP -->
            <?php
            // Simulated data for men's items
            $menItems = array(
                array(
                    'name' => "Lungi",
                    'code' => "WD001",
                    'material' => "Premium Polyester",
                    'price' => "$499.99",
                    'image' => "images/lungi.jpg"
                ),
                array(
                    'name' => "Denim Jacket",
                    'code' => "WD002",
                    'material' => "Luxury Denim",
                    'price' => "$399.99",
                    'image' => "images/denim_jacket.webp"
                ),
                array(
                    'name' => "Jeans Pant",
                    'code' => "WD003",
                    'material' => "Luxury Denim",
                    'price' => "$399.99",
                    'image' => "images/jeans_pant.webp"
                ),
                array(
                    'name' => "Polo T-shirt",
                    'code' => "WD004",
                    'material' => "Premium Polyester",
                    'price' => "$499.99",
                    'image' => "images/polo_tshirt.webp"
                ),
                array(
                    'name' => "Black T-shirt",
                    'code' => "WD005",
                    'material' => "Luxury Denim",
                    'price' => "$399.99",
                    'image' => "images/men_shirt.jpg"
                ),
                array(
                    'name' => "Trousers",
                    'code' => "WD006",
                    'material' => "Polyester",
                    'price' => "$399.99",
                    'image' => "images/trouser.jpg"
                ),
                array(
                    'name' => "NY Cap",
                    'code' => "WD007",
                    'material' => "Premium Polyester",
                    'price' => "$499.99",
                    'image' => "images/ny_cap.jpg"
                ),
                array(
                    'name' => "Short Pant",
                    'code' => "WD008",
                    'material' => "Luxury Denim",
                    'price' => "$399.99",
                    'image' => "images/short_pant.jpeg"
                ),
                array(
                    'name' => "Half Sleeve Shirt",
                    'code' => "WD009",
                    'material' => "Luxury Denim",
                    'price' => "$399.99",
                    'image' => "images/half_sleeve_shirt.webp"
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
