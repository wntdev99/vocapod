<?php
session_start();

// 데이터베이스 연결 설정 (실제로는 별도의 파일로 분리하는 것이 좋습니다.)
$servername = "localhost";
$username = "wntdev";
$password = "confidence0114!";
$dbname = "test_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}

// POST 데이터 가져오기
$username = $_POST['username'];
$password = $_POST['password'];

// 사용자 인증
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // 로그인 성공
        $_SESSION['username'] = $username;
	$_SESSION['user_id'] = $row['id']
	header("Location: dashboard.php"); // 로그인 후 이동할 페이지
        exit();
    } else {
        echo "비밀번호가 일치하지 않습니다.";
    }
} else {
    echo "사용자를 찾을 수 없습니다.";
}

$conn->close();
?>

