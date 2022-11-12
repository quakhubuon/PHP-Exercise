-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2007 at 04:51 AM
-- Server version: 5.0.17
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `bookstoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_book`
--

DROP TABLE IF EXISTS `t_book`;
CREATE TABLE `t_book` (
  `BOOK_ID` int(10) NOT NULL auto_increment,
  `BOOK_TITLE` varchar(255) character set utf8 collate utf8_unicode_ci default NULL,
  `BOOK_DESC` longtext character set utf8 collate utf8_unicode_ci,
  `BOOK_CATID` int(10) default NULL,
  `BOOK_AUTHOR` varchar(128) character set utf8 collate utf8_unicode_ci default NULL,
  `BOOK_PUBID` int(10) default NULL,
  `BOOK_YEAR` int(10) default NULL,
  `BOOK_PIC` varchar(255) character set utf8 collate utf8_unicode_ci default NULL,
  `BOOK_PRICE` int(10) default NULL,
  `BOOK_RATE` int(10) default NULL,
  PRIMARY KEY  (`BOOK_ID`),
  KEY `BOOK_CATID` (`BOOK_CATID`),
  KEY `BOOK_ID` (`BOOK_ID`),
  KEY `BOOK_PUBID` (`BOOK_PUBID`),
  KEY `T_CATEGORYT_BOOK` (`BOOK_CATID`),
  KEY `T_PUBT_BOOK` (`BOOK_PUBID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `t_book`
--

INSERT INTO `t_book` (`BOOK_ID`, `BOOK_TITLE`, `BOOK_DESC`, `BOOK_CATID`, `BOOK_AUTHOR`, `BOOK_PUBID`, `BOOK_YEAR`, `BOOK_PIC`, `BOOK_PRICE`, `BOOK_RATE`) VALUES
(1, 'Chìa khóa Văn phạm tiếng Anh', 'Cuốn sách Chìa Khóa Văn Phạm Tiếng Anh đã được biên soạn bao gồm những phần ngữ pháp rất cơ bản ở chương trình phổ thông. Cho nên, nó rất hữu ích với tất cả các bạn học sinh nào muốn học tốt tiếng Anh. Cuốn sách trình bày rất rõ ràng và từ vựng rất dễ hiểu. Sau mỗi bài đều có nhiều bài tập để rèn luyện và sau mỗi phần đều có bài tập tổng hợp từ dễ đến khó', 4, 'Nguyễn Văn Hiệp', 4, 2002, 'ckvptienganh.jpg', 6500, NULL),
(2, 'Adobe Photoshop 7', 'Giới thiệu những đặc tính mới trong Photoshop 7\r\nĐề cập tới những khái niệm cơ bản về màu và tính năng quản lý màu của Photoshop\r\nTìm hiểu về lớp, mặt nạ và bộ lọc\r\nHọc cách tạo, biến ảnh, dịch chuyển lớp chữ, tạo hiệu ứng chữ,v.v\r\nLàm quen với bộ công cụ tô vẽ của Photoshop, tô điểm ảnh quét hoặc vẽ nên một "tuyệt tác" từ trang giấy trắng.', 1, 'VN-GUIDE', 3, 2003, 'photoshop7.jpg', 69000, 1),
(4, 'Tiếng Anh trong phỏng vấn', 'Cuốn sách sẽ hướng dẫn bạn những cách thức khi đi phỏng vấn tìm việc làm, tự giới thiệu như thế nào về bản thân, về đời sống, gia đình, tính cách, quan điểm,... Sách sẽ là tài liệu tham khảo tốt cho những ai đang cần tìm việc làm tại các công ty nước ngoài.\r\nXint rân trọng giới thiệu.', 4, 'Nguyễn Thành Yến', 5, 2003, 'tienganhpvan.jpg', 36000, 0),
(5, 'Hướng dẫn sử dụng Swish', 'Nếu có lúc nào đó lang thang trên mạng, chúng ta thấy nhiều trang Web có các hàng tiêu đề xuất hiện với nhiều hiệu ứng trông rất bắt mắt và nếu các bạn đã sử dụng Flash trong thiết kế sẽ nghĩ không biết để tạo hiệu ứng sống động như thế trên văn bản thì phải dùng cách nào? Flash có thể làm được nhưng mất rất nhiều thời gian và công sức. Thực ra các nhà thiết kế đã sử dụng các trình ứng dụng của các hãng thứ ba để việc thiết kế dễ dàng hơn. Có một vài chương trình nổi tiếng, trong số đó phải kể đến Swish.', 1, 'Ph?m Quang Huy', 3, 2003, 'sudungswish.jpg', 45000, 0),
(7, 'Test', 'Test', 2, 'Nguyen Van A', 1, 2005, 'testpic.jpg', 100000, 5),
(8, 'Thiết kế lập trình Web với DreamWeaver', 'Sách hay !', 2, 'Nguyễn Thị Hồng', 2, 2006, 'ckvptienganh.jpg', 22000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `t_category`
--

DROP TABLE IF EXISTS `t_category`;
CREATE TABLE `t_category` (
  `CAT_ID` int(10) NOT NULL auto_increment,
  `CAT_NAME` varchar(64) character set utf8 collate utf8_unicode_ci default NULL,
  `CAT_DESC` varchar(255) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`CAT_ID`),
  KEY `CAT_ID` (`CAT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `t_category`
--

INSERT INTO `t_category` (`CAT_ID`, `CAT_NAME`, `CAT_DESC`) VALUES
(1, 'Tin học', NULL),
(2, 'Khoa học Kỹ thuật', NULL),
(3, 'Khoa học Xã hội', NULL),
(4, 'Ngoại ngữ', NULL),
(5, 'Kinh tế', NULL),
(6, 'Mỹ thuật - Điện ảnh', NULL),
(7, 'Thơ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_pub`
--

DROP TABLE IF EXISTS `t_pub`;
CREATE TABLE `t_pub` (
  `PUB_ID` int(10) NOT NULL auto_increment,
  `PUB_NAME` varchar(64) character set utf8 collate utf8_unicode_ci default NULL,
  `PUB_ADDR` varchar(255) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`PUB_ID`),
  KEY `PUB_ID` (`PUB_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `t_pub`
--

INSERT INTO `t_pub` (`PUB_ID`, `PUB_NAME`, `PUB_ADDR`) VALUES
(1, 'Giáo dục', NULL),
(2, 'Khoa học kỹ thuật', NULL),
(3, 'Thống kê', NULL),
(4, 'Trẻ', NULL),
(5, 'Tp. Hồ Chí Minh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `USER_ID` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `USER_PASSWORD` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `USER_NAME` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `USER_EMAIL` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `USER_PHONE` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `USER_ADDR` varchar(255) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`USER_ID`),
  KEY `USER_ID` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`USER_ID`, `USER_PASSWORD`, `USER_NAME`, `USER_EMAIL`, `USER_PHONE`, `USER_ADDR`) VALUES
('admin', 'admin', 'Quản trị hệ thống', NULL, NULL, NULL),
('lvminh', 'abc', NULL, NULL, NULL, NULL),
('ttbhanh', '123', NULL, NULL, NULL, NULL);
