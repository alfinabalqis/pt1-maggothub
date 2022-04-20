-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: maggothub
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
-- Table structure for table `list_produk`
--

DROP TABLE IF EXISTS `list_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `list_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(10) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `list_produk`
--

LOCK TABLES `list_produk` WRITE;
/*!40000 ALTER TABLE `list_produk` DISABLE KEYS */;
INSERT INTO `list_produk` VALUES (1,'SUPER MAGGOT Kering BSF 160 gram Makanan Ikan Koi',25000,978,'Merupakan satu-satunya produk dengan khasiat pelet dalam bentuk organik Udang & Maggot BSF pilihan kualitas terbaik. Di Formulasikan khusus hasil olah racikan organik dari sari-sari tumbuhan & hewani. ProVitamin, More High Protein - HI-GROWTH, Max Color Enhancer & zat-zat alami dihabitatnya yg mendukung Progress Warna, sisik (arwana), jenong (louhan) marking, STRIP/SPOT/DOT, Bulky pada ikan Koi dan khusus Bakat Bunga (Channa Maru). Progress ikan kesayangan anda semakin optimal.\r\n\r\nMerupakan satu-satunya produk dengan khasiat pelet dalam bentuk organik Udang & Maggot BSF pilihan kualitas terbaik. Di Formulasikan khusus hasil olah racikan organik dari sari-sari tumbuhan & hewani. ProVitamin, More High Protein - HI-GROWTH, Max Color Enhancer & zat-zat alami dihabitatnya yg mendukung Progress Warna, sisik (arwana), jenong (louhan) marking, STRIP/SPOT/DOT, Bulky pada ikan Koi dan khusus Bakat Bunga (Channa Maru). Progress ikan kesayangan anda semakin optimal.','super-maggot.png');
/*!40000 ALTER TABLE `list_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sandi` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'pembeli','Irham Tri Ahmadi','0881023409290','nameoriginal474@gmail.com','$2y$10$Eug8l5R7QCJFaoAQ/3tviOul89qGA43pow1Cyk.4snDi9BxZ8RY2u','Kp.Sekepeer No 15A RT.03 RW.05 Kel.Sindang Jaya Kec.Mandalajati Kota Bandung');
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

-- Dump completed on 2022-04-20 11:15:43
