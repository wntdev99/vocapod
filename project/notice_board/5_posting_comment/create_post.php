<!-- create_post.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Post</title>
</head>
<body>
  <h2>Create a New Post</h2>
  <form action="process_post.php" method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" required><br>
    
    <label for="content">Content:</label>
    <textarea name="content" rows="4" required></textarea><br>
    
    <input type="submit" value="Create Post">
  </form>
</body>
</html>

