<?php
  require_once "../mvc/view.php";
  $view = new View();
  $maker = $_GET['maker'];

  $result = $view->Product_Output_Name($maker);


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
    <script src="../css/product_list.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="wrap">
      <div class="header"><?php require_once "../MessageBoard/header.php" ?></div>
      <div class="nav"><?php require_once "../MessageBoard/nav.php" ?></div>
      <div class="apple_product">
        <div class="wrap">
          <center>
            <table>
              <tbody>
                <tr>
                  <td class = "product_list">
                    <div class="product_pic">
                      <?php
                        $kind = "link";
                        $link = $view->Product_Output($result[0],$kind);
                      ?>
                      <a href="<?php echo $link.'?serial='.$result[0] ?>">
                        <?php
                          $kind = "img";
                          $img = $view->Product_Output($result[0],$kind);
                        ?>
                        <img src="<?php echo $img ?>" alt="">
                      </a>
                    </div>
                    <div class="product_memo">
                      <?php
                        $kind = "nick";
                        $nick = $view->Product_Output($result[0],$kind);
                        echo $nick;
                      ?>
                    </div>
                  </td>

                  <td class = "empty_space"></td>

                  <td class = "product_list">
                    <div class="product_pic">
                      <?php
                        $kind = "link";
                        $link = $view->Product_Output($result[1],$kind);
                      ?>
                      <a href="<?php echo $link.'?serial='.$result[1] ?>">
                        <?php
                          $kind = "img";
                          $img = $view->Product_Output($result[1],$kind);
                        ?>
                        <img src="<?php echo $img ?>" alt="">
                      </a>
                    </div>
                    <div class="product_memo">
                      <?php
                        $kind = "nick";
                        $nick = $view->Product_Output($result[1],$kind);
                        echo $nick;
                      ?>
                    </div>
                  </td>

                  <td class = "empty_space"></td>

                  <td class = "product_list">
                    <div class="product_pic">
                      <?php
                        $kind = "link";
                        $link = $view->Product_Output($result[2],$kind);
                      ?>
                      <a href="<?php echo $link.'?serial='.$result[2] ?>">
                        <?php
                          $kind = "img";
                          $img = $view->Product_Output($result[2],$kind);
                        ?>
                        <img src="<?php echo $img ?>" alt="">
                      </a>
                    </div>
                    <div class="product_memo">
                      <?php
                        $kind = "nick";
                        $nick = $view->Product_Output($result[2],$kind);
                        echo $nick;
                      ?>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </center>
        </div>
      </div>
    </div>
  </body>
</html>
