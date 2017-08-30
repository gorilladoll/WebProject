# WebProject
3월 2일 Javascript
WWW
World Wide Web

WWW 의 동작원리

클라이언트 컴퓨터 -> 인터넷 <->웹 서버 <- HTML 문서
1)웹서버에 data저장(HTML - js,css:php,jsp)
*php나 jsp는 css나 javascript형태로 나타나야 한다.
2)클라이언트(웹 브라우저) 웹서버에 원하는 데이터를 요청(Request)
3)웹 서버에서 요청받은 데이터를 검색한 후 있으면 클라이언트로 응답(Response)
4)2번과 3번 사이의 데이터를 주고받는다(송수신:전송) - > 전송수단-HTTP
5)2번과 3번 사이의 데이터를 표현하는 수단:HTML(js.css)수단

HTML
HTML(Hyper Text Markup Language)은 웹 페이지를 기술하기 위한 마크업(markup )언어
*마크 == 기호 라고 생각하면 좋다.
마크업 언어는 텍스트에 태그를 붙여서 텍스트가 문서의 어디에 해당 하는지를 기술한 것
Mark == Tag
Tag:’<‘ 와’ >’ 사이에 있는 것이 태그 이름
2가지 종류의 Tag:시작과 종료-시작과 종료를 구분하기 위해서 종료는 </태그명>이 된다
시작태그와 종료태그 사이에는 내용이 있다(Contents)
HTML Element(요소):시작태그 + 내용 + 종료태그

 HTML5 + CSS + Javascript
-HTML5는 웹 페이지의 내용
-CSS3는 웹 페이지의 표현
-Javascript는 웹 페이지의 동작

 멀티미디어 지원
-웹 브라우저에서 비디오나 오디오를 재생
-그래픽을 위한 캔버스요소 지원
-백터 그래픽스를 지원하는 SVG(sclable Vector Graphics)
-WebGL 3D를 이용하여 3차원 그래픽 지원
*WebGL 	-AR(증강현실)
		 	-VR(가상현실)

속성(attribute)
속성은 요소에 대한 추가적인 정보를 제공
속성은 항상 시작태그에 이름 = “값”형태로 기술된다
예) <a href = “http://www.w3.org”>w3컨소시엄</a>

주석
주석은 html코드를 설명하는 글
<!—    내용    —>

=================================

3월 8일 자바스크립트

텍스트 표시
-텍스트는 특별한 태그 없이도 <body></body>안에서 표시 된다
-하지만 단락을 생성하지 않으면 모든 텍스트가 연결되어 하나의 긴 줄로 표시된다

단락
-단락(Paragraphs)란 하나하나의 짦은 이야기 토막
-단락 전 후에 빈줄이 추가된다 
-<p>

<br>태그
-강제 줄바꿈 태그(개행)
*종료 태그가 없다

텍스트 입력시 주의사항
-html 코드에서 엔터키를 눌러 줄을 바꾸었다고 해서 웹 브라우저에서도 바뀌는 것은 아니다

pre 태그
-프로그래머가 입력한 그대로 화면에 표시하는 태그

헤딩
-헤딩(heading):웹 페이지의 머리기사(headline)
<h1></h1>
<h2></h2>
<h3></h3>
<h4></h4>
<h5></h5>
<h6></h6>

주석
-주석(comment)은 코드를 설명하는 글
*주석은 소스 코드에 대한 설명으로 사용될 수 있다.
*필요없는 소스코드를 무효화 하는데 사용 할 수 있다.

텍스트 서식
-현재는 CSS로 대체 되었음.
-한번 보기는 할것

수평선
-<hr> 태그를 사용하면 수평선을 그릴 수 있다,
*종료태그가 없다.

특수문자
-‘<‘ 나 ‘>’같은 문자를 화면에 표시하기 위하여 필요하다.
-&nbsp;   공백
-&lt; 	    <
-&gt;        >
-&quot;      “
-&amp;      &

리스트
-리스트:항목들을 나열하는데 사용
 1.번호가 있는 리스트:<ol></ol>
 2.번호가 없는 리스트:<ul></ul>
 3.리스트의 하위 리스트 항목<li></li>
 4.정의 리스트(defination list) 항목들과 함께 정의(설명)가 표시되는 리스트
 <dt></dt>

*참고사항:한글코드는 2가시 방식이 있는데 euc-kr과 utf-8이다
euc-kr:한글과 영어를 각각 2바이트로 사용하는 방식,한글과 영어를 사용하는데 적합
utf-8:영어는 1바이트 한글은 3바이트 이다. 영어를 많이 사용하거나 다국적 언어를 많이 사용하는경우 적합하다.
 
링크
-하이퍼링크(또는 링크)는 다른 문서로서 점프할 수 있는 단어나 이미지
<a href = “xx.html”>추가정보</a>
*경로:컴퓨터 상에서 현재 나의 위치를 알려주는 정보
  (1.절대경로:처음부터 끝까지 모든 정보를 적는 경로,바뀌지 않음
   2.상대경로:현재 나의 위치로부터 부모 또는 자식으로 이동하는 경로
	상대 경로에서의  ‘ .. ‘  - > 자신의 부모 클래스로 이동
					   ‘ . ’  .  > 자기 자신의 클래스에서 이동
   3.내부파일:id속성을 이용하여 이동 )

id속성
-<a>태그를 이용하여 현재 페이지의 다른 위치로 이동 시킬 수 있다.

target속성
-target속성은 각 링크가 클릭 되었을 시에 어디서 열리는 지를 지정한다
(속성에 대한 것은 P37 참고)



=================================

3월 9일 자바스크립트

이미지
-<img src = “절대경로” or “상대경로”>
*상대경로 선호:서버이전,도메인변경 등
-width: 폭,너비
-height:높이
-블록요소 - 전후 개행
-인라인 요소(엘리먼트) - 개행불가.

*윈도우즈 파일 	- 2진(바이너리) 파일
				- 텍스트파일
*베이스64 인코딩
-인코딩 -> 웹 서버가 응답
-디코딩 ->브라우저가 표시

alt
-이미지가 안보일때 화면에 표시시키는 대체 텍스트

브라우저에서 사용하는 이미지
-JPG,JPEG:jpg - 손실 압축 방식
-PNG:png - 무손실 압축방식,애니메이션 지원 (안드로이드 기본 저장은 png)
-GIF:gif -무손실 압축방식,애니메이션 지원

