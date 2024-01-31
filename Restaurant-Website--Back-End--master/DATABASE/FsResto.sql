-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: fs_resto
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `LevelPedas` varchar(25) NOT NULL,
  `Total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `category_id` varchar(4) NOT NULL,
  `category` char(10) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES ('ct1','makanan'),('ct2','minuman'),('ct3','ice cream');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `cust_id` varchar(10) NOT NULL,
  `cust_name` varchar(30) DEFAULT NULL,
  `cust_address` varchar(100) DEFAULT NULL,
  `cust_mail` varchar(20) DEFAULT NULL,
  `no_tlp` int(15) DEFAULT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('cust000000','Online','-','-',0),('cust000001','Bima ','Depok','bima1@gmail.com',87872362),('cust000002','Abdan ','Bogor','abdan2@gmail.com',87877652),('cust000003','Nadya ','Tangerang','nadya3@gmail.com',8787236),('cust000004','Wungu ','Tangerang','wungu4@gmail.com',87625914),('cust000005','Bilal ','Bekasi','bilal5@gmail.com',87456722),('cust000006','Farhan ','Bogor','farhan6@gmail.com',87098294),('cust000007','Ivan ','Pasar Rebo','ivan7@gmail.com',87082651),('cust000008','Arik ','Pasar Rebo','arik8@gmail.com',87515354),('cust000009','Adhisti ','Kelapa Dua','adhisti9@gmail.com',87916471),('cust000010','Devandra ','Karawaci','devandra10@gmail.com',87723414),('cust000011','Naufal ','Kab.Bogor','naufal11@gmail.com',87283625),('cust000012','Sonya ','Bogor','sonya12@gmail.com',80819741),('cust000013','Syaiful ','Pasar Minggu','ipul3@gmail.com',87729174),('cust000014','Fahmi ','Depok','fahmi14@gmail.com',89164014),('cust000015','Salman ','Bogor','salman15@gmail.com',87871945),('cust000016','Salsa ','Depok','salsa16@gmail.com',87598786),('cust000017','Cendy ','Tangerang','cendy17@gmail.com',87875990),('cust000018','Gumilang ','Sukabumi','gumilang18@gmail.com',80678667),('cust000019','Erich von manerheim','nnba 12 Depok','wadidaw 12@gmail.com',2147483647);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delivery` (
  `delivery_id` varchar(10) NOT NULL,
  `order_id` varchar(10) DEFAULT NULL,
  `penerima` varchar(50) DEFAULT NULL,
  `alamat_tujuan` varchar(100) DEFAULT NULL,
  `pengirim` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`delivery_id`),
  KEY `order_id` (`order_id`),
  CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `delivery`
--

LOCK TABLES `delivery` WRITE;
/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `emp_id` varchar(10) NOT NULL,
  `emp_name` varchar(30) DEFAULT NULL,
  `emp_address` varchar(100) DEFAULT NULL,
  `no_tlp` int(15) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES ('emp0000000','Online','-',0),('emp0000001','Bayu Sunardi','Jalan Juanda 10, Kota Depok',871245121),('emp0000002','Sinta ','Kebagusan 11, Jakarta Selatan',82131241),('emp0000003','Ayu Wahyuni','Jalan Margonda 99, Kota Depok',814754232),('emp0000004','Raim Gagas','Jalan Sudirman 44, Jakarta Pusat',86724523),('emp0000005','Sonya','Jalan Jeruk, Bogor',87677372),('emp0000006','Bagus','Jalan Juanda 53, Kota Depok',897841624),('emp0000007','Bagas','Jalan Margonda 64, Kota Depok',86464366),('emp0000008','Aqira','GDC blok Azalea, Kota Depok',812414453),('emp0000009','Suti Harun','Rawamangun, Jakarta Timur',887587362),('emp0000010','Iyan ','BSD City, Kota Tangerang',123456);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `harga_menu`
--

