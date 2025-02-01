<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shane Supply - Products</title>
    <style>
    /* General Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Roboto', sans-serif;
        line-height: 1.6;
        color: #333;
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

    /* Products Section */
    .products {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
    }

    .products h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #008080;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        max-height: 600px; /* Set a maximum height */
        overflow-y: scroll; /* Add vertical scroll */
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    .product-item {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 15px;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .product-item:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .product-item img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .product-item h2 {
        font-size: 1.2rem;
        margin: 10px 0;
        color: #333;
    }

    .product-item p {
        font-size: 1rem;
        color: #555;
        margin: 10px 0;
    }

    .product-item .price {
        font-size: 1.2rem;
        color: #008080;
        margin: 10px 0;
    }

    .product-item a {
        display: inline-block;
        padding: 10px 15px;
        background: #FF7F50;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s;
    }

    .product-item a:hover {
        background: #FF6347;
    }

    footer {
        text-align: center;
        font-size: 0.9rem;
    }

    footer a {
        color: #FF7F50;
        margin: 0 5px;
        transition: color 0.3s;
    }

    footer a:hover {
        color: #FF6347;
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

    <h1>Available Products</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <h3><?php echo $product['name']; ?></h3>
                <p><?php echo $product['description']; ?></p>
                <p>Price: $<?php echo $product['price']; ?></p>
                <a href="/products/add_to_cart/<?php echo $product['id']; ?>">Add to Cart</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Shane Supply Wholesaling</p>
        <a href="privacy.php">Privacy Policy</a> |
        <a href="faq.php">FAQs</a>
    </footer>
</body>
</html>
