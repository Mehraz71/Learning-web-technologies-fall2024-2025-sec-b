-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 05:10 PM
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
-- Database: `brta`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_tokens`
--

CREATE TABLE `accepted_tokens` (
  `id` int(11) NOT NULL,
  `permit_type` varchar(255) NOT NULL,
  `reg_number` varchar(255) NOT NULL,
  `chassis_number` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `license_number` varchar(255) NOT NULL,
  `permit_file` varchar(255) NOT NULL,
  `inspection_certificate` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accepted_tokens`
--

INSERT INTO `accepted_tokens` (`id`, `permit_type`, `reg_number`, `chassis_number`, `full_name`, `license_number`, `permit_file`, `inspection_certificate`, `created_at`) VALUES
(0, 'Bus', '1213', '234234', 'sdasa', '41243', '../uploads/RM-Presentation 1.pptx', '../uploads/RM-Presentation 1.pptx', '2025-01-20 15:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `accepted_vehicle_registration`
--

CREATE TABLE `accepted_vehicle_registration` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `vehicle_class` varchar(255) NOT NULL,
  `series` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accidents`
--

CREATE TABLE `accidents` (
  `accident_date_time` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `vehicle_number` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `photos` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accidents`
--

INSERT INTO `accidents` (`accident_date_time`, `location`, `vehicle_number`, `description`, `contact`, `photos`, `created_at`) VALUES
('2025-05-01 21:09:00', 'Mirpur', '8099', 'car felt into pond', '0987546733', '../uploads/accident_photos/home.png', '2025-01-14 04:42:28'),
('2023-03-03 09:09:00', 'Mirpur', '8099', 'crash', '0987546733', '[\"../uploads/profile.png\"]', '2025-01-20 16:29:33'),
('2025-01-16 21:44:00', 'mirpur', '12', 'hmfjhgjhkhk', '1234567890', '[\"../uploads/profile (B).png\"]', '2025-01-22 15:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `application_fees`
--

CREATE TABLE `application_fees` (
  `id` int(3) NOT NULL,
  `application_name` varchar(50) NOT NULL,
  `application_cost` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application_fees`
--

INSERT INTO `application_fees` (`id`, `application_name`, `application_cost`) VALUES
(8, 'Driving License Application', 7500),
(9, 'Vehicle Registration', 25000),
(10, 'Road Permit Application', 5000),
(11, 'Tax Token Renewal', 4000),
(12, 'License Renewal', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_bookings`
--

CREATE TABLE `appointment_bookings` (
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `appointment_time` varchar(50) NOT NULL,
  `instructor` varchar(100) NOT NULL,
  `course_type` enum('basic','advance') NOT NULL,
  `location` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_bookings`
--

INSERT INTO `appointment_bookings` (`name`, `dob`, `gender`, `phone`, `email`, `address`, `appointment_time`, `instructor`, `course_type`, `location`, `nid`, `id`) VALUES
('himel', '1999-05-05', 'male', '0987654321', 'himel@gmail.com', 'BANGLADESH', 'Monday_11_00_1_00', 'Mahim', 'advance', 'Chattogram', '0987543456', 1),
('ania', '2001-03-31', 'female', '0175321732', 'ania@gmail.com', 'BANGLADESH', 'Monday_11_00_1_00', 'Mahim', 'advance', 'Dhaka', '12312444', 2),
('Tabia', '2001-04-04', 'female', '0175321732', 'tabia@gmail.com', 'BANGLADESH', 'Monday_11_00_1_00', 'Rifat', 'advance', 'Dhaka', '726365', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ctgbusfare`
--

CREATE TABLE `ctgbusfare` (
  `id` int(50) NOT NULL,
  `start_point` varchar(255) NOT NULL,
  `end_point` varchar(255) NOT NULL,
  `fare` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ctgbusfare`
--

INSERT INTO `ctgbusfare` (`id`, `start_point`, `end_point`, `fare`) VALUES
(1000, 'GEC', 'Agrabad', 60),
(1003, '2noGate', 'Baddarhat', 20);

-- --------------------------------------------------------

--
-- Table structure for table `dhakacityfare`
--

CREATE TABLE `dhakacityfare` (
  `id` int(50) NOT NULL,
  `start_point` varchar(50) NOT NULL,
  `end_point` varchar(50) NOT NULL,
  `fare` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dhakacityfare`
--

INSERT INTO `dhakacityfare` (`id`, `start_point`, `end_point`, `fare`) VALUES
(2, 'BijoySarani', 'Jatrabari', 90),
(3, 'Mirpur', 'Karwanbajar', 60),
(4, 'Mirpur 10', 'Mirpur 14', 10),
(6, 'Mirpur 10', 'Motijheel', 80),
(7, 'BijoySarani', 'Karwanbajar', 40);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `email`, `feedback`) VALUES
('sazid', 'mehrazalamofficial71@gmail.com', 'sdadfsdfgdsfg'),
('sazid', 'ggff59849@gmail.com', 'bangladesh is high'),
('sazid', 'ggff59849@gmail.com', 'bangladesh is high'),
('alpha', 'alpha@gmail.com', 'Website is nice'),
('raze', 'razekumar@gmail.com', 'Website is nice'),
('bird', 'bird@gmail.com', 'Hello bird'),
('bird', 'bird@gmail.com', 'asdasasdas'),
('BIRD', 'BIRD@GMAIL.COM', 'HELLO BIRD'),
('sazid', 'ggff59849@gmail.com', 'dadsdfdfgdfg'),
('sazid', 'mehrazalamofficial71@gmail.com', 'NICEEEEEEEEEEE');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `license_number` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `area` varchar(255) NOT NULL,
  `violation` varchar(255) NOT NULL,
  `officer_name` varchar(255) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`license_number`, `phone`, `area`, `violation`, `officer_name`, `amount`) VALUES
('DM009235', 4534345, 'gulshan', 'No Helmet', 'Karim', 2000),
('DM009235', 99999999, 'mirpur10', 'Red Light Violation, No Helmet, Wrong Way', 'ZTX', 7000),
('DM009235', 99999999, 'mirpur10', 'Red Light Violation, No Helmet, Wrong Way', 'ZTX', 7000),
('DM009235', 99999999, 'mirpur10', 'Red Light Violation, No Helmet, Wrong Way', 'ZTX', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `intercityfare`
--

CREATE TABLE `intercityfare` (
  `id` int(50) NOT NULL,
  `start_point` varchar(255) NOT NULL,
  `end_point` varchar(255) NOT NULL,
  `fare` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intercityfare`
--

INSERT INTO `intercityfare` (`id`, `start_point`, `end_point`, `fare`) VALUES
(10000, 'DHAKA', 'CHITTAGONG', 2000),
(10003, 'DHAKA', 'SYLHET', 800),
(10004, 'DHAKA', 'KHULNA', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `license_appliers`
--

CREATE TABLE `license_appliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `address` text NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `licensetype` enum('professional','nonprofessional') NOT NULL,
  `nid` varchar(20) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `nidFront` varchar(255) NOT NULL,
  `nidBack` varchar(255) NOT NULL,
  `medicalReport` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved','refused') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `license_appliers`
--

INSERT INTO `license_appliers` (`id`, `name`, `fname`, `dob`, `phone`, `email`, `bloodgroup`, `address`, `gender`, `licensetype`, `nid`, `picture`, `nidFront`, `nidBack`, `medicalReport`, `created_at`, `status`) VALUES
(1, 'Nujhat', 'Nazmul', '2001-05-05', '0175321732', 'nujhat@gmail.com', 'B+', 'BANGLADESH', 'female', 'professional', '12312444', '../uploads/home.png', '../uploads/profile.png', '../uploads/profile.png', '../uploads/profile.png', '2025-01-14 04:05:04', 'approved'),
(2, 'Sowad', 'Nazmul', '2001-05-05', '0987654321', 'sowad@gmail.com', 'A+', 'BANGLADESH', 'male', 'nonprofessional', '12312444', '../uploads/profile.png', '../uploads/profile.png', '../uploads/profile.png', '../uploads/profile.png', '2025-01-14 04:15:25', 'pending'),
(3, 'Taliha', 'hamid', '2003-04-04', '0175321732', 'maliha@gmail.com', 'B+', 'BANGLADESH', 'female', 'professional', '09876545', '../uploads/profile.png', '../uploads/profile.png', '../uploads/profile.png', '../uploads/profile.png', '2025-01-14 09:53:09', 'pending'),
(4, 'Farhan', 'Nafis', '2003-02-22', '9876540982', 'farhan@gmail.com', 'A+', 'BANGLADESH', 'male', 'professional', '0987654567', '../uploads/profile.png', '../uploads/profile.png', '../uploads/profile.png', '../uploads/profile.png', '2025-01-14 19:49:38', 'pending'),
(9, 'Arian', 'Jahangir', '2001-03-04', '0987654346', 'arian@gmail.com', 'A+', 'BANGLADESH', 'male', 'professional', '098765456', '../uploads/profile.png', '../uploads/profile.png', '../uploads/profile.png', '../uploads/profile.png', '2025-01-17 11:06:17', 'pending'),
(10, 'Sameer', 'Wahab', '2001-02-02', '0175321732', 'sameer@gmail.com', 'B-', 'BANGLADESH', 'male', 'nonprofessional', '0987654', '../uploads/profile.png', '../uploads/profile.png', '../uploads/profile.png', '../uploads/profile.png', '2025-01-20 18:45:10', 'pending'),
(11, '', '', '0000-00-00', '', 'nisrat@gmai.com', '', '', '', '', '', '', '', '', '', '2025-01-20 18:49:37', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `serial` int(3) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `news_content` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`serial`, `news_title`, `news_content`) VALUES
(7, 'BRTA Launches Online Driving License Application S', 'The Bangladesh Road Transport Authority (BRTA) has introduced an online service for driving license applications. Applicants can now apply, upload doc'),
(8, 'BRTA Organizes Road Safety Awareness Campaign', 'BRTA conducted a week-long road safety awareness campaign across major cities. The campaign emphasized safe driving practices, helmet use for bikers, '),
(9, 'Electronic Toll Collection System Introduced by BR', 'BRTA has launched an electronic toll collection (ETC) system at key toll plazas nationwide. The new system enables contactless toll payments, reducing'),
(10, 'check', 'checking news post'),
(11, 'asdasda', 'asdasdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `not_in_useusers`
--

CREATE TABLE `not_in_useusers` (
  `userid` bigint(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `not_in_useusers`
--

INSERT INTO `not_in_useusers` (`userid`, `username`, `email`, `password`, `phone`, `address`, `usertype`) VALUES
(1000, 'admin', 'admin', 'root', 0, '##', 'admin'),
(1004, 'sazid', 'mehrazalamofficial71@gmail.com', '$2y$10$RQuaygJHlxOVeNrDF5IeseWoxhTgnMlMhO/MRdWUP1OzbnB59rRx2', 1920213750, 'Road5', 'user'),
(1008, 'Jack', 'nuka4424@gmail.com', '$2y$10$2cDrABXUcahGqe6g0P20Ae/fkhXeKXp4v5jitPsJyAvVyN5417SyS', 1920213750, 'Road5', 'admin'),
(1009, 'alamin', 'ggff59849@gmail.com', '$2y$10$a2fXHUVWEabUV9RjA3P7XOAd.UVvpG9YI/qnXiIxiZ9ygFYRRb9Ki', 1920213750, 'Road5', 'admin'),
(1010, 'sazid', 'mehrazofficial71@gmail.com', '$2y$10$F5pzvcCF9WNhhYOdgEQZouDKiA.ZR4xXW8CRALRERLBQ2kXDLmdqe', 1920213750, 'Road5', 'user'),
(1012, 'user', 'user@gmail.com', '$2y$10$H8RGhfQmSPcLIQY9h1UdDuAq1ZGXiOLo1PV0iro2lWwxVXmD8y1Vq', 1920213750, 'Road5', 'user'),
(1013, 'sazid', 'mrab4580@gmail.com', '$2y$10$B2kkEmWR1eP8hlzQDHRqXeV0dr4RG4IhSHfQGKazrPVkUcK/P7wdm', 1920213750, 'Road5', 'user'),
(1014, 'pepe', 'pepe@gmail.com', '$2y$10$PfIPn7W/zYGuy9rzyF1BbuLwY4fgbXMHH6cssxsw09LJSA221OdAm', 1920213750, 'Road5', 'user'),
(1015, 'alpha', 'alpha@gmail.com', '$2y$10$CZh/yhVBSh7t3eXGXEZJQeHAlyv7oZ6BU2JL/St5RpDncII5D60ya', 1920213750, 'Road5', 'user'),
(1016, 'opu', 'ashrafulislamopu20@gmail.com', '$2y$10$yPFMwdj4/0.ODzBxz5PlzuXmZCzB1k4zVZjzy9toLJiI/X8KPtI/O', 1956376356, 'Road5', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `ownership_transfer`
--

CREATE TABLE `ownership_transfer` (
  `id` int(11) NOT NULL,
  `first_owner_name` varchar(255) DEFAULT NULL,
  `first_owner_fname` varchar(255) DEFAULT NULL,
  `first_owner_dob` date DEFAULT NULL,
  `first_owner_address` text DEFAULT NULL,
  `first_owner_phone` varchar(15) DEFAULT NULL,
  `first_owner_nid` varchar(20) DEFAULT NULL,
  `first_owner_photo` varchar(255) DEFAULT NULL,
  `second_owner_name` varchar(255) DEFAULT NULL,
  `second_owner_fname` varchar(255) DEFAULT NULL,
  `second_owner_dob` date DEFAULT NULL,
  `second_owner_email` varchar(255) DEFAULT NULL,
  `second_owner_address` text DEFAULT NULL,
  `second_owner_phone` varchar(15) DEFAULT NULL,
  `second_owner_nid` varchar(20) DEFAULT NULL,
  `second_owner_photo` varchar(255) DEFAULT NULL,
  `vehicle_registration` varchar(50) DEFAULT NULL,
  `vehicle_tax_token` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ownership_transfer`
--

INSERT INTO `ownership_transfer` (`id`, `first_owner_name`, `first_owner_fname`, `first_owner_dob`, `first_owner_address`, `first_owner_phone`, `first_owner_nid`, `first_owner_photo`, `second_owner_name`, `second_owner_fname`, `second_owner_dob`, `second_owner_email`, `second_owner_address`, `second_owner_phone`, `second_owner_nid`, `second_owner_photo`, `vehicle_registration`, `vehicle_tax_token`, `status`) VALUES
(4, 'Alice Johnson', 'ABC', '2025-01-09', '123 Maple Lane', '0192837465', '1928374650912', '../ownerspic/1st_profile.png', 'Opu', 'Mr.Karim', '2019-01-02', 'opu@gmail.com', 'Gulshan 2', '0120122123', '90876545', '../ownerspic/2nd_profile (B).png', 'LMN9101', '3452175', 'pending'),
(5, 'Mehraz Alam', 'M.Alam', '2025-01-01', 'Road5', '0192021375', '1928374650912', '../ownerspic/profile.png', 'Kalam', 'Mr.Karim', '2025-01-07', 'kere@gmail.com', 'Road5', '0192021375', '345565756766', '../ownerspic/profile (B).png', 'ABC1234', '3452175', 'rejected'),
(6, 'jack', 'jackbap', '2025-01-12', 'full street address', '11111111111', '1928374650912', NULL, 'gorge', 'gorgebap', '2025-01-14', 'me@mydomain.com', 'full street address', '22222222222', '90876545', NULL, 'LMN9101', '123332', 'pending'),
(7, 'my first name', 'my first name', '2025-01-09', 'full street address', '11111111111', '1928374650912', NULL, 'karim', 'my first name', '2025-01-21', 'me@mydomain.com', 'full street address', '22222222222', '3455657', NULL, 'LMN9101', '3452175', 'pending'),
(8, 'my first name', 'my first name', '2025-01-09', 'full street address', '11111111111', '1928374650912', NULL, 'karim', 'my first name', '2025-01-21', 'me@mydomain.com', 'full street address', '22222222222', '3455657', NULL, 'LMN9101', '3452175', 'pending'),
(9, 'my first name', 'my first name', '2025-01-09', 'full street address', '11111111111', '1928374650912', NULL, 'karim', 'my first name', '2025-01-21', 'me@mydomain.com', 'full street address', '22222222222', '3455657', NULL, 'LMN9101', '3452175', 'pending'),
(10, 'Mehraz Alam', 'MAlam', '2025-01-16', 'Road5', '01920213750', '23444321', NULL, 'Mehraz Alam', 'Malam', '2025-01-09', 'opu@gmail.com', 'Road5', '01920213750', '345565756766', NULL, 'LMN9101', '123332', 'pending'),
(11, 'Mehraz Alam', 'MAlam', '2025-01-16', 'Road5', '01920213750', '23444321', 'phpE306.tmp', 'Mehraz Alam', 'Malam', '2025-01-09', 'opu@gmail.com', 'Road5', '01920213750', '345565756766', 'phpE307.tmp', 'LMN9101', '123332', 'pending'),
(12, 'Mehraz Alam', 'MAlam', '2025-01-16', 'Road5', '55555555555', '23444321', '../ownerspic/profile (B).png', 'Mehraz Alam', 'Malam', '2025-01-09', 'opu@gmail.com', 'Road5', '01920213750', '345565756766', '../ownerspic/profile.png', 'LMN9101', '123332', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `mobile_service` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `application_id`, `payment_method`, `bank_name`, `mobile_service`, `transaction_id`, `created_at`) VALUES
(3, 1, 'Bank', 'BRAC Bank', '', 'TXN_678e6e3946093', '2025-01-20 15:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `permit_appliers`
--

CREATE TABLE `permit_appliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `vehicletype` enum('private','commercial','public') NOT NULL,
  `reg_num` varchar(50) NOT NULL,
  `start_point` varchar(255) NOT NULL,
  `end_point` varchar(255) NOT NULL,
  `vehicleRegDoc` varchar(255) NOT NULL,
  `insuranceCert` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved','refused') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permit_appliers`
--

INSERT INTO `permit_appliers` (`id`, `name`, `nid`, `email`, `phone`, `address`, `vehicletype`, `reg_num`, `start_point`, `end_point`, `vehicleRegDoc`, `insuranceCert`, `created_at`, `status`) VALUES
(1, 'Saima', '8374619', 'saima@gmail.com', '0987654321', 'BANGLADESH', '', '809', 'sylhet', 'dhaka', '../uploads/home.png', '../uploads/home.png', '2025-01-14 04:24:52', 'pending'),
(2, 'Tabia ', '12312444', 'tabia@gmail.com', '0987764334', 'BANGLADESH', '', '4567', 'dhaka', 'ctg', '../uploads/home.png', '../uploads/home.png', '2025-01-15 06:33:30', 'pending'),
(3, 'Tabia ', '12312444', 'tabia@gmail.com', '0987764334', 'BANGLADESH', '', '4567', 'dhaka', 'ctg', '../uploads/home.png', '../uploads/home.png', '2025-01-15 06:34:24', 'pending'),
(4, 'farah', '098765456', 'farah@gmail.com', '0175321732', 'BANGLADESH', '', '9867', 'dhaka', 'ctg', '../uploads/profile.png', '../uploads/profile.png', '2025-01-15 09:20:43', 'pending'),
(5, 'zakir', '098765467', 'zakir@gmail.com', '0175321732', 'BANGLADESH', '', '4567', 'sylhet', 'ctg', 'profile.png', 'profile.png', '2025-01-18 22:03:37', 'pending'),
(6, 'Talha', '09876543', 'talha@gmail.com', '0175321732', 'BANGLADESH', '', '807', 'dhaka', 'ctg', 'profile.png', 'profile.png', '2025-01-19 03:18:48', 'pending'),
(7, 'Samiha', '52718987', 'samiha@gmail.com', '0987654567', 'BANGLADESH', '', '9867', 'sylhet', 'ctg', 'profile.png', 'profile.png', '2025-01-19 04:19:18', 'pending'),
(8, 'Samiha', '52718987', 'samiha@gmail.com', '0987654567', 'BANGLADESH', '', '9867', 'sylhet', 'ctg', 'profile.png', 'profile.png', '2025-01-19 04:22:42', 'pending'),
(9, 'Zaima', '8374619', 'zaima@gmail.com', '0175321732', 'BANGLADESH', '', '9867', 'dhaka', 'sylhet', 'profile.png', 'profile.png', '2025-01-19 04:23:41', 'pending'),
(10, 'nujhat', '987654345', 'nujhar@gmail.com', '9876567888', 'dhaka', '', '8789', 'Mirpur 10', 'Mirpur 14', 'Picture1.png', 'Picture2.png', '2025-01-21 06:02:22', 'pending'),
(11, 'nujhat', '987654345', 'nujhar@gmail.com', '9876567888', 'dhaka', '', '8789', 'Mirpur 10', 'Mirpur 14', 'Picture1.png', 'Picture2.png', '2025-01-21 06:02:22', 'pending'),
(12, 'nujhat', '987654345', 'nujhar@gmail.com', '9876567888', 'dhaka', '', '8789', 'Mirpur 10', 'Mirpur 14', 'Picture1.png', 'Picture2.png', '2025-01-21 06:02:22', 'pending'),
(13, 'nujhat', '987654345', 'nujhar@gmail.com', '9876567888', 'dhaka', '', '8789', 'Mirpur 10', 'Mirpur 14', 'Picture1.png', 'Picture2.png', '2025-01-21 06:02:23', 'pending'),
(14, 'nujhat', '987654345', 'nujhar@gmail.com', '9876567888', 'dhaka', '', '8789', 'Mirpur 10', 'Mirpur 14', 'Picture1.png', 'Picture2.png', '2025-01-21 06:02:23', 'pending'),
(15, 'nujhat', '987654345', 'nujhar@gmail.com', '9876567888', 'dhaka', '', '8789', 'Mirpur 10', 'Mirpur 14', 'Picture1.png', 'Picture2.png', '2025-01-21 06:02:23', 'pending'),
(16, 'nujhat', '987654345', 'nujhar@gmail.com', '9876567888', 'dhaka', '', '8789', 'Mirpur 10', 'Mirpur 14', 'Picture1.png', 'Picture2.png', '2025-01-21 06:02:23', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `serial` int(2) NOT NULL,
  `rules` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`serial`, `rules`) VALUES
(1, 'Applicants must be at least 18 years old for a non-professional driving license and 20 years old for a professional driving license.'),
(3, 'All motor vehicles must be registered with BRTA before being driven on public roads.'),
(4, 'Driving without a valid license, not wearing a seatbelt, or using a mobile phone while driving may result in fines');

-- --------------------------------------------------------

--
-- Table structure for table `tax_tokens`
--

CREATE TABLE `tax_tokens` (
  `id` int(11) NOT NULL,
  `permit_type` varchar(255) NOT NULL,
  `reg_number` varchar(255) NOT NULL,
  `chassis_number` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `license_number` varchar(255) NOT NULL,
  `permit_file` varchar(255) NOT NULL,
  `inspection_certificate` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tax_tokens`
--

INSERT INTO `tax_tokens` (`id`, `permit_type`, `reg_number`, `chassis_number`, `full_name`, `license_number`, `permit_file`, `inspection_certificate`, `created_at`) VALUES
(1, 'Bus', '1213', '234234', 'sdasa', '41243', '../uploads/RM-Presentation 1.pptx', '../uploads/RM-Presentation 1.pptx', '2025-01-20 15:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `phone` int(12) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `username`, `phone`, `dob`, `email`, `password`) VALUES
('Mehraz', 'Alam', 'admin', 1920213750, '2025-01-10', 'ggff59849@gmail.com', '$2y$10$69lM.bEJW6ueB3tFk.YnH.LtHZSRmpGAwBkhcZYqA2D6cmObe8.z.'),
('Arman Hossen', 'Tipu', 'Arman0010', 1789920840, '1996-03-25', 'ai0632891@gmail.com', '$2y$10$/jjf6Li9hBxDaVpY25LNEOywZc74n6FxfV/o2cPPXj7DalZG65p6W'),
('Ashraful Islam', 'Opu', 'ggwp123', 1789920840, '2025-01-09', 'ai0632891@gmail.com', '$2y$10$EXn1R4QhzWBChl152sBjZeMfLHFHufqAwEEVqq7xJpmyf4R7M6lo6'),
('Ashraful Islam', 'Opu', 'Opu0010', 1969053978, '2002-02-08', 'ashrafulislam@gmail.com', '$2y$10$4blaxCspWD1l2Zx029nGM.wMziRI8ue/EhRXWI7pbgQvKhVwZcqHS'),
('Tanvir Arafat', 'Sahil', 'Sahil123', 1920213750, '2025-01-10', 'qwdqdiiuq1861@gmail.com', '$2y$10$uims8gf2ayAnb3llF.mlSOGTukum5XmPxQYjlIp7teW34WHE8jakO');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_registration`
--

CREATE TABLE `vehicle_registration` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `vehicle_class` varchar(255) NOT NULL,
  `series` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_registration`
--

INSERT INTO `vehicle_registration` (`id`, `city`, `vehicle_class`, `series`, `vehicle_number`, `created_at`) VALUES
(1, 'DHAKA', 'A', '123', '123', '2025-01-22 15:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_registration_not_in_use`
--

CREATE TABLE `vehicle_registration_not_in_use` (
  `id` int(11) NOT NULL,
  `vehicle_registration_number` varchar(20) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_address` varchar(255) NOT NULL,
  `owner_phone` varchar(15) NOT NULL,
  `owner_nid` varchar(20) NOT NULL,
  `owner_image` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_registration_not_in_use`
--

INSERT INTO `vehicle_registration_not_in_use` (`id`, `vehicle_registration_number`, `owner_name`, `owner_address`, `owner_phone`, `owner_nid`, `owner_image`, `registration_date`) VALUES
(1, 'ABC1234', 'Mehraz Alam', 'Road5', '0192021375', '3455657', '../ownerspic/2nd_profile.png', '2025-01-04 08:36:33'),
(2, 'XYZ5678', 'Jane Doe', '789 Oak Avenue', '0987654321', '9876543210987', '/path/to/ownerspic/jane_doe.jpg', '2025-01-04 08:36:33'),
(3, 'LMN9101', 'Alice Johnson', '123 Maple Lane', '0192837465', '1928374650912', '/path/to/ownerspic/alice_johnson.jpg', '2025-01-04 08:36:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_fees`
--
ALTER TABLE `application_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_bookings`
--
ALTER TABLE `appointment_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctgbusfare`
--
ALTER TABLE `ctgbusfare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dhakacityfare`
--
ALTER TABLE `dhakacityfare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intercityfare`
--
ALTER TABLE `intercityfare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `license_appliers`
--
ALTER TABLE `license_appliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `not_in_useusers`
--
ALTER TABLE `not_in_useusers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `ownership_transfer`
--
ALTER TABLE `ownership_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_id` (`transaction_id`),
  ADD KEY `application_id` (`application_id`);

--
-- Indexes for table `permit_appliers`
--
ALTER TABLE `permit_appliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `tax_tokens`
--
ALTER TABLE `tax_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `vehicle_registration`
--
ALTER TABLE `vehicle_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_registration_not_in_use`
--
ALTER TABLE `vehicle_registration_not_in_use`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_fees`
--
ALTER TABLE `application_fees`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `appointment_bookings`
--
ALTER TABLE `appointment_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ctgbusfare`
--
ALTER TABLE `ctgbusfare`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `dhakacityfare`
--
ALTER TABLE `dhakacityfare`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `intercityfare`
--
ALTER TABLE `intercityfare`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;

--
-- AUTO_INCREMENT for table `license_appliers`
--
ALTER TABLE `license_appliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `serial` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `not_in_useusers`
--
ALTER TABLE `not_in_useusers`
  MODIFY `userid` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT for table `ownership_transfer`
--
ALTER TABLE `ownership_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permit_appliers`
--
ALTER TABLE `permit_appliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `serial` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tax_tokens`
--
ALTER TABLE `tax_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_registration`
--
ALTER TABLE `vehicle_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_registration_not_in_use`
--
ALTER TABLE `vehicle_registration_not_in_use`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`application_id`) REFERENCES `tax_tokens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
