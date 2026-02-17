<?php
include 'header.php';
include 'db.php';


if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);
    $conn->query("DELETE FROM products WHERE id = $id");
    $conn->close();
    header("Location: admin.php");
    exit;
}


if (isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    $conn->query("INSERT INTO products (product_name, price, image_url) 
        VALUES ('$product_name', '$price', '$image_url')");
    $conn->close();
    header("Location: admin.php");
    exit;
}
?>

<body>
<main>
    <header>
        <h1>Admin - Manage Products</h1>
    </header>
    <div class="container">

        <h2>Add New Product</h2>
        <form method="post">
            <input type="text" name="product_name" placeholder="Product Name" required><br><br>
            <input type="number" step="0.01" name="price" placeholder="Price" required><br><br>
            <input type="text" name="image_url" placeholder="Image Filename" required><br><br>
            <button type="submit" name="add_product">Add Product</button>
        </form>


        <h2>Existing Products</h2>
        <?php
        $result = $conn->query("SELECT * FROM products ORDER BY id ASC");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="product-card">
                    <p><strong>ID:</strong> <?php echo $row['id']; ?></p>
                    <p><strong>Name:</strong> <?php echo ($row['product_name']); ?></p>
                    <p><strong>Price:</strong> $<?php echo number_format($row['price'], 2); ?></p>
                    <p><img src="images/<?php echo $row['image_url']; ?>" width="50" alt="<?php echo ($row['product_name']); ?>"></p>
                    <p>
                        <a href="admin.php?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                    </p>
                    <hr>
                </div>
                <?php
            }
        } else {
            echo "<p>No products found.</p>";
        }

        $conn->close();
        ?>
    </div>
</main>

<footer>2026 Hameen Florist</footer>
</body>
</html>
