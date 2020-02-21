-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: mishis_notes
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

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
-- Current Database: `mishis_notes`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `mishis_notes` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mishis_notes`;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
INSERT INTO `notas` VALUES (7,'Mi primera nota! Pero editada! x2','este es mi mensaje c: equisdede',1),(8,'Mi segunda nota!','Mi mensaje de super pro PERO CAMBIADO!!!',1),(9,'note title exdi','NEW EBEL message.',1),(12,'note title 1','asdasd',1),(15,'ESTA ES LA MEJOR NOTA!','Ebel Bengoechea',1),(16,'NUEVA NOTA DESPUES DE LOGINM','LOGIM LOGIM',1),(17,'note title','123',1),(19,'TEST NOTE 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et auctor risus, id congue massa. Integer euismod, ex et dapibus blandit, risus sapien eleifend nisi, non vestibulum justo tortor in justo. Vestibulum sagittis ligula vitae sem auctor viverra. Integer ac ultricies tortor. Nullam nec imperdiet turpis. Quisque vel bibendum ex. Suspendisse at odio facilisis, commodo lectus vel, dictum justo. Sed nec rutrum libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas at nibh vel ex vehicula porttitor ut molestie dolor.',7),(20,'TEST NOTE 2','Vivamus a ipsum non lectus semper feugiat. Aliquam pretium ligula lorem, sit amet finibus odio varius quis. Vestibulum diam purus, rutrum ut pellentesque et, iaculis et erat. Integer at ipsum ullamcorper, pulvinar purus eget, scelerisque metus. Duis sed facilisis leo, euismod volutpat risus. Ut lacinia magna quis urna mattis, ut mollis lectus cursus. Praesent a felis vitae sapien mollis ultricies et non nisl. Nulla id odio purus. Vestibulum commodo interdum consectetur. Maecenas at faucibus libero, non pretium eros. Duis egestas imperdiet ipsum, at interdum mauris aliquet in. Donec ut neque leo. Pellentesque viverra gravida sodales. In hac habitasse platea dictumst. Donec libero elit, scelerisque in magna et, ultrices ullamcorper lorem. Morbi dui nibh, porta non aliquet sit amet, consequat nec justo.',7),(21,'QUE ONDA WEY','Nam ac rhoncus nisi. Suspendisse at mi mollis orci dictum ultrices. Mauris ac tristique mauris, a laoreet quam. Maecenas elementum ex non faucibus iaculis. Aenean placerat justo nec ligula euismod ultricies. Maecenas at sem convallis, lobortis massa non, facilisis nulla. Sed consectetur ipsum diam, vitae maximus ligula sagittis at. Vivamus scelerisque, magna et efficitur euismod, dui turpis lacinia sem, eget tempus nunc magna et dui. Donec consectetur ac nibh eget molestie. Phasellus consequat dui sit amet nulla aliquam, quis semper est porta. Pellentesque pellentesque libero metus, nec semper diam porta quis. Aliquam erat volutpat. Nullam a mattis ante. Nunc orci lectus, consectetur id dictum at, pharetra id quam. Nulla consequat lacinia quam, vitae molestie arcu condimentum at.',7),(22,'RIKITRIKI','Integer mollis risus tincidunt nisi auctor, et maximus nunc mattis. Praesent interdum felis eget placerat imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pharetra pretium libero ut ultrices. Mauris vehicula interdum metus, vel lacinia justo dignissim a. Vivamus pretium at turpis quis accumsan. Ut nulla lorem, tincidunt dictum semper a, tempor ac ipsum. Integer dignissim placerat massa ullamcorper laoreet. Aenean ut ultrices tortor, id lobortis nisi.',7),(23,'SPECIAL BOY','Quisque sapien metus, mattis at vehicula eget, pharetra in tellus. Aenean convallis leo vel mauris ullamcorper, eu semper mauris gravida. Mauris at vehicula est. Nunc ex massa, facilisis at semper posuere, molestie quis quam. Ut ut eleifend ipsum. Suspendisse semper nisl et libero pulvinar pulvinar. Maecenas malesuada lorem vel ligula lobortis, vitae facilisis tellus elementum. In vel urna et justo rutrum posuere. In quis odio sed metus tincidunt ornare ut nec lectus. Duis ut sem venenatis, feugiat tortor a, laoreet lacus. Ut vehicula et dolor et elementum. Sed fringilla bibendum purus ac mollis. Ut pretium ut libero egestas rutrum. Quisque volutpat fringilla nunc. Maecenas a convallis tellus. Donec diam justo, fringilla eu ultricies sit amet, hendrerit nec leo.',7),(24,'Una nota normal, de un tema normal','Bueno, esta es la nota para finalizar mi proyecto. Super sencilla pero con esto demuestro que termine esta cosa, y que la gente estupida no puede porque realmente es idiota, poco competente y decepcionante.\r\n\r\nPD: ahuevosquesipude',7);
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (13,'0d3ad6589eadacbaf897fa4cf7cbe97f','a0b39bedfad8db5dfd7ec9a0597536b4'),(14,'1579c102c880cdaa5ac8f65f50720fcc','3f2e05330e503df54b8eb746d7b4f182');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET armscii8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'ebel.bengoechea@gmail.com','3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),(7,'osaki3b3@gmail.com','3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-21 14:05:35
