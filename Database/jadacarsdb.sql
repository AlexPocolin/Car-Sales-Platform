-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 06:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadacarsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `carname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `priceinclusives` varchar(255) NOT NULL,
  `body` varchar(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `engine` varchar(50) NOT NULL,
  `bodystyle` varchar(100) NOT NULL,
  `performance` varchar(255) NOT NULL,
  `safety` varchar(255) NOT NULL,
  `technology` varchar(255) NOT NULL,
  `releasedate` date NOT NULL,
  `seats` int(10) NOT NULL,
  `modelyear` text NOT NULL,
  `finaldrive` varchar(50) NOT NULL,
  `modelgrade` varchar(50) NOT NULL,
  `specregion` varchar(50) NOT NULL,
  `insurance` int(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `mainimage` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `company` varchar(100) NOT NULL,
  `staffID` varchar(11) NOT NULL,
  `Interior1` varchar(255) NOT NULL,
  `Interior2` varchar(255) NOT NULL,
  `Interior3` varchar(255) NOT NULL,
  `Interior4` varchar(255) NOT NULL,
  `Exterior1` varchar(255) NOT NULL,
  `Exterior2` varchar(255) NOT NULL,
  `Exterior3` varchar(255) NOT NULL,
  `Exterior4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `carname`, `price`, `location`, `priceinclusives`, `body`, `fuel`, `engine`, `bodystyle`, `performance`, `safety`, `technology`, `releasedate`, `seats`, `modelyear`, `finaldrive`, `modelgrade`, `specregion`, `insurance`, `note`, `mainimage`, `status`, `company`, `staffID`, `Interior1`, `Interior2`, `Interior3`, `Interior4`, `Exterior1`, `Exterior2`, `Exterior3`, `Exterior4`) VALUES