테이블
-tr:table rows
-td:table data
-th:table head


=================================

3월 15일 JavaScript

오디오
<audio src = “old_pop.mp3” autoplay controls>

audio:오디오 삽입 태그
src :오디오 소스파일 경로
autoplay:자동재생
controls:화면에 제어기를 보임
loop:브라우저가 오디오를 반복하여 재생
volume:오디오 재생 볼륨을 설정한다.
preload:사용자가 사용할 생각이 없더라도 오디오를 미리 다운로드 한다.

비디오
<video src = “movie.mp4” autoplay controls>

poster:다운로드하는 중일때 표시하는 이미지
muted:비디오의 오디오 출력을 중지한다.  

iFrame
iframe은 웹 페이지 안에 다른 웹 페이지를 표시하고자 할때 사용

div
<div>는 “divide”의 약자로서 페이지를 논리적인 섹션으로 분리하는데 사용되는 태그
*페이지를 논리적인 섹션으로 분리하는 방법
1.frame,franeset(html4)
2.table(html4)
3.div,span(html4,html5)
4.시멘틱 태그
(	 layout을 위한 시맨틱 태그
	1.<header>
	2.<footer>
	3.<nav>
	4.<section>
	5.<aside>
	6.<article>
	7.<index>
	8.<figure>
	9.<time>
	10.<hgroup>
)

*자바스크립트 정규표현식 알아보기.

=================================

3월 23일 수요일

CSS(Cascading Style Sheets):문서의 스타일을 지정
-Cascading:위에서 아래로 내려오는 순차적인것.

CSS의 장점
-거대하고 복잡한 사이트를 관리할 때 필요
-모든 페이지들이 동일한 CSS를 공유
-CSS에서 어떤 요소의 스타일을 변경하면 관련된 전체의 내용이 한꺼번에 변경

CSS3의 기능
-선택자: CSS와 HTML을 연결하는 일종의 연결고리 역할
-박스모델
-배경 및 경계선
-텍스트효과
-2차원 및 3차원 전환
-애니메이션: 대개 jQuery를 사용하지만 세세한 조정은  CSS에서 한다.
-다중 컬럼 레이아웃
-사용자 인터페이스

CSS3 문법
-선택자 {속성:값;}
-끝에 반드시 ;을 적어준다.
	p { background - color : yellow;}
-주석:  /* … */

CSS의 위치
-CSS는 html 내부에 head태그 안에서 스타일 태그를 이용하여  지정한다.

