<?php
// Simulated product data for category pages
$products = array(
    array(
        'name' => "Stunning Dress",
        'code' => "WD001",
        'material' => "Premium Polyester",
        'price' => "$499.99"
    ),
    array(
        'name' => "Designer Jeans",
        'code' => "WJ002",
        'material' => "Luxury Denim",
        'price' => "$399.99"
    ),
    array(
        'name' => "Exquisite Accessories Set",
        'code' => "WA003",
        'material' => "Fine Plastic & Genuine Leatherette",
        'price' => "$199.99"
    )
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scammy Clothing Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Women's Collection</h1>
        <ul>
            <?php foreach ($products as $product): ?>
            <li>
                <strong><?php echo $product['name']; ?></strong><br>
                Code: <?php echo $product['code']; ?><br>
                Material: <?php echo $product['material']; ?><br>
                Price: <?php echo $product['price']; ?><br>
                <button>Add to Cart</button>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
