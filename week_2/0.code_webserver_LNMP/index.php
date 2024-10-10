<?php
include('header.php');

// Kiểm tra người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<h1>Welcome to My Simple PHP Website</h1>
<p>Hello, <?php echo $_SESSION['username']; ?>! This is the homepage.</p>

<?php
include('footer.php');
?>