선택자
-selector:HTML요소를 선택하는 부분
-선택자는 jQuery에서도 사용
-가장 많이 사용되는 것은 6가지 정도
-선택자의 종류
	-타입선택자(태그 선택자): HTML 요소 이름을 사용
	-전체 선택자:페이지 안의 모든 요소를 선택(*(asterik) 을 사용한다.)
	-클래스 선택자:(.target{속성:값 형식}) 클래스가 부여된 요소를 선택
	(ID선택자와는 다르게 여러개 선택을 할 수 있다.)
	-아이디 선택자:(#target{속성:값}형식) 특정한 요소를 선택한다
	(ID는 HTML상에서 유일하게 하나만이 가능하다.)
	-속성 선택자
	-의사 선택자
-선택자 그룹:선택자를 콤마로 분리하여 나열할 수 있다(h1,h2,h3{font-size: 10px;})
-div#target:div 안에서 id가 target인 요소에 스타일 지정
-div.target::div태그 안에서 class가 target인 모든 요소에 스타일 지정

자손,자식,형제 결합자
-s1 s2 : s1 요소에 포함된 s2요소를 선택한다(후손관계)
-s1 > s2: s1 요소에 직계자식인 요소인 s2를 선택한다(자식관계)


=================================

3월 29일 Java Script

의사클래스
-의사클래스는 콜론을 이용하여 표기한다. a:link라고 생각하면  <a>요소에 클래스 link가 선언된것 처럼 생각하고 선택자를 만드는 것이다.
-a:link
-a:visited
-a:hover

속성선택자
-특정한 속성을 가지는 요소를 선택한다.
-h1[title] {color:blue;}
-p[class = “example”] {color:blue;}


CSS 삽입 위치
-외부 스타일 시트
-내부 스타일 시트
-인라인 스타일 시트

스타일시트 삽입방법
A.css						

B.css
B.css파일 내부에서 @import url{“A.css”};

외부 스타일 시트
-외부 스타일시트는 스타일 시트를 외부파일로 저장하는것
-많은 페이지에 동일한 스타일을 적용 하려고 할 때 좋은 방법
<head>
	<link style = “text/css” rel = “Stylesheet” href = “my style.css”>
</head>

내부 스타일 시트
-html 문서 내부에 head태그 내부에 <style>내용</style>라는 형태로 작성

인라인 스타일 시트
-각각의 html 요소마다 스타일을 지정하는것
(1.엘리먼트의 시작태그에 정의
 2.style속성으로 지정
 3.<h1 style = “”></h1>형식으로 만듦)

다중 스타일 시트
하나의 요소에 외부,내부,인라인이 서로 다르게 지정 될 경우 우선순위
우선순위
1.인라인 스타일시트
2.<head>에 지정된 내부 스타일 시트
3.외부 스타일 시트
4.웹 브라우저 디폴트 값

*부모의 CSS속성은 자식에게도 상속된다.
 스타일은 자식에서 재 정의가 가능하다.

많이 사용되는 속성들
color : 텍스트 색상
font-weight:볼드체 설정(폰트의 굵기)
padding:요소의 가장자리와 내용간의 간격
font-size:폰트의 크기
background-color:배경색
border:요소를 감싸는 경계선
font-style:이탤릭(기울어 져 있는 글자)체 설정
background-image:배경이미지
text-align:텍스트 정렬
list-style:리스트 스타일

색상
방법		설명
이름		red
16진수		#FF0000(R G B A)
10진수		rgb(255,0,0) (rgba(255,0,0,0))
퍼센트		rgb(100%,0%,0%)

폰트
속성			설명
font			한줄에서 모든 폰트 속성을 설정할 때 사용
font-family 	폰트 패밀리 설정
font-size		폰트의 크기 설정
font-style		폰트 스타일 설정
font-weight	폰트의 볼드체 여부 설정

=================================

3월 30일 Java Script

텍스트 스타일
속성						설명
color						텍스트의 색상 지정
direction					텍스트 작성 방향을 지정
letter-spacing				글자간 간격을 지정한다.
line-spacing				글자간 간격을 지정한다.
text-hight					텍스트 줄의 높이를 지정한다
text-decoration			텍스트 장식을 지정한다.
text-indent				텍스트의 들여쓰기를 지정한다.
text-shadow				그림자 효과를 지정한다.
text-transform				대소문자 변환을 지정한다.

word-wrapping
텍스트가 박스를 넘어가면 자동으로 개행을 해준다

=================================

4월 5일 Java Script
margin
-margin은 경계,주위 영역이며 투명하다(경계의 가장 큰 영역)

padding
-콘텐츠 주의의 영역,색깔 가능(기본은 투명)

border
-패딩과 내용물을 감싸는 경계
-<border-style>을 이용하여 경계선 스타일 설정 가능
-<border-style>은 4방향의 스타일을 적용 시킬 수 있다.
	1.border-top-style = dotted
	2.border-right-style = solid
	3.border-bottom-style = double
	4.border-left-style = dashed
	(시계방향)
또는 한줄로 <style = “border style:dotted solid double dashed”>라고도 사용이 가능하다
-경계선은 (width,style,color)이 있으며 각각 width,solid,color순으로만 적어야 한다.
-둥근 경계선은 radius를 사용한다.(사용시 패딩을 적절하게 주어야 공간이 확보 된다)
-이미지
그림자 생성
-box-shadow를 사용한다.
-box - shadow : 20px 10px 5px #666666;
-각각 “가로 오프셋/세로오프셋/번지는 정도/그림자 색 “순서대로 설정

마진과 패딩 설정하기
마진
-auto :브라우저가 마진을 계산한다
-length:마진을 px,pt,cm단위로 지정할 수 있다(디폴트는 0px)
-% :마진을 요소 푝의 퍼센트로 지정
-inherit:마진이 부모 요소로부터 상속된다
순서:top-right-bottom-left

*1.margin;10px 20px 30px 40px;
 2.margin:10px (상/하/좌/우 모드 10px)
 3.margin:10px 20px(상/하 10px   	/ 좌/우 20px —마주보는 픽셀의 크기를 복사)
 4.margin:10px 20px 30px (상: 10px  우: 20px  하:30px  좌:20px)

*margin값과 padding값을 겹칠때 값을 음수로 사용

*내용의 길이(width,height) = (margin + border + padding)

=================================

4월 6일 Java Script

배경이미지 설정
-background:모든 배경 속성 정의
-background — attachment:배경 이미지가 고정되는지 스크롤 되는지를 지정
-background — color:배경색을 정의한다
-background —image:배경이미지를 정의한다
-background — position:배경이미지의 시작위치를 지정
-backgorund — repeat:배경이미지의 반복여부 설정
(repeat - x  /  repeat - y / repeat)

링크스타일
-a:link - 방문되지 않은 링크의 스타일
-a:visited - 방문된 링크 스타일
-a:hover - 마우스가 위에 있는 상태
-a:active - 마우스가 눌려있는 상태

리스트스타일(중요)
-list-style:리스트에 대한 속성을 한줄로 정의
-list-style-image:리스트 항목 마커를 이미지로 지정
-list-style-position:리스트 마커의 위치를 안쪽인지 바깥쪽인지를 지정한다
-list-style-type:리스트 마커의 타입을 지정한다

테이블 스타일(중요x)

=================================

4월 6일 Java Script

배경이미지 설정
-background:모든 배경 속성 정의
-background — attachment:배경 이미지가 고정되는지 스크롤 되는지를 지정
-background — color:배경색을 정의한다
-background —image:배경이미지를 정의한다
-background — position:배경이미지의 시작위치를 지정
-backgorund — repeat:배경이미지의 반복여부 설정
(repeat - x  /  repeat - y / repeat)

링크스타일
-a:link - 방문되지 않은 링크의 스타일
-a:visited - 방문된 링크 스타일
-a:hover - 마우스가 위에 있는 상태
-a:active - 마우스가 눌려있는 상태

리스트스타일(중요)
-list-style:리스트에 대한 속성을 한줄로 정의
-list-style-image:리스트 항목 마커를 이미지로 지정
-list-style-position:리스트 마커의 위치를 안쪽인지 바깥쪽인지를 지정한다
-list-style-type:리스트 마커의 타입을 지정한다

테이블 스타일(중요x)


=================================


4월 15일 자바스크립트

레이아웃
-웹 페이지에서 HTML요소의 위치,크기를 결정 하는 것

블록 요소
-한 줄을 전부 차지
(h1		,p	,ul	,li	,table	,blockquote	,pre	,div	,form	,heade	r	,nav)

인라인 요소
-한줄에 차례대로 배치,현재줄에서 필요한 너비만큼만 사용

CSS의 display속성
-속성 display를 block으로 설정하면 블록요소처럼 배치
-display를 inline으로 설정하면 인라인 요소처럼 배치
(	display:block:블록
	display:inline:인라인
	display:none:없는것으로 간주됨
	display:hidden:화면에서 감춰짐
)

요소의 위치
-요소의 크기는 width,height 속성으로 요소의 너비와 높이를 설정
-기준위치는 position 속성으로 결정 된다.

위치설정 방법
-정적 위치 설정(Static):정상적인 흐름에 따른 배치
	-블록 요소들은 박스처럼 상하로 쌓이게 되고 인라인 요소들은 한줄에 차례대로 배치
	-흐름에 따른 기법이기 때문에 없어도 큰 차이가 없다.
	
-상대 위치 설정(Relative): 정상적인 위치가 기준점
	-상대위치의 주의점은 정상적인 위치에 대하여 상대적 이라는 점이다.

-절대 위치 설정(Absolute):컨테이너의 원점이 기준점이 된다.
	-body의 시작위치를 기준으로 원하는 픽셀만큼만 이동되어 배치되게 된다.

-고정 위치 설정(Fixed):윈도우의 원점이 기준이 된다.
	-스크롤을 하여도 화면에서 요소는 움직이지 않는다.
	-

Container
-HTML 요소들을 감싸고 있는 요소

float 속성
-position값이 설정 되어야 실행이 가능 하다.
-요소를 float으로 설정하면 이미지의 왼쪽 또는 오른쪽에 사진의 옆에 글자가 배치 된다.
-용도: 레이아웃에 많이 사용 된다
-제거:clear속성 사용
  (예] clear:both;)

