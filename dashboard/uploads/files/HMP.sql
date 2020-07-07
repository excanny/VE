-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2019 at 06:51 AM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HMP`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_deals`
--

CREATE TABLE `accepted_deals` (
  `id` bigint(20) NOT NULL,
  `loan_id` varchar(255) NOT NULL,
  `borrower_fullname` varchar(100) NOT NULL,
  `borrower_email` varchar(100) NOT NULL,
  `bphone` varchar(100) DEFAULT NULL,
  `bid_id` varchar(255) NOT NULL,
  `lender_fullname` varchar(100) NOT NULL,
  `lender_email` varchar(50) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `property_location` varchar(255) NOT NULL,
  `market_value` int(11) NOT NULL,
  `property_no_of_units` int(11) NOT NULL,
  `renovation_cost` decimal(10,2) NOT NULL,
  `amount_of_loan_request` decimal(10,2) NOT NULL,
  `anticipated_after_repair_cost` decimal(10,2) NOT NULL,
  `purchase_price` decimal(10,2) NOT NULL,
  `cash_reserves_available` decimal(10,2) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `purpose_of_loan` varchar(255) NOT NULL,
  `target_closing_date` datetime NOT NULL,
  `exit_strategy` varchar(255) NOT NULL,
  `project_summary` varchar(255) NOT NULL,
  `taxes` varchar(20) NOT NULL,
  `rental_income` varchar(20) NOT NULL,
  `yearly_insurance` varchar(20) NOT NULL,
  `hoa` varchar(20) NOT NULL,
  `purchase_date` date DEFAULT NULL,
  `rate` varchar(50) NOT NULL,
  `points` varchar(50) NOT NULL,
  `legal_fees` varchar(50) NOT NULL,
  `draw_fees` varchar(50) NOT NULL,
  `application_fee` varchar(50) NOT NULL,
  `other_fees` varchar(50) NOT NULL,
  `real_estate_no` varchar(50) NOT NULL,
  `max_arv` varchar(50) NOT NULL,
  `amount_of_rehab` varchar(50) NOT NULL,
  `comments_section` varchar(255) NOT NULL,
  `prepayments` varchar(50) NOT NULL,
  `loan_terms` varchar(50) NOT NULL,
  `init_loan_amt` varchar(50) NOT NULL,
  `extension_cost` varchar(50) NOT NULL,
  `extension_term` varchar(50) NOT NULL,
  `date_of_loan_application` datetime NOT NULL,
  `date_of_bid` datetime NOT NULL,
  `deal_funded_status` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accepted_deals`
--

INSERT INTO `accepted_deals` (`id`, `loan_id`, `borrower_fullname`, `borrower_email`, `bphone`, `bid_id`, `lender_fullname`, `lender_email`, `phone`, `property_location`, `market_value`, `property_no_of_units`, `renovation_cost`, `amount_of_loan_request`, `anticipated_after_repair_cost`, `purchase_price`, `cash_reserves_available`, `property_type`, `purpose_of_loan`, `target_closing_date`, `exit_strategy`, `project_summary`, `taxes`, `rental_income`, `yearly_insurance`, `hoa`, `purchase_date`, `rate`, `points`, `legal_fees`, `draw_fees`, `application_fee`, `other_fees`, `real_estate_no`, `max_arv`, `amount_of_rehab`, `comments_section`, `prepayments`, `loan_terms`, `init_loan_amt`, `extension_cost`, `extension_term`, `date_of_loan_application`, `date_of_bid`, `deal_funded_status`, `created_at`) VALUES
(16, '156242120540', 'Mark	Sanders', 'mark@EstateGA.com', NULL, '111', 'Christian Pepe', 'info@fefunding.com', NULL, '', 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-07-13 06:00:00', '2019-07-13 12:00:00', -1, '2019-07-10 08:06:10'),
(15, '156218856649', 'Nelson	Condor', 'cristinamoreano67@gmail.com', NULL, '101', 'Jarrod Fennimore', 'jfennimore@firstequity.loans', NULL, '', 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-07-13 00:00:00', '2019-07-13 09:00:00', 0, '2019-07-10 07:18:31'),
(14, '156218929447', 'Luis	Ordonez', 'anibal848@hotmail.com', NULL, '99', 'Jarrod Fennimore', 'jfennimore@firstequity.loans', NULL, '', 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-07-13 00:00:00', '2019-07-13 00:00:00', 0, '2019-07-10 07:15:27'),
(22, '156319255881', 'Alfred	Crouch', '34boobat@gmail.com', NULL, '107', 'Christian Pepe', 'info@fefunding.com', NULL, '5760 Wickfield Drive New Orlean LA', 140000, 1, '45000.00', '170000.00', '285000.00', '125000.00', '20000.00', 'Residential (1-4 units)', 'Hard Money', '2019-08-15 00:00:00', 'If it don\'t sell within 4 months my Edge extractor G is to refinance it and rent it out', 'Remove old siding replace with Hardie boards take up all old ceramic tile and level floors paint replace some cabinets and put granite countertops on it open one wall so that open floor plan can exist close off back shed to make it a man cave', '', '', '', '', NULL, '', '', '', '', '', '0', '1', '', '', 'Credit score too low.', 'no', '0', '', '0', '0', '2019-07-15 05:09:18', '2019-07-19 10:34:35', -1, '2019-07-19 12:16:43'),
(21, '156339848389', 'Ed	Hendrickson', 'hendrickson.edward@gmail.com', NULL, '111', 'Contact Hardmoney', 'contact@hardmoneyproject.com', NULL, 'test test test', 200000, 3, '50000.00', '200000.00', '500000.00', '150000.00', '75000.00', 'Residential (1-4 units)', 'Hard Money', '2019-07-31 00:00:00', 'test', 'this is a test', '', '', '', '', NULL, '12', '6000', '1500', '150', '500', '2000', '5', '300000', '100000', 'test test', 'no', '12 months', '200000', '3000', '90 days', '2019-07-17 14:21:23', '2019-07-18 14:40:39', 1, '2019-07-18 18:04:24'),
(25, '156281278273', 'Mark	Sanders', 'mark@EstateGA.com', NULL, '102', 'Christian Pepe', 'info@fefunding.com', NULL, '151 Magnolia Terrace Athens Ga', 70000, 1, '20000.00', '65000.00', '150000.00', '55000.00', '2000.00', 'Residential (1-4 units)', 'Hard Money', '2019-07-30 00:00:00', 'I would like to rehab and relist in the $150k range. This area has very few affordable homes and should easily attain that or more.', 'Good structure in a good area. Some light rehab and new appliances will get this to a profitable rental. Within minutes of UGA, this area is appealing to students.', '', '', '', '', NULL, '', '', '', '', '', '0', '0', '', '', 'Credit score too low, this is a pass for us.', 'no', '0', '', '0', '0', '2019-07-10 19:39:42', '2019-07-19 10:33:44', -1, '2019-07-19 13:18:36'),
(31, '156441213961', 'ed	Hendrickson', 'hendrickson.edward@gmail.com', NULL, '130', 'Ed Hendrickson', 'ed@thofunding.com', NULL, '911 Test Test town test', 250000, 2, '50000.00', '300000.00', '500000.00', '225000.00', '50000.00', 'Residential (1-4 units)', 'Hard Money', '2019-07-29 00:00:00', 'test', 'test', '', '', '', '', NULL, '12', '2', '1200', '150', '500', '57', '4', '200000', '50000', 'test', 'no', '12 months', '150000', '2000', '90 Days', '2019-07-29 07:55:39', '2019-07-29 08:24:08', 1, '2019-07-29 08:33:43'),
(33, '156441207521', 'ed	Hendrickson', 'hendrickson.edward@gmail.com', NULL, '129', 'Ed Hendrickson', 'ed@thofunding.com', NULL, '123 test testtown test', 200000, 1, '0.00', '150000.00', '0.00', '150000.00', '50000.00', 'Residential (1-4 units)', 'Long Term Rental Purchase', '2019-07-29 00:00:00', 'test', 'test', '5000', '2000', '2000', '250', '2019-07-29', '12', '4', '1600', '500', '1500', '', '4', '500000', '250000', '', 'no', '36', '250000', '0', '', '2019-07-29 07:54:35', '2019-08-02 08:42:14', 1, '2019-08-02 09:13:51'),
(35, '156510459724', 'Edward	Hendrickson', 'hendrickson.edward@gmail.com', NULL, '149', 'Contact Hardmoney', 'contact@hardmoneyproject.com', NULL, '123 Test St Test Town Nevada', 400000, 2, '0.00', '300000.00', '0.00', '200000.00', '100000.00', 'Residential (1-4 units)', 'Long Term Rental Refinance', '2019-08-06 00:00:00', 'test', 'test', '6000', '2400', '2000', '0', '2019-08-06', '5', '2', '1500', '', '995', '0', '2', '350000', '50000', 'test', 'no', '30 years', '300000', '0', '0', '2019-08-06 08:16:37', '2019-08-06 08:58:59', -1, '2019-08-08 17:43:03'),
(47, '156531000918', 'Edward	Hendrickson', 'hendrickson.edward@gmail.com', '5514272390', '170', 'Ed Hendrickson', 'ed@thofunding.com', '5514272390', '1234 Test Rd Testing To Test', 100000, 1, '0.00', '100000.00', '0.00', '100000.00', '100000.00', 'Residential (1-4 units)', 'Long Term Rental Refinance', '2019-08-08 00:00:00', 'test', 'test', '1000', '1000', '1000', '1000', '2019-08-08', '5', '2', '1500', '', '1450', '0', '2', '100000', '', 'test', 'no', '30', '100000', '0', '', '2019-08-08 17:20:09', '2019-08-11 11:26:06', 0, '2019-08-12 05:37:48');

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` bigint(20) NOT NULL,
  `loan_id` varchar(255) NOT NULL,
  `applicant_name` varchar(50) DEFAULT NULL,
  `applicant_email` varchar(50) DEFAULT NULL,
  `bphone` varchar(100) DEFAULT NULL,
  `lender_id` varchar(255) NOT NULL,
  `lender_name` varchar(50) DEFAULT NULL,
  `lender_email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `property_location` varchar(255) NOT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `points` varchar(50) DEFAULT NULL,
  `legal_fees` varchar(50) DEFAULT NULL,
  `draw_fees` varchar(50) DEFAULT NULL,
  `application_fee` varchar(50) DEFAULT NULL,
  `other_fees` varchar(50) DEFAULT NULL,
  `other_fees_explanation` varchar(255) NOT NULL,
  `real_estate_no` varchar(50) DEFAULT NULL,
  `max_arv` varchar(50) DEFAULT NULL,
  `amount_of_rehab` varchar(50) DEFAULT NULL,
  `comments_section` varchar(255) DEFAULT NULL,
  `prepayments` varchar(255) DEFAULT NULL,
  `loan_terms` varchar(50) DEFAULT NULL,
  `init_loan_amt` varchar(50) DEFAULT NULL,
  `extension_cost` varchar(50) DEFAULT NULL,
  `extension_term` varchar(255) NOT NULL,
  `date_of_loan_application` datetime NOT NULL,
  `accepted` int(11) NOT NULL DEFAULT '0',
  `date_of_bid` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_of_funding` datetime DEFAULT NULL,
  `date_of_rejection` datetime DEFAULT NULL,
  `bid_status` int(10) NOT NULL DEFAULT '1',
  `funded` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `loan_id`, `applicant_name`, `applicant_email`, `bphone`, `lender_id`, `lender_name`, `lender_email`, `phone`, `property_location`, `rate`, `points`, `legal_fees`, `draw_fees`, `application_fee`, `other_fees`, `other_fees_explanation`, `real_estate_no`, `max_arv`, `amount_of_rehab`, `comments_section`, `prepayments`, `loan_terms`, `init_loan_amt`, `extension_cost`, `extension_term`, `date_of_loan_application`, `accepted`, `date_of_bid`, `date_of_funding`, `date_of_rejection`, `bid_status`, `funded`) VALUES