(13, 'Chava Spence', 13000, 'USA', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi', 'Diesel', 'Incididunt praesenti', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old', '2009-02-18', 4, '2012', 'Sed unde ad', 'Facilis', 'Rerum', 4000, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old', 'car (6).png', 'On Market', 'Tesla', '8', 'interior-(1).png', 'interior-(5).png', 'interior-(3).png', 'interior (2).jpg', 'car (4).png', 'exterior (5).jpg', 'exterior (3).jpg', 'exterior (1).jpg'),
(14, 'Toyota', 13000, 'USA', 'Quia est expedita in Quia est expedita in', 'Aliquid', 'Petrrol', 'Modi nisi culpa ver', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece ', '2023-04-27', 4, '2002', 'Qui quisquam suscipi', 'Illo laborum quo acc', 'Voluptatem Ut nostr', 2000, 'In quis pariatur La', 'car (4).png', 'On Market', 'Toyota', '11', 'exterior (2).jpg', 'exterior (1).jpg', 'interior (2).jpg', 'image1.png', 'interior-(5).png', 'interior-(1).png', 'image8.png', 'exterior (6).jpg'),
(15, 'Mercedes Benz', 140000, 'Canada', 'Contrary to popular belief, Lorem Ipsum.', 'GX SUV', 'Diesel', '16V', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece ', '2023-04-27', 2, '2022', 'Final Drive', 'Hybrid', 'GCC', 2000, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece ', 'car (3).png', 'On Market', 'Mercedes', '11', 'interior-(1).png', 'interior-(3).png', 'interior-(5).png', 'interior (2).jpg', 'exterior (5).jpg', 'exterior-(4).png', 'exterior (2).jpg', 'exterior (6).jpg'),
(16, 'Volkswagen', 7000, 'Germany', 'Omnis dolore nemo il\r\nOmnis dolore nemo il', 'Consectetur natus i', 'Petrol', 'Elit', 'Volkswagen was founded in Germany in 1937. As you might have guessed given the time and location, th', 'Volkswagen was founded in Germany in 1937. As you might have guessed given the time and location, the government of Germany', 'Volkswagen was founded in Germany in 1937. As you might have guessed given the time and location, the government of Germany', 'Volkswagen was founded in Germany in 1937. As you might have guessed given the time and location, the government of Germany', '2016-10-29', 4, '2019', 'Eligendi', 'Quia', 'Esse ex', 6000, 'Odit labore suscipit', 'car (2).png', 'On Market', 'Wolkswagon', '12', 'image4.png', 'exterior (1).jpg', 'exterior (2).jpg', 'image7.png', 'interior-(3).png', 'interior (2).jpg', 'interior (4).jpg', 'mbz.png'),
(17, 'Tarik Dunlap', 89000, 'Ut et nobis ut aut i', 'Molestias vitae face', 'Natus sed quia asper', 'Enim et pariatur Do', 'Quibusdam esse et re', 'Laboris voluptatibus', 'Ut quaerat in amet ', 'Eius illo consequatu', 'Est explicabo In m', '2023-02-21', 17, '1971', 'Quia natus ad delect', 'Quam in quo perferen', 'Quo Nam et sint por', 4000, 'Omnis dolores aut qu', 'image7.png', 'sold', 'Wolkswagon', '4', 'interior (2).jpg', 'interior (4).jpg', 'image1.png', 'image4.png', 'mbz2.png', 'HomeImages.png', 'exterior (6).jpg', 'image2.png'),
(18, 'Brenden Chandler', 925550, 'Consequat Dolor fug', 'Sit veniam quia ips', 'Exercitation totam n', 'Mollitia quo volupta', 'Ea voluptates volupt', 'Magna sed reiciendis', 'Reprehenderit volup', 'Optio consectetur ', 'Hic non fugiat quo m', '1972-05-24', 98, '2009', 'Ipsa accusamus odio', 'Occaecat minim dolor', 'Obcaecati et asperna', 100000, 'Accusamus maxime ver', 'mbz.png', 'sold', 'Mercedes', '8', 'car (5).png', 'image9.png', 'interior-(5).png', 'image1.png', 'image2.png', 'image4.png', 'HomeImages.png', 'interior (2).jpg'),
(19, 'Kasper Bond', 798, 'Dolores rerum non no', 'Quis culpa a debitis', 'Quis ipsam officia s', 'Minima deserunt qui ', 'Nulla commodi molest', 'Voluptas et rem cill', 'A id perspiciatis ', 'Aliqua Nobis dolore', 'Praesentium nostrud ', '1973-11-10', 15, '2018', 'Vel dignissimos ad n', 'Quaerat autem volupt', 'Illo eum rerum conse', 2000, 'Quos irure corporis ', 'car (7).png', 'On Market', 'Tesla', '12', 'image1.png', 'HomeImages.png', 'interior-(5).png', 'interior-(1).png', 'exterior (3).jpg', 'image6.png', 'image8.png', 'exterior (3).jpg'),
(20, 'Alexandra Haley', 885, 'Vitae eos eveniet q', 'Commodo maxime quam ', 'Omnis dolores rerum ', 'Qui sint suscipit la', 'Est voluptatum delen', 'Assumenda expedita s', 'Culpa porro do ipsu', 'Animi cupiditate di', 'Reprehenderit natus ', '1998-12-01', 52, '1973', 'Ipsam architecto adi', 'Sit et hic optio m', 'Vel dolores nobis qu', 2000, 'Necessitatibus iure ', 'image6.png', 'On Market', 'Mercedes', '12', 'image9.png', 'exterior (5).jpg', 'image2.png', 'image8.png', 'interior (4).jpg', 'interior-(1).png', 'image7.png', 'image8.png'),
(21, 'Brynn Walton', 353, 'Vero quia sed quia m', 'Aut cumque dolore la', 'Omnis facere error a', 'In minim do aut itaq', 'Sed corporis consequ', 'Quis atque odio erro', 'Est veniam sit ips', 'Minim quo nostrum fa', 'Ducimus molestias s', '1982-09-10', 14, '1991', 'Enim dolor voluptate', 'Quidem quia eum veli', 'Eiusmod dicta ipsa ', 80000, 'Voluptate aliquid om', 'image4.png', 'On Market', 'Tesla', '11', '', '', '', '', '', '', '', ''),
(22, 'Zelenia Hewitt', 357, 'Veritatis aliquip pr', 'Accusantium eligendi', 'Nisi excepteur ipsum', 'Soluta deserunt pari', 'Natus error quidem e', 'Ut placeat fugiat e', 'Omnis optio quisqua', 'Corrupti voluptatib', 'Doloremque asperiore', '2017-05-15', 52, '1996', 'Culpa magni alias in', 'Fugit suscipit nisi', 'Ullam labore lorem c', 6000, 'In fugiat veritatis ', 'car (10).png', 'sold', 'Wolkswagon', '4', '', '', '', '', '', '', '', ''),
(23, 'Gay Abbott', 643, 'Vitae enim sint est', 'Asperiores ut saepe ', 'Eum consequuntur par', 'Ut consequuntur dele', 'Reprehenderit dolor', 'Cillum hic sed dolor', 'Ipsum vel qui fugiat', 'Itaque qui cum quas ', 'value=\"Vitae exercitation c', '0000-00-00', 6, '1989', 'Ut quis ut sint duis', 'Dolor dolores ipsa ', 'Eu ratione aut neces', 2000, 'Tenetur dolor possim', 'car (8).png', 'On Market', 'Toyota', '4', '', '', '', '', '', '', '', ''),
(24, 'Jasmine Sharp', 519, 'Neque consequatur s', 'Consequatur accusam', 'Esse odit natus qui', 'Et deleniti esse ali', 'Ea amet odio quas a', 'Commodo ut fugiat ra', 'Ut labore quos in qu', 'Eum quia beatae sint', 'Doloribus voluptatib', '1988-09-11', 93, '1982', 'Ipsum aute a volupta', 'Nihil error adipisic', 'Excepturi excepturi ', 2000, 'Voluptatum ea aut il', 'car (5).png', 'On Market', 'Toyota', '11', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `carID` int(11) NOT NULL,
  `agentID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `secondname` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `language` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `payment` int(11) NOT NULL,
  `insurance` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `carID`, `agentID`, `firstname`, `secondname`, `image`, `email`, `phone`, `nationality`, `language`, `gender`, `dob`, `payment`, `insurance`, `username`, `password`, `role`) VALUES
(6, 0, 0, 'John', 'Client', 'user (14).png', 'client@gmail.com', '', 'Canada', 'English', 'Female', '1987-05-19', 0, 0, 'client', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `carID` int(11) NOT NULL,
  `Interior1` varchar(255) NOT NULL,
  `Interior2` varchar(255) NOT NULL,
  `Interior3` varchar(255) NOT NULL,
  `Interior4` varchar(255) NOT NULL,
  `Exterior1` varchar(255) NOT NULL,
  `Exterior2` varchar(255) NOT NULL,
  `Exterior3` varchar(255) NOT NULL,
  `Exterior4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `carID`, `Interior1`, `Interior2`, `Interior3`, `Interior4`, `Exterior1`, `Exterior2`, `Exterior3`, `Exterior4`) VALUES
(1, 3, 'Screenshot 2023-04-08 181113.png', '', '', '', '', '', '', ''),
(2, 3, 'Screenshot 2023-04-08 181113.png', '', '', '', '', '', '', ''),
(3, 3, 'Screenshot 2023-04-08 183013.png', 'Screenshot 2023-04-08 181015.png', 'Screenshot 2023-04-08 174946.png', 'Screenshot 2023-04-08 175232.png', 'Screenshot 2023-04-19 084950.png', 'Screenshot 2023-04-19 084950.png', 'Screenshot 2023-04-19 084950.png', 'Screenshot 2023-04-19 084950.png'),
(4, 6, 'exterior (1).jpg', 'exterior (2).jpg', 'exterior (3).jpg', 'exterior (5).jpg', 'exterior (6).jpg', 'exterior (6).jpg', 'exterior (6).jpg', 'exterior (6).jpg'),
(5, 7, 'mbz3.jpg', 'image9.png', 'interior (2).jpg', 'mbz.png', 'image2.png', 'image2.png', 'image2.png', 'image2.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `senderID` int(11) NOT NULL,
  `receiverID` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `senderID`, `receiverID`, `message`) VALUES
(14, 6, 11, 'Hi Isra, how can I test this car?'),
(15, 11, 6, 'Hi John, yes sure youi can please come to the office on Monday :)'),
(16, 6, 11, 'Okay Sure i will come, thanks Isra!'),
(17, 11, 6, 'See Yah!');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `infor` varchar(255) NOT NULL,
  `dateAdded` date NOT NULL,
  `staffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `infor`, `dateAdded`, `staffID`) VALUES
(1, 'New cars will be on auction soon', 'Assumenda autem et qui labore consequat Libero veritatis excepturi nulla quibusdam obcaecati vitae consequatur Id dolor eum dignissimos eum\r\nAssumenda autem et qui labore consequat Libero veritatis excepturi nulla quibusdam obcaecati vitae consequatur Id ', '2023-04-26', 0),
(2, 'Deserunt anim eos explicabo Laboris velit laudan', 'Sunt et duis harum saepe dolores repellendus Unde esse neque sed qui sit laborum non', '2023-04-26', 0),
(5, 'Sit molestiae incidu', 'Culpa recusandae Tempor id nobis vitae ratione adipisci laboriosam irure repudiandae quo tempora fuga', '2023-04-23', 0),
(6, 'Vitae cupidatat officia blanditiis tempore sint l', 'Accusamus eligendi dolores ipsam consequatur rerum magni aut a cupidatat\r\nAccusamus eligendi dolores ipsam consequatur rerum magni aut a cupidatat\r\nAccusamus eligendi dolores ipsam consequatur rerum magni aut a cupidatat\r\nAccusamus eligendi dolores ipsam ', '2023-04-23', 0),
(7, 'Commodi ea doloremque fugit consectetur cumque do', 'Minim earum rerum at et repellendus Quis accusamus ad ipsa ratione', '2023-04-28', 0),
(8, 'Architecto consequatur Rem natus qui saepe placea', 'Dolore culpa labore esse sequi molestiae et nulla', '2023-04-28', 0),
(9, 'Ducimus voluptatem sunt in dolor', 'Id commodi adipisci id et tenetur quo', '2023-04-28', 0),
(10, 'Quo consequat Adipisicing quasi sequi incididunt ', 'Sunt laboris et repudiandae laboriosam temporibus', '2023-04-28', 0),
(11, 'Proident voluptatum in dolorem ut nisi quo non do', 'Neque minus aut deserunt dolorum quis', '2023-04-28', 4),
(12, 'Pariatur Aliquip anim sequi fuga Laborum Et con', 'Magna cumque sint totam aliquid exercitation eaque suscipit fugiat odit consequatur suscipit earum adipisicing dicta cillum Nam', '2023-04-28', 11),
(13, 'Quia odio qui soluta quisquam dolor qui optio', 'Reprehenderit repudiandae atque sit repellendus Nemo magnam similique distinctio Eius et distinctio', '2023-04-28', 12);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `carID` int(11) NOT NULL,
  `reviewerName` varchar(50) NOT NULL,
  `reviewerImage` varchar(255) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `carID`, `reviewerName`, `reviewerImage`, `nationality`, `review`, `status`) VALUES
(7, 13, 'Ikan ', 'user (16).png', 'Netherlands', 'I love this car', 'Published'),
(8, 16, 'Martina Sosa', 'user (1).jpg', 'Soluta illo distinct', 'Non magna accusamus ', 'Published'),
(9, 16, 'Oren Delaney', 'user (7).png', 'Germany', 'Mu dream car is here :)', 'Published'),
(10, 24, 'Jameson Mendez', 'user (9).png', 'UK', 'Consequat Nobis in ', 'pending'),
(11, 24, 'Mechelle Johnson', 'user (9).png', 'UK', 'Vitae asperiores atq', 'pending'),
(12, 24, 'Maggie Caldwell', 'user (8).png', 'Turkey', 'Quia est officia dol\r\nQuia est officia dol', 'Published'),
(13, 24, 'Elizabeth Bush', 'user (26).png', 'England', 'Ad et sit ullam corr', 'Published'),
(14, 21, 'Ivan Craig', 'user (15).png', 'Italy', 'Dolores vel maxime v', 'Published'),
(15, 15, 'John', 'user (1).png', 'Canada', 'I loved this car from my youthful age', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `secondname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nationality` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `language` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `experience` int(10) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `coverpic` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `response` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `secondname`, `username`, `nationality`, `phone`, `gender`, `language`, `dob`, `email`, `experience`, `profilepic`, `coverpic`, `facebook`, `twitter`, `instagram`, `linkedin`, `password`, `role`, `response`, `status`, `description`) VALUES
(4, 'Jada', 'West', 'jada', 'USA', '2540086746', 'male', 'Englsh', '1993-07-07', 'jada@gmail.com', 12, 'user (17).png', 'image8.png', 'https://www.facebook.com/login/', 'https://twitter.com/i/flow/login', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'jada.1', 'admin', 15, 'verified', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.'),
(8, 'Isra', 'Tech', 'Isratech', 'USA', '4434456780', 'Female', 'English', '1986-03-20', 'isratech8@outlook.com', 12, 'user (27).png', 'image9.png', 'https://www.vikeh.ca', 'https://www.judiwehum.org.au', 'https://www.xovuzuqe.org.uk', 'https://www.kyqylupi.cm', 'isratech.11', 'admin', 10, 'verified', 'Wed Developer'),
(11, 'Isra', 'Lindsey', 'isra', 'Canada', '44480958344', 'Male', 'English', '1986-01-28', 'isratech@gmail.com', 2011, 'user (23).png', 'mbz2.png', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.linkedin.com', '2', 'staff', 12, 'verified', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys.');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `infor` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `priority` text NOT NULL,
  `staffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `title`, `infor`, `date`, `priority`, `staffID`) VALUES
(1, 'Odit do cupidatat ex', 'Suscipit minima sed culpa sit elit tempore est provident', '2023-04-28', 'less', 0),
(3, 'Eu laborum Similiqu', 'Quia possimus et hic reprehenderit dolor ipsam officia provident quibusdam excepteur rerum eius saepe vel in do', '2023-04-28', 'high', 0),
(4, 'Odit do cupidatat ex', 'Suscipit minima sed culpa sit elit tempore est provident', '2023-04-28', 'high', 0),
(5, 'Done Sheets', 'Exercitationem odit est est et optio natus eu corporis modi velit adipisicing dolores non dolorem quod quo et quam', '2023-04-28', 'less', 4),
(8, 'Saepe proident quis', 'Proident culpa ut explicabo Sit minim qui sunt sunt corrupti deleniti nesciunt enim', '2023-04-28', 'high', 4),
(9, 'Proident itaque fac', 'Similique ducimus aut ut vel qui cumque doloremque est Nam a cumque ipsum vitae ea ut', '2023-04-28', 'high', 11),
(10, 'Rerum excepturi aut ', 'Odio hic sed suscipit beatae soluta reprehenderitOdio hic sed suscipit beatae soluta reprehenderit', '2023-04-28', 'less', 11),
(11, 'Sunt consequuntur a', 'Facere ipsa vel nulla asperiores', '2023-04-28', 'high', 12),
(12, 'Commodo corporis nih', 'Tenetur voluptates non enim eius in aut maiores eu modi ad qui nihil libero ea qui', '2023-05-13', 'high', 8),
(13, 'Consequuntur exceptu', 'Tenetur voluptates non enim eius in aut maiores eu modi ad qui nihil libero ea qui', '2023-05-13', 'high', 8),
(14, 'Ut accusamus itaque ', 'Tenetur voluptates non enim eius in aut maiores eu modi ad qui nihil libero ea qui', '2023-05-13', 'high', 8),
(15, 'Incidunt iure culpa', 'Tenetur voluptates non enim eius in aut maiores eu modi ad qui nihil libero ea qui', '2023-05-13', 'high', 8),
(16, 'Et ea excepteur quis', 'Occaecat in aut minim laboriosam vel dolore minim asperiores incidunt vitae aliqua Odit dolor vitae id', '2023-05-13', 'less', 11),
(17, 'Et similique vel exe', 'Ducimus incididunt aliqua Voluptate mollitia reprehenderit cumque itaque saepe voluptate voluptate tempora corrupti omnis sint ipsum sed laudantium', '2023-05-13', 'high', 8),
(18, 'Assigned to Jada', 'Hi Jada, please here is your todo for this week,\r\nMolestiae eiusmod assumenda minim qui voluptatibus qui minim voluptatem eius deserunt', '2023-05-13', 'high', 4);

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `updaterID` int(11) NOT NULL,
  `date` date NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `title`, `updaterID`, `date`, `text`) VALUES
(2, 'Isratech', 0, '2023-04-23', 'Id accusantium blan'),
(3, 'New cars arrival', 0, '2023-04-23', 'pesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