z-index
-Z-index는 요소가 겹치는 순서를 제어하는데 사용 된다

요소의 크기 설정
-width,height:요소의 크기
-min-height,min-width:요소의 최소크기
-max-height,max-width:요소의 최대크기

overflow속성
-자식요소가 부모요소의 범위를 벗어났을 때,어떻게 처리할 것인지를 지정
-hidden:부모 영역을 벗어나는 부분을 보이지 않게 한다
-scroll:부모 영역을 벗어나는 부분을 스크롤 할 수 있도록 한다.
-auto:자동으로 스크롤 바가 나타난다.
-hidden:스크롤 바를 숨긴다

=================================

3월 16일 JavaScript

HTML 입력양식

1.<form>요소
-입력양식은 항상 <form>으로 시작한다
-action을 이용하여 입력을 처리하는 서버 스크립트의 주소를 적어준다.(상대주소방식)
-method를 이용하여 입력한 데이터가 서버로 보내지는 방법을 기술한다.(Post와Get)
*GET방식:GET방식은 URL주소 뒤에 파라미터를 붙여서 데이터를 전달
(장점:간단,북마크가능,뒤로가기 보장
단점:보안취약,보낼 데이터 길이의 제한
특징:주소창에 표시됨,URL + ? + 보낼데이터(변수1 = 값1 & 변수2 = 값2))
*POST방식:POST방식은 사용자가 입력한 데이터를 URL주소에 붙이지 않고 HTTP Request 헤더에 포함된다.
(장점:길이에 제한이 없다,보안이 유지(완벽x))

2.<input>형식
-type속성은 입력필드의 종류를 결정한다
-value속성은 버튼에 나타나는 텍스트이다.
-name속성은 서버로 전달되는 이름이다.
-종료태그 x

type 속성값:
-text:텍스트를 입력, 한줄짜리
-password:비밀번호를 생성,한줄짜리
-radio:여러개 중 하나만 선택하게 함
-checkbox:체크박스 생성
-file:파일 이름 입력
-reset:초기화 버튼 생성
-image:이미지를 전송
-hidden:사용자에게 보이지 않지만 서버로 전송
-submit:제출버튼
-등등

input속성
-input속성에서의 name - 속성, 속성 뒤의 것은 속성 값.

button
-<input type = “button”>
-<button>으로도 사용가능


=================================

3월 22일 JavaScript

<textarea>요소
-여러줄의 텍스트를 입력받을때 사용되는 태그
-rows - 한번에 보여지는 텍스트의 아래길이
-cols - 한줄에 입력 가능한 텍스트 길이

<select>요소(combo box)
-메뉴를 표시하고 사용자로 하여금 선태 하게 함
-항상 <option>요소와 함께 사용 한다.
-<option>요소는 항목들을 나타낼때 사용한다.
-name과 <option>의value가 중요
-서버에 전송할때 <select>요소의  name을 변수의 이름으로 전송되고, <option>의 value값은 내부 항목으로 전달된다.
*<action>태그는 보내고자 하는 서버의 주소URL

<fieldset>태그
-입력 요소를 그루핑 하는데 사용
-legend태그를 사용하면 그룹에 제목을 붙일 수 있다.

<label>태그
-<input>요소에 대한 설명를 위한 레이블이다.
-<label for>형식으로 태그를 사용한다.

파일 업로드 버튼
<form enctype = “multipart/form-data”>
	<input type = “file” accept = “img/jpg,image/gif”>
</form>

-enctype - 인코딩(encoding)에대한 타입
-accept속성이 있는데 accept속성은 찾을 파일에 대한 기본 설정을 말한다.
*encoding - 저장 되어 있는 2진수의 데이터를 부호등을 이용하여 코드로 만드는 것을 encoding이라고 한다.
*자주 사용하는 파일업로드 인코딩:base64
*한/일 인코딩 종류
	euc -kr
	UTF-8
	euc-jp

<input type = “hidden”>
-클라이언트가 서버로 특정한 데이터를 전송하고 싶은 경우 사용
-화면에는 아무것도 나타나지 않는다
-주로 default나 서버로 전송중 오류의 여지가 있을경우 자주 사용

HTML5 입력요소
-input에 대한 type의 추가요소
	date		datetime	datetime-local
	month		time		week
	color		email		tel
	search		range		number
	url
-추가된 속성
	autocomplete - 자동으로 입력을 완성
	autofocus		- 페이지가 로드되면 자동으로 입력포커스를 갖는다
	placeholder 	- 입력 힌트를 희미하게 보여준다
	readonly		- 읽기 전용 필드
	require		- 입력양식을 제출하기전에 반드시 채워넣어야 함
	pattern		- 허용하는 입력의 형태를 정규식으로 지정



=================================

4월 19일 자바스크립트

레이아웃 방법 
1.테이블 엘리먼트 - html4에서의 형태
2.div 엘리먼트 - 일반적인 형태
	<div id = "header">
	<div id = "nav">
	<div id = "content">
	<div id = "footer">          
3.시멘틱 요소 레이아웃 - 앞으로의 형태
	<header>
	<nav>
	<selection id = "content">
	<footer>

display 요소
1.display:block;
2.display:inline;
3.display:none;
4.display:block-inline;
5.display:hidden;
6.display:table-cell;
*table-cell:값이 컨테이너에 지정되면 자식 요소를 테이블의 셀처럼 배치하라는 의미

효과
opacity 속성(투명도)
-0.0은 완전히 투명한 상태
-1.0은 완전히 선명한 상태

visibility 속성(가시성)
-hidden:요소를 보이지 않게 한다
-visible(기본값):요소를 보이게 한다
*visibility:hidden과 display:none의 차이점은 display:none은 아예 이미지의 위치를 없애 버리나 visibility:hidden은 위치는 그대로 하지만 이미지는 보이지 않게 한다.

transitions 속성(전환)
-transition: 				width 					5s;
  	효과		전환의 대상이 되는 속성	 전환 효과의 지속시간
*지속시간이 지정되지 않으면 0으로 간주하여 변화 x

브라우저 별 접두사
1.transition:표준
2.-moz-transition:파이어폭스
3.-webkit-transition:크롬,사파리
4.-o-transition:오페라

