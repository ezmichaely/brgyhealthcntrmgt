-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 02:58 AM
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
-- Database: `bhcm.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(255) NOT NULL,
  `account_type` int(11) NOT NULL,
  `account_status` int(11) NOT NULL,
  `account_firstname` varchar(255) NOT NULL,
  `account_lastname` varchar(255) NOT NULL,
  `account_username` varchar(255) NOT NULL,
  `account_password` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `account_answer` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `account_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `account_type`, `account_status`, `account_firstname`, `account_lastname`, `account_username`, `account_password`, `question_id`, `account_answer`, `created_at`, `account_token`) VALUES
(2, 0, 1, 'adminko', 'adminko', 'adminko', '16fe10fcda557c737c178dedd0cd205b', 2, 'adminko', '2021-07-14 11:01:38', NULL),
(4, 2, 1, 'nurseko', 'nurseko', 'nurseko', 'fdf1f15a4286caf40cfafe4a1abb0092', 1, 'nurseko', '2021-08-29 16:09:02', '4Jxzxedt3I'),
(5, 1, 1, 'staffko', 'staffko', 'staffko', '8d83225e6b8943fc827394906ac46aa4', 1, 'staffko', '2021-08-30 01:06:43', 'WpFRRe9uNN');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_type`) VALUES
(1, 'Adult'),
(2, 'Pregnant'),
(3, 'Senior Citizen'),
(4, 'Child');

-- --------------------------------------------------------

--
-- Table structure for table `civilstatus`
--

CREATE TABLE `civilstatus` (
  `civilstatus_id` int(11) NOT NULL,
  `civilstatus_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `civilstatus`
--

INSERT INTO `civilstatus` (`civilstatus_id`, `civilstatus_name`) VALUES
(1, 'Single'),
(2, 'Married'),
(3, 'Divorced'),
(4, 'Widowed');

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `consultation_id` int(11) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `consultation_date` varchar(255) NOT NULL,
  `consultation_temperature` varchar(255) NOT NULL,
  `consultation_rr` varchar(255) NOT NULL,
  `consultation_hr` varchar(255) NOT NULL,
  `consultation_bp` varchar(255) NOT NULL,
  `consultation_symptoms` varchar(255) NOT NULL,
  `consultation_findings` varchar(255) NOT NULL,
  `consultation_medications` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `delivery_date` varchar(255) NOT NULL,
  `delivery_temperature` varchar(255) NOT NULL,
  `delivery_rr` varchar(255) NOT NULL,
  `delivery_hr` varchar(255) NOT NULL,
  `delivery_bp` varchar(255) NOT NULL,
  `delivery_age` varchar(255) NOT NULL,
  `delivery_babiesno` varchar(255) NOT NULL,
  `delivery_gender` varchar(255) NOT NULL,
  `delivery_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_type`
--

