-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 12:10 PM
-- Server version: 10.1.25-MariaDB
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
-- Database: `fritugo`
--

-- --------------------------------------------------------

--
-- Table structure for table `itineraries`
--

CREATE TABLE `itineraries` (
  `id` int(11) NOT NULL,
  `destination` varchar(64) DEFAULT NULL,
  `day_arrive` varchar(20) DEFAULT NULL,
  `day_depart` varchar(20) DEFAULT NULL,
  `day_count` int(11) DEFAULT NULL,
  `person_count` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itineraries`
--

INSERT INTO `itineraries` (`id`, `destination`, `day_arrive`, `day_depart`, `day_count`, `person_count`, `user_id`, `name`) VALUES
(51, 'Bali, Indonesia', '07 Feb 2018', '10 Feb 2018', 4, 2, 26, 'blbablbla'),
(52, 'Bali, Indonesia', '08 Feb 2018', '10 Feb 2018', 3, 2, 26, 'Chilling in Bali'),
(54, 'Puerto Rico', '07 Feb 2018', '09 Feb 2018', 3, 2, 26, 'Trip to Puerto Rico in 3 days'),
(55, 'Puerto Rico', '14 Feb 2018', '16 Feb 2018', 3, 2, 26, 'Trip to Puerto Rico in 3 days'),
(56, 'New York, NY, USA', '10 Feb 2018', '11 Feb 2018', 2, 1, 56, 'Trip to New York, NY, USA in 2 days'),
(57, 'New York, NY, USA', '25 Feb 2018', '28 Feb 2018', 4, 2, 56, 'Trip to New York, NY, USA in 4 days'),
(60, 'New York, NY, USA', '02/13/2018', '02/15/2018', 4, 2, 59, 'My Amazing Trip to NYC'),
(61, 'New York, NY, USA', '02/13/2018', '02/15/2018', 0, 0, 26, 'My Amazing Trip to NYC'),
(62, 'New York, NY, USA', '02/13/2018', '02/15/2018', 3, 2, 60, 'Craziest Trip Ever'),
(63, 'New York, NY, USA', '20 Feb 2018', '22 Feb 2018', 3, 2, 60, 'Trip to New York, NY, USA in 3 days'),
(64, 'Hawaii, USA', '18 Feb 2018', '21 Feb 2018', 4, 2, 60, 'My Hawaii Trip'),
(65, 'Hawaii, USA', '18 Feb 2018', '21 Feb 2018', 4, 2, 61, 'Chill in Hawaii'),
(66, 'Bali, Indonesia', '14 Feb 2018', '16 Feb 2018', 3, 2, 63, 'Trip to Bali, Indonesia in 3 days'),
(67, 'Germany', '14 Feb 2018', '17 Feb 2018', 4, 2, 26, 'Trip to Germany in 4 days'),
(68, 'London, UK', '14 Feb 2018', '17 Feb 2018', 4, 5, 26, 'Trip to London, UK in 4 days'),
(69, 'Los Angeles, CA, USA', '14 Feb 2018', '17 Feb 2018', 4, 2, 63, 'Lost in LA'),
(70, 'San Francisco, CA, USA', '15 Feb 2018', '17 Feb 2018', 3, 2, 65, 'Trip to San Francisco, CA, USA in 3 days'),
(71, 'Bali, Indonesia', '15 Feb 2018', '17 Feb 2018', 3, 2, 62, 'Trip to Bali, Indonesia in 3 days'),
(72, 'Spain', '15 Feb 2018', '18 Feb 2018', 4, 2, 66, 'Trip to Spain in 4 days'),
(73, 'Rome, Italy', '18 Feb 2018', '19 Feb 2018', 2, 2, 67, 'Trip to Rome, Italy in 2 days'),
(76, 'Korea', '15 Feb 2018', '17 Feb 2018', 3, 5, 26, 'Trip to Korea in 3 days'),
(77, 'Bali, Indonesia', '19 Feb 2018', '21 Feb 2018', 3, 3, 26, 'Trip to Bali, Indonesia in 3 days'),
(78, 'Rome, Italy', '18 Feb 2018', '19 Feb 2018', 2, 2, 26, 'Trip to Rome, Italy in 2 days'),
(79, 'Korea', '15 Feb 2018', '17 Feb 2018', 3, 5, 31, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `itinerary_images`
--

CREATE TABLE `itinerary_images` (
  `id` int(11) NOT NULL,
  `itinerary_id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `default_image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_tokens`
--

CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL,
  `token` char(64) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tokens`
--

INSERT INTO `login_tokens` (`id`, `token`, `user_id`) VALUES
(89, '0a08048af73d8522516a9b377aaa31e14968ae32', 73);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `email` text,
  `pass` varchar(60) DEFAULT NULL,
  `fullname` varchar(32) DEFAULT NULL,
  `biodata` varchar(101) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pass`, `fullname`, `biodata`) VALUES
