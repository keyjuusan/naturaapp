-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: natura_medi
-- ------------------------------------------------------
-- Server version	8.0.32


--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE `empleados` (
  `id` int NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cargo` varchar(10) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
UNLOCK TABLES;

-- Dump completed on 2023-08-16 10:33:41
