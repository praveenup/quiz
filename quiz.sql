-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 03:03 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `college_name` varchar(100) NOT NULL,
  `1` text NOT NULL,
  `2` text NOT NULL,
  `3` text NOT NULL,
  `4` text NOT NULL,
  `5` text NOT NULL,
  `6` text NOT NULL,
  `7` text NOT NULL,
  `8` text NOT NULL,
  `9` text NOT NULL,
  `10` text NOT NULL,
  `11` text NOT NULL,
  `12` text NOT NULL,
  `13` text NOT NULL,
  `14` text NOT NULL,
  `15` text NOT NULL,
  `16` text NOT NULL,
  `17` text NOT NULL,
  `18` text NOT NULL,
  `19` text NOT NULL,
  `20` text NOT NULL,
  `21` text NOT NULL,
  `22` text NOT NULL,
  `23` text NOT NULL,
  `24` text NOT NULL,
  `25` text NOT NULL,
  `26` text NOT NULL,
  `27` text NOT NULL,
  `28` text NOT NULL,
  `29` text NOT NULL,
  `30` text NOT NULL,
  `31` text NOT NULL,
  `32` text NOT NULL,
  `33` text NOT NULL,
  `34` text NOT NULL,
  `35` text NOT NULL,
  `36` text NOT NULL,
  `37` text NOT NULL,
  `38` text NOT NULL,
  `39` text NOT NULL,
  `40` text NOT NULL,
  `41` text NOT NULL,
  `42` text NOT NULL,
  `43` text NOT NULL,
  `44` text NOT NULL,
  `45` text NOT NULL,
  `46` text NOT NULL,
  `47` text NOT NULL,
  `48` text NOT NULL,
  `49` text NOT NULL,
  `50` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`college_name`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`) VALUES
('Amity University, Mumbai,', '', '', '1', '2', '', '1', '4', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '1', '3', '2', '', '', '', '', '', '', ''),
('B. S. Abdur Rahman University', '2', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('B.P.H.E. Societys Institute of Management Studies Career Dev & Research', '3', '1', '2', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3', '', '', '', ''),
('bapuji institute of engineering & technology,davangere', '2', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Bharathiar University', '2', '2', '', '', '', '', '', '', '', '', '', '', '', '', '4', '1', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('K. L. N. College of Engineering', '2', '4', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('KJ Somaiya Institute of Management Studies and Research', '3', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('NIT RAIPUR', '', '', '3', '2', '3', '4', '4', '4', '2', '1', '3', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3', '3', '1', '3', '2', '4', '1', '4', '3', '4', '', '', '', '', '', '4', '', '', '', '', '', '', ''),
('nitc', '1', '3', '3', '4', '3', '2', '2', '2', '2', '', '', '3', '', '1', '', '', '2', '2', '', '', '', '', '', '', '', '1', '3', '1', '1', '1', '1', '2', '', '4', '1', '2', '2', '', '', '', '', '', '', '', '', '', '', '', '2', '4'),
('nitcc', '3', '2', '2', '', '1', '', '', '', '', '', '', '1', '3', '2', '3', '', '', '', '', '', '', '', '2', '2', '', '', '1', '', '', '', '', '', '', '3', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '2'),
('nitccccc', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ST. Joseph Engineering College', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Swarnandhra College of Engineering and Technology', '4', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '2', '', '', '', '1', '', '', '', '2', '', '2', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', '2', '2', '', '', ''),
('Thangal Kunju Musaliar College of Engineering, Kollam, Kerala', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('The National Institute of Engineering, Mysore', '4', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('University of Madras', '2', '3', '', '', '', '', '', '', '', '', '', '2', '4', '1', '4', '', '', '', '', '', '', '', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '3', '4', '4', '1', '', '', '', '', '', ''),
('Velagapudi Ramakrishna Siddhartha Engineering College', '', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('VIT University', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------



--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `ques_no` int(11) NOT NULL,
  `question` text NOT NULL,
  `option_1` text NOT NULL,
  `option_2` text NOT NULL,
  `option_3` text NOT NULL,
  `option_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`ques_no`, `question`, `option_1`, `option_2`, `option_3`, `option_4`) VALUES
