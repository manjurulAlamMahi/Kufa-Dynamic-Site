-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 12:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_content`
--

CREATE TABLE `about_content` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `about_image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_content`
--

INSERT INTO `about_content` (`id`, `sub_title`, `title`, `description`, `about_image`, `status`) VALUES
(1, 'Aperiam similique au', 'Eveniet nostrud aut', 'Impedit debitis eni', '1.png', 0),
(2, 'Details', 'About Boogeyamn', 'John Wick is a fictional character and the titular protagonist of the neo-noir action thriller film series John Wick, portrayed by Keanu Reeves. John is a legendary hitman who had retired until a gang invades his house, steals his car, and kills the puppy that his late wife Helen had given him.', '2.png', 1),
(3, 'Facere rem eum culpa', 'Sed irure sit porro ', 'Quidem doloribus atq', '3.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `banner_content`
--

CREATE TABLE `banner_content` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_content`
--

INSERT INTO `banner_content` (`id`, `sub_title`, `title`, `description`, `status`) VALUES
(8, 'Hey!', 'I am Mahi Alam ', 'Thanks for visiting my Website. I am Back End Developer.  ', 1),
(10, 'ola ', 'im oliver rafi ', 'I m oliver ami girzay jaiya mara khaic tai amar name akhn oliver ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE `banner_image` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`id`, `image`, `status`) VALUES
(5, '5.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`, `status`) VALUES
(1, '1.png', 1),
(2, '2.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `quotes` varchar(500) NOT NULL,
  `customer_img` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `title`, `quotes`, `customer_img`, `status`) VALUES
(1, '0', 'Dolore beatae consec', 'Aute est veritatis ', '1.png', 0),
(2, '0', 'Molestiae ut soluta ', 'Omnis sapiente volup', '2.png', 0),
(3, 'Macaulay Tyson', 'Non doloribus id mag', 'Illo mollit temporib', '3.png', 0),
(4, 'Tahsan Sir', 'Head of CIT', ' An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result ', '4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fact_area`
--

CREATE TABLE `fact_area` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fact_area`
--

INSERT INTO `fact_area` (`id`, `icon`, `number`, `content`, `status`) VALUES
(1, 'fa-audio-description', 90, 'Audio', 1),
(3, 'fa-clock-o', 705, 'Quos dolor ut sint n', 1),
(4, 'fa-flask', 999, 'Similique voluptas a', 1),
(5, 'fa-asl-interpreting', 768, 'Et eos unde harum fu', 1),
(6, 'fa-arrow-circle-left', 908, 'Cupiditate iure et a', 0),
(7, 'fa-automobile', 374, 'Doloribus sint rerum', 0);

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `number` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `details` varchar(250) NOT NULL,
  `office_at` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `address`, `number`, `email`, `details`, `office_at`, `status`) VALUES
(8, '121/3 Tejkunipara Bijoy Sarai Tower, Dhaka', 1619833307, 'mahialam885@gmail.com', 'Here is some information where you can find my office and hire me for your project/work/job . I m looking forward to build a great relation with you. Hope you will reach me. Thank You ', 'Dhaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `status`) VALUES
(1, '1.png', 1),
(2, '2.png', 0),
(3, '3.png', 0),
(4, '4.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messeges`
--

CREATE TABLE `messeges` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `messege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messeges`
--

INSERT INTO `messeges` (`id`, `name`, `email`, `messege`) VALUES
(1, 'Francesca Davenport', 'guwafobad@mailinator.com', 'Sit amet et quos do'),
(2, 'Yuri Young', 'tumahokyvu@mailinator.com', 'Soluta quibusdam in '),
(3, 'Mahi', 'mahi@mailinator.com', 'hkjfahkfgdsiufgsadifgsadkfgsafgafffsavbtvisagtfsaiovfisdhfjksdhfkjsdhfkjsdhfjkdshfkjsdhfkjdshfkjsdfhkjsdfhkjsdhfkjdsfhkdsjfhksdjfhksdjfhsdjkfhsdjkfhksdjfhsdjkfhdskjfhsdjkfhsdjkfhsdjkfhsdfjksdhfjksdhfjksdfhjskdfhjsdkfhsdfjkhsdfjkhfkjsdhfjksdhfkjsd');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `category` varchar(200) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `project_cover_img` varchar(100) NOT NULL,
  `project_img` varchar(100) NOT NULL,
  `project_details` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `category`, `project_name`, `project_cover_img`, `project_img`, `project_details`, `status`) VALUES
(1, 14, 'Quasi praesentium as', 'Clarke Coffey', '1.png', '1.png', 'Dicta eos consectet', 0),
(2, 14, 'Web Design', 'Project Tejpata', '2.jpg', '2.png', 'Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.\r\n\r\nRxpress dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.\r\n\r\nVehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc.\r\n\r\nExpress dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.\r\n\r\nVehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.', 0),
(3, 14, 'Graphics Design', 'Product', '3.jpg', '3.jpg', 'Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.\r\n\r\nRxpress dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.\r\n\r\nVehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc.\r\n\r\nExpress dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.\r\n\r\nVehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.', 1),
(4, 14, 'Web Develpoment', 'Larabl', '4.jpg', '4.jpg', 'Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.\r\n\r\nRxpress dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.\r\n\r\nVehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc.\r\n\r\nExpress dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.\r\n\r\nVehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.', 1),
(5, 14, 'Aperiam veritatis de', 'Aladdin Farrell', '5.jpg', '5.jpg', 'Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.\r\n\r\nRxpress dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.\r\n\r\nVehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc.\r\n\r\nExpress dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.\r\n\r\nVehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_content`
--

CREATE TABLE `service_content` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_content`
--

INSERT INTO `service_content` (`id`, `icon`, `title`, `description`, `status`) VALUES
(7, 'fa-automobile', 'Driving', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 1),
(8, 'fa-pencil', 'Pencil', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 1),
(9, 'fa-hotel', 'Sleeping', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 1),
(10, 'fa-gratipay', 'Romance', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 1),
(11, 'fa-plane', 'Pilot', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 1),
(12, 'fa-wifi', 'Free Wifi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 0),
(13, 'fa-smile-o', 'Smile', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 1),
(14, 'fa-frown-o', 'Sad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(150) NOT NULL,
  `percentage` int(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `details`, `percentage`, `status`) VALUES
(1, 'HTML', 'HTML (Hypertext Markup Language) is the code that is used to structure a web page and its content.', 90, 1),
(2, 'CSS', 'Cascading Style Sheets (CSS) is a stylesheet language used to describe the presentation of a document written in HTML', 90, 0),
(3, 'JS', 'JavaScript, often abbreviated JS, is a programming language', 50, 1),
(4, 'PHP', 'PHP is a general-purpose scripting language geared towards web development', 50, 0),
(6, 'Bootstrap', 'Bootstrap is a free and open-source CSS framework directed at responsive,', 80, 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_content`
--

CREATE TABLE `social_content` (
  `id` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_content`
--

INSERT INTO `social_content` (`id`, `icon`, `link`, `status`) VALUES
(6, 'fa-facebook-f', 'https://www.facebook.com/', 0),
(7, 'fa-linkedin', 'https://www.linkedin.com/', 1),
(8, 'fa-twitter', 'https://twitter.com/', 1),
(9, 'fa-instagram', 'https://www.instagram.com/', 1),
(10, 'fa-snapchat', 'https://www.snapchat.com/', 1),
(11, 'fa-github', 'https://github.com/', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created_at` date DEFAULT NULL,
  `profile_photo` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `profile_photo`, `status`) VALUES
(2, 'Tom', 'Jerry asdsa', 'tom@gmail.com', '$2y$10$kTaRKlClJc9.0n86zPeeae9lrkKd5Y94YxMk8pLuTAAd9mCii8qRq', '2022-02-10', '2.jpg', 1),
(3, 'Magee', 'Lamb', 'helez@mailinator.com', '$2y$10$d1sd527BZI.8812BMvE40.1UbeBg5/Hx5vpU6mfkV2wPlUQ/yp6Ty', '2022-02-14', '3.jpg', 0),
(4, 'Kylie', 'Turner', 'aadsadi@mailinator.com', '$2y$10$vEJ/rcT5pxDYxfnPAg9JOe/8RvwUuxgNmmA9Rdltj28pMuLrdVKUq', '2022-02-14', '4.jpg', 0),
(5, 'Wade', 'Bennett', 'gijudaxi@mailinator.com', '$2y$10$q8S.C28YN1lDzYcI5LJBnOr3UNMUqBWFTc.7EE5yeyqtyztAgIQRG', '2022-02-15', '5.jpg', 0),
(6, 'Victoria', 'Mcgowan', 'pekokewu@mailinator.com', '$2y$10$8dC6.1i6u9/bu2B8e6NpyOQ9llWmMDFdlD1zd1PW04Z2nXb2KoRSW', '2022-02-15', '6.jpg', 0),
(7, 'Gillian', 'Lindsay', 'hehyjofod@mailinator.com', '$2y$10$oqZHK2ke1Swsbihx.rAflOekuuB0O5E/Fv27tDT7Bqv3LdBMqBjLq', '2022-02-15', '7.jpg', 0),
(8, '', '', '', '$2y$10$aG84/t8XtZd.lhb5oM0in.N7UH7MF.7seHG.BYAGd21nSLKylL6zW', '2022-02-15', '8.jpg', 0),
(9, 'Flynn', 'Mcgee', 'gobyhoq@mailinator.com', '$2y$10$GzvjQY0PhFLW9h4.5I2F3uaG6CNa6H7uWMh/9LHeyjN43iAda5i9.', '2022-02-15', '9.jpg', 0),
(10, 'ajsdlkas', 'Alam', 'zupezurun@mailinator.com', '$2y$10$cpyJWPO138aLUDpp94wBNORf81xyfRPlwtoNEgB4DlaSQc05xTM3e', '2022-02-16', '10.jpg', 0),
(11, 'Sloane', 'Gregory', 'abul@l.com', '$2y$10$Ssny3wk7/C9WXqLpVH6rd.DFnuBiGdAcf.qQ5v26GV5wKTHTq4tI.', '2022-02-16', '11.jpg', 0),
(12, 'Scarlett', 'Christian', 'kowo@mailinator.com', '$2y$10$HI/IEKPS.eY.Ae2QA/SwEewsjm8PfzolT3kcj/sSrUs0SGRygjtYm', '2022-02-17', '12.jpg', 0),
(13, 'Mahin', 'Alam', 'mahi@mailinator.com', '$2y$10$DwB/btsuHOVUhH9Fs04pqu4BBKaIJChLHTwS5x2CGxqQLOUsIpeRG', '2022-02-17', '13.jpg', 0),
(14, 'Mahi', 'Alam', 'm@gmail.com', '$2y$10$uVXuTAmdpItwCnQP0KoUPeE50wQaqQvYUiRE2kUly0KRKECQNdYm6', '2022-02-19', '14.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_content`
--
ALTER TABLE `about_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_content`
--
ALTER TABLE `banner_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_image`
--
ALTER TABLE `banner_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fact_area`
--
ALTER TABLE `fact_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messeges`
--
ALTER TABLE `messeges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_content`
--
ALTER TABLE `service_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_content`
--
ALTER TABLE `social_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_content`
--
ALTER TABLE `about_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner_content`
--
ALTER TABLE `banner_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banner_image`
--
ALTER TABLE `banner_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fact_area`
--
ALTER TABLE `fact_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messeges`
--
ALTER TABLE `messeges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_content`
--
ALTER TABLE `service_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_content`
--
ALTER TABLE `social_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
