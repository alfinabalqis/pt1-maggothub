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
-- Table structure for table `pembeli`
--

DROP TABLE IF EXISTS `pembeli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pembeli to users` (`id_users`),
  CONSTRAINT `pembeli to users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembeli`
--

LOCK TABLES `pembeli` WRITE;
/*!40000 ALTER TABLE `pembeli` DISABLE KEYS */;
INSERT INTO `pembeli` VALUES (4,7),(14,17),(15,25);
/*!40000 ALTER TABLE `pembeli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembeli_nonuser`
--

DROP TABLE IF EXISTS `pembeli_nonuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembeli_nonuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `alamat` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembeli_nonuser`
--

LOCK TABLES `pembeli_nonuser` WRITE;
/*!40000 ALTER TABLE `pembeli_nonuser` DISABLE KEYS */;
INSERT INTO `pembeli_nonuser` VALUES (1,'Irham Tri Ahmadi','0881023409290','Jalan Sukaasih Raya Atas blok Sekepeer No 15A Bandung');
/*!40000 ALTER TABLE `pembeli_nonuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penjual`
--

DROP TABLE IF EXISTS `penjual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penjual` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `nama_toko` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `penjual to users` (`id_users`),
  CONSTRAINT `penjual to users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penjual`
--

LOCK TABLES `penjual` WRITE;
/*!40000 ALTER TABLE `penjual` DISABLE KEYS */;
INSERT INTO `penjual` VALUES (2,4,'Toko Oren'),(9,24,'Toko Coklat');
/*!40000 ALTER TABLE `penjual` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesanan`
--

DROP TABLE IF EXISTS `pesanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) DEFAULT NULL,
  `jumlah_produk` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `catatan` mediumtext NOT NULL,
  `status_pembeli` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produk` (`id_product`),
  CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesanan`
--

LOCK TABLES `pesanan` WRITE;
/*!40000 ALTER TABLE `pesanan` DISABLE KEYS */;
INSERT INTO `pesanan` VALUES (9,15,2,129998,'Deket masjid rumahnya','user'),(11,16,2,198000,'Masuk Gang rumahnya','nonuser');
/*!40000 ALTER TABLE `pesanan` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER after_pesanan_insert
AFTER INSERT
ON pesanan FOR EACH ROW
BEGIN
    IF NEW.status_pembeli = 'user' THEN
        INSERT INTO pesanan_user(id_pesanan)
        VALUES(new.id);
    END IF;
    IF NEW.status_pembeli = 'nonuser' THEN
        INSERT INTO pesanan_nonuser(id_pesanan)
        VALUES(new.id);
    END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `pesanan_nonuser`
--

DROP TABLE IF EXISTS `pesanan_nonuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesanan_nonuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pesanan` int(11) NOT NULL,
  `id_pembeli_nonuser` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pesanannonusr_pesanan` (`id_pesanan`),
  KEY `fk_pesanannonusr_pembelinonusr` (`id_pembeli_nonuser`),
  CONSTRAINT `fk_pesanannonusr_pesanan` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesanan_nonuser`
--

LOCK TABLES `pesanan_nonuser` WRITE;
/*!40000 ALTER TABLE `pesanan_nonuser` DISABLE KEYS */;
INSERT INTO `pesanan_nonuser` VALUES (3,11,1);
/*!40000 ALTER TABLE `pesanan_nonuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesanan_user`
--

DROP TABLE IF EXISTS `pesanan_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesanan_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pesanan` int(11) NOT NULL,
  `id_user_pembeli` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pesananusr_pesanan` (`id_pesanan`),
  KEY `fk_pesananusr_usrpembeli` (`id_user_pembeli`),
  CONSTRAINT `fk_pesananusr_pesanan` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesanan_user`
--

LOCK TABLES `pesanan_user` WRITE;
/*!40000 ALTER TABLE `pesanan_user` DISABLE KEYS */;
INSERT INTO `pesanan_user` VALUES (8,9,25);
/*!40000 ALTER TABLE `pesanan_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_penjual` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(10) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `is_best_seller` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_penjual` (`id_penjual`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (14,9,'El Barca Maggot BSF Red and Yellow Booster grade A++  feed store',25000,4694,'Kondisi: Baru\nBerat: 16 Gram\n\nPakan tersedia dalam 6 Varian :\n1. UDANG KERING Pro++ : RED-YELLOW\nPencerah : Warna (yellow, Red, Gold), marking, strip, sisik, bunga.\n#recommended baby fish &gt; 5 cm - 20 cm kebawah.\n2. UDANG KERING Xtra++ : RED-YELLOW\nPencerah : Warna (yellow, Red, Gold), marking, strip, sisik, bunga.\n#recommended ikan besar &gt; 20 cm keatas.\n3. UDANG KERING Pro++ : ALL BASIC COLOR\nPencerah : Semua basic Warna (Blue, Green, Albino, silver dst), marking, dot, mutiara, sisik, bunga.\n#recommended baby fish &gt; 5 cm - 20 cm kebawah.\n4. MAGGOT BSF Grade A++ : RED &amp; YELLOW\nPertajam : Warna (yellow, Red, Gold), marking, strip, sisik, bunga.\n5. MAGGOT BSF Grade A++ : BLUE BOOSTER\nPertajam : Warna Blue, marking, strip, spot, dot.\n6. MAGGOT BSF Grade A++ : ALL BASIC COLOR\nPertajam : Semua basic Warna + Khusus Progress Bakat Bunga.\n','62786477169d9.jpg',0),(15,9,'Larva maggot bsf kering, pakan koi, microwave dry bsf non limbah',64999,139,'Deskripsi Pakan Koi Alami Extra bulky Maggot Nusantara 500 gr\r\n\r\nWhole dried Maggot Black Soldier Fly untuk koi disarankan maksimal 20-30%. Makanan maggot bukan dari limbah konsumsi atau sampah. bersih dan berkualitas.\r\n\r\nproduksi bersih kualitas export, dicuci lebih dari 1 kali dan di sterilisasi sebelum dikeringkan.\r\n\r\ndikeringkan 60% kandungan air hilang dari maggot. sangat kering!\r\ntidak menggunakan sampah, sehingga bersih dan bebas bakteri.\r\n\r\nharga untuk 500Gram. Jika ingin lebih banyak dan rutin, harap japri saja\r\nada free delivery untuk daerah bogor jika order lebih dari 50 kg\r\nproduk maggot dari:\r\n\r\nwww.nusaorigin.com\r\n\r\nkandungan nutrisi:\r\n\r\nPROTEIN 40%\r\nCRUDE FAT 26%\r\nENERGY 486.KCAL/100GR\r\nCARBOHYDRATE 18.6%\r\n\r\nTOTAL AMINO ACID:\r\nAspartic Acid 3.3%\r\nThreonine 1.5%\r\nSerine 1.7%\r\nGlutamic Acid 4.6%\r\nGlycine 2.0%\r\nAlanine 2.5%\r\nCystine 0.5%\r\nValine 2.6%\r\nMethionine 0.7%\r\nIso-Leucine 2.1%\r\nLeucine 3.0%\r\nTyrosine 2.5%\r\nPhenylalanine 1.6%\r\nHistidine 2.1%\r\nLysine 2.7%\r\nArginine 2.4%\r\nTryptophan 0.4%\r\nProline 2.2%\r\n\r\nPASIFIC LAB TEST SINGAPORE\r\n','627896d47da50.jpg',1),(16,9,'Super Food Dried Maggot 1 KG Non Limbah',99000,16,'Grade A++ PREMIUM QUALITY!\r\nTERUJI LABORATORIUM\r\nFull Parameter termasuk Asam Amino yang detail.\r\nInfo Reseller : (Chat admin)\r\nBerat bersih : 1 Kg\r\nBerat packing : 300 gr\r\n\r\nMengapa harus membeli produk kami ?\r\n1. Kemasan Food grade &amp; Efisien\r\n2. kualitas dried maggot teruji laboratorium dengan\r\nParameter lengkap termasuk Asam Amino / Amino Acid\r\n3. Harga yang pantas\r\n4. Garansi uang kembali jika produk tidak sesuai\r\n5. Tersedia berbagai ukuran kemasan, flexible sesuai kebutuhan\r\n6. Menggunakan 100% PKM/Bungkil Sawit pilihan (fresh &amp; bukan campuran) sebagai pakan maggot (non limbah), nutrisi tinggi dan stabil karena homogen.\r\n7. Diproduksi secara industrial &amp; profesional sehingga produk sangat berkualitas\r\n8. Tidak berminyak,tidak mencemari air\r\n9. Cocok untuk segala jenis ikan\r\n10. Diperkaya ASTAXANTHIN dan NATURAL PROBIOTICS\r\n11. KUALITAS EXPORT\r\n12. Masa kadaluarsa (best Before) Maggot Kering kami 24 bulan, sangat lama karena proses yang baik, tidak mudah apek / tengik\r\n\r\nMagg’s-Pro adalah produk yang dioreintasikan juga masuk ke pasar eksport, namun diprioritaskan untuk market lokal terlebih dahulu.\r\n\r\nSemua tahapan dilakukan dibawah pengawasan untuk sebuah produk yang PREMIUM\r\n\r\nManfaat Magg&#039;s Pro :\r\n- Memacu pertumbuhan\r\n- Memperbaiki kualitas warna ikan ( Colours Booster)\r\n- Meningkatkan daya tahan tubuh ikan kesayangan\r\n- Menambah nafsu makan ikan\r\n- Cocok untuk segala jenis warna ikan, kalau ikan sehat semua potensinya akan keluar.\r\n- 100% alami sehingga memperpanjang umur ikan\r\n/ hewan kesayangan\r\n\r\nmagg&#039;s PRO untuk hewan kesayangan anda ;\r\n- Koi\r\n- Arwana\r\n- Louhand\r\n- Oscar\r\n- channa\r\n- ikan predator dll\r\n\r\nTips Pemberian pakan :\r\n- aplikasikan 2-3x sehari\r\n- Penggunaan maksimal 20-30% dari jumlah\r\nPakan yg diberikan setiap hari\r\n\r\nCatatan :\r\n- Simpan ditempat kering dan hindari dari sinar matahari\r\n- tutup kembali kemasan setelah pemberian pakan\r\n\r\nSukses &amp; Sehat selalu untukmu.','627897bf54eea.jpg',0),(17,2,'makanan ikan kura karnivora MAGGFEED 100 GR maggot kering',18750,18,'isi 100 gr berat bersih\r\n\r\nmaggot kering\r\n\r\nMaggfeed merupakan premium natural feed fish (maggfeed jauh lebih premium karena keberlanjutan, 100% alami, sangat terkontrol dan minim proses),\r\nserta sudah terstandar dan diuji lab banyak kandungan asam amino dan bebas bakteri\r\n\r\n✅ Protein tinggi dengan kadar 40%\r\n✅ Tururnan Nutrisi Asam Amino dan High Fat ada kandungan zinc kalsium untuk pertumbuhan maksimal\r\n✅ Imunitas ikan meningkat tidak gampang sakit dan Anti stress\r\n✅ untuk Indukan KOI bagus untuk kematangan gonad\r\n✅ Memperbaiki kecerahan warna dengan aktivasi genetik dan *ekstra* Beta Karoten untuk mencerahkan warna ikan\r\n✅ Air kolam jadi tetap bersih karena residu pakan yg sedikit\r\n✅ Bahan organik 100% dan dibawah bimbingan Balai Riset Ikan Hias KKP\r\nCocok Untuk Ikan Koi, Mas Koki, Louhan, Parrot, Arwana, Channa, Oscar, Ikan Hias Laut, Kura-Kura, Sugar Glider, Dan Masih Banyak Lagi\r\n\r\nMaggfeed pakan sumber protein yang sangat bagus untuk Ikan Hias.\r\n\r\n100% ALAMI Berbeda dengan pakan lainnya, MAGGFEED terbuat dari larva kering BSF (Black Soldier Fly) tanpa melalui proses kimiawi atau tambahan bahan kimia. DIJAMIN!\r\n\r\nMUTU TERJAMIN!\r\n\r\nTelah diuji dan terbukti disukai hewan ternak dan peliharaan, dalam waktu yang lebih singkat menunjukan pertumbuhan yang jauh lebih baik. Jika Anda menginginkan hasil yang lebih baik, pastikan berikan MAGGFEED kepada ternak atau peliharaan anda!','627898fe40e87.jpg',1),(18,2,'SUPER MAGGOT Kering BSF Makanan Ikan Koi - 160gr',25000,977,'Maggot yang diolah berasal dari Hewan Black Soldier Fly (BSF) yang terbukti sangat baik untuk Hewan Kesayangan anda.\r\n\r\nKandungan Pakan maggot kering :\r\nProtein 40,3%\r\nMoisture 12%\r\nCrude Fat 27,81%\r\nCrude Fibre 7,41%\r\nAmino Acid 9.79%\r\n\r\nBahan baku maggot dari ONEMAGG berasal dr limbah Sayur &amp; Buah bebas pestisida BUKAN dari sampah.\r\n\r\nKemasan 65gr BERSIH\r\nKemasan 100gr BERSIH\r\nKemasan 160gr BERSIH\r\n\r\nMaggot ini diberikan setiap harinya sebagai campuran makanan Ikan dan dapat diberikan secara langsung.','62789948474e0.png',1),(19,2,'TEPUNG MAGGOT RFAM JAYA LARVA LALAT HITAM BSF ORGANIK PAKAN BURUNG',6600,32,'Nama Produk: Tepung Maggot Rfam Jaya Larva Lalat Hitam Bsf Organik Pakan Burung Murai Kacer Ciblek Pentet Pleci\r\n\r\nKategori produk: Pakan/food\r\n\r\nBerat: 55 gram\r\n\r\nKegunaan:\r\nMeningkatkan energi\r\nMelancarkan produktifitas\r\nMeningkatkan kegacoran\r\nMenjadikan burung lincah &amp; prima\r\nMenambah stamina burung\r\nPakan sangat disukai burung\r\nMemenuhi kebutuhan protein\r\nMenjaga kebugaran tubuh\r\nMeningkatkan intensitas bunyi\r\nJadikan burung rajin manggung','627899dfb9c35.jpg',0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'Budi Santoso','0812345678912','budisantoso@gmail.com','$2a$12$REMBAXzr2Sc2nXOQ6bHceuzqfR4WvwgrcCm7mP/BOwhSZLIU6ieOe','Kota Bandung','penjual'),(7,'Irham Tri Ahmadi','0881023409290','nameoriginal474@gmail.com','$2y$10$xiiJlzwssQ0h.7BWpaJ4nOwH/1zms4Vmdc64ghlsaj16GA6Dd6BQW','Bandung','pembeli'),(17,'Andi','083820189813','namaasli644@gmail.com','$2y$10$Hr2dUgGq9Z7qKgFM1QyMHeuYK/5LjbV5zjiutZayFGvs0NgLjDvla','Jakarta','pembeli'),(24,'Rudi Salim','08823122144','rudisalim@gmail.com','$2y$10$D58ilDj3uAAQ2hUMsUgqJOURbVEPrQd5T0HotUfwnX4/FmUB2uxX6','Jakarta','penjual'),(25,'Rudi Salim','08823122144','rudisalim@gmail.com','$2y$10$TgKXvAkhLtcFlKhc/6zni.xosW8/t7in30jXAz2RjApRCf3Uu/nL6','Jakarta','pembeli');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER after_users_insert
AFTER INSERT
ON users FOR EACH ROW
BEGIN
    IF NEW.status = 'pembeli' THEN
        INSERT INTO pembeli(id_users)
        VALUES(new.id);
    END IF;
    IF NEW.status = 'penjual' THEN
        INSERT INTO penjual(id_users)
        VALUES(new.id);
    END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-11 17:23:13
