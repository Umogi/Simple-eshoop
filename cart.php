<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    $_SESSION['cart'][] = [
        'name' => $product_name,
        'price' => $product_price
    ];
}

$cart_items = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #1e1e1e;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
            color: #9c27b0;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            padding: 10px;
            background-color: #2b2b2b;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        ul li span {
            font-weight: bold;
            color: #9c27b0;
        }

        .back-button {
            display: block;
            margin: 20px auto;
            text-align: center;
            padding: 10px 20px;
            background-color: #9c27b0;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .back-button:hover {
            background-color: #7b1fa2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Cart</h1>
        <ul>
            <?php if (!empty($cart_items)): ?>
                <?php foreach ($cart_items as $item): ?>
                    <li>
                        <span>Product:</span> <?php echo htmlspecialchars($item['name']); ?> <br>
                        <span>Price:</span> $<?php echo htmlspecialchars($item['price']); ?>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Your cart is empty.</p>
            <?php endif; ?>
        </ul>
        <a href="eshoop.php" class="back-button">Back to Shop</a>
    </div>
</body>
</html>
