<?php
  require_once "../mvc/control.php";
  $control = new Control();

  $id = isset($_POST['login_id'])?$_POST['login_id']:"none";
  $pw = isset($_POST['login_pw'])?$_POST['login_pw']:"none";

  $control->check_login($id,$pw);
?>
