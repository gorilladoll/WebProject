-- MySQL dump 10.16  Distrib 10.1.19-MariaDB, for osx10.6 (i386)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.19-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `DB_Buylist`
--

DROP TABLE IF EXISTS `DB_Buylist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DB_Buylist` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(15) NOT NULL,
  `img` varchar(100) NOT NULL,
  `serial` varchar(20) NOT NULL,
  `regist_day` varchar(15) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DB_Buylist`
--

LOCK TABLES `DB_Buylist` WRITE;
/*!40000 ALTER TABLE `DB_Buylist` DISABLE KEYS */;
INSERT INTO `DB_Buylist` VALUES (1,'admin','../img/macbookair.jpeg','macbookAir-01','2016-12-14','../Product/Apple_air.php'),(2,'admin','../img/macbookair.jpeg','macbookAir-01','2016-12-14','../Product/Apple_air.php'),(3,'admin','../img/macbookair.jpeg','macbookAir-01','2016-12-14','../Product/Apple_air.php'),(4,'admin','../img/series3.jpg','Series3-01','2016-12-14','../Product/Samsung_3.php');
/*!40000 ALTER TABLE `DB_Buylist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DB_MessageBoard`
--

DROP TABLE IF EXISTS `DB_MessageBoard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DB_MessageBoard` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(12) NOT NULL,
  `nick` varchar(12) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text,
  `img` text,
  `file` text,
  `real_name` text,
  `regist_day` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DB_MessageBoard`
--

LOCK TABLES `DB_MessageBoard` WRITE;
/*!40000 ALTER TABLE `DB_MessageBoard` DISABLE KEYS */;
INSERT INTO `DB_MessageBoard` VALUES (1,'admin','admin','upload','upload','./uploadfiles/2016_12_14_21_29_29_01.상품 구매 버튼.png','./uploadfiles/2016_12_14_21_29_29_취업을위한일본어_경험담_1301272_조진규.docx','취업을위한일본어_경험담_1301272_조진규.docx','2016-12-14/21:29:29'),(2,'admin','admin','upload','upload','./uploadfiles/2016_12_14_21_31_59_01.상품 구매 버튼.png','./uploadfiles/2016_12_14_21_31_59_취업을위한일본어_경험담_1301272_조진규.docx','취업을위한일본어_경험담_1301272_조진규.docx','2016-12-14/21:31:59'),(3,'admin','admin','이미지 시험용','이미지 시험용','./uploadfiles/2016_12_14_21_34_53_','./uploadfiles/2016_12_14_21_34_53_','','2016-12-14/21:34:53'),(4,'admin','admin','이미지 시험용','이미지 시험용','./uploadfiles/2016_12_14_21_58_49_',NULL,'','2016-12-14/21:58:49');
/*!40000 ALTER TABLE `DB_MessageBoard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DB_Product`
--

DROP TABLE IF EXISTS `DB_Product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DB_Product` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `maker` varchar(20) NOT NULL,
  `serial` varchar(20) NOT NULL,
  `nick` varchar(15) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `link` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `introduce` varchar(100) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DB_Product`
--

LOCK TABLES `DB_Product` WRITE;
/*!40000 ALTER TABLE `DB_Product` DISABLE KEYS */;
INSERT INTO `DB_Product` VALUES (1,'apple','macbookAir-01','맥북에어',1000000,97,'../Product/Apple_air.php','../img/macbookair.jpeg','가벼움의 미학 맥북에어'),(2,'apple','macbookPro-01','맥북프로',2000000,100,'../Product/Apple_Pro.php','../img/macbookpro.jpeg','더 멋지게 더 프로답게 맥북프로'),(3,'apple','macbookNew-01','뉴맥북',900000,100,'../Product/Apple_new.php','../img/newmacbook.jpg','더욱 새로워진 뉴 맥북'),(4,'samsung','Series3-01','시리즈3',1000000,99,'../Product/Samsung_3.php','../img/series3.jpg','강력한 배터리 그리고 삼성 시리즈3'),(5,'samsung','Series5-01','시리즈5',1200000,100,'../Product/Samsung_5.php','../img/series5.jpg','i5 그리고 더 강력하게 삼성 시리즈5'),(6,'samsung','Series9-01','시리즈9',1500000,100,'../Product/Samsung_9.php','../img/series9.jpg','가볍게 그리고 i7 삼성 시리즈9'),(7,'lg','tabBook-01','탭북',900000,100,'../Product/LG_tab.php','../img/tabbook.jpg','태블릿과 노트북의 경계 LG탭북'),(8,'lg','Gram-01','그램',1300000,100,'../Product/LG_gram.php','../img/gram.jpg','더 가벼운 980g LG그램'),(9,'lg','ultraPc-01','울트라PC',1100000,100,'../Product/LG_ultra.php','../img/ultrapc.jpg','가볍게 그리고 성능의 LG 울트라PC'),(10,'dell','alienWare-01','Alienware',2000000,100,'../Product/Dell_alien.php','../img/alienware.jpg','게이머를 위한 성능 델 Alienware'),(11,'dell','XPS-01','XPS',3000000,100,'../Product/Dell_xps.php','../img/xps.jpeg','보다 가법게 그리고 고성능PC 델 XPS'),(12,'dell','inspiron-01','인스피론',1500000,100,'../Product/Dell_inspiron.php','../img/inspiron.jpeg','비즈니스 파트너 델 인스피론');
/*!40000 ALTER TABLE `DB_Product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DB_user`
--

DROP TABLE IF EXISTS `DB_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DB_user` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(12) NOT NULL,
  `pw` varchar(12) NOT NULL,
  `nick` varchar(12) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DB_user`
--

LOCK TABLES `DB_user` WRITE;
/*!40000 ALTER TABLE `DB_user` DISABLE KEYS */;
INSERT INTO `DB_user` VALUES (1,'admin','admin','admin','admin@naver.com');
/*!40000 ALTER TABLE `DB_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-15  8:47:47
