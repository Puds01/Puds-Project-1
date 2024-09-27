-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 10:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_abc_backup`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_account`
--

CREATE TABLE `tbl_admin_account` (
  `admin_id` int(10) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(70) NOT NULL,
  `admin_username` varchar(70) NOT NULL,
  `date_created` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin_account`
--

INSERT INTO `tbl_admin_account` (`admin_id`, `admin_email`, `admin_password`, `admin_username`, `date_created`) VALUES
(1, 'abionjustinekarl1@gmail.com', '$2y$12$VfWaJcsyVeLzRUiiDFbdOuTQFn59gkgYWqh.9WpmkcL1q5mu409J.', 'Justine', '2024-06-05 23:04:44.476328'),
(2, 'duckluck143@gmail.com', '$2y$12$r9AWBbax9uEr1FFXKe6xoO3et1Rxpsbw5BCpGTYH3QGST3pvUgQFm', 'Puddles', '2024-06-07 13:59:20.704978'),
(3, 'duckluckgaming1@gmail.com', '$2y$12$fkeVzzc0gbeSuhUsf41wGONfqzMitWSBeiUrmvMM34f2uLdh4PbxO', 'Justine1', '2024-06-07 16:15:22.077941'),
(4, 'puds@gmail.com', '$2y$12$phnKISLhwr8v88j09dl9vOa9y0uS9jKwr04WfTnlWMUwDaBXzP7DC', 'Puds01', '2024-06-10 17:10:52.432183'),
(5, 'davebautista@gmail.com', '$2y$12$H7MxyXMUUmJPOj6YI95ryO6K9FJ8wOqiKiS.gPUIckqEP5T53IMKG', 'Dave Bautista', '2024-06-20 14:40:14.374971');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcement`
--

CREATE TABLE `tbl_announcement` (
  `public_feed_id` int(50) NOT NULL,
  `admin_id` int(30) NOT NULL,
  `admin_username` varchar(12) NOT NULL,
  `public_feed_content` varchar(200) NOT NULL,
  `public_feed_time` time(6) DEFAULT current_timestamp(),
  `public_feed_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_announcement`
--

INSERT INTO `tbl_announcement` (`public_feed_id`, `admin_id`, `admin_username`, `public_feed_content`, `public_feed_time`, `public_feed_date`) VALUES
(100, 1, 'Justine', 'Good morning everyone! Sorry for the late notice but we will be having a meeting later at 5 pm in the conference room TY!', '11:02:41.000000', '2024-06-07 11:02:41'),
(104, 2, 'Puddles', 'Good morning po admin Justine :)', '16:16:45.000000', '2024-06-07 16:16:45'),
(105, 4, 'Puds01', 'Ayoko na sayo Justine', '17:14:03.000000', '2024-06-10 17:14:03'),
(106, 1, 'Justine', 'thbygntfhnmt', '14:27:10.000000', '2024-06-20 14:27:10'),
(107, 1, 'Justine', 'asdgvsdfhbndgbns', '14:39:25.000000', '2024-06-20 14:39:25'),
(108, 2, 'Puddles', 'srahbfgnfd', '14:39:39.000000', '2024-06-20 14:39:39'),
(109, 5, 'Dave Bautist', 'rahbgdfndfndf', '14:40:35.000000', '2024-06-20 14:40:35'),
(110, 5, 'Dave Bautist', 'Tangina mo justine\r\n', '14:40:39.000000', '2024-06-20 14:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_account`
--

CREATE TABLE `tbl_employee_account` (
  `employee_id` int(20) NOT NULL,
  `employee_rfid` int(50) NOT NULL,
  `employee_email` varchar(125) NOT NULL,
  `employee_password` varchar(125) NOT NULL,
  `employee_username` varchar(125) NOT NULL,
  `employee_name` varchar(125) NOT NULL,
  `employee_position` varchar(12) NOT NULL,
  `employee_department` varchar(125) NOT NULL,
  `employee_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employee_account`
--

INSERT INTO `tbl_employee_account` (`employee_id`, `employee_rfid`, `employee_email`, `employee_password`, `employee_username`, `employee_name`, `employee_position`, `employee_department`, `employee_date`) VALUES
(10000000, 2024000001, 'jane@gmail.com', '$2y$12$KoNtP6TqhWfNBorSUqxty.gyvxXbL1A3DdfV.JHB1BtMHnincJagy', 'Jane', 'Jane Camille Abion', 'Web Analyst', 'Analyst', '2024-06-05 23:05:18'),
(10000003, 2024000002, 'kim@gmail.com', '$2y$12$G1s8tKXnT1Q8gv63160vseXJQYHLtazeoAlSJX3oneJ29av.Zsff.', 'Kim', 'Kim Jungsundigoo', 'Web Analyst', 'Analytics', '2024-06-10 17:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiries`
--

CREATE TABLE `tbl_inquiries` (
  `inquiry_id` int(50) NOT NULL,
  `inquiry_content` varchar(200) NOT NULL,
  `inquiry_time` time(6) NOT NULL,
  `inquiry_date` date NOT NULL,
  `employee_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_inquiries`
--

INSERT INTO `tbl_inquiries` (`inquiry_id`, `inquiry_content`, `inquiry_time`, `inquiry_date`, `employee_id`) VALUES
(100002, 'Hello, can I ask a support for my RFID? I\'m having problems and need a fix ASAP.', '23:05:49.000000', '2024-06-05', 10000000),
(100003, 'Please patulong sira ung aking rfid huhuhu', '14:13:21.000000', '2024-06-07', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recording`
--

CREATE TABLE `tbl_recording` (
  `record_id` int(20) NOT NULL,
  `record_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rfid`
--

CREATE TABLE `tbl_rfid` (
  `employee_rfid` int(125) NOT NULL,
  `employee_image` varchar(255) NOT NULL,
  `log_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_time_log`
--

CREATE TABLE `tbl_time_log` (
  `log_id` int(11) NOT NULL,
  `time_in` date NOT NULL,
  `time_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_account`
--
ALTER TABLE `tbl_admin_account`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD PRIMARY KEY (`public_feed_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `tbl_employee_account`
--
ALTER TABLE `tbl_employee_account`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `tbl_inquiries`
--
ALTER TABLE `tbl_inquiries`
  ADD PRIMARY KEY (`inquiry_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `tbl_recording`
--
ALTER TABLE `tbl_recording`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `tbl_rfid`
--
ALTER TABLE `tbl_rfid`
  ADD PRIMARY KEY (`employee_rfid`);

--
-- Indexes for table `tbl_time_log`
--
ALTER TABLE `tbl_time_log`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_account`
--
ALTER TABLE `tbl_admin_account`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  MODIFY `public_feed_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tbl_employee_account`
--
ALTER TABLE `tbl_employee_account`
  MODIFY `employee_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000004;

--
-- AUTO_INCREMENT for table `tbl_inquiries`
--
ALTER TABLE `tbl_inquiries`
  MODIFY `inquiry_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100004;

--
-- AUTO_INCREMENT for table `tbl_recording`
--
ALTER TABLE `tbl_recording`
  MODIFY `record_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rfid`
--
ALTER TABLE `tbl_rfid`
  MODIFY `employee_rfid` int(125) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_time_log`
--
ALTER TABLE `tbl_time_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD CONSTRAINT `tbl_announcement_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `tbl_admin_account` (`admin_id`);

--
-- Constraints for table `tbl_inquiries`
--
ALTER TABLE `tbl_inquiries`
  ADD CONSTRAINT `tbl_inquiries_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_employee_account` (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