(26, 'indraoei', 'indra@gmail.com', '$2y$10$01/NJ/GADVh0DpKcXdxl7OGzGUSnL7PU0mv5HsYXi/zes8Zp72qzS', 'Indra Oei', 'Hi, my name is Indra and I like to travel'),
(27, 'conormcg', 'conor@gmail.com', '$2y$10$hl4p5oYf37dO0vTir4E48eGZJQk.Zpkmkj48N10qSHo5Kq5xK1DrO', 'Conor McG', 'Hi, my name is Conor. I\'m an UFC Fighter'),
(28, 'jimmyf', 'jimmy@gmail.com', '$2y$10$bJdTNipb3h56CsvOnsE4p.Wg6vDC3KtypXUQ12f/7W8CtWFp4nTna', 'Jimmy Fallon', 'Hi, my name is Jimmy and I like to travel'),
(29, 'jason_s', 'jason_s@gmail.com', '$2y$10$nCLBaWAXom3kZ8mqn8XY2eCGml57K.CuUJalzbokByIndx4src4Pm', 'Jason Statham', 'Hi, my name is Jason and I like to travel'),
(30, 'john_w', 'john_w@gmail.com', '$2y$10$pDgogFjR3GTjV7kzVV2Pt.r8csrVDrj0V2MkayH8eeg.5lpYGFgsK', 'John Wick', 'Hi, my name is John and I like to travel'),
(31, 'andy', 'andy@gmail.com', '$2y$10$B84G9lanJ7RTYcsznwrA.O0Kn38e7QkojNsE9Ybd.5mgBMquF.Ed2', '', ''),
(32, 'patrick_s', 'patrick_s@gmail.com', '$2y$10$cvlO.2FRht7./A0VzVujZe30zXCdvUOdiyXgw4UAx02BQzbRHOvU6', '', ''),
(33, 'gaga', 'gaga@gmail.com', '$2y$10$.b/wiLHQpCYWj0Bga9hgNe7W4cGR8fo5kxDlPkbmpwW/45tjwUwRi', '', ''),
(34, 'hughjack', 'hugh_j@gmail.com', '$2y$10$MA6EVNx.Zrt5zq3P3P.GVe/CH6X9mBtStTSlAkqJTDpEDFldiWaoO', 'Hugh Jackman', 'Hi, my name is Hugh Jackman'),
(35, 'aerosmith', 'aerosmith@gmail.com', '$2y$10$XUKm.GupZFgHIrmvQz4S/u/8sDXU1FO42e01vJWdDJ3GUXZwPhcJ2', '', ''),
(36, 'patrick', 'patrick@gmail.com', '$2y$10$F8dQFWJgWS3KeHQRS2MWbuhuTCHGFkQEkYm7cAQAKiCnn4y/CzTw2', 'patrick star', 'hello, my name is patrick star'),
(37, 'rizky', 'rizky@gmail.com', '$2y$10$abaizD1x2x/4jlelZh7gq.v6eIQt3CFLLVwU08Sh25wmGw5VtnW1O', '', ''),
(38, 'sethmcf', 'sethmcf@gmail.com', '$2y$10$0BoD9MpmnLfxBqGYB22XfuykX3IpEpoLpahXpZ/LkZdsdQKAdXbEq', '', ''),
(39, 'stewie', 'stewie@gmail.com', '$2y$10$7MbY.Wfio5w8Vtr4zyRMK.V9cBDns9LIKjo1JcEAt7yeUONsscnN2', '', ''),
(40, 'adam', 'adam@gmail.com', '$2y$10$nT4MICgfe4p1nq01WTWVO.APXP/BGFn3mEqqMWzpMuO4UTyp70S8K', '', ''),
(41, 'charles', 'charles@gmail.com', '$2y$10$p3Dy5aLbQ1hV7bwFUekIYuXra4WuCk0p4usUcNA.aFfLsKGEIMX52', '', ''),
(42, 'logan', 'logan@gmail.com', '$2y$10$Ddcb3cWH4F8FqDlFjgzHUOoFwkH9H1XQm/a8nJdfELSLCK97SUnnG', 'Logan Paul', 'Hi, my name is Logan'),
(43, 'diana', 'diana@gmail.com', '$2y$10$LvIzsKV7DEHhQ4mgX6uvb.ZsOLiQt3CVT.LQm2rt2R3yYhbcnmi96', '', ''),
(44, 'scott', 'scott@gmail.com', '$2y$10$usN8EtTXMr75/7dhL24Yle2Vz5x0mobuIKA/F960uxB.h9n2AQBH.', '', ''),
(45, 'mason', 'mason@gmail.com', '$2y$10$6csIjJyYmUOHw2wQo6SDs.xPTsNQBgdhcDUo98sAaRZhwHokdOig.', '', ''),
(46, 'tommy', 'tommy@gmail.com', '$2y$10$EB.mLrlwk1Pz0yCN.7aY1ey0ZfTouStg/TasxE8B77bQY5mu9psfK', '', ''),
(47, 'budi', 'budi@gmail.com', '$2y$10$jtgXcAk26Jrypq8r6CDNBOv48Abv4VtTHcsJ06PVyCeyLcxtUeRES', '', ''),
(48, 'indrahuang', 'indrahuang@gmail.com', '$2y$10$L98JlhFAl.w.Jy.u6EElje3QQ0H8ek4pUA.wlBt1uyft.84xXZAMm', '', ''),
(49, 'laura', 'laura@gmail.com', '$2y$10$TmwDndYisJKdjRkkvRg4KeUn8kkU2Y/lQ7ve5G4HwuL16cbOSjBjK', '', ''),
(50, 'rey', 'rey@gmail.com', '$2y$10$nzGZzW3JIVyGXpkVh5f/1uTO9198/qOB4o/S7jKS201bNNA8PPoGG', '', ''),
(51, 'damian', 'damian@gmail.com', '$2y$10$Tv6cBhovgQQiHUDns3xsGexInYlVg0avPETgQFgdh6bJclf3jBBja', 'Damian Wayne', 'Hi, my name is Damian. I really like to travel'),
(53, 'kelvin', 'kelvin@gmail.com', '$2y$10$lPyu8F6oSdieRuwq3lb08upU6iXZu0oU5Ivbl6DveicE1989APwUa', '', ''),
(54, 'asdasd', 'asd@gmail.com', '$2y$10$50/Xd5kPAJA6tXCEuDzOVep0rcwi4EQe9L6vqNw4q/ns1ddhpXxIW', '', ''),
(55, 'john', 'john@gmail.com', '$2y$10$riSvD3jYOssZLLnmsJ2GK.7Bp6.cUQ.HmBYcVV67.vzpZhqD8O8ey', '', ''),
(56, 'steven', 'steven@gmail.com', '$2y$10$TO3IoZ0ghShkdpi7CnSuPee5lX0gbSy33li/e8wKhP4zhJTV3mikS', '', ''),
(57, 'baba', 'baba@gmail.com', '$2y$10$nJ/Lu1qdTP3CTSvaXR5rWus4Nm8Zuwap6THOAAyPilNX.tXQJ8Zdu', '', ''),
(58, 'bucky', 'bucky@gmail.com', '$2y$10$o.FZkTs5XA0mdMWzUoJQEuI87boumv4Q7PNuthf2UWSdJfY77HvBK', '', ''),
(59, 'lebron', 'lebron@gmail.com', '$2y$10$k5451bNLnNfi.w2xsFGahOJ8tcb/q.S/DLDIjhJF8Qirt1z/r/V6.', 'Lebron James', 'I love to play basketball'),
(60, 'bruno', 'bruno@gmail.com', '$2y$10$udoWApsETI52NmwRNBAHJuSOyS6Y609t.9dwV23IXJuqwqyHvOyKu', '', ''),
(61, 'andrew', 'andrew@gmail.com', '$2y$10$15svJE4uE3CBdFrxy/.NS.jd2war2L6Fggl/3FWzA2xSgU58zgZWS', '', ''),
(62, 'luke', 'luke@gmail.com', '$2y$10$bZcWPKiasJ4VqfnpzarbReMg00Tp1DEysDD1oV.XY0xs1tAntux0W', '', ''),
(63, 'obiwan', 'obiwan@gmail.com', '$2y$10$VxVT0UyBuJTW2ilrc0MGOO/A7EAt5FzyIezE7SCl3AedOjRD2YHra', 'Obiwan Kenobi', 'Hi, my name is Obiwan. I really like to travel around the world'),
(64, 'windu', 'windu@gmail.com', '$2y$10$xsf1qsZrx49NyLYUbXB8xeNTQAtMUUeCwR1WRp6PMzy/sz5RHGEMS', '', ''),
(65, 'asdf', 'asdf@gmail.com', '$2y$10$lX1pU6zNl0sp.iOrmubQtepfLLHmTBcXzknwj21r8s.AKLpneJjK.', '', ''),
(66, 'dsa', 'dsa@gmail.com', '$2y$10$awClrJcC0HJgqYCTl9G8oeWF8Kb668cDusLYci8YAYJQSIDwUONZG', '', ''),
(67, 'fafa', 'fafa@gmail.com', '$2y$10$VJ32WNePw/gzozaLjpM65OEQeAUgccg4ajMs5ZzTx.HGlzBCaqqKC', '', ''),
(73, 'indraoei25', 'indraoei25@gmail.com', '', 'Indra Oei', 'Hi, this is a user from Facebook'),
(74, 'indraoeiii', 'indraoeiii@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE `user_images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `default_image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`id`, `user_id`, `image`, `default_image`) VALUES
(1, 42, 'images/user_image/default-profile-image.jpg', 1),
(6, 53, 'images/user_image/default-profile-image.jpg', 1),
(7, 54, 'images/user_image/img2.jpg', 1),
(8, 26, 'images/user_image/img2.jpg', 1),
(9, 56, 'images/user_image/default-profile-image.jpg', 1),
(10, 59, 'images/user_image/img2.jpg', 1),
(11, 60, 'images/user_image/default-profile-image.jpg', 1),
(12, 61, 'images/user_image/default-profile-image.jpg', 1),
(13, 27, 'images/user_image/default-profile-image.jpg', 1),
(14, 62, 'images/user_image/default-profile-image.jpg', 1),
(15, 63, 'images/user_image/default-profile-image.jpg', 1),
(16, 64, 'images/user_image/default-profile-image.jpg', 1),
(17, 67, 'images/user_image/default-profile-image.jpg', 1),
(22, 73, 'https://scontent.xx.fbcdn.net/v/t1.0-1/c59.0.200.200/p200x200/1379841_10150004552801901_469209496895221757_n.jpg?oh=3d103f200adfa6798bb556e9bcddfc5f&oe=5B1F54E8', 1),
(23, 74, 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itineraries`
--
ALTER TABLE `itineraries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `itinerary_images`
--
ALTER TABLE `itinerary_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itinerary_id` (`itinerary_id`);

--
-- Indexes for table `login_tokens`
--
ALTER TABLE `login_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_images`
--
ALTER TABLE `user_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itineraries`
--
ALTER TABLE `itineraries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `itinerary_images`
--
ALTER TABLE `itinerary_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_tokens`
--
ALTER TABLE `login_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `user_images`
--
ALTER TABLE `user_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `itineraries`
--
ALTER TABLE `itineraries`
  ADD CONSTRAINT `itineraries_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `itinerary_images`
--
ALTER TABLE `itinerary_images`
  ADD CONSTRAINT `itinerary_images_ibfk_1` FOREIGN KEY (`itinerary_id`) REFERENCES `itineraries` (`id`);

--
-- Constraints for table `login_tokens`
--
ALTER TABLE `login_tokens`
  ADD CONSTRAINT `login_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_images`
--
ALTER TABLE `user_images`
  ADD CONSTRAINT `user_images_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
