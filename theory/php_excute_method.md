PHP 파일을 실행하기 위해서는 웹 서버를 통해 실행하는 것이 일반적입니다. 아래는 Apache 웹 서버와 PHP를 조합하여 Linux에서 PHP 파일을 실행하는 방법입니다. 다른 웹 서버를 사용하는 경우에도 유사한 단계가 적용될 수 있습니다.

1. **Apache 웹 서버 설치:**

   Ubuntu를 기준으로 Apache 웹 서버를 설치하는 방법은 다음과 같습니다.

   ```bash
   sudo apt update
   sudo apt install apache2
   ```

   CentOS를 사용하는 경우:

   ```bash
   sudo yum install httpd
   sudo systemctl start httpd
   sudo systemctl enable httpd
   ```

   Apache를 설치하고 실행한 후에는 웹 브라우저에서 `http://localhost` 또는 서버의 IP 주소로 접속하여 "It works!"라는 화면이 나오는지 확인합니다.

2. **PHP 설치:**

   Apache와 함께 PHP를 설치합니다.

   ```bash
   sudo apt install php libapache2-mod-php  # Ubuntu
   ```

   또는 CentOS를 사용하는 경우:

   ```bash
   sudo yum install php php-mysql        # CentOS
   ```

3. **Apache 설정 파일 수정:**

   PHP 파일을 실행하기 위해 Apache 설정 파일을 수정해야 합니다. 아래 명령어로 설정 파일을 열어서 수정합니다.

   ```bash
   sudo nano /etc/apache2/sites-available/000-default.conf  # Ubuntu
   ```

   또는 CentOS의 경우:

   ```bash
   sudo nano /etc/httpd/conf/httpd.conf  # CentOS
   ```

   파일 내부에 다음 라인을 추가하거나 수정합니다.

   ```apache
   <FilesMatch \.php$>
       SetHandler application/x-httpd-php
   </FilesMatch>
   ```

   그리고 아파치를 재시작합니다.

   ```bash
   sudo service apache2 restart  # Ubuntu
   ```

   또는 CentOS를 사용하는 경우:

   ```bash
   sudo systemctl restart httpd  # CentOS
   ```

4. **PHP 파일 실행:**

   이제 PHP 파일을 웹 서버의 문서 루트 디렉토리에 저장하고, 웹 브라우저에서 해당 파일에 접속하면 PHP 코드가 실행됩니다. 일반적으로 Apache의 문서 루트 디렉토리는 `/var/www/html`이거나 `/var/www`일 수 있습니다.

   ```bash
   sudo nano /var/www/html/index.php
   ```

   index.php 파일에 다음과 같이 작성합니다.

   ```php
   <?php
   phpinfo();
   ```

   이후 웹 브라우저에서 `http://localhost/index.php`에 접속하면 PHP 정보가 출력되는 페이지를 확인할 수 있습니다.

이제 PHP 파일이 Apache 웹 서버를 통해 실행되는 것을 확인할 수 있습니다. 만약 Nginx를 사용하는 경우에는 설정 방법이 다소 다를 수 있습니다.
