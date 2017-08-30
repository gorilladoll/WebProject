<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src = "https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../css/main.js" charset="utf-8"></script>
    <script src="../css/signin.js" charset="utf-8"></script>
    <script src="../css/signin_submit.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="wrap">
      <center>
        <hr>
          <h1>회원가입</h1>
        <hr>
          <h2>정보를 입력 해 주세요</h2>
      </center>
      <form class="signin_form" action="signin_confirm.php" method="post">
        <h4>아이디</h4>
        <input type="text" name="signin_id"
        maxlength="12" placeholder="ID"><br />

        <h4>비밀번호</h4>
        <input type="password" name="signin_pw"
        maxlength="12" placeholder="Password"><br />

        <h4>비밀번호 확인</h4>
        <input type="password" name="signin_pwc"
        maxlength="12" placeholder="Password Confirm"><br />

        <h4>닉네임</h4>
        <input type="text" name="signin_nick"
        maxlength="12" placeholder="nickname"><br />

        <h4>이메일</h4>
        <input type="text" name="signin_email"
        placeholder="example@google.com"><br /><br />

        <div class = "submit">
          <img src="../img/signup.jpeg"/>
        </div>
      </form>
    </div>
  </body>
</html>
