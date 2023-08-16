-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: natura_medi
-- ------------------------------------------------------
-- Server version	8.0.32


--
-- Table structure for table `mercancias`
--

DROP TABLE IF EXISTS `mercancias`;
CREATE TABLE `mercancias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo_prov` int NOT NULL,
  `id_compra` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codigo_prov` (`codigo_prov`),
  KEY `id_compra` (`id_compra`),
  CONSTRAINT `mercancias_ibfk_1` FOREIGN KEY (`codigo_prov`) REFERENCES `proveedores` (`codigo`),
  CONSTRAINT `mercancias_ibfk_2` FOREIGN KEY (`id_compra`) REFERENCES `compras` (`id`)
) ;

--
-- Dumping data for table `mercancias`
--

LOCK TABLES `mercancias` WRITE;
UNLOCK TABLES;

-- Dump completed on 2023-08-16 10:33:41
