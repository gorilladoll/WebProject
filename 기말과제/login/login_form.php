<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  <script src = "https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="../css/main.js" charset="utf-8"></script>
  <script src="../css/login.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="wrap">
      <hr>
      <h1 name = "login_main_name">로그인</h1>
      <hr>
      <h2 name = "login_comment">회원님의 아이디와 비밀번호를 입력해 주세요</h2>
      <center>
        <form class="login_form" action="login_confirm.php" method="post">
          <h4>아이디</h4><input type="text" name="login_id" maxlength="12" placeholder="inputID"><br />
          <h4>패스워드</h4><input type="password" name="login_pw" maxlength="12" placeholder="inputPW"><br />
          <button type="submit"><img src="../img/login.gif" name = "login_img" /></button>
        </form>
      </center>
    </div>
  </body>
</html>
