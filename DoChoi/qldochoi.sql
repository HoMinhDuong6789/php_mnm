-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2015 at 02:47 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qldochoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `banle`
--

CREATE TABLE IF NOT EXISTS `banle` (
  `MaNBL` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaNPP` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banle`
--

INSERT INTO `banle` (`MaNBL`, `MaNPP`) VALUES
('MNBL01', 'MNPP01'),
('MNBL01', 'MNPP02'),
('MNBL02', 'MNPP03'),
('MNBL02', 'MNPP04'),
('MNBL03', 'MNPP05'),
('MNBL03', 'MNPP06'),
('MNBL04', 'MNPP07'),
('MNBL04', 'MNPP08'),
('MNBL05', 'MNPP09'),
('MNBL06', 'MNPP10'),
('MNBL06', 'MNPP11'),
('MNBL07', 'MNPP12'),
('MNBL07', 'MNPP13'),
('MNBL08', 'MNPP14'),
('MNBL08', 'MNPP15');

-- --------------------------------------------------------

--
-- Table structure for table `chitiet`
--

CREATE TABLE IF NOT EXISTS `chitiet` (
  `MaDC` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaNSX` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoTien` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiet`
--

INSERT INTO `chitiet` (`MaDC`, `MaNSX`, `SoTien`) VALUES
('MDC01', 'MNSX01', '780.000'),
('MDC02', 'MNSX02', '600.000'),
('MDC03', 'MNSX03', '89.000'),
('MDC04', 'MNSX04', '100.000'),
('MDC05', 'MNSX05', '85.000'),
('MDC06', 'MNSX06', '600.000'),
('MDC07', 'MNSX07', '60.000'),
('MDC08', 'MNSX08', '30.000'),
('MDC09', 'MNSX09', '50.000'),
('MDC10', 'MNSX10', '108.000'),
('MDC11', 'MNSX11', '300.000'),
('MDC12', 'MNSX12', '100.000'),
('MDC13', 'MNSX13', '40.000'),
('MDC14', 'MNSX14', '1.000.000'),
('MDC15', 'MNSX15', '1.000.000'),
('MDC16', 'MNSX07', '800.000'),
('MDC17', 'MNSX05', '1.500.000'),
('MDC18', 'MNSX10', '2.000.000'),
('MDC19', 'MNSX10', '3.000.000'),
('MDC20', 'MNSX10', '380.000'),
('MDC21', 'MNSX08', '185.000'),
('MDC22', 'MNSX15', '239.000'),
('MDC23', 'MNSX10', '1.900.000'),
('MDC24', 'MNSX09', '130.000'),
('MDC25', 'MNSX13', '790.000'),
('MDC26', 'MNSX07', '1.500.000'),
('MDC27', 'MNSX04', '600.000'),
('MDC28', 'MNSX04', '720.000'),
('MDC29', 'MNSX01', '600.000'),
('MDC30', 'MNSX02', '400.000'),
('MDC31', 'MNSX06', '600.000'),
('MDC32', 'MNSX01', '300.000'),
('MDC33', 'MNSX07', '300.000'),
('MDC34', 'MNSX01', '100.000'),
('MDC35', 'MNSX01', '200.000'),
('MDC36', 'MNSX01', '300.000'),
('MDC37', 'MNSX07', '200.000'),
('MDC38', 'MNSX06', '50.000'),
('MDC39', 'MNSX04', '50.000'),
('MDC40', 'MNSX10', '50.000'),
('MDC41', 'MNSX04', '300.000'),
('MDC42', 'MNSX01', '300.000');

-- --------------------------------------------------------

--
-- Table structure for table `dochoi`
--

CREATE TABLE IF NOT EXISTS `dochoi` (
  `MaDC` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenDC` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dochoi`
--

INSERT INTO `dochoi` (`MaDC`, `TenDC`, `HinhAnh`) VALUES
('', 'ácgs', ''),
(' MDC100', 'abc', ''),
('MDC01', 'Nhạc treo nôi', '1.jpg'),
('MDC02', 'Gấu bông ru ngủ', '2.jpg'),
('MDC03', 'Xúc xắc đa màu', '3.jpg'),
('MDC04', 'Vòng chuông', '4.jpg'),
('MDC05', 'Đồ chơi chút chít', '5.jpg'),
('MDC06', 'Băng ghi âm', '6.jpg'),
('MDC07', 'Điện thoại đồ chơi', '7.jpg'),
('MDC08', 'Sách tranh', '8.jpg'),
('MDC09', 'Tranh ảnh', '9.jpg'),
('MDC10', 'Gương an toàn', '10.jpg'),
('MDC11', 'Đồ chơi hình khối màu', '11.jpg'),
('MDC12', 'Bóng nhựa nhiều màu ', '12.jpg'),
('MDC13', 'Trống lắc', '13.jpg'),
('MDC14', 'Xe tập đi', '14.jpg'),
('MDC15', 'Xe lắc', '15.jpg'),
('MDC16', 'Xe kéo đẩy', '16.jpg'),
('MDC17', 'Xe ba bánh', '17.jpg'),
('MDC18', 'Cầu trượt', '18.jpg'),
('MDC19', 'Xích đu', '19.jpg'),
('MDC20', 'Bập bênh', '20.jpg'),
('MDC21', 'Bể bơi cho bé', '21.jpg'),
('MDC22', 'Quả bóng đá', '22.jpg'),
('MDC23', 'Xe đạp ', '23.jpg'),
('MDC24', 'Bạt nhún lò xo', '24.jpg'),
('MDC25', 'Đường ống chui', '25.jpg'),
('MDC26', 'Robot biết nói', '26.jpg'),
('MDC27', 'Nhà búp bê', '27.jpg'),
('MDC28', 'Đồ chơi nhà bếp', '28.jpg'),
('MDC29', 'Đồ chơi xây dựng', '29.jpg'),
('MDC30', 'Đồ chơi làm bác sĩ', '30.jpg'),
('MDC31', 'Cửa hàng thời trang', '31.jpg'),
('MDC32', 'Lắp ráp rô - bốt', '32.jpg'),
('MDC33', 'Lắp ráp nhà xinh', '33.jpg'),
('MDC34', 'Truyện cổ tích', '34.jpg'),
('MDC35', 'Máy nge nhạc', '35.jpg'),
('MDC36', 'Đồ chơi lắp ghép', '36.jpg'),
('MDC37', 'Nặn đất sét', '37.jpg'),
('MDC38', 'Gấp giấy Origami', '38.jpg'),
('MDC39', 'Vẽ và cắt hình', '39.jpg'),
('MDC40', 'Tranh tô màu', '40.jpg'),
('MDC41', 'Đàn organ', '41.jpg'),
('MDC42', 'Đồ chơi trống có đèn nhạc', '42.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gioitinh`
--

CREATE TABLE IF NOT EXISTS `gioitinh` (
  `MaGT` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gioitinh`
--

INSERT INTO `gioitinh` (`MaGT`, `GioiTinh`) VALUES
('MGT01', 'Nữ'),
('MGT02', 'Nam');

-- --------------------------------------------------------

--
-- Table structure for table `khuvuc`
--

CREATE TABLE IF NOT EXISTS `khuvuc` (
  `MaKV` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenKV` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuvuc`
--

INSERT INTO `khuvuc` (`MaKV`, `TenKV`) VALUES
('MKV01', 'Hải Châu'),
('MKV02', 'Thanh Khê'),
('MKV03', 'Ngũ Hành Sơn'),
('MKV04', 'Sơn Trà');

-- --------------------------------------------------------

--
-- Table structure for table `kinang`
--

CREATE TABLE IF NOT EXISTS `kinang` (
  `MaKN` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenKN` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kinang`
--

INSERT INTO `kinang` (`MaKN`, `TenKN`) VALUES
('MKN01', 'Kĩ năng nghe'),
('MKN02', 'kĩ năng nói'),
('MKN03', 'Kĩ năng nhìn'),
('MKN04', 'Kĩ năng cầm nắm'),
('MKN05', 'Kĩ năng đi lại'),
('MKN06', 'Kĩ năng giữ thăng bằng'),
('MKN07', 'Kĩ năng về thể thao'),
('MKN08', 'Kĩ năng giao tiếp'),
('MKN09', 'Kĩ năng mô tả cuộc sống'),
('MKN10', 'Kĩ năng phát triển tư duy toán học'),
('MKN11', 'Kĩ năng văn học'),
('MKN12', 'Kĩ năng ngoại ngữ'),
('MKN13', 'Kĩ năng phát triển sự khéo léo'),
('MKN14', 'Kĩ năng sáng tạo'),
('MKN15', 'Kĩ năng hội họa'),
('MKN16', 'Kĩ năng âm nhạc');

-- --------------------------------------------------------

--
-- Table structure for table `loaidochoi`
--

CREATE TABLE IF NOT EXISTS `loaidochoi` (
  `MaLDC` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenLDC` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DinhNghia` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaidochoi`
--

INSERT INTO `loaidochoi` (`MaLDC`, `TenLDC`, `DinhNghia`) VALUES
('MLDC01', 'Phát triển giác quan', 'Là những đồ chơi giúp cho trẻ phát triển hoàn thiện được các kĩ năng nghe, nói, nhìn, cầm nắm của mình từ khi còn nhỏ'),
('MLDC02', 'Phát triển khả năng vận động', 'Là những đồ chơi giúp cho trẻ phát triển các khả năng đi lại, khả năng giữ thăng bằng và khả năng thể thao của bản thân'),
('MLDC03', 'Về cuộc sống', 'Là những đồ chơi giúp cho trẻ phát triển các kĩ năng giao tiếp với mọi người xung quanh và giúp trẻ có thể mô tả và nhận thức được những gì đang xảy ra xung quanh cuộc sống của mình'),
('MLDC04', 'Phát triển trí tuệ, học tập', 'Là những đồ chơi giúp cho trẻ phát triển kĩ năng tư duy logic về toán học, kĩ năng về văn học, hội họa, v..v...');

-- --------------------------------------------------------

--
-- Table structure for table `nhabl`
--

CREATE TABLE IF NOT EXISTS `nhabl` (
  `MaNBL` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenNBL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sdt` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaKV` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhabl`
--

INSERT INTO `nhabl` (`MaNBL`, `TenNBL`, `Web`, `Sdt`, `DiaChi`, `MaKV`) VALUES
('MNBL01', 'DNTN Mỹ Ngọc - All4Baby & Baby Home', 'http://www.myngocdntn.com', '+84 511 3826 272', '47,49 Hùng Vương, Hải Châu, Đà Nẵng', 'MKV01'),
('MNBL02', 'Cửa Hàng Đồ Chơi Trẻ Em Ong Vàng', 'http://www.ongvang.com.vn', '+84 511 6268 666', ' 62B Đường Lê Duẩn, Hải Châu, Đà Nẵng', 'MKV01'),
('MNBL03', 'TutiCare Đà Nẵng', 'http://www.tuticare.com', '+84 511 3849 457', ' 66A Nguyễn Chí Thanh, Hải Châu, Đà Nẵng', 'MKV01'),
('MNBL04', 'Siêu thị mẹ và bé - Marry Baby', 'http://www.marrybaby.vn', '+84 511 3689 135', '106 Hoàng Diệu, HảiChâu,Đà Nẵng', 'MKV01'),
('MNBL05', 'Cửa hàng đồ chơi trẻ em TKART', ' http://www.tkart.vn', '+84 511 3999 950', '121 Nguyễn Du, Hải Châu, Đà Nẵng', 'MKV01'),
('MNBL06', 'Đồ Chơi Trẻ Em Thông Minh Bằng Gỗ TINKA', 'http://tinka.vn', '+84 935 1557 888', '75 Điện Biên Phủ, Thanh Khê, Đà Nẵng', 'MKV02'),
('MNBL07', 'Đồ Chơi Trẻ Em Vân Nguyên', 'http://dochoivannguyen.vn', '+84 919 9507 757', '19 Lê Văn Hiến, Ngũ Hành Sơn, Đà Nẵng', 'MKV03'),
('MNBL08', 'Đồ Chơi Trẻ Em WinWinToys', 'http:/WinWinToys.vn', '+84 031 8889 973', ' 246 Ngô Quyền, Sơn Trà, Đà Nẵng', 'MKV04');

-- --------------------------------------------------------

--
-- Table structure for table `nhapp`
--

CREATE TABLE IF NOT EXISTS `nhapp` (
  `MaNPP` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenNPP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sdt` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhapp`
--

INSERT INTO `nhapp` (`MaNPP`, `TenNPP`, `Web`, `Sdt`, `DiaChi`) VALUES
('MNPP01', 'Doanh Nghiệp Tư Nhân Nhựa Chợ Lớn', 'www.nhuacholon.com.vn', '(08 )39805394', '8H An Dương Vương, P. 16, Q. 8, Tp. Hồ Chí Minh '),
('MNPP02', 'Công Ty TNHH MTV Sản Xuất Thương Mại Dịch Vụ Quang Khoa', 'http://quangkhoa.com', '(08) 66816693', '89 Đường Số 4, KP. 7, P. Bình Hưng Hòa , Q. Bình Tân,Tp. Hồ Chí Minh (TPHCM)'),
('MNPP03', 'Công Ty TNHH Một Thành Viên An Trường', 'http://dochoigo.bizz.vn', '(061) 6607730', '1077/12 Đường Nguyễn ái Quốc, Tổ 3, KP 2, P. Tân Hiệp, TP. Biên Hòa,Đồng Nai'),
('MNPP04', 'Công Ty Cổ Phần FAGI', 'http://phangiahy.com', '(08) 37164271', '51 Đinh Tiên Hoàng, P. Đa Kao, Q. 1,Tp. Hồ Chí Minh (TPHCM)'),
('MNPP05', 'Công Ty TNHH MTV SX TM Thú Nhồi Bông Khởi Phát', 'http://www.thubongkhoiphat.com', '0988145560', 'Số 20, Đường Nguyễn Văn Lên, Khu 2, Phú Lợi, Thủ Dầu Một,Bình Dương'),
('MNPP06', 'Công Ty TNHH MTV SX & TM Vinaki', 'http://kifababy.com', '(04) 85870555', '87 Thanh Bình, Hà Đông,Hà Nội'),
('MNPP07', 'Công Ty TNHH Sản Xuất Thương Mại Và Dịch Vụ Hoàng Mai', 'http://dochoihoangmai.com.vn', '(04) 36410510', '64/5 Trường Chinh, Phương Liệt. Q. Thanh Xuân,Hà Nội'),
('MNPP08', 'Khôi Thư - Công Ty TNHH Một Thành Viên Khôi Thư', 'http://www.maugiaokhoithu.com', '(08) 38950637', '62 Đường Số 10, P. Linh Trung, Q. Thủ Đức,Tp. Hồ Chí Minh (TPHCM)'),
('MNPP09', 'Công Ty TNHH Đồ Chơi Thân Thiện', 'http://dochoithanthien.vn', '0967940979', 'Số 5, Ngách 205/140, Đường Xuân Đỉnh, P. Xuân Đỉnh, Bắc Từ Liêm,Hà Nội'),
('MNPP10', 'Phúc Hưng Xanh - Công Ty TNHH Một Thành Viên Phúc Hưng Xanh', 'http://www.dochoiphuchung.com', '39257054', '150/33 Đường Nguyễn Trãi, P. Bến Thành, Q. 1,Tp. Hồ Chí Minh (TPHCM)'),
('MNPP11', 'Thế Giới Đồ Chơi - Công Ty Cổ Phần Thế Giới Đồ Chơi', 'http://www.worldoftoys.com.vn', '(08) 35174648', 'S574-576 Đường Hai Bà Trưng, Q. 3,Tp. Hồ Chí Minh '),
('MNPP12', 'Công Ty TNHH IQTOYS Việt Nam', 'http://iqtoysvn.vn', ': 0949 919 789', '28/225 Lĩnh Nam, Hoàng Mai, Hà Nội'),
('MNPP13', 'Công Ty Cổ Phần Sản Xuất Thương Mại Và Dịch Vụ BBT Việt Nam (Baby Của Tôi)', 'http://dochoithanthien.vn', '(04 )39900366', 'Số 75 Liền Kề 6A, Làng Việt Kiều Châu Âu, Đường Nguyễn Trãi, P. Mộ Lao, Q. Hà Đông,Hà Nội'),
('MNPP14', 'Công Ty TNHH Một Thành Viên Sản Xuất Thương Mại Dịch Vụ Đồ Chơi Đại Việt', 'http://dochoidaiviet.com', '(08) 62724503', 'nhà số 6 ngách 1 ngõ 108 Bùi Xương Trạch, Thanh Xuân,Hà Nội'),
('MNPP15', 'Công Ty Cổ Phần Sản Xuất Và Thương Mại ETIC Việt Nam', 'http://www.eticvietnam.com', '(04) 36822451', 'P501 A2 DN3 Nguyễn Khánh Toàn, P. Nghĩa Đô, Q. Cầu Giấy,Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `nhasx`
--

CREATE TABLE IF NOT EXISTS `nhasx` (
  `MaNSX` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenNSX` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sdt` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhasx`
--

INSERT INTO `nhasx` (`MaNSX`, `TenNSX`, `Web`, `Sdt`, `DiaChi`) VALUES
('MNSX01', 'Mattel ', 'http://corporate.mattel.com/', '310-252-2000', '333 Continental Boulevard El Segundo, California'),
('MNSX02', 'Lego', 'http://www.lego.com/en-us/', '800-838-9647', '555 Taylor Rd, Enfield, CT 06082, America'),
('MNSX03', 'Hasbro', 'http://www.hasbro.com/en-ca', '800-242-7276', '1027 Newport Ave, Pawtucket, RI 02861, America'),
('MNSX04', 'MGA Entertainment', 'http://www.mgae.com/', '800-222-4685', '16300 Roscoe Blvd. Suite 150 Van Nuys, America'),
('MNSX05', 'Jakks Pacific ', 'http://www.jakks.com/', '310-456-7799', '22761 Pacific Coast Hwy, Malibu, CA 90265'),
('MNSX06', 'LeapFrog', 'http://www.leapfrog.com/en-us/home', '800-701-5327', '6401 Hollis Street, Suite 100 Emeryville, CA 94608'),
('MNSX07', 'MEGA Bloks ', 'https://www.megabloks.com/en-us/', '800-465-6342', '4505 Hickmore Montreal, QC CANADA'),
('MNSX08', 'Melissa and Doug ', 'http://www.melissaanddoug.com/', '800-718-5365', '141 Danbury Rd Wilton, CT 06897'),
('MNSX09', 'Play-doh', 'http://playdoh.hasbro.com/en-us/', '800-242-7276', '1027 Newport Ave, Pawtucket, RI 02861, America'),
('MNSX10', 'Puku ', 'http://www.puku.com.tw', '886-2-89769359', '8F-7, No.8, Sec.1, Chung Hsing Rd., Wu-K'),
('MNSX11', 'My Family Doctor', 'http://www.myfamilydoctor.us/', '(303) 444-7150', '1225 Cimarron Drive, Suite 102 Lafayette, CO 80026'),
('MNSX12', 'Amazon', 'http://www.amazon.com', '206-266-1000', '410 Terry Ave. North Seattle, WA 98109-5210'),
('MNSX13', 'BarBie', 'http://www.barbie.com/en-us', '310-252-2000', '333 Continental Boulevard El Segundo, California'),
('MNSX14', 'Viking toys', 'http://www.vikingtoys.se/', '46 486 412 60', 'Ramsågsgatan 3 S-385 34 Torsås Sweden'),
('MNSX15', 'Toysrus', 'http://www.toysrus.com/', '973-617-3500', 'One Geoffrey Way Wayne, New Jersey  ');

-- --------------------------------------------------------

--
-- Table structure for table `phanloai`
--

CREATE TABLE IF NOT EXISTS `phanloai` (
  `MaLDC` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaKN` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanloai`
--

INSERT INTO `phanloai` (`MaLDC`, `MaKN`) VALUES
('MLDC01', 'MKN01'),
('MLDC01', 'MKN02'),
('MLDC01', 'MKN03'),
('MLDC01', 'MKN04'),
('MLDC02', 'MKN05'),
('MLDC02', 'MKN06'),
('MLDC02', 'MKN07'),
('MLDC02', 'MKN08'),
('MLDC03', 'MKN09'),
('MLDC03', 'MKN10'),
('MLDC03', 'MKN11'),
('MLDC03', 'MKN12'),
('MLDC04', 'MKN13'),
('MLDC04', 'MKN14'),
('MLDC04', 'MKN15'),
('MLDC04', 'MKN16');

-- --------------------------------------------------------

--
-- Table structure for table `phanphoi`
--

CREATE TABLE IF NOT EXISTS `phanphoi` (
  `MaNSX` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaNPP` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanphoi`
--

INSERT INTO `phanphoi` (`MaNSX`, `MaNPP`) VALUES
('MNSX01', 'MNPP01'),
('MNSX02', 'MNPP02'),
('MNSX03', 'MNPP03'),
('MNSX04', 'MNPP04'),
('MNSX05', 'MNPP05'),
('MNSX06', 'MNPP06'),
('MNSX07', 'MNPP07'),
('MNSX08', 'MNPP08'),
('MNSX09', 'MNPP09'),
('MNSX10', 'MNPP10'),
('MNSX11', 'MNPP11'),
('MNSX12', 'MNPP12'),
('MNSX13', 'MNPP13'),
('MNSX14', 'MNPP14'),
('MNSX15', 'MNPP15');

-- --------------------------------------------------------

--
-- Table structure for table `phattrien`
--

CREATE TABLE IF NOT EXISTS `phattrien` (
  `MaDC` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaKN` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phattrien`
--

INSERT INTO `phattrien` (`MaDC`, `MaKN`) VALUES
('MDC01', 'MKN01'),
('MDC02', 'MKN01'),
('MDC03', 'MKN01'),
('MDC04', 'MKN01'),
('MDC05', 'MKN01'),
('MDC06', 'MKN02'),
('MDC07', 'MKN02'),
('MDC08', 'MKN03'),
('MDC09', 'MKN03'),
('MDC10', 'MKN03'),
('MDC11', 'MKN03'),
('MDC12', 'MKN04'),
('MDC13', 'MKN04'),
('MDC14', 'MKN05'),
('MDC15', 'MKN05'),
('MDC16', 'MKN06'),
('MDC17', 'MKN06'),
('MDC18', 'MKN07'),
('MDC19', 'MKN07'),
('MDC20', 'MKN07'),
('MDC21', 'MKN07'),
('MDC22', 'MKN07'),
('MDC23', 'MKN07'),
('MDC24', 'MKN07'),
('MDC25', 'MKN07'),
('MDC26', 'MKN08'),
('MDC27', 'MKN09'),
('MDC28', 'MKN09'),
('MDC29', 'MKN09'),
('MDC30', 'MKN09'),
('MDC31', 'MKN09'),
('MDC32', 'MKN10'),
('MDC33', 'MKN10'),
('MDC34', 'MKN11'),
('MDC35', 'MKN12'),
('MDC36', 'MKN13'),
('MDC37', 'MKN13'),
('MDC38', 'MKN14'),
('MDC39', 'MKN14'),
('MDC40', 'MKN15'),
('MDC41', 'MKN16'),
('MDC42', 'MKN16');

-- --------------------------------------------------------

--
-- Table structure for table `tuoi`
--

CREATE TABLE IF NOT EXISTS `tuoi` (
  `MaTuoi` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tuoi` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuoi`
--

INSERT INTO `tuoi` (`MaTuoi`, `Tuoi`) VALUES
('MT01', '0-1'),
('MT02', '1-3'),
('MT03', '4-6'),
('MT04', '7-9'),
('MT05', '10-12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_User` int(255) NOT NULL,
  `UserName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_User`, `UserName`, `Password`, `FullName`) VALUES
(1, 'admin', '12345678', 'Admin'),
(2, 'hieu2', '1234567', 'Trần Thị Như Hiếu'),
(3, 'dao2', '789', 'Nguyễn Thị Anh Đào '),
(5, 'hieu1234', '12345678', 'Hiếu trần'),
(6, 'hieu4', '123456789', 'Hiếu trần44');

-- --------------------------------------------------------

--
-- Table structure for table `yeucau1`
--

CREATE TABLE IF NOT EXISTS `yeucau1` (
  `MaTuoi` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaLDC` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `yeucau1`
--

INSERT INTO `yeucau1` (`MaTuoi`, `MaLDC`) VALUES
('MT01', 'MLDC01'),
('MT02', 'MLDC01'),
('MT02', 'MLDC02'),
('MT02', 'MLDC03'),
('MT03', 'MLDC02'),
('MT03', 'MLDC03'),
('MT03', 'MLDC04'),
('MT04', 'MLDC02'),
('MT04', 'MLDC03'),
('MT04', 'MLDC04'),
('MT05', 'MLDC02'),
('MT05', 'MLDC03'),
('MT05', 'MLDC04');

-- --------------------------------------------------------

--
-- Table structure for table `yeucau2`
--

CREATE TABLE IF NOT EXISTS `yeucau2` (
  `MaGT` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaLDC` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `yeucau2`
--

INSERT INTO `yeucau2` (`MaGT`, `MaLDC`) VALUES
('MGT01', 'MLDC01'),
('MGT01', 'MLDC02'),
('MGT01', 'MLDC03'),
('MGT01', 'MLDC04'),
('MGT02', 'MLDC01'),
('MGT02', 'MLDC02'),
('MGT02', 'MLDC03'),
('MGT02', 'MLDC04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banle`
--
ALTER TABLE `banle`
  ADD PRIMARY KEY (`MaNBL`,`MaNPP`);

--
-- Indexes for table `chitiet`
--
ALTER TABLE `chitiet`
  ADD PRIMARY KEY (`MaDC`,`MaNSX`);

--
-- Indexes for table `dochoi`
--
ALTER TABLE `dochoi`
  ADD PRIMARY KEY (`MaDC`);

--
-- Indexes for table `gioitinh`
--
ALTER TABLE `gioitinh`
  ADD PRIMARY KEY (`MaGT`);

--
-- Indexes for table `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`MaKV`);

--
-- Indexes for table `kinang`
--
ALTER TABLE `kinang`
  ADD PRIMARY KEY (`MaKN`);

--
-- Indexes for table `loaidochoi`
--
ALTER TABLE `loaidochoi`
  ADD PRIMARY KEY (`MaLDC`);

--
-- Indexes for table `nhabl`
--
ALTER TABLE `nhabl`
  ADD PRIMARY KEY (`MaNBL`);

--
-- Indexes for table `nhapp`
--
ALTER TABLE `nhapp`
  ADD PRIMARY KEY (`MaNPP`);

--
-- Indexes for table `nhasx`
--
ALTER TABLE `nhasx`
  ADD PRIMARY KEY (`MaNSX`);

--
-- Indexes for table `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`MaLDC`,`MaKN`);

--
-- Indexes for table `phanphoi`
--
ALTER TABLE `phanphoi`
  ADD PRIMARY KEY (`MaNSX`,`MaNPP`);

--
-- Indexes for table `phattrien`
--
ALTER TABLE `phattrien`
  ADD PRIMARY KEY (`MaDC`,`MaKN`);

--
-- Indexes for table `tuoi`
--
ALTER TABLE `tuoi`
  ADD PRIMARY KEY (`MaTuoi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- Indexes for table `yeucau1`
--
ALTER TABLE `yeucau1`
  ADD PRIMARY KEY (`MaTuoi`,`MaLDC`);

--
-- Indexes for table `yeucau2`
--
ALTER TABLE `yeucau2`
  ADD PRIMARY KEY (`MaGT`,`MaLDC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
