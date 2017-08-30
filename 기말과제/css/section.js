$(document).ready(function(){
  $(".section").css({
    "margin" : "2%",
    "background-color" : "ivory"
  });

  $(".bxslider").bxSlider({
    "mode" : "horizontal",        //기본이 horizontal,option
    "speed" : "500",              //기본이 500  , 이미지 변환 속도
    "auto" : "true",              //자동 변환 여부
    "captions" : "false",         //이미지 title 속성 공개 여부
    "autocontrols" : "false",     //정지 , 시작 컨트롤 노출
    "slideWidth" : "1920px",      //박스 슬라이드의 크기 지정 4K까지 사용가능
  }).css("height","30%");         //메서드 체이닝 및 길이 조절
});
