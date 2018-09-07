-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.22


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema jntufaculty
--

CREATE DATABASE IF NOT EXISTS jntufaculty;
USE jntufaculty;

--
-- Definition of table `booktl`
--

DROP TABLE IF EXISTS `booktl`;
CREATE TABLE `booktl` (
  `bookid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `booktitle` varchar(100) NOT NULL,
  `bookpublisher` varchar(100) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booktl`
--

/*!40000 ALTER TABLE `booktl` DISABLE KEYS */;
/*!40000 ALTER TABLE `booktl` ENABLE KEYS */;


--
-- Definition of table `conferencestl`
--

DROP TABLE IF EXISTS `conferencestl`;
CREATE TABLE `conferencestl` (
  `confid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agencyname` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `cdate` date NOT NULL,
  `role` varchar(45) NOT NULL,
  `days` int(10) unsigned NOT NULL,
  `todate` varchar(45) NOT NULL,
  `additionalinfo` varchar(100) NOT NULL,
  `type` varchar(45) NOT NULL,
  `userid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`confid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conferencestl`
--

/*!40000 ALTER TABLE `conferencestl` DISABLE KEYS */;
INSERT INTO `conferencestl` (`confid`,`agencyname`,`title`,`cdate`,`role`,`days`,`todate`,`additionalinfo`,`type`,`userid`) VALUES 
 (1,'UGC','Sample','2017-04-25','Conducted',2,'2017/04/26','nthg','National',2),
 (2,'AICTE','Sample2','2017-03-25','Attended',2,'2017/03/26','ad','International',2);
/*!40000 ALTER TABLE `conferencestl` ENABLE KEYS */;


--
-- Definition of table `dept_tl`
--

DROP TABLE IF EXISTS `dept_tl`;
CREATE TABLE `dept_tl` (
  `dept_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(45) NOT NULL,
  `dept_descr` varchar(100) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_tl`
--

/*!40000 ALTER TABLE `dept_tl` DISABLE KEYS */;
INSERT INTO `dept_tl` (`dept_id`,`dept_name`,`dept_descr`) VALUES 
 (1,'B.Tech CSE','CSE');
/*!40000 ALTER TABLE `dept_tl` ENABLE KEYS */;


--
-- Definition of table `journaltl`
--

DROP TABLE IF EXISTS `journaltl`;
CREATE TABLE `journaltl` (
  `journalid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `pdate` date NOT NULL,
  `pageno` varchar(45) NOT NULL,
  `valume` varchar(45) NOT NULL,
  `isbn` varchar(45) NOT NULL,
  `issnno` varchar(45) NOT NULL,
  `userid` varchar(45) NOT NULL,
  PRIMARY KEY (`journalid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journaltl`
--

/*!40000 ALTER TABLE `journaltl` DISABLE KEYS */;
INSERT INTO `journaltl` (`journalid`,`type`,`title`,`name`,`pdate`,`pageno`,`valume`,`isbn`,`issnno`,`userid`) VALUES 
 (1,'National','Sample','s','2017-05-02','1','1','111','1111','2');
/*!40000 ALTER TABLE `journaltl` ENABLE KEYS */;


--
-- Definition of table `patenttl`
--

DROP TABLE IF EXISTS `patenttl`;
CREATE TABLE `patenttl` (
  `pentid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `issauth` varchar(45) NOT NULL,
  `patentno` varchar(45) NOT NULL,
  `validperiod` varchar(45) NOT NULL,
  `userid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pentid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patenttl`
--

/*!40000 ALTER TABLE `patenttl` DISABLE KEYS */;
INSERT INTO `patenttl` (`pentid`,`title`,`issauth`,`patentno`,`validperiod`,`userid`) VALUES 
 (1,'Sample','s','1','11',2);
/*!40000 ALTER TABLE `patenttl` ENABLE KEYS */;


--
-- Definition of table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `profileId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(10) unsigned NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `exp` varchar(45) NOT NULL,
  `industry` varchar(45) NOT NULL,
  `teaching` varchar(45) NOT NULL,
  `research` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`profileId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` (`profileId`,`userId`,`qualification`,`exp`,`industry`,`teaching`,`research`,`type`) VALUES 
 (1,3,'MCA','10','5','5','5',''),
 (2,2,'Ph.D','8','7','2','10','');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;


--
-- Definition of table `researchtl`
--

DROP TABLE IF EXISTS `researchtl`;
CREATE TABLE `researchtl` (
  `researchid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `spagency` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `worth` varchar(45) NOT NULL,
  `sandate` date NOT NULL,
  `status` varchar(45) NOT NULL,
  `additionalinfo` varchar(1000) NOT NULL,
  `userid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`researchid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researchtl`
--

/*!40000 ALTER TABLE `researchtl` DISABLE KEYS */;
INSERT INTO `researchtl` (`researchid`,`spagency`,`title`,`worth`,`sandate`,`status`,`additionalinfo`,`userid`) VALUES 
 (1,'UGC','SampleRe','10000','2017-03-25','Ongoing','nthg',2);
/*!40000 ALTER TABLE `researchtl` ENABLE KEYS */;


--
-- Definition of table `user_tl`
--

DROP TABLE IF EXISTS `user_tl`;
CREATE TABLE `user_tl` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_type` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `dept_id` int(10) unsigned NOT NULL,
  `faculty_code` varchar(45) NOT NULL,
  `email_id` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mobile_no` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tl`
--

/*!40000 ALTER TABLE `user_tl` DISABLE KEYS */;
INSERT INTO `user_tl` (`user_id`,`user_type`,`first_name`,`last_name`,`status`,`dept_id`,`faculty_code`,`email_id`,`username`,`password`,`mobile_no`) VALUES 
 (1,'Admin','Admin','Admin','Active',0,'1','admin@gmail.com','admin','admin','999999999'),
 (2,'Professor','Suresh Babu','A','Active',1,'JNU101','challamteja@gmail.com','suresh','suresh@7299','9700273944'),
 (3,'Professor','Hussain','basha','Active',1,'JNU102','bhashahussain@gmail.com','bhasha9','sha90273944','9700273944');
/*!40000 ALTER TABLE `user_tl` ENABLE KEYS */;


--
-- Definition of table `workshoptl`
--

DROP TABLE IF EXISTS `workshoptl`;
CREATE TABLE `workshoptl` (
  `workshopid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `spagency` varchar(45) NOT NULL,
  `wdate` date NOT NULL,
  `tdate` date NOT NULL,
  `days` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `userid` int(10) unsigned NOT NULL,
  `additionalinfo` varchar(1000) NOT NULL,
  PRIMARY KEY (`workshopid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshoptl`
--

/*!40000 ALTER TABLE `workshoptl` DISABLE KEYS */;
INSERT INTO `workshoptl` (`workshopid`,`title`,`spagency`,`wdate`,`tdate`,`days`,`role`,`type`,`userid`,`additionalinfo`) VALUES 
 (1,'Sample','UGC','2017-03-25','2017-04-26','2','Conducted','National',2,'ntg');
/*!40000 ALTER TABLE `workshoptl` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
