<?php
  require_once "../mvc/view.php";
  $view = new View();

  $num = $_GET['num'];

  $kind = "file";
  $file = $view->Message_Show($num,$kind);

  $kind = "real";
  $real_file = $view->Message_Show($num,$kind);
  //DB에 올라간 파일의 풀 주소
  $file_size = filesize($real_file);
  if(!$file){
    echo "<script>alert('파일이 없습니다.')</script>";
    echo "<script>history.go(-1);</script>";
  } else {


    header("Pragma: public");
    header("Expires: 0");
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"$real_file\"");
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: $file_size");

    ob_clean();
    flush();
    readfile($file);
  }

?>
