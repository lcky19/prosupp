<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shane Supply - My Orders</title>
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

    /* Orders Section */
    .orders {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
    }

    .orders h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #008080;
    }

    .order-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .order-item {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 15px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .order-item:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .order-item h2 {
        font-size: 1.2rem;
        margin-bottom: 10px;
        color: #333;
    }

    .order-item p {
        font-size: 1rem;
        color: #555;
        margin-bottom: 5px;
    }

    .order-item .status {
        font-weight: bold;
        color: #008080;
    }

    .order-item a {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 12px;
        background: #FF7F50;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s;
    }

    .order-item a:hover {
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

    <!-- Orders Section -->
    <section class="orders">
        <h1>My Orders</h1>
        <div class="order-list">
            <!-- Example Order Items -->
            <div class="order-item">
                <h2>Order #1001</h2>
                <p><strong>Date:</strong> November 15, 2024</p>
                <p><strong>Total:</strong> $120.00</p>
                <p><strong>Status:</strong> <span class="status">Shipped</span></p>
                <a href="order-details.php?order_id=1001">View Details</a>
            </div>
            <div class="order-item">
                <h2>Order #1002</h2>
                <p><strong>Date:</strong> November 12, 2024</p>
                <p><strong>Total:</strong> $80.00</p>
                <p><strong>Status:</strong> <span class="status">Delivered</span></p>
                <a href="order-details.php?order_id=1002">View Details</a>
            </div>
            <div class="order-item">
                <h2>Order #1003</h2>
                <p><strong>Date:</strong> November 10, 2024</p>
                <p><strong>Total:</strong> $45.00</p>
                <p><strong>Status:</strong> <span class="status">Processing</span></p>
                <a href="order-details.php?order_id=1003">View Details</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Shane Supply Wholesaling</p>
        <a href="privacy.php">Privacy Policy</a> |
        <a href="faq.php">FAQs</a>
    </footer>
</body>
</html>
