CREATE TABLE IF NOT EXISTS `member` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(15) NOT NULL,
`password` varchar(50) NOT NULL,
`phone` varchar(15) NOT NULL,
`email` varchar(100) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1 ;