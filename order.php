<?php include 'header.php'; ?>
<body>

<header>
    <h1>Place Your Order</h1>
</header>

<div class="container">
    <form method="POST" action="orders.php">

        <input type="hidden" name="id" value="">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="address" placeholder="Shipping Address" required>
        <input type="text" name="city" placeholder="City" required>

        <input type="text" name="card_number" placeholder="Card Number" required>
        <input type="text" name="card_expiry" placeholder="Card Expiration Date (MM/YY)" required>
        <input type="text" name="cvv" placeholder="CVV" required>
        
        <button type="submit" name="action" value="create">
            Place Order
        </button>
        <button type="submit" name="action" value="update">
            Update Order
        </button>
        <button type="submit" name="action" value="delete"
            onclick="return confirm('Are you sure you want to delete this order?');">
            Delete Order
        </button>

    </form>
</div>

<?php include 'contact.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>
