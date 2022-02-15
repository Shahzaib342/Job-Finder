-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: job_finder
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (1,'Software Engineer','Looking for a software engineer','USA','IT',22,'IT,SE,job'),(2,'Graphic Designer','Looking for a graphic designer','USA','IT',22,'IT,SE,job,design'),(3,'Graphic Designer','Looking for a graphic designer','UK','IT',22,'IT,SE,job,design'),(4,'Graphic Designer','Looking for a graphic designer','Germany','IT',22,'IT,SE,job,design'),(5,'Graphic Designer','Looking for a graphic designer','Germany','IT',25,'IT,SE,job,design'),(6,'Software engineer','Looking for a software engineer','Germany','IT',25,'IT,SE'),(7,'Software engineer','Looking for a software engineer','Germany','IT',32,'IT,SE'),(8,'Software engineer','Looking for a software engineer','England','IT',32,'IT,SE'),(9,'Ecommerce expert','Looking for a ecommerce expert','England','ecommerce',32,'ecommerce,business'),(10,'Ecommerce expert','Looking for a ecommerce expert','USA','ecommerce',32,'ecommerce,business'),(11,'Ecommerce Domain expert','Looking for a ecommerce expert','USA','ecommerce',36,'ecommerce'),(12,'Ecommerce Domain expert','Looking for a ecommerce expert','India','ecommerce',36,'ecommerce'),(13,'Ecommerce Domain expert','Looking for a ecommerce expert',NULL,NULL,NULL,NULL),(14,'Ecommerce expert','Looking for a ecommerce person',NULL,NULL,NULL,NULL),(15,'Bank Manager','Required bank manager',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-13 13:26:23
