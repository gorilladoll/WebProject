# WebProject
PHP JS jQuery MySQL HTML CSSなどを利用して作ったウェブです。fukuokaというプロジェクトはデータベースやサバーがありません。

9월 12일 웹 프로그래밍
-autoset : 우리나라에서 만든 최근에 자주 사용하는 setup 프로그램
-XAMPP: 외국에서 자주 사용하는 setup 프로그램
-과제:다음 시간까지 virtual box에서 linux 가상 윈도우 사용 후 xampp(setup) 설치 및 에디터까지 설치
-다음 프로젝트에 대한 것을 미리 생각 해 둘것
-데이터 베이스 및 웹 프로그래밍 전체의 중요성을 강조
-현재는 json으로 변환되고 있지만 아직 xml을 사용하는 곳이 많다.
-혹시나 막히면 먼저 라이브러리를 찾아보아라. 그 후에도 모른다면 구글에 검색 해 보아라
-이기주의가 아닌 남과 함께 공존할 수 있는 방법을 찾아라

================================================

9월 21일 웹프로그래밍
<변수>
data type
변수의 데이터타입은 언제?
실행시 결정
변수는 선언없이 정의해서 사용
$변슈이름 = 초기값;
$변수이름을 이용하여 사용
1.쓰기: $변수이름 = 원하는 값;
2.읽기: $변수이름

<상수 == 리터럴>
define("상수명","상수값");
http://php.net/manual/kr/language.constants.php

<연산자(operater)>
-연산의 대상이 되는 것은 operand
1.대입/할당 연산자(=)
  왼쪽의 오퍼랜드에 오른쪽의 오퍼랜드의 값을 대입한다.
  복합 대입연산자(+=,-=,*=,/=,%=,.=)
2.산술 연산자
  (+,_,*,/,%) + (증감연산자 ++,--)
3.문자열 연결연산자(.)
4.비교 연산자(==,>=,<=,>,<,!=,===,!==,<>)
  http://php.net/manual/kr/language.operators.comparison.php
5.논리 연산자
  (&&,||,!) - AND,OR,NOT
6.비트 연산자
  (&,|,<<,>>,~,^)
  http://php.net/manual/kr/language.operators.bitwise.php

<흐름제어문>
1.조건문
  1)if문
    1-1)if문
    1-2)if-else문
    1-3)if-else if문
  2)switch-case문(결과가 정수형이 되는 수식)
    break;가 중요

2.반복문
  1)while(){};
    -조건이 만족하는 동안 실행
  2)do{} while();
    -한번은 블록 내부의 문장들을 실행할 필요가 있는 경우 사용
  3)for(초기식;조건식;증감식){}
    -실행 횟수가 정해진 경우 자주 사용

  *{}:block,실행의 단위
    a)조건문 블록:if,switch
    b)반복문 블록:while,do-while,for
    c)함수 블록:function 함수이름(인수리스트){}
    d)class 블록

================================================

9월 30일 웹 프로그래밍
데이터베이스 와 DBMS
관계형 데이터베이스의 구조
-2차원 테이블에 데이터 저장

-관계형 데이터베이스의 구성요서
	-테이블
		-데이터를 저장하는 기본단위
		-ex)웹 사이트에서 자유게시판,질의응답,회원 정보 등의 데이터가 각각 1개의 테이블에 저장됨

	-필드(column,열)
		-데이터베이스 테이블의 항목 하나하나
		-ex)회원 정보 테이블의 아이디,이름,가입일,주소,전화번호 같은 항목

	-레코드(row,행)
		-필드에 저장되는 한 세트의 정보
		-ex)회원 정보 테이블에서 한명 분의 데이터 집합

MySQL의 특징
-SQL에 기반을 둔 관계형 DBMS 중 하나
-Oracle,IBM,Infomix등의 데이터 베이스는 고가이지만 MySQL 데이터베이스는 무료


================================================

10월 17일 웹 프로그래밍

DB 명령어
create table tablename (
num int not null,
address varchar(80),
name varchar(10)
);

alter table 테이블 명 컬럼 명 타입

