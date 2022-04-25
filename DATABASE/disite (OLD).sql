-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 08:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disite`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `assigned_to` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `content`, `file`, `assigned_to`, `created_at`) VALUES
(5, 'New Announcement!', '&lt;p&gt;This is a test announcement. See email!&lt;/p&gt;', '1623655470_sample2.png', 'Everyone', '2021-06-14 07:24:33'),
(13, 'NEwwww', '&lt;p&gt;Sample Announcement&lt;/p&gt;', '1649709548_Endorsement.PNG', 'Everyone', '2022-04-11 20:39:09'),
(15, 'DCS Announcement', '&lt;p&gt;DCS Eyes Here&lt;/p&gt;', '1649718581_Eval.PNG', 'Department of Computer Studies', '2022-04-11 23:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_viewed`
--

CREATE TABLE `announcement_viewed` (
  `id` int(11) NOT NULL,
  `empid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_viewed`
--

INSERT INTO `announcement_viewed` (`id`, `empid`) VALUES
(1, '3'),
(2, '4'),
(1, '201710040'),
(2, '201710040'),
(3, '4'),
(5, '4'),
(13, '201710040'),
(5, '201710040'),
(15, '201710040');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `empid` varchar(11) NOT NULL,
  `eventname` varchar(150) NOT NULL,
  `awardname` varchar(150) NOT NULL,
  `awarddate` date NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `empid`, `eventname`, `awardname`, `awarddate`, `file`) VALUES
(1, '1', '22nd National Researcher\'s Summit and General Assembly', 'Best Presenter', '2022-03-17', '1649667242_Bunny Masong - Certificate of Internship Completion.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `FromUser` varchar(25) NOT NULL,
  `ToUser` varchar(25) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `FromUser`, `ToUser`, `message`, `created_at`) VALUES