(87, '156096676816', 'Kairaba	Burson', 'rivercitypropertyshop@gmail', '', '54', 'Claire Bruno', 'cbruno@templeviewcap.com', '', '103 bayard rd Richmond Virginia', '7.95', '2.75', '0', '0', '289', '', '', '2', '116250', '0', 'Is property owned free and clear or do we need to pay off a current mortgage?', '6 months PPP', '360 months', '116250', '1162.5', '', '2019-06-19 07:37:44', 0, '2019-06-27 09:04:54', NULL, NULL, 1, 0),
(105, '156269148657', 'Steven	Fance', 'steven.fance@cultiv8hs.com', '', '78', 'Christian Pepe', 'info@fefunding.com', '', 'N/A Atlanta Georgia', '0', '0', '0', '0', '0', '', '', '0', '0', '0', 'Not for us, thanks.', 'no', '', '0', '0', '', '2019-07-09 09:42:09', 0, '2019-07-09 10:08:55', NULL, NULL, 1, 0),
(106, '156108151043', 'Dustin	Hartmann', 'dustinhartmann7@gmail.com', '', '78', 'Christian Pepe', 'info@fefunding.com', '', '6951meadowbrook Clearlake Ca', '0', '0', '0', '0', '0', '', '', '2', '0', '0', 'Not for us.', 'no', '', '0', '0', '', '2019-06-20 18:35:49', 1, '2019-07-09 11:00:49', NULL, NULL, 1, 0),
(109, '156096676816', 'Kairaba	Burson', 'rivercitypropertyshop@gmail', '', '78', 'Christian Pepe', 'info@fefunding.com', '', '103 bayard rd Richmond Virginia', '6.63', '2', '995', '0', '995', '', '', '2', '76000', '0', 'This is priced with a fixed rate. We can do an adjustable rate for 0.5% less on the rate.', '5, 4, 3, 2, 1', '30', '76000', '0', '', '2019-06-19 07:37:44', 0, '2019-07-09 11:11:23', NULL, NULL, 1, 0),
(141, '156390912222', 'Wallace	Swartz', 'build4u@gmail.com', '', '94', 'John Yurkovich', 'john.yurkovich@nationslending.com', '', '312 state route 4 cathlama WA', '10', '3', '1200', '150', '750', '895', 'Appraisal $500 &amp; Renovation Inspection $395', '1', '130000', '62500', 'Based on the information provided the above terms are what would be offered. These terms to not represent a term sheet or commitment to lend.  We need to perform a credit check, proof of previous flip transaction in addition to property appraisal and insp', '3 Months of earned interest, after 3 months paid there is no pre-payment penalty.', '12 Months', '67500', '1300', '3 Months', '2019-07-23 12:01:34', 0, '2019-07-23 13:16:43', NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `borrower_info`
--

CREATE TABLE `borrower_info` (
  `id` bigint(20) NOT NULL,
  `bfirst_name` varchar(50) NOT NULL,
  `blast_name` varchar(50) NOT NULL,
  `bcredit_range` varchar(30) NOT NULL,
  `bhome_phone_number` varchar(50) DEFAULT NULL,
  `boffice_phone_number` varchar(50) DEFAULT NULL,
  `bcell_phone` varchar(50) DEFAULT NULL,
  `bemail` varchar(50) NOT NULL,
  `bpass_word` varchar(100) NOT NULL,
  `bstreet` varchar(50) DEFAULT NULL,
  `bcity` varchar(50) DEFAULT NULL,
  `bstate` varchar(50) DEFAULT NULL,
  `bzip` varchar(50) DEFAULT NULL,
  `cbfull_name` varchar(50) DEFAULT NULL,
  `cbcredit_range` varchar(50) DEFAULT NULL,
  `cbhome_phone_number` varchar(50) DEFAULT NULL,
  `cboffice_phone_number` varchar(50) DEFAULT NULL,
  `cbcell_phone` varchar(50) DEFAULT NULL,
  `cbemail` varchar(50) DEFAULT NULL,
  `cbstreet` varchar(50) DEFAULT NULL,
  `cbcity` varchar(50) DEFAULT NULL,
  `cbstate` varchar(50) DEFAULT NULL,
  `cbzip` varchar(50) DEFAULT NULL,
  `hash` varchar(255) NOT NULL,
  `verify_link` varchar(255) DEFAULT NULL,
  `active` int(6) NOT NULL DEFAULT '0',
  `apply_datetime` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrower_info`
--

INSERT INTO `borrower_info` (`id`, `bfirst_name`, `blast_name`, `bcredit_range`, `bhome_phone_number`, `boffice_phone_number`, `bcell_phone`, `bemail`, `bpass_word`, `bstreet`, `bcity`, `bstate`, `bzip`, `cbfull_name`, `cbcredit_range`, `cbhome_phone_number`, `cboffice_phone_number`, `cbcell_phone`, `cbemail`, `cbstreet`, `cbcity`, `cbstate`, `cbzip`, `hash`, `verify_link`, `active`, `apply_datetime`) VALUES
(28, 'James', 'Bodner', '640', NULL, NULL, NULL, 'jamesbodner000@yahoo.com', '$2y$10$BJSXTZqRorDTQXDM4qcpSu5zOsRa0yV/SwJtSSOFIwkmjLQ7fZ3Ee', '228 s bridge ave', 'Red Bank', 'New Jersey', '07701', '', NULL, '', '', '', '', '', '', '', NULL, 'f696e0910cd0667d600911ecf9b25b12', NULL, 1, '2019-05-06 09:19:36'),
(37, 'James', 'Stephens', '680', NULL, NULL, '8139513390', 'James.stephens03@gmail.com', '$2y$10$uPvxKSQQcKwAwcmgDdVsRuobqZ2wwQDLV04u9hmIc9gEamxt6b95q', '2825 N Nebraska ave', 'Tampa', 'FL', '33602', '', NULL, '', '', '', '', '', '', '', NULL, '09d921dd093942869bd8118492b3c263', NULL, 1, '2019-05-23 08:52:00'),
(38, 'Greg', 'Nugent', '0', NULL, NULL, '5855094797', 'gregnugent@aol.com', '$2y$10$ew39lEY1VBVk.7fd8CXtUOOsEBlNxotE.8UkB7ZsJ1B9lh4bzUZfC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '59b4667a9422b03e46bc8f6a07687825', NULL, 1, '2019-05-23 23:55:38'),
(39, 'Alex', 'Severyn', '720', NULL, NULL, '7163591155', 'alex.severyn.ny@gmail.com', '$2y$10$cPC/D6f4b8a/ocTQ8dKPQORHHWz0VwWDX36YKToDG58IIb4r8dP1m', '43 Central Ave', 'Lancaster', 'New York', '14086', '', NULL, '', '', '', '', '', '', '', NULL, '95dc2ee3690966c38ecdf9802ffc4cde', NULL, 1, '2019-05-24 09:08:49'),
(42, 'Greg', 'Nugent', '720', NULL, NULL, '5855094797', 'gtnmj@aol.com', '$2y$10$mflW2CaRr6xEzDXgAp/4Lu32hBFgqeUPROsMlJjNATykx/PkBNULS', '9 Del Verde ROAD', 'Rochester', 'NY', '14624', '', NULL, '', '', '', '', '', '', '', NULL, 'd3b479634dc4c6b833b11f210b23674f', NULL, 1, '2019-05-24 18:44:52'),
(43, 'Angel', 'Baez', '0', NULL, NULL, '5618899296', 'abaez1121@hotmail.com', '$2y$10$MfLCiTgGFXl9At1ISnj83uJ/0nvrHOvwrLfcSaWEpnOY2JWGNECuS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2b541f3c71e4379d8b94b46b0c5feb10', NULL, 1, '2019-05-26 20:38:47'),
(45, 'Daniel', 'Correia', '0', '3059788763', '3059788763', '3059788763', 'cdmcinvestments@gmail.com', '$2y$10$kgnwYExWfliXMBDfIwt/R.yKb0SaXT9RGsicIMSy7lTgbo6w4tCPi', '11670 SW 92nd St', 'Miami', 'FL', '33176-1022', '', NULL, '', '', '', '', '', '', '', NULL, '11a07cf593a90e3cbc56a7fd3f35c838', NULL, 1, '2019-05-28 08:07:40'),
(46, 'Paul', 'Comino', '640', '5742027070', '8775046637', '5742027070', 'Paul@HomeNation.com', '$2y$10$78uZipvHU6LjqHfj9.9XFuRZaoClPy29ee61HGC.60b5cJFo7i/TO', '1575 S Banana River Dr', 'MERRITT ISLAND', 'Florida', '32952', '', NULL, '', '', '', '', '', '', '', 'Paul@HomeNation.com', '3a4b6c42fd9cc31559acf5523388e720', NULL, 1, '2019-06-01 15:03:06'),
(48, 'Paul', 'Omar', '0', '9496103362', '9496103362', '9496103362', 'paul@newamericanproperties.com', '$2y$10$3pG0KX/uJ2rqG8uFLqm1w.w22uMXX2QzDSd0gNJewtLt0MRhq4lmS', '1667 VANDERBECK LN', 'WOODBURN', 'OR', '97071', '', NULL, '', '', '', '', '', '', '', 'paul@newamericanproperties.com', 'fc6c90ead433541375ddae86553ef739', NULL, 1, '2019-06-04 14:17:49'),
(49, 'Alida', 'Ridgely', '0', '', '', '+1301-985-2211', 'GMAdreambuilders@gmail.com', '$2y$10$TXtHQ9wwPQykEM0ZiK7BzOUGYi5DRJorDPPZButpVr8kBX82kFRFu', 'P.O. Box 476', 'Mount Airy', 'MD', '21771', '', NULL, '', '', '', 'GMAdreambuilders@gmail.com', 'same', '', '', NULL, '0b9b2942666e0b16856f2b555c255ceb', NULL, 1, '2019-06-06 13:43:12'),
(53, 'Carlos', 'Rodrigues', '680', NULL, NULL, '9735588287', 'CRODRIGUES267@GMAIL.COM', '$2y$10$/YBJw1QLunrBdPCusfUSE.OFcc88/8QdWywXtCAd4abYABW8mMhnS', '12 Alexander Avenue', 'Kearny', 'Nj', '07032', '', '', '', '', '', '', '', '', '', NULL, '57c319dd6988f39a3413cd9753379ffc', NULL, 1, '2019-06-13 11:16:43'),
(54, 'Stephen', 'Robertson', '0', NULL, NULL, '8062240333', 'stephen@ibuylbk.com', '$2y$10$XoOwxLwliOddzMZlFrIime0jGMSgGvUUmcU7mMJMR8zNX4yJ3kJi6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a2472309343ebc9db94c30d076420930', NULL, 1, '2019-06-13 12:09:52'),
(55, 'Joshua', 'Cozen McNally', '0', NULL, NULL, '7023717895', 'joshua@fflliipp.com', '$2y$10$t2CJui8MASTAQScZYJP4RewINzPXCzZZZbiW/Tqy.yJIkrDt8by0y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b617d467e6f82f48e08c2f4620ece0dc', NULL, 0, '2019-06-17 10:49:07'),
(57, 'Ryan', 'Hall', '0', NULL, NULL, '6054843184', 'dgwproperties@gmail.com', '$2y$10$qPWJBG./AFISKSrNP.Ufau7YCa6pfPRiYfZg/YgUDH/m7Gp/rVTNG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fd7c8ab12a6c52fc8f2110a5b2ede941', NULL, 0, '2019-06-18 09:57:37'),
(58, 'Diego', 'Escobar', '740', NULL, NULL, '9083136352', 'diego@culture.estate', '$2y$10$leMgj3AqQtieW.SAAJKi/ug2MzCDEDsJx7N78jTfeWv7piZFN2Sgi', '1833 Front St', 'Scotch Plains', 'NJ', '07076', '', '', '', '', '', '', '', '', '', NULL, '214e8b891dadfcd1a8eed29016a8dcce', NULL, 1, '2019-06-19 07:01:10'),
(59, 'Kairaba', 'Burson', '720', NULL, NULL, '8047280444', 'rivercitypropertyshop@gmail', '$2y$10$2bB62HlnDmX930ONEjLm.eDBoNTU6gUFiOeFYkgQHYuVrJHn2.8wK', '5207 hollymead dr', 'Richmond', 'Virginia', '23223', '', '', '', '', '', '', '', '', '', NULL, 'e91abca64f75199f27166585b437591f', NULL, 1, '2019-06-19 07:37:44'),
(60, 'Helmut', 'Karsten', '0', NULL, NULL, '6785368482', 'temp1234@live.de', '$2y$10$H6ZRgxTw9dlgn1BchBVOJOX9rWKv9q13ogyOhOmFLUSzivpj0te86', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'e3931e6cc3885c4ca421bc397eb92879', NULL, 0, '2019-06-20 16:00:11'),
(61, 'Michael', 'Lindsey', '0', NULL, NULL, '3086417335', 'mikelindsey79@gmail.com', '$2y$10$WQpEEwrmq28VPTeFBpzfCeUBg6H6qi7vSK94A4Iczc/x2U2PKgwwK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '498c3343e803a1fba7b4507392a35017', NULL, 1, '2019-06-20 17:27:44'),
(62, 'Dustin', 'Hartmann', '659', NULL, NULL, '7073505368', 'dustinhartmann7@gmail.com', '$2y$10$jKJlNlvpAqi1HMEts.Pvye/Gjyu22q.Qta5MQruiT8NEpiHNg540m', '6951 meadowbrook dr', 'Clearlake', 'CA', '95422', '', '', '', '', '', '', '', '', '', NULL, 'ca71e944ba88fb349bd362a399271364', NULL, 1, '2019-06-20 18:35:49'),
(63, 'dwight', 'greene', '550', NULL, NULL, '2675970222', 'dwightg80@gmail.com', '$2y$10$a16tg5Dkuq8uZKoeEAFz0elPE1WCMmiqPsZJsHcGYdp3RTeHfEf.W', '119 pusey', 'Collingdale', 'PA', '19032', '', '', '', '', '', '', '', '', '', NULL, 'f21eacbf2bf943aa7f8e00f04855b50a', NULL, 1, '2019-06-21 03:36:40'),
(64, 'Glen', 'Feeney', '0', NULL, NULL, '9412491775', 'teeoff302@gmail.com', '$2y$10$kMgQUR473/AvJxg7xUW.i.g7lOHw0yoZxO3rkXR3.451bEEra/YQ.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a5adbbf65348cb80b0fdd3430b9d70db', NULL, 0, '2019-06-21 06:17:41'),
(65, 'Faye', 'Cothern', '0', NULL, NULL, '9122539651', 'cothern.faye@gmail.com', '$2y$10$1Nxbbz5WVmhmZAparxQpQO476NbOxebtQfLUhhyyIPvNRhlXNoGMC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '75f00085380002b9b934f2b6820fd1d8', NULL, 0, '2019-06-21 06:45:25'),
(66, 'Jean', 'Bourdeau jr', '0', NULL, NULL, '7816580367', 'jbourdeau2022@gmail.com', '$2y$10$uey18sauGtnWWqmVlGBJVufqlvAd4IVMZG/dPESo6Y5xsHOKSZxPK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1a09cb8f060e122565581da07e0ab846', NULL, 0, '2019-06-21 14:26:55'),
(68, 'Russell', 'Coughlin', '0', NULL, NULL, '2073140830', 'butchcoughlin1956@gmail.com', '$2y$10$JdMFnMgfNH9maiGeOt0RbeeRYlheFe0yK9a8zqTwDMnHzdOkFzXUi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '47a77890c4722d27ab691ffb8c733898', NULL, 0, '2019-06-21 19:34:03'),
(69, 'Bruce', 'Umeck', '0', NULL, NULL, '6614258474', 'scv5_2@yahoo.com', '$2y$10$.etvt5zt8NbbjW1OUnn0.O2TTxWmMXNIfcl0sqYQy8yBj5CXaZTqO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ef5b71acc99e3618833ad9af5093e5d', NULL, 0, '2019-06-21 21:16:55'),
(70, 'Daniel', 'SCULLION', '0', NULL, NULL, '3308094903', 'twistedtaz609@gmail.com', '$2y$10$K5Yfe8uOnGCzmhjW7BNam.BlBQ1I0TqUu5ki0f6dK0duL4GlPnNBC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '528ed7a6c08dea539ecf0984f77e5ce2', NULL, 0, '2019-06-22 02:15:30'),
(72, 'Neil', 'Halley', '0', NULL, NULL, '8262729334', 'halleyn966@gmail.com', '$2y$10$Ga49DRQXC5g.kQGKbOCBFuFvfs64.8YBNd9ZAxeQNm14NRnhguFJe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '39a894b6411b2d3244032d0200684bfa', NULL, 0, '2019-06-22 13:55:01'),
(73, 'Jack', 'Bates', '0', NULL, NULL, '7243098904', 'jackpaulbates1492@gmail.com', '$2y$10$ngPXGkcgn/AjC7H2ifJLOOjBxocvIR7Tkk6hswYMpn4ckbb3pG.W2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4518b1f3f4f21f6e8ede36c8ad8b28c2', NULL, 0, '2019-06-22 15:29:16'),
(74, 'John', 'Neal', '0', NULL, NULL, '2514584817', 'nealsr52@gmail', '$2y$10$22oCf.BevhKB.ooFHxJiQ.LCYfkmU/Dr175B12Tnb6s4ER3b.Cbuq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a15048ceefb5b250e8b0b8ab2993adca', NULL, 0, '2019-06-23 05:13:04'),
(76, 'Shelby', 'Hurd', '0', NULL, NULL, '', 'hird_shelby@yahoo.com', '$2y$10$9JeHF5/zLiPNrh2rFo2c8OPErDUA4Nyl7fAD8d1VNx0m0m5TN.2eG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '825da2673ae16a15f2316c6deca12bef', NULL, 0, '2019-06-23 06:22:05'),
(77, 'Gertrude', 'Daube', '495', NULL, NULL, '7247622467', 'gertrudedaube@gmail.com', '$2y$10$DKC3iBa2ywlYPL0nJ9NcU.HMK1coJcFB0MjRZcbTHN4EOsPEHhSKi', '19 Herriman street PO box 33', 'Commodore', 'Pa', '15724', '', '', '', '', '', '', '', '', '', NULL, '3ef8b8cc6646b0f5dc3f545e604c8fbb', NULL, 1, '2019-06-23 11:31:39'),
(78, 'Jane', 'Henry', '0', NULL, NULL, '7064836020', 'shirhen54@gmail.com', '$2y$10$xii8iYv.8LOhufvAxLK/9es9iA5yCRDBXZuw9ujEJPYeXExcndcEy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '93914b1b5fbed307ec64709d4a62c2fa', NULL, 0, '2019-06-23 15:46:22'),
(79, 'Kendrick', 'martin', '0', NULL, NULL, '8643469268', 'mkendrickmartin99@gmail.com', '$2y$10$TTD3xCti/CfqnbIIWM9kG.xyo3xwinC2vhol6jZUIt5M553vTNXXu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '85257b202cfe4043b50a92e36aa8afb3', NULL, 0, '2019-06-24 15:10:44'),
(80, 'Marco', 'Jaramillo', '0', NULL, NULL, '9082657780', 'mljo18@hotmail.com', '$2y$10$.558QEopelgI2TwOPbKDm.3Jn1fL6YmFiAUkH6IkQ5jAHVZtaCRvq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'e69dc64c2818db24b597021bc7d9dac0', NULL, 0, '2019-06-25 14:19:42'),
(81, 'Alejandro', 'Guzman', '700', NULL, NULL, '9086368221', 'Alejandro@culture.estate', '$2y$10$Tha52KiWXWXRiSGLn7Ww9.UdrtKLh82hKaCtAdeQvD4/q1DI356lm', '423 westfield ave', 'Elizabeth', 'NJ', '07208', '', '', '', '', '', '', '', '', '', NULL, 'b65d29e5864be5591ed764423e876640', NULL, 1, '2019-06-26 06:13:50'),
(83, 'Bert', 'Zhoi', '0', NULL, NULL, '9179299368', 'bertzhou6329@gmail.com', '$2y$10$/nXMKLBYg7hlNsB1rPa97.O/1AOqcvfmPlS596ulKGxv0/yie29R6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5cefee8f0758c15e97b04c6c551da411', NULL, 1, '2019-06-27 16:54:46'),
(84, 'Gerald', 'Cabalfin', '0', NULL, NULL, '7324079595', 'gerald@hyvesthomes.com', '$2y$10$RhGfm.riZIm2xRKlXVHjL.8HPuyWFSXK.E7p9P9FqVtWdnsYKwB0K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0a4695cde10a03cc1d21ee041fa48907', NULL, 1, '2019-06-28 12:30:08'),
(86, 'Todd', 'Weaver', '0', NULL, NULL, '2398107830', 'Twmpquicksilver@aol.com', '$2y$10$zz1P4l0c5Gg/b3pZlQHtF.ccEzBuz6xjD7HsQPkqGWRT/MLPARehu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b13f2c3dbc5c5bdbb78bf9bd6347d1f0', NULL, 0, '2019-07-02 12:21:35'),
(87, 'Elizabeth', 'Rosario', '0', NULL, NULL, '7726347602', 'erosario6@yahoo.com', '$2y$10$Qs89aOGyo.5iqwm9mJ9XluqKgkcMFs4fmLGF935izg72AJzEKfVmO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'f66cb1a3d7d9bea0d4b6228b782d76a7', NULL, 0, '2019-07-02 13:54:03'),
(88, 'Lisa', 'Henderson', '0', NULL, NULL, '8036361390', 'lisagmail98@gmail.com', '$2y$10$AvC3yfuIT/TSNsK4qymhUekv4Y0mEDRcGTeWZ.mvgnI/SyolEVOb6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '278e75ec1e7393646f3341574627e6e0', NULL, 0, '2019-07-02 23:58:43'),
(89, 'John', 'Galloway', '0', NULL, NULL, '3035052858', 'gallocorp80439@gmail.com', '$2y$10$vco8.sWF1pKrD.SHDYTDM.UTbOcE83xq8n9.LnBelVY216l0H4tY.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'd6b803ca48ed70bf799a5c1679edf1d3', NULL, 1, '2019-07-03 06:04:18'),
(90, 'Kenneth', 'O\'Connor', '0', NULL, NULL, '7082885093', 'preslimited@yahoo.com', '$2y$10$qL1I/KFKoNwUc5oIPKcNrubnzxyv1bqt1voeh/QBt64d0mPTC32/S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fe0eabdd089770465c3f0ce4343d174c', NULL, 1, '2019-07-03 06:44:51'),
(91, 'Nelson', 'Condor', '725', NULL, NULL, '9082421877', 'cristinamoreano67@gmail.com', '$2y$10$9aEdu1yE0zhv1WaoQAAGDOhY4/k/ld75jVa8DR8oP9zhSuj4ZSacC', '156 berwyn st', 'Roselle', 'nj', '07204', '', '', '', '', '', '', '', '', '', NULL, '0e857dd45ccc11661a465304f8e55440', NULL, 1, '2019-07-03 14:04:21'),
(92, 'Luis', 'Ordonez', '730', NULL, NULL, '7324236480', 'anibal848@hotmail.com', '$2y$10$7pJbTSoP4nsozTj2jjPrsewQ4qPJKBeT6n2a7TLpvmWOG/9MnqwdO', '848 garden st', 'elizabeth', 'nj', '07202', '', '', '', '', '', '', '', '', '', NULL, 'a47ece02debe976fec87d6ba5acfe0c5', NULL, 1, '2019-07-03 14:18:32'),
(93, 'Mark', 'Sanders', '550', NULL, NULL, '4049152440', 'mark@EstateGA.com', '$2y$10$au7IpHXJGTBrNycI8fQRUuQuz3Du5ca4owfoR58VU9whDn8MiKAqy', '164 Edwards Cir', 'Athens', 'GA', '30606', '', '', '', '', '', '', '', '', '', NULL, '6d1fb7e32461e4cb02fbed72ed4fcaf5', NULL, 1, '2019-07-06 06:30:21'),
(96, 'Lee', 'Adler', '540', NULL, NULL, '8573527549', 'leeadler66@gmail.com', '$2y$10$.drR8LCztvmDmC5M7eh.oOeJ82NUJsfomI21inoiuSQI1jThrnZVO', '896 Front St', 'S. Weymouth', '02190', '02190', '', '', '', '', '', '', '896 Front St', 'S. Weymouth', '02190', NULL, 'e02e4ac89ebfdafd46c1a9452b837c53', NULL, 1, '2019-07-08 19:57:08'),
(97, 'Betty', 'Lawson', '0', NULL, NULL, '6063096076', 'bettylawson75@gmail.com', '$2y$10$K32daxz3bv5FZrRbJUeDuupqKqlbdKuf3OMiTJBdVrhxuje7BkEw.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3bbc62e1e9e2de27ea5175509af35b96', NULL, 0, '2019-07-08 20:26:07'),
(98, 'Willie', 'Lipscomb', '0', NULL, NULL, '7072987532', 'willielipscomb1665@gmail.com', '$2y$10$bANXl10KKV4L3AHGAf7rxOLihHqQv6HrzHLJmlQ6Krt3Eyj1ABEf.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4b0a3a634d06e3373cff84214359b076', NULL, 1, '2019-07-08 21:38:15'),
(99, 'Margaret', 'Carroll', '0', NULL, NULL, '3475250621', 'mcarroll11213@aol.com', '$2y$10$UaXGNoSkwY3jyN62HWwWQurzwPEvcFkaqCy2sWhzj1gT1L6SF/TuC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'f09273fcd28fb0f460b450a120577d04', NULL, 0, '2019-07-08 21:55:19'),
(100, 'Bernard', 'Milligan', '0', NULL, NULL, '2405568949', 'bmilligan457@gmail.com', '$2y$10$vgIQLxxuBpE8uoe1QfNRreiBVLu0plSWQoE7vA.V0m8ah5UIjUGtu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8c1baffa456ba6f94e4a2518bb5c81f4', NULL, 1, '2019-07-09 05:47:27'),
(102, 'Constance', 'Harper', '0', NULL, NULL, '6785951267', 'harperc633@gmail.com', '$2y$10$r3LAOp0ko5DiAEp6ynjo8ucL4E0YQoQzIxERrbQweUYNVcJTtnC4e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6da9f08a67022dbbee5b1cd3bd470fc1', NULL, 0, '2019-07-09 05:56:46'),
(103, 'Jerrianna', 'Vannatta', '0', NULL, NULL, '6187312872', 'jerriannavannatta78@gmail.com', '$2y$10$Nh5Y1n8hlOkWY2JtdrLhv.fsoYLzalILId0kWGDxf8Zi/dCDVdYQW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7e90bd9360c40d9d6f92702c1676577b', NULL, 0, '2019-07-09 07:48:35'),
(104, 'Steven', 'Fance', '620', NULL, NULL, '2148421282', 'steven.fance@cultiv8hs.com', '$2y$10$B32f8bjvQXLbjn7CDyppqeSfVbTlIDBLnHzjKO4mSMeUWBrdT/uJe', '756 W Peachtree ST NW', 'Atlanta', 'GA', '30308', '', '', '', '', '', '', '', '', '', NULL, 'b842a7bb5b6f93b0ecdad3348da5ec47', NULL, 1, '2019-07-09 09:42:09'),
(105, 'Alberta', 'Rolfe', '600', NULL, NULL, '3158799192', 'ebbe1350@gmail.com', '$2y$10$vxVlGBihp.JRCXOPQN4Cu.cGDUgfHTDhb5CuU4PrzNpO1xNEpwIc2', '7537 Old Lyons Rd', 'LYONS', 'New York', '14489', 'Brantley. Beers', '500', '3158799192', '', '3158799192', 'ebbe1350@gmail.com', '7537 Old Lyons Rd', 'LYONS', 'New York', NULL, 'fcc53cb6f7e05cdbf7c883ac2e2a9f71', NULL, 1, '2019-07-09 13:17:09'),
(106, 'Roger', 'Fisher', '635', NULL, NULL, '8656792712', 'rtaxi396@yahoo.com', '$2y$10$WyNgY1L/A98JlzxEWfjZDOMKVVKCICi.Pk76zZugMAusk5JOEtt1K', '975 Harvest Dr, 975 harvest dr', 'SEYMOUR', 'Tennessee', '37865', '', '', '', '', '', '', '', '', '', NULL, '8a8f02cd4d7e6523c23b9025f1b20a74', NULL, 1, '2019-07-09 18:01:58'),
(107, 'Deleano', 'Mitchell', '0', NULL, NULL, '6162748995', 'deleanomitchell@gmail.com', '$2y$10$7prL34hXEq1ss4v6IFxKg.CAlNUr/u6C3yWiP00rVDL6B9HveWgNq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'd0f3f44512cddd97c6fa5dcb2306c65a', NULL, 0, '2019-07-10 09:06:42'),
(108, 'Antoinetta', 'Johnson', '0', NULL, NULL, '3347777179', 'Pearlyjohnson53@gmail.co', '$2y$10$JE2inl6suQiJkY3qFXnWQOtPTM.Ohua02rv8qLDO8RPndJCP0pcCi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'd985f38c726960849ad37241307095c6', NULL, 0, '2019-07-10 09:22:25'),
(109, 'Andrew', 'Brown', '&lt;600', NULL, NULL, '6466717962', 'arbrown@kw.com', '$2y$10$4f5HIe6QPgruuVr2Aik99eBs23UVpHkOkHPkeVRIMXU.70.qNVCp.', '5 Woodworth St, unit 9', 'Boston', 'MA', '02122', '', '', '', '', '', '', '', '', '', NULL, '186033d07b73fd004133239263360eca', NULL, 1, '2019-07-10 10:25:52'),
(110, 'Hana', 'Petrovic', '0', NULL, NULL, '5168510536', 'hanapjetrovic@mail.com', '$2y$10$cJTurwoqGvxOBtYLn.OELerl/SjGqEyN6n9gS4.ILdR4/zZlguiUC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2b4729212f14239e5aab42f1c5d6f2ad', NULL, 0, '2019-07-10 16:06:51'),
(111, 'Hana', 'Petrovic', '0', NULL, NULL, '5168510536', 'hanapjetrovic@gmail.com', '$2y$10$dHE7Yj5IxigP2LIp1sSN5O.j6MLjL437Xpo5SfNnca9eGtcPIWZjm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ebd223319e10d79316a873ca18438ff6', NULL, 1, '2019-07-10 16:09:55'),
(112, 'Brian', 'Trible', '550', NULL, NULL, '2102599685', 'btrible1982@gmail.com', '$2y$10$KLnpsaUgP3SzM25WEM.SIOugUVIy4rqONhCGMhjxDb3AQeA7g/Zxq', '293 State Route 3023', 'Montrose', 'PA', '18801', '', '', '', '', '', '', '', '', '', NULL, '5fe7c4084e989de39e885ba631b872c3', NULL, 1, '2019-07-10 20:52:57'),
(113, 'Joseph', 'Douglass', '0', NULL, NULL, '9252680380', 'gardoufundinggroup@gmail.com', '$2y$10$ZrxXIP2MmRR4Z0u7Ej0yS.RgOCXNZqRj960TDQuqysvrJ2epkL86q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '386106cc74709b8abc53fd38283bb346', NULL, 0, '2019-07-10 23:02:41'),
(114, 'Steven', 'Drake', '0', NULL, NULL, '3143261102', 'njshirt@me.com', '$2y$10$KTGp0KnBQP4wkAm8fUVUi.TdYYoUQD3iqUHJ7nn3fLtammIebSrIK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9c5d7c8582e7bbb3a86c0745803335c3', NULL, 0, '2019-07-11 02:56:17'),
(115, 'Robert', 'Harnishfeger', '0', NULL, NULL, '+19858567109', 'roberttharnishfeger@gmail.com', '$2y$10$jcGwhAOxf8J/L4UtZxnTjeVpqLCYOwTOCvKPcF5V0uHCR/Vzvtn1a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'f8548ad0b594741f2d273d9528a76679', NULL, 0, '2019-07-11 09:35:21'),
(116, 'Blake', 'Darrington', '0', NULL, NULL, '4158496060', 'blakedd420@gmail.com', '$2y$10$Zm3hr/Az3XcEAnuWcv1Spe1FLDqaGz4ODMoqVJw2aoRfuaCMrFDAu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9cd8f84a01e498350fbfae59c0820dcd', NULL, 1, '2019-07-11 11:45:48'),
(117, 'Jasmine', 'Parker', '0', NULL, NULL, '7313070155', 'j_shella_16@hotmail.com', '$2y$10$hgus8i4HV2LPiprQbrxk..D3QlXlDN6TcPhM9izohTN3oo2NPjXXW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'd333787fa0171f7236c61b32650a6ba6', NULL, 0, '2019-07-11 18:52:48'),
(118, 'Richard', 'merkel', '0', NULL, NULL, '3038832457r', 'Rickmerkel@yahoo.com', '$2y$10$M6XSL3GuBzjkkgDoMgzN/.VwYP4U3QFC2xonsqzq0fuDjH4YCzgmG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9b3f0e6a89846774dd9bcbf990f62435', NULL, 1, '2019-07-11 20:30:26'),
(119, 'Albert', 'Myers', '', '', '', '7327630314', 'albert@pophomebuyers.com', '$2y$10$72XfA58JOzo5DZWqDMolauu/Wr4v8/n1J6zyuk3geCI3QQQ6F32GO', '927 Westfield Ave', 'Rahway', 'New Jersey', '07065', '', NULL, '', '', '', '', '', '', '', NULL, 'db92c0c76ebab7702f64af2f7c4a191f', NULL, 1, '2019-07-12 16:18:53'),
(120, 'Anthony', 'George', '0', '8034126976', '8034126976', '8034126976', 'ageorge1970@icloud.com', '$2y$10$dASBgfnSSUwQ8oZ8w9xF5euoyUYwQy6VnBTLiqUnIsgfzxCE/YeRu', '409 brushwood dr', 'York', 'Sc', '29745', '', NULL, '', '', '', '', '', '', '', 'ageorge1970@icloud.com', 'b67d7ac29f8875cef32290fed649e9bd', NULL, 1, '2019-07-12 18:22:53'),
(121, 'Claudia', 'Certuche', '0', NULL, NULL, '9084223913', 'chiquigenios@yahoo.com', '$2y$10$gtbfIO8mF9YwOX/b1nETIuPN0tjTjy6XmEFy0NJQ70HH5aK2oZy6i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a2e5f4a642cafc38dbe7869a5e4df257', NULL, 0, '2019-07-13 08:07:29'),
(122, 'Antoinette', 'Noto', '0', NULL, NULL, '2018737387', 'antoniettanoto1960@gmail.com', '$2y$10$OYZixTJiuVE.lzPkefF4j.RLpRC7MD8ykhgtFrIOws4Oj6V1JuVRi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c2256fad9d0443bdfe312c0ba0ce7a7a', NULL, 0, '2019-07-13 08:22:49'),
(123, 'Shane', 'Minch', '0', NULL, NULL, '7655325783', 'shaneminch@gmail.com', '$2y$10$vbYgXqkO4j3GHVY56WagxeJvnUdQDF4vIIDtBl81KvSezo4AGLdVO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'e95cf167e9358e851bed5d688a78c781', NULL, 0, '2019-07-13 08:51:17'),
(124, 'James', 'Fisher', '0', NULL, NULL, '+14437398484', 'jf6694@gmail.com', '$2y$10$iwYFlJYK6rTvA86pw33xKeG/iKv8fP9gCMJKnGUyqN1jVF.GQhEI2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8bcea9c81dec479f57cc4b4a3479144e', NULL, 0, '2019-07-13 12:20:03'),
(125, 'Joanna', 'Johnson', '0', NULL, NULL, '4106450194', 'jjohnson@millenniarei.com', '$2y$10$u2UcuttRcfiwLPIycb6EhORI74bbXRUPl/RRpSWj9vREMJhRPWGDC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c843159a00b69e5190911b784c03224d', NULL, 1, '2019-07-13 13:39:51'),
(126, 'Charles', 'Robinson', '0', NULL, NULL, '7622443993', 'charlesrobinson37@icloud.com', '$2y$10$WBGsLjwjHXoEdnnCrBeGLOwv4s.jhmZHxHmDZj3hRxGfksVuUVFSu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '61b45cc7b6f440caddebfaf0dd8018c5', NULL, 0, '2019-07-13 13:47:27'),
(127, 'Mike', 'Christian', '0', NULL, NULL, '2406466660', 'lifeisproductions@gmail.com', '$2y$10$BnjVp.Ae9xd6NgSLnwJ8ouZ3LAen22ClfYY.hNo/zSX9zgDkckB/a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3672b55d4d1809d86192b2c4a33887f2', NULL, 0, '2019-07-13 14:06:33'),
(128, 'Patrick', 'Hillsman', '0', NULL, NULL, '8322488044', 'hillsmanconstruction@gmail.com', '$2y$10$spEimzyJ7trHsynzgLf2DeEFNFwMDXD2UMn/xNxkyAQ3fweL8JUwG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6979e019e844c58c7dbfa641a8d40462', NULL, 0, '2019-07-13 20:58:51'),
(129, 'Derek', 'Merkel', '0', NULL, NULL, '3038832457', 'derekmerk31@gmail.com', '$2y$10$PojZFsis3Ylp7PQWCko9EOM1kZBhdmygXoXKiSmLV6/LBOxESz82S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cdfc3d0bffbe2086602308519766cdfd', NULL, 0, '2019-07-13 21:16:34'),
(130, 'Startina', 'Warner', '0', NULL, NULL, '2604466094', 'startina81@gmail.com', '$2y$10$tx2KDuohm57d0PcAEEsq/Oy9MJq/Bv96pusxdcNV.4ONor5bVNqK6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '225312450633cf363a2a479bffbfee42', NULL, 1, '2019-07-14 03:58:37'),
(131, 'Kateri', 'Carlson', '0', NULL, NULL, '+1612962584', 'thunderwoman79@gmail.com', '$2y$10$.xJCMwceCrAKzk6zJJFqBuOY7UdJH3h1mIKU49rBsBKy/Ho4q9tra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1634c75dbea3c853b993c935c08e7888', NULL, 1, '2019-07-14 04:02:25'),
(132, 'Flavio', 'Colon', '0', NULL, NULL, '7174727206', 'flaviocolon57@gmail.com', '$2y$10$UXbzbRxTlfecOiBtiUfga.5IJkr79vLTDlXyvcZjh9zg3/OR.UmcW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b7fb45466d4bdff39cfde9553dcad1a4', NULL, 0, '2019-07-14 08:29:00'),
(133, 'Vicky', 'Revels', '0', NULL, NULL, '6087842464', '2656kissntell@gmail.com', '$2y$10$Sqyfkv.2wsJOyZZ1guGcwu2cSqRU4JCSY30KNL4VTNFnR75SWSZ2q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5b750ebc3b4f26e7dbdd954be1c240b6', NULL, 0, '2019-07-14 10:18:30'),
(134, 'Ben', 'Williams', '0', NULL, NULL, '704634875', 'benjaminwilliams000@gmail.com', '$2y$10$eBKT0etZLy8cVGYltJldQ.c3qpbKNwPbNZio.CTMyOuNCD5.V8umS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '55cf4e33ff0e7160ab3f133d8f759760', NULL, 0, '2019-07-14 12:24:27'),
(135, 'Raymond', 'Henry', '0', NULL, NULL, '+17737194119', 'raymondhenry25@gmail.com', '$2y$10$mrg0.2l0JiAXhAGJIOEIDuT8iWKqY46yy/Z4qWRX0kk0PoXTnoPRK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9a4de6baba390852b22ca8865b381f84', NULL, 0, '2019-07-14 12:38:42'),
(136, 'Cornelious', 'Patillo', '0', NULL, NULL, '+12484994023', 'corneliouspatillo98601@gmail.com', '$2y$10$qnSBZnzwAnivZyAkFUgpbOhoncSA3LhI4b8.3AhEPiO2qlFJ0HQzO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '03cabd4907685eeb3c3a1f7fff8a93da', NULL, 0, '2019-07-14 16:50:05'),
(137, 'Keirre', 'Purches', '0', NULL, NULL, '3126929780', 'ififty5@gmail.com', '$2y$10$HphK6wk6g4zZ1XXVE8nTIOdK5IMOoWDc95oTId2PV2wqvjxQDeHAq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '53a119b4c9d38ade689b3c7404e5337c', NULL, 1, '2019-07-14 23:08:36'),
(138, 'Alfred', 'Crouch', '', '', '', '5045536872', '34boobat@gmail.com', '$2y$10$H.VDX0xoBVLqQqgGIlvVkuYLHWsmUPqIqqIhbwp0FiZ0wkdGm4fRO', '4563 Werner dr', 'New Orleans', 'LA', '70126', '', NULL, '', '', '', '', '', '', '', NULL, '3d4629b88d754984b35a0609873bbb04', NULL, 1, '2019-07-15 04:56:45'),
(139, 'Vince', 'Salpietro', '0', NULL, NULL, '9378067463', 'vincesalpietro@gmail.com', '$2y$10$GsVQyG937fsBhIG2oIdbLuX2J/P4aQSLgG5.cC23W72XlC37V6sNi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '552f69e158ea91470878e5bf695599d6', NULL, 0, '2019-07-15 07:09:28'),
(140, 'Eugene', 'King', '0', NULL, NULL, '5044013434', 'tmprocon@yahoo.com', '$2y$10$hr3kYVbP2n4fd.jq/traZ.1fei9yEt.vHOhU2wA1Lp50V2gJ7DHqK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '53d058fc7786a7bc1687a42924fdc74c', NULL, 0, '2019-07-15 19:54:26'),
(141, 'Justin', 'Lindell', '0', NULL, NULL, '7169691422', 'exteriorrescuewny@gmail.com', '$2y$10$X8UWcA91iolWoZSWY10o3uVHEX8L/hKYtvP5h5p2eZZHziFPDaZoy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '89c95400c1ee54ec024775b606241f82', NULL, 0, '2019-07-15 21:08:28'),
(142, 'Justin', 'Lindell', '0', NULL, NULL, '7169691422', 'chqrentaks@gmail.com', '$2y$10$uGETPwGAhAC4IC8kZtt23.057xv4.J2l0BneWQCBh/k28io9wehxG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ffe7c2102ed070bec015d937e10ecc0', NULL, 1, '2019-07-15 21:10:08'),
(143, 'Willie', 'Huff', '0', NULL, NULL, '+16789270333', 'huffwillie114@gmail.com', '$2y$10$kxgpL3OO0sezyU85FSSWYu7uvZQ4vHqKOsm58.TeU.baMIgiBWoHi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8754486434c328481ee70b518f78b351', NULL, 0, '2019-07-16 01:06:50'),
(144, 'Davidene', 'Flores', '0', NULL, NULL, '808-258-6908', 'tnflrs@gmail.com', '$2y$10$ZW96YJ/fVbNJw2vDe5j5N.uY80TO0R5HkmpfUK2ov6WDZfSYquPSu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0ed4da935632c732656b51439acd1ca3', NULL, 0, '2019-07-16 03:01:02'),
(145, 'Ted', 'Stokely', '520', NULL, NULL, '2104830122', 'tedjr1955@gmail.com', '$2y$10$Pj/DzWmIG5mUAs5lHWytjOcCdGpQZe6JNq6SnYCnZPj027ZGz0n2K', '3787 Perrin Central Blvd Apt 416', 'San Antonio', 'Tx', '78217', '', '', '', '', '', '', '', '', '', NULL, '49bc1b7cb59cf589ae2f484bf8b11d0f', NULL, 1, '2019-07-16 03:01:45'),
(146, 'Wayne', 'Vanderpool', '0', NULL, NULL, '9149065487', 'waytopool@gamil.com', '$2y$10$tlWvAvJ8OsvyUEwE8DdhI.qLYkZ9sZ0iHn57.1u6FpXzMwM.cD/8C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dd968d27ab5e95d1cf36c9306a515a99', NULL, 0, '2019-07-16 06:34:28'),
(147, 'Laura', 'Belt', '0', NULL, NULL, '5807409014', 'laurabelt71@gmail.com', '$2y$10$nphjVZYUYxi8/ZUMnd.B3uVpJmSJdfK1pD5e8vjd/p.Oi33coDPHq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '73aa29b9cbd56ffd7492375d32401a57', NULL, 0, '2019-07-16 09:03:48'),
(148, 'Jose', 'Dominguez', '0', NULL, NULL, '5167104080', 'jose.d@welendny.com', '$2y$10$7emRWR2t9HMayXUjRVjGLO6gLKrjcwtdJ6yti6lpcXvQWNpW4IsDS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fc380a31392cc6bdbd9609f3d3123227', NULL, 1, '2019-07-16 13:04:19'),
(149, 'scott', 'johnson', '0', NULL, NULL, '+19402840375', 'sjohnsonpainting051@gmail.com', '$2y$10$XUloSmgu3/IR6RZiGjr6lesCO6xTUpwV9iY560.bmMwq7Y/IiyF4e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'de7f92d232064a9347a7eb50f3142e0e', NULL, 0, '2019-07-16 13:15:15'),
(150, 'Emanuel', 'Wise', '0', NULL, NULL, '7739490182', 'wisemanuel2@yahoo.com', '$2y$10$Hv7mzLfGe2Ckn.kSTgpY.etEP1UYZVxyep9OKdaeCle/SRhdXNak6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b178891338e16ceaebed3826194b1608', NULL, 1, '2019-07-16 14:31:08'),
(151, 'Jimmie', 'Owens', '0', NULL, NULL, '+17736340369', 'jimmieowens514@gmail.com', '$2y$10$uaOLfKkG3dPf.nJ2Nn.rA.VTTlju9f0Gu8ffkcbXyfFILWY1LhPzS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3a7ee1c4f550da4116a49c01948a1285', NULL, 0, '2019-07-16 14:35:45'),
(152, 'Tony', 'Hankton', '0', NULL, NULL, '8703106671', 'tonyhankton@yahoo.com', '$2y$10$2MItB7cU/CQHjqkAXOd/2OJcuYORDSExd0aoD4hRHsyQerXtWyKiu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '92f05fa6419c7297aeab4c4efb3e9774', NULL, 0, '2019-07-16 16:04:07'),
(153, 'Antonio', 'James', '0', NULL, NULL, '+15044734268', 'antoniodamover@yahoo.com', '$2y$10$wy23/qBzsP403G9RsBnTTe6FVW5RGXK9MsThOO7kVYL4HYjw.arzu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '359f4233cca20bd64bee9c97d0e7e01b', NULL, 0, '2019-07-16 16:34:11'),
(154, 'Michelle', 'Cummings', '0', NULL, NULL, '4067998256', 'cummingsmichelle95@yahoo.com', '$2y$10$NnrSKFLIOXfIcUVWabDBae3m/218aYr4p9vCmRL17GCvbuQWEgH2q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dcff58e4685d001732b989e07c77df77', NULL, 1, '2019-07-16 17:17:02'),
(157, 'Chris', 'Durham', '670', NULL, NULL, '9376702833', 'chrise1982.cd@gmail.com', '$2y$10$f2WiOOwPGIuJrq1Dfb8C7eeGnwBc673LjGK0Jakj8K4talBTV89NW', '756 E Market St.', 'Nappanee', 'IN', '46550', '', '', '', '', '', '', '', '', '', NULL, 'd282e4cca7e6d3ac96a65852f6e62d41', NULL, 1, '2019-07-16 18:33:31'),
(158, 'Kris', 'H', '', '', '', '7084065762', 'kghceo@gmail.com', '$2y$10$14O3Ga1tZAWS746znfYSkeDtM9BawT5zqVF9UuGuYfDYg4ab8Zh0e', '1601 n Sepulveda blvd', 'Manhattan beach', 'Ca', '90266', '', NULL, '', '', '', '', '', '', '', 'kghceo@gmail.com', '3091f5fc6071d658ac6d20ce1d3b755a', NULL, 1, '2019-07-16 19:42:13'),
(159, 'Gary', 'Bakken', '0', NULL, NULL, '2182895072', 'gbakken5@gmail.com', '$2y$10$LxDYBdhKfoYT0A/UOnpwdu3koHMoyCxWDr5UGix3Qxx0oy.7Jo3ly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7749c28384c2daddb9a148b676502cd5', NULL, 1, '2019-07-16 19:52:48'),
(160, 'Larry', 'Stalvey', '0', NULL, NULL, '+12293440008', 'larryrstalvey@gmail.com', '$2y$10$wHy/eudl2HVjVuHAQ8MA0eyOaHJRToAvO24dCb.OUPrZI9UOx0XQy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3bc6ad4bf72b06524b68da5c4da7ceaa', NULL, 0, '2019-07-16 22:51:14'),
(161, 'Sidney', 'Stuckey', '0', NULL, NULL, '3148146700', 'info.syholdingsllc@gmail.com', '$2y$10$4mUKjk5lssDZqlDXkGXHwOSgql16bcyEB9rMLItf.vndKJWc6YrP6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '271819bee2b5047ad1c965b79ae050de', NULL, 1, '2019-07-17 05:07:38'),
(162, 'Rodwell', 'Walsh', '0', NULL, NULL, '6092126208', 'rockking64@yahoo.com', '$2y$10$B3.d4Isndy9MHxDF0u3fSeyVp3hOZEgdUBP9zS/p0JxHsIJTt/xB.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2d615186bd3900e4fdfd3e39173881df', NULL, 0, '2019-07-17 12:14:24'),
(163, 'Raphael', 'Charles', '0', NULL, NULL, '732-900-9340', 'tifayo1900@gmail.com', '$2y$10$QcN2W/wIMljQOWuzvq8vVeucQ9i7j6gWAUvzOmiv06O/i98ssKCeS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4d514cffd81b3de598c2fc635ae8ed02', NULL, 0, '2019-07-17 12:29:24'),
(164, 'Raphael', 'Charles', '0', NULL, NULL, '732-900-9340', 'mrtifayo1900@gmail.com', '$2y$10$bCi0FIvMMX5SBZPqexWcg.vHDbGsDJQATOl6VpUQWPUCO85cyQzc6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9e12bd1aedc828e728a3bd51175d0b54', NULL, 0, '2019-07-17 12:32:09'),
(165, 'Tavius', 'Smith', '0', NULL, NULL, '9564059039', 'charlotteinvestmentgrp@gmail.com', '$2y$10$Nlm65ER.FHmH6fiGQlR8QuUlHD04KLOQnZfaXz7RkmF472Q6L9me2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9aa0638d11b7b8cfe0bbfe274f9555e0', NULL, 1, '2019-07-17 12:55:54'),
(167, 'Edward', 'Maurer', '', NULL, NULL, '9375388311', 'jabroni1012001@yahoo.com', '$2y$10$BlaqBUa6kA0hpALg6mxlEOaBdQnyp7dmZhrdNEXeIvITr0JDH9DfG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0d1ce9755b5bd58c9705d0db8b32b054', NULL, 0, '2019-07-18 01:48:40'),
(168, 'Maurice', 'Wesley', '', NULL, NULL, '4045521779', 'gogoinspections@gmail.com', '$2y$10$kU7ObZTGSoOCxqQL4ucBeub0aJsZo8Szhn1hnW6zvpTiGcoEfqvuu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9701af4d7c3f150fff9de3e7085cc2bb', NULL, 1, '2019-07-18 06:40:03'),
(169, 'Herman', 'Mazyck', '', NULL, NULL, '9803331424', 'Mazyckherman@yahoo.com', '$2y$10$4nfL7usONLcSEgSfN3hqSeWzUIngz2fI7NC7Md1Kjr1kfSfQYDWs6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a7df999dde72a8c2fa048fade1e276bf', NULL, 0, '2019-07-18 07:22:08'),
(170, 'Donna', 'Sanchez', '', NULL, NULL, '2163795684', 'sqwanktoad@sbcglobal.net', '$2y$10$3MKEKUoV85ikraqEidor0emcvHehOHCUcOG3CQboTdD7rRAsReJ7S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bbbfde5a8bf4f9cbabe48ce1f2f99651', NULL, 0, '2019-07-18 08:43:33'),
(171, 'Marc', 'Wilson', '', NULL, NULL, '+18283587521', 'marcrockslinger420@gmail.com', '$2y$10$QIf5U7cWICz/sBSzMRqj5eNXVmv6l8SWRltxsBqsCRD4Bg7GpMBZO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '67aae49c76b2bc880b41a89cc2f774cb', NULL, 1, '2019-07-18 16:17:27'),
(172, 'RobertOring', 'RobertOring', '', NULL, NULL, '83856526493', 'trumburty@yandex.com', '$2y$10$VGIU/K71FLA5MoVLsdLeguuy0VsTdEDMMJY3aQo1bihmdajD12HFG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1a7abd5f4f0371f23def1a9e850c97e9', NULL, 0, '2019-07-19 05:37:48'),
(173, 'Edward', 'Yvon', '', '', '', '2079749551', 'yvon.edward90@gmail.com', '$2y$10$85ZKHjdUi7QEk.NcPw/EL.P1pNiDXOPdjl.QWuDVxNddm5SANnphe', '29 Princeton st', 'Bangor', 'Me', '04401', '', NULL, '', '', '', '', '', '', '', NULL, '45b3e24984352a28a8b5ccd4e087a8ae', NULL, 1, '2019-07-19 05:56:04'),
(174, 'Andrew', 'Grainger', '', NULL, NULL, '6105705853', 'andy@alpharenovators.com', '$2y$10$Wzd0waE9V956hasenVt6OeJAytjo4dmd4v73AAyyvcNryBE98gEqu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aae4a5237bde2cf31621db2513a58450', NULL, 1, '2019-07-19 06:06:28'),
(175, 'Brad', 'Thumann', '500', NULL, NULL, '5072597193', 'brad.thumann4@gmail.com', '$2y$10$XvNH67V4e0Ha8EwkUk9ur.VqtPojjEshMMSR3JTDr3dVWiDTCf8XK', '72504 280th st', 'Albert Lea', 'Mn', '56007', '', '', '', '', '', '', '', '', '', NULL, '6e336e9e051bf6cab3407066fee25a14', NULL, 1, '2019-07-19 21:22:25'),
(176, 'Derrick', 'Watkins', '', NULL, NULL, '9187771350', 'derrickwatkins@me.com', '$2y$10$IIDFzrqX7Q.0XGfM0szlGOX/UgPoZgKICu29Bs5uPC3mvlPXuI.YW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2a123885a7bf7efe14abfc64f3171e70', NULL, 0, '2019-07-19 22:11:50'),
(177, 'Scott', 'Brown', '575-600', NULL, NULL, '7607927399', 'photosuperman1@yahoo.com', '$2y$10$..CtPa8123qXG96uylu9b.G9EnJCYmMJ6NrS3w2rlSmbWI1DHrrTq', '1876 Vista Rd 720800', 'Pinon HIlls', 'California', '92372', '', '', '', '', '', '', '', '', '', NULL, '8175fa0aaf9c6f0c691900066b5cd0e7', NULL, 1, '2019-07-20 09:48:39'),
(179, 'Greg', 'Mulrooney', '650', NULL, NULL, '9015531186', 'gregemul@yahoo.com', '$2y$10$D36hUh892fZ/.6a/t1mHpulgKmkgby.Mm.rjMfs2gCmPWLPEOUzu2', '195 Cottonbend dr', 'Rossville', 'Tn', '38066', '', '', '', '', '', '', '', '', '', NULL, '0aa0fa24f5f5b41fe29cf6d8c29381e9', NULL, 1, '2019-07-20 11:45:10'),
(180, 'Ugochukwu', 'Opara', '', NULL, NULL, '4844784469', 'ugotheagent@gmail.com', '$2y$10$wCxuXnFYptafrjqbZBLBBeAgy00vYMVa.xEH6W/unVLEJlm7yyzem', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6113051660447bd0528de43e6f090ad5', NULL, 1, '2019-07-21 10:41:14'),
(181, 'Franklin', 'Ruble', '', NULL, NULL, '804)437-8920', 'rublefrankie@yahoo.com', '$2y$10$Vd9vv7UiGHlrQkhvimzSe.3WyCFBCYVHVQQpGDmwhTIYVSb89BMou', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aacc3731be138ee742e613e9366927bd', NULL, 0, '2019-07-21 11:35:10'),
(182, 'Christopher', 'Ference', '', NULL, NULL, '9109691180', 'ference6pack@hotmail.com', '$2y$10$jdixowKo0ViWb/GbxSW5mezyqkSmebmdw4530.SGvk8ZIs0LNeSRC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '06df6b95882d5e22b4217f27d2157640', NULL, 0, '2019-07-21 16:01:56'),
(183, 'Timothy', 'Hoffman', '', NULL, NULL, '+14433206207', 'timsh59@gmail.com', '$2y$10$elUt2qtKRnPYoGF6ZTMBSuOPrwJLPiLrVt.0WzccXcdOGgHOiPgEK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9c4f65aa63d55232344187beb465c63c', NULL, 0, '2019-07-21 16:05:04'),
(184, 'Emily', 'Jensen', '', NULL, NULL, '4023329689', 'mjej1015@gmail.com', '$2y$10$9uvLm96fzXn9TIBlTV49K.lRzYD7IsFjIJcA2PGZadJN38yQUQEDy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08ce921a86611f563f20d3ffd83640eb', NULL, 0, '2019-07-21 18:27:06'),
(185, 'Harold', 'Phillips', '', NULL, NULL, '+19168073504', 'tbsphillips@yahoo.com', '$2y$10$7vatCIhKjfku0pQw5zm6d.wtQXlWALWygj.BGa6JXAzInyS89PrMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '52f4ee2e9ce53cdcf2e109753ee39036', NULL, 0, '2019-07-21 23:03:31'),
(186, 'Ryan', 'Reading', '', NULL, NULL, '7164101361', 'ryan_reading@yahoo.com', '$2y$10$t7HJxgZOarpvRIt1uNgzZObvae5rNkxBJKmFFVzFTubkL.PJTTs/O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9730da8e7fa1da559e9a38af77aa6206', NULL, 1, '2019-07-22 05:28:18'),
(187, 'Bryan', 'Paglinawan', '720', NULL, NULL, '503-320-0132', 'bryan.paglinawan@gmail.com', '$2y$10$Q5L5gKDA4udmgDbPyDHR/.jD6UQSEdbwwqPo3tv/TyefTsIuTIGyq', '4188 W Main Street', 'Medford', 'Oregon', '97501', '', '', '', '', '', '', '', '', '', NULL, 'f76003f1c2ed92c21c477ab9b87aab8f', NULL, 1, '2019-07-22 07:39:44'),
(188, 'Rosario', 'Ramos', '', NULL, NULL, '+12086047705', 'rosarioramos438@gmail.com', '$2y$10$8iUahABlWm7SAHxcga5qaOaKWelQPwzwM6YVoXhl/TqCgqLSswkv6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4c18bc942c37d7725f503b775256e8a4', NULL, 0, '2019-07-22 13:31:28'),
(189, 'Wally', 'Forde', '', NULL, NULL, '8138419668', 'awffumigator14@gmail.com', '$2y$10$ekEPkkVd2hWz.a4etkGtduggxQTTw3hCInGh4kxTviK8/qASSz9Aq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '29dff211ac3afa12d4aeec78c1774499', NULL, 0, '2019-07-22 15:11:44'),
(190, 'Linnea', 'Howard', '', NULL, NULL, '5095426397', 'LinneasRealEstateBusiness@yahoo.com', '$2y$10$LuX8r0JuqIkPRE4yc/pXrudH93idagVbvXDPX25lhCp1o/lJs8eM2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7b716872484d485e2ed9a71a079b89f2', NULL, 0, '2019-07-22 15:45:12'),
(191, 'Monchelle', 'Hicks', '520-550', NULL, NULL, '+18048036213', 'hicksmonchelle262@gmail.com', '$2y$10$VP2zNLRQzbG3WxXEV1RlEenkL.8fhERjfMXbQlWHpWCX8wjJsXr0y', '2105 n 23rd st', 'Richmond', 'Virginia', '23223', '', '', '', '', '', '', '', '', '', NULL, '7c8a8ab9bbcf3085599ae9cda3773c47', NULL, 1, '2019-07-22 16:49:27'),
(192, 'Tasha', 'Pack', '', NULL, NULL, '3242961169', 'tashapack72870@yahoo.com', '$2y$10$BzCm2nG3WSQ9df26W5xKNuh7Z6xnL2c08At6DQ/JNroJRzJ2OTV/i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5540a71f92812a5776090352f31f8b50', NULL, 0, '2019-07-22 19:56:42'),
(193, 'Shannon', 'Smith', '607 to 620', NULL, NULL, '5853223666', 'shannons1978@yahoo.com', '$2y$10$xtjZs4MD3g4s5o4EiN.LsOfAjb6Ond7jg.1YndhKRjFzNl8Z/G5EG', '11075 Beals rd', 'Cohocton', 'Ny', '14826', '', '', '', '', '', '', '', '', '', NULL, '719b9ba3369b26edf46f78b2a3f186b8', NULL, 1, '2019-07-22 21:35:18'),
(194, 'Atiba', 'Antoine', '', NULL, NULL, '4109291629', '40westholdinga@gmail.com', '$2y$10$35m24XlkFDoml.51qmQcquqWDGGxQsOHXsMfUppD4b.b6Y97anW6i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '39a0975887c1234acf374e5ea44e2163', NULL, 0, '2019-07-23 07:46:41'),
(195, 'Wallace', 'Swartz', '664-700', NULL, NULL, '5033092333', 'build4u@gmail.com', '$2y$10$c8sa1.6G.PZvTl7uX3y9iuvZNhvDyCvp4IdjP6WkXlHX3j9ErVZce', '13207  nw  2 ave', 'vancouver', 'WA', '98685', '', '', '', '', '', '', '', '', '', NULL, 'ce60f7413bf95ecdbfc5beea7d0b7f0f', NULL, 1, '2019-07-23 11:47:22'),
(196, 'Sonja', 'White', '670', NULL, NULL, '2253236026', 'srwhomesllc@gmail.com', '$2y$10$Ic.u2xd/TfYY2s28Pg4ghe.r2bdWiRBjGMUg9dCgryJLbUPzNgilW', '207 Lafourche St', 'Donaldsonville', 'Louisiana', '70346', '', '', '', '', '', '', '', '', '', NULL, '6fb149d304eb75e35539ae20b0e2602c', NULL, 1, '2019-07-23 12:26:13'),
(197, 'Debbie', 'Allen', '', NULL, NULL, '585-727-1090', 'ladyallen50@yahoo.com', '$2y$10$W8DKlFIRyjgYnXI5ksPBXOEHn0mRDT3Z00KKxIlx89.5z75Fq8gjq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '372f3a44919fba53bb336a56ee4e3224', NULL, 0, '2019-07-23 14:09:48'),
(198, 'Floydhoinscdc', 'Floydhoinscdc', '', NULL, NULL, '82295293371', 'a.rt.e.mo.leg.ov.i.c.h.1.9.64@gmail.com', '$2y$10$3.h90CTjLL9nN6.GO/48TeaB9xoNMoKUKYIzFqQzPlXkhS9tVcb6y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '411e17d6e8b3f2bc9cd04f7f9ab2f7e2', NULL, 0, '2019-07-23 14:20:18'),
(199, 'Donald', 'Waters', '', NULL, NULL, '8727772178', 'dwaters227@gmail.com', '$2y$10$oRZsZX6m10teN5IdvO.iMe6UsnwpKEAp9N6MXleUq8NV85wnmfeSK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1b4ba34efa3b2d73e38e748d9ccac6eb', NULL, 1, '2019-07-23 15:21:49'),
(200, 'Bruce', 'Carvet', '', NULL, NULL, '5414291449', 'brucecarvet74@yaho.com', '$2y$10$e1vBxyi/4dE05h0JQf8Sd.K/PAu57OT7jSr8SN2WDJtBtDezBgHFu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5c5a43104897a5c62088cc061796cbc5', NULL, 1, '2019-07-23 16:25:56'),
(201, 'Terence', 'Casey', '590', NULL, NULL, '4402070920', 'legacyinvestments35@gmail.com', '$2y$10$cJ3JWseietDedDUiiLQ2fOTZRMcBAD5IMN9iFyBY1aRrAOhMdCzme', '1515 PENNSYLVANIA AVE', 'LORAIN', 'Ohio', '44052', '', '', '', '', '', '', '', '', '', NULL, '03dd12312705f1df6418520b95674323', NULL, 1, '2019-07-24 13:11:57'),
(202, 'Felix', 'Vazquez', '', NULL, NULL, '6098922377', 'sophisticatededu@yahoo.com', '$2y$10$dK306kaI2qBHdgA/33rPReM6NQgUui3FbuFhyiPEdOPTGlCMCSo/a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0d3c315e3fb9a77e3d32b5d7e05bdee4', NULL, 0, '2019-07-24 20:39:03'),
(203, 'Anthony', 'Indelicato', '', NULL, NULL, '2676886679', 'freedesign401@gmail.com', '$2y$10$f1NGODdMsm8nFsq6EgZHpuN3LU5JaHNt7Qhu5KBTDh4yDgwErxpfu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '81e069d725c27a1d21d4c8bd459dec7d', NULL, 1, '2019-07-25 03:58:31'),
(204, 'Dilbar', 'Moldobaeva', '550', NULL, NULL, '7185701586', 'uniquesupplies@yahoo.com', '$2y$10$RXRap5G8kpHcBzzy0B/F6eNR.5IfD/Ii64MVzIpi1OyilBETMoLTO', '9244 54ave', 'Elmhurst', 'NY', '11373', '', '', '', '', '', '', '', '', '', NULL, 'f1a45600610889d98c0d4766241eb997', NULL, 1, '2019-07-25 07:18:15'),
(205, 'Robert', 'Moore', '600', NULL, NULL, '6072965658', 'r.moorepropertiesllc@gmail.com', '$2y$10$dY8isXh69smjeQz0vvJajuHQJZyj5.Bbf09ZKVvJF5xL2t.AlEt1u', '58 broad ave', 'Binghamton', 'NY', '13904', '', '', '', '', '', '', '', '', '', NULL, '999d5ec4903e3014e346b8ec675f30e0', NULL, 1, '2019-07-25 11:04:50'),
(208, 'Clark', 'Truly', '', NULL, NULL, '+13129569169', 'ctruly84@gmail.com', '$2y$10$7EDzpW6vzW6lwzh4tfTORun9W9BZ.Wp4vaTI1zNhi01w4oKnthjOy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6804a5faf351c9b3bf0e72353c9863ee', NULL, 0, '2019-07-25 16:33:32'),
(209, 'Omar', 'Sanders', '', NULL, NULL, '9802752748', 'blueprint7LLC@gmail.com', '$2y$10$jhI6GFs51cKkqab60umkHOod4wDzk9zIQDH1M8DPRXhQqPblWxghK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1f7d819e9a204ec38672a0cb30564257', NULL, 0, '2019-07-25 17:40:30'),
(210, 'francis', 'kaufman', '', NULL, NULL, '4124196176', 'kaufmanrocky@yahoo.com', '$2y$10$QGnbeXo0PgxMR68WTt3Nhe46huxG.XU5pQujWtsffXQpBqABAV9lO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ad808d5ba5ff893cb12fb63be02a9c79', NULL, 0, '2019-07-25 17:46:33'),
(211, 'Herman', 'Mazyck', '', NULL, NULL, '9803331424', 'Hermanmazyck@gmail.com', '$2y$10$KOi9hj666/NT6Ei30LFY6Oy47P03pSvUx8qm6r7WrWLnl.5f1C7Y6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b952ae87cf772805eec5212da034480e', NULL, 0, '2019-07-26 07:18:31'),
(213, 'Gil', 'Verner', '', NULL, NULL, '9855132729', 'gverner_nsu@yahoo.com', '$2y$10$cB/Dn09GEJSyckrmnD1KPuUplkZQYR5QsgiPzfcHd6ENa72W70r1u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cc9bca7be57144dc8d7d1e23174d424c', NULL, 0, '2019-07-26 09:53:40'),
(215, 'Ellal', 'Yunka', '', NULL, NULL, '2063927458', 'natate2000@gmail.com', '$2y$10$I9vYfbPE21nLtNvorrATcOmK9ToFF.gDuou//SnmEmWr/.txBeUYa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '51c6850ad7c358fc6c057b1e91a66d66', NULL, 0, '2019-07-26 14:59:02'),
(217, 'Terrick', 'Fantroy', '', NULL, NULL, '4044824794', 'fantroyproperties@aol.com', '$2y$10$fAM9hcP2zlO9imNYX.a.gebqipKzEqDNNBrca/ocLzvC4lIFQPk0u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'e6e505af7607bcb0cfbf54dbd6c45d01', NULL, 0, '2019-07-26 15:25:53'),
(243, 'Camela', 'Walker', '', NULL, NULL, 'camelawalker@yahoo.com', 'camelawalker@yahoo.com', '$2y$10$ytcQ1lk57RAZ46ylCshUveMcmNwEmrTS5Zs1EmvragCceE4oGD85u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6fef22ba961803cd3e9ddbf8b22b9ec1', 'https://hardmoneyproject.com/bverify.php?email=camelawalker@yahoo.com&hash=6fef22ba961803cd3e9ddbf8b22b9ec1', 0, '2019-07-26 21:10:06'),
(248, 'Darold', 'Taylor', '810', NULL, NULL, '8045561121', 'rvarealtordtaylor@gmail.com', '$2y$10$qo64NPBcz8TffQZVFvobTOiATRwsWSVQI567dVW4Kxsg.BLcvEkQK', '5273 beachmere ter', 'Chester', 'VA', '23831', '', '', '', '', '', '', '', '', '', NULL, '1329817b64fe8b36aa021416dcf7c0ae', 'https://hardmoneyproject.com/bverify.php?email=rvarealtordtaylor@gmail.com&hash=1329817b64fe8b36aa021416dcf7c0ae', 1, '2019-07-27 05:27:10'),
(249, 'Bonnie', 'Pugh', '', NULL, NULL, '7735690506', 'pughbonnie48@hitmail.com', '$2y$10$gWl8vi2TEZJVNE8bRs9aaOIVSCW49cm7hTKBj7RCVEUF7efpsUrZa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '360cd414f16213075d4fbcda9bebeb13', 'https://hardmoneyproject.com/bverify.php?email=pughbonnie48@hitmail.com&hash=360cd414f16213075d4fbcda9bebeb13', 0, '2019-07-27 07:15:29'),
(250, 'connie', 'donaldson', '569', NULL, NULL, '9897636223', 'donaldsonconnie55@gmail.com', '$2y$10$R.M5LgrUGPkh3a/HQyQDr.ZYCwzwPJqtPBZ/ud9DtrkSxwQJ44HkK', '10787 w st Charles rd', 'sumner', 'MICH', '48889', '', '', '', '', '', '', '', '', '', NULL, 'a0bb336bc7c823cefed941672283021e', 'https://hardmoneyproject.com/bverify.php?email=donaldsonconnie55@gmail.com&hash=a0bb336bc7c823cefed941672283021e', 1, '2019-07-27 08:14:11');
INSERT INTO `borrower_info` (`id`, `bfirst_name`, `blast_name`, `bcredit_range`, `bhome_phone_number`, `boffice_phone_number`, `bcell_phone`, `bemail`, `bpass_word`, `bstreet`, `bcity`, `bstate`, `bzip`, `cbfull_name`, `cbcredit_range`, `cbhome_phone_number`, `cboffice_phone_number`, `cbcell_phone`, `cbemail`, `cbstreet`, `cbcity`, `cbstate`, `cbzip`, `hash`, `verify_link`, `active`, `apply_datetime`) VALUES
(255, 'Kevin', 'Willett', '', NULL, NULL, '9189021207', 'kevinwillett1970@gmail.com', '$2y$10$jYOjf.W2rcf2YoKM26C3Tuwy6OR9uaDj18o4NOVQyOi62ePk350Vy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7e43a1fb2cff603240eefdfcb18a0847', 'https://hardmoneyproject.com/bverify.php?email=kevinwillett1970@gmail.com&hash=7e43a1fb2cff603240eefdfcb18a0847', 0, '2019-07-27 15:25:41'),
(256, 'Herman', 'Arrivillaga', '', NULL, NULL, '+17656317502', 'yourdolphinenterprises@gmail.com', '$2y$10$HD6ityhqnnNPii1/xDf9PebL5wyoAXEeZ88wkIROEOapBLRIXyBQe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1dad7d13e072a8c1b783089e80205e2f', 'https://hardmoneyproject.com/bverify.php?email=yourdolphinenterprises@gmail.com&hash=1dad7d13e072a8c1b783089e80205e2f', 1, '2019-07-27 19:07:52'),
(257, 'BrucewigaM', 'BrucewigaM', '', NULL, NULL, '83929275162', 'bruce.messam@gmail.com', '$2y$10$fneYx6vmMa.Tws.Mn.60sOaURILp1nDRUkjrdswVnlKKBhfCLpEuS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '313d7795b796128555bd427bdc91c1b1', 'https://hardmoneyproject.com/bverify.php?email=bruce.messam@gmail.com&hash=313d7795b796128555bd427bdc91c1b1', 0, '2019-07-28 11:48:55'),
(258, 'hydraBeiva', 'hydraBeiva', '', NULL, NULL, '84189847826', 'crazyorange@hydrakozel.press', '$2y$10$qozsxeoymuKsnInbLV9nPe8tXO7B5ylyWkLXAQgbdubLvPGUgyWbi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'e92ca58c24f9ea470449aad82bd95e29', 'https://hardmoneyproject.com/bverify.php?email=crazyorange@hydrakozel.press&hash=e92ca58c24f9ea470449aad82bd95e29', 0, '2019-07-29 02:11:10'),
(260, 'StevenDes', 'StevenDes', '', NULL, NULL, '81591817827', 'steven.thompson.calif@gmail.com', '$2y$10$O0Gn7soV3B4NKcZN3jhCBe0drQBjHfBM9j5anbizNiZpd/C2JhcNa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a5772accdaa5ff0007cbdd9b2d3226f1', 'https://hardmoneyproject.com/bverify.php?email=steven.thompson.calif@gmail.com&hash=a5772accdaa5ff0007cbdd9b2d3226f1', 0, '2019-07-30 15:29:20'),
(261, 'Stevencet', 'Stevencet', '', NULL, NULL, '89286747798', 'makssemenovsk@rambler.ru', '$2y$10$OMnd29lGNI15sCPS8ea1N.pIHfXtzlCiCuMNolXgw.h.kOxNKZz.u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fbb25f2ad89fa3a3a18e32b96c7600ad', 'https://hardmoneyproject.com/bverify.php?email=makssemenovsk@rambler.ru&hash=fbb25f2ad89fa3a3a18e32b96c7600ad', 0, '2019-07-31 12:29:27'),
(262, 'Englkadof', 'Englkadof', '', NULL, NULL, '89887166347', 'weicardescchi1977@yandex.ru', '$2y$10$rsPJxOamPDCdIlSymfwyA.cCHtl/YwF0sM331MSzgz6GZ.k7kOqPy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2ab0a42e048fe4b286a48972fe7e7be3', 'https://hardmoneyproject.com/bverify.php?email=weicardescchi1977@yandex.ru&hash=2ab0a42e048fe4b286a48972fe7e7be3', 0, '2019-07-31 16:24:06'),
(263, 'kidsmans', 'kidsmans', '', NULL, NULL, '81566711392', 'truxanov1985@ukr.net', '$2y$10$nVq/lII/qiKZRNCHabC4muAc7Quzrlj0zSmHueAO6Cv2r7J6VMyBK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'e679d2363a2bec3e39260babd2cafdcb', 'https://hardmoneyproject.com/bverify.php?email=truxanov1985@ukr.net&hash=e679d2363a2bec3e39260babd2cafdcb', 0, '2019-08-01 03:01:51'),
(264, 'pitervied', 'pitervied', '', NULL, NULL, '88615757347', 'piterm.org.ansportst.o.rew.o.r.l.d.2.016@gmail.com', '$2y$10$tVvjSkts2Mtu.2ug76eEO.2ybFFZLYIueoC6buhZ.BhZIQd2JPXyO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9f83d37cdfe1deb2cd2cd3a7b9877713', 'https://hardmoneyproject.com/bverify.php?email=piterm.org.ansportst.o.rew.o.r.l.d.2.016@gmail.com&hash=9f83d37cdfe1deb2cd2cd3a7b9877713', 0, '2019-08-01 04:29:11'),
(265, 'FrancisRot', 'FrancisRot', '', NULL, NULL, '88956832245', 'ar.temole.go.vi.ch1.9.64@gmail.com', '$2y$10$0V9uvsGqIB399P6lya/R3.79d1yeoE5.0I3.BE3AUEPY3GhLXx35m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '71699e87bbf943ff7f97210083bf6761', 'https://hardmoneyproject.com/bverify.php?email=ar.temole.go.vi.ch1.9.64@gmail.com&hash=71699e87bbf943ff7f97210083bf6761', 0, '2019-08-03 02:04:18'),
(266, 'Elaineusery', 'Elaineusery', '', NULL, NULL, '83888441319', 'a.l.e.x.al.e.x.2.091@ya.ru', '$2y$10$QIC/xFTn3EGk2cOcO6pj0eQpjy8CV5NJ1kvPKr5oc346Vad3cseQS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ed479540ea60c805d689d8cd3a91b4ee', 'https://hardmoneyproject.com/bverify.php?email=a.l.e.x.al.e.x.2.091@ya.ru&hash=ed479540ea60c805d689d8cd3a91b4ee', 0, '2019-08-04 05:45:11'),
(267, 'KathrynAlmok', 'KathrynAlmok', '', NULL, NULL, '82356769898', 'kathrynneugszadubina@yandex.com', '$2y$10$8CC11oKWZnvEFSKTLML6y.OZ1ShAYYHDXlP6XUYU274w8w/NDXK6O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ddbbed22b22abb602e9d0cff711fb14a', 'https://hardmoneyproject.com/bverify.php?email=kathrynneugszadubina@yandex.com&hash=ddbbed22b22abb602e9d0cff711fb14a', 0, '2019-08-05 09:18:19'),
(268, 'KasSehaTex', 'KasSehaTex', '', NULL, NULL, '86334459455', 'ndui2019@mail.ru', '$2y$10$Sy3y9ns/u58CM8t00KJxneJHZF5EPvM2qG2aSR2hgADK34UwSwFbe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'd46a1538818ce40308dbe0c1d10c9f6f', 'https://hardmoneyproject.com/bverify.php?email=ndui2019@mail.ru&hash=d46a1538818ce40308dbe0c1d10c9f6f', 0, '2019-08-05 19:54:34'),
(269, 'Edward', 'Hendrickson', '740', NULL, NULL, '5514272390', 'hendrickson.edward@gmail.com', '$2y$10$2wK3MLAlag/6j1xggCKAIecMf182JrDQJoqw6Fl1ZFie3yxaB4sBm', '700 Bloomfield St Apt 2', 'Hoboken', 'New Jersey', '07030', '', '', '', '', '', '', '', '', '', NULL, '7acd552b9b9e2df63c03fbb5f1df794d', 'https://hardmoneyproject.com/bverify.php?email=hendrickson.edward@gmail.com&hash=7acd552b9b9e2df63c03fbb5f1df794d', 1, '2019-08-06 06:57:45'),
(270, 'JosiPaf', 'JosiPaf', '', NULL, NULL, '89397645688', 'goledeq@mail.ru', '$2y$10$qmnPht62orW8MFZj8pasgOv0uQyu4Cqa/Ln/SgdNJakJbVDnDF/lu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ab5652069c1cd04b5dc60d7459452efa', 'https://hardmoneyproject.com/bverify.php?email=goledeq@mail.ru&hash=ab5652069c1cd04b5dc60d7459452efa', 0, '2019-08-07 02:26:54'),
(271, 'AlinaRap', 'AlinaRap', '', NULL, NULL, '83644368421', 'murzilkinaalina@gmail.com', '$2y$10$i3MX8ZdRiFVqA/LUjZmWq.Lf7dNgjoYDXDfA3ZrHoYF1NyROCDR1i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '96cd7457c6edb25155c49c8b3b5d4762', 'https://hardmoneyproject.com/bverify.php?email=murzilkinaalina@gmail.com&hash=96cd7457c6edb25155c49c8b3b5d4762', 0, '2019-08-07 02:33:39'),
(272, 'Timothyfam', 'Timothyfam', '', NULL, NULL, '89768168523', 'fevgen708@gmail.com', '$2y$10$5jUcugRAvXyFIgMHyZ/GjuvgcYMp3VWAvG8Alv/3fteu1ovNEpQVm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b91e7d2eb69d0aded8f63f7b81edb328', 'https://hardmoneyproject.com/bverify.php?email=fevgen708@gmail.com&hash=b91e7d2eb69d0aded8f63f7b81edb328', 0, '2019-08-07 03:44:36'),
(273, 'Robertwrota', 'Robertwrota', '', NULL, NULL, '85972937414', 'konomic42@gmail.com', '$2y$10$mErC2viTDLCadiURvyFBaOsEmCUG.F6ufZtUctsv4tr.14wQNRFi2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b977a8fd542f828de0d9045f2cac85e2', 'https://hardmoneyproject.com/bverify.php?email=konomic42@gmail.com&hash=b977a8fd542f828de0d9045f2cac85e2', 0, '2019-08-09 19:35:32'),
(274, 'RandyPsymn', 'RandyPsymn', '', NULL, NULL, '81739393578', 'v1k1nav@ya.ru', '$2y$10$vk6HIS/0OrmAGyhSVKis7eT8XL6lny8kzXiqoFjI/cfPJK9i55foW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9bba9ba4d4963a7556238157986c9f0d', 'https://hardmoneyproject.com/bverify.php?email=v1k1nav@ya.ru&hash=9bba9ba4d4963a7556238157986c9f0d', 0, '2019-08-10 02:34:54'),
(275, 'FrancisRot', 'FrancisRot', '', NULL, NULL, '86536812543', 'ar.t.em.o.lego.v.ic.h1.9.64@gmail.com', '$2y$10$t3tW7avvKDkk6woUf0FFsuNYbSeUnnU3ns9STtJPX/R4phIuuB9oG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c72b10832175f31bf5e85b2399392c80', 'https://hardmoneyproject.com/bverify.php?email=ar.t.em.o.lego.v.ic.h1.9.64@gmail.com&hash=c72b10832175f31bf5e85b2399392c80', 0, '2019-08-10 04:19:50'),
(276, 'hydraBeiva', 'hydraBeiva', '', NULL, NULL, '88997147199', 'tsum@hydrakozel.press', '$2y$10$ocsT4zM6KUgf0xC.elkiYuwbodia/kZU9xPszBeXn/9xpedQSMhwi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '356e7a91a47fbbcb0e7a5013c59c7674', 'https://hardmoneyproject.com/bverify.php?email=tsum@hydrakozel.press&hash=356e7a91a47fbbcb0e7a5013c59c7674', 0, '2019-08-10 18:54:23'),
(277, 'tetsa', 'tesr', '745', NULL, NULL, '2347030595988', 'godson.ihemere@gmail.com', '$2y$10$ZU2s0ElNxeAPoqBBUIqgY.DyqQJhfWwDGiFHxEmYRLf0r4QcyJcUu', 'test', 'test', 'test', 'test', '', '', '', '', '', '', '', '', '', NULL, 'a37920aeab72f5a132c9ac882a2ee435', 'https://hardmoneyproject.com/bverify.php?email=godson.ihemere@gmail.com&hash=a37920aeab72f5a132c9ac882a2ee435', 1, '2019-08-11 07:41:58'),
(278, 'pitervied', 'pitervied', '', NULL, NULL, '88358561192', 'pi.t.e.r.m.organsp.or.t.st.o.re.wo.r.ld20.1.6@gmai', '$2y$10$NeE.DizMOhDslSIrC.gZX.27wesZ5A8y4DUigBpNzdAtoCyfH.pHa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b93d3fcae1fc8584477bc006389a957f', 'https://hardmoneyproject.com/bverify.php?email=pi.t.e.r.m.organsp.or.t.st.o.re.wo.r.ld20.1.6@gmail.com&hash=b93d3fcae1fc8584477bc006389a957f', 0, '2019-08-11 13:20:19'),
(279, 'DennisQuole', 'DennisQuole', '', NULL, NULL, '82531525786', 'fev.gen708@gmail.com', '$2y$10$8BtV0Obhjgk2/W7YS62eqecavcdV1hV0rjtWN1VLr9wZwxONKM592', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '316f6e4285cc25bc814a14015c7eaefe', 'https://hardmoneyproject.com/bverify.php?email=fev.gen708@gmail.com&hash=316f6e4285cc25bc814a14015c7eaefe', 0, '2019-08-13 15:21:44'),
(280, 'Ketypinly', 'Ketypinly', '', NULL, NULL, '87634547752', 'rumasero@mail.ru', '$2y$10$W8xwYKbGy19ihYiF5LAV3eyn3C2jW.OCzs/5Z7Kg.GeyvxIqe6hRe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7804b43753932a408feb8dee0d69d9ae', 'https://hardmoneyproject.com/bverify.php?email=rumasero@mail.ru&hash=7804b43753932a408feb8dee0d69d9ae', 0, '2019-08-14 13:28:45'),
(281, 'VicenteTresy', 'VicenteTresy', '', NULL, NULL, '84355959238', 'vic7ente@yandex.ru', '$2y$10$IsD7qssKxyc3gh6dsDU6NuWOZAXfoWOgB7lXFg7iM0eBmrSDPiga.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '48cdd583bbaa5cb000b9384cc29ff4b2', 'https://hardmoneyproject.com/bverify.php?email=vic7ente@yandex.ru&hash=48cdd583bbaa5cb000b9384cc29ff4b2', 0, '2019-08-15 09:29:27'),
(282, 'pitervied', 'pitervied', '', NULL, NULL, '84367978394', 'p.it.e.r.morga.nspo.rt.store.world.2.0.16.@gmail.c', '$2y$10$MCf.0u4kS1Ym9QFzqKGiGOv7paA2Onp8dDBugZlYtPbk6bt7q8cUG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3d1691548334e41a6b4dd5d84f402811', 'https://hardmoneyproject.com/bverify.php?email=p.it.e.r.morga.nspo.rt.store.world.2.0.16.@gmail.com&hash=3d1691548334e41a6b4dd5d84f402811', 0, '2019-08-16 23:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `bpassword_reset_request`
--

CREATE TABLE `bpassword_reset_request` (
  `id` int(11) NOT NULL,
  `bemail` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_requested` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bpassword_reset_request`
--

INSERT INTO `bpassword_reset_request` (`id`, `bemail`, `token`, `date_requested`) VALUES
(14, 'godson.ihemere@gmail.com', '34d2bde6e9930128ba177a5070716eba', '2019-06-04 15:17:38'),
(15, 'godson.ihemere@gmail.com', '00890de9c3cf42e9ebad2be910b0de93', '2019-06-04 15:53:15'),
(16, 'godson.ihemere@gmail.com', '5d626d99c60d9069727b9cd71bd016ca', '2019-06-04 15:59:07'),
(17, 'godson.ihemere@gmail.com', '9db722f610d79708e2af016dde247300', '2019-06-04 16:05:00'),
(18, 'godson.ihemere@gmail.com', '84ec09ba0373b057c064fedc3b719550', '2019-06-04 16:18:58'),
(19, 'godson.ihemere@gmail.com', 'b88fa2a98f666de02e63b684fa10e50a', '2019-06-05 09:12:06'),
(20, 'godson.ihemere@gmail.com', 'b63351c41da06535ce3dd50b06797557', '2019-06-05 10:13:34'),
(21, 'godson.ihemere@gmail.com', '138f7b5a070b70915333f0750e55c3a5', '2019-06-05 10:17:49'),
(22, 'godson.ihemere@gmail.com', 'c3ed5191e55ae82f6eaae85aa07bc74c', '2019-06-05 10:17:49'),
(23, 'godson.ihemere@gmail.com', '04a1906d76b6825353001749582d6625', '2019-06-05 10:27:30'),
(24, 'joshua@fflliipp.com', '0f27695eb972b80d4e67ce4a2690bd24', '2019-06-17 17:55:25'),
(25, 'twistedtaz609@gmail.com', 'a7418f295e96441b57767ad5dbe37acb', '2019-06-22 09:20:40'),
(26, 'halleyn966@gmail.com', '8f41a618b7d557ee3ada04cfca8b0dc4', '2019-06-22 20:58:14'),
(27, 'Twmpquicksilver@aol.com', 'a7e06fe46bf0111d730b076d0ed6b1d3', '2019-07-02 19:23:51'),
(28, 'mark@EstateGA.com', '98650c436f5a9153d162fc9e8f1b9e77', '2019-07-06 02:35:22'),
(29, 'raymondhenry25@gmail.com', '083329ab6338a0e395d9ef00369c9182', '2019-07-14 19:40:30'),
(30, 'antoniodamover@yahoo.com', '38bc273d242525b12e02f0242584641b', '2019-07-16 23:36:40'),
(31, 'rockking64@yahoo.com', 'aee651c1728ba35c8fca1c740210cd51', '2019-07-17 19:19:40'),
(32, 'butchcoughlin1956@gmail.com', 'fb60804ada45581b698232f4c4c37a25', '2019-07-20 16:37:09'),
(33, 'photosuperman1@yahoo.com', 'c3b7ca4d77bbff0ab2ca89d3209cafcd', '2019-07-20 17:10:24'),
(34, 'Hermanmazyck@gmail.com', 'ec4e6d44de9f8b9ad3fdf1b7b4b48009', '2019-07-26 14:27:05'),
(35, 'Hermanmazyck@gmail.com', 'dcc892c59db7d7fad419a9670d86c543', '2019-07-26 14:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `dead_bids`
--

CREATE TABLE `dead_bids` (
  `id` bigint(20) NOT NULL,
  `loan_id` varchar(255) NOT NULL,
  `applicant_name` varchar(50) DEFAULT NULL,
  `applicant_email` varchar(50) DEFAULT NULL,
  `bphone` varchar(100) DEFAULT NULL,
  `lender_id` varchar(255) NOT NULL,
  `lender_name` varchar(50) DEFAULT NULL,
  `lender_email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `property_location` varchar(255) NOT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `points` varchar(50) DEFAULT NULL,
  `legal_fees` varchar(50) DEFAULT NULL,
  `draw_fees` varchar(50) DEFAULT NULL,
  `application_fee` varchar(50) DEFAULT NULL,
  `other_fees` varchar(50) DEFAULT NULL,
  `other_fees_explanation` varchar(255) NOT NULL,
  `real_estate_no` varchar(50) DEFAULT NULL,
  `max_arv` varchar(50) DEFAULT NULL,
  `amount_of_rehab` varchar(50) DEFAULT NULL,
  `comments_section` varchar(255) DEFAULT NULL,
  `prepayments` varchar(255) DEFAULT NULL,
  `loan_terms` varchar(50) DEFAULT NULL,
  `init_loan_amt` varchar(50) DEFAULT NULL,
  `extension_cost` varchar(50) DEFAULT NULL,
  `extension_term` varchar(255) NOT NULL,
  `date_of_loan_application` datetime NOT NULL,
  `accepted` int(11) NOT NULL DEFAULT '0',
  `date_of_bid` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_of_funding` datetime DEFAULT NULL,
  `date_of_rejection` datetime DEFAULT NULL,
  `bid_status` int(10) NOT NULL DEFAULT '1',
  `funded` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dead_bids`
--

INSERT INTO `dead_bids` (`id`, `loan_id`, `applicant_name`, `applicant_email`, `bphone`, `lender_id`, `lender_name`, `lender_email`, `phone`, `property_location`, `rate`, `points`, `legal_fees`, `draw_fees`, `application_fee`, `other_fees`, `other_fees_explanation`, `real_estate_no`, `max_arv`, `amount_of_rehab`, `comments_section`, `prepayments`, `loan_terms`, `init_loan_amt`, `extension_cost`, `extension_term`, `date_of_loan_application`, `accepted`, `date_of_bid`, `date_of_funding`, `date_of_rejection`, `bid_status`, `funded`) VALUES
(80, '156106446394', 'Carlos	Rodrigues', 'CRODRIGUES267@GMAIL.COM', NULL, '54', 'Claire Bruno', 'cbruno@templeviewcap.com', NULL, '925-929 Mack Place Linden NJ', '8.25', '2', '0', '0', '1495', '', '', '10', '412500', '0', '5/1 ARM. Cash out refi deal. DSCR needs to be at least 1.', '6 month PPP', '360 months', '412500', '0', '0', '2019-06-13 11:16:43', 0, '2019-06-25 12:08:38', NULL, NULL, 1, 0),
(112, '156106446394', 'Carlos	Rodrigues', 'CRODRIGUES267@GMAIL.COM', NULL, '85', 'Jarrod Fennimore', 'jfennimore@firstequity.loans', NULL, '925-929 Mack Place Linden NJ', '6.25', '2', '395', '0', '995', '', '', '10', '385000', '0', '', 'Depends on the product.', '5-7-30', '385000', '0', '0', '2019-06-13 11:16:43', 0, '2019-07-10 12:20:17', NULL, NULL, 1, 0),
(127, '156106446394', 'Carlos	Rodrigues', 'CRODRIGUES267@GMAIL.COM', NULL, '95', 'Solomon Suleymaonv', 'solomons@welendny.com', NULL, '925-929 Mack Place Linden NJ', '9.5', '2.5', '1800', '250', '1500', '', '', '10', '171000', '65000', '', 'no', '12', '171000', '0', '', '2019-06-13 11:22:53', 0, '2019-07-19 09:18:19', NULL, NULL, 1, 0),
(128, '156106446394', 'Carlos	Rodrigues', 'CRODRIGUES267@GMAIL.COM', NULL, '78', 'Christian Pepe', 'info@fefunding.com', NULL, '925-929 Mack Place Linden NJ', '6.75', '1.5', '995', NULL, '995', '', '', '10', '412500', NULL, '', '5, 4, 3, 2, 1', '30', '412500', '0', '0', '2019-06-13 11:22:53', 1, '2019-07-19 10:32:52', NULL, NULL, 1, 0),
(142, '156441213961', 'ed	Hendrickson', 'hendrickson.edward@gmail.com', NULL, '92', 'Ed Hendrickson', 'ed@thofunding.com', NULL, '911 Test Test town test', '12', '2', '1200', '150', '500', '57', 'credit check', '4', '200000', '50000', 'test', 'no', '12 months', '150000', '2000', '90 Days', '2019-07-29 07:43:59', 0, '2019-07-29 08:24:08', NULL, NULL, 1, 0),
(147, '155942821561555', 'tdrtyfdtyfd	teretye', 'godson.ihemere@gmail.com', NULL, '122', 'Test test', 'excanny@gmail.com', NULL, 'test test test', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'no', '1', '1', '0.01', '1', '2019-07-28 06:13:57', 0, '2019-08-03 07:38:32', NULL, NULL, 1, 0),
(148, '155942821561555', 'tded	ededf', 'godson.ihemere@gmail.com', NULL, '121', 'test test', 'excanny@yahoo.com', NULL, 'test test test', '1', '1', '1', '1', '1', '1', 'test', '1', '1', '1', 'test', 'no', '1', '1', '0.01', '1', '2019-07-28 06:13:57', 0, '2019-08-05 08:14:52', NULL, NULL, 1, 0),
(149, '1559425282144', 'tded	ededf', 'godson.ihemere@gmail.com', NULL, '122', 'Test test', 'excanny@gmail.com', NULL, 'Macaerrecle Cocoaerer FLerer', '1', '1', '1', '1', '1', '', 't', '1', '2', '1', 'tt', 'no', '1', '1', '0.02', '1', '2019-07-28 06:13:57', 0, '2019-08-05 18:20:46', NULL, NULL, 1, 0),
(150, '156510459724', 'Edward	Hendrickson', 'hendrickson.edward@gmail.com', NULL, '63', 'Contact Hardmoney', 'contact@hardmoneyproject.com', NULL, '123 Test St Test Town Nevada', '5', '2', '1500', NULL, '995', '0', 'none', '2', '350000', '50000', 'test', 'no', '30 years', '300000', '0', '0', '2019-08-06 08:12:43', 0, '2019-08-06 08:58:59', NULL, NULL, 1, 0),
(151, '156510459724', 'Edward	Hendrickson', 'hendrickson.edward@gmail.com', NULL, '92', 'Ed Hendrickson', 'ed@thofunding.com', NULL, '123 Test St Test Town Nevada', '12', '3', '1500', NULL, '495', '32', 'test', '2', '200000', '25000', 'testing 1-2-3', 'no', '10 years', '175000', '0', '0', '2019-08-06 08:12:43', 0, '2019-08-07 12:21:49', NULL, NULL, 1, 0),
(152, '156531000918', 'Edward	Hendrickson', 'hendrickson.edward@gmail.com', '', '63', 'Contact Hardmoney', 'contact@hardmoneyproject.com', '', '1234 Test Rd Testing To Test', '12', '12', '1000', NULL, '1000', '1000', 'testing', '2', '100000', NULL, 'test', 'no', '12', '100000', '0', '', '2019-08-06 08:12:43', 0, '2019-08-08 17:36:58', NULL, NULL, 1, 0),
(153, '156535806871', 'Edward	Hendrickson', 'godson.ihemere@gmail.com', NULL, '63', 'Contact Hardmoney', 'excanny@gmail.com', NULL, '1234 Test Rd Testing To Test', '12', '12', '1000', NULL, '1000', '1000', 'testing', '2', '100000', NULL, 'test', 'no', '12', '100000', '0', '', '2019-08-06 08:12:43', 1, '2019-08-08 17:36:58', NULL, NULL, 1, 0),
(154, '156535806871', 'Edward	Hendrickson', 'godson.ihemere@gmail.com', NULL, '63', 'Contact Hardmoney', 'excanny@yahoo.com', NULL, '1234 Test Rd Testing To Test', '12', '12', '1000', NULL, '1000', '1000', 'testing', '2', '100000', NULL, 'test', 'no', '12', '100000', '0', '', '2019-08-06 08:12:43', 0, '2019-08-08 17:36:58', NULL, NULL, 1, 0),
(157, '1565310009666', 'tded	ededf', 'godson.ihemere@gmail.com', '2347030595988', '121', 'test test', 'excanny@yahoo.com', '1231231', 'testville Testville Testville', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'no', '1', '1', '0.01', '1', '2019-07-28 06:13:57', 0, '2019-08-09 07:55:35', NULL, NULL, 1, 0),
(158, '1565310009666', 'tded	ededf', 'godson.ihemere@gmail.com', '2347030595988', '121', 'test test', 'excanny@gmail.com', '1231231', 'testville Testville Testville', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'no', '1', '1', '0.01', '1', '2019-07-28 06:13:57', 0, '2019-08-09 07:55:35', NULL, NULL, 1, 0),
(161, '156531000555', 'Edward	Hendrickson', 'godson.ihemere@gmail.com', '', '63', 'Contact Hardmoney', 'excanny@gmail.com', '', '1234 Test Rd Testing To Test', '12', '12', '1000', NULL, '1000', '1000', 'testing', '2', '100000', NULL, 'test', 'no', '12', '100000', '0', '', '2019-08-06 08:12:43', 1, '2019-08-08 17:36:58', NULL, NULL, 1, 0),
(162, '156531000555', 'Edward	Hendrickson', 'godson.ihemere@gmail.com', '', '63', 'Contact Hardmoney', 'excanny@yahoo.com', '', '1234 Test Rd Testing To Test', '12', '12', '1000', NULL, '1000', '1000', 'testing', '2', '100000', NULL, 'test', 'no', '12', '100000', '0', '', '2019-08-06 08:12:43', 0, '2019-08-08 17:36:58', NULL, NULL, 1, 0),
(164, '15653100077777', 'tded	ededf', 'godson.ihemere@gmail.com', '2347030595988', '121', 'test test', 'excanny@yahoo.com', '1231231', 'Testtest Testing Te Test', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'no', '1', '1', '0.01', '1', '2019-07-28 06:13:57', 1, '2019-08-09 18:12:29', NULL, NULL, 1, 0),
(165, '15653100077777', 'tded	eghftf', 'godson.ihemere@gmail.com', '2347030595988', '121', 'test test', 'excanny@yahoo.com', '1231231', 'Testtest Testing Te Test', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'no', '1', '1', '0.01', '1', '2019-07-28 06:13:57', 0, '2019-08-09 18:12:29', NULL, NULL, 1, 0),
(166, '156553492019', 'tetsa	tesr', 'godson.ihemere@gmail.com', '2347030595988', '277', 'test test', 'excanny@gmail.com', '2347030595988', 'test test test', '1', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', 'nice', '1', '1', '0.01', '1', '2019-08-11 07:45:46', 1, '2019-08-11 07:51:40', NULL, NULL, 1, 0),
(167, '156553492019', 'tetsa	tesr', 'godson.ihemere@gmail.com', '2347030595988', '277', 'test test', 'excanny@yahoo.com', '2347030595988', 'test test test', '1', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', 'nice', '1', '1', '0.01', '1', '2019-08-11 07:45:46', 0, '2019-08-11 07:51:40', NULL, NULL, 1, 0),
(168, '1565310004434', 'Edward	Hendrickson', 'godson.ihemere@gmail.com', '', '63', 'Contact Hardmoney', 'contact@yahoo.com', '', '1234 Test Rd Testindd fffff', '12', '12', '1000', NULL, '1000', '1000', 'testing teset', '2', '100000', NULL, 'test', 'no', '12', '100000', '0', '', '2019-08-06 08:12:43', 1, '2019-08-08 17:36:58', NULL, NULL, 1, 0),
(170, '156531000918', 'Edward	Hendrickson', 'hendrickson.edward@gmail.com', '5514272390', '92', 'Ed Hendrickson', 'ed@thofunding.com', '5514272390', '1234 Test Rd Testing To Test', '5', '2', '1500', NULL, '1450', '0', 'none', '2', '100000', NULL, 'test', 'no', '30', '100000', '0', '', '2019-08-06 08:12:43', 1, '2019-08-11 11:26:06', NULL, NULL, 1, 0),
(171, '15653100434343', 'Edward	Hendrickson', 'godson.ihemere@gmail.com', '5514272390', '92', 'Ed Hendrickson', 'excanny@yahoo.com', '5514272390', '1234 Test Rd Testing To Test', '5', '2', '1500', NULL, '1450', '0', 'none', '2', '100000', NULL, 'test', 'no', '30', '100000', '0', '', '2019-08-06 08:12:43', 0, '2019-08-11 11:26:06', NULL, NULL, 1, 0),
(172, '15653100434343', 'Edward	Hendrickson', 'godson.ihemere@gmail.com', '5514272390', '92', 'Ed Hendrickson', 'excanny@gmail.com', '5514272390', '1234 Test Rd Testing To Test', '5', '2', '1500', NULL, '1450', '0', 'none', '2', '100000', NULL, 'test', 'no', '30', '100000', '0', '', '2019-08-06 08:12:43', 1, '2019-08-11 11:26:06', NULL, NULL, 1, 0),
(173, '15653100224234', 'Goddie', 'godson.ihemere@gmail.com', '335514272390', '92', 'Ed Hendrickson', 'excanny@gmail.com', '5514272390', '1234 Test Rd Testing To Test', '5', '2', '1500', NULL, '1450', '0', 'none', '2', '100000', NULL, 'test', 'no', '30', '100000', '0', '', '2019-08-06 08:12:43', 0, '2019-08-11 11:26:06', NULL, NULL, 1, 0),
(174, '15653100224234', 'Goddie', 'godson.ihemere@gmail.com', '335514272390', '92', 'Ed Hendrickson', 'excanny@yahoo.com', '5514272390', '1234 Test Rd Testing To Test', '5', '2', '1500', NULL, '1450', '0', 'none', '2', '100000', NULL, 'test', 'no', '30', '100000', '0', '', '2019-08-06 08:12:43', 1, '2019-08-11 11:26:06', NULL, NULL, 1, 0),
(175, '156531344344', 'Edward	Hendrickson', 'godson.ihemere@gmail.com', '5514272390', '92', 'Ed Hendrickson', 'excanny@gmail.com', '5514272390', '1234 Test Rd Testing To Testded', '5', '2', '1500', NULL, '1450', '0', 'none', '2', '100000', NULL, 'test', 'no', '30', '100000', '0', '', '2019-08-06 08:12:43', 1, '2019-08-11 11:26:06', NULL, NULL, 1, 0),
(176, '15639091222221321', 'Wallace	Swartz', 'godson.ihemere@gmail.com', '', '94', 'John Yurkovich', 'john.yurkovich@nationslending.com', '', '312 state route 4 cathlama WA', '10', '3', '1200', '150', '750', '895', 'Appraisal $500 &amp; Renovation Inspection $395', '1', '130000', '62500', 'Based on the information provided the above terms are what would be offered. These terms to not represent a term sheet or commitment to lend.  We need to perform a credit check, proof of previous flip transaction in addition to property appraisal and insp', '3 Months of earned interest, after 3 months paid there is no pre-payment penalty.', '12 Months', '67500', '1300', '3 Months', '2019-07-23 12:01:34', 1, '2019-07-23 13:16:43', NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dead_property_info`
--

CREATE TABLE `dead_property_info` (
  `p_id` bigint(20) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `bemail` varchar(50) NOT NULL,
  `property_street` varchar(50) DEFAULT NULL,
  `property_city` varchar(10) DEFAULT NULL,
  `property_state` varchar(20) DEFAULT NULL,
  `property_no_of_units` int(10) DEFAULT NULL,
  `market_value` decimal(10,2) DEFAULT NULL,
  `renovation_cost` decimal(10,2) DEFAULT NULL,
  `amount_of_loan_request` decimal(10,2) DEFAULT NULL,
  `anticipated_after_repair_cost` decimal(10,2) DEFAULT NULL,
  `purchase_price` decimal(10,2) DEFAULT NULL,
  `cash_reserves_available` decimal(10,2) DEFAULT NULL,
  `property_type` varchar(50) DEFAULT NULL,
  `property_type_other` varchar(255) DEFAULT NULL,
  `purpose_of_loan` varchar(255) DEFAULT NULL,
  `target_closing_date` datetime(6) DEFAULT NULL,
  `exit_strategy` varchar(255) DEFAULT NULL,
  `project_summary` varchar(255) NOT NULL,
  `taxes` varchar(20) DEFAULT NULL,
  `rental_income` varchar(20) DEFAULT NULL,
  `yearly_insurance` varchar(20) DEFAULT NULL,
  `hoa` varchar(20) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `property_owned_duration` varchar(20) NOT NULL,
  `cashout_rate_term` varchar(30) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dead_property_info`
--

INSERT INTO `dead_property_info` (`p_id`, `transaction_id`, `bemail`, `property_street`, `property_city`, `property_state`, `property_no_of_units`, `market_value`, `renovation_cost`, `amount_of_loan_request`, `anticipated_after_repair_cost`, `purchase_price`, `cash_reserves_available`, `property_type`, `property_type_other`, `purpose_of_loan`, `target_closing_date`, `exit_strategy`, `project_summary`, `taxes`, `rental_income`, `yearly_insurance`, `hoa`, `purchase_date`, `property_owned_duration`, `cashout_rate_term`, `deleted_at`, `created_at`) VALUES
(155, '156531000555', 'godson.ihemere@gmail.com', 'test ville', 'test ville', 'test ville', 1, '100000.00', '0.00', '100000.00', '0.00', '100000.00', '100000.00', 'Residential (1-4 units)', '', 'Long Term Rental Refinance', '2019-08-08 00:00:00.000000', 'test', 'test', '1000', '1000', '1000', '1000', '2019-08-08', '1 month', 'Cashout', NULL, '2019-08-08 17:20:09'),
(156, '15653100077777', 'godson.ihemere@gmail.com', 'Testtest', 'Testing Te', 'Test', 1, '100000.00', '0.00', '100000.00', '0.00', '100000.00', '100000.00', 'Residential (1-4 units)', '', 'Long Term Rental Refinance', '2019-08-08 00:00:00.000000', 'test', 'testtestr', '1000', '1000', '1000', '1000', '2019-08-08', '1 month', 'Cashout', NULL, '2019-08-08 17:20:09'),
(157, '156553492019', 'godson.ihemere@gmail.com', 'test', 'test', 'test', 1, '1.00', '0.00', '1.00', '0.00', '1.00', '1.00', 'Residential (1-4 units)', 'etset', 'Long Term Rental Purchase', '2019-08-31 00:00:00.000000', 'test', 'test', '1', '1', '1', '1', '2019-08-24', '2 years', 'Cashout', NULL, '2019-08-11 07:48:40'),
(158, '1565310004434', 'godson.ihemere@gmail.com', '124444 Test Rd', 'Testing re', 'Tesrrr', 1, '400000.00', '0.00', '5500000.00', '0.00', '10444000.00', '54550000.00', 'Residential (1-4 units)', '', 'Long Term Rental Refinance', '2019-08-08 00:00:00.000000', 'testdrdrfdr4', 'testfdrfr', '1000', '1000', '1000', '1000', '2019-08-08', '1 month', 'Cashout', NULL, '2019-08-08 17:20:09'),
(159, '15653100434343', 'godson.ihemere@gmail.com', '1234 dwedwdwt Rd', 'Testing To', 'Test', 1, '100000.00', '0.00', '200000.00', '0.00', '100000.00', '100000.00', 'Residential (1-4 units)', '', 'Long Term Rental Refinance', '2019-08-08 00:00:00.000000', 'test', 'test', '1000', '1000', '1000', '1000', '2019-08-08', '1 month', 'Cashout', NULL, '2019-08-08 17:20:09'),
(160, '15653100224234', 'godson.ihemere@gmail.com', '1234 Teswswswsw ', 'Testing To', 'Test', 1, '100000.00', '0.00', '100000.00', '0.00', '100000.00', '100000.00', 'Residential (1-4 units)', '', 'Long Term Rental Refinance', '2019-08-08 00:00:00.000000', 'test', 'test', '1000', '1000', '1000', '1000', '2019-08-08', '1 month', 'Cashout', NULL, '2019-08-08 17:20:09'),
(161, '156531344344', 'godson.ihemere@gmail.com', '1234 Tdxdest Rd', 'Testing To', 'Test', 1, '100000.00', '0.00', '100000.00', '0.00', '100000.00', '100000.00', 'Residential (1-4 units)', '', 'Long Term Rental Refinance', '2019-08-08 00:00:00.000000', 'test', 'test', '1000', '1000', '1000', '1000', '2019-08-08', '1 month', 'Cashout', NULL, '2019-08-08 17:20:09'),
(152, '156531000918', 'hendrickson.edward@gmail.com', '1234 Test Rd', 'Testing To', 'Test', 1, '100000.00', '0.00', '100000.00', '0.00', '100000.00', '100000.00', 'Residential (1-4 units)', '', 'Long Term Rental Refinance', '2019-08-08 00:00:00.000000', 'test', 'test', '1000', '1000', '1000', '1000', '2019-08-08', '1 month', 'Cashout', NULL, '2019-08-08 17:20:09'),
(162, '15639091222221321', 'godson.ihemere@gmail.com', '312 state route 4', 'cathlama', 'WA', 1, '200000.00', '100000.00', '130000.00', '300000.00', '75000.00', '9000.00', 'Residential (1-4 units)', '', 'Hard Money', '2019-09-15 00:00:00.000000', 'nn vbhnbvyh', 'test', '', '', '', '', NULL, '', '', NULL, '2019-07-23 12:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `declarations`
--

CREATE TABLE `declarations` (
  `id` bigint(20) NOT NULL,
  `bemail` varchar(255) NOT NULL,
  `real_estate_no` varchar(50) NOT NULL,
  `alien_resident` varchar(50) NOT NULL,
  `boccupy_property` varchar(50) NOT NULL,
  `bjudgements` varchar(50) NOT NULL,
  `bbankrupt` varchar(50) NOT NULL,
  `bforeclosure` varchar(50) NOT NULL,
  `blawsuit` varchar(50) NOT NULL,
  `bobligated` varchar(50) NOT NULL,
  `bdelinquent` varchar(50) NOT NULL,
  `bcitizen` varchar(50) NOT NULL,
  `cbalien_resident` varchar(50) DEFAULT NULL,
  `cboccupy_property` varchar(50) DEFAULT NULL,
  `cbjudgements` varchar(50) DEFAULT NULL,
  `cbbankrupt` varchar(50) DEFAULT NULL,
  `cbforeclosure` varchar(50) DEFAULT NULL,
  `cblawsuit` varchar(50) DEFAULT NULL,
  `cbobligated` varchar(50) DEFAULT NULL,
  `cbdelinquent` varchar(50) DEFAULT NULL,
  `cbcitizen` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `declarations`
--

INSERT INTO `declarations` (`id`, `bemail`, `real_estate_no`, `alien_resident`, `boccupy_property`, `bjudgements`, `bbankrupt`, `bforeclosure`, `blawsuit`, `bobligated`, `bdelinquent`, `bcitizen`, `cbalien_resident`, `cboccupy_property`, `cbjudgements`, `cbbankrupt`, `cbforeclosure`, `cblawsuit`, `cbobligated`, `cbdelinquent`, `cbcitizen`, `created_at`) VALUES
(97, 'dansrealestateltd@gmail.com', '3', 'Yes', '', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-13 19:04:34'),
(98, 'alhpropertynj@gmail.com', '2', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-14 13:47:11'),
(101, 'hendricksonorganization@gmail.com', '3', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-16 12:38:54'),
(103, 'James.stephens03@gmail.com', '50', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-23 08:59:28'),
(104, 'alex.severyn.ny@gmail.com', '50', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-24 09:12:36'),
(106, 'gtnmj@aol.com', '4', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-24 18:48:32'),
(107, 'cdmcinvestments@gmail.com', '0', 'No', '', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-28 08:12:43'),
(108, 'jamesbodner000@yahoo.com', '1', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-30 10:36:29'),
(109, 'Paul@HomeNation.com', '36', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-01 15:15:24'),
(111, 'paul@newamericanproperties.com', '1', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-04 14:23:48'),
(112, 'GMAdreambuilders@gmail.com', '0', 'No', '', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', '2019-06-06 17:05:50'),
(113, 'CRODRIGUES267@GMAIL.COM', '10', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-13 11:22:53'),
(114, 'diego@culture.estate', '10', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-19 07:05:40'),
(115, 'diego@culture.estate', '10', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-19 07:07:09'),
(116, 'rivercitypropertyshop@gmail', '2', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-19 09:14:23'),
(117, 'dustinhartmann7@gmail.com', '2', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-20 18:41:46'),
(118, 'dwightg80@gmail.com', '2', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-21 03:46:33'),
(119, 'gertrudedaube@gmail.com', '0', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-25 07:14:54'),
(120, 'Alejandro@culture.estate', '12', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-26 06:21:33'),
(121, 'cristinamoreano67@gmail.com', '1', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-03 14:12:13'),
(122, 'anibal848@hotmail.com', '2', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-03 14:27:10'),
(123, 'mark@EstateGA.com', '0', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-06 06:43:17'),
(124, 'luisleiva23@gmail.com', '2', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-08 10:31:02'),
(125, 'leeadler66@gmail.com', '0', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-08 20:02:24'),
(128, 'steven.fance@cultiv8hs.com', '0', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-09 09:48:28'),
(129, 'ebbe1350@gmail.com', '3', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-09 13:37:05'),
(130, 'rtaxi396@yahoo.com', '1', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-10 08:20:58'),
(131, 'btrible1982@gmail.com', '2', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-10 20:55:48'),
(132, 'albert@pophomebuyers.com', '0', 'No', '', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-12 16:45:30'),
(133, 'ageorge1970@icloud.com', '11', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-12 18:27:52'),
(134, '34boobat@gmail.com', '1', 'No', '', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-15 05:03:47'),
(135, 'tedjr1955@gmail.com', '2', 'Yes', 'No', 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-16 03:07:59'),
(136, 'chrise1982.cd@gmail.com', '0', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-16 18:39:38'),
(137, 'kghceo@gmail.com', '0', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-16 19:45:15'),
(139, 'photosuperman1@yahoo.com', '0', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-20 10:13:29'),
(140, 'gregemul@yahoo.com', '0', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-20 11:52:15'),
(141, 'brad.thumann4@gmail.com', '0', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-20 14:06:53'),
(142, 'bryan.paglinawan@gmail.com', '5', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-22 07:44:12'),
(143, 'hicksmonchelle262@gmail.com', '0', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-22 16:57:51'),
(144, 'shannons1978@yahoo.com', '0', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-22 21:48:42'),
(145, 'build4u@gmail.com', '1', 'Yes', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-23 12:01:34'),
(146, 'srwhomesllc@gmail.com', '0', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-23 12:30:28'),
(147, 'legacyinvestments35@gmail.com', '0', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-24 13:15:10'),
(148, 'uniquesupplies@yahoo.com', '0', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-25 07:22:31'),
(149, 'r.moorepropertiesllc@gmail.com', '0', 'No', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-25 11:09:38'),
(153, 'rvarealtordtaylor@gmail.com', '10', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-27 08:03:09'),
(154, 'donaldsonconnie55@gmail.com', '0', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-27 08:18:24'),
(159, 'arbrown@kw.com', '3', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-31 11:10:31'),
(160, 'hendrickson.edward@gmail.com', '2', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-06 08:12:43'),
(161, 'godson.ihemere@gmail.com', '2', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-11 07:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `email_subscriptions`
--

CREATE TABLE `email_subscriptions` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_subscriptions`
--

INSERT INTO `email_subscriptions` (`id`, `name`, `email`, `created_at`) VALUES
(8, 'Bill', 'billke4@gmail.com', '2019-05-25 07:12:55'),
(6, 'thomas', 'thomasborghesan@gmail.com', '2019-05-05 17:38:41'),
(4, 'Isaac Gilman', 'gilman.isaac@gmail.com', '2019-05-01 09:25:39'),
(7, '', 'hardmoneyproject.com@domstat.su', '2019-05-24 06:28:49'),
(23, 'Herman Mazyck', 'HermanMazyck@gmail.com', '2019-07-26 07:31:32'),
(21, 'Jeff', 'Jbarst2678@yahoo.com', '2019-07-20 14:52:14'),
(22, 'John vela', 'johnvela874@yahoo.com', '2019-07-25 14:38:00'),
(17, 'Derekmerk@gmail merkek', 'dermerk31@gmail.com', '2019-07-13 21:18:36'),
(18, 'Ernest', 'eharrisjr1980@gmail.com', '2019-07-13 21:26:49'),
(19, 'Charles Mitchell', 'chmitch1954@yahoo.com', '2019-07-17 03:43:57'),
(20, 'Bruce Ewing', 'brucekewing@yahoo.com', '2019-07-18 05:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `invite_to_bid`
--

CREATE TABLE `invite_to_bid` (
  `id` bigint(20) NOT NULL,
  `loan_id` varchar(50) NOT NULL,
  `lender_id` varchar(255) NOT NULL,
  `lender_email` varchar(50) NOT NULL,
  `lender_full_name` varchar(50) NOT NULL,
  `borrower_id` varchar(255) NOT NULL,
  `bemail` varchar(50) NOT NULL,
  `bfull_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invite_to_bid`
--

INSERT INTO `invite_to_bid` (`id`, `loan_id`, `lender_id`, `lender_email`, `lender_full_name`, `borrower_id`, `bemail`, `bfull_name`, `created_at`) VALUES
(1, '155671591953', '35', 'ireoluwaenoch@gmail.com', 'Adedugbe	ireoluwa', '61', 'godson.ihemere@gmail.com', 'Ihemere', '2019-05-01 12:14:21'),
(2, '155671591953', '35', 'ireoluwaenoch@gmail.com', 'Adedugbe	ireoluwa', '26', 'godson.ihemere@gmail.com', 'Godson	Ihemere', '2019-05-04 03:01:28'),
(3, '156210967636', '91', 'excanny@yahoo.com', 'hjgyuh	hggh', '85', 'godson.ihemere@gmail.com', 'Test	Test', '2019-07-08 16:31:49'),
(4, '156210967636', '96', 'excanny@yahoo.com', 'hjgyuh	hggh', '85', 'godson.ihemere@gmail.com', 'Test	Test', '2019-07-09 15:14:57'),
(5, '156210967636', '96', 'excanny@yahoo.com', 'hjgyuh	hggh', '85', 'godson.ihemere@gmail.com', 'Test	Test', '2019-07-09 15:23:01'),
(6, '156210967636', '96', 'excanny@yahoo.com', 'hjgyuh	hggh', '85', 'godson.ihemere@gmail.com', 'Test	Test', '2019-07-09 15:40:08'),
(7, '156210967636', '96', 'excanny@yahoo.com', 'hjgyuh	hggh', '85', 'godson.ihemere@gmail.com', 'Test	Test', '2019-07-09 15:49:55'),
(8, '156210967636', '96', 'excanny@yahoo.com', 'hjgyuh	hggh', '85', 'godson.ihemere@gmail.com', 'Test	Test', '2019-07-10 01:49:49'),
(9, '156210967636', '96', 'excanny@yahoo.com', 'hjgyuh	hggh', '85', 'godson.ihemere@gmail.com', 'Test	Test', '2019-07-10 01:50:41'),
(10, '156278493554', '85', 'jfennimore@firstequity.loans', 'Jarrod	Fennimore', '93', 'mark@EstateGA.com', 'Mark	Sanders', '2019-07-10 12:08:55'),
(11, '15627851146', '85', 'jfennimore@firstequity.loans', 'Jarrod	Fennimore', '93', 'mark@EstateGA.com', 'Mark	Sanders', '2019-07-10 12:09:15'),
(12, '15627851146', '54', 'cbruno@templeviewcap.com', 'Claire	Bruno', '93', 'mark@EstateGA.com', 'Mark	Sanders', '2019-07-10 12:09:35'),
(13, '156281772851', '73', 'nick@mbcapitalsolutions.com', 'Nicholas	DiFederico', '112', 'btrible1982@gmail.com', 'Brian	Trible', '2019-07-10 21:03:13'),
(14, '156281772851', '79', 'Simon@expresscapitalfinancing.com', 'Simon	Rishty', '112', 'btrible1982@gmail.com', 'Brian	Trible', '2019-07-10 21:03:34'),
(15, '156281772851', '87', 'michael@rockeastgroup.com', 'MICHAEL	HABERMAN', '112', 'btrible1982@gmail.com', 'Brian	Trible', '2019-07-10 21:03:45'),
(16, '156281772851', '96', 'excanny@yahoo.com', 'hjgyuh	hggh', '112', 'btrible1982@gmail.com', 'Brian	Trible', '2019-07-10 21:04:06'),
(17, '156281772851', '92', 'ed@thofunding.com', 'Ed	Hendrickson', '112', 'btrible1982@gmail.com', 'Brian	Trible', '2019-07-10 21:04:19'),
(18, '156298159144', '95', 'solomons@welendny.com', 'Solomon	Suleymaonv', '120', 'ageorge1970@icloud.com', 'Anthony	George', '2019-07-12 18:36:53'),
(19, '156298159144', '54', 'cbruno@templeviewcap.com', 'Claire	Bruno', '120', 'ageorge1970@icloud.com', 'Anthony	George', '2019-07-12 18:37:11'),
(20, '156298159144', '79', 'Simon@expresscapitalfinancing.com', 'Simon	Rishty', '120', 'ageorge1970@icloud.com', 'Anthony	George', '2019-07-12 18:37:28'),
(21, '156298159144', '69', 'i.westforestcapital@gmail.com', 'Benjamin	Solof', '120', 'ageorge1970@icloud.com', 'Anthony	George', '2019-07-12 18:37:42'),
(22, '156281278273', '54', 'cbruno@templeviewcap.com', 'Claire	Bruno', '93', 'mark@EstateGA.com', 'Mark	Sanders', '2019-07-13 18:18:54'),
(23, '156281278273', '85', 'jfennimore@firstequity.loans', 'Jarrod	Fennimore', '93', 'mark@EstateGA.com', 'Mark	Sanders', '2019-07-13 18:19:17'),
(24, '156281278273', '79', 'Simon@expresscapitalfinancing.com', 'Simon	Rishty', '93', 'mark@EstateGA.com', 'Mark	Sanders', '2019-07-13 18:19:51'),
(25, '156339848389', '92', 'ed@thofunding.com', 'Ed	Hendrickson', '166', 'hendrickson.edward@gmail.com', 'Ed	Hendrickson', '2019-07-18 13:00:25'),
(26, '156322839957', '96', 'excanny@yahoo.com', 'hjgyuh	hggh', '85', 'godson.ihemere@gmail.com', 'Test	Test', '2019-07-18 15:47:28'),
(27, '156354123324', '36', 'luis@culture.estate', 'Luis	Leiva', '173', 'yvon.edward90@gmail.com', 'Edward	Yvon', '2019-07-19 06:01:57'),
(28, '156354123324', '54', 'cbruno@templeviewcap.com', 'Claire	Bruno', '173', 'yvon.edward90@gmail.com', 'Edward	Yvon', '2019-07-19 06:02:05'),
(29, '156354123324', '63', 'contact@hardmoneyproject.com', 'Contact	Hardmoney', '173', 'yvon.edward90@gmail.com', 'Edward	Yvon', '2019-07-19 06:02:12'),
(30, '156354123324', '69', 'i.westforestcapital@gmail.com', 'Benjamin	Solof', '173', 'yvon.edward90@gmail.com', 'Edward	Yvon', '2019-07-19 06:02:18'),
(31, '156384030298', '97', 'jose.d@welendny.com', 'Jose	Dominguez`', '191', 'hicksmonchelle262@gmail.com', 'Monchelle	Hicks', '2019-07-22 17:06:42'),
(32, '156384030298', '96', 'excanny@yahoo.com', 'hjgyuh	hggh', '191', 'hicksmonchelle262@gmail.com', 'Monchelle	Hicks', '2019-07-22 17:06:58'),
(33, '156384030298', '95', 'solomons@welendny.com', 'Solomon	Suleymaonv', '191', 'hicksmonchelle262@gmail.com', 'Monchelle	Hicks', '2019-07-22 17:07:14'),
(34, '156384030298', '36', 'luis@culture.estate', 'Luis	Leiva', '191', 'hicksmonchelle262@gmail.com', 'Monchelle	Hicks', '2019-07-22 17:07:29'),
(35, '156384030298', '54', 'cbruno@templeviewcap.com', 'Claire	Bruno', '191', 'hicksmonchelle262@gmail.com', 'Monchelle	Hicks', '2019-07-22 17:07:48'),
(36, '156407890472', '36', 'luis@culture.estate', 'Luis	Leiva', '205', 'r.moorepropertiesllc@gmail.com', 'Robert	Moore', '2019-07-25 19:54:30'),
(37, '156441207521', '92', 'ed@thofunding.com', 'Ed	Hendrickson', '259', 'hendrickson.edward@gmail.com', 'ed	Hendrickson', '2019-08-02 08:57:09'),
(38, '156510459724', '92', 'ed@thofunding.com', 'Ed	Hendrickson', '269', 'hendrickson.edward@gmail.com', 'Edward	Hendrickson', '2019-08-06 08:27:07'),
(39, '156390912245452', '122', 'excanny@gmail.com', 'Test	test', '254', 'godson.ihemere@gmail.com', 'tded	ededf', '2019-08-06 08:45:38'),
(40, '156390912245452', '122', 'excanny@gmail.com', 'Test	test', '254', 'godson.ihemere@gmail.com', 'tded	ededf', '2019-08-06 08:52:43'),
(41, '156390912245452', '122', 'excanny@gmail.com', 'Test	test', '254', 'godson.ihemere@gmail.com', 'tded	ededf', '2019-08-06 08:54:32'),
(42, '156390912245452 | 312 state route 4	test	test', '122', 'excanny@gmail.com', 'Test	test', '254', 'godson.ihemere@gmail.com', 'tded	ededf', '2019-08-06 09:23:47'),
(43, '156390912245452 | 312 state route 4	test	test', '122', 'excanny@gmail.com', 'Test	test', '254', 'godson.ihemere@gmail.com', 'tded	ededf', '2019-08-06 09:28:03'),
(44, '156510459724 | 123 Test St	Test Town	Nevada', '92', 'ed@thofunding.com', 'Ed	Hendrickson', '269', 'hendrickson.edward@gmail.com', 'Edward	Hendrickson', '2019-08-06 11:23:05'),
(45, 'Sorry! You do not have any active loan availabe fo', '36', 'luis@culture.estate', 'Luis	Leiva', '254', 'godson.ihemere@gmail.com', 'tded	ededf', '2019-08-08 03:25:23'),
(46, '156510459724 | 123 Test St	Test Town	Nevada', '92', 'ed@thofunding.com', 'Ed	Hendrickson', '269', 'hendrickson.edward@gmail.com', 'Edward	Hendrickson', '2019-08-08 11:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `lenders`
--

CREATE TABLE `lenders` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gs_ogrd` varchar(50) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `preferred_loan` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `hash` varchar(255) DEFAULT NULL,
  `verify_link` varchar(255) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `suspended` int(11) NOT NULL DEFAULT '0',
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lenders`
--

INSERT INTO `lenders` (`id`, `first_name`, `last_name`, `email`, `gs_ogrd`, `business_name`, `preferred_loan`, `phone`, `status`, `hash`, `verify_link`, `active`, `suspended`, `last_login`, `reg_date`, `updated_at`, `deleted_at`) VALUES
(36, 'Luis', 'Leiva', 'luis@culture.estate', '06e7868dd5df3fdc3853e352a1dc0884', '', '', '9084945438', 2, '0', NULL, 1, 0, '2019-03-31 06:43:49', '2019-02-15 21:30:30', '2019-03-31 06:43:49', NULL),
(54, 'Claire', 'Bruno', 'cbruno@templeviewcap.com', '977d245196a499a699d09d9689adddee', '', 'Hard Money, Transactional Funding, Long Term Rental/Refinance', '2027668813', 1, '01882513d5fa7c329e940dda99b12147', NULL, 1, 0, '2019-06-02 14:43:34', '2019-04-30 19:24:44', '2019-06-02 14:43:34', NULL),
(63, 'Contact', 'Hardmoney', 'contact@hardmoneyproject.com', 'f514805644de1889d8cadaec37636e36', '', '', '9083798230', 2, '78d7e626b669a3f7d0c924241b9c817d', NULL, 1, 0, '2019-05-03 15:40:48', '2019-05-03 13:28:36', '2019-05-03 15:40:48', NULL),
(69, 'Benjamin', 'Solof', 'i.westforestcapital@gmail.com', '512389a67ae1f371c95607a647c9d0ad', 'West Forest Capital', 'Hard Money, Transactional Funding, Long Term Rental/Refinance', '5162633201', 1, '70c0e4d8c709f6bd3f377e8377740745', NULL, 1, 0, '2019-06-07 01:42:32', '2019-05-15 20:25:50', '2019-06-07 01:42:32', NULL),
(73, 'Nicholas', 'DiFederico', 'nick@mbcapitalsolutions.com', '74384afbd2183f28aa42f1e4194faf56', 'MB Capital Solutions', 'Transactional Funding', '8564380399', 1, 'bf8a0f762f4278aec60f0ed11dcc4660', NULL, 1, 0, '2019-06-02 14:45:48', '2019-05-24 14:06:45', '2019-06-02 14:45:48', NULL),
(74, 'Ryan', 'Walsh', 'ryan@hardmoneybankers.com', 'ad94a51731bcaa08c2361f4dabdcc446', 'Hard Money Bankers', 'Hard Money, Transactional Funding, Long Term Rental/Refinance', '2013451036', 1, 'a458dad4f8731aaa88aba9ec7004cb5b', NULL, 1, 0, '2019-06-02 14:46:21', '2019-05-24 16:30:24', '2019-06-02 14:46:21', NULL),
(78, 'Christian', 'Pepe', 'info@fefunding.com', 'dc55d56ba00ccfa96f1cc3bef2d49524', 'First Equity Funding', 'Hard Money, Transactional Funding, Long Term Rental/Refinance', '7323597800', 1, 'e75a024c6305d2599b49a154283dd7f1', NULL, 1, 0, '2019-06-02 14:42:53', '2019-05-24 16:49:45', '2019-06-02 14:42:53', NULL),
(79, 'Simon', 'Rishty', 'Simon@expresscapitalfinancing.com', '7512d6586c76195573d971b65bb78a8e', 'Express Capital Financing', 'Hard Money, Transactional Funding, Long Term Rental/Refinance', '6465853330', 1, '91e5f47a2ef6fcb77e4f89fa7e43667c', NULL, 1, 0, '2019-06-02 14:47:49', '2019-05-24 17:43:39', '2019-06-02 14:47:49', NULL),
(83, 'David', 'Chera', 'David@ecfnow.com', 'cc89b632e25d5db7eb59f789dddb7434', 'Express Capital Financing', 'Hard Money', '7182334401', 1, '7910b99954fafbe344f9f28033914b85', NULL, 1, 0, '2019-05-28 16:40:42', '2019-05-28 16:37:31', '2019-05-28 16:40:42', NULL),
(84, 'Odie', 'Ayaga', 'oayaga@gmail.com', 'ffc116f2e064af43e768ea63034aa219', 'Express Capital Financing', 'Hard Money,Long Term Rental/Refinance', '9177403352', 1, 'c1e44cbd845a1948d8890fb1c73271eb', NULL, 1, 0, '2019-05-28 18:50:44', '2019-05-28 18:48:34', '2019-05-28 18:50:44', NULL),
(85, 'Jarrod', 'Fennimore', 'jfennimore@firstequity.loans', '4abd8c47752476e7cd207b6947a284a4', 'First Equity North LLC', 'Hard Money, Transactional Funding, Long Term Rental/Refinance', '7329915216', 1, 'c5765b40bba423ed470c124d70bfb34c', NULL, 1, 0, '2019-06-02 14:45:00', '2019-05-28 20:41:23', '2019-06-02 14:45:00', NULL),
(86, 'Luis', 'Leiva', 'info@hardmoneyproject.com', 'f514805644de1889d8cadaec37636e36', 'Real Estate Concierge Services', 'Hard Money,Transactional Funding,Long Term Rental/Refinance,Business Loans', '9083798230', 2, 'def2464740d9bf3b7ab3f694cdf8cd74', NULL, 1, 0, '2019-06-26 16:28:20', '2019-05-29 21:40:37', '2019-06-26 16:28:20', NULL),
(87, 'MICHAEL', 'HABERMAN', 'michael@rockeastgroup.com', '0e2aaef886dfeb3a6911a6b036d1c351', 'Rock East Group', 'Hard Money,Long Term Rental/Refinance', '9142151908', 1, '7cd4d6b81dc870f1e37eb052c7376352', NULL, 1, 0, '2019-05-30 01:20:21', '2019-05-30 01:19:05', '2019-05-30 01:20:21', NULL),
(88, 'Samuel', 'Kwadrat', 'skwadrat@realtycapitalfinance.com', 'f65429e9c6d41b4ec7dc058f5ebe7f94', 'Realty Capital Finance', 'Hard Money,Long Term Rental/Refinance', '7188640706', 1, '179c3eac89c5f0dbad3f02600e035cff', NULL, 0, 0, '2019-05-30 17:57:04', '2019-05-30 17:57:04', '2019-05-30 17:57:04', NULL),
(89, 'Samuel', 'Kwadrat', 'samuelkwadrat@gmail.com', 'e6fb448feb2fa877aab63b3713027775', 'Realty Capital Finance', 'Hard Money, Transactional Funding, Long Term Rental/Refinance', '7188640706', 1, 'c68675bee5d687c226a770e5bf01b97b', NULL, 1, 0, '2019-06-02 14:47:13', '2019-05-30 20:01:44', '2019-06-02 14:47:13', NULL),
(92, 'Ed', 'Hendrickson', 'ed@thofunding.com', '2c9341ca4cf3d87b9e4eb905d6a3ec45', 'THO Funding', 'Hard Money,Transactional Funding,Long Term Rental/Refinance,Business Loans', '5514272390', 1, 'd5a3d8a008ac12bedc60a6c32d392285', NULL, 1, 0, '2019-06-12 21:49:08', '2019-06-12 21:47:52', '2019-06-12 21:49:08', NULL),
(93, 'Mario', 'Camino', 'arkadcap@gmail.com', '4c36a73bb8b58137d3f154fa04f03ef7', 'Arkad Capital', 'Hard Money, Transactional Funding, Long Term Rental/Refinance, Business Loans', '7323094648', 1, 'a6eaba5ae2bdca0ef8551270629b4ee3', NULL, 1, 0, '2019-06-20 20:30:05', '2019-06-20 20:28:52', '2019-06-20 20:30:05', NULL),
(94, 'John', 'Yurkovich', 'john.yurkovich@nationslending.com', 'f8d3ee3008d4693398a978b6739458b0', 'Nations Lending Corp', 'Long Term Rental/Refinance', '7328010376', 1, 'd481669665c1355f9b90faacbc21f497', NULL, 1, 0, '2019-06-22 18:13:42', '2019-06-22 02:04:08', '2019-06-22 18:13:42', NULL),
(95, 'Solomon', 'Suleymaonv', 'solomons@welendny.com', 'a663d44cd552f0378bbd1a800ccbf68f', 'We Lend LLC', 'Hard Money', '2122573888', 1, '09f0bd35cff36320ab7c6d6b8d9e0a55', NULL, 1, 0, '2019-06-25 20:42:34', '2019-06-25 20:39:17', '2019-06-25 20:42:34', NULL),
(97, 'Jose', 'Dominguez`', 'jose.d@welendny.com', '16d9bb4efe754d3cc941e38362bb7a8b', 'We Lend LLC', 'Hard Money', '5167104080', 1, '458cba77156771043a0a47990004299b', NULL, 1, 0, '2019-07-17 12:46:30', '2019-07-17 12:45:21', '2019-07-17 12:46:30', NULL),
(121, 'test', 'test', 'excanny@yahoo.com', '21e633c4265695eea14ffc39c8164fd1', 'test', 'Hard Money', '1231231', 2, '2d9512fccbd1e2399aaf82f0c4034968', 'https://hardmoneyproject.com/verify.php?email=excanny@yahoo.com&hash=2d9512fccbd1e2399aaf82f0c4034968', 1, 0, '2019-07-29 21:31:48', '2019-07-28 18:56:15', '2019-07-29 21:31:48', NULL),
(123, 'test', 'test', 'excanny@gmail.com', '21e633c4265695eea14ffc39c8164fd1', 'test', 'Hard Money', '2347030595988', 1, '967953e2936dc141c124663c84996be6', 'https://hardmoneyproject.com/verify.php?email=excanny@gmail.com&hash=967953e2936dc141c124663c84996be6', 1, 0, '2019-08-11 14:28:24', '2019-08-11 14:26:00', '2019-08-11 14:28:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_request`
--

CREATE TABLE `password_reset_request` (
  `id` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_requested` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_request`
--

INSERT INTO `password_reset_request` (`id`, `email`, `token`, `date_requested`) VALUES
(16, 'i.westforestcapital@gmail.com', '24f924be0c52f61d31bf12f27d772653', '2019-06-07 01:40:57'),
(15, 'excanny@yahoo.com', 'aa1f8f8f467f229489a6eaa4145cb0c5', '2019-06-05 10:53:43'),
(14, 'excanny@yahoo.com', 'ed90184e3a95201b23677ac73834cd34', '2019-06-05 10:31:32'),
(9, 'nick@mbcapitalsolutions.com', '5412a18b9932de71544e3a75d9ac54d2', '2019-05-24 14:13:06'),
(10, 'excanny@yahoo.com', '1e0798c22e95e57a7fd6080db40e30ee', '2019-05-24 16:54:07'),
(11, 'skwadrat@realtycapitalfinance.com', '25296487a1c837f6ee533f8ebfbbb84f', '2019-05-26 16:47:17'),
(12, 'ed@thofunding.com', '82d3b321bf0d398ae215a6e468bb5ec0', '2019-05-28 21:23:32'),
(13, 'ed@thofunding.com', '13b2ada5352ecc0fba7909f9d9f09919', '2019-05-29 21:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `property_info`
--

CREATE TABLE `property_info` (
  `p_id` bigint(20) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `bemail` varchar(50) NOT NULL,
  `property_street` varchar(100) DEFAULT NULL,
  `property_city` varchar(50) DEFAULT NULL,
  `property_state` varchar(20) DEFAULT NULL,
  `property_no_of_units` int(10) DEFAULT NULL,
  `market_value` decimal(10,2) DEFAULT NULL,
  `renovation_cost` decimal(10,2) DEFAULT NULL,
  `amount_of_loan_request` decimal(10,2) DEFAULT NULL,
  `anticipated_after_repair_cost` decimal(10,2) DEFAULT NULL,
  `purchase_price` decimal(10,2) DEFAULT NULL,
  `cash_reserves_available` decimal(10,2) DEFAULT NULL,
  `property_type` varchar(50) DEFAULT NULL,
  `property_type_other` varchar(255) DEFAULT NULL,
  `purpose_of_loan` varchar(255) DEFAULT NULL,
  `target_closing_date` datetime(6) DEFAULT NULL,
  `exit_strategy` varchar(255) DEFAULT NULL,
  `project_summary` varchar(255) NOT NULL,
  `taxes` varchar(20) DEFAULT NULL,
  `rental_income` varchar(20) DEFAULT NULL,
  `yearly_insurance` varchar(20) DEFAULT NULL,
  `hoa` varchar(20) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `property_owned_duration` varchar(20) NOT NULL,
  `cashout_rate_term` varchar(30) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_info`
--

INSERT INTO `property_info` (`p_id`, `transaction_id`, `bemail`, `property_street`, `property_city`, `property_state`, `property_no_of_units`, `market_value`, `renovation_cost`, `amount_of_loan_request`, `anticipated_after_repair_cost`, `purchase_price`, `cash_reserves_available`, `property_type`, `property_type_other`, `purpose_of_loan`, `target_closing_date`, `exit_strategy`, `project_summary`, `taxes`, `rental_income`, `yearly_insurance`, `hoa`, `purchase_date`, `property_owned_duration`, `cashout_rate_term`, `deleted_at`, `created_at`) VALUES
(62, '155942821561', 'Paul@HomeNation.com', 'Macarthur Circle', 'Cocoa', 'FL', 1, '90000.00', '20000.00', '30000.00', '129000.00', '70000.00', '25000.00', 'Residential (1-4 units)', '', 'Transactional Funding', '2019-06-20 00:00:00.000000', 'Sale to buyer already under contract and approved with underwritten loan commitment for $129,000 Buyer has already paid $20,000 down.', 'Build a new Manufactured home on land that we own (we are a licensed dealer in Florida) to a qualified buyer already approved for a loan for the full purchase price of $129,000', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '2019-06-01 15:30:15'),
(132, '15644540771', 'r.moorepropertiesllc@gmail.com', '3 Berwick Ave', 'Binghamton', 'NY', 2, '47000.00', '15000.00', '59000.00', '86000.00', '44000.00', '6000.00', 'Residential (1-4 units)', '', 'Hard Money', '2019-08-04 00:00:00.000000', 'Upon fixing up property there are current tenants still living in the property who are staying and paying monthly.', 'Working on getting funds to purchase multifamily house and fix up property.', '', '', '', '', NULL, '', '', NULL, '2019-07-29 19:34:37'),
(116, '156365717118', 'brad.thumann4@gmail.com', '72576 270th at', 'Albert Lea', 'Mn', 0, '120000.00', '50000.00', '50000.00', '150000.00', '0.00', '0.00', 'Other', '5 acres rural property with nice buildings but no ', 'Hard Money', '2019-07-31 00:00:00.000000', 'Would like to secure a loan with a 5 to 7 year pay back', 'Would be using the funds to remodel existing building into a shop area for our spray foam business', '', '', '', '', NULL, '', '', NULL, '2019-07-20 14:12:51'),
(70, '156096676816', 'rivercitypropertyshop@gmail', '103 bayard rd', 'Richmond', 'Virginia', 1, '155000.00', '0.00', '130000.00', '0.00', '95000.00', '19000.00', 'Residential (1-4 units)', '', 'Long Term Rental Purchase/Refinance', '2019-06-28 00:00:00.000000', 'Refinance', 'Already renovated and rented out', '940', '14400', '580', NULL, NULL, '', '', NULL, '2019-06-19 10:52:48'),
(133, '1564600290100', 'arbrown@kw.com', '', '', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', 'Business Loans', NULL, '', 'Looking for seed capital to start a development business. Looking to specialize in acquiring condos providing upgraded finishes and enhanced fixtures and A/V package primarily in markets not near Boston.', '', '', '', '', NULL, '', '', NULL, '2019-07-31 12:11:30'),
(72, '156108151043', 'dustinhartmann7@gmail.com', '6951meadowbrook', 'Clearlake', 'Ca', 1, '200.00', '30.00', '30.00', '250.00', '60.00', '1000.00', 'Residential (1-4 units)', '', 'Hard Money', '2019-06-28 00:00:00.000000', 'No exit it\'s my personal home', 'New siding an trim with life time warranty', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '2019-06-20 18:45:10'),
(104, '156298159144', 'ageorge1970@icloud.com', '483 old limestone', 'York', 'Sc', 1, '87000.00', '65000.00', '90000.00', '150000.00', '25000.00', '5000.00', 'Residential (1-4 units)', '', 'Hard Money', '2019-08-15 00:00:00.000000', 'Sell property after rehab', 'Interior and exterior renovation.', '', '', '', '', NULL, '', '', NULL, '2019-07-12 18:33:11'),
(103, '156281772851', 'btrible1982@gmail.com', '293 State Route 3023', 'Montrose', 'PA', 1, '140000.00', '50000.00', '80000.00', '190000.00', '1.00', '0.00', 'Residential (1-4 units)', '', 'Hard Money', '2019-07-28 00:00:00.000000', 'After consolidation and renovation, take out a mortgage to repay.', 'Finish living space above garage. Install drainage around perimeter of home. Reseal foundation. Refinish basement. And some cash out to consolidate.', '', '', '', '', NULL, '', '', NULL, '2019-07-10 21:02:08'),
(99, '156269148657', 'steven.fance@cultiv8hs.com', 'N/A', 'Atlanta', 'Georgia', 1, '99999999.99', '99999999.99', '100000.00', '99999999.99', '99999999.99', '0.00', 'Commercial (other)', '14 manufacturing facilities', 'Hard Money', '2019-07-15 00:00:00.000000', 'The hard loan will be paid off at closing on July 15', 'Cultiv8 partners with industrial hemp farmers and manufactures biodegradable packaging, biofuel, hempcrete, and protein in automated manufacturing facilities.\r\n\r\nLand parcels have been identified and each facility will be a new construction that will be c', '', '', '', '', NULL, '', '', NULL, '2019-07-09 09:58:06'),
(120, '15638071035', 'bryan.paglinawan@gmail.com', '4188 W Main Street', 'Medford', 'Oregon', 4, '1800000.00', '225000.00', '1100000.00', '2400000.00', '1100000.00', '575000.00', 'Other', 'Agricultural mixed use EFU', 'Hard Money', '2019-07-26 00:00:00.000000', 'The project made enough last year to pay off the loan.  We can triple the income if we expand it.', 'This is a functioning hemp processing facility.  We are looking to acquire and expand.', '', '', '', '', NULL, '', '', NULL, '2019-07-22 07:51:43'),
(121, '156384030298', 'hicksmonchelle262@gmail.com', '2701 Wellington st', 'Richmond', 'Va', 1, '69000.00', '26000.00', '101000.00', '140000.00', '75000.00', '0.00', 'Residential (1-4 units)', '', 'Hard Money', '2019-09-02 00:00:00.000000', 'Tenants rent cover hold cost. Sell', '2 bed 1 bath home with upside in type b neighborhood. Tenant in place has been there 3 yrs.', '', '', '', '', NULL, '', '', NULL, '2019-07-22 17:05:02'),
(122, '156385782841', 'shannons1978@yahoo.com', '314 Lincoln street', 'Wayland', 'Ny', 1, '109000.00', '0.00', '100000.00', '0.00', '129900.00', '300.00', 'Residential (1-4 units)', '', 'Long Term Rental Purchase', '2019-08-01 00:00:00.000000', 'Looking to purchase', 'Looking to purchase', '4037.00', '', '', '4037.00', '2019-08-01', '', '', NULL, '2019-07-22 21:57:08'),
(123, '156390912222', 'build4u@gmail.com', '312 state route 4', 'cathlama', 'WA', 1, '200000.00', '100000.00', '130000.00', '300000.00', '75000.00', '9000.00', 'Residential (1-4 units)', '', 'Hard Money', '2019-09-15 00:00:00.000000', 'nn vbhnbvyh', 'I owned this sense sept 2019, and is close to half done. The home will have new wiring and plumbing new kitchen and bath all new paint and flooring on a 1/3 ac. I could not write in exit and it did put Vancouver in but would not let me write or del.', '', '', '', '', NULL, '', '', NULL, '2019-07-23 12:12:02'),
(125, '156407890472', 'r.moorepropertiesllc@gmail.com', '1288 Vestal Ave', 'Binghamton', 'New York', 0, '400000.00', '50000.00', '400000.00', '500000.00', '350000.00', '40000.00', 'Commercial (other)', 'Church', 'Hard Money', '2019-08-10 00:00:00.000000', 'Upon completion there will be rooms leased out to other organizations to utilize while also building income from church givings.', 'Working on receiving funding to purchase and fix up the church property. Multiple rooms need minor repairs and around the windows near stairs of the church need to be done including the ceiling.', '', '', '', '', NULL, '', '', NULL, '2019-07-25 11:21:44');

-- --------------------------------------------------------

--
-- Stand-in structure for view `show_bids`
-- (See below for the actual view)
--
CREATE TABLE `show_bids` (
`id` bigint(20)
,`loan_id` varchar(255)
,`applicant_name` varchar(50)
,`applicant_email` varchar(50)
,`bphone` varchar(100)
,`lender_id` varchar(255)
,`lender_name` varchar(50)
,`lender_email` varchar(100)
,`phone` varchar(100)
,`property_location` varchar(255)
,`rate` varchar(50)
,`points` varchar(50)
,`legal_fees` varchar(50)
,`draw_fees` varchar(50)
,`application_fee` varchar(50)
,`other_fees` varchar(50)
,`other_fees_explanation` varchar(255)
,`real_estate_no` varchar(50)
,`max_arv` varchar(50)
,`amount_of_rehab` varchar(50)
,`comments_section` varchar(255)
,`prepayments` varchar(255)
,`loan_terms` varchar(50)
,`init_loan_amt` varchar(50)
,`extension_cost` varchar(50)
,`extension_term` varchar(255)
,`date_of_loan_application` datetime
,`accepted` int(11)
,`date_of_bid` datetime
,`date_of_funding` datetime
,`date_of_rejection` datetime
,`bid_status` int(10)
,`funded` int(11)
,`p_id` bigint(20)
,`transaction_id` varchar(255)
,`bemail` varchar(50)
,`property_street` varchar(100)
,`property_city` varchar(50)
,`property_state` varchar(20)
,`property_no_of_units` int(10)
,`market_value` decimal(10,2)
,`renovation_cost` decimal(10,2)
,`amount_of_loan_request` decimal(10,2)
,`anticipated_after_repair_cost` decimal(10,2)
,`purchase_price` decimal(10,2)
,`cash_reserves_available` decimal(10,2)
,`property_type` varchar(50)
,`property_type_other` varchar(255)
,`purpose_of_loan` varchar(255)
,`target_closing_date` datetime(6)
,`exit_strategy` varchar(255)
,`project_summary` varchar(255)
,`taxes` varchar(20)
,`rental_income` varchar(20)
,`yearly_insurance` varchar(20)
,`hoa` varchar(20)
,`purchase_date` date
,`property_owned_duration` varchar(20)
,`cashout_rate_term` varchar(30)
,`deleted_at` datetime
,`created_at` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `status_definition`
--

CREATE TABLE `status_definition` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_definition`
--

INSERT INTO `status_definition` (`id`, `description`) VALUES
(0, 'This status is for unapproved lenders'),
(1, 'This status is for approved lenders'),
(2, 'This status is for admins');

-- --------------------------------------------------------

--
-- Structure for view `show_bids`
--
DROP TABLE IF EXISTS `show_bids`;

CREATE ALGORITHM=UNDEFINED DEFINER=`quw7z4afipb0`@`localhost` SQL SECURITY DEFINER VIEW `show_bids`  AS  select `bids`.`id` AS `id`,`bids`.`loan_id` AS `loan_id`,`bids`.`applicant_name` AS `applicant_name`,`bids`.`applicant_email` AS `applicant_email`,`bids`.`bphone` AS `bphone`,`bids`.`lender_id` AS `lender_id`,`bids`.`lender_name` AS `lender_name`,`bids`.`lender_email` AS `lender_email`,`bids`.`phone` AS `phone`,`bids`.`property_location` AS `property_location`,`bids`.`rate` AS `rate`,`bids`.`points` AS `points`,`bids`.`legal_fees` AS `legal_fees`,`bids`.`draw_fees` AS `draw_fees`,`bids`.`application_fee` AS `application_fee`,`bids`.`other_fees` AS `other_fees`,`bids`.`other_fees_explanation` AS `other_fees_explanation`,`bids`.`real_estate_no` AS `real_estate_no`,`bids`.`max_arv` AS `max_arv`,`bids`.`amount_of_rehab` AS `amount_of_rehab`,`bids`.`comments_section` AS `comments_section`,`bids`.`prepayments` AS `prepayments`,`bids`.`loan_terms` AS `loan_terms`,`bids`.`init_loan_amt` AS `init_loan_amt`,`bids`.`extension_cost` AS `extension_cost`,`bids`.`extension_term` AS `extension_term`,`bids`.`date_of_loan_application` AS `date_of_loan_application`,`bids`.`accepted` AS `accepted`,`bids`.`date_of_bid` AS `date_of_bid`,`bids`.`date_of_funding` AS `date_of_funding`,`bids`.`date_of_rejection` AS `date_of_rejection`,`bids`.`bid_status` AS `bid_status`,`bids`.`funded` AS `funded`,`property_info`.`p_id` AS `p_id`,`property_info`.`transaction_id` AS `transaction_id`,`property_info`.`bemail` AS `bemail`,`property_info`.`property_street` AS `property_street`,`property_info`.`property_city` AS `property_city`,`property_info`.`property_state` AS `property_state`,`property_info`.`property_no_of_units` AS `property_no_of_units`,`property_info`.`market_value` AS `market_value`,`property_info`.`renovation_cost` AS `renovation_cost`,`property_info`.`amount_of_loan_request` AS `amount_of_loan_request`,`property_info`.`anticipated_after_repair_cost` AS `anticipated_after_repair_cost`,`property_info`.`purchase_price` AS `purchase_price`,`property_info`.`cash_reserves_available` AS `cash_reserves_available`,`property_info`.`property_type` AS `property_type`,`property_info`.`property_type_other` AS `property_type_other`,`property_info`.`purpose_of_loan` AS `purpose_of_loan`,`property_info`.`target_closing_date` AS `target_closing_date`,`property_info`.`exit_strategy` AS `exit_strategy`,`property_info`.`project_summary` AS `project_summary`,`property_info`.`taxes` AS `taxes`,`property_info`.`rental_income` AS `rental_income`,`property_info`.`yearly_insurance` AS `yearly_insurance`,`property_info`.`hoa` AS `hoa`,`property_info`.`purchase_date` AS `purchase_date`,`property_info`.`property_owned_duration` AS `property_owned_duration`,`property_info`.`cashout_rate_term` AS `cashout_rate_term`,`property_info`.`deleted_at` AS `deleted_at`,`property_info`.`created_at` AS `created_at` from (`bids` join `property_info` on((`bids`.`loan_id` = `property_info`.`transaction_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_deals`
--
ALTER TABLE `accepted_deals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loan_id` (`loan_id`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrower_info`
--
ALTER TABLE `borrower_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bemail` (`bemail`);

--
-- Indexes for table `bpassword_reset_request`
--
ALTER TABLE `bpassword_reset_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dead_bids`
--
ALTER TABLE `dead_bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dead_property_info`
--
ALTER TABLE `dead_property_info`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `declarations`
--
ALTER TABLE `declarations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_subscriptions`
--
ALTER TABLE `email_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invite_to_bid`
--
ALTER TABLE `invite_to_bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lenders`
--
ALTER TABLE `lenders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `password_reset_request`
--
ALTER TABLE `password_reset_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_info`
--
ALTER TABLE `property_info`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `status_definition`
--
ALTER TABLE `status_definition`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepted_deals`
--
ALTER TABLE `accepted_deals`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `borrower_info`
--
ALTER TABLE `borrower_info`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `bpassword_reset_request`
--
ALTER TABLE `bpassword_reset_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `dead_bids`
--
ALTER TABLE `dead_bids`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `dead_property_info`
--
ALTER TABLE `dead_property_info`
  MODIFY `p_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `declarations`
--
ALTER TABLE `declarations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `email_subscriptions`
--
ALTER TABLE `email_subscriptions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `invite_to_bid`
--
ALTER TABLE `invite_to_bid`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `lenders`
--
ALTER TABLE `lenders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `password_reset_request`
--
ALTER TABLE `password_reset_request`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `property_info`
--
ALTER TABLE `property_info`
  MODIFY `p_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `status_definition`
--
ALTER TABLE `status_definition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
