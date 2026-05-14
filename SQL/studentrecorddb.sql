-- -- phpMyAdmin SQL Dump
-- -- version 5.2.1
-- -- https://www.phpmyadmin.net/
-- --
-- -- Host: 127.0.0.1
-- -- Generation Time: Sep 16, 2024 at 07:32 PM
-- -- Server version: 10.4.32-MariaDB
-- -- PHP Version: 8.0.30

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";


-- /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
-- /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
-- /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
-- /*!40101 SET NAMES utf8mb4 */;

-- --
-- -- Database: `studentrecorddb`
-- --

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `registration`
-- --

-- CREATE TABLE `registration` (
--   `id` int(11) NOT NULL,
--   `course` varchar(250) NOT NULL,
--   `fname` varchar(250) NOT NULL,
--   `lname` varchar(250) NOT NULL,
--   `gender` varchar(50) NOT NULL,
--   `gname` varchar(250) NOT NULL,
--   `ocp` varchar(50) NOT NULL,
--   `income` varchar(250) NOT NULL,
--   `category` varchar(250) NOT NULL,
--   `pchal` varchar(250) NOT NULL,
--   `nationality` varchar(250) NOT NULL,
--   `mobno` varchar(50) NOT NULL,
--   `emailid` varchar(250) NOT NULL,
--   `country` varchar(50) NOT NULL,
--   `state` varchar(50) NOT NULL,
--   `dist` varchar(50) NOT NULL,
--   `padd` text NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --
-- -- Dumping data for table `registration`
-- --

-- INSERT INTO `registration` (`id`, `course`, `fname`, `lname`, `gender`, `gname`, `ocp`, `income`, `category`, `pchal`, `nationality`, `mobno`, `emailid`, `country`, `state`, `dist`, `padd`) VALUES
-- (29, '32', 'Vatsal', 'Gajera', 'Male', 'Rajeshbhai', 'Bussiness', '700000', 'general', 'No', 'Indian', '9723140922', 'vgajera2005@gmail.com', 'India', 'Gujarat', 'Rajkot', 'Vavdi');

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `subject`
-- --

-- CREATE TABLE `subject` (
--   `subid` int(11) NOT NULL,
--   `cshort` varchar(50) DEFAULT NULL,
--   `cfull` varchar(250) DEFAULT NULL,
--   `sub1` varchar(250) DEFAULT NULL,
--   `sub2` varchar(250) DEFAULT NULL,
--   `sub3` varchar(250) DEFAULT NULL,
--   `sub4` varchar(255) DEFAULT NULL,
--   `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
--   `update_date` varchar(200) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --
-- -- Dumping data for table `subject`
-- --

-- INSERT INTO `subject` (`subid`, `cshort`, `cfull`, `sub1`, `sub2`, `sub3`, `sub4`, `dt_created`, `update_date`) VALUES
-- (15, '32', 'Bachelor of Computer Application', 'C', 'Java', 'Python', 'Web', '2024-09-16 22:47:23', NULL),
-- (16, '33', 'Master of Computer Application', 'A. Python', 'DS', 'ML', 'AI', '2024-09-16 22:48:17', NULL);

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `tbl_course`
-- --

-- CREATE TABLE `tbl_course` (
--   `cid` int(11) NOT NULL,
--   `cshort` varchar(250) DEFAULT NULL,
--   `cfull` varchar(250) DEFAULT NULL,
--   `cdate` varchar(50) DEFAULT NULL,
--   `update_date` varchar(200) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --
-- -- Dumping data for table `tbl_course`
-- --

-- INSERT INTO `tbl_course` (`cid`, `cshort`, `cfull`, `cdate`, `update_date`) VALUES
-- (32, 'BCA', 'Bachelor of Computer Application', '16-09-2024', NULL),
-- (33, 'MCA', 'Master of Computer Application', '16-09-2024', NULL);

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `tbl_login`
-- --

-- CREATE TABLE `tbl_login` (
--   `id` int(11) NOT NULL,
--   `FullName` varchar(255) DEFAULT NULL,
--   `AdminEmail` varchar(255) DEFAULT NULL,
--   `loginid` varchar(250) NOT NULL,
--   `password` text NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --
-- -- Dumping data for table `tbl_login`
-- --

-- INSERT INTO `tbl_login` (`id`, `FullName`, `AdminEmail`, `loginid`, `password`) VALUES
-- (1, 'Vatsal Gajera', 'gajeravatsal12@gmail.com', 'admin', 'admin');

-- --
-- -- Indexes for dumped tables
-- --

-- --
-- -- Indexes for table `registration`
-- --
-- ALTER TABLE `registration`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `subject`
-- --
-- ALTER TABLE `subject`
--   ADD PRIMARY KEY (`subid`);

-- --
-- -- Indexes for table `tbl_course`
-- --
-- ALTER TABLE `tbl_course`
--   ADD PRIMARY KEY (`cid`);

-- --
-- -- Indexes for table `tbl_login`
-- --
-- ALTER TABLE `tbl_login`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- AUTO_INCREMENT for dumped tables
-- --

-- --
-- -- AUTO_INCREMENT for table `registration`
-- --
-- ALTER TABLE `registration`
--   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

-- --
-- -- AUTO_INCREMENT for table `subject`
-- --
-- ALTER TABLE `subject`
--   MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

-- --
-- -- AUTO_INCREMENT for table `tbl_course`
-- --
-- ALTER TABLE `tbl_course`
--   MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

-- --
-- -- AUTO_INCREMENT for table `tbl_login`
-- --
-- ALTER TABLE `tbl_login`
--   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
-- COMMIT;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- Student Management System Database Schema
-- Cleaned for public GitHub repository
-- Database: studentrecorddb

CREATE DATABASE IF NOT EXISTS studentrecorddb;
USE studentrecorddb;

-- --------------------------------------------------------
-- Table: tbl_course
-- Stores course information
-- --------------------------------------------------------
CREATE TABLE tbl_course (
    cid INT NOT NULL AUTO_INCREMENT,
    cshort VARCHAR(250) DEFAULT NULL,
    cfull VARCHAR(250) DEFAULT NULL,
    cdate VARCHAR(50) DEFAULT NULL,
    update_date VARCHAR(200) DEFAULT NULL,
    PRIMARY KEY (cid)
);

-- --------------------------------------------------------
-- Table: subject
-- Stores subjects for each course
-- --------------------------------------------------------
CREATE TABLE subject (
    subid INT NOT NULL AUTO_INCREMENT,
    cshort VARCHAR(50) DEFAULT NULL,
    cfull VARCHAR(250) DEFAULT NULL,
    sub1 VARCHAR(250) DEFAULT NULL,
    sub2 VARCHAR(250) DEFAULT NULL,
    sub3 VARCHAR(250) DEFAULT NULL,
    sub4 VARCHAR(255) DEFAULT NULL,
    dt_created DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    update_date VARCHAR(200) DEFAULT NULL,
    PRIMARY KEY (subid)
);

-- --------------------------------------------------------
-- Table: registration
-- Stores student registration details
-- --------------------------------------------------------
CREATE TABLE registration (
    id INT NOT NULL AUTO_INCREMENT,
    course VARCHAR(250) NOT NULL,
    fname VARCHAR(250) NOT NULL,
    lname VARCHAR(250) NOT NULL,
    gender VARCHAR(50) NOT NULL,
    gname VARCHAR(250) NOT NULL,
    ocp VARCHAR(50) NOT NULL,
    income VARCHAR(250) NOT NULL,
    category VARCHAR(250) NOT NULL,
    pchal VARCHAR(250) NOT NULL,
    nationality VARCHAR(250) NOT NULL,
    mobno VARCHAR(50) NOT NULL,
    emailid VARCHAR(250) NOT NULL,
    country VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
    dist VARCHAR(50) NOT NULL,
    padd TEXT NOT NULL,
    PRIMARY KEY (id)
);

-- --------------------------------------------------------
-- Table: tbl_login
-- Stores admin login credentials
-- --------------------------------------------------------
CREATE TABLE tbl_login (
    id INT NOT NULL AUTO_INCREMENT,
    FullName VARCHAR(255) DEFAULT NULL,
    AdminEmail VARCHAR(255) DEFAULT NULL,
    loginid VARCHAR(250) NOT NULL,
    password TEXT NOT NULL,
    PRIMARY KEY (id)
);

-- --------------------------------------------------------
-- Optional Demo Data
-- --------------------------------------------------------

INSERT INTO tbl_course (cshort, cfull, cdate) VALUES
('BCA', 'Bachelor of Computer Application', '16-09-2024'),
('MCA', 'Master of Computer Application', '16-09-2024');

INSERT INTO subject (cshort, cfull, sub1, sub2, sub3, sub4) VALUES
('BCA', 'Bachelor of Computer Application', 'C', 'Java', 'Python', 'Web Development'),
('MCA', 'Master of Computer Application', 'Advanced Python', 'Data Structures', 'Machine Learning', 'Artificial Intelligence');

INSERT INTO tbl_login (FullName, AdminEmail, loginid, password) VALUES
('Administrator', 'admin@example.com', 'admin', 'admin123');