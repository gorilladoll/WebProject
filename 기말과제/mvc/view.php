<?php
  require_once "../db/classDB.php";
  class View extends DBconnect{
    public function __construct(){
      parent::__construct();
    }
    /*      생성자     */
    public function message_list_show(){
      $stmt=$this->pdo->prepare("SELECT * FROM DB_MessageBoard");
      $stmt->execute();
      while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo ("<tr class = 'for_define'>
                <td>{$row['num']}</td>
                <td>{$row['nick']}</td>
                <td name = 'msg_show'><a href = 'show_message.php?num={$row['num']}'>{$row['subject']}</a></td>
                <td>{$row['regist_day']}</td>
              </tr>");
      }
    }
    /*      메세지 리스트 출력    */

    public function Message_Show($num,$activity){
      try {
        $stmt = $this->pdo->prepare("SELECT * FROM DB_MessageBoard WHERE num = :num",
                                    [PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL]);
        $stmt->bindParam(":num",$num);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        switch($activity){
          case "nick" : return $row['nick'];
          break;

          case "subject" : return $row['subject'];
          break;

          case "content" : return $row['content'];
          break;

          case "img" : return $row['img'];
          break;

          case "file" : return $row['file'];
          break;

          case "real" : return $row['real_name'];
          break;
        }
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
    /*     게시판 내용 출력    */

    public function Product_Output_Name($maker){
      try {
        $stmt = $this->pdo->prepare("SELECT serial FROM DB_Product where maker = :maker");
        $stmt->bindParam(":maker",$maker,PDO::PARAM_STR);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          $result[] = $row['serial'];
        }
        return $result;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }

    }

    public function Product_Output($serial,$kind){
      try {
        $stmt = $this->pdo->prepare("SELECT * FROM DB_Product WHERE serial = :serial",
                                     [PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL]);
        $stmt->bindParam(":serial",$serial,PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->rowCount();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
          switch($kind){
            case "serial" : return $row['serial'];
            break;

            case "nick" : return $row['nick'];
            break;

            case "price" : return $row['price'];
            break;

            case "stock" :
            if($row['stock'] <= 0){
              return "재고없음";
              break;
            } else {
              return $row['stock'];
              break;
            }
            case "link" : return $row['link'];
            break;

            case "img" : return $row['img'];
            break;

            case "introduce" : return $row['introduce'];
            break;
          }
        }
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
    /*      상품 리스트 속성 호출    */

    public function show_Buylist(){
      try {
          $stmt = $this->pdo->prepare("SELECT * FROM DB_Buylist WHERE id = :id");
          $stmt->bindParam(":id",$_SESSION['id']);
          $stmt->execute();

          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td class = 'show_product_list'>{$row['id']}</td>";
            echo "<td class = 'show_product_list'><img width = '200px' height = '200px' src="."{$row['img']}"."></td>";
            echo "<td class = 'show_product_list'>{$row['serial']}</td>";
            echo "<td class = 'show_product_list'>{$row['regist_day']}</td>";
            echo "<td class = 'show_product_list'>"."<a href = "."{$row['link']}"."?serial={$row['serial']}>이동</td>";
            echo "</tr>";
        }
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
    /*      구매 목록 보여주기    */

    public function __destruct(){
      parent::__destruct();
    }
    /*      소멸자     */
  }
?>
