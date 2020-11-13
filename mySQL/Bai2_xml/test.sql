SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
 
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;
 
INSERT INTO `member` (`id`, `username`, `email`) VALUES
(1, 'Tô Phước Thái', 'tophuocthai@gmail.com'),
(2, 'Trương Hoàng Khoa', 'truonghoangkhoa@gmail.com'),
(3, 'Võ Thành Luân', 'vothanhluan@gmail.com'),
(4, 'Nguyễn Tấn Kiệt', 'nguyentankiet@gmail.com'),
(5, 'Nguyễn Đình Hoàng Lân', 'nguyendinhhoanglan@gmail.com');