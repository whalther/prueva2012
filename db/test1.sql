/*
SQLyog Enterprise - MySQL GUI v8.18 
MySQL - 5.0.51b-community-nt-log : Database - test1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test1` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `test1`;

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `idCliente` char(6) NOT NULL,
  `nameC` varchar(45) NOT NULL,
  `dateC` date NOT NULL,
  `sexoC` char(8) NOT NULL,
  `paisC` varchar(40) NOT NULL,
  `estadoC` varchar(40) NOT NULL,
  `Ciudad` varchar(40) NOT NULL,
  `avatarC` varchar(50) NOT NULL default 'img/ava.jpg',
  `tipo` char(15) NOT NULL,
  PRIMARY KEY  (`idCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `clientes` */

insert  into `clientes`(`idCliente`,`nameC`,`dateC`,`sexoC`,`paisC`,`estadoC`,`Ciudad`,`avatarC`,`tipo`) values ('0024','Andres Linares','1996-05-05','Hombre','Honduras','Choluteca','Apacilagua','img/ava.jpg','Cliente'),('0025','Rodrigo merino','1999-01-01','Hombre','El Salvador','Santa Ana','Coatepeque','img/ava.jpg','Cliente'),('4242','dasdasd','0000-00-00','Hombre','El Salvador','Santa Ana','El Congo','uploads/ava1.png','Admin'),('0021','walter zetino','1984-08-07','Hombre','El Salvador','Santa Ana','El Congo','uploads/ava1.gif','Admin'),('44211','walter2','1999-01-01','Hombre','El Salvador','Santa Ana','Coatepeque','uploads/ava1.png','Admin'),('0023','karla chicas garcia','1990-07-05','Mujer','Honduras','AtlÃ¡ntida','El Porvenir','img/ava.jpg','Cliente'),('0028','Esmeralda Consuegra','1995-06-07','Mujer','El Salvador','AhuachapÃ¡n','AhuachapÃ¡n','uploads/images (1).jpg','Cliente'),('0026','Claudia Lopez','1994-04-01','Mujer','El Salvador','AhuachapÃ¡n','Jujutla','uploads/google-plus-logo-150x150.jpg','Cliente'),('0027','Carlos Rodriguez','1999-01-01','Hombre','El Salvador','AhuachapÃ¡n','AhuachapÃ¡n','uploads/pop-music-news.jpg','Cliente'),('0029','Vilma Martinez','1999-01-01','Mujer','El Salvador','Santa Ana','El Congo','uploads/payaso.png','Cliente'),('0030','Oscar Linares','1999-01-01','Hombre','El Salvador','AhuachapÃ¡n','Jujutla','uploads/seoq7.jpg','Cliente'),('0031','Oscar Rene','1994-08-08','Hombre','El Salvador','Santa Ana','Coatepeque','img/ava.jpg','Cliente'),('0032','Oscar Martinez','1995-06-05','Hombre','Honduras','Choluteca','Choluteca','img/ava.jpg','Admin'),('0033','Brain zetino','1991-05-07','Hombre','El Salvador','Santa Ana','Coatepeque','img/ava.jpg','Cliente');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
