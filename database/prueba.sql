/*
SQLyog Enterprise v13.1.1 (64 bit)
MySQL - 10.4.25-MariaDB : Database - prueba
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prueba` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `prueba`;

/*Table structure for table `contactos` */

DROP TABLE IF EXISTS `contactos`;

CREATE TABLE `contactos` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `edad` varchar(3) DEFAULT NULL,
  `acudiente` varchar(100) DEFAULT NULL,
  `especialista` varchar(100) DEFAULT NULL,
  `motivo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

/*Data for the table `contactos` */

insert  into `contactos`(`id`,`name`,`phone`,`email`,`address`,`country`,`edad`,`acudiente`,`especialista`,`motivo`) values 
(38,'camilo ordoñez','987456321','cam@gmail.com','dorado','ecuador','15','sara ordoñez','orlando vesg','cita por especialista'),
(39,'julia ','876','juli@gmail.com','las montañas','colombia','38','isabel','orlando','cita por especialista'),
(41,'adrian','852','adrian@hotmail.com','las montañas','ecuador','15','sara ordoñez','osvaldo','cita por especialista'),
(43,'isabel','11','isabel@hotmail.com','palestina','estados unidos','35','maria','ana','examen psicologico');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
