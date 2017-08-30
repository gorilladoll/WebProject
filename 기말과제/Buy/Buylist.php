<?php
  require_once "../mvc/model.php";
  require_once "../mvc/view.php";
  $model = new Model();
  $view = new View();

  $id = $_SESSION['id'];
  $serial = $_GET['serial'];

  $regist_day = date("Y-m-d");

  $kind = "img";
  $img = $view->Product_Output($serial,$kind);

  $kind = "link";
  $link = $view->Product_Output($serial,$kind);

  $model->insert_Buylist($id,$img,$serial,$regist_day,$link);
?>
