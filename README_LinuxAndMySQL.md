# WebProject
PHP JS jQuery MySQL HTML CSSなどを利用して作ったウェブです。fukuokaというプロジェクトはデータベースやサバーがありません。
PHP JS jQuery MySQL HTML CSSなどを利用して作ったウェブです。fukuokaというプロジェクトはデータベースやサバーがありません。
Linux Mysql 명령어
1.show databases 							 // 데이터베이스 보기

2.create database 데이테베이스명		 	 //데이터베이스 만들기

3.select host,user,password from user;	 //호스트 유저 비밀번호 보기

4.use 데이터베이스명							 //해당 데이터베이스 사용

5.show tables									 //만들어진 테이블 모두 보기

6.create table 테이블 명 (						//테이블 만들기
	num int not null							//넘버를 숫자형으로 비우지 않고 입력하게 만듦
	name varchar(10),						//이름을 캐릭터형으로 길이만큼 입력하고 나머지 버림
	tel varchar(15),							//tel을 캐릭터형으로 길이만큼 입력하고 나머지 버림
	email varchar(40),						//email을 캐릭터형으로 길이만큼 입력후 나머지 버림
	primary key(num)						//num을 primary key로 지정
);												//테이블 구성요소 종료

7.alter table 테이블명 add 새로운 필드명 필드타입;
  //기존에 있던 테이블에서 새로운 필드를 추가하고 타입을 지정한다.

8.alter table 테이블명 drop 필드명;
  //기존에 있던 테이블에서 필드를 삭제한다.

9.alter table 테이블명 change 이전 필드명 새로운 필드형 새로운 필드타입;

  //기존에 있던 필드를 새로운 필드타입의 필드명으로 바꾼다.
10.alter table 테이블명 rename 새로운 테이블명;
  //이전의 테이블 이름을 새로운 테이블 이름으로 바꾼다

11.drop table 테이블명
  //해당 테이블을 삭제한다

12.select host,user,password
//myphp 데이터베이스에서 유저의 호스트명,아이디,비밀번호를 볼 수있다.

13.UPDATE user SET password=password('new_password') WHERE user='root';
//root계정 비밀번호 설정

14.insert into user(host,user,password)
values(‘호스트명’,’유저명’,password(패스워드설정) );
//사용할 유저 이름과 호스트설정 그리고 비밀번호를 설정한다.
//ERROR 1364 (HY000): Field 'ssl_cipher' doesn't have a default value 발생시
http://linuxism.tistory.com/263

15.delete from user where user = ‘유저 명’
and host = ‘호스트 명’

16.grant all privileges on 데이터베이스명.*
to 유저명@호스트명 identified by ‘패스워드’;
//데이터 베이스에 대한 권한주기
//identified by의 경우 비밀번호 설정이기 때문에 하지 않아줘도 된다.

16.1 권한 확인
SHOW GRANTS FOR ['사용자아이디']@localhost;

출처: http://www.tutorialbook.co.kr/entry/Mysql-DB-및-사용자-생성-후-권한-주기 [튜토리얼북]

16.2 권한 삭제
REVOKE [GRANT 와 같은 형식으로 권한 나열] ON [데이터베이스].[테이블] FROM [사용자아이디]@localhost;

출처: http://www.tutorialbook.co.kr/entry/Mysql-DB-및-사용자-생성-후-권한-주기 [튜토리얼북]

17.flush privileges;
//권한 저장

18.update user set password=password(‘1234’) where user=‘root’
//관리자 계정 또는 계정의 비밀번호 변경 방법

19./Application/XAMPP/xamppfiles/bin/mysql
//맥 에서의 db접속 방법

20./opt/lampp/lampp/startmysql
//리눅스 에서의 db시작 방법

21./opt/lampp/bin/mysql
//리눅스 에서의 db접속 방법

=================================
