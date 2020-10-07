-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 12:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genhr`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(14) NOT NULL,
  `emp_id` varchar(64) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `address` varchar(512) DEFAULT NULL,
  `type` enum('Present','Permanent') DEFAULT 'Present'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assign_leave`
--

CREATE TABLE `assign_leave` (
  `id` int(14) NOT NULL,
  `app_id` varchar(11) NOT NULL,
  `emp_id` varchar(64) DEFAULT NULL,
  `type_id` int(14) NOT NULL,
  `day` varchar(256) DEFAULT NULL,
  `hour` varchar(255) NOT NULL,
  `total_day` varchar(64) DEFAULT NULL,
  `dateyear` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(14) NOT NULL,
  `emp_id` varchar(64) DEFAULT NULL,
  `atten_date` varchar(64) DEFAULT NULL,
  `signin_time` time DEFAULT NULL,
  `signout_time` time DEFAULT NULL,
  `working_hour` varchar(64) DEFAULT NULL,
  `place` varchar(255) NOT NULL,
  `absence` varchar(128) DEFAULT NULL,
  `overtime` varchar(128) DEFAULT NULL,
  `earnleave` varchar(128) DEFAULT NULL,
  `status` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `emp_id`, `atten_date`, `signin_time`, `signout_time`, `working_hour`, `place`, `absence`, `overtime`, `earnleave`, `status`) VALUES
(993, '4', '2018-04-09', '11:00:00', '19:29:00', '247 min', 'office', '232 min', '149 min', NULL, 'A'),
(994, '20', '2018-04-12', '09:00:00', '17:00:00', '480', '', NULL, NULL, NULL, 'E'),
(995, '20', '2018-04-13', '09:00:00', '17:00:00', '480', '', NULL, NULL, NULL, 'E'),
(996, '20', '2018-04-14', '09:00:00', '17:00:00', '480', '', NULL, NULL, NULL, 'E'),
(997, '20', '2018-04-15', '09:00:00', '17:00:00', '480', '', NULL, NULL, NULL, 'E'),
(998, '2', '2018-02-20', '10:00:00', '17:00:00', '0 min', 'office', '429 min', '0 min', NULL, 'A'),
(999, '3', '2018-02-21', '09:00:00', '18:00:00', '0 min', 'office', '480 min', '0 min', NULL, 'A'),
(1000, '4', '2018-02-22', '09:00:00', '19:00:00', '247 min', 'office', '232 min', '149 min', NULL, 'A'),
(1001, '12', '2018-03-02', '01:00:00', '03:00:00', '396 min', 'office', '83 min', '142 min', NULL, 'A'),
(1002, '13', '2018-03-03', '02:00:00', '04:00:00', '480 min', 'office', '0 min', '34 min', NULL, 'A'),
(1003, '14', '2018-03-04', '03:00:00', '05:00:00', '399 min', 'office', '80 min', '152 min', NULL, 'A'),
(1004, '15', '2018-03-05', '04:00:00', '06:00:00', '480 min', 'office', '0 min', '133 min', NULL, 'A'),
(1005, '16', '2018-03-06', '05:00:00', '07:00:00', '0 min', 'office', '480 min', '0 min', NULL, 'A'),
(1006, '17', '2018-03-07', '06:00:00', '08:00:00', '480 min', 'office', '0 min', '286 min', NULL, 'A'),
(1007, '18', '2018-03-08', '07:00:00', '09:00:00', '431 min', 'office', '0 min', '140 min', NULL, 'A'),
(1008, '19', '2018-03-09', '08:00:00', '10:00:00', '377 min', 'office', '102 min', '192 min', NULL, 'A'),
(1009, '24', '2018-03-14', '01:00:00', '15:00:00', '433 min', 'office', '0 min', '140 min', NULL, 'A'),
(1010, '25', '2018-03-15', '02:00:00', '16:00:00', '480 min', 'office', '0 min', '0 min', NULL, 'A'),
(1011, '26', '2018-02-20', '03:00:00', '17:00:00', '339 min', 'office', '140 min', '178 min', NULL, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dep_name` varchar(64) NOT NULL,
  `created_by` varchar(225) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dep_name`, `created_by`, `date_created`) VALUES
