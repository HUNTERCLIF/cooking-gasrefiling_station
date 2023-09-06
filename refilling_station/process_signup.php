<?php
include('connect.php');

 session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the form data (you may add further validation if needed)
    if (empty($username) || empty($password)) {
        echo "Please fill in all the fields.";
        exit; // Stop further execution if the form is not properly filled
    }

    // Hash the password for security (you should never store plain text passwords)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Database connection settings (replace these with your actual credentials)
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'cooking_gas';

    // Create a database connection
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Preparering and executing SQL query to insert the data into the database
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashedPassword);
    if ($stmt->execute()) {
        header("Location: login.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
