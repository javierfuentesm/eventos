CREATE DATABASE  IF NOT EXISTS `evento` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `evento`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: evento
-- ------------------------------------------------------
-- Server version	5.6.26-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellMa` varchar(15) NOT NULL,
  `apellPa` varchar(15) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `RFC` varchar(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`id_administrador`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES (1,'contrasena','Edith','Fabregas','Contreras','55403234','dfd3243sds23s','trestres@gmail.com'),(2,'nocontrasena','Katia','Morales','Juares','5534828212','rfcd23csa22f','nocorreo@gmail.com'),(3,'yoquese','Estevan','Angora','cedro','55327621','nsede34dfi21c','manhombre@gmail.com');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno` (
  `id_part` int(11) NOT NULL,
  `boleta` int(11) NOT NULL,
  `escuela` varchar(30) NOT NULL,
  `interes` varchar(30) NOT NULL,
  `socio` int(11) DEFAULT NULL,
  PRIMARY KEY (`boleta`),
  KEY `FK29` (`socio`),
  KEY `FK4` (`id_part`),
  CONSTRAINT `FK2` FOREIGN KEY (`id_part`) REFERENCES `participante` (`id_part`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK27` FOREIGN KEY (`socio`) REFERENCES `socio` (`num_socio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK29` FOREIGN KEY (`socio`) REFERENCES `socio` (`num_socio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK4` FOREIGN KEY (`id_part`) REFERENCES `participante` (`id_part`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (2,348912627,'Mario Moreno','filosofia',NULL),(1,348912640,'Jaime Nuno','fisica',NULL);
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `competidor`
--

DROP TABLE IF EXISTS `competidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `competidor` (
  `id_part` int(11) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `empresa` varchar(20) DEFAULT NULL,
  `socio` int(11) DEFAULT NULL,
  PRIMARY KEY (`rfc`),
  KEY `FK30` (`id_part`),
  KEY `FK31` (`socio`),
  CONSTRAINT `FK30` FOREIGN KEY (`id_part`) REFERENCES `participante` (`id_part`),
  CONSTRAINT `FK31` FOREIGN KEY (`socio`) REFERENCES `socio` (`num_socio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competidor`
--

LOCK TABLES `competidor` WRITE;
/*!40000 ALTER TABLE `competidor` DISABLE KEYS */;
INSERT INTO `competidor` VALUES (2,'238745frdi23n','Macma',NULL);
/*!40000 ALTER TABLE `competidor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `concurso`
--

DROP TABLE IF EXISTS `concurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `concurso` (
  `id_evento` int(11) NOT NULL,
  `id_concurso` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(15) NOT NULL,
  `sala` varchar(15) NOT NULL,
  `premio` varchar(45) NOT NULL,
  PRIMARY KEY (`id_concurso`),
  KEY `FK8` (`id_evento`),
  CONSTRAINT `FK8` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concurso`
--

LOCK TABLES `concurso` WRITE;
/*!40000 ALTER TABLE `concurso` DISABLE KEYS */;
INSERT INTO `concurso` VALUES (7,1,'Ciencias','trece','$200');
/*!40000 ALTER TABLE `concurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `congreso`
--

DROP TABLE IF EXISTS `congreso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `congreso` (
  `id_evento` int(11) NOT NULL,
  `id_congreso` int(11) NOT NULL AUTO_INCREMENT,
  `id_memoria` int(11) NOT NULL,
  PRIMARY KEY (`id_congreso`),
  KEY `FK10` (`id_evento`),
  CONSTRAINT `FK10` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `congreso`
--

LOCK TABLES `congreso` WRITE;
/*!40000 ALTER TABLE `congreso` DISABLE KEYS */;
INSERT INTO `congreso` VALUES (4,1,39247);
/*!40000 ALTER TABLE `congreso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `congreso_especialista`
--

DROP TABLE IF EXISTS `congreso_especialista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `congreso_especialista` (
  `id_congreso` int(11) NOT NULL,
  `especialista` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_congreso`,`especialista`),
  CONSTRAINT `FK13` FOREIGN KEY (`id_congreso`) REFERENCES `congreso` (`id_congreso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `congreso_especialista`
--

LOCK TABLES `congreso_especialista` WRITE;
/*!40000 ALTER TABLE `congreso_especialista` DISABLE KEYS */;
INSERT INTO `congreso_especialista` VALUES (1,'flora urbana'),(1,'Victor trujillo');
/*!40000 ALTER TABLE `congreso_especialista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `congreso_tema`
--

DROP TABLE IF EXISTS `congreso_tema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `congreso_tema` (
  `id_congreso` int(11) NOT NULL,
  `tema` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_congreso`,`tema`),
  CONSTRAINT `FK14` FOREIGN KEY (`id_congreso`) REFERENCES `congreso` (`id_congreso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `congreso_tema`
--

LOCK TABLES `congreso_tema` WRITE;
/*!40000 ALTER TABLE `congreso_tema` DISABLE KEYS */;
/*!40000 ALTER TABLE `congreso_tema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evento`
--

DROP TABLE IF EXISTS `evento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `ISBN` int(11) NOT NULL,
  `titulo_e` varchar(30) NOT NULL,
  `lugar` varchar(20) NOT NULL,
  `clasificacion` varchar(13) NOT NULL,
  `ubicacion` varchar(45) NOT NULL,
  `ubicacion_v` varchar(45) NOT NULL,
  `FechIniReg` date NOT NULL,
  `FechFinReg` date NOT NULL,
  `costo` float NOT NULL,
  `descuento` float DEFAULT NULL,
  `FechPago` date NOT NULL,
  `FechIniEv` date NOT NULL,
  `FechFinEv` date NOT NULL,
  `duracion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evento`
--

LOCK TABLES `evento` WRITE;
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
INSERT INTO `evento` VALUES (4,2143785492,'Congreso social de salud','centro telmex','nacional','calle moneda col.centro','mapa','2014-11-23','2014-12-22',1200,500,'2013-03-10','2015-03-12','2015-03-14',3),(5,2143783392,'feria de sanidad','Visones varias','nacional','calle 2 de noviembre #23','mapa','2014-11-23','2014-12-22',2500,250,'2016-09-08','2016-09-09','2016-09-13',5),(6,2143782392,'simposio de fe','CCT','internacional','calle guerrero s/n','mapa','2014-11-23','2014-12-22',800,120,'2016-10-23','2016-10-23','2015-10-23',1),(7,2143785423,'concurso nacional','centro telmex','nacional','calle moneda col.centro','mapa','2014-11-10','2014-11-12',1200,500,'2015-10-03','2015-10-04','2015-10-05',2);
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evento_organizador`
--

DROP TABLE IF EXISTS `evento_organizador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evento_organizador` (
  `id_evento` int(11) NOT NULL,
  `id_organizador` int(11) NOT NULL,
  PRIMARY KEY (`id_evento`,`id_organizador`),
  KEY `FK24` (`id_organizador`),
  CONSTRAINT `FK19` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK24` FOREIGN KEY (`id_organizador`) REFERENCES `organizador` (`id_organizador`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evento_organizador`
--

LOCK TABLES `evento_organizador` WRITE;
/*!40000 ALTER TABLE `evento_organizador` DISABLE KEYS */;
INSERT INTO `evento_organizador` VALUES (4,1),(5,2),(7,2);
/*!40000 ALTER TABLE `evento_organizador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feria_areas`
--

DROP TABLE IF EXISTS `feria_areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feria_areas` (
  `id_feriadc` int(11) NOT NULL,
  `area` varchar(20) NOT NULL,
  PRIMARY KEY (`id_feriadc`,`area`),
  CONSTRAINT `FK12` FOREIGN KEY (`id_feriadc`) REFERENCES `feria_ciencias` (`id_feriadc`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feria_areas`
--

LOCK TABLES `feria_areas` WRITE;
/*!40000 ALTER TABLE `feria_areas` DISABLE KEYS */;
INSERT INTO `feria_areas` VALUES (1,'ciencias sociales'),(1,'cincias exactas'),(1,'medicina y salud');
/*!40000 ALTER TABLE `feria_areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feria_ciencias`
--

DROP TABLE IF EXISTS `feria_ciencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feria_ciencias` (
  `id_evento` int(11) NOT NULL,
  `id_feriadc` int(11) NOT NULL AUTO_INCREMENT,
  `edadmin` int(11) NOT NULL,
  `edadMax` int(11) NOT NULL,
  PRIMARY KEY (`id_feriadc`),
  KEY `FK9` (`id_evento`),
  CONSTRAINT `FK9` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feria_ciencias`
--

LOCK TABLES `feria_ciencias` WRITE;
/*!40000 ALTER TABLE `feria_ciencias` DISABLE KEYS */;
INSERT INTO `feria_ciencias` VALUES (5,1,5,50);
/*!40000 ALTER TABLE `feria_ciencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestro`
--

DROP TABLE IF EXISTS `maestro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maestro` (
  `id_part` int(11) NOT NULL,
  `num_empleado` int(11) NOT NULL,
  `escuela` varchar(30) NOT NULL,
  `interes` varchar(30) NOT NULL,
  `especialidad` varchar(15) NOT NULL,
  `socio` int(11) DEFAULT NULL,
  PRIMARY KEY (`num_empleado`),
  KEY `FK5` (`id_part`),
  KEY `FK28` (`socio`),
  CONSTRAINT `FK28` FOREIGN KEY (`socio`) REFERENCES `socio` (`num_socio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK5` FOREIGN KEY (`id_part`) REFERENCES `participante` (`id_part`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestro`
--

LOCK TABLES `maestro` WRITE;
/*!40000 ALTER TABLE `maestro` DISABLE KEYS */;
INSERT INTO `maestro` VALUES (3,232,'Jaime bodet','medicina','sociales',8);
/*!40000 ALTER TABLE `maestro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizador`
--

DROP TABLE IF EXISTS `organizador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organizador` (
  `id_organizador` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellMa` varchar(15) NOT NULL,
  `apellPa` varchar(15) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `RFC` varchar(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`id_organizador`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizador`
--

LOCK TABLES `organizador` WRITE;
/*!40000 ALTER TABLE `organizador` DISABLE KEYS */;
INSERT INTO `organizador` VALUES (1,'password','Eruviel','Avila','Camacho','58985839','dsnkoe34ni43b','gupurin@gmail.com'),(2,'jajajaaj','Maria','Flores','Lopez','58998978','dsewds44ni41h','fiel100@gmail.com'),(3,'miramiraque','Fabiola','Mendoza','Sabedra','55988839','rfskoe34ni43b','princesitalove@gmail.com');
/*!40000 ALTER TABLE `organizador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pago`
--

DROP TABLE IF EXISTS `pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pago` (
  `id_evento` int(11) NOT NULL,
  `id_part` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `monto` double NOT NULL,
  PRIMARY KEY (`id_evento`,`id_part`),
  KEY `FK21` (`id_part`),
  CONSTRAINT `FK20` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK21` FOREIGN KEY (`id_part`) REFERENCES `participante` (`id_part`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pago`
--

LOCK TABLES `pago` WRITE;
/*!40000 ALTER TABLE `pago` DISABLE KEYS */;
INSERT INTO `pago` VALUES (5,1,'2016-12-04',1200);
/*!40000 ALTER TABLE `pago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participante`
--

DROP TABLE IF EXISTS `participante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participante` (
  `id_part` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidoP` varchar(10) NOT NULL,
  `apellidoM` varchar(10) NOT NULL,
  `edad` int(11) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `CP` int(11) NOT NULL,
  `cel` varchar(12) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_part`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participante`
--

LOCK TABLES `participante` WRITE;
/*!40000 ALTER TABLE `participante` DISABLE KEYS */;
INSERT INTO `participante` VALUES (1,'misesion','Fabian','Fernandes','Corrijas',22,'55403234','avenida de los dioses.Mexico CDMX',3221,'5543834268','guayMuyguay@gmail.com'),(2,'nolasabes','Eduardo','Duran','Tier',16,'55405234','juan de dios batiz.Mexico CDMX',55710,'5548731980','correo@gmail.com'),(3,'contrasena','Monica','Albacete','America',32,'58206429','calle asuncion .Veracruz Veracruz',4387,'5578394720','flaquito@gmail.com');
/*!40000 ALTER TABLE `participante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registro`
--

DROP TABLE IF EXISTS `registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registro` (
  `id_evento` int(11) NOT NULL,
  `id_part` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_evento`,`id_part`),
  KEY `FK23` (`id_part`),
  CONSTRAINT `FK22` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK23` FOREIGN KEY (`id_part`) REFERENCES `participante` (`id_part`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro`
--

LOCK TABLES `registro` WRITE;
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
INSERT INTO `registro` VALUES (5,1,'2016-12-04');
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `simposio`
--

DROP TABLE IF EXISTS `simposio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `simposio` (
  `id_evento` int(11) NOT NULL,
  `id_simposio` int(11) NOT NULL AUTO_INCREMENT,
  `tema` varchar(20) NOT NULL,
  `id_recopilacion` int(11) NOT NULL,
  PRIMARY KEY (`id_simposio`),
  KEY `FK11` (`id_evento`),
  CONSTRAINT `FK11` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `simposio`
--

LOCK TABLES `simposio` WRITE;
/*!40000 ALTER TABLE `simposio` DISABLE KEYS */;
INSERT INTO `simposio` VALUES (6,1,'La fe',23);
/*!40000 ALTER TABLE `simposio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `simposio_expositores`
--

DROP TABLE IF EXISTS `simposio_expositores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `simposio_expositores` (
  `id_simposio` int(11) NOT NULL,
  `expositores` varchar(25) NOT NULL,
  PRIMARY KEY (`id_simposio`,`expositores`),
  CONSTRAINT `FK15` FOREIGN KEY (`id_simposio`) REFERENCES `simposio` (`id_simposio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `simposio_expositores`
--

LOCK TABLES `simposio_expositores` WRITE;
/*!40000 ALTER TABLE `simposio_expositores` DISABLE KEYS */;
INSERT INTO `simposio_expositores` VALUES (1,'mario benedetti');
/*!40000 ALTER TABLE `simposio_expositores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `simposio_facetas`
--

DROP TABLE IF EXISTS `simposio_facetas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `simposio_facetas` (
  `id_simposio` int(11) NOT NULL,
  `faceta` varchar(20) NOT NULL,
  PRIMARY KEY (`id_simposio`,`faceta`),
  CONSTRAINT `FK16` FOREIGN KEY (`id_simposio`) REFERENCES `simposio` (`id_simposio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `simposio_facetas`
--

LOCK TABLES `simposio_facetas` WRITE;
/*!40000 ALTER TABLE `simposio_facetas` DISABLE KEYS */;
INSERT INTO `simposio_facetas` VALUES (1,'espiritual');
/*!40000 ALTER TABLE `simposio_facetas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `socio`
--

DROP TABLE IF EXISTS `socio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `socio` (
  `num_socio` int(11) NOT NULL AUTO_INCREMENT,
  `descuento` int(11) NOT NULL,
  `id_part` int(11) NOT NULL,
  PRIMARY KEY (`num_socio`),
  KEY `FK1` (`id_part`),
  CONSTRAINT `FK1` FOREIGN KEY (`id_part`) REFERENCES `participante` (`id_part`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socio`
--

LOCK TABLES `socio` WRITE;
/*!40000 ALTER TABLE `socio` DISABLE KEYS */;
INSERT INTO `socio` VALUES (6,200,2),(7,120,1),(8,340,3);
/*!40000 ALTER TABLE `socio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'evento'
--

--
-- Dumping routines for database 'evento'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-15  0:09:46
