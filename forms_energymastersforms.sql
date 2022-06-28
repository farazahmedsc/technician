-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 08, 2022 at 08:02 AM
-- Server version: 5.7.36-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forms_energymastersforms`
--

-- --------------------------------------------------------

--
-- Table structure for table `h_form`
--

CREATE TABLE `h_form` (
  `f_id` int(11) NOT NULL,
  `test_name` varchar(100) DEFAULT NULL,
  `company_name` varchar(25) DEFAULT NULL,
  `site_address` varchar(100) DEFAULT NULL,
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
(27, '27556 N Weeping Willow Dr Valencia, CA 91354, USA', 'NPC  Robert ', '27556 N Weeping Willow Dr Valencia, CA 91354, USA', 'Attic', 'Nelson.huerta98@cloud.com', '3', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Lennox', 'ML14xc1-060-230A05', '1921J17539', '5', '14', '', '', '', 'Default', 'Default', 'Lennox', 'EL180UH100NE60-03', '5921H18643', '100,000', '80,000', '80 ', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '15%_System', '205', '1616', 'Up stairs hallway ', '281', 'Bottom stairs hallway ', '', '', '', '', '', '', '2 story house , everything new except ducts ', '', '', '', '', '', '', '', '', 'EE1A7885-1C1A-41CF-A69F-8CE1972CF0EA.jpeg', '', '', '', '4', 'No', '1', '1'),
(30, '8845 Corbin ave northridg', 'Private client  Olusola', '8845 Corbin ave northridg', 'No_Ducts', 'Nelson.huerta98@icloud.co', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Cooper & Hunter', 'CH18MSPH230VO', '340713655018C160160077', '18,000', '1.5', '14', 'Cooper & Hunter', 'CH-09MSPHWM-230V1', '340C998660313110130115', '9,000', '9,000', '4 pounds', '6 ounces', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'A75A6F9E-5C3D-4037-8370-1C0A61545627.jpeg', 'C7CA4E2F-A297-40D4-B82D-EC91C9F3CDE8.jpeg', '557FA3BC-3D11-49C9-834B-C96B0F4C605B.jpeg', '4', 'Yes', '2', '1'),
(31, '8845 Corbin ave northridg', 'Private client  Olusola', '8845 Corbin ave northridg', 'No_Ducts', 'Nelson.huerta98@icloud.co', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Na', 'Na', 'Na', 'Na', '1.5', '14', 'Cooper &Hunter', 'CH-09MSPHWM-230VI', '340C998660313110130097', '9,000', '9,000', 'Na', 'Na', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', 'Yes', '2', '2'),
(34, '3635 W Bouquet Ave Anaheim, CA 92804,', 'Aeris', '3635 W Bouquet Ave Anaheim, CA 92804,', 'Attic', 'Nelson.huerta98@icloud.co', '3', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'AMERICAN STANDARD', '4A7A4043L1000AA', '21322RDY3F', '3.5', '14', '', '', '', 'Default', 'Default', 'American Standard ', 'L8X1 BOBOU4XSAAA', '21302SCYLG', '80,000', '64,000', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', 'Exempt_Asbestos', '', '939', 'Hallway ', '', '', '', '', '', '', '', '', '', '', 'EFEAF164-431C-4756-B466-FD38B4B55C90.jpeg', '', '97DAE596-93C2-4516-AE3C-59F492E742C4.jpeg', '', '', '', '', '23730A7E-CC44-4A63-BCC4-AD938F01C5BE.jpeg', '', '', '', '4', 'No', '1', '1'),
(33, '2743 Granville ave Los Angeles 90064', 'HC Air System Inc', '2743 Granville ave Los Angeles 90064', 'Attic', '.', '3', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Goodman', 'GSX160601FG', '2012017438', '5', '16', '', '', '', 'Default', 'Default', 'Goodman', 'GMES960805CUAB', '2101332149', '80000', '76880', '96%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '803', '5%', '89', '1779', 'Hallway', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '278D872F-A8AB-4360-B969-CF49E8CD51FF.jpeg', '', '', '', '4', 'No', '1', '1'),
(37, '7420 Penfield Ave Winnetka, CA 91306,', 'EC', '7420 Penfield Ave Winnetka, CA 91306,', 'Attic', 'Nelson.huerta98@icloud.co', '3', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Bryant ', '105ANA048-A', '23 1 6E 17866', '4', '15', '', '', '', 'Default', 'Default', 'Bryant ', '310 AV048090AGJA', '3216A21227', '88,000', '71,000', 'N/a', 'Yes', 'Advanced Distributor Prod', 'C48H210D756', '7115K33544', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '618', '5%', '67', '1442', 'Hallway', '', '', '', '', '', '', '', '', '', '', '00269297-4161-4CDA-A18E-EC14B606C1D4.jpeg', '', '130E9C89-B3EE-4C9F-A7A6-50E82A8500A8.jpeg', '1B7C64D2-B09C-4B8C-85EF-82E33CAA6513.jpeg', '', '', '', '37183F6D-9B09-40E8-BC84-6FBE484B56F6.jpeg', 'D011D62A-82CD-4D4C-BB51-C3F131BD9477.jpeg', 'EC80931A-D484-46C6-9317-FAE1A18029AC.jpeg', '', '4', 'No', '1', '1'),
(36, '6 Hitching Post Dr Rolling Hills Estates, CA 90274,', 'Global green solutions ', '6 Hitching Post Dr Rolling Hills Estates, CA 90274,', 'Attic', 'Nelson.Huerta98@icould.co', '4', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Good man', 'GSX160601FG', '2109238610', '5', '16', '', '', '', 'Default', 'Default', 'Goodman ', 'GMES800805CUAA', '2110659585', '80,000', '64,000', '80', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', 'Exempt_Asbestos', '', '955', 'Hallway ', '514', 'Hallway ', '', '', '', '', '', '', '', '', '6EF51F23-C0D4-4C67-9470-90052A1BD7F2.jpeg', '', '3194FAB6-A9A3-4C7E-B095-DC0FA569E142.jpeg', '', '', '', '', '', '', '', '', '4', 'No', '1', '1'),
(38, '18251 Sugarman St Tarzana, CA 91356,', 'Energy HVAC Services', '18251 Sugarman St Tarzana, CA 91356,', 'Attic', 'nelson.huerta98@icloud.co', '4', 'Heat_Pump', '', '', '', '', '', '', 'Default', 'Default', NULL, 'American standard ', '4A6H4060G1000AC', '21394JP65F', '5', '14', 'American standard ', '4A6H4060G1000AC', '21394JP65F', '5', '14', 'American standard ', 'VaSL9S090VWL', 'ACLHWDZELZ', '60,000', '60,000', '90%', 'No', '', '', '', 'American standard ', 'TEM4A0C60S51SBA', '21324MH73V', '60,000', '60,000', '80%', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '742', '5%', '87', '1129', 'Hallway ', '752', 'Hallway ', '', '', '', '', '', '', '', '', '43FDCE72-EA5B-4CAB-8DD5-D2E55F77BEA3.jpeg', 'D029469D-C392-4BC1-817A-9B9579081430.jpeg', '11092A98-D75E-482A-952E-B3DCB7938514.jpeg', '', '11DA9055-32C7-45AD-B9C8-C774AFDC294F.jpeg', '', '', '76E22347-E682-4ED3-8B26-874275246F53.jpeg', '', '', '', '4', 'No', '1', '1'),
(39, '1760 S Carmelina Ave Los Angeles, CA 90025, USA', 'NPC', '1760 S Carmelina Ave Los Angeles, CA 90025, USA', 'No_Ducts', 'nelson.huerta98@icloud.co', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'DAIKIN', 'RXB18AXVJU', 'K053705', '18,000', '1.5', '17', 'DAIKIN', 'FTXB18AXVJU ', 'K052216', '18,000', '18,000', '3', '1', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '66D36EB7-B327-4138-8DC5-3D24B62EB486.jpeg', 'C38A383B-2670-41A9-9DD1-C3029A8CE410.jpeg', '', '27DE83E5-C302-49F8-A8C3-9C12A295C8FF.jpeg', '9E5518D6-046A-4EA3-BD13-A68AC97AC141.jpeg', '1706E47B-5A4A-445F-8418-CA2844C799EE.jpeg', '4', 'No', '1', '1'),
(40, '5030 Amestoy Ave Encino, CA 91316, USA', 'EC', '5030 Amestoy Ave Encino, CA 91316, USA', 'Attic', 'Nelson.huerta98@icloud.co', '4', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Good man ', 'GSX140601KE', '2110703252', '5', '14', '', '', '', 'Default', 'Default', 'ALLIED AIR ENTERPRISES,', 'A80UH1E100C20X - 03', '5921G05328', '100,000', '80,000', '80%', 'Yes', 'A D P', 'HD50160E210B3147AP', '7120K08678', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '642', '5%', '88', '1,792', 'Hallway ', '', '', '', '', '', '', '', '', '', '', 'BC943AE1-65C6-4107-B4C2-ABBFFCD6CE3E.jpeg', '', 'FEAAECD1-B678-4134-8AED-0AD1BB378CB9.jpeg', 'BDB34A22-2419-4474-8665-59E358037C59.jpeg', '', '', '', '55DE5FC3-F71B-4FF2-91E8-32E350FA28D4.jpeg', '66961F2B-B93E-4134-A106-E94AF1551CF6.jpeg', '93591682-82E6-40FE-9D26-022759B45D65.jpeg', '9DFE1E54-D965-46BC-9D7D-337CEF49D249.jpeg', '4', 'No', '1', '1'),
(41, '23017 Gilmore St West Hills, CA 91307, USA', 'Koto Construction', '23017 Gilmore St West Hills, CA 91307, USA', 'No_Ducts', 'Nelson.huerta98@icloud.co', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'OLMO', 'OS-EL12ALP 115VO', '340A636240206030170347', '12,000', '1', '14', 'Almo', 'OS-EL12ALP115VI', '340D322490215040130064', '12,000', '12,000', '1', '9', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'F3C77084-A8E4-4CBE-86AE-5CDD7BCE35EB.jpeg', 'DA215BFD-3B2A-4A56-AA28-C5662EF4F336.jpeg', '', '3F8E3A67-DB8B-4E47-A26C-E16096AB85FE.jpeg', '3EE5AD96-0C7C-4462-8295-CA453399FB6E.jpeg', 'A85CE56A-3207-434B-8655-BFAEBF7C5D10.jpeg', '4', 'No', '1', '1'),
(42, '2493 Granville Ave Los Angeles, CA 90064, USA', 'Energy HVAC Services', '2493 Granville Ave Los Angeles, CA 90064, USA', 'Attic', 'Nelson.huerta98@icloud.co', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Good man ', 'GSX140371KE', '2109302387', '3', '14', '', '', '', 'Default', 'Default', 'Good man', 'GMES800603AUAA', '2108160793', '60,000', '48,000', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '456', '5%', '52', '1,083', 'Hallway ', '', '', '', '', '', '', '', '', '', '', '34EF758B-4686-43A4-B01E-1622A2821DDB.jpeg', '', 'A38DD77C-1474-4021-8495-EC98C01BB8EA.jpeg', '', '', '', '', '8DE20AB8-6573-489D-B1CE-4E7F116BDDCC.jpeg', '', '', '', '4', 'No', '1', '1'),
(43, '9594 Stanford Ave Garden Grove, CA 92841, USA', 'JRM Builders Inc', '9594 Stanford Ave Garden Grove, CA 92841, USA', 'Attic', 'Nelson.huerta98@icloud.co', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'ICP', 'N4A536GKC101', 'E213515865', '3', '14', '', '', '', 'Default', 'Default', 'ICP', 'N80ESU0401712A', 'A204930898', '40,000', '32,000', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '463', '5%', '46', '1.097', 'Kitchen ', '', '', '', '', '', '', '', '', '', '', 'D25030AC-C3D1-42D8-9EC0-5D4AA63962DB.jpeg', '', '0976CBC1-2796-4497-A705-790CAF8201F3.jpeg', '', '', '', '', 'BD452C94-752F-43DF-94DD-3F48974DF342.jpeg', '', '', '', '4', 'No', '1', '1'),
(44, '22737 Hamlin St West Hills, CA 91307, USA', 'NPC', '22737 Hamlin St West Hills, CA 91307, USA', 'No_Ducts', 'Nelson.huerta98@icloud.co', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Pioneer', 'YN012GMFI19RPD', '340B309570808290120405', '12,000', '1', '14', 'Pioneer ', 'WS012GMFI19HLD', '340B309500809020130043', '12,000', '12,000', '1', '13', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '19 seer not 14 ', '', '', '', '', '', '', '950EB829-261E-4E0D-BA2B-C5C07D68B31F.jpeg', '8AA79527-A0EC-41FB-989C-F55ED357B1A4.jpeg', '', 'B205CAE8-3C1E-4130-BC0F-74BE14A97DB2.jpeg', '90AAD8AE-E1C1-48BD-8937-4F6DEACE3EB7.jpeg', 'C4D33CC9-B7B7-4DBE-8B2C-0242C35CC6AE.jpeg', '4', 'No', '1', '1'),
(45, '6718 Belmar Ave Reseda, CA 91335, USA', 'Private client ', '6718 Belmar Ave Reseda, CA 91335, USA', 'No_Ducts', 'Nelson.huerta98@icloud.co', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Gree', 'GWH12QB-A3NNB4D', '4j9161w014027', '12,000', '1', '14', 'Gree', 'GWH12QB-A3NNB4D', '4J9151w011211', '12,000', '12,000', '1', '8', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4669CAA9-4BEE-40AC-8377-8AC8CAAF81C6.jpeg', '2816130B-4D88-4ACC-99C6-347331FB95B2.jpeg', '', '9560378B-9F53-4139-82BB-34872D577416.jpeg', '7038895F-4D14-4546-A475-82FE97DA7193.jpeg', '107167E1-DC3A-491C-A7E3-3EB62B375B83.jpeg', '4', 'No', '1', '1'),
(46, '600 E Elizabeth St Pasadena, CA 91104, USA', 'Green Tech A/C Inc', '600 E Elizabeth St Pasadena, CA 91104, USA', 'Attic', 'Nelson.huerta98@yahoo.com', '3', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Rheem', 'RA1436WJINA', 'W142160549', '3', '14', '', '', '', 'Default', 'Default', 'Rheem ', 'R801TA050317MUA', 'W112139220', '50,000', 'N/A', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '445', '5%', '52', '1,087', 'Hallway ', '', '', '', '', '', '', '', '', '', '', 'E4DA2D68-4FEB-4F6B-9F63-A1A493D369F3.jpeg', '', 'A51F610A-0C53-472D-A650-16FF0A8F7931.jpeg', '', '', '', '', 'C6A960FF-7D74-48DF-B80E-87E12771AF11.jpeg', '', '', '', '4', 'No', '1', '1'),
(47, '919 E Mauna Loa Ave Azusa, CA 91702, USA', 'DA HVAC Construction', '919 E Mauna Loa Ave Azusa, CA 91702, USA', 'Attic', 'Nelson.huerta98@icloud.co', '3', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Royalton ', '4AC13L48P - 3A', '1910F17047', '4', '14', '', '', '', 'Default', 'Default', 'Royalton', 'PV8 C20L100UH11C', 'WOK6945266', '65,000', '53,000', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '602', '5%', '69', '1466', 'Hallway ', '', '', '', '', '', '', '', '', '', '', '71ADF462-6FED-4DBB-96D7-4FCE6909497A.jpeg', '', '6AD2AC07-2877-4C4C-9567-9A1368D2592D.jpeg', '', '', '', '', '4E56CD8D-A98C-4688-953F-82B4AFFF0250.jpeg', '', '', '', '4', 'No', '1', '1'),
(48, '4316 Wawona St Los Angeles, CA 90065, USA', 'Falcon Air Conditioning a', '4316 Wawona St Los Angeles, CA 90065, USA', 'Attic', 'Nelson.huerta98@icloud.co', '4', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Good man', 'GSX140371KE', '2108327019', '3', '14', '', '', '', 'Default', 'Default', 'Good man', 'GMES800804BUAA', '2111330643', '80,000', '64,000', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '442', '5%', '51', '1,108', 'Loft ', '', '', '', '', '', '', '', '', '', '', 'E90D74A4-663A-4AA5-9539-264695A7C20A.jpeg', '', 'FBE1F402-2C68-4FA4-927A-6BE785089083.jpeg', '', '', '', '', '', '', '', '', '4', 'Yes', '2', '1'),
(49, '4316 Wawona St Los Angeles, CA 90065, USA', 'Falcon Air Conditioning a', '4316 Wawona St Los Angeles, CA 90065, USA', 'Attic', 'Nelson.huerta98@icloud.co', '4', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Good man ', 'GSX140371KE', '2108327003', '3', '14', '', '', '', 'Default', 'Default', 'Good man ', 'GMES800804BUAA', '2112021865', '80,000', '64,000', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '436', '5%', '52', '1,072', 'Stairway ', '', '', '', '', '', '', '', '', '', '', '7F2B5C69-0DD1-4C5C-9F74-C0BB0AA61F90.jpeg', '', '47D59F0B-E274-4038-8DBC-DF57721F5770.jpeg', '', '', '', '', '', '', '', '', '4', 'Yes', '2', '2'),
(50, '1781 E 113th St Los Angeles, CA 90059, USA', 'GMF Development and Const', '1781 E 113th St Los Angeles, CA 90059, USA', 'Attic', 'Nelson.Huerta98@icloud.co', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Good man', 'GSX140371KE', '2102584114', '3', '14', '', '', '', 'Default', 'Default', 'Good man ', 'GMES800604BUAA', '2103407779', '60,000', '48,000', '80%', 'Yes', 'Aspen ', 'CE36D44175L004', 'L20-00013026', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '489', '5%', '49', '1,089', 'Hallway ', '', '', '', '', '', '', '', '', '', '', '6298B341-6697-410C-B5C2-E7EAF4EAEEAE.jpeg', '', '5557C937-94B7-44F8-BFFD-9C05D58F04C5.jpeg', 'C5517596-443B-4114-9D0C-F73EC94D0AE2.jpeg', '', '', '', 'BB3A7988-8870-4608-B9E9-CDDBE03F9922.jpeg', '3F75C2BC-289B-48F4-9699-0ED1BC9ADE1F.jpeg', '11078A77-E7EA-4C9A-9C93-92AF6785BD71.jpeg', '051E220C-4185-4B4A-BF5D-E3BBDE3047E8.jpeg', '4', 'No', '1', '1'),
(51, '14363 Collins St Van Nuys, CA 91401, USA', 'EC', '14363 Collins St Van Nuys, CA 91401, USA', 'No_Ducts', 'Nelson.huerta98@icloud.co', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'ELECTROLUX', 'FFHP094CS1', 'IK82350151', '9,000', '0.75', '14', 'ELECTROLUX', 'FFHP094WS1', 'IK82351217', '9,000', '9,000', '2', '10', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '23 seer ', '', '', '', '', '', '', 'A65A8972-8A34-4A98-B101-DDAAA84FA73A.jpeg', '9995CA30-50C1-43CB-BB06-9AA14E9DB102.jpeg', '', 'FC3F11DE-AC58-4FF3-BFFA-E697C371B665.jpeg', '945B5B4C-87A4-4F1A-B5FB-ADBB8DB4B14F.jpeg', 'F3F36D67-1C51-4350-BE50-7381A1C5F4A1.jpeg', '4', 'Yes', '2', '1'),
(52, '14363 Collins St Van Nuys, CA 91401, USA', 'EC', '14363 Collins St Van Nuys, CA 91401, USA', 'No_Ducts', 'Nelson.huerta98@icloud.co', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'ELECTROLUX', 'FFHP094CS1', 'IK82350047', '9,000', '0.75', '14', 'ELECTROLUX', 'FFHP094WS1', 'IK82350937', '9,000', '9,000', '2', '10', 'No', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '23 seer', '', '', '', '', '', '', 'DBA0C672-BE10-4F56-8D03-F72645C2F220.jpeg', '8C246ACC-8AC0-4C16-BD38-94498EB73E36.jpeg', '', '', '', '', '4', 'Yes', '2', '2'),
(53, '15338 Hart St Van Nuys, CA 91406, USA', 'NPC', '15338 Hart St Van Nuys, CA 91406, USA', 'No_Ducts', 'Nelson.huerta98@icloud.co', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Della', '048-MS-12K2V-17S', 'A2383A933305W00477', '12,000', '1', '17', 'Della', '048-MS-12K2V-175', 'B3751A933305N00253', '12,000', '12,000', '3', '0', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3861A2DD-229E-4A15-AB02-E3A918FE374C.jpeg', '3FB0AF21-058F-43A6-A851-37415C13115F.jpeg', '', '5E0AA9CD-B948-41E4-977E-679B457FB6FD.jpeg', 'B4670F3A-FCE6-4992-B1AE-D81600532C75.jpeg', '', '4', 'No', '1', '1'),
(54, '13610 Kismet Ave Sylmar, CA 91342, USA', 'PC', '13610 Kismet Ave Sylmar, CA 91342, USA', 'No_Ducts', 'Nelson.huerta98@icloud.co', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Midea', 'MAS12H1FSP', '3418819910499010150895', '12,00”', '1', '14', 'Midea', 'MAS12H1FSP', '3418819910399020130059', '12,000', '12,000', 'N/a', 'N/a', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '43D90107-2B17-4B52-8352-272348BBECDA.jpeg', 'CC242551-095A-44BB-86EC-77AA4EBC1867.jpeg', '', '2DB07372-FCFF-430E-AA75-E7C7D8450A46.jpeg', '71ECED08-E55D-4D27-A987-874CFBDD7FAD.jpeg', '1D20FE0A-9344-41EB-A029-A8BA01586EFB.jpeg', '4', 'No', '1', '1'),
(55, '4091 Deervale Dr Sherman Oaks, CA 91403, USA', 'Greenway Heating and Cool', '4091 Deervale Dr Sherman Oaks, CA 91403, USA', 'Attic', 'nelson.huerta98@icloud.co', '4', 'Package_Unit', 'Rheem', 'RGEA14060CJT1OXAA', 'F152100164', '100,00”', '81,000', 'Na', '5', '14', 'No', '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '654', '5%', '83', '1789', 'Hallway ', '', '', '', '', '', '', '', '', '', '87223F1F-C88C-4C9C-B650-61DE56E05255.jpeg', '', '', '', '', '', '', '', '', '', '', '', '4', 'Yes', '2', '1'),
(56, '4091 Deervale Dr Sherman Oaks, CA 91403, USA', 'Greenway Heating and Cool', '4091 Deervale Dr Sherman Oaks, CA 91403, USA', 'Attic', 'nelson.huerta98@icloud.co', '4', 'Heat_Pump', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', 'Rheem', 'RP1448AJINA', 'W122115691', '4', '14', '', '', '', '', '', '', NULL, '', '', '', 'Rheem', 'RH1T4821STANJA', 'W062105936', '48,000', '48,000', 'N/a', 'No', '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '644', '5%', '69', '1448', 'Hallway ', '', '', '', '', '', '', '', '', 'For bedrooms in total ', '', '', '6DC56948-66EA-4670-81AF-5A56CC66ABCD.jpeg', '', '', '67BB3AEC-C286-46E2-9EDA-A63260C0FC54.jpeg', '', '', '3EC5039B-0022-45E4-BE0E-D4D2B26E0F1B.jpeg', '', '', '', '4', 'Yes', '2', '2'),
(57, '3533 Mesquite Dr Calabasas, CA 91302, USA', 'Top AC Inc', '3533 Mesquite Dr Calabasas, CA 91302, USA', 'Attic', 'nelson12498', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'American standard ', '4A7A4048L1000AA', '21437 JDX3F', '4', '14', '', '', '', 'Default', 'Default', 'American standard ', 'S9B1B080U4PSAAB', '21242UETJG', '80,00', '77,000', '90%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '15%_Partial', '237', '1,243', 'Living room ', '', '', '', '', '', '', '', '', 'Actual results. Leakage-428 ,airflow -1091', '', 'A8AB46E2-DBD7-4868-A5A4-02CB64A1ABC3.jpeg', '', 'F882D256-F4BF-4C9A-A195-2118D4CDF0E3.jpeg', '', '', '', '', '', '', '', '', '4', 'No', '1', '1'),
(58, '8765 Crescent Dr, Los Angeles 90046', 'HC Air System Inc', '8765 Crescent Dr, Los Angeles 90046', 'Attic', 'energymastersinc@gmail.co', '4', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Goodman', 'GSX140371KD', '2111374584', '3', '14', '', '', '', 'Default', 'Default', 'Goodman', 'GMES800403AU', '2111386021', '40,000', '32,000', '.80', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '15%_System', '155', '1073', 'Hallway', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2c93c783-8c5d-4bcf-bdbb-5992c7e9fc4d.JPG', '', '', '', '1', 'No', '1', '1'),
(59, '25881 Via Faro, Mission Viejo, CA 92691, USA', 'HVAC Alliance', '25881 Via Faro, Mission Viejo, CA 92691, USA', 'Attic', 'Nelson.huerta98@icloud.co', '4', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Trane ', '4TTL6060A1000AB', '21276S21CF', '5', '14', '', '', '', 'Default', 'Default', 'Trane ', 'L8X1C100U5XSABA', 'L8G2105069033', '100,000', '80,000', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '', '5%', 'Leakage to high', '298', 'House entree ', '128', 'House entree', '601', 'Hallway upstairs ', '', '', '', '', 'System failed , need to be retested ', '', '79AA9EC2-1F5E-4597-9EBC-E5128B0DD760.jpeg', '', 'DBCC1857-487B-4E7E-B051-03796585375F.jpeg', '', '', '', '', '', '', '', '', '4', 'No', '1', '1'),
(60, '145 Old Church Rd Topanga, CA 90290, USA', 'NC', '145 Old Church Rd Topanga, CA 90290, USA', 'No_Ducts', 'Nelson.huerta98@icloud.co', '2', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Daikin', '3MXS24RMVJUA', 'E018742', '24,000', '2', '18', 'Daikin', 'FTXS12LVJU', 'E207562', '12,000', '12,000', '6', '2', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '721BB84A-1E31-4290-A6CE-C1372CEC7EA3.jpeg', 'D522C3F3-D0CD-4678-B96B-4DA414B86860.jpeg', '', 'FA093935-A05A-4C47-98F0-A364DEC9106E.jpeg', '70C484C2-668E-4524-A5A5-924A7AC940D9.jpeg', '', '4', 'Yes', '3', '1'),
(61, '145 Old Church Rd Topanga, CA 90290, USA', 'NC', '145 Old Church Rd Topanga, CA 90290, USA', 'No_Ducts', 'Nelson.huerta98@icloud.co', '2', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Daikin', '3MXS24RMVJUA', 'E018742', '24,000', '2', '18', 'Daikin', 'FTXS12LVJU', 'E194539', '12,000', '12,000', '6', '2', 'No', '', NULL, '', '', '', '', '', '', '', '', '', '', '', 'Same condenser, 2 rooms in total ', '', '', '', '', '', '', '93FC9A49-1E75-4DE3-9CD1-217A884BABB0.jpeg', '569B3B2E-C482-483E-9A6F-913B1F26AF7B.jpeg', '', '', '', '', '4', 'Yes', '3', '2'),
(62, '145 Old Church Rd Topanga, CA 90290, USA', 'NC', '145 Old Church Rd Topanga, CA 90290, USA', 'Crawl_Space', 'Nelson.huerta98@icloud.co', '2', 'Heat_Pump', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', 'Good man', 'GSZ140601KE', '2012297334', '5', '14', '', '', '', '', '', '', NULL, '', '', '', 'Good man ', 'ARUF61D14AC', '2103062727', '61,000', '61,000', '80%', 'No', '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, 'N/A', '5%', '547', '1345', 'Dinning room', '', '', '', '', '', '', '', '', 'System did not passed , needs to be rested. Couldn’t find efficacy ', '', '', '27BA667D-E3BB-48CB-8F33-852EBBD91DAF.jpeg', '', '', '876962F7-00DB-4766-980F-4E64AAE67F24.jpeg', '', '', '20775297-0D73-4726-81B5-948D09B7C300.jpeg', '', '', '', '4', 'Yes', '3', '3'),
(63, '2055 Barnett Way Los Angeles, CA 90032, USA', 'NPC', '2055 Barnett Way Los Angeles, CA 90032, USA', 'No_Ducts', 'Nelson.huerta98@icloud.co', '2', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Carrier ', 'OVXH090B7042000029', '340A262270204180120031', '9,000', '0.75', '14', 'Carrier ', 'IVXH090B7042000048', '340A2622701 04190130048', '9,000', '9,000', '1', '14', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '8A7BDB7C-268A-4976-A49B-465ADC2EBF3A.jpeg', 'FFC513E3-964F-409E-A5AA-60696FEC21D8.jpeg', '', '1513F524-47A6-4CA3-8AB4-84887DA8B9E9.jpeg', '66A2F450-F400-4760-9780-44FB37EB9228.jpeg', '17796891-5A91-4A29-95B3-BF6C3760AA39.jpeg', '4', 'Yes', '2', '1'),
(64, '2055 Barnett Way Los Angeles, CA 90032, USA', 'NPC', '2055 Barnett Way Los Angeles, CA 90032, USA', 'No_Ducts', 'Nelson.huerta98@icloud.co', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Carrier ', 'OVXH09OB', '3407654340193280120219', '9,000', '0.75', '14', 'Carrier ', 'IVXH090B', '3407654340293250120101', '9,000', '9,000', '1', '14', 'No', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4F6C5376-8B14-4F31-85F5-3159B23B5273.jpeg', '7FAB392D-FD4E-49A9-A754-A0F1C435D40B.jpeg', '', '', '', '', '4', 'Yes', '2', '2'),
(65, '7933 Morton Ave Los Angeles, CA 90001, USA', 'Fantastic Air', '7933 Morton Ave Los Angeles, CA 90001, USA', 'Attic', 'Nelson.huerta98@icloud.co', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Good man ', 'GSX140371KE', '2110029235', '3', '14', '', '', '', 'Default', 'Default', 'Good man ', 'GMES800603AUAA', '2111170214', '60,000', '48,000', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '488', '5%', '47', '1,098', 'Hallway ', '', '', '', '', '', '', '', '', '', '', '0BDBAC8A-F1A8-478C-8696-204E60591FA5.jpeg', '', '525FC66F-7F4C-4726-9873-66B3109C7C53.jpeg', '', '', '', '', '162C63C2-C293-46AB-AC0B-0DC793D2050D.jpeg', '', '', '', '4', 'No', '1', '1'),
(66, '10244 6th Ave Hesperia, CA 92345, USA', 'San Luis Concrete', '10244 6th Ave Hesperia, CA 92345, USA', 'Attic', 'Nelson.huerta98@icloud.co', '4', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Good man', 'GSX160481FJ ', '2111057351', '5', '16', '', '', '', 'Default', 'Default', 'Good man', 'AMEC961004CNAD', '2104044430', '100,000', '96,000', '96%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '651', '5%', '79', '1,364', 'Hallway ', '403', 'Masters bedroom ', '', '', '', '', '', '', '', '', 'FC0089C6-990E-45DE-904E-78741BCD76D7.jpeg', '', '23C7BFC4-7487-4B89-9AA6-8D96B0F3562B.jpeg', '', '', '', '', '2CD71342-4BD8-4899-A658-D6D08DF8695A.jpeg', '', '', '', '4', 'No', '1', '1'),
(67, '10140 Woodward Ave Sunland-Tujunga, CA 91040, USA', 'Green Tech A/C', '10140 Woodward Ave Sunland-Tujunga, CA 91040, USA', 'Attic', 'Nelson.huerta98@icloud.co', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Rheem', 'RA1448AJ1NA', 'W472123554', '4', '14', '', '', '', 'Default', 'Default', 'Rheem', 'R801 TA070417MUA', 'W422153827', '70,000', 'N/A', '80', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '641', '5%', '65', '1443', 'Hallway ', '', '', '', '', '', '', '', '', '', '', 'A222D74F-533A-4CFB-AEA6-1420D826FADB.jpeg', '', '3B214E12-481B-4887-BA7E-67508A05CB22.jpeg', '', '', '', '', 'A352F990-716E-4350-8D11-04B42E1635E9.jpeg', '', '', '', '4', 'No', '1', '1'),
(68, '1308 E Ave R-2 Palmdale, CA 93550, USA', 'Green Tech A/C', '1308 E Ave R-2 Palmdale, CA 93550, USA', 'Attic', 'Nelson.huerta98@icloud.co', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Rheem', 'RA1436WJ1NA', 'W372108376', '3', '14', '', '', '', 'Default', 'Default', 'Rheem', 'R801TA050317MUA', 'W412165521', '50,000', 'N/A', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '432', '5%', '55', '1,088', 'Hallway ', '', '', '', '', '', '', '', '', '', '', '6B97B36C-9EB8-4C56-BAD3-E77D5728011F.jpeg', '', '5283E20E-7B3E-4377-9309-3B33E348304C.jpeg', '', '', '', '', '1453856F-935D-434A-BC8C-FA4AC4FC400C.jpeg', '', '', '', '4', 'No', '1', '1'),
(69, '847 W Ave H 8 Lancaster, CA 93534, USA', 'Green Tech A/C', '847 W Ave H 8 Lancaster, CA 93534, USA', 'Attic', 'Nelson.huerta98@icloud.co', '3', 'Package_Unit', 'Rheem', 'RGEA14036AJT08XAC', 'F422100107', '80,000', '65,000', 'N/A', '3', '14', 'No', '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '417', '5%', '76', '1,073', 'Hallway ', '', '', '', '', '', '', '', '', '', '4E5708CB-1153-4F45-B082-C08B674F1D5C.jpeg', '', '', '', '', '', '', '', '', '', '', '', '4', 'No', '1', '1'),
(70, '428 E Ave J-12 Lancaster, CA 93535, USA', 'Green Tech A/C', '428 E Ave J-12 Lancaster, CA 93535, USA', 'Attic', 'Nelson.Huerta98.@icloud.c', '4', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Good man', 'GSX140481KE', '2108328742', '4', '14', '', '', '', 'Default', 'Default', 'Good man ', 'GMES800804BXAA', '2110624882', '80,000', '64,000', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '656', '15%_System', '163', '1,466', 'Hallway ', '', '', '', '', '', '', '', '', '', '', '6EC798C0-42FC-4EA1-AB88-A53D7C13AB38.jpeg', '', '6ACFA26B-5239-4FA5-905C-8A3860DCFF7A.jpeg', '', '', '', '', 'A5C93D6D-7021-425C-B44F-2B7F724BB8AC.jpeg', '', '', '', '4', 'No', '1', '1'),
(71, '3101 W Verdugo Ave Burbank, CA 91505, USA', 'Green Tech A/C Inc', '3101 W Verdugo Ave Burbank, CA 91505, USA', 'Attic', 'Nelson.huerta98@icloud.co', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'Good man', 'GSX140371KE', '2109256837', '3', '14', '', '', '', 'Default', 'Default', 'Good man ', 'GMES800603AUAA', '2107571525', '60,000', '48,000', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '411', '5%', '49', '1,081', 'Hallway ', '', '', '', '', '', '', '', '', '', '', '26288C06-E557-4DD7-B6AE-8CB0D3D8E6AA.jpeg', '', '0B42DF97-0F6A-405D-A7FF-ABB0F8222354.jpeg', '', '', '', '', '337A5C2D-CF00-43F9-BE0F-2FA3890B37E7.jpeg', '', '', '', '4', 'No', '1', '1'),
(72, '1268 Malcolm Ave Los Angeles, CA 90024, USA', 'NC', '1268 Malcolm Ave Los Angeles, CA 90024, USA', 'No_Ducts', 'Nelson.huerta98@icloud.co', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Fujitsu', 'ASU24RLB', 'FRN058958', '24,000', '2', '18', 'Fujitsu', 'ASU24RLB', 'FRA057604', '24,000', '24,000', '3', '1', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5C4A4537-769C-47E4-B14D-385B1818459D.jpeg', 'F9868C67-FEB3-4E4A-9A4C-FCC82585E382.jpeg', '', '0E855A8A-3939-43B5-A980-FFE7AE7DFDD4.jpeg', '8DF2312D-EDEE-4F69-8AE6-E9482367AB36.jpeg', '', '4', 'No', '1', '1'),
(73, '13329 Hansworth Ave Hawthorne, CA 90250, USA', 'Green Tech A/C', '13329 Hansworth Ave Hawthorne, CA 90250, USA', 'Attic', 'Nelson.huerta98.cloud.com', '3', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'American standard ', '4A7A4037L1000AA', '21373XMA3F', '3', '14', '', '', '', 'Default', 'Default', 'Lennox', 'EL280UH07OXP36A - 01', '5914K11240', '66,000', '53,000', '80', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '432', '5%', '42', '1,088', 'Hallway ', '', '', '', '', '', '', '', '', '', '', '3AD2BE93-3685-4F0E-8FDF-2DEA8FAE021A.jpeg', '', 'CCDB9A8F-4DF3-4523-B439-B432950834AE.jpeg', '', '', '', '', '77FBB706-9ECC-4E41-9AE8-F722EDCFE959.jpeg', '', '', '', '4', 'No', '1', '1'),
(74, '6512 Laurelton Ave Garden Grove, CA 92845, USA', 'Private ', '6512 Laurelton Ave Garden Grove, CA 92845, USA', 'No_Ducts', 'nelson.huerta98@icoud.com', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Mitsubishi', 'MXZ-2C20NA2', '15P08937', '20,00', '1.5', '18', 'Mitsubishi ', 'MLZ-KP12NA', '14A16508C', '12,000', '12,000', '5', '15', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '1.67 tunnage ', '', '', '', '', '', '', '6C797075-2725-4657-B227-69BA5FB39A16.jpeg', 'D3E8CD46-144B-4578-A173-AE894557D13F.jpeg', '', '63227F05-DA45-434A-95EB-FEADA1330CAF.jpeg', 'EBAFD036-D4C7-4176-BBC8-4C642163E1C3.jpeg', '4C83D6C4-CEB8-4439-B202-8B6D1B7F1565.jpeg', '4', 'Yes', '2', '1'),
(75, '6512 Laurelton Ave Garden Grove, CA 92845, USA', 'Private ', '6512 Laurelton Ave Garden Grove, CA 92845, USA', 'No_Ducts', 'nelson.huerta98@icoud.com', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Mitsubishi ', 'MXZ-2C20NA2', '15P08937', '20,000', '1.5', '18', 'Mitsubishi ', 'MLZ-KPO9NA', '15A31860C', '9,000', '9,000', '5', '15', 'No', '', NULL, '', '', '', '', '', '', '', '', '', '', '', 'One bedroom in total ', '', '', '', '', '', '', 'A2E64823-6CBC-432C-BA82-249494F74810.jpeg', '58421196-D245-4ECF-9A48-784F9E8D7074.jpeg', '', '', '', '', '4', 'Yes', '2', '2'),
(76, '5955 Jamieson Ave Encino, CA 91316, USA', 'Global Green Solutions', '5955 Jamieson Ave Encino, CA 91316, USA', 'Attic', 'Energymastersinc@gmail.co', '2', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'ICP', 'N4A630GKB101', 'E192903636', '2.5', '14', '', '', '', 'Default', 'Default', 'ICP', 'N80ESU0401712A2', 'A211431553', '40,000', '32,000', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, '459', '5%', '33', '1185', 'Hallway', '', '', '', '', '', '', '', '', '', '', '1E13EF4E-13E9-4132-9B2D-C8B268F56AA4.jpeg', '', '7C6E28E0-6E13-451E-B817-772ADAD09AB2.jpeg', '', '', '', '', 'B8CF0544-9A43-402A-BF88-55A8B8019B97.jpeg', '', '', '', '1', 'No', '1', '1'),
(77, '21 San Sovino Newport Coast, CA 92657, USA', 'NPC', '21 San Sovino Newport Coast, CA 92657, USA', 'Attic', 'Nelson.huerta98@icloud.co', '3', 'Central_Split_AC', '', '', '', '', '', '', 'Default', 'Default', NULL, 'N/A', 'N/A', 'N/A', '4', '14', '', '', '', 'Default', 'Default', 'Good man ', 'GMES800805CUAA', '2108413702', '80,000', '64,000', '80%', 'No', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, 'N/A', '15%_System', '221', 'N/A', 'N/A', '', '', '', '', '', '', '', '', 'Only Furnace was new', '', '012B8EB6-260C-48A1-87FB-82D7D74DB80D.jpeg', '', '3F61BE4C-5FDA-4AFF-9115-62FC8141765F.jpeg', '', '', '', '', '', '', '', '', '4', 'No', '1', '1'),
(78, '1144 Calle Almendro Thousand Oaks, CA 91360, USA', 'Global Green Solutions', '1144 Calle Almendro Thousand Oaks, CA 91360, USA', 'Attic', 'nelson.huerta98@icloud.co', '3', 'Package_Unit', 'Rheem', 'RGEA14042AJTO8XAC', 'B352100751', '80,000', '65,000', 'N/A', '3.5', '14', 'No', '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Default', 'Default', '', '', '', '', '', '', '', NULL, 'N/A', '15%_System', '190', '1,109', 'Hallway ', '', '', '', '', '', '', '', '', '', 'DFA87AB0-CF2C-40AF-BC29-90EBA1EC72D5.jpeg', '', '', '', '', '', '', '', '', '', '', '', '4', 'No', '1', '1'),
(80, '6614 Noble Ave, Van Nuys 91405', 'Israel Mizrahi', '6614 Noble Ave, Van Nuys 91405', 'No_Ducts', 'energyhvacservices@gmail.', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Pioneer', 'YN012GLFI19RPD', 'Z2U20103001935', '12000', '1', '18', 'Pioneer', 'WT012GLFI19HLD', 'Z2U20102002223', '12000', '12000', '2', '2', 'Yes', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '19 Seer Condenser ', '', '', '', '', '', '', 'D1BB550E-FD57-43DE-BF7E-DE7192095334.jpeg', 'CCA803B5-BBE8-431D-80C3-C588FB1C3677.jpeg', '', 'CD8E1A45-4809-4196-931B-22ECF3562FC1.jpeg', '36977D4F-281F-4FA8-891F-4C0EB0940CC1.jpeg', '', '1', 'Yes', '2', '1'),
(81, '6614 Noble Ave, Van Nuys 91405', 'Israel Mizrahi', '6614 Noble Ave, Van Nuys 91405', 'No_Ducts', 'energyhvacservices@gmail.', '1', 'Ductless_Unit', '', '', '', '', '', '', 'Default', 'Default', NULL, '', '', '', 'Default', 'Default', '', '', '', 'Default', 'Default', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, 'Pioneer', 'YN012GLFI19RPD', 'Z2U20103002322', '12000', '1', '18', 'Pioneer', 'WT012ALFI19HLD', 'Z2U20102002225', '12000', '12000', '2', '2', 'No', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '19 SEER CONDENSER', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'Yes', '2', '2');

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
(4, 'Nelson Gutierrez', '818-987-8214', '', 'nelson123', 'tech0101', 'checked'),
(5, 'Gabriel', '818-486-6387', 'Gabrielzargari@gmail.com', 'Gabrielz', 'gabriel1234', 'checked');

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
(1, 'Maor Aizenkut', 'maizenkut', 'ma2b3c5d72195', 'energymastersforms@gmail.com');

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
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `h_technician`
--
ALTER TABLE `h_technician`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `h_user`
--
ALTER TABLE `h_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
