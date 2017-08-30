$(document).ready(function(){
  $("body").css({
    "background-color" : "ivory"
  });

  $("h4").css({
    "display" : "inline-block",
    "width" : "150px",
    "height" : "20px",
    "position" : "relative",
    "left" : "35%",
    "font-size" : "25px",
    "text-shadow" : "5px 5px 5px #aaaaaa"
  });

  $("input").css({
    "position" : "relative",
    "left" : "38%",
    "font-size" : "25px",
    "text-align" : "left",
    "width" : "320px"
  });

  $(".submit").css({
    "position" : "relative",
    "left" : "47%"
  });

  $(".submit img").css({
    "width" : "150px",
    "height" : "50px"
  });

  $(".check_id").css({
    "display" : "inline-block",
    "background-color" : "#FFC8FF",
    "width" : "120px",
    "height" : "30px",
    "position" : "relative",
    "left" : "34%",
    "font-size" : "25px",
    "text-align" : "center"
  });

  $(".check_pw").css({
    "display" : "inline-block",
    "background-color" : "#FFC8FF",
    "width" : "120px",
    "height" : "30px",
    "position" : "relative",
    "left" : "34%",
    "font-size" : "25px",
    "text-align" : "center"
  });

  $(".check_nick").css({
    "display" : "inline-block",
    "background-color" : "#FFC8FF",
    "width" : "120px",
    "height" : "30px",
    "position" : "relative",
    "left" : "34%",
    "font-size" : "25px",
    "text-align" : "center"
  });



  $(".check_id").click(function(){
    var id_c = $("[name='signin_id']").val();
    if(!id_c){
      alert("잘못 입력하셨습니다");
    } else {
      window.open("../index/check_id.php?id="+id_c,"IDcheck","left=200px,top=200px,height=60px,scrollbar=no,resizable=yes");
    }
  });

  $(".check_nick").click(function(){
    var nick_c = $("[name='signin_nick']").val();
    if(!nick_c){
      alert("잘못 입력하셨습니다");
    } else {
      window.open("../index/check_nick.php?nick="+nick_c,"Nickcheck","left=200px,top=200px,height=60px,scrollbar=no,resizable=yes");
    }
  });

  $(".check_pw").click(function(){
    var pw = $("[name='signin_pw']").val();
    var pw_c = $("[name='signin_pwc']").val();

    if(!pw){
      alert("비밀번호가 공백입니다");
      return;
    }

    if(!pw_c){
      alert("비밀번호 확인이 공백입니다");
      return;
    }

    if(pw == pw_c){
      alert("비밀번호가 일치합니다");
    } else {
      alert("비밀번호가 일치하지 않습니다 다시 입력 해 주세요");
      $("[name=signin_pw]").focus();
    }
  });
});
