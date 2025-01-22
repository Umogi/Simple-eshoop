<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shop Home</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header */
        .header {
            background-color: #1e1e1e;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .header .logo {
            color: #9c27b0;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        .header .nav {
            display: flex;
            gap: 20px;
        }

        .header .nav a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
        }

        .header .nav a:hover {
            color: #9c27b0;
        }

        .header .user-cart {
            display: flex;
            gap: 15px;
        }

        .user-cart a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
        }

        .user-cart a:hover {
            color: #9c27b0;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 60px 20px;
            background-color: #1e1e1e;
            margin-bottom: 40px;
        }

        .hero h1 {
            color: #9c27b0;
            font-size: 36px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .hero button {
            padding: 10px 20px;
            background-color: #9c27b0;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .hero button:hover {
            background-color: #7b1fa2;
        }

        /* Product Grid */
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 0 20px;
        }

        .product {
            background-color: #2b2b2b;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
        }

        .product img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .product h3 {
            color: #ffffff;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .product p {
            font-size: 16px;
            color: #9c27b0;
            margin-bottom: 10px;
        }

        .product button {
            padding: 10px 15px;
            background-color: #9c27b0;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .product button:hover {
            background-color: #7b1fa2;
        }

        /* Footer */
        .footer {
            background-color: #1e1e1e;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            color: #9c27b0;
            font-size: 14px;
        }
    </style>
</head>
<body>

<!-- Header -->
<div class="header">
    <a href="#" class="logo">E-Shop</a>
    <div class="nav">
        <a href="#">Home</a>
        <a href="#">Shop</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>
    <div class="user-cart">
        <?php if (isset($_SESSION['user_id'])): ?>
            <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
        <?php else: ?>
            <a href="login.php">Login</a>
        <?php endif; ?>
        <a href="cart.php">Cart</a>
    </div>
</div>

<!-- Hero Section -->
<div class="hero">
    <h1>Welcome to E-Shop</h1>
    <p>Your one-stop shop for the best products!</p>
    <button>Shop Now</button>
</div>

<!-- Product Grid -->
<div class="products">
    <div class="product">
        <img src="https://via.placeholder.com/200" alt="Product 1">
        <h3>Product 1</h3>
        <p>$19.99</p>
        <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="Product 1">
            <input type="hidden" name="product_price" value="19.99">
            <button type="submit">Add to Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="https://via.placeholder.com/200" alt="Product 2">
        <h3>Product 2</h3>
        <p>$29.99</p>
        <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="Product 2">
            <input type="hidden" name="product_price" value="29.99">
            <button type="submit">Add to Cart</button>
        </form>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    &copy; 2025 E-Shop. All Rights Reserved.
</div>

</body>
</html>
