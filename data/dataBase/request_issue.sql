-- MySQL dump 10.13  Distrib 5.6.21, for osx10.6 (x86_64)
--
-- Host: localhost    Database: Issues
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `request_issue`
--

DROP TABLE IF EXISTS `request_issue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request_issue` (
  `recordID` int(10) NOT NULL AUTO_INCREMENT,
  `createdBy` varchar(10) NOT NULL,
  `createDate` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `assignedUser` varchar(50) NOT NULL,
  `status` varchar(6) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `detailDescription` varchar(50) NOT NULL,
  `recordType` varchar(2) NOT NULL,
  `issueStartTime` varchar(10) DEFAULT NULL,
  `issueEndTime` varchar(10) DEFAULT NULL,
  `issueType` varchar(10) DEFAULT NULL,
  `requestDueDate` varchar(10) DEFAULT NULL,
  `plannedImplementDate` varchar(10) DEFAULT NULL,
  `outcome` varchar(10) DEFAULT NULL,
  `outcomeComments` varchar(50) DEFAULT NULL,
  `userID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`recordID`),
  KEY `userID` (`userID`),
  CONSTRAINT `request_issue_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request_issue`
--

LOCK TABLES `request_issue` WRITE;
/*!40000 ALTER TABLE `request_issue` DISABLE KEYS */;
/*!40000 ALTER TABLE `request_issue` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-27 15:58:29