update 테이블 명 set 필드명 = 필드이름 where 조건식  

delete from 테이블 명 where 조건식


DBMS
-MYSQL
1.mysql 캐릭터 셋 확인
-status,show variables like ‘c%’;

2.사용 가능한 캐릭터 셋 확인
-show character set
-일본에서는  SJIS를 쓴다(Shift-Japan Industry  Standard)

3.DB생성시 디폴트 캐릭터 셋 설정
-CREATE DATABASES 디비명 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
-ALTER DATABASE 디비명 DEFAULT CHARACTER SET utf8;

4.테이블 디폴트 캐릭터 셋 설정
-CREATE TABLE 테이블명(컬럼의 리스트) DEFAULT CHARSET = utf8;

5.세션 캐릭터 셋 변경
-SET NAMES utf8 (캐릭터 셋:utf8,latin1,euckr,sjis);

6.영구적인 설정변경
-my.cnf or my.ini를 변경

7.phpMyAdmin 설정변경
 config.inc.php에서 user/password

<php,db연동>
http://php.net/manual/ja/refs.database.php
*추상레이어 : PDO

php		— 추상레이어— 		DBMS
		(코어모듈/DBMS Driver)

PDO - PHP Data Object
http://php.net/manual/ja/book.pdo.php
*준비사항:DBMS Driver
 ex) mysql의 경우 php.ini에 extension=php_mysql.dll을 주석 해제


================================================

10월 19일 웹 프로그래밍
*코어모듈
1. DB접속
	public PDI::__construct (
	String $dsn
	[, string $username
	[, string $password
	[,array $option]]])
	
	1>$dsn : Data Source Name
	-양식(format)
	 ‘PDO 드라이브 명:host=DB 서버 주소;port=3306;dbname=DB명;charset=utf8;’
	 ‘mysql:host=localhost;port=3306;dbname=$php_db;charset=utf8;’

	2>PDO 객체 생성 및 접속
	- $dbo = new PDO($dsn,$user,$pass);

2. DB 접속 종료
	-$dbo = null;

3. 쿼리 준비:Prepared sql을 처리하기 위해서
    1. 쿼리문 내에 ? 또는 :필드명(place holder)을 처리한다.
	public PDOStatement PDO::prepare (
		string $statement[, array $driver_option = array()]

	$statement : prepared sql문 작성
	driver_options : 	array(PDO::ATTR_CURSOR=>PDO::CURSOR_FWDONLY);
						array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL);

4. 쿼리 실행
    1. public bool PDOStatement::execute ([array $input_parameters])
    2. 10dbExecuteTest.php참고
5. SELECT 실행 처리
	public mixed PDOStatement::fetch (
	[int $fetch_style
	[,int $cursor_orientation = PDO::FETCH_ORI_NEXT
	[,int $cursor_offset = 0]]]	)

	$fetch_style의 종류 조사하기
	PDO::FETCH_ASSOC
	PDO::FETCH_BOTH
		$row[‘칼럼명’];
	PDO::FETCH_NUM
		$row[$i]
	PDO::FETCH_CLASS
	PDO::FETCH_OBJ
		$row->칼럼명
