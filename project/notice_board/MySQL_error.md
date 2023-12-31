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

