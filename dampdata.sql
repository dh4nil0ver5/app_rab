/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.4.21-MariaDB : Database - dbplanrab
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbplanrab` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dbplanrab`;

/*Table structure for table `tb_domisili_kabkot` */

DROP TABLE IF EXISTS `tb_domisili_kabkot`;

CREATE TABLE `tb_domisili_kabkot` (
  `id_kabkot` int(11) NOT NULL AUTO_INCREMENT,
  `id_prov` int(11) NOT NULL,
  `kab_atau_kota` varchar(50) NOT NULL,
  `nama_kabkot` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kabkot`),
  KEY `fk_provinsi` (`id_prov`),
  CONSTRAINT `fk_provinsi` FOREIGN KEY (`id_prov`) REFERENCES `tb_domisili_prov` (`id_prov`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=515 DEFAULT CHARSET=latin1;

/*Data for the table `tb_domisili_kabkot` */

insert  into `tb_domisili_kabkot`(`id_kabkot`,`id_prov`,`kab_atau_kota`,`nama_kabkot`) values (1,1,'Kab.','Badung'),(2,1,'Kab.','Bangli'),(3,1,'Kab.','Buleleng'),(4,1,'Kota ','Denpasar'),(5,1,'Kab.','Gianyar'),(6,1,'Kab.','Jembrana'),(7,1,'Kab.','Karangasem'),(8,1,'Kab.','Klungkung'),(9,1,'Kab.','Tabanan'),(10,2,'Kab.','Bangka'),(11,2,'Kab.','Bangka Barat'),(12,2,'Kab.','Bangka Selatan'),(13,2,'Kab.','Bangka Tengah'),(14,2,'Kab.','Belitung'),(15,2,'Kab.','Belitung Timur'),(16,2,'Kota ','Pangkal Pinang'),(17,3,'Kota ','Cilegon'),(18,3,'Kab.','Lebak'),(19,3,'Kab.','Pandeglang'),(20,3,'Kab.','Serang'),(21,3,'Kota ','Serang'),(22,3,'Kab.','Tangerang'),(23,3,'Kota ','Tangerang'),(24,3,'Kota ','Tangerang Selatan'),(25,4,'Kota ','Bengkulu'),(26,4,'Kab.','Bengkulu Selatan'),(27,4,'Kab.','Bengkulu Tengah'),(28,4,'Kab.','Bengkulu Utara'),(29,4,'Kab.','Kaur'),(30,4,'Kab.','Kepahiang'),(31,4,'Kab.','Lebong'),(32,4,'Kab.','Muko Muko'),(33,4,'Kab.','Rejang Lebong'),(34,4,'Kab.','Seluma'),(35,5,'Kab.','Bantul'),(36,5,'Kab.','Gunung Kidul'),(37,5,'Kab.','Kulon Progo'),(38,5,'Kab.','Sleman'),(39,5,'Kota ','Yogyakarta'),(40,6,'Kota ','Jakarta Barat'),(41,6,'Kota ','Jakarta Pusat'),(42,6,'Kota ','Jakarta Selatan'),(43,6,'Kota ','Jakarta Timur'),(44,6,'Kota ','Jakarta Utara'),(45,6,'Kab.','Kepulauan Seribu'),(46,7,'Kab.','Boalemo'),(47,7,'Kab.','Bone Bolango'),(48,7,'Kab.','Gorontalo'),(49,7,'Kota ','Gorontalo'),(50,7,'Kab.','Gorontalo Utara'),(51,7,'Kab.','Pohuwato'),(52,8,'Kab.','Batang Hari'),(53,8,'Kab.','Bungo'),(54,8,'Kota ','Jambi'),(55,8,'Kab.','Kerinci'),(56,8,'Kab.','Merangin'),(57,8,'Kab.','Muaro Jambi'),(58,8,'Kab.','Sarolangun'),(59,8,'Kota ','Sungaipenuh'),(60,8,'Kab.','Tanjung Jabung Barat'),(61,8,'Kab.','Tanjung Jabung Timur'),(62,8,'Kab.','Tebo'),(63,9,'Kab.','Bandung'),(64,9,'Kota ','Bandung'),(65,9,'Kab.','Bandung Barat'),(66,9,'Kota ','Banjar'),(67,9,'Kab.','Bekasi'),(68,9,'Kota ','Bekasi'),(69,9,'Kab.','Bogor'),(70,9,'Kota ','Bogor'),(71,9,'Kab.','Ciamis'),(72,9,'Kab.','Cianjur'),(73,9,'Kota ','Cimahi'),(74,9,'Kab.','Cirebon'),(75,9,'Kota ','Cirebon'),(76,9,'Kota ','Depok'),(77,9,'Kab.','Garut'),(78,9,'Kab.','Indramayu'),(79,9,'Kab.','Karawang'),(80,9,'Kab.','Kuningan'),(81,9,'Kab.','Majalengka'),(82,9,'Kab.','Pangandaran'),(83,9,'Kab.','Purwakarta'),(84,9,'Kab.','Subang'),(85,9,'Kab.','Sukabumi'),(86,9,'Kota ','Sukabumi'),(87,9,'Kab.','Sumedang'),(88,9,'Kab.','Tasikmalaya'),(89,9,'Kota ','Tasikmalaya'),(90,10,'Kab.','Banjarnegara'),(91,10,'Kab.','Banyumas'),(92,10,'Kab.','Batang'),(93,10,'Kab.','Blora'),(94,10,'Kab.','Boyolali'),(95,10,'Kab.','Brebes'),(96,10,'Kab.','Cilacap'),(97,10,'Kab.','Demak'),(98,10,'Kab.','Grobogan'),(99,10,'Kab.','Jepara'),(100,10,'Kab.','Karanganyar'),(101,10,'Kab.','Kebumen'),(102,10,'Kab.','Kendal'),(103,10,'Kab.','Klaten'),(104,10,'Kab.','Kudus'),(105,10,'Kab.','Magelang'),(106,10,'Kota ','Magelang'),(107,10,'Kab.','Pati'),(108,10,'Kab.','Pekalongan'),(109,10,'Kota ','Pekalongan'),(110,10,'Kab.','Pemalang'),(111,10,'Kab.','Purbalingga'),(112,10,'Kab.','Purworejo'),(113,10,'Kab.','Rembang'),(114,10,'Kota ','Salatiga'),(115,10,'Kab.','Semarang'),(116,10,'Kota ','Semarang'),(117,10,'Kab.','Sragen'),(118,10,'Kab.','Sukoharjo'),(119,10,'Kota ','Surakarta'),(120,10,'Kab.','Tegal'),(121,10,'Kota ','Tegal'),(122,10,'Kab.','Temanggung'),(123,10,'Kab.','Wonogiri'),(124,10,'Kab.','Wonosobo'),(125,11,'Kab.','Bangkalan'),(126,11,'Kab.','Banyuwangi'),(127,11,'Kota ','Batu'),(128,11,'Kab.','Blitar'),(129,11,'Kota ','Blitar'),(130,11,'Kab.','Bojonegoro'),(131,11,'Kab.','Bondowoso'),(132,11,'Kab.','Gresik'),(133,11,'Kab.','Jember'),(134,11,'Kab.','Jombang'),(135,11,'Kab.','Kediri'),(136,11,'Kota ','Kediri'),(137,11,'Kab.','Lamongan'),(138,11,'Kab.','Lumajang'),(139,11,'Kab.','Madiun'),(140,11,'Kota ','Madiun'),(141,11,'Kab.','Magetan'),(142,11,'Kab.','Malang'),(143,11,'Kota ','Malang'),(144,11,'Kab.','Mojokerto'),(145,11,'Kota ','Mojokerto'),(146,11,'Kab.','Nganjuk'),(147,11,'Kab.','Ngawi'),(148,11,'Kab.','Pacitan'),(149,11,'Kab.','Pamekasan'),(150,11,'Kab.','Pasuruan'),(151,11,'Kota ','Pasuruan'),(152,11,'Kab.','Ponorogo'),(153,11,'Kab.','Probolinggo'),(154,11,'Kota ','Probolinggo'),(155,11,'Kab.','Sampang'),(156,11,'Kab.','Sidoarjo'),(157,11,'Kab.','Situbondo'),(158,11,'Kab.','Sumenep'),(159,11,'Kota ','Surabaya'),(160,11,'Kab.','Trenggalek'),(161,11,'Kab.','Tuban'),(162,11,'Kab.','Tulungagung'),(163,12,'Kab.','Bengkayang'),(164,12,'Kab.','Kapuas Hulu'),(165,12,'Kab.','Kayong Utara'),(166,12,'Kab.','Ketapang'),(167,12,'Kab.','Kubu Raya'),(168,12,'Kab.','Landak'),(169,12,'Kab.','Melawi'),(170,12,'Kab.','Mempawah'),(171,12,'Kota ','Pontianak'),(172,12,'Kab.','Sambas'),(173,12,'Kab.','Sanggau'),(174,12,'Kab.','Sekadau'),(175,12,'Kota ','Singkawang'),(176,12,'Kab.','Sintang'),(177,13,'Kab.','Balangan'),(178,13,'Kab.','Banjar'),(179,13,'Kota ','Banjarbaru'),(180,13,'Kota ','Banjarmasin'),(181,13,'Kab.','Barito Kuala'),(182,13,'Kab.','Hulu Sungai Selatan'),(183,13,'Kab.','Hulu Sungai Tengah'),(184,13,'Kab.','Hulu Sungai Utara'),(185,13,'Kab.','Kotabaru'),(186,13,'Kab.','Tabalong'),(187,13,'Kab.','Tanah Bumbu'),(188,13,'Kab.','Tanah Laut'),(189,13,'Kab.','Tapin'),(190,14,'Kab.','Barito Selatan'),(191,14,'Kab.','Barito Timur'),(192,14,'Kab.','Barito Utara'),(193,14,'Kab.','Gunung Mas'),(194,14,'Kab.','Kapuas'),(195,14,'Kab.','Katingan'),(196,14,'Kab.','Kotawaringin Barat'),(197,14,'Kab.','Kotawaringin Timur'),(198,14,'Kab.','Lamandau'),(199,14,'Kab.','Murung Raya'),(200,14,'Kota ','Palangka Raya'),(201,14,'Kab.','Pulang Pisau'),(202,14,'Kab.','Seruyan'),(203,14,'Kab.','Sukamara'),(204,15,'Kota ','Balikpapan'),(205,15,'Kab.','Berau'),(206,15,'Kota ','Bontang'),(207,15,'Kab.','Kutai Barat'),(208,15,'Kab.','Kutai Kartanegara'),(209,15,'Kab.','Kutai Timur'),(210,15,'Kab.','Mahakam Ulu'),(211,15,'Kab.','Paser'),(212,15,'Kab.','Penajam Paser Utara'),(213,15,'Kota ','Samarinda'),(214,16,'Kab.','Bulungan'),(215,16,'Kab.','Malinau'),(216,16,'Kab.','Nunukan'),(217,16,'Kab.','Tana Tidung'),(218,16,'Kota ','Tarakan'),(219,17,'Kota ','Batam'),(220,17,'Kab.','Bintan'),(221,17,'Kab.','Karimun'),(222,17,'Kab.','Kepulauan Anambas'),(223,17,'Kab.','Lingga'),(224,17,'Kab.','Natuna'),(225,17,'Kota ','Tanjung Pinang'),(226,18,'Kota ','Bandar Lampung'),(227,18,'Kab.','Lampung Barat'),(228,18,'Kab.','Lampung Selatan'),(229,18,'Kab.','Lampung Tengah'),(230,18,'Kab.','Lampung Timur'),(231,18,'Kab.','Lampung Utara'),(232,18,'Kab.','Mesuji'),(233,18,'Kota ','Metro'),(234,18,'Kab.','Pesawaran'),(235,18,'Kab.','Pesisir Barat'),(236,18,'Kab.','Pringsewu'),(237,18,'Kab.','Tanggamus'),(238,18,'Kab.','Tulang Bawang'),(239,18,'Kab.','Tulang Bawang Barat'),(240,18,'Kab.','Way Kanan'),(241,19,'Kota ','Ambon'),(242,19,'Kab.','Buru'),(243,19,'Kab.','Buru Selatan'),(244,19,'Kab.','Kepulauan Aru'),(245,19,'Kab.','Maluku Barat Daya'),(246,19,'Kab.','Maluku Tengah'),(247,19,'Kab.','Maluku Tenggara'),(248,19,'Kab.','Maluku Tenggara Barat'),(249,19,'Kab.','Seram Bagian Barat'),(250,19,'Kab.','Seram Bagian Timur'),(251,19,'Kota ','Tual'),(252,20,'Kab.','Halmahera Barat'),(253,20,'Kab.','Halmahera Selatan'),(254,20,'Kab.','Halmahera Tengah'),(255,20,'Kab.','Halmahera Timur'),(256,20,'Kab.','Halmahera Utara'),(257,20,'Kab.','Kepulauan Sula'),(258,20,'Kab.','Pulau Morotai'),(259,20,'Kab.','Pulau Taliabu'),(260,20,'Kota ','Ternate'),(261,20,'Kota ','Tidore Kepulauan'),(262,21,'Kab.','Aceh Barat'),(263,21,'Kab.','Aceh Barat Daya'),(264,21,'Kab.','Aceh Besar'),(265,21,'Kab.','Aceh Jaya'),(266,21,'Kab.','Aceh Selatan'),(267,21,'Kab.','Aceh Singkil'),(268,21,'Kab.','Aceh Tamiang'),(269,21,'Kab.','Aceh Tengah'),(270,21,'Kab.','Aceh Tenggara'),(271,21,'Kab.','Aceh Timur'),(272,21,'Kab.','Aceh Utara'),(273,21,'Kota ','Banda Aceh'),(274,21,'Kab.','Bener Meriah'),(275,21,'Kab.','Bireuen'),(276,21,'Kab.','Gayo Lues'),(277,21,'Kota ','Langsa'),(278,21,'Kota ','Lhokseumawe'),(279,21,'Kab.','Nagan Raya'),(280,21,'Kab.','Pidie'),(281,21,'Kab.','Pidie Jaya'),(282,21,'Kota ','Sabang'),(283,21,'Kab.','Simeulue'),(284,21,'Kota ','Subulussalam'),(285,22,'Kab.','Bima'),(286,22,'Kota ','Bima'),(287,22,'Kab.','Dompu'),(288,22,'Kab.','Lombok Barat'),(289,22,'Kab.','Lombok Tengah'),(290,22,'Kab.','Lombok Timur'),(291,22,'Kab.','Lombok Utara'),(292,22,'Kota ','Mataram'),(293,22,'Kab.','Sumbawa'),(294,22,'Kab.','Sumbawa Barat'),(295,23,'Kab.','Alor'),(296,23,'Kab.','Belu'),(297,23,'Kab.','Ende'),(298,23,'Kab.','Flores Timur'),(299,23,'Kab.','Kupang'),(300,23,'Kota ','Kupang'),(301,23,'Kab.','Lembata'),(302,23,'Kab.','Malaka'),(303,23,'Kab.','Manggarai'),(304,23,'Kab.','Manggarai Barat'),(305,23,'Kab.','Manggarai Timur'),(306,23,'Kab.','Nagekeo'),(307,23,'Kab.','Ngada'),(308,23,'Kab.','Rote Ndao'),(309,23,'Kab.','Sabu Raijua'),(310,23,'Kab.','Sikka'),(311,23,'Kab.','Sumba Barat'),(312,23,'Kab.','Sumba Barat Daya'),(313,23,'Kab.','Sumba Tengah'),(314,23,'Kab.','Sumba Timur'),(315,23,'Kab.','Timor Tengah Selatan'),(316,23,'Kab.','Timor Tengah Utara'),(317,24,'Kab.','Asmat'),(318,24,'Kab.','Biak Numfor'),(319,24,'Kab.','Boven Digoel'),(320,24,'Kab.','Deiyai'),(321,24,'Kab.','Dogiyai'),(322,24,'Kab.','Intan Jaya'),(323,24,'Kab.','Jayapura'),(324,24,'Kota ','Jayapura'),(325,24,'Kab.','Jayawijaya'),(326,24,'Kab.','Keerom'),(327,24,'Kab.','Kepulauan Yapen'),(328,24,'Kab.','Lanny Jaya'),(329,24,'Kab.','Mamberamo Raya'),(330,24,'Kab.','Mamberamo Tengah'),(331,24,'Kab.','Mappi'),(332,24,'Kab.','Merauke'),(333,24,'Kab.','Mimika'),(334,24,'Kab.','Nabire'),(335,24,'Kab.','Nduga'),(336,24,'Kab.','Paniai'),(337,24,'Kab.','Pegunungan Bintang'),(338,24,'Kab.','Puncak'),(339,24,'Kab.','Puncak Jaya'),(340,24,'Kab.','Sarmi'),(341,24,'Kab.','Supiori'),(342,24,'Kab.','Tolikara'),(343,24,'Kab.','Waropen'),(344,24,'Kab.','Yahukimo'),(345,24,'Kab.','Yalimo'),(346,25,'Kab.','Fakfak'),(347,25,'Kab.','Kaimana'),(348,25,'Kab.','Manokwari'),(349,25,'Kab.','Manokwari Selatan'),(350,25,'Kab.','Maybrat'),(351,25,'Kab.','Pegunungan Arfak'),(352,25,'Kab.','Raja Ampat'),(353,25,'Kab.','Sorong'),(354,25,'Kota ','Sorong'),(355,25,'Kab.','Sorong Selatan'),(356,25,'Kab.','Tambrauw'),(357,25,'Kab.','Teluk Bintuni'),(358,25,'Kab.','Teluk Wondama'),(359,26,'Kab.','Bengkalis'),(360,26,'Kota ','Dumai'),(361,26,'Kab.','Indragiri Hilir'),(362,26,'Kab.','Indragiri Hulu'),(363,26,'Kab.','Kampar'),(364,26,'Kab.','Kepulauan Meranti'),(365,26,'Kab.','Kuantan Singingi'),(366,26,'Kota ','Pekanbaru'),(367,26,'Kab.','Pelalawan'),(368,26,'Kab.','Rokan Hilir'),(369,26,'Kab.','Rokan Hulu'),(370,26,'Kab.','Siak'),(371,27,'Kab.','Majene'),(372,27,'Kab.','Mamasa'),(373,27,'Kab.','Mamuju'),(374,27,'Kab.','Mamuju Tengah'),(375,27,'Kab.','Mamuju Utara'),(376,27,'Kab.','Polewali Mandar'),(377,28,'Kab.','Bantaeng'),(378,28,'Kab.','Barru'),(379,28,'Kab.','Bone'),(380,28,'Kab.','Bulukumba'),(381,28,'Kab.','Enrekang'),(382,28,'Kab.','Gowa'),(383,28,'Kab.','Jeneponto'),(384,28,'Kab.','Kepulauan Selayar'),(385,28,'Kab.','Luwu'),(386,28,'Kab.','Luwu Timur'),(387,28,'Kab.','Luwu Utara'),(388,28,'Kota ','Makassar'),(389,28,'Kab.','Maros'),(390,28,'Kota ','Palopo'),(391,28,'Kab.','Pangkajene Kepulauan'),(392,28,'Kota ','Parepare'),(393,28,'Kab.','Pinrang'),(394,28,'Kab.','Sidenreng Rappang'),(395,28,'Kab.','Sinjai'),(396,28,'Kab.','Soppeng'),(397,28,'Kab.','Takalar'),(398,28,'Kab.','Tana Toraja'),(399,28,'Kab.','Toraja Utara'),(400,28,'Kab.','Wajo'),(401,29,'Kab.','Banggai'),(402,29,'Kab.','Banggai Kepulauan'),(403,29,'Kab.','Banggai Laut'),(404,29,'Kab.','Buol'),(405,29,'Kab.','Donggala'),(406,29,'Kab.','Morowali'),(407,29,'Kab.','Morowali Utara'),(408,29,'Kota ','Palu'),(409,29,'Kab.','Parigi Moutong'),(410,29,'Kab.','Poso'),(411,29,'Kab.','Sigi'),(412,29,'Kab.','Tojo Una-Una'),(413,29,'Kab.','Toli-Toli'),(414,30,'Kota ','Bau-Bau'),(415,30,'Kab.','Bombana'),(416,30,'Kab.','Buton'),(417,30,'Kab.','Buton Selatan'),(418,30,'Kab.','Buton Tengah'),(419,30,'Kab.','Buton Utara'),(420,30,'Kota ','Kendari'),(421,30,'Kab.','Kolaka'),(422,30,'Kab.','Kolaka Timur'),(423,30,'Kab.','Kolaka Utara'),(424,30,'Kab.','Konawe'),(425,30,'Kab.','Konawe Kepulauan'),(426,30,'Kab.','Konawe Selatan'),(427,30,'Kab.','Konawe Utara'),(428,30,'Kab.','Muna'),(429,30,'Kab.','Muna Barat'),(430,30,'Kab.','Wakatobi'),(431,31,'Kota ','Bitung'),(432,31,'Kab.','Bolaang Mongondow'),(433,31,'Kab.','Bolaang Mongondow Selatan'),(434,31,'Kab.','Bolaang Mongondow Timur'),(435,31,'Kab.','Bolaang Mongondow Utara'),(436,31,'Kab.','Kepulauan Sangihe'),(437,31,'Kab.','Kepulauan Siau Tagulandang Biaro (Sitaro)'),(438,31,'Kab.','Kepulauan Talaud'),(439,31,'Kota ','Kotamobagu'),(440,31,'Kota ','Manado'),(441,31,'Kab.','Minahasa'),(442,31,'Kab.','Minahasa Selatan'),(443,31,'Kab.','Minahasa Tenggara'),(444,31,'Kab.','Minahasa Utara'),(445,31,'Kota ','Tomohon'),(446,32,'Kab.','Agam'),(447,32,'Kota ','Bukittinggi'),(448,32,'Kab.','Dharmasraya'),(449,32,'Kab.','Kepulauan Mentawai'),(450,32,'Kab.','Lima Puluh Kota'),(451,32,'Kota ','Padang'),(452,32,'Kota ','Padang Panjang'),(453,32,'Kab.','Padang Pariaman'),(454,32,'Kota ','Pariaman'),(455,32,'Kab.','Pasaman'),(456,32,'Kab.','Pasaman Barat'),(457,32,'Kota ','Payakumbuh'),(458,32,'Kab.','Pesisir Selatan'),(459,32,'Kota ','Sawah Lunto'),(460,32,'Kab.','Sijunjung'),(461,32,'Kab.','Solok'),(462,32,'Kota ','Solok'),(463,32,'Kab.','Solok Selatan'),(464,32,'Kab.','Tanah Datar'),(465,33,'Kab.','Banyuasin'),(466,33,'Kab.','Empat Lawang'),(467,33,'Kab.','Lahat'),(468,33,'Kota ','Lubuk Linggau'),(469,33,'Kab.','Muara Enim'),(470,33,'Kab.','Musi Banyuasin'),(471,33,'Kab.','Musi Rawas'),(472,33,'Kab.','Musi Rawas Utara'),(473,33,'Kab.','Ogan Ilir'),(474,33,'Kab.','Ogan Komering Ilir'),(475,33,'Kab.','Ogan Komering Ulu'),(476,33,'Kab.','Ogan Komering Ulu Selatan'),(477,33,'Kab.','Ogan Komering Ulu Timur'),(478,33,'Kota ','Pagar Alam'),(479,33,'Kota ','Palembang'),(480,33,'Kab.','Penukal Abab Lematang Ilir'),(481,33,'Kota ','Prabumulih'),(482,34,'Kab.','Asahan'),(483,34,'Kab.','Batu Bara'),(484,34,'Kota ','Binjai'),(485,34,'Kab.','Dairi'),(486,34,'Kab.','Deli Serdang'),(487,34,'Kota ','Gunungsitoli'),(488,34,'Kab.','Humbang Hasundutan'),(489,34,'Kab.','Karo'),(490,34,'Kab.','Labuhanbatu'),(491,34,'Kab.','Labuhanbatu Selatan'),(492,34,'Kab.','Labuhanbatu Utara'),(493,34,'Kab.','Langkat'),(494,34,'Kab.','Mandailing Natal'),(495,34,'Kota ','Medan'),(496,34,'Kab.','Nias'),(497,34,'Kab.','Nias Barat'),(498,34,'Kab.','Nias Selatan'),(499,34,'Kab.','Nias Utara'),(500,34,'Kab.','Padang Lawas'),(501,34,'Kab.','Padang Lawas Utara'),(502,34,'Kota ','Padang Sidempuan'),(503,34,'Kab.','Pakpak Bharat'),(504,34,'Kota ','Pematang Siantar'),(505,34,'Kab.','Samosir'),(506,34,'Kab.','Serdang Bedagai'),(507,34,'Kota ','Sibolga'),(508,34,'Kab.','Simalungun'),(509,34,'Kota ','Tanjung Balai'),(510,34,'Kab.','Tapanuli Selatan'),(511,34,'Kab.','Tapanuli Tengah'),(512,34,'Kab.','Tapanuli Utara'),(513,34,'Kota ','Tebing Tinggi'),(514,34,'Kab.','Toba Samosir');

/*Table structure for table `tb_domisili_prov` */

DROP TABLE IF EXISTS `tb_domisili_prov`;

CREATE TABLE `tb_domisili_prov` (
  `id_prov` int(11) NOT NULL,
  `nama_prov` varchar(50) NOT NULL,
  PRIMARY KEY (`id_prov`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_domisili_prov` */

insert  into `tb_domisili_prov`(`id_prov`,`nama_prov`) values (1,'Bali'),(2,'Bangka Belitung'),(3,'Banten'),(4,'Bengkulu'),(5,'DI Yogyakarta'),(6,'DKI Jakarta'),(7,'Gorontalo'),(8,'Jambi'),(9,'Jawa Barat'),(10,'Jawa Tengah'),(11,'Jawa Timur'),(12,'Kalimantan Barat'),(13,'Kalimantan Selatan'),(14,'Kalimantan Tengah'),(15,'Kalimantan Timur'),(16,'Kalimantan Utara'),(17,'Kepulauan Riau'),(18,'Lampung'),(19,'Maluku'),(20,'Maluku Utara'),(21,'Nanggroe Aceh Darussalam (NAD)'),(22,'Nusa Tenggara Barat (NTB)'),(23,'Nusa Tenggara Timur (NTT)'),(24,'Papua'),(25,'Papua Barat'),(26,'Riau'),(27,'Sulawesi Barat'),(28,'Sulawesi Selatan'),(29,'Sulawesi Tengah'),(30,'Sulawesi Tenggara'),(31,'Sulawesi Utara'),(32,'Sumatera Barat'),(33,'Sumatera Selatan'),(34,'Sumatera Utara');

/*Table structure for table `tdactivitywork` */

DROP TABLE IF EXISTS `tdactivitywork`;

CREATE TABLE `tdactivitywork` (
  `id_activitywork` int(11) NOT NULL AUTO_INCREMENT,
  `name_activity` varchar(30) DEFAULT NULL,
  `idx` int(11) DEFAULT NULL,
  `code_koef` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_activitywork`),
  KEY `code_koefisien` (`code_koef`),
  CONSTRAINT `code_koefisien` FOREIGN KEY (`code_koef`) REFERENCES `tdmasterkoefisien` (`code_koef`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdactivitywork` */

/*Table structure for table `tdcategoryformula` */

DROP TABLE IF EXISTS `tdcategoryformula`;

CREATE TABLE `tdcategoryformula` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name_ofcategory` text DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdcategoryformula` */

insert  into `tdcategoryformula`(`id_category`,`name_ofcategory`,`status`) values (1,'Galian',1),(2,'Urugan',1),(3,'Strauss',1);

/*Table structure for table `tdformula` */

DROP TABLE IF EXISTS `tdformula`;

CREATE TABLE `tdformula` (
  `id_analisa` int(100) NOT NULL AUTO_INCREMENT,
  `id_categoryformula` int(11) DEFAULT NULL,
  `id_item` int(11) DEFAULT NULL,
  `id_raw` int(100) DEFAULT NULL,
  `kindofraw` varchar(10) DEFAULT NULL,
  `quantity` decimal(10,0) DEFAULT NULL,
  `uom` varchar(10) DEFAULT NULL,
  `total_price` varchar(100) DEFAULT NULL,
  `id_tdmargin` int(11) DEFAULT NULL,
  `percen_margin` decimal(10,0) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_analisa`),
  KEY `satuan` (`uom`),
  KEY `categori_formula` (`id_categoryformula`),
  KEY `itemlist` (`id_item`),
  KEY `rawmaterial` (`id_raw`),
  KEY `id_margin` (`id_tdmargin`),
  CONSTRAINT `categori_formula` FOREIGN KEY (`id_categoryformula`) REFERENCES `tdcategoryformula` (`id_category`) ON UPDATE CASCADE,
  CONSTRAINT `id_margin` FOREIGN KEY (`id_tdmargin`) REFERENCES `tdmarginhsp` (`id_tdmargin`) ON UPDATE CASCADE,
  CONSTRAINT `itemlist` FOREIGN KEY (`id_item`) REFERENCES `tditemwork` (`id_item`) ON UPDATE CASCADE,
  CONSTRAINT `rawmaterial` FOREIGN KEY (`id_raw`) REFERENCES `tdrawmaterial` (`id_raw`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdformula` */

insert  into `tdformula`(`id_analisa`,`id_categoryformula`,`id_item`,`id_raw`,`kindofraw`,`quantity`,`uom`,`total_price`,`id_tdmargin`,`percen_margin`,`status`) values (3,1,1,1,NULL,NULL,NULL,NULL,NULL,'15',1),(4,1,1,1,NULL,NULL,NULL,NULL,NULL,'21',1),(5,1,1,1,NULL,NULL,NULL,NULL,NULL,'17',1),(6,1,1,1,NULL,NULL,NULL,NULL,NULL,'8',1);

/*Table structure for table `tditemwork` */

DROP TABLE IF EXISTS `tditemwork`;

CREATE TABLE `tditemwork` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `name_ofitem` text DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tditemwork` */

insert  into `tditemwork`(`id_item`,`name_ofitem`,`status`) values (1,'1 m Galian Strauss Tanah Keras ??30 cm (Termasuk Alat Bor Strauss)',1);

/*Table structure for table `tdkindofraw` */

DROP TABLE IF EXISTS `tdkindofraw`;

CREATE TABLE `tdkindofraw` (
  `id_kindofraw` int(11) NOT NULL AUTO_INCREMENT,
  `name_of_kind` text DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_kindofraw`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdkindofraw` */

insert  into `tdkindofraw`(`id_kindofraw`,`name_of_kind`,`status`) values (1,'Material Bangunan',1),(2,'Alat Kerja',1),(3,'Jasa',1);

/*Table structure for table `tdmarginhsp` */

DROP TABLE IF EXISTS `tdmarginhsp`;

CREATE TABLE `tdmarginhsp` (
  `id_tdmargin` int(11) NOT NULL AUTO_INCREMENT,
  `id_analisa` int(100) DEFAULT NULL,
  `id_item` int(100) DEFAULT NULL,
  `margin` varchar(100) DEFAULT NULL,
  `hsp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tdmargin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdmarginhsp` */

/*Table structure for table `tdmasterkoefisien` */

DROP TABLE IF EXISTS `tdmasterkoefisien`;

CREATE TABLE `tdmasterkoefisien` (
  `code_koef` varchar(100) NOT NULL,
  `name_koefisien` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`code_koef`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdmasterkoefisien` */

insert  into `tdmasterkoefisien`(`code_koef`,`name_koefisien`) values ('bh','bh'),('btg','btg'),('kg','kg'),('lbr','lbr'),('Ls','Ls'),('Ltr','Ltr'),('m2','m2'),('m3','m3'),('M????','M????'),('ORG','org'),('rol','rol'),('sak','sak');

/*Table structure for table `tdmasterwork` */

DROP TABLE IF EXISTS `tdmasterwork`;

CREATE TABLE `tdmasterwork` (
  `id_work` varchar(30) NOT NULL,
  `name_work` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_work`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdmasterwork` */

insert  into `tdmasterwork`(`id_work`,`name_work`,`status`) values ('A','Galian',1),('B','Urugan',1),('C','Strauss',1),('D','Pilecap',1),('E','Sloof',1),('F','Kolom Beton',1),('G','Balok Beton',1),('H','Plat Beton',1);

/*Table structure for table `tdnameproject` */

DROP TABLE IF EXISTS `tdnameproject`;

CREATE TABLE `tdnameproject` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `name_project` varchar(100) DEFAULT NULL,
  `work_project` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `code_picture` varchar(50) DEFAULT NULL,
  `no_rab` text DEFAULT NULL,
  `name_picture` varchar(50) DEFAULT NULL,
  `revisi` int(1) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `lokasi_file` text DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdnameproject` */

insert  into `tdnameproject`(`id_project`,`name_project`,`work_project`,`location`,`code_picture`,`no_rab`,`name_picture`,`revisi`,`picture`,`lokasi_file`,`status`) values (1,'Pembuatan Rumah','Ruko Grand Arya (L = 4,25m)','Hulaan - Menganti','ad','q','1383982301_440938155997838_232608640_n.jpg',0,NULL,'data_file\\',1),(2,'Grand Arya','2022-01-11','Hulaan - Menganti','ARS - 42',NULL,'pantai.png',0,NULL,'data_file\\',1),(3,'Grand Arya','2022-01-11','Hulaan - Menganti','ARS - 42',NULL,'pantai.png',0,NULL,'data_file\\',1),(4,'Grand Arya','2022-01-11','Hulaan - Menganti','ARS - 42','OP/GRES/2022','pantai.png',0,NULL,'data_file\\',1),(5,'Grand Arya','2022-01-11','Hulaan - Menganti','ARS - 42',NULL,'pantai.png',0,NULL,'data_file\\',1),(10,'tester','2022-01-11','tester','tester','tester','pantai.png',0,NULL,'data_file\\',1),(11,'Gunung Harta','2022-01-19','Malang','0001','kmbn','1383982301_440938155997838_232608640_n.jpg',NULL,NULL,'data_file\\',1);

/*Table structure for table `tdpointofwork` */

DROP TABLE IF EXISTS `tdpointofwork`;

CREATE TABLE `tdpointofwork` (
  `id_work` varchar(10) NOT NULL,
  `id_pointofwork` varchar(30) NOT NULL,
  `name_ofpointwork` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_pointofwork`),
  KEY `id_work` (`id_work`),
  CONSTRAINT `id_work` FOREIGN KEY (`id_work`) REFERENCES `tdmasterwork` (`id_work`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdpointofwork` */

insert  into `tdpointofwork`(`id_work`,`id_pointofwork`,`name_ofpointwork`,`status`) values ('A','A1','Galian Straus',1),('A','A2','Galian Pondasi Poer',1),('A','A3','Galian Batu Kumbung',1),('A','A4','Pekerjaan Urugan Tanah',1),('F','B1','Pondasi Strauss Cor K225',1),('F','B2','Pondasi PileCap Cor K225',1),('F','B3','Kolom Cor K225',1),('E','E1','Sloof Cor K225',1),('G','G1','Balok Cor K225',1),('H','H1','Plat Lantai Cor K225',1);

/*Table structure for table `tdrabplan` */

DROP TABLE IF EXISTS `tdrabplan`;

CREATE TABLE `tdrabplan` (
  `id_rabplan` int(11) NOT NULL AUTO_INCREMENT,
  `id_project` int(11) DEFAULT NULL,
  `id_work` varchar(30) DEFAULT NULL,
  `id_pointofwork` varchar(30) DEFAULT NULL,
  `id_activitywork` int(11) DEFAULT NULL,
  `id_itemwork` int(11) DEFAULT NULL,
  `id_analisis` int(11) DEFAULT NULL,
  `spesifikasi` varchar(50) DEFAULT NULL,
  `panjang` int(11) DEFAULT NULL,
  `lebar` int(11) DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL,
  `unit` int(11) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `code_koef` varchar(100) DEFAULT NULL,
  `idx` int(11) DEFAULT NULL,
  `total_volume` int(11) DEFAULT NULL,
  `hsp` varchar(100) DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_rabplan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdrabplan` */

/*Table structure for table `tdrawmaterial` */

DROP TABLE IF EXISTS `tdrawmaterial`;

CREATE TABLE `tdrawmaterial` (
  `id_raw` int(100) NOT NULL AUTO_INCREMENT,
  `code_koef` varchar(20) DEFAULT NULL,
  `id_kindofraw` int(11) DEFAULT NULL,
  `id_analisa` int(11) DEFAULT NULL,
  `name_raw` varchar(100) DEFAULT NULL,
  `qty` int(3) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `id_city` int(10) DEFAULT NULL,
  `creat_by` varchar(10) DEFAULT NULL,
  `create_datetime` timestamp NULL DEFAULT NULL,
  `modified_by` varchar(10) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_raw`),
  KEY `code_koef` (`code_koef`),
  KEY `kind_ofraw` (`id_kindofraw`),
  KEY `city` (`id_city`),
  CONSTRAINT `city` FOREIGN KEY (`id_city`) REFERENCES `tb_domisili_kabkot` (`id_kabkot`) ON UPDATE CASCADE,
  CONSTRAINT `code_koef` FOREIGN KEY (`code_koef`) REFERENCES `tdmasterkoefisien` (`code_koef`) ON UPDATE CASCADE,
  CONSTRAINT `kind_ofraw` FOREIGN KEY (`id_kindofraw`) REFERENCES `tdkindofraw` (`id_kindofraw`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tdrawmaterial` */

insert  into `tdrawmaterial`(`id_raw`,`code_koef`,`id_kindofraw`,`id_analisa`,`name_raw`,`qty`,`price`,`id_city`,`creat_by`,`create_datetime`,`modified_by`,`modified_date`,`status`) values (1,'bh',1,3,'Ampelas',6,'10000',1,NULL,NULL,NULL,NULL,1),(2,'btg',2,4,'Balok kayu Borneo Super',4,'3200000',2,NULL,NULL,NULL,NULL,1),(3,'Ls',1,5,'Balok kayu Kamper Samarinda',5,'3400000',1,NULL,NULL,NULL,NULL,1),(4,'m2',1,6,'Bata Merah',11,'550',1,NULL,NULL,NULL,NULL,1),(5,'lbr',2,3,'Batu Belah',44,'180000',2,NULL,NULL,NULL,NULL,1),(6,'rol',3,4,'Besi Beton Polos ',6,'13500',3,NULL,NULL,NULL,NULL,1),(7,'Ltr',3,5,'Besi Strip ',2,'12500',2,NULL,NULL,NULL,NULL,1),(8,'bh',1,6,'Cat dasar',44,'60000',2,NULL,NULL,NULL,NULL,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
