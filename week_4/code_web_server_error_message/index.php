<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $correct_username = "admin";
    $correct_password = "password123";

    if ($username == $correct_username && $password == $correct_password) {
        $_SESSION['username'] = $username;
        echo "<div class='container'>";
        echo "<h1>Welcome, " . htmlspecialchars($username) . "!</h1>";
        echo "<p>You have successfully logged in.</p>";
        echo "</div>";
    } else {
        echo "<div class='container'>";
        echo "<h1>Login Failed</h1>";
        echo "<p>Invalid username or password. Please <a href='login.php'>try again</a>.</p>";
        echo "</div>";
    }
} else {
    header("Location: login.php");
    exit();
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
