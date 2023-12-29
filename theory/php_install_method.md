## PHP를 Linux에서 설치하는 방법은 Linux 배포판에 따라 다를 수 있습니다. 아래는 몇 가지 주요한 Linux 배포판에서 PHP를 설치하는 방법입니다. 여기서는 Ubuntu 및 CentOS를 예로 들겠습니다.

### Ubuntu에서 PHP 설치하기:

1. **패키지 업데이트:**
   ```bash
   sudo apt update
   ```

2. **PHP 설치:**
   ```bash
   sudo apt install php
   ```

3. **설치 확인:**
   ```bash
   php -v
   ```

   이 명령어를 사용하여 PHP 버전이 정상적으로 출력되는지 확인할 수 있습니다.

### CentOS에서 PHP 설치하기:

1. **패키지 업데이트:**
   ```bash
   sudo yum update
   ```

2. **PHP 설치:**
   ```bash
   sudo yum install php
   ```

3. **설치 확인:**
   ```bash
   php -v
   ```

   이 명령어를 사용하여 PHP 버전이 정상적으로 출력되는지 확인할 수 있습니다.

### 추가 패키지 설치:

일반적으로 웹 개발에 필요한 추가 패키지를 설치해야 할 수 있습니다. 예를 들면, Apache나 Nginx와 함께 사용되는 경우 PHP 모듈을 설치해야 합니다.

#### Apache와 함께 사용 시:

```bash
sudo apt install libapache2-mod-php   # Ubuntu
sudo yum install php-mysql           # CentOS
```

#### Nginx와 함께 사용 시:

```bash
sudo apt install php-fpm              # Ubuntu
sudo yum install php-fpm              # CentOS
```

설치 후에는 웹 서버를 다시 시작하여 변경 사항을 적용해야 할 수 있습니다.

### 기타 패키지 및 확장 모듈:

다양한 PHP 확장 모듈이 있으며, 프로젝트에 따라 필요한 모듈을 추가로 설치해야 할 수 있습니다. 필요한 경우 관련 패키지를 설치하세요.

예를 들어, MySQL과의 연동이 필요한 경우:

```bash
sudo apt install php-mysql          # Ubuntu
sudo yum install php-mysqlnd        # CentOS
```

설치 후에는 웹 서버를 재시작하여 변경 사항을 적용합니다. 이제 PHP가 정상적으로 설치되었고, 필요한 확장 모듈을 추가로 설치하여 사용할 수 있습니다.




## 추가적으로
일반적으로 PHP를 설치한 후 `php-mysql` 또는 `php-mysqlnd` (MySQL Native Driver)를 설치하면 충돌이 발생하지 않습니다. 이 패키지는 PHP와 MySQL 간의 상호 작용을 위한 MySQL 확장 모듈을 제공하며, 대부분의 경우 PHP와 함께 사용됩니다.

`php-mysql` 또는 `php-mysqlnd`를 설치하면 MySQL 데이터베이스와의 연동을 지원하는 PHP 함수 및 기능이 추가됩니다. 이는 주로 웹 애플리케이션에서 데이터베이스와의 통신을 용이하게 하기 위한 것입니다.

설치할 때 충돌이 발생하는 경우는 드물며, 일반적으로 패키지 관리자를 통해 설치하는 경우 이러한 문제는 자동으로 해결됩니다. 패키지 관리자는 의존성을 확인하고 필요한 라이브러리 및 모듈을 자동으로 설치합니다.

따라서 보통은 PHP를 설치한 후 필요한 확장 모듈을 추가로 설치하여 사용하면 됩니다. 만약 어떤 이유로 충돌이 발생한다면, 패키지 관리자가 그에 대한 경고나 해결 방법을 제시할 것입니다.

예를 들어 Ubuntu의 경우:

```bash
sudo apt install php php-mysql
```

또는 CentOS의 경우:

```bash
sudo yum install php php-mysqlnd
```

이러한 명령어를 사용하여 필요한 패키지를 함께 설치할 수 있습니다.


