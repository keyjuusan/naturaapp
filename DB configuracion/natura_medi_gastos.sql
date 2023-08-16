-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: natura_medi
-- ------------------------------------------------------
-- Server version	8.0.32


--
-- Table structure for table `gastos`
--

DROP TABLE IF EXISTS `gastos`;
CREATE TABLE `gastos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `descripcion` text,
  `id_empleado` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_empleado` (`id_empleado`),
  CONSTRAINT `gastos_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`)
);

--
-- Dumping data for table `gastos`
--

LOCK TABLES `gastos` WRITE;
UNLOCK TABLES;


-- Dump completed on 2023-08-16 10:33:40
