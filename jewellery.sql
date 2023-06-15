-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 03:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `Identity` varchar(100) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`Identity`, `Username`, `Password`) VALUES
('admin@gmail.com', 'Aakib', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cartdetails`
--

CREATE TABLE `cartdetails` (
  `Sno` int(5) DEFAULT NULL,
  `Username` varchar(50) NOT NULL,
  `Pid` int(5) NOT NULL,
  `Pname` varchar(50) DEFAULT NULL,
  `Size` int(10) DEFAULT NULL,
  `Price` varchar(20) DEFAULT NULL,
  `Qty` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartdetails`
--

INSERT INTO `cartdetails` (`Sno`, `Username`, `Pid`, `Pname`, `Size`, `Price`, `Qty`) VALUES
(3, 'Mr_Mansuri', 2, 'The Ursa Hoop Earrings', 0, '38,837.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `itemdetails`
--

CREATE TABLE `itemdetails` (
  `Sno` int(5) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Material` varchar(20) DEFAULT NULL,
  `Size` varchar(50) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `Gender` varchar(15) DEFAULT NULL,
  `Price` varchar(15) DEFAULT NULL,
  `Inventory` int(15) DEFAULT NULL,
  `Image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemdetails`
--

INSERT INTO `itemdetails` (`Sno`, `Name`, `Description`, `Material`, `Size`, `Category`, `Gender`, `Price`, `Inventory`, `Image`) VALUES
(1, 'The Vicky Hoop Earrings ', 'Diamond Earrings In 18Kt Yellow Gold (3.93 gram) with Diamonds (0.3520 Ct)', 'Gold', '[\"10\",\"11\",\"12\",\"13\",\"14\",\"15\"]', 'Earrings', 'Female', '56,930.00', 30, '[\"../Images/Items/The Vicky Hoop Earrings 1.mp4\",\"../Images/Items/The Vicky Hoop Earrings 2.jpg\",\"../Images/Items/The Vicky Hoop Earrings 3.jpg\",\"../Images/Items/The Vicky Hoop Earrings 4.jpg\",\"../Images/Items/The Vicky Hoop Earrings 5.jpg\"]'),
(2, 'The Ursa Hoop Earrings', 'Diamond Earrings In 18Kt Yellow Gold The Ursa Hoop Earrings', 'Gold', '[\"10\",\"11\",\"12\",\"13\",\"14\",\"15\"]', 'Earrings', 'Female', '38,837.00', 50, '[\"../Images/Items/The Ursa Hoop Earrings1.mp4\",\"../Images/Items/The Ursa Hoop Earrings2.jpg\",\"../Images/Items/The Ursa Hoop Earrings3.jpg\",\"../Images/Items/The Ursa Hoop Earrings4.jpg\",\"../Images/Items/The Ursa Hoop Earrings5.jpg\"]'),
(3, 'Twining Dangle Solitaire Diamond Earring', 'This Earrings is so design with attractive Dimonds and availabe in different size. ', 'Diamond', '[\"10\",\"11\"]', 'Earrings', 'Female', '39308.00', 100, '[\"../Images/Items/Twining Dangle Solitaire Diamond Earring1.mp4\",\"../Images/Items/Twining Dangle Solitaire Diamond Earring2.jpg\",\"../Images/Items/Twining Dangle Solitaire Diamond Earring3.jpg\",\"../Images/Items/Twining Dangle Solitaire Diamond Earring4.jpg\",\"../Images/Items/Twining Dangle Solitaire Diamond Earring5.jpg\"]'),
(4, 'Twining Dangle Solitaire Gold Diamond Earring', 'This Earrings is so design with attractive Dimonds or Gold color  and availabe in different size. ', 'Gold', '[\"10\"]', 'Earrings', 'Female', '39308.00', 12, '[\"../Images/Items/Twining Dangle Solitaire Gold Diamond Earring1.mp4\",\"../Images/Items/Twining Dangle Solitaire Gold Diamond Earring2.jpg\",\"../Images/Items/Twining Dangle Solitaire Gold Diamond Earring3.jpg\",\"../Images/Items/Twining Dangle Solitaire Gold Diamond Earring4.jpg\"]'),
(5, 'Caterpillar Butterfly Diamond Dangle Earring', 'Product hight is 2.4 cm (24 mm),Product Weight is 2.99g,Using Mattel is Yellow gold.', 'Gold', '[\"10\"]', 'Earrings', 'Female', '38,837.00', 12, '[\"../Images/Items/Caterpillar Butterfly Diamond Dangle Earring1.mp4\",\"../Images/Items/Caterpillar Butterfly Diamond Dangle Earring2.jpg\",\"../Images/Items/Caterpillar Butterfly Diamond Dangle Earring3.jpg\",\"../Images/Items/Caterpillar Butterfly Diamond Dangle Earring4.jpg\"]'),
(6, 'Infinity Sparked Bangle', 'Diamond Bangles In 18Kt Yellow Gold (3.93 gram) with Diamonds (0.3520 Ct)', 'Diamond', '[\"10\",\"12\",\"14\"]', 'Bangles', 'Female', '1,29,000.00', 2, '[\"../Images/Items/Infinity Sparked Bangle1.jpg\",\"../Images/Items/Infinity Sparked Bangle2.jpg\",\"../Images/Items/Infinity Sparked Bangle3.mp4\"]'),
(7, 'Millennia Diamond Bangle', 'This elegant Swarovski bangle showcases the symbols of infinite love and eternity entwined with each other. Embellished with white Swarovski crystals, the heart motif perfectly complements the infinity symbol for a truly romantic look. A mixed metal finis', 'Diamond', '[\"10\",\"11\",\"12\",\"13\",\"14\",\"15\"]', 'Bangles', 'Female', '219,719.00', 12, '[\"../Images/Items/Millennia Diamond Bangle1.jpeg\",\"../Images/Items/Millennia Diamond Bangle2.jpeg\",\"../Images/Items/Millennia Diamond Bangle3.jpeg\"]'),
(8, 'Little Wondr Timeless Elegance Bangle', 'India’s leading Earth-friendly diamond brand with an illustrious legacy of diamond experts. We bring conspicuous designs that reflect the strength and femininity of women who are changing the world.', 'Gold', '[\"10\",\"11\",\"12\",\"13\",\"14\",\"15\"]', 'Bangles', 'Female', ' 37,398', 2, '[\"../Images/Items/Little Wondr Timeless Elegance Bangle1.webp\",\"../Images/Items/Little Wondr Timeless Elegance Bangle2.webp\",\"../Images/Items/Little Wondr Timeless Elegance Bangle3.webp\"]'),
(9, 'Little Wondr Everyday Sparkle Bangle', 'India’s leading Earth-friendly diamond brand with an illustrious legacy of diamond experts. We bring conspicuous designs that reflect the strength and femininity of women who are changing the world.', 'Gold', '[\"10\",\"11\",\"12\",\"13\",\"14\",\"15\"]', 'Bangles', 'Female', '43,564.00', 30, '[\"../Images/Items/Little Wondr Everyday Sparkle Bangle1.webp\",\"../Images/Items/Little Wondr Everyday Sparkle Bangle2.webp\",\"../Images/Items/Little Wondr Everyday Sparkle Bangle3.webp\"]'),
(10, 'The Liham A Pendant', 'Diamond Pendant In 18Kt Yellow Gold (1.93 gram) with Diamonds (0.0520 Ct)', 'Diamond', '[\"10\",\"11\",\"12\",\"13\"]', 'Pendants', 'Unisex', '16,085.00', 2, '[\"../Images/Items/The Liham A Pendant1.mp4\",\"../Images/Items/The Liham A Pendant2.jpg\",\"../Images/Items/The Liham A Pendant3.jpg\",\"../Images/Items/The Liham A Pendant4.jpg\"]'),
(11, 'The Kailasha Pendant', 'Pendant In 22Kt Yellow Gold (2.9 gram)', 'Diamond', '[\"10\",\"12\",\"14\"]', 'Pendants', 'Female', '17,530.00', 12, '[\"../Images/Items/The Kailasha Pendant1.mp4\",\"../Images/Items/The Kailasha Pendant2.jpg\",\"../Images/Items/The Kailasha Pendant3.jpg\",\"../Images/Items/The Kailasha Pendant4.jpg\"]'),
(12, 'The Aaniya Pendant', 'Diamond Pendant In 18Kt Yellow Gold (4.08 gram) with Diamonds (0.1550 Ct)', 'Diamond', '[\"10\",\"11\",\"12\",\"13\",\"14\",\"15\"]', 'Pendants', 'Female', '49265.00', 2, '[\"../Images/Items/The Aaniya Pendant1.mp4\",\"../Images/Items/The Aaniya Pendant2.jpg\",\"../Images/Items/The Aaniya Pendant3.jpg\",\"../Images/Items/The Aaniya Pendant4.jpg\"]'),
(13, 'The Pema Pendant', 'Diamond Pendant In 18Kt Yellow Gold (1.06 gram) with Diamonds (0.1150 Ct)', 'Diamond', '[\"10\",\"13\",\"14\",\"15\"]', 'Pendants', 'Unisex', '18 215.00', 12, '[\"../Images/Items/The Pema Pendant1.mp4\",\"../Images/Items/The Pema Pendant2.jpg\",\"../Images/Items/The Pema Pendant3.jpg\",\"../Images/Items/The Pema Pendant4.jpg\"]'),
(14, 'The Rita Pendant', 'White Pearl HD Pendant In 18Kt Yellow Gold (0.66 gram)', 'Diamond', '[\"10\",\"12\",\"14\",\"15\"]', 'Pendants', 'Unisex', '26 232.00', 30, '[\"../Images/Items/The Rita Pendant1.mp4\",\"../Images/Items/The Rita Pendant2.jpg\",\"../Images/Items/The Rita Pendant3.jpg\",\"../Images/Items/The Rita Pendant4.jpg\"]'),
(15, 'Sparkle Intertwined Diamond Ring', 'Set in 14 KT Yellow Gold(1.280 g) with diamonds (0.049 ct ,GH-SI)', 'Diamond', '[\"10\"]', 'Rings', 'Male', '12,585.00', 25, '[\"../Images/Items/Sparkle Intertwined Diamond Ring1.jpg\",\"../Images/Items/Sparkle Intertwined Diamond Ring2.mp4\"]'),
(16, 'Gleaming Infinity Diamond Ring', 'Set in 14 KT Rose Gold(1.000 g) with diamonds (0.030 ct ,GH-SI)', 'Diamond', '[\"10\"]', 'Rings', 'Female', '9,379.00', 12, '[\"../Images/Items/Gleaming Infinity Diamond Ring1.jpg\",\"../Images/Items/Gleaming Infinity Diamond Ring2.mp4\"]'),
(17, 'Intertwined Glim Diamond Ring', 'Set in 18 KT Yellow Gold(1.880 g) with diamonds (0.070 ct ,IJ-SI)', 'Gold', '[\"10\"]', 'Rings', 'Female', '11290.00', 23, '[\"../Images/Items/Intertwined Glim Diamond Ring1.jpg\",\"../Images/Items/Intertwined Glim Diamond Ring2.mp4\"]'),
(18, 'Isabella Halo Diamond Ring', 'The Inspiration This diamond ring is carefully crafted to ensure your beautiful jewellery is always protected.', 'Silver', '[\"10\"]', 'Rings', 'Female', '42,390.00', 1, '[\"../Images/Items/Isabella Halo Diamond Ring1.jpg\",\"../Images/Items/Isabella Halo Diamond Ring2.mp4\"]'),
(19, 'Forevermore Solitaire Ring', 'Set in 18 KT Yellow Gold(1.770 g) with diamonds (0.250 ct ,IJ-SI)', 'Gold', '[\"10\"]', 'Rings', 'Female', '25990.00', 2, '[\"../Images/Items/Forevermore Solitaire Ring1.jpg\",\"../Images/Items/Forevermore Solitaire Ring2.jpg\",\"../Images/Items/Forevermore Solitaire Ring3.jpg\",\"../Images/Items/Forevermore Solitaire Ring4.mp4\"]'),
(20, 'Atara Twist Sparked Diamond Bracelet', 'Set in 18 KT Yellow Gold(11.990 g) with diamonds (0.418 ct ,IJ-SI)', 'Diamond', '[\"10\",\"11\",\"12\",\"13\",\"14\",\"15\"]', 'Bracelets', 'Female', '1,17,814.00', 2, '[\"../Images/Items/Atara Twist Sparked Diamond Bracelet1.jpg\",\"../Images/Items/Atara Twist Sparked Diamond Bracelet2.jpg\",\"../Images/Items/Atara Twist Sparked Diamond Bracelet3.jpg\",\"../Images/Items/Atara Twist Sparked Diamond Bracelet4.jpg\",\"../Images/Items/Atara Twist Sparked Diamond Bracelet5.mp4\"]'),
(21, 'Dazzle Tapered Diamond Bangle', 'Set in 18 KT Yellow Gold(14.490 g) with diamonds (2.654 ct ,EF-VVS)', 'Gold', '[\"10\",\"11\",\"12\"]', 'Bracelets', 'Male', '4,67,554.00', 3, '[\"../Images/Items/Dazzle Tapered Diamond Bangle1.jpg\",\"../Images/Items/Dazzle Tapered Diamond Bangle2.jpg\",\"../Images/Items/Dazzle Tapered Diamond Bangle3.jpg\",\"../Images/Items/Dazzle Tapered Diamond Bangle4.jpg\"]'),
(22, 'Bina Deep Waved Diamond Bracelet', 'Set in 18 KT Yellow Gold(10.930 g) with diamonds (0.497 ct ,IJ-SI)', 'Gold', '[\"10\",\"11\"]', 'Bracelets', 'Female', '1,13,406.00', 3, '[\"../Images/Items/Bina Deep Waved Diamond Bracelet1.jpg\",\"../Images/Items/Bina Deep Waved Diamond Bracelet2.jpg\",\"../Images/Items/Bina Deep Waved Diamond Bracelet3.jpg\",\"../Images/Items/Bina Deep Waved Diamond Bracelet4.mp4\"]'),
(23, 'Janki Gemstone Necklace', 'Set in 14 KT Yellow Gold(13.020 g) with diamonds (0.406 ct ,IJ-SI)', 'Gold', '[\"10\",\"11\",\"12\"]', 'Neckwear', 'Female', '151000.00', 1, '[\"../Images/Items/Janki Gemstone Necklace1.jpg\",\"../Images/Items/Janki Gemstone Necklace2.jpg\",\"../Images/Items/Janki Gemstone Necklace3.jpg\",\"../Images/Items/Janki Gemstone Necklace4.mp4\"]'),
(24, 'Graduating Pearl Necklace', 'Set in 18 KT Yellow Gold(2.990 g)', 'Gold', '[\"10\",\"11\"]', 'Neckwear', 'Female', '179000.00', 1, '[\"../Images/Items/Graduating Pearl Necklace1.jpg\",\"../Images/Items/Graduating Pearl Necklace2.jpg\",\"../Images/Items/Graduating Pearl Necklace3.jpg\",\"../Images/Items/Graduating Pearl Necklace4.jpg\",\"../Images/Items/Graduating Pearl Necklace5.jpg\"]'),
(25, 'Never-Ending Love Diamond Necklace', 'Set in 18 KT Yellow Gold(3.750 g) with diamonds (0.090 ct ,IJ-SI)', 'Diamond', '[\"10\",\"11\"]', 'Neckwear', 'Female', '38,837.00', 3, '[\"../Images/Items/Never-Ending Love Diamond Necklace1.jpg\",\"../Images/Items/Never-Ending Love Diamond Necklace2.jpg\",\"../Images/Items/Never-Ending Love Diamond Necklace3.jpg\",\"../Images/Items/Never-Ending Love Diamond Necklace4.jpg\",\"../Images/Items/Never-Ending Love Diamond Necklace5.mp4\"]'),
(26, 'Juliet Geometric Diamond Necklace', 'Set in 14 KT Three Tone Gold(2.460 g) with diamonds (0.100 ct ,IJ-SI)', 'Diamond', '[\"10\",\"11\",\"12\"]', 'Neckwear', 'Female', '20,727.00', 3, '[\"../Images/Items/Juliet Geometric Diamond Necklace1.jpg\",\"../Images/Items/Juliet Geometric Diamond Necklace2.jpg\",\"../Images/Items/Juliet Geometric Diamond Necklace3.mp4\"]'),
(27, 'Radiance 14Kt Gold Chain', 'Set in 14 KT Yellow Gold(1.210 g)', 'Gold', '[\"10\",\"11\",\"12\",\"13\"]', 'Chains', 'Female', '6,333.00', 2, '[\"../Images/Items/Radiance 14Kt Gold Chain1.jpg\",\"../Images/Items/Radiance 14Kt Gold Chain2.jpg\",\"../Images/Items/Radiance 14Kt Gold Chain3.mp4\"]'),
(28, 'Goddess Lakshmi Motif 22 Karat Gold Coin', 'Bring home the auspicious aura of this 5 gram gold coin crafted in 22 Karat Yellow Gold.', 'Diamond', '[\"10\"]', 'Gold Coins', 'Unisex', '27 410.00', 25, '[\"../Images/Items/Goddess Lakshmi Motif 22 Karat Gold Coin1.jpg\",\"../Images/Items/Goddess Lakshmi Motif 22 Karat Gold Coin2.jpg\",\"../Images/Items/Goddess Lakshmi Motif 22 Karat Gold Coin3.jpg\",\"../Images/Items/Goddess Lakshmi Motif 22 Karat Gold Coin4.jpg\"]'),
(29, 'Goddess Lakshmi Motif 22 Karat Gold Coin', 'Bring home the auspicious aura of this 5 gram gold coin crafted in 22 Karat Yellow Gold.', 'Diamond', '[\"10\"]', 'Gold Coins', 'Unisex', '27 410.00', 25, '[\"../Images/Items/Goddess Lakshmi Motif 22 Karat Gold Coin1.jpg\",\"../Images/Items/Goddess Lakshmi Motif 22 Karat Gold Coin2.jpg\",\"../Images/Items/Goddess Lakshmi Motif 22 Karat Gold Coin3.jpg\",\"../Images/Items/Goddess Lakshmi Motif 22 Karat Gold Coin4.jpg\"]'),
(30, 'Goddess Lakshmiji Feet 10 Gram Gold Coin', 'Bring home the auspicious aura of this 5 gram gold coin crafted in 22 Karat Yellow Gold.', 'Gold', '[\"10\"]', 'Gold Coins', 'Unisex', '31 039.00', 1, '[\"../Images/Items/Goddess Lakshmiji Feet 10 Gram Gold Coin1.jpg\",\"../Images/Items/Goddess Lakshmiji Feet 10 Gram Gold Coin2.jpg\",\"../Images/Items/Goddess Lakshmiji Feet 10 Gram Gold Coin3.jpg\",\"../Images/Items/Goddess Lakshmiji Feet 10 Gram Gold Coin4.jpg\"]'),
(31, 'Om Motif 22 Karat 10 Gram Gold Coin', 'Bring home the auspicious aura of this 5 gram gold coin crafted in 22 Karat Yellow Gold.', 'Diamond', '[\"10\"]', 'Gold Coins', 'Unisex', '12 113.00', 10, '[\"../Images/Items/Om Motif 22 Karat 10 Gram Gold Coin1.jpg\",\"../Images/Items/Om Motif 22 Karat 10 Gram Gold Coin2.jpg\",\"../Images/Items/Om Motif 22 Karat 10 Gram Gold Coin3.jpg\",\"../Images/Items/Om Motif 22 Karat 10 Gram Gold Coin4.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `Orderid` int(5) DEFAULT NULL,
  `Username` varchar(50) NOT NULL,
  `Pid` int(5) NOT NULL,
  `Pname` varchar(50) DEFAULT NULL,
  `Size` int(10) DEFAULT NULL,
  `Price` varchar(20) DEFAULT NULL,
  `Qty` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`Orderid`, `Username`, `Pid`, `Pname`, `Size`, `Price`, `Qty`) VALUES
(1, 'root123', 2, 'The Ursa Hoop Earrings', 13, '38,837.00', 1),
(1, 'root123', 14, 'The Rita Pendant', 12, '26 232.00', 1),
(2, 'J Mansuri', 30, 'Goddess Lakshmiji Feet 10 Gram Gold Coin', 0, '31 039.00', 1),
(3, 'Mr Mansuri', 1, 'The Vicky Hoop Earrings ', 12, '56,930.00', 1),
(3, 'Mr Mansuri', 6, 'Infinity Sparked Bangle', 12, '1,29,000.00', 1),
(3, 'Mr Mansuri', 7, 'Millennia Diamond Bangle', 12, '219,719.00', 1),
(3, 'Mr Mansuri', 13, 'The Pema Pendant', 13, '18 215.00', 1),
(4, 'root123', 1, 'The Vicky Hoop Earrings ', 12, '56,930.00', 5),
(5, 'Hammad Sunsara', 22, 'Bina Deep Waved Diamond Bracelet', 10, '1,13,406.00', 2),
(5, 'Hammad Sunsara', 29, 'Goddess Lakshmi Motif 22 Karat Gold Coin', 10, '27 410.00', 5),
(6, 'Aisha Shaikh', 3, 'Twining Dangle Solitaire Diamond Earring', 10, '39308.00', 2),
(6, 'Aisha Shaikh', 6, 'Infinity Sparked Bangle', 14, '1,29,000.00', 3),
(6, 'Aisha Shaikh', 10, 'The Liham A Pendant', 13, '16,085.00', 1),
(7, 'root123', 18, 'Isabella Halo Diamond Ring', 10, '42,390.00', 2),
(8, 'root123', 3, 'Twining Dangle Solitaire Diamond Earring', 0, '39308.00', 1),
(9, 'Hammad123', 2, 'The Ursa Hoop Earrings', 0, '38,837.00', 1),
(10, 'Hammad123', 2, 'The Ursa Hoop Earrings', 10, '38,837.00', 1),
(11, 'Hammad123', 2, 'The Ursa Hoop Earrings', 0, '38,837.00', 1),
(12, 'Aakib', 10, 'The Liham A Pendant', 0, '16,085.00', 1),
(13, 'root123', 8, 'Little Wondr Timeless Elegance Bangle', 0, ' 37,398', 1),
(13, 'root123', 13, 'The Pema Pendant', 0, '18 215.00', 1),
(13, 'root123', 32, 'xyz', 12, '12 113', 1);

-- --------------------------------------------------------

--
-- Table structure for table `querydetails`
--

CREATE TABLE `querydetails` (
  `Sno` int(5) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `QUERY` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `querydetails`
--

INSERT INTO `querydetails` (`Sno`, `Name`, `Email`, `QUERY`) VALUES
(1, 'Aakib mansuri', 'aakibsammansuri42@gmail.com', 'is Diamond neckwear available...?'),
(2, 'Hammad Sunsara', 'Xyz@gmail.com', 'is there any discount on credit card...?'),
(3, 'Kaif Malek', 'Kaif@123.com', 'When big billion day arrive...?'),
(4, 'Mr Mansuri', 'Xyz@gmail.com', 'couple rings available on shop..?'),
(5, 'J mansuri', 'aakibsammansuri42@gmail.com', 'your shop address..'),
(6, 'Aakib Mansuri', 'aakibsammansuri42@gmail.com', 'any warranty on products..!'),
(7, 'Arman Mansuri', 'Arman@123.com', 'Any offers in Diwali..?'),
(8, 'Aakib mansuri', 'aakibsammansuri42@gmail.com', 'Have Fun...?');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `Identity` varchar(100) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`Identity`, `Name`, `Address`, `Username`, `Password`) VALUES
('7016403313', 'Arman Mansuri', 'Ahmedabad', 'Arman.man', 'Arman12345'),
('9016231801', 'J Mansuri', 'Ahmedabad', 'jmansuri_123', 'Jwold.com123'),
('9104841296', 'hammad', '22/2 savnduplex, near  tohid park-2, fatehwadi , sarkhej road', 'hammad123', 'Hammad@2620'),
('9586006974', 'root', 'Gujarat', 'root123', 'root12345'),
('aakibsammansuri42@gmail.com', 'Mr Mansuri', 'Rajkot', 'Mr_Mansuri', 'Mansuri@mail.com'),
('Hammad@gmail.com', 'Hammad Sunsara', 'Ahmedabad', 'Hammad123', 'Hammad12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`Identity`,`Username`) USING BTREE;

--
-- Indexes for table `cartdetails`
--
ALTER TABLE `cartdetails`
  ADD PRIMARY KEY (`Username`,`Pid`);

--
-- Indexes for table `itemdetails`
--
ALTER TABLE `itemdetails`
  ADD PRIMARY KEY (`Sno`,`Name`);

--
-- Indexes for table `querydetails`
--
ALTER TABLE `querydetails`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`Identity`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
