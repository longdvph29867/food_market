-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 03, 2023 lúc 06:51 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xsshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(10) NOT NULL COMMENT 'mã bình luận',
  `noi_dung` varchar(255) NOT NULL COMMENT 'nội dung bình luận',
  `ma_hh` int(10) NOT NULL COMMENT 'mã hàng hoá được bình luận',
  `ma_kh` varchar(20) NOT NULL COMMENT 'mã người bình luận',
  `ngay_bl` date NOT NULL COMMENT 'thời gian bình luận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(14, 'dcscds', 35, 'hytygefu', '2023-06-03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL COMMENT 'mã hàng hoá',
  `ten_hh` varchar(50) NOT NULL COMMENT 'tên hàng hoá',
  `don_gia` double(10,2) NOT NULL COMMENT 'đơn giá',
  `giam_gia` double(10,2) DEFAULT 0.00 COMMENT 'mức giảm giá',
  `hinh` varchar(50) NOT NULL COMMENT 'hình ảnh',
  `ngay_nhap` date DEFAULT NULL COMMENT 'ngày nhập hàng',
  `mo_ta` text NOT NULL COMMENT 'mô tả hàng hoá',
  `dac_biet` tinyint(1) NOT NULL COMMENT 'tràng thái đặc biệt',
  `so_luot_xem` int(11) NOT NULL DEFAULT 0 COMMENT 'số lượt xem',
  `ma_loai` int(10) NOT NULL COMMENT 'mã loại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(28, 'Thịt ba rọi heo', 140000.00, 10000.00, 'thit_ba-roi-heo.png', '2023-06-03', 'Thịt ba chỉ (hay còn gọi là ba rọi) là phần thịt heo được cắt ra từ bụng, không có xương và nhiều mỡ. Sỡ dĩ người ta thường gọi thịt ba chỉ là bởi khi cắt ngang sẽ thấy được phần thịt và mỡ xen kẽ 3 lớp với nhau theo thứ tự lớp thịt, mỡ rồi lại đến lớp thịt', 0, 0, 16),
