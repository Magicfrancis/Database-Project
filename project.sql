-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2018 at 11:14 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `A_Ssn` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`A_Ssn`) VALUES
('805274681');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ID` varchar(9) NOT NULL,
  `Author_Ssn` varchar(9) NOT NULL,
  `Pub_ID` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ID`, `Author_Ssn`, `Pub_ID`) VALUES
('123456789', '805274681', '555667899');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_Ssn` varchar(9) NOT NULL,
  `IDno` int(9) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `Created_date` datetime NOT NULL,
  `Username` varchar(12) NOT NULL,
  `Password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_Ssn`, `IDno`, `Email`, `Address`, `Created_date`, `Username`, `Password`) VALUES
('294827566', 100, 'smiths88@hotmail.com', '4513 Mill Street Tampa, FL 33611', '2018-04-14 07:26:43', 'smiths88', '2018lock'),
('294830235', 100192818, 'soundwavez94@hotmail.com', '435 Rose Avenue New Orleans, LA', '2018-04-21 11:52:26', 'bose94max', 'z9z40017'),
('294830235', 102918237, 'sound94wavez@hotmail.com', '435 Rose Avenue New Orleans, LA', '2018-04-05 03:37:16', 'bose94man', 'z9z40017'),
('395039291', 950482084, 'samueljerry@yahoo.com', '3996 Old House Drive Hopedale, OH', '2018-04-12 13:24:22', 'J5ffUser', 'jeff123Pass'),
('593067832', 293840587, 'bryantpersonal@gmail.com', '4664 Twin Oaks Drive Ben Harbor, MI 49022', '2018-04-02 06:24:06', 'KingOak12', '67mammwm'),
('682940581', 948372054, 'mrsmith50904@gmail.com', '3733 Gateway Road Portland, OR', '2018-04-19 07:23:23', 'timesmith904', 'bored50904'),
('684324569', 958374038, '938mobys@yahoo.com', '1849 Post Farm Road Atlanta, GA 30305', '2018-04-04 10:18:26', 'theReal1111', 'ydf96c7g'),
('794562340', 984849300, '1Wavy1Funk1@live.com', '1658 Preston Street Wichita, KS', '2018-04-13 15:53:45', 'wavVibes', 'mus8594ic'),
('799765435', 959028274, 'messironald@hotmail.com', '2810 Corpening Drive Farmington, MI', '2018-04-26 11:28:26', 'soccerfan79', 'football79'),
('805274681', 758493027, 'txLong5081@yahoo.com', '98 Cambridge Drive Phoenix, AZ', '2018-04-13 14:40:52', 'txLong5081', 'TexasBorn90'),
('847964254', 838389453, 'HalfFullcup50@gmail.com', '3009 Johnny Lane New Berlin, WI', '2018-04-11 09:34:29', 'Rarity76', '55Champions'),
('890654324', 893027499, 'potterand12@gmail.com', '1380 Lynn Street Boston, MA 02107', '2018-04-11 04:24:00', 'driftbob87', 'iue12and'),
('890654324', 938473320, '3333treyday@live.com', '3007 Mesa Drive Las Vegas, NV 81902', '2018-04-04 01:05:17', 'Rockets3', 'fk55xzet'),
('896422568', 327839211, 'blakejam32@aol.com', '495 Meadow Lane Kelseyville, CA', '2018-04-22 20:49:47', 'Showtime32', 'pastnpresent'),
('930286172', 1293827171, 'stylish7@yahoo.com', '1080 Grey Fox Farm Road Houston, TX 77209', '2018-04-19 09:00:33', 'HOUSTONs7', 'hdy897work'),
('940389123', 847373390, 'zzzpath3000@gmail.com', '2535 Longview Avenue, New York', '2018-04-15 03:00:00', 'Powerstrong8', 'parkbound8'),
('947895321', 992021756, 'ccdentistrys@gmail.com', '2283 Stoneybrook Road Cary, NC 27513', '2018-04-07 04:10:38', 'CC2018', '9ds95u5m'),
('948693832', 100011231, 'mcdonald@email.com', '1222 West Lane, Arlington TX, 78544', '2018-04-01 00:00:00', 'McDonny', 'pass12311'),
('968427641', 928374443, 'jeffdafisher@aol.com', '1263 Callison Lane Wilmington, DE', '2018-04-22 08:16:09', 'fishstar65', 'thefishboy11');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `D_Ssn` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`D_Ssn`) VALUES
('395810475');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Item_ID` varchar(9) NOT NULL,
  `Item_Image` varchar(30) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Quantity` int(255) UNSIGNED NOT NULL,
  `Cost` float(10,2) UNSIGNED NOT NULL,
  `NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_ID`, `Item_Image`, `Subject`, `Description`, `Quantity`, `Cost`, `NAME`) VALUES
('100', 'row_boat.jpg', 'Mystery', 'Nine people venture to a mysterious island', 9, 16.19, 'And Then There Were None'),
('1000', 'titanic.png', 'Romance', 'lover on ship', 1000, 35.99, 'Titanic'),
('12', 'huckleberry.png', 'Adventure Fiction', 'Follows the journey of a fictional character Huckleberry Finn', 72, 12.59, 'Adventures of Huckleberry Finn'),
('12345', 'math_cover.jpeg', 'Educational', 'College math book', 123, 111.59, 'College Mathematics: Fourth'),
('123456789', 'image', 'Science', 'Book about science', 199, 179.99, 'Science Book'),
('17', 'oxford_title.jpeg', 'Dictionary', 'Words with definitions', 1753, 8.99, 'Oxford Dictionary of English'),
('2000', 'nyt.png', 'Informational', 'daily news', 200, 2.69, 'New York Time'),
('232', 'dragon.png', 'Fiction', 'Ancient Chinese military treatise', 9, 89.99, 'The Art of War'),
('2482', 'gatsby.png', 'Historical Fiction', 'The story about the fictional town of the West and East Egg of Long Island in 1922', 94, 22.49, 'The Great Gatsby'),
('2567', 'red_apple.jpeg', 'Romance', 'Vampires, Werewolves, and humans collide', 345, 17.99, 'Twilight'),
('3232', 'blakegriffin.jpeg', 'Biography', 'Biography for NBA player Blake Griffin', 32, 29.69, 'Blake Griffin: On The Rise'),
('3248', 'dress_leaves.png', 'Fiction', 'A story during the American Civil War', 89, 8.99, 'Gone with the Wind'),
('3891', 'silhouette.jpeg', 'Thriller Novel', 'The mysterious disappearance of a man\'s wife', 4, 35.99, 'Gone Girl'),
('39', 'racecar.png', 'Informational', 'A Nascar fan\'s ultimate guide behind the wheel', 654, 14.39, 'Nascar: Behind the Wheel'),
('438791827', 'Picture', 'Science', 'Science Textbook for grades 1-12', 199, 20.00, 'Science For Kids'),
('483', 'mockingbird.jpeg', 'Fiction', 'A lawyer defends his racially-profiled client', 23, 21.59, 'To Kill a Mockingbird'),
('495', 'clouds.png', 'Non-Fiction', 'Details of the famous 1959 murder of the Herber Clutter family', 93, 10.79, 'In Cold Blood'),
('58320', 'wiseman.png', 'Science Fiction', 'A black and white dystopian world', 99, 16.19, 'The Giver'),
('74839', 'coding.jpeg', 'Informational', 'Introduction to software languages', 1001, 26.99, 'Software Languages'),
('84892', 'redboxcar.png', 'Fiction', 'Story about the boxcar children', 54, 8.99, 'The Boxcar Children'),
('930', 'bluestone.jpg', 'Audio Book', 'Learn new languages', 293, 53.99, 'Rosetta Stone');

-- --------------------------------------------------------

--
-- Table structure for table `journalist`
--

CREATE TABLE `journalist` (
  `J_Ssn` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journalist`
