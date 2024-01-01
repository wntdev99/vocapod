<!-- dashboard.php -->
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>대시보드</title>
</head>
<body>
  <h2>대시보드</h2>
  <p>환영합니다, <?php echo $username; ?>님!</p>
  <a href="logout.php">로그아웃</a>
</body>
</html>

