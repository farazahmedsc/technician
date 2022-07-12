-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 01:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hers`
--

-- --------------------------------------------------------

--
-- Table structure for table `h_form`
--

CREATE TABLE `h_form` (
  `f_id` int(11) NOT NULL,
  `test_name` varchar(25) DEFAULT NULL,
  `company_name` varchar(25) DEFAULT NULL,
  `site_address` varchar(25) DEFAULT NULL,
  `duct_location` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `number_of_bedroom` varchar(25) DEFAULT NULL,
  `unit_type` varchar(25) DEFAULT NULL,
  `pu_manufacturer` varchar(25) DEFAULT NULL,
  `pu_model` varchar(25) DEFAULT NULL,
  `pu_serial` varchar(25) DEFAULT NULL,
  `pu_btu_input` varchar(25) DEFAULT NULL,
  `pu_btu_output` varchar(25) DEFAULT NULL,
  `pu_efficiency` varchar(25) DEFAULT NULL,
  `pu_tonnage` varchar(25) DEFAULT NULL,
  `pu_seer` varchar(25) DEFAULT NULL,
  `pu_fulltime` varchar(25) DEFAULT NULL,
  `cs_manufacturer` varchar(25) DEFAULT NULL,
  `cs_model` varchar(25) DEFAULT NULL,
  `cs_serial` varchar(25) DEFAULT NULL,
  `cs_tonnage` varchar(25) DEFAULT NULL,
  `cs_seer` varchar(25) DEFAULT NULL,
  `heat_manufacturer` varchar(25) DEFAULT NULL,
  `heat_model` varchar(25) DEFAULT NULL,
  `heat_serial` varchar(25) DEFAULT NULL,
  `heat_tonnage` varchar(25) DEFAULT NULL,
  `heat_seer` varchar(25) DEFAULT NULL,
  `cg_manufacturer` varchar(25) DEFAULT NULL,
  `cg_model` varchar(25) DEFAULT NULL,
  `cg_serial` varchar(25) DEFAULT NULL,
  `cg_btu_input` varchar(25) DEFAULT NULL,
  `cg_btu_output` varchar(25) DEFAULT NULL,
  `cg_efficiency` varchar(25) DEFAULT NULL,
  `cg_fulltime` varchar(25) DEFAULT NULL,
  `acc_manufacturer` varchar(25) DEFAULT NULL,
  `acc_model` varchar(25) DEFAULT NULL,
  `acc_serial` varchar(25) DEFAULT NULL,
  `air_manufacturer` varchar(25) DEFAULT NULL,
  `air_model` varchar(25) DEFAULT NULL,
  `air_serial` varchar(25) DEFAULT NULL,
  `air_btu_input` varchar(25) DEFAULT NULL,
  `air_btu_output` varchar(25) DEFAULT NULL,
  `air_efficiency` varchar(25) DEFAULT NULL,
  `air_fulltime` varchar(25) DEFAULT NULL,
  `con_manufacturer` varchar(25) DEFAULT NULL,
  `con_model` varchar(25) DEFAULT NULL,
  `con_serial` varchar(25) DEFAULT NULL,
  `con_btu_input` varchar(25) DEFAULT NULL,
  `con_tonnage` varchar(25) DEFAULT NULL,
  `con_seer` varchar(25) DEFAULT NULL,
  `in_manufacturer` varchar(25) DEFAULT NULL,
  `in_model` varchar(25) DEFAULT NULL,
  `in_serial` varchar(25) DEFAULT NULL,
  `in_btu_input` varchar(25) DEFAULT NULL,
  `in_btu_output` varchar(25) DEFAULT NULL,
  `in_pounds` varchar(25) DEFAULT NULL,
  `in_ounces` varchar(25) DEFAULT NULL,
  `in_fulltime` varchar(25) DEFAULT NULL,
  `test_fanWatt` varchar(25) DEFAULT NULL,
  `test_ductLeakage` varchar(25) DEFAULT NULL,
  `test_duct_leak_result` varchar(25) DEFAULT NULL,
  `test_cfm1` varchar(25) DEFAULT NULL,
  `test_location1` varchar(25) DEFAULT NULL,
  `test_cfm2` varchar(25) DEFAULT NULL,
  `test_location2` varchar(25) DEFAULT NULL,
  `test_cfm3` varchar(25) DEFAULT NULL,
  `test_location3` varchar(25) DEFAULT NULL,
  `test_cfm4` varchar(25) DEFAULT NULL,
  `test_location4` varchar(25) DEFAULT NULL,
  `test_cfm5` varchar(25) DEFAULT NULL,
  `test_location5` varchar(25) DEFAULT NULL,
  `notes` varchar(1000) DEFAULT NULL,
  `pu_image` varchar(70) DEFAULT NULL,
  `cs_image` varchar(70) DEFAULT NULL,
  `heat_image` varchar(70) DEFAULT NULL,
  `cg_image` varchar(70) DEFAULT NULL,
  `acc_image` varchar(70) DEFAULT NULL,
  `air_image` varchar(70) DEFAULT NULL,
  `con_image` varchar(70) DEFAULT NULL,
  `in_image` varchar(70) DEFAULT NULL,
  `ref_image` varchar(70) DEFAULT NULL,
  `win_image` varchar(70) DEFAULT NULL,
  `water_image` varchar(70) DEFAULT NULL,
  `kitchen_image` varchar(70) DEFAULT NULL,
  `tech_id` varchar(10) DEFAULT NULL,
  `linked` varchar(10) NOT NULL,
  `linked_total` varchar(10) NOT NULL,
  `linked_order` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_form`
