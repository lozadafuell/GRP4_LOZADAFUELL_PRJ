-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: aureleDB
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'users','password'),(2,'user','$2y$10$kpAkqv31zM0LDZL9GSR94eM2LxNGhUazytR7oeaWnugguKyM3qnyi'),(3,'admin','$2y$10$S3BMFdipUcpWRHVEQ6gWSeWNKeAcY4CZndSalhhMhDU7lGukQxn2G'),(4,'fuell','$2y$10$6SelyfyRX5e2Nw9D/Q3VmuJ.ru0Ogr3OBg5Ln.OPvnVISmHtG.g3K'),(5,'sydney','$2y$10$QqmGiLo.CXKGXIoroCAk4eMNGClJ..5znFTlR8BXQMUbOv9per49.'),(6,'shandy','$2y$10$V9R/6myQeSD/gczyKEPbouHJMcLWs3tP/xIPsJK13AFqHg6qzr5vi'),(7,'stephen','$2y$10$ke80BBwT/BxwCKFLTVlFiO3v9cF0SDTWhS6fHBtYfkwuxaY2eYgRi'),(9,'accountName','$2y$10$JAfAfIVnNhIIYsm0AwQWl.mBRkpp3zvt4gM35fO9A1/GNJnZGfsym'),(10,'Name','$2y$10$v06DqCb5paCe2kQNsv/iOObPuP26wnW04Dhlb2Q8hw10NZ9d4vYiG'),(11,'Juan','$2y$10$KruefYChcmzbfSCsga1oXOHRi83KLZwndkskjwiBtnsE8pufAahIG');
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

-- Dump completed on 2024-11-29 17:39:33
