-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2020 at 07:20 PM
-- Server version: 10.1.47-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Table structure for table `examiners`
--
CREATE TABLE examiners(
	tid INT(10)  NOT NULL AUTO_INCREMENT,
	username varchar(100) NOT NULL,
	paswd varchar(1000) NOT NULL,
	full_name varchar(100) NOT NULL,
	PRIMARY KEY (tid)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Table structure for table `1st_examiner_marks`
--
CREATE TABLE 1st_examiner_marks(
	id varchar(20) NOT NULL,
	ct1 float NOT NULL,
	final1 float NOT NULL,
	ct2 float NOT NULL,
	final2 float NOT NULL,
	ct3 float NOT NULL,
	final3 float NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- data dump for table '1st_examiner_marks'
--
INSERT INTO 1st_examiner_marks (id) VALUES ('201101');
INSERT INTO 1st_examiner_marks (id) VALUES ('201102');
INSERT INTO 1st_examiner_marks (id) VALUES ('201103');
INSERT INTO 1st_examiner_marks (id) VALUES ('201104');
INSERT INTO 1st_examiner_marks (id) VALUES ('201105');
--
-- Table structure for table `1st_examiner_marks`
--
CREATE TABLE 2nd_examiner_marks(
	id varchar(20) NOT NULL,
	ct1 float NOT NULL,
	final1 float NOT NULL,
	ct2 float NOT NULL,
	final2 float NOT NULL,
	ct3 float NOT NULL,
	final3 float NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- data dump for table '2nd_examiner_marks'
--
INSERT INTO 2nd_examiner_marks (id) VALUES ('201101');
INSERT INTO 2nd_examiner_marks (id) VALUES ('201102');
INSERT INTO 2nd_examiner_marks (id) VALUES ('201103');
INSERT INTO 2nd_examiner_marks (id) VALUES ('201104');
INSERT INTO 2nd_examiner_marks (id) VALUES ('201105');
--
-- Table structure for table `final_result` 
--
CREATE TABLE final_result(
	student_id varchar(20) NOT NULL,
	iit_001 float NOT NULL,
	iit_002 float NOT NULL,
	iit_003 float NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- data dump for table 'final_result'
--
INSERT INTO final_result (student_id) VALUES ('201101');
INSERT INTO final_result (student_id) VALUES ('201102');
INSERT INTO final_result (student_id) VALUES ('201103');
INSERT INTO final_result (student_id) VALUES ('201104');
INSERT INTO final_result (student_id) VALUES ('201105');

COMMIT;