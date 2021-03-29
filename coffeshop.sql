/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.24 : Database - coffeshop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`coffeshop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `coffeshop`;

/*Table structure for table `tb_product` */

DROP TABLE IF EXISTS `tb_product`;

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_size` varchar(100) NOT NULL,
  `product_price` bigint(20) NOT NULL,
  `product_deskripsi` varchar(150) DEFAULT NULL,
  `product_img` varchar(200) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `tb_product` */

insert  into `tb_product`(`product_id`,`product_name`,`product_size`,`product_price`,`product_deskripsi`,`product_img`,`status`) values (19,'sdgdfasd','M',10000,'deskripsi abalabal','sdgdfasd-10000.jpg',1),(20,'dsfsdf','M',532432,'safsd','dsfsdf-532432.png',0),(21,'fdsds','M',76456,'fhfgh','fdsds-76456.jpg',1),(22,'fasdfa','L',5234234,'dfsdf asdasd',NULL,1),(23,'fsdfsd','L',12312312,'asdasdasdasfasd','fsdfsd-12312312.png',0);

/*Table structure for table `tb_slider` */

DROP TABLE IF EXISTS `tb_slider`;

CREATE TABLE `tb_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_img` varchar(200) NOT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_slider` */

insert  into `tb_slider`(`slider_id`,`slider_img`,`status`) values (1,'69947.png',1),(2,'hasbanna-land.jpg',1),(3,'dev.jpg',0),(4,'24b17ffc-9994-4701-8fd0-07def0b86386.jpg',0),(5,'24b17ffc-9994-4701-8fd0-07def0b86386.jpg',1),(6,'e9142ea8954d8016f1e3719dd763d406.jpg',1),(7,'dev.jpg',1);

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`user_id`,`nama`,`username`,`password`,`status`) values (1,'Olan','rolantwin','21232f297a57a5a743894a0e4a801fc3',0),(2,'Dani','dani','55b7e8b895d047537e672250dd781555',1),(3,'Rolan Oktafian','olanfn','21232f297a57a5a743894a0e4a801fc3',1);

/*Table structure for table `tb_whatsapp` */

DROP TABLE IF EXISTS `tb_whatsapp`;

CREATE TABLE `tb_whatsapp` (
  `whatsapp_id` int(11) NOT NULL AUTO_INCREMENT,
  `whatsapp_number` varchar(100) NOT NULL,
  `whatsapp_link` varchar(200) NOT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`whatsapp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tb_whatsapp` */

insert  into `tb_whatsapp`(`whatsapp_id`,`whatsapp_number`,`whatsapp_link`,`status`) values (8,'+628978388123','https://wa.me/+628978388123?text=Saya%20ingin%20membeli%20produk%20ini..',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