<?php
	require_once ‘DBManager.php’
	try{
	$db = connect();
	$stt = $db -> prepare(‘쿼리문’);
	$stt->execute();
	while( $row = $stt->fetch(PDO::FETCH_ASSOC){
		….
		$row[‘컬럼명’]
		….
	}
}	catch(PDOException $e) {

}
?>

================================================

10월 24일 웹 프로그래밍

Deplicated : 곧 단종 될 예정인 언어

MySQLi : MySQL 함수를 확장한 것(성능적에선 동등하거나 악간 우위)

리 다이렉션: 외부 sql문을 테이블 안에 삽입 하는 것.

source 명령어 사용법: source 경로;


================================================

10월 28일 웹 프로그래밍
쿠키 전달 방식
-HTTP요청(request)와 응답(response)은 헤더(header)와 바디(body)로 구성됨
-먼저 헤더 정보가 쓰이며, 그후 바디가 쓰임
-쿠키는 헤더에 쓰여지며 html 문서가 바디를 통해 전달 됨.

클라이언트 쿠키의 전달
-생성된 쿠키 값을 읽을 때:$_COOKIE[‘쿠키이름’]
-낮은 버전에서 사용 할 경우:$_HTTP_COOKIE_VARS[‘쿠키이름’];

================================================

11월 9일 웹 프로그래밍

객체지향 PHP
2004년 PHP5부터 객체지향 프로그래밍 대응
1. PHP에서 클래스 정의 : 클래스 멤버
 class 클래스명 {
	property 1
		...
		...
		…
	property n
  
	생성자 {		//객체가 생성될 때 호출 , new 연산자와 관련
		실행처리…
	}
	
	메소드1 (){
		실행처리…
	}
	 
		. . .
	  
	메소드n (){
			실행처리…
		}

	소멸자 {		//객체가 사라질 때 호출
		실행처리…
	}
}


2. 프로파티 정의
-access 수식자 $프로파티 명;
-Access 수식자(접근 제어자)
	1. public		:	클래스 내/외의 어느 곳에서든 엑세스(접근) 가능하다.
	2. protected	:	클래스 내,서브 클래스(상속된 클래스,자식클래스)에서 엑세스(접근) 가능
	3. private		:	클래스 내에서만 엑세스(접근) 가능

3. method 정의
	-Access 수식자 function 메소드명(파라미터 리스트){
	실행처리…
}

4. 클래스 사용
	1) 인스턴스화 : 생성
	-$인스턴스 변수 = new 클래스명();

	2) 참조변수 사용
	-$인스턴스 변수 = &인스턴스 변수;

	3)객체 멤버 사용
	(-> : arrow 연산자)
	 - 1. 프로파티 사용
	 	$인스턴스 핸들 변수 -> 프로파티명
		//$입력 없음
	 - 2.메소드 사용(호출)
		$인스턴스 핸들 변수 -> 메소드명(인수 리스트){}
		//$입력 없음


================================================

11월 11일 웹 프로그래밍

객체지향 PHP
 
생성자(Constructor)/소멸자(destructor)
1. 생성자 : 인스턴스 만들 시 호출	,
			미정의하게 되면 기본 생성자가 호출됨
-정의 : __construct(parameter list){
	//호출 방법은 new 클래스명();
} 
2. 소멸자 : 인스턴스가 파기될 때 후처리를 실행
			리소스의 해방(릴리즈)를 수행
	$pdo = NULL;

 
3. 정적(Static) 멤버 : 인스턴스화 하지 않아도 사용가능한 멤버
	1) 정적 메소드
	1>정의
		public static function 메소드명(파라미터 리스트){
			//실행 처리
		}
	
	2>호출
		클래스명 :: 메소드명(인수리스트);
		
	2)정적 변수(프로퍼티)
	1>정의
		public static $프로퍼티명 = 값; 
		*정적 프로퍼티를 정적 메소드 내에서 사용하려면 self:: 로 접근해야 한다.
		

================================================

11월 14일 웹 프로그래밍
 
클래스의 정수 (오브젝트 정수, 객체상수)
const 정수명 = 값;
1. 정의할 때/사용할 때 $를 안붙임
2. 엑세스 수식자를 붙이지 않음
3. 엑세스 할 때 self::정수명

Encapsulation:캡슐화
프로퍼티를 함부로 접근하지 못하게 하기위해 사용
1.  private한 프로퍼티의 정의 : $private $프로퍼티 명;
2. Getter/Setter
	function get프로퍼티명(){
		return $this->프로퍼티명;
	}
	function set프로퍼티명(){
		$this->프로퍼티명 = 파라미터 명;
	}
 

상속 - inheritance(継承 - けいしょう)
1. 클래스의 계승 - 기존 클래스의 프로파티 , 메소드 등 멤버들을 그대로 상속받아 새로운 클래스를 정의하는 것
					다중 상속을 금지
					기존: 상속받는 클래스
					부모 클래스 : 자식 클래스
					상위 클래스 : 하위 클래스
					기본 클래스 : 파생 클래스
					수퍼 클래스 : 서브 클래스

	class 서브클래스 extends 수퍼클래스{
		//서브클래스의 독자적인 멤버를 추가함
		//	
	} 

