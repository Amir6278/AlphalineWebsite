-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2023 at 12:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphaline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@mail.com', 'c93ccd78b2076528346216b3b2f701e6');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ban_id` int(11) NOT NULL,
  `ban_title` varchar(200) NOT NULL,
  `ban_des` text NOT NULL,
  `ban_url` varchar(100) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `ban_btn` varchar(100) NOT NULL,
  `ban_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ban_id`, `ban_title`, `ban_des`, `ban_url`, `page_name`, `ban_btn`, `ban_img`) VALUES
(1, 'Seamless Telemarketing and Sales', 'Alphaline solution is a company currently operating in Bangladesh, offering complete customer support, call center solutions, social media marketing, complete digital marketing, and Lead generation', '#about', '', 'View more', 'alphaline-231421.jpg'),
(2, 'Services We Provide', 'Get familiarized with our services', '#TSERVICE', 'contact', 'View more', 'alphaline-24196.jpg'),
(3, 'Get In Touch With Us Today', 'Need to get in touch with us? Here’s how…', '#CONTACT', 'contact', 'Contact', 'alphaline-92076.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `client_des` varchar(100) NOT NULL,
  `client_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_des`, `client_img`) VALUES
(1, 'Mark zuckerberg', ' Very Good Company', 'Alphaclient-69.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`) VALUES
(1, 'Mohammad Amir', 'mohammadamir627@gmail.com', 'goa mara sara');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `deliver_id` int(11) NOT NULL,
  `delivery_title` varchar(100) NOT NULL,
  `delivery_des` text NOT NULL,
  `delivery_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`deliver_id`, `delivery_title`, `delivery_des`, `delivery_img`) VALUES
(1, 'QUALITY ASSURANCE', 'Once on board with us, we’ll continue to strive for excellence while maintaining program quality and integrity.', 'alphalineDeliver-177076.png'),
(2, 'TARGETED TRAINING', 'We will develop content, curriculum and quality training program on your product, service, brand or organization.', 'alphalineDeliver-222218.png'),
(4, 'WORKFORCE SCHEDULING', 'Our workforce team ensures that the agents are scheduled properly and resource is available when you need the it most', 'alphalineDeliver-333721.png'),
(5, 'RESOURCE MANAGEMENT', 'We own a team of specialists constantly watching contacts in our system, making sure that we never miss a thing.', 'alphalineDeliver-465359.png'),
(6, 'ACCOUNT FEEDBACK', 'You’ll always have a point of contact/concern to reach out to us, discuss issues and provide feedback', 'alphalineDeliver-9891.png');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_des` text NOT NULL,
  `service_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_title`, `service_des`, `service_img`) VALUES
(1, 'DIGITAL MARKETING', 'Our team will aid to boost up your online existence offering digital marketing services that encompasses all of your online marketing activities', 'alphalineService-467074.jpg'),
(2, 'VIRTUAL ASSISTANCE', 'Save your precious time, stay focused and hire virtual assistant of global principles. Get every work-done right at your fingertips!', 'alphalineService-481802.png'),
(3, 'CUSTOMER SUPPORT', 'Our range of customer services will assist you in making cost effective products or services. Have any questions? Contact us 24 hours a day 7 days a week, providing the most authentic services.', 'alphalineService-10897.jpg'),
(4, 'TELEMARKETING AND SALES', 'Our telemarketing agents are available whenever the client needs them, they move seamlessly from pro-active appointment setting to real time selling to close prospects', 'alphalineService-155602.jpg'),
(5, 'WEB DESIGN AND DEVELOPMENT', 'Alphaline prioritizes our efforts, spending max time on the activities that will get you the greatest benefit on your business/organization. Get a business approved website that will meet all your expectation!', 'alphalineService-41043.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`deliver_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `deliver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
