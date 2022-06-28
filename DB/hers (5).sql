-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 04:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.1.29

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
(21, 'test431', 'saasdfasdf', 'asdfasdf', 'Crawl_Space', 'faraz_dj96@yahoo.com', '3', 'Heat_Pump', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', 'asdf', 'asdf', 'asdf', '1', '15', '', '', '', '', '', '', NULL, '', '', '', 'asdf', 'asdf', 'fasdf', 'asd', 'asdf', 'asdf', 'No', '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '15%_Partial', '', '', '', '', '', '', '', '', '', '', '', 'asdfasdasdf', '', '', '', '', '', 'l2.png', '', '', '', '', '', '', '1', 'Yes', '3', '3');

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
(1, 'admin', 'admin', 'admin', 'asdcsd345', '59102jkldhlakfjh@', 'checked'),
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
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