(2, 'Information Technology', 'Kiyawa', '2020-09-02'),
(3, 'Administration', 'Kiyawa', '2020-09-03'),
(4, 'Finance, HR,', 'Kiyawa', '2020-09-03'),
(5, 'Research', 'cyber', '2020-08-31'),
(6, 'Support', 'Kiyawa', '2020-09-03'),
(9, 'Management', 'cyber', '2020-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `desciplinary`
--

CREATE TABLE `desciplinary` (
  `id` int(14) NOT NULL,
  `em_id` varchar(64) DEFAULT NULL,
  `action` varchar(256) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `description` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `des_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `des_name`) VALUES
(2, 'Vice Chairman'),
(3, 'Chief Executive Officer (CEO)'),
(4, 'Chief Finance & Admin Officer'),
(5, 'Sr. Finance & Admin Officer - I'),
(6, 'Jr. Finance & Admin Officer'),
(7, 'Senior Research Associate-1'),
(8, 'Research Associate-1'),
(9, 'Junior Research Associate'),
(10, 'Research Assistant'),
(11, 'Sr. Office Assistant'),
(12, 'Office Assistant'),
(13, 'IT Analyst'),
(14, 'Cook');

-- --------------------------------------------------------

--
-- Table structure for table `earned_leave`
--

CREATE TABLE `earned_leave` (
  `id` int(14) NOT NULL,
  `em_id` varchar(64) DEFAULT NULL,
  `present_date` varchar(64) DEFAULT NULL,
  `hour` varchar(64) DEFAULT NULL,
  `status` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `earned_leave`
--

INSERT INTO `earned_leave` (`id`, `em_id`, `present_date`, `hour`, `status`) VALUES
(26, 'Mir1685', '0', '0', '1'),
(27, 'Rah1682', '0', '0', '1'),
(28, 'edr1432', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `em_id` varchar(64) DEFAULT NULL,
  `em_code` varchar(64) DEFAULT NULL,
  `des_id` int(11) DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `first_name` varchar(128) DEFAULT NULL,
  `last_name` varchar(128) DEFAULT NULL,
  `em_email` varchar(64) DEFAULT NULL,
  `em_password` varchar(512) NOT NULL,
  `em_role` enum('ADMIN','EMPLOYEE','SUPER ADMIN') NOT NULL DEFAULT 'EMPLOYEE',
  `em_address` varchar(512) DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'ACTIVE',
  `em_gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `em_phone` varchar(64) DEFAULT NULL,
  `em_birthday` varchar(128) DEFAULT NULL,
  `em_blood_group` enum('O+','O-','A+','A-','B+','B-','AB+','OB+') DEFAULT NULL,
  `em_joining_date` varchar(128) DEFAULT NULL,
  `em_contact_end` varchar(128) DEFAULT NULL,
  `em_image` varchar(128) DEFAULT NULL,
  `em_nid` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `em_id`, `em_code`, `des_id`, `dep_id`, `first_name`, `last_name`, `em_email`, `em_password`, `em_role`, `em_address`, `status`, `em_gender`, `em_phone`, `em_birthday`, `em_blood_group`, `em_joining_date`, `em_contact_end`, `em_image`, `em_nid`) VALUES
(10, 'Soy1332', '99', 0, 0, 'Dir', 'Soyeb', 'nawjeshbd@gmail.com', '996a3778768a2c3ea7c5b586fdfc92051dfdd39c', 'SUPER ADMIN', NULL, 'ACTIVE', 'Female', '01723177901', '2017-12-26', 'B+', '2018-01-06', '2018-01-06', 'Soy1332.jpg', '132154566556'),
(36, 'Doe1753', '123456', 12, 2, 'Jhon', 'Doe', 'admin@gmail.com', 'cd5ea73cd58f827fa78eef7197b8ee606c99b2e6', 'ADMIN', NULL, 'ACTIVE', 'Male', 'admin123456', '2019-02-13', 'O+', '2019-02-15', '2019-02-22', 'Doe1753.jpg', '01253568955555'),
(37, 'Doe1754', '123444', 12, 2, 'Jhon', 'Doe', 'employee@gmail.com', 'cd5ea73cd58f827fa78eef7197b8ee606c99b2e6', 'EMPLOYEE', NULL, 'ACTIVE', 'Male', 'abc123456', '2019-02-13', 'O+', '2019-02-15', '2019-02-22', 'Doe1753.jpg', '01253568955555');

-- --------------------------------------------------------

--
-- Table structure for table `employee_file`
--

CREATE TABLE `employee_file` (
  `id` int(14) NOT NULL,
  `em_id` varchar(64) DEFAULT NULL,
  `file_title` varchar(512) DEFAULT NULL,
  `file_url` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emp_experience`
--

CREATE TABLE `emp_experience` (
  `id` int(14) NOT NULL,
  `emp_id` varchar(256) DEFAULT NULL,
  `exp_company` varchar(128) DEFAULT NULL,
  `exp_com_position` varchar(128) DEFAULT NULL,
  `exp_com_address` varchar(128) DEFAULT NULL,
  `exp_workduration` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave`
--

CREATE TABLE `emp_leave` (
  `id` int(11) NOT NULL,
  `em_id` varchar(64) DEFAULT NULL,
  `typeid` int(14) NOT NULL,
  `leave_type` varchar(64) DEFAULT NULL,
  `start_date` varchar(64) DEFAULT NULL,
  `end_date` varchar(64) DEFAULT NULL,
  `leave_duration` varchar(128) DEFAULT NULL,
  `apply_date` varchar(64) DEFAULT NULL,
  `reason` varchar(1024) DEFAULT NULL,
  `leave_status` enum('Approve','Not Approve','Rejected') NOT NULL DEFAULT 'Not Approve'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_penalty`
--

CREATE TABLE `emp_penalty` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `penalty_id` int(11) NOT NULL,
  `penalty_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `id` int(11) NOT NULL,
  `holiday_name` varchar(256) DEFAULT NULL,
  `from_date` varchar(64) DEFAULT NULL,
  `to_date` varchar(64) DEFAULT NULL,
  `number_of_days` varchar(64) DEFAULT NULL,
  `year` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `holiday_name`, `from_date`, `to_date`, `number_of_days`, `year`) VALUES
(1, 'Aids Day', '2017-12-21', '2017-12-29', '2', '2017'),
(3, 'Language Day', '2018-02-21', '2018-02-21', '1', '02-2018'),
(4, 'independent day', '2018-03-26', '', '1', '03-2018');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `type_id` int(14) NOT NULL,
  `name` varchar(64) NOT NULL,
  `leave_day` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`type_id`, `name`, `leave_day`, `status`) VALUES
(1, 'Casual Leave', '21', 1),
(2, 'Sick Leave', '15', 1),
(3, 'Maternity Leave', '90', 1),
(4, 'Paternal Leave', '7', 1),
(5, 'Earned leave', '', 1),
(7, 'Public Holiday', '', 1),
(8, 'Optional Leave', '', 1),
(9, 'Leave without Pay', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `news_headline` varchar(225) NOT NULL,
  `news_body` text NOT NULL,
  `news_poster_name` varchar(225) NOT NULL,
  `news_poster_email` varchar(225) NOT NULL,
  `news_photo` varchar(225) NOT NULL,
  `time_posted` time NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_headline`, `news_body`, `news_poster_name`, `news_poster_email`, `news_photo`, `time_posted`, `date_posted`) VALUES
(4, 'How Matawalle makes Zamfara COVID-19 free', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavirus in the state. \r\n\r\nâ€œPresently there is no single active case of covid-19 in zamfara,â€\r\n they said. While speaking to journalists in Gusau,Executive Director of the NGO, Dr.Sani Abdullahi Shinkafi said Governor Matawalle has made giant effort\r\n\r\n\r\nâ€œPresently there is no single active case of covid-19 in zamfara,â€\r\n they said. While speaking to journalists in Gusau,Executive Director of the NGO, Dr.Sani Abdullahi Shinkafi said Governor Matawalle has made giant effort\r\n\r\nâ€œPresently there is no single active case of covid-19 in zamfara,â€\r\n they said. While speaking to journalists in Gusau,Executive Director of the NGO, Dr.Sani Abdullahi Shinkafi said Governor Matawalle has made giant effort', 'Kiyawa', 'kiyawa@gmail.com', 'upload/5f633836f312f0.90938183.jpg', '03:06:00', '2020-09-16'),
(7, 'Zamfara gets CBN approval to finance 60,000 farmers', 'Zamfara state government has secured approval from the Central Bank of Nigeria (CBN), to finance a total of 60,000 farmers through their commodity associations.\r\n\r\nThis was announced by the special adviser to the governor, Zamfara State Directorate of Acc', 'Kiyawa', 'kiyawa@gmail.com', 'upload/5f63423a660cc1.15380375.jpg', '14:40:00', '2020-10-01'),
(9, 'How Matawalle makes Zamfara COVID-19 free', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'cyber', 'cyber@gmail.com', 'upload/5f69e6a9605d15.83753964.jpg', '03:04:00', '2020-09-08'),
(10, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'cyber', 'cyber@gmail.com', 'upload/5f69e6bfc6e017.51054086.jpg', '16:04:00', '2020-09-08'),
(11, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'kiyawa', 'kiyawa@gmail.com', 'upload/5f69e6fc56be33.47396468.jpg', '16:04:00', '2020-09-08'),
(12, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'kiyawa', 'kiyawa@gmail.com', 'upload/5f69e7046553a8.55941433.jpg', '16:04:00', '2020-09-08'),
(13, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'kiyawa', 'kiyawa@gmail.com', 'upload/5f69e70905f399.40968824.jpg', '16:04:00', '2020-09-08'),
(14, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'kiyawa', 'kiyawa@gmail.com', 'upload/5f69e70d095ad9.68952207.jpg', '16:04:00', '2020-09-08'),
(15, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'kiyawa', 'kiyawa@gmail.com', 'upload/5f69e70f8598d7.49550350.jpg', '16:04:00', '2020-09-08'),
(16, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'kiyawa', 'kiyawa@gmail.com', 'upload/5f69e718c84445.12972601.jpg', '16:04:00', '2020-09-08'),
(17, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'kiyawa', 'kiyawa@gmail.com', 'upload/5f69e71bd5e944.86995836.jpg', '16:04:00', '2020-09-08'),
(18, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'kiyawa', 'kiyawa@gmail.com', 'upload/5f69e71e3795b9.66796079.jpg', '16:04:00', '2020-09-08'),
(19, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'kiyawa', 'kiyawa@gmail.com', 'upload/5f69e720624335.43529696.jpg', '16:04:00', '2020-09-08'),
(20, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'cyber', 'cyber@gmail.com', 'upload/5f69e7427795d2.06485294.jpg', '16:04:00', '2020-09-08'),
(21, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'cyber', 'cyber@gmail.com', 'upload/5f69e745160704.51457281.jpg', '16:04:00', '2020-09-08'),
(22, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'cyber', 'cyber@gmail.com', 'upload/5f69e7478833f6.41361774.jpg', '16:04:00', '2020-09-08'),
(24, 'â€˜How Matawalle makes Zamfara COVID-19 freeâ€™', 'The Executive Director of a nongovernmental organization (NGO),Patriots For The  Advancement Of Peace  And Development in Nigeria, has lauded the efforts of the  Zamfara State Governor ,Mohammed Bello Matawalle towards controlling  the spread of  coronavi', 'cyber', 'cyber@gmail.com', 'upload/5f6b398bd15545.51961801.jpg', '16:04:00', '2020-09-08'),
(26, 'Zamfara gets CBN approval to finance 60,000 farmers', 'Zamfara state government has secured ', 'test', 'tes@t', 'upload/5f6da5ef5e4543.08170900.jpg', '10:11:00', '2020-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_url` varchar(256) DEFAULT NULL,
  `date` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penalty`
--

CREATE TABLE `penalty` (
  `id` int(11) NOT NULL,
  `penalty_name` varchar(64) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(14) NOT NULL,
  `pro_id` varchar(118) NOT NULL,
  `pro_name` varchar(128) NOT NULL,
  `pro_start_date` varchar(128) NOT NULL,
  `pro_end_date` varchar(128) DEFAULT NULL,
  `pro_description` varchar(1024) NOT NULL,
  `pro_summary` varchar(512) DEFAULT NULL,
  `pro_status` enum('upcoming','complete','running') NOT NULL DEFAULT 'running',
  `progress` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `pro_id`, `pro_name`, `pro_start_date`, `pro_end_date`, `pro_description`, `pro_summary`, `pro_status`, `progress`) VALUES
(1, 'road-804', 'Double lane road', '2020-09-30', '2020-12-24', 'Road that link street A and B', 'a double lane that link between street A and B of X and Y.', 'running', '40%'),
(2, 'a', 'a', '2020-10-01', '2020-09-29', 'a', 'a', 'running', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `project_file`
--

CREATE TABLE `project_file` (
  `pro_file_id` int(14) NOT NULL,
  `pro_id` varchar(118) NOT NULL,
  `file_name` varchar(256) NOT NULL,
  `file_details` varchar(1028) NOT NULL,
  `assigned_to` varchar(64) NOT NULL,
  `file_location` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_file`
--

INSERT INTO `project_file` (`pro_file_id`, `pro_id`, `file_name`, `file_details`, `assigned_to`, `file_location`) VALUES
(2, 'road-804', 'project-804 expenses.xlsx', 'the expenses of project with id &quot;road-804&quot;', 'kiyawa', 'pro_file/project-804 expenses.xlsx'),
(10, 'test', 'test', 'test', 'test', 'pro_file/test.docx');

-- --------------------------------------------------------

--
-- Table structure for table `pro_expenses`
--

CREATE TABLE `pro_expenses` (
  `id` int(14) NOT NULL,
  `pro_id` varchar(118) NOT NULL,
  `details` varchar(512) DEFAULT NULL,
  `amount` varchar(256) DEFAULT NULL,
  `date` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pro_task`
--

CREATE TABLE `pro_task` (
  `pro_task_id` int(14) NOT NULL,
  `pro_id` varchar(128) NOT NULL,
  `task_title` varchar(256) DEFAULT NULL,
  `start_date` varchar(128) DEFAULT NULL,
  `end_date` varchar(128) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `description` varchar(2048) DEFAULT NULL,
  `task_type` enum('Office','Field') NOT NULL DEFAULT 'Office',
  `status` enum('running','complete','cancel') DEFAULT 'running',
  `location` varchar(512) DEFAULT NULL,
  `return_date` varchar(128) DEFAULT NULL,
  `total_days` varchar(128) DEFAULT NULL,
  `approve_status` enum('Approved','Not Approve','Rejected') NOT NULL DEFAULT 'Not Approve'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pro_task`
--

INSERT INTO `pro_task` (`pro_task_id`, `pro_id`, `task_title`, `start_date`, `end_date`, `image`, `description`, `task_type`, `status`, `location`, `return_date`, `total_days`, `approve_status`) VALUES
(1, 'road-824', 'survey', '2018-09-05', '2018-09-29', 'upload/5f5f59a730f348.38128197.jpg', 'surveying', 'Field', 'running', 'Zamfara State', '2019-09-01', '30', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `pro_task_assets`
--

CREATE TABLE `pro_task_assets` (
  `id` int(11) NOT NULL,
  `pro_task_id` int(11) NOT NULL,
  `employee_id` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(128) DEFAULT NULL,
  `quali_type` varchar(256) DEFAULT NULL,
  `institute` varchar(256) DEFAULT NULL,
  `result` varchar(64) DEFAULT NULL,
  `year` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `sitelogo` varchar(128) DEFAULT NULL,
  `sitetitle` varchar(256) DEFAULT NULL,
  `description` varchar(512) DEFAULT NULL,
  `copyright` varchar(128) DEFAULT NULL,
  `contact` varchar(128) DEFAULT NULL,
  `currency` varchar(128) DEFAULT NULL,
  `symbol` varchar(64) DEFAULT NULL,
  `system_email` varchar(128) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `address2` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitelogo`, `sitetitle`, `description`, `copyright`, `contact`, `currency`, `symbol`, `system_email`, `address`, `address2`) VALUES
(1, 'HRPAYROLL11.png', 'Development Research Initiative (dRi)', 'Prochesta Foundation aims at the upliftment & betterment of people living below the poverty line.', 'GenIT Bangladesh', '017112233445', 'BDT', '$', 'contact@dri-int.org', 'House 39/7 (First Floor) Hazi Ali Hossain Road', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(14) NOT NULL,
  `emp_id` varchar(64) DEFAULT NULL,
  `facebook` varchar(256) DEFAULT NULL,
  `twitter` varchar(256) DEFAULT NULL,
  `google_plus` varchar(512) DEFAULT NULL,
  `skype_id` varchar(256) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `to-do_list`
--

CREATE TABLE `to-do_list` (
  `id` int(14) NOT NULL,
  `user_id` varchar(64) DEFAULT NULL,
  `to_dodata` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(128) DEFAULT NULL,
  `value` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'kiyawa@gmail.com', '698d51a19d8a121ce581499d7b701668');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_leave`
--
ALTER TABLE `assign_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desciplinary`
--
ALTER TABLE `desciplinary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earned_leave`
--
ALTER TABLE `earned_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_file`
--
ALTER TABLE `employee_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_experience`
--
ALTER TABLE `emp_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_leave`
--
ALTER TABLE `emp_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_penalty`
--
ALTER TABLE `emp_penalty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_file`
--
ALTER TABLE `project_file`
  ADD PRIMARY KEY (`pro_file_id`);

--
-- Indexes for table `pro_expenses`
--
ALTER TABLE `pro_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_task`
--
ALTER TABLE `pro_task`
  ADD PRIMARY KEY (`pro_task_id`);

--
-- Indexes for table `pro_task_assets`
--
ALTER TABLE `pro_task_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `to-do_list`
--
ALTER TABLE `to-do_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_leave`
--
ALTER TABLE `assign_leave`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `desciplinary`
--
ALTER TABLE `desciplinary`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `earned_leave`
--
ALTER TABLE `earned_leave`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `employee_file`
--
ALTER TABLE `employee_file`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_experience`
--
ALTER TABLE `emp_experience`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_leave`
--
ALTER TABLE `emp_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_penalty`
--
ALTER TABLE `emp_penalty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `type_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_file`
--
ALTER TABLE `project_file`
  MODIFY `pro_file_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pro_expenses`
--
ALTER TABLE `pro_expenses`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pro_task`
--
ALTER TABLE `pro_task`
  MODIFY `pro_task_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pro_task_assets`
--
ALTER TABLE `pro_task_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `to-do_list`
--
ALTER TABLE `to-do_list`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
