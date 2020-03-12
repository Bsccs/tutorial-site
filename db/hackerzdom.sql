-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 07:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackerzdom`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvals`
--

CREATE TABLE `approvals` (
  `content id` int(11) NOT NULL,
  `inspector id` int(11) NOT NULL,
  `approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE `blacklist` (
  `inspector_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `content_name` varchar(18) NOT NULL,
  `inspector_approved` tinyint(1) NOT NULL,
  `content_depth` int(11) NOT NULL,
  `keyword_id` int(11) NOT NULL,
  `people_viewed` int(11) NOT NULL,
  `developer_id` int(11) NOT NULL,
  `content_length` int(11) NOT NULL,
  `paid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `content_name`, `inspector_approved`, `content_depth`, `keyword_id`, `people_viewed`, `developer_id`, `content_length`, `paid`) VALUES
(113, '', 0, 2, 0, 0, 1, 0, 0),
(114, '', 0, 2, 0, 0, 1, 0, 0),
(115, '', 0, 2, 0, 0, 1, 0, 0),
(117, '', 0, 2, 0, 0, 1, 0, 0),
(118, 'videolink123`', 0, 2, 0, 0, 1, 0, 0),
(119, 'videolink123`', 0, 2, 0, 0, 1, 0, 0),
(120, 'videolink234', 0, 2, 0, 0, 1, 0, 0),
(122, 'hhhhhhh', 0, 2, 0, 0, 1, 0, 0),
(123, 'hhhhhhh', 0, 2, 0, 0, 1, 0, 0),
(124, '<iframe width=\"907', 0, 2, 0, 0, 1, 0, 0),
(125, '<iframe width=\"892', 0, 2, 0, 0, 1, 0, 0),
(126, '<iframe width=\"400', 0, 2, 0, 0, 1, 0, 0),
(128, '<iframe width=\"545', 0, 2, 0, 0, 1, 0, 0),
(129, '<iframe width=\"727', 1, 2, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `content_developer`
--

CREATE TABLE `content_developer` (
  `developer_id` int(11) NOT NULL,
  `email` varchar(18) NOT NULL,
  `quali_doc` varchar(18) NOT NULL,
  `expertise` varchar(18) NOT NULL,
  `admin_aproved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `content_keyword`
--

CREATE TABLE `content_keyword` (
  `content_id` int(11) NOT NULL,
  `keyword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inspector`
--

CREATE TABLE `inspector` (
  `inspector_id` int(11) NOT NULL,
  `email` varchar(18) NOT NULL,
  `name` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `insp_expertise`
--

CREATE TABLE `insp_expertise` (
  `expertise_id` int(11) NOT NULL,
  `inspector_id` int(11) NOT NULL,
  `expertise` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insp_expertise`
--

INSERT INTO `insp_expertise` (`expertise_id`, `inspector_id`, `expertise`) VALUES
(1, 1, 'java'),
(2, 2, 'php'),
(4, 2, 'android'),
(5, 2, 'cid');

-- --------------------------------------------------------

--
-- Table structure for table `insp_feedback`
--

CREATE TABLE `insp_feedback` (
  `inspector_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `password`, `role`) VALUES
(1, 'hem@gmai.com', 'zdgkdgu', 'student'),
(7, 'hello@gmail.com', 'sdgauosrghush', 'student'),
(8, 'unni.hemantp@gmail', 'srhateh', 'student'),
(12, 'admin@admin.com', '123456789', 'admin'),
(15, 'teacher@teacher.com', '123456789', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `trans_num` varchar(18) NOT NULL,
  `email` varchar(18) NOT NULL,
  `content_id` int(11) NOT NULL,
  `trans_date` varchar(18) NOT NULL,
  `trans_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `student_id` int(11) NOT NULL,
  `requests` varchar(100) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `keyword` varchar(15) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `email` varchar(18) NOT NULL,
  `name` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `last_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `login_id`, `email`, `name`, `gender`, `country`, `state`, `phone_number`, `age`, `last_login`) VALUES
(1, 1, 'hem@gmai.com', '', 'male', 'ZSHFXv', 'djzhxOZ', 2147483647, 0, 0),
(2, 0, 'hem@gmai.com', '', 'male', 'ZSHFXv', 'djzhxOZ', 2147483647, 0, 0),
(3, 0, 'hem@gmai.com', '', 'male', 'ZSHFXv', 'djzhxOZ', 2147483647, 0, 0),
(4, 0, 'hem@gmai.com', '', 'male', 'ZSHFXv', 'djzhxOZ', 2147483647, 0, 0),
(5, 0, 'hem@gmai.com', '', 'male', 'ZSHFXv', 'djzhxOZ', 2147483647, 0, 0),
(6, 0, 'hem@gmai.com', 'unni.hemantp@gm', 'male', 'ZSHFXv', 'djzhxOZ', 2147483647, 0, 0),
(7, 7, 'hello@gmail.com', 'ahsuh', 'male', 'dhg', 'sidhgsi', 123455677, 24, 0),
(8, 8, 'unni.hemantp@gmail', 'hemantp', 'male', 'india', 'kerala', 24324, 12, 0),
(9, 0, 'unni.hemantp@gmail', 'hemantp', 'male', 'india', 'kerala', 24324, 12, 0),
(10, 0, 'unni.hemantp@gmail', 'hemantp', 'male', 'india', 'kerala', 24324, 12, 0),
(11, 0, 'unni.hemantp@gmail', 'hemantp', 'male', 'india', 'kerala', 24324, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_log`
--

CREATE TABLE `student_log` (
  `student_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `paused_time` time NOT NULL,
  `rating` int(11) NOT NULL,
  `date` date NOT NULL,
  `watch_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_log`
--

INSERT INTO `student_log` (`student_id`, `content_id`, `paused_time`, `rating`, `date`, `watch_time`) VALUES
(2, 129, '00:00:00', 0, '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stud_feedback`
--

CREATE TABLE `stud_feedback` (
  `student_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `developer_id` int(11) NOT NULL,
  `suggestion` varchar(100) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `test_number` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `questions` int(11) NOT NULL,
  `option_a` int(11) NOT NULL,
  `option_b` int(11) NOT NULL,
  `option_c` int(11) NOT NULL,
  `option_d` int(11) NOT NULL,
  `answer_option` int(11) NOT NULL,
  `dificulty_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test_attended`
--

CREATE TABLE `test_attended` (
  `student_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `test_number` int(11) NOT NULL,
  `badges` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_name`) VALUES
('bit coins'),
('java'),
('php connection');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approvals`
--
ALTER TABLE `approvals`
  ADD PRIMARY KEY (`content id`,`inspector id`);

--
-- Indexes for table `blacklist`
--
ALTER TABLE `blacklist`
  ADD PRIMARY KEY (`inspector_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `content_developer`
--
ALTER TABLE `content_developer`
  ADD PRIMARY KEY (`developer_id`);

--
-- Indexes for table `content_keyword`
--
ALTER TABLE `content_keyword`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `inspector`
--
ALTER TABLE `inspector`
  ADD PRIMARY KEY (`inspector_id`);

--
-- Indexes for table `insp_expertise`
--
ALTER TABLE `insp_expertise`
  ADD PRIMARY KEY (`expertise_id`);

--
-- Indexes for table `insp_feedback`
--
ALTER TABLE `insp_feedback`
  ADD PRIMARY KEY (`inspector_id`,`content_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`trans_num`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`keyword`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_log`
--
ALTER TABLE `student_log`
  ADD PRIMARY KEY (`student_id`,`content_id`);

--
-- Indexes for table `stud_feedback`
--
ALTER TABLE `stud_feedback`
  ADD PRIMARY KEY (`student_id`,`content_id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`developer_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`test_number`,`content_id`,`questions`);

--
-- Indexes for table `test_attended`
--
ALTER TABLE `test_attended`
  ADD PRIMARY KEY (`student_id`,`content_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `content id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspector`
--
ALTER TABLE `inspector`
  MODIFY `inspector_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insp_expertise`
--
ALTER TABLE `insp_expertise`
  MODIFY `expertise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
