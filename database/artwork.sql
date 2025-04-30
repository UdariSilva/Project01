-- MySQL dump 10.13  Distrib 8.0.39, for Win64 (x86_64)
--
-- Host: localhost    Database: artwork
-- ------------------------------------------------------
-- Server version	8.0.39

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
-- Table structure for table `art`
--

DROP TABLE IF EXISTS `art`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `art` (
  `art_id` int NOT NULL AUTO_INCREMENT,
  `creation_date` date NOT NULL,
  `demention` varchar(45) NOT NULL,
  `medium` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `author_author_id` int NOT NULL,
  `image` text NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`art_id`),
  KEY `fk_art_author_idx` (`author_author_id`),
  CONSTRAINT `fk_art_author` FOREIGN KEY (`author_author_id`) REFERENCES `author` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `art`
--

LOCK TABLES `art` WRITE;
/*!40000 ALTER TABLE `art` DISABLE KEYS */;
INSERT INTO `art` VALUES (1,'2025-04-29','24x36','Oil on Canvas','5000',1,'images/4-23-4-22-8-4-13m.jpg','River Path'),(2,'2025-04-29','30x40','Acrylic','4500',2,'images/165fa9b0374a11ee85c606311dffedfc_upscaled.jpg','Abstract Art'),(3,'2025-04-29','20x30','Watercolor','3000',3,'images/painting-960x750.jpg','Love with Rainy day'),(4,'2025-04-29','36x48','Acrylic','6000',4,'images/New-dimension_b.jpg','Colorful Abstract'),(5,'2025-04-29','18x24','Oil on Canvas','4000',5,'images/9ed91996f357c0b59d5ca3780ded8c58.jpg','Traditional Art'),(6,'2025-04-29','24x36','Oil on Canvas','5200',6,'images/kHdQm6WQ8ZdREHSKOWtm.png','River View'),(7,'2025-04-29','30x22.5','Acrylic','4800',7,'images/URSB_302_30x22.5_L.jpg','Sea Waves'),(8,'2025-04-29','28x40','Oil on Canvas','5300',8,'images/images (5).jpg','River Land Scape'),(9,'2025-04-29','24x36','Acrylic','4700',9,'images/572cadfc743911ee81401e5d9776cfa6_upscaled.jpg','Abstract Women'),(10,'2025-04-29','24x36','Oil on Canvas','5000',10,'images/7a703f5e6b797b6cf8dcb9047674ffd4.jpg','Peace'),(11,'2025-04-29','24x36','Acrylic','4100',1,'images/imaginings_2.jpeg','Relaxing Evening Canvas'),(12,'2025-04-29','28x40','Oil on Canvas','5300',1,'images/images (4).jpg','River Land Scape'),(13,'2025-04-29','36x48','Acrylic','6000',3,'images/230049.jpg','Beautiful Morning with Nature'),(14,'2025-04-29','24x36','Acrylic','4500',4,'images/ai-generated-9148695_640.jpg','Colorful Acrylaric'),(15,'2025-04-29','24x36','Oil on Canvas','5000',4,'images/depositphotos_12064096-stock-illustration-oil-painting.jpg','Sunset'),(16,'2025-04-29','36x48','Acrylic','6000',3,'images/6f477b9112f59dd0b4899f953fa7dec0.jpg','Colorful Sunset Beach'),(17,'2025-04-29','24x36','Acrylic','4700',1,'images/d400bbf46a1aca6fd3ce638e867913f2.jpg','Abstract Bird'),(18,'2025-04-29','24x36','Acrylic','4700',8,'images/8dd584a675315227be637316e0aca324.jpg','Abstract Women'),(19,'2025-04-29','24x36','Acrylic','4700',9,'images/301dbc8a690453f9de557d42707991c5.jpg','Aesthetic Colorful Ee'),(20,'2025-04-29','24x36','Oil on Canvas','5200',3,'images/d8009b314f808cc84852fae4e80b60b2.jpg','Calm Village');
/*!40000 ALTER TABLE `art` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `author` (
  `author_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  `image` text,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `author`
--

LOCK TABLES `author` WRITE;
/*!40000 ALTER TABLE `author` DISABLE KEYS */;
INSERT INTO `author` VALUES (1,'Elena Rossi','Born in Florence, Italy, Elena Rossi is an Italian artist currently residing in Rome, Italy. Her artistic practice centers around oil painting, with a focus on capturing the fleeting moments of nature. Elena Rossi\'s work has been shown at the Biennale di Venezia and several smaller galleries in Italy.','https://images.unsplash.com/photo-1544005313-94ddf0286df2'),(2,'Lucas Meyer','Lucas Meyer is a contemporary German sculptor known for his abstract metalwork installations. Based in Berlin, his pieces explore urban decay and industrial transformation. He has exhibited at Documenta in Kassel and galleries throughout Europe.','https://images.unsplash.com/photo-1535713875002-d1d0cf377fde'),(3,'Sofia Nakamura','Sofia Nakamura, a Tokyo-born artist, blends traditional Japanese ink painting with modern digital techniques. Her artworks reflect themes of memory, identity, and cultural duality. Her work has been featured in the Mori Art Museum and Art Basel.','https://images.unsplash.com/photo-1502685104226-ee32379fefbe'),(4,'Amara Singh','Amara Singh is a multimedia artist from Mumbai, India, specializing in visual storytelling through mixed media and textile art. Her work often addresses themes of gender, social change, and tradition. She has received accolades from the Kochi-Muziris Biennale.','https://images.unsplash.com/photo-1544723795-3fb6469f5b39'),(5,'Mateo García','Mateo García, a Barcelona-based painter, draws inspiration from the surrealists and Spanish folklore. His vibrant oil paintings often feature dreamlike figures and symbolic landscapes. He has held solo exhibitions in Madrid, Paris, and New York.','https://images.unsplash.com/photo-1527980965255-d3b416303d12'),(6,'Ingrid Johansen','Ingrid Johansen is a Norwegian photographer who focuses on arctic and glacial landscapes. Based in Tromsø, her work captures the haunting beauty of remote northern regions and has been featured in National Geographic and various nature journals.','https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e'),(7,'Chiara Bianchi','Chiara Bianchi is an Italian ceramicist from Milan known for her minimalist and organic forms. Her pieces have been collected by contemporary design museums across Europe and showcased at Salone del Mobile.','https://images.unsplash.com/photo-1524504388940-b1c1722653e1'),(8,'Thomas Leclerc','Thomas Leclerc is a French printmaker and visual artist. His detailed etchings explore themes of urban life and alienation. A graduate of École des Beaux-Arts, he has exhibited in galleries across France and Canada.','https://images.unsplash.com/photo-1603415526960-f8f0a31c2d1b'),(9,'Aisha Al-Fulan','Aisha Al-Fulan is a Saudi Arabian conceptual artist whose work explores language, feminism, and cultural narratives. She uses installations and video to provoke thought and discussion. Her work has been part of the Sharjah Biennial and Desert X.','https://images.unsplash.com/photo-1520813792240-56fc4a3765a7'),(10,'Javier Ortega','Javier Ortega is a Mexican muralist and street artist from Oaxaca. Influenced by political movements and indigenous iconography, his large-scale works tell stories of resistance and identity. He has created public art in Mexico City, LA, and Bogotá.','https://images.unsplash.com/photo-1517841905240-472988babdf9');
/*!40000 ALTER TABLE `author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'udari','udari@gmail.com','0456356587','12345'),(2,'silva','silva@gmail.com','0456365423','12345');
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

-- Dump completed on 2025-04-30  1:14:42
