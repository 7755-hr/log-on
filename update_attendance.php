<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Save the posted attendance information to a file
    $attendance = $_POST['attendance'];
    file_put_contents('attendance.txt', $attendance);
    header('Location: information.php');
    exit();
}
?>