CREATE TABLE `delivery_type` (
  `dtype_id` int(11) NOT NULL,
  `dtype_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_type`
--

INSERT INTO `delivery_type` (`dtype_id`, `dtype_name`) VALUES
(1, 'Amniotomy (“Breaking the Bag of Water”)'),
(2, 'Episiotomy'),
(3, 'Induced labor'),
(4, 'Fetal monitoring'),
(5, 'Forceps delivery'),
(6, 'Vacuum extraction'),
(7, 'Cesarean section');

-- --------------------------------------------------------

--
-- Table structure for table `immunization`
--

CREATE TABLE `immunization` (
  `immunization_id` int(11) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `immunization_date` varchar(255) NOT NULL,
  `immunization_temperature` varchar(255) NOT NULL,
  `immunization_rr` varchar(255) NOT NULL,
  `immunization_hr` varchar(255) NOT NULL,
  `immunization_bp` varchar(255) NOT NULL,
  `immunization_weight` varchar(255) NOT NULL,
  `immunization_height` varchar(255) NOT NULL,
  `immunization_vaccinetype` varchar(255) NOT NULL,
  `immunization_vaccinename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` varchar(255) NOT NULL,
  `patient_category` int(11) NOT NULL,
  `patient_firstname` varchar(255) NOT NULL,
  `patient_middlename` varchar(255) DEFAULT NULL,
  `patient_lastname` varchar(255) NOT NULL,
  `patient_suffix` varchar(255) DEFAULT NULL,
  `patient_age` varchar(255) NOT NULL,
  `patient_gender` varchar(255) NOT NULL,
  `patient_dob` varchar(255) NOT NULL,
  `patient_pob` varchar(255) NOT NULL,
  `patient_weight` varchar(255) NOT NULL,
  `patient_height` varchar(255) NOT NULL,
  `patient_contactno` int(11) DEFAULT NULL,
  `patient_address` varchar(255) NOT NULL,
  `patient_nationality` varchar(255) NOT NULL,
  `patient_guardianspouse` varchar(255) DEFAULT NULL,
  `patient_guardianspouseno` int(11) NOT NULL,
  `patient_civilstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `patient_category`, `patient_firstname`, `patient_middlename`, `patient_lastname`, `patient_suffix`, `patient_age`, `patient_gender`, `patient_dob`, `patient_pob`, `patient_weight`, `patient_height`, `patient_contactno`, `patient_address`, `patient_nationality`, `patient_guardianspouse`, `patient_guardianspouseno`, `patient_civilstatus`) VALUES
('PA-20210000001', 4, 'Firstname', 'Middlename', 'Lastname', 'Suffix', '2 months', 'Male', '2021-06-15', 'Place of Birth', '2 kg', '1ft 3inch', 23123, 'Address', 'Nationality', 'Mother', 912345679, 1);

-- --------------------------------------------------------

--
-- Table structure for table `prenatal`
--

CREATE TABLE `prenatal` (
  `prenatal_id` int(11) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `prenatal_date` varchar(255) NOT NULL,
  `prenatal_temperature` varchar(255) NOT NULL,
  `prenatal_rr` varchar(255) NOT NULL,
  `prenatal_hr` varchar(255) NOT NULL,
  `prenatal_bp` varchar(255) NOT NULL,
  `prenatal_sugarlevel` varchar(255) NOT NULL,
  `prenatal_hemoglobin` varchar(255) NOT NULL,
  `prenatal_weight` varchar(255) NOT NULL,
  `prenatal_height` varchar(255) NOT NULL,
  `prenatal_dosename` varchar(255) NOT NULL,
  `prenatal_doselevel` varchar(255) NOT NULL,
  `prenatal_medications` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `question_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question_name`) VALUES
(1, 'What is your favorite color?'),
(2, 'What city were you born in?'),
(3, 'What is your mother\'s maiden name?'),
(4, 'What year did you graduate from High School?'),
(5, 'What was the name of your first boyfriend/girlfriend?'),
(6, 'What is the name of your pet?');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `report_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `report_type`) VALUES
(1, 'Consulation'),
(2, 'Prenatal'),
(3, 'Immunization'),
(4, 'Delivery');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `civilstatus`
--
ALTER TABLE `civilstatus`
  ADD PRIMARY KEY (`civilstatus_id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`consultation_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `delivery_type`
--
ALTER TABLE `delivery_type`
  ADD PRIMARY KEY (`dtype_id`);

--
-- Indexes for table `immunization`
--
ALTER TABLE `immunization`
  ADD PRIMARY KEY (`immunization_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `prenatal`
--
ALTER TABLE `prenatal`
  ADD PRIMARY KEY (`prenatal_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `civilstatus`
--
ALTER TABLE `civilstatus`
  MODIFY `civilstatus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `consultation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delivery_type`
--
ALTER TABLE `delivery_type`
  MODIFY `dtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `immunization`
--
ALTER TABLE `immunization`
  MODIFY `immunization_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prenatal`
--
ALTER TABLE `prenatal`
  MODIFY `prenatal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`);

--
-- Constraints for table `consultations`
--
ALTER TABLE `consultations`
  ADD CONSTRAINT `consultations_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