(29, 'Móng giò', 99000.00, 5000.00, 'thit_mong-gio.png', '2023-06-03', 'Phần móng giò trắng nõn được sơ chế và pha lóc khéo léo, mang trọn hương vị của phần da dẻo mềm mềm, lớp gân giòn và thịt ngọt thơm ngon. Móng giò rất giàu Protit, sau khi đưa vào cơ thể sẽ có tác dụng hiệu quả trong việc cải thiện chức năng sinh lý của các cơ quan nội tạng, làm cho các tế bào da giữ được nước nên đỡ bị khô nhăn, khiến cho da bóng và căng', 1, 0, 16),
(30, 'Thịt heo xay', 110000.00, 2000.00, 'thit_heo-xay.png', '2023-06-03', 'Loại thịt rất quen thuộc với mỗi bà nội trợ nhờ độ linh hoạt cao trong chế biến, lại nhanh thấm gia vị và có khả năng kết hợp hài hòa với hầu hết các loại rau củ, cho các đầu bếp tại gia thỏa sức biến tấu. Sản phẩm được kết hợp từ thịt nạc và mỡ tươi sạch tạo sự hài hòa cho hương vị và sự an tâm tuyệt đối về chất lượng cho các món ăn', 0, 0, 16),
(31, 'Sườn heo', 160000.00, 12000.00, 'thit_suon-heo.png', '2023-06-03', 'Sườn hồng tươi với sụn giòn rụm cùng thịt mềm căng mọng được tuyển chọn kỹ lưỡng từ tảng sườn ngon nhất. Là nguyên liệ hảo hạng cho món ngon đúng điệu. Sườn heo là bộ phận chứa nhiều các chất dinh dưỡng như protein, vitamin B12, kẽm, sắt và chất béo không bão hòa như Omega-3 giúp cung cấp cho cơ thể loạt các vi chất cần thiết', 1, 0, 16),
(32, 'Bắp giò heo', 125000.00, 0.00, 'thit_bap-gio-heo.png', '2023-06-03', 'Chân giò heo tiêu chuẩn về an toàn toàn thực phẩm. Giò heo săn chắc, thịt có sự kết hợp với gân mỡ nên ăn béo ngậy và thơm, thích hợp để hầm canh, nấu các món nước như hủ tiếu, bánh canh. Do chân hoạt động nhiều nên phần thịt sẽ mỏng, mềm, ngọt và có nhiều gân hơn vì vậy mà khi chế biến các món hầm, giả cầy, luộc,... sẽ mềm, thấm gia vị và ngon hơn', 1, 0, 16),
(33, 'Đuôi heo', 75000.00, 3000.00, 'thit_duoi-heo.png', '2023-06-03', 'Đuôi heo bao gồm cả phần xương đuôi. Phần đuôi gồm chủ yếu là thịt và mỡ, được bao quanh bởi da. Xương và các mẩu sụn nhỏ ở các đầu khớp nối tạo độ giòn khi thưởng thức. Trong thực đơn gia đình thì đây là nguyên liệu lý tưởng cho các món hầm, ninh nhừ để đem lại những món ăn thơm ngon, hương vị đậm đà nhưng không hề béo', 0, 0, 16),
(34, 'Nạc vai heo', 105000.00, 1000.00, 'thit_vai-heo.png', '2023-06-03', 'Nạc vai heo là phần thịt đặc trưng được lấy từ đùi trước (vai) của heo. Nạc vai còn bao gồm một phần đầu của thăn ngoại heo (đầu mềm). Chất lượng thịt heo đạt chất lượng cao nhất, thịt heo đều được Cơ quan thú y nhà nước kiểm tra, đóng dấu trước khi đưa ra thị trường tiêu thụ', 1, 0, 16),
(35, 'Bắp bò Úc', 355000.00, 19000.00, 'thit_bap-bo-uc.png', '2023-06-03', 'Bắp bò Úc luôn là được xếp trong danh sách dòng sản phẩm best seller ở mọi cửa hàng trong hệ thống. Với thực đơn chế biến đa dạng như bò kho, bò hầm, bò sốt vang, bò luộc, bò xào, bò nướng, bò hấp, sản phẩm đáp ứng nhu cầu ẩm thực phong phú của nhiều gia đình Việt. Hãy đến với Food Market ngay hôm nay để được mua hàng với mức giá tốt nhất', 1, 0, 16),
(36, 'Ba chỉ bò nhập khẩu', 515000.00, 29000.00, 'thit_ba-chi-bo.png', '2023-06-03', 'Ba chỉ bò là phần thịt được lấy từ phần bụng của con bò, là phần thịt với những dải thịt nạc và thịt mỡ xen kẽ nhau tạo nên độ mềm, ngậy, ngọt nhưng hoàn toàn không ngấy. Bò nhập khẩu rất dễ chế biến. Những món ăn nấu từ thịt ba chỉ bò cũng rất đơn giản như xào, lẩu, cuốn cải nướng, cuốn nấm kim châm nướng, nhúng giấm hay làm salat', 1, 0, 16),
(37, 'Thăn ngoại bò Úc', 489000.00, 12000.00, 'thit_than-ngoai-bo-uc.png', '2023-06-03', 'Là sự xen kẽ hoàn hảo giữa lớp thịt và lớp mỡ trên miếng thịt bò tạo nên những hình vân cẩm thạch đẹp mắt.Thịt bò mềm, mọng nước, hợp để làm steak hoặc nhúng lẩu. Thăn ngoại bò vốn nổi tiếng là loại thịt bò cao cấp nhất trên thế giới. Các đường vân mỡ – nạc đan xen đều đặn tựa như đường vân cẩm thạch', 0, 0, 16),
(38, 'Gầu bò Úc', 348000.00, 0.00, 'thit_gau-bo-uc.png', '2023-06-03', 'Gầu bò Úc hay còn gọi là nạm bò, ức bò (Brisket) là sản phẩm nhập khẩu trực tiếp từ các thương hiệu thịt bò hàng đầu của Úc với đầy đủ tem nhãn của nhà sản xuất và dấu kiểm định của Chi Cục Thú Y. Quá trình sơ chế, đóng khay, cấp đông Bò Úc vệ sinh sạch sẽ đảm bảo chất lượng, an toàn cho sức khỏe người tiêu dùng. Gầu Bò Úc được pha cắt bằng máy bào công nghiệp, bào lẩu theo tiêu chuẩn độ dày 1,5mm cho món lẩu.', 1, 0, 16),
(39, 'Gà đồi', 132000.00, 11000.00, 'thit_ga-doi.png', '2023-06-03', 'Thịt gà đồi thường có cấu trúc cơ bắp chắc chắn và mềm mại, với một lượng mỡ ít hơn so với các loại gà nuôi công nghiệp. Do được nuôi trong môi trường tự nhiên, gà đồi thường có cơ bắp phát triển tự nhiên hơn và thường được cho ăn các nguồn thức ăn tự nhiên như cỏ, hạt, sâu, giun và côn trùng. Thịt gà đồi là một nguồn cung cấp protein chất lượng cao, vitamin B6, vitamin B12, selen và các khoáng chất khác. Nó là một lựa chọn ăn uống lành mạnh và giàu dinh dưỡng', 0, 0, 16),
(40, 'Cánh gà', 102000.00, 3000.00, 'thit_canh-ga.png', '2023-06-03', 'Cánh gà là một phần thịt được lấy từ cánh của con gà. Đây là một phần thịt thường được ưa chuộng và sử dụng phổ biến trong ẩm thực nhiều quốc gia trên thế giới. Cánh gà có cấu trúc xương và thịt cân đối. Phần thịt trên cánh gà thường là mềm mại và có một lượng mỡ nhất định, tạo ra hương vị thơm ngon và độ mềm phù hợ', 1, 0, 16),
(41, 'Đùi gà', 113000.00, 8000.00, 'thit_dui-ga.png', '2023-06-03', 'Đùi gà là một phần thịt được lấy từ phần đùi hoặc chân sau của con gà. Đây là một phần thịt gà phổ biến và được sử dụng rộng rãi trong ẩm thực. Khi chế biến, đùi gà có thể được nướng, quay, rán hoặc hấp theo nhiều phong cách khác nhau. Đùi gà thường được tẩm gia vị hoặc sốt để tăng cường hương vị và độ ngon. Đùi gà cũng thích hợp để làm món chính hoặc món ăn nhẹ', 1, 0, 16),
(42, 'Sườn cừu mông cổ', 720000.00, 32000.00, 'thit_suon-cuu.png', '2023-06-03', 'Sườn cừu Mông Cổ là một sản phẩm thịt từ phần sườn của Cừu Mông Cổ, một loại gia súc được nuôi chủ yếu ở Mông Cổ. Đây là một phần thịt ngon, giàu dinh dưỡng và có một hương vị đặc trưng. Sườn cừu Mông Cổ thường có cấu trúc xương dài và thịt mềm, có nhiều mỡ ở giữa, giúp tạo ra một hương vị giàu mỡ và thơm ngon. Phần thịt được cắt từ sườn cừu thường có lớp mỡ mỏng bao quanh, làm tăng hương vị và giữ cho thịt mềm và không khô', 1, 0, 16),
(43, 'Cá Mập Cambodia', 32000.00, 323223.00, 'slide-ca-tuoi-removebg-preview.png', '2023-06-03', 'scacsaccascascscaca', 1, 0, 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) NOT NULL COMMENT 'mã đăng nhập',
  `mat_khau` varchar(50) NOT NULL COMMENT 'mật khẩu',
  `ho_ten` varchar(50) NOT NULL COMMENT 'họ và tên',
  `kich_hoat` tinyint(1) NOT NULL COMMENT 'trang thái kích hoạt',
  `hinh` varchar(50) NOT NULL COMMENT 'tên hình ảnh',
  `email` varchar(50) NOT NULL COMMENT 'địa chỉ email',
  `vai_tro` tinyint(1) NOT NULL COMMENT 'vai trò true là nhân viên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES
('hytygefu', 'Pa$$w0rd!', 'lesajyten', 0, 'user2.jpeg', 'razof@mailinator.com', 0),
('kh2', 'Pa$$w0rd!', 'Quên rồi', 0, '', 'gygiq@mailinator.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(10) NOT NULL COMMENT 'mã loại hàng',
  `ten_loai` varchar(50) NOT NULL COMMENT 'tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(16, 'Thịt'),
(17, 'Cá'),
(18, 'Hải sản'),
(19, 'Rau'),
(20, 'Hoa quả'),
(21, 'Sữa'),
(22, 'Gia vị'),
(23, 'Đồ uống'),
(24, 'bbdfb');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma hh` (`ma_hh`),
  ADD KEY `ma kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(10) NOT NULL AUTO_INCREMENT COMMENT 'mã bình luận', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã hàng hoá', AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT COMMENT 'mã loại hàng', AUTO_INCREMENT=25;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `ma hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `ma kh` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `ma loai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
