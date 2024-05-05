-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 09:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staffcoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_kh` varchar(50) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `noi_dung` varchar(50) NOT NULL,
  `ngay_bl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(150) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `mo_ta` varchar(1000) NOT NULL,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `hinh`, `don_gia`, `giam_gia`, `mo_ta`, `ma_loai`) VALUES
(64, 'Ớt trái cây Đà Lạt (1 KG)', 'ottraicaydalat.jpg', 180000, 0, 'Ớt trái cây Đà Lạt (còn có tên gọi khác là ớt trái cây Sweet Palermo) có xuất xứ từ Hà Lan. Hiện nay đã được trồng thành công và khá phổ biến tại Đà Lạt. Loại ớt này còn được mệnh danh là \"vua của các loại ớt\", nó có thể ăn trực tiếp rất ngon bởi không có vị cay và rất giòn, mọng nước.', 28),
(65, 'Bông gừng xanh (1 KG)', 'bong-gung-xanh-1.jpg', 70000, 0, 'Bông gừng xanh (hay nụ hoa gừng) không phải ai cũng biết, bởi đây là cây mọc ở trong rừng và là món ăn của người vùng cao. Búp hoa gừng to bằng ngón tay cái, phần cuống dài từ 10-15cm, màu xanh đậm. Nếu nhìn qua sẽ dễ nhầm đây là mầm non của cây tre hoặc măng tây. Khi bóc lớp vỏ xơ bên ngoài, hương gừng thơm dịu còn lưu giữ rất lâu.', 28),
(66, 'Rau đay (1 KG)', 'rau-day.jpg', 330000, 0, 'Rau đay là gì? Công dụng của rau đay? Cách gieo trồng rau đay như nào? Đây chắc chắn là số nhiều câu hỏi xung quanh rau đay mà đang được rất nhiều chị em nội trợ cũng như nhà nông quan tâm tới. Để có thể giải đáp được câu hỏi này!', 28),
(70, 'Lá sung tươi (1 KG)', 'la-sung-1.jpg', 20000, 0, 'Lá sung tươi thường có các nốt phồng, giống bong bóng nổ trên chiếc bánh đa nướng. Các nốt sần đó tạo nên do bị sâu P.syllidae ký sinh tạo ra. Thời điểm các nốt sần to như vậy thì con sâu cũng đã đi từ lâu, trong nốt sần không có trứng hay sâu ký sinh còn sót lại. Theo Đông Y, lá sung có nốt được coi là tốt hơn các lá bình thường, có thể trị khỏi nhiều bệnh khó chịu như: nhức đầu, bệnh gan, thuốc bổ cho người ốm,... Hơn nữa, tình trạng nốt sần chỉ có ở lá tươi, mới mọc từ chồi, không có ở lá già, nên nếu muốn ăn lá sung thì hãy chọn các lá có nốt sần, sẽ dễ ăn hơn, ít chát, ít xơ.', 28),
(72, 'Củ cải Hàn Quốc (1 KG)', 'cu-cai-han-quoc.jpg', 30000, 0, 'Giống như một số loại củ cải khác, củ cải trắng Hàn Quốc có nguồn gốc bắt nguồn từ Đông Nam Á. Loại củ cải này được trồng từ bán đảo Triều Tiên, tại đây loại củ cải này được trồng rất phổ biến. Hình dạng của củ cải Hàn Quốc giống như củ khoai tây cầm chắc nịch. \r\n', 28),
(77, 'Rau cải hoa vàng (1 KG)', 'rau-cai-hoa-vang.jpg', 12000, 0, 'Rau cải hoa vàng là gì? Công dụng của loại rau này có tốt như những loại rau khác hay không? Mua cải hoa vàng ở đâu uy tín chất lượng giá rẻ? Đây có lẽ chỉ là 3 trong tổng số nhiều câu hỏi xung quanh loại rau cải này mà nhiều người đang rất quan tâm tới. Rau là một món ăn có vị thế cực kì quan trọng trong thực đơn hàng ngày. Vừa là nguồn cung ứng dinh dưỡng tuyệt vời, vừa có thể dễ dàng tìm mua trên thị trường. Đó là lý do mà người Việt cực kì ưa thích dùng rau trong bữa ăn.', 28),
(80, 'Củ cần tây', 'cantay.jpg', 500000, 0, 'Củ cần tây hay còn có tên gọi khác là celeriac. Có nguồn gốc từ vùng Địa Trung Hải và cùng họ với cà rốt.', 28),
(84, 'Hạt giống hoa atiso đỏ (Gói 10 hạt)', 'trong-atiso-do.jpg', 20000, 1, 'Atiso đỏ là loại cây bụi ưa sáng, chịu hạn, có thể mọc ở vùng đồi, đất xấu, khô cằn. Ở Việt Nam, atiso thường được trồng làm cảnh và làm thuốc. Ngoài công dụng làm thuốc, giâm cành atiso đỏ còn là nguyên liệu để nhuộm thực phẩm, mỹ phẩm, nước giải khát, trà. Hạt dâm bụt dùng để ép dầu ăn. Có một điều đặc biệt ở hoa atiso là khi phơi khô, đài hoa có thể bảo quản được lâu nhưng nếu ngâm nước sẽ trở lại trạng thái tươi.', 29),
(85, 'Hạt giống hoa anh đào (Gói 10 hạt)', 'hat-giong-hoa-anh-dao.jpg', 20000, 0, 'Cây hoa anh đào Nhật Bản là loài hoa rất nổi tiếng trên thế giới, trong đó có Việt Nam. Là loài hoa có nguồn gốc từ đất nước mặt trời mọc Nhật Bản, được trồng nhiều ở các nước có khí hậu ôn đới như Châu u, Bắc Mỹ. Ngoài ra, loài hoa này còn được trồng nhiều ở Hàn Quốc, một số tỉnh của Trung Quốc, cũng như một số tỉnh của Việt Nam.', 29),
(86, 'Hạt giống hoa xương rồng (Túi 15 hạt)', 'hat-giong-hoa-xuong-rong-min.jpg', 50000, 0, 'Hiện nay, việc sử dụng cây cảnh để trang trí đã không còn quá xa lạ, và cây xương rồng là một sự lựa chọn mới lạ và độc đáo, là loại cây mọc hoang trên những sa mạc khô cằn. Khác biệt hoàn toàn với những loại cây để bàn thông thường, chúng có hình dáng và màu sắc đa dạng.', 29),
(87, 'Hạt giống hoa vân anh (Gói 50 hạt)', 'hat-giong-hoa-van-anh-min.jpg', 20000, 0, 'Với vẻ ngoài xinh xắn, rực rỡ và mùi hương quyến rũ, hoa vân anh chắc chắn sẽ trở thành món quà tuyệt vời cho khu vườn của bạn, hay cho bất kỳ không gian nhà hàng, khách sạn sang trọng nào.', 29),
(89, 'Hạt giống hoa Trúc Mai xanh (Gói 50 hạt)', 'hat-giong-hoa-truc-mai-xanh.jpg', 20000, 0, 'Hạt giống hoa Trúc Mai xanh (Centaurea Cyanus) dễ trồng, cho hoa đẹp và lạ mắt, đang được nhiều người yêu thích bởi sự khác lạ với những cụm hoa màu xanh tím rất đẹp.', 29),
(90, 'Hạt giống hoa triệu chuông (Gói 50 hạt)', 'hat-giong-hoa-trieu-chuong-min.jpg', 20000, 10, 'Hoa triệu chuông là loài hoa có nhiều màu sắc, tượng trưng cho nhiều ý nghĩa khác nhau. Đặt một chậu hoa triệu chuông trong phòng, không gian của bạn sẽ trở nên thoáng đãng và sinh động hơn bao giờ hết.', 29),
(91, 'Nấm thủy tiên nâu (1 KG)', 'nam-thuy-tien-nau.jpg', 15000, 0, 'Nấm thủy tiên nâu từ lâu đã được nhiều người tiêu dùng yêu thích và lựa chọn sử dụng trong bữa cơm gia đình.', 30),
(92, 'Nấm linh chi trắng (1 KG)', 'nam-thuy-tien-trang-2.jpg', 45000, 2, '', 30),
(93, 'Nấm yến Việt Nam (500 gram)', 'uDe-uYpXzMqQehwnNdvF7UpUKo7iBWuGnam-yen-ngon.jpg', 60000, 0, '', 30),
(94, 'Nấm linh chi tươi (300 GR)', 'GwTw0U5I52Rdy3evB_WcJBcwu17FYZAonam-linh-chi.jpg', 45000, 0, '', 30),
(95, 'Nấm bào ngư trắng (500 gram)', '6F0aRYCZp0yllafcJVPOyk4lr3B02ScBnam-so-trang-1.jpg', 39000, 0, '', 30),
(96, 'Đậu nành hữu cơ MÙA 1kg', '13263-635141658935541-1658935541--400x400.png', 125000, 0, '', 33),
(97, 'Gạo lứt tím hữu cơ Mùa 2kg', '13005-668731658203936-1658203936--400x400.jpg', 189000, 0, '', 33),
(98, 'Hạt hướng dương hữu cơ Health Paradise 250g', '13356-654191659066012-1659066012--400x400.jpg', 85000, 0, '', 33),
(99, 'Hạt điều bóc vỏ lụa hữu cơ Organica 350g', '13477-902011659084954-1659084954--400x400.jpg', 265000, 0, '', 33),
(100, 'Hạt sen tươi cấp đông Organica 500 gram', '12836-660341657705441-1657705441--400x400.jpg', 240000, 1, '', 33),
(102, 'Đậu đen xanh lòng hữu cơ Mùa 500g', '15112-452871682133223-1682133223--400x400.jpg', 140000, 0, '', 33),
(103, 'Đậu xanh hữu cơ Mùa 500g', '15111-447331682133212-1682133212--400x400.jpg', 140000, 0, '', 33),
(104, 'Táo Mỹ hữu cơ (1 KG)', 'tao-my-huu-co-0-min.jpg', 80000, 0, '', 31),
(105, 'Cà rốt hữu cơ', 'carot.png', 40500, 5, '', 31),
(106, 'Táo mật Fuji Nhật Bản (1 KG)', 'tao-mat-fuji-1.jpg', 200000, 0, '', 31),
(107, 'Dừa xiêm xanh gọt trọc - 1 trái', 'dua-xiem-min.jpg', 15000, 0, '', 31),
(108, 'Cam vàng úc', 'cam-vang-uc-dung-ha.jpg', 125000, 0, '', 31),
(109, 'Thịt thăn Karst Premium 300 gram', '14821-253921676885678-1676885678--400x400.png', 94500, 5, '', 32),
(110, 'Thăn mông bò Kobe 250 gram', '13175-694581658891002-1658891002--400x400.png', 500000, 0, '', 32),
(111, 'Gà thảo mộc (nửa con 800 gram)', '13882-866871663662798-1663662798--400x400.jpg', 360000, 5, 'Thích hợp với thợ may, nội trợ, hoặc dành cho người giảm cân, giảm mỡ bụng, thường xuyên theo dõi kích thước 3 vòng. Sản phẩm được làm từ nguyên liệu cao cấp với nhiều màu sắc bắt mắt.', 32),
(112, 'Cá ngừ lúc lắc (800 gram)', '15258-580051685083787-1685083787--400x400.png', 275000, 2, '', 32),
(113, 'Trứng gà thả vườn (9 quả)', '13311-990741659003753-1659003753--400x400.png', 90000, 10, '', 32),
(116, 'Dưa chuột bao tử (1 KG)', 'dua-chuot-bao-tu-8.jpg', 45000, 0, 'Dưa chuột bao tử (còn được gọi là dưa bao tử, dưa chuột non) là loại dưa chuột có kích thước nhỏ hơn so với dưa chuột thông thường. Nổi bật với lớp vỏ xanh đậm, có vị ngọt, phần thịt dày. Được sử dụng để ăn sống hoặc muối dưa, làm salad, nước ép,... ', 28),
(117, 'Cà tím tròn (1 KG)', 'ca-tim-tron-7.jpg', 15000, 0, 'Cà tím tròn là loại thực phẩm vô cùng quen thuộc với các chị em nội trợ. Nổi bật với hương vị thơm ngon, thích hợp để làm các món chiên hoặc hầm bởi cà tím có phần vỏ dày và thịt bên trong ít nước. Ngoài ra nó còn được sử dụng phổ biến với những món ăn chay hoặc ăn kiêng.\r\n', 28),
(118, 'Củ cải đỏ Đà Lạt (1 KG)', 'cucaiduong.jpg', 70000, 0, 'Củ cải đỏ là một trong những thực phẩm sạch, chứa hàm lượng dinh dưỡng cao rất có lợi cho sức khỏe, giàu vitamin A, vitamin C, trong lá củ cải đỏ có chứa thêm hàm lượng vitamin B9, sắt, axit folic,  kali và hàm lượng magie phong phú rất tốt cho sức khỏe người sử dụng…', 28),
(119, 'Ớt trái cây Đà Lạt (1 KG)', 'otsungxanh-min.jpg', 100000, 0, 'Ớt sừng xanh Hàn Quốc hay còn gọi là ớt ngọt (không cay) hay dùng với các món nướng. Loại ớt sừng Hàn Quốc này có vị ngọt nhẹ, không cay, thơm và giòn chứ không gắt như ớt thông thường. Khi dùng ăn với các món nướng sẽ rất kích thích vị giác.\r\n', 28),
(120, 'Xà lách mỡ (1 KG)', 'xalachmo.jpg', 30000, 0, 'Xà lách mỡ (danh pháp khoa học: Lactuca sativa) là một loại cây ôn đới thuộc họ Cúc. Rau thường được trồng làm rau ăn, có tác dụng giải khát, thanh nhiệt, an thần. Có 100 loại xà lách và nó được trồng trên khắp thế giới.\r\n', 28);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hd` int(11) NOT NULL,
  `ngay_mua` varchar(20) NOT NULL,
  `ghi_chu` varchar(50) NOT NULL,
  `tinh_trang` varchar(20) NOT NULL DEFAULT '0',
  `ma_kh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hd`, `ngay_mua`, `ghi_chu`, `tinh_trang`, `ma_kh`) VALUES
(110, '23-10-2021', '', '1', 'admin'),
(111, '11-11-2021', '', '0', 'admin'),
(112, '14-12-2022', '', '0', 'lamphuong'),
(113, '14-12-2022', '', '0', 'lamphuong'),
(114, '14-12-2022', '', '0', 'lamphuong'),
(115, '14-12-2022', '', '0', 'lamphuong'),
(116, '14-12-2022', '', '1', 'phuong76'),
(117, '14-12-2022', '', '1', 'phuong76'),
(118, '15-12-2022', '', '1', 'lamphuongng'),
(119, '15-12-2022', '', '1', 'lamphuongng'),
(120, '15-12-2022', '', '0', 'nguoidung'),
(121, '15-12-2022', '', '0', 'nguoidung');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hd` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`ma_hd`, `so_luong`, `don_gia`, `ma_hh`) VALUES
(110, 1, 35000, 65),
(111, 1, 336000, 106),
(112, 1, 150000, 80),
(112, 1, 160000, 77),
(113, 1, 150000, 89),
(113, 1, 150000, 80),
(113, 1, 140000, 72),
(114, 2, 150000, 89),
(114, 1, 580000, 110),
(116, 1, 140000, 72),
(116, 1, 120000, 66),
(116, 1, 120000, 113),
(117, 1, 890000, 70),
(117, 1, 209000, 100),
(118, 1, 890000, 70),
(118, 1, 580000, 110),
(118, 1, 140000, 72),
(118, 1, 79000, 87),
(118, 1, 65000, 64),
(118, 1, 10000, 109),
(119, 1, 150000, 80),
(119, 1, 55000, 94),
(119, 1, 136000, 107),
(119, 1, 45000, 92),
(120, 1, 890000, 70),
(120, 1, 580000, 110);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `vai_tro` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ho_ten`, `mat_khau`, `email`, `dia_chi`, `vai_tro`) VALUES
('admin', 'Admin', '123123', 'ngthilamphuong5@gmail.com', 'TP Hồ Chí Minh', 1),
('lamphuong', 'Nguyễn Thị Lam ', '123456', 'ngthilamphuong5@gmail.com', '820 Nguyễn Xiển', 0),
('lamphuongng', 'Lam Phương Ng', 'lamphuongng', 'ngthilamphuong5@gmail.com', 'TP HCM', 0),
('nguoidung', 'TK người dùng', '123456', 'tknguoidung@gmail.com', 'TP Thủ Đức, TP HCM', 0),
('nguyenlp', 'Nguyễn Thị Lam Phương', '1234567', 'ngthilamphuong5@gmail.com', '820 Nguyễn Xiển', 0),
('phuong76', 'Nguyễn Th Lam Phương', '123123', 'ngthilamphuong5@gmail.com', '820 Nguyễn Xiển, TP Thủ Đức', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(28, 'Rau củ sạch'),
(29, 'Hạt giống hoa'),
(30, 'Nấm các loại'),
(31, 'Trái cây hữu cơ'),
(32, 'Thịt & Thủy hải sản'),
(33, 'Ngũ cốc, Đậu & Hạt hữu cơ');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `thanh_vien` varchar(100) NOT NULL COMMENT 'thành viên thanh toán',
  `money` float NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `thanh_vien`, `money`, `note`, `vnp_response_code`, `code_vnpay`, `code_bank`, `time`) VALUES
(1, '742874161', 'abc', 100000, 'chinh chuyển khoản', '00', '13401455', 'NCB', '2020-10-10 01:00:00'),
(2, '608324672', 'abc', 1000000, 'test chuyển khoản', '00', '13401811', 'NCB', '2020-10-11 21:00:00'),
(3, '1134065293', 'CT2', 150000, 'học phí', '00', '13407163', 'NCB', '2020-10-22 23:00:00'),
(4, '596509313', 'CT2', 5000000, 'học phí', '00', '13407176', 'NCB', '2020-10-23 00:00:00'),
(5, '70267166', 'CT2', 5000000, 'học phí', '00', '13407178', 'NCB', '2020-10-23 00:00:00'),
(6, '1672349048', 'CT1', 150000, 'học phí', '00', '13407729', 'NCB', '2020-10-23 21:00:00'),
(7, '106', '', 2070000, 'Noi dung thanh toan', '00', '13563934', 'NCB', '2021-08-13 21:00:00'),
(8, '110', '', 35000, 'Noi dung thanh toan', '00', '13610095', 'NCB', '2021-10-23 21:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hd`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Indexes for table `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_hd` (`ma_hd`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai_hang` (`ma_loai`);

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Constraints for table `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_3` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
