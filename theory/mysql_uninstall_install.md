MySQL을 처음 설치할 때 root 계정의 비밀번호를 설정하지 않고 설치하면 기본적으로 빈 비밀번호로 설정될 수 있습니다. 이는 보안 상 취약하므로 권장되지 않습니다. MySQL을 재설치하고 root 계정의 비밀번호를 설정하는 방법은 다음과 같습니다.

1. MySQL 서버를 완전히 제거합니다.

    ```bash
    sudo apt-get remove --purge mysql-server mysql-client mysql-common mysql-server-core-* mysql-client-core-*
    sudo rm -rf /etc/mysql /var/lib/mysql
    sudo apt-get autoremove
    sudo apt-get autoclean
    ```

2. MySQL 서버를 재설치합니다.

    ```bash
    sudo apt-get install mysql-server
    ```

