-- MySQL dump 10.13  Distrib 5.5.50, for Linux (x86_64)
--
-- Host: localhost    Database: atikhash_shares
-- ------------------------------------------------------
-- Server version	5.5.50-cll

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
-- Table structure for table `administrative`
--

DROP TABLE IF EXISTS `administrative`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrative` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `value` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrative`
--

LOCK TABLES `administrative` WRITE;
/*!40000 ALTER TABLE `administrative` DISABLE KEYS */;
INSERT INTO `administrative` (`id`, `username`, `password`, `value`) VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','');
/*!40000 ALTER TABLE `administrative` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('0214f863b7ff074c2bda6557a93c5cb8','103.192.159.136','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:47.0) Gecko/20100101 Firefox/47.0',1466964490,'a:3:{s:9:\"user_data\";s:0:\"\";s:4:\"name\";s:5:\"admin\";s:12:\"is_logged_in\";b:1;}'),('02e1a8762d3dfcd4206bdf518a015764','64.79.100.38','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36',1463992023,''),('06ddd5bca1f2a8b3a3f2cea783d8acda','64.79.100.40','Mozilla',1463854011,''),('0ff3e0ccfd27975ea4259c8408b47ae7','64.79.100.38','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36',1463992022,''),('109f9deb415ab4649c0d4dca799f3b32','64.79.100.16','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36',1468511630,''),('174d298d043139f3c9bf0e9434b3dab8','64.79.100.40','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36',1463854010,''),('1a6d412bf50197e63c31f1f4cacb9be2','151.80.44.115','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1463486178,''),('1cea88333ed455c3158c3ad13457eb12','62.210.148.247','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1467781587,''),('3722f0a3ec87335ec54de0eb21221962','158.69.242.114','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1463521337,''),('3763139ee061e64e2e8387bc3115f868','5.9.87.111','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1466145822,''),('40e4b7518e1a05b75c62d97596342c23','5.9.142.226','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1463783839,''),('46d6978ef900f534bda9c4969af2d942','64.79.100.38','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36',1463992024,''),('589c9284d0d2c7d5c985eeb2611af287','158.69.242.114','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1463521340,''),('5da7ef8a481f58214cd8103096c9c887','64.79.100.38','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36',1465857177,''),('68d237f11261b018a2cade5bb48903a7','64.79.100.38','Mozilla',1465857177,''),('70101b7c41db9ccfc166bb24161e957f','64.79.100.12','Mozilla',1463920040,''),('770eca05c1d33d6fdb846472e3adb946','5.9.87.111','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1466145826,''),('7d54df38dca3b7344aeb8b1d8d424857','158.69.225.34','Mozilla/5.0 (compatible; Dataprovider/6.92; +https://www.dataprovider.com/)',1466779367,''),('83ed481c73a3b396a1f37758ce2ae118','69.58.178.59','BlackBerry9000/4.6.0.167 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/102 ips-agent',1465224803,''),('8ded6f870cc49a9e85c9394eeefec303','69.58.178.58','Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1',1466156624,''),('9ba67a7f1df44e62cc336abce6d9aff9','64.79.100.12','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36',1463920040,''),('9df8324bb996974b835959c4840ae20d','5.9.142.226','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1463783836,''),('9e2c0fc0556ba61a9d63afed7de669ed','167.114.209.38','Mozilla/5.0 (compatible; Dataprovider/6.92; +https://www.dataprovider.com/)',1464365351,''),('a4d891191fcd222f5bd7c6839f9c9e01','69.58.178.59','Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1',1468179006,''),('a62517d20ed2e1d4d2e25fe1ec279d7f','149.202.54.34','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1468515752,''),('aef09b5baa5a7a6610bba537d7ce6f93','193.169.52.112','Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2; Win64; x64; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; ',1465524789,''),('af3697bdb58e7a408db60c14e499a678','64.79.100.38','Mozilla',1463992023,''),('b0119777fe4bacf9aa95b61bc6672787','64.79.100.38','Mozilla',1463992024,''),('b10e4934a3cc956f2383ec4cec33588e','5.9.85.4','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1468455663,''),('b9484362d172ad0fe96e96fbfd967515','109.149.176.213','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1468171826,''),('bca7e4bafc7ef42157d5d6c38adb8854','64.79.100.38','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36',1463992023,''),('bd24d5066bf3b77b7e18f9dd3d42e7f0','64.79.100.38','Mozilla',1463992024,''),('c52c0d235046dab84f3c6f4b6dd86c96','144.76.4.148','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1463994634,''),('dd1fbc3730cc9f9e3b98ae46efbd60f7','103.192.159.136','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:47.0) Gecko/20100101 Firefox/47.0',1466964248,''),('dd4b7c7981c4ecd22e6d312539d2348f','149.202.54.34','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1468515750,''),('deaea191ba5348a18aafaa122f75cec0','64.79.100.38','Mozilla',1463992022,''),('eb4187f766001aa145feeaa6a0c3f91e','109.149.176.213','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1468171828,''),('ec9266b099856ea2aeb926b85dcd90ed','64.79.100.16','Mozilla',1468511630,''),('f17b38aeaeb587b5819ba33045cad775','89.221.208.77','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',1464112067,''),('f315ebffa09bc8c0266bf5421b653bae','69.58.178.56','BlackBerry9000/4.6.0.167 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/102 ips-agent',1468465683,''),('f4e9567c0daf013f91df49b1769f6933','193.169.52.112','Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2; Win64; x64; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; ',1465524768,''),('f9359348a9599079fc918fc6bc00e43a','38.100.21.67','Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2)',1466261850,''),('fe9c84a237e97f4008fde38db200230c','38.100.21.78','Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2)',1463586027,'');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `share`
--

DROP TABLE IF EXISTS `share`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shareid` varchar(200) NOT NULL,
  `sharename` varchar(200) NOT NULL,
  `shared` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `share`
--

LOCK TABLES `share` WRITE;
/*!40000 ALTER TABLE `share` DISABLE KEYS */;
INSERT INTO `share` (`id`, `shareid`, `sharename`, `shared`) VALUES (1,'213','fff','ssdd'),(2,'55','4fghjhg','hhgfgfg'),(3,'5555','dfggd','gghg'),(4,'453','hjfghdj','dfgsfghdfg'),(5,'5855','dfgdfgd','dfgfdgfd'),(6,'453','fythhj','fghjhj'),(7,'588585','hjghjfgj','fgjfgjhgj'),(8,'4564','dfhgdh','sdfghdfghgfh'),(9,'452454','rgfghfghfd','dfghfghfghgf'),(10,'455575758','dfgfghfghfgh','dfghdfghdfhfh'),(11,'7528525287','hgjdfhfdsghfsghgfd','dfghfghfghfgh'),(12,'585852','fdgghdfhd','dhfghf');
/*!40000 ALTER TABLE `share` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `terms` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table1`
--

LOCK TABLES `table1` WRITE;
/*!40000 ALTER TABLE `table1` DISABLE KEYS */;
INSERT INTO `table1` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `terms`, `active`) VALUES (1,'atik','feni','atik@sflzone.com','e10adc3949ba59abbe56e057f20f883e','01735623513',0,1),(2,'siyam','hasan','atikhashmee@gmail.com','e10adc3949ba59abbe56e057f20f883e','01735623513',0,0),(3,'siyam','sarker','siyam@gmail.com','e10adc3949ba59abbe56e057f20f883e','01735555555',0,0),(4,'jannat','bristi','jannat@gmail.com','fcea920f7412b5da7be0cf42b8c93759','1234567',0,0),(5,'Admin','','admin@gmail.com','e10adc3949ba59abbe56e057f20f883e','',0,0);
/*!40000 ALTER TABLE `table1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'atikhash_shares'
--

--
-- Dumping routines for database 'atikhash_shares'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-24 17:10:22
