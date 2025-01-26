<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="navbar">
        <div>
         DEAR USER - BEING ECO WELCOMES YOU
            <a href="dashboard.php">Dashboard</a>
            <a href="information.php">Information</a>
            <!-- Add more navigation links if needed -->
        </div>

        <div class="right">
            <form action="logout.php" method="post">
                <button type="submit">Sign Out</button>
            </form>
        </div>
    </div>

    <div class="dashboard-container">
        <h2>Welcome to the Dashboard</h2>
        <p>Successfully logged in!</p>
    </div>
</body>
</html>