================================================

11월 18일 웹 프로그래밍

오버라이딩 :	메소드의 오버라이딩
			 		수퍼클래스의 멤버 메소드를 서브클래스에서 재정의
조건) 
1. 수퍼클래스의 메소드 명과 같아야 한다.
2.  수퍼클래스의 메소드의 파라미터 구성이 같아야 한다.
3. 엑세스 수식자의 허용 범위를 같거나 확대하는 방향

*	오버라이딩한 수퍼클래스의 메소드를 호출하려면 
	parent::메소드명(인수리스트);

*	서브클래스에서 인스턴스화 할 때 특별히 지정하지 않으면 수퍼클래스의 생성자가 호출되지 않음
	특별히 지정하는 방법 - parent::__construct(인수리스트);
 
*	오버라이딩 금지 시키기 - final , 
	public final function 메소드 명(인스리스트){
		 
	}
 
*	계승 금지 - final
	final class 클래스명{
		
	}


다형성(polymorphism) : 동일한 이름의 메소드로 상황에 따라 서로 다른 처리를 가능하게 하는 것
장점 : 같은 목적의 기능을 위해서 다른 메소드명을 기억할 필요가 없다



*	객체지향의 3대 요소 :  polymorphism(다형성)
									encapsulation(information hiding - 은닉)
									inheritance(상속)

*	polymorphism을 실행하기 위해서 계승(상속=>오버라이드)로 실현했지만 불충분 하다.
	이유 : 서브클래스에서 오버라이딩  한다는 보장이 없다
	해결 : 추상클래스와 인터페이스

abstract(추상) 클래스
Abstract 메소드 : 구현 부분이 없다.
							abstract 수식자를 적는다.
							상속 받는 서브 클래스에서는 반드시 구현하여야 한다.
							(오버라이딩 해서 구현함)
Abstract class : abstract 메소드를 가지고 있는 클래스

abstract class 클래스명{
	abstract 엑세스 수식자 function 메소드명(인수리스트);
}
*사용가능 엑세스 수식자 : public , protected

구현 : 	implementation : 実装(じっそう)
	   		추상 메소드를 서브클래스에서 오버라이딩 하여 구체적으로 코딩하는 것

================================================

11월 21일 웹 프로그래밍

인터페이스 : 	추상 메소드만 가진 특수한 클래스
			  		메소드 내용은 몰라도 사용법만 알게 하기 위해서

-추상 메소드만 정의 
-abstract를 붙이지 않음(자동으로 추상 메소드가 됨)
-사용가능 엑세스 수식자 : public , 생략가능
 
1. 인터페이스의 선언
	interface 인터페이스명 {
		const 상수 명 = 값;
 
		public function 메소드 명(파라미터 리스트);
	}
 
2. 인터페이스의 실장(구현) : implements
	class 클래스명 implements 인터페이스 명,…..인터페이스 명 n{
		//인터페이스의 메소드를 구현함 
	}
* 인터페이스를 구현한 클래스에서 인터페이스 상수 참조
	:인터페이스 명::상수명 , SELF::상수명
* 클래스나 인터페이스 성보를 알아내는 함수
	get_class(인스턴스 참조변수);
	get_class_method(‘클래스명’);
	get_class_method(new 클래스명());
	get_object_vars($인스턴스 참조변수);

오버로드
1. 정의 : 메소드 처리를 상황에 따라 다른 처리로 변경하여 사용하도록 하는 것 
 php의 오버로드 : 프로퍼티나 메소드를 동적으로 작성하기 위한 방법

* magic function : 이름,파라미터,반환,호출의 타이밍만 결정 되어 있음
* 내용은 프로그래머가 결정(작성)하여 사용한다. 
1. __construct()
2. __destruct()
3. __call()
4. __callStatic()
5. __get()
6. __set()
7. __isset()
8. __unset()
9. __sleep()
10. __wakeup()
11. __toString()
12. __ivoke()
13. __set state()

