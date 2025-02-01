<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Products</title>
</head>
<body>
    <h1>Manage Products</h1>
    < form action="/admin/products/add" method="POST">
        <input type="text" name="name" placeholder="Product Name" required>
        <textarea name="description" placeholder="Product Description"></textarea>
        <input type="number" name="price" placeholder="Product Price" required>
        <input type="text" name="image" placeholder="Image URL">
        <button type="submit">Add Product</button>
    </form>

    <h2>Existing Products</h2>
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
</html>