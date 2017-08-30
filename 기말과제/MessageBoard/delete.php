<?php
  require_once "../mvc/model.php";
  $model = new Model();
  $num = isset($_GET['num'])?$_GET['num']:"";

  $model->Message_delete($num);

?>