* 오버로드로 정의하지 않는 프로퍼티를 처리
	__get() => 정의하지 않은 프로퍼티 값을 불러올 떄
	__set() => 정의하지 않은 프로퍼티에 값을 대입할 때
	—isset() => 정의하지 않은 프로퍼티를 isset 함수 / empty 함수로 호출 
	__unset() => 정의하지 않운 프로퍼티를 unset함수로 호출
* 오버로드로 정의하지 않은 메소드를 처리
	__call() => 정의하지 않은 메소드를 호출할 때
	__callStatic() =>

================================================

11월 23일 웹 프로그래밍

Late static bindings : 정적 지연 바인딩
*__CLASS__ 	: 현재의 클래스명을 가지고 있는 상수
*__FILE__ 		: 현재의 파일의 경로를 가지고 있는 상수

*프로퍼티,메소드를 지정
스코프(scope) 지정자					Scope					사용가능 장소
	클래스명::					 	지정한 클래스				 클래스 밖,안
	SELF::						self::가 작성된 클래스			 클래스 안
	parent::			parent::가 작성된 클래스 부모클래스 	 클래스 안
	static::				직근(直近)의 비 전송 호출 클래스	 클래스 안	
    
 
<<<	Reference - 	참조	>>>
New로 인스턴스를 생성할 때. 인스턴스의 참조값(주소값,pointer)을 변수에 저장
1. 변수의 참조 
	$a = 10;
	$b = &$a;		//& : 참조연산자 - 주소연산자
	$c = $a;
	$b = 50;

인수(引数)
가인수(借り引数) : parameter, formal parameter(argument)
실인수(室引数) : argument , actual argument(parameter)
함수(関数,手続き) : procedure(프로시저)



배열(객체)의 참조
1. call by value - 값 전달(値渡し)
2. call by reference  - 참조전달 호출(参照渡し)

인스턴스의 참조
$ob = new TestCls();
$ob1 = $ob;
$ob2 = &$ob;

$ob ———————————> TestCls의 instance
	^										^
	|										|
  $ob2									  $obj
*참조 카운터:하나의 인스턴스를 참조하는 변수의 개수
			  0이되면 인스턴스틑 파기됨

================================================

11월 28일 웹 프로그래밍

인스턴스의 복사(copy) : clone $인스턴스 참조변수;

인스턴스의 비교
== : 동일한 클래스의 인스턴스이고 동일한 프로퍼티 값을 가지고 있으면 참
=== : 동일한 클래스의 동일한 인스턴스이어야 참

순환참조 : 인스턴스가 자신의 인스턴스를 참조
$a = new Test();
$a->self=$a;
unset($a);
   
<<<예외처리: Exception>>>
try - catch()
try{
	//예외가 발생될 것으로 예상되는 코드 작성
} catch(Exception $e){
	//예외 발생 시 실행해야 하는 코드를 작성
}

프로그래머가 원하는 위치에서 예외를 발생
	throw new 발생 시키고 싶은 예외 클래스 명();

사용자 정의 예외 클래스 작성 : extends Exception
http://php.net/manual/en/class.exception.php
 
php5 이전의 에러
set_error_handler()
//http://php.net/manual/en/function.set-error-handler.php

Namespace
-java의 pacakage와 유사하다
-이름공간 : 이름 충돌 방지
1. 정의 namespace 이름공간; 공백이나 개행 없이 저장해야 한다. 
2. 사용 이름공간명\클래스명; 
3. 임포트 Use 이름공간명;

================================================

11월 30일 웹 프로그래밍

*이름공간 != 폴더
 권장 ==> 이름공간 == 폴더의 계층구조
*한 파일에 두개의 이름공간 사용 가능?
 {}을 이용,사용가능하다.
 namespace 이름공간1{
	//소스코딩
}
  
namespace 이름공간2{
	//소스코딩
}
 
별명 - alias : エイリアス
use 이름공간명/클래스명 as 별명;

