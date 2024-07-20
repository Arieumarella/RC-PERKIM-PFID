/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 8.0.30 : Database - rc_perkim
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rc_perkim` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `rc_perkim`;

/*Table structure for table `t_catat_ppkt` */

DROP TABLE IF EXISTS `t_catat_ppkt`;

CREATE TABLE `t_catat_ppkt` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_ppkt` bigint DEFAULT NULL,
  `jns_catatan` varchar(255) DEFAULT NULL,
  `catatn` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `t_catat_ppkt` */

insert  into `t_catat_ppkt`(`id`,`id_ppkt`,`jns_catatan`,`catatn`,`created_at`) values 
(1,5,'catat_penilaian_1','aasdasdasdasdads','2024-07-20 15:48:32'),
(2,5,'catat_penilaian_2','asdasdasd','2024-07-20 16:38:26'),
(3,5,'catat_rincian_1','dsfgdsfg','2024-07-20 16:38:34'),
(4,5,'catat_rincian_2','dsfdsfdsf','2024-07-20 16:38:38'),
(5,5,'catat_rincian_64','sdfsdfsdf','2024-07-20 16:38:45'),
(6,7,'catat_penilaian_1','asdasd','2024-07-20 16:56:43');

/*Table structure for table `t_dok_ppkt` */

DROP TABLE IF EXISTS `t_dok_ppkt`;

CREATE TABLE `t_dok_ppkt` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_ppkt` bigint DEFAULT NULL,
  `jns_file` varchar(255) DEFAULT NULL,
  `path` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `t_dok_ppkt` */

insert  into `t_dok_ppkt`(`id`,`id_ppkt`,`jns_file`,`path`,`created_at`) values 
(2,5,'2_1','C:/laragon/www/rc-perkim/assets/PPKT/upload_time_2024-07-20_1721482569.pdf','2024-07-20 13:36:09'),
(73,5,'1_1','C:/laragon/www/rc-perkim/assets/PPKT/upload_time_2024-07-20_1721482869.pdf','2024-07-20 13:41:09'),
(74,5,'rc_utama','C:/laragon/www/rc-perkim/assets/PPKT/upload_time_2024-07-20_1721482985.pdf','2024-07-20 13:43:05'),
(75,5,'rc_tahap_2','C:/laragon/www/rc-perkim/assets/PPKT/upload_time_2024-07-20_1721482998.pdf','2024-07-20 13:43:18'),
(76,5,'rc_tahap_1','C:/laragon/www/rc-perkim/assets/PPKT/upload_time_2024-07-20_1721488446.pdf','2024-07-20 15:14:06'),
(77,5,'dokumen_expose','C:/laragon/www/rc-perkim/assets/PPKT/upload_time_2024-07-20_1721489504.pdf','2024-07-20 15:31:44'),
(78,5,'3_1','C:/laragon/www/rc-perkim/assets/PPKT/upload_time_2024-07-20_1721489512.pdf','2024-07-20 15:31:52'),
(79,5,'8_7','C:/laragon/www/rc-perkim/assets/PPKT/upload_time_2024-07-20_1721493536.pdf','2024-07-20 16:38:56');

/*Table structure for table `t_ppkt_am` */

DROP TABLE IF EXISTS `t_ppkt_am`;

CREATE TABLE `t_ppkt_am` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_ppkt` bigint DEFAULT NULL,
  `rincianKegiatan` varchar(255) DEFAULT NULL,
  `catatan` text,
  `volume` double DEFAULT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `harga_satuan` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `t_ppkt_am` */

insert  into `t_ppkt_am`(`id`,`id_ppkt`,`rincianKegiatan`,`catatan`,`volume`,`satuan`,`harga_satuan`,`created_at`) values 
(2,7,'01-Pembangunan Jaringan Distribusi Utama (JDU)','aa',11,'sr',22,'2024-07-20 18:06:18'),
(3,5,'01-Uprating Instalasi Pengolahan Air (IPA)/ Penambahan Sumur Dalam Terlindungi/ Broncaptering','asd',123,'2345adsf',324,'2024-07-20 18:41:12');

/*Table structure for table `t_ppkt_perum` */

DROP TABLE IF EXISTS `t_ppkt_perum`;

CREATE TABLE `t_ppkt_perum` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_ppkt` bigint DEFAULT NULL,
  `rincianKegiatan` varchar(255) DEFAULT NULL,
  `catatan` text,
  `volume` double DEFAULT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `harga_satuan` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `t_ppkt_perum` */

insert  into `t_ppkt_perum`(`id`,`id_ppkt`,`rincianKegiatan`,`catatan`,`volume`,`satuan`,`harga_satuan`,`created_at`) values 
(3,5,'02-Peningkatan Kualitas Rumah Swadaya','dsfgsd',324,'234',241234234,'2024-07-20 18:54:07');

/*Table structure for table `t_ppkt_san` */

DROP TABLE IF EXISTS `t_ppkt_san`;

CREATE TABLE `t_ppkt_san` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_ppkt` bigint DEFAULT NULL,
  `rincianKegiatan` varchar(255) DEFAULT NULL,
  `catatan` text,
  `volume` double DEFAULT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `harga_satuan` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `t_ppkt_san` */

insert  into `t_ppkt_san`(`id`,`id_ppkt`,`rincianKegiatan`,`catatan`,`volume`,`satuan`,`harga_satuan`,`created_at`) values 
(1,7,'03-Pembangunan Tangki Septik Skala Individual Perkotaan minimal 50 KK','aa',11,'dd',22,'2024-07-20 18:26:52'),
(3,5,'01-Pembangunan TPS3R','sdfgdsf',1234123,'aqsda',234234,'2024-07-20 18:42:15');

/*Table structure for table `t_rc_ppkt` */

DROP TABLE IF EXISTS `t_rc_ppkt`;

CREATE TABLE `t_rc_ppkt` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `kdsatker` bigint DEFAULT NULL,
  `kdkec` bigint DEFAULT NULL,
  `kddesa` bigint DEFAULT NULL,
  `ta` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `t_rc_ppkt` */

insert  into `t_rc_ppkt`(`id`,`kdsatker`,`kdkec`,`kddesa`,`ta`,`created_at`) values 
(5,3303015,3803,46313,'2025','2024-07-20 09:17:38'),
(6,3303025,3830,46664,'2025','2024-07-20 09:18:13'),
(7,3303015,3789,46156,'2025','2024-07-20 09:26:56');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
