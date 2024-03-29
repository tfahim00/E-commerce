<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://kit.fontawesome.com/b3c62463fb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        }
        main{
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label,
        input,
        button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="email"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
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
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Please fill out the form below to get in touch with us.</p>
        
        <form action="contact_process.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <input type="text" id="message" name="message" required>

            <button type="submit">Submit</button>
        </form>
    </main>

    <footer>
        <a href="#"><i class="fa-brands fa-facebook" style="color: #74C0FC"></i></a>
        <a href="#"><i class="fa-brands fa-instagram" style="color: #74C0FC"></i></a>
        <a href="#"><i class="fa-brands fa-twitter" style="color: #74C0FC"></i></a>
        <p>&copy; 2024 E-Commerce Store. All rights reserved.</p>
    </footer>
</body>
</html>
