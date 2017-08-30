<?php
  require_once "../mvc/view.php";
  $view = new View();

  if(!isset($_SESSION['id'])){
    echo ("<script>
            alert('로그인 이후에 다시 눌러 주세요');
            location.replace('../index.php');
           </script>");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src = "https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../css/main.js" charset="utf-8"></script>
    <script src="../css/header.js" charset="utf-8"></script>
    <script src="../css/nav.js" charset="utf-8"></script>
    <script src="../css/board_list.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="wrap">
      <div class="header"><?php require_once "../MessageBoard/header.php" ?></div>
      <div class="nav"><?php require_once "../MessageBoard/nav.php" ?></div>
      <div class="section">
        <center>
          <div class="board_title">
            <hr>
            <h1>게시판</h1>
            <hr>
          </div>

          <div class="board_subtitle">
            <h3>게시판 입니다. 쓰고싶은 글을 쓰시면 됩니다.</h3>
            <hr>
          </div>

          <div class="board_main">
            <table>
              <tr>
                <th name = "board_num">글번호</th>
                <th name = "board_writer">글쓴이</th>
                <th name = "board_subject">제목</th>
                <th name = "board_date">작성일</th>
              </tr>

              <?php $view->message_list_show(); ?>
            </table>
            <hr>
            <button type="button" name="button" class = "board_write">
              글쓰기
            </button>
          </div>
        </center>
      </div>
    </div>
  </body>
</html>
