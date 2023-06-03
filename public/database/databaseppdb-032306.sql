-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: db_ppdb
-- ------------------------------------------------------
-- Server version 	5.5.5-10.4.11-MariaDB
-- Date: Sat, 03 Jun 2023 11:21:00 +0700

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `siswa`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tahun_pelajaran` varchar(10) NOT NULL,
  `id_jenjang` int(11) NOT NULL,
  `id_tahun` varchar(20) NOT NULL,
  `id_sekolah` int(3) NOT NULL,
  `tgl_pendaftaran` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `siswa` VALUES (1,'Siti Andis Nuswoputri','Perempuan','Tangerang','28/09/2010','3603206890910002','Perum Teratai Griya Asri Rt 18 Rw 04','','','','','Iis Isnawati','08111775315','','','0',1,'1',60,''),(2,'Putri Elisa','Perempuan','Tangerang','31/05/2010','3603287105100008','Kp. Dukuh Pinang','','','','','Warsiti','083852530931','3109073474','','0',2,'1',38,''),(3,'Jibril Ray Ruban','Laki-laki','Tangerang','05/10/2009','3603220510090006','Kp. Ancol Rt 07 Rw 03 Desa Ancol Pasir Kec. Jambe','','','','','Ayu Sri Wahyuni','085810211506','3090555630','','0',2,'1',54,''),(4,'Muhammad Nizam Usmanova','Laki-laki','Demak','25/09/2010','3321102509100004','Kelapa Dua Rt 01 Rw 04','','','','','Listiaroh','085218232366','','','0',1,'1',25,''),(5,'Nurul Iftitah','Perempuan','Tangerang','11/06/2009','3603285106090002','Kp Cibogo Kulon Rt 02 Rw 02 Kelapa Dua','','','','','Siti Maskamah','081315149346','','','0',1,'1',32,''),(6,'Muhammad Sultan Al Buchori','Laki-laki','Tangerang','25/03/2010','1671062503100009','Perum Teratai Griya Asri Rt 14 Rw 04','','','','','Nurhayati','082113983725','3101342313','','0',2,'1',76,''),(8,'Rif\'at Syarief Wibowo','Laki-laki','Tangerang','08/05/2010','3603202805100004','Perum Aster 2  Rt 3 Rw 04 Desa Caringin Legok','','','','','Suharyati','081280758598','','','0',1,'1',51,''),(9,'Restu Maulana','Laki-laki','Kebumen','02/11/2009','3305110211090001','Kp Babakan Rt 02 Rw 06 Desa Binong Kec. Curug','','','','','Iis Ismawati','085717013979','3094523712','','0',2,'1',85,''),(10,'Izzah Zayani','Perempuan','Tangerang','11/11/2009','3603205111090002','Perum Legok Indah Rt 002 Rw 12','','','','','RR. Sri Rejeki','089514525848','3095207662','','0',2,'1',77,''),(11,'Muhammad Dwi Aldiansyah','Laki-laki','Tangerang','01/06/2010','3603170107100005','Kp Babakan Rt 02 Rw 06 Desa Binong Kec. Curug','','','','','Icih Kunengsih','081381875932','','','0',1,'1',45,''),(12,'Abdul Hafif Saypullah','Laki-laki','Tangerang','10/10/2010','3603221010100003','Kp Babakan Rt 02 Rw 06 Desa Binong Kec. Curug','','','','','Aam','085211001099','','','0',1,'1',45,''),(13,'Habiburrohman Al Faqih','Laki-laki','Tangerang','21/07/2010','3603282107100001','Perum Dasan Indah Rt 03 Rw 020 ','','','','','Sri Nur Untung','081321063639','0103074995','','0',1,'1',32,''),(14,'Salsa Rahma Dewi','Perempuan','Tangerang','29/04/2010','3603286904100004','Kp Cibogo Wetan ','','','','','Hikmah Fusvita','089654052234','3107825055','','0',2,'1',72,''),(15,'Alvian Bintang Pradipta','Laki-laki','Tangerang','09/02/2010','3603200902100003','Perum Griya Permai Rt 02 Rw 06','','','','','Fatmaningrum','089607558611','0106055169','','0',1,'1',51,''),(16,'Niswatul Khasanah','Perempuan','Batang','05/01/2010','9101054501100001','Perumahan Makorem Legok Rt 7 Rw 2','','','','','Dewi Natalia Mayong','082248118309','3101284281','','0',1,'1',7,''),(17,'Jovano Eka Cahyo','Laki-laki','Tangerang','24/04/2014','3173012312091008','Cluster Puri Asih 2 Rt 4 Rw 02 Desa Serdang Wetan Kec. Legok','','','','','Eni Diniati','087780800111','','','0',1,'1',82,''),(18,'Abyan Adzuhri Ardiandari','Laki-laki','Bogor','13/04/2010','3603221304100002','Jln Tulip Rt 04 Rw 04 Desa Malangnengah Kec. Pagedangan','','','','','Rina Setyaningsih','081383545059','','','0',2,'1',29,''),(19,'Aiva Maliha Rosida','Perempuan','Tangerang','12/10/2009','3603205210090003','Kp Palasari Rt 09 Rw 01 Desa Palasari Kec. Tangerang','','','','','Widya Rahmi','085880997502','','','0',1,'1',65,''),(20,'Rosyila Rizqoillah','Perempuan','Tangerang','01/10/2010','3603204110100006','Cemara Asri Rt 1 Rw 08 Legok Legok','','','','','Wiharto','081283521116','','','0',1,'1',5,''),(21,'Livia Heriyanti','Perempuan','Tangerang','16/06/2010','3603205606100001','Kp Cadas Rt 01 Rw 04 ','','','','','Robiah','083896273712','','','0',1,'1',7,''),(22,'Radietia Saputra','Laki-laki','Tangerang','18/05/2010','3603201905100005','Kp Legok Rt 05 Rw 02','','','','','Siti Maesaroh','083893692033','0107817721','','0',2,'1',76,''),(23,'Desta Ardiyansyah','Laki-laki','Tangerang','04/10/2010','3603220410100001','Kp Cijantra Rt 003 Rw 002 Cijantra','','','','','Evi Mustika Sari','0895351881301','3101548023','','0',2,'1',78,''),(24,'Davinci Akbar Setiawan','Laki-laki','Tangerang','06/08/2010','3603200608100001','Jalan Cijauh','','','','','Kusmintarsih','087886441054','3108411831','','0',2,'1',76,''),(25,'Farand Wahyu Rajendra','Laki-laki','Jakarta','03/08/2010','3674020308100003','Perum Korem Rt 07 Rw 02 Legok','','','','','Lian Nur Laelani','085210415052','','','0',1,'1',17,''),(26,'Al Asyifa Azza Humaira','Perempuan','Tegal','28/09/2010','3328166809100003','Legok','','','','','Latipah','081236598752','3100228063','','0',2,'1',76,''),(27,'Kirana Febriani Andrian','Perempuan','Jakarta','03/02/2010','3171044302100001','Legok','','','','','Madusari','082111690669','3102864237','','0',2,'1',39,''),(28,'Muhammad Ikhsan','Laki-laki','Tangerang','22/04/2010','3603282204100004','Kp Angris Rt 04 Rw 009','','','','','Atik','081283853969','','','0',1,'1',34,''),(29,'Destari Anggraeni','Perempuan','Brebes','20/12/2009','3329096012090002','Kp Pabuaran Rt 03 Rw 02 Malangnengah ','','','','','Toripah','085771930413','0099161008','','0',1,'1',11,''),(30,'Siti Ainun Jamil','Perempuan','Tangerang','14/06/2010','3603205406100002','Kp Cirarab Curug RT 002 Rw 04 Palasari Legok','','','','','Eha Andriyani','082133625301','','','0',1,'1',66,''),(31,'Sindy Aulia Sari','Perempuan','Tangerang','24/03/2010','3603226403100001','Perum Bumi Jati Elok Rt 05 Rw 06 Malangnengah Pagedangan','','','','','Mega Wahyuni','085811399191','','','0',1,'1',11,''),(32,'Lutviatun Nury','Perempuan','Tangerang','20/08/2010','3603206066100002','Jalan Raya Legok Rt 02 Rw 01 Medang','','','','','Mida Sari','081377320376','0105666628','','0',1,'1',34,''),(33,'Muhammad Nasywan Hanan','Laki-laki','Tangerang','08/04/2010','3603220804100002','Kp Babakan timur Rt 03 Rw 06 Babakan legok','','','','','Miftahul Hasanah AR','0895335243315','3109648156','','0',2,'1',39,''),(34,'Daiva Rakha Adipramana','Laki-laki','Lebak','06/06/2010','3603200606100003','Jalan Raya Parung Panjang Rt 6 Rw 6 Caringin','','','','','Erwin Dwi Rahmawiyanti','082125095286','','','0',1,'1',13,''),(36,'Haura Chalizah Jinaan','Perempuan','Tangerang','26/10/2009','3603226610090001','Kp Dukuh Pinang Rt 002 Rw 003 ','','','','','Aan Andriyani','087808441443','','','0',1,'1',35,''),(37,'Ali Hanafi Alfaqih','Laki-laki','Tangerang','11/02/2010','3671021102100001','Kp Jati Rt 01 Rw 01 Desa Keroncong Jatiuwung','','','','','Endang Susilowati','082210887149','','','0',1,'1',68,''),(38,'Muhammad Raihan Akmal Darusalam','Laki-laki','Tangerang','06/03/2010','3671020603100014','Kp Jati Rt 01 Rw 01 Desa Keroncong Jatiuwung','','','','','Rosidah','081296577550','','','0',1,'1',94,''),(40,'Zahra Putri Widyanti','Perempuan','Tangerang','06/04/2010','3671024604100001','Kp Jati Rt 01 Rw 01 Desa Keroncong Jatiuwung','','','','','Indra Widyaningsih','08128401212','','','0',1,'1',84,'21/03/2022'),(41,'Mutia Kirana','Perempuan','Tangerang','16/06/2010','3603225602100003','Kp Bojong Nangka Rt 2 Rw 1 Medang Pagedangan','','','','','Iyah Yoheti','081806275696','0101110891','','0',1,'1',34,'25/03/2022'),(42,'Herlita Juniati','Perempuan','Jakarta','13/06/2010','3216065306100009','Perum Dasana Indah Blok Rt 002 Rw 16 Bojong Nangka','','','','','Apriyanti','081384629692','','','0',1,'1',32,'25/03/2022'),(44,'siti unajiatul muftihah','Perempuan','Tangerang','21/05/2010','3603206105100005','Kp PAlasari Rt 003 Rw 002','','','','','Siti Unayah','089684242755','','','0',1,'1',66,'25/03/2022'),(45,'darell uparengga putra ramadhan','Laki-laki','Tangerang','16/09/2009','3271011609090005','Kp. Kadaung','','','','','Yulianti Laelasari','','','','0',1,'1',7,'25/03/2022'),(46,'bagas eka saputra','Laki-laki','Jakarta','15/10/2009','3173051510091001','Perum Legok Permai Helliconia Rt 03 Rw 11 Legok-Tangerang','','','','','Nurlelah','081383527622','','','0',1,'1',5,'26/03/2022'),(47,'Cindy Amelia','Perempuan','Pandeglang','18/04/2016','3601316110090002','Legok Permai Rt 05','','','','','Baiyah','081314855389','','','0',1,'1',69,'26/03/2022'),(48,'Muhamad Rizki','Laki-laki','Tangerang','27/07/2010','3603222707100008','Kp Medang Rt 004/Rw 003','','','','','Sumiyati','08881635681','3106325979','','0',2,'1',54,'28/03/2022'),(49,'Nabil Althaf Fidiyanto','Laki-laki','Tangerang','01/10/2009','3603280110090003','Legok Permai Blok A1/F15 Rt 01 Rw 07','','','','','Warneti Nurlaelasari','081802161416','3091014444','','0',2,'1',76,'28/03/2022'),(50,'Naila Rama Angelica','Perempuan','Tangerang','27/06/2010','3171026706101002','Perum Legok Permai Heliconia Rt 02  ','','','','','Suci Rama Ningsih','081290609888','','','0',1,'1',5,'28/03/2022'),(51,'aira galih arumi','Perempuan','Tangerang','21/01/2010','3674026101100003','Kp palasari rt 003 rw 002 palasari','','','','','Darmawati','085774548829','0102325768','','0',1,'1',66,'28/03/2022'),(52,'Akmal Farid  Azzukhruf','Laki-laki','Tangerang','21/03/2010','3603202103100001','Kp Legok Rt 006 Rw 002 ','','','','','Asri Sholati','085939372518','3102862969','','0',2,'1',76,'28/03/2022'),(53,'ayu riana ramadani','Perempuan','Tangerang','21/08/2010','3603206108100001','Kp Legok Jalan hippel Rt 6 w 02','','','','','Hanatasya','081223113433','','','0',1,'1',5,'30/03/2022'),(54,'Akbar Yusuf Efendi','Laki-laki','Tangerang','22/02/2010','3603202202100005','Legok Permai Blok C1 D23','','','','','Ratna Sari Dewi','087881299718','','','0',1,'1',5,'30/03/2022'),(55,'Raditya Ramadhan','Laki-laki','Tangerang','10/09/2009','3603201009090001','Kp Manungung ','','','','','Iis','088219655956','','','0',1,'1',5,'30/03/2022'),(56,'Almaira Adeliana Putri','Perempuan','Tangerang','04/05/2010','3603284405100004','Kp Cicayur Curugsangereng','','','','','Tati Suryati','089628913391','','','0',1,'1',71,'30/03/2022'),(57,'Muhamad Reski','Laki-laki','Ciamis','05/11/2009','3207180511090003','Kp Cijantra','','','','','Ira Liani','081311094713','3091778381','','0',2,'1',76,'31/03/2022'),(58,'Adam Al Hakim','Laki-laki','Depok','17/06/2009','3276021706090001','Legok Permai Cluster Rt 2 Rw 15 ','','','','','Indah Lillah Sari','089688896486','3095561843','','0',2,'1',76,'31/03/2022'),(59,'Muhammad Risqullah','Laki-laki','Tangerang','14/02/2009','3603201412090004','Kp Manungung  Rt 003/006','','','','','Yulianti','083873599901','','','0',1,'1',5,'31/03/2022'),(60,'Widia Natalia','Perempuan','Tangerang','25/12/2009','3603206512090001','Kp Cirarab Curug','','','','','Linda Yustina','085719331944','','','0',1,'1',66,'31/03/2022'),(61,'Ahmad Rifki Hidayat','Laki-laki','Tangerang','26/02/2010','3603202602100003','Kp Manungtung  Rt 04/006','','','','','Heni','083841402256','','','0',1,'1',5,'31/03/2022'),(62,'Rifqi Fauzan','Laki-laki','Tangerang','24/03/2009','3603222403090005','Kp Carangpulang','','','','','Ida','082249788253','','','0',1,'1',5,'31/03/2022'),(63,'Rahma Maulydia','Perempuan','Tangerang','20/03/2010','3603286003100002','Perum Legok Permai Rt 02 rw 08','','','','','Meinawati Trisoedi Hastoeti','081386243569','','','0',1,'1',5,'31/03/2022'),(64,'Nabila Putri Andrian','Perempuan','Bogor','06/12/2009','3603204612090002','Kp. Bungaok Rt 03 Rw 01 Caringin','','','','','Rina Yulianti','081210074929','','','0',1,'1',12,'04/04/2022'),(65,'Syrin Oktaviana','Perempuan','Tangerang','10/10/2009','3603285010090005','Jln Swadaya Kelapa Dua','','','','','Nikmatun Nurkhasanah','0895337419733','','','0',1,'1',21,'04/04/2022'),(66,'agnia dwi novita','Perempuan','Jakarta','16/11/2009','3674025611090001','Perum MAkorem','','','','','Tri Yuliantina','085777987455','','','0',1,'1',17,'06/04/2022'),(67,'Arya Wijaya','Laki-laki','Tangerang','31/05/2008','3603223105080002','Kp Ciakar Rt 02 Rw 04 Desa Cicalengka','','','','','Nuryanih','081288953930','0085757512','','0',1,'1',73,'06/04/2022'),(68,'Diana','Perempuan','Tangerang','23/06/2010','3603206306100006','Kp Legok Rt 11 Rw 005','','','','','Devi Susanti','081212162248','','','0',2,'1',76,'06/04/2022'),(69,'Syafana Aulia Hanggoro','Perempuan','Tangerang','27/05/2010','3603286705100008','Perum Binong Permai Curug','','','','','Mualimah Rasto','085946045784','0108297981','','0',2,'1',85,'06/04/2022'),(70,'Arum cahaya putri','Perempuan','Karanganyar','19/03/2010','3313015903100003','Jalan Raya PLP','','','','','Lilis Saputri','085224803702','','','0',1,'1',59,'06/04/2022'),(72,'wahyu lingga permana','Laki-laki','Tangerang','22/03/2010','3603202203100003','Kp Manungtung  Rt 03/006','','','','','Yulianti','083894753313','','','0',1,'1',5,'06/04/2022'),(73,'Mohamad Deva Aivaro Augustin','Laki-laki','Tangerang','10/08/2010','3603201008100005','Kp Kemuning Rt 001 001 ','','','','','Siti Aolia','0857073417181','','','0',1,'1',41,'06/04/2022'),(74,'Fakhri Gunawan','Laki-laki','Tangerang','01/12/2009','3671090112090001','Kp Dahung 02 004 Panunggangan Barat','','','','','Sari Desriyani','0895606314083','0092187485','','0',1,'1',33,'06/04/2022'),(75,'qeyra adellya feyza tanjung','Perempuan','Garut','20/01/2010','3603196001100002','Perum Makorem','','','','','Mia Martina','087888163985','','','0',1,'1',17,'08/04/2022'),(77,'Muhammad Aqil Mustopa','Laki-laki','Tangerang','08/03/2009','3603280309090007','Kp Bojong Nangka','','','','','Dwi Lestari','085280480031','','','',1,'1',33,'11/04/2022'),(78,'Nabillah Nurillah','Perempuan','Tangerang','30/06/2010','3603207006100001','Kp Kadaung','','','','','Siti Holilah','083890035708','','','',1,'1',7,'12/04/2022'),(79,'Noval Ariyanto','Laki-laki','Tangerang','05/11/2010','45454545787874545121','Perum Griya Asri Legok','','','','','Herlina','08128144831','','','',1,'1',17,'12/04/2022'),(80,'Fitria Auffat Unnisa','Perempuan','Tangerang','09/09/2010','3603224909100004','Kp Manungtung','','','','','Ai Apipah','083854553859','','','',1,'1',5,'12/04/2022'),(85,'Nazwatul Aulia','Perempuan','Tangerang','10/12/2008','3603225012080006','Kp Dukuh Pinang Rt 04 Rw 03','','','','','Patimah','087875275671','3083220362','','',2,'1',38,'13/04/2022'),(86,'Muhamad Farhan Ramadhan','Laki-laki','Tangerang','30/08/2010','3603203008100002','Kp MAnungtung','','','','','Mariah','087781995988','','','',1,'1',5,'13/04/2022'),(87,'Muhammad Rafli Basyah','Laki-laki','Tangerang','03/02/2010','3603280302100002','Perumahan Cluster Mutiara Legok','','','','','Yusliana, AM.Pd','085717406350','','','',1,'1',53,'13/04/2022'),(88,'Muhammad Fathirachman','Laki-laki','Tangerang','03/04/2010','3603223004100002','Kp Rancagong','','','','','Yusi Nury Awani','081717160153','','','',1,'1',7,'16/04/2022'),(89,'Rafik Dipta Al Fajar Dewantara','Laki-laki','Tangerang','04/03/2010','3603200403100001','Perumahan Legok Permai','','','','','Virginadiandari Metasari','08559895682','','','',1,'1',7,'16/04/2022'),(90,'Fadlah Nafisah','Perempuan','Tangerang','26/07/2010','3603286607100002','Kp Bambu Rt 03 Rw 09','','','','','Avenita Mujanwati','0895342215257','','','',1,'1',32,'18/04/2022'),(91,'Bachti Fahrianto','Laki-laki','Tangerang','27/04/2008','3674012704080005','KP Dukuh Pinang','','','','','Puji Listriani','081386342550','','','',1,'1',35,'21/04/2022'),(92,'Muhammad El Fatir','Laki-laki','Tangerang','11/10/2009','3671031110090002','Batuceper','','','','','Rosmiati','085776967244','','','',1,'1',74,'11/05/2022'),(93,'Mella Frika Sari','Perempuan','Tangerang','22/05/2010','3603206205100002','Kp Kemuning','','','','','Asyanih','087878513081','','','',1,'1',67,'11/05/2022'),(94,'Raizy Aditya Baihaki','Laki-laki','Tangerang','04/03/2010','3603281901200001','Kp Carang Pulang','','','','','Sinta Diana','083811250122','3106974534','','',2,'1',38,'11/05/2022'),(95,'Mohamad Firjatullah','Laki-laki','Tegal','16/12/2009','3328091612090007','Jalan Raya Swadaya No 2 Kelapa Dua','','','','','Maslakhatun','088212001584','','','',1,'1',21,'14/05/2022'),(100,'gheysar Fariz Al-Gazy','Laki-laki','Tangerang','15/06/2010','3603201506100005','Perum Legok Indah','','','','','Lia Kamelia','085215634844','0101640284','','',2,'1',77,'18/05/2022'),(101,'Firliana Nisfu Arrohmah','Perempuan','Tegal','26/07/2010','3328016607100004','Gang Nurul Hidayah','','','','','Nurrrohmah','088212945061','','','',1,'1',71,'25/05/2022'),(102,'Syakira Azkiya Hamda','Perempuan','Tangerang','31/05/2010','3603207105100002','Kp Rancagong','','','','','Siti Rofiah','081285320209','','','',1,'1',51,'25/05/2022'),(103,'Dina Ayu Rosdiyana','Perempuan','Tangerang','08/03/2010','3603204803100005','Perum LEgok','','','','','Roseha','082112264634','','','',1,'1',51,'25/05/2022'),(104,'muhammad habibi qolbi','Laki-laki','Tangerang','09/11/2009','3603031012090001','pasir nangka tigaraksa','','','','','Siti sulaemiah','085893328971','','','',1,'1',83,'25/05/2022'),(105,'Aslamul Huda Rabbani','Laki-laki','Tangerang','10/03/2010','3671011003100001','legok permai','','','','','Ningrum baroroh','08988109805','','','',2,'1',40,'25/05/2022'),(106,'rizki putra aditya','Laki-laki','Tangerang','18/10/2009','3603281810090003','Cibogo wetan','','','','','siti hawa','081212880336','','','',1,'1',23,'25/05/2022'),(107,'Olivia Febiyanti','Perempuan','Tangerang','11/02/2010','3671095102100001','Kp Uwung Girang Cibodas Kota Tangerang','','','','','Fitriyati','085691913126','','','',1,'1',88,'30/05/2022'),(108,'Valery Rezita Dalimunthe ','Perempuan','Tangerang','28/09/2010','3603206809100005','Kp Blok Kalapa','','','','','Lia Yulianti','087871611354','','','',1,'1',81,'30/05/2022'),(109,'Khaira Raissa Gunawan','Perempuan','Tangerang','04/04/2010','3671114404100005','Hj Rasuna Said Pinang Kota Tangerang ','','','','','Indriyani','081288642425','','','',1,'1',17,'30/05/2022'),(110,'Bayu Badru Ridho','Laki-laki','Tangerang','05/06/2009','3603110506090008','Kp Dukuh Pinang','','','','','Ade Aisyah','081280373998','0095872349','','',2,'1',38,'30/05/2022'),(111,'Dinda Atahira Ardaido','Perempuan','Tangerang','10/05/2010','3674109500510008','Legok Permai','','','','','Hilda M Adhiani','081319755509','','','',2,'1',76,'30/05/2022'),(112,'Rara Amelia Ramadani','Perempuan','Tangerang','31/08/2010','3603207108100001','Kp Manungtung','','','','','Irna Wati','088291216678','','','',1,'1',5,'31/05/2022'),(113,'Ananda Rizqi Pratama','Laki-laki','Taraman','31/03/2010','3671073103100006','Kp Babakan Timur ','','','','','Nurul Fadilah Eka Saputri','081291577652','','','',1,'1',17,'31/05/2022'),(114,'Ikmam Mul Asfiya','Laki-laki','Pemalang','12/12/2009','3327041212090004','perum legok indah ','','','','','Tarminah','083877158305','3091639897','','',2,'1',76,'03/06/2022'),(115,'Achmad Radiansyah Ramadhani','Laki-laki','Tangerang','21/08/2009','3603282108090003','Kp Kelapa Dua','','','','','Muhdiyati','08818155389','','','',1,'1',21,'07/06/2022'),(116,'Muhamad Haikal Firdaus','Laki-laki','Tangerang','20/12/2009','3603192012090001','KP Serdang ','','','','','Titin Suhartini','081292605904','','','',1,'1',86,'10/06/2022'),(117,'Fadlan','Laki-laki','Tangerang','08/08/2009','3603200808090004','Kp Pasir Gaok','','','','','Nurhasanah','081213941167','','','',1,'1',65,'13/06/2022'),(118,'Amanda','Perempuan','Tangerang','24/01/2010','3603286401100005','Kp Cibogo Wetan','','','','','maswati','0895330507288','','','',1,'1',23,'17/06/2022'),(119,'Andika Febriawan','Laki-laki','Tangerang','13/01/2009','3603201302090003','Babakan','','','','','Anis Anisa','0812113423781','','','',1,'1',5,'17/06/2022'),(120,'Andika Permana','Laki-laki','Tangerang','14/12/2009','3603221412090006','sukabakti','','','','','Hen Hen Hendarsih','085718531650','3092932732','','',2,'1',87,'17/06/2022'),(121,'Muhammad Farel Ramadhan Saputra','Laki-laki','Jakarta','02/09/2010','3674020209101001','Perum Makorem','','','','','Anipah','082311728797','3104343357','','',2,'1',76,'29/06/2022'),(122,'Aurelia Maritza Putri','Laki-laki','Jakarta','18/03/2010','7347464633546678','Jalan Manungtung','','','','','sofi','09889888888','0104542177','','',1,'1',51,'29/06/2022'),(123,'Muhammad Akromul Hidayat','Laki-laki','Tangerang','03/05/2010','3603280305100006','K. Bambu','','','','','Muanah','089617725306','0108737858','','',1,'1',32,'29/06/2022'),(124,'Mutiara Julia Rahmawati','Perempuan','Tangerang','11/07/2010','3603205107100005','Rancagong','','','','','Arwati','081380221499','0106304510','','',1,'1',51,'29/06/2022'),(125,'Cikal nur Arshavin Bakhtiar','Laki-laki','Tangerang','08/12/2009','3603200812090001','Perum Pesona Legok','','','','','Hamidah','081298721080','','','',2,'1',77,'29/06/2022'),(126,'Baiti Rahma','Perempuan','Tangerang','28/09/2010','3172046809101004','Legok Permai','','','','','Sahatun','','0103739674','','',1,'1',5,'29/06/2022'),(127,'Nadin Qoirina Mumtaza','Perempuan','Tangerang','24/03/2010','3603176403100002','Curug','','','','','Inayah Sholihah','081585965321','3106587673','','',2,'1',91,'29/06/2022'),(128,'Kartika Pebriyanti','Perempuan','Pandeglang','10/02/2010','3601145902100004','Kelapa Dua','','','','','Rohayati','083832947341','','','',1,'1',23,'29/06/2022'),(129,'Ahmad Fakhri Aryadillah','Laki-laki','Bekasi','13/07/2010','3216071307100009','Perum 1','','','','','Lilis Nurhayati Syarifah','088973673794','0109524723','','',1,'1',89,'30/06/2022'),(130,'Faisal Ar Rafi Ahmad','Laki-laki','Tangerang','23/12/2009','3603282312080003','Kp Cibogo Kulon','','','','','Ernawati','0895611451660','','','',1,'1',22,'30/06/2022'),(131,'Ervi Ajeng Nur Hafizah','Perempuan','Tangerang','11/11/2009','3603205111090001','Kp babakan tengah','','','','','Eti Safitri','082311431540','3097803072','','',2,'1',76,'05/07/2022'),(132,'Olivia','Perempuan','Tangerang','27/06/2010','3603226706100004','Kp Bojong Nangka','','','','','Indrawan','081572329594','0101342045','','',1,'1',32,'05/07/2022'),(133,'Khalafa Alam Semesta','Laki-laki','Tangerang','03/07/2010','3603200307100001','Kp cirarab','','','','','Siti Zahroh','085814057794','0106181388','','',1,'1',90,'05/07/2022'),(134,'Deska Liana','Laki-laki','Tangerang','10/12/2009','3603205112090004','Teratai Griya Asri','','','','','Endang Nuryati','081387602214','3095123974','','',2,'1',76,'05/07/2022'),(135,'Siti Aulia Bilkis','Perempuan','Tangerang','20/10/2010','3603286011100004','Kp rumpak sinang','','','','','Siti Mabruroh','085710714963','','','',1,'1',92,'05/07/2022'),(136,'Jaylani Akbar','Laki-laki','Tangerang','16/10/2010','3603281610100002','Kp Angris','','','','','Anisa','083805083652','0104285997','','',1,'1',17,'06/07/2022'),(137,'Firda Dinda Farah','Perempuan','Tangerang','19/03/2010','3327135903100004','Kp Bojong Nangka','','','','','Runiah','085700231463','','','',1,'1',17,'06/07/2022'),(138,'Jihan Aulya putri','Perempuan','Jakarta','10/09/2009','31755015009090001','Perum Teratai','','','','','Istiani','081384751910','0095257645','','',2,'1',76,'06/07/2022'),(139,'Nazwa Solihatul Anam','Perempuan','Tangerang','21/09/2010','3603206109100001','jalan babakan santri','','','','','Nuraeni','085773289941','3108543827','','',2,'1',39,'06/07/2022'),(140,'Nor Kasih Nadya','Perempuan','Pamekasan','10/10/2009','3529105010090002','Kp Medang','','','','','Nor Imamah','085716521421','','','',1,'1',17,'13/07/2022'),(141,'Muhamad Rehan','Laki-laki','Tangerang','06/04/2010','3603220604100002','Kp  Angris','','','','','Emin','085893112600','0108876035','','',1,'1',17,'13/07/2022'),(142,'Jalaludin Alfarizi','Laki-laki','Tangerang','25/05/2010','3603222505100003','Kp Angris','','','','','Aminah','089512229713','','','',1,'1',17,'13/07/2022'),(143,'Muhammad Fathan Ali Ghufron','Laki-laki','Tangerang','26/10/2009','87344757874878743','Jalan Raya Legok ','','','','','Maya Namayanti','0895636972289','','','',1,'1',17,'13/07/2022'),(144,'Ahmad Ilham Fadhillah','Laki-laki','Tangerang','05/05/2010','3603280505100008','Dasana Indah Blok SD 4','','','','','Imas Nuryani','083829826026','','','',1,'1',32,'13/07/2022'),(145,'Malika Aulia Puspita','Perempuan','Tangerang','12/03/2010','3603205203100002','Kedaung','','','','','Uju Juhaeni','081287938728','','','',1,'1',59,'13/07/2022'),(146,'Muhamad Zulhat Al Rofikal','Laki-laki','Pemalang','26/03/2008','3327042603080003','Perum Legok Indah','','','','','Siti Nurjanah','083804053830','','','',1,'1',93,'13/07/2022'),(147,'Adila isnaini','Perempuan','Tangerang','20/12/2010','3603206012100002','Kp Dukuh Mangga Rt 012 Rw 03','','','','','Hadijah','085719794830','3102765076','','',2,'4',39,'04/12/2022'),(150,'Nayla hidaytul adzkia','Perempuan','Tangerang','09/05/2011','3603204905110001','Kp.Babakan Barat RT.002/001','','','','','Siti Choeriyah','087718851437','3110968405','','',2,'4',76,'16/01/2023'),(151,'Ririn Aulia Zahra','Perempuan','Tangerang','25/03/2011','3603206503110002','Kp.Bojong RT.003/002','','','','','Dina','083893948642','0112919530','','',1,'4',67,'16/01/2023'),(152,'Rasya Devanul Hakim','Laki-laki','Tangerang','23/03/2011','3603222303110001','Kp.Pugur Lengkong Kulon RT.001/002','','','','','Devi Apriyanti','083113413418','0112415247','','',1,'4',67,'16/01/2023'),(153,'Khalid Pura Salsabillah','Laki-laki','Tangerang','06/04/2011','3603220604110005','Medang Lestari Blok.B2/K26 Jl. Alam Raya RT.03/12','','','','','Hariyati','081314015059','1234567891','','',1,'4',76,'16/01/2023'),(154,'Dini Yanti','Perempuan','Tangerang','09/12/2010','3603204912100002','Kp.Babakan Santri RT.001/004','','','','','Patimah','081213918748','1234567891','','',1,'4',76,'16/01/2023'),(155,'Mimbi Aulia','Perempuan','Tangerang','18/06/2011','3603205806110003','Kp,palasari kec legok tangerang 002/002','','','','','Supiyanti','089630549607','1234567891','','',1,'4',66,'16/01/2023'),(156,'Bilqis Rihadatulawailia','Perempuan','Tangerang','26/01/2011','3603206701110001','Kp.Bungaok RT.001/003','','','','','Sifa Fauziah','083891950739','1234567891','','',1,'4',41,'16/01/2023'),(157,'Khalifah Daniswara','Perempuan','Tangerang','26/12/2010','123456789101112131','Cluster Mutiara Legok Blok.C3 No.03 RT.003/007','','','','','Linda Sari','08871794135','0123456789','','',1,'4',12,'16/01/2023'),(158,'Arhab Barran Nick','Laki-laki','Jakarta','23/09/2011','3175062309111013','Perum Legok Permai Blok.H1 G7 RT.001/011','','','','','Wina Riningsih','082110634434','1234567891','','',2,'4',76,'16/01/2023'),(159,'Nurul Maulida','Perempuan','Tangerang','06/02/2012','3603204602120006','Kp.Bungaok RT.004/002','','','','','Siti Nur Fatonah','089655089193','1234567891','','',2,'4',96,'16/01/2023'),(160,'Adrian Dhani Camil','Laki-laki','Bekasi','12/10/2010','3603201210100008','Kp.Bungaok Lembur RT.004/002','','','','','Ulan Sari','088297691590','1234567891','','',1,'4',13,'16/01/2023'),(161,'Muhamad Reza Indrapriana','Laki-laki','Serang','13/02/2011','3604251302110001','Jalan Khimas Hasyim No 56 Babakan Legok','','','','','Neni Indrawati','08128245104','8999999999','','',2,'4',97,'14/02/2023'),(162,'Rasya Muhammad Athaya','Laki-laki','Tangerang','08/10/2011','3603200810110003','Perum Teratai Griya Asri e6/2 legok','','','','','Emi Meisari','082299263387','7878778787','','',2,'4',76,'14/02/2023'),(163,'Sabila Syawaliah','Perempuan','Tangerang','27/09/2011','3671096709100001','Kp Uwung Girang','','','','','Desi Riyana','085891989875','9867768787','','',1,'4',88,'14/02/2023'),(164,'Silvia Vinesha','Perempuan','Tangerang','01/02/2011','3603204102110003','Kp. Bungaok','','','','','Euis Dewi Sartika','085811432560','0112762958','','',1,'4',12,'14/02/2023'),(165,'Ahmad Hijaji','Laki-laki','Jakarta','16/11/2010','3174051611101001','Kp. Manungtung','','','','','Widian','085218932524','9898989898','','',2,'4',76,'14/02/2023'),(166,'Raisya Putri Ramadani','Perempuan','Brebes','23/07/2012','3329021508130004','Kp Manungtung  Rt 002 Rw 01 ','','','','','Rani Ramadani','085210765097','8989776787','','',1,'4',5,'14/02/2023'),(167,'Sabriatu Zahra','Perempuan','Tangerang','27/11/2010','3603206711100003','Kp Manungtung  Rt 002 Rw 01 ','','','','','Sri Susanti','089515751857','9898989898','','',2,'4',76,'14/02/2023'),(168,'Anita Syakila Widiyanti','Perempuan','Tangerang','11/08/2011','3603285108110002','Kp Dukuhpinang','','','','','Muryanti','088213705411','8802909011','','',2,'4',76,'14/02/2023'),(169,'Muhamad Rizky','Laki-laki','Tangerang','14/04/2011','3603201404110004','Kp Legok Rt 5 Rw 02','','','','','Leni','0895331241021','','','',2,'4',76,'11/04/2023'),(170,'Alhazmi Attaqillah','Laki-laki','Tangerang','01/03/2011','3603200103110004','Perum Legok Pemai','','','','','Upit Sri Rahajeng','087771198728','','','',1,'4',98,'11/04/2023'),(171,'Excell Gunawan Al Hafiz','Laki-laki','Tangerang','14/12/2010','3671091412100004','Perum Legok Permai Rt 01 Rw 08','','','','','Yuniar Ulda Sari','081947690495','','','',1,'4',5,'11/04/2023'),(172,'Muhammad Aldi Fachrian','Laki-laki','Tangerang','18/09/2010','3671061809100002','Perum LEgok Permai  Rt 03 Rw 011','','','','','Wiwi Kartikasari','081294662616','','','',1,'4',5,'11/04/2023'),(173,'Achmad Rafi Bahtiar','Laki-laki','Brebes','09/09/2011','3603200909110003','Perum Teratai Griya','','','','','Sholihatun','081318494296','','','',2,'4',76,'11/04/2023'),(174,'Afrizelia Titin Syabila','Perempuan','Tangerang','02/02/2011','3603204202110004','Kp Babakan Tengah','','','','','Riza Romika','082246814690','','','',2,'4',39,'11/04/2023'),(175,'Akhdan Latif Azizan','Laki-laki','Tangerang','11/04/2011','3603201104110004','Perumahan Legok Permai Blok A1/c4','','','','','Fitri Wulandari Santoso','081317805491','0116917403','','',1,'4',5,'11/04/2023'),(176,'Nabil Mauluduhuddin Ramadhan','Laki-laki','Tangerang','29/08/2011','3603202908110001','Jalan Raden Ki Mas Hasyim Rt 2 Rw 3','','','','','Leni Lusiana','081281989905','','','',2,'4',39,'11/04/2023'),(177,'Rizik Al Zukhruf ','Laki-laki','Bogor','02/07/2011','3201200207110001','Kp Bungaok Rt 05 Rw 01','','','','','Isnawati','0895423475122','0118442752','','',1,'4',13,'11/04/2023'),(178,'Airis Nurfadillah','Perempuan','Tangerang','03/03/2011','3603204303110001','Kp Dukuh Pete Rt 013 Rw 03','','','','','Sri Mulyati','081281608668','','','',2,'4',39,'11/04/2023'),(179,'Nurazizah','Perempuan','Tangerang','26/09/2011','3603206609110001','Kp Cadas Rt 01 Rw 04','','','','','Elah','087770607165','','','',1,'4',7,'11/04/2023'),(180,'Devita Aulia Utami','Perempuan','Tangerang','08/12/2010','3603204812100003','Kp Dukuh Manggah Rt 014 Rw Rw 03','','','','','Hermawati','085881732886','','','',2,'4',76,'11/04/2023'),(181,'Khaerani Afifah','Perempuan','Tangerang','18/08/2010','3671095808100003','Perum Legok Permai Blok C1H1 Rt 01 Rw 08','','','','','Jiyem','081287824453','','','',2,'4',76,'11/04/2023'),(182,'Faiz Mahardika Saputra','Laki-laki','Tangerang','25/01/2011','3603202501110001','Perum LEgok Indah Rt 03 Rw 12','','','','','Budi Hastuti','085772881322','0115740298','','',2,'4',77,'11/04/2023'),(183,'Nurul Qurrota Aiyn','Perempuan','Tangerang','14/06/2011','3603205406110002','Kp Cadas Rt 02 Rw 03 No 159','','','','','Mimin Asminah','087805657330','0118150442','','',1,'4',7,'11/04/2023'),(184,'Mukhammad Malik Akbar Wibowo','Laki-laki','Tangerang','05/12/2010','3603200512100005','Perum Teratai Griya Asri Blok C2 No 4 Legok Rt 20 Rw 04','','','','','Any Siswandari','081281280836','','','',2,'4',76,'11/04/2023'),(185,'Aisyaharra Dwi Elmaira','Perempuan','Jakarta','19/10/2010','3171075910101002','Kp Bojong Indah ','','','','','Sopiyah','081284959747','','','',1,'4',67,'11/04/2023'),(186,'Fazri Amanulloh','Laki-laki','Tegal','06/01/2011','3328130601110001','Kp Carang Pulang','','','','','Tarisah','','','','',1,'4',17,'12/04/2023'),(187,'Syafri Rachmat Maulana','Laki-laki','Tangerang','22/09/2011','3603282209110008','Kp Cibogo Kulon Kav. Kelapa Dua ','','','','','Suleha','085782553779','','','',1,'4',22,'12/04/2023'),(188,'Ellen Jesica ','Perempuan','Tangerang','19/11/2011','3603205911110004','Kp Dukuh Mangga ','','','','','Marhamah','081574610696','','','',1,'4',41,'12/04/2023'),(189,'Rapa Maulana','Laki-laki','Tangerang','07/07/2010','3603200707100007','Kp Dukuh Mangga ','','','','','Yusniah','083819985331','','','',1,'4',41,'12/04/2023'),(190,'Elysia Fatayana Nadjah','Perempuan','Tangerang','15/01/2011','3603205501110001','Perum Teratai Griya','','','','','Siti Asiyah','087874429637','','','',2,'4',76,'12/04/2023'),(191,'Barda Sutaji','Laki-laki','Tangerang','18/10/2011','3603201210110003','Kp Kemuning Rt 02 Rw 01','','','','','Nengsih','083893229977','','','',1,'4',67,'12/04/2023'),(192,'Lulu Cahya Nirpana','Perempuan','Tangerang','04/09/2011','3603200810090001','Kp Cadas Rt 01 Rw 04','','','','','Ruminah','081383235450','0114927316','','',1,'4',7,'12/04/2023'),(193,'Talitha Akila Kinasih','Perempuan','Tangerang','27/08/2010','3671096708100002','Perum Bumi Jati Elok','','','','','Mita Kristanti','081286337857','','','',2,'4',76,'12/04/2023'),(194,'Kania Putri Ramadhani','Perempuan','Tangerang','17/08/2011','3603205708110007','Perum Legok Permai Blok C1C No 11 Rt 02 Rw 8','','','','','Maemunah','081280241617','','','',1,'4',5,'12/04/2023'),(195,'Siti Nur Azizah','Perempuan','Jakarta','26/01/2011','3175106601111005','Kp Babakan Santri Rt 02 Rw 07','','','','','Suhiroh','088210543148','3113764525','','',2,'4',76,'12/04/2023'),(196,'Acmad Rafi Yanuar','Laki-laki','Tangerang','03/01/2011','3172012301111005','Perum Legok Permai Blok C.I/C.10 Rt 002 Rw 008','','','','','Sumarni','085211848708','','','',1,'4',5,'13/04/2023'),(197,'Wizdan Akmal Muklis','Laki-laki','Tangerang','09/12/2010','3603200912100002','Kp Manungtung Rt 04 Rw 06','','','','','Wiwin Ardiani','089623294590','','','',1,'4',5,'13/04/2023'),(198,'Muhamad Diaz Rafky Noviansyah','Laki-laki','Tangerang','12/11/2010','3671111211100005','Perum Bumi Jati Elok Blok B7/8 Malangnengah','','','','','Yurnida Tanti','081381182104','','','',1,'4',11,'13/04/2023'),(199,'Putri Nurma Ayu','Perempuan','Majalengka','08/11/2010','3674024811100001','Perum Makorem Legok','','','','','Neng Nur Linda','081383438250','','','',1,'4',99,'13/04/2023'),(200,'Chelsea Aurelia Ramadhan','Perempuan','Tangerang','14/08/2011','3603175308110001','Perum Legok Permai Blok H1 G 6','','','','','Mela Nurmalia','082111423634','','','',2,'4',76,'13/04/2023'),(201,'Merlinda Sari','Perempuan','Tangerang','05/12/2011','122454645454','Kp Dukuh Pete','','','','','Siti Winda','082278158608','','','',2,'4',39,'13/04/2023'),(202,'Ramdhan Fidillah Saputra','Laki-laki','Tangerang','01/08/2011','36710901081100003','Perum Legok Indah','','','','','Fitri Wijiarsi','082137120566','','','',1,'4',51,'13/04/2023'),(203,'Vita Syakirah Trista Putri Irwanto','Perempuan','Tangerang','23/05/2011','3603286305110001','Kp bojong rt 03 rw 01','','','','','Rosita','081296696617','','','',1,'4',67,'13/04/2023'),(204,'Mizazka Fidelya Duatiz','Perempuan','Tangerang','26/09/2010','3671096609100004','Perum Legok Permai','','','','','Endang Maiharsi','081287597778','','','',2,'4',76,'13/04/2023'),(205,'Abdan Syukron','Laki-laki','Tangerang','08/06/2011','3603170806110001','Perum Pesona Legok Blok C No 21','','','','','Megawati','088976522180','','','',2,'4',39,'13/04/2023'),(206,'Khansa Qias Danisa','Perempuan','Kuningan','17/07/2011','3603204205060002','Perum Legok Indah','','','','','Eri Surahmi','','','','',2,'4',76,'13/04/2023'),(207,'Ahmad Fauji','Laki-laki','Tangerang','02/12/2010','3603200212100008','Kp Manungtung Rt 04 Rw 06','','','','','Yayah','085817496297','','','',1,'4',5,'13/04/2023'),(208,'Zahra Aulia Rizqia Siddik','Perempuan','Karawang','29/09/2010','3671096909100006','Jalan Kelapa Hibrida Barat II Blok GA3 No 28 Gading Rt 01 Rw 04','','','','','Riska Rizqi Andriani','08159421349','','','',1,'4',25,'13/04/2023'),(209,'Keyla Salsabila Irawan','Perempuan','Tangerang','24/06/2011','3603206406110001','Perumahan Islamic  Babakan','','','','','Okta Rita Mayasari','082114824511','','','',1,'4',41,'13/04/2023'),(210,'Stevani Putri Amelia','Perempuan','Tangerang','13/06/2011','3603205306120006','Kp Legok  rt 08 rw 02','','','','','Neni Septiani','082138649957','','','',2,'4',76,'13/04/2023'),(211,'Riska Zian Hidayat','Perempuan','Tangerang','01/01/2011','3603204101110004','Kp Kelapa Dukuh','','','','','Rosita','081280190557','','','',1,'4',6,'13/04/2023'),(212,'Debby Allisyah','Perempuan','Tangerang','26/07/2010','3603206607100002','Kp Dukuh Pete','','','','','Yati','081297110252','','','',1,'4',5,'13/04/2023'),(213,'Dina Febriana','Perempuan','Tangerang','11/02/2011','3603225102110002','Kp Cijantra','','','','','Siti Khodijah','08994573868','','','',2,'4',78,'13/04/2023'),(214,'Dwina Aqilah','Perempuan','Bogor','19/02/2011','3271065902110006','Manungtung','','','','','Neneng Suningsih','','','','',1,'4',5,'15/04/2023'),(215,'Anggi Shalsa Yana Kartinal','Perempuan','Tangerang','13/09/2011','3603205309110002','Kp Kemuning Rt 01 ','','','','','Yeni','082114833260','','','',1,'4',7,'17/04/2023'),(216,'Fauzan Abid Bramantyo','Laki-laki','Tangerang','10/11/2010','3603201911100002','Perum Griya Curug','','','','','Asmawati','085284881852','','','',2,'4',29,'17/04/2023'),(217,'Ahmad Ikhsan Madesha','Laki-laki','Majalengka','23/09/2011','3210082309110001','Perum Griya Permai Blok H1 No 3','','','','','Wawat Susilawati','085212444717','0117509894','','',1,'4',13,'02/05/2023'),(218,'Keisha Rayyan','Laki-laki','Purworejo','10/06/2011','3306021006110001','Kp Bojong Nangka Kel. Bojong Nangka','','','','','Ari Essanti','085212372725','','','',1,'4',100,'02/05/2023'),(219,'Eep Saepullah Yusuf','Laki-laki','Tangerang','15/03/2011','3603181503110002','Cluster Mutiara Legok Rt 02 Rw 07 ','','','','','Arum Sari','081314541198','','','',2,'4',76,'08/05/2023'),(220,'Artur Yandika Azhar','Laki-laki','Tangerang','08/04/2011','3603280804110003','Cluster Mutiara Legok','','','','','Atika Yuanita','083847136507','','','',1,'4',33,'08/05/2023'),(221,'Farda Haykal Musyafa','Laki-laki','Tangerang','24/09/2010','3603202409100005','Kemuning','','','','','Sari Rahayu','082211862928','','','',1,'4',53,'08/05/2023'),(222,'Davian Kurniawan Mukhtar','Laki-laki','Tangerang','03/01/2011','3603200301120004','Perum Graha Citra Palasari Blok A7 No 21 001/005','','','','','Windi Lestari','087772911574','0111763683','','',1,'4',65,'08/05/2023'),(223,'Syahdan Hafidz','Laki-laki','Tangerang','02/06/2011','3603030206110006','Perum Villa Pasirnangka','','','','','Ika Mustikawati','085213410508','0118972769','','',1,'4',83,'08/05/2023'),(224,'Nuri Maulida','Perempuan','Tangerang','11/10/2010','3603225110100004','Kp Cijantra 004/00','','','','','Holilah','083897093913','','','',2,'4',78,'19/05/2023'),(225,'Robywan Wijaya Kusuma','Laki-laki','Tangerang','18/02/2011','3674021802110001','Makorem ','','','','','Ewi Srinovita','085770077547','','','',1,'4',101,'19/05/2023'),(226,'Siti Dahria Evrillyansyah','Perempuan','Tangerang','24/04/2011','3671026404110011','Kp Rawacana 03/03 ','','','','','Khomsah','085770412537','','','',1,'4',102,'19/05/2023'),(227,'Arfan Alfarezi Ramadhani','Laki-laki','Tangerang','04/08/2011','3603280408120005','Jalan Swadaya Kelapa Dua Rt 02 Rw 04 Kel','','','','','Intan Irnawati','085894658906','','','',1,'4',103,'20/05/2023'),(228,'Farid Fahri','Laki-laki','Tangerang','06/03/2011','3526060603110001','Kp Dukuh Pete','','','','','Masripah','081703253788','','','',2,'4',39,'29/05/2023'),(229,'Bagus Putra Kustoro','Laki-laki','Cilacap','04/09/2010','3301130409100002','Legok Permai','','','','','Muniroh','087786458801','','','',1,'4',5,'29/05/2023'),(230,'Ardabilly Alaraisy ','Laki-laki','Tangerang','26/12/2010','3671092612100006','uwung jaya','','','','','Rasmah','083847875963','','','',1,'4',104,'29/05/2023'),(231,'Muhammad Ihsanil Abdal','Laki-laki','Tangerang','25/06/2010','3603172506100002','Perum Aster Caringin ','','','','','Yunita Sari','081288797327','0117560756','','',1,'4',53,'29/05/2023'),(232,'Shireen Almeera Fitrianto','Perempuan','Tangerang','07/07/2011','3671084707110004','Jalan Mawar Sangiang Jaya Periuk','','','','','Agnes Veronica Dinga','081284498044','','','',1,'4',94,'29/05/2023'),(233,'Kiki Nurdiansyah','Laki-laki','Tangerang','05/12/2011','3603220512110003','Kp Cijantra','','','','','Susi Iryanti','081998154119','','','',2,'4',78,'29/05/2023'),(234,'Sabrina Putri Almuqiah','Perempuan','Tangerang','05/03/2011','3603204503110001','Perum Legok Indah','','','','','dewi','085951546778','','','',1,'4',106,'29/05/2023'),(235,'Rizky Arif Maulana','Laki-laki','Tangerang','29/06/2011','3603282906110001','Legok Permai','','','','','Ratna Sari','089627805037','1111360300','','',2,'4',76,'29/05/2023'),(236,'Agung Dwirahmadian Arib','Laki-laki','Tangerang','10/04/2010','3211201004100003','Kp Cisauk','','','','','Ira Maria Harti','085314756860','','','',1,'4',107,'29/05/2023'),(237,'Rhefatan Agies Sanjaya','Laki-laki','Tangerang','17/05/2010','3671071705100007','Kp Kamuning','','','','','Uen','083879399934','','','',1,'4',108,'29/05/2023'),(238,'Alfariz Febian Syah','Laki-laki','Tangerang','10/02/2011','3603201002110001','Perum Jati elok','','','','','Marlina','0895702154531','','','',1,'4',56,'29/05/2023'),(239,'Fadillah Zayyan','Laki-laki','Tangerang','25/12/2010','3603282512100002','Mutiara Legok Caringin','','','','','Nia Mursalina','085813080138','','','',2,'4',76,'29/05/2023'),(240,'Muhamad Najib Silvana','Laki-laki','Tangerang','18/09/2010','3603201809100002','Legok','','','','','Yanti Silva','082114135520','','','',1,'4',93,'03/06/2023');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `siswa` with 224 row(s)
--

--
-- Table structure for table `tbl_jenjang`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_jenjang` (
  `id_jenjang` int(11) NOT NULL AUTO_INCREMENT,
  `jenjang` varchar(2) NOT NULL,
  PRIMARY KEY (`id_jenjang`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_jenjang`
--

LOCK TABLES `tbl_jenjang` WRITE;
/*!40000 ALTER TABLE `tbl_jenjang` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_jenjang` VALUES (1,'SD'),(2,'MI');
/*!40000 ALTER TABLE `tbl_jenjang` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_jenjang` with 2 row(s)
--

--
-- Table structure for table `tbl_provinsi`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_provinsi` (
  `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_provinsi`
--

LOCK TABLES `tbl_provinsi` WRITE;
/*!40000 ALTER TABLE `tbl_provinsi` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_provinsi` VALUES (1,'ACEH'),(2,'SUMATRA UTARA');
/*!40000 ALTER TABLE `tbl_provinsi` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_provinsi` with 2 row(s)
--

--
-- Table structure for table `tbl_sekolah`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sekolah` (
  `id_sekolah` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenjang` int(11) NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sekolah`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sekolah`
--

LOCK TABLES `tbl_sekolah` WRITE;
/*!40000 ALTER TABLE `tbl_sekolah` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_sekolah` VALUES (4,1,'SDN Legok 2'),(5,1,'SDN Legok 3'),(6,1,'SDN Legok 4'),(7,1,'SDN Rancagong 1'),(8,1,'SDN Rancagong 2'),(9,1,'SDN Rancagong 3'),(10,1,'SDN Rancagong 4'),(11,1,'SDN Caringin 1'),(12,1,'SDN Caringin 2'),(13,1,'SDN Caringin 3'),(17,1,'SDN Bojongnangka'),(18,1,'SDN Cijantra 1'),(19,1,'SDN Cijantra 2'),(20,1,'SDN Cijantra 3'),(21,1,'SDN Kelapa Dua 1'),(22,1,'SDN Kelapa Dua 2'),(23,1,'SDN Kelapa Dua 3'),(24,1,'SDN Kelapa Dua 4'),(25,1,'SDN PB Kelapa Dua'),(26,1,'SDN PB Kelapa Dua 1'),(29,2,'MIS Nurul Ikhlas'),(32,1,'SDN Kampung Bambu 1'),(33,1,'SDN Kampung Bambu 2'),(34,1,'SDN Kampung Bambu 3'),(35,1,'SDN Gurubug 1'),(36,1,'SDN Gurubug 2'),(37,1,'SDN Gurubug 3'),(38,2,'MIS Nurus Shoba'),(39,2,'MIS Mursyidul Fauz'),(40,2,'MIS Merdeka Sekolah'),(41,1,'SDN Babakan'),(45,1,'SDN Binong 6'),(51,1,'SD Islam Nurul Hikmah'),(53,1,'SD Islam An Nabil'),(54,2,'MIS Miftahul Huda Medang'),(55,1,'SDN Cirarab 1'),(56,1,'SDN Cirarab 2'),(59,1,'SDN Komplek Api'),(60,1,'SD Sunan Bonang'),(61,1,'SD Mutiara Insani'),(62,1,'SDN Dirgantara'),(63,1,'SDN Serdang Wetan'),(64,1,'SDN Palasari 1'),(65,1,'SDN Palasari 2'),(66,1,'SDN Palasari 3'),(67,1,'SDN Kamuning'),(68,1,'SDN Jati 1 Kec. Jatiuwung'),(69,1,'SDN Cikokol 2'),(70,1,'SDN Cihuni 1'),(71,1,'SDN Cihuni 2'),(72,2,'MIS Ulul Albab Madani'),(73,1,'SDN Ciakar'),(74,1,'SDIT GUNUNG JATI'),(76,2,'MIN 5 Tangerang'),(77,2,'MIN 6 Tangerang'),(78,2,'MIS Mathlaul Huda Cijantra'),(79,2,'MIS Mathlaul Huda Rancagong'),(80,2,'MIS Mathlaul Huda Kamuning'),(81,1,'SD Ash-Shibgoh'),(82,1,'SDN Curug 1'),(83,1,'SDN Pasirnangka Tigaraksa'),(84,1,'SDN Daan Mogot Keroncong'),(85,2,'MIS Esa Nusa Islamic School'),(86,1,'SDN Serdang Kulon 2'),(87,2,'MIS Miftahul Khaer Sukabakti'),(88,1,'SDIT Amanah Uwung Jaya'),(89,1,'SDN Karawaci Baru 6'),(90,1,'SD Islam El Adabi'),(91,2,'MIS Al Layyinah '),(92,1,'SDN Rumpak Sinang'),(93,1,'SDN Legok 1'),(94,1,'SDN Taman Cibodas'),(95,1,'SDIT DARUL ISHLAH'),(96,2,'MI NURUL FALAH'),(97,2,'MIN 3 Serang'),(98,1,'SD Al Fityan'),(99,1,'SDN Pondok Jagung 1'),(100,1,'SDN Wunut Purworejo Jateng'),(101,1,'SDN 025 Palembang Ilir Barat '),(102,1,'SDN Rawacana Jatiuwung'),(103,1,'SDIT Fajar Islami Kelapa Dua'),(104,1,'SDN Uwung Jaya'),(105,1,'SDN Karawaci 16'),(106,1,'SDN Karawaci 13'),(107,1,'SD Arrafi BHS Sumedang'),(108,1,'SDN Panunggangan 2');
/*!40000 ALTER TABLE `tbl_sekolah` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_sekolah` with 86 row(s)
--

--
-- Table structure for table `tbl_setting`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(100) NOT NULL,
  `kepsek` varchar(50) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `npsn` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_setting`
--

LOCK TABLES `tbl_setting` WRITE;
/*!40000 ALTER TABLE `tbl_setting` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_setting` VALUES (1,'SMPS INSAN KAMIL','Fadilah, S.Ag','(021) 5999 1423','Jalan Raya Legok Km 06 No 89 Rt 07 Rw 02','69765093','Swasta','smpinsankamillegok@gmail.com','inka.png','Legok','Legok','Tangerang','Banten');
/*!40000 ALTER TABLE `tbl_setting` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_setting` with 1 row(s)
--

--
-- Table structure for table `tbl_siswa`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `asal_sekolah` varchar(2) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nik_ibu` varchar(100) NOT NULL,
  `nik_ayah` varchar(100) NOT NULL,
  `hasil_ibu` varchar(100) NOT NULL,
  `didik_ibu` varchar(50) NOT NULL,
  `didik_ayah` varchar(50) NOT NULL,
  `kerja_ibu` varchar(100) NOT NULL,
  `kerja_ayah` varchar(20) NOT NULL,
  `hasil_ayah` varchar(100) NOT NULL,
  `tahun_ibu` varchar(4) NOT NULL,
  `tahun_ayah` varchar(4) NOT NULL,
  `telp_ayah` varchar(20) NOT NULL,
  `telp_ibu` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `cita_cita` varchar(100) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `anak_ke` varchar(2) NOT NULL,
  `berat` varchar(3) NOT NULL,
  `tinggi` varchar(3) NOT NULL,
  `tinggal` varchar(255) NOT NULL,
  `transportasi` varchar(255) NOT NULL,
  `seri_ijazah` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `status_daftar` int(1) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_siswa`
--

LOCK TABLES `tbl_siswa` WRITE;
/*!40000 ALTER TABLE `tbl_siswa` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_siswa` VALUES (1,'Ahmad Vallejo','Laki-laki','Tangerang','2009-12-19','3603202805100004','kp bambu','003','003','Bojong Nagka','Kelapa DUa','kelapa dua','banten','','sddsdsd','Ardi HAmbali','12326598','56559888888','Rp. 1.000.000 - Rp. 3.000.000 ','S1','S3','Ibu Rumah Tangga','Wiraswasta','Rp. 1.000.000 - Rp. 3.000.000 ','1969','1978','00002322555','02326598777','02326598887','3102864248','Abri','Masak','7','89','189','','','uioiiuuuuu','kamil123','','','',2,1,0),(2,'Cantika Asmanina','Laki-laki','Garut','18-12-2008','5454545454545','1212121212154','2','2','kelapa dua','kelapa dua','s','2','','sddsdsd','Asep','787877878','11111111111111111','Rp. 1.000.000 - Rp. 3.000.000 ','S2','S2','Karyawan Swasta','PNS/TNI/Polri','Rp. 1.000.000 - Rp. 3.000.000 ','1956','1111','089898888888','8998099766879','ss','3102864589','aaaaaaa','aaaaaaaaa','aa','aaa','sss','Bersama Orang Tua','','DN-30 D4958696669669','kamil123','','','',1,1,2),(3,'Fernando Torres','Perempuan','Tangerang','19-12-2008','3171044302100001','','','','','','','','','','','','','0','0','0','','','0','','','','','','2323244567','','','','','','','','','01012001','','','',2,1,2),(4,'Restu Maulana','Perempuan','Tangerang','19-12-2006','3305110211090001','','','','','','','','','','','','','0','0','0','','','0','','','','','','2323244549','','','','','','','','','19122006','','','',2,1,2),(5,'Al Asyifa Azza Khumairoh','Perempuan','Tangerang','19-11-2008','3171044302100001','','','','','','','','','','','','','0','0','0','','','0','','','','','','2323244549','','','','','','','','','19112008','','','',2,1,2),(6,'Gilberto MAncini','Perempuan','Tangerang','06-06-2006','1234567890236598','Perumahan Legok Indah Blok 5A No 89','08','09','Babakan','Legok','','','','','','','','0','0','0','','','0','','','','','','1234567890','','','','','','','','','06062006','inka.png','','',2,1,2),(7,'Muhamad Rizki','Laki-laki','Tangerang',' 01-01-2001','78945612369325689','','','','','','','','','','','','','0','0','0','','','0','','','','','','7894561230','','','','','','','','',' 1012001','','','',2,1,2),(8,'Nabil Althaf Fidiyanto','Laki-laki','Tangerang','02-02-2002','3603280110090003','Kp Jati  ','02','02','Anggur','Tolompong','','','','Sumarni','Suhandi','32601','44545454','Rp. 1.000.000 - Rp. 3.000.000 ','SMP/Sederajat','S3','Karyawan Swasta','Pedagang Besar','Rp. 1.000.000 - Rp. 3.000.000 ','1980','1978','','','081296577550','4561237890','Polisi','Berenang','2','40','140','','','4521211','02022002','','','',1,1,2),(9,'Ibnul Wafa','Laki-laki','Garut','06-09-1991','8867870786588','','','','','','','','','Ila Karmila','Amin Bunyamin','898988888','909999999999999999','','S3','S3','Wiraswasta','Sudah Meninggal','','1963','1960','09889999999','0987787877776','08976787656','1234567890','Abri','Mancing','2','89','189','Bersama Orang Tua','','DN 45678899','06091991','inka.png','','',2,1,2);
/*!40000 ALTER TABLE `tbl_siswa` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_siswa` with 9 row(s)
--

--
-- Table structure for table `tbl_ta`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ta` (
  `id_ta` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(10) NOT NULL,
  `ta` varchar(20) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_ta`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ta`
--

LOCK TABLES `tbl_ta` WRITE;
/*!40000 ALTER TABLE `tbl_ta` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_ta` VALUES (1,'2022','2022-2023','1 (Ganjil)',0),(4,'2023','2023-2024','',1);
/*!40000 ALTER TABLE `tbl_ta` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_ta` with 2 row(s)
--

--
-- Table structure for table `tbl_tinggal`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tinggal` (
  `id_tinggal` int(11) NOT NULL AUTO_INCREMENT,
  `tinggal` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tinggal`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tinggal`
--

LOCK TABLES `tbl_tinggal` WRITE;
/*!40000 ALTER TABLE `tbl_tinggal` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_tinggal` VALUES (1,'Bersama Orang Tua'),(2,'Bersama Wali'),(3,'Kos'),(4,'Asrama'),(5,'Panti Asuhan'),(6,'Pesantren'),(7,'lainnya');
/*!40000 ALTER TABLE `tbl_tinggal` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_tinggal` with 7 row(s)
--

--
-- Table structure for table `tbl_transportasi`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_transportasi` (
  `id_transportasi` int(11) NOT NULL AUTO_INCREMENT,
  `transportasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_transportasi`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_transportasi`
--

LOCK TABLES `tbl_transportasi` WRITE;
/*!40000 ALTER TABLE `tbl_transportasi` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_transportasi` VALUES (2,'Jalan Kaki'),(3,'Kendaraan Pribadi'),(4,'Kendaraan Umum/angkot'),(5,'Jemputan Sekolah'),(6,'Kereta Api'),(7,'Ojek'),(8,'Andong/Bendi/Sando'),(9,'Dokar/Delman/beca'),(10,'Lainnya');
/*!40000 ALTER TABLE `tbl_transportasi` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_transportasi` with 9 row(s)
--

--
-- Table structure for table `tbl_user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_user` VALUES (1,'Ibnul Wafa','ibnul123','ibnbunyamin@gmail.com','photo1.jpg'),(4,'Admin','admin123','admin@gmail.com','1646456779_32f1426284790741b5ca.png');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_user` with 2 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Sat, 03 Jun 2023 11:21:00 +0700
