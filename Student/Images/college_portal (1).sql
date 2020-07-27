-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2018 at 04:53 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_id` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Pin_Code` varchar(50) NOT NULL,
  `Sequrity_question` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  `Image` varchar(300) NOT NULL,
  PRIMARY KEY (`Admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Name`, `DOB`, `Mobile`, `Email`, `Address`, `State`, `City`, `Pin_Code`, `Sequrity_question`, `Answer`, `Image`) VALUES
('18ADMIN01', 'Rizwan', '2018-12-11', '8951775912', 'mdrizwan.r.51294@gmailcom', 'No 297', 'Karnataka', 'Bangalore', '560039', 'No Question', 'No Answer', ''),
('admin', 'Rizwan Khan', '2018-12-04', '8951775912', 'mdrizwan@gmail.com', 'No 237', 'Karnataka', 'Bangalore', '560039', 'In Which City You Born?', 'No Anser ', 'Images/asdasd.jpg'),
('Admin123', 'Rizwan Ali', '2018-12-06', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'asasda', 'Karnataka', 'Bengaluru', '560039', 'In Which City You Born?', 'Bangalore', 'Images/(R)RAZYA.MY.DAUGHTER.a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `User_name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `User_type` varchar(20) NOT NULL,
  PRIMARY KEY (`User_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

DROP TABLE IF EXISTS `login1`;
CREATE TABLE IF NOT EXISTS `login1` (
  `Name` varchar(300) NOT NULL,
  `User_name` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `User_type` varchar(200) NOT NULL,
  `Images` varchar(700) NOT NULL,
  PRIMARY KEY (`User_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`Name`, `User_name`, `Password`, `User_type`, `Images`) VALUES
('Rizwan Ali', '18HUSAC12673', '18HUSAC12673', 'Student', 'Images/Rizwan.jpg'),
('Rizwan Khan', 'Admin ', '12345', 'Admin', 'Images/asdasd.jpg'),
('Salman Ali', '18HUSAC12965', '18HUSAC12965', 'Student', 'Images/Rizwan.jpg'),
('Salman Ali', '18HUSAC12540', '18HUSAC12540', 'Student', 'Images/Rizwan.jpg'),
('Rizwan Ali', '18HUSAC12881', '18HUSAC12881', 'Student', 'Images/Rizwan.jpg'),
('Rizwan Ali', '18HUSAC12677', '18HUSAC12677', 'Student', 'Images/Rizwan.jpg'),
('Rizwan Ali', '18HUSAC12206', '18HUSAC12206', 'Student', 'Images/Rizwan.jpg'),
('salman Ali', '18HUSAC12223', '18HUSAC12223', 'Student', 'Images/Rizwan.jpg'),
('Rizwan Ali', '18HUSAC12445', '18HUSAC12445', 'Student', 'Images/Rizwan.jpg'),
('Rizwan Ali', '18HUSAC12416', '18HUSAC12416', 'Student', 'Images/Rizwan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

DROP TABLE IF EXISTS `qualification`;
CREATE TABLE IF NOT EXISTS `qualification` (
  `Register_No` varchar(100) NOT NULL,
  `Combination` varchar(100) NOT NULL,
  `Section` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Total_fee` int(100) NOT NULL,
  `Paid_fee` int(100) NOT NULL,
  `Balance` int(100) NOT NULL,
  PRIMARY KEY (`Register_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `Result_ID` varchar(100) NOT NULL,
  `Result_Date` varchar(100) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Semister` varchar(100) NOT NULL,
  `Res_fie_path` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_notice_box`
--

DROP TABLE IF EXISTS `staff_notice_box`;
CREATE TABLE IF NOT EXISTS `staff_notice_box` (
  `Notice_ID` varchar(100) NOT NULL,
  `Notice_Date` varchar(15) NOT NULL,
  `Title` varchar(150) NOT NULL,
  `Subject` varchar(150) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`Notice_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_notice_box`
--

INSERT INTO `staff_notice_box` (`Notice_ID`, `Notice_Date`, `Title`, `Subject`, `Description`, `Status`) VALUES
('18MEMO170650', '17-12-2018', ' Exams Time Table ', 'aaaaaaaaa', 'adadas', 'Pending'),
('18MEMO170790', '17-12-2018', 'asda', 'asdasdasdasdasd', 'adasdas', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `staff_reg`
--

DROP TABLE IF EXISTS `staff_reg`;
CREATE TABLE IF NOT EXISTS `staff_reg` (
  `Staff_id` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Mobile_no` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Adress` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Pin_code` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Specialist` varchar(100) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `Last_job` varchar(100) NOT NULL,
  `other` varchar(100) NOT NULL,
  `Department` varchar(150) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Semister` varchar(100) NOT NULL,
  `Subject1` varchar(100) NOT NULL,
  `Subject2` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Seq_Question` varchar(100) NOT NULL,
  `Ansswer` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  PRIMARY KEY (`Staff_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Sl No` int(100) NOT NULL AUTO_INCREMENT,
  `First Name` varchar(100) NOT NULL,
  `Last Name` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  PRIMARY KEY (`Sl No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_fee`
--

DROP TABLE IF EXISTS `student_fee`;
CREATE TABLE IF NOT EXISTS `student_fee` (
  `Register_No` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Semister` varchar(100) NOT NULL,
  `Total_fee` varchar(100) NOT NULL,
  `Paid Fee` varchar(100) NOT NULL,
  `Balance_fee` varchar(100) NOT NULL,
  PRIMARY KEY (`Register_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fee`
--

INSERT INTO `student_fee` (`Register_No`, `Name`, `Course`, `Year`, `Semister`, `Total_fee`, `Paid Fee`, `Balance_fee`) VALUES
('18HUSAC12673', 'Rizwan', 'BCA', '1st Year', '1st Sem', '70000', '40000', '30000'),
('18HUSAC12965', 'Salman', 'MCA', '1st Year', '1st Sem', '70000', '40000', '30000'),
('18HUSAC12540', 'Salman', 'MCA', '1st Year', '1st Sem', '70000', '40000', '30000'),
('18HUSAC12881', 'Rizwan', 'BCA', '1st Year', '1st Sem', '70000', '40000', '30000'),
('18HUSAC12677', 'Rizwan', 'MCA', '1st Year', '1st Sem', '70000', '40000', '30000'),
('18HUSAC12206', 'Rizwan', 'BCA', '2nd Year', '1st Sem', '70000', '40000', '30000'),
('18HUSAC12223', 'salman', 'BCA', '1st Year', '1st Sem', '70000', '40000', '30000'),
('18HUSAC12445', 'Rizwan', 'MCA', '1st Year', '1st Sem', '70000', '40000', '30000'),
('18HUSAC12416', 'Rizwan', 'MCA', '1st Year', '1st Sem', '70000', '40000', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `student_notice_box`
--

DROP TABLE IF EXISTS `student_notice_box`;
CREATE TABLE IF NOT EXISTS `student_notice_box` (
  `Notice_ID` varchar(300) NOT NULL,
  `Notice_Date` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Description` varchar(700) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`Notice_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_notice_box`
--

INSERT INTO `student_notice_box` (`Notice_ID`, `Notice_Date`, `Title`, `Subject`, `Description`, `Status`) VALUES
('18MEMO170406', '17-12-2018', ' Exams Time Table ', 'werwrw', 'sdf', 'Pending'),
('18MEMO170337', '17-12-2018', ' Exams Time Table ', 'wrw', 'wrwe', 'Pending'),
('18MEMO170936', '17-12-2018', 'werwe', 'wer', 'wrw', 'Pending'),
('18MEMO170450', '17-12-2018', 'wewe', 'werwe', 'werwer', 'Pending'),
('18MEMO170485', '17-12-2018', 'werw', 'wer', 'wer', 'Pending'),
('18MEMO170167', '17-12-2018', 'werwer', 'werwer', 'werwerwe', 'Pending'),
('18MEMO170199', '17-12-2018', 'werwewe', 'weww', 'werwrrw', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `student_parent`
--

DROP TABLE IF EXISTS `student_parent`;
CREATE TABLE IF NOT EXISTS `student_parent` (
  `Register_No` varchar(100) NOT NULL,
  `Father_Name` varchar(100) NOT NULL,
  `Mother_Name` varchar(100) NOT NULL,
  `Mobile-No` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Pin_Code` varchar(100) NOT NULL,
  PRIMARY KEY (`Register_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_parent`
--

INSERT INTO `student_parent` (`Register_No`, `Father_Name`, `Mother_Name`, `Mobile-No`, `Email`, `Address`, `State`, `City`, `Pin_Code`) VALUES
('18HUSAC12673', 'Rafeeq', 'Mubeena', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039'),
('18HUSAC12965', 'Rafeeq', 'Mubeena', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039'),
('18HUSAC12540', 'Rafeeq', 'Mubeena', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039'),
('18HUSAC12881', 'Rafeeq', 'Mubeena', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'sdsd', 'Lakshadweep', 'bengalur', '560039'),
('18HUSAC12677', 'Rafeeq', 'Mubeena', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039'),
('18HUSAC12206', 'Rafeeq', 'Mubeena', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039'),
('18HUSAC12223', 'Rafeeq', 'Mubeena', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039'),
('18HUSAC12445', 'sdas', 'Mubeena', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039'),
('18HUSAC12416', 'sdas', 'Mubeena', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039');

-- --------------------------------------------------------

--
-- Table structure for table `student_parent_details`
--

DROP TABLE IF EXISTS `student_parent_details`;
CREATE TABLE IF NOT EXISTS `student_parent_details` (
  `Register No` varchar(50) NOT NULL,
  `Father Name` varchar(100) NOT NULL,
  `Father Number` varchar(100) NOT NULL,
  `Mother Name` varchar(100) NOT NULL,
  `Mother No` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Pin` varchar(100) NOT NULL,
  PRIMARY KEY (`Register No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

DROP TABLE IF EXISTS `student_reg`;
CREATE TABLE IF NOT EXISTS `student_reg` (
  `Register_No` varchar(100) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Pincode` varchar(100) NOT NULL,
  `Classs` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Semister` varchar(100) NOT NULL,
  `Profile_image` varchar(100) NOT NULL,
  `Seq_Question` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  `Res_Path` varchar(500) NOT NULL,
  PRIMARY KEY (`Register_No`)
) ENGINE=MyISAM AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`Register_No`, `First_name`, `Last_Name`, `DOB`, `Gender`, `phone_no`, `Email`, `Address`, `State`, `City`, `Pincode`, `Classs`, `Year`, `Semister`, `Profile_image`, `Seq_Question`, `Answer`, `Res_Path`) VALUES
('18HUSAC12881', 'Rizwan', 'Ali', '2018-12-06', 'Female', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039', 'BCA', '1st Year', '1st Sem', 'images/Rizwan.jpg', 'No Question', 'No Answer', 'No_Result'),
('18HUSAC12677', 'Rizwan', 'Ali', '2018-12-06', 'Female', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039', 'MCA', '1st Year', '1st Sem', 'images/Rizwan.jpg', 'No Question', 'No Answer', 'Results/SHAHIKALA.1.jpg'),
('18HUSAC12206', 'Rizwan', 'Ali', '2018-12-06', 'Female', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'sdsd', 'Lakshadweep', 'bengalur', '560039', 'BCA', '2nd Year', '1st Sem', 'images/Rizwan.jpg', 'No Question', 'No Answer', 'Results/SHAHIKALA.1.jpg'),
('18HUSAC12223', 'salman', 'Ali', '2018-12-06', 'Female', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039', 'BCA', '1st Year', '1st Sem', 'images/Rizwan.jpg', 'No Question', 'No Answer', 'No_Result'),
('18HUSAC12445', 'Rizwan', 'Ali', '2018-12-06', 'Female', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039', 'MCA', '1st Year', '1st Sem', 'images/Rizwan.jpg', 'No Question', 'No Answer', 'Results/SHAHIKALA.1.jpg'),
('18HUSAC12416', 'Rizwan', 'Ali', '2018-12-06', 'Female', '9342404759', 'mdrizwan.r.n51294@gmail.com', 'No 237', 'Karnataka', 'bengalur', '560039', 'MCA', '1st Year', '1st Sem', 'images/Rizwan.jpg', 'No Question', 'No Answer', 'Results/SHAHIKALA.1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
