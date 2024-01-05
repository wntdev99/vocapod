<?php
$servername = "localhost";
$username = "root";
$password = "qwer1234!@#$";
$dbname = "test_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
>
