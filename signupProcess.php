<?php 

include 'db.php';
include 'header.php';



if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Invalid request');
}

// Get form data
$firstName = trim($_POST['first_name'] ?? '');
$lastName  = trim($_POST['last_name'] ?? '');
$email     = trim($_POST['email'] ?? '');
$password  = $_POST['password'] ?? '';

// Basic validation
if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
    exit('All fields are required');
}

// Check if email already exists
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    exit('Email already registered');
}
$check->close();

// Hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert user
$stmt = $conn->prepare(
    "INSERT INTO users (first_name, last_name, email, password)
     VALUES (?, ?, ?, ?)"
);
$stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

if ($stmt->execute()) {
    echo "Account created successfully";
} else {
    echo "Signup failed";
}

$stmt->close();
$conn->close();
