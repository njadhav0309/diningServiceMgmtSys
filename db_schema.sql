-- MySQL dump 10.13  Distrib 5.7.33, for Linux (x86_64)
--
-- Host: localhost    Database: dining_service_management
-- ------------------------------------------------------
-- Server version	5.7.33-0ubuntu0.16.04.1

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
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(45) DEFAULT NULL,
  `dept_rank` int(11) DEFAULT NULL,
  `head_of_dept` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `dining_unit`
--

DROP TABLE IF EXISTS `dining_unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dining_unit` (
  `DU_id` int(11) NOT NULL AUTO_INCREMENT,
  `DU_name` varchar(45) DEFAULT NULL,
  `director_id` int(11) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `contact` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`DU_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `dining_unit_department`
--

DROP TABLE IF EXISTS `dining_unit_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dining_unit_department` (
  `DU_dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `DU_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `min_employees` int(11) DEFAULT NULL,
  PRIMARY KEY (`DU_dept_id`),
  KEY `DU_id` (`DU_id`),
  CONSTRAINT `dining_unit_department_ibfk_1` FOREIGN KEY (`DU_id`) REFERENCES `dining_unit` (`DU_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `dining_unit_schedule`
--

DROP TABLE IF EXISTS `dining_unit_schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dining_unit_schedule` (
  `DU_schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `DU_id` int(11) NOT NULL,
  `day` enum('MON','TUE','WED','THUR','FRI','SAT','SUN') DEFAULT NULL,
  `start_time` char(5) DEFAULT NULL,
  `end_time` char(5) DEFAULT NULL,
  PRIMARY KEY (`DU_schedule_id`),
  KEY `DU_id` (`DU_id`),
  CONSTRAINT `dining_unit_schedule_ibfk_1` FOREIGN KEY (`DU_id`) REFERENCES `dining_unit` (`DU_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `dining_unit_staff`
--

DROP TABLE IF EXISTS `dining_unit_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dining_unit_staff` (
  `DU_staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `DU_dept_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contact_no` decimal(10,0) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`DU_staff_id`),
  KEY `DU_dept_id` (`DU_dept_id`),
  CONSTRAINT `dining_unit_staff_ibfk_1` FOREIGN KEY (`DU_dept_id`) REFERENCES `dining_unit_department` (`DU_dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `operation_manager`
--

DROP TABLE IF EXISTS `operation_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `operation_manager` (
  `ops_mgr_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_no` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`ops_mgr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(45) DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `local_address` varchar(100) DEFAULT NULL,
  `foreign_address` varchar(100) DEFAULT NULL,
  `contact_no` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  KEY `dept_id` (`dept_id`),
  CONSTRAINT `student_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `student_employment`
--

DROP TABLE IF EXISTS `student_employment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_employment` (
  `student_emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `DU_id` int(11) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `ssn` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `OPS_Mgr_id` int(11) DEFAULT NULL,
  `hourly_wage` int(11) NOT NULL DEFAULT '9',
  PRIMARY KEY (`student_emp_id`),
  KEY `DU_id` (`DU_id`),
  KEY `student_id` (`student_id`),
  KEY `OPS_Mgr_id` (`OPS_Mgr_id`),
  CONSTRAINT `student_employment_ibfk_1` FOREIGN KEY (`DU_id`) REFERENCES `dining_unit` (`DU_id`),
  CONSTRAINT `student_employment_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  CONSTRAINT `student_employment_ibfk_3` FOREIGN KEY (`OPS_Mgr_id`) REFERENCES `operation_manager` (`ops_mgr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `student_work_attendance`
--

DROP TABLE IF EXISTS `student_work_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_work_attendance` (
  `stu_work_attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `attended_date` date DEFAULT NULL,
  `start_time` char(5) DEFAULT NULL,
  `end_time` char(5) DEFAULT NULL,
  `total_hours` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`stu_work_attendance_id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `student_work_attendance_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `student_work_schedule`
--

DROP TABLE IF EXISTS `student_work_schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_work_schedule` (
  `stu_schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `day` enum('MON','TUE','WED','THUR','FRI','SAT','SUN') DEFAULT NULL,
  `start_time` char(5) DEFAULT NULL,
  `end_time` char(5) DEFAULT NULL,
  PRIMARY KEY (`stu_schedule_id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `student_work_schedule_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `student_work_strikes`
--

DROP TABLE IF EXISTS `student_work_strikes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_work_strikes` (
  `stu_work_strikes_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `DU_staff_id` int(11) NOT NULL,
  `action` varchar(45) DEFAULT NULL,
  `reason` varchar(45) DEFAULT NULL,
  `no_of_strikes` int(11) DEFAULT NULL,
  PRIMARY KEY (`stu_work_strikes_id`),
  KEY `student_id` (`student_id`),
  KEY `fk_student_work_strikes_1_idx` (`DU_staff_id`),
  CONSTRAINT `fk_student_work_strikes_1` FOREIGN KEY (`DU_staff_id`) REFERENCES `dining_unit_staff` (`DU_staff_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `student_work_strikes_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-18 10:36:23
