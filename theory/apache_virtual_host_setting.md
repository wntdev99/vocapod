## sudo nano /etc/apache2/sites-available/000-default.conf  # Ubuntu
위 명령어를 통해 들어갈 수 있음.


이 코드는 아파치 웹 서버의 가상 호스트 설정 파일을 나타냅니다. 아파치는 웹 서버 소프트웨어로, 이를 사용하여 웹 페이지 및 웹 응용 프로그램을 호스팅할 수 있습니다. 이 설정 파일은 주로 PHP 스크립트를 처리하는 가상 호스트를 구성하는 데 사용됩니다. 아래는 코드의 각 부분에 대한 설명입니다.

1. `<VirtualHost *:80>`: 가상 호스트를 정의하는 데 사용되는 블록입니다. 이 가상 호스트는 포트 80에서 동작하며, 이는 일반적으로 HTTP 트래픽을 처리하는 기본 포트입니다.

2. `ServerAdmin webmaster@localhost`: 웹 서버에 대한 관리자의 이메일 주소를 지정합니다. 오류가 발생할 때 서버가 이 주소로 이메일을 보낼 수 있습니다.

3. `DocumentRoot /var/www/html`: 웹 서버의 기본 문서 루트 디렉토리를 설정합니다. 이 디렉토리에는 웹 페이지 및 파일이 위치합니다.

4. `ErrorLog ${APACHE_LOG_DIR}/error.log`: 서버의 오류 로그 파일의 경로를 지정합니다. `${APACHE_LOG_DIR}`는 아파치 로그 디렉토리를 나타내며, 이는 일반적으로 `/var/log/apache2`와 같은 경로입니다.

5. `CustomLog ${APACHE_LOG_DIR}/access.log combined`: 서버의 액세스 로그 파일의 경로를 지정합니다. `combined`는 표준 로그 포맷을 나타냅니다.

6. `<FilesMatch \.php$>`: 이 부분은 정규 표현식을 사용하여 파일 이름이 `.php`로 끝나는 모든 파일에 대한 설정을 지정합니다.

7. `SetHandler application/x-httpd-php`: `.php` 파일에 대한 핸들러를 설정하여 PHP 스크립트를 처리하도록 합니다. 이는 PHP 인터프리터가 해당 파일을 실행하도록 하는 역할을 합니다.

8. 마지막 부분은 주석으로, Vim 편집기에서 사용되는 설정입니다.

이 설정 파일은 주로 PHP를 사용하는 웹 애플리케이션을 호스팅하는 데 적합하며, 서버에서 발생하는 오류 및 액세스 로그를 기록합니다. 웹 서버의 구성은 서버의 요구 사항과 웹 애플리케이션의 특정 요구에 따라 다르며, 이 설정은 그 중 하나의 예시에 불과합니다.


---
---

<VirtualHost *:80>
        # The ServerName directive sets the request scheme, hostname and port that
        # the server uses to identify itself. This is used when creating
        # redirection URLs. In the context of virtual hosts, the ServerName
        # specifies what hostname must appear in the request's Host: header to
        # match this virtual host. For the default virtual host (this file) this
        # value is not decisive as it is used as a last resort host regardless.
        # However, you must set it for any further virtual host explicitly.
        #ServerName www.example.com

        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/html

        # Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
        # error, crit, alert, emerg.
        # It is also possible to configure the loglevel for particular
        # modules, e.g.
        #LogLevel info ssl:warn

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

        # For most configuration files from conf-available/, which are
        # enabled or disabled at a global level, it is possible to
        # include a line for only one particular virtual host. For example the
        # following line enables the CGI configuration for this host only
        # after it has been globally disabled with "a2disconf".
        #Include conf-available/serve-cgi-bin.conf
</VirtualHost>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet


<FilesMatch \.php$>
    SetHandler application/x-httpd-php
</FilesMatch>