transform(다중변환)
-너비,길이,회전등 다양한 전환효과
-예) rotate(180deg);
(CSS에서 이용하는 현재 배운 함수 - RGB,URL)

CSS변환
-transform의 종류
1.translate(10px,10px) - 평행이동
2.rotate(45deg) - 회전
3.scale(2 , 1.2) - 크기변환
4.skew(20deg,10deg) - 비틀기 변환
5.matrix() - 일반적인 변환

복합변환
-하나의 요소에 여러가지 변환이 차례대로 적용 가능

matrix()
-6개의 매개변수를 가진다
(rotate,scale,translate,skew)
-2D변환을 값 6개로 이루어진 변환행렬에 저장
-matrix(a,b,c,d,e,f)는 변환행렬[a b c d e f]에 해당된다

3차원 변환(중요x)

CSS 애니메이션
@keyframes - 키 프레임의 위치를 퍼센트로 지정하여 변화
@keyframes myanim
{
	0%{left:0px top:0px;}
	25%{left:100px top:0px;}
	50%{left:200px top:0px;}
	75%{left:100px top:0px;}
	100%{left:0px top:0px;}
}
(@를 사용하는 것
1.@import
2.@font-face:사용자 정의 폰트
3.@keyframes
)

animation-iteration-count
-애니메이션 반복 횟수
(예 - animation-interation-count:10)

튀어오르는 공 애니메이션
@keyframes bounce{
form,to {
	bottom:0px;//시작점이 0
	-webkit-animation-timing-function:easy-out;
	}
50%{
	bottom:200px//50%대 200px까지 튀어오름
	-webkit-animation-function:east-in;
	}
}

=================================

4월 26일 자바스크립트

자바 스크립트
-브라우저가 소스코드를 직접 해석하여 실행하는 인터프리트 언어
-브라우저 위에서 실행
-html파일 안에 삽입 가능
-변수 타입을 선언하지 않아도 사용 가능

자바 스크립트의 역사
-브렌든 아이크가 개발
-자바스크립트의 표준
	-ECMAscript

자바스크립트의 특징
-인터프리트 언어:인터프리트 언어란 컴파일 과정을 거치지 않고바로 실행 할 수 있는 언어
-동적 타이핑(동적 바인딩):변수의 자료형을 선언하지 않고도 변수를 사용할 수 있는 특징이 있다.
-구조적 프로그래밍 지원: C언어의 구조적 프로그래밍을 지원 한다(if-else,while,for 등)
-객체기반:자바스크립트는 객체 기반 언어이다.,자바스크립트의 객체는 연관배열이다.
-함수형 프로그래밍 지원:자바스크립트에서 함수는 일급객체(first-class object)이다,함수는 그 자체로 객체이며 함수는 속성과 .call()과 같은 메서드를 가진다
-프로토타입 기반(prototype-based):자바스크립트는 상속을 위해 클래스 개념 대신에 프로토타입을 사용한다.

자바스크립트의 용도
1.이벤트에 반응하는 동작 구현
2.Ajax를 통하여 전체 페이지를 다시 로드하지 않고서도 서버로부터 새로운 페이지 컨텐츠를 받거나 데이터를 제출할 때 사용한다
3.HTML요소의 크기나 색상을 동적으로 변경 할 수 있다.
4.게임이나 애니메이션 상호 대화적인 콘텐츠를 구성할 수 있다.
5.사용자가 입력한 값을 검증하는 작업도 자바스크립트를 이용한다.
(1,3,5는 이전 버전부터 자주 사용 , 2,4는 웹2.0부터 자주 사용)

자바스크립트의 위치
1.내부 자바스크립트
:<script></script>태그 사이에 위치
2.외부 자바 스크립트
:<script src = “__.js”></script>
3.인라인 자바스크립트
:<button type = “button” o’clock = “alert(‘반갑습니다’)”>버튼을 누르세요</button>

문장
1.각 문장의 끝에는 세미콜론(;)을 붙인다
2.자바스크립트 에서는 줄이 바뀌면 문장 하나가 끝난 것으로 판단한다
3.가급적이면 세미콜론을 붙이는 것이 좋다

블록
-여러개의 문장을 묶어서 함께 실행하기 위한 것

문장의 집합과 대 소문자 구별
-자바스크립트는 유니코드를 지원한다
-자바스크립트는 대 소문자를 구분 한다
-HTML은 대소문자를 구분하지 않는다
-자바스크립트는 공백문자를 모두 무시한다

주석문
-단일 문장주석은 ‘//‘ 을 사용한다
-다중 문장 주석은 ‘/*	*/’을 사용한다.

변수
-변수는 var 키워드를 사용해 선언한다
-쓰기 = 대입할당
-읽기 변수명

변수의 규칙
-변수 이름은 문자로 시작해야 한다(숫자로 시작해서는 안된다.)
-변수 이름은 $ 나 _로 시작할 수 있다.
-변수 이름은 대소문자를 구별한다.(count와 Count는 서로 다른 변수)

자바스크립트와 다른 언어의 차이점
1.자료형을 지정하지 않는다
2.문자열을 나타낼때 큰 따옴표 (“ ”)와 작은 따옴표(‘ ‘)을 모두 사용 할 수 있다.
3.문자열을 저장하였던 변수에 다시 정수를 저장할 수도 있다.
ex)var x;
	x = ‘Hong’;
	x = 10;
*변수는 보통 코드의 첫 부분에 선언하는 것이 좋다
*변수는 낙타체를 사용한다. 낙타체란 식별자가 한 단어 이상일때 첫번째 단어는 소문자로 나머지 단어는 대문자로 시작하는 표기법이다
ex)		var		numHouse;
		var		alarmStatus;
		var		userName;
		getElementById();

한줄에 어려개의 변수 선언
-한줄에 여러개의 변수를 선언할 수 있다.

=================================

5월 3일 자바스크립트


조건문
if
else-if
swith - switch문에서는 조건이 무조건 정수값이여야만 한다.
*조건문에서는 들여쓰기에 주의하자
*else문은 선행하는 가장 가까운 else문과 연관 되어진다.

document.getElementById(“엘리먼트ID”).value
-해당ID를 가진 엘리먼트에서 값을 가져 오거나 내보낼 때 사용

