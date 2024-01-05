### Apache 웹 서버:

1. **에러 로그 위치 확인:**
   - 대부분의 경우, Apache의 에러 로그는 `/var/log/apache2/error.log` 또는 `/var/log/httpd/error_log` 경로에 위치합니다.
   - 로그 경로는 Apache 설정 파일에서 변경될 수 있습니다. 설정 파일은 `httpd.conf` 또는 `apache2.conf`일 수 있습니다.

2. **터미널에서 로그 확인:**
   - 터미널을 열고 다음 명령어를 사용하여 실시간으로 로그를 확인할 수 있습니다:

     ```bash
     tail -f /var/log/apache2/error.log
     ```

   - 이 명령어는 새로운 로그 엔트리가 추가될 때마다 업데이트됩니다.
