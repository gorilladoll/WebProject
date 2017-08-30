<?php
  require_once "../db/classDB.php";
  class Model extends DBconnect{
    public function __construct(){
      parent::__construct();
    }
    /*      생성자     */

      public function submit($id,$pw,$nick,$email){
        try {
          $stmt=$this->pdo->prepare("INSERT INTO DB_user(id,pw,nick,email)
                                      VALUES(:id,:pw,:nick,:email)",
          [PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL]);
          $stmt->bindParam(":id",$id,PDO::PARAM_STR);
          $stmt->bindParam(":pw",$pw,PDO::PARAM_STR);
          $stmt->bindParam(":nick",$nick,PDO::PARAM_STR);
          $stmt->bindParam(":email",$email,PDO::PARAM_STR);
          $result = $stmt->execute();
          if($result){
            echo ("<center>
            <hr>
            <h1>회원가입이 완료 되었습니다</h1>
            <button onclick='window.close();'>확인</button>
            <hr>
            </center>");
          }
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }
      /*      회원가입     */

      public function message_input($subject,$content,$img,$file,$real_name,$regist_day){
        try {
          $stmt=$this->pdo->prepare(" INSERT INTO DB_MessageBoard(id,nick,subject,content,img,file,real_name,regist_day)
                                      VALUES(:id,:nick,:subject,:content,:img,:file,:real_name,:regist_day)",
                                      [PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL]);
          $stmt->bindParam(":id",$_SESSION['id']);
          $stmt->bindParam(":nick",$_SESSION['nick']);
          $stmt->bindParam(":subject",$subject);
          $stmt->bindParam(":content",$content);
          $stmt->bindParam(":img",$img);
          $stmt->bindParam(":file",$file);
          $stmt->bindParam(":real_name",$real_name);
          $stmt->bindParam(":regist_day",$regist_day);
          $result = $stmt->execute();

          if($result){
            echo ("<script>
                    alert('입력 되었습니다');
                    location.replace('../MessageBoard/list.php');
                  </script>");
          } else {
            echo ("<script>
                    alert('입력에 실패했습니다.');
                    location.replace('../MessageBoard/list.php');
                  </script>");
          }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
      }
      /*      게시판 입력    */

      public function Message_delete($num){
        try {
          $stmt = $this->pdo->prepare("DELETE FROM DB_MessageBoard WHERE num = :num AND id = :id",
                                       [PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL]);
          $stmt->bindParam(":id",$_SESSION['id'],PDO::PARAM_STR);
          $stmt->bindParam(":num",$num,PDO::PARAM_INT);
          $stmt->execute();
          $result = $stmt->rowCount();

          if($result){
            echo ("<script>
                    alert('삭제가 완료 되었습니다');
                    location.replace('../MessageBoard/list.php');
                   </script>");
          } else {
            echo ("<script>
                    alert('작성자만 삭제가 가능합니다.');
                    history.go(-1);
                   </script>");
          }

        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }
      /*      게시글 삭제    */

      public function insert_Buylist($id,$img,$serial,$regist_day,$link){
        try {
          $stmt = $this->pdo->prepare("SELECT stock FROM DB_Product WHERE serial = :serial");
          $stmt->bindParam(":serial",$serial,PDO::PARAM_STR);
          $stmt->execute();
          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          echo $row['stock'];
          if($row['stock'] > 0){
            $stmt = $this->pdo->prepare("INSERT INTO DB_Buylist(id,img,serial,regist_day,link)
                                         VALUES(:id,:img,:serial,:regist_day,:link)");
            $stmt->bindParam(":id",$id,PDO::PARAM_STR);
            $stmt->bindParam(":img",$img,PDO::PARAM_STR);
            $stmt->bindParam(":serial",$serial,PDO::PARAM_STR);
            $stmt->bindParam(":regist_day",$regist_day,PDO::PARAM_STR);
            $stmt->bindParam(":link",$link,PDO::PARAM_STR);
            $stmt->execute();

            $stmt = $this->pdo->prepare("UPDATE DB_Product set stock = (stock-1) WHERE serial = :serial");
            $stmt->bindParam(":serial",$serial);
            $stmt->execute();

            echo "<script>location.replace('../Buy/Buylist_show.php');</script>";
          } else {
            echo ("<script>
                    alert('재고가 없어 구매가 불가능 합니다');
                    history.go(-1);
                  </script>");
          }


        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }
      /*      구매시 구매 내용을 저장하기 위한 메소드    */

      public function __destruct(){
        parent::__destruct();
      }
      /*      소멸자     */
  }
?>
