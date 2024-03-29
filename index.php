<?php
// Serve HTML files using a simple PHP server
$requestedFile = $_SERVER['REQUEST_URI'];

// Allow access only to HTML files
if (preg_match('/\.html$/', $requestedFile) && file_exists(__DIR__ . $requestedFile)) {
    // Serve the requested file
    include_once(__DIR__ . $requestedFile);
} else {
    // Serve the index.html file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <script src="https://kit.fontawesome.com/b3c62463fb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li class="active"><a href="index.php">Home</a></li>
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
        <h1>Hot Deals!</h1>
        <section id="featured-items">
            <!-- Featured items will be populated by JavaScript -->
        </section>
    </main>

    <footer>
        <a href="#"><i class="fa-brands fa-facebook" style="color: #74C0FC"></i></a>
        <a href="#"><i class="fa-brands fa-instagram" style="color: #74C0FC"></i></a>
        <a href="#"><i class="fa-brands fa-twitter" style="color: #74C0FC"></i></a>
        <p>&copy; 2024 E-Commerce Store. All rights reserved.</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
<?php
}
?>
