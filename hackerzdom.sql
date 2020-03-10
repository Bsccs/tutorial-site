-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 05:51 PM
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
(113, '', 0, 2, 0, 1, 0, 0),
(114, '', 0, 2, 0, 1, 0, 0),
(115, '', 0, 2, 0, 1, 0, 0),
(117, '', 0, 2, 0, 1, 0, 0),
(118, 'videolink123`', 0, 2, 0, 1, 0, 0),
(119, 'videolink123`', 0, 2, 0, 1, 0, 0),
(120, 'videolink234', 0, 2, 0, 1, 0, 0),
(122, 'hhhhhhh', 0, 2, 0, 1, 0, 0),
(123, 'hhhhhhh', 0, 2, 0, 1, 0, 0),
(124, '<iframe width=\"907', 0, 2, 0, 1, 0, 0),
(125, '<iframe width=\"892', 0, 2, 0, 1, 0, 0),
(126, '<iframe width=\"400', 0, 2, 0, 1, 0, 0),
(128, '<iframe width=\"545\" height=\"409\" src=\"https://www.youtube.com/embed/W4AwgFenpok\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, 2, 0, 1, 0, 0),
(129, '<iframe width=\"727\" height=\"409\" src=\"https://www.youtube.com/embed/QvKWXs24p8o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 2, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `content_developer`
--

CREATE TABLE `content_developer` (
  `developer_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `email` varchar(18) NOT NULL,
  `quali_doc` varchar(18) NOT NULL,
  `expertise` varchar(18) NOT NULL,
  `admin_aproved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content_developer`
--

INSERT INTO `content_developer` (`developer_id`, `login_id`, `name`, `email`, `quali_doc`, `expertise`, `admin_aproved`) VALUES
(1, 0, 'jdkjhsf', 'sdfsdfsd', '', 'sdfsdfsd', 0),
(3, 0, 'Joby George', 'john@gmail', '', 'expertise', 0),
(5, 0, 'jfgoie', 'hkuhki', 'kjug', 'kjbk', 0),
(6, 0, 'jaini', 'sas', 'zdxs', 'sdsd', 0),
(7, 0, 'gfhj', 'jhyj', 'jyf', 'jyhfjuyf', 0),
(14, 0, 'john', 'john@gmail', 'uploads/UseCaseDia', 'android', 0),
(15, 0, 'john', 'john@gmail', 'uploads/UseCaseDia', 'java', 0),
(16, 0, 'john', 'john@gmail', 'uploads/UseCaseDia', 'java', 0),
(17, 0, 'john', 'john@gmail', 'uploads/UseCaseDia', 'java', 0),
(18, 0, 'john', 'john@gmail', 'uploads/UseCaseDia', 'java', 0),
(19, 0, 'john', 'john@gmail', 'uploads/UseCaseDia', 'java', 0),
(20, 0, 'john', 'john@gmail', 'uploads/UseCaseDia', 'java', 0),
(21, 0, 'john', 'john@gmail', 'uploads/UseCaseDia', 'java', 0),
(22, 0, 'john', 'john@gmail', 'uploads/UseCaseDia', 'java', 0),
(23, 0, 'john', 'john@gmail', 'uploads/UseCaseDia', 'java', 0),
(24, 0, 'john', 'john@gmail', 'uploads/UseCaseDia', 'java', 0),
(25, 0, 'Joby George', 'john@gmail', 'uploads/Tell-Me-Ab', 'java,php,android', 0),
(26, 0, 'Joby George', 'john@gmail', 'uploads/Tell-Me-Ab', 'java,php,android', 0),
(27, 0, 'john', 'john@gmail', 'uploads/ERDDiagram', 'java,php,android', 0),
(28, 0, 'john', 'john@gmail', 'uploads/ERDDiagram', 'java,php,android', 0);

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
(47, 129, 'daily');

-- --------------------------------------------------------

--
-- Table structure for table `inspector`
--

CREATE TABLE `inspector` (
  `inspector_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `email` varchar(18) NOT NULL,
  `name` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspector`
--

INSERT INTO `inspector` (`inspector_id`, `login_id`, `email`, `name`) VALUES
(1, 0, 'dedew', 'wedwe'),
(2, 0, 'dedew', 'wedwe'),
(11, 0, 'jaimyyy', 'james'),
(12, 0, 'jackyyy', 'jacky'),
(13, 0, 'jackyyy', 'jacky'),
(14, 0, 'nbkjbkjbkjb', 'jai jawan'),
(15, 0, 'isuyht', 'jawan'),
(16, 0, 'wefwef', 'sf'),
(17, 0, 'nbkjbkjbkjb', 'john'),
(18, 0, 'john@gmail', 'Joby George');

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
  `email` varchar(18) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

INSERT INTO `student_details` (`student_id`, `login_id`, `name`, `gender`, `country`, `state`, `phone_number`, `age`, `last_login`) VALUES
(1, 0, 'john', 'm', 'india', 'ker', 0, 23, 0),
(2, 1, 'john', 'm', 'india', 'ker', 675859659, 23, 8),
(3, 2, 'edx', 'm', 'infrv', 'ker', 456, 23, 1239);

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
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `content_developer`
--
ALTER TABLE `content_developer`
  MODIFY `developer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `content_keyword`
--
ALTER TABLE `content_keyword`
  MODIFY `ck_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `inspector`
--
ALTER TABLE `inspector`
  MODIFY `inspector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `insp_expertise`
--
ALTER TABLE `insp_expertise`
  MODIFY `expertise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
