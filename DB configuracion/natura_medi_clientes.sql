-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: natura_medi
-- ------------------------------------------------------
-- Server version	8.0.32


CREATE TABLE `clientes` (
  `cedula` bigint DEFAULT NULL,
  `telefono` bigint DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;

INSERT INTO `clientes` VALUES (888888888,44444444444,'',1),(209305086,29193405960,'',2),(293249854,99999999999,'',3),(83959209,1209309459,'',4);

UNLOCK TABLES;


-- Dump completed on 2023-08-16 10:33:39
