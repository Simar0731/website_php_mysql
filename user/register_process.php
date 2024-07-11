<?php
session_start();
include '../includes/db_connect.php'; // Adjust to correct path

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_DEFAULT);

    // Check if username or email already exists
    $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['register_error'] = "Username or email already exists.";
        header("Location: register.php");
        exit();
    } else {
        // Insert new user
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['username'] = $username;
            header("Location: ../index.php");
            exit();
        } else {
            $_SESSION['register_error'] = "Error: " . $conn->error;
            header("Location: register.php");
            exit();
        }
    }
} else {
    header("Location: register.php");
    exit();
}
?>
