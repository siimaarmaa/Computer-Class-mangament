-- Table structure for table `users`
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- Dumping data for table `users`

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Test', 'ee6aa8565f29397f3cdc22bf15ba6763', 'test@test.ee');


-- Table structure for table `klass`
CREATE TABLE IF NOT EXISTS `klass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `klasstund` varchar(100) NOT NULL,
  `klasstunniaeg` varchar(100) NOT NULL,
  `klassopetaja` varchar(100) NOT NULL,
  `klassklass` varchar(100) NOT NULL,
  `klassaine` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- Dumping data for table `klass`

INSERT INTO `klass` (`id`, `klasstund`, `klasstunniaeg`, `klassopetaja`, `klassklass`, `klassaine`) VALUES
(1, '1', '8.00 - 8.45', '', '', ''),
(2, '2', '8.55 - 9.40', 'Tiiu Laane', '11', 'Matemaatika'),
(3, '3', '9.50 - 10.35', 'Tiiu Laane', '12', 'Füüsika'),
(4, '4', '10.40 - 11.25', '', '', ''),
(5, '4', '11.25 - 12.10', 'Tiiu Laane', '7a', 'Füüsika'),
(6, '5', '12.15 - 13.00', '', '', ''),
(7, '6', '13.10 - 13.55', '', '', ''),
(8, '7', '14.05 - 14.50', 'Tiiu Laane', '1a', 'Füüsika'),
(9, '8', '14.55 - 15.40', 'Tiiu Laane', '4b', 'Füüsika');


-- Table structure for table `pluss`
CREATE TABLE IF NOT EXISTS `pluss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plusstund` varchar(100) NOT NULL,
  `plusstunniaeg` varchar(100) NOT NULL,
  `plussopetaja` varchar(100) NOT NULL,
  `plussklass` varchar(100) NOT NULL,
  `plussaine` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- Dumping data for table `pluss`
INSERT INTO `pluss` (`id`, `plusstund`, `plusstunniaeg`, `plussopetaja`, `plussklass`, `plussaine`) VALUES
(1, '1', '8.00 - 8.45', '', '', ''),
(2, '2', '8.55 - 9.40', 'Tiiu Laane', '11', 'Matemaatika'),
(3, '3', '9.50 - 10.35', 'Tiiu Laane', '12', 'Füüsika'),
(4, '4', '10.40 - 11.25', '', '', ''),
(5, '4', '11.25 - 12.10', 'Tiiu Laane', '7a', 'Füüsika'),
(6, '5', '12.15 - 13.00', '', '', ''),
(7, '6', '13.10 - 13.55', '', '', ''),
(8, '7', '14.05 - 14.50', 'Tiiu Laane', '1a', 'Füüsika'),
(9, '8', '14.55 - 15.40', 'Tiiu Laane', '4b', 'Füüsika');


-- Table structure for table `nädalapäevad`
CREATE TABLE IF NOT EXISTS `nadalapaevad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nadalapaev` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- Dumping data for table `nädalapäevad`
INSERT INTO `nadalapaevad` (`id`, `nadalapaev`) VALUES
(1, 'Esmaspäev'),
(2, 'Teisipäev'),
(3, 'Kolmapäev'),
(4, 'Neljapäev'),
(5, 'Reede');