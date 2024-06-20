-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 07:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'raju', 'raju@email.com', 'raju'),
(3, 'rakesh', 'rakesh@email.com', 'rakesh'),
(4, 'ajay', 'ajay@email.com', 'ajay');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `des`) VALUES
(2, 'politics', 'Welcome to our Politics section, your go-to source for comprehensive coverage of the political landscape. Stay informed with the latest developments in government, policy, and international affairs. From breaking news and in-depth analysis to expert commentary and insider insights, we bring you up-to-the-minute updates on key political events and figures shaping our world.'),
(4, 'World', 'Stay informed with the latest developments from around the globe in our World News category. This section provides comprehensive coverage of international events, bringing you breaking news, in-depth analysis, and expert insights on the issues that shape our world.'),
(5, 'Technology', 'Explore the forefront of innovation and digital transformation with our Technology category. This section keeps you updated on the latest advancements and trends shaping the tech landscape. From cutting-edge gadgets and breakthrough scientific research to the newest software developments and cybersecurity issues, we provide comprehensive coverage to satisfy your tech curiosity.'),
(6, 'Culture', 'Immerse yourself in the rich tapestry of human expression with our Culture category. This section celebrates the diverse and dynamic world of arts, entertainment, and lifestyle, bringing you the latest news, reviews, and features from across the globe.'),
(7, 'Business', 'Navigate the dynamic world of commerce with our Business category. This section offers comprehensive coverage of the latest developments in the global economy, market trends, and corporate strategies.'),
(8, 'Science', 'Discover the wonders of the natural world and the universe beyond with our Science category. This section offers a deep dive into the latest scientific discoveries, research breakthroughs, and technological innovations that are shaping our understanding of the world.'),
(9, 'Health', 'Stay informed about your well-being with our Health category. This section provides comprehensive coverage of the latest medical research, wellness trends, and health policies. From breakthroughs in medicine and advancements in treatments to practical tips for healthy living and mental well-being, we offer a wide range of information to help you lead a healthier life.'),
(10, 'Style', 'Embrace the world of fashion and aesthetics with our Style category. This section is dedicated to bringing you the latest trends, timeless classics, and insider insights from the world of fashion, beauty, and design.'),
(11, 'Travel', 'Embark on a journey of discovery with our Travel category. This section is your ultimate guide to exploring the world’s most captivating destinations, offering comprehensive coverage of travel tips, destination highlights, and cultural experiences.');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `comment`) VALUES
(2, 'sukesh', 'sukesh@email.com', 'great website'),
(3, 'brijesh', 'brijesh@email.com', 'always up to date news'),
(4, 'shailesh', 'shailesh@email.com', 'website must be improved'),
(5, 'kalpit', 'kalpit@email.com', 'website not working fine');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `admin`, `title`, `description`, `date`, `category`, `thumbnail`) VALUES
(4, 'rakesh', 'Today in Politics: In first visit to Jammu and Kashmir in Modi 3.0, PM to hold mega event, lead June 21 Yoga Day celebrations', 'Prime Minister Narendra Modi will be on a two-day tour of Jammu and Kashmir from Thursday, which will mark his first visit to the Union Territory (UT) after being sworn in as the PM for his third term earlier this month in the wake of the 18th Lok Sabha elections.\r\n\r\nOn Thursday evening, PM Modi will participate in an event, ‘Empowering Youth, Transforming J&K’, at the Sher-i-Kashmir International Conference Centre (SKICC) in Srinagar. He would inaugurate and lay the foundation stone of multiple development projects in J&K. He is also set to launch the Competitiveness Improvement in Agriculture and Allied Sectors Project (JKCIP) there.\r\n\r\nOn Friday morning, PM Modi will lead the 10th International Day of Yoga (IDY) celebrations at the SKICC in Srinagar. He will also address the gathering on the occasion.', '2024-06-20', 'politics', 'Untitled-design-2024-06-20T074045.574.avif'),
(5, 'rakesh', 'India vs Afghanistan Live Score, T20 World Cup 2024: AFG 13/0 (1 over), Rahmanullah Gurbaz, Hazratullah Zazai oprn', 'India vs Afghanistan Live Score, T20 World Cup 2024 Match Today: Suryakumar Yadav hit a gritty 53 as Rashid Khan and Fazalhaq Farooqi took 3 wickets apiece for Afghanistan including the big scalps of Virat Kohli and Rohit Sharma as India posted 181/8.\r\n\r\nIndia won the toss and opted to bat first in their Super-8 match on Thursday against Afghanistan in Group 1 at the Kensington Oval in Bridgetown, Barbados. India made one change with Kuldeep Yadav coming in for Mohammed Siraj while Afghanistan brought in Hazratullah Zazai for Karim Janat.\r\n\r\nThe Rohit Sharma-led Indian team began their World Cup with a win against Ireland by eight wickets at the Nassau County Stadium in New York. It was the same venue where they defeated Pakistan and USA to secure a spot in the next round. Their final group game against Canada was abandoned without toss in Florida owing to wet outfield.\r\n\r\nScroll down to follow all the updates from the IND vs AFG T20 World Cup Super 8 Match from the Kensington Oval in Bridgetown, Barbados', '2024-06-19', 'World', 'ICC-Mens-T20-World-Cup-Super-8-Match-3.avif'),
(6, 'rakesh', 'Ilya Sutskever’s new startup is the latest of many AI ventures coming out of Big Tech', '\r\nOpenAI founder and former chief scientist Ilya Sutskever, who left the ChatGPT maker last month, is starting his own artificial intelligence (AI) company, with an aim to create a safe AI environment. He joins a growing list of Big Tech employees leaving to start their own AI startups, many of whom became disillusioned with the tech giants’ promises on user privacy and safety.\r\n\r\nSutskever’s new company is called Safe Superintelligence, whose “singular focus” is on a safe AI space. This means \"no distraction by management overhead or product cycles, and our business model means safety, security, and progress are all insulated from short-term commercial pressures,\" he said in a post.', '2024-06-21', 'Technology', 'sam-altman-and-ilya-sutskever (1).webp'),
(7, 'ajay', 'Sadhguru Writes: The Science And Culture Of Yoga — Bharat’s Gift to Humanity', 'Sadhguru: Bharat is not one monolithic culture — it is a kaleidoscope of cultures, where we do not ascribe to the mediocrity of sameness. People’s ethnicity, their language, food, way of dressing, music, and dance, everything is different every fifty or hundred kilometres in the country. This is a nation where we dared to encourage diversity to a point where we have over 1,300 languages and dialects in the country, and nearly 30 proper languages with an enormous body of literature.', '2024-06-18', 'Culture', '4725bbaf92e333832f123293ee8c65bc1718782352310997_original.avif'),
(8, 'ajay', 'sensex today', 'Sensex Today | Stock Market LIVE Updates: Top Nifty gainers included Grasim Industries, Hindalco Industries, JSW Steel, Adani Ports and BPCL, while losers were Hero MotoCorp, Sun Pharma, M&M, NTPC and Wipro. Selling was seen in the auto, pharma and PSU Banks, while buying was seen in the metal, capital goods, realty and oil & gas. The BSE midcap index rose 0.5 percent while smallcap index added 1 percent.', '2024-06-17', 'Business', '300509-sbfc-finance-block-deal.avif'),
(9, 'ajay', '  Saturn’s Energy Imbalance', '\r\nScientists at the University of Houston have made a major finding about Saturn’s climate that shows the planet has a big energy imbalance. A study in “Nature Communications” questions how planets evolve and how their climates change over time, especially for gas giants like Saturn.\r\n\r\nWhat is Energy Imbalance?\r\nUsing data from the Cassini probe, the team saw that Saturn’s large orbital eccentricity causes its energy supply to change a lot from season to season. The amount of solar energy Saturn receives changes a lot as it moves around the sun because of this difference. Its energy is affected by both sun radiation and deep inside heat, which adds to its complicated thermal structure and climate system.', '2024-06-13', 'Science', '202406203348.webp'),
(10, 'raju', 'Future Health Index 2024 global report: Healthcare leaders turn to AI to address critical gaps in patient care', 'Healthcare leaders indicate automation is crucial in addressing staff shortages, but staff remain skeptical\r\n \r\n\r\nInterest in Generative AI grows, with majority of health leaders investing in, or planning to invest in AI technologies to help reduce delays in patient care\r\n \r\nAmsterdam, the Netherlands– Royal Philips (NYSE: PHG, AEX: PHIA), a global leader in health technology, today announced the results of its Future Health Index 2024 report: Better care for more people. Launched at HLTH Europe, the ninth annual FHI global report shows that healthcare leaders are turning to virtual care and AI-enabled innovation to address pressure due to workforce shortages, financial burdens, and growing demand.', '2024-06-30', 'Health', 'header-global-fhi-report-clinician-and-young-patient.avif'),
(11, 'raju', 'The latest fashion trend gripping young Chinese isn’t actually new, but it’s proving lucrative', '\r\nWhat’s old is new again. This time it’s a centuries-old skirt design that’s proving popular in China. The “mamianqun” or “horse face skirt” is being worn in cities like Shanghai, Beijing and Chengdu as young people in China are giving the attire a modern twist, with unconventional pairings and choice of fabrics.\r\n\r\nWhile once the sole purview of “hanfu” enthusiasts (a renaissance of the ancient clothing traditionally worn by ethnic-majority Han Chinese before the Qing dynasty) and reserved for special occasions, the pleated often brocade skirts have become a part of everyday wear.', '2024-06-28', 'Style', 'sgylook03.webp'),
(12, 'raju', 'ASISTIM Acquisition: SITA’s Latest Leap Into Airline Operations-as-a-Service', 'SITA, a leader in air transport technology, has boldly entered the operations-as-a-service market by acquiring ASISTIM, a company well-known for its expertise in airline flight operations. This strategic move highlights SITA’s relentless pursuit of innovative solutions to help airlines navigate challenges and enhance the travel experience for everyone.\r\n\r\nWith this acquisition, SITA strengthens its position as a premier partner for airlines seeking comprehensive solutions, regardless of their size or passenger volume. As the air travel landscape evolves, airlines grapple with issues like staff shortages, escalating costs, and shifting demands. SITA’s acquisition of ASISTIM directly addresses these challenges by offering centralized Operations Control Center (OCC) services that support multiple clients simultaneously. Furthermore, SITA now operates its own OCC, allowing it to fine-tune and enhance its technological solutions.\r\n\r\nThe integration of ASISTIM’s operational expertise with SITA’s advanced OCC software, IT solutions, and global reach will enable more airlines to outsource critical operations. This service alleviates the burden of recruiting, training, and retaining OCC staff, ensuring airlines can operate at peak efficiency. SITA democratizes access to high-quality technology, robust processes, and seasoned personnel, typically accessible only to large operators. This partnership empowers airlines of all sizes to improve their operational efficiency, reliability, and scalability, ensuring they can thrive in a dynamic industry.', '2024-06-23', 'Travel', 'two-people-reaching-for-hands-90.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
