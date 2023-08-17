-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: natura_medi
-- ------------------------------------------------------
-- Server version	8.0.32


CREATE TABLE `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `cedula` bigint DEFAULT NULL,
  `telefono` bigint DEFAULT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;

UNLOCK TABLES;


-- Dump completed on 2023-08-16 10:33:39
