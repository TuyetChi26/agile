-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2025 at 02:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agile`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `categoryName` varchar(225) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `description`) VALUES
(1, 'Áo Sơ Mi', 'Áo sơ mi siêu đẹp'),
(2, 'Quần Âu', 'thế thôi'),
(3, 'Quần Jeans', 'Thế thôi'),
(4, 'Áo Thun', NULL),
(5, 'Áo Khoác', NULL),
(6, 'Áo Polo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_gio_hangs`
--

CREATE TABLE `chi_tiet_gio_hangs` (
  `id` int NOT NULL,
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `so_luong` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `chi_tiet_gio_hangs`
--

INSERT INTO `chi_tiet_gio_hangs` (`id`, `cart_id`, `product_id`, `so_luong`) VALUES
(5, 1, 1, 2),
(6, 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `id_danh_muc` int DEFAULT NULL,
  `ten_san_pham` varchar(225) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `gia_khuyen_mai` decimal(10,2) DEFAULT NULL,
  `hinh_anh` varchar(225) DEFAULT NULL,
  `so_luong` int NOT NULL,
  `ngay_nhap` date NOT NULL,
  `mo_ta` text,
  `trang_thai` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_danh_muc`, `ten_san_pham`, `gia`, `gia_khuyen_mai`, `hinh_anh`, `so_luong`, `ngay_nhap`, `mo_ta`, `trang_thai`) VALUES
(1, 1, 'Áo sơ mi dài tay trơn GATB011', '550.00', '450.00', 'https://product.hstatic.net/200000690725/product/thiet_ke_chua_co_ten__5__c43044e163cf44329b0c081ddaff1e5c_master.png', 100, '2025-04-10', 'THÔNG TIN SẢN PHẨM:\r\n---------------------------------------\r\n📍Tên sản phẩm: Áo sơ mi dài tay trơn GATB011\r\n\r\n📍Chất liệu: Bamboo\r\n\r\n📍 Size: 38-39-40-41-42\r\n\r\n📍 Xuất xứ: Việt Nam\r\nTính năng nổi bật:\r\n\r\n+ Giặt không đổ lông hay bay màu, thấm hút mồ hôi và thoải mái không gò bó khi vận động\r\n\r\n+ Thiết kế cấu trúc lỗ thoáng, mắt vải to tạo sự thoáng mát cho người mặc\r\n Mix:\r\n\r\n+ Quần vải (Đen/ Xanh tím than) + Giày lười/ Giày thể thao.\r\n\r\n+ Quần kaki ( Đen/ Trắng/ Xanh tím than) + Giày lười/ Giày thể thao.\r\n\r\n+ Jeans + Giày lười/ Giày thể thao\r\n📍Hướng dẫn sử dụng:\r\n\r\n+ Giặt máy với chu kỳ trung bình và vòng quay ngắn\r\n\r\n+ Giặt với nhiệt độ tối đa 30 độ C\r\n\r\n+ Sấy nhẹ ở nhiệt độ thường\r\n\r\n+ Là ủi không quá 110 độ C\r\n\r\n+ Phơi bằng móc dưới bóng râm\r\n\r\n+ Không sử dụng chất tẩy\r\n\r\n📍 Lưu ý nhỏ:\r\n\r\n+ Không giặt chung với đồ dễ xước\r\n\r\n+ Cẩn thận vướng mắc khi phơi\r\n📌CHÍNH SÁCH ĐỔI:\r\n\r\n• Torano hỗ trợ đổi hàng trong trường hợp: sản phẩm mặc không vừa, khách không ưng sản phẩm đã đặt, sản phẩm có lỗi của nhà sản xuất.  \r\n• Sản phẩm đổi phải đạt điều kiện: còn nguyên tem mác, chưa qua sử dụng, không có vết bẩn, rách…  \r\n• Thời gian đổi: trong vòng 7 NGÀY kể từ ngày khách nhận hàng.  \r\n• LƯU Ý:     \r\n- Nếu có khiếu nại cần hỗ trợ, quý khách CẦN CÓ VIDEO QUAY LẠI QUÁ TRÌNH MỞ HÀNG để đảm bảo vấn đề sẽ được giải quyết 100%', 1),
(2, 1, 'Sơ mi dài tay trơn Bamboo EATB041', '450.00', '400.00', 'https://product.hstatic.net/200000690725/product/tb041_5bd6cdab7f354884aeb04bf5fdd133ff_master.png', 50, '2025-04-10', '📌THÔNG TIN SẢN PHẨM:\r\n\r\n📍Tên sản phẩm: Áo sơ mi dài tay nam TORANO trơn Bamboo phom chuẩn lịch sự EATB041\r\n\r\n📍Chất liệu: Bamboo\r\n\r\n📍Màu sắc: Trắng, Xanh Navy, Xanh đá nhạt\r\n\r\n📍Phom dáng: Slimfit hơi ôm\r\n\r\n📍Size: 38-39-40-41-42\r\n\r\n📍Xuất xứ: Việt Nam\r\n\r\n📍Tính năng nổi bật:\r\n\r\n+ Giặt không đổ lông hay bay màu, thấm hút mồ hôi và thoải mái không gò bó khi vận động\r\n\r\n+ Thiết kế cấu trúc lỗ thoáng, mắt vải to tạo sự thoáng mát cho người mặc\r\n\r\n📍 Mix:\r\n\r\n+ Quần vải (Đen/ Xanh tím than) + Giày lười/ Giày thể thao.\r\n\r\n+ Quần kaki ( Đen/ Trắng/ Xanh tím than) + Giày lười/ Giày thể thao.\r\n\r\n+ Jeans + Giày lười/ Giày thể thao\r\n\r\n📍Hướng dẫn sử dụng:\r\n\r\n+ Giặt máy với chu kỳ trung bình và vòng quay ngắn\r\n\r\n+ Giặt với nhiệt độ tối đa 30 độ C\r\n\r\n+ Sấy nhẹ ở nhiệt độ thường\r\n\r\n+ Là ủi không quá 110 độ C\r\n\r\n+ Phơi bằng móc dưới bóng râm\r\n\r\n+ Không sử dụng chất tẩy\r\n\r\n📍 Lưu ý nhỏ:\r\n\r\n+ Không giặt chung với đồ dễ xước\r\n\r\n+ Cẩn thận vướng mắc khi phơi\r\n📌CHÍNH SÁCH ĐỔI:\r\n\r\n• Torano hỗ trợ đổi hàng trong trường hợp: sp mặc không vừa, khách không ưng sp đã đặt, sp có lỗi của nhà sản xuất.  \r\n• Sản phẩm đổi phải đạt điều kiện: còn nguyên tem mác, chưa qua sử dụng, không có vết bẩn, rách…  \r\n• Thời gian đổi: trong vòng 7 NGÀY kể từ ngày khách nhận hàng.  \r\n• LƯU Ý:   - Khách hàng KHÔNG BẤM NHẬN HÀNG khi có nhu cầu đổi hàng.\r\n\r\n- Nếu khách hàng bấm “ĐÃ NHẬN HÀNG” khách hàng THANH TOÁN 2 CHIỀU PHÍ SHIP khi đổi hàng.    \r\n- Nếu có khiếu nại cần hỗ trợ, quý khách CẦN CÓ VIDEO QUAY LẠI QUÁ TRÌNH MỞ HÀNG để đảm bảo vấn đề sẽ được giải quyết 100%.', 1),
(3, 3, ' Quần jeans basic FABJ003', '300.00', '215.00', 'https://product.hstatic.net/200000690725/product/53655400895_8f7db2c905_k_13caf99a3f314423a45e60397818b63c_master.jpg', 100, '2025-04-11', '📌THÔNG TIN SẢN PHẨM:\r\n\r\n📍Tên sản phẩm: Quần Jeans nam TORANO dáng basic FABJ003\r\n\r\n📍 Chất liệu: Jeans dày dặn, siêu bền, không phai màu\r\n\r\n📍Màu sắc: Xanh da trời nhạt, Darknavy, Xanh da trời đậm\r\n\r\n📍Phom dáng: basic hơi ôm\r\n\r\n📍Size: 29-30-31-32-33\r\n\r\n📍Xuất xứ: Việt Nam\r\n\r\n📍Tính năng nổi bật:\r\n\r\n+ Thấm hút tốt\r\n\r\n+ Co giãn, mềm mại, đàn hồi tốt\r\n\r\n+ Bền màu, không bai xù sau nhiều lần giặt\r\n\r\n+ Phom dáng trẻ trung, năng động\r\n\r\n+ Túi trước sâu rộng, thêm hai túi hậu thời trang, tiện lợi để được nhiều đồ như ví, điện thoại,...\r\n\r\n+ Đường may nổi chắc chắn, tinh tế\r\n\r\n📍 Hướng dẫn bảo quản quần jean:\r\n\r\n+ Sau khi mua về bạn nên ngâm chiếc quần jean của mình với nước lạnh pha muối đậm, giấm ăn hoặc phèn chua ít nhất 12 tiếng đồng hồ. Sau đó, đem xả lại bằng nước sạch. Bạn chú ý là không sử dụng xà phòng để giặt quần trong lần đầu tiên.\r\n\r\n+ Nên phơi quần jean trong bóng râm\r\n\r\n+ Giặt bằng nước lạnh\r\n\r\n+ Không ngâm quần jean quá lâu, chỉ ngâm 3-5 phút\r\n\r\n+ Nên giặt tay để quần bền màu lâu hơn.\r\n\r\n📍Hướng dẫn sử dụng:\r\n\r\n+ Giặt máy với chu kỳ trung bình và vòng quay ngắn\r\n\r\n+ Giặt với nhiệt độ tối đa 30 độ C\r\n\r\n+ Sấy nhẹ ở nhiệt độ thường\r\n\r\n+ Là ủi không quá 110 độ C\r\n\r\n+ Phơi bằng móc dưới bóng râm\r\n\r\n+ Không sử dụng chất tẩy\r\n\r\n📍 Lưu ý nhỏ:\r\n\r\n+ Không giặt chung với đồ dễ xước\r\n\r\n+ Cẩn thận vướng mắc khi phơi\r\n\r\n📌CHÍNH SÁCH ĐỔI:\r\n\r\n• Torano hỗ trợ đổi hàng trong trường hợp: sp mặc không vừa, khách không ưng sp đã đặt, sp có lỗi của nhà sản xuất.  \r\n• Sản phẩm đổi phải đạt điều kiện: còn nguyên tem mác, chưa qua sử dụng, không có vết bẩn, rách…  \r\n• Thời gian đổi: trong vòng 7 NGÀY kể từ ngày khách nhận hàng.  \r\n• LƯU Ý:   - Khách hàng KHÔNG BẤM NHẬN HÀNG khi có nhu cầu đổi hàng.\r\n\r\n- Nếu khách hàng bấm “ĐÃ NHẬN HÀNG” khách hàng THANH TOÁN 2 CHIỀU PHÍ SHIP khi đổi hàng.    \r\n- Nếu có khiếu nại cần hỗ trợ, quý khách CẦN CÓ VIDEO QUAY LẠI QUÁ TRÌNH MỞ HÀNG để đảm bảo vấn đề sẽ được giải quyết 100%.', 1),
(4, 3, 'Quần Jeans basic slim EABJ012', '430.00', '290.00', 'https://product.hstatic.net/200000690725/product/bj012_972f5893a3c14a8f8d4c71e8a453f23e_master.jpg', 50, '2025-04-11', '📌THÔNG TIN SẢN PHẨM:\r\n\r\n📍Tên sản phẩm: Quần Jeans basic slim EABJ012\r\n\r\n📍 Chất liệu: Jeans dày dặn, siêu bền, không phai màu\r\n\r\n📍Màu sắc: Xám nhạt, Đen nhạt, Dark navy, Xám đậm, Xanh da trời đậm, Xanh da trời, Đen\r\n\r\n📍Phom dáng: basic hơi ôm\r\n\r\n📍Size: 29-30-31-32-33\r\n\r\n📍Xuất xứ: Việt Nam\r\n📍Tính năng nổi bật:\r\n\r\n+ Thấm hút tốt\r\n\r\n+ Co giãn, mềm mại, đàn hồi tốt\r\n\r\n+ Bền màu, không bai xù sau nhiều lần giặt\r\n\r\n+ Phom dáng trẻ trung, năng động\r\n\r\n+ Túi trước sâu rộng, thêm hai túi hậu thời trang, tiện lợi để được nhiều đồ như ví, điện thoại,...\r\n\r\n+ Đường may nổi chắc chắn, tinh tế\r\n📍 Hướng dẫn bảo quản quần jean:\r\n\r\n+ Sau khi mua về bạn nên ngâm chiếc quần jean của mình với nước lạnh pha muối đậm, giấm ăn hoặc phèn chua ít nhất 12 tiếng đồng hồ. Sau đó, đem xả lại bằng nước sạch. Bạn chú ý là không sử dụng xà phòng để giặt quần trong lần đầu tiên.\r\n\r\n+ Nên phơi quần jean trong bóng râm\r\n\r\n+ Giặt bằng nước lạnh\r\n\r\n+ Không ngâm quần jean quá lâu, chỉ ngâm 3-5 phút\r\n\r\n+ Nên giặt tay để quần bền màu lâu hơn.\r\n\r\n📍Hướng dẫn sử dụng:\r\n\r\n+ Giặt máy với chu kỳ trung bình và vòng quay ngắn\r\n\r\n+ Giặt với nhiệt độ tối đa 30 độ C\r\n\r\n+ Sấy nhẹ ở nhiệt độ thường\r\n\r\n+ Là ủi không quá 110 độ C\r\n\r\n+ Phơi bằng móc dưới bóng râm\r\n\r\n+ Không sử dụng chất tẩy\r\n\r\n📍 Lưu ý nhỏ:\r\n\r\n+ Không giặt chung với đồ dễ xước\r\n\r\n+ Cẩn thận vướng mắc khi phơi\r\n📌CHÍNH SÁCH ĐỔI:\r\n\r\n• Torano hỗ trợ đổi hàng trong trường hợp: sp mặc không vừa, khách không ưng sp đã đặt, sp có lỗi của nhà sản xuất.  \r\n• Sản phẩm đổi phải đạt điều kiện: còn nguyên tem mác, chưa qua sử dụng, không có vết bẩn, rách…  \r\n• Thời gian đổi: trong vòng 7 NGÀY kể từ ngày khách nhận hàng.  \r\n• LƯU Ý:   - Khách hàng KHÔNG BẤM NHẬN HÀNG khi có nhu cầu đổi hàng.\r\n\r\n- Nếu khách hàng bấm “ĐÃ NHẬN HÀNG” khách hàng THANH TOÁN 2 CHIỀU PHÍ SHIP khi đổi hàng.    \r\n- Nếu có khiếu nại cần hỗ trợ, quý khách CẦN CÓ VIDEO QUAY LẠI QUÁ TRÌNH MỞ HÀNG để đảm bảo vấn đề sẽ được giải quyết 100%.', 1),
(7, 5, 'Áo khoác phao 3 lớp lót bông cổ cao FWCF005', '650.00', '490.00', 'https://product.hstatic.net/200000690725/product/54252454497_be0b5e8ddc_c_7adef18e8463448db7cc83cc6dd2b66d_master.jpg', 76, '2025-04-11', 'Miền Bắc chuyển rét, anh em đã tự tin đón gió Đông với phao béo vừa ấm áp, vừa trẻ trung và nổi bật từ TORANO chưa? Thiết kế phóng khoáng với bề mặt chống nước cải tiến gấp 2 lần và chần bông 3 lớp giữ nhiệt sẽ khiến anh em không thể bỏ lỡ.\r\nÁo khoác Puffer cổ cao FWCF005\r\n▪️ Được thiết kế theo đúng form chuẩn của nam giới Việt Nam\r\n▪️ Sản phẩm thuộc dòng Áo khoác 3 lớp chần bông cao cấp do NiOc sản xuất\r\nĐặc tính:\r\n\r\n▪️ Thiết kế chần bông 3 lớp nhẹ hơn, ấm hơn\r\n\r\n▪️ Kiểu dáng phao béo phóng khoáng, trẻ trung\r\n\r\n▪️ Chống nước bền bỉ x2 nhờ công nghệ Hyper-tex cải tiến\r\n📌 HƯỚNG DẪN SỬ DỤNG\r\n▪️ Giặt máy chế độ nhẹ ở điều kiện thường\r\n▪️ Là ủi không quá 110 độ C\r\n▪️ Không ngâm lâu với bột giặt các sản phẩm có tính tẩy rửa\r\n▪️ Khi giặt nên lộn mặt trái ra để đảm bảo độ bền của lớp kháng nước Hyper Tex\r\n▪️ Không giặt chung với vật sắc nhọn\r\n\r\n📌 CHÍNH SÁCH ĐỔI:\r\n▪️ Torano hỗ trợ đổi hàng trong trường hợp: sản phẩm nhầm size, nhầm màu; sản phẩm có lỗi của nhà sản xuất.\r\n▪️ Sản phẩm đổi phải đạt điều kiện:\r\n- Còn nguyên tem mác\r\n- Chưa qua sử dụng, giặt tẩy\r\n- Không có vết bẩn, rách\r\n▪️ Thời gian đổi trả: trong vòng 30 NGÀY kể từ ngày khách nhận hàng', 1),
(8, 5, 'Áo khoác nỉ can phối gió dọc vai áo FWCS007', '670.00', '550.00', 'https://product.hstatic.net/200000690725/product/thiet_ke_chua_co_ten__4__01f07861dd284ff783d0659dee595d19_master.png', 45, '2025-04-11', 'Áo khoác nỉ can phối gió dọc vai áo FWCS007\r\n▪️ Được thiết kế theo đúng form chuẩn của nam giới Việt Nam\r\n▪️ Sản phẩm thuộc dòng Áo khoác nỉ cao cấp do NiOc sản xuất\r\n📌 THÔNG TIN CHI TIẾT\r\n* Chất liệu: Nỉ cao cấp lót gió\r\n* Phom: Regular Fit - Dáng Bomber\r\n* Xuất xứ: Việt Nam\r\n* Size: S - M - L - XL\r\nTÍNH NĂNG NỔI BẬT\r\n* Chất nỉ mềm mại, lên phom chuẩn, KHÔNG tạo cảm giác cộm hay khó chịu khi sử dụng. Dễ dàng layer với các trang phục khác bên trong.\r\n* Mặt trong được lót gió giữ ấm tốt\r\n* Phom Bomber trẻ trung, phù hợp mọi vóc dáng\r\n📌 HƯỚNG DẪN SỬ DỤNG\r\n▪️ Giặt máy chế độ nhẹ ở điều kiện thường\r\n▪️ Là ủi không quá 110 độ C\r\n▪️ Không ngâm lâu với bột giặt các sản phẩm có tính tẩy rửa\r\n▪️ Khi giặt nên lộn mặt trái ra để đảm bảo độ bền của lớp kháng nước Hyper Tex\r\n▪️ Không giặt chung với vật sắc nhọn\r\n\r\n📌 CHÍNH SÁCH ĐỔI:\r\n▪️ Torano hỗ trợ đổi hàng trong trường hợp: sản phẩm nhầm size, nhầm màu; sản phẩm có lỗi của nhà sản xuất.\r\n▪️ Sản phẩm đổi phải đạt điều kiện:\r\n- Còn nguyên tem mác\r\n- Chưa qua sử dụng, giặt tẩy\r\n- Không có vết bẩn, rách\r\n▪️ Thời gian đổi trả: trong vòng 30 NGÀY kể từ ngày khách nhận hàng', 1),
(9, 2, 'Quần âu side tab FABT008', '600.00', '500.00', 'https://product.hstatic.net/200000690725/product/d5f25af2-e505-482d-adff-e82cf85a0e4f_6c36708212864d49b52c0479342f5e34_master.jpg', 20, '2025-04-12', 'Quần âu side tab FABT008 là mẫu quần âu nam cao cấp chính hãng Torano. Chất vải dày dặn, mềm mịn và không nhăn nhàu lại cực thì thoáng mát.\r\n📌CHÍNH SÁCH ĐỔI:\r\n\r\n• Torano hỗ trợ đổi hàng trong trường hợp: sản phẩm mặc không vừa, khách không ưng sản phẩm đã đặt, sản phẩm có lỗi của nhà sản xuất.  \r\n• Sản phẩm đổi phải đạt điều kiện: còn nguyên tem mác, chưa qua sử dụng, không có vết bẩn, rách…  \r\n• Thời gian đổi: trong vòng 7 NGÀY kể từ ngày khách nhận hàng.  \r\n• LƯU Ý:   - Khách hàng KHÔNG BẤM NHẬN HÀNG khi có nhu cầu đổi hàng.\r\n\r\n- Nếu khách hàng bấm “ĐÃ NHẬN HÀNG” khách hàng THANH TOÁN 2 CHIỀU PHÍ SHIP khi đổi hàng.    \r\n- Nếu có khiếu nại cần hỗ trợ, quý khách CẦN CÓ VIDEO QUAY LẠI QUÁ TRÌNH MỞ HÀNG để đảm bảo vấn đề sẽ được giải quyết 100%.', 1),
(10, 2, 'Quần âu slim fit điều chỉnh cạp trơn EABT016', '400.00', '500.00', 'https://product.hstatic.net/200000690725/product/eabt016_aa65a1bfa70241f0978d163d992120a2_master.jpg', 50, '2025-04-12', 'Quần âu slim fit điều chỉnh cạp trơn EABT016 là mẫu quần âu nam cao cấp chính hãng Torano. Chất vải dày dặn, mềm mịn và không nhăn nhàu lại cực thì thoáng mát.\r\n📌CHÍNH SÁCH ĐỔI:\r\n\r\n• Torano hỗ trợ đổi hàng trong trường hợp: sp mặc không vừa, khách không ưng sp đã đặt, sp có lỗi của nhà sản xuất.  \r\n• Sản phẩm đổi phải đạt điều kiện: còn nguyên tem mác, chưa qua sử dụng, không có vết bẩn, rách…  \r\n• Thời gian đổi: trong vòng 7 NGÀY kể từ ngày khách nhận hàng.  \r\n• LƯU Ý:   - Khách hàng KHÔNG BẤM NHẬN HÀNG khi có nhu cầu đổi hàng.\r\n\r\n- Nếu khách hàng bấm “ĐÃ NHẬN HÀNG” khách hàng THANH TOÁN 2 CHIỀU PHÍ SHIP khi đổi hàng.    \r\n- Nếu có khiếu nại cần hỗ trợ, quý khách CẦN CÓ VIDEO QUAY LẠI QUÁ TRÌNH MỞ HÀNG để đảm bảo vấn đề sẽ được giải quyết 100%.', 1),
(11, 4, 'Áo T shirt họa tiết in Coast FSTS021', '300.00', '280.00', 'https://product.hstatic.net/200000690725/product/thiet_ke_chua_co_ten__4__2f7560e231194bb59ec237af668a14c7_master.png', 20, '2025-04-12', 'Áo T shirt họa tiết in Coast FSTS021 chính hãng NiOc là mẫu áo thun nam với chất vải cho độ dày dặn, co giãn tốt và quan trọng độ bền màu cao. Giặt không đổ lông hay bay màu, thấm hút mồ hôi và thoải mái không gò bó khi vận động.\r\n📍Hướng dẫn sử dụng:\r\n\r\n+ Giặt máy với chu kỳ trung bình và vòng quay ngắn\r\n\r\n+ Giặt với nhiệt độ tối đa 30 độ C\r\n\r\n+ Sấy nhẹ ở nhiệt độ thường\r\n\r\n+ Là ủi không quá 110 độ C\r\n\r\n+ Phơi bằng móc dưới bóng râm\r\n\r\n+ Không sử dụng chất tẩy\r\n\r\n📍 Lưu ý nhỏ:\r\n\r\n+ Không giặt chung với đồ dễ xước\r\n\r\n+ Cẩn thận vướng mắc khi phơi\r\n📌CHÍNH SÁCH ĐỔI:\r\n\r\n• Torano hỗ trợ đổi hàng trong trường hợp: sản phẩm mặc không vừa, khách không ưng sản phẩm đã đặt, sản phẩm có lỗi của nhà sản xuất.  \r\n• Sản phẩm đổi phải đạt điều kiện: còn nguyên tem mác, chưa qua sử dụng, không có vết bẩn, rách…  \r\n• Thời gian đổi: trong vòng 7 NGÀY kể từ ngày khách nhận hàng.  \r\n• LƯU Ý:     \r\n- Nếu có khiếu nại cần hỗ trợ, quý khách CẦN CÓ VIDEO QUAY LẠI QUÁ TRÌNH MỞ HÀNG để đảm bảo vấn đề sẽ được giải quyết 100%', 1),
(12, 4, 'Áo T shirt họa tiết in ngực TRN FSTS014', '400.00', '290.00', 'https://product.hstatic.net/200000690725/product/thiet_ke_chua_co_ten__4__5e90cec1357b4fc299c595896085847c_master.png', 50, '2025-04-12', 'Áo T shirt họa tiết in ngực TRN FSTS014 chính hãng NiOc là mẫu áo thun nam với chất vải cho độ dày dặn, co giãn tốt và quan trọng độ bền màu cao. Giặt không đổ lông hay bay màu, thấm hút mồ hôi và thoải mái không gò bó khi vận động\r\n📍Hướng dẫn sử dụng:\r\n\r\n+ Giặt máy với chu kỳ trung bình và vòng quay ngắn\r\n\r\n+ Giặt với nhiệt độ tối đa 30 độ C\r\n\r\n+ Sấy nhẹ ở nhiệt độ thường\r\n\r\n+ Là ủi không quá 110 độ C\r\n\r\n+ Phơi bằng móc dưới bóng râm\r\n\r\n+ Không sử dụng chất tẩy\r\n\r\n📍 Lưu ý nhỏ:\r\n\r\n+ Không giặt chung với đồ dễ xước\r\n\r\n+ Cẩn thận vướng mắc khi phơi\r\n📌CHÍNH SÁCH ĐỔI:\r\n\r\n• Torano hỗ trợ đổi hàng trong trường hợp: sản phẩm mặc không vừa, khách không ưng sản phẩm đã đặt, sản phẩm có lỗi của nhà sản xuất.  \r\n• Sản phẩm đổi phải đạt điều kiện: còn nguyên tem mác, chưa qua sử dụng, không có vết bẩn, rách…  \r\n• Thời gian đổi: trong vòng 7 NGÀY kể từ ngày khách nhận hàng.  \r\n• LƯU Ý:     \r\n- Nếu có khiếu nại cần hỗ trợ, quý khách CẦN CÓ VIDEO QUAY LẠI QUÁ TRÌNH MỞ HÀNG để đảm bảo vấn đề sẽ được giải quyết 100%.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `phone`, `email`, `password`) VALUES
(1, 'Trương Nguyễn Ánh Tuyết', '0983266771', 'tuyetchi261@gmail.com', '$2y$10$KJCR1nrzt/7lTJqGu.I8tOPdbpCz.7hpMxWUtebMFJAGFMZ9ONS9K'),
(2, 'Trương Nguyễn Ánh Tuyết', '0983266771', 'tuyetchi26@gmail.com', '$2y$10$wQ3QrcfRvOrhRIMP5Fyp4uM0MvMd52wHj391bbA.23uTZIj5GES1a'),
(3, 'Trương Nguyễn Ánh Tuyết', '0983266771', 'tuyetchii@gmail.com', '$2y$10$6Jv3LKBkJ3T6fwCXhHvuR.YRYAb13L7Ahybwcl160cpXDBIqSV/VO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chi_tiet_gio_hangs`
--
ALTER TABLE `chi_tiet_gio_hangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danh-muc` (`id_danh_muc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chi_tiet_gio_hangs`
--
ALTER TABLE `chi_tiet_gio_hangs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_danh_muc`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
