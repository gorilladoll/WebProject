<?php
  require_once "../mvc/model.php";
  $model = new Model();
  $subject = isset($_POST['input_subject'])?$_POST['input_subject']:"";
  $content = isset($_POST['input_content'])?$_POST['input_content']:"";
  $regist_day = date("Y-m-d/H:i:s");

  $upload_dir = "./uploadfiles/";
  $upimg_name = iconv("UTF-8","EUC-KR",$_FILES['img_upload']['name']);
  //iconv는 폴더에 한글이 들어갔을 때 그것을 불러올 시 파일이 한글이라 연결되지 않는것을 방지 해 주기 위해 euckr로 인코딩을 해주는 것
  //파일을 꺼낼때도 마찬가지로 euckr 에서 utf8로 인코딩 해 주어야 한다
  $upimg_tmp_name = $_FILES['img_upload']['tmp_name'];
  $upimg_type = $_FILES['img_upload']['type'];
  $upimg_size = $_FILES['img_upload']['size'];
  $upimg_error = $_FILES['img_upload']['error'];

  $upfile_name = iconv("UTF-8","EUC-KR",$_FILES['file_upload']['name']);
  //iconv는 폴더에 한글이 들어갔을 때 그것을 불러올 시 파일이 한글이라 연결되지 않는것을 방지 해 주기 위해 euckr로 인코딩을 해주는 것
  //파일을 꺼낼때도 마찬가지로 euckr 에서 utf8로 인코딩 해 주어야 한다
  $upfile_tmp_name = $_FILES['file_upload']['tmp_name'];
  $upfile_type = $_FILES['file_upload']['type'];
  $upfile_size = $_FILES['file_upload']['size'];
  $upfile_error = $_FILES['file_upload']['error'];

//////////////////////////////////////////////////////////////////////////////////
              /*        파일 업로드 구문       */
  if(!$upfile_error){
    $new_file_name = date("Y_m_d_H_i_s");
    //파일 명을 다르게 하기 위해 년,월,일,시,분,초를 저장
    $copied_file_name = $new_file_name."_".$upfile_name;
    //파일을 새로운 이름으로 만들기 위해 년,월,일,시,분,초.파일 형태 로 다시 저장
    $uploaded_file = $upload_dir.$copied_file_name;
    //파일 저장 공간과 파일명을 합치기 위한 코드

    if($upfile_size > 5000000){
       echo ("<script>
               alert('업로드 파일 크기가 지정된 용량(500MB)을 초과합니다 파일 크기를 확인 해주세요');
               history.go(-1);
             </script>");
      exit;
    }

    if(($upfile_type == "image/gif") && ($upfile_type == "image/png")
        && ($upfile_type == "image/jpg") && ($upfile_type == "image/jpeg"))
    {
      echo ("<script>
              alert('업로드 가능한 파일이 아닙니다');
              history.go(-1);
            </script>");
      exit;
    }

    if(!move_uploaded_file($upfile_tmp_name,$uploaded_file)){
      //この関数は、filename で指定されたファイルが有効なアップロードファイルであるかどうかを確認します。
      //이 함수는 filename이 지정된 파일이 유효한 업로드 파일인지 아닌지를 확인합니다
      //そのファイルが有効な場合、destination で指定したファイル名に移動されます。
      //그 업로드가 유효한 파일일 경우 데스티네이션에 지정한 파일명을 옮깁니다.

      echo ("<script>
              alert('파일을 지정한 디렉토리에 복사하는데 실패 하였습니다');
              history.go(-1);
             </script>");
      exit;
    }
  }
                    /*        파일 업로드 구문 끝      */
//////////////////////////////////////////////////////////////////////////////////
                    /*        이미지 업로드 구문       */
  if(!$upimg_error){
    $new_img_name = date("Y_m_d_H_i_s");
    //파일 명을 다르게 하기 위해 년,월,일,시,분,초를 저장
    $copied_img_name = $new_img_name."_".$upimg_name;
    //파일을 새로운 이름으로 만들기 위해 년,월,일,시,분,초.파일 형태 로 다시 저장
    $uploaded_img = $upload_dir.$copied_img_name;
    //파일 저장 공간과 파일명을 합치기 위한 코드

    if($upimg_size > 5000000){
       echo ("<script>
               alert('업로드 파일 크기가 지정된 용량(500MB)을 초과합니다 파일 크기를 확인 해주세요');
               history.go(-1);
             </script>");
      exit;
    }

    if(($upimg_type != "image/gif") && ($upimg_type != "image/png")
        && ($upimg_type != "image/jpg") && ($upimg_type != "image/jpeg"))
    {
      echo ("<script>
              alert('이미지 파일이 아닙니다');
              history.go(-1);
            </script>");
      exit;
    }

    if(!move_uploaded_file($upimg_tmp_name,$uploaded_img)){
      //この関数は、filename で指定されたファイルが有効なアップロードファイルであるかどうかを確認します。
      //이 함수는 filename이 지정된 파일이 유효한 업로드 파일인지 아닌지를 확인합니다
      //そのファイルが有効な場合、destination で指定したファイル名に移動されます。
      //그 업로드가 유효한 파일일 경우 데스티네이션에 지정한 파일명을 옮깁니다.

      echo ("<script>
              alert('파일을 지정한 디렉토리에 복사하는데 실패 하였습니다');
              history.go(-1);
             </script>");
      exit;
    }
  }

                  /*        이미지 업로드 구문 끝      */
//////////////////////////////////////////////////////////////////////////////////

  if($subject != ""){
    $model->message_input($subject,$content,$uploaded_img,$uploaded_file,$upfile_name,$regist_day);
  } else {
    echo ("<script>
            alert('제목을 입력하세요');
            history.go(-1);
          </script>");
  }
?>
