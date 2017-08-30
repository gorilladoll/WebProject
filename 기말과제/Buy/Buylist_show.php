<?php
  require_once "../mvc/view.php";
  $view = new View();
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
    <script src="../css/buylist_show.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="wrap">
      <div class="header"><?php require_once "../MessageBoard/header.php" ?></div>
      <div class="nav"><?php require_once "../MessageBoard/nav.php" ?></div>
      <div class="buy_list_show">
        <center>
          <table border = '1'>
            <tr>
              <th>닉네임</th>
              <th>사진</th>
              <th>구매상품명</th>
              <th>구매일자</th>
              <th>링크</th>
            </tr>
            <?php
              $view->show_Buylist();
            ?>
          </table>
        </center>
      </div>
    </div>
  </body>
</html>
