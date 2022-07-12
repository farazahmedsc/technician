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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `h_form_up`
--
ALTER TABLE `h_form_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `h_form_up`
--
ALTER TABLE `h_form_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
