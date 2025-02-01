<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shane Supply - Contact Us</title>
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

        /* Contact Section */
        .contact {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #008080;
        }

        .contact form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact label {
            font-size: 1rem;
            font-weight: bold;
            color: #333;
        }

        .contact input,
        .contact textarea,
        .contact button {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact textarea {
            resize: vertical;
            min-height: 100px;
        }

        .contact button {
            background: #FF7F50;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact button:hover {
            background: #FF6347;
        }

        /* Footer Styles */
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

    <!-- Contact Section -->
    <section class="contact">
        <h1>Contact Us</h1>
        <form action="submit_contact.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Enter the subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Enter your message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Shane Supply Wholesaling</p>
        <a href="privacy.php">Privacy Policy</a> |
        <a href="faq.php">FAQs</a>
    </footer>
</body>
</html>
