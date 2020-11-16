-- MySQL dump 10.13  Distrib 8.0.21, for osx10.15 (x86_64)
--
-- Host: localhost    Database: imece
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ALTERNATIVE_BRAND`
--

DROP TABLE IF EXISTS `ALTERNATIVE_BRAND`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ALTERNATIVE_BRAND` (
  `BRAND_BARCODE` int NOT NULL,
  `M_SYSCODE` int NOT NULL,
  `ALTERNATIVE_BRAND_BARCODE` int NOT NULL,
  `ALTERNATIVE_M_SYSCODE` int NOT NULL,
  PRIMARY KEY (`BRAND_BARCODE`,`M_SYSCODE`,`ALTERNATIVE_BRAND_BARCODE`,`ALTERNATIVE_M_SYSCODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ALTERNATIVE_BRAND`
--

LOCK TABLES `ALTERNATIVE_BRAND` WRITE;
/*!40000 ALTER TABLE `ALTERNATIVE_BRAND` DISABLE KEYS */;
/*!40000 ALTER TABLE `ALTERNATIVE_BRAND` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brand_orgs`
--

DROP TABLE IF EXISTS `brand_orgs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brand_orgs` (
  `lot_id` int NOT NULL AUTO_INCREMENT,
  `org_id` int NOT NULL,
  `brand_barcode` char(13) NOT NULL,
  `quantity` float DEFAULT NULL,
  `unit` varchar(13) DEFAULT NULL,
  `expiry_date` date NOT NULL,
  `baseprice` int DEFAULT NULL,
  `amount_in` float DEFAULT NULL,
  `amount_ex` float DEFAULT NULL,
  PRIMARY KEY (`lot_id`,`org_id`,`brand_barcode`,`expiry_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand_orgs`
--

LOCK TABLES `brand_orgs` WRITE;
/*!40000 ALTER TABLE `brand_orgs` DISABLE KEYS */;
/*!40000 ALTER TABLE `brand_orgs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `country` (
  `Country_Code` char(3) DEFAULT NULL,
  `Country_Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `COUNTRY_CITY`
--

DROP TABLE IF EXISTS `COUNTRY_CITY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `COUNTRY_CITY` (
  `CityID` int DEFAULT NULL,
  `City_Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `COUNTRY_CITY`
--

LOCK TABLES `COUNTRY_CITY` WRITE;
/*!40000 ALTER TABLE `COUNTRY_CITY` DISABLE KEYS */;
/*!40000 ALTER TABLE `COUNTRY_CITY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FEATURES`
--

DROP TABLE IF EXISTS `FEATURES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `FEATURES` (
  `FEATURE_ID` int NOT NULL AUTO_INCREMENT,
  `FEATURE_NAME` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`FEATURE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FEATURES`
--

LOCK TABLES `FEATURES` WRITE;
/*!40000 ALTER TABLE `FEATURES` DISABLE KEYS */;
INSERT INTO `FEATURES` VALUES (1,'feat9'),(6,'feat3');
/*!40000 ALTER TABLE `FEATURES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FLOW`
--

DROP TABLE IF EXISTS `FLOW`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `FLOW` (
  `Source_LOT_ID` int NOT NULL,
  `Source_ORG_ID` int NOT NULL,
  `TARGET_LOT_ID` int NOT NULL,
  `TARGET_ORG_ID` int NOT NULL,
  `BRAND_BARCODE` varchar(50) NOT NULL,
  `ALTERNATIVE_M_SYSCODE` varchar(10) NOT NULL,
  PRIMARY KEY (`Source_LOT_ID`,`Source_ORG_ID`,`TARGET_LOT_ID`,`TARGET_ORG_ID`,`BRAND_BARCODE`,`ALTERNATIVE_M_SYSCODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FLOW`
--

LOCK TABLES `FLOW` WRITE;
/*!40000 ALTER TABLE `FLOW` DISABLE KEYS */;
/*!40000 ALTER TABLE `FLOW` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MANUFACTURERS`
--

DROP TABLE IF EXISTS `MANUFACTURERS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MANUFACTURERS` (
  `MANUFACTURER_ID` int NOT NULL AUTO_INCREMENT,
  `MANUFACTURER_NAME` varchar(200) DEFAULT NULL,
  `MANUFACTURER_ADDRESS` varchar(200) DEFAULT NULL,
  `CITY` int DEFAULT NULL,
  `COUNTRY` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`MANUFACTURER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MANUFACTURERS`
--

LOCK TABLES `MANUFACTURERS` WRITE;
/*!40000 ALTER TABLE `MANUFACTURERS` DISABLE KEYS */;
INSERT INTO `MANUFACTURERS` VALUES (1,'toolio-new','netherlands',12,'47'),(2,'datadog','istanbul',34,'90'),(4,'apple','usa',11,'1');
/*!40000 ALTER TABLE `MANUFACTURERS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organizations` (
  `org_id` int NOT NULL AUTO_INCREMENT,
  `org_name` varchar(20) DEFAULT NULL,
  `parent_org` int DEFAULT NULL,
  `org_abstract` tinyint(1) DEFAULT NULL,
  `org_address` varchar(200) DEFAULT NULL,
  `org_city` int DEFAULT NULL,
  `org_district` varchar(50) DEFAULT NULL,
  `org_type` int DEFAULT NULL,
  PRIMARY KEY (`org_id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizations`
--

LOCK TABLES `organizations` WRITE;
/*!40000 ALTER TABLE `organizations` DISABLE KEYS */;
INSERT INTO `organizations` VALUES (2,'nike',NULL,0,'istanbul',34,'Uskudar',2),(61,'sok',NULL,0,'kupluce mah. 1.semsibey sk.',34,'beylerbeyi',1),(63,'bim',NULL,1,'yenimahalle mah.',6,'yenimahalle',2),(65,'migros',NULL,1,'yenimahalle mah.',6,'yenimahalle',2);
/*!40000 ALTER TABLE `organizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `m_syscode` int NOT NULL AUTO_INCREMENT,
  `m_code` varchar(15) DEFAULT NULL,
  `m_name` varchar(25) DEFAULT NULL,
  `m_shortname` varchar(10) DEFAULT NULL,
  `m_parentcode` varchar(15) DEFAULT NULL,
  `m_abstract` tinyint(1) DEFAULT NULL,
  `m_category` varchar(12) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m_syscode`),
  UNIQUE KEY `m_code` (`m_code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (3,'code3','p4','shortname','par3',1,'Jeans',0),(5,'555634','bim','shortname2',NULL,1,'Jeans',1),(6,'497327','deneme','shortname',NULL,1,'Jeans',0);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_brands`
--

DROP TABLE IF EXISTS `product_brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_brands` (
  `brand_barcode` varchar(13) NOT NULL,
  `m_syscode` int NOT NULL,
  `brand_name` varchar(100) DEFAULT NULL,
  `manufacturer_id` int DEFAULT NULL,
  PRIMARY KEY (`brand_barcode`,`m_syscode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_brands`
--

LOCK TABLES `product_brands` WRITE;
/*!40000 ALTER TABLE `product_brands` DISABLE KEYS */;
INSERT INTO `product_brands` VALUES ('124',1,'deneme',1);
/*!40000 ALTER TABLE `product_brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PRODUCT_FEATURES`
--

DROP TABLE IF EXISTS `PRODUCT_FEATURES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PRODUCT_FEATURES` (
  `M_SYSCODE` int NOT NULL AUTO_INCREMENT,
  `FEATURE_ID` int DEFAULT NULL,
  `MINVAL` float NOT NULL,
  `MAXVAL` float NOT NULL,
  PRIMARY KEY (`MINVAL`,`MAXVAL`),
  KEY `M_SYSCODE` (`M_SYSCODE`),
  KEY `FEATURE_ID` (`FEATURE_ID`),
  CONSTRAINT `product_features_ibfk_1` FOREIGN KEY (`M_SYSCODE`) REFERENCES `PRODUCT` (`m_syscode`),
  CONSTRAINT `product_features_ibfk_2` FOREIGN KEY (`FEATURE_ID`) REFERENCES `FEATURES` (`FEATURE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PRODUCT_FEATURES`
--

LOCK TABLES `PRODUCT_FEATURES` WRITE;
/*!40000 ALTER TABLE `PRODUCT_FEATURES` DISABLE KEYS */;
/*!40000 ALTER TABLE `PRODUCT_FEATURES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `org_id` int DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_password` varchar(128) DEFAULT NULL,
  `user_shortname` varchar(20) DEFAULT NULL,
  `user_surname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (10,50,'admin','$2y$10$RPk8fHGK.4rgsZawcu.TcOiffyGli/DMPsclDPB.oNhZUPEFWu7X6','Bahadir','Altun','ibahadiraltun@gmail.com','+905534151590'),(11,52,'ibahadiraltun','$2y$10$YO6MD.cqrFR3RmiofKgGh.TLcgHyPSx.p2Bz/xVVdZ/M2ir/cm2TG','Bahadir','Altun','ibahadiraltun@gmail.com','+905534151590'),(17,58,'ibahadiraltun-new','$2y$10$a3jjgtPM9eMcW6PnDac36OzhwoH6Q3KIHH8LZVia88/CfN56Y71uS','Ibrahim','Altun','ibahadiraltun2000@gmail.com','+905534151590'),(18,58,'deneme-user','$2y$10$RCvt3BbJUcq/ryjPjZRZ8efdhY9P6/rKUU2QDNf6SsO23U6tRXWbK','deneme','user','deneme@deneme.com','+905534151590');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-16 23:22:24