(4, '201710040', '1', 'Good afternoon. Please acknowledge query on 2/21. TY!', '2022-04-05 00:00:00'),
(5, '1', '201710040', 'Acknowledged. How may I help?', '2022-04-05 00:00:00'),
(6, '2', '1', 'Maam may nagttaanong abt sa IPCR. Di ko po mahanap yung file. 201688896. TY', '2022-04-05 00:00:00'),
(7, '1', '201910010', 'This is acknowledged. Sample and test message aonly.', '2022-04-05 00:00:00'),
(8, '201910010', '1', 'This is acknowledged. Sample and test message aonly.', '2022-04-05 00:00:00'),
(9, '1', '201910010', 'Okay. Will check it later. Will let you know if I see anythng.', '2022-04-05 00:00:00'),
(10, '201910010', '1', 'Thanks, Maam!', '2022-04-05 00:00:00'),
(11, '1', '13', 'Pakiceck ako ng downloadabke forms TY!', '2022-04-05 00:00:00'),
(12, '1', '201910010', 'Welcome.', '2022-04-05 00:00:00'),
(13, '1', '201910010', 'Btw, please have your docu submitted i the office.', '2022-04-05 00:00:00'),
(14, '1', '5', 'Good afternoon, Ma\'am.', '2022-04-05 00:00:00'),
(15, '1', '3', 'Following up on your requirement.', '2022-04-05 00:00:00'),
(16, '1', '201710040', 'Hey, Bunny!', '2022-04-05 00:00:00'),
(17, '1', '2', 'I\'ll check on this. Tnx!', '2022-04-05 00:00:00'),
(18, '1', '4', 'Hi. sir. Kindly follow up on your faculty the IPCR. Need it ASAP! Thanks! ', '2022-04-05 00:00:00'),
(19, '1', '4', 'Hello again', '2022-04-05 00:00:00'),
(20, '5', '1', 'Hello Madam', '2022-04-05 10:39:35'),
(21, '1', '5', 'Hello. May I pls know the status of your dept submission? TY!', '2022-04-05 10:53:58'),
(22, '1', '2', 'Anong dept pala ito?', '2022-04-07 11:05:50'),
(23, '1', '5', 'Gerly', '2022-04-07 11:06:45'),
(24, '1', '5', 'Following up on this! TY!', '2022-04-11 01:03:37'),
(25, '21', '1', 'Good day, Ma\'am!', '2022-04-12 11:44:14'),
(26, '1', '21', 'Good day!', '2022-04-12 11:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `current_academic_details`
--

CREATE TABLE `current_academic_details` (
  `id` int(11) NOT NULL,
  `current_academic_year` varchar(50) NOT NULL,
  `current_semester` varchar(50) NOT NULL,
  `autonotifemail` varchar(50) NOT NULL,
  `autonotifpassword` varchar(50) NOT NULL,
  `contactemail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `current_academic_details`
--

INSERT INTO `current_academic_details` (`id`, `current_academic_year`, `current_semester`, `autonotifemail`, `autonotifpassword`, `contactemail`) VALUES
(1, '2022-2023', 'First', 'application.cvsunexus@gmail.com', 'thecvsunexus2020', 'instructionoffice@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(550) NOT NULL,
  `display_art` varchar(255) NOT NULL,
  `about_info` text NOT NULL,
  `org_chart` varchar(255) NOT NULL,
  `contact` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `type`, `description`, `display_art`, `about_info`, `org_chart`, `contact`) VALUES
(1, 'Office of the Director for Instructions', 'Non-Academic', '&lt;p&gt;The Office of the Director for Instructions is a unit that functions in line with the Office of the Vice President for Academics Affairs. The Director for Instructions ensures the delivery of quality and relevant education through careful planning, directing and coordinating with all the department chairpersons and unit coordinators to uphold the vision of the university in producing globally competitive graduates that possess moral uprightness.&lt;/p&gt;', '1623465330_bg1.png', '&lt;p&gt;&lt;strong&gt;Vision&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Recognized unit that produces outstanding graduates through dedicated delivery of instructions with a union of competent educators.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Mission&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Instruction unit is a recognized provider of excellent learning opportunities that will nurture the learners&rsquo; global skills to keep them abreast with the challenging demands of globalization and moral uprightness.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Functions and Responsibilities&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Director for Instructions&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;1.&amp;nbsp; Provide leadership and direction in all academic programs of the campus related to curriculum and instruction;&lt;/p&gt;&lt;p&gt;2.&amp;nbsp; Supervision the daily activities of the different academic units of the campus;&lt;/p&gt;&lt;p&gt;3.&amp;nbsp; Formulate, recommend, and implement academic policies, guidelines and regulations;&lt;/p&gt;&lt;p&gt;4.&amp;nbsp; Spearhead the periodic conduct of curriculum review;&lt;/p&gt;&lt;p&gt;5.&amp;nbsp; Coordinate the research and extension loads of the faculty members with the concerned unit; and&lt;/p&gt;&lt;p&gt;6.&amp;nbsp; Perform other functions as maybe assigned by higher authorities.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Department Chairpersons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;1.&amp;nbsp; Supervise the daily operation of the department;&lt;/p&gt;&lt;p&gt;2.&amp;nbsp; Formulate the Strategic/Development Plan of the Department;&lt;/p&gt;&lt;p&gt;3.&amp;nbsp; Take charge in planning, development and promotion of their respective curricular programs;&lt;/p&gt;&lt;p&gt;4.&amp;nbsp; Prepare the Annual Procurement Plan and Laboratory Equipment Procurement;&lt;/p&gt;&lt;p&gt;5.&amp;nbsp; &amp;nbsp;Recommend and implement the Faculty Development Plan of the Department;&lt;/p&gt;&lt;p&gt;6.&amp;nbsp; Monitor the performance of faculty, students, and graduates of their Department;&lt;/p&gt;&lt;p&gt;7.&amp;nbsp; Take charge in the maintenance of existing facilities of their respective Department;&lt;/p&gt;&lt;p&gt;8.&amp;nbsp; Spearhead the periodic conduct of curriculum review and propose revision if necessary;&lt;/p&gt;&lt;p&gt;9.&amp;nbsp; Propose new curricular programs to be offered by their respective units;&lt;/p&gt;&lt;p&gt;10.&amp;nbsp; Submit the list of courses to be offered by the Department before the start of every semester (after the midterm of the present semester);&lt;/p&gt;&lt;p&gt;11. Prepare faculty workload, faculty analysis and room utilization analysis every semester;&lt;/p&gt;&lt;p&gt;12. Recommend the assignment of academic advisers, thesis advisers, technical critic and other assignments of the faculty members in their respective Department;&lt;/p&gt;&lt;p&gt;13.&amp;nbsp; Recommend hiring of faculty members of the Department;&lt;/p&gt;&lt;p&gt;14.&amp;nbsp; Coordinate the academic programs, projects and activities of the Department;&lt;/p&gt;&lt;p&gt;15.&amp;nbsp; Inculcate moral values to their faculty and students; and&lt;/p&gt;&lt;p&gt;16.&amp;nbsp; Perform other functions as maybe assigned by higher authorities;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;OJT Coordinators&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;1.&amp;nbsp; Assist OJT trainees in looking for private and/or government agencies/firms where the students can undergo OJT;&lt;/p&gt;&lt;p&gt;2.&amp;nbsp; Assist the Campus/College OJT Coordinator in facilitating the documents needed by the trainees;&lt;/p&gt;&lt;p&gt;3.&amp;nbsp; Assist the student trainees in coordination with the Campus OJT Coordinator and the OJT Center in preparing the program of activities or work schedules of the trainees;&lt;/p&gt;&lt;p&gt;4.&amp;nbsp; Conduct regular visits to student-trainees while on training;&lt;/p&gt;&lt;p&gt;5.&amp;nbsp; In coordination with the Campus OJT Coordinator;&lt;/p&gt;&lt;p&gt;6.&amp;nbsp; Assist the trainees in the preparation of the narrative report; and&lt;/p&gt;&lt;p&gt;7.&amp;nbsp; Submit the list of trainees and other pertinent reports to the Campus OJT Coordinator.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Student-Teaching Coordinator&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;1.&amp;nbsp; Assists student-teachers in looking for private and/or government schools where they can have their internship;&lt;/p&gt;&lt;p&gt;2.&amp;nbsp; Assists the student-teachers in facilitating the documents needed by the trainees;&lt;/p&gt;&lt;p&gt;3.&amp;nbsp; Coordinated with the Campus Director for Instructions, conduct regular visits to student-teachers&lt;/p&gt;&lt;p&gt;4.&amp;nbsp; Assists the student-teachers in the preparation of the student-teaching portfolio; and&lt;/p&gt;&lt;p&gt;5.&amp;nbsp; Submits the list of student-teachers and other pertinent reports to the Instruction office.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Campus Librarian&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The Campus Librarian reports directly to the Director of Instructions, coordinates with the Library Advisory Committee, Office of the Registrar and to the Head of the University Library. She supervises the overall operation of the Library.&lt;/p&gt;&lt;p&gt;The Campus Librarian has the following duties and responsibilities;&lt;/p&gt;&lt;p&gt;1.&amp;nbsp; Prepare/recommend plans, programs, and projects for the development of the CvSU &ndash; CCAT Campus Library;&lt;/p&gt;&lt;p&gt;2.&amp;nbsp; Prepare and recommend budget proposals for books and other library materials including furniture and equipment;&lt;/p&gt;&lt;p&gt;3.&amp;nbsp; Develop and update the library collection by continuously acquiring recent published books and subscribing up-to-date periodicals as well as needed non-print and other library materials;&lt;/p&gt;&lt;p&gt;4.&amp;nbsp; Establish/formulate policies and procedures in rendering and disseminating of information to all library users;&lt;/p&gt;&lt;p&gt;5.&amp;nbsp; Supervise and control the operation, administration and management of the CvSU &ndash; CCAT Campus Library;&lt;/p&gt;&lt;p&gt;6.&amp;nbsp; Conduct library orientation to students by curriculum/specialization in coordination with the Director of the Office of Students Affairs and Services;&lt;/p&gt;&lt;p&gt;7.&amp;nbsp; Prepare and submit annual report and other accomplishment of the library;&lt;/p&gt;&lt;p&gt;8.&amp;nbsp; Maintain and monitor record of all books and other library materials;&lt;/p&gt;&lt;p&gt;9.&amp;nbsp; Supervise and evaluate the performance of all library staff and student.&lt;/p&gt;&lt;p&gt;10.&amp;nbsp; Establish linkages and out-sourcing of books and other library materials to various individuals or agencies which are possible sources of information for the development and improvement of the library;&lt;/p&gt;&lt;p&gt;11.&amp;nbsp; Ensure safety and security of all the library collections including furniture and equipment;&lt;/p&gt;&lt;p&gt;12.&amp;nbsp; Catalog/classify books and other library materials;&lt;/p&gt;&lt;p&gt;13.&amp;nbsp; Conduct and participate in research studies toward the upgrading of the programs and services of the CvSU-CCAT Campus Library;&lt;/p&gt;&lt;p&gt;14.&amp;nbsp; Act as Secretary of the Library Advisory Board; and&lt;/p&gt;&lt;p&gt;15.&amp;nbsp; Perform other functions and tasks as may be assigned from time to time.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;TESDA Coordinator&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;1.&amp;nbsp; Manage the operation of the TESDA office;&lt;/p&gt;&lt;p&gt;2.&amp;nbsp; Plan the utilization of the TESDA office resources;&lt;/p&gt;&lt;p&gt;3.&amp;nbsp; Coordinate the plans and process documents of Cavite State University CCAT Campus regarding National Certificate Assessments of the Students and Faculty members in the nearest Provincial Training Center;&lt;/p&gt;&lt;p&gt;4.&amp;nbsp; Spearhead the promotion and advocacy of Technical and Vocational Education and Trainings (TVET); and&lt;/p&gt;&lt;p&gt;5.&amp;nbsp; Development programs, projects, and system related to TVET / TESDA programs.&lt;/p&gt;', '1623465330_odi-org-chart.png', 'Address: EM\'s Barrio, Tejeros Convention, Rosario, Cavite &lt;br&gt;\r\nEmail: instructionoffice@gmail.com   |  Phone: 437-9505 to 9508 Local No. 207'),
(2, 'Department of Arts and Sciences', 'Academic', '&lt;p&gt;The Office of the Department of Arts and Sciences caters to serve the tenets of the university, by means of a wide array of specific subjects in General Education, allowing basic knowledge and skills which supplements specialization in the different fields of Computer Studies, Education, Engineering, Management Studies, and Industrial Technology.&lt;/p&gt;', '1623465776_das_svg.png', '&lt;p&gt;&lt;strong&gt;VISION&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The Department of Arts and Sciences is a channel to which General Education in the arts, physical and social sciences, civics and society, etc., serves as a catalyst in the transformation of society in a globally competitive world.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;MISSION&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The Department equips learners with the necessary skills and knowledge through responsive research and inculcates an ethical and committed Filipino generation in the future. It shall produce graduates with proper moral compass and informed and guided with the relevant laws of man and law of nature.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;GOALS&lt;/strong&gt;&amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p&gt;1. to enhance and empower the abilities and interests of learners in making them globally competent in the field they had chosen and become productive citizens of the society;&lt;/p&gt;&lt;p&gt;2. enable students to understand the Philippine government and its bureaucracy through historical background with a practice of ethics in public service; and&lt;/p&gt;&lt;p&gt;3. promote civic consciousness, defense preparedness and will act as first responders during national emergencies.&lt;/p&gt;', '1623465776_das-org-chart.png', 'Ms. Ladylyn Quilapio &ndash; Chairperson &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp; 437 9505 loc 208'),
(5, 'Department of Computer Studies', 'Academic', 'The Department of Computer Studies was established to provide quality and equitable education through relevant instruction, research and extension services with sustainable leadership in the fields of information technology and computer science towards the development of globally competent and morally upright individuals.', '1623591862_dcs_png.png', '&lt;p&gt;&lt;strong&gt;PROGRAM OBJECTIVES of BSCS Program&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The BSCS program aims to produce graduate who can:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Apply knowledge of theories, algorithmic foundations, implementation and application of information and computing solutions to the practice of computer science;&lt;/li&gt;&lt;li&gt;Conduct system analysis, perform design and development of computing solutions;&lt;/li&gt;&lt;li&gt;Conduct relevant researches and development activities in the field of computer science;&lt;/li&gt;&lt;li&gt;Promote the development and transfer of appropriate computer science technology;&lt;/li&gt;&lt;li&gt;Promote environmental preservation and protection on projects and enterprises related to computer science; and&lt;/li&gt;&lt;li&gt;Become morally upright IT professionals with entry-level competencies.&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;PROGRAM OBJECTIVES OF BSINFOTECH Program&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The BSINFOTECH program aims to produce graduate who can:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Apply knowledge of utilization of computers and computer software to plan, install, customize, operate, manage, administer and maintain information technology infrastructure to the practice of information technology;&lt;/li&gt;&lt;li&gt;Conduct application installation and software and hardware operation, development and maintenance;&lt;/li&gt;&lt;li&gt;Conduct relevant researches and development activities in the field of information technology;&lt;/li&gt;&lt;li&gt;Promote the development and transfer of appropriate information technology;&lt;/li&gt;&lt;li&gt;Promote environmental preservation and protection on projects and enterprises related to information technology; and&lt;/li&gt;&lt;li&gt;Become morally upright IT professionals with entry-level competencies.&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Program Description of BSCS&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The BS computer Science program includes the study of computing concepts and theories, algorithmic foundations and new development in computing. The program prepares students to design and create algorithmically complex software and develop new and effective algorithms for solving computing problems.&lt;/p&gt;&lt;p&gt;The program also includes the study of the standards and practices in Software Engineering. It prepares students to acquire skills and disciplines required for designing, writing and modifying software components, modules and applications that comprise software solutions.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Program Description of BSINFOTECH&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The BS Information Technology program includes the study of the utilization of both hardware and software technologies involving planning, installing, customizing, operating, managing and administering, and maintaining information technology infrastructure that provides computing solutions to address the needs of an organization.&lt;/p&gt;&lt;p&gt;The program prepares graduates to address various user needs involving the selection, development, application, integration and management of computing technologies within an organization&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Program Outcomes&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The BSCS and BSIT graduates are expected to become globally competent, innovative, and socially and ethically responsible computing professionals engaged in life-long, learning endeavors. They are capable of contributing to the country&rsquo;s national development goals.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&amp;nbsp;CAREER PATH OF BSCS&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;strong&gt;Primary Job Roles&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Software Engineers&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Systems Software Developer&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Research and Development Computing Professional&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Application Software Developer&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Computer Programmer&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;strong&gt;Secondary Roles&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Systems Analyst&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Data Analyst&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Quality Assurance Specialist&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Software Support Specialist&lt;/p&gt;&lt;p&gt;&lt;strong&gt;CAREER PATH OF BSINFOTECH&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Primary Roles&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/strong&gt;Web and Application Developer&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Junior Database Administrator&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Systems Administrator&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Network Engineer&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Junior Information Security Administrator&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Systems Integration Personnel&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; IT Audit Assistant&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Technical Support Specialist&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Secondary Roles&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/strong&gt;QA Specialist&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Systems Analyst&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Computer Programmer&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;ADMISSION POLICY&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Must be a graduate of TVL STEM and ICT with a GPA of 85% in MATH AND SCIENCE.&lt;/p&gt;', '1623591862_dcs-org-chart.png', 'ARIES M. GELERA, MSICT &ndash; Chairperson  |  09351632872  |  cvsugelera@gmail.com &lt;br&gt;\r\n\r\nALLEN JHON C. MUYOT, MIT &ndash; Program Leader, BSCS  |  09171731589  |  allen.muyot@gmail.com &lt;br&gt;\r\n\r\nMARY ANN E. IGNACO, MIT &ndash; Program Leader BSINFOTECH  |  09162036801  |  maignaco@gmail.com'),
(6, 'Department of Industrial Technology', 'Academic', 'The Bachelor of Science in Industrial Technology (BSIT) is currently offered with nine (9) specializations in CCAT Campus which was implemented in school year 1975-1976 in accordance with (MECS) Ministry of Education Culture and Sports, Department Order No. 28, s. 1975.\r\nThe program is intended to prepare students for a professional Industrial Technologist career including a leading role in the production, manufacturing and enhancement of technology management.', '1623686863_dit_svg.png', '&lt;p&gt;&lt;strong&gt;Brief Description&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The Bachelor of Science in Industrial Technology (BSIT) is currently offered with nine (9) specializations in CCAT Campus which was implemented in school year 1975-1976 in accordance with (MECS) Ministry of Education Culture and Sports, Department Order No. 28, s. 1975.&lt;/p&gt;&lt;p&gt;&amp;nbsp;The program is intended to prepare students for a professional Industrial Technologist career including a leading role in the production, manufacturing and enhancement of technology management.&lt;/p&gt;&lt;p&gt;The proposed revision of the Bachelor of Science in Industrial Technology Curriculum has a total of 170 units with distribution of courses in compliance with CMO #20 s.2013, &ldquo;General Education Curriculum: Holistic Understandings, Intellectual and Civil Competencies&rdquo;; CMO #4, s.2018, &ldquo;Policy on the offering Filipino and Panitikan Subjects in all Higher Education programs&rdquo;; and proposed Curriculum of PACUIT dated September 16-18, 2015.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Program Profile&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Nomenclature: Bachelor of Science in Industrial Technology&lt;/p&gt;&lt;p&gt;Specializations:&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Automotive Technology&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Electrical Technology&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Electronics Technology&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Mechanical Technology&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Welding and Fabrication Technology&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Refrigeration and Air-conditioning Technology&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Drafting Technology&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Stationary Marine Technology&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Garments Technology&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Program Objective/s:&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;1. Produce technology graduates who are knowledgeable, skilful and imbued with desirable values for national development and global competitiveness;&lt;/p&gt;&lt;p&gt;2. Respond to the needs of the local and international industry and demands;&lt;/p&gt;&lt;p&gt;3. Develop morally upright professionals with high-level competencies; and&lt;/p&gt;&lt;p&gt;4. Produce graduates capable of handling managerial and supervisory positions.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Program Outcomes:&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The graduates of BS in Industrial Technology shall able to:&lt;/p&gt;&lt;p&gt;1. possess knowledge, expertise and desirable attitudes and values in their fields of technology specialization;&lt;/p&gt;&lt;p&gt;2. match the needs of labor and industries as well as self-employment/entrepreneurship;&lt;/p&gt;&lt;p&gt;3. become members of technology professionals who are NC (National Certificate) certified, research-oriented, leaders for environmental conservation and national development;&lt;/p&gt;&lt;p&gt;4. create good working habits towards work;&lt;/p&gt;&lt;p&gt;5. involve in research and extension projects/activities that will lead to instruction and community improvement.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;CONTACT INFORMATION&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Chairperson: &lt;/strong&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Dr. Rodel B. Lubong&lt;/p&gt;&lt;p&gt;Registration Advisers: &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Prof. Regie C. Delos Reyes&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Prof. Noelle T. Legazpi&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Prof. Fernando M. Cielo&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Prof. William P. Luseco&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Mr. Jonard A. Almuestro&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Ms. Janice D. Marquez&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;ADMISSION AND RETENTION POLICIES&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;A. Admission Policies&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;a. Regular Incoming First Year Students&lt;/p&gt;&lt;p&gt;&bull;They must be graduates of K-12 Curriculum, and Basic Education Curriculum (BEC), &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;and passers of Alternative Learning System who are eligible for admission to Higher Education Institutions (HEI&rsquo;s) provided that they have no any record of enrolment to any HEI&rsquo;s or Technical and Vocational Education and Training Education (TVET) Institutions.&lt;/p&gt;&lt;p&gt;&bull;They must pass the Entrance Examination required by the University.&lt;/p&gt;&lt;p&gt;&bull;They must pass the program interview administered in the College/Department.&lt;/p&gt;&lt;p&gt;b. Transferees (from other campuses/colleges of CvSU)&lt;/p&gt;&lt;p&gt;&bull;They must pass the Program Interview administered in the College/Department.&lt;/p&gt;&lt;p&gt;&bull;They must obtain a General Point Average (GPA) of 2.50 or better with no grade of deficiency (dropped, 5.00, 4.00, incomplete) in any course including NSTP and CvSU 101.&lt;/p&gt;&lt;p&gt;&bull;Upon evaluation of credit courses, they must not be categorized as Third Year Standing.&lt;/p&gt;&lt;p&gt;c. Transferees (from other HEI&rsquo;s)&lt;/p&gt;&lt;p&gt;&bull;They must pass the Entrance Examination required by the University.&lt;/p&gt;&lt;p&gt;&bull;They must pass the Program Interview administered in the College/Department.&lt;/p&gt;&lt;p&gt;&bull;They must obtain a General Point Average (GPA) of 2.50 or better with no grade of deficiency (dropped, 5.00, 4.00, incomplete) in any course including NSTP.&lt;/p&gt;&lt;p&gt;&bull;Upon evaluation of credit courses, they must not be categorized as Third Year Standing.&lt;/p&gt;&lt;p&gt;d. Shiftees&lt;/p&gt;&lt;p&gt;&bull;They must obtain a General Point Average (GPA) of 2.50 or better with no grade of deficiency (dropped, 5.00, 4.00, incomplete) in any course including NSTP from the previous program.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;B. Retention Policies&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&bull;Students must maintain a General Point Average (GPA) of 2.50 or better with no grade of deficiency (dropped, 5.00, 4.00) in any course including NSTP and CvSU 101 for First Year and Second Year levels including Mid-Year Term.&lt;/p&gt;&lt;p&gt;&bull;Students must pass a minimum of 80% of the courses taken for each semester of the Third Year and Fourth Year levels.&lt;/p&gt;&lt;p&gt;&bull;Students must not fail any professional course in the Third Year and Fourth Year levels more than two times.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&bull;Students must follow the Students Norms of Conduct as stated in the CvSU student handbook.&lt;/p&gt;', '1623686863_dit-org-chart.png', '  Chairperson:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dr. Rodel B. Lubong'),
(7, 'Department of Management Studies', 'Academic', '  The Department of Management Studies delivers courses designed to develop skills and competencies required in the field, also the flexible mindset that is necessary to stay competitive in a diverse business setting that fosters decision &ndash;making, entrepreneurial thinking, and management strategies. In addition to being exemplary classroom instructors and experts in their field, the faculty within the Department of Management Studies is recognized for making significant contributions to the field through research.', '1627135882_dms_svg.png', '&lt;p&gt;&lt;strong&gt;PROGRAM PROFILE&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Bachelor of Science in Business Management&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Major in Marketing Management (MM)&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The Marketing Management Program prepares the graduate for careers in marketing, market research, advertising and public relations.&amp;nbsp; The curriculum provides the graduate with both technical skills and competencies required in the field, but also the flexible mindset that is necessary to stay competitive in a constantly changing business environment.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;PROGRAM OUTCOMES&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;A graduate of a business or management degree should be able to:&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&amp;nbsp;&lt;ul&gt;&lt;li&gt;&amp;nbsp;&lt;ul&gt;&lt;li&gt;perform the basic functions of management such as planning, organizing, staffing, directing, and controlling;&lt;/li&gt;&lt;li&gt;apply the basic concepts that underlie each of the functional areas of business (marketing, finance, human resources management, production and operations, management information technology, and strategic management) and employ these concepts in various business situations;&lt;/li&gt;&lt;li&gt;select the proper decision-making tools to critically, analytically and creatively solve problems and drive results;&lt;/li&gt;&lt;li&gt;express oneself clearly and communicate effectively with stakeholders both in oral and written forms;&lt;/li&gt;&lt;li&gt;apply information and communication technology (ICT) skills as required by the business environment;&lt;/li&gt;&lt;li&gt;work effectively with other stakeholders and manage conflict in the workplace.&lt;/li&gt;&lt;li&gt;plan and implement business related activities;&lt;/li&gt;&lt;li&gt;demonstrate corporate citizenship and social responsibility; and&lt;/li&gt;&lt;li&gt;exercise high professional moral and ethical standards.&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Bachelor of Science in Hospitality Management (BSHM)&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The programs related to the fields of hospitality and tourism education will equip students with competencies that are needed to execute operational tasks and management functions in food production (culinary), accommodation, food and beverage service, tourism planning and product development, events planning, transportation services, travel and tour operations and other emerging sectors of hospitality and tourism industry.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;PROGRAM OUTCOMES&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Produce food products and services complying with enterprise standards;&lt;/li&gt;&lt;li&gt;Apply management skills in F &amp;amp; B service and operations;&lt;/li&gt;&lt;li&gt;Perform and provide full guest cycle services for front office;&lt;/li&gt;&lt;li&gt;Perform and maintain various housekeeping services for guest and facility operations;&lt;/li&gt;&lt;li&gt;Plan and implement a risk management program to provide a safe and secure workplace; and&lt;/li&gt;&lt;li&gt;Provide food and beverage service and manage the operation seamlessly based on industry standards.&lt;/li&gt;&lt;/ul&gt;', '1627135882_dit-org-chart.png', 'ELIZABETH R. DUMLAO, DBA &lt;br&gt;\r\nChairperson &ndash; Department of Management Studies&lt;br&gt;\r\nLandline: (046)-437-9505 local 212 / (046) 437-6659&lt;br&gt;\r\nEmail: cvsu.rosario@gmail.com'),
(8, 'On-the-Job Training Office', 'Non-Academic', 'The On-the-Job Training Office, under the supervision of the Director for Instructions provides services to OJT students by assisting them in the preparation of the needed requirements to undergo On-the-Job Training. It also improve and establish strategic agreement between the academe and the government as well as the academe and private companies focusing clear objectives, clear expectations, established method of learning verification and effective monitoring and implementation specific to OJT Program.', '1648425344_lib_svg.png', '&lt;p&gt;The On-the-Job Training Office, under the supervision of the Director for Instructions provides services to OJT students by assisting them in the preparation of the needed requirements to undergo On-the-Job Training. It also improve and establish strategic agreement between the academe and the government as well as the academe and private companies focusing clear objectives, clear expectations, established method of learning verification and effective monitoring and implementation specific to OJT Program.&lt;/p&gt;&lt;p&gt;The On-the-Job Training is a major requirement of the University in all courses offered as follows: Bachelor of Science in Electrical Engineering (BSEE), Bachelor of Science in Computer Engineering (BSCpE), Bachelor of Science in Industrial Technology (BSIT), Bachelor of Science in Business Management (BSBM), Bachelor of Science in Hospitality Management (BSHM), Bachelor of Science in Information Technology (BSInfoTech), Bachelor of Science in Computer Science (BSComSci).&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Roles and Responsibilities of On-the-Job Training Office:&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Provide the OJT students the basic orientation on work values, housekeeping, discipline and key behavior indicator that should be observed by the trainees while in training and/or field exposures including matters related to logistics, finance and other concerns;&lt;/li&gt;&lt;li&gt;Design, implement and evaluate a training plan in coordination with the accepting institution/agency.&lt;/li&gt;&lt;li&gt;Require trainees to submit themselves for interview, examinations and submit pertinent documents to support the application.&lt;/li&gt;&lt;li&gt;Issue an official endorsement of On-the-Job Training students which shall be used for evaluation, processing and application.&lt;/li&gt;&lt;li&gt;Designate a Training Coordinators who will supervise the On-the-Job Trainees and will coordinate with the partner agency/institution in various activities under the OJT Program.&lt;/li&gt;&lt;li&gt;Conduct periodic visits to the partner agencies/institutions where the trainees are assigned and confer with the authorized representative to discuss matters relevant to the training.&lt;/li&gt;&lt;li&gt;Withdraw a trainee who is found to behave and/or act in defiance to existing standards, rules and regulations of partner agencies/institutions.&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;strong&gt;Roles and Responsibilities of Area Coordinator:&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;The area/practicum coordinator is expected to conduct an initial site visit to ensure that the training facility is safe and conducive for the student/trainee.&lt;/li&gt;&lt;li&gt;The area/practicum coordinator is expected to review, orient, interpret and clarify to the student /trainee the objectives of the on the job training program.&lt;/li&gt;&lt;li&gt;The area/practicum coordinator is responsible to do a regular monitoring of the student/trainees under him/her to check on their overall performance and discuss with the On Site Supervisor to further improve the OJT program. This will ensure immediate resolution of student/trainee&rsquo;s concerns if there are, as well as provide an opportunity to evaluate the OJT program and follow upon the progress of the student/trainee.&lt;/li&gt;&lt;li&gt;A regular meeting should be done with his/her students/trainees or communicate with them regularly to have feedback on their assignments and validate complaints concerns of both parties, if any.&lt;/li&gt;&lt;li&gt;The area/practicum coordinator should also be available for consultations with the students/trainees and provide coaching and counselling assistance, if needed.&lt;/li&gt;&lt;li&gt;The area/practicum coordinator is responsible in evaluating the student/trainee&rsquo;s reports, evaluation grade and will give the final grade taking into consideration the evaluation of the On-Site Supervisor.&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;strong&gt;Roles and Responsibilities of Partner Industries/Institutions:&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Design, implement and evaluate the training plan jointly with CvSU-CCAT.&lt;/li&gt;&lt;li&gt;Screen, select and deploy trainees to the different offices and operating units.&lt;/li&gt;&lt;li&gt;Designate a Training Coordinator who will be responsible in the implementation of the Training Program as well as arrange, supervise and evaluate the performance of the trainees;&lt;/li&gt;&lt;li&gt;Ensure that necessary abilities, values and knowledge are imparted to the training in accordance with the approved training plan.&lt;/li&gt;&lt;li&gt;The partner institution/company/office shall conduct an evaluation of the student/trainee&rsquo;s overall performance based on the agreed standards or requirement with the school.&lt;/li&gt;&lt;li&gt;The partner institution/company/office shall issue a Certificate of Completion to the student/trainee upon completion of the on the job training program.&lt;/li&gt;&lt;li&gt;Notify CvSU-CCAT OJT Coordinator immediately of any untoward incidents/misbehaviour of the trainees while on duty.&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;strong&gt;Roles and Responsibilities of Student/Trainee:&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Student/trainee shall abide by the rules and regulations set forth by the institutions/company/office where s/he is undergoing on the job training.&lt;/li&gt;&lt;li&gt;Student/trainee should always observe discipline and right conduct.&lt;/li&gt;&lt;li&gt;Student/trainee should wear the appropriate dress code.&lt;/li&gt;&lt;li&gt;S/he should not engage in gambling, illicit activities, drinking intoxicating beverages, smoking and related activities while at work or within the institution/company/office premises.&lt;/li&gt;&lt;li&gt;Student/trainee is expected to submit reports and requirements on time.&lt;/li&gt;&lt;li&gt;Student/trainee should observe punctuality and attendance in reporting to his/her assigned area. S/he should accomplish the attendance record sheet/time card/bio metric record sheet noted by the training supervisor&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cvsu-rosario.edu.ph/wp-content/uploads/elementor/thumbs/On-the-Job-Training-Office-Citizens-Charter-orh3spvc1sah1uhbsf5z1pagpganvcd5g6rpcb6cxa.png&quot; alt=&quot;On-the-Job Training Office Citizens Charter&quot;&gt;&lt;figcaption&gt;&lt;strong&gt;On-the-Job Training Office Citizens Charter&amp;nbsp;&lt;/strong&gt;&lt;/figcaption&gt;&lt;/figure&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cvsu-rosario.edu.ph/wp-content/uploads/elementor/thumbs/Old-curriculum-orh3sn1tha6m30lf8vy3c802xaok891yfst8whaj9a.png&quot; alt=&quot;Old curriculum&quot;&gt;&lt;figcaption&gt;&lt;strong&gt;Old Curriculum&lt;/strong&gt;&lt;/figcaption&gt;&lt;/figure&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cvsu-rosario.edu.ph/wp-content/uploads/elementor/thumbs/New-Curriculum-orh3sicmj406gys90bwyhr6rydbq5rjar5jti3hho0.png&quot; alt=&quot;New Curriculum&quot;&gt;&lt;figcaption&gt;&lt;strong&gt;New Curriculum&lt;/strong&gt;&lt;/figcaption&gt;&lt;/figure&gt;', '1648425344_ojt-org-chart.png', 'Mr. Regie C. Delos Reyes, Campus OJT Coordinator&lt;br&gt;\r\nMaria Desiree T. Arcon, In-Charge, Job &amp; Career Placement Services/OJT Office Clerk&lt;br&gt;\r\nTelephone No. (046) 437-9505&lt;br&gt;\r\nE-mail Address: ojt.cvsur@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dotm`
--

CREATE TABLE `dotm` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dotm`
--

INSERT INTO `dotm` (`id`, `image`, `caption`) VALUES
(1, '1621689122_dotm1.jpeg', 'Congratulations, DEPARTMENT NAME, for being the best department for the month of August!'),
(2, '1621689173_dotm5.jpeg', 'Mr. Ng, speaking in one of the workshops during the Career Fair held at the CvSU hostel.'),
(4, '1621689313_dotm2.jpeg', 'A huddle of the faculty of the DEPARTMENT NAME to discuss the events for the month.');

-- --------------------------------------------------------

--
-- Table structure for table `educbackground`
--

CREATE TABLE `educbackground` (
  `id` int(11) NOT NULL,
  `empid` varchar(11) NOT NULL,
  `orgname` varchar(150) NOT NULL,
  `course` varchar(100) NOT NULL,
  `startdate` year(4) NOT NULL,
  `enddate` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educbackground`
--

INSERT INTO `educbackground` (`id`, `empid`, `orgname`, `course`, `startdate`, `enddate`) VALUES
(1, '1', 'Cavite City National High School', 'S_T_E_M', 2002, 2006),
(3, '1', 'Spanish International School', 'Spanish Proficiency', 2014, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'Question #1', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.'),
(2, 'Where are you located?', 'Please see \'About Us\' section.'),
(3, 'Sample Question Only', '&lt;p&gt;This is a sample answer only.&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `user_id`, `name`, `file`, `type`, `created_at`) VALUES
(14, 2, 'Accomplishment Report Template', '1620814709_Accomplishment Report Template.docx', 'Faculty', '2021-04-29 03:00:26'),
(15, 19, 'IPCR - Individual Performance Commitment and Review Form', '1619665273_Individual Performance Commitment and Review Form.xlsx', 'Faculty', '2021-04-29 03:01:13'),
(16, 19, 'Make-up Class Form', '1619665292_Make-Up Class Form.docx', 'Faculty', '2021-04-29 03:01:32'),
(17, 19, 'Request for Change of Grades (UREG-QF-12) Form', '1619665323_Request for Change of Grades (UREG-QF-12) Form.docx', 'Faculty', '2021-04-29 03:02:03'),
(18, 19, 'ROR Template', '1619665337_ROR Template.xls', 'Faculty', '2021-04-29 03:02:17'),
(19, 19, 'Summary of OJT Matrix', '1619665382_Summary of OJT Matrix.xlsx', 'OJT', '2021-04-29 03:03:02'),
(20, 19, 'DCS - Step by Step Guide in Writing OJT Narrative Report', '1619665414_DCS Step by Step Guide in Writing OJT Narrative Report.docx', 'OJT', '2021-04-29 03:03:34'),
(21, 19, 'General Narrative Report Template', '1619665431_General Narrative Report Template.xlsx', 'OJT', '2021-04-29 03:03:51'),
(22, 19, 'OJT Application Form', '1619665446_OJT Application Form.docx', 'OJT', '2021-04-29 03:04:06'),
(23, 19, 'OJT Approval Sheet', '1619665458_OJT Approval Sheet.docx', 'OJT', '2021-04-29 03:04:18'),
(24, 19, 'OJT Parent Consent Form', '1619665473_OJT Parent Consent Form.docx', 'OJT', '2021-04-29 03:04:33'),
(25, 19, 'OJT Performance Evaluation Form', '1619665491_OJT Performance Evaluation Form.docx', 'OJT', '2021-04-29 03:04:51'),
(26, 19, 'OJT Routing Slip', '1619665503_OJT Routing Slip.xlsx', 'OJT', '2021-04-29 03:05:03'),
(27, 19, 'Practicum Learning Journal Template', '1619665531_Practicum Learning Journal Form.docx', 'OJT', '2021-04-29 03:05:31'),
(28, 19, '1A - Request for Adviser and Technical Critic', '1619671071_1A - Request for Adviser and Technical Critic.docx', 'Research', '2021-04-29 04:37:51'),
(29, 19, '1B - Request for Change of Member of AC', '1619671310_1B - Request for Change of Member of AC.docx', 'Research', '2021-04-29 04:41:50'),
(30, 19, '2 - Capsule Approval Sheet', '1619671329_2 - Capsule Approval Sheet.docx', 'Research', '2021-04-29 04:42:09'),
(31, 19, '3 - Request for Oral review of Study Outline', '1619671359_3 - Request for Oral Review of Study Outline.docx', 'Research', '2021-04-29 04:42:39'),
(32, 19, '4A - Summary of Recommendations', '1619671383_4A - Summary of Recommendations.docx', 'Research', '2021-04-29 04:43:03'),
(33, 19, '4B - Compliance to Recommendations', '1619671407_4B - Compliance to Recommendations.docx', 'Research', '2021-04-29 04:43:27'),
(34, 19, '5 - Outline Approval Sheet', '1619671424_5 - Outline Approval Sheet.docx', 'Research', '2021-04-29 04:43:44'),
(35, 19, '6 - Request for Oral Review of Manuscript', '1619671448_6 - Request for Oral Review of Manuscript.docx', 'Research', '2021-04-29 04:44:08'),
(36, 19, '7 - Routing Slip', '1619671468_7 - Routing Slip.docx', 'Research', '2021-04-29 04:44:28'),
(37, 19, '8 - Manuscript Approval Sheet', '1619671492_8 - Manuscript Approval Sheet.docx', 'Research', '2021-04-29 04:44:52'),
(38, 19, '9 - Endorsement Letter Template', '1619671512_9 - Endorsement Letter Template.docx', 'Research', '2021-04-29 04:45:12'),
(45, 18, 'Computer Studies Capsule Format', '1620815730_Computer Studies Capsule Format.docx', 'Research', '2021-05-12 10:35:30'),
(46, 18, 'Contents of the EDP Manuscript', '1620815988_Contents of the EDP Manuscript.docx', 'Research', '2021-05-12 10:39:48'),
(47, 18, 'Detailed Proposal for Case Study', '1620816107_Detailed Proposal for Case Study.docx', 'Research', '2021-05-12 10:41:47'),
(48, 18, 'Detailed Proposal for Enterprise Development Project', '1620816124_Detailed Proposal for Enterprise Development Project.docx', 'Research', '2021-05-12 10:42:04'),
(49, 18, 'Research Grading System Template', '1620816162_Grading System Template.docx', 'Research', '2021-05-12 10:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` varchar(300) NOT NULL,
  `department` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `caption`, `department`, `created_at`) VALUES
(1, 'team.jpg', 'DAS TEAM!', 'Arts and Sciences', '2021-05-28 10:00:19'),
(2, '1621689173_dotm5.jpeg', 'No time to slow down!', 'Arts and Sciences', '2021-05-28 10:01:54'),
(3, 'team.jpg', 'DCS Team!', 'Computer Studies', '2021-05-28 10:05:41'),
(4, 'team.jpg', 'DIT Team!', 'Industrial Technology', '2021-05-28 10:06:13'),
(5, 'team.jpg', 'DMS Team!', 'Management Studies', '2021-05-28 10:06:51'),
(6, 'team.jpg', 'DTE Team!', 'Teacher Education', '2021-05-28 10:07:42'),
(7, 'team.jpg', 'LSHS Team', 'High School', '2021-05-28 10:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `image`, `body`, `created_at`) VALUES
(10, 1, 'Writing to Better Health', '1621772001_journal.jpg', '&lt;p&gt;At the very least, you&rsquo;ve got haunting images of sticker-covered notebooks filled with your childhood day-to-day recitations dancing in your head.&amp;nbsp; Or perhaps you were more of the lock-and-key-type, burying diaries you hoped your siblings would never find. Either way, you might have a love-hate relationship with keeping a journal.&lt;/p&gt;&lt;p&gt;Well, journaling is no longer old-fashioned, or just for folks of a certain older-and-wiser age. It&rsquo;s something you need to do &mdash; &lt;i&gt;now&lt;/i&gt;. Yep, it&rsquo;s true. Journaling does more than just help you record your memories or find self-expression. It&rsquo;s good for your health.&lt;/p&gt;&lt;p&gt;What are some of the short- and long-term health benefits of putting pen to paper? Here are five good-for-you virtues of journaling:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;&lt;strong&gt;Reduces Stress&lt;/strong&gt;. An overabundance of stress can be damaging to your physical, mental, and emotional health. It&rsquo;s proven. Journaling is a incredible stress management tool, a good-for-you habit that lessens impact of physical stressors on your health. In fact, a study showed that expressive writing (like journaling) for only 15 to 20 minutes a day three to five times over the course of a four-month period was enough to lower blood pressure and improve liver functionality. Plus, writing about stressful experiences can help you manage them in a healthy way. Try establishing journaling as a pre-bedtime meditation habit to help you unwind and de-stress.&lt;br&gt;&lt;br&gt;&amp;nbsp;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Improves Immune Function&lt;/strong&gt;. Believe it or not, expressive writing can strengthen your immunity and decrease your risk of illness. Those who journal boast improved immune system functioning (it&lt;strong&gt; &lt;/strong&gt;strengthens immune cells!) as well as lessened symptoms of asthma and rheumatoid arthritis. Expressive writing has been shown to improve liver and lung function and combat certain diseases; it has even been reported to help the wounded heal faster.&lt;br&gt;&lt;br&gt;&amp;nbsp;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Keeps Memory Sharp.&lt;/strong&gt; Journaling helps keep your brain in tip-top shape. Not only does it boost memory and comprehension, it also increases working memory capacity, which may reflect improved cognitive processing.&lt;br&gt;&lt;br&gt;&amp;nbsp;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Boosts Mood&lt;/strong&gt;. Want more sunshine in your life? Try journaling. A unique social and behavior outcome of journaling is this: it can improve your mood and give you a greater sense of overall emotional well-being and happiness.&lt;br&gt;&lt;br&gt;&amp;nbsp;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Strengthens Emotional Functions&lt;/strong&gt;. Related to mood is how journaling benefits overall emotional health: As journaling habits are developed, benefits become long-term, meaning that diarists become more in tune with their health by connecting with inner needs and desires. Journaling evokes mindfulness and helps writers remain present while keeping perspective. It presents an opportunity for emotional catharsis and helps the brain regulate emotions. It provides a greater sense of confidence and self-identity. Journaling can help in the management of personal adversity and change, and emphasize important patterns and growth in life.&amp;nbsp; Research even shows that expressive writing can help individuals develop more structured, adaptive, and integrated schemes about themselves, others, and the world. What&rsquo;s more, journaling unlocks and engages right-brained creativity, which gives you access to your full brainpower. Truly, journaling fosters growth.&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;So, great. You get it: Journaling is good for you &mdash; physically, mentally, and emotionally. But what if, like many of us, you find yourself stuck, staring fruitlessly at a blank page? Well first, ditch the guilt of not being consistent or instantly motivated. Simply start where you are. If you need to initially just write a single line, or detail the specifics of what you had for breakfast, do it. Don&rsquo;t preoccupy yourself with managing perfect punctuation, grammar, or spelling. Just write and don&rsquo;t censor yourself. This is for you. Remember: You don&rsquo;t have to be Shakespeare.&lt;/p&gt;&lt;p&gt;Go ahead, grab one of those four-for-a-dollar marble composition books or another fancier option and set aside a dedicated space and time for journaling. And for now, put aside the screens when journaling &mdash; writing by hand stimulates and trains the brain in a way digital communication doesn&rsquo;t.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Our lesson? If you&rsquo;re looking to better your health and well-being, keep a journal.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Taken From: https://intermountainhealthcare.org/blogs/topics/live-well/2018/07/5-powerful-health-benefits-of-journaling/&lt;/p&gt;', '2021-04-15 09:02:28'),
(11, 1, 'Why Be Grateful?', '1621771443_thank_you.jpg', '&lt;p&gt;November kicks off the holiday season with high expectations for a cozy and festive time of year. However, for many this time of year is tinged with sadness, anxiety, or depression. Certainly, major depression or a severe anxiety disorder benefits most from professional help. But what about those who just feel lost or overwhelmed or down at this time of year? Research (and common sense) suggests that one aspect of the Thanksgiving season can actually lift the spirits, and it\'s built right into the holiday &mdash; expressing gratitude.&lt;/p&gt;&lt;p&gt;The word gratitude is derived from the Latin word &lt;i&gt;gratia&lt;/i&gt;, which means grace, graciousness, or gratefulness (depending on the context). In some ways gratitude encompasses all of these meanings. Gratitude is a thankful appreciation for what an individual receives, whether tangible or intangible. With gratitude, people acknowledge the goodness in their lives. In the process, people usually recognize that the source of that goodness lies at least partially outside themselves. As a result, gratitude also helps people connect to something larger than themselves as individuals &mdash; whether to other people, nature, or a higher power.&lt;/p&gt;&lt;p&gt;In positive psychology research, gratitude is strongly and consistently associated with greater happiness. Gratitude helps people feel more positive emotions, relish good experiences, improve their health, deal with adversity, and build strong relationships.&lt;/p&gt;&lt;p&gt;People feel and express gratitude in multiple ways. They can apply it to the past (retrieving positive memories and being thankful for elements of childhood or past blessings), the present (not taking good fortune for granted as it comes), and the future (maintaining a hopeful and optimistic attitude). Regardless of the inherent or current level of someone\'s gratitude, it\'s a quality that individuals can successfully cultivate further.&lt;/p&gt;&lt;p&gt;Two psychologists, Dr. Robert A. Emmons of the University of California, Davis, and Dr. Michael E. McCullough of the University of Miami, have done much of the research on gratitude. In one study, they asked all participants to write a few sentences each week, focusing on particular topics.&lt;/p&gt;&lt;p&gt;One group wrote about things they were grateful for that had occurred during the week. A second group wrote about daily irritations or things that had displeased them, and the third wrote about events that had affected them (with no emphasis on them being positive or negative). After 10 weeks, those who wrote about gratitude were more optimistic and felt better about their lives. Surprisingly, they also exercised more and had fewer visits to physicians than those who focused on sources of aggravation.&lt;/p&gt;&lt;p&gt;Another leading researcher in this field, Dr. Martin E. P. Seligman, a psychologist at the University of Pennsylvania, tested the impact of various positive psychology interventions on 411 people, each compared with a control assignment of writing about early memories. When their week\'s assignment was to write and personally deliver a letter of gratitude to someone who had never been properly thanked for his or her kindness, participants immediately exhibited a huge increase in happiness scores. This impact was greater than that from any other intervention, with benefits lasting for a month.&lt;/p&gt;&lt;p&gt;Of course, studies such as this one cannot prove cause and effect. But most of the studies published on this topic support an association between gratitude and an individual\'s well-being.&lt;/p&gt;&lt;p&gt;Other studies have looked at how gratitude can improve relationships. For example, a study of couples found that individuals who took time to express gratitude for their partner not only felt more positive toward the other person but also felt more comfortable expressing concerns about their relationship.&lt;/p&gt;&lt;p&gt;Managers who remember to say &quot;thank you&quot; to people who work for them may find that those employees feel motivated to work harder. Researchers at the Wharton School at the University of Pennsylvania randomly divided university fund-raisers into two groups. One group made phone calls to solicit alumni donations in the same way they always had. The second group &mdash; assigned to work on a different day &mdash; received a pep talk from the director of annual giving, who told the fund-raisers she was grateful for their efforts. During the following week, the university employees who heard her message of gratitude made 50% more fund-raising calls than those who did not.&lt;/p&gt;&lt;p&gt;There are some notable exceptions to the generally positive results in research on gratitude. One study found that middle-aged divorced women who kept gratitude journals were no more satisfied with their lives than those who did not. Another study found that children and adolescents who wrote and delivered a thank-you letter to someone who made a difference in their lives may have made the other person happier &mdash; but did not improve their own well-being. This finding suggests that gratitude is an attainment associated with emotional maturity.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Ways to cultivate gratitude&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Gratitude is a way for people to appreciate what they have instead of always reaching for something new in the hopes it will make them happier, or thinking they can\'t feel satisfied until every physical and material need is met. Gratitude helps people refocus on what they have instead of what they lack. And, although it may feel contrived at first, this mental state grows stronger with use and practice.&lt;/p&gt;&lt;p&gt;Here are some ways to cultivate gratitude on a regular basis.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&lt;strong&gt;Write a thank-you note.&lt;/strong&gt;&lt;/i&gt; You can make yourself happier and nurture your relationship with another person by writing a thank-you letter expressing your enjoyment and appreciation of that person\'s impact on your life. Send it, or better yet, deliver and read it in person if possible. Make a habit of sending at least one gratitude letter a month. Once in a while, write one to yourself.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&lt;strong&gt;Thank someone mentally.&lt;/strong&gt;&lt;/i&gt; No time to write? It may help just to think about someone who has done something nice for you, and mentally thank the individual.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&lt;strong&gt;Keep a gratitude journal.&lt;/strong&gt;&lt;/i&gt; Make it a habit to write down or share with a loved one thoughts about the gifts you\'ve received each day.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&lt;strong&gt;Count your blessings.&lt;/strong&gt;&lt;/i&gt; Pick a time every week to sit down and write about your blessings &mdash; reflecting on what went right or what you are grateful for. Sometimes it helps to pick a number &mdash; such as three to five things &mdash; that you will identify each week. As you write, be specific and think about the sensations you felt when something good happened to you.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&lt;strong&gt;Pray.&lt;/strong&gt;&lt;/i&gt; People who are religious can use prayer to cultivate gratitude.&lt;/p&gt;&lt;p&gt;&lt;i&gt;&lt;strong&gt;Meditate.&lt;/strong&gt;&lt;/i&gt; Mindfulness meditation involves focusing on the present moment without judgment. Although people often focus on a word or phrase (such as &quot;peace&quot;), it is also possible to focus on what you\'re grateful for (the warmth of the sun, a pleasant sound, etc.).&lt;/p&gt;&lt;p&gt;So why be grateful?&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Taken From: https://www.health.harvard.edu/healthbeat/giving-thanks-can-make-you-happier/&lt;/p&gt;', '2021-04-15 09:06:08'),
(12, 1, 'Does Sumer Make You SAD?', '1621771775_SAD_summer.jpg', '&lt;p&gt;Most people have heard about Seasonal Affective Disorder, also known as SAD. It&rsquo;s most commonly associated with winter. Those affected by SAD have a difficult time with colder weather, shorter days, and less sunshine. Though not as common as experiencing SAD in the winter, SAD can also impact lives in the summer.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;SUMMER HEAT CAN TRIGGER SAD&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;For those living in climates where the heat is exceptionally high during the summer, sometimes that heat makes everyday life more difficult. For example, many residents of southern states are used to breaking a sweat just walking from their front door to their cars during the summer. Temperatures break the 100-degree mark consistently in July and August. The temptation to stay indoors in air-conditioning can hamper plans. In a society already beleaguered by forced homestays due to the pandemic, this can prove problematic.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;SCHEDULE CHANGES CAN FEEL STRESSFUL&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Once summer rolls around, many schedule changes accompany it. Vacations that should be carefree can trigger anxiety in some people. Children who are now home from school all day can push a parent&rsquo;s buttons. All of this can force changes in sleeping and eating patterns, causing stress in a person&rsquo;s life.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;PRESSURE TO BE FIT AND ACTIVE&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Every summer brings on a slew of advertising designed to make the public feel bad about their looks. Pressure to lose weight and have a beach-ready body crops up everywhere. Advertising promotes the idea that a sunny day means exercising and playing sports outdoors. Not everyone feels they fit the ideal for either of these expectations. Feeling that they cannot fulfill these &ldquo;standards&rdquo;&amp;nbsp;can add to the development of SAD.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Taken from: https://www.detoxcentercolorado.com/seasonal-affective-disorder/&lt;/p&gt;', '2021-04-15 09:06:39'),
(13, 1, 'Masked Anxiety', '1621770774_masked_anxiety.jpg', '&lt;p&gt;We just want to start with a bit of honesty: we hate wearing face masks. They make us feel like we can&rsquo;t breathe and they make our faces sweaty. Also, they scare Abs&rsquo; grandkids. So, overall, wearing a face covering sucks&mdash;a lot. Especially for Anxiety Sisters.&lt;/p&gt;&lt;p&gt;That said, &lt;i&gt;face masks during a global pandemic are absolutely essential&lt;/i&gt;. Scientific models show that if 80 percent of us wore face masks 80 percent of the time, we could greatly reduce the spread of COVID-19 (and other illnesses too). In fact, one Texas A&amp;amp;M study revealed that, in New York, where face masks are required and compliance is high, more than 66,000 cases of infection were prevented in one month. They also found that not wearing a mask dramatically increases the chances of contracting COVID-19.&lt;/p&gt;&lt;p&gt;To summarize, if we want to be socially responsible and prevent ourselves from contracting the illness, we really have to wear the masks. But, we do have to acknowledge that face masks can also be really difficult, even terrifying, for many of us Anxiety Sisters.&lt;/p&gt;&lt;p&gt;People already dealing with panic know what it is like to struggle to breathe. Put a mask on top of a panic attack and things only feel worse. We often tell panic sufferers to cool down and/or loosen all constraints&ndash;in other words, the exact opposite of what it feels like to wear a mask. Likewise, people with PTSD&mdash;especially those surviving sexual or physical violence and/or violent crime&mdash;may feel especially vulnerable. If someone has had the experience of being muted, muffled, or restricted physically, masks can be so triggering.&lt;/p&gt;&lt;p&gt;We have some ideas for mask wearers with anxiety (including us). We hope they help.&lt;/p&gt;&lt;p&gt;1) Try putting a drop of essential oil on your mask. &amp;nbsp;Many Anxiety Sisters use lavender which is soothing and has a pleasant smell.&lt;/p&gt;&lt;p&gt;2) Find a mask that feels most comfortable for you. There are so many types ranging from paper to various fabrics. Experiment with a couple of different ones to find the right fit.&lt;/p&gt;&lt;p&gt;3) Feel free to express yourself creatively by buying a mask with a pretty design. Etsy has so many sellers who are happy to make inexpensive masks in every color and pattern. (Abs wears a mask with cat whiskers and a heart-shaped nose.)&lt;/p&gt;&lt;p&gt;4) Think about using a clear shield. We just tried one and it covers our eyes too. They also help breathing feel less restricted.&lt;/p&gt;&lt;p&gt;5) Bring your spin kit when you are out. Have plenty of soothers to help when the face masks feel overwhelming.&lt;/p&gt;&lt;p&gt;6) Take breaks as you need them. Going outside for a few minutes where you can take off your mask (if it is not crowded) can really help.&lt;/p&gt;&lt;p&gt;We also want you to remember that you are not alone. So many people are struggling right now in so many ways. If masks are triggering you, please have self-compassion. Let yourself know that your mask is protecting you and everyone around you, and be proud of yourself for doing something so uncomfortable.&lt;/p&gt;&lt;p&gt;We are here to offer you any support we can. This whole damn pandemic is so very hard. The only way to get through this is by being kind to ourselves and to each other.&lt;/p&gt;&lt;p&gt;Post From: https://anxietysisters.com/masked-anxiety/&lt;/p&gt;', '2021-04-15 09:07:10'),
(15, 2, 'Advantages and Disadvantages of Cloud Computing', '1621760515_dotm2.jpeg', '&lt;p&gt;Technological breakthroughs are significantly remolding organizations - making their workflows and processes more integrated and streamlined. Together with these breakthroughs are the different sectors of the world racing towards advancement by integrating these new innovations to their daily processes. No matter an organization&rsquo;s size, the application of technology has provided a means of escape from all &ndash; or at least most &ndash; of the paper clutter associated with a paper-driven environment. &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p&gt;The availability and continuous advancement of a lot of new technology in recent years has fueled many organizations today. The current pace of innovative advancement is applying significant changes on the way individuals live and work. It is greatly affecting all disciplines, economies and businesses, maybe none more so than production, counting how, what, why and where people create and provide items and services.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Enterprise Resource Planning Systems&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Enterprise Resource Planning (ERP) systems are one of the things brought about by this widespread improvement especially in the world of information technology. ERP is a system that automates core business processes. It coordinates all departmental functions (Production, Human resources, Sales, Finance, etc.) across organizations into one single framework satisfying requirements of all offices. It is a system tailored to meet the needs of individual businesses of all sizes making them a critical tool for business success. In short, ERP unifies people and processes across an organization.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cloud Computing and Cloud-Based ERP&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;And just when businesses thought what they have is already the maximum, the birth of cloud computing has made things even better. Cloud computing is described as the delivery of on-demand services such as data storage, servers, databases, networking, and software resources through the web. That being said, it was seen as an even bigger opportunity for organizations to utilize as the cloud serves as a general storage for almost everything that any organization needs to get their work done by putting them to huge computer clusters far away in cyberspace. The web becomes the cloud and everything saved there can be accessed and is available from any internet-connected devices anywhere in the world. This takes away the burden of organizations having to store and safeguard all their resources in physical locations where they need to buy most of the devices required.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Advantages and Disadvantages of Cloud-Based ERP&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Innovation is a key factor to business success. The quicker an organization innovates, the speedier it is to reach their goals. Conventional on-site ERP systems, however, have its downsides and frequently prove too rigid to keep up with advancing innovation. Today&rsquo;s work environment requires teams and employees to collaborate on important documents even from remote locations making cloud-based ERP very ideal.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;But like any other thing, cloud-based ERPs have its advantages and disadvantages. Some of its advantages include:&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Low initial cost&lt;/strong&gt; &ndash; Rather than purchasing resources onsite that needs to be maintained, cloud-based ERP uses tools that are leased monthly which is why it has much lower upfront cost than the traditional or on-site ERP. Although many studies consider this benefit to be more applicable to small and medium enterprises than the large ones, it is still considered as a very noteworthy point.&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Low operating cost&amp;nbsp;&lt;/strong&gt;&ndash; Since cloud-based ERPs are in the cloud, it helps organizations save on costs for maintenance, updates, configuration, and other IT related costs and efforts. It also helps save energy consumption.&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Easy to implement&amp;nbsp;&lt;/strong&gt;&ndash; One of the biggest advantage of cloud-based ERP is that they take less than 24 hours for the technical environment to be configured which on an on-site ERP would be such an extensive job.&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Scalability&amp;nbsp;&lt;/strong&gt;&ndash; Depending on an organization current needs, it is very easy to adjust scales using cloud-based ERPs since they are highly elastic.&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Remote access -&amp;nbsp;&lt;/strong&gt;One of the requirement of current workplaces is the ability of all teams and employees to collaborate anytime, anywhere. This has been made possible by cloud-based ERPs as it can be accessed as long as an individual is able to connect to the internet.&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Ability to focus on core business competencies &ndash;&amp;nbsp;&lt;/strong&gt;Cloud-based ERPs allow organizations to outsource their IT functions. This gives them an opportunity to focus more on their core business especially in cases where their employees are not so skilled in IT since it is not the business focus.&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Real-time Analytics &ndash;&amp;nbsp;&lt;/strong&gt;Cloud-based ERPs provides organizations with access to data real time. This is very important since it lets them see data as it becomes available and in business, relevant and up-to-date data is very critical to decision-making.&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Help around the clock &ndash;&amp;nbsp;&lt;/strong&gt;As a subscription-based model, service providers provide support services 24/7 for any issues that might arise. This is one of the best features of a cloud-based ERP.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Here are some of the disadvantages of cloud-based ERP:&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Long-term cost &ndash;&amp;nbsp;&lt;/strong&gt;Although cloud-based ERPs are known for being cost-effective, which is true during initial set-up, the service&rsquo;s long-term cost may surpass a one-time investment. This service is also mostly modular, meaning the more module an organization uses, the more it needs to pay.&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Internet dependent &ndash;&lt;/strong&gt; Using could-based ERP is very much reliant on internet connectivity hence it is very important for an organization to wisely choose their internet service provider otherwise it may interfere with the business process.&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Security risks &ndash;&lt;/strong&gt; One of the biggest concern over using cloud-based ERP is data security. Although service providers use cutting edge security to safeguard client&rsquo;s data, the chance of hackers stealing data on the cloud is still too high. Also, the owners of these cloud services are able to access your organization&rsquo;s data which can be a little bit worrying.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;The cloud for sure is very efficient but practically a few applications are best left as on-site systems. Before moving to the cloud, clients must weigh between the advantages and disadvantages. One advantage could cause multiple disadvantages and vice versa.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;References:&lt;/p&gt;&lt;p&gt;World Economic Forum. &ldquo;Technology and Innovation for the Future of Production: Accelerating Value&amp;nbsp;&lt;/p&gt;&lt;p&gt;Creation.&rdquo; &lt;i&gt;World Economic Forum&lt;/i&gt;, World Economic Forum, 1 Mar. 2017,&amp;nbsp;&lt;/p&gt;&lt;p&gt;apo.org.au/node/218211. Accessed 27 03 2021.&lt;/p&gt;&lt;p&gt;McCue, Ian. &ldquo;What Is ERP (Enterprise Resource Planning)?&rdquo; &lt;i&gt;Oracle NetSuite&lt;/i&gt;, 19 Jan. 2021, &amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;http://www.netsuite.com/portal/resource/articles/erp/what-is-erp.shtml&quot;&gt;www.netsuite.com/portal/resource/articles/erp/what-is-erp.shtml&lt;/a&gt;. Accessed 27 03 2021.&lt;/p&gt;&lt;p&gt;Frankenfield, Jake. &ldquo;How Cloud Computing Works.&rdquo; &lt;i&gt;Investopedia&lt;/i&gt;, Investopedia, 16 Sept. 2020,&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;http://www.investopedia.com/terms/c/cloud-computing.asp&quot;&gt;www.investopedia.com/terms/c/cloud-computing.asp&lt;/a&gt;. Accessed 27 03 2021.&lt;/p&gt;&lt;p&gt;Abd Elmonem, Mohamed&amp;nbsp; A., et al. &ldquo;Benefits and Challenges of Cloud ERP Systems &ndash; A Systematic&amp;nbsp;&lt;/p&gt;&lt;p&gt;Literature Review.&rdquo; &lt;i&gt;Sciencedirect.com&lt;/i&gt;, 2017,&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;http://www.sciencedirect.com/science/article/pii/S2314728816300599&quot;&gt;&lt;i&gt;www.sciencedirect.com&lt;/i&gt;/science/article/pii/S2314728816300599&lt;/a&gt;. Accessed 27 03 2021.&lt;/p&gt;&lt;p&gt;Quirk, Elizabeth. &ldquo;The Best Benefits of Cloud ERP.&rdquo; &lt;i&gt;Best ERP Software&lt;/i&gt;, Vendors, News and Reviews,&amp;nbsp;&lt;/p&gt;&lt;p&gt;Best ERP Software, Vendors, News and Reviews, 5 Nov. 2019,&amp;nbsp;&lt;/p&gt;&lt;p&gt;solutionsreview.com/enterprise-resource-planning/the-best-benefits-of-cloud-erp/.&lt;/p&gt;&lt;p&gt;Accessed 27 03 2021.&lt;/p&gt;&lt;p&gt;&ldquo;What Is Cloud-Based ERP Software?&rdquo; &lt;i&gt;Acumatica Cloud ERP&lt;/i&gt;, 22 Sept. 2020,&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;http://www.acumatica.com/what-is-cloud-erp-software/&quot;&gt;www.acumatica.com/what-is-cloud-erp-software/&lt;/a&gt;. Accessed 27 03 2021.&lt;/p&gt;', '2021-05-23 16:59:10'),
(17, 2, 'Who Makes Up Your Mosaic?', '1621857287_mosaic.jpeg', '&lt;p&gt;My friend used to drink his coffee black because when he was in college this other student told him all about its benefits and he fell in love with the idea so he got his taste buds used to it.&amp;nbsp;&lt;br&gt;He made sure to stay vegan because after going vegan with his ex and speaking to her a few months after they had broken up, and finding out she had given up, he made it a point to say that he did it for him and not because they both did it.&amp;nbsp;&lt;br&gt;He makes it a point to swing any can of sauce in a circular motion \'cause when he was nine he saw his dad do it once and he found out that it was the best way to get every last drop of the sauce.&amp;nbsp;&lt;br&gt;He cooks for three people even though he lives alone because his family taught him to cook for strangers who he doesn\'t know might show up or because he might just be extra hungry.&amp;nbsp;&lt;br&gt;He makes sure to look at himself in the mirror when he\'s nude because when he was studying theater, his teacher told them how can they expect to ever use their bodies properly if they\'re afraid to look at every part of it, nonjudgmentally.&amp;nbsp;&lt;br&gt;&lt;br&gt;Every person out there is a mosaic of everyone they\'ve ever met.&amp;nbsp;&lt;br&gt;I think it\'s a beautiful idea that if you look closer into each and every single person, you could see every other person they\'ve been influenced with in their life - for the good, the bad, the ugly, and all of it in between.&amp;nbsp;&lt;br&gt;&lt;br&gt;I put dashes on my sevens and zeroes because that\'s how my eight grade teacher used to write.&amp;nbsp;&lt;br&gt;I say words like \'capeesh\' and \'manjia\' because that\'s what my Italian New Yorker Grandfather used to speak.&amp;nbsp;&lt;br&gt;I studied traditional German folk dancing for six years because a friend of a family friend wanted me to learn it.&amp;nbsp;&lt;br&gt;I love penguins because of a kid I met at summer camp wo was obsessed with them.&amp;nbsp;&lt;br&gt;I punch the ceiling of my car when I go through yellow lights because two of my friends from college used to do that all the time.&amp;nbsp;&lt;br&gt;I tried being vegan because this girl that I have a crush on in high school was vegan.&amp;nbsp;&lt;br&gt;I read psychology books because a guy I met from a shit posting group on Facebook got me into them.&amp;nbsp;&lt;br&gt;&lt;br&gt;Human beings are collages, mosaics.&amp;nbsp;&lt;br&gt;If you zoom in far enough into a person, you\'ll see the little pieces of everyone who they\'ve ever met - haphazardly stuck together and incorporated into a unique and beautiful piece of art.&amp;nbsp;&lt;br&gt;You are the living memory of every person who has mattered to you, even for a moment.&amp;nbsp;&lt;br&gt;&lt;br&gt;Who makes up you own mosaic?&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Source: Tiktok videos of @sebastienrteller and @joshuatreeinternationalpark via #mosaicchallenge&lt;/p&gt;', '2021-05-24 19:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `id` int(11) NOT NULL,
  `rank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `rank`) VALUES
(1, 'Instructor I'),
(2, 'Instructor II'),
(3, 'Instructor III'),
(4, 'Instructor IV');

-- --------------------------------------------------------

--
-- Table structure for table `requirements_list`
--

CREATE TABLE `requirements_list` (
  `req_id` int(11) NOT NULL,
  `req_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ay` varchar(100) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirements_list`
--

INSERT INTO `requirements_list` (`req_id`, `req_name`, `description`, `ay`, `sem`, `created_at`) VALUES
(14, 'IPCR', '<p>IPCR Submission (URGENT)</p>', '2022-2023', 'First', '2022-04-03 21:06:12'),
(15, 'New Req Urgent', '<p>Hello please submit this new req asap!</p>', '2022-2023', 'First', '2022-04-11 20:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `requirements_submitted`
--

CREATE TABLE `requirements_submitted` (
  `req_id` int(11) NOT NULL,
  `empid` varchar(20) NOT NULL,
  `file` varchar(50) NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirements_submitted`
--

INSERT INTO `requirements_submitted` (`req_id`, `empid`, `file`, `date_submitted`) VALUES
(1, '3', '1622191988_Faculty Submission Data Report.xls', '2021-05-28 08:28:49'),
(2, '201710040', '1622431801_Modular Programming Assignment.docx', '2021-05-31 03:30:01'),
(14, '201710040', '1649020069_ITEC 106 Module Chapter 1 Part 1.pdf', '2022-04-03 21:07:49'),
(15, '201710040', '1649732246_Eval.PNG', '2022-04-12 02:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `empid` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `empid`, `name`, `position`, `image`) VALUES
(3, 1, 'Prof. Marilou P. Luseco', 'Director', '1621277136_team3.jpeg'),
(4, 0, 'Fritzie Joyce M. Laus', 'Clerk', '1621277346_team2.jpeg'),
(5, 0, 'Maria Jyka C. Saldon', 'Clerk', '1621857749_team3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(11) NOT NULL,
  `empid` varchar(11) NOT NULL,
  `eventtitle` varchar(150) NOT NULL,
  `location` varchar(100) NOT NULL,
  `speaker` varchar(100) NOT NULL,
  `eventdate` date NOT NULL,
  `file` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `empid`, `eventtitle`, `location`, `speaker`, `eventdate`, `file`) VALUES
(1, '1', 'Bola Hindi Droga: An Anti-Drug Campaign for Out of School Youth', 'Tanza, Cavite', 'SPO3 Maria Shiela Bernales', '2022-03-28', '1649663613_Bunny Masong - Certificate of Internship Completion.pdf'),
(2, '1', 'SciFi: An Event to Fight Climate Change', 'Sutherland, Singapore', 'Anthony Ng', '2021-10-06', '1649664298_MASONG-BUNNY-OJT-EVALUATION-FORM.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `empid` varchar(15) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(25) NOT NULL,
  `birthday` date DEFAULT NULL,
  `contactno` bigint(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`empid`, `lastname`, `firstname`, `middlename`, `birthday`, `contactno`, `email`, `password`, `position`, `rank`, `department`, `status`, `created_at`) VALUES
('1', 'Luseco', 'Marilou', 'De Vera', '1975-02-27', 9885542111, 'superadmin@gmail.com', '$2y$10$kecv/fxhII9sLW/FtkFymuBf.ov8DcS6nNn0so2qM//VSkCUQnrqK', 'Super Admin', 'ODI Staff', 'Office of the Director for Instructions', 'Active', '2021-05-28 06:27:46'),
('13', 'Guevarra', 'Charlie', '', NULL, 0, 'email@email.com', '$2y$10$QAwigutJLYXqMLyCF3eCO.kIYEPRRf4VxuFxs7Be0u1XGSqkEYXtG', 'Faculty', 'Instructor I', 'Department of Arts and Sciences', 'Active', '2021-06-14 15:49:31'),
('2', 'admin', 'admin', '', NULL, 0, 'admin@gmail.com', '$2y$10$oHTLuhmmUXZJN6zHcd49fekA0gd14hz8JjdsUI7QSHcPWh1ISiDny', 'Admin', 'ODI Staff', 'Office of the Director for Instructions', 'Active', '2021-05-28 06:27:46'),
('20', '!!TO_BE_EDITED!!', '!!TO_BE_EDITED!!', '!!TO_BE_EDITED!!', '0000-00-00', 0, '20@gmail.com', '$2y$10$uz64q4GBGOJ5TcU8N8vEBuXYdLoYeH7PrnzeMJEz.ystWb3IOChV2', '!!TO_BE_EDITED!!', '!!TO_BE_EDITED!!', '!!TO_BE_EDITED!!', 'Pending', '2022-04-12 03:16:29'),
('201710040', 'Masong', 'Bunny', '', NULL, 0, 'masongbunny7@gmail.com', '$2y$10$kXzIhNZctf/wK1K68gI60eRLdFnfU8JxC8p14aqjf15dP/3Kjszja', 'Faculty', 'Instructor II', 'Department of Computer Studies', 'Active', '2021-05-31 03:13:06'),
('201910010', 'Estrada', 'Jack', '', NULL, 0, 'trial@trial', '$2y$10$wDh5l3iDz7Zu91KaXn6JqepodjEqOcWTwGFn2iZO.IoSIZ5vmjSCK', 'Faculty', 'Instructor I', 'Department of Arts and Sciences', 'Active', '2021-06-14 16:01:43'),
('21', 'Christenson', 'Chris', ' Simon', '1997-01-06', 9633964213, 'christensonchris94@gmail.com', '$2y$10$82hXzPvBbVmB4Re2QFZ.HOD0fyTTA0dYH4fmOMfXn1xAPkDGJ.gsG', 'Faculty', 'Instructor I', 'Department of Arts and Sciences', 'Active', '2022-04-11 23:50:40'),
('3', 'chairperson', 'chairperson', '', NULL, 0, 'masongbunny.official@gmail.com', '$2y$10$Eno5bgrH6lnvY8N4k6m6mu7P18yZHIfW7Q1k3GiBmrexnK0rauXtq', 'Chairperson', 'Instructor III', 'Department of Computer Studies', 'Active', '2021-05-28 06:29:49'),
('4', 'faculty', 'faculty', '', NULL, 0, 'faculty_dcs@gmail.com', '$2y$10$0TFYbgF5Is624EYBtWv8SuI8IIbRM46kgLRXrBQVbJkxYlqU8rFBK', 'Faculty', 'Instructor I', 'Department of Computer Studies', 'Active', '2021-05-28 06:29:49'),
('5', 'LSHS', 'Faculty', '', NULL, 0, 'lshsfaculty@gmail.com', '$2y$10$Kp9xLoWylEY/Y7t8iGSwmeuqkDzq1mbBeRDL8J.32dCish2wLiEh2', 'Faculty', 'Instructor I', 'Laboratory Science High School', 'Active', '2021-05-30 03:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `workexperience`
--

CREATE TABLE `workexperience` (
  `id` int(11) NOT NULL,
  `empid` varchar(11) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workexperience`
--

INSERT INTO `workexperience` (`id`, `empid`, `companyname`, `position`, `startdate`, `enddate`) VALUES
(2, '1', 'CvSU - Cavite City Campus', 'Clerk II', '2022-04-01', '2022-04-30'),
(4, '1', 'House Technology Industries Pte. Ltd', 'Manager', '2020-02-02', '2021-10-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FromUser` (`FromUser`),
  ADD KEY `ToUser` (`ToUser`);

--
-- Indexes for table `current_academic_details`
--
ALTER TABLE `current_academic_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dotm`
--
ALTER TABLE `dotm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educbackground`
--
ALTER TABLE `educbackground`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirements_list`
--
ALTER TABLE `requirements_list`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`empid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `workexperience`
--
ALTER TABLE `workexperience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `current_academic_details`
--
ALTER TABLE `current_academic_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dotm`
--
ALTER TABLE `dotm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `educbackground`
--
ALTER TABLE `educbackground`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requirements_list`
--
ALTER TABLE `requirements_list`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `workexperience`
--
ALTER TABLE `workexperience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`FromUser`) REFERENCES `users` (`empid`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`ToUser`) REFERENCES `users` (`empid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
