<!-- process_post.php -->
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  // 사용자가 로그인하지 않은 경우 로그인 페이지로 이동
  header("Location: login.php");
  exit();
}

require_once('db_connection.php'); // 데이터베이스 연결 설정 파일

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 사용자가 폼을 제출한 경우

  $user_id = $_SESSION['user_id'];
  $title = $_POST['title'];
  $content = $_POST['content'];

  // 게시글을 데이터베이스에 저장
  $query = "INSERT INTO posts (user_id, title, content) VALUES ('$user_id', '$title', '$content')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    // 게시글이 성공적으로 저장된 경우
    header("Location: view_posts.php");
    exit();
  } else {
    // 저장에 실패한 경우
    echo "Error: " . mysqli_error($conn);
  }
}
?>

