<!-- view_post.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Post</title>
</head>
<body>
  <?php
  require_once('db_connection.php'); // 데이터베이스 연결 설정 파일

  if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    $query = "SELECT * FROM posts WHERE id = $post_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $title = $row['title'];
      $content = $row['content'];
      $created_at = $row['created_at'];

      echo "<h2>$title</h2>";
      echo "<p>$content</p>";
      echo "<p>Created at: $created_at</p>";


     // 댓글 목록 조회
     $query_comments = "SELECT * FROM comments WHERE post_id = $post_id ORDER BY created_at ASC";
     $result_comments = mysqli_query($conn, $query_comments);

     echo "<h3>Comments</h3>";
     echo "<ul>";
     while ($row_comment = mysqli_fetch_assoc($result_comments)) {
       $comment_content = $row_comment['content'];
       $comment_created_at = $row_comment['created_at'];

       echo "<li>$comment_content - Created at: $comment_created_at</li>";
     }
     echo "</ul>";




    } else {
      echo "Post not found.";
    }
  } else {
    echo "Invalid request.";
  }
  ?>
</body>
</html>

