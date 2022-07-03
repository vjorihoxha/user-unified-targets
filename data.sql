-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: unified_tasks
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Dumping data for table `business_type_targets`
--

LOCK TABLES `business_type_targets` WRITE;
/*!40000 ALTER TABLE `business_type_targets` DISABLE KEYS */;
INSERT INTO `business_type_targets` VALUES (1,50,'need to be renewal',2,1,'2022-07-01 04:02:03','2022-07-01 04:02:03',NULL),(2,50,'need to be new business',2,2,'2022-07-01 04:02:03','2022-07-01 04:02:03',NULL);
/*!40000 ALTER TABLE `business_type_targets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `business_types`
--

LOCK TABLES `business_types` WRITE;
/*!40000 ALTER TABLE `business_types` DISABLE KEYS */;
INSERT INTO `business_types` VALUES (1,'renewal','2022-07-01 04:02:03','2022-07-01 04:02:03',NULL),(2,'new business','2022-07-01 04:02:03','2022-07-01 04:02:03',NULL);
/*!40000 ALTER TABLE `business_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `call_purposes`
--

LOCK TABLES `call_purposes` WRITE;
/*!40000 ALTER TABLE `call_purposes` DISABLE KEYS */;
INSERT INTO `call_purposes` VALUES (1,'prospect','2022-07-01 04:02:15','2022-07-01 04:02:15',NULL),(2,'renewal','2022-07-01 04:02:15','2022-07-01 04:02:15',NULL);
/*!40000 ALTER TABLE `call_purposes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `monetaries`
--

LOCK TABLES `monetaries` WRITE;
/*!40000 ALTER TABLE `monetaries` DISABLE KEYS */;
INSERT INTO `monetaries` VALUES (1,2,'2022-07-01 04:02:03','2022-07-01 04:02:03',NULL);
/*!40000 ALTER TABLE `monetaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `numerics`
--

LOCK TABLES `numerics` WRITE;
/*!40000 ALTER TABLE `numerics` DISABLE KEYS */;
INSERT INTO `numerics` VALUES (1,3,'2022-07-01 04:02:03','2022-07-01 04:02:03',NULL);
/*!40000 ALTER TABLE `numerics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `phone_call_targets`
--

LOCK TABLES `phone_call_targets` WRITE;
/*!40000 ALTER TABLE `phone_call_targets` DISABLE KEYS */;
INSERT INTO `phone_call_targets` VALUES (1,10,'10 need to be prospect calls',1,1,'2022-07-01 04:02:15','2022-07-01 04:02:15',NULL),(2,10,'10 need to be renewal calls',1,2,'2022-07-01 04:02:15','2022-07-01 04:02:15',NULL);
/*!40000 ALTER TABLE `phone_call_targets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `phone_calls`
--

LOCK TABLES `phone_calls` WRITE;
/*!40000 ALTER TABLE `phone_calls` DISABLE KEYS */;
/*!40000 ALTER TABLE `phone_calls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `revenue_group_targets`
--

LOCK TABLES `revenue_group_targets` WRITE;
/*!40000 ALTER TABLE `revenue_group_targets` DISABLE KEYS */;
INSERT INTO `revenue_group_targets` VALUES (1,50,'need to be in inventory',3,1,'2022-07-01 04:02:03','2022-07-01 04:02:03',NULL),(2,100,'need to be from memberships',4,1,'2022-07-01 04:02:03','2022-07-01 04:02:03',NULL),(3,50,'services',5,1,'2022-07-01 04:02:03','2022-07-01 04:02:03',NULL);
/*!40000 ALTER TABLE `revenue_group_targets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `revenue_groups`
--

LOCK TABLES `revenue_groups` WRITE;
/*!40000 ALTER TABLE `revenue_groups` DISABLE KEYS */;
INSERT INTO `revenue_groups` VALUES (3,'inventory','some desc','2022-07-01 04:02:03','2022-07-01 04:02:03',NULL),(4,'memberships','s','2022-07-01 04:02:03','2022-07-01 04:02:03',NULL),(5,'services','s','2022-07-01 04:02:03','2022-07-01 04:02:03',NULL);
/*!40000 ALTER TABLE `revenue_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `target_types`
--

LOCK TABLES `target_types` WRITE;
/*!40000 ALTER TABLE `target_types` DISABLE KEYS */;
INSERT INTO `target_types` VALUES (1,'monetary','2022-07-01 04:02:03','2022-07-01 04:02:03',NULL),(2,'numeric','2022-07-01 04:02:03','2022-07-01 04:02:03',NULL);
/*!40000 ALTER TABLE `target_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `targets`
--

LOCK TABLES `targets` WRITE;
/*!40000 ALTER TABLE `targets` DISABLE KEYS */;
INSERT INTO `targets` VALUES (2,200,'2022-07-30','user must make 200 dollars of revenue in July 2022',1,1,'2022-07-01 04:02:03','2022-07-01 04:02:03',NULL),(3,20,'2022-07-30','user must make 20 phone calls in july 2022',1,2,'2022-07-01 04:43:03','2022-07-01 04:02:03',NULL);
/*!40000 ALTER TABLE `targets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Vjori Hoxha','vjori@mail.com','$2y$10$pLrcLzIDzTsaNZjKpNFEZ.zCID.1Q/pUAkLjAbmk5r1Y0lRFkKvFu','2022-07-01 07:54:07','2022-07-01 07:54:07',NULL);
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

-- Dump completed on 2022-07-03  0:03:44
