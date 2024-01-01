## Error 확인
'''bash
cat /var/log/apache2/error.log
'''

## PHP 오류 표시 활성화
'''php
error_reporting(E_ALL);
ini_set('display_errors', 1);
'''

## Error 발생
[Mon Jan 01 18:41:43.582850 2024] [php7:error] [pid 3332] [client ::1:35178] PHP Fatal error:  Uncaught Error: Class 'mysqli' not found in /var/www/html/register_process.php:8\nStack trace:\n#0 {main}\n  thrown in /var/www/html/register_process.php on line 8, referer: http://localhost/register.php


## 문제점
sql과 php 가 서로 연결할 수 있도록 확장 소프트웨어를 다운로드 해줘야함.


## 해결법
'''bash
sudo apt-get update
sudo apt-get install php-mysqli
'''

### PHP 설정 파일 확인
'''bash
sudo nano /etc/php/{your_php_version}/apache2/php.ini
'''


변경 후 웹 서버 재시작
'''bash
sudo service apache2 restart
'''

