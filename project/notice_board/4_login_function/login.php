<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인</title>
</head>
<body>
  <h2>로그인</h2>
  <form action="login_process.php" method="post">
    <label for="username">사용자 이름:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">비밀번호:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="로그인">
  </form>
</body>
</html>

