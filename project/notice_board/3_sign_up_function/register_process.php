<?php

if (!extension_loaded('mysqli')) {
    die('MySQLi extension not loaded');
}


// 데이터베이스 연결 설정 (실제로는 별도의 파일로 분리하는 것이 좋습니다.)
$servername = "localhost";
$username = "root";
$password = "qwer1234!@#$";
$dbname = "test_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}

// POST 데이터 가져오기
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // 비밀번호 암호화

// 사용자 추가 쿼리
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "회원 가입이 완료되었습니다.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

