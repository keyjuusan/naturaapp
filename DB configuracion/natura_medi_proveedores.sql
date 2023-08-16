-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: natura_medi
-- ------------------------------------------------------
-- Server version	8.0.32


--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores` (
  `codigo` int NOT NULL,
  `telefono` int DEFAULT NULL,
  `empresa` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
UNLOCK TABLES;

-- Dump completed on 2023-08-16 10:33:40