--

INSERT INTO `journalist` (`J_Ssn`) VALUES
('59302843');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `ID` varchar(9) NOT NULL,
  `Director_Ssn` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`ID`, `Director_Ssn`) VALUES
('1000', '395810475');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(9) NOT NULL,
  `Item_ID` varchar(9) NOT NULL,
  `Cust_ID` int(9) NOT NULL DEFAULT '0',
  `Order_date` date NOT NULL,
  `Payment_Option` varchar(10) NOT NULL,
  `Price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `Item_ID`, `Cust_ID`, `Order_date`, `Payment_Option`, `Price`) VALUES
(2, '12', 100, '2018-04-23', 'Cash', 900.00),
(3, '123456789', 100, '2018-04-23', 'Credit', 80.00);

-- --------------------------------------------------------

--
-- Table structure for table `periodical`
--

CREATE TABLE `periodical` (
  `ID` varchar(9) NOT NULL,
  `Journalist_Ssn` varchar(9) NOT NULL,
  `Pub_ID` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periodical`
--

INSERT INTO `periodical` (`ID`, `Journalist_Ssn`, `Pub_ID`) VALUES
('2000', '59302843', '555667899');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Name` varchar(10) NOT NULL,
  `Ssn` varchar(9) NOT NULL,
  `PhoneNo` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Name`, `Ssn`, `PhoneNo`) VALUES
