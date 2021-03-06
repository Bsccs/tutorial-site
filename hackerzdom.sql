-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 01:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `content_id` int(11) NOT NULL,
  `inspector_id` int(11) NOT NULL,
  `approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approvals`
--

INSERT INTO `approvals` (`content_id`, `inspector_id`, `approved`) VALUES
(128, 57, 1),
(129, 57, 0),
(130, 57, 1);

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
  `content_name` varchar(255) NOT NULL,
  `inspector_approved` tinyint(1) NOT NULL,
  `content_depth` int(11) NOT NULL,
  `people_viewed` int(11) NOT NULL,
  `developer_id` int(11) NOT NULL,
  `content_length` int(11) NOT NULL,
  `paid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `content_name`, `inspector_approved`, `content_depth`, `people_viewed`, `developer_id`, `content_length`, `paid`) VALUES
(128, '<iframe width=\"727\" height=\"409\" src=\"https://www.youtube.com/embed/3sJN7ACIOoQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 2, 0, 1, 0, 0),
(129, '<iframe width=\"727\" height=\"409\" src=\"https://www.youtube.com/embed/QvKWXs24p8o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, 2, 0, 1, 0, 0),
(130, '<iframe width=\"727\" height=\"409\" src=\"https://www.youtube.com/embed/a4Fv98jttYA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 2, 0, 1, 0, 0),
(131, 'dwdwd', 0, 2, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `content_developer`
--

CREATE TABLE `content_developer` (
  `developer_id` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `name1` varchar(30) NOT NULL,
  `quali_doc` varchar(30) NOT NULL,
  `expertise` varchar(30) NOT NULL,
  `admin_aproved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content_developer`
--

INSERT INTO `content_developer` (`developer_id`, `login_id`, `name1`, `quali_doc`, `expertise`, `admin_aproved`) VALUES
(33, 59, 'hemantphareesh', 'hemantphareesh1217', 'M TECH COMPUTER SCIENCE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `content_keyword`
--

CREATE TABLE `content_keyword` (
  `ck_id` int(5) NOT NULL,
  `content_id` int(5) NOT NULL,
  `keyword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content_keyword`
--

INSERT INTO `content_keyword` (`ck_id`, `content_id`, `keyword`) VALUES
(26, 0, ''),
(27, 0, ''),
(28, 120, 'tag12'),
(29, 120, 'tag13'),
(30, 121, 'tag12'),
(31, 121, 'tag13'),
(32, 122, 'yyyy'),
(33, 122, 'yttrrrr'),
(34, 123, 'yyyy'),
(35, 123, 'yttrrrr'),
(36, 124, 'yoyo'),
(37, 124, 'yipiee'),
(38, 125, 'jhv'),
(39, 125, 'hgc'),
(40, 126, 'sdvsdfv'),
(41, 126, 'sdvsdv'),
(42, 127, 'kjg'),
(43, 127, 'kjkjb'),
(44, 128, 'cid'),
(45, 128, 'moosa'),
(46, 129, 'nas'),
(47, 129, 'daily'),
(48, 130, 'tag1'),
(49, 130, 'tag222'),
(50, 131, 'dwd'),
(51, 131, 'd'),
(52, 131, 'd'),
(53, 131, 'd');

-- --------------------------------------------------------

--
-- Table structure for table `inspector`
--

CREATE TABLE `inspector` (
  `inspector_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `name2` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspector`
--

INSERT INTO `inspector` (`inspector_id`, `login_id`, `name2`) VALUES
(42, 57, 'john'),
(45, 64, 'hemantp'),
(46, 65, 'hemantp'),
(47, 66, 'qwertghj');

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

--
-- Dumping data for table `insp_feedback`
--

INSERT INTO `insp_feedback` (`inspector_id`, `content_id`, `feedback`) VALUES
(1, 131, 'gud video');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(110) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `password`, `role`) VALUES
(55, 'admin@gmail.com', '1234', 'admin'),
(57, 'inspector@gmail.com', '1234', 'inspector'),
(59, 'hemantphareesh@gmail.com', '1234', 'con_developer'),
(69, 'unni.hemantp@gmail.com', '1234', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `trans_num` varchar(18) NOT NULL,
  `login_id` int(30) NOT NULL,
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
  `name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `last_login` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `login_id`, `name`, `gender`, `country`, `state`, `phone_number`, `age`, `last_login`) VALUES
