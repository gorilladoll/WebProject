<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FinalTest</title>
    <script src = "https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="./css/main.js" charset="utf-8"></script>
    <script src="./css/header.js" charset="utf-8"></script>
    <script src="./css/nav.js" charset="utf-8"></script>
    <script src="./css/section.js" charset="utf-8"></script>
    <script src="./css/footer.js" charset="utf-8"></script>

    <!-- 메인 이미지를 위한 박스슬라이드를 쓰기위해 가져온 구글 라이브러리 -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!--  bxslider를 사용하기 위해서 제이쿼리 라이브러리를 가져 옮 -->
    <script src="./jquery/jquery.bxslider.min.js"></script>
    <!-- bxslider의 css 라이브러리 -->
    <link href="./jquery/jquery.bxslider.css" rel="stylesheet" />
    <!--http://bxslider.com/ 참고-->
  </head>
  <body>
    <div class="wrap">
      <div class="header"><?php require_once "./index/header.php" ?></div>
      <div class="nav"><?php require_once "./index/nav.php" ?></div>
      <div class="section"><?php require_once "./index/section.php" ?></div>
      <div class="footer"><?php require_once "./index/footer.php" ?></div>
    </div>
  </body>
</html>
