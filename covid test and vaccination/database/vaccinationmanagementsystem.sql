-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 08:49 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccinationmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpanel`
--

CREATE TABLE `adminpanel` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`Username`, `Password`) VALUES
('abdullah', '12345'),
('sarim', '9890');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `ID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `Username`, `Password`) VALUES
(1, 'Sarim Abid', 'sarim123'),
(2, 'Abdullah Anwer', 'abdullah123');

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetail`
--

CREATE TABLE `bookingdetail` (
  `ID` int(11) NOT NULL,
  `child_name` varchar(50) DEFAULT NULL,
  `child_age` int(25) DEFAULT NULL,
  `child_disease` varchar(255) DEFAULT NULL,
  `contagious` enum('Yes','No','Not Sure') DEFAULT NULL,
  `vacc_name` varchar(50) DEFAULT NULL,
  `parent_guardian` varchar(50) DEFAULT NULL,
  `parent_email` varchar(50) DEFAULT NULL,
  `parent_contact` varchar(50) DEFAULT NULL,
  `hospital` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingdetail`
--

INSERT INTO `bookingdetail` (`ID`, `child_name`, `child_age`, `child_disease`, `contagious`, `vacc_name`, `parent_guardian`, `parent_email`, `parent_contact`, `hospital`, `date`, `time`) VALUES
(1, 'Hashir', 12, 'Measles', 'No', 'DTaP', 'Fahim', 'fahim@email.com', '0321-4233443', 'Rab Medical', '2023-02-12', '00:00:00'),
(2, 'Haris Jalal', 2, 'Rabies', 'Yes', 'Safeguard', 'Jalal Junaid', 'jalaljunaid@email.com', '021 3345432', 'Jinnah Hospital', '2023-01-06', '00:00:00'),
(3, 'abdullah', 3, 'no', 'No', 'astra', 'nadeem', 'nadeem@gmail.com', '0456', 'Ashfaq Memorial Hospital', '2022-12-09', '00:00:00'),
(4, 'Rabbit', 22, 'Rabies', 'No', 'Immunix', 'Ruby', 'rubytr@gmail.com', '+923343699921', 'Jinnah Hospital', '2023-03-02', '16:28:00'),
(5, 'Rab', 22, 'Rabies', 'Yes', 'Immunix', 'Rub', 'rubytr@gmail.com', '+923343699921', 'Jinnah Hospital', '2023-03-02', '16:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parent_guardian` varchar(100) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `name`, `parent_guardian`, `age`) VALUES
(2, 'Abdullah', 'Anwer', 13),
(3, 'Talha', 'Junaid', 12);

-- --------------------------------------------------------

--
-- Table structure for table `contact-panel`
--

CREATE TABLE `contact-panel` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Father'sname` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact-panel`
--

INSERT INTO `contact-panel` (`id`, `Name`, `Father'sname`, `Contact`, `Email`) VALUES
(1, 'Sarim Abid', 'Muhammad Abid', '0334 3699921', 'sarim6x@gmail.com'),
(2, 'Sarim Abid', 'Muhammad Abid', '0334 3699921', 'sarim6x@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dateofvaccination`
--

CREATE TABLE `dateofvaccination` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dateofvaccination`
--

INSERT INTO `dateofvaccination` (`ID`, `name`, `date`) VALUES
(1, 'Polio', '05-February-2023'),
(2, 'Smallpox', '10-February-2023');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_panel`
--

CREATE TABLE `hospital_panel` (
  `ID` int(11) NOT NULL,
  `Hospital Name` varchar(50) NOT NULL,
  `Hospital Email` varchar(50) NOT NULL,
  `Hospital Address` varchar(50) NOT NULL,
  `Hospital No.` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_panel`
--

INSERT INTO `hospital_panel` (`ID`, `Hospital Name`, `Hospital Email`, `Hospital Address`, `Hospital No.`) VALUES
(1, 'JK Hospital', 'sarim6x@gmail.com', 'B-1, Shaheen Hieghts, Block 7, Gulshan-e-Iqbal', '+923343699921'),
(2, 'fffk', 'dklg@gmail.com', 'dkogjk', 'mkdg'),
(3, 'fffk', 'dklg@gmail.com', 'dkogjk', 'mkdg'),
(4, 'a', 'dg@gmail.com', 'vd', 'cb'),
(5, 'fffk', 'dklg@gmail.com', 'dkogjk', 'mkdg'),
(6, 'Pencil Clinic', 'penclinic@gmail.com', 'B-1, Shaheen Hieghts, Block 7, Gulshan-e-Iqbal', '+923343699921');

-- --------------------------------------------------------

--
-- Table structure for table `listofhospital`
--

CREATE TABLE `listofhospital` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listofhospital`
--

INSERT INTO `listofhospital` (`ID`, `name`, `email`, `address`, `zip_code`, `contact`) VALUES
(1, 'Danial Clinic', 'danclinic@email.com', 'B-1, Shaheen Hieghts, Block 7, Gulshan-e-Iqbal', '', '021-3345432'),
(3, 'Rab Medical', 'rabmedical@email.com', '5 - B/1 Sardar Ali Sabri Rd, Block 2 Gulshan-e-Iqbal, Karachi, Karachi City, Sindh 75300', '', '(021) 34980944'),
(4, 'IHS', 'ihs@gmail.com', 'f-10/1, Plot No. 2 Khursheed Market, Street 30, Islamabad', '', '(051) 2298217'),
(5, 'JK Hospital', 'jk@gmail.com', 'B-1, Shaheen Hieghts, Block 7, Gulshan-e-Iqbal', '', '+923343699921'),
(6, 'Radish Brown Hospital', 'radbrn@gmail.com', 'B-1, Shaheen Hieghts, Block 7, Gulshan-e-Iqbal', '', '+923343699921'),
(7, 'LMN Hospital', 'lmn@gmail.com', 'B-1, Shaheen Hieghts, Block 7, Gulshan-e-Iqbal', '75300', '+923343699921'),
(8, 'Newest Hospital', 'sarim6x@gmail.com', 'B-1, Shaheen Hieghts, Block 7, Gulshan-e-Iqbal', '23433', '0332 1343244'),
(9, 'Newest Hospital', 'sarim6x@gmail.com', 'B-1, Shaheen Hieghts, Block 7, Gulshan-e-Iqbal', '23433', '0332 1343244'),
(10, 'Newest Hospital', 'sarim6x@gmail.com', 'B-1, Shaheen Hieghts, Block 7, Gulshan-e-Iqbal', '23433', '0332 1343244');

-- --------------------------------------------------------

--
-- Table structure for table `listofvaccine`
--

CREATE TABLE `listofvaccine` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `availability` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listofvaccine`
--

INSERT INTO `listofvaccine` (`ID`, `name`, `availability`) VALUES
(1, 'varicella', 'Available'),
(2, 'DTaP', 'Available'),
(3, 'MMR', 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `parent_panel`
--

CREATE TABLE `parent_panel` (
  `ID` int(50) NOT NULL,
  `Child's Name` varchar(50) NOT NULL,
  `Child's Age` int(50) NOT NULL,
  `Child's Disease` varchar(50) NOT NULL,
  `Is It Contagious?` enum('Yes','No','Not Sure') NOT NULL,
  `Parent's Name` varchar(50) NOT NULL,
  `Parent's Email` varchar(50) NOT NULL,
  `Date of Vaccination` datetime NOT NULL,
  `Hospital` varchar(50) NOT NULL,
  `Parent's Contact No.` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_panel`
--

INSERT INTO `parent_panel` (`ID`, `Child's Name`, `Child's Age`, `Child's Disease`, `Is It Contagious?`, `Parent's Name`, `Parent's Email`, `Date of Vaccination`, `Hospital`, `Parent's Contact No.`) VALUES
(1, 'Sarim Abid', 21, 'something', 'No', 'Sarim Ab', 'sarim6x@gmail.com', '2022-12-22 00:00:00', 'Ashfaq Memorial Hospital', '+923343699921'),
(2, 'adsd', 2, 'fdf', 'No', 'd', 'dg@gmal.com', '2022-12-22 00:00:00', 'Khaliq Denar Hospital', '034567'),
(3, 'sarim', -2, 'fdf', 'No', 'xfd', 'dg@gmal.com', '2022-12-23 00:00:00', 'Khaliq Denar Hospital', '034567'),
(4, 'sarim', 2, 'fdf', 'Yes', 'xfd', 'dg@gmal.com', '2022-12-13 00:00:00', 'Abbasi Shaheed Hospital', 'xx'),
(7, 'sarim', 7, 'fdf', 'No', 'ahmed', 'ahmed@gmail.cpm', '2022-12-21 00:00:00', 'Khaliq Denar Hospital', '0456'),
(11, 'sarim', 2, 'no', 'Yes', 'ahmed', 'ahmed@gmail.cpm', '2022-12-28 00:00:00', 'Liaqat National Hospital', '034567');

-- --------------------------------------------------------

--
-- Table structure for table `reportofvaccination`
--

CREATE TABLE `reportofvaccination` (
  `ID` int(11) NOT NULL,
  `child_name` varchar(100) NOT NULL,
  `Vacc_name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reportofvaccination`
--

INSERT INTO `reportofvaccination` (`ID`, `child_name`, `Vacc_name`, `date`) VALUES
(1, 'Ahmed', 'Varicella', '20-september-2022'),
(3, 'Sarim Abid', 'Immunix', '2022-12-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookingdetail`
--
ALTER TABLE `bookingdetail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact-panel`
--
ALTER TABLE `contact-panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dateofvaccination`
--
ALTER TABLE `dateofvaccination`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hospital_panel`
--
ALTER TABLE `hospital_panel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `listofhospital`
--
ALTER TABLE `listofhospital`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `listofvaccine`
--
ALTER TABLE `listofvaccine`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `parent_panel`
--
ALTER TABLE `parent_panel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reportofvaccination`
--
ALTER TABLE `reportofvaccination`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookingdetail`
--
ALTER TABLE `bookingdetail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact-panel`
--
ALTER TABLE `contact-panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dateofvaccination`
--
ALTER TABLE `dateofvaccination`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital_panel`
--
ALTER TABLE `hospital_panel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `listofhospital`
--
ALTER TABLE `listofhospital`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `listofvaccine`
--
ALTER TABLE `listofvaccine`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parent_panel`
--
ALTER TABLE `parent_panel`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reportofvaccination`
--
ALTER TABLE `reportofvaccination`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
