-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 04:09 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `maChitietHD` int(11) NOT NULL,
  `maSach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soLuong` int(11) NOT NULL,
  `maHoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`maChitietHD`, `maSach`, `soLuong`, `maHoadon`) VALUES
(1, 's1', 2, 2),
(2, 's2', 1, 2),
(3, 's1', 2, 3),
(4, 's11', 1, 3),
(5, 's11', 1, 4),
(6, 's12', 2, 4),
(7, 's13', 5, 5),
(8, 's22', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `maHoadon` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngayMua` date NOT NULL,
  `daMua` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`maHoadon`, `makh`, `ngayMua`, `daMua`) VALUES
(1, 1, '2018-12-01', 1),
(2, 1, '2018-12-01', 1),
(3, 1, '2018-12-01', 1),
(4, 1, '2018-12-01', 0),
(5, 8, '2018-12-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tendn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tendn`, `matkhau`, `hoten`, `sdt`, `quyen`) VALUES
(1, 'ducpham', '123', 'Phạm Minh Đức', '1111111', 1),
(2, 'tienhung', '123', 'Lê Tiến Hùng', '2222222', 0),
(3, 'myhuyen', '123', 'Mỹ Huyền', '33333333', 0),
(4, 'vietle', '123', 'Việt Lê', '44444444', 0),
(5, 'haule', '123', 'Hậu Lê', '555555555', 0),
(6, 'duckute123', '123', 'duckasd', '123124', 0),
(7, 'duckute2222', '123', 'ducpham', '123', 0),
(8, 'ducpham123', '123', 'Duc Pham', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tenloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('m1', 'Nấu Ăn'),
('m2', 'Ngôn Tình'),
('m3', 'Trinh Thám'),
('m4', 'Kinh Dị'),
('m5', 'Truyện dài'),
('m6', 'Truyện tranh'),
('m7', 'Văn Học Nước Ngoài'),
('m8', 'Du Ký');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `masach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tensach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` bigint(20) NOT NULL,
  `anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`masach`, `tensach`, `gia`, `anh`, `tacgia`, `maloai`) VALUES
('s1', 'Nhật kí học làm bánh (Phần 1)', 120000, 'image/1.jpg', 'Song Hà', 'm1'),
('s10', 'Đạo tình', 60000, 'image/2.jpg', 'Văn Đức', 'm2'),
('s11', 'Another', 80000, 'image/3.jpg', 'Thành Lương', 'm3'),
('s12', 'Kỳ án ánh trăng', 60000, 'image/4.jpg', 'Anh Đức', 'm3'),
('s13', 'Tokyo Hoàng Đạo Án', 30000, 'image/5.jpg', 'Công Phượng', 'm3'),
('s14', 'Tuyết đoạt hồn', 80000, 'image/6.jpg', 'Văn Toàn', 'm3'),
('s15', 'Zoo', 150000, 'image/7.jpg', 'Đình Trọng', 'm3'),
('s16', 'Chạm tới giấc mơ', 680000, 'image/8.jpg', 'Ngọc Hải', 'm4'),
('s17', 'Hồi ký Alex Ferguson', 900000, 'image/9.jpg', 'Tiến Dũng', 'm4'),
('s18', 'Tuổi trè không hối tiếc', 90000, 'image/10.jpg', 'Hang Seo', 'm4'),
('s19', 'Quân Khu Nam Đồng', 170000, 'image/11.jpg', 'Văn Quyết', 'm4'),
('s2', 'Nhật kí học làm bánh (Phần 2)', 20000, 'image/12.jpg', 'Tiến Hùng', 'm1'),
('s20', 'Phải Sống', 68000, 'image/13.jpg', 'Văn Quyến', 'm4'),
('s21', 'Đường về nhà', 94000, 'image/14.jpg', 'Quốc Kiên', 'm5'),
('s22', 'Ta Ba Lô Trên Đất Á', 106000, 'image/15.jpg', 'Nhiều tác giả', 'm5'),
('s23', 'Hẹn Hò Với Paris', 105000, 'image/16.jpg', 'Lê Hoàng', 'm5'),
('s24', 'Bụi đường tuổi trẻ', 320000, 'image/17.jpg', 'Doãn Dũng', 'm5'),
('s25', '10.000 Dặm yêu', 150000, 'image/18.jpg', 'Quang Hải', 'm5'),
('s26', 'Buồn làm sao buông', 60000, 'image/19.jpg', 'Duy Mạnh', 'm6'),
('s27', 'Sài gòn bao nhớ', 80000, 'image/20.jpg', 'Nhiều tác giả', 'm6'),
('s28', 'Yêu đi đừng sợ', 90000, 'image/21.jpg', 'Hữu Nguyên', 'm6'),
('s29', 'Hôm nay tôi thất tình', 140000, 'image/22.jpg', 'Nguyễn Dũng', 'm6'),
('s3', 'Nhật kí học làm bánh (Phần 3)', 50000, 'image/23.jpg', 'Minh Đức', 'm1'),
('s30', 'Lỡ chúng ta FA cả đời thì sao ?', 360000, 'image/24.jpg', 'Anh Côi', 'm6'),
('s31', 'Thỏ 7 màu', 52000, 'image/25.jpg', 'Nhiều tác giả', 'm7'),
('s32', 'Forever U N', 80000, 'image/26.jpg', 'Nhóm Tiếu Nhân', 'm7'),
('s33', '50 Sắc Màu', 140000, 'image/27.jpg', 'Nhiều tác giả', 'm7'),
('s34', 'Cô Dâu Pháp Sư', 96000, 'image/28.jpg', 'Xuân Trường', 'm7'),
('s35', 'Long Thần Tướng', 80000, 'image/29.jpg', 'Tuấn Anh', 'm7'),
('s36', 'Nha sĩ yêu quái', 60000, 'image/30.jpg', 'Đình Đồng', 'm8'),
('s37', 'Trạng quỳnh', 40000, 'image/31.jpg', 'Nhiều tác giả', 'm8'),
('s38', 'Trường tiểu học ngộ', 80000, 'image/32.jpg', 'Trọng Hoàng', 'm8'),
('s39', 'Những người thích đùa', 150000, 'image/33.jpg', 'Phương Trinh', 'm8'),
('s4', 'Bí kíp nấu ăn', 60000, 'image/34.jpg', 'Mỹ Huyền', 'm1'),
('s40', 'Không Lạ', 90000, 'image/35.jpg', 'Nhiều tác giả', 'm8'),
('s5', 'Ready To Cook', 80000, 'image/36.jpg', 'Diên Hậu', 'm1'),
('s6', 'Mãi mãi là bao xa', 170000, 'image/37.jpg', 'Long Việt', 'm2'),
('s7', 'All In Love', 340000, 'image/38.jpg', 'Minh Phong', 'm2'),
('s8', 'Ngàn năm chờ đợi', 90000, 'image/39.jpg', 'Phước Tứ', 'm2'),
('s9', 'Đông cung', 100000, 'image/40.jpg', 'Công Vinh', 'm2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`maChitietHD`),
  ADD KEY `maHoadon` (`maHoadon`),
  ADD KEY `maSach` (`maSach`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHoadon`),
  ADD KEY `makh` (`makh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`masach`),
  ADD KEY `maloai` (`maloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `maChitietHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`maHoadon`) REFERENCES `hoadon` (`maHoadon`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`maSach`) REFERENCES `sach` (`masach`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
