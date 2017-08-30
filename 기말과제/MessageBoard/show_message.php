<?php
  require_once "../mvc/view.php";
  $view = new View();

  $num = isset($_GET['num'])?$_GET['num']:"";
  $activity = 0;
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
    <script src="../css/border_show.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="wrap">
      <div class="header"><?php require_once "../MessageBoard/header.php" ?></div>
      <div class="nav"><?php require_once "../MessageBoard/nav.php" ?></div>
      <center>
        <div class="show_message_content">
        <table class = "border_input_table">
          <tr>
            <td class = "for_input">작성자</td>
            <td class = "show_nick">
              <?php
                $activity = "nick";
                echo $nick = $view->Message_Show($num,$activity);
              ?>
            </td>
          </tr>

          <tr>
            <td colspan = "2"><hr></td>
          </tr>

          <tr>
            <td class = "for_input">제목</td>
            <td class = "show_subject">
              <?php
                $activity = "subject";
                echo $view->Message_Show($num,$activity);
              ?>
            </td>
          </tr>

          <tr>
            <td colspan = "2"><hr></td>
          </tr>

          <tr>
            <td class = "for_input">내용</td>
            <td class = "show_content">
              <?php
                $activity = "img";
                $img = $view->Message_Show($num,$activity);
                if($img){
                  echo "<img width = '500px' height = '300px' src = "."{$img}".">";
                }
              ?>
              <br />
              <?php
                $activity = "content";
                $content = $view->Message_Show($num,$activity);
                echo "<pre>".$content."</pre>";
              ?>
            </td>
          </tr>

          <tr>
            <td colspan = '2'><hr></td>
          </tr>

          <tr>
            <td class = "for_input">다운로드</td>
            <td>
              <?php
                $activity = "real";
                $real = $view->Message_Show($num,$activity);
                if($real){
                  echo $real;
                } else {
                  echo "파일없음";
                }
              ?>
              [<a href="download.php?num=<?php echo $num; ?>">다운로드</a>]
            </td>
          </tr>
        </table>
        <button type="button" name="button" class="move_list">
          목록보기
        </button>
        <button type="button" name="button" class="move_delete" value = "<?php echo $num; ?>">
          삭제
        </button>
      </div>
    </center>
  </body>
</html>
