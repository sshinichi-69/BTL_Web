-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2022 lúc 06:15 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `logitech`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`userid`, `productid`, `quantity`) VALUES
(5, 3, 2),
(5, 5, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `type`, `image1`, `image2`, `image3`, `image4`, `name`, `price`, `description`) VALUES
(1, 'mouse', 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g502x-plus/gallery/g502x-plus-gallery-1-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-plus/gallery/g502x-plus-gallery-2-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-plus/gallery/g502x-plus-gallery-3-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-plus/gallery/g502x-plus-gallery-4-black.png?v=1', 'Chuột chơi game G502 Plus', 3899000, 'G502 X PLUS là sự bổ sung mới nhất cho dòng G502 huyền thoại. Được chế tạo lại với các phím switch lai LIGHTFORCE đầu tiên của chúng tôi, LIGHTSPEED không dây cấp độ chuyên nghiệp, LIGHTSYNC RGB, cảm biến HERO 25K v.v.'),
(2, 'mouse', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-corded/gallery/g502x-corded-gallery-1-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-corded/gallery/g502x-corded-gallery-2-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-corded/gallery/g502x-corded-gallery-3-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-corded/gallery/g502x-corded-gallery-4-black.png?v=1', 'Chuột chơi game G502 X', 1899000, 'G502 X là sự bổ sung mới nhất cho dòng G502 huyền thoại. Được thiết kế lại để có mức giảm trọng lượng ấn tượng xuống còn 89 gram. Bao gồm các switch lai quang học-cơ học LIGHTFORCE đầu tiên và cảm biến chính xác đến từng micromet HERO 25K.'),
(3, 'mouse', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-lightspeed/gallery/g502x-lightspeed-gallery-1-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-lightspeed/gallery/g502x-lightspeed-gallery-2-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-lightspeed/gallery/g502x-lightspeed-gallery-3-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-lightspeed/gallery/g502x-lightspeed-gallery-4-black.png?v=1', 'Chuột chơi game không dây LIGHTSPEED G502 X', 3299000, 'G502 X LIGHTSPEED là sự bổ sung mới nhất cho dòng G502 huyền thoại. Bao gồm các phím switch lai quang học-cơ học LIGHTFORCE đầu tiên của chúng tôi và giao thức không dây LIGHTSPEED cập nhật với tốc độ phản hồi nhanh hơn 68% so với thế hệ trước.'),
(4, 'mouse', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/mouse/g705-wireless-mouse/gallery/g705-gallery-1.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/mouse/g705-wireless-mouse/gallery/g705-gallery-2.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/mouse/g705-wireless-mouse/gallery/g705-gallery-3.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/mouse/g705-wireless-mouse/gallery/g705-gallery-4.png?v=1', 'G705', 2499000, 'Từ Bộ sưu tập Cực quang (Aurora), Chuột Chơi game Không dây G705 có hình dáng uốn lượn để tạo sự thoải mái và dễ điều khiển, với thiết kế đặc biệt để nằm trọn trong những lòng bàn tay nhỏ. Bao gồm LIGHTSPEED không dây cấp độ chơi game, LIGHTSYNC RGB, và công nghệ chơi game tiên tiến.'),
(5, 'mouse', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-wireless-mouse/gallery/league-of-legends-pro-wireless-gaming-mouse-gallery-1.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-wireless-mouse/gallery/league-of-legends-pro-wireless-gaming-mouse-gallery-2.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-wireless-mouse/gallery/league-of-legends-pro-wireless-gaming-mouse-gallery-3.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-wireless-mouse/gallery/league-of-legends-pro-wireless-gaming-mouse-gallery-4.png?v=1', 'Chuột không dây Pro', 2799000, 'Con chuột PRO đình đám của chúng tôi với thiết kế League of Legends biểu tượng. Hextech Magic màu xanh dương và Hextech Metal màu vàng tô điểm thêm cho hiệu suất vô song cùng độ chính xác bạn cần để thành công trong Summoner’s Rift.'),
(6, 'keyboard', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/keyboards/g713-keyboard/gallery/g713-gallery-1.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/keyboards/g713-keyboard/gallery/g713-gallery-2.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/keyboards/g713-keyboard/gallery/g713-gallery-3.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/keyboards/g713-keyboard/gallery/g713-gallery-4.png?v=1', 'G713', 4099000, 'Từ Bộ sưu tập Cực quang (Aurora), G713 là bàn phím TKL có dây, nhỏ gọn, được thiết kế để đem lại sự thoải mái với chỗ gác tay mềm mại như mây đi kèm. Được trang bị đầy đủ với ánh sáng RGB tinh tế và lựa chọn các phím switch cơ GX của bạn. Có màu White Mist. Các phụ kiện theo chủ đề màu sắc được bán riêng.'),
(7, 'keyboard', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/keyboards/g715-wireless-keyboard/gallery/g715-gallery-1.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/keyboards/g715-wireless-keyboard/gallery/g715-gallery-2.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/keyboards/g715-wireless-keyboard/gallery/g715-gallery-3.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/keyboards/g715-wireless-keyboard/gallery/g715-gallery-4.png?v=1', 'G715', 4699000, 'Từ Bộ sưu tập Cực quang (Aurora), G715 là bàn phím không dây LIGHTSPEED và Bluetooth® cấp độ chơi game, được thiết kế để đem lại sự thoải mái với chỗ gác tay mềm mại như mây đi kèm. Được trang bị đầy đủ với ánh sáng RGB và lựa chọn các phím switch cơ GX của bạn. Có màu White Mist. Các phụ kiện theo chủ đề màu sắc được bán riêng.'),
(8, 'keyboard', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g413-se/g413-se-gallery-1-new.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g413-se/g413-se-gallery-2-new.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g413-se/g413-se-gallery-3-new.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g413-se/g413-se-gallery-4-new.png?v=1', 'BÀN PHÍM CHƠI GAME CƠ HỌC G413 SE', 1899000, 'Từ các phím switch tactile tới 6 phím nhấn đồng thời chống loạn và mũ phím PBT—bàn phím G413 SE kích thước đầy đủ có hiệu suất và độ bền cần thiết để hoàn thành công việc.'),
(9, 'keyboard', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g413-se-tkl/g413-se-tkl-gallery-1-new.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g413-se-tkl/g413-se-tkl-gallery-2-new.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g413-se-tkl/g413-se-tkl-gallery-3-new.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g413-se-tkl/g413-se-tkl-gallery-4-new.png?v=1', 'BÀN PHÍM CHƠI GAME CƠ HỌC G413 TKL SE', 1599000, 'G413 TKL SE bao gồm các phím switch tactile cơ, 6 phím nhấn đồng thời chống loạn, mũ phím PBT và kết cấu hợp kim nhôm bền bỉ—tất cả trong một thiết kế không có bàn phím số.'),
(10, 'keyboard', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-x-keyboard/gallery/league-of-legends-pro-x-gaming-keyboard-gallery-1.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-x-keyboard/gallery/league-of-legends-pro-x-gaming-keyboard-gallery-2.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-x-keyboard/gallery/league-of-legends-pro-x-gaming-keyboard-gallery-3.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-x-keyboard/gallery/league-of-legends-pro-x-gaming-keyboard-gallery-4.png?v=1', 'BÀN PHÍM PRO', 2990000, 'Chúng tôi phủ lên Bàn phím PRO đã được kiểm nghiệm trong thi đấu bằng các màu sắc League of Legends biểu tượng. Thiết kế nhỏ gọn, không có bàn phím số và các phím switch cấp độ chuyên nghiệp khiến nó trở thành một vũ khí mạnh mẽ cho League of Legends và nhiều hơn nữa.'),
(11, 'audio', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g535-wireless/g535-wireless-gallery-1.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g535-wireless/g535-wireless-gallery-2.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g535-wireless/g535-wireless-gallery-3.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g535-wireless/g535-wireless-gallery-4.png?v=1', 'TAI NGHE CHƠI GAME KHÔNG DÂY LIGHTSPEED G535', 3299000, 'Tận hưởng hiệu suất không dây LIGHTSPEED siêu nhanh. Chơi không cần dây và hoàn toàn thoải mái trong những buổi chơi lâu. Được trang bị đầy đủ với màng loa 40 mm, Chứng nhận Discord và nhiều hơn nữa.'),
(12, 'audio', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/fits/gallery/gallery-1-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/fits/gallery/gallery-2-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/fits/gallery/gallery-3-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/fits/gallery/gallery-4-black.png?v=1', 'FITS', 4099000, 'Tai nghe earbud chơi game không dây FITS true wireless là sự phù hợp hoàn hảo để chơi. Công nghệ LIGHTSPEED không dây cấp độ chuyên nghiệp + Bluetooth® có độ trễ thấp cho phép bạn chơi trên nhiều thiết bị. Công nghệ đúc khuôn LIGHTFORM đem lại sự vừa vặn cho từng cá nhân.'),
(13, 'audio', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/audio/g735-wireless-headset/gallery/g735-gallery-1.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/audio/g735-wireless-headset/gallery/g735-gallery-2.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/audio/g735-wireless-headset/gallery/g735-gallery-3.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/audio/g735-wireless-headset/gallery/g735-gallery-4.png?v=1', 'G735', 5299000, 'Từ Bộ sưu tập Aurora, G735 tối đa hóa sự thoải mái và vừa vặn cho tất cả game thủ, bao gồm cả những người có kích cỡ đầu nhỏ. Chơi thật thoải mái với quai đeo mềm mại như mây và chụp tai có thể xoay được. Nó hoàn hảo cho PC và các thiết bị di động có LIGHTSPEED và Bluetooth® không dây. Có màu White Mist. Các phụ kiện theo chủ đề màu sắc được bán riêng.'),
(14, 'audio', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-x-headset/gallery/league-of-legends-pro-x-gaming-headset-gallery-1.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-x-headset/gallery/league-of-legends-pro-x-gaming-headset-gallery-2.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-x-headset/gallery/league-of-legends-pro-x-gaming-headset-gallery-3.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-x-headset/gallery/league-of-legends-pro-x-gaming-headset-gallery-4.png?v=1', 'TAI NGHE CHƠI GAME PRO X', 3490000, 'Phiên bản đặc biệt của Tai nghe Chơi game PRO X với phong cách Liên Minh Huyền Thoại (League of Legends) chính thức, mang tính biểu tượng. Âm thanh trò chơi rõ như pha lê và việc giao tiếp cấp độ chuyên nghiệp để đạt được hiệu suất cao nhất trong League of Legends.'),
(15, 'audio', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g435/swatches/g435-gaming-headset-gallery-2-1-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g435/swatches/g435-gaming-headset-gallery-2-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g435/swatches/g435-gaming-headset-gallery-4-black.png?v=1', 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g435/swatches/g435-gaming-headset-gallery-5-black.png?v=1', 'G435', 1799000, 'Chơi game và nghe nhạc với sự thoải mái nhẹ nhàng và âm thanh mạnh mẽ, rõ ràng. Các mic tạo chùm kép giúp giảm tạp âm nền. Kết nối các thiết bị của bạn qua LIGHTSPEED không dây cấp độ chơi game và Bluetooth®.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(37) NOT NULL,
  `password` varchar(37) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `first_name` varchar(31) NOT NULL,
  `last_name` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `image`, `created`, `first_name`, `last_name`) VALUES
(1, 'admin', '123', 'admin@somedomain.abc', 'https://upload.wikimedia.org/wikipedia/commons/2/27/Yorushika_Logo.jpg', '0000-00-00 00:00:00', 'Admin', 'Admin'),
(5, 'khanhhq', 'khanhhq', '', 'https://t4.ftcdn.net/jpg/00/65/77/27/240_F_65772719_A1UV5kLi5nCEWI0BNLLiFaBPEkUbv5Fv.jpg', '0000-00-00 00:00:00', 'Khánh', 'H? Qu?c');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`userid`,`productid`),
  ADD KEY `productid` (`productid`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
