<?php 
include 'db.php';
include 'signupProcess.php';
?>

<body>

<h2>Create Account</h2>

<form method="POST" action="signupProcess.php">

    <input type="text" name="first_name" placeholder="First Name" required>
    <input type="text" name="last_name" placeholder="Last Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <a href=""><button type="submit">Sign Up</button></a>

</form>

<?php include 'footer.php'; ?>
</body>
</html>
