-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 29, 2021 lúc 09:14 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`) VALUES
(1, 'namanh@gmail.com', 'c63502a9048bca49cbb7b15d494b463f'),
(2, 'tung@gmail.com', 'c63502a9048bca49cbb7b15d494b463f'),
(3, 'nam@gmail.com', 'c63502a9048bca49cbb7b15d494b463f');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_post`
--

CREATE TABLE `tbl_category_post` (
  `id_category_post` int(11) NOT NULL,
  `title_category_post` varchar(200) NOT NULL,
  `desc_category_post` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_post`
--

INSERT INTO `tbl_category_post` (`id_category_post`, `title_category_post`, `desc_category_post`) VALUES
(44, 'Các tính nắng mới Iphone', 'Các tính nắng mới Iphone nhâts'),
(45, 'Xiaomi ra mắt', 'Xiaomi ra mắt mới'),
(46, 'SamSung phiên bản mới', 'SamSung phiên bản mới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `id_category_product` int(11) NOT NULL,
  `title_category_product` varchar(100) NOT NULL,
  `desc_category_product` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`id_category_product`, `title_category_product`, `desc_category_product`) VALUES
(165, 'Iphone', 'Iphone đời mới'),
(166, 'SamSung', 'SamSung đời mới'),
(167, 'Xiaomi Mi ', 'Xiaomi Mi  mới'),
(168, 'ViVo', 'ViVo mới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(100) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_password` varchar(100) NOT NULL,
  `customer_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_phone`, `customer_email`, `customer_password`, `customer_address`) VALUES
