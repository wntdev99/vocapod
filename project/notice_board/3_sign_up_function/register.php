<!-- register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원 가입</title>
</head>
<body>
  <h2>회원 가입</h2>
  <form action="register_process.php" method="post">
    <label for="username">사용자 이름:</label>
    <input type="text" id="username" name="username" required>

    <label for="email">이메일:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">비밀번호:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="가입하기">
  </form>
</body>
</html>

