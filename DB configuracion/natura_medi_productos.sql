-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: natura_medi
-- ------------------------------------------------------
-- Server version	8.0.32


--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(20) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `cantidad` tinyint DEFAULT NULL,
  `descripcion` text,
  `presentacion` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
UNLOCK TABLES;

-- Dump completed on 2023-08-16 10:33:40
