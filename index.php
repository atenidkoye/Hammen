<?php 
include 'header.php';
include 'db.php'; 

$sort_order = "ASC";
if (isset($_GET['sort']) && $_GET['sort'] == 'desc') {
    $sort_order = "DESC";
}

$sql = "SELECT * FROM products ORDER BY price $sort_order";
$result = $conn->query($sql);
?>

<main>
    <div class="container">
        <div style="margin: 20px 0; text-align: right;">
            <form method="GET" action="index.php">
                <label for="sort">Sort by Price:</label>
                <select name="sort" id="sort" onchange="this.form.submit()">
                    <option value="asc" <?php if($sort_order == 'ASC') echo 'selected'; ?>>Lowest First</option>
                    <option value="desc" <?php if($sort_order == 'DESC') echo 'selected'; ?>>Highest First</option>
                </select>
            </form>
        </div>

        <div class="products">
            <?php
            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="card">
                        <img src="images/<?php echo $row['image_url']; ?>" alt="<?php echo $row['product_name']; ?>">
                        <h3><?php echo $row['product_name']; ?></h3>
                        <p>$<?php echo number_format($row['price'], 2); ?></p>
                        <a href="order.php"><button>Order</button></a>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No products available.</p>";
            }
            ?>
        </div>
    </div>
    <footer>2026 Hameen Florist</footer>
</main>
</html>