반복문
while - 참일 경우에만 반복 시키고 싶을 때
for - 횟수만큼 반복 시키기 위하여
for in - 객체안의 속성에 대하여 어떠한 처리를 반복
for(var x in 객체) — var x는 배열의 index를 저장하는 변수
{
	문장;
}
var myCar = {make:”BMW”,model: “X5”,year:2013};
 (연관 배열이며 JSON이라고 한다.)
 *연관배열:index의 문자열(key)
*for of라는 것도 있다.

break문장
-하나의 블록 에서 빠져나온다

continue문장
-아래의 문장을 실행하지 않고 증감식을 실행 후 조건식을 검사한다.

배열
-많은 값을 저장할 수 있는 공간이 필요할 때 배열을 사용한다
-서로 관련된 데이터를 차례로 접근하여서 처리할 수 있다.

배열을 생성하는 두가지 방법
1.리터럴로 배열 생성
-var fruit = [“apple”,”banana”,”peach”];
-var arr[];

2.Array 객체로 배열생성
-var fruit = new Array(“apple”,”banana”,””orange”);
-var arr = new Array();


=================================

5월 5일 자바스크립트

함수사용

인수와 매개변수
<button onclick = "greeting('홍길동','부장')">
							(인수(인자) - 실인수)

function greeting(name,position)
					(매개변수 - 가인수)
-인수와 매개변수는 선언된 순서대로 매칭된다.

무명함수
-변수에 저장하였다가 나중에 호출 할 수 있는 함수(한번만 사용할 경우 유용)


함수의 반환감
-return 문장을 이용하여 외부로 값을 반환

*document.getElementById("para1").innerHTML = sub();
*innerHTML = Element의 내부 컨텐츠(부모/자식 포함)를(을) 다루는 속성

지역변수,전역변수
-c,java와 같다
-선언 되지 않은 변수에 값을 대입하면 전역변수가 된다.

자바스크립트의 입출력
1.alert(); - 경고창 출력 함수
2.confirm(); - 사용자에게 어떤 사항을 알리고 확인과 취소를 요구(확인 - true , 취소 -  false)
3.prompt(); - 사용자에게 어떤 사항을 알려주고 사용자가 답변을 입력할 수 있는 윈도우를 띄움 
4.document.write(); - 화면에 동적으로 출력하는 객체

객체
-객체는 사물의 속성과 동작을 묶어서 표현하는 기법
 
객체의 종류
-내장객체: 생성자가 미리 작성 되어 있다
-사용자 정의 객체: 사용자가 생성자를 정의한다.

객체 생성법
1.객체를 객체상수로부터 직접 생성한다.
2.생성자 함수를 이용하여 객체를 정의하고 new를 통하여 객체의 인스턴스를 생성한다.

객체의 생성자
-생성자도 함수로 나타낸다, 또한 생성자 이름은 항상 대문자이다
-this 키워드로 일반 변수와 객체속성을 구별한다.
-장점:개발자가 원하는 갯수만큼 객체를 쉽게 만들 수 있다.

프로토타입
-모든 객체들은 프로토타입이라는 숨겨진 객체를 가지고 있다
-프로토타입을 이용하여 공유되는 메소드를 작성할 수 있다.

프로토타입 체인
1.객체안에 속성이나 메서드가 정의 되어있는지를 체크한다
2.객체 안에 정의되어 있지 않으면 prototype이 속성이나 메서드를 가지고 있는지 체크한다
3.원하는 속성/메서드를 찾을 때 까지 프로토타입 체인을 따라서 올라간다

Object 객체
-모든 자바스크립트객체의 부모가 되는 객체
-Object 객체는 하위객체에서 재정의하여 사용이 가능하다


=================================

5월 9일 자바스크립트

Object
-실세게에 존재하는 모든것
	-사물/비사물
	-핸드폰,시계 ,책등/사람과의 대화,금전거래 등
	-구성:Property(속성),Method(기능)
		-객체가 보유하고있는 데이터 & 객체가 책임지는 기능

-객체지향 프로그래밍(OOP:Object Oriented Programming Language)
	-Object 들을 조합하여 프로그램을 개발하는 기법
	-Class Based OOP
		-자바,C++,C#등
	-Prototype Based OOP
		-JavaScript

-생성
1.리터럴
	var myObject = {};
	*특징: 1회성
2.생성자 함수,new연산자
	function Car(){
		//내용
	}
	var myCar = new Car();


은닉(Encapsulation)
-잘못 사용 될 수 있는 객체의 특정 부분을 사용자가 직접 사용할 수 없게 막는 기술
-getter:값을 가져오는 메소드
-setter:값을 설정하는 메소드

상속( Inheritance)
-방법1
-.base를 사용하는 방법
-Square.prototype = Rectangle.prototype;
-위험함,자식에 의해 부모 객체의 침해 우려

-방법2.
-square.prototype = new Rectangle();

오버로딩
-오버로딩 기능은 없다,대신 매개변수에 따라 함수가 다른 동작을 하도록 할 수 있음
	function view(){
		var a = arguments // arguments객체는 모든 함수객체는 다 가지고 있는 객체
		switch(a.length){
			case 1: //매개변수가 하나일 때
				var val = a[0];
				alert(val);
				break;

			case 2:
				var val = a[0];
				var val2 = a[1];
				alert(val + val2);
				break;
		}
	}

오버라이딩
var Season = function(){}//계절객체 생성

Season.prototype = {
	temperature  : 15,
	humidty	    :  50,
	description : function() {return “년간 평균기온 15도 평균습도 50%”} 
};//Season 객처의 정의

var Spring = function(){};//봄 객체 (자식 객체)
Spring.prototype = new Season();//봄 객체의 prototype에 계절객체의 prototype를 생성
Spring.prototype.description = function(){
	//계절(부모) 객체의 메소드 오버라이드
	return “봄 평균기온 10도 평균습도 40%”
}
var spring = new Spring(); //객체 생성
alert(spring.description());


in/with
var product = {
	name:’7D 건조 망고’,
	kind: ‘당절임’,
	ingredient:’망고,설탕,메타중아황산나트륨,치자황색소’,
	origin:’필리핀’,
	getName: funcgion(){
		return this.name;
	}
};

alert(‘name’ in product );			//ture
alert(‘shop’ in product);			//false
alert(‘getName’ in product);		//true

with(product){
	alert(name);		
	alert(kind);
	alert(ingredient);
	alert(origin);
	alert(getName());
}

