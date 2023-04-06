-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 06:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahumalingscents`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ID` int(11) NOT NULL,
  `Image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ID`, `Image`) VALUES
(1, 'images/slider/LacosteCollection.png'),
(2, 'images/slider/VersaceCollection.png'),
(3, 'images/slider/VictoriaSecretCollection.png'),
(4, 'images/slider/RalphLaurenCollection.png'),
(5, 'images/slider/CologneCollection.png');

-- --------------------------------------------------------

--
-- Table structure for table `car_diffuser`
--

CREATE TABLE `car_diffuser` (
  `ID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Price` int(250) NOT NULL,
  `Image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_diffuser`
--

INSERT INTO `car_diffuser` (`ID`, `Name`, `Description`, `Price`, `Image`) VALUES
(1, 'Aloe Vera', 'Car Diffuser', 120, 'images/Car_Diffusers/AloeVera.png'),
(2, 'Bubble Gum', 'Car Diffuser', 120, 'images/Car_Diffusers/BubbleGum.png'),
(3, 'Green Apple', 'Car Diffuser', 120, 'images/Car_Diffusers/GreenApple.png'),
(4, 'Lemon', 'Car Diffuser', 120, 'images/Car_Diffusers/Lemon.png'),
(5, 'Marine Squash', 'Car Diffuser', 120, 'images/Car_Diffusers/MarineSquash.png'),
(6, 'New Car', 'Car Diffuser', 120, 'images/Car_Diffusers/NewCar.png'),
(7, 'Orange', 'Car Diffuser', 120, 'images/Car_Diffusers/Orange.png'),
(8, 'Red Berries', 'Car Diffuser', 120, 'images/Car_Diffusers/RedBerries.png'),
(9, 'Sky Fall', 'Car Diffuser', 120, 'images/Car_Diffusers/SkyFall.png'),
(10, 'Strawberry', 'Car Diffuser', 120, 'images/Car_Diffusers/Strawberry.png');

-- --------------------------------------------------------

--
-- Table structure for table `cologne`
--

CREATE TABLE `cologne` (
  `ID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Price` int(250) NOT NULL,
  `Genders` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Image2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cologne`
--

INSERT INTO `cologne` (`ID`, `Name`, `Description`, `Price`, `Genders`, `Image`, `Image2`) VALUES
(1, 'Bahaghari', 'Cologne', 100, 'Women', 'images/Cologne_Primary/Bahaghari.png', 'images/Cologne_Secondary/Bahaghari.png'),
(2, 'Hiraya', 'Cologne', 100, 'Women', 'images/Cologne_Primary/Hiraya.png', 'images/Cologne_Secondary/Hiraya.png'),
(3, 'Makisig', 'Cologne', 100, 'Men', 'images/Cologne_Primary/Makisig.png', 'images/Cologne_Secondary/Makisig.png'),
(4, 'Marikit', 'Cologne', 100, 'Women', 'images/Cologne_Primary/Marikit.png', 'images/Cologne_Secondary/Marikit.png'),
(5, 'Mayumi', 'Cologne', 100, 'Women', 'images/Cologne_Primary/Mayumi.png', 'images/Cologne_Secondary/Mayumi.png'),
(6, 'Mithi', 'Cologne', 100, 'Men', 'images/Cologne_Primary/Mithi.png', 'images/Cologne_Secondary/Mithi.png'),
(7, 'Ning Ning', 'Cologne', 100, 'Women', 'images/Cologne_Primary/NingNing.png', 'images/Cologne_Secondary/NingNing.png'),
(8, 'Palangga', 'Cologne', 100, 'Men', 'images/Cologne_Primary/Palangga.png', 'images/Cologne_Secondary/Palangga.png'),
(9, 'Paraluman', 'Cologne', 100, 'Women', 'images/Cologne_Primary/Paraluman.png', 'images/Cologne_Secondary/Paraluman.png'),
(10, 'Tinatangi', 'Cologne', 100, 'Men', 'images/Cologne_Primary/Tinatangi.png', 'images/Cologne_Secondary/Tinatangi.png');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `ID` int(11) NOT NULL,
  `Image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`ID`, `Image`) VALUES
(1, 'images/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `perfumes`
--

CREATE TABLE `perfumes` (
  `ID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Image2` varchar(250) NOT NULL,
  `BestSeller` varchar(250) NOT NULL,
  `Genders` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perfumes`
--

INSERT INTO `perfumes` (`ID`, `Name`, `Description`, `Price`, `Image`, `Image2`, `BestSeller`, `Genders`) VALUES
(1, 'Lacoste Black', 'Lacoste', '180', 'images/Perfume_Primary/LacosteBlack.png', 'images/Perfume_Secondary/LacosteBlack.png', 'BestSeller', 'Men'),
(2, 'Lacoste Red', 'Lacoste', '180', 'images/Perfume_Primary/LacosteRed.png', 'images/Perfume_Secondary/LacosteRed.png', '', 'Men'),
(3, 'Lacoste Green', 'Lacoste', '180', 'images/Perfume_Primary/LacosteGreen.png', 'images/Perfume_Secondary/LacosteGreen.png', '', 'Men'),
(4, 'Lacoste Blue', 'Lacoste', '180', 'images/Perfume_Primary/LacosteBlue.png', 'images/Perfume_Secondary/LacosteBlue.png', '', 'Men'),
(5, 'Lacoste Whie', 'Lacoste', '180', 'images/Perfume_Primary/LacosteWhite.png', 'images/Perfume_Secondary/LacosteWhite.png', '', 'Men'),
(6, 'Lacoste Pink', 'Lacoste', '180', 'images/Perfume_Primary/LacostePink.png', 'images/Perfume_Secondary/LacostePink.png', '', 'Women'),
(7, 'Lanvin Paris', 'Victoria Secret', '180', 'images/Perfume_Primary/LanvinParis.png', 'images/Perfume_Secondary/LanvinParis.png', '', 'Women'),
(8, 'Love Spell', 'Victoria Secret', '180', 'images/Perfume_Primary/LoveSpell.png', 'images/Perfume_Secondary/LoveSpell.png', '', 'Women'),
(9, 'Meow', 'Katy Perry', '180', 'images/Perfume_Primary/Meow.png', 'images/Perfume_Secondary/Meow.png', '', 'Women'),
(10, 'Mont Blanc Legend', 'Mont Blanc', '180', 'images/Perfume_Primary/MontBlancLegend.png', 'images/Perfume_Secondary/MontBlancLegend.png', '', 'Men'),
(11, 'Moon Light', 'Moon Light', '180', 'images/Perfume_Primary/MoonLight.png', 'images/Perfume_Secondary/MoonLight.png', '', 'Women'),
(12, 'Moon Sparkle', 'Moon Sparkle', '180', 'images/Perfume_Primary/MoonSparkle.png', 'images/Perfume_Secondary/MoonSparkle.png', '', 'Women'),
(13, 'N°5 Channel Paris', 'Channel Paris', '180', 'images/Perfume_Primary/N°5Chanel_Paris.png', 'images/Perfume_Secondary/N°5ChanelParis.png', '', 'Women'),
(14, 'New York', 'New York', '180', 'images/Perfume_Primary/NewYork.png', 'images/Perfume_Secondary/NewYork.png', '', 'Women'),
(15, 'Omnia Amethyse', 'Bvlgari', '180', 'images/Perfume_Primary/OmniaAmethyse.png', 'images/Perfume_Secondary/OmniaAmethyse.png', '', 'Women'),
(16, 'One Million', 'One Million', '180', 'images/Perfume_Primary/OneMillion.png', 'images/Perfume_Secondary/OneMillion.png', '', 'Men'),
(17, 'Paris Hilton', 'Paris Hilton', '180', 'images/Perfume_Primary/ParisHilton.png', 'images/Perfume_Secondary/ParisHilton.png', 'BestSeller', 'Women'),
(18, 'Pink Chiffon', 'Pink Chiffon', '180', 'images/Perfume_Primary/PinkChiffon.png', 'images/Perfume_Secondary/PinkChiffon.png', '', 'Women'),
(19, 'Polo Black', 'Ralph Lauren', '180', 'images/Perfume_Primary/PoloBlack.png', 'images/Perfume_Secondary/PoloBlack.png', '', 'Men'),
(20, 'Polo Red', 'Ralph Lauren', '180', 'images/Perfume_Primary/PoloRed.png', 'images/Perfume_Secondary/PoloRed.png', '', 'Men'),
(21, 'Polo Sports', 'Ralph Lauren', '180', 'images/Perfume_Primary/PoloSports.png', 'images/Perfume_Secondary/PoloSports.png', '', 'Men'),
(22, 'Pure Seduction', 'Victoria Secret', '180', 'images/Perfume_Primary/PureSeduction.png', 'images/Perfume_Secondary/PureSeduction.png', '', 'Women'),
(23, 'Romantic Wish', 'Victoria Secret', '180', 'images/Perfume_Primary/RomanticWish.png', 'images/Perfume_Secondary/RomanticWish.png', '', 'Women'),
(24, 'Scandalous', 'Victoria Secret', '180', 'images/Perfume_Primary/Scandalous.png', 'images/Perfume_Secondary/Scandalous.png', '', 'Women'),
(25, 'Scuderia Ferrari', 'Ferrari', '180', 'images/Perfume_Primary/ScuderiaFerrari.png', 'images/Perfume_Secondary/ScuderiaFerrari.png', '', 'Men'),
(26, 'Sea Island Cotton', 'Bath and Body', '180', 'images/Perfume_Primary/SeaIslandCotton.png', 'images/Perfume_Secondary/SeaIslandCotton.png', '', 'Women'),
(27, 'Secret Charm', 'Victoria Secret', '180', 'images/Perfume_Primary/SecretCharm.png', 'images/Perfume_Secondary/SecretCharm.png', '', 'Women'),
(28, 'Selena Gomez', 'Selena Gomez', '180', 'images/Perfume_Primary/SelenaGomez.png', 'images/Perfume_Secondary/SelenaGomez.png', '', 'Women'),
(29, 'Sexy Little Things', 'Victoria Secret', '180', 'images/Perfume_Primary/SexyLittleThings.png', 'images/Perfume_Secondary/SexyLittleThings.png', '', 'Women'),
(30, 'Sweet Baby Powder', 'Sweet Baby Powder', '180', 'images/Perfume_Primary/SweetBabyPowder.png', 'images/Perfume_Secondary/SweetBabyPowder.png', '', 'Women'),
(31, 'Sweet Pea', 'Bath and Body', '180', 'images/Perfume_Primary/SweetPea.png', 'images/Perfume_Secondary/SweetPea.png', '', 'Women'),
(32, 'Swiss Army', 'Swiss Army', '180', 'images/Perfume_Primary/SwissArmy.png', 'images/Perfume_Secondary/SwissArmy.png', '', 'Men'),
(33, 'Tommy Boy', 'Tommy', '180', 'images/Perfume_Primary/TommyBoy.png', 'images/Perfume_Secondary/TommyBoy.png', '', 'Men'),
(34, 'Tommy Girl', 'Tommy', '180', 'images/Perfume_Primary/TommyGirl.png', 'images/Perfume_Secondary/TommyGirl.png', '', 'Women'),
(35, 'Vanilla Lace', 'Victoria Secret', '180', 'images/Perfume_Primary/VanillaLace.png', 'images/Perfume_Secondary/VanillaLace.png', 'BestSeller', 'Women'),
(36, 'Vanille Chocolate', 'Vanille Chocolate', '180', 'images/Perfume_Primary/VanilleChocolate.png', 'images/Perfume_Secondary/VanilleChocolate.png', '', 'Women'),
(37, 'Versace Eros', 'Versace', '180', 'images/Perfume_Primary/VersaceEros.png', 'images/Perfume_Secondary/VersaceEros.png', 'BestSeller', 'Men'),
(38, '212 VIP', '212 VIP', '180', 'images/Perfume_Primary/212VIP.png', 'images/Perfume_Secondary/212VIP.png', '', 'Women'),
(39, 'Acqua Di Gio', 'Acqua', '180', 'images/Perfume_Primary/AcquadeGio.png', 'images/Perfume_Secondary/AcquadeGio.png', '', 'Men'),
(40, 'Amber Romance', 'Victoria Secret', '180', 'images/Perfume_Primary/AmberRomance.png', 'images/Perfume_Secondary/AmberRomance.png', '', 'Women'),
(41, 'Aqua Amara', 'Bvlgari', '180', 'images/Perfume_Primary/AquaAmara.png', 'images/Perfume_Secondary/AquaAmara.png', '', 'Men'),
(42, 'Ari', 'Ariana Grande', '180', 'images/Perfume_Primary/Ari.png', 'images/Perfume_Secondary/Ari.png', '', 'Women'),
(43, 'Banana Republic M', 'Banana Republic', '180', 'images/Perfume_Primary/BananaRepublicMen.png', 'images/Perfume_Secondary/BananaRepublicMen.png', '', 'Men'),
(44, 'Banana Republic W', 'Banana Republic', '180', 'images/Perfume_Primary/BananaRepublicWomen.png', 'images/Perfume_Secondary/BananaRepublicWomen.png', '', 'Women'),
(45, 'Bright Crystal', 'Victoria Secret', '180', 'images/Perfume_Primary/BrightCrystal.png', 'images/Perfume_Secondary/BrightCrystal.png', '', 'Women'),
(46, 'Burberry Weekend', 'Burberry', '180', 'images/Perfume_Primary/BurberryWeekend.png', 'images/Perfume_Secondary/BurberryWeekend.png', '', 'Women'),
(47, 'Bvlgari Man Extreme', 'Bvlgari', '180', 'images/Perfume_Primary/BvlgariManExtreme.png', 'images/Perfume_Secondary/BvlgariManExtreme.png', '', 'Men'),
(48, 'Can Can', 'Paris Hilton', '180', 'images/Perfume_Primary/CanCan.png', 'images/Perfume_Secondary/CanCan.png', '', 'Women'),
(49, 'CK One', 'Calvin Klein', '180', 'images/Perfume_Primary/CKOne.png', 'images/Perfume_Secondary/CKOne.png', 'BestSeller', 'Men'),
(50, 'Clinique Happy', 'Clinique Happy', '180', 'images/Perfume_Primary/CliniqueHappy.png', 'images/Perfume_Secondary/CliniqueHappy.png', '', 'Men'),
(51, 'Cloud', 'Ariana Grande', '180', 'images/Perfume_Primary/Cloud.png', 'images/Perfume_Secondary/Cloud.png', 'BestSeller', 'Women'),
(52, 'Coconut Passion', 'Victoria Secret', '180', 'images/Perfume_Primary/CoconutPassion.png', 'images/Perfume_Secondary/CoconutPassion.png', '', 'Women'),
(53, 'Cool Water', 'David Off', '180', 'images/Perfume_Primary/CoolWater.png', 'images/Perfume_Secondary/CoolWater.png', '', 'Women'),
(54, 'Creed Aventus', 'Aventus', '180', 'images/Perfume_Primary/CreedAventus.png', 'images/Perfume_Secondary/CreedAventus.png', '', 'Men'),
(55, 'Cucumber Melon', 'Bath and Body', '180', 'images/Perfume_Primary/CucumberMelon.png', 'images/Perfume_Secondary/CucumberMelon.png', '', 'Women'),
(56, 'D & G Men', 'Dolce and Gabbana', '180', 'images/Perfume_Primary/D&GMen.png', 'images/Perfume_Secondary/D&GMen.png', '', 'Men'),
(57, 'D & G Women', 'Dolce and Gabbana', '180', 'images/Perfume_Primary/D&GWomen.png', 'images/Perfume_Secondary/D&GWomen.png', '', 'Women'),
(58, 'Diesel Spirit', 'Diesel Spirit', '180', 'images/Perfume_Primary/DieselSpirit.png', 'images/Perfume_Secondary/DieselSpirit.png', '', 'Men'),
(59, 'DKNY', 'Donna Karan New York', '180', 'images/Perfume_Primary/DKNY.png', 'images/Perfume_Secondary/DKNY.png', '', 'Women'),
(60, 'Drakkar Noir', 'Guy Laroche', '180', 'images/Perfume_Primary/DrakkarNoir.png', 'images/Perfume_Secondary/DrakkarNoir.png', '', 'Men'),
(61, 'Dylan Blue', 'Versace', '180', 'images/Perfume_Primary/DylanBlue.png', 'images/Perfume_Secondary/DylanBlue.png', '', 'Men'),
(62, 'Eternity', 'Calvin Klein', '180', 'images/Perfume_Primary/Eternity.png', 'images/Perfume_Secondary/Eternity.png', '', 'Men'),
(64, 'First Instinc', 'Abercrombie and Fitch', '180', 'images/Perfume_Primary/FirstInstinc.png', 'images/Perfume_Secondary/FirstInstinc.png', '', 'Men'),
(65, 'Girl Friend', 'Justin Bieber', '180', 'images/Perfume_Primary/girlfriend.png', 'images/Perfume_Secondary/girlfriend.png', '', 'Women'),
(66, 'Green Tea Scents - Spray', 'Elizabeth Arden', '180', 'images/Perfume_Primary/GreenTea-ScentSpray.png', 'images/Perfume_Secondary/GreenTea-ScentSpray.png', '', 'Women'),
(67, 'Gucci Bamboo', 'Gucci', '180', 'images/Perfume_Primary/GucciBamboo.png', 'images/Perfume_Secondary/GucciBamboo.png', '', 'Women'),
(68, 'Gucci Rush', 'Gucci', '180', 'images/Perfume_Primary/GucciRush.png', 'images/Perfume_Secondary/GucciRush.png', '', 'Women'),
(69, 'Incanto Charms', 'Incanto', '180', 'images/Perfume_Primary/IncantoCharms.png', 'images/Perfume_Secondary/IncantoCharms.png', '', 'Women'),
(70, 'Intenso', 'Intenso', '180', 'images/Perfume_Primary/Intenso.png', 'images/Perfume_Secondary/Intenso.png', '', 'Men'),
(71, 'Issey Miyake', 'Pour Homme', '180', 'images/Perfume_Primary/IsseyMiyake.png', 'images/Perfume_Secondary/IsseyMiyake.png', '', 'Men'),
(72, 'Killer Queen', 'Katy Perry', '180', 'images/Perfume_Primary/KillerQueen.png', 'images/Perfume_Secondary/KillerQueen.png', '', 'Women'),
(73, 'Fahrenheit', 'Fahrenheit', '180', 'images/Perfume_Primary/Fahrenheit.png', 'images/Perfume_Secondary/Fahrenheit.png', '', 'Men'),
(75, 'Victoria Secret Bomb Shell', 'Victoria Secret', '180', 'images/Perfume_Primary/BombShell.png', 'images/Perfume_Secondary/BombShell.png', '', 'Women'),
(76, 'Angel\'s Smile', 'Angels Smile', '180', 'images/Perfume_Primary/AngelSmile.png', 'images/Perfume_Secondary/AngelSmile.png', '', 'Women'),
(77, 'Channel Chance', 'Channel', '180', 'images/Perfume_Primary/ChannelChance.png', 'images/Perfume_Secondary/ChannelChance.png', '', 'Women'),
(78, 'Cool Water Men', 'David Off', '180', 'images/Perfume_Primary/CoolWaterMen.png', 'images/Perfume_Secondary/CoolWaterMen.png', '', 'Men'),
(79, 'Desire Blue', 'Dunhill', '180', 'images/Perfume_Primary/DesireBlue.png', 'images/Perfume_Secondary/DesireBlue.png', '', 'Men'),
(80, 'DunhillLondon', 'Dunhill', '180', 'images/Perfume_Primary/DunhillLondon.png', 'images/Perfume_Secondary/DunhillLondon.png', '', 'Men'),
(81, 'English Pears & Freshnia', 'Jo Malon', '180', 'images/Perfume_Primary/EnglishPears&Freshnia.png', 'images/Perfume_Secondary/EnglishPears&Freshnia.png', '', 'Women'),
(82, 'Escada', 'Escada', '180', 'images/Perfume_Primary/Escada.png', 'images/Perfume_Secondary/Escada.png', '', 'Women'),
(83, 'Fantasy', 'Britney Spears', '180', 'images/Perfume_Primary/Fantasy.png', 'images/Perfume_Secondary/Fantasy.png', '', 'Women'),
(84, 'Hugo Boss Energise', 'Hugo Boss', '180', 'images/Perfume_Primary/HugoBossEnergise.png', 'images/Perfume_Secondary/HugoBossEnergise.png', '', 'Men'),
(85, 'Incanto Shine', 'Incanto', '180', 'images/Perfume_Primary/IncantoShine.png', 'images/Perfume_Secondary/IncantoShine.png', '', 'Women'),
(86, 'Intense Men', 'Invictus', '180', 'images/Perfume_Primary/IntenseMen.png', 'images/Perfume_Secondary/IntenseMen.png', '', 'Men'),
(87, 'Invictus Aqua', 'Invictus', '180', 'images/Perfume_Primary/InvictusAqua.png', 'images/Perfume_Secondary/InvictusAqua.png', '', 'Men'),
(88, 'Jimmy Choo', 'Jimmy Choo', '180', 'images/Perfume_Primary/JimmyChoo.png', 'images/Perfume_Secondary/JimmyChoo.png', '', 'Women'),
(89, 'Jovan White Musk', 'Jovan', '180', 'images/Perfume_Primary/JovanWhiteMusk.png', 'images/Perfume_Secondary/JovanWhiteMusk.png', '', 'Women'),
(90, 'Peony and Blush Suede', 'Jo Malon', '180', 'images/Perfume_Primary/PeonyandBlushSuede.png', 'images/Perfume_Secondary/PeonyandBlushSuede.png', '', 'Women'),
(91, 'Ralph Lauren Blue', 'Ralph Lauren', '180', 'images/Perfume_Primary/RalphLaurenBlue.png', 'images/Perfume_Secondary/RalphLaurenBlue.png', '', 'Men'),
(92, 'Sweet Like Candy', 'Ariana Grande', '180', 'images/Perfume_Primary/SweetLikeCandy.png', 'images/Perfume_Secondary/SweetLikeCandy.png', '', 'Women'),
(93, 'Viva La Juicy', 'Juicy Couture', '180', 'images/Perfume_Primary/VivaLaJuicy.png', 'images/Perfume_Secondary/VivaLaJuicy.png', '', 'Women');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `ID` int(11) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Percentage` varchar(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Brand` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`ID`, `Description`, `Percentage`, `Name`, `Brand`, `Image`) VALUES
(1, 'Sale up to', '45%', 'Calvin Klein', 'Perfume', 'images/slider2/Perfume.png'),
(2, 'Sale up to', '20%', 'Cologne', 'Cologne', 'images/slider2/Cologne.png'),
(3, 'Sale up to', '15%', 'Car Diffuser', 'Diffuser', 'images/slider2/Diffuser.png');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `ID` int(11) NOT NULL,
  `Videos` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`ID`, `Videos`, `Description`) VALUES
(1, 'videos/LacosteCollection.mp4', 'Lacoste Collections'),
(2, 'videos/Lacoste-Collections.mp4', 'Lacoste Collections'),
(3, 'videos/Perfume_Men.mp4', 'Best Seller Perfume for Men'),
(4, 'videos/Perfume_Women.mp4', 'Best Seller Perfume for Women');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `car_diffuser`
--
ALTER TABLE `car_diffuser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cologne`
--
ALTER TABLE `cologne`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `perfumes`
--
ALTER TABLE `perfumes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `car_diffuser`
--
ALTER TABLE `car_diffuser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cologne`
--
ALTER TABLE `cologne`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perfumes`
--
ALTER TABLE `perfumes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
