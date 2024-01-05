데이터베이스의 테이블 정보나 데이터 정보를 가져오는 데에는 다양한 방법이 있습니다. 주로 `SHOW` 명령어를 사용하거나 `INFORMATION_SCHEMA` 데이터베이스를 쿼리하여 메타데이터를 조회합니다. 아래는 간단한 예시 코드를 통해 데이터베이스의 테이블 정보와 데이터 정보를 가져오는 방법을 설명합니다.

### 1. 테이블 정보 가져오기:

```php
<?php
require_once('db_connection.php');

// 데이터베이스에 연결된 객체인 $conn을 사용합니다.

// 현재 데이터베이스의 테이블 목록 조회
$query_tables = "SHOW TABLES";
$result_tables = mysqli_query($conn, $query_tables);

if ($result_tables) {
    echo "Tables in the database:<br>";
    while ($row_table = mysqli_fetch_row($result_tables)) {
        echo $row_table[0] . "<br>";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
```

### 2. 테이블의 데이터 정보 가져오기:

```php
<?php
require_once('db_connection.php');

// 데이터베이스에 연결된 객체인 $conn을 사용합니다.

// 특정 테이블의 데이터 조회 (예: 'users' 테이블)
$query_data = "SELECT * FROM users";
$result_data = mysqli_query($conn, $query_data);

if ($result_data) {
    echo "Data in the 'users' table:<br>";
    while ($row_data = mysqli_fetch_assoc($result_data)) {
        print_r($row_data);
        echo "<br>";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
```

위 코드에서 `SHOW TABLES` 명령어를 사용하여 현재 데이터베이스의 테이블 목록을 가져오고, `SELECT * FROM users` 쿼리를 사용하여 'users' 테이블의 데이터를 가져옵니다. 이는 간단한 예시로, 실제로는 테이블 및 데이터의 구조에 따라 다양한 방법으로 조회할 수 있습니다.

또한, `INFORMATION_SCHEMA` 데이터베이스를 사용하여 더 자세한 메타데이터 정보를 조회할 수 있습니다. 예를 들어, 특정 테이블의 컬럼 정보를 가져오는 코드는 다음과 같습니다:

```php
<?php
require_once('db_connection.php');

// 데이터베이스에 연결된 객체인 $conn을 사용합니다.

// 특정 테이블의 컬럼 정보 조회 (예: 'users' 테이블)
$query_columns = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'users'";
$result_columns = mysqli_query($conn, $query_columns);

if ($result_columns) {
    echo "Columns in the 'users' table:<br>";
    while ($row_column = mysqli_fetch_assoc($result_columns)) {
        echo $row_column['COLUMN_NAME'] . "<br>";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
```

실제로 사용할 때에는 보안을 고려하여 사용자 입력을 쿼리에 직접 넣지 않고, 적절한 방법으로 데이터를 필터링하여 사용해야 합니다.
