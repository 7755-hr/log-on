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
    <title>Information Page</title>
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

    <div class="content">
        <h2>BEING ECO - WELCOME</h2>
        <p>Welcome to the information page.</p>
        <!-- Add more static or dynamic content here -->
        
        <h3>Attendance</h3>
        <form action="update_attendance.php" method="post">
            <label for="attendance">Update Attendance:</label>
            <input type="text" id="attendance" name="attendance">
            <button type="submit">Update</button>
        </form>
        
        <h4>Current Attendance:</h4>
        <?php
        // Retrieve and display attendance information from a file
        $file = 'attendance.txt';
        if (file_exists($file)) {
            $current_attendance = file_get_contents($file);
            echo $current_attendance;
        } else {
            echo 'Attendance information is not available.';
        }
        ?>
    </div>
</body>
</html>