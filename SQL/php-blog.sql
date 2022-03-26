-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 06:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `datetime` varchar(250) NOT NULL,
  `name` varchar(255) NOT NULL,
  `categoryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `datetime`, `name`, `categoryname`) VALUES
(20, '11/01/2022 07:59:33 pm', 'Shuvradip', 'Business'),
(22, '11/01/2022 07:59:55 pm', 'Devergha Chakraborty', 'Technology'),
(23, '11/01/2022 08:00:02 pm', 'Pratim Chakraborty', 'Sports'),
(24, '11/01/2022 08:00:08 pm', 'Mainak Podder', 'Health'),
(25, '11/01/2022 08:00:15 pm', 'Akash Choudhary', 'Food'),
(26, '11/01/2022 08:00:22 pm', 'Shekhar Gupta', 'Travel'),
(27, '11/01/2022 11:14:06 pm', 'Arnab Goswami', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `commentauth` varchar(200) NOT NULL,
  `commentmail` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `post_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `datetime`, `comment`, `commentauth`, `commentmail`, `status`, `post_id`) VALUES
(23, '24/03/2022 03:15:35 pm', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever s', 'Tabeed Morar', 'eddie76@zachariah.in', 'OFF', 15),
(24, '24/03/2022 03:18:07 pm', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever s', 'Akhila Sheth', 'kulkarni.karim@rediffmail.com', 'ON', 14),
(25, '24/03/2022 03:18:52 pm', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it', 'Saurabh Guha', 's.g2403@mailgen.biz', 'ON', 13),
(26, '24/03/2022 03:19:45 pm', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old', 'Manoj Nagar', 'mn@mailgen.info', 'ON', 12),
(27, '24/03/2022 03:20:16 pm', 'Where can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable', 'Elias Chada', 'elias.chada22@mailgen.fun', 'OFF', 11),
(30, '26/03/2022 10:42:54 pm', '&quot;Channa Mereya&quot;\r\n(from &quot;Ae Dil Hai Mushkil&quot; soundtrack)\r\n\r\nAccha chalta hoon\r\nDuaaon mein yaad rakhna\r\nMere zikr ka zubaan pe swaad rakhna\r\n[x2]\r\n\r\nDil ke sandookon mein\r\nMere acche kaam rakhna\r\nChitthi taaron mein bhi\r\nMera tu salaam rakhna\r\n\r\nAndhera tera maine le liya\r\nMera ujla sitaara tere naam kiya\r\n\r\nChanna mereya mereya\r\nChanna mereya mereya\r\nChanna mereya mereya Beliy', 'Labeen Prashad', 'labeen.p@mailgen.xyz', 'ON', 13);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL DEFAULT 'Anonymous User',
  `email` varchar(60) NOT NULL DEFAULT 'Anonymous Mail',
  `subject` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `description`) VALUES
(6, 'Shuvradip Chakraborty', 'chakrabortyshuvradip@gmail.com', 'Dashboard !', 'Reuters is an international news organisation owned by Thomson Reuters. It employs around 2,500 journalists and 600 photojournalists in about 200 locations worldwide. Reuters is one of the largest news agencies in the world. The'),
(7, 'jail khan', 'test@testmail.net', 'Dashboard !', 'we are testing'),
(8, 'Test', 'a@a.com', 'Wow', 'We Are Testing'),
(9, 'jail khan', 'chakrabortyshuvradip@gmail.com', 'sdfgfdgfdg', 'dfgdfggggggggggggggggd');

-- --------------------------------------------------------

--
-- Table structure for table `new_post`
--

CREATE TABLE `new_post` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `post` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_post`
--

INSERT INTO `new_post` (`id`, `datetime`, `title`, `category`, `author`, `image`, `post`) VALUES
(11, '19/03/2022 03:32:40 pm', '7 Best Free Antivirus Software for Windows 11 🥇', 'Business', 'Devoloper 192', 'uploads/pexels-adam-sondel-1466609.jpg', 'As you all might already know, Windows is a prime target for hackers, and that&#38;rsquo;s why it&#38;rsquo;s important to protect your computer and valuable files against malicious actors. There are multiple antivirus programs for Windows 11 that provide&#38;nbsp;protection against malware, ransomware, spyware, viruses, and more. And for your ease, we have compiled a list of the seven such best free antivirus software for Windows 11 in this list. These antivirus programs are completely free to use and do not nag you with premium subscriptions. So without any delay, let&#38;rsquo;s check out the list and find a suitable free antivirus software for Windows 11 that you should be using in 2022. Free Antivirus Software for Windows 11 (2022)&#13;&#10;'),
(12, '19/03/2022 03:33:37 pm', 'Chicken Karaage: Japanese Fried Chicken Recipe', 'Food', 'Devoloper 874', 'uploads/lily-banse--YHSwy6uqvk-unsplash.jpg', 'What is chicken karaage?&#13;&#10;&#13;&#10;Chicken karaage is Japanese fried chicken: bite sized, super juicy, intensely flavorful, with a crispy, cracker-y crunch.&#13;&#10;&#13;&#10;What is karaage?&#13;&#10;&#13;&#10;Karaage is a technique of Japanese cooking where an ingredient is lightly coated and deep fried. Most common is chicken karaage but you can also have things like ika karaage (squid) or geso karaage (squid tentacles).&#13;&#10;'),
(13, '19/03/2022 06:30:09 pm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do', 'Sports', 'Devoloper 874', 'uploads/daniel-lerman-fr3YLb9UHSQ-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus at urna condimentum mattis pellentesque id nibh tortor id. Amet justo donec enim diam vulputate. Duis ultricies lacus sed turpis tincidunt. Sed adipiscing diam donec adipiscing tristique risus. Ipsum nunc aliquet bibendum enim. Faucibus scelerisque eleifend donec pretium vulputate sapien. Nulla aliquet enim tortor at auctor urna nunc id. Ultrices eros in cursus turpis massa tincidunt dui. Dictum non consectetur a erat. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum varius. Sit amet commodo nulla facilisi nullam vehicula ipsum a. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem&#13;&#10;'),
(14, '19/03/2022 11:28:06 pm', 'Zelenskiy calls for peace talks with Moscow, urges Swiss to target oligarchs', 'Travel', 'Devoloper 562', 'uploads/pexels-pixabay-417070.jpg', 'LVIV/ODESSA, Ukraine, March 19 (Reuters) - Ukrainian President Volodymyr Zelenskiy called on Saturday for comprehensive peace talks with Moscow and also urged Switzerland to do more to crack down on Russian oligarchs who he said were helping wage war on his country with their money.&#13;&#10;&#13;&#10;British intelligence warned that Russia, frustrated by its failure to achieve its objectives since it launched the invasion on Feb. 24, was now pursuing a strategy of attrition that could intensify the humanitarian crisis.&#13;&#10;'),
(15, '26/03/2022 09:04:51 pm', 'Chinese official calls sanctions on Russia increasingly &#039;outrageous&#039;', 'Business', 'Devoloper 874', 'uploads/pexels-pixabay-164688.jpg', 'BEIJING, March 20 (Reuters) - A senior Chinese government official said on Saturday that sanctions imposed by Western nations on Russia over Ukraine are increasingly &#38;quot;outrageous&#38;quot;. Vice Foreign Minister Le Yucheng also acknowledged Moscow&#38;#39;s point of view on NATO, saying the alliance should not further expand eastwards, forcing a nuclear power like Russia &#38;quot;into a corner&#38;quot;. China has yet to condemn Russia&#38;#39;s action in Ukraine or call it an invasion, though it has expressed deep concern about the war. Beijing has also opposed economic sanctions on Russia over Ukraine, which it says are unilateral and are not authorised by the U.N. Security Council. &#38;quot;The sanctions against Russia are getting more and more outrageous,&#38;quot; Le said at security forum in Beijing, adding that Russian citizens were being deprived of overseas assets &#38;quot;for no reason&#38;quot;.&#13;&#10;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey` (`post_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_post`
--
ALTER TABLE `new_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `new_post`
--
ALTER TABLE `new_post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `Foreign_key` FOREIGN KEY (`post_id`) REFERENCES `new_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
