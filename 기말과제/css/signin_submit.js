$(document).ready(function(){
  $(".submit").click(function(){
    var id = $("[name=signin_id]").val();
    var pw = $("[name=signin_pw]").val();
    var pw_c = $("[name=signin_pwc]").val();
    var nick = $("[name=signin_nick]").val();
    var email = $("[name=signin_email]").val();
    if(!id){
      alert("아이디가 공백입니다");
      $("[name=signin_id]").focus();
      return;
    }
    if(!pw){
      alert("비밀번호가 공백입니다");
      $("[name=signin_pw]").focus();
      return;
    }
    if(!pw_c){
      alert("비밀번호 확인이 공백입니다");
      $("[name=signin_pwc]").focus();
      return;
    }
    if(pw != pw_c){
      alert("비밀번호가 일치하지 않습니다");
      $("[name=signin_pw]").focus();
      return;
    }
    if(!nick){
      alert("닉네임이 공백입니다");
      $("[name=signin_nick]").focus();
      return;
    }
    if(!email){
      alert("이메일이 공백입니다");
      $("[name=signin_email]").focus();
      return;
    }

    $(".signin_form").submit();
  });
});
