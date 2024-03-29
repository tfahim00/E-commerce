<?php
// Connect to database and fetch featured items
// Assuming you have a database with a table named "featured_items" containing fields like id, name, price, image, etc.
$featuredItems = [
    [
        'name' => "Richman Wallet",
        'price' => "$499.99",
        'image' => "images/Richman_wallet.jpeg"
    ],
    [
        'name' => 'Black T-Shirt',
        'price' => '39.99',
        'image' => 'images/men_shirt.jpg'
    ],
    [
        'name' => "Green Shirt",
        'price' => "$39.99",
        'image' => "images/green_shirt.png"
    ],
    [
        'name' => "Formal Suit",
        'price' => "$99.99",
        'image' => "images/formal_suit.png"
    ],
    [
        'name' => "Short Pant",
        'price' => "$399.99",
        'image' => "images/short_pant.jpeg"
    ],
    [
        'name' => "Black Sharee",
        'price' => "$499.99",
        'image' => "images/black_sharee.png"
    ],
    [
        'name' => "Sita har",
        'price' => "$499.99",
        'image' => "images/sitahar.jpg"
    ]
    
    // Add more featured items as needed
];

// Output featured items as JSON
header('Content-Type: application/json');
echo json_encode($featuredItems);
?>
