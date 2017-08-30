function yesorno(){
  if(confirm('현재 회원가입 기능이 지원되지 않습니다 그래도 이동 하시겠습니까?') == true){
    document.form.submit();
  }
  else {
    return;
  }
}
function sendIt(){
//아이디 입력여부 검사
  if(document.getElementById('id').value=="")
  {
   alert("아이디를 입력하지 않았습니다.");
   alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
   window.close();
   return
  }
  else{
    alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
    window.close();
  }

  //아이디 유효성 검사 (영문소문자, 숫자만 허용)
  for (i=0;i<document.getElementById('id').value.length ;i++ )
  {
   ch=document.getElementById('id').value.charAt(i);
    if (!(ch>='0' && ch<='9') && !(ch>='a' && ch<='z'))
    {
    alert ("아이디는 소문자, 숫자만 입력가능합니다.");
    alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
    window.close();
    return
    }
    else{
      alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
      window.close();
    }
  }

  //아이디에 공백 사용하지 않기
  if (document.getElementById('id').value.indexOf(" ")>=0)
  {
   alert("아이디에 공백을 사용할 수 없습니다.");
   alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
   document.getElementById('id').focus();
   document.getElementById('id').select();
   window.close();
   return
  }
  else{
    alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
    window.close();
  }

  //아이디 길이 체크 (6~12자)
  if (document.getElementById('id').value.length<6 || document.getElementById('id').value.length>12)
  {
   alert ("아이디를 6~12자까지 입력해주세요.");
   alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
   window.close();
   return
  }
  else{
    alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
    window.close();
  }

  //비밀번호 입력여부 체크
  if(document.getElementById('password').value=="")
  {
   alert("비밀번호를 입력하지 않았습니다.");
   alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
   window.close();
   return
  }
  else{
    alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
    window.close();
  }

  //비밀번호 길이 체크(4~8자 까지 허용)
  if (document.getElementById('password').value.length<4 || document.f.pw1.value.length>8)
  {
   alert ("비밀번호를 4~8자까지 입력해주세요.");
   alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
   window.close();
   return
  }
  else{
    alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
    window.close();
  }


  //비밀번호와 비밀번호 확인 일치여부 체크
  if (document.getElementById('password').value!=document.getElementById('password2').value)
  {
   alert("비밀번호가 일치하지 않습니다");
   alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
   window.close();
   return
  }
  else{
    alert("현재 사이트는 가입이 불가능 합니다. 다음에 가입 해 주세요");
    window.close();
  }
}
