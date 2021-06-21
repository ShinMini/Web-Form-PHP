/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.18-MariaDB : Database - electroscooter
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`electroscooter` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `electroscooter`;

/*Table structure for table `client` */

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client` (
  `clientId` char(18) NOT NULL,
  `password` char(18) NOT NULL,
  `manager` char(5) NOT NULL,
  `clientName` char(18) NOT NULL,
  `clientTel` char(25) NOT NULL,
  `address` varchar(40) NOT NULL,
  PRIMARY KEY (`clientId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `client` */

insert  into `client`(`clientId`,`password`,`manager`,`clientName`,`clientTel`,`address`) values 
('20191456','123','No','shinmini','12','213'),
('min990713','1234','Yes','Mini','010-2233-2233','Asia/Seoul');

/*Table structure for table `electroscooter` */

DROP TABLE IF EXISTS `electroscooter`;

CREATE TABLE `electroscooter` (
  `scooterNo` char(18) NOT NULL,
  `rentAble` char(18) NOT NULL,
  `fix` char(5) DEFAULT NULL,
  PRIMARY KEY (`scooterNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `electroscooter` */

insert  into `electroscooter`(`scooterNo`,`rentAble`,`fix`) values 
('A236MM','Yes',NULL),
('A475MN','Yes',NULL),
('B663NN','No','Need');

/*Table structure for table `rent` */

DROP TABLE IF EXISTS `rent`;

CREATE TABLE `rent` (
  `rentNo` char(10) NOT NULL,
  `scooterNo` char(18) NOT NULL,
  `rentDate` varchar(20) DEFAULT NULL,
  `returnDate` varchar(20) NOT NULL,
  `realReturn` varchar(20) NOT NULL,
  `clientID` char(18) DEFAULT NULL,
  `manager` char(5) DEFAULT NULL,
  `fixdate` char(18) DEFAULT NULL,
  PRIMARY KEY (`rentNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `rent` */

insert  into `rent`(`rentNo`,`scooterNo`,`rentDate`,`returnDate`,`realReturn`,`clientID`,`manager`,`fixdate`) values 
('RA3321','A234MM','2021-06-20','2021-07-10','2021-06-28','min990713','Yes','2021-02-21');

/*Table structure for table `review` */

DROP TABLE IF EXISTS `review`;

CREATE TABLE `review` (
  `b_idx` char(18) NOT NULL,
  `clientID` char(18) NOT NULL,
  `manager` char(5) NOT NULL,
  `contents` text NOT NULL,
  `b_date` date DEFAULT NULL,
  `recommend` int(11) DEFAULT NULL,
  PRIMARY KEY (`b_idx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `review` */

insert  into `review`(`b_idx`,`clientID`,`manager`,`contents`,`b_date`,`recommend`) values 
('B11C','min990713','Yes','\'아 오토바이 타고싶다.. 시험끝나면 오토바이타고.. 타고.. 타고시다.....으흑\'','2021-06-15',4);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
