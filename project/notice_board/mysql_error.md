### ERROR 1698 (28000): Access denied for user 'root'@'localhost'

1. **문제 발생:**
- 아래 명령어 입력할 경우 에러 발생했음.
	'''bash
	mysql -u root -p
	'''

2. **원인:**
- mysql root 계정 비밀번호 설정을 하지 않아서 발생한 문제같음.

3. **해결책:**
- 아래 명령어를 통해 mysql에 진입할 수 있음.
	'''bash
	sudo mysql -u root
	'''
- 이후 root 계정에 비밀번호를 초기화해주면 됨.
	'''bash
	ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '새로운_비밀번호';
	'''


### ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: NO)
1. **문제 발생:**
- 아래 명령어 입력할 경우 에러 발생했음.
	'''bash
	mysql -u root
	'''

2. **원인:**
- mysql root 계정 비밀번호가 있는데 password 없이 접근하려고 해서 그런 것 같다.

3. **해결책:**
- 아래 명령어를 통해 mysql에 진입할 수 있음.
	'''bash
	mysql -u root -p
	'''


### ERROR 1045 (28000): Access denied for user '사용자 이름'@'localhost' (using password: NO)
1. **문제 발생:**
- 아래 명령어 입력할 경우 에러 발생했음.
        '''bash
        mysql -u wntdev
        '''

2. **원인:**
- mysql에 '사용자 이름' 이라는 계정이 없어서 그렇다.  

3. **해결책:**
- root 계정으로 진입.
        '''bash
        mysql -u root -p
        '''
- wntdev 계정 생성
	'''bash
	CREATE USER '사용자이름'@'호스트' IDENTIFIED BY '비밀번호';
	'''
- 계정 모든 권한 부여
	'''bash
	GRANT ALL PRIVILEGES ON *.* TO '사용자이름'@'호스트';
	'''
- 권한 새로고침
	'''bash
	FLUSH PRIVILEGES;
	''' 
- 계정 삭제 및 권한 회수
	'''bash
	DROP USER '사용자이름'@'호스트';
	REVOKE 권한 ON 데이터베이스이름.테이블이름 FROM '사용자이름'@'호스트';
	'''




