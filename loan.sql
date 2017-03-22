-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2017 at 08:28 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankloan`
--

CREATE TABLE `bankloan` (
  `bn_id` int(11) NOT NULL,
  `bankname` varchar(30) NOT NULL,
  `bankimg` varchar(30) NOT NULL,
  `property` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `interestrate` decimal(10,2) NOT NULL,
  `minamt` int(11) NOT NULL,
  `maxamt` int(11) NOT NULL,
  `loantenuremin` int(11) NOT NULL,
  `loantenuremax` int(11) NOT NULL,
  `sal_min_amt` int(11) NOT NULL,
  `sal_max_amt` int(11) NOT NULL,
  `processing_fee_rate` double(10,2) NOT NULL,
  `pre_pay_penalty` varchar(20) NOT NULL,
  `security` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankloan`
--

INSERT INTO `bankloan` (`bn_id`, `bankname`, `bankimg`, `property`, `city`, `interestrate`, `minamt`, `maxamt`, `loantenuremin`, `loantenuremax`, `sal_min_amt`, `sal_max_amt`, `processing_fee_rate`, `pre_pay_penalty`, `security`, `date`) VALUES
(1, 'ICICI BANK', 'icici.gif', 'Home as New booking', 'Mumbai', '9.90', 500000, 10000000, 1, 30, 10000, 100000000, 1.00, 'Not Required', 'Not Required', '2015-07-11 11:52:18'),
(2, 'AXIS BANK', 'axis.gif', 'Home as Resale', 'Mumbai', '9.90', 500000, 10000000, 1, 30, 10000, 100000000, 0.50, 'Not Required', 'Not Required', '2015-07-11 11:52:18'),
(3, 'DHFL BANK', 'dhfl.gif', 'Home as New booking', 'Mumbai', '10.15', 500000, 10000000, 1, 30, 10000, 100000000, 0.50, 'Not Required', 'Not Required', '2015-07-11 11:52:18'),
(4, 'HDFC BANK', 'hdfc.gif', 'Construct on a plot you own', 'Mumbai', '9.90', 500000, 10000000, 1, 30, 10000, 100000000, 0.50, 'Not Required', 'Not Required', '2015-07-11 11:52:18'),
(5, 'HSBS BANK', 'hsbc.gif', 'Home as New booking', 'Mumbai', '9.90', 500000, 10000000, 1, 30, 10000, 100000000, 0.50, 'Not Required', 'Not Required', '2015-07-11 11:52:18'),
(6, 'IDBI BANK', 'idbi.gif', 'Plot', 'Mumbai', '9.95', 500000, 10000000, 1, 30, 10000, 100000000, 0.50, 'Not Required', 'Not Required', '2015-07-11 11:52:18'),
(7, 'Indiabulls', 'indiabulls.gif', 'Home as New booking', 'Mumbai', '9.90', 500000, 10000000, 1, 30, 10000, 100000000, 0.50, 'Not Required', 'Not Required', '2015-07-11 11:52:18'),
(8, 'Standard Chartered', 'standardchart.gif', 'Plot', 'Mumbai', '10.15', 500000, 10000000, 1, 30, 10000, 100000000, 0.50, 'Not Required', 'Not Required', '2015-07-11 11:52:18'),
(9, 'pnb Housing', 'pubhousing.gif', 'Construct on a plot you own', 'Mumbai', '9.95', 500000, 10000000, 1, 30, 10000, 100000000, 0.50, 'Not Required', 'Not Required', '2015-07-11 11:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `homeusersubmit`
--

CREATE TABLE `homeusersubmit` (
  `us_id` int(11) NOT NULL,
  `bn_id` int(11) NOT NULL,
  `select_property` varchar(30) NOT NULL,
  `builder_name` varchar(30) NOT NULL,
  `cost_of_the_property` int(11) NOT NULL,
  `which_city_property` varchar(30) NOT NULL,
  `residence_status` varchar(30) NOT NULL,
  `employment_type` varchar(30) NOT NULL,
  `net_monthly_income` int(11) NOT NULL,
  `relation_co_borr` varchar(30) NOT NULL,
  `emp_co_borr` varchar(30) NOT NULL,
  `co_borr_ month_inc` int(10) NOT NULL,
  `planbank` varchar(30) NOT NULL,
  `plan_interest_rate` decimal(10,2) NOT NULL,
  `plan_proc_fee_rate` decimal(10,2) NOT NULL,
  `plan_proc_fee_amt` int(11) NOT NULL,
  `plan_emi_fee_amt` int(11) NOT NULL,
  `plan_bank_maxamt` int(11) NOT NULL,
  `plan_loan_tenure` varchar(20) NOT NULL,
  `pre_pay_penalty` varchar(30) NOT NULL,
  `security` varchar(30) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_eamil` varchar(50) NOT NULL,
  `user_phone` varchar(12) NOT NULL,
  `user_gender` varchar(30) NOT NULL,
  `user_add` varchar(180) NOT NULL,
  `user_city` varchar(30) NOT NULL,
  `user_pincode` int(11) NOT NULL,
  `user_pan` varchar(20) NOT NULL,
  `user_emp_name` varchar(50) NOT NULL,
  `user_office_add` varchar(180) NOT NULL,
  `user_office_city` varchar(30) NOT NULL,
  `user_office_pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankloan`
--
ALTER TABLE `bankloan`
  ADD PRIMARY KEY (`bn_id`);

--
-- Indexes for table `homeusersubmit`
--
ALTER TABLE `homeusersubmit`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bankloan`
--
ALTER TABLE `bankloan`
  MODIFY `bn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `homeusersubmit`
--
ALTER TABLE `homeusersubmit`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