(1, 'In which of the free cities was Robb Stark''s wife Talisa Maegyr Raised?', 'Lys', 'Braavos', 'Volantis', 'Pentos'),
(2, 'Who is the first person to say the word "Game of Thrones" in the series?', 'Ned Stark', 'Petyr Baelish', 'Varys', 'Cersei Lannister'),
(3, 'In which region is Harrenhall?', 'The Riverlands', 'The Vale', 'The Reach', 'The North'),
(4, 'According to Littlefinger chaos is a ________', 'Pit', 'Ladder', 'Gift ', 'Curse'),
(5, 'What is the name of Roose Bolton''s wife?', 'Walda ', 'Roslyn', 'Yara', 'Talisa'),
(6, 'Whos is NOT on Arya Stark''s list?', 'Joffrey Baratheon', 'Cersei Lannister', 'Meryn Trant', 'Jaime Lannister'),
(7, 'What is the Lannister''s motto?', 'Hear me roar', 'A Lannister always pays his debts', 'Money is power', 'A lion always kills its prey'),
(8, 'What does Tyrion murder his father with? ', 'Poison', 'Crossbow', 'Sword', 'Mace'),
(9, 'What is Littlefinger''s role in the small council?', 'Master of Coin', 'Master of War', 'Master of Ships', 'Commander of the Kingsguard'),
(10, 'What is _________ may never die?', 'Iron', 'Drowned', 'Dead', 'Reborn'),
(11, 'What does Danaerys Targaryen catapult across Meereen''s Walls?', 'Locked Slave Collars', 'Hands', 'Heads', 'Broken Chains'),
(12, 'Who saves Sansa during the riot at King''s Landing?', 'Tyrion Lannister ', 'The Hound', 'Joffrey Baratheon', 'Petyr Baelish'),
(13, 'Who gives Robert Baratheon poisoned wine?', 'Lancel Lannister', 'Cersei Lannister', 'Jaime Lannister', 'Petyr Baelish'),
(14, 'Who has Margaery Tyrell not been bethroted to?', 'Tommen Baratheon', 'Renly Baratheon', 'Joffrey Baratheon', 'Stannis Baratheon'),
(15, 'Who does Oberyn Martell seek revenge for?', 'His wife', 'His daughter', 'His sister', 'His mother'),
(16, 'What is the name of Arya Stark''s sword?', 'Icicle', 'Nymeria ', 'Needle', 'Northern Point'),
(17, 'Where does the Red Wedding take place?', 'Riverrun', 'The Twins', 'The Red Keep', 'The Eyrie'),
(18, 'Whose execution does Bran Stark witness?', 'Gared', 'Will', 'Glenn', 'Waymar'),
(19, 'What is the name of Ned Stark''s sword?', 'Winter', 'Longclaw', 'Ice', 'Wolf''s Tooth'),
(20, 'What is House Greyjoy''s motto?', 'We Remember', 'We Guard The Way', 'We Pay The Iron Price', 'We Do Not Sow'),
(21, 'What does dracarys mean?', 'Dragon', 'Burn', 'Dragonfire', 'Kill'),
(22, 'Which season were all the Stark children born during?', 'Summer', 'Winter', 'Spring', 'Autumn'),
(23, 'The night is dark and full of ____________', 'Evil', 'Terrors', 'Death', 'Blood'),
(24, 'Who kills Ned Stark?', 'Ilyn Payne', 'Petyr Baelish', 'Cersei Lannister', 'Joffrey Lannister'),
(25, 'Which of these is not a bastard''s surname?', 'Snow', 'Flower', 'River', 'Rock'),
(26, 'Who said this line "Give my regards to the Night''s Watch. I''m sure it will be thrilling. And if it''s not, it''s only for life".', 'Jaime Lannister', 'Tyrion Lannister', 'Jorah Mormont', 'Craster'),
(27, 'Who kills Mance Rayder?', 'Stannis Baratheon', 'Jon Snow', 'Ser Allister Thorne', 'Melisandre'),
(28, 'Where does Danaerys meet Missandei?', 'Yunkai', 'Astapor', 'Qarth', 'Meereen'),
(29, 'Where did Peter Baelish grow up as a foster?', 'Iron Islands', 'The North', 'Riverrun', 'Stormlands'),
(30, 'What is the profession of Daario Naharis?', 'Pear brandy Connoisseur', 'Tyroshi Sellsword', 'Ex-Member of the Night''s Watch', 'A Kinght'),
(31, 'Who rescues Sansa and Theon after they escaped Ramsay?', 'The Hound', 'Stannis Baratheon', 'Brienne and Podrick', 'Melisandre'),
(32, 'What is Littlefinger''s sigyl?', 'An eye', 'A mockingbird', 'A fox', 'A hawk'),
(33, 'What does Valar Dohaeris mean?', 'All men must fear', 'All men must die', 'All men must serve', 'All men must kill'),
(34, 'Who is Tyrion''s first lover?', 'Tysha', 'Shae', 'Sansa', 'Danaerys'),
(35, 'What does Allister Throne nickname Samwell Tarly?', 'Lord Piggy', 'Sir Piggy', 'King Piggy', 'Mister Piggy'),
(36, 'Who kills Ygritte?', 'Tormund', 'Ser Allister Thorne', 'Olly', 'Pyp'),
(37, 'Who was the Lord Commander of the Kingsguard during the beginning of Game of Thrones?', 'Ser Joer Mormont', 'Ser Barristan Selmy', 'Ser Jaime Lannister', 'Ser Loras Tyrell'),
(38, 'Who delivered the fatal blow to Robb Stark?', 'Allister Thorne', 'Roose Bolton', 'Walder Frey', 'Joffrey Lannister'),
(39, 'Which city does Samwell Tarly travel in order to train as a maester?', 'Gulltown', 'Sunspear', 'Highgarden', 'Oldtown'),
(40, 'Davos Seaworth grew up in the slums of which city?', 'Gulltown', 'King''s Landing', 'Lannisport', 'Meereen'),
(41, 'What is the name of Joffrey Baratheon''s sword?', 'Widow''s Wail', 'Dark Sister', 'Hearteater', 'Beastslayer'),
(42, 'What is Davos Seaworth known as? ', 'The Garlic Knight', 'The Onion Knight', 'The Vegetable Knight', 'The Knight Who says Ni'),
(43, 'During Brienne''s fight with The Hound, which body part did she bite off?', 'Nose', 'Finger', 'Ear', 'Toe'),
(44, 'Who saves Tyrion''s life at Blackwater?', 'Ser Meryn Trant', 'Bronn', 'Podrick Payne', 'Ser Barristan Selmy'),
(45, 'Which character is responsible for resurrecting Berric Dondarrion?', 'Melisandre', 'Qyburn', 'The Hight Sparrow', 'Thoros of Myr'),
(46, 'Where does Danaerys have to go to get her dragons back?', 'Meereen', 'House of Undying', 'Dragonstone', 'Braavos'),
(47, 'Where does Tyrion try to send Shae to protect her?', 'Essos', 'Braavos', 'Pentos ', 'Astapor'),
(48, 'Who plays Tyrion Lannister?', 'Kit Harrington', 'Sean Bean', 'Eddie Redmayne', 'Peter Dinklage'),
(49, 'What is Hodor''s real name?', 'Wylis', 'Walder', 'William', 'Wilbur'),
(50, 'Who acted as the Commander of the Night''s watch when Jon Snow died?', 'Bowen Marsh', 'Allister Thorne', 'Othell Yarwyck', 'Mance Rayder');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_registration`
--

CREATE TABLE `quiz_registration` (
  `college` varchar(500) NOT NULL,
  `member` varchar(200) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `start_time` text NOT NULL,
  `submit_time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_registration`
--


-- --------------------------------------------------------




--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`college_name`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`ques_no`);

--
-- Indexes for table `quiz_registration`
--
ALTER TABLE `quiz_registration`
  ADD PRIMARY KEY (`college`);



--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `ques_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