(1, 'nam', '09567', 'doannamanh0503@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ad'),
(2, 'ưea', '234', 'doannamanh0503@gmail.com', '202cb962ac59075b964b07152d234b70', 'ád'),
(3, 'Nguyen Van A', '093467524', 'a@gmail.com', '202cb962ac59075b964b07152d234b70', 'hà nọi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_code`, `order_date`, `order_status`) VALUES
(1, '738', '01/06/21 05:57:24am', 0),
(2, '7011', '01/06/21 10:57:49am', 0),
(3, '971', '17/06/21 09:11:51am', 0),
(4, '489', '17/06/21 09:30:33am', 0),
(5, '2411', '17/06/21 09:31:34am', 0),
(6, '4981', '17/06/21 09:41:51am', 0),
(7, '5922', '17/06/21 09:48:54am', 0),
(8, '3189', '17/06/21 09:50:19am', 0),
(9, '2465', '17/06/21 09:50:33am', 0),
(10, '2748', '17/06/21 09:51:32am', 0),
(11, '8792', '18/06/21 07:59:15am', 0),
(12, '9553', '18/06/21 08:01:50am', 0),
(13, '5202', '18/06/21 08:54:52am', 1),
(14, '6356', '18/06/21 09:26:05am', 0),
(15, '6007', '18/06/21 09:28:43am', 0),
(16, '7084', '18/06/21 09:30:00am', 0),
(17, '8306', '18/06/21 09:39:59am', 0),
(18, '3203', '21/06/21 03:31:02pm', 1),
(19, '3647', '22/06/21 09:49:33am', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_code` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `sodienthoai` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `noidung` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_code`, `product_id`, `product_quantity`, `name`, `sodienthoai`, `email`, `diachi`, `noidung`) VALUES
(1, '2411', 158, 1, '', '22323', 'nam@gmail.com', 'sdasd', 'ád'),
(2, '2411', 159, 1, '', '22323', 'nam@gmail.com', 'sdasd', 'ád'),
(3, '4981', 158, 2, '', '234', 'sdf@gmail.com', 'gdfg', 'sdf'),
(4, '4981', 159, 1, '', '234', 'sdf@gmail.com', 'gdfg', 'sdf'),
(5, '2748', 159, 2, '', '24', 'a@gmail.com', 'sá', 'ádasd'),
(6, '9553', 159, 1, '', '45', 'ád', 'ád', 'ád'),
(7, '5202', 159, 3, '', 'e5345', 'ád', '345', 'ád'),
(8, '5202', 155, 2, '', 'e5345', 'ád', '345', 'ád'),
(9, '5202', 157, 1, '', 'e5345', 'ád', '345', 'ád'),
(10, '6356', 159, 1, '', '23423434', 'ádas', 'ádas', 'áda'),
(11, '6007', 155, 1, '', 'đ', 'ád', 'ád', 'dfdf'),
(12, '7084', 159, 1, 'huy béo', 'qưe', 'qưe', 'qưeqe', 'qe'),
(13, '8306', 159, 2, 'd', 's', 's', 's', 's'),
(14, '3203', 159, 1, 'ád', 'ád', 'ád', 'ád', 'ád'),
(15, '3647', 181, 2, 'ểw', 'sadasd', 'ád', 'ád', 'ád'),
(16, '3647', 180, 1, 'ểw', 'sadasd', 'ád', 'ád', 'ád');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id_post` int(11) NOT NULL,
  `title_post` varchar(200) NOT NULL,
  `content_post` text NOT NULL,
  `image_post` varchar(200) NOT NULL,
  `id_category_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id_post`, `title_post`, `content_post`, `image_post`, `id_category_post`) VALUES
(87, 'Sản phẩm Iphone 10', 'Cho dù dung lượng pin bị giảm chút ít, nhưng Apple lại đánh giá pin của iPhone 6S và 6S Plus có tuổi thọ trung bình gần giống những người tiền nhiệm.[25] Bộ vi xử lý A9 được duy trì lõi kép của TSMC và Samsung. Mặc dù có những tin đồn rằng phiên bản Samsung ăn pin nhiều hơn so với phiên bản của TSMC, nhưng nhiều bài test đã chỉ ra răng không có sự khác biệt đáng kể giữa hai loại chip.[26][27] Cho dù không chính thức được xác thực, iPhone 6S có khả năng chịu nước nhờ những thay đổi về thiết kế bên trong, vòng đệm cao su chạy quanh thân máy và bo mạch chủ. Chi tiết này giúp hạn chế nước từ ngoài chảy vào các linh kiện điện tử bên trong[28]\r\n\r\nMàn hình giữ nguyên thông số so với iPhone 6, màn hình 4.7 inch cùng độ phân giải 750p và màn hình 5.5 inch với độ phân giải 1080p (Plus). iPhone 6S được trạng bị thêm tính năng mới, được biết đến với tên gọi 3D Touch, cảm ứng nhận biết lực nhấn. Apple đưa lên iPhone 6S ba mức cảm ứng lực là yếu, vừa và mạnh, mỗi lực nhấn là một tác vụ, một chức năng khác nhau đối với từng ứng dụng. 3D Touch được kết hợp với Taptic Engine sẽ phản hồi lại người dùng bằng cách rung lên.[29] Mặc dù có nhiều điểm tương tự, tính năng khác biệt hoàn toàn công nghệ Force Touch sử dụng trên những chiếc Apple Watch và MacBook, vì nó nhạy hơn Force Touch và cảm ứng nhận được nhiều lực nhấn khác.[30][31] Vì có những linh cần thiết để thực hiện tính năng 3D Touch, iPhone 6S nặng hơn so với thế hệ trước.', 'iphone21620606412.jpg', 42),
(88, 'Sản phẩm Iphone 11', 'Nilay Patel của The Verge năm 2015 đã mô tả 6S, đặc biệt là mẫu Plus là \"điện thoại tốt nhất trên thị trường bây giờ.... Không có công ty nào khác có thể tung ra một tính năng như 3D Touch và làm cho nó hoạt động theo cách gợi ý tạo ra các mô hình giao diện hoàn toàn mới và mọi nhà sản xuất điện thoại khác cần tìm hiểu chính xác lý do tại sao camera của Apple rất phù hợp trước khi chúng thực sự có thể cạnh tranh.\"[36] Samuel Gibbs của The Guardian nhận xét rằng điện thoại \"có tiềm năng trở thành điện thoại thông minh bán chạy nhất trên thị trường, nhưng thời lượng pin của nó gây thất vọng sâu sắc\" và mô tả camera này là \"không đi trước đối thủ nữa\".[37] Tom Salinger của The Register đã ca ngợi hiệu năng, lưu ý rằng \"chúng tôi hiện đang sử dụng điện thoại có hiệu năng của PC\", nhưng mô tả 3D Touch \"chỉ là một máy rung được tôn vinh\" và \"không tốt... bạn vẫn không biết điều gì sẽ xảy ra cho đến khi bạn thử nó \".[38] Ryan Smith và Joshua Ho của AnandTech đã trao tặng iPhone 6S và 6S Plus Giải thưởng Editors\' Choice Gold Award, chủ yếu dựa trên hiệu năng của thiết bị và bổ sung 3D Touch.[39]', 'iphone31620606507.jpg', 42),
(89, 'Sản phẩm Iphone 12', 'Vào tháng 11 năm 2016, Apple đã thông báo rằng \"một số lượng rất nhỏ\" các thiết bị iPhone 6S được sản xuất từ ​​tháng 9 đến tháng 10 năm 2015 có pin bị lỗi đột ngột ngừng hoạt động. Mặc dù Apple lưu ý rằng các vấn đề về pin \"không phải là vấn đề an toàn\", họ đã công bố chương trình thay pin cho các thiết bị bị ảnh hưởng. Khách hàng có thiết bị bị ảnh hưởng, trải rộng \"phạm vi số sê-ri giới hạn\", có thể kiểm tra số sê-ri thiết bị của họ trên trang web của Apple và nếu bị ảnh hưởng, họ sẽ được thay pin miễn phí tại Apple Store hoặc các nhà cung cấp dịch vụ ủy quyền Apple.', 'iphone11620606628.jpg', 42),
(90, 'Iphon 5 lỗi ', 'Vào tháng 11 năm 2016, Apple đã thông báo rằng \"một số lượng rất nhỏ\" các thiết bị iPhone 6S được sản xuất từ ​​tháng 9 đến tháng 10 năm 2015 có pin bị lỗi đột ngột ngừng hoạt động. Mặc dù Apple lưu ý rằng các vấn đề về pin \"không phải là vấn đề an toàn\", họ đã công bố chương trình thay pin cho các thiết bị bị ảnh hưởng. Khách hàng có thiết bị bị ảnh hưởng, trải rộng \"phạm vi số sê-ri giới hạn\", có thể kiểm tra số sê-ri thiết bị của họ trên trang web của Apple và nếu bị ảnh hưởng, họ sẽ được thay pin miễn phí tại Apple Store hoặc các nhà cung cấp dịch vụ ủy quyền Apple.', '320px-IPhone_5s1620606683.png', 43),
(91, 'Mẹo đơn giản tăng tốc iPhone và Android', '<h1><strong>Giải ph&oacute;ng bộ nhớ iPhone</strong></h1>\r\n\r\n<p>D&ugrave; bộ nhớ iPhone lớn tới đ&acirc;u, n&oacute; cũng ch&oacute;ng đầy với tốc độ chụp ảnh, quay phim, lưu t&agrave;i liệu&hellip; của người d&ugrave;ng. Đến một l&uacute;c n&agrave;o đ&oacute;, bạn sẽ li&ecirc;n tục nh&igrave;n thấy th&ocirc;ng b&aacute;o sắp hết bộ nhớ nếu kh&ocirc;ng trả th&ecirc;m tiền để mua dung lượng.</p>\r\n\r\n<p>Ngo&agrave;i ảnh, video, ứng dụng cũng l&agrave; một thứ ngốn bộ nhớ iPhone. Chẳng hạn, ứng dụng Messages giữ lại bản sao c&aacute;c tập đ&iacute;nh k&egrave;m như ảnh, video, nội dung m&agrave; người kh&aacute;c gửi tới. Nếu cuộc tr&ograve; chuyện nh&oacute;m d&agrave;i, chứa nhiều nội dung đa phương tiện, n&oacute; sẽ chiếm dụng kh&ocirc;ng gian kh&ocirc;ng nhỏ.</p>\r\n\r\n<p>Để biết được thứ g&igrave; đang d&ugrave;ng nhiều dung lượng nhất tr&ecirc;n thiết bị iOS, bạn v&agrave;o Settings &gt; General &gt; iPhone Storage. Tại đ&acirc;y, bạn sẽ nh&igrave;n thấy &ldquo;thủ phạm&rdquo; cũng như danh s&aacute;ch c&aacute;c ứng dụng v&agrave; bộ nhớ của ch&uacute;ng. Danh s&aacute;ch được xếp theo thứ tự từ nhiều nhất đến &iacute;t nhất. Một mẹo m&agrave; bạn c&oacute; thể chưa biết đ&oacute; ch&iacute;nh l&agrave; x&oacute;a ứng dụng rồi c&agrave;i lại. V&iacute; dụ, ứng dụng Facebook lưu trữ h&agrave;ng n&uacute;i th&ocirc;ng tin. Những g&igrave; bạn cần l&agrave;m l&agrave; x&oacute;a Facebook khỏi thiết bị, sau đ&oacute; tải v&agrave; c&agrave;i lại. Tiếp đ&oacute;, để x&oacute;a c&aacute;c tập đ&iacute;nh k&egrave;m trong Messages, bạn mở ứng dụng rồi bấm v&agrave;o một cuộc tr&ograve; chuyện. Bấm v&agrave;o biểu tượng của li&ecirc;n hệ, chọn Info. Cuộn xuống v&agrave; xem người đ&oacute; đ&atilde; gửi cho bạn những g&igrave;, bấm v&agrave;o See All, chọn tất cả nội dung muốn x&oacute;a rồi bấm Delete.</p>\r\n\r\n<h1><strong>X&oacute;a tập đ&iacute;nh k&egrave;m tr&ecirc;n Android</strong></h1>\r\n\r\n<p>Vấn đề hết dung lượng kh&ocirc;ng chỉ của ri&ecirc;ng iPhone m&agrave; c&ograve;n tr&ecirc;n cả Android. Giải ph&oacute;ng bộ nhớ sẽ gi&uacute;p m&aacute;y chạy nhanh hơn đ&aacute;ng kể. Đầu ti&ecirc;n, h&atilde;y gỡ bỏ bất kỳ ứng dụng n&agrave;o bạn kh&ocirc;ng d&ugrave;ng tới. Mở Settings &gt; Apps/Apps and notifications rồi bấm v&agrave;o ứng dụng muốn x&oacute;a. Tiếp theo, loại bỏ c&aacute;c tập tin đang ngốn kh&ocirc;ng gian thiết bị. Mở ứng dụng Files &gt; Browse &gt; Images/Video. Tại thanh ngang tr&ecirc;n c&ugrave;ng, cuộn sang tr&aacute;i để t&igrave;m thư mục Messages, bấm v&agrave;o đ&acirc;y.</p>\r\n\r\n<p>Trong n&agrave;y, bạn bấm v&agrave;o bất kỳ h&igrave;nh ảnh n&agrave;o muốn x&oacute;a rồi chọn biểu tượng th&ugrave;ng r&aacute;c. Thiết bị sẽ y&ecirc;u cầu bạn x&aacute;c nhận, sau đ&oacute; bấm Delete. Bạn cũng c&oacute; thể x&oacute;a c&aacute;c tập tin tạm thời, ảnh chụp m&agrave;n h&igrave;nh cũ, tập tin lớn trong Files. Mở ứng dụng Files &gt; Clean rồi cuộn qua c&aacute;c lựa chọn để x&oacute;a tập tin r&aacute;c, m&agrave;n h&igrave;nh, tải xuống&hellip; Chạm v&agrave;o một mục để x&oacute;a từng tập tin một hoặc x&oacute;a tất cả.</p>\r\n', '231624324822.jpg', 44),
(92, 'Apple tiếp tục chứng minh mình  luôn làm tốt hơn', '<p>Khi chiếc smartphone 5G đầu ti&ecirc;n ra mắt v&agrave;o đầu năm 2019, những tin đồn về iPhone 11 tiết lộ rằng Apple sẽ kh&ocirc;ng gia nhập cuộc chơi n&agrave;y, &iacute;t nhất l&agrave; v&agrave;o thời điểm đ&oacute;. C&aacute;c đối thủ của Apple đ&atilde; li&ecirc;n tiếp ra mắt những mẫu smartphone Android 5G cao cấp trong năm 2019 v&agrave; 2020, cho đến khi Apple cuối c&ugrave;ng cũng ra mắt chiếc iPhone 5G đầu ti&ecirc;n của m&igrave;nh v&agrave;o th&aacute;ng 10.</p>\r\n\r\n<p>Apple đ&atilde; trang bị cho cả 4 mẫu iPhone 12 chip modem 5G, v&agrave; iPhone 12 đ&atilde; b&aacute;n chạy hơn bất kỳ một mẫu iPhone n&agrave;o kh&aacute;c trước đ&acirc;y. B&aacute;o c&aacute;o mới nhất cho thấy iPhone 12 của Apple thống trị thị trường smartphone 5G tr&ecirc;n to&agrave;n cầu, cho d&ugrave; gia nhập muộn hơn c&aacute;c h&atilde;ng smartphone Android kh&aacute;c.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/203336854389633024/2021/6/18/photo-1-16239904252871211062950.jpg\" target=\"_blank\"><img alt=\"Apple tiếp tục chứng minh mình là kẻ đi sau các hãng smartphone Android, nhưng luôn làm tốt hơn - Ảnh 1.\" src=\"https://kenh14cdn.com/thumb_w/620/203336854389633024/2021/6/18/photo-1-16239904252871211062950.jpg\" /></a></p>\r\n\r\n<p>Theo dữ liệu của Strategy Analytics, Apple đ&atilde; b&aacute;n được 52,2 triệu chiếc iPhone 12 trong Q4/2020, vượt trội hơn mọi smartphone Android 5G kh&aacute;c. Apple chiếm tới 41% thị trường smartphone 5G trong khoảng thời gian 3 th&aacute;ng, trong khi chỉ c&oacute; khoảng 2 th&aacute;ng để b&aacute;n iPhone 12 trong Q4/2020.</p>\r\n\r\n<p>Dữ liệu n&agrave;y đ&atilde; loại bỏ ho&agrave;n to&agrave;n quan điểm rằng việc tham gia thị trường 5G sớm sẽ mang lại lợi thế cho c&aacute;c h&atilde;ng smartphone Android. Apple lại một lần nữa cho thấy rằng m&igrave;nh l&agrave; kẻ đi sau c&aacute;c h&atilde;ng smartphone Android, nhưng lu&ocirc;n l&agrave;m tốt hơn rất nhiều.</p>\r\n\r\n<p>Strategy Analytics dự đo&aacute;n rằng doanh số smartphone 5G trong năm 2021 sẽ đạt 624 triệu chiếc, cao hơn nhiều so với doanh số 269 triệu chiếc của năm 2020.</p>\r\n\r\n<p>Trong Q1/2021, doanh số iPhone 12 vẫn đứng đầu trong số c&aacute;c smartphone 5G, với 40,4 triệu chiếc đ&atilde; được b&aacute;n ra, chiếm 30% doanh số smartphone 5G to&agrave;n cầu. Apple cũng chiếm phần lớn lợi nhuận trong thị trường smartphone 5G n&agrave;y.</p>\r\n', '241624326308.jpg', 44),
(93, 'Apple trở lại Trung Quốc để sản xuất iPhone?', '<p>C&aacute;c nh&agrave; ph&acirc;n t&iacute;ch cho rằng Foxconn gia tăng tuyển dụng nh&acirc;n c&ocirc;ng để sản xuất h&agrave;ng loạt c&aacute;c sản phẩm mới của Apple, bao gồm cả iPhone 13. Hoạt động sản xuất cho Apple quay trở lại Trung Quốc bởi COVID-19 đang b&ugrave;ng ph&aacute;t mạnh mẽ ở Ấn Độ v&agrave; một số quốc gia kh&aacute;c.</p>\r\n\r\n<p>Nh&agrave; m&aacute;y Foxconn ở Trịnh Ch&acirc;u, H&agrave; Nam, miền trung Trung Quốc đ&atilde; quyết định tăng gấp đ&ocirc;i tiền thưởng cho người lao động l&ecirc;n 6.000 tệ (940 USD) so với 3.500 tệ/người v&agrave;o cuối th&aacute;ng 5. Những lao động mới được tuyển dụng sẽ nhận được số tiền thưởng n&agrave;y nếu họ l&agrave;m việc &iacute;t nhất 55 ng&agrave;y trong khoảng thời gian d&agrave;i hơn 90 ng&agrave;y.</p>\r\n\r\n<p>Một nguồn tin th&acirc;n cận với hoạt động tuyển dụng của Foxconn cho biết một số nh&agrave; m&aacute;y của Foxconn ở Trung Quốc thậm ch&iacute; c&ograve;n thưởng th&ecirc;m 10.000 tệ nếu những người mới được tuyển dụng đồng &yacute; l&agrave;m việc trong &iacute;t nhất 150 ng&agrave;y.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/203336854389633024/2021/6/20/photo-1-1624161005032491239777.jpg\" target=\"_blank\"><img alt=\"Apple trở lại Trung Quốc để sản xuất iPhone? - Ảnh 1.\" src=\"https://kenh14cdn.com/thumb_w/620/203336854389633024/2021/6/20/photo-1-1624161005032491239777.jpg\" /></a></p>\r\n\r\n<p>&quot;<em>T&igrave;nh trạng thiếu hụt lao động nghi&ecirc;m trọng khiến việc tuyển dụng diễn ra kh&ocirc;ng ngừng từ đầu năm tới nay</em>&quot;, nguồn tin cho biết trong điều kiện giấu t&ecirc;n.</p>\r\n\r\n<p>Luffy Lin, chuy&ecirc;n gia ph&acirc;n t&iacute;ch của Witdisplay - một nền tảng tư vấn ng&agrave;nh c&ocirc;ng nghiệp điện tử, cho rằng Foxconn đẩy mạnh tuyển dụng ở Trung Quốc để sản xuất c&aacute;c sản phẩm mới cho Apple, bao gồm cả iPhone 13, nhằm đảm bảo nguồn cung khi sản phẩm được tung ra thị trường.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;<em>Trước đ&acirc;y, một số đơn h&agrave;ng của Apple, chẳng hạn như iPhone 12, được sản xuất ở Ấn Độ. Tuy nhi&ecirc;n, đại dịch ho&agrave;nh h&agrave;nh ở quốc gia đ&ocirc;ng d&acirc;n thứ 2 thế giới đ&atilde; l&agrave;m gi&aacute;n đoạn chuỗi cung ứng v&agrave; c&aacute;c hoạt động sản xuất. V&igrave; vậy, hầu hết c&aacute;c đơn h&agrave;ng mới của Apple sẽ do c&aacute;c nh&agrave; m&aacute;y Foxconn ở Trung Quốc đảm tr&aacute;ch</em>&quot;, Lin nhận định.</p>\r\n\r\n<p>Theo lời của chuy&ecirc;n gia n&agrave;y, c&aacute;c nh&agrave; m&aacute;y của Foxconn ở Trịnh Ch&acirc;u v&agrave; Th&acirc;m Quyến c&oacute; thể sẽ chỉ sản xuất iPhone 13.</p>\r\n', '251624327119.jpg', 44),
(94, 'Iphone 13 ra mắt', '<p>Ch&uacute;ng ta đ&atilde; c&ugrave;ng nhau trải qua nửa đầu của năm 2021 với nhiều biến động kh&oacute; lường, kh&ocirc;ng chỉ ri&ecirc;ng mỗi đại dịch COVID-19 m&agrave; cả &ocirc;ng lớn&nbsp;<a href=\"https://kenh14.vn/apple-cuoi-cung-da-cho-ifan-duoc-chon-cap-nhat-he-dieu-hanh-moi-hoac-chi-cap-nhat-bao-mat-20210615145921897.chn\" target=\"_blank\">Apple</a>&nbsp;cũng l&agrave;m cho iFan khắp thế giới phải đi hết từ bất ngờ n&agrave;y đến bất ngờ kh&aacute;c.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/203336854389633024/2021/6/16/how-to-watch-apples-april-event-16237803878642003749265.jpg\"><img alt=\"Không chỉ có iPhone 13 và AirPods, Apple sẽ còn ra mắt rất nhiều sản phẩm mới trong năm 2021? - Ảnh 1.\" src=\"https://kenh14cdn.com/thumb_w/620/203336854389633024/2021/6/16/how-to-watch-apples-april-event-16237803878642003749265.jpg\" style=\"width:580px\" /></a></p>\r\n\r\n<p><em>Sự kiện Spring Loaded diễn ra v&agrave;o th&aacute;ng 4 vừa qua đ&atilde; khiến kh&ocirc;ng &iacute;t iFan phải &quot;ng&acirc;y ngất&quot;</em></p>\r\n\r\n<p>Trong sự kiện Spring Loaded diễn ra v&agrave;o giữa th&aacute;ng 4, Apple đ&atilde; khiến cả thế giới phải &quot;đi&ecirc;n đảo&quot; theo đ&uacute;ng nghĩa đen khi t&iacute;ch hợp một bộ xử l&yacute; d&agrave;nh cho laptop l&ecirc;n mẫu m&aacute;y t&iacute;nh bảng iPad Pro cao cấp của h&atilde;ng. Ngo&agrave;i ra &quot;T&aacute;o Mỹ&quot; cũng ra mắt thiết bị theo d&otilde;i th&ocirc;ng minh AirTag, iMac 24 inch 2021 v&agrave; t&ugrave;y chọn m&agrave;u T&iacute;m mới d&agrave;nh cho iPhone 12 v&agrave; iPhone 12 mini.</p>\r\n\r\n<p>Nhưng Apple sẽ c&ograve;n tiếp tục ra mắt th&ecirc;m rất nhiều sản phẩm nữa trong năm nay, bao gồm:</p>\r\n\r\n<h2>iPhone 13 Series - Sản phẩm được mong đợi bậc nhất năm 2021</h2>\r\n\r\n<p>Trước cả thời điểm iPhone 12 Series được ch&iacute;nh thức ra mắt, những th&ocirc;ng tin r&ograve; rỉ về người kế nhiệm đ&atilde; được lan truyền khắp c&aacute;c mặt b&aacute;o v&agrave; ch&uacute;ng chỉ đang ng&agrave;y c&agrave;ng nhiều th&ecirc;m.</p>\r\n\r\n<p>Theo đ&oacute;, iPhone 13 Series sẽ c&oacute; tổng cộng 4 thiết bị tương tự người tiền nhiệm. Tuy nhi&ecirc;n vẫn chưa r&otilde; Apple sẽ gọi d&ograve;ng sản phẩm n&agrave;y l&agrave; iPhone 12s hay iPhone 13, v&igrave; con số 13 theo văn h&oacute;a của c&aacute;c nước phương T&acirc;y l&agrave; biểu tượng của sự xui xẻo.</p>\r\n\r\n<p>Ngoại h&igrave;nh của c&aacute;c thiết bị sẽ kh&ocirc;ng c&oacute; qu&aacute; nhiều điểm kh&aacute;c biệt so với thế hệ iPhone 12. Tuy nhi&ecirc;n, c&oacute; nhiều th&ocirc;ng tin cho rằng 2 camera tr&ecirc;n iPhone 13 v&agrave; 13 mini sẽ được đặt so le với nhau, thay v&igrave; song song như hiện tại.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/203336854389633024/2021/6/16/iphone-13-lai-lo-mau-moi-rose-pink-cuc-nu-tinh-ee6a3219-16237810737341386453890.jpg\" target=\"_blank\"><img alt=\"Không chỉ có iPhone 13 và AirPods, Apple sẽ còn ra mắt rất nhiều sản phẩm mới trong năm 2021? - Ảnh 2.\" src=\"https://kenh14cdn.com/thumb_w/620/203336854389633024/2021/6/16/iphone-13-lai-lo-mau-moi-rose-pink-cuc-nu-tinh-ee6a3219-16237810737341386453890.jpg\" style=\"width:580px\" /></a></p>\r\n\r\n<p><em>Một h&igrave;nh ảnh concept iPhone 13 m&agrave;u hồng xuất hiện gần đ&acirc;y</em></p>\r\n', '261624327390.jpg', 44),
(95, 'Xiaomi Mi 12 Ultra lộ thông số', '<p>Xiaomi hiện đang l&agrave; nh&agrave; sản xuất smartphone lớn thứ 3 tr&ecirc;n thế giới, b&aacute;m rất s&aacute;t Apple v&agrave; c&ograve;n đặt ra tham vọng trong tương lai l&agrave; trở th&agrave;nh số 1. V&igrave; vậy m&agrave; sự kỳ vọng v&agrave;o những chiếc smartphone flagship tiếp theo của Xiaomi l&agrave; rất lớn. Sau th&agrave;nh c&ocirc;ng với Mi 11, Xiaomi chuẩn bị ra mắt Mi 12 với nhiều cải tiến đ&aacute;ng gi&aacute;.</p>\r\n\r\n<p>Ng&agrave;y h&ocirc;m nay, một v&agrave;i th&ocirc;ng số kỹ thuật của Xiaomi Mi 12 Ultra đ&atilde; bị r&ograve; rỉ, đ&acirc;y l&agrave; phi&ecirc;n bản cao cấp nhất. Mi 12 Ultra cũng sẽ l&agrave; smartphone đầu ti&ecirc;n tr&ecirc;n thế giới được trang bị chip xử l&yacute; Snapdragon 895 5nm của Qualcomm. Trước đ&oacute;, Mi 11 cũng l&agrave; smartphone đầu ti&ecirc;n được trang bị chip Snapdragon 888.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Xiaomi Mi 12 Ultra lộ thông số kỹ thuật với chip xử lý Snapdragon 895 - Ảnh 1.\" src=\"https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/6/14/photo-1-1623655018786154340031.jpg\" /></p>\r\n\r\n<p>Mi 12 Ultra sẽ được trang bị m&agrave;n h&igrave;nh hiển thị chất lượng cao với độ ph&acirc;n giải 2K. Ngo&agrave;i ra, Xiaomi sẽ n&acirc;ng cấp l&ecirc;n với c&ocirc;ng nghệ LTPO th&iacute;ch ứng, gi&uacute;p điều chỉnh tần số m&agrave;n h&igrave;nh trong phạm vi 0 - 120Hz. T&iacute;nh năng mới n&agrave;y hứa hẹn sẽ gi&uacute;p chiếc smartphone tiết kiệm đ&aacute;ng kể thời lượng pin.</p>\r\n\r\n<p>Đối với camera sau, Xiaomi c&oacute; thể sẽ sử dụng ống k&iacute;nh c&oacute; thể thu ph&oacute;ng giống như m&aacute;y ảnh. C&ocirc;ng nghệ v&agrave; ống k&iacute;nh sẽ do Xiaomi tự ph&aacute;t triển, hứa hẹn cải thiện khả năng zoom v&agrave; lấy n&eacute;t của camera. Ngo&agrave;i ra, Mi 12 Ultra cũng sẽ c&oacute; khả năng chống nước v&agrave; bụi chuẩn IP68.</p>\r\n', '271624328224.webp', 45),
(96, 'Sạc nhanh  của Xiaomi', '<h2>Pin của smartphone Xiaomi c&oacute; thể giảm xuống chỉ c&ograve;n 80% dung lượng sau 2 năm.</h2>\r\n\r\n<p>Th&aacute;ng trước, Xiaomi đ&atilde; ra mắt c&ocirc;ng nghệ sạc nhanh 200W, tạo ra một bước tiến vượt bậc so với c&ocirc;ng nghệ sạc nhanh 120W đ&atilde; c&oacute; tr&ecirc;n một v&agrave;i mẫu smartphone. Xiaomi cho biết với c&ocirc;ng nghệ sạc nhanh 200W, smartphone với dung lượng pin 4.000 mAh c&oacute; thể sạc đầy chỉ trong v&ograve;ng 8 ph&uacute;t. Tuy nhi&ecirc;n, c&aacute;i gi&aacute; phải trả về l&acirc;u d&agrave;i cũng kh&aacute; đắt.</p>\r\n\r\n<p>Tr&ecirc;n trang Weibo của c&ocirc;ng ty, Xiaomi đ&atilde; được hỏi về những ảnh hưởng của việc sạc pin với c&ocirc;ng suất 200W trong thời gian d&agrave;i. H&atilde;ng smartphone Trung Quốc trả lời rằng với 800 chu kỳ sạc bằng c&ocirc;ng nghệ sạc nhanh 200W c&oacute; thể dẫn đến việc dung lượng pin giảm xuống chỉ c&ograve;n 80% so với ban đầu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Sạc nhanh 200W của Xiaomi sẽ làm giảm dung lượng pin khá nhanh - Ảnh 1.\" src=\"https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/6/11/photo-1-16233969357121283261698.jpg\" /></p>\r\n\r\n<p>800 chu kỳ sạc tương ứng với khoảng hơn hai năm sử dụng của một chiếc smartphone. Tương ứng, một chiếc smartphone c&oacute; dung lượng pin 4.000 mAh sẽ chỉ c&ograve;n thực tế l&agrave; 3.200 mAh sau hai năm sử dụng. Một chiếc smartphone c&oacute; dung lượng pin 5.000 mAh sẽ chỉ c&ograve;n 4.000 mAh, một mức giảm đ&aacute;ng kể.</p>\r\n\r\n<p>Tuy nhi&ecirc;n ngay cả như vậy, mức sụt giảm dung lượng pin của Xiaomi vẫn cao hơn nhiều so với ti&ecirc;u chuẩn tại Trung Quốc. Theo quy định, mức sụt giảm pin phải đảm bảo vẫn c&ograve;n ở mức 60% sau 400 chu kỳ sạc. Mặc d&ugrave; đ&acirc;y l&agrave; một ti&ecirc;u chuẩn thấp đến mức v&ocirc; l&yacute;.</p>\r\n\r\n<p>Năm ngo&aacute;i, OPPO cũng c&ocirc;ng bố mức sụt giảm dung lượng pin khi sử dụng c&ocirc;ng nghệ sạc nhanh 125W của m&igrave;nh. Mức sụt giảm n&agrave;y tương đương với c&ocirc;ng nghệ sạc 200W của Xiaomi, giảm c&ograve;n 80% sau 800 chu kỳ sạc. Tuy nhi&ecirc;n, đối với sạc nhanh 65W của OPPO, th&igrave; mức sụt giảm thấp hơn, c&ograve;n khoảng 91% sau 800 chu kỳ sạc.</p>\r\n', '281624328328.jpg', 45),
(97, 'Lộ nâng cấp lớn nhất trên Samsung Galaxy Z Fold 3', '<h2>Galaxy Z Fold 3 sẽ l&agrave; smartphone đầu ti&ecirc;n của Samsung c&oacute; camera selfie ẩn b&ecirc;n dưới m&agrave;n h&igrave;nh.</h2>\r\n\r\n<p>V&agrave;o đầu th&aacute;ng 8 tới đ&acirc;y, Samsung sẽ ra mắt hai chiếc smartphone m&agrave;n h&igrave;nh gập mới của m&igrave;nh, đ&oacute; l&agrave; Galaxy Z Fold 3 v&agrave; Galaxy Z Flip 3. Hai chiếc smartphone m&agrave;n h&igrave;nh gập tiếp theo của Samsung sẽ được n&acirc;ng cấp đ&aacute;ng kể, cải thiện chất lượng gia c&ocirc;ng v&agrave; độ bền. Trong đ&oacute;, Galaxy Z Fold 3 sẽ c&oacute; một n&acirc;ng cấp rất lớn.</p>\r\n\r\n<p>Galaxy Z Fold 3 sẽ được trang bị k&iacute;nh bảo vệ Ultra Thin Glass thế hệ thứ hai của Samsung, v&agrave; c&oacute; hỗ trợ b&uacute;t S-Pen. Fold 3 cũng sẽ l&agrave; chiếc smartphone đầu ti&ecirc;n của Samsung c&oacute; camera ẩn b&ecirc;n dưới m&agrave;n h&igrave;nh hiển thị. Samsung tiết lộ rằng c&ocirc;ng nghệ camera ẩn b&ecirc;n dưới m&agrave;n h&igrave;nh sẽ được &aacute;p dụng cho nhiều thiết bị kh&aacute;c của h&atilde;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Lộ nâng cấp lớn nhất trên Samsung Galaxy Z Fold 3 - Ảnh 1.\" src=\"https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/6/21/photo-1-1624244587316305111655.jpg\" /></p>\r\n\r\n<p>Theo nguồn tin của LetsGoDigital, Samsung đ&atilde; đăng k&yacute; nhiều bằng s&aacute;ng chế kh&aacute;c nhau, m&agrave; m&ocirc; tả r&otilde; thiết kế v&agrave; t&iacute;nh năng của chiếc smartphone m&agrave;n h&igrave;nh gập Galaxy Z Fold 3. Trong đ&oacute;, c&oacute; thể thấy cả bằng s&aacute;ng chế về camera ẩn dưới m&agrave;n h&igrave;nh v&agrave; cảm biến v&acirc;n tay ẩn dưới m&agrave;n h&igrave;nh.</p>\r\n\r\n<p>Cảm biến v&acirc;n tay dưới m&agrave;n h&igrave;nh kh&ocirc;ng phải l&agrave; một c&ocirc;ng nghệ mới, nhưng n&oacute; lại chưa xuất hiện tr&ecirc;n chiếc smartphone m&agrave;n h&igrave;nh gập n&agrave;o của Samsung. Bằng s&aacute;ng chế của Samsung m&ocirc; tả rằng cảm biến v&acirc;n tay dưới m&agrave;n h&igrave;nh kh&ocirc;ng thể đặt ở ch&iacute;nh giữa. Điều đ&oacute; cũng dễ hiểu do đ&acirc;y l&agrave; vị tr&iacute; đặt bản lề gập, cũng l&agrave; l&yacute; do v&igrave; sao camera selfie của Fold kh&ocirc;ng đặt ở vị tr&iacute; ch&iacute;nh giữa.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Lộ nâng cấp lớn nhất trên Samsung Galaxy Z Fold 3 - Ảnh 2.\" src=\"https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/6/21/photo-1-16242445955351381936370.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Samsung sẽ trang bị kh&ocirc;ng chỉ một, m&agrave; l&agrave; nhiều cảm biến ấn dưới m&agrave;n h&igrave;nh. C&aacute;c cảm biến camera n&agrave;y được kết nối với một bộ phận ph&aacute;t s&aacute;ng v&agrave; đ&egrave;n flash ở ph&iacute;a trước. Camera selfie ẩn dưới m&agrave;n h&igrave;nh cũng sẽ kh&ocirc;ng nằm ở ch&iacute;nh giữa, m&agrave; nằm tr&ecirc;n nửa m&agrave;n h&igrave;nh b&ecirc;n phải.</p>\r\n\r\n<p>C&ograve;n về thiết kế tổng thể th&igrave; Galaxy Z Fold 3 vẫn sẽ giống với Galaxy Z Fold 2. Tuy nhi&ecirc;n cụm camera sau c&oacute; thể sẽ được n&acirc;ng cấp v&agrave; thay đổi thiết kế giống như Galaxy S21 series.</p>\r\n', '291624328468.jpg', 46),
(98, 'Camera dưới màn hình trên Galaxy Z Fold3', '<h2 style=\"font-style:normal\">C&oacute; vẻ như chất lượng của camera ẩn tr&ecirc;n Z Fold3 sẽ kh&ocirc;ng được như người d&ugrave;ng mong đợi.</h2>\r\n\r\n<p>Chiếc smartphone m&agrave;n h&igrave;nh gập sắp ra mắt của Samsung, Galaxy Z Fold 3, được cho l&agrave; sẽ c&oacute; camera ẩn dưới m&agrave;n h&igrave;nh. Z Fold l&agrave; d&ograve;ng smartphone cao cấp v&agrave; người d&ugrave;ng hy vọng thế hệ mới nhất sẽ đ&aacute;nh dấu bước nhảy vọt trong c&ocirc;ng nghệ camera dưới m&agrave;n h&igrave;nh, vốn đ&atilde; được nhiều nh&agrave; sản xuất kh&aacute;c thực hiện, nhưng vẫn chưa thể gọi l&agrave; tốt. Tuy nhi&ecirc;n, c&oacute; vẻ như chất lượng của camera ẩn tr&ecirc;n Z Fold 3 sẽ kh&ocirc;ng được như người d&ugrave;ng mong đợi.</p>\r\n\r\n<p>Vấn đề n&agrave;y kh&aacute; giống với camera dưới m&agrave;n h&igrave;nh tr&ecirc;n ZTE Axon 20 5G (b&ecirc;n dưới), cho thấy d&ugrave; c&oacute; thể l&agrave; c&oacute; khả năng chụp ảnh tốt hơn, nhưng camera ẩn của Z Fold 3 sẽ kh&ocirc;ng thật sự ẩn một c&aacute;ch tuyệt đẹp như mong đợi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Camera dưới màn hình trên Galaxy Z Fold3 dễ bị nhìn thấy, gây chú ý hơn cả màn hình đục lỗ - Ảnh 3.\" src=\"https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/6/19/screen-shot-2021-06-19-at-144535-16240887511231238093372.jpg\" style=\"width:625px\" /></p>\r\n\r\n<p>Tuy nhi&ecirc;n, đ&aacute;ng ch&uacute; &yacute; l&agrave; phần n&agrave;y chỉ thực sự thấy r&otilde; tr&ecirc;n nền trắng v&agrave; ho&agrave;n to&agrave;n v&ocirc; h&igrave;nh tr&ecirc;n nền tối.</p>\r\n\r\n<p>Samsung Galaxy Z Fold 3 dự kiến sẽ ph&aacute;t h&agrave;nh v&agrave;o th&aacute;ng 7 hoặc th&aacute;ng 8.</p>\r\n', '301624328608.jpg', 46),
(99, 'Samsung ngừng bán Galaxy Z Fold 2', '<h2>Galaxy Z Fold 3 c&oacute; thể sẽ được Samsung ra mắt v&agrave;o ng&agrave;y 3 th&aacute;ng 8.</h2>\r\n\r\n<p>Khi Samsung lần đầu ra mắt chiếc smartphone m&agrave;n h&igrave;nh gập Galaxy Fold, n&oacute; đ&atilde; c&oacute; một khởi đầu rất kh&oacute; khăn. Rất may, g&atilde; khổng lồ H&agrave;n Quốc đ&atilde; khắc phục được những rắc rối của Galaxy Fold. Sau đ&oacute;, kẻ kế nhiệm Galaxy Z Fold 2 đ&atilde; rất th&agrave;nh c&ocirc;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Samsung ngừng bán Galaxy Z Fold 2, mở đường ra mắt sớm Z Fold 3 - Ảnh 1.\" src=\"https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/6/18/photo-1-16239857235601221522662.jpg\" /></p>\r\n\r\n<p>Samsung đang chuẩn bị ra mắt chiếc smartphone m&agrave;n h&igrave;nh gập tiếp theo của m&igrave;nh, đ&oacute; l&agrave; Galaxy Z Fold 3. Bắt đầu từ h&ocirc;m nay, trang web ch&iacute;nh thức của Samsung kh&ocirc;ng c&ograve;n cho ph&eacute;p người d&ugrave;ng mua Galaxy Z Fold 2 nữa.</p>\r\n\r\n<p>Khi bấm v&agrave;o mục mua Galaxy Z Fold 2 tại Mỹ, người d&ugrave;ng sẽ nhận được th&ocirc;ng b&aacute;o&nbsp;<em>&ldquo;Galaxy Fold kh&ocirc;ng c&oacute; sẵn để mua nữa tr&ecirc;n Samsung.com, tuy nhi&ecirc;n vui l&ograve;ng xem c&aacute;c t&ugrave;y chọn kh&aacute;c của gia đ&igrave;nh Galaxy&rdquo;.</em></p>\r\n', '311624328677.jpg', 46);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) NOT NULL,
  `title_product` varchar(255) NOT NULL,
  `price_product` varchar(100) NOT NULL,
  `desc_product` text NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `image_product` varchar(100) NOT NULL,
  `id_category_product` int(11) NOT NULL,
  `product_hot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `title_product`, `price_product`, `desc_product`, `quantity_product`, `image_product`, `id_category_product`, `product_hot`) VALUES
