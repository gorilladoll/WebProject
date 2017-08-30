<div id="homeicon">
  <a href="../index.php">
    <img src="../img/homeicon.png" alt="" />
  </a>
</div>

<div id="main_title">
  <h1>JG COMPUTER SHOP</h1>
</div>

<?php
if(!isset($_SESSION['nick'])){
  echo ('<div class="main_login">
          <div id="login2">로그인</div>|
          <div id="signin2">회원가입</div>
        </div>');
  } else {
    echo ("<div class='main_login'>
            <div id='login_success2'>{$_SESSION['nick']}님</div>|
            <div id='logout2'>로그아웃</div>
          </div>");
  }
?>
