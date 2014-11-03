-- MySQL dump 10.15  Distrib 10.0.13-MariaDB, for Linux (i686)
--
-- Host: localhost    Database: tst_uji
-- ------------------------------------------------------
-- Server version	10.0.13-MariaDB-log

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
-- Table structure for table `tbl_akta_perusahaan`
--

DROP TABLE IF EXISTS `tbl_akta_perusahaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_akta_perusahaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `nomorakta1` varchar(50) DEFAULT NULL,
  `tanggal1` date DEFAULT NULL,
  `notaris1` varchar(50) DEFAULT NULL,
  `nomorakta2` varchar(50) DEFAULT NULL,
  `tanggal2` date DEFAULT NULL,
  `notaris2` varchar(50) DEFAULT NULL,
  `fileakta1` varchar(50) DEFAULT NULL,
  `fileakta2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_akta_perusahaan_tbl_users_FK` (`username`),
  CONSTRAINT `tbl_akta_perusahaan_tbl_users_FK` FOREIGN KEY (`username`) REFERENCES `tbl_users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_akta_perusahaan`
--

LOCK TABLES `tbl_akta_perusahaan` WRITE;
/*!40000 ALTER TABLE `tbl_akta_perusahaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_akta_perusahaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ijin_perusahaan`
--

DROP TABLE IF EXISTS `tbl_ijin_perusahaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ijin_perusahaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `nomorsurat_tdp` varchar(50) DEFAULT NULL,
  `instansipemberi_tdp` varchar(50) DEFAULT NULL,
  `berlakusampai_tdp` varchar(50) DEFAULT NULL,
  `kualifikasi_tdp` varchar(50) DEFAULT NULL,
  `klasifikasi_tdp` varchar(50) DEFAULT NULL,
  `upload_tdp` varchar(50) DEFAULT NULL,
  `nomorsurat_siup` varchar(50) DEFAULT NULL,
  `instansipemberi_siup` varchar(50) DEFAULT NULL,
  `berlakusampai_siup` varchar(50) DEFAULT NULL,
  `kualifikasi_siup` varchar(50) DEFAULT NULL,
  `klasifikasi_siup` varchar(50) DEFAULT NULL,
  `upload_siup` varchar(50) DEFAULT NULL,
  `nomorsurat_siujk` varchar(50) DEFAULT NULL,
  `instansipemberi_siujk` varchar(50) DEFAULT NULL,
  `berlakusampai_siujk` varchar(50) DEFAULT NULL,
  `kualifikasi_siujk` varchar(50) DEFAULT NULL,
  `klasifikasi_siujk` varchar(50) DEFAULT NULL,
  `upload_siujk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_ijin_perusahaan_tbl_users_FK` (`username`),
  CONSTRAINT `tbl_ijin_perusahaan_tbl_users_FK` FOREIGN KEY (`username`) REFERENCES `tbl_users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ijin_perusahaan`
--

LOCK TABLES `tbl_ijin_perusahaan` WRITE;
/*!40000 ALTER TABLE `tbl_ijin_perusahaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_ijin_perusahaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pemilik_perusahaan`
--

DROP TABLE IF EXISTS `tbl_pemilik_perusahaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pemilik_perusahaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomorktp` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_pemilik_perusahaan_tbl_users_FK` (`username`),
  CONSTRAINT `tbl_pemilik_perusahaan_tbl_users_FK` FOREIGN KEY (`username`) REFERENCES `tbl_users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pemilik_perusahaan`
--

LOCK TABLES `tbl_pemilik_perusahaan` WRITE;
/*!40000 ALTER TABLE `tbl_pemilik_perusahaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pemilik_perusahaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pengurus_perusahaan`
--

DROP TABLE IF EXISTS `tbl_pengurus_perusahaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pengurus_perusahaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomorktp` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_pengurus_perusahaan_tbl_users_FK` (`username`),
  CONSTRAINT `tbl_pengurus_perusahaan_tbl_users_FK` FOREIGN KEY (`username`) REFERENCES `tbl_users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pengurus_perusahaan`
--

LOCK TABLES `tbl_pengurus_perusahaan` WRITE;
/*!40000 ALTER TABLE `tbl_pengurus_perusahaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pengurus_perusahaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_utama_perusahaan`
--

DROP TABLE IF EXISTS `tbl_utama_perusahaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_utama_perusahaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `namaperusahaan` varchar(50) DEFAULT NULL,
  `npwp` varchar(50) DEFAULT NULL,
  `nomorpkp` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `propinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `kodepos` varchar(50) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `mobilephone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `kantorcabang` tinyint(4) DEFAULT '0',
  `websiteutama` varchar(50) DEFAULT NULL,
  `alamatutama` varchar(50) DEFAULT NULL,
  `teleponutama` varchar(50) DEFAULT NULL,
  `faxutama` varchar(50) DEFAULT NULL,
  `emailutama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_utama_perusahaan_tbl_users_FK` (`username`),
  CONSTRAINT `tbl_utama_perusahaan_tbl_users_FK` FOREIGN KEY (`username`) REFERENCES `tbl_users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_utama_perusahaan`
--

LOCK TABLES `tbl_utama_perusahaan` WRITE;
/*!40000 ALTER TABLE `tbl_utama_perusahaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_utama_perusahaan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-27 15:14:21
