-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 01:51 PM
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
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `adminname` varchar(200) NOT NULL,
  `adminPassword` varchar(200) NOT NULL,
  `adminEmail` varchar(500) NOT NULL,
  `addedby` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`id`, `datetime`, `adminname`, `adminPassword`, `adminEmail`, `addedby`) VALUES
(1, 'NULL', 'root', 'root', 'chakrabortyshuvradip@gmail.com', 'SELF'),
(2, '27/03/2022 04:49:46 pm', 'Mona Srinivasan', '$2y$10$pZp0/NOVX.iBY7YCd6RVLuIszVWOa8J5VSxod1274FmQNhcgznI6m', 'ms22@mailgen.club', 'root'),
(3, '27/03/2022 04:53:32 pm', 'Eddie Choudhary', '$2y$10$aL09l0rnUFNY18NgvGNIJ.4cJKjNpfaJ1omg.VR.zviVZ0YPX2lym', 'e.c2703@mailgen.club', 'root');

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
(27, '11/01/2022 11:14:06 pm', 'Arnab Goswami', 'Other'),
(35, '27/03/2022 05:12:50 pm', 'Devoloper 483', 'Breaking News'),
(36, '27/03/2022 05:13:06 pm', 'Devoloper 700', 'Markets'),
(37, '27/03/2022 05:14:53 pm', 'Devoloper 154', 'Geo Politics');

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
(15, '26/03/2022 09:04:51 pm', 'Chinese official calls sanctions on Russia increasingly &#039;outrageous&#039;', 'Business', 'Devoloper 874', 'uploads/pexels-pixabay-164688.jpg', 'BEIJING, March 20 (Reuters) - A senior Chinese government official said on Saturday that sanctions imposed by Western nations on Russia over Ukraine are increasingly &#38;quot;outrageous&#38;quot;. Vice Foreign Minister Le Yucheng also acknowledged Moscow&#38;#39;s point of view on NATO, saying the alliance should not further expand eastwards, forcing a nuclear power like Russia &#38;quot;into a corner&#38;quot;. China has yet to condemn Russia&#38;#39;s action in Ukraine or call it an invasion, though it has expressed deep concern about the war. Beijing has also opposed economic sanctions on Russia over Ukraine, which it says are unilateral and are not authorised by the U.N. Security Council. &#38;quot;The sanctions against Russia are getting more and more outrageous,&#38;quot; Le said at security forum in Beijing, adding that Russian citizens were being deprived of overseas assets &#38;quot;for no reason&#38;quot;.&#13;&#10;'),
(16, '27/03/2022 05:07:06 pm', 'N.C.A.A. Men’s Tournament: St. Peter’s Extends Its Magical Run to the Round of 8', 'Sports', 'Shuvradip', 'uploads/braden-collum-9HI8UJMSdZA-unsplash.jpg', 'The Peacocks downed Purdue, 67-64, in the round of 16 and became the first No. 15 seed to reach the round of 8. North Carolina knocked off U.C.L.A., and Kansas and Miami also advanced.&#13;&#10;&#13;&#10;PHILADELPHIA &#38;mdash; Time isn&#38;rsquo;t up for the biggest underdog of the N.C.A.A. men&#38;rsquo;s tournament just yet.&#13;&#10;&#13;&#10;Tiny St. Peter&#38;rsquo;s University is alive and well and moving on to the final eight of the N.C.A.A. tournament after slaying yet another basketball powerhouse. Playing inspired defense and without any fear, the No. 15 seed Peacocks stunned No. 3 Purdue, 67-64, on Friday night before a crowd at Wells Fargo Center in Philadelphia that included many St. Peter&#38;rsquo;s fans who made the trip down the New Jersey Turnpike and roared in approval.&#13;&#10;&#13;&#10;The Peacocks (22-11) will advance to face No. 8-seeded North Carolina in Sunday&#38;rsquo;s East regional final, with a chance to reach the Final Four in New Orleans. They have no'),
(17, '27/03/2022 05:08:48 pm', 'Ukraine Live Updates: Biden Caps 3 Days of Diplomacy With Rebuke of Putin', 'Geo Politics', 'Shuvradip', 'uploads/hasan-almasi-OwqLxCvoVxI-unsplash.jpg', 'The Kremlin condemned President Biden&#38;rsquo;s comments, and the White House said he was not calling for regime change. Missiles hit the city of Lviv and thousands were still stranded in Mariupol&#38;nbsp;&#13;&#10;&#13;&#10;As President Biden returned to Washington after three days of rallying allies in Europe, President Volodymyr Zelensky of Ukraine stepped up his calls for the West to provide planes and tanks and other weapons to help his army defeat Russian aggression.&#13;&#10;&#13;&#10;Ukrainian forces on Sunday continued to make progress along multiple fronts in pushing back the Russian advance on Kyiv. Most notably, the Ukrainian military said that a large formation of Russian soldiers had fallen back to an area around the now defunct Chernobyl nuclear power plant to regroup after suffering heavy losses.&#13;&#10;'),
(18, '27/03/2022 05:10:20 pm', 'Ukraine says Russia wants to split nation, calls for more arms', 'Other', 'Shuvradip', 'uploads/duncan-kidd-Cju-BkSkM1k-unsplash.jpg', 'Summery&#38;nbsp;&#13;&#10;&#13;&#10;&#13;&#10;&#9;Ukraine intelligence chief predicts guerrilla warfare&#13;&#10;&#9;Zelenskiy appeals for more Western military hardware&#13;&#10;&#9;Biden says Putin &#38;#39;cannot remain in power&#38;#39;&#13;&#10;&#9;Russia-backed region signals possible referendum&#13;&#10;&#9;Ukraine, Russia agree on two humanitarian corridors&#38;nbsp;&#13;&#10;&#13;&#10;&#13;&#10;LVIV, Ukraine, March 27 (Reuters) - Russia wants to split Ukraine into two, as happened with North and South Korea, Ukraine&#38;#39;s military intelligence chief said on Sunday, vowing &#38;quot;total&#38;quot; guerrilla warfare to prevent a carve up of the country.&#13;&#10;&#13;&#10;President Volodymyr Zelenskiy urged the West to give Ukraine tanks, planes and missiles to help fend off the Russian forces, which the Kyiv government said were increasingly targeting fuel and food depots.&#13;&#10;'),
(19, '27/03/2022 05:11:26 pm', 'Elon Musk giving &#039;serious thought&#039; to build a new social media platform', 'Technology', 'Shuvradip', 'uploads/ilya-pavlov-OqtafYT5kTw-unsplash.jpg', 'March 27 (Reuters) - Tesla Inc&#38;nbsp;(TSLA.O)&#38;nbsp;Chief Executive Officer Elon Musk is giving &#38;quot;serious thought&#38;quot; to building a new social media platform, the billionaire said in a tweet on Saturday.&#13;&#10;&#13;&#10;Musk was responding to a Twitter user&#38;#39;s question on whether he would consider building a social media platform consisting of an open source algorithm and one that would prioritize free speech, and where propaganda was minimal.&#13;&#10;&#13;&#10;Musk, a prolific user of Twitter himself, has been critical of the social media platform and its policies of late. He has said the company is undermining democracy by failing to adhere to free speech principles.&#13;&#10;&#13;&#10;His tweet comes a day after he put out a Twitter poll asking users if they believed Twitter adheres to the principle of free speech, to which over 70% voted &#38;quot;no&#38;quot;.&#13;&#10;&#13;&#10;&#38;quot;The consequences of this poll will be important. Please vote c'),
(20, '27/03/2022 05:16:32 pm', 'NBA roundup: Host Raptors rout Pacers in fire-delayed game', 'Sports', 'Arnab Goswami', 'uploads/markus-spiske-BfphcCvhl6E-unsplash.jpg', 'An issue with an arena speaker resulted in a small electrical fire beginning in the first quarter in the game at Scotiabank Arena. Toronto Fire Service officials called for the evacuation of the capacity crowd, and the teams left the court with 4:05 left in the second quarter and the Raptors leading 66-38.&#13;&#10;&#13;&#10;Toronto&#38;#39;s dominance continued after a delay of 65 minutes and with no fans in the seats. Pascal Siakam led a balanced scoring attack with 23 points on 10-of-15 shooting. Scottie Barnes added 19 points on 8-of-11 shooting and matched Siakam&#38;#39;s seven assists. Chris Boucher came off the bench to grab a game-high 10 rebounds and chipped in 15 points.&#13;&#10;&#13;&#10;Precious Achiuwa shot 4-of-5 from 3-point range off the bench en route to 18 points, while OG Anunoby shot 3-of-5 from deep and finished with 16 points.&#13;&#10;'),
(21, '27/03/2022 05:18:55 pm', 'Morning Bid: Inflation or growth?', 'Markets', 'Mainak Podder', 'uploads/nick-chong-N__BnvQ_w18-unsplash.jpg', 'A look at the day ahead in markets from Sujata Rao&#13;&#10;&#13;&#10;A JPMorgan survey shows a record high 86% of its clients planned to raise equity exposure. It is unclear if those plans will have come unstuck after the latest spurt in oil and commodity, and galloping inflation expectations.&#13;&#10;&#13;&#10;The bank itself is warning central banks face a stark choice --to &#38;quot;live with energy-driven inflation or kill off economic growth&#38;quot;.&#13;&#10;&#13;&#10;The rise in five-year Treasury &#38;quot;breakevens&#38;quot; to 3.5% is alarming, coming as it does on the heels of the Federal Reserve&#38;#39;s interest rate liftoff and money markets pricing nearly 200 basis points of increases this year alone .&#13;&#10;&#13;&#10;So breakevens, essentially bond markets&#38;#39; view of where inflation may be in five years time, have responded to policy tightening signals by moving even higher . While five-year inflation swaps, possibly a more reliable gauge, are at 2.3%, th'),
(22, '27/03/2022 05:21:06 pm', 'Key Democratic senator Manchin to vote for Supreme Court nominee Jackson', 'Other', 'Pratim Chakraborty', 'uploads/naveed-ahmed-9Dt4WutvwDs-unsplash.jpg', 'WASHINGTON, March 25 (Reuters) - Democratic Senator Joe Manchin on Friday said he would vote to confirm U.S. Supreme Court nominee Ketanji Brown Jackson, with the support from the influential moderate signaling that she will have the votes to overcome widespread Republican opposition.&#13;&#10;&#13;&#10;Manchin&#38;#39;s announcement is further evidence that Democrats are united on supporting President Joe Biden&#38;#39;s nominee to be the first Black woman on the Supreme Court. With a simple majority needed for confirmation and the Senate divided 50-50 between the parties, Jackson would get the job even if no Republicans vote for her.&#38;nbsp;&#13;&#10;&#13;&#10;After meeting with her, considering her record, and closely monitoring her testimony and questioning before the Senate Judiciary Committee this week, I have determined I intend to vote for her nomination to serve on the Supreme Court,&#38;quot; Manchin said in a statement.&#13;&#10;&#13;&#10;&#38;quot;Her wide array of experi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
