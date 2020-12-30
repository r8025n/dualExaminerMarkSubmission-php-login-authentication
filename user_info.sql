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

CREATE TABLE 'examiners'(
	'username' varchar(100) NOT NULL;
	'password' varchar(1000) NOT NULL;
	'full_name' varchar(100) NOT NULL;
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data for table `examiners`
--
INSERT into 'examiners' values ('t001','99A0C02B28D4DF6250F38FACBF72319D6DBA2CC54E04929A4438CEBBC4FA2F6BEB372A50D8383BB6B5C71234E2DD78047E72CD47F576575D161F06D6CE0980BC','Examiner_1');
INSERT into 'examiners' values ('t002','DFB90AFAF78BC5F9CCD89DD02999A8A4C69F198508A19163EC3728B4F56890D7F8FEE81A25831212D84581F013993A91E3DFD5DF84C7D67E776DC5970D7DE432','Examiner_2');
--
-- Indexes for table `user`
--
ALTER TABLE `examiners`
  ADD PRIMARY KEY (`username`);
COMMIT;