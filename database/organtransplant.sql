-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2021 at 04:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organtransplant`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(11) NOT NULL,
  `billing_date` date NOT NULL,
  `Transplant_ID` int(11) NOT NULL,
  `patient_number` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` bigint(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `consultation_fees` bigint(20) NOT NULL,
  `lab_fees` bigint(20) NOT NULL,
  `transplant_fees` bigint(20) NOT NULL,
  `total_amount` bigint(20) GENERATED ALWAYS AS (`consultation_fees` + `lab_fees` + `transplant_fees`) STORED
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood_information`
--

CREATE TABLE `blood_information` (
  `blood_id` int(11) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `issue_date` date NOT NULL,
  `owner_id_number` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `next_of_kin` varchar(255) NOT NULL,
  `nok_phone_number` varchar(255) NOT NULL,
  `nok_relationship` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_attendance_id` int(11) NOT NULL,
  `pat_id_number` int(11) NOT NULL,
  `attendance_date` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `physical_location` varchar(255) NOT NULL,
  `county_of_birth` varchar(255) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `next_of_kin` varchar(255) NOT NULL,
  `nok_phone_number` varchar(255) NOT NULL,
  `nok_relationship` varchar(255) NOT NULL,
  `temperature` varchar(255) NOT NULL,
  `weight_kg` varchar(255) NOT NULL,
  `any_complications` varchar(255) NOT NULL,
  `any_lifestyle_disease` varchar(255) NOT NULL,
  `fit_for_lab_test` varchar(255) NOT NULL,
  `doctor_on_duty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_attendance_id`, `pat_id_number`, `attendance_date`, `first_name`, `middle_name`, `last_name`, `gender`, `marital_status`, `birth_date`, `age`, `physical_location`, `county_of_birth`, `telephone_number`, `email`, `next_of_kin`, `nok_phone_number`, `nok_relationship`, `temperature`, `weight_kg`, `any_complications`, `any_lifestyle_disease`, `fit_for_lab_test`, `doctor_on_duty`) VALUES
(10, 1, '2021-05-01', 'Michael', 'Njenga', 'Mbuthia', 'Male', 'Single', '2016-11-14', 5, 'Kangemi', 'Nairobi', '07061232342', '-', 'Jack', '0706814228', 'Father', '33', '20', 'No', 'No', 'Yes', 'Dr. Mbugua');

-- --------------------------------------------------------

--
-- Table structure for table `donor_information`
--

CREATE TABLE `donor_information` (
  `attendance_date` date NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `next_of_kin` varchar(255) NOT NULL,
  `nok_phone_number` varchar(255) NOT NULL,
  `nok_relationship` varchar(255) NOT NULL,
  `patient_hiv_status` varchar(255) NOT NULL,
  `patient_health_status` varchar(255) NOT NULL,
  `item_to_donate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `lab_attendance_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_number` int(11) NOT NULL,
  `attendance_date` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `physical_location` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `temperature` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `any_complications` varchar(255) NOT NULL,
  `any_lifestyle_disease` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `HIV Test Results` varchar(255) NOT NULL,
  `blood_test_results` varchar(255) NOT NULL,
  `lab_technician_on_duty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organ_information`
--

CREATE TABLE `organ_information` (
  `organ_id` int(11) NOT NULL,
  `organ_name` varchar(255) NOT NULL,
  `organ_status` varchar(255) NOT NULL,
  `issue_date` date NOT NULL,
  `owner_id_number` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `next_of_kin` varchar(255) NOT NULL,
  `nok_phone_number` varchar(255) NOT NULL,
  `nok_relationship` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `patient_number` int(11) NOT NULL,
  `attendance_date` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `physical_location` varchar(255) NOT NULL,
  `county_of_birth` varchar(255) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `next_of_kin` varchar(255) NOT NULL,
  `nok_phone_number` varchar(255) NOT NULL,
  `nok_relationship` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`patient_number`, `attendance_date`, `first_name`, `middle_name`, `last_name`, `gender`, `marital_status`, `birth_date`, `age`, `physical_location`, `county_of_birth`, `telephone_number`, `email`, `next_of_kin`, `nok_phone_number`, `nok_relationship`) VALUES
(2, '2021-05-08', 'Stephen', 'Njenga', 'Mwangi', 'Male', 'Single', '1984-11-14', 35, 'Umoja II', 'Nairobi', '0720665959', 'steveminds@yahoo.com', 'Jackson Mwangi', '0706814228', 'Brother'),
(3, '2021-05-08', 'mohamud', 'adan', 'kulow', 'Male', 'Single', '1999-02-10', 45, 'kisumu town', 'Nairobi', '0791257221', 'mohamudo800@gmail.com', 'ali', '0724686836', 'Brother');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_number` int(11) NOT NULL,
  `receipt_date` date NOT NULL,
  `billing_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `consultation_fees` bigint(20) NOT NULL,
  `lab_fees` bigint(20) NOT NULL,
  `transplant_charges` bigint(20) NOT NULL,
  `total_amount` bigint(20) NOT NULL,
  `amount_paid` bigint(20) NOT NULL,
  `balance` bigint(20) GENERATED ALWAYS AS (`total_amount` - `amount_paid`) STORED
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transplant`
--

CREATE TABLE `transplant` (
  `transplant_id` int(11) NOT NULL,
  `transplant_date` date NOT NULL,
  `patient_number` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `organ_name` varchar(255) NOT NULL,
  `organ_status` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `any_match` varchar(255) NOT NULL,
  `transplant_status` varchar(255) NOT NULL,
  `transplant_doctor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `user_group`) VALUES
(1, 'Jack', 'M', 'Mwangi', 'jack', 'jack2019', 'Systems Administrator'),
(3, 'mohamud', 'adan', 'kulow', 'mohavic', '29304181.m', 'Systems Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `blood_information`
--
ALTER TABLE `blood_information`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_attendance_id`);

--
-- Indexes for table `donor_information`
--
ALTER TABLE `donor_information`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`lab_attendance_id`);

--
-- Indexes for table `organ_information`
--
ALTER TABLE `organ_information`
  ADD PRIMARY KEY (`organ_id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`patient_number`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_number`);

--
-- Indexes for table `transplant`
--
ALTER TABLE `transplant`
  ADD PRIMARY KEY (`transplant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_information`
--
ALTER TABLE `blood_information`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `lab_attendance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organ_information`
--
ALTER TABLE `organ_information`
  MODIFY `organ_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `patient_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transplant`
--
ALTER TABLE `transplant`
  MODIFY `transplant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
