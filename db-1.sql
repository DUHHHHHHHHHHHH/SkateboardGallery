-- MySQL dump 10.13  Distrib 8.0.42, for Linux (x86_64)
--
-- Host: localhost    Database: symfony
-- ------------------------------------------------------
-- Server version	8.0.42

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
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20250625200148','2025-06-25 20:58:16',83);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skateboard`
--

DROP TABLE IF EXISTS `skateboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skateboard` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modello` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taglia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colore` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipologia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `immagini` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:simple_array)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skateboard`
--

LOCK TABLES `skateboard` WRITE;
/*!40000 ALTER TABLE `skateboard` DISABLE KEYS */;
INSERT INTO `skateboard` VALUES (1,'Element','Street Pro','8.0','Rosso','Street','1-01.webp,1-02.webp,1-03.webp'),(2,'Santa Cruz','Classic','8.25','Blu','Cruiser','2-01.webp,2-02.webp,2-03.webp'),(3,'Powell','Bones','7.75','Verde','Old School','3-01.webp,3-02.webp,3-03.webp'),(4,'Enjoi','Panda','8.0','Giallo','Freestyle','4-01.webp,4-02.webp,4-03.webp'),(5,'Baker','OG Shape','8.5','Nero','Downhill','5-01.webp,5-02.webp,5-03.webp'),(6,'Zero','Blood Skull','8.0','Bianco','Vert','6-01.webp,6-02.webp,6-03.webp'),(7,'Element','Urban Rider','8.0','Blu','Street','7-01.webp,7-02.webp,7-03.webp'),(8,'Santa Cruz','Wave','8.25','Rosso','Cruiser','8-01.webp,8-02.webp,8-03.webp'),(9,'Powell','Dragon','7.75','Nero','Old School','9-01.webp,9-02.webp,9-03.webp'),(10,'Baker','Classic','8.5','Verde','Downhill','10-01.webp,10-02.webp,10-03.webp'),(11,'Almost','Impact Light','8.0','Blu','Street','11-01.webp,11-02.webp,11-03.webp'),(12,'Plan B','Team OG','8.25','Rosso','Vert','12-01.webp,12-02.webp,12-03.webp'),(13,'Girl','Mike Mo','7.75','Verde','Cruiser','13-01.webp,13-02.webp,13-03.webp'),(14,'Creature','Gravette','8.5','Nero','Downhill','14-01.webp,14-02.webp,14-03.webp'),(15,'Enjoi','Whitey Panda','8.0','Bianco','Street','15-01.webp,15-02.webp,15-03.webp'),(16,'Zero','Single Skull','8.25','Rosso','Vert','16-01.webp,16-02.webp,16-03.webp'),(17,'Toy Machine','Monster','8.0','Verde','Cruiser','17-01.webp,17-02.webp,17-03.webp'),(18,'Blind','OG Reaper','7.75','Blu','Old School','18-01.webp,18-02.webp,18-03.webp'),(19,'Element','Seal','8.25','Giallo','Street','19-01.webp,19-02.webp,19-03.webp'),(20,'Santa Cruz','Screaming Hand','8.0','Azzurro','Cruiser','20-01.webp,20-02.webp,20-03.webp'),(21,'Baker','Brand Logo','8.5','Arancione','Downhill','21-01.webp,21-02.webp,21-03.webp'),(22,'Plan B','Joslin','8.25','Bianco','Vert','22-01.webp,22-02.webp,22-03.webp'),(23,'Almost','Youness','8.0','Rosa','Street','23-01.webp,23-02.webp,23-03.webp'),(24,'Powell','Peralta','8.5','Marrone','Old School','24-01.webp,24-02.webp,24-03.webp'),(25,'Girl','Malto','7.75','Turchese','Cruiser','25-01.webp,25-02.webp,25-03.webp'),(33,'Giovanni','TheSpace','10','Mimetico','Anfibio','add/685d1ec86239c.webp,add/685d1ec86ecf6.webp,add/685d1ec872e20.webp');
/*!40000 ALTER TABLE `skateboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'test','$2y$13$gAKd/pkkUB2g.VXY9NtHye2o87OzxyVHY0LfCPpTG5WpIlkHHgGnq');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-26 11:51:22
