<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shane Supply - Cart</title>
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

    /* Cart Section */
    .cart {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
    }

    .cart h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #008080;
    }

    .cart-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .cart-table th, .cart-table td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
    }

    .cart-table th {
        background-color: #f4f4f4;
        color: #008080;
    }

    .cart-table img {
        max-width: 80px;
        height: auto;
        border-radius: 8px;
    }

    .quantity-control {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    .quantity-control input {
        width: 50px;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
    }

    .quantity-control button {
        background: #FF7F50;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .quantity-control button:hover {
        background: #FF6347;
    }

    .total {
        text-align: right;
        font-size: 1.2rem;
        color: #333;
    }

    .checkout {
        text-align: center;
        margin-top: 20px;
    }

    .checkout button {
        padding: 10px 20px;
        background: #008080;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: background 0.3s;
    }

    .checkout button:hover {
        background: #006666;
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

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>
</head>
<body>
    <h1>Your Cart</h1>
    <ul>
        <?php foreach ($cart_items as $item): ?>
            <li>
                Product ID: <?php echo $item['product_id']; ?> - Quantity: <?php echo $item['quantity']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="/">Continue Shopping</a>
</body>
</html>
