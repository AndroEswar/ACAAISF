-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2016 at 11:11 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfeedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_type` varchar(25) NOT NULL,
  `idnumber` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_type`, `idnumber`) VALUES
(9, 'student', '222'),
(10, '', '123'),
(11, '', '111'),
(12, '', '888'),
(13, '', 'GGG'),
(14, '', '777'),
(15, '', '111'),
(16, '', '0000'),
(17, '', 'aaa'),
(18, '', '123'),
(19, '', 'IDT111'),
(20, '', 'IDT222'),
(21, '', 'IDT333'),
(22, '', 'IDT444'),
(23, '', 'ID111'),
(24, '', 'ID222'),
(25, '', 'ID333'),
(26, '', 'ID444'),
(27, '', ' AWDAWD'),
(28, '', '123'),
(29, '', '123'),
(30, '', '123'),
(31, '', '123'),
(32, '', '123'),
(33, '', 'IDT111'),
(34, '', 'IDT222'),
(35, '', 'IDT333'),
(36, '', 'IDT444'),
(37, '', '12345'),
(38, '', 'ID111'),
(39, '', 'ID222'),
(40, '', 'ID333'),
(41, '', 'ID444'),
(42, '', '1444'),
(43, '', '478293'),
(44, '', ''),
(45, '', ''),
(46, '', ''),
(47, '', 'ID111'),
(48, '', 'ID222'),
(49, '', 'ID333'),
(50, '', 'ID444'),
(51, '', 'IDT111'),
(52, '', 'IDT222'),
(53, '', 'IDT333'),
(54, '', 'IDT444'),
(55, '', 'ID111'),
(56, '', 'ID222'),
(57, '', 'ID333'),
(58, '', 'ID444'),
(59, '', 'ADT09081997'),
(60, '', 'RJR09081997'),
(61, '', '12345'),
(62, '', '123'),
(63, '', '1111'),
(64, '', 'ara07289700'),
(65, '', '12345'),
(66, '', '1234567'),
(67, '', 'vrm0107996'),
(68, '', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(2, 'ADmin', 'ADMin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `evaluationform`
--

CREATE TABLE `evaluationform` (
  `evaluate_id` int(11) NOT NULL,
  `evaluate_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluationform`
--

INSERT INTO `evaluationform` (`evaluate_id`, `evaluate_description`) VALUES
(8, 'I. TEACHING EFFECTIVENESS'),
(9, 'II. PROFESSIONALISM');

-- --------------------------------------------------------

--
-- Table structure for table `evaluationheader`
--

CREATE TABLE `evaluationheader` (
  `evaluateheader_id` int(11) NOT NULL,
  `evaluateheader_description` varchar(50) NOT NULL,
  `evaluate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluationheader`
--

INSERT INTO `evaluationheader` (`evaluateheader_id`, `evaluateheader_description`, `evaluate_id`) VALUES
(1, 'A. COMMITMENT', 4),
(2, 'A. COMMITMENT', 4),
(3, 'A. COMMITMENT', 8),
(4, 'B.KNOWLEDGE OF SUBJECT', 8),
(5, 'C. TEACHING FOR INDEPENDENT LEARNING', 8),
(6, 'D. MANAGEMENT OF LEARNING', 8),
(7, 'II. PROFESSIONALISM', 9);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_content`
--

CREATE TABLE `evaluation_content` (
  `evaluation_content_id` int(11) NOT NULL,
  `evaluate_id` int(11) NOT NULL,
  `evaluationheader_id` int(11) NOT NULL,
  `Description` text NOT NULL,
  `ratings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_content`
--

INSERT INTO `evaluation_content` (`evaluation_content_id`, `evaluate_id`, `evaluationheader_id`, `Description`, `ratings`) VALUES
(18, 0, 3, '1. Demonstrates sensitivity to students ability to attend and absorb content information', 0),
(21, 0, 3, '2. Integrates sensitively his/her learning objectives with those of the students in a collaborative process', 0),
(22, 0, 3, '3. Makes self available to students beyond official time.', 0),
(23, 0, 3, '4. Regularly comes to class on time, well-groomed, and well-prepared to complete assigned responsibilities', 0),
(24, 0, 3, '5. Keeps accurate records of students performance and prompt submission of the same.\r\n', 0),
(25, 0, 4, '1. Demonstrates mastery of the subject matter(explain the subject matter without relying solely on the prescribed textbook).', 0),
(26, 0, 4, '2. Draws and shares information on the state on the art of theory and practice in his/her discipline.', 0),
(27, 0, 4, '3. Integrates subject to practical circumstances and learning intents/purposes of the students.', 0),
(28, 0, 4, '4. Explains the relevance of present topics to the previous lessons, and relates the subject matter to relevant current issues and / daily activities.', 0),
(29, 0, 4, '5. Demonstrates up-to-date knowledge and/or awareness on current trends and issues of the subject.', 0),
(30, 0, 5, '1. Creates teaching strategies that allow students to practice using concepts they need to understand(interactive discussion).', 0),
(31, 0, 5, '2. Enhances student self-esteem and/or gives due recognition to students performance/potentials.', 0),
(32, 0, 5, '3. Allows students to create their own course with objectives and realistically defined student-instructor rules and make them accountable for their performance', 0),
(33, 0, 5, '4.Allows students to think independently and make their own decisions and holding them accountable for performance based largely on their success in executing decisions', 0),
(34, 0, 5, '5. Encourages students to learn beyond what is required and help/guide the students how to apply the concepts learned.\r\n', 0),
(36, 0, 6, '1. Uses instructional materials (audio-video materials; fieldtrips, film showing, computer aided instruction and etc.) to reinforce learning processes.', 0),
(37, 0, 6, '6. Uses instructional materials (audio-video materials; fieldtrips, film showing, computer aided instruction and etc.) to reinforce learning processes.', 0),
(38, 0, 6, '6. Uses instructional materials (audio-video materials; fieldtrips, film showing, computer aided instruction and etc.) to reinforce learning processes.', 0),
(39, 0, 6, '6. Uses instructional materials (audio-video materials; fieldtrips, film showing, computer aided instruction and etc.) to reinforce learning processes.', 0),
(40, 0, 6, '6. Uses instructional materials (audio-video materials; fieldtrips, film showing, computer aided instruction and etc.) to reinforce learning processes.', 0),
(41, 0, 7, '1. punctual in starting and ending classes on specified time.', 0),
(42, 0, 7, '2. Attends classes regularly, absences are rare and reasonable.', 0),
(43, 0, 7, '3.Has a happy attitude towards students.', 0),
(44, 0, 7, '4. Is emotionally well-balanced.', 0),
(45, 0, 7, '5. Observes proper grooming', 0),
(46, 0, 7, '6. Possesses self-confidence and poise.', 0),
(47, 0, 7, '7. Has a pleasing personality.', 0),
(48, 0, 7, '8. Demonstrates high sense of responsibility.\r\n', 0),
(50, 0, 7, '9. Manifests initiative in one work', 0),
(51, 0, 3, '6.akwdjkajdjakwd', 0),
(52, 0, 3, '7. dskfds', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `facilities_id` int(11) NOT NULL,
  `facilities_description` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`facilities_id`, `facilities_description`) VALUES
(1, 'Com lab 1'),
(2, 'Com lab 2'),
(3, 'Library'),
(4, 'Cashier'),
(5, 'OSA office'),
(6, 'SSG'),
(7, 'C.R'),
(8, 'Clinic'),
(9, 'Techno pacer'),
(10, 'IC'),
(11, 'KJAWKDJKWD'),
(12, 'aaa'),
(13, 'HAHAHAHAHA');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `category` text NOT NULL,
  `idnumber` varchar(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `comments`, `category`, `idnumber`, `account_id`) VALUES
(137, 'hahhahaa', 'teacher', '123', 64),
(138, 'comment here!', 'staff', '123', 64),
(139, 'hakwdkawjdkjakwj awdkawjd', 'BSINFO4th-A', '', 64),
(140, 'kjawhdjhawjdhjawdjajwhdjawd', '1', '', 64),
(141, 'hsjfdhakhfjrhdtjerkgjksfd', 'teacher', 'IDT222', 64),
(142, 'hinay ang net', '3', '', 64),
(143, 'TAG PILA ANG LIPSTICK?', 'teacher', '12345', 59),
(144, 'WALA AIRCON', '1', '', 59);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_firstname` varchar(25) NOT NULL,
  `staff_lastname` varchar(25) NOT NULL,
  `idnumber` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_firstname`, `staff_lastname`, `idnumber`) VALUES
(3, 'aaa', 'staff', '123'),
(4, 'AWDAWD', 'AWDAWD ', ' AWDAWD'),
(5, 'adawd', 'awdawd', '123'),
(6, 'dawdawd', 'awdaw', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_firstname` varchar(25) NOT NULL,
  `student_lastname` varchar(25) NOT NULL,
  `student_course` varchar(50) NOT NULL,
  `student_section` varchar(2) NOT NULL,
  `student_year` varchar(5) NOT NULL,
  `idnumber` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_firstname`, `student_lastname`, `student_course`, `student_section`, `student_year`, `idnumber`) VALUES
(32, 'Student1_F', 'Student1', 'BSINFO', 'A', '1st', 'ID111'),
(33, 'Student2_F', 'Student2', 'BSINFO', 'A', '1st', 'ID222'),
(34, 'Student2_F1', 'Student21', 'BSINFO', 'A', '1st', 'ID333'),
(36, 'Adilyn', 'Delos Reyes', 'BSINFO', 'A', '3rd', 'ADT09081997'),
(37, 'Rhona Jean', 'Roca', 'BSINFO', 'A', '3rd', 'RJR09081997'),
(38, 'Rona', 'Ari', 'BSINFO', 'A', '3rd', 'ara07289700'),
(39, 'Riza Mae', 'Veloso', 'BSIT', 'B', '3rd', 'vrm0107996');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(25) NOT NULL,
  `subject_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_description`) VALUES
(1, 'Programming', 'Programming languages'),
(2, 'English', 'Basic English'),
(3, 'accounting', 'Fundamentals of Accounting'),
(4, 'Statistics', 'Fundamental of Statistics');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_firstname` varchar(25) NOT NULL,
  `teacher_lastname` varchar(25) NOT NULL,
  `idnumber` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_firstname`, `teacher_lastname`, `idnumber`) VALUES
(19, 'teachert1_F', 'teacher1', 'IDT111'),
(20, 'teachert2_F', 'teacher2', 'IDT222'),
(21, 'teacher2_F1', 'teacher21', 'IDT333'),
(22, 'teacher4_F', 'teacher4', 'IDT444'),
(24, 'Jayrelle', 'Sy', '123'),
(25, 'Lapuos', 'Edward', '1111'),
(26, 'Abbygail Kaye', 'Pabular', '12345'),
(27, 'Jo', 'Sallilas', '1234567'),
(28, 'jean', 'castor', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_evaluation_result`
--

CREATE TABLE `teacher_evaluation_result` (
  `teacher_evaluation_result_id` int(11) NOT NULL,
  `evaluation_content_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `ratings` int(11) NOT NULL,
  `school_year` varchar(20) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `account_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_evaluation_result`
--

INSERT INTO `teacher_evaluation_result` (`teacher_evaluation_result_id`, `evaluation_content_id`, `teacher_id`, `ratings`, `school_year`, `subject_id`, `semester`, `account_id`) VALUES
(865, 18, 11, 1, '2015-2016', 1, '1st', 42),
(866, 21, 11, 1, '2015-2016', 1, '1st', 42),
(867, 22, 11, 1, '2015-2016', 1, '1st', 42),
(868, 23, 11, 1, '2015-2016', 1, '1st', 42),
(869, 24, 11, 1, '2015-2016', 1, '1st', 42),
(870, 51, 11, 1, '2015-2016', 1, '1st', 42),
(871, 25, 11, 1, '2015-2016', 1, '1st', 42),
(872, 26, 11, 1, '2015-2016', 1, '1st', 42),
(873, 27, 11, 1, '2015-2016', 1, '1st', 42),
(874, 28, 11, 1, '2015-2016', 1, '1st', 42),
(875, 29, 11, 1, '2015-2016', 1, '1st', 42),
(876, 30, 11, 1, '2015-2016', 1, '1st', 42),
(877, 31, 11, 1, '2015-2016', 1, '1st', 42),
(878, 32, 11, 1, '2015-2016', 1, '1st', 42),
(879, 33, 11, 1, '2015-2016', 1, '1st', 42),
(880, 34, 11, 1, '2015-2016', 1, '1st', 42),
(881, 36, 11, 1, '2015-2016', 1, '1st', 42),
(882, 37, 11, 1, '2015-2016', 1, '1st', 42),
(883, 38, 11, 1, '2015-2016', 1, '1st', 42),
(884, 39, 11, 1, '2015-2016', 1, '1st', 42),
(885, 40, 11, 1, '2015-2016', 1, '1st', 42),
(886, 41, 11, 5, '2015-2016', 1, '1st', 42),
(887, 42, 11, 5, '2015-2016', 1, '1st', 42),
(888, 43, 11, 5, '2015-2016', 1, '1st', 42),
(889, 44, 11, 5, '2015-2016', 1, '1st', 42),
(890, 45, 11, 5, '2015-2016', 1, '1st', 42),
(891, 46, 11, 5, '2015-2016', 1, '1st', 42),
(892, 47, 11, 5, '2015-2016', 1, '1st', 42),
(893, 48, 11, 5, '2015-2016', 1, '1st', 42),
(894, 50, 11, 5, '2015-2016', 1, '1st', 42),
(1265, 18, 24, 2, '2015-2016', 1, '1st', 64),
(1266, 21, 24, 2, '2015-2016', 1, '1st', 64),
(1267, 22, 24, 2, '2015-2016', 1, '1st', 64),
(1268, 23, 24, 2, '2015-2016', 1, '1st', 64),
(1269, 24, 24, 2, '2015-2016', 1, '1st', 64),
(1270, 51, 24, 3, '2015-2016', 1, '1st', 64),
(1271, 52, 24, 2, '2015-2016', 1, '1st', 64),
(1272, 25, 24, 2, '2015-2016', 1, '1st', 64),
(1273, 26, 24, 2, '2015-2016', 1, '1st', 64),
(1274, 27, 24, 2, '2015-2016', 1, '1st', 64),
(1275, 28, 24, 2, '2015-2016', 1, '1st', 64),
(1276, 29, 24, 2, '2015-2016', 1, '1st', 64),
(1277, 30, 24, 2, '2015-2016', 1, '1st', 64),
(1278, 31, 24, 2, '2015-2016', 1, '1st', 64),
(1279, 32, 24, 2, '2015-2016', 1, '1st', 64),
(1280, 33, 24, 2, '2015-2016', 1, '1st', 64),
(1281, 34, 24, 2, '2015-2016', 1, '1st', 64),
(1282, 36, 24, 3, '2015-2016', 1, '1st', 64),
(1283, 37, 24, 2, '2015-2016', 1, '1st', 64),
(1284, 38, 24, 2, '2015-2016', 1, '1st', 64),
(1285, 39, 24, 2, '2015-2016', 1, '1st', 64),
(1286, 40, 24, 2, '2015-2016', 1, '1st', 64),
(1287, 41, 24, 3, '2015-2016', 1, '1st', 64),
(1288, 42, 24, 2, '2015-2016', 1, '1st', 64),
(1289, 43, 24, 2, '2015-2016', 1, '1st', 64),
(1290, 44, 24, 2, '2015-2016', 1, '1st', 64),
(1291, 45, 24, 2, '2015-2016', 1, '1st', 64),
(1292, 46, 24, 2, '2015-2016', 1, '1st', 64),
(1293, 47, 24, 2, '2015-2016', 1, '1st', 64),
(1294, 48, 24, 3, '2015-2016', 1, '1st', 64),
(1295, 50, 24, 2, '2015-2016', 1, '1st', 64),
(1296, 18, 20, 5, '2015-2016', 4, '1st', 64),
(1297, 21, 20, 5, '2015-2016', 4, '1st', 64),
(1298, 22, 20, 5, '2015-2016', 4, '1st', 64),
(1299, 23, 20, 5, '2015-2016', 4, '1st', 64),
(1300, 24, 20, 5, '2015-2016', 4, '1st', 64),
(1301, 51, 20, 5, '2015-2016', 4, '1st', 64),
(1302, 52, 20, 5, '2015-2016', 4, '1st', 64),
(1303, 25, 20, 5, '2015-2016', 4, '1st', 64),
(1304, 26, 20, 5, '2015-2016', 4, '1st', 64),
(1305, 27, 20, 5, '2015-2016', 4, '1st', 64),
(1306, 28, 20, 5, '2015-2016', 4, '1st', 64),
(1307, 29, 20, 5, '2015-2016', 4, '1st', 64),
(1308, 30, 20, 5, '2015-2016', 4, '1st', 64),
(1309, 31, 20, 5, '2015-2016', 4, '1st', 64),
(1310, 32, 20, 5, '2015-2016', 4, '1st', 64),
(1311, 33, 20, 5, '2015-2016', 4, '1st', 64),
(1312, 34, 20, 5, '2015-2016', 4, '1st', 64),
(1313, 36, 20, 5, '2015-2016', 4, '1st', 64),
(1314, 37, 20, 5, '2015-2016', 4, '1st', 64),
(1315, 38, 20, 5, '2015-2016', 4, '1st', 64),
(1316, 39, 20, 5, '2015-2016', 4, '1st', 64),
(1317, 40, 20, 5, '2015-2016', 4, '1st', 64),
(1318, 41, 20, 5, '2015-2016', 4, '1st', 64),
(1319, 42, 20, 5, '2015-2016', 4, '1st', 64),
(1320, 43, 20, 5, '2015-2016', 4, '1st', 64),
(1321, 44, 20, 5, '2015-2016', 4, '1st', 64),
(1322, 45, 20, 5, '2015-2016', 4, '1st', 64),
(1323, 46, 20, 5, '2015-2016', 4, '1st', 64),
(1324, 47, 20, 5, '2015-2016', 4, '1st', 64),
(1325, 48, 20, 5, '2015-2016', 4, '1st', 64),
(1326, 50, 20, 5, '2015-2016', 4, '1st', 64),
(1327, 18, 26, 3, '2015-2016', 1, '1st', 59),
(1328, 21, 26, 3, '2015-2016', 1, '1st', 59),
(1329, 22, 26, 3, '2015-2016', 1, '1st', 59),
(1330, 23, 26, 3, '2015-2016', 1, '1st', 59),
(1331, 24, 26, 3, '2015-2016', 1, '1st', 59),
(1332, 51, 26, 5, '2015-2016', 1, '1st', 59),
(1333, 52, 26, 2, '2015-2016', 1, '1st', 59),
(1334, 25, 26, 5, '2015-2016', 1, '1st', 59),
(1335, 26, 26, 5, '2015-2016', 1, '1st', 59),
(1336, 27, 26, 5, '2015-2016', 1, '1st', 59),
(1337, 28, 26, 5, '2015-2016', 1, '1st', 59),
(1338, 29, 26, 5, '2015-2016', 1, '1st', 59),
(1339, 30, 26, 5, '2015-2016', 1, '1st', 59),
(1340, 31, 26, 5, '2015-2016', 1, '1st', 59),
(1341, 32, 26, 5, '2015-2016', 1, '1st', 59),
(1342, 33, 26, 5, '2015-2016', 1, '1st', 59),
(1343, 34, 26, 5, '2015-2016', 1, '1st', 59),
(1344, 36, 26, 5, '2015-2016', 1, '1st', 59),
(1345, 37, 26, 5, '2015-2016', 1, '1st', 59),
(1346, 38, 26, 5, '2015-2016', 1, '1st', 59),
(1347, 39, 26, 5, '2015-2016', 1, '1st', 59),
(1348, 40, 26, 5, '2015-2016', 1, '1st', 59),
(1349, 41, 26, 5, '2015-2016', 1, '1st', 59),
(1350, 42, 26, 5, '2015-2016', 1, '1st', 59),
(1351, 43, 26, 5, '2015-2016', 1, '1st', 59),
(1352, 44, 26, 5, '2015-2016', 1, '1st', 59),
(1353, 45, 26, 5, '2015-2016', 1, '1st', 59),
(1354, 46, 26, 5, '2015-2016', 1, '1st', 59),
(1355, 47, 26, 5, '2015-2016', 1, '1st', 59),
(1356, 48, 26, 5, '2015-2016', 1, '1st', 59),
(1357, 50, 26, 10, '2015-2016', 1, '1st', 59);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `evaluationform`
--
ALTER TABLE `evaluationform`
  ADD PRIMARY KEY (`evaluate_id`);

--
-- Indexes for table `evaluationheader`
--
ALTER TABLE `evaluationheader`
  ADD PRIMARY KEY (`evaluateheader_id`);

--
-- Indexes for table `evaluation_content`
--
ALTER TABLE `evaluation_content`
  ADD PRIMARY KEY (`evaluation_content_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`facilities_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_evaluation_result`
--
ALTER TABLE `teacher_evaluation_result`
  ADD PRIMARY KEY (`teacher_evaluation_result_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `evaluationform`
--
ALTER TABLE `evaluationform`
  MODIFY `evaluate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `evaluationheader`
--
ALTER TABLE `evaluationheader`
  MODIFY `evaluateheader_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `evaluation_content`
--
ALTER TABLE `evaluation_content`
  MODIFY `evaluation_content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `facilities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `teacher_evaluation_result`
--
ALTER TABLE `teacher_evaluation_result`
  MODIFY `teacher_evaluation_result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1358;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
