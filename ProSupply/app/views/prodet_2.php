<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product 1 Details - Shane Supply</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            background-color: #fdfdfd;
        }
        header, footer {
            background: #008080;
            color: #fff;
            padding: 15px 20px;
        }
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 1px;
        }
        nav {
            display: flex;
            gap: 20px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #FF7F50;
        }
        .product-details {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .product-details img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .product-details h1 {
            font-size: 2rem;
            color: #008080;
            margin-bottom: 10px;
        }
        .product-details p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 10px;
        }
        .product-details .price {
            font-size: 1.5rem;
            color: #008080;
            margin: 15px 0;
        }
        .product-details a {
            display: inline-block;
            padding: 10px 15px;
            background: #FF7F50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .product-details a:hover {
            background: #FF6347;
        }
        footer {
            text-align: center;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">Shane Supply</div>
        <nav>
            <a href="/">Home</a>
            <a href="products">Products</a>
            <a href="orders">My Orders</a>
            <a href="carts">Cart</a>
            <a href="contact">Contact Us</a>
        </nav>
    </header>

    <!-- Product Details Section -->
    <div class="product-details">
        <img src="product1.jpg" alt="Product 2">
        <h1>Product 2</h1>
        <p>High-quality product for your needs. Perfect for various applications and guaranteed satisfaction.</p>
        <p>Features:</p>
        <ul>
            <li>High durability</li>
            <li>Premium materials</li>
            <li>Affordable pricing</li>
        </ul>
        <p class="price">$25.00</p>
        <a href="carts">Add to Cart</a>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Shane Supply Wholesaling</p>
        <a href="privacy.php">Privacy Policy</a> |
        <a href="faq.php">FAQs</a>
    </footer>
</body>
</html>