=================================

5월 10일 자바스크립트

Closures
-inner function(nested function)가 outer function의 영역/환경(scope,context)에 접근 할 수 있는것
	-내부함수는 외부함수의 지역변수에 접근 가능(지역변수가 환경을 의미)
	-외부함수의 실행이 끝나서 외부함수가 소멸 된 이후에도 내부함수가 외부함수의 지역변수에 접근이 가능함
	-information hiding,encapsulation 가능

=================================

5월 16일 자바스크립트

Date객체
-date객체는 날짜와 시간 작업을 하는데 사용되는 가장 기본적인 객체
-new Date()//현재 날짜와 시간
-new Date(millisecond)//1970/01/01이후의 밀리초
-new Date(dateString)//다양한 문자열
-new Date(year,month,date[,hour[,minutes[,second[,ms]]]])

Date()의 메서드
-getDate() (1 ~ 31)//날짜
-getDay()(0 ~ 6) //요일
-getMonth(0~11) //월
-getTine()	//시간

*	getXXX 타입 = 접근사
  	setXXX 타입 = 설정자

*	getElementById(“ ”).value 로 값을 가져올 경우 문자열로 가져오게 된다.

*	Math	.	floor/ceil/round
	-floor:		내림
	-ceil: 		올림
	-round	;	반올림


Number객체
-Number객체는 수치형 값을 감싸서 객체로 만들어 주는 랩퍼(wrapper) 객체

메소드
-toFixed([digits]) : 소숫점 첫번째 자리 이후 반올림
-toPrecision([precision]) : 유효 숫자 수를 지정한다
-toString([radix]) : 문자열로 표시
*	단순한 수치값에도 메서드를 붙이면 자바스크립트가 자동적으로 숫자에 wrapper객체를 감싸서 객체로 만든다

String 객체
-속성
	-length
	-prototype
	-constructor
-메소드
	-charAt()
	-concat() - 문자열을 합침
	-indexOf() - indexOf()는 0부터 시작
	-lastIndexOf()
	-match() - 정규식(regular expression) 사용가능,콘텐츠 탐색에 사용가능
	-replace() - 앞의 문자열을 뒤의 문자열로 대체
	-search()
	-slice()
	-split() - 인수를 분리자로 하여서 주어진 문자열을 분리한 후에 각 항목을 가지고 있는 배열을 반환한다.


=================================

5월 18일 자바스크립트

Array 객체
-배열을 나타내는 객체
-var myArray = []; 으로 선언해도 사용이 가능하다
-특징
	-자바스크립트는 자동으로 늘어나나 자바는 자동으로 늘어나지 않는다
	-자바는 여러가지 자료형을 혼합해서 사용이 가능하다.
	-배열의 크기보다 큰 인덱스 값으로 배열 요서에 접근시 undefined가 반환



=================================

5월 24일 자바스크립트

DOM(Document Object Model)-문서를 객체로 나타낸 것
-계층적 구조(트리형 구조)를 가지고 있다
-부모,자식 관계를 가지고 있고 트리에 있는 하나의 잎을 노드(node)라고 한다
*자식의 부모는 하나밖에 있지 않다
-노드 문서는 문서안에 들어있는 요소(element)나 텍스트(text)를 나타낸다
-트리형 구조에서 분홍색으로 나타내는 것은 contents(내용)이다
-보통 Element 노드만 contents를 표시하고  attribute 노드는 단순한 값 이기 때문에 contents를 입력하지 않아도 된다

DOM과 BOM
-HTML 문서를 객체로 표현한 것을 DOM
-웹 브라우저를 객체로 표현한 것을 BOM(Browser Object Model)

노드의 종류
1.DOCUMENT_NODE
2.ELEMENT_NODE
3.ATTRIBUTTE_NODE
4.TEXT_NODE

HTML 요소 찾기
1. id로 찾기-document.getElementById(“ ”);
2. 태그 이름으로 HTML요소 찾기 - getElementsByTagName()
	*하나만 있더라도 배열태그가 된다.

DOM 트리의 순회
1. chidNodes:한 요소의 모든 자식 요소에 접근할 수 있다. 배열이 반환된다
2. firstChild:’childNodes’배열의 첫 번째 자식 노드가 반환된다 ‘childNodes[0]과 같다’
3. lastChild: ‘childNodes’배열의 마지막 자식 노드가 반환된다 ‘childNodes[childNodes.length-1]’과 같다
4. parentNode:현재 노드의 부모 노드를 반환한다
5. nextSibling: 현재 노드의 형제 노드를 반환한다
6. previousSibling:현재 노드의 이전 형제 노드를 반환한다.

=================================

5월 24일 자바스크립트

DOM(Document Object Model)-문서를 객체로 나타낸 것
-계층적 구조(트리형 구조)를 가지고 있다
-부모,자식 관계를 가지고 있고 트리에 있는 하나의 잎을 노드(node)라고 한다
*자식의 부모는 하나밖에 있지 않다
-노드 문서는 문서안에 들어있는 요소(element)나 텍스트(text)를 나타낸다
-트리형 구조에서 분홍색으로 나타내는 것은 contents(내용)이다
-보통 Element 노드만 contents를 표시하고  attribute 노드는 단순한 값 이기 때문에 contents를 입력하지 않아도 된다

DOM과 BOM
-HTML 문서를 객체로 표현한 것을 DOM
-웹 브라우저를 객체로 표현한 것을 BOM(Browser Object Model)

노드의 종류
1.DOCUMENT_NODE
2.ELEMENT_NODE
3.ATTRIBUTTE_NODE
4.TEXT_NODE

HTML 요소 찾기
1. id로 찾기-document.getElementById(“ ”);
2. 태그 이름으로 HTML요소 찾기 - getElementsByTagName()
	*하나만 있더라도 배열태그가 된다.

DOM 트리의 순회
1. chidNodes:한 요소의 모든 자식 요소에 접근할 수 있다. 배열이 반환된다
2. firstChild:’childNodes’배열의 첫 번째 자식 노드가 반환된다 ‘childNodes[0]과 같다’
3. lastChild: ‘childNodes’배열의 마지막 자식 노드가 반환된다 ‘childNodes[childNodes.length-1]’과 같다
4. parentNode:현재 노드의 부모 노드를 반환한다
5. nextSibling: 현재 노드의 형제 노드를 반환한다
6. previousSibling:현재 노드의 이전 형제 노드를 반환한다.

