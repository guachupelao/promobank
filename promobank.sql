--
-- Table structure for table `comunas`
--

DROP TABLE IF EXISTS `comunas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comunas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `region_id` int NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunas`
--

LOCK TABLES `comunas` WRITE;
/*!40000 ALTER TABLE `comunas` DISABLE KEYS */;
INSERT INTO `comunas` VALUES (1,'Temuco',2,'2021-11-20 17:06:32','2021-11-20 17:06:32'),(2,'Concepción',3,'2021-11-20 17:06:32','2021-11-20 17:37:36'),(3,'San Miguel',1,'2021-11-20 17:06:32','2021-11-20 17:06:32'),(4,'Recoleta',1,'2021-11-20 17:06:32','2021-11-20 17:06:32'),(5,'Paine',1,'2021-11-20 17:35:24','2021-11-20 17:35:57');
/*!40000 ALTER TABLE `comunas` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rut` varchar(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `comuna_id` int NOT NULL,
  `date_in` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` VALUES (1,'16800356-9','Gabriela Nuñez Espinoza','gabriela.nunez@hotmail.com','San Martin 3345',1,'2021-11-22 21:27:08','2021-11-27 17:09:21'),(2,'1232561-4','Juan Perez Cotapos','jperez.c@gmail.com','Las Garzas 3365',1,'2021-12-06 20:36:36','2021-12-06 20:36:36'),(3,'1232561-4','Javiera Fernanda Gonzalez Fuentes','jgonzalez@gmail.com','Los alerces 0023',1,'2021-12-13 20:04:13','2021-12-13 20:04:13'),(4,'18792304-2','Raul Mora Jimenez','raul.mora@aiep.cl','Ohiggins 1014',3,'2021-12-18 15:51:41','2021-12-18 15:51:41');
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `funcionario_rol`
--

DROP TABLE IF EXISTS `funcionario_rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario_rol` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario_id` int NOT NULL,
  `rol_id` int NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario_rol`
--

LOCK TABLES `funcionario_rol` WRITE;
/*!40000 ALTER TABLE `funcionario_rol` DISABLE KEYS */;
INSERT INTO `funcionario_rol` VALUES (2,1,2,'2021-11-29 20:43:18','2021-11-29 21:37:37'),(4,1,1,'2021-12-13 19:40:43','2021-12-13 19:40:43'),(5,3,3,'2021-12-13 20:08:12','2021-12-13 20:08:12'),(6,4,3,'2021-12-18 15:54:30','2021-12-18 15:54:30'),(9,2,2,'2022-03-28 16:02:20','2022-03-28 16:02:20');
/*!40000 ALTER TABLE `funcionario_rol` ENABLE KEYS */;
UNLOCK TABLES;



--
-- Table structure for table `regiones`
--

DROP TABLE IF EXISTS `regiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `regiones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regiones`
--

LOCK TABLES `regiones` WRITE;
/*!40000 ALTER TABLE `regiones` DISABLE KEYS */;
INSERT INTO `regiones` VALUES (1,'Metropolitana de Santiago','2021-11-20 17:07:34','2021-11-20 17:07:34'),(2,'De la Araucania','2021-11-20 17:07:34','2021-11-20 17:07:34'),(3,'Del Biobio','2021-11-20 17:07:34','2021-11-20 17:07:34'),(4,'Del Maule','2021-11-20 16:34:44','2021-11-20 17:38:03');
/*!40000 ALTER TABLE `regiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador(a)','2021-11-27 17:34:45','2021-11-29 21:38:18'),(2,'Supervisor(a)','2021-11-29 20:13:58','2021-11-29 21:38:38'),(3,'Veterinario(a)','2021-11-29 20:14:20','2021-11-29 21:38:52');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Pendiente','2022-03-23 09:42:16','2022-03-23 09:42:16'),(2,'Autorizada','2022-03-23 09:42:52','2022-03-23 09:42:52'),(3,'Realizada','2022-03-23 09:43:17','2022-03-23 09:43:17'),(4,'Rechazada','2022-03-23 09:43:25','2022-03-23 09:43:25');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;





-
-- Table structure for table `telefonos`
--

DROP TABLE IF EXISTS `telefonos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `telefonos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` int NOT NULL,
  `movil` int NOT NULL,
  `telefonoable_id` int NOT NULL,
  `telefonoable_type` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefonos`
--

LOCK TABLES `telefonos` WRITE;
/*!40000 ALTER TABLE `telefonos` DISABLE KEYS */;
INSERT INTO `telefonos` VALUES (1,956874563,1,1,'Funcionario','2021-12-13 22:11:55','2021-12-13 22:11:55'),(5,885645783,1,1,'Cliente','2021-12-27 22:30:49','2021-12-27 22:30:49'),(6,968743629,1,2,'Cliente','2022-01-19 01:39:40','2022-01-19 01:39:40');
/*!40000 ALTER TABLE `telefonos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `clave` varchar(255) NOT NULL,
  `activo` int NOT NULL,
  `funcionario_id` int NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'163bb9b6ef44ff46d9718d0e842dd7502e96030b',1,1,'2021-12-06 20:21:05','2021-12-11 17:28:36'),(2,'63aa9f5a93688fd219c1fb6a41a456019dd58378',1,2,'2021-12-13 20:02:50','2021-12-13 20:02:50'),(3,'63aa9f5a93688fd219c1fb6a41a456019dd58378',1,3,'2021-12-13 20:08:28','2021-12-20 20:38:00'),(4,'e1cdf89f35036e5d46e6ebe7af940f1a30cc7e60',1,4,'2022-01-21 18:28:23','2022-01-21 18:28:23');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacaciones`
--
DROP TABLE IF EXISTS `vacaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vacaciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `days_funcionario` int NOT NULL,
  `days_solicitados` varchar(255) NOT NULL,
  `razon` varchar(255) NOT NULL,
  `observaciones` varchar(500) NOT NULL,
  `motivo` varchar(500) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `date_init` date NOT NULL,
  `funcionario_id` int NOT NULL,
  `status_id` int NOT NULL,
  `usuario_id` int NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

INSERT INTO `vacaciones` VALUES (1,'13','xxxx','xxxxx','vacaciones','2022-05-27',2);


