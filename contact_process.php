<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    include 'db.php';

    $sql = "INSERT INTO contact (name, email, message)
            VALUES ('$name', '$email', '$message')";


    if ($conn->query($sql) === TRUE) {
        
        echo "Thank you! Your message has been sent.";
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 
    $conn->close();
}
?>
