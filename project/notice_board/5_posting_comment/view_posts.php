<!-- view_posts.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Posts</title>
</head>
<body>
  <h2>Posts</h2>
  <?php
  require_once('db_connection.php'); // 데이터베이스 연결 설정 파일

  $query = "SELECT * FROM posts ORDER BY created_at DESC";
  $result = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $post_id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];
    $created_at = $row['created_at'];

    echo "<div>";
    echo "<h3>$title</h3>";
    echo "<p>$content</p>";
    echo "<p>Created at: $created_at</p>";
    echo "<a href='view_post.php?id=$post_id'>View Details</a>";
    echo "</div>";
    echo "<hr>";
  }
  ?>
</body>
</html>