(11, 69, 'hemant p hareesh', 'male', 'india', 'kerala', '9544901129', 21, '2020-05-26 11:04:21.000000');

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
(2, 0, '00:00:00', 0, '0000-00-00', '00:00:00'),
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

--
-- Dumping data for table `stud_feedback`
--

INSERT INTO `stud_feedback` (`student_id`, `content_id`, `feedback`) VALUES
(10, 10, 'uytfdx');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `suggestion_id` int(11) NOT NULL,
  `developer_id` int(11) NOT NULL,
  `suggestion` varchar(160) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`suggestion_id`, `developer_id`, `suggestion`, `date`) VALUES
(1, 1, 'sdwededed', '0000-00-00'),
(2, 1, 'qqqwww', '0000-00-00'),
(3, 1, 'qweee', '0000-00-00'),
(4, 0, 'fgdgiuhgahrfughaiuh', '0000-00-00'),
(5, 33, 'aefhgnzgfdjxfhj', '0000-00-00'),
(6, 33, 'sdghtdjgfhjzxghfjzxghj', '0000-00-00'),
(7, 33, 'sdghtdjgfhjzxghfjzxghj', '2020-05-26'),
(8, 33, 'safrfhjshfjs', '2020-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `test_number` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `question_num` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option_a` varchar(50) NOT NULL,
  `option_b` varchar(50) NOT NULL,
  `option_c` varchar(50) NOT NULL,
  `option_d` varchar(50) NOT NULL,
  `answer_option` char(1) NOT NULL,
  `dificulty_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`test_number`, `content_id`, `question_num`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `answer_option`, `dificulty_level`) VALUES
(1, 122, 131, 'q', 'opa', 'opb', 'opc', 'opd', 'c', 0),
(1, 131, 1, 'how are you', '', '', '', '', '', 0),
(1, 131, 2, '', '', '', '', '', '', 0),
(2, 131, 1, 'how are you', '', 'well', '', '', '', 0),
(3, 131, 2, 'qwww', '', '', '', '', '', 0),
(4, 131, 1, 'how are you', 'good', 'well', 'fine', 'good', 'k', 0),
(5, 131, 2, 'qwww', 'today', 'whenday', '', '', '', 0),
(6, 131, 1, 'how are you', 'good', 'well', 'fine', 'good', 'k', 0),
(6, 131, 2, 'qwww', 'today', 'whenday', 'dadaj', 'ddddd', '', 0),
(6, 131, 3, '', '', '', '', '', '', 0),
(7, 131, 1, 'how are you', '', '', '', '', '', 0),
(7, 131, 2, '', '', '', '', '', '', 0),
(7, 131, 3, '', '', '', '', '', '', 0),
(8, 131, 1, 'how are you', '', '', '', '', '', 0),
(8, 131, 2, '', '', '', '', '', '', 0),
(8, 131, 3, '', '', '', '', '', '', 0),
(9, 131, 1, 'how are you', 'good', 'well', 'fine', 'good', 'k', 0),
(9, 131, 2, 'qwww', 'today', 'whenday', 'dadaj', 'ddddd', '', 0),
(10, 131, 1, 'how are you', 'good', 'well', 'fine', 'good', 'k', 0),
(10, 131, 2, 'qwww', 'today', 'whenday', '', '', '', 0),
(10, 131, 3, '', '', '', '', '', '', 0),
(11, 131, 1, 'how are you', 'good', 'well', 'fine', '', '', 0),
(11, 131, 2, '', '', '', '', '', '', 0),
(11, 131, 3, '', '', '', '', '', '', 0),
(12, 131, 1, 'how are you', 'good', 'well', 'fine', '', '', 0),
(12, 131, 2, '', '', '', '', '', '', 0),
(12, 131, 3, '', '', '', '', '', '', 0);

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
  ADD PRIMARY KEY (`content_id`,`inspector_id`);

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
  ADD PRIMARY KEY (`ck_id`);

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
  ADD PRIMARY KEY (`login_id`);

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
  ADD PRIMARY KEY (`suggestion_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`test_number`,`content_id`,`question_num`);

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
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `content_developer`
--
ALTER TABLE `content_developer`
  MODIFY `developer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `content_keyword`
--
ALTER TABLE `content_keyword`
  MODIFY `ck_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `inspector`
--
ALTER TABLE `inspector`
  MODIFY `inspector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `insp_expertise`
--
ALTER TABLE `insp_expertise`
  MODIFY `expertise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `insp_feedback`
--
ALTER TABLE `insp_feedback`
  MODIFY `inspector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `suggestion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