('J.Smith', '294827566', '294-392-2943'),
('C.Boseman', '294830235', '294-992-2003'),
('S.Jefferso', '395039291', '975-083-7890'),
('A.Lee', '395810475', '193-683-0695'),
('M.Johnson', '59302843', '774-992-3343'),
('B.King', '593067832', '583-332-4443'),
('W.Smith', '682940581', '684-322-2113'),
('B.Moby', '684324569', '395-964-4912'),
('M.Freeman', '794562340', '884-302-7943'),
('X.Ronald', '799765435', '123-456-7890'),
('N.Long', '805274681', '846-923-0487'),
('J.Sammy', '847964254', '394-382-2243'),
('H.Anderson', '890654324', '294-378-2343'),
('Z.Griffin', '896422568', '457-054-2794'),
('H.Styles', '930286172', '954-392-2273'),
('J.Park', '940389123', '884-343-2883'),
('C.Chrome', '947895321', '986-772-2993'),
('M.McDonald', '948693832', '834-122-2243'),
('J.Lucky', '968427641', '915-935-0642'),
('D.Pooh', '993765478', '386-332-2963');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `P_Ssn` varchar(9) NOT NULL,
  `P_ID` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`P_Ssn`, `P_ID`) VALUES
('947895321', '555667899');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `S_Ssn` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`S_Ssn`) VALUES
('799765435'),
('940389123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`A_Ssn`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`,`Author_Ssn`),
  ADD KEY `Author_Ssn` (`Author_Ssn`),
  ADD KEY `book_ibfk_3` (`Pub_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_Ssn`,`IDno`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `IDno` (`IDno`) USING BTREE,
  ADD UNIQUE KEY `Username` (`Username`) USING BTREE;

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`D_Ssn`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_ID`);

--
-- Indexes for table `journalist`
--
ALTER TABLE `journalist`
  ADD PRIMARY KEY (`J_Ssn`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`ID`,`Director_Ssn`),
  ADD KEY `Director_Ssn` (`Director_Ssn`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`,`Item_ID`,`Cust_ID`),
  ADD KEY `Item_ID` (`Item_ID`),
  ADD KEY `orders_ibfk_1` (`Cust_ID`);

--
-- Indexes for table `periodical`
--
ALTER TABLE `periodical`
  ADD PRIMARY KEY (`ID`,`Journalist_Ssn`),
  ADD KEY `Journalist_Ssn` (`Journalist_Ssn`),
  ADD KEY `periodical_ibfk_3` (`Pub_ID`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Ssn`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`P_ID`,`P_Ssn`),
  ADD KEY `publisher_ibfk_1` (`P_Ssn`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`S_Ssn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `IDno` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1293827172;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`A_Ssn`) REFERENCES `person` (`Ssn`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `item` (`Item_ID`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`Author_Ssn`) REFERENCES `author` (`A_Ssn`),
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`Pub_ID`) REFERENCES `publisher` (`P_ID`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`Cust_Ssn`) REFERENCES `person` (`Ssn`);

--
-- Constraints for table `director`
--
ALTER TABLE `director`
  ADD CONSTRAINT `director_ibfk_1` FOREIGN KEY (`D_Ssn`) REFERENCES `person` (`Ssn`);

--
-- Constraints for table `journalist`
--
ALTER TABLE `journalist`
  ADD CONSTRAINT `journalist_ibfk_1` FOREIGN KEY (`J_Ssn`) REFERENCES `person` (`Ssn`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `item` (`Item_ID`),
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`Director_Ssn`) REFERENCES `director` (`D_Ssn`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Cust_ID`) REFERENCES `customer` (`IDno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Item_ID`) REFERENCES `item` (`Item_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `periodical`
--
ALTER TABLE `periodical`
  ADD CONSTRAINT `periodical_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `item` (`Item_ID`),
  ADD CONSTRAINT `periodical_ibfk_2` FOREIGN KEY (`Journalist_Ssn`) REFERENCES `journalist` (`J_Ssn`),
  ADD CONSTRAINT `periodical_ibfk_3` FOREIGN KEY (`Pub_ID`) REFERENCES `publisher` (`P_ID`);

--
-- Constraints for table `publisher`
--
ALTER TABLE `publisher`
  ADD CONSTRAINT `publisher_ibfk_1` FOREIGN KEY (`P_Ssn`) REFERENCES `person` (`Ssn`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`S_Ssn`) REFERENCES `person` (`Ssn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
