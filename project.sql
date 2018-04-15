-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2018 at 05:48 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

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
('294827566', 100, '1', '12312', '2018-04-14 07:26:43', '1', '1'),
('948693832', 100011231, 'mcdonald@email.com', '1222 West Lane, Arlington TX, 78544', '2018-04-01 00:00:00', 'McDonny', 'pass12311');

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
  `Price` float(10,2) UNSIGNED NOT NULL,
  `NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_ID`, `Item_Image`, `Subject`, `Description`, `Quantity`, `Price`, `NAME`) VALUES
('1000', 'titanic.png', 'Romance', 'lover on ship', 1000, 1000.00, 'Titanic'),
('123456789', 'image', 'Science', 'Book about science', 0, 1.00, 'Science Book'),
('2000', 'nyt.png', 'informational', 'daily news', 200, 1.50, 'New York Time');

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
  MODIFY `IDno` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100011232;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(9) NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Cust_ID`) REFERENCES `customer` (`IDno`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Item_ID`) REFERENCES `item` (`Item_ID`);

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
