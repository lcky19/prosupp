<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProSupplyHub</title>
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

    a {
        text-decoration: none;
        color: #008080; /* Primary color */
    }

    a:hover {
        text-decoration: underline;
    }

    /* Header Styles */
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #008080; /* Primary color */
        color: #fff;
        padding: 15px 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
        font-size: 1rem;
        font-weight: 500;
        transition: color 0.3s;
    }

    nav a:hover {
        color: #FF7F50; /* Secondary color */
    }

    .search-bar {
        display: flex;
        align-items: center;
    }

    .search-bar input {
        padding: 8px 12px;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-radius: 5px 0 0 5px;
        outline: none;
    }

    .search-bar button {
        padding: 8px 12px;
        font-size: 1rem;
        background: #FF7F50; /* Secondary color */
        border: none;
        border-radius: 0 5px 5px 0;
        color: #fff;
        cursor: pointer;
        transition: background 0.3s;
    }

    .search-bar button:hover {
        background: #FF6347; /* Lighter secondary shade */
    }

    /* Banner Styles */
    .banner {
        text-align: center;
        background: url('banner.jpg') no-repeat center center/cover;
        color: #fff;
        padding: 70px 20px;
        background-color: #008080; /* Fallback if image not available */
    }

    .banner h1 {
        font-size: 2.8rem;
        margin-bottom: 15px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }

    .banner p {
        font-size: 1.3rem;
    }

    .banner img {
        margin-top: 20px;
        max-width: 100%;
        height: auto;
    }

    /* Footer Styles */
    footer {
        text-align: center;
        padding: 15px 20px;
        background: #008080; /* Primary color */
        color: #fff;
        font-size: 0.9rem;
    }

    footer a {
        color: #FF7F50; /* Secondary color */
        margin: 0 5px;
        transition: color 0.3s;
    }

    footer a:hover {
        color: #FF6347; /* Lighter secondary shade */
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        nav {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }

        .search-bar {
            flex-direction: column;
            gap: 10px;
        }

        .banner h1 {
            font-size: 2.2rem;
        }

        .banner p {
            font-size: 1.1rem;
        }
    }
</style>

</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">Shane Supply</div>
        <nav>
            <a href="products">Products</a>
            <a href="orders">My Orders</a>
            <a href="carts">Cart</a>
            <a href="contact">Contact Us</a>
        </nav>
        <form action="search.php" method="GET" class="search-bar">
            <input type="text" name="query" placeholder="Search products...">
            <button type="submit">Search</button>
        </form>
    </header>

    <!-- Banner -->
    <section class="banner">
        <h1>Welcome to Shane Supply Wholesaling</h1>
        <p>Your one-stop shop for bulk supplies!</p>
        <img src="banner.jpg" alt="Promotional Banner">
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Shane Supply Wholesaling</p>
        <a href="privacy.php">Privacy Policy</a> |
        <a href="faq.php">FAQs</a>
    </footer>
</body>
</html>
