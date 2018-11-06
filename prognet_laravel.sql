/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.35-MariaDB : Database - prognet_laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prognet_laravel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `prognet_laravel`;

/*Table structure for table `hobi` */

DROP TABLE IF EXISTS `hobi`;

CREATE TABLE `hobi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hobi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `hobi` */

insert  into `hobi`(`id`,`hobi`,`created_at`,`updated_at`) values 
(1,'Kuliah',NULL,NULL),
(2,'Tidur',NULL,NULL),
(3,'Main Mobile Legends',NULL,NULL),
(4,'Main PUBG',NULL,NULL),
(5,'Lain - Lain',NULL,NULL);

/*Table structure for table `mahasiswas` */

DROP TABLE IF EXISTS `mahasiswas`;

CREATE TABLE `mahasiswas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mahasiswas_prodi_id_foreign` (`prodi_id`),
  CONSTRAINT `mahasiswas_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mahasiswas` */

insert  into `mahasiswas`(`id`,`nim`,`nama`,`alamat`,`prodi_id`,`created_at`,`updated_at`) values 
(1,'1705551054','Angga Darma Putra','Siulan',1,NULL,NULL);

/*Table structure for table `mhs` */

DROP TABLE IF EXISTS `mhs`;

CREATE TABLE `mhs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` int(11) NOT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mhs` */

insert  into `mhs`(`id`,`nim`,`nama`,`alamat`,`tgl_lahir`,`agama`,`jk`,`created_at`,`updated_at`) values 
(1,'1705551054','Angga darma Putra','Jl. Siulan','1999-07-12',1,'L','2018-10-28 08:54:02','2018-10-29 06:12:42'),
(2,'1705551049','Xiaomi','asdasdasd','2018-10-31',6,'P','2018-10-28 08:54:50','2018-10-29 06:11:01');

/*Table structure for table `mhs_hobi` */

DROP TABLE IF EXISTS `mhs_hobi`;

CREATE TABLE `mhs_hobi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mhs_hobi` */

insert  into `mhs_hobi`(`id`,`mhs`,`hobi`,`created_at`,`updated_at`) values 
(3,'1705551049',3,NULL,NULL),
(4,'1705551049',4,NULL,NULL),
(19,'1705551054',1,NULL,NULL),
(20,'1705551054',2,NULL,NULL),
(21,'1705551054',4,NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2018_10_27_141234_create_mhs_table',1),
(4,'2018_10_29_165642_create_hobi_table',2),
(5,'2018_10_30_033226_create_mhs_hobi_tables',3),
(6,'2018_10_30_034258_create_mhs_hobi_tables',4),
(7,'2018_10_30_063608_create_mhshobi_tables',5),
(8,'2018_10_30_064322_create_mhs_hobi_tables',6),
(9,'2018_11_01_051524_create_mahasiswas_table',7),
(10,'2018_11_01_052144_create_prodis_table',7),
(11,'2018_11_06_163252_foreign_mhs_prodi',8);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `prodis` */

DROP TABLE IF EXISTS `prodis`;

CREATE TABLE `prodis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_prodi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `prodis` */

insert  into `prodis`(`id`,`nama_prodi`,`created_at`,`updated_at`) values 
(1,'Teknologi Informasi',NULL,NULL),
(2,'Teknik Sipil',NULL,NULL),
(3,'Teknik Arsitektur',NULL,NULL),
(4,'Teknik Elektro',NULL,NULL),
(5,'Teknik Mesin',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Angga Darma Putra','anggadp91@gmail.com',NULL,'$2y$10$2dGex3KiO.fMSmUDBCkB1ulhBfGYwOhxjFtQs1Ud1MoUHhVIlnDky','cr08wqNweOB11AfXwJuPGUDIoBLIoMa8Xs2Bk095YnV34T9LUCokofDqbBXE','2018-10-29 07:16:30','2018-10-29 07:16:30'),
(2,'Anggina','anggina.tp@gmail.com',NULL,'$2y$10$pWgBZ53do6yC.IcxqCrr5O6QPzn97p5Wao/rp27q5sk20ymTwOHqW','Uh3rMM3PYPBvtDFZWFo1kP3PMKmYMnTzteONEXZ03n4GmixhFGsQwcOuUE3r','2018-10-29 16:18:23','2018-10-29 16:18:23');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
