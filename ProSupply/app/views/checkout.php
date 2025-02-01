<?php
// checkout.php
session_start();

// Dummy cart data (In real-world applications, this data would come from the session or a database)
$cart = [
    ["name" => "Product 1", "price" => 25.00, "quantity" => 2],
    ["name" => "Product 2", "price" => 40.00, "quantity" => 1],
];

// Calculate total
$total = 0;
foreach ($cart as $item) {
    $total += $item['price'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Shane Supply</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fdfdfd;
            color: #333;
            line-height: 1.6;
        }

        header, footer {
            background: #008080;
            color: #fff;
            padding: 15px 20px;
            text-align: center;
        }

        .checkout-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .checkout-container h1 {
            text-align: center;
            color: #008080;
            margin-bottom: 20px;
        }

        .checkout-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .checkout-table th, .checkout-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .checkout-table th {
            background-color: #f4f4f4;
            color: #008080;
        }

        .total {
            text-align: right;
            font-size: 1.2rem;
            margin-top: 20px;
        }

        .payment-button {
            display: block;
            width: 100%;
            padding: 10px;
            background: #008080;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-align: center;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .payment-button:hover {
            background: #006666;
        }

        footer {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Shane Supply</h1>
    </header>

    <div class="checkout-container">
        <h1>Checkout</h1>

        <table class="checkout-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                    <td>$<?php echo number_format($item['price'], 2); ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td>$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="total">
            <strong>Total: $<?php echo number_format($total, 2); ?></strong>
        </div>

        <button class="payment-button" onclick="alert('Payment processing is not implemented yet.')">Proceed to Payment</button>
    </div>

    <footer>
        <p>&copy; 2024 Shane Supply Wholesaling</p>
    </footer>
</body>
</html>