=================================

5월 24일 자바스크립트

DOM(Document Object Model)-문서를 객체로 나타낸 것
-계층적 구조(트리형 구조)를 가지고 있다
-부모,자식 관계를 가지고 있고 트리에 있는 하나의 잎을 노드(node)라고 한다
*자식의 부모는 하나밖에 있지 않다
-노드 문서는 문서안에 들어있는 요소(element)나 텍스트(text)를 나타낸다
-트리형 구조에서 분홍색으로 나타내는 것은 contents(내용)이다
-보통 Element 노드만 contents를 표시하고  attribute 노드는 단순한 값 이기 때문에 contents를 입력하지 않아도 된다

DOM과 BOM
-HTML 문서를 객체로 표현한 것을 DOM
-웹 브라우저를 객체로 표현한 것을 BOM(Browser Object Model)

노드의 종류
1.DOCUMENT_NODE
2.ELEMENT_NODE
3.ATTRIBUTTE_NODE
4.TEXT_NODE

HTML 요소 찾기
1. id로 찾기-document.getElementById(“ ”);
2. 태그 이름으로 HTML요소 찾기 - getElementsByTagName()
	*하나만 있더라도 배열태그가 된다.

DOM 트리의 순회
1. chidNodes:한 요소의 모든 자식 요소에 접근할 수 있다. 배열이 반환된다
2. firstChild:’childNodes’배열의 첫 번째 자식 노드가 반환된다 ‘childNodes[0]과 같다’
3. lastChild: ‘childNodes’배열의 마지막 자식 노드가 반환된다 ‘childNodes[childNodes.length-1]’과 같다
4. parentNode:현재 노드의 부모 노드를 반환한다
5. nextSibling: 현재 노드의 형제 노드를 반환한다
6. previousSibling:현재 노드의 이전 형제 노드를 반환한다.


=================================
5월 31일 자바스크립트

HTML 요소찾기
-아이디로 찾기(.getElementById(‘아이디명’);)
*html 소스 내에서 특정 태그에 id속성값을 ‘아이디명’으로 설정한 태그의 Element 객체를 반환해 받는다
*body의 이름이 ttt라고 가정하면 body 내부의 아이디를 찾을 경우 ttt.getElementById(…);으로 나타낼 수 있다.

-태그이름으로 찾기(getElementsByTegName(‘태그명’);)
*html 소스 내에서 ‘태그명’으로 가진 엘리먼트 객체들을 반환한다.
*배열 처리 한다고 생각해야 함

-클래스이름으로 찾기(.getElementsByClass(‘클래스명’);)
*html소스내에 특정 태그에 class 속성값을 ‘클래스명’으로 설정한 태그의 Element 객체들을 반환해 받는다.
*배열처리가 된다.

-선택한 Element의 내용을 참조하거나 변경 하려면 innerHTML 이나 innerText 라는 것을 상용한다
*p.379 참조

-innerHTML 과 innerText의 차이
	-innerHTML은 contents에만 적용이 되고
	-innerText의 경우 text에만 적용이 된다

-DOM상의 엘리먼트 객체들은 그 해당 태그별로 공통적인 속성과 메소드가 있고 개별로 더 필요한 속성과 메소드들도 가지고 있다
 엘리먼트간의 상속관계

-속성중에 중요한 것들:value,innerHTML,innerText,src,style
*p.379

DOM 트리의 순회
1. chidNodes:한 요소의 모든 자식 요소에 접근할 수 있다. 배열이 반환된다
2. firstChild:’childNodes’배열의 첫 번째 자식 노드가 반환된다 ‘childNodes[0]과 같다’
3. lastChild: ‘childNodes’배열의 마지막 자식 노드가 반환된다 ‘childNodes[childNodes.length-1]’과 같다
4. parentNode:현재 노드의 부모 노드를 반환한다
5. nextSibling: 현재 노드의 형제 노드를 반환한다
6. previousSibling:현재 노드의 이전 형제 노드를 반환한다.

트래블링 세일즈맨 프러블럼
-순회

새로운 HTML 요소 생성
동적으로 웹페이지에 새로운 요소 추가하기
1. 원하는 노드를 생성한다
2. 문서내에서 추가할 위치 찾기
3. 새로운 노드를 기존의 노드에 연결

*노드 생성:document.createTextNode(“동적으로 추가된 노드”);
*노드 탐색:document.getElementById(“target”);
*노드 추가:parent.appendChild(node);
*appendChild의 효과: lastChild로 추가된다.
*첫번째 자식 노드를 추가하고 싶으면: insertBefore(node,document.getElementById(‘target’).firstChild);

기존의 HTML요소 삭제
-parant.removeChild(child);


BOM(Browser Object Model)
-frames[]:자주 사용하지 않는다
-navigator
-lacation
-history
-screen
-document

window
-window:메인 브라우저 윈도우
-window.navigator:브라우저에 대한 정보(버전 정보와 같은 정보들)
-window.screen: 사용자 화면
-window.history: 사용자가 방문한 url 저장
-window.location: 현재 url
-window.frames: 브라우저 윈도우를 차지하고 있는 프레임들
-window.document: 메인 브라우저에 표시된 HTML 문서

window.open
-window.open(URL		,		name		,		specs		,		replace)
							타겟을 지정하는 윈도우 이름
													여러가지 속성		히스토리 리스트에서 새로운 엔트리인지를 물음
-window.close(변수)


setTimeout(	code	,	millisec	)
				변수		경과시간	
*기본적으로 1번만 실행

setInterval(	code	,	milisec		)
				변수		경과시간			
*중지 시키기 전까지 반복 실행
*중지 시키기위한 코드:clearInterval( code );


History 함수
1. foward : 앞으로 이동
2. back: 뒤로 이동
3. go: +1 : forward / -1 : back

=================================
이벤트 처리

이벤트
-웹 페이지 상에서 일어나는 모든 것

기본 이벤트
-onclick :클릭시 바뀌는 이벤트 함수 속성
-onchange : 바꾸어서 표시하는 이벤트 함수 속성
-onkeyup : 키보드를 치면 자동으로 변환
-onmouseout : 마우스가 범위를 벗어남
-onmousedown : 마우스를 누른 상태
-onmouseup : 마우스를 땐 상태
-onmouseover : 마우스를 올렸을 때

