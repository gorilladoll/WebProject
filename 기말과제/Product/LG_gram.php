<?php
  require_once "../mvc/view.php";
  $view = new View();
  $serial = $_GET['serial'];
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
    <script src="../css/product_introduce.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="wrap">
      <div class="header"><?php require_once "../MessageBoard/header.php" ?></div>
      <div class="nav"><?php require_once "../MessageBoard/nav.php" ?></div>
      <center>
        <div class="Product_introduce">
          <table>
            <tr>
              <th colspan = '2'>
                <?php
                  $kind = "introduce";
                  $introduce = $view->Product_Output($serial,$kind);
                  echo $introduce;
                ?>
              </th>
            </tr>
            <tr>
              <td rowspan = '4'>
                <?php
                  $kind = "img";
                  $img = $view->Product_Output($serial,$kind);
                ?>
                <img src="<?php echo $img ?>" alt="">
              </td>
              <td></td>
            </tr>

            <tr>
              <td>
                <?php
                  echo "제품명 : ".$serial;
                ?>
              </td>
            </tr>

            <tr>
              <td>
                <?php
                  $kind = "price";
                  $price = $view->Product_Output($serial,$kind);
                  echo "가격 : ".number_format($price)." 원";
                  //number_format은 100단위마다 콤마를 붙여주는 메소드
                ?>
              </td>
            </tr>

            <tr>
              <td>
                <?php
                  $kind = "stock";
                  $stock = $view->Product_Output($serial,$kind);
                  if($stock > 0){
                    echo "수량 : ".number_format($stock)."개";
                  } else {
                    echo "수량 : 재고없음";
                  }
                ?>
              </td>
            </tr>

            <tr>
              <td colspan = "2"><button type="button" class = "for_buy" name="buy" value = "<?php echo $serial ?>">구매하기</button></td>
            </tr>
          </table>
        </div>
      </center>
    </div>
  </body>
</html>
