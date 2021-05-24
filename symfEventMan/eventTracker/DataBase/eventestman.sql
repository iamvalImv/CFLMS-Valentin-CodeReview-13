-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2021 at 01:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventestman`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210515133424', '2021-05-15 15:34:37', 321);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_capacity` smallint(6) DEFAULT NULL,
  `contact` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_address` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `events_url` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `email`, `event_date`, `start_time`, `image`, `event_capacity`, `contact`, `event_address`, `events_url`) VALUES
(4, 'Event One Example', 'Library', 'exampleeventOne@events.at', '2025-03-03', '15:16:00', 'image.jpeg', 32, 'eventone@mail.at', 'The Hub, Vienna, 1150', NULL),
(5, 'Example Event No2', 'Hey Folks! This time I want to show you Cross-platform instant messaging. If you want to show me some love press L! Constructive feedback appreciated. And also don’t forget to check my other shots...', 'event@event.at', '2021-05-04', '15:00:00', 'image.jpeg', 30, 'CYBER [CONTACT]\r\nНяма отзиви · Софтуерна фирма\r\nHütteldorfer Str. 130 A · 01 96266\r\nОтворено 24 часа', 'Vienna, Hütteldorf, 1140', NULL),
(6, 'Event Three', 'This is the desrciption of the third event', 'pi@hen.at', '2019-03-06', '14:13:00', 'image.jpeg', 1000, 'On your Android phone or tablet, open the Contacts app , visit our online page for additional info', 'Clementinengasse 28, 1150, Westbahnhof', NULL),
(7, 'Plant Exchange Day ', ' Are you interested in adopting ne plants? If so, join us for a day for sharing plants, gardening tips and sunshine.', 'plant@exchange.mail.bg', '2021-05-13', '13:41:33', 'image.jpeg', 100, 'Villa Vida Café, Vienna\r\ntel:0043 675 4384 292', 'Villa Vida Café', NULL),
(8, 'Archikids: Among, Above and with the Soil', 'The earth\'s surface is a finite resource, and soil is our most precious commodity. Careless or capital-driven treatment of this…', 'archkids@mail.at', '2021-05-26', '08:41:28', NULL, 60, '+475 439 2929 30', 'Architekturzentrum Wien, Vienna', NULL),
(9, 'Trainings & Webinars', 'We deliver online and offline trainings for non-profits in development cooperation in grant seeking, proposal writing, monitoring & evaluation and measuring impact.', 'mail@trainings@webinar.at', '2021-12-16', '18:00:00', NULL, 100, 'silvia.weninger@triple-minds.com\r\nlisa.ringhofer@triple-minds.com\r\nulrike.morrenth@triple-minds.com\r\n\r\nOr simply call us:\r\n+43 650 995 20 76 (Silvia Weninger)\r\n+43 676 941 88 99 (Lisa Ringhofer)', 'https://triple-minds.com/', NULL),
(10, 'SAS® GLOBAL FORUM 2021', 'Analytics Software & Solutions', 'sas@forum.bg', '2021-08-10', '10:00:00', NULL, 50, '+1-800-727-0025\r\n+1-919-677-8000', 'https://www.sas.com/en_us/home.html', NULL),
(11, 'Revisiting the Social History of Ethnic Violence in Rwanda', 'Marginalized Voices and the Constellation of Genocide Narratives', 'visitrwanda@mail.at', '2022-10-10', '15:00:00', NULL, 250, 'Program Europe-Asia Research Platform on Forced Migration\r\nAyşe Çağlar  Giorgia Donà\r\nTuesday, 25 May 2021, 18:00 CET\r\nVIRTUAL, Zoom, Austria', 'Program Europe-Asia Research Platform on Forced Migration, Vienna', NULL),
(12, 'Der Vorname', 'by Matthieu Delaporte and Alexandre de la Patellière. R: Braband B: Presting K: Graevenitz D: Bluhm, Dankg, Klamminger, Meyer, Rosskopf', 'dervorname@mail.at', '2021-09-10', '11:30:00', 'Venue Name\r\nKammerspiele der Josefstadt\r\nVenue Location\r\nRotenturmstraße 20\r\n1010 Wien\r\nVenue website\r\nwww.josefstadt.org', 50, 'Kammerspiele der Josefstadt, 1010\r\nTHEATRE', 'Kammerspiele der Josefstadt, 1010', NULL),
(13, 'Ceramic Courses', 'ceramic open studio for adults – wednesday mornings', 'ceramic@studios.at', '2021-06-20', '17:00:00', NULL, 50, 'ÖZLEM ÖNEN\r\nÖzlem is an architect, finished her studies in 2006. When she is not working at an architectural office she runs the commonroom. She has been making pottery for the last 20 years and loves it. The nature of the clay makes her so happy.', 'address: Florianigasse 54, gl4, 1080 Wien\r\n\r\naccount name: odaada – Verein für Kunst, Design und Kreativität', NULL),
(14, 'LIQUID MARKET VIENNA the Cocktail Festival 2021', 'Kommt vorbei, genießt erstklassige Cocktails, feiert mit uns das Können von hervorragenden Barkeepern, informiert euch über die neuesten Entwicklungen am Cocktailmarkt, lernt neue Spirituosen kennen, probiert Streetfoodtrends.', 'liquiedfestival@mail.at', '2021-07-20', '18:00:00', NULL, 100, 'Bert Jachmann\r\nHead of Event\r\nbert@liquidmarket.bar\r\n\r\nVivian Kern\r\nHead of Sales\r\nvivian@liquidmarket.bar', 'the Cocktail Festival 2021\r\n02. / 03. / 04. September\r\nWiener Werkshallen', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
