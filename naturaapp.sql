-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: natura_medi
-- ------------------------------------------------------
-- Server version	8.0.32


--
-- Table structure for table `clientes`
--

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
INSERT INTO `clientes` VALUES (2,'fanni',948278186,12904456869),(4,'yuseppe',234050600,12000000000),(5,'Antonio',23049590,2390501729);
UNLOCK TABLES;

--
-- Table structure for table `compras`
--

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
);

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

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
INSERT INTO `empleados` VALUES (1,'Fulana','Gerente','1234');
UNLOCK TABLES;

--
-- Table structure for table `gastos`
--

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

--
-- Table structure for table `mercancias`
--

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

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(20) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `cantidad` tinyint DEFAULT NULL,
  `descripcion` text,
  `presentacion` varchar(10) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
INSERT INTO `productos` VALUES (1,'antialergico','loratadina',2,'atialergico para niños de 8 años en adelante','200mg',1.2);
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `codigo` int NOT NULL,
  `telefono` bigint DEFAULT NULL,
  `empresa` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
INSERT INTO `proveedores` VALUES (1,23949563,'Lupes CA'),(2,23949563888,'Juancho CA');
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `hora` time NOT NULL,
  `id_producto` int NOT NULL,
  `id_empleado` int NOT NULL,
  `precio` float NOT NULL,
  `descripcion` text NOT NULL,
  `id_cliente` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_producto` (`id_producto`),
  KEY `id_empleado` (`id_empleado`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`),
  CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`),
  CONSTRAINT `ventas_ibfk_4` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`)
) ;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
INSERT INTO `ventas` VALUES (3,'2001-06-13','13:00:00',1,1,3.5,'1 loratadina',4),(4,'2023-08-31','09:45:49',1,1,12,'asdf',2);
UNLOCK TABLES;

-- Dump completed on 2023-09-11 13:36:42