--

INSERT INTO `h_form` (`f_id`, `test_name`, `company_name`, `site_address`, `duct_location`, `email`, `number_of_bedroom`, `unit_type`, `pu_manufacturer`, `pu_model`, `pu_serial`, `pu_btu_input`, `pu_btu_output`, `pu_efficiency`, `pu_tonnage`, `pu_seer`, `pu_fulltime`, `cs_manufacturer`, `cs_model`, `cs_serial`, `cs_tonnage`, `cs_seer`, `heat_manufacturer`, `heat_model`, `heat_serial`, `heat_tonnage`, `heat_seer`, `cg_manufacturer`, `cg_model`, `cg_serial`, `cg_btu_input`, `cg_btu_output`, `cg_efficiency`, `cg_fulltime`, `acc_manufacturer`, `acc_model`, `acc_serial`, `air_manufacturer`, `air_model`, `air_serial`, `air_btu_input`, `air_btu_output`, `air_efficiency`, `air_fulltime`, `con_manufacturer`, `con_model`, `con_serial`, `con_btu_input`, `con_tonnage`, `con_seer`, `in_manufacturer`, `in_model`, `in_serial`, `in_btu_input`, `in_btu_output`, `in_pounds`, `in_ounces`, `in_fulltime`, `test_fanWatt`, `test_ductLeakage`, `test_duct_leak_result`, `test_cfm1`, `test_location1`, `test_cfm2`, `test_location2`, `test_cfm3`, `test_location3`, `test_cfm4`, `test_location4`, `test_cfm5`, `test_location5`, `notes`, `pu_image`, `cs_image`, `heat_image`, `cg_image`, `acc_image`, `air_image`, `con_image`, `in_image`, `ref_image`, `win_image`, `water_image`, `kitchen_image`, `tech_id`, `linked`, `linked_total`, `linked_order`) VALUES
(2, 'Test Name', 'asdf', 'asdf', 'Attic', 'asdf@gmail.com', '1', 'Package_Unit', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '4', '15', '', '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, 'asdf', '15%_Story', 'sadf', 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', 'c1_800x533.jpg', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '1', '', '', ''),
(3, 'Test name 554', 'Company name', 'Siteaddtes upd', 'Garage', 'adf@asdf.com', '3', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', '', 'asdf', 'fasdf', 'asdfasdf', '3.5', '15', '', '', '', 'Default', 'Default', 'asfd', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'Yes', 'asdfqweasdf', 'asdf', 'asdf', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, 'ASDFa', '15%_Story', 'asdfsadfasdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asf', 'asdfadfs', 'asdf', 'asdf', 'asdsdfaasdfwqw', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '2', '', '', ''),
(4, 'asdfasdf559', 'sadfasdf', 'sadf', 'Attic', 'asdf@asdfm.com', '3', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', '', 'asf', 'asdf', 'asdf', '2', '14', '', '', '', 'Default', 'Default', 'asdf', 'asdf', 'asdf', 'adf', 'asdf', 'adf', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '15%_Story', 'asf', '', '', '', '', '', '', '', '', '', '', 'asdf', '', 'c4_800x534.jpg', '', 'c2_800x533.jpg', '', '', '', '', NULL, NULL, NULL, NULL, '2', '', '', ''),
(5, 'sdf', 'g', 'wer', 'Attic', 'erwwef@sgdfg.vom', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'asdf', 'asdfghj', 'asdfasdf', '1', '17', '', '', '', 'Default', 'Default', 'asfasdf', 'asdf', 'asdf', 'asdf', 'asdf', 'adf', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, 'adf', '15%_Partial', 'asdf', 'asdf', 'asdf', '', '', '', '', '', '', '', '', 'asdfqwe', '', 'c1_800x533.jpg', '', 'c2_800x533.jpg', '', '', '', '', 'c3_800x466.jpg', '', '', '', '1', '', '', ''),
(6, 'asdf', 'qwe', 'zc', 'Attic', 'asf', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'asdf', 'asdfghj', 'asdf', '2.5', '17', '', '', '', 'Default', 'Default', 'asdf', 'asf', 'asdf', 'asdf', 'fasfd', 'asd', 'Yes', 'qwe', 'qwe', 'sfa', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, 'asdf', '15%_Partial', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'a', '', '', '', '', '', '', '', 'c8_800x440.jpg', '', 'c5_800x437.jpg', 'c6_800x533.jpg', '', '', '', 'c7_800x533.jpg', 'c8_800x440.jpg', 'c9_800x533.jpg', 'c10_750x600.jpg', '1', '', '', ''),
(7, 'asdf859', 'Softmatic Solutionsdaasdf', 'asdfasdfasdf', 'Attic', 'faarazahmedasdfasdf34296@', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'asdfasdf', 'asdfasdf', 'asdfasdf', '2', '15', '', '', '', 'Default', 'Default', 'asdfasdf', 'asdfasdf', 'asdasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'Yes', 'asdfasdf', 'asdfasdf', 'asdfasdf', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '15%_Partial', 'asdfasdf', '', '', '', '', '', '', '', '', '', '', 'asdfasdfasdfasdf', '', 'c1_800x533.jpg', '', 'c2_800x533.jpg', 'c3_800x466.jpg', '', '', '', 'c4_800x534.jpg', 'c5_800x437.jpg', 'c6_800x533.jpg', 'c7_800x533.jpg', '1', '', '', ''),
(8, 'test113', 'asdfasdf', 'sadfasdf', 'Attic', 'asdfasf@afasdf,.com', '4', 'Package_Unit', 'sdacqw', 'ec', 'a', 'adf', 'weqr', 'czx ', '2', '17', 'Yes', '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, 'asdfadf', '15%_Partial', 'qwecdzx x', 'asdfxz ', 'asdfqwe', 'asdf', 'z xc', '', '', '', '', '', '', 'sdfg werczxc', 'c1_800x533.jpg', '', '', '', '', '', '', '', '', 'c4_800x534.jpg', 'c5_800x437.jpg', '', '1', '', '', ''),
(9, 'test1227', 'ckljxvklzjcj', 'sadfasfasdfasfd', 'Garage', 'asfasdfasdf', '3', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'asdfasasdf', 'asfasdf', 'asdf', '2', '15', '', '', '', 'Default', 'Default', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdaasdf', 'Yes', 'asdfas', 'asdf', 'asdf', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '15%_Partial', 'asdfasdf', '', '', '', '', '', '', '', '', '', '', 'sadfasdfasdf', '', 'c1_800x533.jpg', '', 'c2_800x533.jpg', 'c3_800x466.jpg', '', '', '', 'c4_800x534.jpg', 'c5_800x437.jpg', 'c6_800x533.jpg', 'c7_800x533.jpg', '', '', '', ''),
(10, 'test242', 'sdafasfa', 'asdasfasdf', 'Attic', 'asdfasdf', '3', 'Heat_Pump', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', 'sadf', 'sadf', 'asdf', '1', '15', '', '', '', '', '', '', NULL, '', '', '', 'sadf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'Yes', '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, 'sadfasdf', '15%_Partial', 'asdfasdf', 'asdfasdf', 'asdf', 'asdf', '', '', '', '', '', '', '', 'asdasddfasdf', '', '', 'c1_800x533.jpg', '', '', 'c2_800x533.jpg', '', '', 'c3_800x466.jpg', 'c4_800x534.jpg', 'c5_800x437.jpg', 'c6_800x533.jpg', '', '', '', ''),
(11, 'test103', 'sdfasdf', 'sadfasdf', 'Garage', 'asdf@asdfm.com', '4', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'asdf', 'asdf', 'asdf', 'asdf', '2.5', '15', 'asdf', 'asdf', 'qwe', 'das', 'c', 'asfda', '2', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', 'asdfasdfasdf', '', '', '', '', '', '', 'c1_800x533.jpg', 'c2_800x533.jpg', '', 'c3_800x466.jpg', 'c4_800x534.jpg', 'c5_800x437.jpg', '', '', '', ''),
(12, 'test336', 'asdfasdf', 'asdfasdf', 'Attic', 'asdfasf@afasdf,.com', '4', 'Package_Unit', 'sadf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '4', '16', 'No', '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '15%_Partial', 'asdf', '', '', '', '', '', '', '', '', '', '', 'sdafasdfasdf', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', ''),
(13, 'test409', 'com', 's9et', 'Attic', 'idexigner786@fivver.safec', '3', 'Package_Unit', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '3', '16', 'No', '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '15%_Partial', 'adsf', 'asdf', '', '', '', '', '', '', '', '', '', 'asdfasdafsd', 'b1.jpg', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', ''),
(14, 'test409', 'com', 's9et', 'Garage', 'idexigner786@fivver.safec', '3', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'asdf', 'asdf', 'asdf', 'asdf', '4.5', '14', 'asdf', 'asdf', 'asdf', 'asdf', 'adsf', 'asdf', 'sdf', 'No', '', NULL, '', '', '', '', '', '', '', '', '', '', '', 'sadfasdf', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', ''),
(15, 'test415', 'sdaf', 'asf', 'Attic', 'idexigner786@fivver.safec', '1', 'Package_Unit', 'sadf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '5', '17', 'No', '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', 'Exempt_40ft', '', '', '', '', '', '', '', '', '', '', '', '', 'b1.jpg', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', ''),
(16, 'test415', 'sdaf', 'asf', 'Attic', 'idexigner786@fivver.safec', '4', 'Heat_Pump', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', 'asdf', 'asf', 'asdf', '1', '15', '', '', '', '', '', '', NULL, '', '', '', 'asdf', 'sadf', 'asdf', 'asdf', 'adsf', 'asdf', 'No', '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', 'Exempt_40ft', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', ''),
(17, 'test429', 'compdafsadf', 'asdfdfsdfa', 'Attic', 'faraz_dj96@yahoo.com', '3', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'adsf', 'asdf', 'asdf', '3', '15', '', '', '', 'Default', 'Default', 'asdf', 'asdf', 'adsf', 'asdf', 'asdf', 'sadf', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '15%_Partial', '', '', '', '', '', '', '', '', '', '', '', 'asdfasdasdfasdf', '', '', '', 'l1.png', '', '', '', '', '', '', '', '', '1', 'Yes', '3', '2'),
(18, 'test429', 'compdafsadf', 'asdfdfsdfa', 'Garage', 'faraz_dj96@yahoo.com', '3', 'Heat_Pump', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', 'asdf', 'asdf', 'asdf', '2.5', '15', '', '', '', '', '', '', NULL, '', '', '', 'asdf', 'asdf', 'asdfasd', 'adsf', 'fasf', 'asdf', 'No', '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', 'Exempt_40ft', '', '', '', '', '', '', '', '', '', '', '', 'asdfasdfasdasf', '', '', 'l2.png', '', '', '', '', '', '', '', '', '', '1', 'Yes', '3', '3'),
(19, 'test431', 'saasdfasdf', 'asdfasdf', 'Attic', 'faraz_dj96@yahoo.com', '2', 'Package_Unit', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '4', '17', 'No', '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, 'asdf', 'Exempt_40ft', '', '', '', '', '', '', '', '', '', '', '', 'awqe', 'b1.jpg', '', '', '', '', '', '', '', '', '', '', '', '1', 'Yes', '3', '1'),
(20, 'test431', 'saasdfasdf', 'asdfasdf', 'Attic', 'faraz_dj96@yahoo.com', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'asdf', 'asdf', 'asdf', '1.5', '16', '', '', '', 'Default', 'Default', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '15%_Partial', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'Yes', '3', '2'),
(21, 'test431', 'saasdfasdf', 'asdfasdf', 'Crawl_Space', 'faraz_dj96@yahoo.com', '3', 'Heat_Pump', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', 'asdf', 'asdf', 'asdf', '1', '15', '', '', '', '', '', '', NULL, '', '', '', 'asdf', 'asdf', 'fasdf', 'asd', 'asdf', 'asdf', 'No', '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '15%_Partial', '', '', '', '', '', '', '', '', '', '', '', 'asdfasdasdf', '', '', '', '', '', 'l2.png', '', '', '', '', '', '', '1', 'Yes', '3', '3'),
(22, 'asdf', 'wer', 'weqrqwer', 'Crawl_Space', 'Email@email.com', '6', 'Package_Unit', 'asdf', 'qwe', 'asdfasdf', 'qwe', 'asdf', 'sadf', '2', '16', 'No', '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, 'werqwr', '5%', 'asdf', 'sadf', 'qwweq', 'sdv', '', '', '', '', '', '', '', 'Notes here', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'Yes', '2', '1'),
(23, 'asdf', 'wer', 'weqrqwer', 'Crawl_Space', 'Email@email.com', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'qwer', 'asdf', 'weq', '2.5', '16', '', '', '', 'Default', 'Default', 'dsd', 'qqwer', 'qwer', 'wqer', 'qwer', 'qwer', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', 'Exempt_Asbestos', 'sadfasfd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'Yes', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `h_form_up`
--

CREATE TABLE `h_form_up` (
  `id` int(11) NOT NULL,
  `tech_id` int(11) DEFAULT NULL,
  `no_of_form` int(11) DEFAULT NULL,
  `basic_info` text DEFAULT NULL,
  `form_1` text DEFAULT NULL,
  `form_2` text DEFAULT NULL,
  `form_3` text DEFAULT NULL,
  `form_4` text DEFAULT NULL,
  `form_5` text DEFAULT NULL,
  `form_6` text DEFAULT NULL,
  `form_7` text DEFAULT NULL,
  `form_8` text DEFAULT NULL,
  `form_9` text DEFAULT NULL,
  `form_10` text DEFAULT NULL,
  `form_11` text DEFAULT NULL,
  `form_12` text DEFAULT NULL,
  `form_13` text DEFAULT NULL,
  `form_14` text DEFAULT NULL,
  `form_15` text DEFAULT NULL,
  `form_16` text DEFAULT NULL,
  `form_17` text DEFAULT NULL,
  `form_18` text DEFAULT NULL,
  `form_19` text DEFAULT NULL,
  `form_20` text DEFAULT NULL,
  `dates` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `h_form_up`
--

INSERT INTO `h_form_up` (`id`, `tech_id`, `no_of_form`, `basic_info`, `form_1`, `form_2`, `form_3`, `form_4`, `form_5`, `form_6`, `form_7`, `form_8`, `form_9`, `form_10`, `form_11`, `form_12`, `form_13`, `form_14`, `form_15`, `form_16`, `form_17`, `form_18`, `form_19`, `form_20`, `dates`) VALUES
(17, 1, 2, '{\"test_name\":\"test name953\",\"company_name\":\"company Name\",\"site_address\":\"company Name\",\"email\":\"email@email.com\"}', '{\"unit_type\":\"Package Unit\",\"duct_location\":\"Crawl_Space\",\"number_of_bedroom\":\"1\",\"fulltime\":\"Yes\",\"pu_manufacturer\":\"[\\\"pu\\\",\\\"asdf\\\",\\\"sd\\\"]\",\"pu_model\":\"[\\\"pu\\\",\\\"asdf\\\",\\\"sdf\\\"]\",\"pu_serial\":\"[\\\"pu\\\",\\\"sd\\\",\\\"adsf\\\"]\",\"pu_btu_input\":\"[\\\"pu\\\",\\\"asd\\\",\\\"asdf\\\"]\",\"pu_btu_output\":\"[\\\"pu\\\",\\\"daf\\\",\\\"asdf\\\"]\",\"pu_efficiency\":\"[\\\"pu\\\",\\\"s\\\",\\\"asdf\\\"]\",\"pu_tonnage\":\"[\\\"0.75\\\",\\\"1\\\",\\\"1\\\"]\",\"pu_seer\":\"[\\\"14\\\",\\\"14\\\",\\\"15\\\"]\",\"pu_image\":\"[\\\"c1_800x533.jpg\\\",\\\"c2_800x533.jpg\\\",\\\"c3_800x466.jpg\\\"]\",\"putest_duct_leak_result\":\"\",\"putest_ductLeakage\":\"5%\",\"putest_fanWatt\":\"\",\"putest_cfm1\":\"\",\"putest_location1\":\"\",\"putest_cfm2\":\"\",\"putest_location2\":\"\",\"putest_cfm3\":\"\",\"putest_location3\":\"\",\"putest_cfm4\":\"\",\"putest_location4\":\"\",\"putest_cfm5\":\"\",\"putest_location5\":\"\",\"pu_ref_image\":\"\\\"c4_800x534.jpg\\\"\",\"pu_win_image\":\"\\\"c5_800x437.jpg\\\"\",\"pu_water_image\":\"\\\"c6_800x533.jpg\\\"\",\"pu_kitchen_image\":\"\\\"c7_800x533.jpg\\\"\",\"pu_notes\":\"submit notes \"}', '{\"unit_type\":\"Package Unit\",\"duct_location\":\"Crawl_Space\",\"number_of_bedroom\":\"1\",\"fulltime\":\"Yes\",\"pu_manufacturer\":\"[\\\"pu\\\"]\",\"pu_model\":\"[\\\"pu\\\"]\",\"pu_serial\":\"[\\\"pu\\\"]\",\"pu_btu_input\":\"[\\\"pu\\\"]\",\"pu_btu_output\":\"[\\\"pu\\\"]\",\"pu_efficiency\":\"[\\\"pu\\\"]\",\"pu_tonnage\":\"[\\\"0.75\\\"]\",\"pu_seer\":\"[\\\"14\\\"]\",\"pu_image\":\"[\\\"\\\"]\",\"putest_duct_leak_result\":\"asdf\",\"putest_ductLeakage\":\"15%_Partial\",\"putest_fanWatt\":\"\",\"putest_cfm1\":\"\",\"putest_location1\":\"\",\"putest_cfm2\":\"\",\"putest_location2\":\"\",\"putest_cfm3\":\"\",\"putest_location3\":\"\",\"putest_cfm4\":\"\",\"putest_location4\":\"\",\"putest_cfm5\":\"\",\"putest_location5\":\"\",\"pu_ref_image\":\"\\\"\\\"\",\"pu_win_image\":\"\\\"\\\"\",\"pu_water_image\":\"\\\"\\\"\",\"pu_kitchen_image\":\"\\\"\\\"\",\"pu_notes\":\"asdfasdf\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-03'),
(18, 1, 2, '{\"test_name\":\"test name1105\",\"company_name\":\"company Name\",\"site_address\":\"company Name\",\"email\":\"email@email.com\"}', '{\"unit_type\":\"Package Unit\",\"duct_location\":\"Crawl_Space\",\"number_of_bedroom\":\"1\",\"fulltime\":\"Yes\",\"pu_manufacturer\":\"[\\\"pu11\\\",\\\"pu22\\\"]\",\"pu_model\":\"[\\\"pu\\\",\\\"sdf\\\"]\",\"pu_serial\":\"[\\\"pu\\\",\\\"sdfgadf\\\"]\",\"pu_btu_input\":\"[\\\"pu\\\",\\\"sdfg\\\"]\",\"pu_btu_output\":\"[\\\"pu\\\",\\\"sdfg\\\"]\",\"pu_efficiency\":\"[\\\"pu\\\",\\\"sdfg\\\"]\",\"pu_tonnage\":\"[\\\"0.75\\\",\\\"4\\\"]\",\"pu_seer\":\"[\\\"14\\\",\\\"16\\\"]\",\"pu_image\":\"[\\\"c1_800x533.jpg\\\",\\\"c2_800x533.jpg\\\"]\",\"putest_duct_leak_result\":\"asdf\",\"putest_ductLeakage\":\"15%_System\",\"putest_fanWatt\":\"\",\"putest_cfm1\":\"\",\"putest_location1\":\"\",\"putest_cfm2\":\"\",\"putest_location2\":\"\",\"putest_cfm3\":\"\",\"putest_location3\":\"\",\"putest_cfm4\":\"\",\"putest_location4\":\"\",\"putest_cfm5\":\"\",\"putest_location5\":\"\",\"pu_ref_image\":\"\\\"\\\"\",\"pu_win_image\":\"\\\"\\\"\",\"pu_water_image\":\"\\\"\\\"\",\"pu_kitchen_image\":\"\\\"\\\"\",\"pu_notes\":\"asdfasdf\"}', '{\"unit_type\":\"Central Split AC\",\"duct_location\":\"Crawl_Space\",\"number_of_bedroom\":\"1\",\"fulltime\":\"Yes\",\"cg_manufacturer\":\"[\\\"sadf\\\",\\\"asdf\\\"]\",\"cg_model\":\"[\\\"sa\\\",\\\"qwe\\\"]\",\"cg_serial\":\"[\\\"dfas\\\",\\\"sadf\\\"]\",\"cg_btu_input\":\"[\\\"dfasdf\\\",\\\"asdf\\\"]\",\"cg_btu_output\":\"[\\\"asdf\\\",\\\"asdf\\\"]\",\"cg_efficiency\":\"[\\\"sadf\\\",\\\"asdf\\\"]\",\"cg_image\":\"[\\\"c3_800x466.jpg\\\",\\\"\\\"]\",\"cs_manufacturer\":\"[\\\"sdf\\\",\\\"asdf\\\"]\",\"cs_model\":\"[\\\"asdf\\\",\\\"adsf\\\"]\",\"cs_serial\":\"[\\\"asdf\\\",\\\"asdf\\\"]\",\"cs_tonnage\":\"[\\\"1.5\\\",\\\"1\\\"]\",\"cs_seer\":\"[\\\"15\\\",\\\"15\\\"]\",\"cs_image\":\"[\\\"c4_800x534.jpg\\\",\\\"\\\"]\",\"acc_manufacturer\":\"[\\\"asdf\\\"]\",\"acc_model\":\"[\\\"asdf\\\"]\",\"acc_serial\":\"[\\\"asdf\\\"]\",\"acc_image\":\"[\\\"c5_800x437.jpg\\\"]\",\"cstest_duct_leak_result\":\"\",\"cstest_ductLeakage\":\"Exempt_40ft\",\"cstest_fanWatt\":\"\",\"cstest_cfm1\":\"\",\"cstest_location1\":\"\",\"cstest_cfm2\":\"\",\"cstest_location2\":\"\",\"cstest_cfm3\":\"\",\"cstest_location3\":\"\",\"cstest_cfm4\":\"\",\"cstest_location4\":\"\",\"cstest_cfm5\":\"\",\"cstest_location5\":\"\",\"cs_ref_image\":\"\\\"c6_800x533.jpg\\\"\",\"cs_win_image\":\"\\\"\\\"\",\"cs_water_image\":\"\\\"\\\"\",\"cs_kitchen_image\":\"\\\"\\\"\",\"cs_notes\":\"asdfasdf\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-04'),
(19, 1, 2, '{\"test_name\":\"test name 1111\",\"company_name\":\"asdfasdf\",\"site_address\":\"asdfasdf\",\"email\":\"qasqweqwe@gmail.com\"}', '{\"unit_type\":\"Central Split AC\",\"duct_location\":\"Crawl_Space\",\"number_of_bedroom\":\"2\",\"fulltime\":\"Yes\",\"cg_manufacturer\":\"[\\\"asdf\\\"]\",\"cg_model\":\"[\\\"asdf\\\"]\",\"cg_serial\":\"[\\\"adf\\\"]\",\"cg_btu_input\":\"[\\\"asdf\\\"]\",\"cg_btu_output\":\"[\\\"asdf\\\"]\",\"cg_efficiency\":\"[\\\"asdf\\\"]\",\"cg_image\":\"[\\\"c1_800x533.jpg\\\"]\",\"cs_manufacturer\":\"[\\\"asdf\\\"]\",\"cs_model\":\"[\\\"adf\\\"]\",\"cs_serial\":\"[\\\"asdf\\\"]\",\"cs_tonnage\":\"[\\\"1\\\"]\",\"cs_seer\":\"[\\\"16\\\"]\",\"cs_image\":\"[\\\"\\\"]\",\"acc_manufacturer\":\"[\\\"\\\"]\",\"acc_model\":\"[\\\"\\\"]\",\"acc_serial\":\"[\\\"\\\"]\",\"acc_image\":\"[\\\"\\\"]\",\"cstest_duct_leak_result\":\"\",\"cstest_ductLeakage\":\"Exempt_40ft\",\"cstest_fanWatt\":\"\",\"cstest_cfm1\":\"\",\"cstest_location1\":\"\",\"cstest_cfm2\":\"\",\"cstest_location2\":\"\",\"cstest_cfm3\":\"\",\"cstest_location3\":\"\",\"cstest_cfm4\":\"\",\"cstest_location4\":\"\",\"cstest_cfm5\":\"\",\"cstest_location5\":\"\",\"cs_ref_image\":\"\\\"\\\"\",\"cs_win_image\":\"\\\"\\\"\",\"cs_water_image\":\"\\\"\\\"\",\"cs_kitchen_image\":\"\\\"\\\"\",\"cs_notes\":\"\"}', '{\"unit_type\":\"Heat Pump\",\"duct_location\":\"Crawl_Space\",\"number_of_bedroom\":\"2\",\"fulltime\":\"Yes\",\"air_manufacturer\":\"[\\\"asdf\\\"]\",\"air_model\":\"[\\\"asdf\\\"]\",\"air_serial\":\"[\\\"asdf\\\"]\",\"air_btu_input\":\"[\\\"asdf\\\"]\",\"air_btu_output\":\"[\\\"asdf\\\"]\",\"air_efficiency\":\"[\\\"asdf\\\"]\",\"air_image\":\"[\\\"\\\"]\",\"heat_manufacturer\":\"[\\\"asdf\\\"]\",\"heat_model\":\"[\\\"adsf\\\"]\",\"heat_serial\":\"[\\\"adf\\\"]\",\"heat_tonnage\":\"[\\\"1.5\\\"]\",\"heat_seer\":\"[\\\"17\\\"]\",\"heat_image\":\"[\\\"\\\"]\",\"hpacc_manufacturer\":\"[\\\"\\\"]\",\"hpacc_model\":\"[\\\"\\\"]\",\"hpacc_serial\":\"[\\\"\\\"]\",\"hpacc_image\":\"[\\\"\\\"]\",\"hptest_duct_leak_result\":\"asdfa\",\"hptest_ductLeakage\":\"Exempt_40ft\",\"hptest_fanWatt\":\"asdf\",\"hptest_cfm1\":\"\",\"hptest_location1\":\"\",\"hptest_cfm2\":\"\",\"hptest_location2\":\"\",\"hptest_cfm3\":\"\",\"hptest_location3\":\"\",\"hptest_cfm4\":\"\",\"hptest_location4\":\"\",\"hptest_cfm5\":\"\",\"hptest_location5\":\"\",\"hp_ref_image\":\"\\\"\\\"\",\"hp_win_image\":\"\\\"\\\"\",\"hp_water_image\":\"\\\"\\\"\",\"hp_kitchen_image\":\"\\\"\\\"\",\"hp_notes\":\"asdfasd\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `h_technician`
--

CREATE TABLE `h_technician` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_phone` varchar(50) NOT NULL,
  `t_email` varchar(50) NOT NULL,
  `t_username` varchar(50) NOT NULL,
  `t_password` varchar(50) NOT NULL,
  `t_active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `h_technician`
--

INSERT INTO `h_technician` (`t_id`, `t_name`, `t_phone`, `t_email`, `t_username`, `t_password`, `t_active`) VALUES
(1, 'admin', 'admin', 'admin', 'asdcsd345', '123', 'checked'),
(2, 'tech name', '123123', 'emil@emila.com', 'tech', '123123', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `h_user`
--

CREATE TABLE `h_user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(25) NOT NULL,
  `u_username` varchar(25) NOT NULL,
  `u_password` varchar(25) NOT NULL,
  `u_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `h_user`
--

INSERT INTO `h_user` (`u_id`, `u_name`, `u_username`, `u_password`, `u_email`) VALUES
(1, 'Admins', 'test', '123', 'farazahmed34296@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `h_form`
--
ALTER TABLE `h_form`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `h_form_up`
--
ALTER TABLE `h_form_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_technician`
--
ALTER TABLE `h_technician`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `h_user`
--
ALTER TABLE `h_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `h_form`
--
ALTER TABLE `h_form`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `h_form_up`
--
ALTER TABLE `h_form_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `h_technician`
--
ALTER TABLE `h_technician`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `h_user`
--
ALTER TABLE `h_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