(155, 'Iphone 5 S', '5000000', '                                <li>Màn hình 6.81\", Chip Snapdragon 888</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 10, 'iphone11620605631.jpg', 165, 1),
(157, 'Iphone 11 Pro', '6000000', '                                <li>Màn hình 6.67\", Chip Snapdragon 865</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 5000 mAh, Sạc 33 W</li>\r\n                                \r\n\r\n                             ', 4, '331624370547.jpg', 165, 1),
(158, 'Iphone 12 Pro Max', '4000000', '                                <li>Màn hình 6.67\", Chip Snapdragon 865</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 5000 mAh, Sạc 33 W</li>\r\n                                \r\n\r\n                             ', 11, '341624370505.jpg', 165, 1),
(159, 'Iphone 6 S Plus', '9000000', '                                <li>Màn hình 6.81\", Chip Snapdragon 888</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 10, 'iphone21620606125.jpg', 165, 1),
(160, 'Iphone 8', '1000000', '                                <li>Màn hình 6.81\", Chip Snapdragon 888</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 40, 'iphone1620606176.png', 165, 0),
(161, 'Iphone 9', '12000000', '                                <li>Màn hình 6.81\", Chip Snapdragon 888</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 6, '321624370371.jpg', 165, 0),
(165, 'Iphone 10', '20000000', '\r\n                                <li>Màn hình : Super Amoled 4.5k</li>\r\n                                <li>Độ phân giải : 2K+(1440x3040)</li>\r\n                                <li>Ram : 8GB</li>\r\n                                <li>CPU : Android 9.0</li>\r\n                                <li>GPU : Mali-G76 MP12</li>\r\n                                <li>SSD : 512MB</li>\r\n\r\n                           ', 10, 'iphone21624290458.jpg', 165, 1),
(166, 'Samsung S21', '14900000', '\r\n                                <li>Màn hình 6.81\", Chip Snapdragon 888</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 20, '51624291590.jpg', 166, 1),
(167, 'Samsung A21s', '14900000', '\r\n                                <li>Màn hình 6.81\", Chip Snapdragon 888</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 13, '61624291771.jpg', 166, 0),
(168, 'Samsung A02', '2590000', '\r\n                                <li>Màn hình 6.81\", Chip Snapdragon 888</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 4, '81624291822.jpg', 166, 1),
(169, 'samsung galaxy s20', '15490000', '\r\n                                <li>Màn hình 6.81\", Chip Snapdragon 888</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 23, '71624291889.jpg', 166, 0),
(170, 'samsung galaxy M51', '8790000', '\r\n                                <li>Màn hình 6.81\", Chip Snapdragon 888</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 16, '91624291984.jpg', 166, 1),
(171, 'Samsung Galaxy A51', '6890000', '\r\n                                <li>Màn hình 6.81\", Chip Snapdragon 888</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 21, '101624292037.jpg', 166, 0),
(172, 'xiaomi mi 11', '17490000', '\r\n                                <li>Màn hình 6.81\", Chip Snapdragon 888</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 10, '121624318947.jpg', 167, 0),
(173, 'xiaomi redmi note 10', '5690000', '\r\n                                <li>Màn hình 6.5\", Chip MediaTek</li>\r\n                                <li>RAM 8 GB, ROM 128 GB)</li>\r\n                                <li>Camera sau: Chính 48 MP & Phụ 2 MP, 2 MP</li>\r\n                                <li>Camera trước: 8 MP</li>\r\n                                <li>Pin 5000 mAh, Sạc 18 W</li>\r\n                                \r\n\r\n                             ', 13, '141624319243.jpg', 167, 1),
(174, 'Xiaomi Mi 10T', '15450000', '\r\n                                <li>Màn hình 6.67\", Chip Snapdragon 865</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 5000 mAh, Sạc 33 W</li>\r\n                                \r\n\r\n                             ', 16, '151624319436.jpg', 167, 0),
(175, 'Xiaomi Poco X3', '5990000', '\r\n                                <li>Màn hình 6.67\", Chip Snapdragon 732G</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 64 MP & Phụ 13 MP, 2 MP, 2 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 24, '161624319582.jpg', 167, 0),
(176, 'Xiaomi Redmi 9C', '3500000', '\r\n                                <li>Màn hình 6.53\", Chip MediaTek</li>\r\n                                <li>RAM 3 GB, ROM 64 GB</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 24, '171624319767.jpg', 167, 0),
(177, 'ViVi  Y53s', '6900000', '\r\n                                <li>Màn hình 6.58\", Chip MediaTek</li>\r\n                                <li>RAM 8 GB, ROM 128 GB</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>RAM 8 GB, ROM 128 GB</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 25, '181624319966.jpg', 168, 0),
(178, 'ViVo Z72', '7590000', '\r\n                                <li>Màn hình 6.58\", Chip MediaTek</li>\r\n                                <li>RAM 8 GB, ROM 128 GB</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 20 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                             ', 17, '191624320061.jpg', 168, 1),
(179, 'ViVo V20', '6490000', '\r\n                                <li>Màn hình 6.44\", Chip Snapdragon 665</li>\r\n                                <li>RAM 8 GB, ROM 128 GB</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 32 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n', 26, '201624320205.jpg', 168, 0),
(180, 'ViVo Y51', '5790000', '\r\n                                <li>Màn hình 6.58\", Chip Snapdragon 662</li>\r\n                                <li>RAM 8 GB, ROM 256 GB)</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 16 MP</li>\r\n                                <li>Pin 5000 mAh, Sạc 18 W</li>\r\n                                \r\n', 34, '211624320301.jpg', 168, 0),
(181, 'ViVo Y11', '2790000', '           \r\n  <li>Màn hình 6.35\", Chip Snapdragon 439</li>\r\n                                <li>RAM 3 GB, ROM 32 GB</li>\r\n                                <li>Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP</li>\r\n                                <li>Camera trước: 8 MP</li>\r\n                                <li>Pin 4600 mAh, Sạc 55 W</li>\r\n                                \r\n\r\n                          ', 14, '221624320404.jpg', 168, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  ADD PRIMARY KEY (`id_category_post`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`id_category_product`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id_post`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  MODIFY `id_category_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `id_category_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
