-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: natura_medi
-- ------------------------------------------------------
-- Server version	8.0.32



--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE `compras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_empleado` int NOT NULL,
  `descripcion` text NOT NULL,
  `costo` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_empleado` (`id_empleado`),
  CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`)
) ;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
UNLOCK TABLES;

-- Dump completed on 2023-08-16 10:33:40
