<?php
  require_once "../mvc/control.php";
  require_once "../mvc/model.php";

  $control = new Control();
  $model = new Model();

  $id = $_POST['signin_id'];
  $pw = $_POST['signin_pw'];
  $nick = $_POST['signin_nick'];
  $email =$_POST['signin_email'];

  $control->check_id($id);
  $control->check_nick($nick);
  $model->submit($id,$pw,$nick,$email);

?>
