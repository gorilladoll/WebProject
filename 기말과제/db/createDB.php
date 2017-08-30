<?php
  require_once "../db/classDB.php";
  class DBlist extends DBconnect{
  public function __construct(){
    parent::__construct();
  }
  public function create_buylist(){
    try {
      $stmt=$this->pdo->prepare(" create table DB_Buylist (
                                  num int auto_increment not null,
                                  id varchar(15) not null,
                                  img varchar(100) not null,
                                  serial varchar(20) not null,
                                  regist_day varchar(15) not null,
                                  link text not null,
                                  primary key(num)
                                  )");
      $stmt->execute();
    } catch (PDOException $e) {
      echo ("ERROR: {$e->getMessage()}");
    }
  }/*구매목록 디비 생성*/

  public function create_messageboard(){
    try {
      $stmt=$this->pdo->prepare(" create table DB_MessageBoard (
                                  num int auto_increment not null,
                                  id varchar(12) not null,
                                  nick varchar(12) not null,
                                  subject varchar(100) not null,
                                  content text,
                                  img text,
                                  file text,
                                  real_name text,
                                  regist_day varchar(20),
                                  primary key(num)
                                )");
      $stmt->execute();
    } catch (PDOException $e) {
      echo ("ERROR: {$e->getMessage()}");
    }
  }/*게시판 디비 생성*/


  public function create_signin(){
    try {
      $stmt=$this->pdo->prepare(" create table DB_user (
                                  num int auto_increment not null,
                                  id varchar(12) not null,
                                  pw varchar(12) not null,
                                  nick varchar(12) not null,
                                  email text not null,
                                  primary key(num)
                                )");
      $stmt->execute();
    } catch (PDOException $e) {
      echo ("ERROR: {$e->getMessage()}");
    }
  }/*  회원가입 테이블 생성 */

  public function create_product(){
    try {
      $stmt=$this->pdo->prepare(" create table DB_Product(
                                  num int auto_increment not null,
                                  maker varchar(20) not null,
                                  serial varchar(20) not null,
                                  nick varchar(15) not null,
                                  price int not null,
                                  stock int not null,
                                  link text not null,
                                  img varchar(100) not null,
                                  introduce varchar(100) not null,
                                  primary key(num)
                                 );");
      $stmt->execute();
    } catch (PDOException $e) {
      echo ("ERROR: {$e->getMessage()}");
    }
  }/*상품 디비 생성*/

  public function insert_product(){
    $product_maker = array("apple","apple","apple",
                          "samsung","samsung","samsung",
                          "lg","lg","lg",
                          "dell","dell","dell");
    $product_name = array("macbookAir-01","macbookPro-01","macbookNew-01",
                          "Series3-01","Series5-01","Series9-01",
                          "tabBook-01","Gram-01","ultraPc-01",
                          "alienWare-01","XPS-01","inspiron-01");

    $product_nick = array("맥북에어","맥북프로","뉴맥북",
                          "시리즈3","시리즈5","시리즈9",
                          "탭북","그램","울트라PC",
                          "Alienware","XPS","인스피론");
    $product_price = array("1000000","2000000","900000",
                          "1000000","1200000","1500000",
                          "900000","1300000","1100000",
                          "2000000","3000000","1500000");
    $product_stock = 100;
    $product_link = array("../Product/Apple_air.php","../Product/Apple_Pro.php","../Product/Apple_new.php",
                          "../Product/Samsung_3.php","../Product/Samsung_5.php","../Product/Samsung_9.php",
                          "../Product/LG_tab.php","../Product/LG_gram.php","../Product/LG_ultra.php",
                          "../Product/Dell_alien.php","../Product/Dell_xps.php","../Product/Dell_inspiron.php");

    $product_img = array("../img/macbookair.jpeg","../img/macbookpro.jpeg","../img/newmacbook.jpg",
                         "../img/series3.jpg","../img/series5.jpg","../img/series9.jpg",
                         "../img/tabbook.jpg","../img/gram.jpg","../img/ultrapc.jpg",
                         "../img/alienware.jpg","../img/xps.jpeg","../img/inspiron.jpeg");
    $product_introduce = array("가벼움의 미학 맥북에어","더 멋지게 더 프로답게 맥북프로","더욱 새로워진 뉴 맥북",
                          "강력한 배터리 그리고 삼성 시리즈3","i5 그리고 더 강력하게 삼성 시리즈5","가볍게 그리고 i7 삼성 시리즈9",
                          "태블릿과 노트북의 경계 LG탭북","더 가벼운 980g LG그램","가볍게 그리고 성능의 LG 울트라PC",
                          "게이머를 위한 성능 델 Alienware","보다 가법게 그리고 고성능PC 델 XPS","비즈니스 파트너 델 인스피론");

    $count = count($product_name);
    try {
      for($i = 0; $i < $count; $i++){
        $stmt=$this->pdo->prepare("SELECT * FROM DB_Product WHERE serial = :serial");
        $stmt->bindParam(":serial",$product_name[$i],PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($product_name[$i] == $row['serial']){
          echo "생성되지 않음";
          break;
        } else {
          $stmt=$this->pdo->prepare("INSERT INTO DB_Product(maker,serial,nick,price,stock,link,img,introduce)
                               VALUES(:maker,:serial,:nick,:price,:stock,:link,:img,:introduce)");
          $stmt->bindParam(":maker",$product_maker[$i],PDO::PARAM_STR);
          $stmt->bindParam(":serial",$product_name[$i],PDO::PARAM_STR);
          $stmt->bindParam(":nick",$product_nick[$i],PDO::PARAM_STR);
          $stmt->bindParam(":price",$product_price[$i],PDO::PARAM_INT);
          $stmt->bindParam(":stock",$product_stock,PDO::PARAM_INT);
          $stmt->bindParam(":link",$product_link[$i],PDO::PARAM_STR);
          $stmt->bindParam(":img",$product_img[$i],PDO::PARAM_STR);
          $stmt->bindParam(":introduce",$product_introduce[$i],PDO::PARAM_STR);
          $stmt->execute();
        }
      }
    } catch (PDOException $e) {
      echo ("ERROR: {$e->getMessage()}");
    }
  }


  public function __destruct(){
    parent::__destruct();
  }
}

  $create = new DBlist();
  $create->create_messageboard();
  //$create->create_buylist();
  //$create->create_product();
  //$create->create_signin();
  //$create->insert_product();
?>
