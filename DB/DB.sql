CREATE DATABASE  IF NOT EXISTS `live_cricket_updates` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `live_cricket_updates`;
-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: live_cricket_updates
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.10.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE=''+00:00'' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE=''NO_AUTO_VALUE_ON_ZERO'' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `current_detail`
--

DROP TABLE IF EXISTS `current_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `current_detail` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `bowler_player_id` int(11) DEFAULT NULL,
  `inning` tinyint(1) NOT NULL,
  `striker_player_id` varchar(45) DEFAULT NULL,
  `batsman2_player_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_current_details_team1_idx` (`team_id`),
  KEY `fk_current_details_player1_idx` (`bowler_player_id`),
  CONSTRAINT `fk_current_details_player1` FOREIGN KEY (`bowler_player_id`) REFERENCES `player` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_current_details_team1` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `current_detail`
--

LOCK TABLES `current_detail` WRITE;
/*!40000 ALTER TABLE `current_detail` DISABLE KEYS */;
INSERT INTO `current_detail` VALUES (1,1,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `current_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `extra_batsman_score`
--

DROP TABLE IF EXISTS `extra_batsman_score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `extra_batsman_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batsman_player_id` int(11) NOT NULL,
  `over` int(11) NOT NULL,
  `ball` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_extra_batsman_score_player1_idx` (`batsman_player_id`),
  CONSTRAINT `fk_extra_batsman_score_player1` FOREIGN KEY (`batsman_player_id`) REFERENCES `player` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `extra_batsman_score`
--

LOCK TABLES `extra_batsman_score` WRITE;
/*!40000 ALTER TABLE `extra_batsman_score` DISABLE KEYS */;
/*!40000 ALTER TABLE `extra_batsman_score` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `extra_team_score`
--

DROP TABLE IF EXISTS `extra_team_score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `extra_team_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inning` tinyint(1) NOT NULL,
  `team_id` int(11) NOT NULL,
  `over` int(11) NOT NULL,
  `type` char(2) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_extra_team_score_team1_idx` (`team_id`),
  CONSTRAINT `fk_extra_team_score_team1` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `extra_team_score`
--

LOCK TABLES `extra_team_score` WRITE;
/*!40000 ALTER TABLE `extra_team_score` DISABLE KEYS */;
INSERT INTO `extra_team_score` VALUES (1,1,1,10,''wd'',4),(2,1,1,10,''wd'',4);
/*!40000 ALTER TABLE `extra_team_score` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT ''1'',
  PRIMARY KEY (`id`),
  KEY `fk_player_team_idx` (`team_id`),
  CONSTRAINT `fk_player_team` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player`
--

LOCK TABLES `player` WRITE;
/*!40000 ALTER TABLE `player` DISABLE KEYS */;
/*!40000 ALTER TABLE `player` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inning` tinyint(1) NOT NULL,
  `team_id` int(11) NOT NULL,
  `batsman_player_id` int(11) NOT NULL,
  `bowler_player_id` int(11) NOT NULL,
  `over` varchar(45) NOT NULL,
  `ball` varchar(45) NOT NULL,
  `score` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_score_player1_idx` (`batsman_player_id`),
  KEY `fk_score_player2_idx` (`bowler_player_id`),
  KEY `fk_score_team1_idx` (`team_id`),
  CONSTRAINT `fk_score_player1` FOREIGN KEY (`batsman_player_id`) REFERENCES `player` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_score_player2` FOREIGN KEY (`bowler_player_id`) REFERENCES `player` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_score_team1` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `score`
--

LOCK TABLES `score` WRITE;
/*!40000 ALTER TABLE `score` DISABLE KEYS */;
/*!40000 ALTER TABLE `score` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,''sack'',1),(2,''tck'',1);
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wicket`
--

DROP TABLE IF EXISTS `wicket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wicket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batsman_player_id` int(11) NOT NULL,
  `bowler_player_id` int(11) NOT NULL,
  `inning` tinyint(1) NOT NULL,
  `d_type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_wicket_player1_idx` (`batsman_player_id`),
  KEY `fk_wicket_player2_idx` (`bowler_player_id`),
  CONSTRAINT `fk_wicket_player1` FOREIGN KEY (`batsman_player_id`) REFERENCES `player` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_wicket_player2` FOREIGN KEY (`bowler_player_id`) REFERENCES `player` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wicket`
--

LOCK TABLES `wicket` WRITE;
/*!40000 ALTER TABLE `wicket` DISABLE KEYS */;
/*!40000 ALTER TABLE `wicket` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-08  3:59:17