-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 09:24 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passcode` varchar(50) NOT NULL,
  `type` char(7) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `page` varchar(250) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`, `type`, `email`, `phone`, `page`, `about`) VALUES
(1, 'admin', '1234', 'admin', 'admin@gmail.com', '123123123', '', 'hello i am admin'),
(2, 'user', '1234', 'user', 'user@gmail.com', '1234', '', ''),
(3, 'nam', '1234', 'admin', 'testadmin@gmail.com', '0987654321', 'https://www.facebook.com/phuongnam09071997', 'test admin le phuong nam'),
(4, 'thuong', '1234', 'user', 'testuser@gmail.com', '1234', 'https://www.facebook.com/thuon8', 'test user nguyen hoang thuong');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `descriptopn` text NOT NULL,
  `type` enum('powerpoint','more','web','word') NOT NULL,
  `rate` enum('0','1','2','3','4','5') NOT NULL,
  `comment` text NOT NULL,
  `byuser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `image`, `source`, `descriptopn`, `type`, `rate`, `comment`, `byuser`) VALUES
(1, 'Studio', 'web_01.jpg', 'web_01.zip', 'On one of our most popular website templates the wide banner images and bold buttons create clear calls to action.', 'web', '2', '', 0),
(2, 'Travel', 'web_02.jpg', 'web_02.zip', 'A contemporary website template with long scrolling pages to elegantly showcase your portfolio.', 'web', '3', '', 0),
(3, 'Generate Idea', 'web_03.jpg', 'web_03.zip', 'This clean website template offers versatile header, sidebars, and banner images to intrigue your visitors.', 'web', '3', '', 0),
(4, 'Treviso Theme', 'web_04.jpg', 'web_04.zip', 'Clean, straight lines and an adaptive grid layout create a classic website template to highlight your unique portfolio.', 'web', '4', '', 0),
(5, 'Carinary', 'web_05.jpg', 'web_05.zip', 'This streamlined website template showcases text and imagery with an alluring, scrolling design.', 'web', '5', '', 0),
(6, 'Mu Material', 'web_06.jpg', 'web_06.zip', 'Intertwine full-width imagery and splashy text in captivating, scrolling pages.', 'web', '3', '', 0),
(7, 'Landiya', 'web_07.jpg', 'web_07.zip', 'Interactive galleries and full-width banners encourage visitors to explore your site.', 'web', '3', '', 0),
(8, 'Construction', 'web_08.jpg', 'web_08.zip', 'Tell your love story in a dynamic way with this website template of stunning imagery and scrolling effects.', 'web', '3', '', 0),
(9, 'Interact', 'web_09.jpg', 'web_09.zip', 'Scrolling effects and customizable gallery layouts grab the attention of potential customers.', 'web', '3', '<b>nam:</b> hello\n<br>', 0),
(10, 'Ink', 'web_10.jpg', 'web_10.zip', 'A mosaic gallery that adapts to the size of your images makes this an optimal website template for photographers and creative professionals.', 'web', '2', '', 0),
(11, 'App Landy', 'web_11.jpg', 'web_11.zip', 'A versatile and modern website template with prominent thumbnail images and location tags to highlight and organize your ideas.', 'web', '4', '', 0),
(12, 'Gomag', 'web_12.jpg', 'web_12.zip', 'Vivid headlines and bright pops of color promote your services.', 'web', '1', '', 0),
(13, 'Made', 'web_13.jpg', 'web_13.zip', 'Draw in new clients and promote your services with this website template of clean lines and simple layouts.', 'web', '2', '', 0),
(14, 'Landscaper', 'web_14.jpg', 'web_14.zip', 'Full-bleed images and slideshow galleries shine the spotlight on your many talents.', 'web', '2', '', 0),
(15, 'Catalyst', 'web_15.jpg', 'web_15.zip', 'A modern website template with attention-grabbing banners and scrolling effects to sell your products with panache.', 'web', '2', '', 0),
(16, 'Intensely', 'web_16.jpg', 'web_16.zip', 'The engaging layouts of this website template make your work pop and your portfolio stand out.', 'web', '3', '', 0),
(17, 'Ossibird', 'web_17.jpg', 'web_17.zip', 'The unique gallery of this website template pulls visitors deep into your visual work.', 'web', '2', '', 0),
(18, 'Cherry Blossom', 'ppt_01.jpeg', 'ppt_01.potx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '5', '<b>admin:</b> this is defalut on database, sir<br><b>user:</b> who upload this?\n<br>', 0),
(19, 'Horse', 'ppt_02.jpeg', 'ppt_02.pptx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '2', '', 0),
(20, 'Fresh Fruit', 'ppt_03.jpeg', 'ppt_03.pptx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '4', '', 0),
(21, 'Sea Turtle', 'ppt_04.jpeg', 'ppt_04.pptx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '2', '', 0),
(22, 'Classroom Timer', 'ppt_05.jpeg', 'ppt_05.potx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '4', '', 0),
(23, 'Coloured Pencils', 'ppt_06.jpeg', 'ppt_06.pptx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '3', '', 0),
(24, 'Hare', 'ppt_07.jpeg', 'ppt_07.pptx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '5', '', 0),
(25, 'Bitcoin', 'ppt_08.jpeg', 'ppt_08.potx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '4', '', 0),
(26, 'Desert', 'ppt_09.jpeg', 'ppt_09.pptx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '1', '', 0),
(27, 'Coffee Centric', 'ppt_10.jpeg', 'ppt_10.pptx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '3', '', 0),
(28, 'Road Work', 'ppt_11.jpeg', 'ppt_11.potx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '2', '', 0),
(29, 'Ecology', 'ppt_12.jpeg', 'ppt_12.potx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '4', '', 0),
(30, 'Sunflower', 'ppt_13.jpeg', 'ppt_13.pptx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '5', '', 0),
(31, 'Cactus', 'ppt_14.jpeg', 'ppt_14.pptx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '5', '', 0),
(32, 'Finance Balthasar', 'ppt_15.jpeg', 'ppt_15.pptx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '2', '', 0),
(33, 'Science Project', 'ppt_16.jpeg', 'ppt_16.potx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '2', '', 0),
(34, 'Travel', 'ppt_17.jpeg', 'ppt_17.pptx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '5', '', 0),
(35, 'Virtual Reality', 'ppt_18.jpeg', 'ppt_18.potx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '3', '', 0),
(36, 'Fisherman', 'ppt_19.jpeg', 'ppt_19.pptx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '5', '', 0),
(37, 'Business Sales', 'ppt_20.jpeg', 'ppt_20.potx', 'We offers a wide collection of free PowerPoint template for your presentations: backgrounds, diagrams, maps...', 'powerpoint', '1', '', 0),
(38, 'The Elementary Express', 'word_01.jpg', 'word_01.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '3', '<b>nam:</b> yes i am<br><b>testuser:</b> anybody here??\n<br><b>testuser:</b> hello\n<br><b>testuser:</b> \nDownload\nDescription<br><b>testuser:</b> The Elementary Express<br>', 0),
(39, 'Pulse Point', 'word_02.jpg', 'word_02.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '2', '', 0),
(40, 'The Veterinary Post', 'word_03.jpg', 'word_03.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '4', '', 0),
(41, 'Tomorrow', 'word_04.jpg', 'word_04.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '2', '', 0),
(42, 'Science of Food', 'word_05.jpg', 'word_05.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '4', '', 0),
(43, 'Art Therapy', 'word_06.jpg', 'word_06.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '5', '', 0),
(44, 'InTouch', 'word_07.jpg', 'word_07.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '4', '', 0),
(45, 'The Finacial Market', 'word_08.jpg', 'word_08.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '2', '', 0),
(46, 'Rediscover', 'word_09.jpg', 'word_09.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '2', '', 0),
(47, 'Taking Care of Your Child', 'word_10.jpg', 'word_10.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '3', '', 0),
(48, 'Home Front', 'word_11.jpg', 'word_11.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '1', '', 0),
(49, 'Pedia Source', 'word_12.jpg', 'word_12.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '4', '', 0),
(50, 'Healthcare', 'word_13.jpg', 'word_13.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '3', '', 0),
(51, 'Live Life', 'word_14.jpg', 'word_14.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '2', '', 0),
(52, 'Enjoy', 'word_15.jpg', 'word_15.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '4', '', 0),
(53, 'You Have Got An Idea', 'word_16.jpg', 'word_16.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '2', '', 0),
(54, 'Faith Love Hope', 'word_17.jpg', 'word_17.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '3', '', 0),
(55, 'Spotlight', 'word_18.jpg', 'word_18.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '5', '', 0),
(56, 'Sail Smoothly', 'word_19.jpg', 'word_19.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '4', '', 0),
(57, 'Credit', 'word_20.jpg', 'word_20.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '3', '', 0),
(58, 'Tax Planning', 'word_21.jpg', 'word_21.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '2', '', 0),
(59, 'Beyond The Numbers', 'word_22.jpg', 'word_22.docx', 'The template contains a specific layout, style, design and, sometimes, fields and text that are common to every use of that template.', 'word', '3', '', 0),
(60, 'Celebrate The Season', 'event_1.png', 'event_1.png', 'This is template of image!!', 'more', '1', '', 0),
(61, 'Concert In The Park', 'event_2.png', 'event_2.png', 'This is template of image!!', 'more', '4', '', 0),
(62, 'Live Jazz', 'event_3.png', 'event_3.png', 'This is template of image!!', 'more', '1', '<b>nam:</b> tesst1<br>', 0),
(63, 'Music Fesstival', 'event_4.png', 'event_4.png', 'This is template of image!!', 'more', '3', '', 0),
(64, 'default', 'default.jpg', 'default.txt', 'Default case', 'more', '0', '', 0),
(65, 'default', 'default.jpg', 'default.txt', 'Default case', 'more', '0', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `comment` text NOT NULL,
  `byuser` int(10) NOT NULL,
  `rate` enum('0','1','2','3','4','5') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`, `comment`, `byuser`, `rate`) VALUES
(1, '70455-(r)11d.jpg', 'image/jpeg', 19, '', 1, '0'),
(2, '77190-3d-glass-green-effect.jpg', 'image/jpeg', 249, '', 1, '0'),
(3, '3653-favicon.ico', 'image/x-icon', 30, '', 2, '0'),
(4, '83147-fibonacci.c', 'text/plain', 2, '', 2, '0'),
(5, '97066-image.jpeg', 'image/jpeg', 1821, '', 3, '0'),
(6, '75790-3653-favicon.ico', 'image/x-icon', 30, '', 3, '0'),
(7, '26538-image.jpeg', 'image/jpeg', 1235, '', 4, '0'),
(31, '56944-2560x1600-stars_anime_girls_anime_air-21973.jpg', 'image/jpeg', 389, '', 2, '2'),
(30, '23749-color_purple_symphony_lines_10545_3840x2400.jpg', 'image/jpeg', 1648, '', 4, '0'),
(32, '46781-hrtrhtrhe.jpg', 'image/jpeg', 472, '', 3, '0'),
(33, '49350-rfm92-95.png', 'image/png', 10, '', 3, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
