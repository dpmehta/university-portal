-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 01:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid1` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid1`, `username`, `password`) VALUES
(1, 'khushidev', 7923);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseid` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `no_of_seats` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `no_of_faculties` int(11) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `course_name`, `no_of_seats`, `course_code`, `no_of_faculties`, `department`) VALUES
(1, 'Civil Engineering', 95, '010478', 12, 'BE/BTech'),
(4, 'Diploma IT', 120, '014543', 12, 'BE/BTech'),
(5, 'Accounting', 30, '011315', 10, 'B.Com'),
(6, 'chemical engineering', 90, '014542', 6, 'BE/BTech'),
(7, 'information and communication technology', 100, '018563', 13, 'BE/BTech'),
(8, 'computer engineering', 400, '014546', 20, 'BE/BTech'),
(9, 'hr management', 200, '024546', 8, 'BBA'),
(10, 'biology', 60, '034546', 6, 'B.Sc');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'BE/BTEch'),
(2, 'B.Com'),
(5, 'BCA'),
(6, 'BBA'),
(9, 'B.Sc'),
(10, 'B.Pharm');

-- --------------------------------------------------------

--
-- Table structure for table `examdetails`
--

CREATE TABLE `examdetails` (
  `examid` int(11) NOT NULL,
  `examSubject` varchar(30) NOT NULL,
  `classNumber` varchar(30) NOT NULL,
  `blockNo` varchar(30) NOT NULL,
  `date_exam` date NOT NULL,
  `examType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examdetails`
--

INSERT INTO `examdetails` (`examid`, `examSubject`, `classNumber`, `blockNo`, `date_exam`, `examType`) VALUES
(1, 'Operating System', 'MA410', '25', '2023-05-11', 'Final exam - theory'),
(2, 'IWT', 'MA115', '13', '2023-05-08', 'Project demonstration'),
(5, 'Computer network', 'MA305', '20', '2023-05-11', 'Final exam - theory');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facultyid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `phone_num` bigint(10) NOT NULL,
  `teach_exp` varchar(255) NOT NULL,
  `date_dob` date NOT NULL,
  `salary` double NOT NULL,
  `branch` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`facultyid`, `name`, `gender`, `position`, `phone_num`, `teach_exp`, `date_dob`, `salary`, `branch`, `email_id`) VALUES
(1, 'Prof Parmar', 'male', 'Professor', 8896589974, 'PhD', '1970-02-05', 250000, 'information and communication technology', 'parmar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(11) NOT NULL,
  `studemail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `studemail`, `password`) VALUES
(8, 'kk@gmail.com', '111'),
(14, 'abc@gmail.com', '123'),
(18, 'khushi.pandya114643@marwadiuniversity.ac.in', '7903'),
(21, 'shreya@gmail.com', '2222'),
(22, 'rudra@gmail', '1111'),
(24, 'rudra@gmail.com', '11111'),
(25, 'nikhil@gmail.com', '22222'),
(26, 'kunal@gmail.com', '11235');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `grno` int(6) NOT NULL,
  `sem` int(1) NOT NULL,
  `spi` float NOT NULL,
  `remarks` varchar(4) NOT NULL,
  `backlog` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`grno`, `sem`, `spi`, `remarks`, `backlog`) VALUES
(111111, 2, 9, 'pass', 0),
(121111, 3, 8.5, 'pass', 0),
(121113, 3, 8, 'pass', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(4) NOT NULL,
  `studname` varchar(50) NOT NULL,
  `studphno` int(10) NOT NULL,
  `studgen` varchar(10) NOT NULL,
  `studbdate` date NOT NULL,
  `studcourse` varchar(50) NOT NULL,
  `academic` int(5) NOT NULL DEFAULT 2023,
  `studemail` varchar(50) NOT NULL,
  `grno` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studname`, `studphno`, `studgen`, `studbdate`, `studcourse`, `academic`, `studemail`, `grno`) VALUES
(1, 'yash pandya', 2147483647, 'male', '2003-09-12', 'chemical engineering', 2023, 'yash@gmail.com', 111111),
(2, 'dev mehta', 2147483647, 'male', '2003-06-23', 'hr management', 2023, 'dev@gmail.com', 121111),
(3, 'princy patel', 2147483647, 'female', '2004-11-04', 'B.com', 2023, 'princy@gmail.com', 131113),
(4, 'khushi pandya', 2147483647, 'female', '2003-09-07', 'designing', 2023, 'kk@gmail.com', 141114),
(5, 'janvi pandya', 2147483647, 'female', '2000-03-31', 'chemical engineering', 2021, 'janvi@gmail.com', 111112),
(6, 'dhruvi kothari', 2147483647, 'female', '2003-03-25', 'information and communication technology', 2025, 'dhruvi@gmail.com', 151111),
(7, 'charmy mehta', 2147483647, 'female', '2000-12-07', 'Bsc biology', 2021, 'charmy@gmai.com', 161116),
(9, 'yash pandya', 2147483647, 'male', '2004-07-08', 'BCA', 2023, 'yy@gmail.com', 171117),
(10, 'khushali patel', 2147483647, 'female', '2003-07-09', 'B.Pharm', 2023, 'khushali@gmail.com', 181118),
(15, 'rudra joshi', 2147483647, 'male', '2003-06-12', 'diploma cse', 2023, 'rudra@gmail.com', 191119),
(16, 'nikhil jani', 2147483647, 'male', '2004-12-20', 'computer engineering', 2023, 'nikhil@gmail.com', 121113),
(17, 'Kunal Patel', 2147483647, 'male', '2002-07-05', 'Electrical engineering', 2023, 'kunal@gmail.com', 124413);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid1`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `examdetails`
--
ALTER TABLE `examdetails`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`facultyid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`grno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `examdetails`
--
ALTER TABLE `examdetails`
  MODIFY `examid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `facultyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