DROP TABLE IF EXISTS `harga_menu`;
/*!50001 DROP VIEW IF EXISTS `harga_menu`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `harga_menu` (
  `menu_name` tinyint NOT NULL,
  `price` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `liatorder`
--

DROP TABLE IF EXISTS `liatorder`;
/*!50001 DROP VIEW IF EXISTS `liatorder`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `liatorder` (
  `order_id` tinyint NOT NULL,
  `menu_name` tinyint NOT NULL,
  `Total_price` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `menu_id` varchar(10) NOT NULL,
  `menu_name` varchar(50) DEFAULT NULL,
  `category_id` varchar(50) DEFAULT NULL,
  `price` int(50) NOT NULL,
  `qty` int(50) DEFAULT NULL,
  PRIMARY KEY (`menu_id`),
  KEY `category_id` (`category_id`),
  FULLTEXT KEY `pencarian_produk` (`menu_name`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES ('D01','Es Teh Manis','ct2',5000,100),('D02','Jus Mangga','ct2',15000,100),('D03','Kopi Latte','ct2',20000,100),('D04','Aqua 650ml','ct2',3000,100),('D05','Susu','ct2',5000,100),('D06','Milkshake','ct2',22000,100),('D07 ',' adw','ct1 ',20000,10),('D08 ',' adaw','ct1 ',9392,9131),('F01','Ayam Geprek','ct1',25000,98),('F02','Mie Aceh','ct1',35000,92),('F03','Soto','ct1',20000,97),('F04','Tempe Penyet','ct1',15000,100),('F05','Spagetti','ct1',30000,100),('F06','Pasta','ct1',26000,100),('F10','sfawwad','ct1',21,11),('IC01','Soft Ice Cream','ct3',10000,100),('IC02','Gelato','ct3',10000,100),('IC03','Frozen Yoghurt','ct3',15000,100);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_detail` (
  `order_id` varchar(50) NOT NULL,
  `menu_id` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Total_price` int(50) NOT NULL,
  KEY `order_id` (`order_id`,`menu_id`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_detail`
--

LOCK TABLES `order_detail` WRITE;
/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
INSERT INTO `order_detail` VALUES ('O001','D02',1,'2023-01-20 02:03:58',35000),('O002','F05',5,'2023-01-20 02:04:01',14000),('O003','F01',2,'2023-01-25 17:00:00',25000),('O1674727421','F02',1,'2023-01-25 17:00:00',35000),('O1674742261','F02',1,'2023-01-25 17:00:00',35000),('O1674807124','F02',2,'2023-01-26 17:00:00',35000),('O1674807124','F01',4,'2023-01-26 17:00:00',25000),('O1674807342','F02',5,'2023-01-26 17:00:00',35000),('O1674807342','F03',5,'2023-01-26 17:00:00',20000),('O004','D05',2,'2023-03-28 06:46:25',35000),('0OO9','D07 ',5,'2023-04-03 03:37:31',100000),('O010','D07 ',4,'2023-04-03 03:38:34',10000),('0OO9','D03',5,'2023-04-03 03:39:21',35000);
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `order_id` varchar(50) NOT NULL,
  `cust_id` varchar(55) NOT NULL,
  `emp_id` varchar(55) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `cust_id` (`cust_id`,`emp_id`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES ('O001','cust000001','emp0000001'),('O010','cust000001','emp0000003'),('O002','cust000002','emp0000002'),('O003','cust000003','emp0000003'),('0OO9','cust000003','emp0000007'),('O1674727421','cust000005','emp0000005'),('O1674742261','cust000006','emp0000006'),('O1674807124','cust000007','emp0000007'),('O1674807342','cust000007','emp0000007'),('O004','cust000010','emp0000010');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengurus`
--

DROP TABLE IF EXISTS `pengurus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) DEFAULT NULL,
  `pasword` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengurus`
--

LOCK TABLES `pengurus` WRITE;
/*!40000 ALTER TABLE `pengurus` DISABLE KEYS */;
INSERT INTO `pengurus` VALUES (1,'admin','91dc4358628816658c3ce05a8796b11d'),(2,'admin2','123');
/*!40000 ALTER TABLE `pengurus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `harga_menu`
--

/*!50001 DROP TABLE IF EXISTS `harga_menu`*/;
/*!50001 DROP VIEW IF EXISTS `harga_menu`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `harga_menu` AS select `menu`.`menu_name` AS `menu_name`,`menu`.`price` AS `price` from `menu` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `liatorder`
--

/*!50001 DROP TABLE IF EXISTS `liatorder`*/;
/*!50001 DROP VIEW IF EXISTS `liatorder`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `liatorder` AS select `order_detail`.`order_id` AS `order_id`,`menu`.`menu_name` AS `menu_name`,`order_detail`.`Total_price` AS `Total_price` from (`menu` join `order_detail` on(`menu`.`menu_id` = `order_detail`.`menu_id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-31  7:17:13
