<?php
session_start();
// Hard-coded credentials for demonstration purposes
$stored_username = 'D456';
$stored_password = 'Ksp@123';

// Retrieve submitted data
$username = $_POST['username'];
$password = $_POST['password'];

// Check credentials
if ($username === $stored_username && $password === $stored_password) {
    $_SESSION['loggedin'] = true;
    // Redirect to dashboard
    header('Location: dashboard.php');
    exit();
} else {
    echo 'Invalid username or password.';
}
?>