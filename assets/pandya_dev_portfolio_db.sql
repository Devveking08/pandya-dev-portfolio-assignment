-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2024 at 07:53 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pandya_dev_portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutsection`
--

DROP TABLE IF EXISTS `aboutsection`;
CREATE TABLE IF NOT EXISTS `aboutsection` (
  `SectionID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `Description` text,
  `UserID` int DEFAULT NULL,
  PRIMARY KEY (`SectionID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aboutsection`
--

INSERT INTO `aboutsection` (`SectionID`, `Title`, `Description`, `UserID`) VALUES
(1, 'Front-end Developer', 'Passionate about creating beautiful and responsive user interfaces.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

DROP TABLE IF EXISTS `contact_info`;
CREATE TABLE IF NOT EXISTS `contact_info` (
  `contact_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `e_mail` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `c_subject` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `comments` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`contact_id`, `f_name`, `e_mail`, `c_subject`, `comments`) VALUES
(33, 'Dev', 'd_pandya164813@fanshaweonline.ca', 'REQ', 'I love shanks '),
(32, 'Dev', 'd_pandya164813@fanshaweonline.ca', 'Assignment REQ', 'Good work'),
(31, 'Dev', 'd_pandya164813@fanshaweonline.ca', 'Regarding Recent Output', 'Nice one '),
(30, 'Dev', 'd_pandya164813@fanshaweonline.ca', 'Shanks ', 'Are you working on it ?'),
(29, 'Dev', 'd_pandya164813@fanshaweonline.ca', 'Submission', 'Thanks '),
(28, 'dwdwf', 'd_pandya164813@fanshaweonline.ca', 'wfderghetrhrtfjthygfk', 'fefefef'),
(34, 'Aiden Wotton', 'Aidenwotton@gmail.com', 'Feedback', 'Site looks good, nothing much to say');

-- --------------------------------------------------------

--
-- Table structure for table `emailfeedback`
--

DROP TABLE IF EXISTS `emailfeedback`;
CREATE TABLE IF NOT EXISTS `emailfeedback` (
  `FeedbackID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) DEFAULT NULL,
  `FeedbackText` text,
  PRIMARY KEY (`FeedbackID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `emailfeedback`
--

INSERT INTO `emailfeedback` (`FeedbackID`, `Email`, `FeedbackText`) VALUES
(1, 'luffy@example.com', 'Great portfolio! I love your design work.'),
(2, 'sanji@example.com', 'Your projects are impressive. Keep up the good work!'),
(3, 'zoro@example.com', 'I enjoyed exploring your website. Very user-friendly.'),
(4, 'mpresident972@gmail.com', 'wefwefwegewrgerwger');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_id` int NOT NULL,
  `project_img` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `project_id`, `project_img`) VALUES
(1, 1, 'ceci-1.jpg'),
(2, 1, 'ceci-2.jpg'),
(3, 1, 'ceci-3.jpg'),
(4, 2, 'earbuds-1.jpg'),
(5, 2, 'earbuds-2.jpg'),
(6, 2, 'earbuds-3.jpg'),
(7, 3, 'IN-1.jpg'),
(8, 3, 'IN-2.jpg'),
(9, 3, 'IN-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image_url` varchar(50) NOT NULL,
  `Intro` varchar(1200) NOT NULL,
  `Work` varchar(7000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image_url`, `Intro`, `Work`) VALUES
(1, 'CECI ', 'In response to the growing demand for innovative and high-quality cosmetics, our team embarked on a journey to establish a new cosmetics brand named Ceci. This case study delves into the creative process, strategic decisions, and marketing efforts that went into the development of Ceci, showcasing the brand\'s identity through meticulously designed mock products and a compelling commercial video.', 'ceci-home.jpg', 'The primary objective was to create a unique and captivating cosmetics brand that resonates with the target audience, stands out in a competitive market, and communicates the essence of beauty, elegance, and innovation.', 'Through meticulous design, a captivating commercial video, and strategic marketing efforts, Ceci successfully established itself as a distinctive and desirable cosmetics brand. The case study highlights the importance of a comprehensive approach to brand development, combining visual aesthetics with effective storytelling and targeted marketing strategies.'),
(2, 'Shanks Earbuds', 'Shanks Earbuds is a unique and innovative project that combines the passion for anime with the precision of modern technology. The project aimed to design and create a set of earbuds inspired by the popular One Piece character, Shanks. The journey involved conceptualization, design, 3D modeling using Cinema 4D, and the development of a dedicated website to showcase the product.', 'shanks-earbuds.jpg', 'The initial phase involved extensive research into the character of Shanks and the aesthetics associated with One Piece. The design team focused on translating Shanks\' iconic features, such as his distinctive red hair, black coat, and trademark straw hat, into the earbuds. The aim was to create a product that not only paid homage to the character but also delivered a premium and comfortable listening experience.', 'iconic Design: The earbuds feature Shanks\' red hair, black coat, and straw hat, creating a visually striking and recognizable appearance.\r\nPremium Sound Quality: Advanced audio technology was integrated to ensure a superior listening experience for users.\r\nComfortable Fit: The ergonomic design of the earbuds prioritizes comfort during extended use'),
(3, 'Industry night', 'The Fanshawe College Student Portfolio Showcase Website project emerged as a collaborative endeavor among students from the Interactive Media Design program. The primary objective was to design and develop a mobile-first, responsive website that serves as a comprehensive platform for students to exhibit their skills, projects, and achievements. The website would be a focal point during the Industry Night event in April, connecting students with potential employers, industry professionals, and pe', 'the-knights.jpg', 'The guiding principles for the project were encapsulated in three key phrases: \"Create, Inspire, Transform.\" These phrases formed the foundation for the promotional video, serving as a mantra that reflected the spirit and purpose of the Student Portfolio Showcase.', 'The project not only showcased the talents of Interactive Media Design students but also demonstrated the power of collaboration, creativity, and effective leadership. The Fanshawe College Student Portfolio Showcase Website stands as a testament to the commitment and capability of the team in creating a meaningful and impactful digital presence for their peers.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `Email`) VALUES
(1, 'Devveking01', 'devpandya750@.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
