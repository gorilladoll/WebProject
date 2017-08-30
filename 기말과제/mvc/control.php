<?php
  require_once "../db/classDB.php";
  class Control extends DBconnect{
    public function __construct(){
      parent::__construct();
    }
    /*      생성자     */
    public function check_login($id,$pw){
      try {
        $stmt = $this->pdo->prepare("SELECT * FROM DB_user where id = :id and pw = :pw",
                                    [PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL]);
        $stmt->bindParam(":id",$id,PDO::PARAM_STR);
        $stmt->bindParam(":pw",$pw,PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->rowCount();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result){
          $_SESSION['id'] = $id;
          $_SESSION['nick'] = $row['nick'];

          echo "<script>alert('로그인이 완료 되었습니다 새로고침을 눌러 주세요<')</script>";
          echo "<script>window.close();</script>";
        } else {
          echo "<script>location.replace('../index/login_form.php');</script>";
        }
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
    /*      로그인     */


    public function logout(){
      session_destroy();
      echo "<script>location.replace('../index.php');</script>";
    }
    /*      로그아웃     */

    public function check_id($id){
      try {
        $stmt = $this->pdo->prepare("SELECT * FROM DB_user where id=:id",
        [PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL]);
        $stmt->bindParam(":id",$id,PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->rowCount();

        if($result){
          echo "<script>alert('중복된 아이디가 존재합니다');</script>";
          echo "<script>location.replace('../index/signin_form.php')</script>";
        }
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
    /*      아이디 중복확인     */

    public function check_nick($nick){
      try {
        $stmt = $this->pdo->prepare("SELECT * FROM DB_user where nick=:nick",
        [PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL]);
        $stmt->bindParam(":nick",$nick,PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->rowCount();

        if($result){
          echo "<script>alert('중복된 닉네임이 존재합니다');</script>";
          echo "<script>location.replace('../index/signin_form.php')</script>";
        }
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
    /*      닉네임 중복확인     */

    public function __destruct(){
      parent::__destruct();
    }
    /*      소멸자     */
  }
?>
