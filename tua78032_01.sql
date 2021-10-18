-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2021 at 03:47 PM
-- Server version: 10.3.24-MariaDB-log
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tua78032_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_02_082916_tb_user', 1),
(4, '2019_10_02_205753_tb_productcat', 2),
(5, '2019_10_02_213852_tb_product', 3),
(6, '2019_10_02_223542_tb_layout_homepage', 4),
(7, '2019_10_02_225742_tb_layout_product', 5),
(8, '2019_10_02_230947_tb_layout_contact', 6),
(9, '2019_10_02_232502_tb_layout_footer', 7),
(10, '2019_10_03_075204_tb_blogcat', 8),
(11, '2019_10_03_080725_tb_blog', 9),
(12, '2019_10_03_134615_tb_setting', 10),
(13, '2019_10_13_192300_tb_order', 11),
(14, '2019_10_13_192436_tb_order_detail', 12),
(15, '2019_10_20_010752_tb_layout_lylich', 13),
(16, '2019_11_29_201519_tb_product_photo', 14),
(17, '2019_12_13_025408_tb_static_page', 15),
(18, '2019_12_13_184646_tb_customer', 16),
(19, '2019_12_13_210227_tb_productcat_lv2', 17),
(20, '2020_06_02_162405_tb_image', 18),
(21, '2020_06_03_002450_tb_image', 19),
(22, '2020_06_03_003148_tb_image', 20),
(23, '2020_06_13_205856_tb_event', 21),
(24, '2020_06_25_142144_tb_qna', 22),
(25, '2020_07_08_122338_tb_layout_service', 23),
(26, '2020_07_10_102647_tb_nation', 24),
(27, '2020_07_20_113714_tb_project_major', 25),
(28, '2020_07_22_215352_tb_product_location', 26),
(29, '2020_09_30_053409_tb_whyus_process', 27);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `blog_ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_ten_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_ten_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_ten_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_ten_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_ten_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_place_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'picture.png',
  `blog_noidung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_noidung_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_noidung_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_noidung_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_noidung_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_noidung_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_noibat` tinyint(1) DEFAULT 0,
  `blog_hienthi` tinyint(1) DEFAULT 1,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_mota_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_mota_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_mota_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_mota_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_mota_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_nguoiviet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_editor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_blogcatid` int(10) UNSIGNED DEFAULT NULL,
  `blog_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`blog_id`, `blog_ten`, `blog_ten_en`, `blog_ten_vi`, `blog_ten_zh`, `blog_ten_ja`, `blog_ten_kr`, `blog_place`, `blog_place_en`, `blog_slug`, `blog_thumb`, `blog_noidung`, `blog_noidung_en`, `blog_noidung_vi`, `blog_noidung_zh`, `blog_noidung_ja`, `blog_noidung_kr`, `blog_noibat`, `blog_hienthi`, `blog_title`, `blog_mota`, `blog_mota_vi`, `blog_mota_en`, `blog_mota_zh`, `blog_mota_ja`, `blog_mota_kr`, `blog_keyword`, `blog_nguoiviet`, `blog_editor`, `blog_blogcatid`, `blog_type`, `created_at`, `updated_at`) VALUES
(26, 'Các công cụ quản trị web cần có', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cac-cong-cu-quan-tri-web-can-co', '1589792895web-manage-tool.png', '<p>Đ&acirc;y l&agrave; những c&ocirc;ng cụ m&agrave; m&igrave;nh đ&atilde; v&agrave; đang d&ugrave;ng cho kh&aacute;ch h&agrave;ng v&agrave; ch&iacute;nh trang của m&igrave;nh. Những c&ocirc;ng cụ n&agrave;y hầu hết đều l&agrave; những c&ocirc;ng cụ cơ bản nhất nhưng ph&aacute;t huy hiệu quả rất tốt m&agrave; hầu như những ai l&agrave;m web đều n&ecirc;n biết qua. Nếu bạn l&agrave; người mới v&agrave; lần đầu x&acirc;y dựng web, h&atilde;y tham khảo qua v&agrave; c&agrave;i đặt cho website của m&igrave;nh.</p>\r\n<p>Ở đ&acirc;y m&igrave;nh sẽ chia ra 2 loại c&ocirc;ng cụ: bộ c&ocirc;ng cụ quản trị v&agrave; kiểm thử</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 24px;\"><strong>Bộ quản trị</strong></span></p>\r\n<p><strong>1. Google Analytics (GA)</strong></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/google-analytics.jpg\" alt=\"\" width=\"406\" height=\"213\" />Đ&acirc;y l&agrave; c&ocirc;ng cụ của Google c&oacute; thể n&oacute;i l&agrave; hiệu quả v&agrave; cơ bản nhất của những quản trị vi&ecirc;n website.</p>\r\n<p>Với GA, quản trị vi&ecirc;n c&oacute; thể biết được:</p>\r\n<ul>\r\n<li>Nguồn kh&aacute;ch h&agrave;ng truy cập v&agrave;o website đến từ đ&acirc;u (đất nước, th&agrave;nh phố, tỉnh th&agrave;nh n&agrave;o)</li>\r\n<li>Họ đang đọc những b&agrave;i viết n&agrave;o, xem sản phẩm n&agrave;o.</li>\r\n<li>Họ đang sử dụng thiết bị n&agrave;o để truy cập (PC, mobile, tablet, ...)</li>\r\n<li>Thời gian kh&aacute;ch h&agrave;ng sử dụng để đọc mỗi trang l&agrave; bao nhi&ecirc;u.</li>\r\n<li>Tỷ lệ kh&aacute;ch h&agrave;ng mới v&agrave; kh&aacute;ch h&agrave;ng cũ quay lại truy cập web.</li>\r\n<li>...</li>\r\n</ul>\r\n<p>Tất cả những th&ocirc;ng tin n&agrave;y rất cần thiết để c&aacute;c chủ shop/quản trị vi&ecirc;n d&ugrave;ng để theo d&otilde;i xem trang web c&oacute; hoạt động hiệu quả hay kh&ocirc;ng. Ph&acirc;n t&iacute;ch số liệu để l&ecirc;n kế hoạch marketing, quảng b&aacute; trang web đến kh&aacute;ch h&agrave;ng.</p>\r\n<p><span style=\"color: #236fa1;\"><a style=\"color: #236fa1;\" title=\"Chi tiết c&aacute;ch c&agrave;i đặt v&agrave; sử dụng GA\" href=\"../../../web-zone/chi-tiet-cai-dat-google-analytics.30\">Chi tiết c&aacute;ch c&agrave;i đặt v&agrave; sử dụng GA</a></span></p>\r\n<p>&nbsp;</p>\r\n<p><strong>2. Google Search Console</strong></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/Google-Search-Console.png\" alt=\"\" width=\"382\" height=\"206\" />C&ograve;n c&oacute; 1 t&ecirc;n gọi kh&aacute;c l&agrave; Google webmaster để n&oacute;i về c&ocirc;ng cụ n&agrave;y. Google Search Console l&agrave; c&ocirc;ng cụ cần phải c&oacute; khi bạn l&ecirc;n kế hoạch SEO cho trang web.</p>\r\n<p>C&ocirc;ng cụ n&agrave;y sẽ b&aacute;o lỗi của trang web nếu c&oacute; đến quản trị vi&ecirc;n, chi tiết những lỗi đ&oacute; như thế n&agrave;o. Bạn sẽ sử dụng những th&ocirc;ng tin n&agrave;y b&aacute;o cho lập tr&igrave;nh vi&ecirc;n v&agrave; khắc phục lại lỗi đ&oacute;.</p>\r\n<p>Nếu bạn c&oacute; biết qua về SEO th&igrave; Google Search Console sẽ gi&uacute;p bạn biết được thứ hạng từ kh&oacute;a trong trang web của m&igrave;nh. Th&ocirc;ng tin n&agrave;y bạn sẽ sử dụng để đẩy mạnh SEO cho từ kh&oacute;a ứng với link b&agrave;i viết để tăng độ cạnh trang tr&ecirc;n bảng t&igrave;m kiếm Google.</p>\r\n<p>Chi tiết c&aacute;ch c&agrave;i đặt v&agrave; sử dụng Google Search Console</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 24px;\"><strong>Bộ kiểm thử</strong></span></p>\r\n<p><strong>1. SEO Quake</strong></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/SEO-quake.jpg\" alt=\"\" width=\"328\" height=\"262\" />Nếu GA l&agrave; c&ocirc;ng cụ bắt buộc phải c&oacute; để quản trị th&igrave; SEO Quake n&agrave;y bắt buộc phải biết khi kiểm thử website.</p>\r\n<p>Th&ocirc;ng tin SEO Quake cung cấp cho bạn xem trang web đ&atilde; chuẩn SEO chưa, những lỗi n&agrave;o cần bổ sung để ho&agrave;n thiện SEO cho web.</p>\r\n<p>Chi tiết c&aacute;ch c&agrave;i đặt v&agrave; sử dụng SEO Quake</p>\r\n<p>&nbsp;</p>\r\n<p><strong>2. PageSpeed Insight</strong></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/google-speed-test.jpg\" alt=\"\" width=\"455\" height=\"256\" /></p>\r\n<p>Đ&acirc;y l&agrave; c&ocirc;ng cụ kiểm tra tốc độ load trang được ph&aacute;t triển bởi Google. C&aacute;ch sử dụng cũng rất đơn giản, chỉ cần d&aacute;n link trang web bạn cần kiểm tra v&agrave; Google sẽ ph&acirc;n t&iacute;ch cho bạn.</p>\r\n<p>Nếu tốc độ load trang đang ở mức thấp, bạn cần xem v&agrave; cải thiện những lỗi Google đ&atilde; chỉ ra. Th&ocirc;ng thường tốc độ load trang bị l&agrave;m chậm do k&iacute;ch thước h&igrave;nh ảnh qu&aacute; lớn hoặc server bạn đang đặt web qu&aacute; xa thị trường bạn đang hướng tới.</p>\r\n<ul>\r\n<li>Nếu h&igrave;nh ảnh qu&aacute; lớn, h&atilde;y n&eacute;n k&iacute;ch thước h&igrave;nh ảnh nhỏ lại (m&igrave;nh thường sử dụng Photoshop để l&agrave;m việc n&agrave;y).</li>\r\n<li>Nếu lỗi do server, h&atilde;y di chuyển web của bạn về gần hơn. (VD: host của bạn đang sử dụng cho web ở tận b&ecirc;n Mỹ nhưng kh&aacute;ch h&agrave;ng đang ở Việt Nam th&igrave; h&atilde;y t&igrave;m kiếm đơn vị cung cấp host ở Việt Nam hoặc Singapore để đặt host. Đường truyền c&agrave;ng ngắn, tốc độ load c&agrave;ng nhanh).</li>\r\n</ul>\r\n<p>Link <a title=\"Google PageSpeed Insights\" href=\"https://developers.google.com/speed/pagespeed/insights/\" target=\"_blank\" rel=\"noopener\">Google PageSpeed Insights</a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>3. Mobile friendly test</strong></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/google-test-mobile.jpg\" alt=\"\" width=\"447\" height=\"295\" /></p>\r\n<p>Tương tự như Google PageSpeed Insights, đ&acirc;y l&agrave; c&ocirc;ng cụ để kiểm tra xem trang web c&oacute; th&acirc;n thiện với c&aacute;c thiết bị di động hay kh&ocirc;ng.</p>\r\n<p>Hiện nay, lượng truy cập website 80% đến từ c&aacute;c thiết bị Mobile n&ecirc;n h&atilde;y cục kỳ ch&uacute; &yacute; đến c&aacute;c số liệu kiểm thử tr&ecirc;n c&ocirc;ng cụ n&agrave;y.</p>\r\n<p>Link <a title=\"Google Mobile Friendly\" href=\"https://search.google.com/test/mobile-friendly\" target=\"_blank\" rel=\"noopener\">Google Mobile Friendly</a></p>', NULL, NULL, NULL, NULL, NULL, 0, 1, 'Các công cụ quản trị web cần có', 'Đây là những công cụ mà mình đã và đang dùng cho khách hàng và chính trang của mình. Những công cụ này hầu hết đều là những công cụ cơ bản nhất nhưng phát huy hiệu quả rất tốt mà hầu như những ai làm web đều nên biết qua.', NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', NULL, 18, NULL, '2020-05-04 08:27:37', '2020-05-19 13:01:45'),
(27, '4 tháng phụ bếp HANA BBQ Vũng Tàu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4-thang-phu-bep-hana-bbq-vung-tau', '1589733510hana.jpg', '<p>Ng&agrave;y đầu ti&ecirc;n bước ch&acirc;n v&agrave;o nh&agrave; h&agrave;ng gặp ch&uacute; L&acirc;n (quản l&yacute; nh&agrave; h&agrave;ng l&uacute;c đ&oacute;). S&aacute;ng sớm h&ocirc;m đ&oacute; l&ograve; d&ograve; bước v&agrave;o cửa nh&agrave; h&agrave;ng c&ograve;n chưa c&oacute; ai, chỉ thấy ch&uacute; L&acirc;n ngồi kiểm tra sổ s&aacute;ch g&igrave; đ&oacute;. Bước v&agrave;o ngoan như c&uacute;n khoanh tay ch&agrave;o ch&uacute; quản l&yacute;. N&oacute;i chuyện tầm 5 ph&uacute;t sau th&igrave; ch&uacute; hẹn s&aacute;ng mai đến l&agrave;m lu&ocirc;n, ch&uacute; ph&acirc;n v&agrave;o phụ bếp l&agrave;m việc với mấy anh em trong đ&oacute; (Ban đầu ch&uacute; hỏi muốn l&agrave;m phục vụ hay phụ bếp th&igrave; m&igrave;nh chọn phục vụ. M&agrave; ch&uacute; n&oacute;i giờ bếp đang rất thiếu người, con l&agrave;m được kh&ocirc;ng. Gật đầu lu&ocirc;n, kh&ocirc;ng lăn tăn g&igrave; ).</p>\r\n<p>S&aacute;ng h&ocirc;m sau, ăn s&aacute;ng, vuốt t&oacute;c, chải chuốt c&aacute;c kiểu bắt đầu ng&agrave;y l&agrave;m việc đầu ti&ecirc;n ở HaNa BBQ Vũng T&agrave;u. Buổi s&aacute;ng tới ho&agrave;nh tr&aacute;ng, b&oacute;ng l&aacute;ng bao nhi&ecirc;u th&igrave; buổi tối hết ng&agrave;y l&agrave;m t&agrave;n tạ, th&ecirc; thảm bấy nhi&ecirc;u: ch&acirc;n tay &ecirc; ẩm, đau nhức thấu trời xanh, 2 b&agrave;n ch&acirc;n đứng cả ng&agrave;y t&ecirc; rần rật cảm gi&aacute;c muốn th&aacute;o từng khớp ch&acirc;n ra m&agrave; bảo tr&igrave; vậy. Kh&aacute;ch cuối c&ugrave;ng về hết, bếp cũng dọn xong xu&ocirc;i l&agrave; chạy ra ghế sofa nằm phơi th&acirc;y ngay v&agrave; lu&ocirc;n. L&uacute;c đặt lưng xuống ghế cảm tưởng như đ&acirc;y l&agrave; c&aacute;i ghế sofa nằm sướng nhất từ trước tới giờ vậy, ph&ecirc; kinh khủng. Phải tới gần 1 tuần sau mới quen dần, bớt đau nhức hơn. Giờ nghĩ lại mấy ng&agrave;y đầu thật kinh khủng khiếp.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/1.png\" alt=\"\" width=\"566\" height=\"308\" /></p>\r\n<p>C&ograve;n nhớ 1 lần, đang lui cui trong bếp th&igrave; c&oacute; 1 kh&aacute;ch th&ograve; đầu v&agrave;o hỏi xin 1 ch&eacute;n dầu ăn tr&aacute;ng qua vỉ nướng để kh&ocirc;ng bị ch&aacute;y thịt. Thấy cũng hợp t&igrave;nh hợp l&yacute;, m&igrave;nh cũng nhiệt t&igrave;nh dốc ngược b&igrave;nh dầu đổ cho &ocirc;ng kh&aacute;ch đ&oacute; 1 ch&eacute;n đầy. L&uacute;c đ&oacute; dầu đang nhiều, xin 1 t&ocirc; c&ograve;n cho chứ thấy 1 ch&eacute;n ăn thua g&igrave;. Cầm ch&eacute;n dầu tr&ecirc;n tay, mặt &ocirc;ng kh&aacute;ch cười tươi r&oacute;i c&aacute;m ơn bằng đủ thứ tiếng rồi quay về b&agrave;n ăn. C&ograve;n m&igrave;nh trong bếp cười nhếch m&eacute;p mừng thầm: kiểu g&igrave; chả khen bếp nh&agrave; h&agrave;ng l&agrave;m việc nhiệt t&igrave;nh, c&oacute; khi lại tip th&ecirc;m tiền.</p>\r\n<p>5 ph&uacute;t sau, b&agrave;n ăn &ocirc;ng kh&aacute;ch đ&oacute; ngồi kh&oacute;i bốc trắng x&oacute;a, nh&acirc;n vi&ecirc;c nh&agrave; h&agrave;ng quắn đ&iacute;t l&ecirc;n thay bếp, thay vỉ nướng cho kh&aacute;ch. Ch&uacute; L&acirc;n cầm ch&eacute;n dầu tr&ecirc;n tay mặt bốc kh&oacute;i, 2 mắt lắp sẵn 2 vi&ecirc;n đạn bước tới trước cửa bếp hỏi:</p>\r\n<p>_ TRONG BẾP AI ĐƯA CH&Eacute;N DẦU N&Agrave;Y CHO KH&Aacute;CH ?</p>\r\n<p>Thấy t&igrave;nh h&igrave;nh c&oacute; vẻ kh&ocirc;ng ổn nhưng cũng phải l&ecirc;n tiếng:</p>\r\n<p>_ Dạ con đ&oacute; ch&uacute;, n&atilde;y con c&oacute; đưa cho kh&aacute;ch.</p>\r\n<p>_ C&Oacute; BIẾT SU&Yacute;T NỮA TH&Igrave; CH&Aacute;Y NH&Agrave; H&Agrave;NG KH&Ocirc;NG !</p>\r\n<p>_ Dạ con xin lỗi, nhưng kh&aacute;ch chạy lại xin n&ecirc;n con r&oacute;t ra đưa.</p>\r\n<p>_ <strong>VẬY CHỨ KH&Aacute;CH HIỂU NGHỀ HAY M&Igrave;NH HIỂU NGHỀ.</strong></p>\r\n<p>...</p>\r\n<p>C&ograve;n ăn th&ecirc;m v&agrave;i c&acirc;u chửi nữa nhưng đ&oacute; l&agrave; c&acirc;u m&agrave; m&igrave;nh nhớ nhất cho tới tận b&acirc;y giờ.</p>\r\n<p>Biết bao nhi&ecirc;u đứa c&ugrave;ng l&agrave;m web v&agrave; cả bản th&acirc;n m&igrave;nh trước kia, kh&aacute;ch h&agrave;ng đưa ra y&ecirc;u cầu g&igrave; cũng l&agrave;m, kh&ocirc;ng c&oacute; g&oacute;p &yacute; hay tư vấn th&agrave;nh ra sản phẩm cuối c&ugrave;ng lại th&agrave;nh 1 mớ b&ugrave;i nh&ugrave;i. Nhờ c&oacute; c&acirc;u chửi ng&agrave;y đ&oacute; m&agrave; sau n&agrave;y l&agrave;m việc m&igrave;nh kh&ocirc;ng c&ograve;n bị quỵ lụy kh&aacute;ch h&agrave;ng, kh&ocirc;ng c&ograve;n để kh&aacute;ch h&agrave;ng n&oacute;i g&igrave; cũng nghe theo m&agrave; c&oacute; tiếng n&oacute;i hơn trong sản phẩm m&igrave;nh l&agrave;m ra.</p>\r\n<p>Trầy trật 4 th&aacute;ng l&agrave;m việc trong đ&oacute; nhưng cũng đủ tr&ograve; với mấy anh em trong bếp:</p>\r\n<ul>\r\n<li>Học c&aacute;ch ăn vụng c&oacute; tổ chức. Ph&acirc;n c&ocirc;ng thằng ngồi ăn, thằng đứng canh. Tất nhi&ecirc;n l&agrave; chỉ ăn trong mức cho ph&eacute;p. Nhưng n&oacute;i g&igrave; th&igrave; n&oacute;i chứ, ăn vụng vẫn l&agrave; c&aacute;ch ăn mang đến cảm gi&aacute;c ngon miệng nhất :))&nbsp;</li>\r\n<li>L&uacute;c đ&oacute;i th&igrave; h&ugrave;n tiền nhau mua m&igrave; g&oacute;i về nấu thịt b&ograve; (sang v&atilde;i chưởng). Trong bếp th&igrave; khỏi n&oacute;i rồi, nguy&ecirc;n liệu, gia vị đầy đủ. Nấu xong mấy anh em mỗi thằng chia nhau ra ngồi h&uacute;p s&igrave; sụp t&ocirc; của m&igrave;nh. Tả vậy c&oacute; vẻ hơi bần chứ ngon b&aacute; ch&aacute;y, chỉ thua về h&igrave;nh thức th&ocirc;i chứ kh&ocirc;ng thua g&igrave; chất lượng nh&agrave; h&agrave;ng nấu.</li>\r\n<li>Thỉnh thoảng ban đ&ecirc;m hết giờ l&agrave;m th&igrave; mấy anh em bếp hẹn ri&ecirc;ng nhau nhậu đ&ecirc;m.</li>\r\n</ul>\r\n<p>Mục đ&iacute;ch ban đầu bước v&agrave;o nh&agrave; h&agrave;ng l&agrave;m việc l&agrave; t&iacute;ch đủ tiền để quay lại S&agrave;i G&ograve;n. Nhưng 4 th&aacute;ng ở đ&acirc;y l&agrave; thời gian để m&igrave;nh thay đổi nhiều trong suy nghĩ, học được nhiều thứ. C&aacute;i lớn nhất l&agrave; th&aacute;i độ l&agrave;m việc, giao tiếp với đồng nghiệp c&ugrave;ng l&agrave;m.</p>\r\n<p>Th&aacute;ng cuối c&ugrave;ng, khi n&oacute;i chuyện với quản l&yacute; mới nh&agrave; h&agrave;ng (ch&uacute; L&acirc;n phải chuyển l&ecirc;n 1 chi nh&aacute;nh kh&aacute;c ở S&agrave;i G&ograve;n) m&igrave;nh xin nghỉ ở đ&acirc;y. Mấy anh em trong bếp thường hay n&oacute;i đ&ugrave;a với nhau rằng m&igrave;nh l&uacute;c đ&oacute; l&agrave; 1 thương vụ bom tấn. C&oacute; 1 ch&uacute;t tự h&agrave;o kh&ocirc;ng hề nhỏ <span style=\"font-size: 36px;\">☺️</span></p>\r\n<p>Giờ nghĩ lại hồi đ&oacute; may m&agrave; v&agrave;o l&agrave;m HaNa trước khi l&ecirc;n S&agrave;i G&ograve;n.</p>', NULL, NULL, NULL, NULL, NULL, 0, 1, '4 tháng phụ bếp HANA BBQ Vũng Tàu', '4 tháng tưởng như phải chịu đựng qua ngày lại dạy mình thứ quan trọng nhất khi đi làm: Thái độ làm việc quyết định tất cả', NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', NULL, 19, NULL, '2020-05-08 09:37:43', '2020-05-17 16:38:30'),
(28, 'So sánh giữa web tự code và web nền tảng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'so-sanh-giua-web-tu-code-va-web-he-thong', '1589792936web-tu-code-va-web-he-thong.jpg', '<p>Ở đ&acirc;y m&igrave;nh sẽ c&oacute; kh&aacute;i niệm <strong>web nền tảng</strong>&nbsp;chỉ những loại web được x&acirc;y dựng tr&ecirc;n nền tảng c&oacute; sẵn như: Wordpress, Wix, Haravan, Bizweb, ...</p>\r\n<p>Nếu đem so s&aacute;nh với việc bạn đi mua nh&agrave; th&igrave; l&agrave;m web cũng ho&agrave;n to&agrave;n tương tự: Bạn muốn ở nh&agrave; chung cư hay nh&agrave; mặt đất ?</p>\r\n<p>Việc l&agrave;m web cũng ho&agrave;n to&agrave;n tương tự: coi web nền tảng l&agrave; nh&agrave; chung cư c&ograve;n web tự code l&agrave; nh&agrave; mặt đất.</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/mua-nha-chung-cu-hay-nha-mat-dat.jpg\" alt=\"\" width=\"672\" height=\"347\" /></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 24px; color: #236fa1;\"><strong>Với web nền tảng</strong></span></p>\r\n<p>Ưu điểm:&nbsp;</p>\r\n<ul>\r\n<li><strong>Thiết lập nhanh:</strong> Tất cả những t&iacute;nh năng cần thiết cho việc b&aacute;n h&agrave;ng, viết blog, giới thiệu th&ocirc;ng tin c&ocirc;ng ty/ tổ chức đều được x&acirc;y dựng sẵn. Việc của bạn l&agrave; chọn ra g&oacute;i sử dụng ph&ugrave; hợp với mục đ&iacute;ch l&agrave;m web của m&igrave;nh v&agrave; hoạt động trang web ngay lập tức. Th&ocirc;ng thường, từ khi k&yacute; hợp đồng l&agrave;m web, thanh to&aacute;n đầy đủ th&igrave; những thiết lập c&ograve;n lại b&ecirc;n cung cấp web sẽ l&agrave;m cho bạn. Trong v&ograve;ng 1 buổi s&aacute;ng, bạn sẽ thấy t&ecirc;n miền trang web của m&igrave;nh xuất hiện tr&ecirc;n internet.</li>\r\n<li><strong>Nhiều t&iacute;nh năng hỗ trợ:</strong> Tất cả những t&iacute;nh năng như thanh to&aacute;n online, quản l&yacute; đơn h&agrave;ng, li&ecirc;n kết c&aacute;c đơn vị vận chuyển, ... sẽ được t&iacute;ch hợp sẵn trong nền tảng t&ugrave;y v&agrave;o g&oacute;i dịch vụ bạn sử dụng.&nbsp;</li>\r\n<li><strong>Nhiều giao diện sẵn c&oacute;</strong> cho bạn t&ugrave;y chọn sử dụng.</li>\r\n<li><strong>Lưu lượng v&agrave; băng th&ocirc;ng kh&ocirc;ng giới hạn</strong>, thừa sức để bạn đăng kh&ocirc;ng giới hạn số lượng sản phẩm l&ecirc;n trang web.</li>\r\n<li><strong>Cộng đồng sử dụng</strong> c&ugrave;ng nền tảng đ&ocirc;ng đảo.</li>\r\n</ul>\r\n<p>Nhược điểm:</p>\r\n<ul>\r\n<li>V&igrave; giao diện web l&agrave; những c&aacute;i đ&atilde; được x&acirc;y dựng sẵn n&ecirc;n khi trang web hoạt động, tất cả bố cục trang web sẽ phải <strong>theo form của giao diện đ&atilde; x&acirc;y dựng sẵn</strong>. Giao diện đưa ra 1 số &iacute;t l&agrave; miễn ph&iacute;, c&ograve;n lại l&agrave; những giao diện trả ph&iacute;. Nếu muốn thay đổi về bố cục giao diện, bạn c&oacute; thể li&ecirc;n hệ với đơn vị cung cấp nền tảng web v&agrave; y&ecirc;u cầu chỉnh sửa. T&ugrave;y v&agrave;o y&ecirc;u cầu c&oacute; phức tạp hay kh&ocirc;ng m&agrave; b&ecirc;n cung cấp web sẽ b&aacute;o ph&iacute; chỉnh sửa cho bạn.</li>\r\n<li><strong>Dư thừa chức năng kh&ocirc;ng cần thiết: </strong>Những chức năng được đưa ra trong g&oacute;i sử dụng của kh&aacute;ch h&agrave;ng thường chỉ được sử dụng 50% trong số đ&oacute;. C&ograve;n lại những tiện &iacute;ch được t&iacute;ch hợp k&egrave;m theo đa số kh&aacute;ch h&agrave;ng sẽ kh&ocirc;ng sử dụng đến trong suốt thời gian trang web hoạt động.</li>\r\n<li><strong>Dữ liệu web sẽ do b&ecirc;n cung cấp web quản l&yacute;:</strong> những th&ocirc;ng tin được thu thập tr&ecirc;n trang web của bạn như: th&ocirc;ng tin kh&aacute;ch h&agrave;ng, th&ocirc;ng tin sản phẩm, dữ liệu hoạt động web sẽ được lưu trữ tập trung tại cơ sở dữ liệu của đơn vị cung cấp web. Nếu c&oacute; vấn đề g&igrave; xảy ra với b&ecirc;n cung cấp th&igrave; c&oacute; thể web của bạn cũng bị ảnh hưởng. Vậy n&ecirc;n nếu bạn l&agrave; 1 doanh nghiệp lớn, h&atilde;y trao đổi kỹ về vấn đề bảo vệ dữ liệu trước khi bắt tay v&agrave;o x&acirc;y dựng h&igrave;nh ảnh trang web. H&atilde;y t&igrave;m hiểu v&agrave; chọn ra đơn vị uy t&iacute;n l&agrave;m web cho bạn.</li>\r\n<li><strong>Kh&oacute; khăn khi di dời trang web sang nền tảng kh&aacute;c: </strong>Đ&acirc;y l&agrave; trường hợp vẫn thường thấy khi x&acirc;y dựng web. V&igrave; 1 số l&yacute; do chủ quan lẫn kh&aacute;ch quan m&agrave; chủ doanh nghiệp muốn thay đổi nền tảng sử dụng web. Nhưng mỗi nền tảng lại x&acirc; dựng theo 1 c&aacute;ch ri&ecirc;ng của n&oacute;. Nếu bạn kh&ocirc;ng quan t&acirc;m tới dữ liệu hoặc SEO trước giờ đ&atilde; x&acirc;y dựng th&igrave; việc chuyển đổi kh&ocirc;ng cần suy nghĩ qu&aacute; nhiều. Nhưng nếu vẫn c&ograve;n luyến tiếc những g&igrave; đ&atilde; l&agrave;m th&igrave; việc b&ecirc; nguy&ecirc;n xi trang web trước giờ sang nền tảng mới l&agrave; gần như kh&ocirc;ng thể.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #e67e23;\"><strong><span style=\"font-size: 24px;\">Với web tự code</span></strong></span></p>\r\n<p>C&oacute; 3 thứ cơ bản cần chuẩn bị để l&agrave;m web dạng n&agrave;y: source code, hosting v&agrave; domain.</p>\r\n<p>Nếu đem so s&aacute;nh với việc x&acirc;y nh&agrave; th&igrave;:</p>\r\n<ul>\r\n<li><strong>Source code</strong> (Ng&ocirc;i nh&agrave; để ở): l&agrave; những đoạn code loằng ngoằng rối mắt được lập tr&igrave;nh để xử l&yacute; th&ocirc;ng tin tr&ecirc;n trang web.</li>\r\n<li><strong>Hosting </strong>(Đất l&agrave;m nh&agrave;): l&agrave; nơi lưu trữ tất cả th&ocirc;ng tin trang web, từ h&igrave;nh ảnh, th&ocirc;ng tin c&ocirc;ng ty, th&ocirc;ng tin kh&aacute;ch h&agrave;ng v&agrave; cả source code.&nbsp;</li>\r\n<li><strong>Domain</strong> (Địa chỉ nh&agrave;): v&iacute; dụ như domain <a title=\"tuananhdinh.vn\" href=\"../../../\">tuananhdinh.vn</a> tr&ecirc;n blog của m&igrave;nh.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/website-house-analogy.jpg\" alt=\"\" width=\"541\" height=\"343\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Ưu điểm:</p>\r\n<ul>\r\n<li><strong>T&ugrave;y biến giao diện dễ d&agrave;ng: </strong>Tất cả mọi thứ từ m&agrave;u sắc, k&iacute;ch thước h&igrave;nh ảnh, font chữ, bố cục trang web, .... Chỉ cần bạn muốn l&agrave; coder sẽ thay đổi theo đ&uacute;ng &yacute; muốn của bạn.</li>\r\n<li><strong>Chi ph&iacute; về l&acirc;u d&agrave;i sẽ thấp hơn so với web nền tảng:</strong> Năm đầu ti&ecirc;n khi bắt đầu đưa trang web đi v&agrave;o hoạt động, bạn sẽ phải đầu tư những chi ph&iacute; cơ bản như sau:\r\n<ol>\r\n<li>Ph&iacute; lập tr&igrave;nh (Chiếm 60 - 80% tổng chi ph&iacute;)</li>\r\n<li>Ph&iacute; t&ecirc;n miền.</li>\r\n<li>Ph&iacute; hosting.</li>\r\n</ol>\r\n</li>\r\n</ul>\r\n<p>Th&ocirc;ng thường chi ph&iacute; đầu tư cho năm đầu ti&ecirc;n sẽ ngang bằng hoặc lớn hơn ch&uacute;t &iacute;t so với web nền tảng. Nhưng từ năm thứ 2 trở đi, bạn chỉ cần gia hạn t&ecirc;n miền v&agrave; hosting cho trang web. Ph&iacute; lập tr&igrave;nh l&agrave; phần chi ph&iacute; chỉ cần thanh to&aacute;n cho năm đầu ti&ecirc;n. N&ecirc;n nếu t&iacute;nh về đường d&agrave;i, web tự code sẽ rẻ hơn so với web nền tảng.</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Dễ d&agrave;ng di dời:</strong> Chỉ cần đ&oacute;ng g&oacute;i source code trang web v&agrave; tải l&ecirc;n 1 hosting kh&aacute;c l&agrave; bạn đ&atilde; ho&agrave;n th&agrave;nh việc di dời m&agrave; kh&ocirc;ng ảnh hưởng tới bất kỳ dữ liệu n&agrave;o của trang web.</li>\r\n<li><strong>Chủ động bảo vệ dữ liệu trang web: </strong>tải file dource code đ&atilde; đ&oacute;ng g&oacute;i, lưu về m&aacute;y t&iacute;nh c&aacute; nh&acirc;n hoặc bất cứ đ&acirc;u cho ph&eacute;p lưu trữ tập tin l&agrave; bạn đ&atilde; ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m về việc bảo vệ dữ liệu của m&igrave;nh.</li>\r\n</ul>\r\n<p>Nhược điểm:</p>\r\n<ul>\r\n<li><strong>Thời gian triển khai l&acirc;u: </strong>Mất từ 1-2 tuần kể từ khi k&yacute; hợp đồng đến khi b&agrave;n giao trang web. Đ&acirc;y l&agrave; thời gian để lập tr&igrave;nh vi&ecirc;n x&acirc;y dựng giao diện v&agrave; thiết lập chức năng theo y&ecirc;u cầu. Chạy test để ph&aacute;t hiện lỗi trước khi b&agrave;n giao đến kh&aacute;ch h&agrave;ng.</li>\r\n<li><strong>Giới hạn dung lượng lưu trữ:</strong> nh&agrave; c&agrave;ng to phải cần đất c&agrave;ng lớn th&igrave; web c&agrave;ng phức tạp c&agrave;ng cần hosting cũng phải c&oacute; dung lượng lớn tương ứng. Nhưng đa số web hiện nay chỉ cần host kh&ocirc;ng qu&aacute; 10GB l&agrave; c&oacute; thể lưu trữ thoải m&aacute;i tất cả th&ocirc;ng tin web (đ&oacute; l&agrave; m&igrave;nh đ&atilde; t&iacute;nh với những trang web c&oacute; h&agrave;ng ngh&igrave;n sản phẩm v&agrave; dung lượng dư ra từ 30 - 40% dự ph&ograve;ng).</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Cơ bản th&igrave; đ&oacute; l&agrave; những ưu v&agrave; nhược điểm của mỗi loại web. H&atilde;y đ&aacute;nh gi&aacute; đ&uacute;ng nhu cầu của m&igrave;nh v&agrave; chọn đơn vị uy t&iacute;n cho việc x&acirc;y dựng trang web của m&igrave;nh để đi được đường d&agrave;i. V&igrave; x&acirc;y dựng được 1 trang web th&agrave;nh c&ocirc;ng kh&ocirc;ng phải ng&agrave;y 1 ng&agrave;y 2, c&oacute; khi mất tới cả năm trời bạn mới thấy được kết quả đến với m&igrave;nh.</p>', NULL, NULL, NULL, NULL, NULL, 0, 1, 'So sánh giữa web tự code và web nền tảng', 'Làm web cũng giống như bạn đi xây nhà. Bạn muốn xây nhà trên đất riêng của mình hay ở nhà chung cư ? Với website bạn muốn tự code tay hay làm web trên nền tảng có sẵn ?', NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', NULL, 18, NULL, '2020-05-12 16:38:52', '2020-05-22 06:45:16'),
(29, 'Mơ mà không trả thuế thì đừng mơ cho khỏe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mo-ma-khong-tra-thue-thi-dung-mo-cho-khoe', '1589735068dream.jpg', '<p>C&oacute; 1 c&acirc;u triết l&yacute; kinh điển được lưu truyền trong giang hồ kiểu như thế n&agrave;y: \"<strong>Giấc mơ đ&acirc;u c&oacute; ai đ&aacute;nh thuế n&oacute;. Tội g&igrave; m&agrave; kh&ocirc;ng mơ cho lớn.</strong>\"</p>\r\n<p>L&uacute;c trước m&igrave;nh đ&atilde; từng tin s&aacute;i cổ c&aacute;i c&acirc;u n&oacute;i n&agrave;y. Nhưng b&acirc;y giờ thử c&oacute; đứa n&agrave;o thở ra c&acirc;u đ&oacute; xem, m&igrave;nh sẽ v&aacute;c loa th&ugrave;ng h&eacute;t cho cả l&agrave;ng n&oacute; nghe: \"TỈNH LẠI HỘ C&Aacute;I.\"</p>\r\n<p>Mơ kh&ocirc;ng những phải trả thuế m&agrave; c&ograve;n phải trả đắt kinh khủng c&aacute;c bố ạ. Kh&ocirc;ng những trả bằng tiền m&agrave; c&ograve;n phải trả bằng nhiều thứ kh&aacute;c: thời gian, sức khỏe, ...</p>\r\n<p>N&oacute;i đ&acirc;u xa, như c&aacute;i ước mơ b&eacute; t&iacute; của m&igrave;nh sẽ c&oacute; 1 ng&agrave;y kiếm tiền bằng code, c&oacute; 1 trang web của ri&ecirc;ng bản th&acirc;n cũng phải trầy trật biết bao nhi&ecirc;u l&acirc;u. M&agrave; nếu chỉ l&agrave;m 1 c&aacute;i web Wordpress b&igrave;nh thường th&igrave; c&ograve;n gọi g&igrave; l&agrave; mơ. Bỏ ra khoảng 2 triệu bạc l&agrave; c&oacute; ngay c&aacute;i web chưng chơi trong 1 năm. Năm sau c&oacute; l&agrave;m tiếp kh&ocirc;ng th&igrave; c&oacute; trời biết.</p>\r\n<p>Muốn kiếm tiền từ web th&igrave; phải học code.</p>\r\n<ul>\r\n<li>Khoản thuế đầu ti&ecirc;n m&igrave;nh phải trả bằng tiền mặt hẳn hoi: năng cấp 1 c&aacute;i ổ cứng laptop mới xịn x&ograve; (Ổ cứng laptop đầu ti&ecirc;n của m&igrave;nh thuộc dạng lởm. Khởi động m&aacute;y chắc cũng cả thế kỷ mới l&ecirc;n h&igrave;nh n&ecirc;n c&aacute;i chuyện giật, lag m&aacute;y l&agrave; chuyện cơm bữa. Muốn học code m&agrave; x&agrave;i c&aacute;i laptop như vậy c&oacute; nước bẻ đ&ocirc;i m&aacute;y v&igrave; ức chế).</li>\r\n<li>Khoản thuế thứ 2 l&agrave; mua kh&oacute;a học online. Bỏ tiền ra học từ đầu những c&aacute;i cơ bản của web. 1 video b&agrave;i giảng coi &iacute;t nhất cũng 5 lần m&agrave; chưa chắc đ&atilde; hiểu &ocirc;ng thầy n&oacute;i c&aacute;i khỉ g&igrave; trong đ&oacute;. Nhiều l&uacute;c muốn bỏ cho rồi nhưng tiếc tiền (tiền l&uacute;c đ&oacute; ba mẹ cho nhưng kh&ocirc;ng n&oacute;i l&agrave; học c&aacute;i mớ n&agrave;y n&ecirc;n phải im lặng tiết kiệm tiền th&aacute;ng m&agrave; đ&oacute;ng). Tiền học ch&iacute;nh tr&ecirc;n trường cao gấp mấy lần m&agrave; c&ograve;n kh&ocirc;ng thấy tiếc bằng c&aacute;i kh&oacute;a online n&agrave;y.</li>\r\n<li>C&oacute; căn bản rồi nhưng cạn tiền n&ecirc;n đ&agrave;nh c&agrave;y youtube, v&eacute;t được mấy c&aacute;i b&agrave;i giảng tr&ecirc;n đ&oacute;. Lấy c&aacute;i n&agrave;y đắp c&aacute;i kia cho v&agrave;o đầu.</li>\r\n<li>C&oacute; t&iacute; căn bản rồi th&igrave; xin đi thực tập. L&uacute;c đ&oacute; mới l&agrave; thực tập SEO chứ c&ograve;n chưa được đụng v&agrave;o code. Cuối th&aacute;ng thực tập đầu ti&ecirc;n nhận 1 triệu tiền lương. Đ&oacute; l&agrave; 1 triệu đầu ti&ecirc;n m&igrave;nh kiếm được từ l&agrave;m web.\r\n<ul>\r\n<li>(D&agrave;nh cho những ai chưa biết về SEO l&agrave; g&igrave;: n&oacute; l&agrave; 1 dạng marketing online cho website. Nếu l&agrave;m tốt SEO th&igrave; kh&aacute;ch h&agrave;ng t&igrave;m kiếm v&agrave; mua sản phẩm của bạn tr&ecirc;n web sẽ rất nhiều. Doanh thu cứ thế m&agrave; tăng.)</li>\r\n</ul>\r\n</li>\r\n<li>Thực tập SEO 1 thời gian th&igrave; bắt đầu chuyển qua saler: t&igrave;m kh&aacute;ch h&agrave;ng c&oacute; nhu cầu l&agrave;m web v&agrave; k&yacute; hợp đồng. Đ&acirc;y cũng l&agrave; l&uacute;c m&igrave;nh c&oacute; nhiều thời gian v&agrave; cơ hội hơn để r&igrave;nh mấy thằng coder trong ph&ograve;ng kỹ thuật. Cứ lấy y&ecirc;u cầu kh&aacute;ch h&agrave;ng về hối coder, đứng cạnh n&oacute; chỉ trỏ n&agrave;y nọ rồi xem n&oacute; l&agrave;m. M&oacute;t được cũng kha kh&aacute;, tiết kiệm được t&iacute; thuế học ph&iacute;.</li>\r\n<li>Tiền ngu thuế.</li>\r\n<li>Thức bao nhi&ecirc;u đ&ecirc;m học bầm mắt ra mới c&oacute; được c&oacute; được c&aacute;i blog <a title=\"tuananhdinh.vn\" href=\"../../../\">tuananhdinh.vn</a> như b&acirc;y giờ.&nbsp;</li>\r\n</ul>\r\n<p>&Ocirc;ng n&agrave;o bảo mơ kh&ocirc;ng đ&aacute;nh thuế v&agrave;o c&atilde;i hộ c&aacute;i.</p>\r\n<p>Đ&oacute; mới l&agrave; mơ nhỏ. Mơ c&agrave;ng to, thuế c&agrave;ng nhiều. Ng&agrave;y xưa thời &ocirc;ng nội m&igrave;nh đ&aacute;nh Mỹ, nghe &ocirc;ng kể lại mơ tới ng&agrave;y thống nhất th&igrave; phải trả bằng bao nhi&ecirc;u mạng, bao nhi&ecirc;u th&oacute;c, bao nhi&ecirc;u tấn tiền. Xem lại sử chưa chắc đ&atilde; ghi ra hết thuế phải trả. Mơ lớn tới mức đ&oacute; th&igrave; c&aacute;i thuế n&oacute; phải to tương xứng chứ c&oacute; rẻ g&igrave;.</p>\r\n<p>Tới đ&acirc;y m&agrave; c&ograve;n &ocirc;ng n&agrave;o ch&agrave;y bướng n&oacute;i mơ kh&ocirc;ng thuế th&igrave; xin ph&eacute;p chốt lu&ocirc;n: &Ocirc;ng l&agrave; 1 đứa ảo tưởng, nhắm trả được thuế th&igrave; hẵng mơ.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/dream.jpg\" alt=\"\" width=\"800\" height=\"450\" /></p>', NULL, NULL, NULL, NULL, NULL, 0, 1, 'Mơ mà không trả thuế thì đừng mơ cho khỏe', 'Câu nói dối mị dân kinh điển nhất mọi thời đại: \"Giấc mơ không bị đánh thuế, vậy tội gì không mơ cho lớn.\"', NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', NULL, 19, NULL, '2020-05-17 16:37:18', '2020-05-20 06:47:56'),
(30, 'Chi tiết cài đặt Google Analytics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'chi-tiet-cai-dat-google-analytics', '1589889928google analytic.png', '<p>Đầu ti&ecirc;n bạn cần c&oacute; 1 t&agrave;i khoản Gmail của Google. Việc n&agrave;y kh&aacute; đơn giản, m&igrave;nh nghĩ ai cũng đ&atilde; c&oacute; ri&ecirc;ng cho m&igrave;nh 1 t&agrave;i khoản Gmail rồi. Nếu chưa h&atilde;y nhờ bất cứ ai xung quanh gi&uacute;p bạn việc n&agrave;y, chỉ mất chưa tới 5 ph&uacute;t th&ocirc;i.</p>\r\n<p>V&agrave;o trang chủ của <a href=\"https://analytics.google.com/analytics/web/\"><strong>Google Analytics</strong></a> v&agrave; đăng nhập bằng t&agrave;i khoản Gmail của bạn. Sau khi đăng nhập th&agrave;nh c&ocirc;ng sẽ hiện ra trang điều hướng của GA.&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/1ga.jpg\" alt=\"\" width=\"800\" height=\"310\" /></p>\r\n<p>Click chọn <strong>Start Measuring</strong> để b&aacute;t đầu việc thiết lập t&agrave;i khoản GA.</p>\r\n<p>Điền t&ecirc;n t&agrave;i khoản bạn muốn tạo (Bất kỳ t&ecirc;n n&agrave;o bạn muốn, t&ecirc;n m&igrave;nh đặt chỉ để l&agrave;m mẫu). Click chọn next.</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/2ga.jpg\" alt=\"\" width=\"634\" height=\"272\" /></p>\r\n<p>Chọn h&igrave;nh thức đo lường truy cập bạn muốn theo d&otilde;i. Ở đ&acirc;y c&oacute; 3 loại d&agrave;nh cho:&nbsp;</p>\r\n<ul>\r\n<li>Web&nbsp;</li>\r\n<li>App mobile</li>\r\n<li>Cả web v&agrave; app</li>\r\n</ul>\r\n<p>T&ugrave;y v&agrave;o loại sản phẩm bạn sử dụng th&igrave; sẽ chọn c&aacute;i đ&oacute;. Ở đ&acirc;y m&igrave;nh đang muốn đo lường truy cập cho website n&ecirc;n sẽ chọn web.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/3ga.jpg\" alt=\"\" width=\"800\" height=\"214\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Thiết lập th&ocirc;ng tin website. Bạn điền đầy đủ th&ocirc;ng tin theo form đưa ra:</p>\r\n<ul>\r\n<li><strong>Website name:</strong> T&ecirc;n website của bạn. Phần n&agrave;y t&ugrave;y &yacute;, bạn muốn đặt như thế n&agrave;o cũng được.</li>\r\n<li><strong>Website URL:&nbsp;</strong> Bao gồm 2 phần gồm giao thức kết nối trang web v&agrave; t&ecirc;n miền. Nếu chưa biết web của bạn thuộc giao thức n&agrave;o, h&atilde;y hỏi lập tr&igrave;nh vi&ecirc;n cho trang web của bạn để biết. Phần &ocirc; trống chỉ cần ghi t&ecirc;n miền của bạn v&agrave;o.</li>\r\n<li><strong>Industry Category:</strong> Bạn chọn 1 ng&agrave;nh nghề ph&ugrave; hợp nhất cho trang web của bạn trong danh s&aacute;ch đưa ra. Phần n&agrave;y cũng kh&ocirc;ng quan trọng lắm n&ecirc;n chỉ cần thấy kết quả n&agrave;o gần đ&uacute;ng nhất l&agrave; chọn.</li>\r\n<li><strong>Reporting Time Zone: </strong>Lưu &yacute; chọn đ&uacute;ng m&uacute;i giờ Vienam. Việc n&agrave;y l&agrave; rất cần thiết để lập b&aacute;o c&aacute;o thời gian kh&aacute;ch h&agrave;ng truy cập web v&agrave;o giờ n&agrave;o trong ng&agrave;y.</li>\r\n</ul>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/4ga.jpg\" alt=\"\" width=\"637\" height=\"466\" /></p>\r\n<p>Cuối c&ugrave;ng bấm chọn Create v&agrave; đồng &yacute; với những điều khoản GA đưa ra. Đặc biệt lưu &yacute; nhớ bấm chọn quốc gia Vietnam khi đồng &yacute; c&aacute;c điều khoản.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/5ga.jpg\" alt=\"\" width=\"552\" height=\"584\" /></p>\r\n<p>Sau khi ho&agrave;n tất, GA sẽ dẫn bạn đến phần quan trọng nhất: lấy code tracking. Copy phần code được đ&aacute;nh dấu trong h&igrave;nh.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/6ga.jpg\" alt=\"\" width=\"800\" height=\"326\" /></p>\r\n<p>Lấy đoạn code đ&oacute; gửi cho lập tr&igrave;nh vi&ecirc;n đang x&acirc;y dựng cho trang web của bạn, tự họ sẽ hiểu cần l&agrave;m g&igrave;.</p>\r\n<p>Đối với kh&aacute;ch h&agrave;ng đang sử dụng web của m&igrave;nh, bạn cũng c&oacute; thể gửi trực tiếp đoạn code đ&oacute; cho m&igrave;nh hoặc tự thao t&aacute;c bằng c&aacute;ch:</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>V&agrave;o trang quản trị web</li>\r\n<li>Chọn <strong>c&agrave;i đặt chung </strong></li>\r\n<li>K&eacute;o xuống <strong>c&agrave;i đặt code bổ sung </strong></li>\r\n<li>D&aacute;n đoạn code đ&oacute; v&agrave;o phần đầu trang</li>\r\n<li>Click <strong>Cập nhật</strong> l&agrave; ho&agrave;n tất&nbsp;</li>\r\n</ul>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/7ga.jpg\" alt=\"\" width=\"800\" height=\"336\" /></p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, 0, 1, 'Chi tiết cài đặt Google Analytics', 'Hướng dẫn chi tiết từng bước cài đặt Google Analytics vào website đang hoạt động.', NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', NULL, 18, NULL, '2020-05-19 12:04:15', '2020-05-20 06:51:47'),
(32, 'Trước khi làm web cần biết để không bị ăn bánh vẽ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'truoc-khi-lam-web-can-biet-de-khong-bi-an-banh-ve', '1589964388lam web co tam.jpg', '<p>Kh&ocirc;ng nhất thiết phải l&agrave; 1 người am hiểu về c&ocirc;ng nghệ, chỉ cần biết b&ecirc;n l&agrave;m web sẽ phải l&agrave;m g&igrave; cho bạn, bạn sẽ phải chuẩn bị g&igrave; v&agrave; nhận được g&igrave; khi b&agrave;n giao trang web để tr&aacute;nh những hậu họa về sau.</p>\r\n<p>M&igrave;nh sẽ chia ra 3 giai đoạn ch&iacute;nh để bạn h&igrave;nh dung r&otilde; r&agrave;ng, dễ hiểu:</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 36px;\"><strong>Trước khi k&yacute; hợp đồng</strong></span></p>\r\n<p>Bạn chưa cần l&agrave;m g&igrave; nhiều ở giai đoạn n&agrave;y, b&ecirc;n l&agrave;m web sẽ tư vấn cho bạn. Nhưng nếu l&agrave; người cẩn thận, h&atilde;y <strong>liệt k&ecirc;. ghi ra giấy những y&ecirc;u cầu cụ thể bạn muốn c&oacute; cho trang web của m&igrave;nh</strong>. L&agrave;m việc c&oacute; mục ti&ecirc;u bao giờ cũng hiệu quả hơn l&agrave; l&agrave;m nhưng kh&ocirc;ng biết m&igrave;nh đang l&agrave;m g&igrave;.</p>\r\n<p>Nếu ngay cả bạn c&ograve;n kh&ocirc;ng biết m&igrave;nh cần g&igrave; th&igrave; saler sẽ l&agrave;m thay cho bạn, nhưng x&aacute;c suất cao l&agrave; bạn sẽ bị nhồi nh&eacute;t h&agrave;ng đống chức năng chưa thật sự cần thiết cho trang web của m&igrave;nh. M&agrave; c&agrave;ng nhiều chức năng, chi ph&iacute; bỏ ra c&agrave;ng cao.</p>\r\n<p>Nếu kiến thức về web của bạn đ&atilde; bị hạn chế m&agrave; c&ograve;n kh&ocirc;ng may gặp phải sale kh&ocirc;ng c&oacute; t&acirc;m th&igrave; x&aacute;c suất cao bạn sẽ bị quay như dế. L&uacute;c đ&oacute; chỉ ước \"th&agrave; rằng m&igrave;nh chưa bao giờ l&agrave;m web\".</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 36px;\"><strong>Sau khi k&yacute; hợp đồng</strong></span></p>\r\n<p>Đơn giản l&agrave; ngồi chờ đến deadline v&agrave; nhận b&aacute;o c&aacute;o từ lập tr&igrave;nh vi&ecirc;n. Đ&acirc;y l&agrave; khoảng thời gian để coder tập trung v&agrave;o c&ocirc;ng việc n&ecirc;n bạn cũng đừng qu&aacute; hối th&uacute;c coder trước deadline m&agrave; tội hắn. M&igrave;nh cũng l&agrave; coder n&ecirc;n hiểu &aacute;p lực khi ch&uacute;ng n&oacute; đang tập trung v&agrave;o c&ocirc;ng việc m&agrave; 1 b&ecirc;n tai l&agrave; sếp, 1 tai c&ograve;n lại l&agrave; kh&aacute;ch h&agrave;ng.</p>\r\n<p>Bạn <strong>n&ecirc;n t&igrave;m 1 người quen c&oacute; hiểu biết sơ qua về web, SEO</strong> để test sản phẩm. Tr&aacute;nh trường hợp kh&ocirc;ng may c&aacute;i m&agrave; bạn nhận được chỉ l&agrave; 1 c&aacute;i web chỉ c&oacute; vỏ nhưng kh&ocirc;ng c&oacute; ruột.</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 36px;\"><strong>Sau khi b&agrave;n giao trang web</strong></span></p>\r\n<p>Đ&acirc;y l&agrave; <strong>giai đoạn quan trọng nhất khi bạn l&agrave;m web</strong>. Mặc d&ugrave; trang web đ&atilde; được b&agrave;n giao, thanh to&aacute;n đầy đủ nhưng trong qu&aacute; tr&igrave;nh sử dụng c&oacute; thể ph&aacute;t sinh ra lỗi cho d&ugrave; bạn c&oacute; test kỹ đến thế n&agrave;o đi nữa. Trước khi đặt b&uacute;t k&yacute; th&igrave; kh&aacute;ch h&agrave;ng l&agrave; cửa tr&ecirc;n, c&ograve;n khi đ&atilde; cầm tiền th&igrave; việc b&ecirc;n l&agrave;m web chăm s&oacute;c kh&aacute;ch h&agrave;ng mới l&agrave; c&aacute;i quyết định khoản tiền kh&aacute;ch h&agrave;ng đầu tư c&oacute; xứng đ&aacute;ng hay kh&ocirc;ng.</p>\r\n<p>Đừng ngạc nhi&ecirc;n nếu c&ugrave;ng 1 trang web, c&ugrave;ng 1 khối lượng c&ocirc;ng việc như nhau nhưng 1 b&ecirc;n b&aacute;o gi&aacute; rất thấp để gi&agrave;nh hợp đồng c&ograve;n 1 b&ecirc;n b&aacute;o gi&aacute; cao nhưng chứng minh được chất lượng dịch vụ của m&igrave;nh trong việc bảo h&agrave;nh, bảo tr&igrave; web cho kh&aacute;ch h&agrave;ng.</p>\r\n<p>X&acirc;y dựng được 1 trang web th&agrave;nh c&ocirc;ng v&agrave; đem lại doanh thu đều đặn kh&ocirc;ng phải chỉ 1 v&agrave;i ng&agrave;y m&agrave; thấy được. Phải mất &iacute;t nhất v&agrave;i th&aacute;ng hoặc cả năm trời th&igrave; bạn mới thấy được th&agrave;nh quả.</p>\r\n<p>Nếu quanh bạn kh&ocirc;ng c&oacute; ai để l&agrave;m tester th&igrave; đừng ngần ngại li&ecirc;n hệ với m&igrave;nh, m&igrave;nh sẽ sẵn s&agrave;ng gi&uacute;p đỡ. Đơn giản v&igrave; đối với m&igrave;nh, 1 mối quan hệ tốt sẽ đ&aacute;ng gi&aacute; hơn l&agrave; 1 hợp đồng chỉ v&agrave;i triệu bạc.</p>', NULL, NULL, NULL, NULL, NULL, 0, 1, 'Trước khi làm web cần biết để không bị ăn bánh vẽ', 'Giang hồ hiểm ác khó lường, thà biết trước để tránh hậu họa còn hơn tiền mất tật mang', NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', NULL, 18, NULL, '2020-05-20 08:43:05', '2020-05-22 06:39:36'),
(39, 'Giới thiệu', 'About us', NULL, NULL, NULL, NULL, '', '', 'gioi-thieu-iset-education', '1591631208hg_img1.png', '<h2><span style=\"font-size: 24px;\"><strong>DU HỌC ISET</strong></span></h2>\r\n<p><br />ISET &ndash; Một trong những c&ocirc;ng ty được cấp giấy ph&eacute;p hoạt động dịch vụ tư vấn du học sớm nhất tại Th&agrave;nh phố Hồ Ch&iacute; Minh v&agrave; được sở Kế hoạch &amp; Đầu tư cấp ph&eacute;p kinh doanh từ th&aacute;ng 6 năm 2012.</p>\r\n<p><br />ISET &ndash; Lấy kim chỉ nam &ldquo;Uy t&iacute;n &ndash; Tận t&acirc;m &ndash; Hiệu quả &rdquo; đồng h&agrave;nh trong mọi lĩnh vực hoạt động, mong muốn đem lại hiệu quả tối ưu v&agrave; sự h&agrave;i l&ograve;ng cho Qu&yacute; phụ huynh, học sinh khi gửi gắm niềm tin ở c&ocirc;ng ty.</p>\r\n<p><br />ISET &ndash; Lu&ocirc;n hướng tới việc đ&agrave;o tạo đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp, tinh thần tr&aacute;ch nhiệm cao để phục vụ Qu&yacute; kh&aacute;ch h&agrave;ng một c&aacute;ch chu đ&aacute;o, tận t&acirc;m.</p>\r\n<p><br />ISET &ndash; Đại diện tuyển sinh ch&iacute;nh thức của hơn 500 trường THPT, Cao đẳng, Đại học v&agrave; trung t&acirc;m Anh ngữ ở hầu hết c&aacute;c nước: Canada, Mỹ, &Uacute;c, Anh, New Zealand, Ireland, Singapore, Philippines, &hellip;</p>\r\n<p><br />ISET &ndash; H&agrave;ng năm lu&ocirc;n gửi đội ngũ nh&acirc;n vi&ecirc;n sang thăm trực tiếp c&aacute;c trường để nắm bắt tổng quan ch&acirc;n thực về m&ocirc;i trường học tập v&agrave; đời sống du học sinh c&aacute;c nước nhằm hỗ trợ tư vấn đạt kết quả như mong đợi.</p>\r\n<p><br />ISET &ndash; Lu&ocirc;n đồng h&agrave;nh, hỗ trợ v&agrave; kết nối cộng đồng du học sinh trong suốt qu&aacute; tr&igrave;nh học tập, sinh sống tại c&aacute;c nước sở tại gi&uacute;p c&aacute;c em sớm h&ograve;a nhập v&agrave; th&iacute;ch nghi với m&ocirc;i trường học tập mới.</p>\r\n<p><br />Với những mục ti&ecirc;u &ldquo;Uy t&iacute;n &ndash; Tận T&acirc;m &ndash; Hiệu quả&rdquo;, ISET đ&atilde; trở th&agrave;nh đối t&aacute;c đ&aacute;ng tin cậy của h&agrave;ng ng&agrave;n Phụ huynh, học sinh trong nhiều năm qua.</p>\r\n<p><br />Để biết th&ecirc;m th&ocirc;ng tin chi tiết, vui l&ograve;ng li&ecirc;n hệ ISET</p>\r\n<p><br /><strong>Trụ sở ch&iacute;nh:</strong></p>\r\n<ul>\r\n<li>250 T&ocirc; Hiệu, Phường Hiệp T&acirc;n, Quận T&acirc;n Ph&uacute;, TP. Hồ Ch&iacute; Minh</li>\r\n<li>Điện thoại: (+84) 28 3976 1029&nbsp;</li>\r\n<li>Email: <a href=\"mailto:info@isetedu.com.vn\">info@isetedu.com.vn</a></li>\r\n</ul>\r\n<p><strong>Chi nh&aacute;nh Quận 3:</strong></p>\r\n<ul>\r\n<li>23 L&yacute; Ch&iacute;nh Thắng, Phường 8, Quận 3, TP. Hồ Ch&iacute; Minh</li>\r\n<li>Điện thoại: (+84) 28 3976 1029</li>\r\n<li>Email: <a href=\"mailto:info@isetedu.com.vn\">info@isetedu.com.vn</a></li>\r\n</ul>\r\n<p><strong>Chi nh&aacute;nh Canada:</strong></p>\r\n<ul>\r\n<li>NE, Calgary, Canada</li>\r\n<li>Email: <a href=\"mailto:info@isetedu.com.vn\">info@isetedu.com.vn</a></li>\r\n</ul>\r\n<p><br />Fanpage: <strong><a title=\"Du học ISET Edu Việt Nam\" href=\"https://www.facebook.com/duhociset/\" target=\"_blank\" rel=\"noopener\">Du học ISET Edu Việt Nam</a></strong><br />Website: <a title=\"isetedu.com.vn\" href=\"isetedu.com.vn\"><strong>isetedu.com.vn</strong></a></p>', '<h2><span style=\"font-size: 24px;\"><strong>Saigon International Education &amp; Trading (ISET)</strong></span></h2>\r\n<p>&nbsp;</p>\r\n<p>ISET - one of the earliest companies licensed in Overseas Study Consulting Services in Ho Chi Minh City and licensed by the VietNam goverment from June 2012.</p>\r\n<p>ISET - with slogan \"Prestige - Dedication - Efficiency\" accompanies in all areas of activity, desires to bring the best efficiency and satisfaction to parents and students when giving faith in company.</p>\r\n<p>ISET - always aiming to train professional staff, high sense of responsibility to serve customers in a thoughtful, dedicated manner.</p>\r\n<p>ISET - official admissions representative of more than 400 high schools, colleges, universities and English centers in most countries: Canada, USA, Australia, New Zealand, Ireland, Singapore, Philippines, ...</p>\r\n<p>ISET - always sends staff directly to schools every year to get an honest overview of the study environment and international students\' lives in order to support counseling to achieve the expected results.</p>\r\n<p><br />ISET - always accompany, support and connect the international student community throughout the learning process, living in the host countries to help them soon integrate and adapt to the new learning environment.</p>\r\n<p><br />With the goals of \"Prestige - Dedicated - Effective\", ISET EDU has become a reliable partner of thousands of parents and students over the years.</p>\r\n<p><br />For more details, please contact ISET</p>\r\n<p><br />VietNam headquarter:</p>\r\n<ul>\r\n<li>250 To Hieu Street, Hiep Tan Ward, Tan Phu District, City. Ho Chi Minh</li>\r\n<li>Email: <a href=\"mailto:info@isetedu.com.vn\">info@isetedu.com.vn</a></li>\r\n<li>Phone: 028 3976 1029 or 0902 912 029</li>\r\n</ul>\r\n<p>Represent office 1:</p>\r\n<ul>\r\n<li>23 Ly Chinh Thang, Ward 8, District 3, City. Ho Chi Minh</li>\r\n<li>Email: <a href=\"mailto:info@isetedu.com.vn\">info@isetedu.com.vn</a></li>\r\n<li>Phone: 028 3976 1029 or 0902 912 029</li>\r\n</ul>\r\n<p>Canada represent office:</p>\r\n<ul>\r\n<li>NE, Calgary, Canada</li>\r\n<li>Email: info@isetedu.com.vn</li>\r\n</ul>\r\n<p><br />Fanpage: <a href=\"https://www.facebook.com/duhociset\" target=\"_blank\" rel=\"noopener\"><strong>Study in ISET Edu Vietnam</strong></a><br />Website: <a title=\"isetedu.com.vn\" href=\"isetedu.com.vn\"><strong>isetedu.com.vn</strong></a></p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, NULL, 0, 1, 'Giới thiệu', 'Giới thiệu ISET education', NULL, NULL, NULL, NULL, NULL, 'keyword giới thiệu', 'Tuấn Anh', 'Phan Thị Kim Anh', 18, 'about', '2020-06-08 15:46:48', '2020-06-23 03:35:32'),
(49, 'Tuyển dụng', 'Recruitment', NULL, NULL, NULL, NULL, '', '', 'tuyen-dung', '1591694032tải xuống.png', '<p>Tư vấn cho kh&aacute;ch h&agrave;ng (Bao gồm Phụ huynh v&agrave; học sinh) về chương tr&igrave;nh Du học c&aacute;c nước: &Uacute;c, Mỹ, Canada, Singapore,...</p>\r\n<p>- Tham gia c&aacute;c buổi training, đ&agrave;o tạo của c&aacute;c trường</p>\r\n<p>- Li&ecirc;n hệ, chăm s&oacute;c kh&aacute;ch h&agrave;ng theo data từ bộ phận marketing đưa về</p>\r\n<p>- Duy tr&igrave; v&agrave; x&acirc;y dựng mối quan hệ với kh&aacute;ch h&agrave;ng để ph&aacute;t triển lượng kh&aacute;ch h&agrave;ng giới thiệu</p>\r\n<p>- Phối hợp c&ugrave;ng Trưởng văn ph&ograve;ng v&agrave; bộ phận marketing l&ecirc;n kế hoạch kinh doanh</p>\r\n<p>+ Được hỗ trợ data từ c&ocirc;ng ty để l&agrave;m việc</p>\r\n<p>+ Được tham gia c&aacute;c chuyến c&ocirc;ng t&aacute;c, thăm quan nước ngo&agrave;i: Canada, &Uacute;c, Mỹ, Ireland,..</p>', '<p>Advising customers (Including Parents and students) on the Study Abroad program in Australia, USA, Canada, Singapore, ...</p>\r\n<p>- Attend training and training sessions of schools</p>\r\n<p>- Contact, take care of data from the marketing department</p>\r\n<p>- Maintain and build relationships with customers to develop referral customers</p>\r\n<p>- Coordinate with Head of Office and marketing department to plan business</p>\r\n<p>+ Supported data from the company to work</p>\r\n<p>+ Participating in business trips, visiting foreign countries: Canada, Australia, USA, Ireland, ..</p>', NULL, NULL, NULL, NULL, 0, 1, 'ISET tuyển dụng', 'ISET tuyển dụng', NULL, NULL, NULL, NULL, NULL, 'keyword tuyển dụng', 'Tuấn Anh', 'Kim Anh', 18, 'about', '2020-06-09 09:13:52', '2020-06-23 03:37:48');
INSERT INTO `tb_blog` (`blog_id`, `blog_ten`, `blog_ten_en`, `blog_ten_vi`, `blog_ten_zh`, `blog_ten_ja`, `blog_ten_kr`, `blog_place`, `blog_place_en`, `blog_slug`, `blog_thumb`, `blog_noidung`, `blog_noidung_en`, `blog_noidung_vi`, `blog_noidung_zh`, `blog_noidung_ja`, `blog_noidung_kr`, `blog_noibat`, `blog_hienthi`, `blog_title`, `blog_mota`, `blog_mota_vi`, `blog_mota_en`, `blog_mota_zh`, `blog_mota_ja`, `blog_mota_kr`, `blog_keyword`, `blog_nguoiviet`, `blog_editor`, `blog_blogcatid`, `blog_type`, `created_at`, `updated_at`) VALUES
(61, 'Định cư Canada - Cơ hội chưa bao giờ rộng mở đến thế', '', NULL, NULL, NULL, NULL, '', '', 'dinh-cu-canada-co-hoi-chua-bao-gio-rong-mo-den-the', '1592858087dinh-cu-canada.jpg', '<p><span style=\"font-size: 18px;\">Với m&ocirc;i trường kh&iacute; hậu thuận lợi v&agrave; t&igrave;nh h&igrave;nh ch&iacute;nh trị lu&ocirc;n ổn định trong thời gian d&agrave;i như Canada th&igrave; việc định cư tại đ&acirc;y chắc chắn sẽ được rất nhiều Việt kiều c&acirc;n nhắc rất kỹ lưỡng. V&agrave; tin mừng d&agrave;nh cho những người muốn định cư tại Canada rằng đ&acirc;y sẽ kh&ocirc;ng c&ograve;n l&agrave; ước mơ qu&aacute; xa với v&igrave; Canada lu&ocirc;n mong muốn ch&agrave;o đ&oacute;n những người nhập cư v&agrave;o đất nước của họ. Thậm ch&iacute; c&ograve;n lập ra bộ \"Nhập cư v&agrave; di tr&uacute;\" chuy&ecirc;n giải quyết những vấn đề nhập cư tại đất nước n&agrave;y. Vậy l&yacute; do n&agrave;o Canada lại ch&agrave;o đ&oacute;n những người nhập cư đến vậy ?</span></p>\r\n<h3><span style=\"font-size: 24px;\"><strong>1. Canada l&agrave; 1 đất nước c&oacute; nền kinh tế ph&aacute;t triển tr&ecirc;n thế giới</strong></span></h3>\r\n<p><span style=\"font-size: 18px;\">GDP năm 2018 của Canada l&agrave; 1713 tỷ USD v&agrave; đạt mốc 1740 tỷ USD, đứng thứ 10 tr&ecirc;n thế giới</span></p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/upload/blog/gdp-canada.PNG\" width=\"731\" height=\"332\" /></p>\r\n<p style=\"text-align: center;\"><em>(nguồn: Trading Economics | World Bank)</em></p>\r\n<p><span style=\"font-size: 18px;\">Canada c&ograve;n l&agrave; th&agrave;nh vi&ecirc;n của G8 - nh&oacute;m c&aacute;c nước c&oacute; nền kinh tế v&agrave; c&ocirc;ng nghiệp ph&aacute;t triển nhất thế giới hiện nay.</span></p>\r\n<p><span style=\"font-size: 18px;\">Với sự ph&aacute;t triển kinh tế mạnh mẽ, lu&ocirc;n &aacute;p dụng c&ocirc;ng nghệ cao trong hoạt động sản xuất v&agrave; ph&aacute;t triển. Canada lu&ocirc;n cần những nguồn nh&acirc;n lực chất lượng cao, phục vụ cho nhu cầu ph&aacute;t triển hiện đại h&oacute;a nền kinh tế của m&igrave;nh.</span></p>\r\n<h3><span style=\"font-size: 24px;\"><strong>2. Thực trạng d&acirc;n số</strong></span></h3>\r\n<p><span style=\"font-size: 18px;\">Đi k&egrave;m với nền kinh tế ph&aacute;t triển nhưng Canada lại thiếu hụt nguồn nh&acirc;n lực để đ&aacute;p ứng cho sự ph&aacute;t triển. D&acirc;n số Canada hiện đang gi&agrave; h&oacute;a nhanh v&agrave; số người trong độ tuổi lao động đang giảm dần. Hiện số lượng lao động Canada chỉ c&oacute; thể cung ứng tối đa 70% nhu cầu cho nền kinh tế. V&igrave; vậy, giải ph&aacute;p Canada đưa ra l&agrave; thu h&uacute;t nguồn lao động nhập cư c&oacute; tay nghề cao tr&ecirc;n thế giới.</span></p>\r\n<p><span style=\"font-size: 18px;\">Hiện Canada đ&atilde; đặt ra 1 kế hoạch cụ thể cho vấn đề nhập cư chi tiết đến năm 2021. Theo đ&oacute;, dựa v&agrave;o b&aacute;o c&aacute;o năm 2018 của bộ trưởng bộ di tr&uacute; Canada Ahmed Hussen, Canada sẽ c&oacute; kế hoạch tiếp nhận khoảng 1.080.000 người nhập cư trong giai đoạn 2019-2021. Đặc biệt trong năm 2021, con số mục ti&ecirc;u đưa ra l&ecirc;n tới 350.000 người.</span></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/upload/blog/ke-hoach-nhap-cu-canada.PNG\" width=\"731\" height=\"332\" /></p>\r\n<p style=\"text-align: center;\"><em>Bản gốc kế hoạch nhập cư Canada giai đoạn 2019-2021 (Nguồn: canada.net.vn)</em></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 18px;\">V&agrave; trong nhiệm kỳ mới khi tiếp nhận ghế bộ trưởng từ &ocirc;ng Ahmed Hussen, &ocirc;ng Marco Mendicino lu&ocirc;n ủng hộ mạnh mẽ cho chương tr&igrave;nh nhập cư n&agrave;y v&agrave; đảm bảo n&oacute; lu&ocirc;n đi đ&uacute;ng hướng với kế hoạch đề ra.</span></p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/upload/blog/Ahmed-Hussen.PNG\" width=\"397\" height=\"399\" /></p>\r\n<p style=\"text-align: center;\"><em>&Ocirc;ng Ahmed Hussen, nguy&ecirc;n bộ trưởng bộ di tr&uacute; Canada. L&agrave; 1 người nhập cư Canada gốc Somalia</em></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/upload/blog/Marco-Mendicinominister.png\" width=\"768\" height=\"auto\" /></p>\r\n<p style=\"text-align: center;\"><em>T&acirc;n bộ trưởng bộ di tr&uacute; Canada, &ocirc;ng Marco Mendicino. Xuất th&acirc;n l&agrave; người nhập cư Canada gốc &Yacute;</em></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><iframe src=\"https://www.youtube.com/embed/M7unVO1DOfQ\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p style=\"text-align: center;\"><em>Buổi gặp gỡ của nguy&ecirc;n bộ trưởng bộ di tr&uacute; Canada Ahmed Hussen tại nh&agrave; của 1 cộng đồng người Việt</em></p>\r\n<p style=\"text-align: center;\"><em>v&agrave; ph&aacute;t biểu ngắn của &ocirc;ng về vấn đề nhập cư trước thềm bầu cử 2019</em></p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 18px;\">Với rất nhiều l&yacute; do để Canada ch&agrave;o đ&oacute;n những người nhập cư đến với đất nước m&igrave;nh. Nhưng c&ograve;n t&ugrave;y thuộc v&agrave;o từng ng&agrave;nh nghề cụ thể v&agrave; tại c&aacute;c bang sẽ c&oacute; những ch&iacute;nh s&aacute;ch v&agrave; điều kiện ri&ecirc;ng để ch&iacute;nh thức trở th&agrave;nh c&ocirc;ng d&acirc;n Canada. H&atilde;y t&igrave;m hiểu th&ocirc;ng tin thật kỹ v&agrave; đưa ra quyết định đ&uacute;ng đắn nhất cho hướng đi của m&igrave;nh. ISET sẽ lu&ocirc;n đồng h&agrave;nh c&ugrave;ng bạn tr&ecirc;n con đường n&agrave;y</span></p>', '', NULL, NULL, NULL, NULL, 0, 0, 'Định cư Canada - Cơ hội chưa bao giờ rộng mở đến thế', 'Những chính sách mở cửa cho những người dân có mong muốn nhập cư và trở thành công dân Canada. Đất nước Canada luôn rộng mở dành cho những người nhập cư nói chung và người dân Việt Nam nói riêng', NULL, NULL, NULL, NULL, NULL, 'định cư Canada, dinh cu Canada', 'Tuấn Anh', 'Tuấn Anh', 26, 'invest', '2020-06-22 20:34:47', '2020-06-30 02:04:37'),
(62, 'Chính sách nhập cư Canada ở từng bang', '', NULL, NULL, NULL, NULL, '', '', 'chinh-sach-nhap-cu-canada-o-tung-bang', '1592864923chinh-sach-dinh-cu-canada.jpg', '<p>Đặc th&ugrave; nhập cư Canada ở từng tỉnh bang sẽ kh&aacute;c nhau do nhu cầu ph&aacute;t triển từng ng&agrave;nh nghề v&agrave; vị tr&iacute; địa l&yacute; n&ecirc;n nguồn nh&acirc;n lực sẽ dựa theo đ&oacute; để ph&aacute;t triển kinh tế.</p>\r\n<h3><strong><span style=\"font-size: 24px;\">1. Bang New Brunswick</span></strong></h3>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/upload/blog/new brunswitch.PNG\" width=\"531\" height=\"auto\" /></p>\r\n<p>Mật độ d&acirc;n số chỉ ở mức rất thấp với 1 người/ km2. Do vậy, bang n&agrave;y đang rất cần ph&aacute;t triển nguồn nh&acirc;n lực để ph&aacute;t triển kinh tế. Đi k&egrave;m theo đ&oacute; l&agrave; những ch&iacute;nh s&aacute;ch đặc biệt ưu đ&atilde;i:</p>\r\n<ul>\r\n<li>Đ&atilde; c&oacute; việc l&agrave;m ch&iacute;nh thức tại bang</li>\r\n<li>L&agrave;m chư cơ sở kinh doanh đang hoạt động tại bang từ 1 năm trở l&ecirc;n</li>\r\n<li>Độ tuổi từ 22 đến 55 tuổi</li>\r\n<li>Đạt tr&igrave;nh độ ngoại ngữ theo y&ecirc;u cầu nhất định</li>\r\n</ul>\r\n<p>Bộ di tr&uacute; New Brunswick lấy thang điểm tối đa l&agrave; 78 điểm. Chỉ cần ứng vi&ecirc;n đạt 50 điểm l&agrave; đ&atilde; đủ y&ecirc;u cầu được ph&eacute;p định cư.</p>\r\n<p>Trường hợp định cư Canada theo diện Skilled Worker th&igrave; sẽ được chia l&agrave;m 3 trường hợp với số điểm tối đa lần lượt l&agrave; 50, 51 v&agrave; 54 cụ thể như sau:</p>\r\n<p><strong>Trường hợp 1: Điểm tối thiểu l&agrave; 50</strong></p>\r\n<ul>\r\n<li>C&oacute; độ tuổi từ 28 tuổi trở l&ecirc;n</li>\r\n<li>C&oacute; việc l&agrave;m tại New Brunswick (kh&ocirc;ng y&ecirc;u cầu thời gian l&agrave;m việc)</li>\r\n<li>C&oacute; bằng tốt nghiệp đại học v&agrave; đ&atilde; đi l&agrave;m 4 năm tại Việt Nam</li>\r\n<li>Đ&atilde; học 2 năm ở New Brunswick</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Trường hợp 2: Điểm tối thiểu l&agrave; 51</strong></p>\r\n<ul>\r\n<li>Tốt nghiệp cấp 3 tại Việt Nam</li>\r\n<li>Du học Canada tại bang New Brunswick</li>\r\n<li>Tốt nghiệp v&agrave; l&agrave;m việc trong 1 năm (độ tuổi từ 22 đến 24)</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Trường hợp 3: Điểm tối thiểu 54</strong></p>\r\n<ul>\r\n<li>C&oacute; bằng tốt nghiệp đại học tại Việt Nam</li>\r\n<li>Học 2 năm tại tại bang New Brunswick</li>\r\n<li>Tốt nghiệp v&agrave; l&agrave;m việc trong 1 năm (độ tuổi 26 )</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3><strong><span style=\"font-size: 24px;\">2. Bang British Columbia</span></strong></h3>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/upload/blog/British-columbia.PNG\" width=\"531\" height=\"auto\" /></p>\r\n<p>Sở hữu đường bờ biển d&agrave;i v&agrave; nhiều đảo ở bờ T&acirc;y. Bang British Columbia c&oacute; lợi thế ph&aacute;t triển mạnh những ng&agrave;nh nghề về du lịch. Sinh vi&ecirc;n những ng&agrave;nh học n&agrave;y cũng sẽ c&oacute; được những ưu đ&atilde;i ri&ecirc;ng.&nbsp;</p>\r\n<p>Với mật độ d&acirc;n số rất thấp, chỉ với 5 người/ km2. Tỉnh bang n&agrave;y c&oacute; ch&iacute;nh s&aacute;ch cực kỳ hấp dẫn d&agrave;nh cho người nhập cư. Theo đ&oacute;, du học sinh quốc tế thuộc 1 trong 2 trường hợp dưới đ&acirc;y khi muốn định cư Canada tại tỉnh bang n&agrave;y cần đạt những điều kiện sau để được định cư:</p>\r\n<p><strong>Trường hợp 1: </strong>D&agrave;nh cho du học sinh đang theo học chương tr&igrave;nh Post Graduates (Nộp đơn ch&iacute;nh s&aacute;ch định cư m&agrave; kh&ocirc;ng cần Job Offer)</p>\r\n<ul>\r\n<li>C&oacute; &yacute; định sinh sống v&agrave; l&agrave;m việc l&acirc;u d&agrave;i tại British Columbia</li>\r\n<li>Thời gian học tối thiểu nhất 2 năm</li>\r\n<li>C&oacute; bằng Thạc sĩ hoặc Tiến sĩ</li>\r\n<li>L&agrave;m việc trong c&aacute;c lĩnh vực: Sức khỏe, Tự nhi&ecirc;n v&agrave; Khoa học ứng dụng</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Trường hợp 2:</strong> D&agrave;nh cho du học sinh quốc tế đ&atilde; tốt nghiệp tại Canada</p>\r\n<ul>\r\n<li>Thời gian học &iacute;t nhất từ 8 th&aacute;ng trở l&ecirc;n</li>\r\n<li>C&oacute; chứng chỉ hoặc bằng cao đẳng hoặc bằng đại học</li>\r\n<li>C&oacute; &yacute; định sinh sống v&agrave; l&agrave;m việc tại Canada (ngoại trừ Quebec)</li>\r\n<li>Đ&atilde; c&oacute; việc l&agrave;m tại British Columbia</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3><strong><span style=\"font-size: 24px;\">3. Bang Manitoba</span></strong></h3>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/upload/blog/Manitoba.PNG\" width=\"531\" height=\"auto\" /></p>\r\n<p>Sinh vi&ecirc;n quốc tế được ph&eacute;p định cư tại bang n&agrave;y chỉ sau 6 th&aacute;ng sau khi tốt nghiệp m&agrave; kh&ocirc;ng cần x&eacute;t điểm.</p>\r\n<p>Ch&iacute;nh s&aacute;ch n&agrave;y đặc biệt d&agrave;nh cho du học sinh đang học tập tại đ&acirc;y, những người muốn định cư tại Canada nhưng kh&ocirc;ng cần người bảo l&atilde;nh hay t&iacute;nh điểm. Sau khi tốt nghiệp bạn chỉ cần l&agrave;m việc tối thiểu 6 th&aacute;ng tại tỉnh bang n&agrave;y, nộp hồ sơ xin nhập cư l&agrave; bạn đ&atilde; trở th&agrave;nh c&ocirc;ng d&acirc;n Canada rồi.</p>\r\n<p>&nbsp;</p>\r\n<h3><strong><span style=\"font-size: 24px;\">4. Bang Newfoundland &amp; Labrador</span></strong></h3>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/upload/blog/Newfoundland.PNG\" width=\"531\" height=\"auto\" /></p>\r\n<p>Đ&acirc;y l&agrave; bang với số lượng người nhập cư trung b&igrave;nh l&ecirc;n tới 4000 người/ năm.</p>\r\n<p>Đối với du học sinh quốc tế n&oacute;i chung nếu muốn định cư th&igrave; phải đ&aacute;p ứng điều kiện sau:</p>\r\n<p><strong>Trường hợp 1:</strong> Du học sinh theo học tại trường Memorial University hoặc trường cao đẳng North Atlantic sẽ được nộp đơn theo chương tr&igrave;nh NLPNP International Graduate. Đ&acirc;y l&agrave; chương tr&igrave;nh định cư Canada d&agrave;nh cho sinh vi&ecirc;n chỉ cần tốt nghiệp v&agrave; điều kiện l&agrave; c&oacute; việc l&agrave;m (kh&ocirc;ng nhất thiết l&agrave; phải l&agrave;m việc đ&uacute;ng chuy&ecirc;n ng&agrave;nh).</p>\r\n<p>Ch&iacute;nh s&aacute;ch n&agrave;y kh&aacute; thuận lợi cho du học sinh. Tuy nhi&ecirc;n, cũng c&oacute; hạn chế đi k&egrave;m l&agrave; du học sinh chỉ được ph&eacute;p học 1 hoặc 2 trường ở tr&ecirc;n.</p>\r\n<p><strong>Trường hợp 2: </strong>D&agrave;nh cho du học sinh tốt nghiệp c&aacute;c trường đại học cao đẳng c&ocirc;ng lập ở Canada.</p>\r\n<ul>\r\n<li>Tốt nghiệp cao đẳng hay đại học bất kỳ n&agrave;o ở Canada</li>\r\n<li>Ho&agrave;n th&agrave;nh &iacute;t nhất 1 năm post graduate degree/ certificate hoặc 2 năm diploma hoặc degree trở l&ecirc;n</li>\r\n<li>C&oacute; kinh nghiệm l&agrave;m việc to&agrave;n thời gian từ 2 năm trở l&ecirc;n</li>\r\n<li>Trong trường hợp nếu bạn tốt nghiệp từ tỉnh Newfoundland (NL) th&igrave; chỉ cần c&oacute; hợp đồng l&agrave;m việc to&agrave;n thời gian l&agrave; c&oacute; thể nộp định cư ngay. C&ograve;n tốt nghiệp từ tỉnh kh&aacute;c th&igrave; cần phải l&agrave;m việc sau 1 năm</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3><strong><span style=\"font-size: 24px;\">5. Bang Saskatchewan</span></strong></h3>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/upload/blog/Saskatchewan.PNG\" width=\"531\" height=\"auto\" /></p>\r\n<p>Khi theo học tại tỉnh bang n&agrave;y. Th&igrave; du học sinh quốc tế phải l&agrave; 1 trong 2 trường hợp sau sẽ được cấp thường tr&uacute; khi đủ điều kiện:</p>\r\n<p><strong>Trường hợp 1: </strong>D&agrave;nh cho du học sinh học cao đẳng v&agrave; đại học</p>\r\n<ul>\r\n<li>Ho&agrave;n tất chương tr&igrave;nh học to&agrave;n thời gian sau Trung học phổ th&ocirc;ng tại Canada &iacute;t nhất 1 năm học (8 th&aacute;ng)</li>\r\n<li>Được nhận chứng chỉ hoặc văn bằng c&ocirc;ng nh&acirc;n tại một trường ở Canada</li>\r\n<li>C&oacute; giấy ph&eacute;p l&agrave;m việc d&agrave;nh cho sinh vi&ecirc;n đ&atilde; tốt nghiệp tại c&ocirc;ng ty hay doanh nghiệp ở Saskatchewan trong thời gian &iacute;t nhất l&agrave; 6 th&aacute;ng (tối thiểu 960 giờ)</li>\r\n<li>Nhận được cấp ph&eacute;p l&agrave;m việc sau khi tốt nghiệp của Cục Di Tr&uacute; (CIC)</li>\r\n<li>C&oacute; thư mời thư mời l&agrave;m việc ch&iacute;nh thức to&agrave;n thời gian từ 1 c&ocirc;ng ty tại Saskatchewan</li>\r\n</ul>\r\n<p><strong>Trường hợp 2:</strong> D&agrave;nh cho du học sinh học Cao học v&agrave; Tiến sĩ</p>\r\n<ul>\r\n<li>C&oacute; dự định sinh sống tại Saskatchewan</li>\r\n<li>C&oacute; bằng tốt nghiệp cao học hoặc tiến sĩ với tối thiểu 1 năm học to&agrave;n thời gian từ đại học Saskatchewan hoặc Đại học Regina</li>\r\n<li>C&oacute; tối thiểu 6 th&aacute;ng l&agrave;m việc trong lĩnh vực đ&agrave;o tạo tại Saskatchewan</li>\r\n<li>Nộp đơn trong v&ograve;ng 2 năm sau khi tốt nghiệp</li>\r\n<li>Chồng hoặc vợ đang l&agrave;m việc ch&iacute;nh thức to&agrave;n thời gian tại Saskatchewan</li>\r\n<li>Đủ t&agrave;i ch&iacute;nh để trang trải cuộc sống cơ bản (10.000 CAD/1ứng vi&ecirc;n v&agrave; 2.000 CAD/ mỗi th&agrave;nh vi&ecirc;n gia đ&igrave;nh đi c&ugrave;ng)</li>\r\n<li>Được nhận lời mời l&agrave;m việc trong lĩnh vực đ&agrave;o tạo tại Saskatchewan hoặc đang l&agrave;m việc trong lĩnh vực đ&agrave;o tạo hoặc với kỳ hạn &iacute;t nhất 6 th&aacute;ng</li>\r\n</ul>\r\n<p>&nbsp;</p>', '', NULL, NULL, NULL, NULL, 0, 0, 'Chính sách nhập cư Canada ở từng bang', 'Chính sách nhập cư Canada ở từng bang', NULL, NULL, NULL, NULL, NULL, 'nhập cư Canada, nhap cu canada', 'Tuấn Anh', 'Tuấn Anh', 26, 'invest', '2020-06-22 22:28:43', '2020-06-25 04:50:31'),
(79, NULL, 'Minh Global supporting flood victims in Central Vietnam', 'Công ty Minh Global chung tay hỗ trợ miền Trung', 'Minh Global支援越南中部水灾灾民', 'Minh Globalはベトナム中部の洪水被害者を支援', '민 글로벌, 베트남 중부 수해 피해자 지원', '', '', 'cong-ty-minh-global-chung-tay-ho-tro-mien-trung', '1604561775Nwes.jpg', NULL, '<p style=\"text-align: justify;\">Central Vietnam has been battered by two subsequent storms over the past two weeks. Heavy downpours triggered flashfloods and landslides, leaving 111 dead and 22 missing.</p>\r\n<p style=\"text-align: justify;\">Over the last month, Minh Global\'s staffs and leaders have made donation to support flood-stricken victim in the Central Region.</p>\r\n<p style=\"text-align: justify;\">On October 21 and 22, Representatives of Minh Global in coordination with local government of Sa Nam village, Vinh Long commune, Vinh Linh district, Quang Tri province have given 200 gifts to people affected by natural disasters.</p>\r\n<p style=\"text-align: center;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://2.pik.vn/2020e60c0162-f9eb-4905-a0f2-4860b596e0e5.jpg\" alt=\"\" width=\"960\" height=\"720\" /><em>Giving gifts to local people in Sa Nam village, Vinh Long commune, Vinh Linh district, Quang Tri province</em></p>\r\n<p>Also, on November 10, Representatives of Minh Global have given gifts to students affected by floods in Thanh Co Secondary School, Quang Tri.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://i.ibb.co/sQvmwwh/z2170355462087-950316dcac484ae54284c71eca28c5c4.jpg\" alt=\"\" width=\"960\" height=\"720\" /></p>', '<p style=\"text-align: justify;\">Trước t&igrave;nh h&igrave;nh mưa b&atilde;o vừa qua tại miền Trung, tập thể c&ocirc;ng nh&acirc;n vi&ecirc;n v&agrave; l&atilde;nh đạo của c&ocirc;ng ty Minh Global đ&atilde; tiến h&agrave;nh quy&ecirc;n g&oacute;p hỗ trợ đồng b&agrave;o miền Trung bị ảnh hưởng lũ lụt tại miền Trung.</p>\r\n<p style=\"text-align: justify;\">Trong 2 ng&agrave;y 21 v&agrave; 22/10/2020, Đại diện c&ocirc;ng ty Minh Global phối hợp với ch&iacute;nh quyền th&ocirc;n Sa Nam, x&atilde; Vĩnh Long, huyện Vĩnh Linh, tỉnh Quảng Trị trao 200 phần qu&agrave; cho người d&acirc;n bị ảnh hưởng bởi thi&ecirc;n tai.</p>\r\n<p style=\"text-align: center;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://2.pik.vn/2020e60c0162-f9eb-4905-a0f2-4860b596e0e5.jpg\" alt=\"\" width=\"960\" height=\"720\" /><em>Trao qu&agrave; cho người d&acirc;n địa phương tại th&ocirc;n Sa Nam, x&atilde; Vĩnh Long, huyện Vĩnh Linh, tỉnh Quảng Trị&nbsp;</em></p>\r\n<p>Đồng thời, v&agrave;o ng&agrave;y 10/11, đại diện c&ocirc;ng ty Minh Global cũng đ&atilde; trao qu&agrave; hỗ trợ cho c&aacute;c học sinh bị ảnh hưởng bởi lũ của trường THCS Th&agrave;nh Cổ, Quảng Trị.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://i.ibb.co/sQvmwwh/z2170355462087-950316dcac484ae54284c71eca28c5c4.jpg\" alt=\"\" width=\"960\" height=\"720\" /></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', '<p style=\"text-align: justify;\">过去两周，越南中部地区先后遭受了两次暴风雨的袭击。暴雨引发山洪和山体滑坡，造成111人死亡，22人失踪。</p>\r\n<p style=\"text-align: justify;\">在过去的一个月里，Minh Global的员工和领导们为支援中部地区的水灾灾民进行了捐款。</p>\r\n<p style=\"text-align: justify;\">10月21日、22日，Minh Global代表与廣治省永临县永隆乡沙南村地方政府合作，向受自然灾害影响的人们赠送了200份礼物。</p>\r\n<p style=\"text-align: center;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://2.pik.vn/2020e60c0162-f9eb-4905-a0f2-4860b596e0e5.jpg\" alt=\"\" width=\"960\" height=\"720\" /><em>在廣治省永定县永隆乡沙南村给当地人送礼。</em></p>\r\n<p>此外，11月10日，Minh Global公司的代表也向廣治省Thanh Co中学的受灾学生赠送了礼物。</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://i.ibb.co/sQvmwwh/z2170355462087-950316dcac484ae54284c71eca28c5c4.jpg\" alt=\"\" width=\"960\" height=\"720\" /></p>', '<p style=\"text-align: justify;\">ベトナム中部では、過去2週間に渡って2度の暴風雨に見舞われた。豪雨は鉄砲水と地滑りを引き起こし、111人の死者と22人の行方不明者を出した。</p>\r\n<p style=\"text-align: justify;\">先月、Minh Globalのスタッフとリーダーは、越南中部の洪水被害者を支援するために寄付を行いました。</p>\r\n<p style=\"text-align: justify;\">10月21日と22日、ミングローバルの代表者はクアントリ省ビンリン区ビンロンコミューンのサナム村の地方政府と協力して、自然災害の被害を受けた人々に200個のプレゼントを贈った。</p>\r\n<p style=\"text-align: center;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://2.pik.vn/2020e60c0162-f9eb-4905-a0f2-4860b596e0e5.jpg\" alt=\"\" width=\"960\" height=\"720\" /><em>クアントリ省ビンリン区ビンロンコミューンのサナム村で地元の人にプレゼントを贈る</em></p>\r\n<p style=\"text-align: justify;\">また、11月10日、Minh Globalの代表者は、クアンチ省のタインコ中等教育学校で洪水の被害を受けた生徒にプレゼントを贈った。</p>\r\n<p style=\"text-align: justify;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://i.ibb.co/sQvmwwh/z2170355462087-950316dcac484ae54284c71eca28c5c4.jpg\" alt=\"\" width=\"960\" height=\"720\" /></p>', '<div>\r\n<p><span lang=\"KO\">중부</span> <span lang=\"KO\">베트남은</span> <span lang=\"KO\">지난</span> 2 <span lang=\"KO\">주</span> <span lang=\"KO\">동안</span> <span lang=\"KO\">두</span> <span lang=\"KO\">차례의</span> <span lang=\"KO\">폭풍으로</span> <span lang=\"KO\">타격을</span> <span lang=\"KO\">입었습니다</span>. <span lang=\"KO\">폭우로</span> <span lang=\"KO\">인해</span> <span lang=\"KO\">돌발</span> <span lang=\"KO\">홍수와</span> <span lang=\"KO\">산사태가</span> <span lang=\"KO\">발생하여</span> 111 <span lang=\"KO\">명이</span> <span lang=\"KO\">사망하고</span> 22 <span lang=\"KO\">명이</span> <span lang=\"KO\">실종되었습니다</span>.</p>\r\n</div>\r\n<div>\r\n<p><span lang=\"KO\">지난</span> <span lang=\"KO\">한</span> <span lang=\"KO\">달</span> <span lang=\"KO\">동안</span> Minh Global<span lang=\"KO\">의</span> <span lang=\"KO\">직원과</span> <span lang=\"KO\">지도자들은</span> <span lang=\"KO\">중부</span> <span lang=\"KO\">지역의</span> <span lang=\"KO\">홍수</span> <span lang=\"KO\">피해</span> <span lang=\"KO\">피해자를</span> <span lang=\"KO\">지원하기</span> <span lang=\"KO\">위해</span> <span lang=\"KO\">기부했습니다</span>.</p>\r\n</div>\r\n<div>\r\n<p>10 <span lang=\"KO\">월</span> 21 <span lang=\"KO\">일과</span> 22 <span lang=\"KO\">일에</span> Minh Global <span lang=\"KO\">대표는</span> Quang Tri <span lang=\"KO\">성</span> Vinh Linh <span lang=\"KO\">현</span> Vinh Long <span lang=\"KO\">마을</span> Sa Nam <span lang=\"KO\">마을의</span> <span lang=\"KO\">지방</span> <span lang=\"KO\">정부와</span><span lang=\"KO\">협력하여</span> <span lang=\"KO\">자연</span> <span lang=\"KO\">재해로</span> <span lang=\"KO\">피해를</span> <span lang=\"KO\">입은</span> <span lang=\"KO\">사람들에게</span> 200 <span lang=\"KO\">개의</span> <span lang=\"KO\">선물을</span> <span lang=\"KO\">전달했습니다</span>.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://2.pik.vn/2020e60c0162-f9eb-4905-a0f2-4860b596e0e5.jpg\" alt=\"\" width=\"960\" height=\"720\" /></p>\r\n<div>\r\n<p align=\"center\"><em>Quang Tri </em><em><span lang=\"KO\">지방</span></em><em> Vinh Linh </em><em><span lang=\"KO\">지구</span></em><em> Vinh Long </em><em><span lang=\"KO\">마을</span></em><em>, Sa Nam </em><em><span lang=\"KO\">마을의</span></em><em> </em><em><span lang=\"KO\">지역</span></em><em> </em><em><span lang=\"KO\">주민들에게</span></em><em> </em><em><span lang=\"KO\">선물을</span></em><em> </em><em><span lang=\"KO\">전달</span></em></p>\r\n<div>\r\n<p><span lang=\"KO\">또한</span> 11 <span lang=\"KO\">월</span> 10 <span lang=\"KO\">일에</span> Minh Global <span lang=\"KO\">대표는</span> Quang Tri<span lang=\"KO\">의</span> Thanh Co <span lang=\"KO\">중등</span> <span lang=\"KO\">학교에서</span> <span lang=\"KO\">홍수로</span> <span lang=\"KO\">피해를</span> <span lang=\"KO\">입은</span> <span lang=\"KO\">학생들에게</span> <span lang=\"KO\">선물을</span> <span lang=\"KO\">전달했습니다</span>.</p>\r\n</div>\r\n</div>\r\n</div>', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'quang', 'Ngọc', 18, 'blog', '2020-11-05 07:36:15', '2021-06-16 02:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blogcat`
--

CREATE TABLE `tb_blogcat` (
  `blogcat_id` int(10) UNSIGNED NOT NULL,
  `blogcat_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogcat_ten_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogcat_mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogcat_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_below_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_below_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_intro_line1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_intro_line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_intro_line3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_thumb_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_editor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcat_hienthi` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_blogcat`
--

INSERT INTO `tb_blogcat` (`blogcat_id`, `blogcat_ten`, `blogcat_ten_en`, `blogcat_slug`, `blogcat_mota`, `blogcat_title`, `blogcat_keyword`, `blogcat_below_des`, `blogcat_below_photo`, `blogcat_intro_line1`, `blogcat_intro_line2`, `blogcat_intro_line3`, `blogcat_thumb`, `blogcat_thumb_mobile`, `blogcat_author`, `blogcat_editor`, `blogcat_type`, `blogcat_hienthi`, `created_at`, `updated_at`) VALUES
(18, 'Web zone', NULL, 'web-zone', 'Hướng dẫn khách hàng sử dụng web trên nền tảng đang hoạt động. Sử dụng các công cụ quản trị web kèm theo và cách cài đặt. Kiến thức cơ bản cần có khi sử dụng web. Thông báo cập nhật mới cho các phiên bản web.', 'Web zone', NULL, '<p>Hướng dẫn kh&aacute;ch h&agrave;ng sử dụng web tr&ecirc;n nền tảng đang hoạt động.</p>\r\n<p>Sử dụng c&aacute;c c&ocirc;ng cụ quản trị web k&egrave;m theo v&agrave; c&aacute;ch c&agrave;i đặt.</p>\r\n<p>Kiến thức cơ bản cần c&oacute; khi sử dụng web.</p>\r\n<p>Th&ocirc;ng b&aacute;o cập nhật mới cho c&aacute;c phi&ecirc;n bản web.</p>', '1587929439webzone.jpg', 'WEB ZONE', 'SUPPORT', 'CENTER', '1587929439website-support.png', '1587976515website-support-mobile.png', 'Tuấn Anh', 'Tuấn Anh', NULL, 1, '2020-04-26 19:30:39', '2020-04-29 15:21:40'),
(19, 'Xóm buôn', NULL, 'xom-buon', 'Buôn chuyện, hóng hớt. Thích gì viết nấy: chuyện công ty, khách hàng, ăn chơi, đàn đúm, ... Bóc phốt chuyện trong ngành.', 'Xóm buôn', NULL, '<p>Bu&ocirc;n chuyện, h&oacute;ng hớt.</p>\r\n<p>Th&iacute;ch g&igrave; viết nấy: chuyện c&ocirc;ng ty, kh&aacute;ch h&agrave;ng, ăn chơi, đ&agrave;n đ&uacute;m, ...</p>\r\n<p>Than trời, k&ecirc;u đất.</p>', '1587981703mouth-loud.png', NULL, 'HÓNG HỚT', NULL, '1587980153xombuon.png', '1587979803xombuon-mobile.png', 'Tuấn Anh', 'Tuấn Anh', NULL, 1, '2020-04-26 19:32:42', '2020-05-01 11:56:23'),
(22, 'Hoạt động & Sự kiện', 'Activities & Events', 'hoat-dong-su-kien', 'Hoạt động & Sự kiện', 'Hoạt động & Sự kiện', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', 'Tuấn Anh', 'blog', 1, '2020-06-04 09:44:51', '2020-06-15 10:05:53'),
(26, 'Canada', 'Canada', 'canada', 'Tư vấn đầu tư & định cư Canada', 'Tư vấn đầu tư & định cư Canada', 'đầu tư canada keyword', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', 'Tuấn Anh', 'invest', 1, '2020-06-15 10:16:22', '2020-06-20 06:04:46'),
(27, 'Mỹ', 'United State', 'my', 'Tư vấn đầu tư & định cư Mỹ', 'Tư vấn đầu tư & định cư Mỹ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', 'Tuấn Anh', 'invest', 1, '2020-06-15 10:16:53', '2020-06-15 10:16:53'),
(28, 'Úc', 'Australia', 'uc', 'Tư vấn đầu tư & định cư Úc', 'Tư vấn đầu tư & định cư Úc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', 'Tuấn Anh', 'invest', 1, '2020-06-15 10:22:30', '2020-06-15 10:22:30'),
(29, 'New Zealand', 'New Zealand', 'new-zealand', 'Tư vấn đầu tư & định cư New Zealand', 'Tư vấn đầu tư & định cư New Zealand', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', 'Tuấn Anh', 'invest', 1, '2020-06-15 10:23:36', '2020-06-15 10:23:36'),
(35, 'Tin tức', 'News', 'tin-tuc', 'Tin tức', 'Tin tức', 'Tin tức', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', 'Tuấn Anh', 'blog', 1, '2020-07-01 05:04:06', '2020-07-01 05:04:06'),
(36, 'Lịch sự kiện', 'Event scheduall', 'lich-su-kien', 'Lịch sự kiện', 'Lịch sự kiện', 'Lịch sự kiện', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tuấn Anh', 'Tuấn Anh', 'blog', 1, '2020-07-01 05:04:47', '2020-07-01 05:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `cust_id` int(10) UNSIGNED NOT NULL,
  `cust_ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_zalo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_noidung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_event_id` int(11) DEFAULT NULL,
  `cust_staff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_sanpham_dathang` int(11) DEFAULT NULL,
  `cust_ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_phanloai` tinyint(4) DEFAULT NULL,
  `cust_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_tinhtrang` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`cust_id`, `cust_ten`, `cust_photo`, `cust_link`, `cust_email`, `cust_phone`, `cust_zalo`, `cust_diachi`, `cust_noidung`, `cust_event_id`, `cust_staff`, `cust_sanpham_dathang`, `cust_ghichu`, `cust_phanloai`, `cust_type`, `cust_tinhtrang`, `created_at`, `updated_at`) VALUES
(508, 'Shiela Delatorre', NULL, NULL, 'shiela.delatorre@msn.com', '(22) 3454-2850', NULL, NULL, 'Here\'s some handy WordPress plugins that will help you improve your website: https://cutt.ly/yEDfWwf', NULL, NULL, NULL, NULL, 1, 'email-register', 1, '2021-10-06 16:57:19', '2021-10-06 16:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `event_id` int(10) UNSIGNED NOT NULL,
  `event_ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_ten_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_ten_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_ten_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_ten_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_ten_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_des_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_end_day` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_end_month` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_end_year` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_end_time` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_editor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_show` tinyint(1) NOT NULL DEFAULT 1,
  `event_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`event_id`, `event_ten`, `event_ten_vi`, `event_ten_en`, `event_ten_zh`, `event_ten_ja`, `event_ten_kr`, `event_thumb`, `event_des`, `event_des_en`, `event_end_day`, `event_end_month`, `event_end_year`, `event_end_time`, `event_author`, `event_editor`, `event_show`, `event_category`, `event_link`, `event_type`, `created_at`, `updated_at`) VALUES
(8, 'CHÚC MỪNG SINH NHẬT ISET 8 TUỔI', NULL, 'HAPPY ISET\'S 8TH ANNIVERSARY', NULL, NULL, NULL, '1593079174unnamed.jpg', '<ul>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>TẶNG</strong> 20% lệ ph&iacute; thi IELTS tại British Council cho c&aacute;c học vi&ecirc;n đăng k&iacute; thi IELTS qua ISET</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>TẶNG </strong>s&aacute;ch luyện thi IELTS + B&uacute;t + Vở cho c&aacute;c học vi&ecirc;n học đăng k&iacute; luyện thi IELTS tại ISET</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>TẶNG</strong> 100CAD ph&iacute; dịch vụ tại ISET</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>TẶNG </strong>100% ph&iacute; nộp đơn tại c&aacute;c trường khi đăng k&yacute; qua ISET</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Học bổng \"<strong>ISET SCHOLARSHIP 5,000,000VNĐ</strong>\" d&agrave;nh cho c&aacute;c học vi&ecirc;n IELTS tại ISET</span></li>\r\n</ul>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Đăng k&yacute; ngay để được tư vấn nhận qu&agrave;</span></p>', '<ul>\r\n<li>Discount 20% IELTS test fee at British Council for students who register for the IELTS test via ISET</li>\r\n<li>FREE IELTS preparation books + Pens + Notebook for students who register IELTS at ISET</li>\r\n<li>FREE 100CAD service fee at ISET</li>\r\n<li>FREE 100% of the school application fee when you register via ISET</li>\r\n<li>\"ISET SCHOLARSHIP\": 5,000,000 VND for IELTS students are studying at ISET</li>\r\n</ul>\r\n<p>Register now to take your gift</p>', '27', 'June', '2020', '09:08:00', 'Tuấn Anh', 'Tuấn Anh', 0, NULL, NULL, NULL, '2020-06-25 09:59:34', '2020-06-27 02:42:03'),
(9, NULL, 'MGD profile - EN', 'MGD profile - EN', 'MGD profile - EN', 'MGD profile - EN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'doc', '#', NULL, '2020-10-04 10:19:20', '2020-10-04 10:19:20'),
(24, NULL, 'Video giới thiệu - EN', 'Intro Video - EN', '介绍视频 - 英语', '紹介動画 - 英語', '소개 비디오', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'vid', 'https://youtu.be/x756x9BwKV4', 'profile-document', '2020-10-26 02:32:36', '2020-10-26 02:32:36'),
(25, NULL, 'Video giới thiệu - CN', 'Intro Video - CN', '介绍视频 - 中文', '紹介動画 - 中国語', '소개 비디오', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'vid', 'https://youtu.be/H1wAiEbgXEs', 'profile-document', '2020-10-26 02:33:20', '2020-10-26 02:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_image`
--

CREATE TABLE `tb_image` (
  `img_id` int(10) UNSIGNED NOT NULL,
  `img_src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_title_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_description_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_description_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_description_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_description_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_plus_icon` tinyint(1) DEFAULT NULL,
  `img_process_id` int(11) DEFAULT NULL,
  `img_show` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_image`
--

INSERT INTO `tb_image` (`img_id`, `img_src`, `img_number`, `img_title`, `img_title_en`, `img_description`, `img_description_vi`, `img_description_en`, `img_description_zh`, `img_description_ja`, `img_description_kr`, `img_link`, `img_type`, `img_plus_icon`, `img_process_id`, `img_show`, `created_at`, `updated_at`) VALUES
(51, '1594178060img1.png', NULL, '', '', '', NULL, '', NULL, NULL, NULL, '', 'partner', NULL, NULL, 1, '2020-07-08 03:14:20', '2020-07-08 03:14:20'),
(52, '1594178076img2.png', NULL, '', '', '', NULL, '', NULL, NULL, NULL, '', 'partner', NULL, NULL, 1, '2020-07-08 03:14:36', '2020-07-08 03:14:36'),
(53, '1594178087img3.png', NULL, '', '', '', NULL, '', NULL, NULL, NULL, '', 'partner', NULL, NULL, 1, '2020-07-08 03:14:47', '2020-07-08 03:14:47'),
(54, '1594178097img4.png', NULL, '', '', '', NULL, '', NULL, NULL, NULL, '', 'partner', NULL, NULL, 1, '2020-07-08 03:14:57', '2020-07-08 03:14:57'),
(55, '1594178112img5.png', NULL, '', '', '', NULL, '', NULL, NULL, NULL, '', 'partner', NULL, NULL, 1, '2020-07-08 03:15:12', '2020-07-08 03:15:12'),
(56, '1594178124img6.png', NULL, '', '', '', NULL, '', NULL, NULL, NULL, '', 'partner', NULL, NULL, 1, '2020-07-08 03:15:24', '2020-07-08 03:15:24'),
(57, '1594178133img7.png', NULL, '', '', '', NULL, '', NULL, NULL, NULL, '', 'partner', NULL, NULL, 1, '2020-07-08 03:15:33', '2020-07-08 03:15:33'),
(74, '1594202787img8.png', NULL, '', '', '', NULL, '', '', '', NULL, '', 'partner', NULL, NULL, 1, '2020-07-08 10:06:27', '2020-07-08 10:06:27'),
(75, '1594553134office 1.jpg', NULL, '', '', '', NULL, '', '', '', NULL, '', 'album', NULL, NULL, 1, '2020-07-12 11:25:34', '2020-07-12 11:25:34'),
(77, '1594552551office 2.jpg', NULL, '', '', '', NULL, '', '', '', NULL, '', 'album', NULL, NULL, 1, '2020-07-12 11:15:51', '2020-07-12 11:15:51'),
(78, '1594552583office 3.jpg', NULL, '', '', '', NULL, '', '', '', NULL, '', 'album', NULL, NULL, 1, '2020-07-12 11:16:23', '2020-07-12 11:16:23'),
(79, '1594552614office 4.jpg', NULL, '', '', '', NULL, '', '', '', NULL, '', 'album', NULL, NULL, 1, '2020-07-12 11:16:54', '2020-07-12 11:16:54'),
(80, '1594552647office 5.jpg', NULL, '', '', '', NULL, '', '', '', NULL, '', 'album', NULL, NULL, 1, '2020-07-12 11:17:27', '2020-07-12 11:17:27'),
(81, '1594552678office 6.jpg', NULL, '', '', '', NULL, '', '', '', NULL, '', 'album', NULL, NULL, 1, '2020-07-12 11:17:58', '2020-07-12 11:17:58'),
(85, '1595497346resize.jpg', NULL, NULL, NULL, NULL, '<section class=\"av_textblock_section\">\r\n<div class=\"avia_textblock \">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: helvetica, arial, sans-serif;\"><strong>VỚI C&Aacute;N BỘ NH&Acirc;N VI&Ecirc;N</strong></span></h2>\r\n</div>\r\n</section>\r\n<div class=\"hr hr-custom hr-center hr-icon-yes  avia-builder-el-10  el_after_av_textblock  el_before_av_textblock \" style=\"text-align: justify;\">&nbsp;</div>\r\n<div class=\"hr hr-custom hr-center hr-icon-yes  avia-builder-el-10  el_after_av_textblock  el_before_av_textblock \" style=\"text-align: justify;\"><span style=\"font-size: 16px;\">Tr&aacute;ch nhiệm x&atilde; hội của <strong>MINH GLOBAL</strong> thể hiện r&otilde; ở ứng xử với người <span style=\"font-family: helvetica, arial, sans-serif;\">lao</span> động, tập trung v&agrave;o c&aacute;c điểm: Ti&ecirc;u chuẩn sử dụng lao động, quyền lợi người lao động, m&ocirc;i trường l&agrave;m việc..., nhằm tăng năng suất lao động, tạo sự gắn kết của c&aacute;c th&agrave;nh vi&ecirc;n trong c&ocirc;ng ty.</span></div>\r\n<section class=\"av_textblock_section\">\r\n<div class=\"avia_textblock \">\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 16px;\">Lu&ocirc;n coi trọng nh&acirc;n tố con người với vai tr&ograve; then chốt cho sự nghiệp ph&aacute;t triển v&agrave; hội nhập trong thời gian qua, cũng như để thực hiện tốt chiến lược ph&aacute;t triển trong tương lai, <strong>MINH GLOBAL</strong> đ&atilde; triển khai hiệu quả chủ trương thu h&uacute;t, trọng dụng nh&acirc;n t&agrave;i với ti&ecirc;u chuẩn tuyển dụng, đ&agrave;o tạo, ch&iacute;nh s&aacute;ch đ&atilde;i ngộ thỏa đ&aacute;ng. Những hoạt động n&agrave;y nhằm đảm bảo t&iacute;nh c&ocirc;ng bằng, minh bạch trong c&ocirc;ng t&aacute;c nh&acirc;n sự v&agrave; khuyến kh&iacute;ch c&aacute;n bộ nh&acirc;n vi&ecirc;n n&acirc;ng cao nghiệp vụ, tr&igrave;nh độ quản l&yacute; qua những kh&oacute;a học, kh&oacute;a đ&agrave;o tạo thiết thực, tạo m&ocirc;i trường l&agrave;m việc năng động, nhiều cơ hội thử th&aacute;ch, mở ra con đường thăng tiến cho nh&acirc;n vi&ecirc;n v&agrave; lu&ocirc;n đ&aacute;nh gi&aacute; cao những đ&oacute;ng g&oacute;p của c&aacute;n bộ nh&acirc;n vi&ecirc;n đối với sự ph&aacute;t triển chung của <strong>MINH GLOBAL</strong>.</span></p>\r\n</div>\r\n</section>', '<section class=\"av_textblock_section\">\r\n<div class=\"avia_textblock \">\r\n<h2 style=\"text-align: center;\">TO EMPLOYEES</h2>\r\n</div>\r\n</section>\r\n<div class=\"hr hr-custom hr-center hr-icon-yes  avia-builder-el-10  el_after_av_textblock  el_before_av_textblock \" style=\"text-align: justify;\">&nbsp;</div>\r\n<div class=\"hr hr-custom hr-center hr-icon-yes  avia-builder-el-10  el_after_av_textblock  el_before_av_textblock \" style=\"text-align: justify;\"><span style=\"font-size: 16px;\"><strong>MINH GLOBAL</strong>\'s social responsibility is clearly reflected in its dealings with employees, focusing on the following points: Employment standards, employee benefits, working environment, etc... to increase labor productivity, creating cohesion among the members of the company.</span></div>\r\n<section class=\"av_textblock_section\">\r\n<div class=\"avia_textblock \">\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 16px;\">Reconizing human factor with a key role for the development and integration in recent years, as well as to implement the development strategy in the future, <strong>MINH GLOBAL</strong> has effectively implemented the policy of attracting , appreciating talents with the standards of recruitment, training and satisfactory remuneration policies. &nbsp;These activities aim to ensure fairness and transparency in the work of the personnel and encourage employees improve professional skills, management skills through practical training courses, to create a dynamic work environments, opportunities and challenges, to open a career path for employees and appreciate the contributions of staff for the joint development of <strong>MINH GLOBAL</strong>.</span></p>\r\n</div>\r\n</section>', '<section class=\"av_textblock_section\">\r\n<div class=\"avia_textblock \">\r\n<h2 style=\"text-align: center;\"><strong>对于员工</strong></h2>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 16px;\">Minh Global的社会责任明确体现在与员工的互动中，着重于以下几点：雇佣标准，员工福利，工作环境等，以提高劳动生产率并在公司成员之间建立凝聚力。</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 16px;\">Minh Global认识到近年来人为因素在发展和整合中发挥了关键作用，并且在未来实施发展战略时，已有效地实施了招募和培训作为吸引力标准，人才奖励政策和令人满意的薪资政策 。 这些活动旨在确保员工工作的公平性和透明性，并鼓励员工通过实践培训课程提高专业技能和管理技能，创造动态的工作环境，机遇和挑战，为员工开辟职业道路并感谢员工 为他们的贡献和共同发展Minh Global的员工。</span></p>\r\n</div>\r\n</section>', '<section class=\"av_textblock_section\">\r\n<div class=\"avia_textblock \">\r\n<h2 style=\"text-align: center;\">従業員向け</h2>\r\n</div>\r\n</section>\r\n<div class=\"hr hr-custom hr-center hr-icon-yes  avia-builder-el-10  el_after_av_textblock  el_before_av_textblock \">&nbsp;</div>\r\n<div class=\"hr hr-custom hr-center hr-icon-yes  avia-builder-el-10  el_after_av_textblock  el_before_av_textblock \"><span style=\"font-size: 16px;\">Minh Globalの社会的責任は、従業員との取引に明確に反映されており、次のことに重点を置いています。雇用基準、従業員の福祉、労働環境など...労働生産性を高め、会社のメンバー間の団結を築きます。</span></div>\r\n<section class=\"av_textblock_section\">\r\n<div class=\"avia_textblock \">\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\">近年の開発と統合の主要な役割で人的要因を再調整し、将来の開発戦略を実施するために、Minh Globalは採用、トレーニング、満足のいく報酬の基準で人材を惹きつけ、認めるという方針を効果的に実施しています 政策。これらの活動は、従業員の仕事の公平性と透明性を確保し、従業員が実践的なトレーニングコースを通じて専門的スキル、管理スキルを向上させ、ダイナミックな職場環境、機会、課題を作成し、従業員のキャリアパスを開いて貢献を評価することを目的としています Minh Globalの共同開発のためのスタッフの。</span></p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</section>', NULL, NULL, 'social', NULL, NULL, 1, '2020-07-16 10:42:28', '2020-08-10 05:02:26'),
(93, '1597042208Corrp.png', NULL, NULL, NULL, NULL, '<section class=\"av_textblock_section\">\r\n<div class=\"avia_textblock \">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: helvetica, arial, sans-serif;\"><strong>VỚI KH&Aacute;CH H&Agrave;NG V&Agrave; ĐỐI T&Aacute;C</strong></span></h2>\r\n</div>\r\n</section>\r\n<div class=\"hr hr-custom hr-center hr-icon-yes  avia-builder-el-10  el_after_av_textblock  el_before_av_textblock \" style=\"text-align: justify;\">&nbsp;</div>\r\n<div class=\"hr hr-custom hr-center hr-icon-yes  avia-builder-el-10  el_after_av_textblock  el_before_av_textblock \" style=\"text-align: justify;\">\r\n<p><span style=\"font-size: 16px;\">Tr&aacute;ch nhiệm của <strong>MINH GLOBAL</strong> đối với kh&aacute;ch h&agrave;ng, đối t&aacute;c, người ti&ecirc;u d&ugrave;ng thể hiện ở những điểm: Cam kết về chất lượng sản phẩm v&agrave; dịch vụ hậu m&atilde;i; T&iacute;nh trung thực trong quảng b&aacute;, giới thiệu sản phẩm; Sự bảo đảm an to&agrave;n sức khỏe cho cộng đồng.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\"><strong>MINH GLOBAL</strong> cam kết tu&acirc;n thủ Luật cạnh tranh; đảm bảo chất lượng c&ocirc;ng tr&igrave;nh; cung cấp dịch vụ minh bạch, uy t&iacute;n; kh&ocirc;ng ngừng đầu tư n&acirc;ng cao chất lượng dịch vụ trong tất cả c&aacute;c hoạt động, lĩnh vực kinh doanh.</span></p>\r\n</div>', '<h2 style=\"text-align: center;\">TO CUSTOMERS AND PARTNERS</h2>\r\n<div><span style=\"font-size: 16px;\"><strong>MINH GLOBAL</strong>\'s responsibility to customers, partners and consumers is reflected in the following points: Commitment to product quality and after-sales service; Honesty in advertising and product introduction; The safety and health for the community.</span></div>\r\n<div>&nbsp;</div>\r\n<div><span style=\"font-size: 16px;\"><strong>MINH GLOBAL</strong> is committed to comply with Competition Law; ensure construction quality; providing transparent and reputable services; Constantly investing in improving service quality in all activities and business fields.</span></div>', '<h2 style=\"text-align: center;\">致客户和合作伙伴</h2>\r\n<div><span style=\"font-size: 16px;\"><strong>MINH GLOBAL</strong>对客户，合作伙伴和消费者的责任体现在以下几点：对产品质量和售后服务的承诺； 对广告和产品介绍诚实； 社区的安全与卫生。</span></div>\r\n<div>&nbsp;</div>\r\n<div><span style=\"font-size: 16px;\"><strong>MINH GLOBAL</strong>承诺遵守竞争法； 确保施工质量； 提供透明和信誉良好的服务； 在所有活动和业务领域中不断投资以提高服务质量。</span></div>', '<h2 style=\"text-align: center;\">顧客やパートナーに</h2>\r\n<div><span style=\"font-size: 16px;\">顧客、パートナー、消費者に対する<strong>MINH GLOBAL</strong>の責任は、次の点に反映されています。製品の品質とアフターサービスへの取り組み。 広告と製品紹介における誠実さ。 コミュニティの安全と健康。</span></div>\r\n<div>&nbsp;</div>\r\n<div><span style=\"font-size: 16px;\"><strong>MINH GLOBAL</strong>は競争法を遵守することを約束します。 建設品質を確保する; 透明で信頼できるサービスを提供する。 すべての活動とビジネス分野でサービス品質の向上に常に投資しています。</span></div>', NULL, NULL, 'social', NULL, NULL, 1, '2020-07-23 09:52:27', '2020-08-10 06:50:08'),
(94, '1597042691close-up-group-of-business-people-joining-hands.jpg', NULL, NULL, NULL, NULL, '<h2 style=\"text-align: center;\"><span style=\"font-family: helvetica, arial, sans-serif;\"><strong>VỚI CỘNG ĐỒNG</strong></span></h2>\r\n<div>Trong lĩnh vực X&acirc;y dựng, b&ecirc;n cạnh mục ti&ecirc;u về lợi nhuận, MINH GLOBAL lu&ocirc;n đề cao lợi &iacute;ch của tất cả c&aacute;c b&ecirc;n trong chuỗi sản xuất, bao gồm c&aacute;c đối t&aacute;c, người lao động, nh&agrave; cung cấp địa phương, h&agrave;ng triệu người đang trực tiếp hoặc gi&aacute;n tiếp sử dụng c&ocirc;ng tr&igrave;nh, cũng như m&ocirc;i trường xung quanh.</div>', '<h2 style=\"text-align: center;\"><span style=\"font-family: helvetica, arial, sans-serif;\"><strong>TO COMMUNITY</strong></span></h2>\r\n<div>In the field of Construction, besides the goal of profitability, MINH GLOBAL always upholds the interests of all parties in the production chain, including partners, workers, local suppliers, millions of people directly or indirectly using the building, as well as its surroundings.</div>', '<h2 style=\"text-align: center;\">到社区</h2>\r\n<div>在建筑领域，除盈利目标外，MINH GLOBAL始终坚持生产链中各方的利益，包括合作伙伴，工人，本地供应商，数百万人直接或间接使用建筑物及其周围环境。</div>', '<h2 style=\"text-align: center;\">コミュニティへ</h2>\r\n<div>建設の分野では、収益性の目標に加えて、MINH GLOBALは常に、パートナー、労働者、地元のサプライヤー、建物を直接または間接的に使用する何百万もの人々、およびその周辺を含む、生産チェーンのすべての関係者の利益を支持します。</div>', NULL, NULL, 'social', NULL, NULL, 1, '2020-07-23 10:01:58', '2020-08-10 07:04:41'),
(111, '16014223761597129791SKAbia.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 1, 1, '2020-09-29 23:32:56', '2020-09-29 23:32:56'),
(112, '16014223761597129839SKA 1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 1, 1, '2020-09-29 23:32:56', '2020-09-29 23:32:56'),
(113, '160142237615941829241.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 1, 1, '2020-09-29 23:32:56', '2020-09-29 23:32:56'),
(114, '160142237615941831102.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 1, 1, '2020-09-29 23:32:56', '2020-09-29 23:32:56'),
(175, '1601515109company-1.jpg', NULL, '', '', '', '', '', '', '', NULL, '', 'company-member', NULL, NULL, 1, '2020-10-01 01:18:29', '2020-10-01 01:18:29'),
(177, '1601515131company-3.jpg', NULL, '', '', '', '', '', '', '', NULL, '', 'company-member', NULL, NULL, 1, '2020-10-01 01:18:51', '2020-10-01 01:18:51'),
(178, '1601515143company-4.jpg', NULL, '', '', '', '', '', '', '', NULL, '', 'company-member', NULL, NULL, 1, '2020-10-01 01:19:03', '2020-10-01 01:19:03'),
(221, '1601659498company-1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 22, 1, '2020-10-02 17:24:58', '2020-10-02 17:24:58'),
(222, '1601659498company-2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 22, 1, '2020-10-02 17:24:58', '2020-10-02 17:24:58'),
(223, '1601659498company-3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 22, 1, '2020-10-02 17:24:58', '2020-10-02 17:24:58'),
(231, '1601689656Step1a.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 11, 1, '2020-10-03 01:47:36', '2020-10-03 01:47:36'),
(244, '1601692231Step8a.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 20, 1, '2020-10-03 02:30:31', '2020-10-03 02:30:31'),
(246, '1601700258Step2.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 12, 1, '2020-10-03 04:44:18', '2020-10-03 04:44:18'),
(253, '16018310801601622121SITE CAMERA.png', NULL, '', '', '', 'Camera hiện trường', 'Site Camera', '工地摄像机', '敷地内カメラ', '사이트 카메라', '', 'techonology', NULL, NULL, 1, '2020-10-04 17:04:40', '2020-10-04 17:04:40'),
(254, '16018313311601622247FLYCAM.jpg', NULL, '', '', '', 'Flycam', 'Flycam', '飞行摄影机', 'フライカム', '플라이 캠', '', 'techonology', NULL, NULL, 1, '2020-10-04 17:08:51', '2020-10-04 17:08:51'),
(255, '16018313691601622339AR.png', NULL, '', '', '', 'AR', 'AR', 'AR', 'AR', 'AR', '', 'techonology', NULL, NULL, 1, '2020-10-04 17:09:29', '2020-10-04 17:09:29'),
(256, '16018314161601622036BIM.jpg', NULL, '', '', '', 'BIM', 'BIM', 'BIM', 'BIM', 'BIM', '', 'techonology', NULL, NULL, 1, '2020-10-04 17:10:16', '2020-10-04 17:10:16'),
(257, '160183147516017996711601622595img3.png', NULL, '', '', '', 'LEED & HACCP', 'LEED & HACCP', 'LEED & HACCP', 'LEED & HACCP', 'LEED & HACCP', '', 'techonology', NULL, NULL, 1, '2020-10-04 17:11:15', '2020-10-04 17:11:15'),
(260, '1601862998Step1b.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 11, 1, '2020-10-05 01:56:38', '2020-10-05 01:56:38'),
(261, '1601863010Step1c.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 11, 1, '2020-10-05 01:56:50', '2020-10-05 01:56:50'),
(262, '1601863064Step3.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 13, 1, '2020-10-05 01:57:44', '2020-10-05 01:57:44'),
(263, '1601863103Step5.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 14, 1, '2020-10-05 01:58:23', '2020-10-05 01:58:23'),
(264, '1601863153Step4.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 17, 1, '2020-10-05 01:59:13', '2020-10-05 01:59:13'),
(265, '1601863193Step6.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 18, 1, '2020-10-05 01:59:53', '2020-10-05 01:59:53'),
(267, '1601873648ARC.jpg.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-design', NULL, NULL, 1, '2020-10-05 04:54:08', '2020-10-05 04:54:08'),
(268, '1601873661Str.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-design', NULL, NULL, 1, '2020-10-05 04:54:21', '2020-10-05 04:54:21'),
(269, '1601873674mep.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-design', NULL, NULL, 1, '2020-10-05 04:54:34', '2020-10-05 04:54:34'),
(270, '1601873684BIM.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-design', NULL, NULL, 1, '2020-10-05 04:54:44', '2020-10-05 04:54:44'),
(271, '1601873696LEED.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-design', NULL, NULL, 1, '2020-10-05 04:54:56', '2020-10-05 04:54:56'),
(272, '1601873856Planning.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-manage', NULL, NULL, 1, '2020-10-05 04:57:36', '2020-10-05 04:57:36'),
(273, '1601873868Management.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-manage', NULL, NULL, 1, '2020-10-05 04:57:48', '2020-10-05 04:57:48'),
(274, '1601873876Legal.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-manage', NULL, NULL, 1, '2020-10-05 04:57:56', '2020-10-05 04:57:56'),
(275, '1601873914New.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-construction', NULL, NULL, 1, '2020-10-05 04:58:34', '2020-10-05 04:58:34'),
(276, '1601873925Expand.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-construction', NULL, NULL, 1, '2020-10-05 04:58:45', '2020-10-05 04:58:45'),
(277, '1601873935reccon.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-construction', NULL, NULL, 1, '2020-10-05 04:58:55', '2020-10-05 04:58:55'),
(278, '1601873946Reno.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-construction', NULL, NULL, 1, '2020-10-05 04:59:06', '2020-10-05 04:59:06'),
(279, '1601873986FEEED.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'service-develop', NULL, NULL, 1, '2020-10-05 04:59:46', '2020-10-05 04:59:46'),
(297, '1602388772ARRC.jpg', NULL, NULL, NULL, NULL, 'Kiến trúc', 'Architecture', '建筑', '建築', '건축물', NULL, 'service-design-slide', NULL, NULL, 1, '2020-10-09 04:19:09', '2021-06-16 15:38:10'),
(301, '1602389041STR.jpg', NULL, NULL, NULL, NULL, 'Kết cấu', 'Structure', '结构', '構造', '구조', NULL, 'service-design-slide', NULL, NULL, 1, '2020-10-11 04:04:01', '2020-10-11 04:06:00'),
(302, '1602389266MEP.jpg', NULL, NULL, NULL, NULL, 'MEP', 'MEP', 'MEP', 'MEP', 'MEP', NULL, 'service-design-slide', NULL, NULL, 1, '2020-10-11 04:07:46', '2020-10-11 04:07:46'),
(303, '1602389837BIM.jpg', NULL, NULL, NULL, NULL, 'BIM', 'BIM', 'BIM', 'BIM', 'BIM', NULL, 'service-design-slide', NULL, NULL, 1, '2020-10-11 04:17:17', '2020-10-11 04:17:17'),
(304, '1602390101LEED.png', NULL, NULL, NULL, NULL, 'LEED', 'LEED', 'LEED', 'LEED', 'LEED', NULL, 'service-design-slide', NULL, NULL, 1, '2020-10-11 04:21:41', '2020-10-11 04:21:41'),
(305, '1603276748Scope.png', NULL, NULL, NULL, NULL, 'Phạm vi dự án', 'Scope', '范围', '範囲', '리드', NULL, 'service-manage-slide', NULL, NULL, 1, '2020-10-11 04:26:40', '2020-10-21 10:41:11'),
(306, '1603277139Cost.png', NULL, NULL, NULL, NULL, 'Chi phí', 'Cost', '费用', 'コスト', '비용', NULL, 'service-manage-slide', NULL, NULL, 1, '2020-10-11 04:29:41', '2020-10-21 10:45:39'),
(307, '1603277565Procurement.png', NULL, NULL, NULL, NULL, 'Cung ứng', 'Procurement', '采购', '調達', '획득', NULL, 'service-manage-slide', NULL, NULL, 1, '2020-10-11 04:31:36', '2020-10-21 10:52:45'),
(308, '1602390920Risk Management.jpg', NULL, NULL, NULL, NULL, 'Quản lý rủi ro', 'Risk Management', '风险管理', '危機管理', '위기 관리', NULL, 'service-manage-slide', NULL, NULL, 1, '2020-10-11 04:35:20', '2020-10-11 04:35:20'),
(309, '16023910663. NEW CONSTRUCTION.jpg', NULL, NULL, NULL, NULL, 'Xây mới', 'New construction', '新建筑', '新築', '신조', NULL, 'service-construction-slide', NULL, NULL, 1, '2020-10-11 04:37:46', '2020-10-11 04:37:46'),
(310, '1602391407Expansion.jpg', NULL, NULL, NULL, NULL, 'Mở rộng', 'Enlargement Construction', '扩建工程', '拡張プロジェクト', '확대 공사', NULL, 'service-construction-slide', NULL, NULL, 1, '2020-10-11 04:43:27', '2020-10-22 02:13:51'),
(311, '1602391734Reno.png', NULL, NULL, NULL, NULL, 'Cải tạo & Bảo trì', 'Renovation & Maintenance', '装修和维修保养', 'リノベーショとンメンテナンス', '리노베이션 및 유지 보수', NULL, 'service-construction-slide', NULL, NULL, 1, '2020-10-11 04:48:54', '2020-10-22 02:16:09'),
(313, '1602758967MEP1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 19, 1, '2020-10-15 10:49:27', '2020-10-15 10:49:27'),
(314, '1602758999MEP2.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'process', NULL, 19, 1, '2020-10-15 10:49:59', '2020-10-15 10:49:59'),
(366, '1603277856Comm.png', NULL, NULL, NULL, NULL, 'Giao tiếp', 'Communication', '通信', '通信', '통신', NULL, 'service-manage-slide', NULL, NULL, 1, '2020-10-21 10:57:36', '2020-10-21 10:57:36'),
(367, '1603278602Resource.png', NULL, NULL, NULL, NULL, 'Tài nguyên', 'Resource', '资源', '資源', '자원', NULL, 'service-manage-slide', NULL, NULL, 1, '2020-10-21 11:10:02', '2020-10-21 11:10:02'),
(368, '1603278888Stakeholder.png', NULL, NULL, NULL, NULL, 'Stakeholders', 'Stakeholders', '利益攸关方', '利害関係者', '이해 관계자', NULL, 'service-manage-slide', NULL, NULL, 1, '2020-10-21 11:14:48', '2020-10-21 11:14:48'),
(369, '1603279222Quality.png', NULL, NULL, NULL, NULL, 'Chất lượng', 'Quality', '品质', '品質', '품질', NULL, 'service-manage-slide', NULL, NULL, 1, '2020-10-21 11:20:22', '2020-10-21 11:20:22'),
(370, '1603279645Schedule.png', NULL, NULL, NULL, NULL, 'Tiến độ', 'Schedule', '计划', '予定', '시간표', NULL, 'service-manage-slide', NULL, NULL, 1, '2020-10-21 11:27:25', '2020-10-21 11:27:25'),
(371, '1603279925Intergration.png', NULL, NULL, NULL, NULL, 'Tích hợp', 'Integration', '整合', '統合', '완성', NULL, 'service-manage-slide', NULL, NULL, 1, '2020-10-21 11:32:05', '2020-10-21 11:32:05'),
(372, '1603332795HACCP.png', NULL, NULL, NULL, NULL, 'HACCP', 'HACCP', 'HACCP', 'HACCP', 'HACCP', NULL, 'service-design-slide', NULL, NULL, 1, '2020-10-22 02:13:15', '2020-10-22 02:13:15'),
(373, '1603333380Reconstruction.jpg', NULL, NULL, NULL, NULL, 'Xây dựng lại', 'Reconstruction', '重建', '再建', '재건', NULL, 'service-construction-slide', NULL, NULL, 1, '2020-10-22 02:23:00', '2020-10-22 02:23:00'),
(374, '1603333707Planning.png', NULL, NULL, NULL, NULL, 'Lập kế hoạch dự án', 'Project Planning', '项目规划', 'プロジェクト企画', '프로젝트 기획', NULL, 'service-development-slide', NULL, NULL, 1, '2020-10-22 02:25:59', '2020-10-22 02:28:27'),
(375, '1603334439Legal.png', NULL, NULL, NULL, NULL, 'Tư vấn pháp lý', 'Legal Consulting', '法律咨询', '法律相談', '법률 컨설팅', NULL, 'service-development-slide', NULL, NULL, 1, '2020-10-22 02:40:39', '2020-10-22 02:40:39'),
(376, '1603334952HR.png', NULL, NULL, NULL, NULL, 'Tư vấn dịch vụ nhân sự', 'HR service consulting', '人力资源服务咨询', '人材サービスコンサルティング', 'HR 서비스 컨설팅', NULL, 'service-development-slide', NULL, NULL, 1, '2020-10-22 02:49:12', '2020-10-22 02:49:12'),
(377, '1603364033Energy.png', NULL, NULL, NULL, NULL, 'Tư vấn giải pháp năng lượng', 'Energy Solution Consulting', '能源解决方案咨询', 'エネルギーソリューションコンサルティング', '에너지 솔루션 컨설팅', NULL, 'service-development-slide', NULL, NULL, 1, '2020-10-22 02:55:04', '2020-10-22 10:53:53'),
(379, '1603341787Ownership.png', '100', '', '', '', '% SỞ HỮU CỦA NHÂN VIÊN', 'EMPLOYEE OWNERSHIP %', '雇员拥有率 (%)', '従業員所有率 (%)', '직원 소유권 %', '', 'why-us', 0, NULL, 1, '2020-10-22 04:43:07', '2021-06-16 07:23:15'),
(381, '1603342221Exp.png', '10', '', '', '', 'SỐ NĂM KINH NGHIỆM', 'EXPERIENCE (TOTAL YEARS)', '经验（总年数）', '経験(通算年数)', '경험 (총 년)', '', 'why-us', 1, NULL, 1, '2020-10-22 04:50:21', '2021-06-16 07:23:47'),
(387, '1603342875Area.png', '1150', '', '', '', 'TỔNG GFA THỰC HIỆN (m2, 000)', 'COMPLETED GFA (SQM ,000)', '已完成的建筑总面积（平方米，000)', '完成済み総床面積(平方メートル，000)', 'GFA 완료 (SQM, 000)', '', 'why-us', 0, NULL, 1, '2020-10-22 05:01:15', '2021-09-15 10:12:39'),
(389, '1603343198pROJECT2.png', '35', '', '', '', 'DỰ ÁN', 'PROJECTS', '项目', 'プロジェクト', '프로젝트', '', 'why-us', 1, NULL, 1, '2020-10-22 05:06:38', '2021-09-15 10:13:24'),
(390, '1603347452Location.png', '17', '', '', '', 'ĐỊA ĐIỂM (KHU CÔNG NGHIỆP)', 'LOCATIONS (INDUSTRIAL PARKS)', '地点(工业区)', 'ロケーション(工業団地)', '위치 (산업 단지)', '', 'why-us', 0, NULL, 1, '2020-10-22 06:17:32', '2021-06-16 07:25:22'),
(391, '1603347633Categories.png', '15', '', '', '', 'NGÀNH NGHỀ', 'CATEGORIES', '归类', '業態', '카테고리', '', 'why-us', 0, NULL, 1, '2020-10-22 06:20:33', '2021-06-16 07:25:51'),
(392, '1603347812Client.png', '7', '', '', '', 'KHÁCH HÀNG (QUỐC TỊCH)', 'CLIENTS (NATIONALITY)', '客户（国籍）', '顧客（国籍）', '클라이언트 (국적)', '', 'why-us', 0, NULL, 1, '2020-10-22 06:23:32', '2021-09-15 09:48:40'),
(393, '1603347972Achievement.png', '9', '', '', '', 'THÀNH TỰU', 'ACHIEVEMENTS', '成绩', '実績', '업적', '', 'why-us', 0, NULL, 1, '2020-10-22 06:26:12', '2021-06-16 07:26:52'),
(422, '1604485931CSR3.png', NULL, NULL, NULL, NULL, 'Hỗ trợ đồng bào miền Trung', 'Supporting flood victims in central Vietnam', '支援越南中部水灾灾民', 'ベトナム中部の洪水被害者を支援', '베트남 중부 수해 피해자 지원', NULL, 'social_slide', NULL, NULL, 1, '2020-11-04 10:32:11', '2020-11-04 10:32:11'),
(423, '160506394123.jpg', NULL, NULL, NULL, NULL, 'Hỗ trợ học sinh khó khăn vùng lũ', 'Support for students affected by floods', '支援受水灾影响的学生', '水害で被災した学生への支援', '홍수 피해 학생 지원', NULL, 'social_slide', NULL, NULL, 1, '2020-11-11 03:05:41', '2020-11-11 03:05:41'),
(424, '16050641804.jpg', NULL, NULL, NULL, NULL, 'Dạy ngoại ngữ cho nhân viên', 'Teaching foreign languages for staff', '为工作人员教授外语', 'スタッフへの外国語教育', '직원을위한 외국어 교육', NULL, 'social_slide', NULL, NULL, 1, '2020-11-11 03:09:40', '2020-11-11 03:09:40'),
(449, '1610553156Slide7.jpg', NULL, '', '', '', '', '', '', '', NULL, '', 'slide', 1, NULL, 1, '2021-01-13 15:52:36', '2021-01-13 15:52:36'),
(451, '16105957811605779204slide2.jpg', NULL, '', '', '', '', '', '', '', NULL, '', 'slide', 1, NULL, 1, '2021-01-14 03:43:01', '2021-01-14 03:43:01'),
(452, '16105957921605779261160455160416034545141603337712DCF.jpg', NULL, '', '', '', '', '', '', '', NULL, '', 'slide', 1, NULL, 1, '2021-01-14 03:43:12', '2021-01-14 03:43:12'),
(453, '16105958021605779249LAslide.jpg', NULL, '', '', '', '', '', '', '', NULL, '', 'slide', 1, NULL, 1, '2021-01-14 03:43:22', '2021-01-14 03:43:22'),
(460, '1610598058PGTR.png', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-01-14 04:20:58', '2021-01-14 04:20:58'),
(466, '162081631434.jpg', NULL, '', '', '', '', '', '', '', NULL, '', 'slide', 1, NULL, 1, '2021-05-12 10:45:14', '2021-05-12 10:45:14'),
(467, '1620817212Untitled-1.jpg', NULL, '', '', '', '', '', '', '', NULL, '', 'slide', 1, NULL, 1, '2021-05-12 11:00:12', '2021-05-12 11:00:12'),
(469, '1620984973z2490254149321_ce06b11c8deac832dc0c65ea3ab63a82.jpg', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:36:13', '2021-05-14 09:36:13'),
(470, '16209849941610597988LATOYS.png', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:36:34', '2021-05-14 09:36:34'),
(471, '1620985013Logo.jpg', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:36:53', '2021-05-14 09:36:53'),
(472, '16209853121610598017ABBO.png', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:41:52', '2021-05-14 09:41:52'),
(473, '16209853591601614373Tsulogo.jpg.png', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:42:39', '2021-05-14 09:42:39'),
(474, '16209853791610598225Vietin.png', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:42:59', '2021-05-14 09:42:59'),
(475, '16209854131610598165gree-logo-vector.png', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:43:33', '2021-05-14 09:43:33'),
(476, '16209854831610598195c05b9519-3997-45b9-a59a-1ba5712cab7a.png', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:44:43', '2021-05-14 09:44:43'),
(477, '1620985506peb.png', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:45:06', '2021-05-14 09:45:06'),
(478, '16209855211610598043kirby.png', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:45:21', '2021-05-14 09:45:21'),
(479, '16209855561610598029DD.png', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:45:56', '2021-05-14 09:45:56'),
(480, '16209855841610598132Toko.png', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:46:24', '2021-05-14 09:46:24'),
(481, '16209856001610598214Material.png', NULL, '', '', '', '', '', '', '', NULL, '', 'customer-partner', 1, NULL, 1, '2021-05-14 09:46:40', '2021-05-14 09:46:40'),
(482, '1622173303186577898_10219197710362510_9114001189452552465_n.jpg', NULL, '', '', '', '', '', '', '', NULL, '', 'slide', 1, NULL, 1, '2021-05-28 03:41:43', '2021-05-28 03:41:43'),
(493, '1623655122giai cuu nong san.jpg', NULL, NULL, NULL, NULL, 'Minh Global đồng hành cùng người nông dân trong chiến dịch giải cứu nông sản trong thời dịch', 'Minh Global accompanies to rescue agricultural products for farmers in difficult times of disease.', 'Minh Global 伴随着在疫情困难时期为农民抢救农产品。', 'Minh Globalは、病気の困難な時期に農民のために農産物を救助するために同行しています。', '민 글로벌은 질병의 어려움에 처한 농부들을 위해 농산물을 구하기 위해 동행합니다.', NULL, 'social_slide', NULL, NULL, 1, '2021-06-14 07:18:42', '2021-06-14 07:18:42'),
(495, '16240112325.jpg', NULL, '', '', '', '', '', '', '', '', '', 'slide', 1, NULL, 1, '2021-06-18 10:13:52', '2021-06-18 10:13:52'),
(496, '1631785585z2746961599625_fe9c717706860059fde633f60ede4aa1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cert-img', NULL, NULL, 1, '2021-09-15 09:26:39', '2021-09-16 09:46:25'),
(497, '16316981581.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cert-img', NULL, NULL, 1, '2021-09-15 09:29:18', '2021-09-15 09:29:18'),
(498, '16316981822.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cert-img', NULL, NULL, 1, '2021-09-15 09:29:42', '2021-09-15 09:29:42'),
(499, '16316982173.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cert-img', NULL, NULL, 1, '2021-09-15 09:30:17', '2021-09-15 09:30:17'),
(500, '16316982454.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cert-img', NULL, NULL, 1, '2021-09-15 09:30:45', '2021-09-15 09:30:45'),
(501, '16316982605.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cert-img', NULL, NULL, 1, '2021-09-15 09:31:00', '2021-09-15 09:31:00'),
(502, '16316982796.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cert-img', NULL, NULL, 1, '2021-09-15 09:31:19', '2021-09-15 09:31:19'),
(503, '16317016273ef002f7a6d1518f08c0.jpg', NULL, NULL, NULL, NULL, 'MGD góp phần vào cuộc chiến chống lại Covid-19', 'MGD contributes to the fight against Covid-19', 'MGD 为对抗 Covid-19 做出贡献', 'MGDはCovid-19との戦いに貢献します', 'MGD는 Covid-19와의 싸움에 기여합니다', NULL, 'social_slide', NULL, NULL, 1, '2021-09-15 10:27:07', '2021-09-15 10:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layout_contact`
--

CREATE TABLE `tb_layout_contact` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `contact_map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_layout_contact`
--

INSERT INTO `tb_layout_contact` (`contact_id`, `contact_map`, `contact_title`, `contact_add`, `contact_email`, `contact_phone`, `created_at`, `updated_at`) VALUES
(1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.5093561626275!2d106.7845379544659!3d10.84396456034034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752711793030e7%3A0xa5c5540d1e93ab8a!2zNjMsIDE1IMSQxrDhu51uZyBz4buRIDIsIFTEg25nIE5oxqFuIFBow7ogQiwgUXXhuq1uIDksIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1576536178356!5m2!1sen!2s\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'Sài Thành pool', '182 Lê Đại Hành, phường 15, Quận 11, Hồ Chí Minh', 'springpoolspa@gmail.com', '0964973492', NULL, '2019-12-16 22:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layout_footer`
--

CREATE TABLE `tb_layout_footer` (
  `footer_id` int(10) UNSIGNED NOT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_layout_footer`
--

INSERT INTO `tb_layout_footer` (`footer_id`, `footer_logo`, `footer_description`, `footer_address`, `footer_email`, `footer_phone`, `footer_facebook`, `created_at`, `updated_at`) VALUES
(1, '1570059098logo.png', 'Mega Plus là chuyên trang cung cấp các sản phẩm chính hãng với đầy đủ các loại sản phẩm từ thời trang cho đến đồ dùng gia đình, đồ dùng cá nhân, mẹ và bé, nội thất... Với các thương hiệu nổi tiếng được nhập khẩu từ nhiều nước trên thế giới', '182, đường Lê Đại Hành, P. 15, Q. 11, Tp. HCM', 'tuananhdinh.vn@gmail.com', '0964973492', 'facebook', NULL, '2019-10-02 16:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layout_homepage`
--

CREATE TABLE `tb_layout_homepage` (
  `homepage_id` int(10) UNSIGNED NOT NULL,
  `homepage_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homepage_logo_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homepage_favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slide_speed_load` int(11) DEFAULT NULL,
  `slide_vid` int(255) DEFAULT NULL,
  `slide_img_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_hienthi_1` tinyint(1) NOT NULL DEFAULT 1,
  `slide_img_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_hienthi_2` tinyint(1) NOT NULL DEFAULT 1,
  `slide_img_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_hienthi_3` tinyint(1) NOT NULL DEFAULT 1,
  `bannertop_img_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannertop_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannertop_img_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannertop_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannertop_img_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannertop_link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannertop_img_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannertop_link_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_timeline_show` tinyint(1) DEFAULT 1,
  `whyus_process_show` tinyint(1) DEFAULT 1,
  `whyus_tech_show` tinyint(1) DEFAULT 1,
  `whyus_profile_show` tinyint(1) DEFAULT 1,
  `whyus_cust_show` tinyint(1) DEFAULT 1,
  `whyus_intro_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_intro_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_intro_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_intro_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_intro_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_number_speed` int(11) DEFAULT NULL,
  `whyus_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_video_intro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_intro_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_intro_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_intro_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_intro_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_intro_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_intro_box_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_intro_box_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_intro_box_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_intro_box_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_intro_box_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_timeline_pc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_timeline_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_tech_img_left` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_tech_img_right` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_profile_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_all_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievement_intro_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievement_intro_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievement_intro_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievement_intro_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievement_intro_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `csr_certificate_show` tinyint(1) DEFAULT 1,
  `csr_letter_show` tinyint(1) DEFAULT 1,
  `csr_social_show` tinyint(1) DEFAULT 1,
  `social_intro_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_intro_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_intro_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_intro_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_intro_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_letter_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_layout_homepage`
--

INSERT INTO `tb_layout_homepage` (`homepage_id`, `homepage_logo`, `homepage_logo_plus`, `homepage_favicon`, `promotion_img`, `main_slide_speed_load`, `slide_vid`, `slide_img_1`, `slide_link_1`, `slide_hienthi_1`, `slide_img_2`, `slide_link_2`, `slide_hienthi_2`, `slide_img_3`, `slide_link_3`, `slide_hienthi_3`, `bannertop_img_1`, `bannertop_link_1`, `bannertop_img_2`, `bannertop_link_2`, `bannertop_img_3`, `bannertop_link_3`, `bannertop_img_4`, `bannertop_link_4`, `whyus_timeline_show`, `whyus_process_show`, `whyus_tech_show`, `whyus_profile_show`, `whyus_cust_show`, `whyus_intro_vi`, `whyus_intro_en`, `whyus_intro_zh`, `whyus_intro_ja`, `whyus_intro_kr`, `whyus_number_speed`, `whyus_file`, `whyus_video_intro`, `project_intro_vi`, `project_intro_en`, `project_intro_zh`, `project_intro_ja`, `project_intro_kr`, `project_intro_box_vi`, `project_intro_box_en`, `project_intro_box_zh`, `project_intro_box_ja`, `project_intro_box_kr`, `whyus_timeline_pc`, `whyus_timeline_mobile`, `whyus_tech_img_left`, `whyus_tech_img_right`, `whyus_profile_img`, `project_all_bg`, `achievement_intro_vi`, `achievement_intro_en`, `achievement_intro_zh`, `achievement_intro_ja`, `achievement_intro_kr`, `csr_certificate_show`, `csr_letter_show`, `csr_social_show`, `social_intro_vi`, `social_intro_en`, `social_intro_zh`, `social_intro_ja`, `social_intro_kr`, `social_letter_img`, `created_at`, `updated_at`) VALUES
(1, '1633785764MNKlogo.png', '1633785764favicon.png', '1594051197favicon.ico', '1595390727A3.jpg', 9000, NULL, '1578230291ho-boi-dep-7 (1).jpg', NULL, 1, '1578282006thiet-bi-ho-boi-1.png', NULL, 1, '1578230446ho-boi-sang-trong1.jpg', NULL, 1, '1578230525ho-boi-dep-10.jpg', NULL, '1570056454banner_top_2_image.jpg', NULL, '1570056454banner_top_3_image.jpg', NULL, '1570056454banner_top_4_image.jpg', NULL, 1, 0, 1, 1, 1, '\"CHÚNG TÔI THẤU HIỂU TIÊU CHÍ VÀ MỤC TIÊU BẠN HƯỚNG ĐẾN, TỪ ĐÓ TẠO RA KẾT QUẢ TỐT HƠN - VỀ KỸ THUẬT, THỜI GIAN VÀ TÀI CHÍNH - HƠN NHỮNG GÌ BẠN MONG ĐỢI\"', '\"WE ARE KEEN IN UNDERSTANDING THOROUGHLY YOUR TARGETS AND CRITERIA TO CREATIVELY DELIVER BETTER RESULTS - TECHNICALLY, TIMELY AND FINANCIALLY - THAN YOUR EXPECTATION\"', '\"我们渴望彻底理解您的目标和标准，以呈现比您期望的更高技术、更及时和具有效益性的创造结果\"', '\"私たちは、技術、工期、そして、コストの側面において、お客様の期待以上の結果を創造的にご提供できますよう、お客様の掲げる目標と期待値を徹底的に理解することに取り組んでおります。\"', '\"우리는 귀하의 목표와 기준을 철저히 이해하여 귀하의 기대 이상으로 더 나은 결과를 창의적으로-기술적으로,시기 적절하고, 재정적으로-제공하고 있습니다\"', NULL, NULL, '', '<p>\"NHIỆM VỤ CỦA CH&Uacute;NG T&Ocirc;I - ĐƯỢC THỂ HIỆN QUA NHỮNG C&Ocirc;NG TR&Igrave;NH - L&Agrave; ĐEM ĐẾN TRẢI NGHIỆM TỐT NHẤT CHO KH&Aacute;CH H&Agrave;NG, ĐỐI T&Aacute;C V&Agrave; CỘNG ĐỒNG\"</p>', '<p>\" OUR MISSION&mdash;EVIDENT IN THE BUILDINGS WE BRING TO LIFE&mdash;IS TO DELIVER THE BEST BUILDING EXPERIENCE AND ENHANCE THE JOURNEY FOR OUR ASSOCIATES, CLIENTS, PARTNERS AND COMMUNITY. \"</p>', '<p>\"我们的使命&mdash;&mdash;在我们带来的建筑中显得易见&mdash;&mdash;是为我们的员工、客户、合作伙伴和社区提供最佳的建筑体验并提升客户的旅程\"。</p>', '<p>\"私たちの使命は、私たちが命を吹き込む建物にも表れていますが、それは、私たちの仲間、お客様、パートナー、そして、地域社会のために、最高の建築体験を提供し、未来への道を築くことです。\"</p>', '<p>\"우리가 살아가는 건물에서 입증 된 우리의 사명은 최고의 건물 경험을 제공하고 동료, 고객, 파트너 및 커뮤니티를위한 여정을 향상시키는 것입니다.\"</p>', 'YOUR NEXT PROJECT HERE !', 'YOUR NEXT PROJECT HERE !', 'YOUR NEXT PROJECT HERE !', 'YOUR NEXT PROJECT HERE !', 'YOUR NEXT PROJECT HERE !', '16168178011614592343tIMELINE (1).jpg', '16168175081614592343Timeline-Mobile.jpg', '1601621667img.png', '1603079241Tech1.jpg', '1602038100Profile.png', '1622592870intropj_bg.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '\"IN THE FLAT WORLD OF GLOBALIZATION, THE VALUES OF SUPPLY CHAIN ARE ALL INTER-CONNECTED. THEREFORE, INTERNATIONAL STANDARDS AND PRACTICES ARE BASIC LANGUAGE FOR ANY PROJECT IMPLEMENTATION.\"', '\"在全球化的平坦世界中，供应链的价值都是相互关联的。因此，国际标准和实践是任何项目实施的基本语言。\"', '\"グローバル化のフラットな世界では、サプライチェーンの価値観はすべて相互に関連しています。従って、国際基準とその実践は、どのようなプロジェクトの実施においても基本的な言語となります。\"', NULL, 1, 0, 1, '<p>\"Mỗi&nbsp; th&agrave;nh vi&ecirc;n trong ch&uacute;ng ta đều hiểu rằng ch&uacute;ng ta kh&ocirc;ng phải l&agrave; những thực thể độc lập trong cả cuộc sống v&agrave; c&ocirc;ng việc , m&agrave; l&agrave; một phần kh&ocirc;ng thể thiếu của c&aacute;c cộng đồng xung quanh v&agrave; thi&ecirc;n nhi&ecirc;n nơi ch&uacute;ng ta chung sống\".</p>', '<p>\"Each and every member of us understands that we are not stand-alone entities in both human and business, but an integral of the surrounding communities and organic systems, where we live in, live with and live for.\"</p>', '<p>\"我们每一个成员都明白，无论是人还是企业，我们都不是独立的实体，而是周围社区和有机系统的一个组成部分，我们生活在这里，与之共存，为之而活。\"</p>', '<p>\"私たちの一人一人が、人間的にもビジネス的にも独立した存在ではなく、周囲のコミュニティやオーガニックシステムと一体化した存在であることを理解し、そこに住み、共に生き、共に生きるために生きています。\"</p>', '<p>\"우리의 모든 구성원은 우리가 인간과 사업 모두에서 독립된 독립 체가 아니라 우리가 살고, 함께 살고, 살아가는 주변 커뮤니티와 유기적 시스템의 통합이라는 것을 이해합니다.\"</p>', '1603881160letter.jpg', NULL, '2021-10-09 13:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layout_lylich`
--

CREATE TABLE `tb_layout_lylich` (
  `lylich_id` int(10) UNSIGNED NOT NULL,
  `lylich_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lylich_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lylich_noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_layout_product`
--

CREATE TABLE `tb_layout_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_category` tinyint(1) DEFAULT 1,
  `product_fillter` tinyint(1) DEFAULT 1,
  `product_advertise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_layout_product`
--

INSERT INTO `tb_layout_product` (`product_id`, `product_category`, `product_fillter`, `product_advertise`, `product_banner`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '1570057722banner_sidebar.jpg', '1570057729banner_collection.jpg', NULL, '2019-10-02 16:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layout_service`
--

CREATE TABLE `tb_layout_service` (
  `service_id` int(10) UNSIGNED NOT NULL,
  `service_intro_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_intro_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_intro_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_intro_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_intro_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title1_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title1_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title1_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title1_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title1_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des1_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des1_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des1_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des1_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des1_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_background_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_img_info_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title2_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title2_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title2_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title2_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title2_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des2_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des2_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des2_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des2_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des2_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_background_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_img_info_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title3_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title3_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title3_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title3_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title3_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des3_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des3_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des3_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des3_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des3_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_background_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_img_info_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title4_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title4_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title4_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title4_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title4_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des4_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des4_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des4_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des4_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_des4_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_background_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_img_info_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_layout_service`
--

INSERT INTO `tb_layout_service` (`service_id`, `service_intro_vi`, `service_intro_en`, `service_intro_zh`, `service_intro_ja`, `service_intro_kr`, `service_title1_vi`, `service_title1_en`, `service_title1_zh`, `service_title1_ja`, `service_title1_kr`, `service_des1_vi`, `service_des1_en`, `service_des1_zh`, `service_des1_ja`, `service_des1_kr`, `service_background_1`, `service_img_info_1`, `service_title2_vi`, `service_title2_en`, `service_title2_zh`, `service_title2_ja`, `service_title2_kr`, `service_des2_vi`, `service_des2_en`, `service_des2_zh`, `service_des2_ja`, `service_des2_kr`, `service_background_2`, `service_img_info_2`, `service_title3_vi`, `service_title3_en`, `service_title3_zh`, `service_title3_ja`, `service_title3_kr`, `service_des3_vi`, `service_des3_en`, `service_des3_zh`, `service_des3_ja`, `service_des3_kr`, `service_background_3`, `service_img_info_3`, `service_title4_vi`, `service_title4_en`, `service_title4_zh`, `service_title4_ja`, `service_title4_kr`, `service_des4_vi`, `service_des4_en`, `service_des4_zh`, `service_des4_ja`, `service_des4_kr`, `service_background_4`, `service_img_info_4`, `created_at`, `updated_at`) VALUES
(1, '\"THỜI GIAN LÀ NGUỒN LỰC QUAN TRỌNG NHẤT TRƯỚC RỦI RO. CHẾ ĐỘ CHÌA KHÓA CỦA CHÚNG TÔI SẢN XUẤT TỐI ƯU TỐI ƯU NHẤT VỀ THỜI GIAN, CHẤT LƯỢNG, TIỀN TỆ VÀ TRÁCH NHIỆM CŨNG NHƯ NHỮNG SÁNG TẠO\"', '\"TIME IS THE MOST CRITICAL RESOURCE WHILE RISKS ARE TRUE. OUR TURN-KEY MODE PRODUCES BEST OPTIMIZATION IN TIME, QUALITY, MONEY AND RESPONSIBILITIES AS WELL AS CREATIVITIES.\"', '\"时间是最关键的资源，而风险是真实的。我们的循环钥匙的运作模式在时间、质量、金钱、责任性以及创造性各方面能呈现最佳的优化\"', '\"工期は最も大切な要素ですが、一方で、リスクもまた存在します。私たちの一括請負い方式は、工期、品質、コスト、責任、また、創造的であることを、最大限に最適化いたします。\"', '\"위험은 사실이지만 시간은 가장 중요한 자원입니다. 우리의 턴키 모드는 시간, 품질, 비용 및 책임면에서 창의성과 더불어 최상의 최적화를 제공합니다.\"', 'THIẾT KẾ', 'DESIGN', '设计', '設計', '자인', 'THIẾT KẾ của chúng tôi bắt đầu từ \"Yêu cầu của khách hàng\" đến Lập kế hoạch chiến lược, FEED đến Khái niệm, Sơ đồ, Phát triển đến Thiết kế Bản vẽ cửa hàng của tất cả các lĩnh vực từ Vận hành, Kiến trúc, Kết cấu, M.E.P, Nội thất, Ngoại thất & Cảnh quan. Điều này cho phép chúng tôi tích hợp các công nghệ và vật liệu tốt nhất để tạo ra một dự án độc đáo bền vững, tốt nhất cho việc triển khai cũng như vận hành và tạo ra sản phẩm. Tính sáng tạo của THIẾT KẾ là cho toàn bộ hoạt động và định giá dự án.', 'Our DESIGN starts from very beginning of \"Client\'s Requirement\" to Strategic Planning, FEED to Conceptual, Schematic, Development to Shop Drawing Design of all disciplines from Operational, Architectural, Structural, M.E.P, Interior, Exterior & Landscaping. This enables us to integrate best technologies and materials into creating a sustainable unique project which is best for implementation as well as operation and asset creation. The Creativity of the DESIGN is for the entire project operation & valuation.', '我们的设计基于最初的\"客户需求\"，从而开展战略性规划、前期工程设计，到理念设计、方案设计、图纸设计、施工图整个过程，并针对工程的建筑、结构、机电、室内外装修和绿化等全部过程而展开。这使我们能够主动集合最佳的技术和材料以创建一个具有可持续性的独特项目，并且有利于实施、运营和创造资产。设计的创新不仅在可视化和优化性性能上，而且在项目的整个运营和操作过程中的便利和价值。', '私たちの設計は、「お客様のご要望」の初期段階から戦略的な計画を立て、コンセプト、XXX、開発、店舗図面の設計に至るまで、運用、建築、構造、M.E.P.（機械・電気・配管）、インテリア、エクステリア、造園など、あらゆる分野のデザインにお応えします。最高位の技術と資材を統合し、現実的で、最適な、そして、持続可能なユニークなプロジェクトを構築いたします。設計の創造性とは、プロジェクト全体の運営と評価のためのものです。', '우리의 디자인은 \"고객의 요구 사항\"의 시작부터 전략 계획, FEED에서 개념, 도식, 개발, 운영, 건축, 구조, M.E.P, 인테리어, 외부 및 조경에 이르는 모든 분야의 매장 도면 디자인에 이르기까지 시작됩니다. 이를 통해 최고의 기술과 재료를 통합하여 구현, 운영 및 자산 생성에 가장 적합한 지속 가능한 고유 프로젝트를 만들 수 있습니다. 디자인의 창의성은 전체 프로젝트 운영 및 평가를위한 것입니다.', '1601441370service-bg-1.jpg', '16018738391.png', 'QUẢN LÝ', 'MANAGEMENT', '管理', '管理', '조치', 'Quy trình và tài liệu QUẢN LÝ của chúng tôi (dựa trên FIDIC và trực quan hóa) giúp chúng tôi chủ động xác định các mục tiêu và tiêu chí của Khách hàng sau đó đưa ra một kế hoạch phân phối toàn diện từ THIẾT KẾ đến THỰC HIỆN và TRIỂN KHAI dự án. Rủi ro luôn ở trong bất cứ điều gì, bất cứ nơi nào, bất cứ lúc nào với bất kỳ ai tham gia vào bất kỳ dự án nào. Những người biết cách quản lý rủi ro là những người có thể đem đến thành công cho sự án. Quản lý không chỉ là về dự án mà còn là mong đợi và sự hài lòng của Khách hàng.', 'Our MANAGEMENT process and documentation (FIDIC and visualization based) helps us actively define the Client\'s targets and criteria then render a comprehensive delivery plan from DESIGN to IMPLEMENTATION and COMMISSIONING of the project. Risks are always therein anything, anywhere, anytime with anyone involved in any project. Those who know how to manage risks are those who can deliver successfully. Management is not just about the project but the Client\'s expectation and satisfaction.', '我们的管理流程和文件操作（基于 FIDIC和可视化基础上）可帮助我们积极地明确客户的目标和标准，再呈现到设计、实施、交接的整个项目计划。风险总是在任何事情上，在任何地点，任何时间，与任何人在参与任何项目而存在的。知道如何管理风险的人是那些能够成功交付的人。管理的不仅仅是为了项目，而更多的是为了客户的期望和满意。', '私たちは、独自の管理プロセスと文書化（FIDICと可視化をベースにした）により、お客様の目標と期待値を明確に定め、設計からプロジェクトの実施、試運転にいたるまで、包括的な引き渡しスケジュールを作成いたします。プロジェクトにかかわる全ての者に、いつ、いかなるときにも、そして、どのようなことにも、リスクは存在します。リスク管理を知る者が、プロジェクトを成功させる者といえます。管理とは、プロジェクト自体に対してだけではなく、お客様の期待と満足度に関わるものと考えます。', '우리의 관리 프로세스 및 문서 (FIDIC 및 시각화 기반)는 고객의 목표와 기준을 적극적으로 정의한 다음 프로젝트의 설계에서 구현 및 커미셔닝에 이르는 포괄적 인 제공 계획을 렌더링하는 데 도움이됩니다. 프로젝트에 참여하는 사람과 함께 언제 어디서나 위험은 항상 존재합니다. 위험을 관리하는 방법을 아는 사람은 성공적으로 전달할 수있는 사람입니다. 관리는 프로젝트에 관한 것이 아니라 고객의 기대와 만족입니다.', '1601442020service-bg-2.jpg', '1603275624Manag1ement.png', 'THI CÔNG', 'CONSTRUCTION', '建设', '施工', '구성', 'Chúng tôi thực hiện một phương pháp Xây dựng tinh gọn. Các công việc XÂY DỰNG của chúng tôi bắt đầu từ rất sớm từ tất cả các khảo sát cần thiết (địa điểm, vị trí, khả năng tiếp cận, địa lý, tài nguyên, v.v.) để xây dựng \"quy trình xây dựng tinh gọn\" kết hợp các phương pháp và sắp xếp phù hợp nhất để giúp mang lại không chỉ các giá trị tốt hơn cho khách hàng mà còn với môi trường, nhân viên và tất cả các đối tác liên quan. Chúng tôi hiểu rõ về rủi ro từ đó chúng tôi liên tục tìm kiếm sự hoàn hảo trong từng bước chúng tôi thực hiện tại công trường.', 'We do a lean Construction practices. Our CONSTRUCTION works start very early from all necessary surveys (site, location, accessibility, geo, resources, etc...) to building a \"lean construction process\" which incorporate best suitable methodologies and arrangement to help to deliver not only better values to our customers but also environment, employees and all related partners. We understand the risks are in details and thus we continuously quest for the perfection in each and every steps we implement at site.', '我们的工程建设从最早的调查需要（场地、位置、临近、地质等）开始，以创建一个\"精益的建设流程\"，其中集合了最佳的施工办法和施工组织，不仅有助于给客户提供更好的价值，且还提供更好的环境、员工资源以及所有相关的合作伙伴。我们了解风险是从细节上而存在的，因此我们在现场施工的每一个步骤都不断地追求完美。', '私たちは、無駄のない施工を実践いたします。私たちの建築作業は、サイト、場所、アクセス性、地質、資源などの調査から始まり、最適な建築法を取り入れ　「無駄のない建設プロセス」を構築し、お客様ばかりでなく、とりまく環境、従業員、そして、全関係者に対して、より高い価値を提供いたします。私たちは、リスクは些細なところにもに存在すると認識しております。従って、現場での各施工段階における完璧さを追求し続けます。', '우리는 린 건설 관행을 수행합니다. 우리의 건설 작업은 필요한 모든 조사 (부지, 위치, 접근성, 지리적, 자원 등)에서 시작하여 더 나은 가치를 제공하는 데 도움이되는 가장 적합한 방법론과 배열을 통합하는 \"린 건설 프로세스\"구축에 이르기까지 우리의 고객뿐만 아니라 환경, 직원 및 모든 관련 파트너. 우리는 위험이 세부 사항에 있음을 이해하므로 현장에서 구현하는 모든 단계에서 완벽을 추구합니다.', '1601442376service-bg-3.jpg', '1602392244Consst.png', 'PHÁT TRIỂN', 'DEVELOPMENT', '开发', '開発', '개발', 'Chúng tôi nỗ lực để dẫn đầu bằng cách xây dựng và chia sẻ thông tin chi tiết về các lĩnh vực và khu vực. Với những con người giỏi nhất, kiến thức phù hợp, chúng tôi tiếp tục tối đa hóa cơ hội và giảm thiểu rủi ro cho tất cả các dự án mà chúng tôi tham gia PHÁT TRIỂN. Chúng tôi tạo dựng niềm tin bằng cách hành động chính trực trong mọi việc chúng tôi làm, từ đảm bảo an toàn tại chỗ đến chất lượng và hiệu quả. Hơn cả sự PHÁT TRIỂN của dự án, chúng tôi tạo ra những giá trị tốt nhất cho tất cả các bên liên quan, bên trong và bên ngoài. Chúng tôi tự hào trở thành đơn vị phát triển xây dựng đáng tin cậy trên toàn Việt Nam.', 'We work to stay ahead by building and sharing insight across sectors and regions. With the best people, the right knowledge, we continue to maximize opportunities and minimize risks for all projects we take part in DEVELOPMENT. We build trust by acting with integrity in everything we do, from ensuring on-site safety to quality and efficiency. More than project DEVELOPMENT, we create best values for all stakeholders, internally and externally. We are proud to become a trusted construction development all over Vietnam.', '通过跨行业、夸地区地建立和分享知识，我们努力保持领先地位。凭借最优秀的人员、正确的知识，我们继续作为参与每一个项目的最大化机会而最小化风险的执行者。我们以诚信的方式建立信任，尽一切可能确保现场安全、质量和效率。除了开发项目之外，我们还为组织内外参股者创造最佳的价值。', '私たちは、セクターや地域を超えた洞察力を養い、共有することで、常に先を行くことを目指します。優れた人材と正しい知識を有し、参画する開発すべてのプロジェクトに対し、機会を最大化し、リスクを最小限に抑え続けます。私たちは、現場の安全性確保から品質、効率性にいたるまで、すべてにおいて誠実に行動することで信頼を築きます。プロジェクト開発にとどまらず、社内外の全利害関係者のために、最高の価値を創造します。私たちは、ベトナム全土で、信頼たる建設開発企業になることを誇りとします。', '우리는 부문과 지역에 걸쳐 통찰력을 구축하고 공유하여 앞서 나가기 위해 노력합니다. 최고의 인재와 올바른 지식을 바탕으로 우리는 개발에 참여하는 모든 프로젝트의 기회를 극대화하고 위험을 최소화합니다. 우리는 현장 안전 보장에서 품질 및 효율성에 이르기까지 우리가하는 모든 일에서 정직하게 행동함으로써 신뢰를 구축합니다. 프로젝트 개발을 넘어 모든 이해 관계자를위한 대내외적으로 최고의 가치를 창출합니다. 우리는 베트남 전역에서 신뢰할 수있는 건설 개발이 된 것을 자랑스럽게 생각합니다.', '1601442678service-bg-4.jpg', '1603339083IZD.jpg', '2021-06-16 03:56:20', '2021-06-16 03:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nation`
--

CREATE TABLE `tb_nation` (
  `nation_id` int(10) UNSIGNED NOT NULL,
  `nation_name_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nation_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nation_name_zh_sim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nation_name_zh_tra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nation_name_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nation_name_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nation_flag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nation_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_nation`
--

INSERT INTO `tb_nation` (`nation_id`, `nation_name_vi`, `nation_name_en`, `nation_name_zh_sim`, `nation_name_zh_tra`, `nation_name_ja`, `nation_name_kr`, `nation_flag`, `nation_check`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'Afghanistan', '阿富汗', '阿富汗', 'アフガニスタン', '아프가니스탄', NULL, NULL, NULL, '2021-05-31 05:39:36'),
(2, 'Albania', 'Albania', '阿尔巴尼亚', '阿爾巴尼亞', 'アルバニア', '알바니아', NULL, NULL, NULL, '2020-07-22 02:28:05'),
(3, 'Algeria', 'Algeria', '阿尔及利亚', '阿爾及利亞', 'アルジェリア', '알제리', NULL, NULL, NULL, NULL),
(4, 'Andorra', 'Andorra', '安道尔', '安道爾', 'アンドラ', '안도라', NULL, NULL, NULL, '2020-07-30 23:49:39'),
(5, 'Angola', 'Angola', '安哥拉', '安哥拉', 'アンゴラ', '앙골라', NULL, NULL, NULL, NULL),
(6, 'Antigua and Barbuda', 'Antigua and Barbuda', '安提瓜和巴布达', '安提瓜和巴布達', 'アンティグアバーブーダ', '앤티가 바부 다', NULL, 'checked', NULL, '2020-09-29 20:27:44'),
(7, 'Argentina', 'Argentina', '阿根廷', '阿根廷', 'アルゼンチン', '아르헨티나', NULL, 'checked', NULL, '2020-10-14 08:58:33'),
(8, 'Armenia', 'Armenia', '亚美尼亚', '亞美尼亞', 'アルメニア', '아르메니아', NULL, NULL, NULL, NULL),
(9, 'Úc', 'Australia', '澳大利亚', '澳大利亞', 'オーストラリア', '호주', NULL, 'checked', NULL, '2021-07-01 09:20:10'),
(10, 'Áo', 'Austria', '奥地利', '奧地利', 'オーストリア', '오스트리아', NULL, NULL, NULL, '2020-07-30 06:48:11'),
(11, 'Azerbaijan', 'Azerbaijan', '阿塞拜疆', '阿塞拜疆', 'アゼルバイジャン', '아제르바이잔', NULL, 'checked', NULL, '2020-10-14 08:59:38'),
(12, 'Bahamas', 'Bahamas', '巴哈马', '巴哈馬', 'バハマ', '바하마', NULL, NULL, NULL, NULL),
(13, 'Bahrain', 'Bahrain', '巴林', '巴林', 'バーレーン', '바레인', NULL, NULL, NULL, '2021-01-18 08:22:56'),
(14, 'Bangladesh', 'Bangladesh', '孟加拉国', '孟加拉國', 'バングラデシュ', '방글라데시', NULL, NULL, NULL, '2021-03-02 06:06:37'),
(15, 'Barbados', 'Barbados', '巴巴多斯', '巴巴多斯', 'バルバドス', '바베이도스', NULL, NULL, NULL, NULL),
(16, 'Belarus', 'Belarus', '白俄罗斯', '白俄羅斯', 'ベラルーシ', '벨라루스', NULL, NULL, NULL, NULL),
(17, 'Belgium', 'Belgium', '比利时', '比利時', 'ベルギー', '벨기에', NULL, NULL, NULL, '2020-07-22 20:02:56'),
(18, 'Belize', 'Belize', '伯利兹', '伯利茲', 'ベリーズ', '벨리즈', NULL, NULL, NULL, NULL),
(19, 'Benin', 'Benin', '贝宁', '貝寧', 'ベナン', '베냉', NULL, NULL, NULL, NULL),
(20, 'Bhutan', 'Bhutan', '不丹', '不丹', 'ブータン', '부탄', NULL, NULL, NULL, NULL),
(21, 'Bolivia', 'Bolivia', '玻利维亚', '玻利維亞', 'ボリビア', '볼리비아', NULL, NULL, NULL, NULL),
(22, 'Bosnia and Herzegovina', 'Bosnia and Herzegovina', '波斯尼亚和黑塞哥维那（简称：波黑', '波斯尼亞和黑塞哥維那（簡稱：波黑', 'ボスニア・ヘルツェゴビナ', '보스니아 헤르체고비나', NULL, NULL, NULL, NULL),
(23, 'Botswana', 'Botswana', '博茨瓦纳', '博茨瓦納', 'ボツワナ', '보츠와나', NULL, NULL, NULL, NULL),
(24, 'Brazil', 'Brazil', '巴西', '巴西', 'ブラジル', '브라질', NULL, NULL, NULL, NULL),
(25, 'Brunei', 'Brunei', '文莱', '文萊', 'ブルネイ', '브루나이', NULL, NULL, NULL, NULL),
(26, 'Bulgaria', 'Bulgaria', '保加利亚', '保加利亞', 'ブルガリア', '불가리아', NULL, NULL, NULL, NULL),
(27, 'Burkina Faso', 'Burkina Faso', '布基纳法索', '布基納法索', 'ブルキナファソ', '부키 나 파소', NULL, NULL, NULL, NULL),
(28, 'Burundi', 'Burundi', '布隆迪', '布隆迪', 'ブルンジ', '부룬디', NULL, NULL, NULL, NULL),
(29, 'Cabo Verde', 'Cabo Verde', '佛得角', '佛得角', 'カボベルデ', '카보 베르데', NULL, NULL, NULL, NULL),
(30, 'Cam pu chia', 'Cambodia', '柬埔寨', '柬埔寨', 'カンボジア', '캄보디아', NULL, NULL, NULL, NULL),
(31, 'Cameroon', 'Cameroon', '喀麦隆', '喀麥隆', 'カメルーン', '카메룬', NULL, NULL, NULL, NULL),
(32, 'Canada', 'Canada', '加拿大', '加拿大', 'カナダ', '캐나다', NULL, NULL, NULL, NULL),
(33, 'Central African Republic', 'Central African Republic', '中非共和国', '中非共和國', '中央アフリカ共和国', '중앙 아프리카 공화국', NULL, NULL, NULL, NULL),
(34, 'Chad', 'Chad', '乍得', '乍得', 'チャド', '차드', NULL, NULL, NULL, NULL),
(35, 'Chile', 'Chile', '智利', '智利', 'チリ', '칠레', NULL, NULL, NULL, NULL),
(36, 'Trung Quốc', 'China', '中国', '中國', '中国', '중국', NULL, 'checked', NULL, '2021-10-04 09:19:07'),
(37, 'Colombia', 'Colombia', '哥伦比亚', '哥倫比亞', 'コロンビア', '콜롬비아', NULL, NULL, NULL, NULL),
(38, 'Comoros', 'Comoros', '科摩罗', '科摩羅', 'コモロ', '코모로', NULL, NULL, NULL, NULL),
(39, 'Congo', 'Congo', '刚果', '剛果', 'コンゴ', '콩고', NULL, NULL, NULL, NULL),
(40, 'Costa Rica', 'Costa Rica', '哥斯达黎加', '哥斯達黎加', 'コスタリカ', '코스타리카', NULL, NULL, NULL, NULL),
(41, 'Côte dIvoire', 'Côte dIvoire', '科特迪瓦', '科特迪瓦', 'コートジボワール', '코트 디부 아르', NULL, NULL, NULL, NULL),
(42, 'Croatia', 'Croatia', '克罗地亚', '克羅地亞', 'クロアチア', '크로아티아', NULL, NULL, NULL, NULL),
(43, 'Cuba', 'Cuba', '古巴', '古巴', 'キューバ', '쿠바', NULL, NULL, NULL, NULL),
(44, 'Cyprus', 'Cyprus', '塞浦路斯', '塞浦路斯', 'キプロス', '키프로스', NULL, NULL, NULL, NULL),
(45, 'Czechia', 'Czechia', '捷克语', '捷克語', 'チェコ', '체코', NULL, NULL, NULL, NULL),
(46, 'Denmark', 'Denmark', '丹麦', '丹麥', 'デンマーク', '덴마크', NULL, NULL, NULL, NULL),
(47, 'Djibouti', 'Djibouti', '吉布地', '吉布地', 'ジブチ', '지부티', NULL, NULL, NULL, NULL),
(48, 'Dominica', 'Dominica', '多米尼加', '多米尼加', 'ドミニカ', '도미니카', NULL, NULL, NULL, NULL),
(49, 'Dominican Republic', 'Dominican Republic', '多明尼加共和国', '多明尼加共和國', 'ドミニカ共和国', '도미니카 공화국', NULL, NULL, NULL, NULL),
(50, 'Cộng hòa Congo', 'DR Congo', '刚果民主共和国', '剛果民主共和國', 'コンゴ民主共和国', '콩고 민주 공화국', NULL, NULL, NULL, NULL),
(51, 'Ecuador', 'Ecuador', '厄瓜多尔', '厄瓜多爾', 'エクアドル', '에콰도르', NULL, NULL, NULL, NULL),
(52, 'Ai Cập', 'Egypt', '埃及', '埃及', 'エジプト', '이집트', NULL, NULL, NULL, NULL),
(53, 'El Salvador', 'El Salvador', '萨尔瓦多', '薩爾瓦多', 'エルサルバドル', '엘살바도르', NULL, NULL, NULL, NULL),
(54, 'Equatorial Guinea', 'Equatorial Guinea', '赤道几内亚', '赤道幾內亞', '赤道ギニア', '적도 기니', NULL, NULL, NULL, NULL),
(55, 'Eritrea', 'Eritrea', '厄立特里亚', '厄立特里亞', 'エリトリア', '에리트레아', NULL, NULL, NULL, NULL),
(56, 'Estonia', 'Estonia', '爱沙尼亚', '愛沙尼亞', 'エストニア', '에스토니아', NULL, NULL, NULL, NULL),
(57, 'Eswatini', 'Eswatini', '埃斯瓦蒂尼', '埃斯瓦蒂尼', 'エスワティーニ', '에스와 티니', NULL, NULL, NULL, NULL),
(58, 'Ethiopia', 'Ethiopia', '埃塞俄比亚', '埃塞俄比亞', 'エチオピア', '에티오피아', NULL, NULL, NULL, NULL),
(59, 'Fiji', 'Fiji', '斐济', '斐濟', 'フィジー', '피지', NULL, NULL, NULL, NULL),
(60, 'Phần Lan', 'Finland', '芬兰', '芬蘭', 'フィンランド', '핀란드', NULL, NULL, NULL, NULL),
(61, 'Pháp', 'France', '法国', '法國', 'フランス', '프랑스', NULL, NULL, NULL, '2020-07-23 03:14:18'),
(62, 'Gabon', 'Gabon', '加蓬', '加蓬', 'ガボン', '가봉', NULL, NULL, NULL, NULL),
(63, 'Gambia', 'Gambia', '冈比亚', '岡比亞', 'ガンビア', '감비아', NULL, NULL, NULL, NULL),
(64, 'Georgia', 'Georgia', '佐治亚州', '佐治亞州', 'ジョージア', '그루지야', NULL, NULL, NULL, NULL),
(65, 'Đức', 'Germany', '德国', '德國', 'ドイツ', '독일', NULL, NULL, NULL, NULL),
(66, 'Ghana', 'Ghana', '加纳', '加納', 'ガーナ', '가나', NULL, NULL, NULL, NULL),
(67, 'Greece', 'Greece', '希腊', '希臘', 'ギリシャ', '그리스', NULL, NULL, NULL, NULL),
(68, 'Grenada', 'Grenada', '格林纳达', '格林納達', 'グレナダ', '그레나다', NULL, NULL, NULL, NULL),
(69, 'Guatemala', 'Guatemala', '危地马拉', '危地馬拉', 'グアテマラ', '과테말라', NULL, NULL, NULL, NULL),
(70, 'Guinea', 'Guinea', '几内亚', '幾內亞', 'ギニア', '기니', NULL, NULL, NULL, NULL),
(71, 'Guinea-Bissau', 'Guinea-Bissau', '几内亚比绍', '幾內亞比紹', 'ギニアビサウ', '기니 비사우', NULL, NULL, NULL, NULL),
(72, 'Guyana', 'Guyana', '圭亚那', '圭亞那', 'ガイアナ', '가이아나', NULL, NULL, NULL, NULL),
(73, 'Haiti', 'Haiti', '海地', '海地', 'ハイチ', '아이티', NULL, NULL, NULL, NULL),
(74, 'Holy See', 'Holy See', '教廷', '教廷', '聖座', '교황청', NULL, NULL, NULL, NULL),
(75, 'Honduras', 'Honduras', '洪都拉斯', '洪都拉斯', 'ホンジュラス', '온두라스', NULL, NULL, NULL, NULL),
(76, 'Hungary', 'Hungary', '匈牙利', '匈牙利', 'ハンガリー', '헝가리', NULL, NULL, NULL, NULL),
(77, 'Iceland', 'Iceland', '冰岛', '冰島', 'アイスランド', '아이슬란드', NULL, NULL, NULL, NULL),
(78, 'India', 'India', '印度', '印度', 'インド', '인도', NULL, 'checked', NULL, '2021-06-16 03:36:57'),
(79, 'Indonesia', 'Indonesia', '印度尼西亚', '印度尼西亞', 'インドネシア', '인도네시아', NULL, NULL, NULL, NULL),
(80, 'Iran', 'Iran', '伊朗', '伊朗', 'イラン', '이란', NULL, NULL, NULL, NULL),
(81, 'Iraq', 'Iraq', '伊拉克', '伊拉克', 'イラク', '이라크', NULL, NULL, NULL, NULL),
(82, 'Ireland', 'Ireland', '爱尔兰', '愛爾蘭', 'アイルランド', '아일랜드', NULL, NULL, NULL, NULL),
(83, 'Israel', 'Israel', '以色列', '以色列', 'イスラエル', '이스라엘', NULL, NULL, NULL, '2020-07-22 07:15:12'),
(84, 'Ý', 'Italy', '意大利', '意大利', 'イタリア', '이탈리아', NULL, NULL, NULL, NULL),
(85, 'Jamaica', 'Jamaica', '牙买加', '牙買加', 'ジャマイカ', '자메이카', NULL, NULL, NULL, NULL),
(86, 'Nhật Bản', 'Japan', '日本', '日本', '日本', '일본', NULL, 'checked', NULL, '2021-09-10 08:25:40'),
(87, 'Jordan', 'Jordan', '约旦', '約旦', 'ヨルダン', '요르단', NULL, NULL, NULL, NULL),
(88, 'Kazakhstan', 'Kazakhstan', '哈萨克斯坦', '哈薩克斯坦', 'カザフスタン', '카자흐스탄', NULL, NULL, NULL, NULL),
(89, 'Kenya', 'Kenya', '肯尼亚', '肯尼亞', 'ケニア', '케냐', NULL, NULL, NULL, NULL),
(90, 'Kiribati', 'Kiribati', '基里巴斯', '基里巴斯', 'キリバス', '키리바시', NULL, NULL, NULL, NULL),
(91, 'Kuwait', 'Kuwait', '科威特', '科威特', 'クウェート', '쿠웨이트', NULL, NULL, NULL, NULL),
(92, 'Kyrgyzstan', 'Kyrgyzstan', '吉尔吉斯斯坦', '吉爾吉斯斯坦', 'キルギス', '키르기스스탄', NULL, NULL, NULL, NULL),
(93, 'Lào', 'Laos', '老挝', '老撾', 'ラオス', '라오스', NULL, NULL, NULL, NULL),
(94, 'Latvia', 'Latvia', '拉脱维亚', '拉脫維亞', 'ラトビア', '라트비아', NULL, NULL, NULL, NULL),
(95, 'Lebanon', 'Lebanon', '黎巴嫩', '黎巴嫩', 'レバノン', '레바논', NULL, NULL, NULL, NULL),
(96, 'Lesotho', 'Lesotho', '莱索托', '萊索托', 'レソト', '레소토', NULL, NULL, NULL, NULL),
(97, 'Liberia', 'Liberia', '利比里亚', '利比里亞', 'リベリア', '라이베리아', NULL, NULL, NULL, NULL),
(98, 'Libya', 'Libya', '利比亚', '利比亞', 'リビア', '리비아', NULL, NULL, NULL, NULL),
(99, 'Liechtenstein', 'Liechtenstein', '列支敦士登', '列支敦士登', 'リヒテンシュタイン', '리히텐슈타인', NULL, NULL, NULL, NULL),
(100, 'Lithuania', 'Lithuania', '立陶宛', '立陶宛', 'リトアニア', '리투아니아', NULL, NULL, NULL, NULL),
(101, 'Luxembourg', 'Luxembourg', '卢森堡', '盧森堡', 'ルクセンブルク', '룩셈부르크', NULL, NULL, NULL, NULL),
(102, 'Madagascar', 'Madagascar', '马达加斯加', '馬達加斯加', 'マダガスカル', '마다가스카르', NULL, NULL, NULL, NULL),
(103, 'Malawi', 'Malawi', '马拉维', '馬拉維', 'マラウイ', '말라위', NULL, NULL, NULL, NULL),
(104, 'Malaysia', 'Malaysia', '马来西亚', '馬來西亞', 'マレーシア', '말레이시아', NULL, NULL, NULL, NULL),
(105, 'Maldives', 'Maldives', '马尔代夫', '馬爾代夫', 'モルディブ', '몰디브', NULL, NULL, NULL, NULL),
(106, 'Mali', 'Mali', '马里', '馬里', 'マリ', '말리', NULL, NULL, NULL, NULL),
(107, 'Malta', 'Malta', '马耳他', '馬耳他', 'マルタ', '몰타', NULL, NULL, NULL, NULL),
(108, 'Marshall Islands', 'Marshall Islands', '马绍尔群岛', '馬紹爾群島', 'マーシャル諸島', '마샬 군도', NULL, NULL, NULL, NULL),
(109, 'Mauritania', 'Mauritania', '毛里塔尼亚', '毛里塔尼亞', 'モーリタニア', '모리타니', NULL, NULL, NULL, NULL),
(110, 'Mauritius', 'Mauritius', '毛里求斯', '毛里求斯', 'モーリシャス', '모리셔스', NULL, NULL, NULL, NULL),
(111, 'Mexico', 'Mexico', '墨西哥', '墨西哥', 'メキシコ', '멕시코', NULL, NULL, NULL, NULL),
(112, 'Micronesia', 'Micronesia', '密克罗尼西亚', '密克羅尼西亞', 'ミクロネシア', '미크로네시아', NULL, NULL, NULL, NULL),
(113, 'Moldova', 'Moldova', '摩尔多瓦', '摩爾多瓦', 'モルドバ', '몰도바', NULL, NULL, NULL, NULL),
(114, 'Monaco', 'Monaco', '摩纳哥', '摩納哥', 'モナコ', '모나코', NULL, NULL, NULL, NULL),
(115, 'Mongolia', 'Mongolia', '蒙古', '蒙古', 'モンゴル', '몽골리아', NULL, NULL, NULL, NULL),
(116, 'Montenegro', 'Montenegro', '黑山共和国', '黑山共和國', 'モンテネグロ', '몬테네그로', NULL, NULL, NULL, NULL),
(117, 'Morocco', 'Morocco', '摩洛哥', '摩洛哥', 'モロッコ', '모로코', NULL, NULL, NULL, NULL),
(118, 'Mozambique', 'Mozambique', '莫桑比克', '莫桑比克', 'モザンビーク', '모잠비크', NULL, NULL, NULL, NULL),
(119, 'Myanmar', 'Myanmar', '缅甸', '緬甸', 'ミャンマー', '미얀마', NULL, NULL, NULL, NULL),
(120, 'Namibia', 'Namibia', '纳米比亚', '納米比亞', 'ナミビア', '나미비아', NULL, NULL, NULL, NULL),
(121, 'Nauru', 'Nauru', '瑙鲁', '瑙魯', 'ナウル', '나우루', NULL, NULL, NULL, NULL),
(122, 'Nepal', 'Nepal', '尼泊尔', '尼泊爾', 'ネパール', '네팔', NULL, NULL, NULL, NULL),
(123, 'Hà Lan', 'Netherlands', '荷兰', '荷蘭', 'オランダ', '네덜란드', NULL, NULL, NULL, NULL),
(124, 'New Zealand', 'New Zealand', '新西兰', '新西蘭', 'ニュージーランド', '뉴질랜드', NULL, NULL, NULL, NULL),
(125, 'Nicaragua', 'Nicaragua', '尼加拉瓜', '尼加拉瓜', 'ニカラグア', '니카라과', NULL, NULL, NULL, NULL),
(126, 'Niger', 'Niger', '尼日尔', '尼日爾', 'ニジェール', '니제르', NULL, NULL, NULL, NULL),
(127, 'Nigeria', 'Nigeria', '奈及利亚', '奈及利亞', 'ナイジェリア', '나이지리아', NULL, NULL, NULL, NULL),
(128, 'Triều Tiên', 'North Korea', '北朝鲜', '北朝鮮', '北朝鮮', '북한', NULL, NULL, NULL, NULL),
(129, 'North Macedonia', 'North Macedonia', '北马其顿', '北馬其頓', '北マケドニア', '북 마케도니아', NULL, NULL, NULL, NULL),
(130, 'Na Uy', 'Norway', '挪威', '挪威', 'ノルウェー', '북 노르웨이', NULL, NULL, NULL, NULL),
(131, 'Oman', 'Oman', '阿曼', '阿曼', 'オマーン', '오만', NULL, NULL, NULL, NULL),
(132, 'Pakistan', 'Pakistan', '巴基斯坦', '巴基斯坦', 'パキスタン', '파키스탄', NULL, NULL, NULL, NULL),
(133, 'Palau', 'Palau', 'u琉', 'u琉', 'パラオ', '팔라우', NULL, NULL, NULL, NULL),
(134, 'Panama', 'Panama', '巴拿马', '巴拿馬', 'パナマ', '파나마', NULL, NULL, NULL, NULL),
(135, 'Papua New Guinea', 'Papua New Guinea', '巴布亚新几内亚', '巴布亞新幾內亞', 'パプアニューギニア', '파푸아 뉴기니', NULL, NULL, NULL, NULL),
(136, 'Paraguay', 'Paraguay', '巴拉圭', '巴拉圭', 'パラグアイ', '파라과이', NULL, NULL, NULL, NULL),
(137, 'Peru', 'Peru', '秘鲁', '秘魯', 'ペルー', '페루', NULL, NULL, NULL, NULL),
(138, 'Philippines', 'Philippines', '菲律宾', '菲律賓', 'フィリピン', '필리핀 제도', NULL, NULL, NULL, NULL),
(139, 'Ba Lan', 'Poland', '波兰', '波蘭', 'ポーランド', '폴란드', NULL, NULL, NULL, NULL),
(140, 'Bồ Đào Nha', 'Portugal', '葡萄牙', '葡萄牙', 'ポルトガル', '포르투갈', NULL, NULL, NULL, NULL),
(141, 'Qatar', 'Qatar', '卡塔尔', '卡塔爾', 'カタール', '카타르', NULL, NULL, NULL, NULL),
(142, 'Romania', 'Romania', '罗马尼亚', '羅馬尼亞', 'ルーマニア', '루마니아', NULL, NULL, NULL, NULL),
(143, 'Nga', 'Russia', '俄国', '俄國', 'ロシア', '러시아', NULL, NULL, NULL, NULL),
(144, 'Rwanda', 'Rwanda', '卢旺达', '盧旺達', 'ルワンダ', '르완다', NULL, NULL, NULL, NULL),
(145, 'Saint Kitts & Nevis', 'Saint Kitts & Nevis', '圣基茨和尼维斯', '聖基茨和尼維斯', 'セントクリストファーネイビス', '세인트 키츠 네비스', NULL, NULL, NULL, NULL),
(146, 'Saint Lucia', 'Saint Lucia', '圣卢西亚', '聖盧西亞', 'セントルシア', '세인트 루시아', NULL, NULL, NULL, NULL),
(147, 'Samoa', 'Samoa', '萨摩亚', '薩摩亞', 'サモア', '사모아', NULL, NULL, NULL, NULL),
(148, 'San Marino', 'San Marino', '圣马力诺', '聖馬力諾', 'サンマリノ', '산 마리노', NULL, NULL, NULL, NULL),
(149, 'Sao Tome & Principe', 'Sao Tome & Principe', '圣多美与普林西比', '聖多美與普林西比', 'サントメプリンシペ', '상투 메 프린시 페', NULL, NULL, NULL, NULL),
(150, 'Saudi Arabia', 'Saudi Arabia', '沙特阿拉伯', '沙特阿拉伯', 'サウジアラビア', '사우디 아라비아', NULL, NULL, NULL, NULL),
(151, 'Senegal', 'Senegal', '塞内加尔', '塞內加爾', 'セネガル', '세네갈', NULL, NULL, NULL, NULL),
(152, 'Serbia', 'Serbia', '塞尔维亚', '塞爾維亞', 'セルビア', '세르비아', NULL, NULL, NULL, NULL),
(153, 'Seychelles', 'Seychelles', '塞舌尔', '塞舌爾', 'セイシェル', '세이셸', NULL, NULL, NULL, NULL),
(154, 'Sierra Leone', 'Sierra Leone', '塞拉利昂', '塞拉利昂', 'シエラレオネ', '시에라 리온', NULL, NULL, NULL, NULL),
(155, 'Singapore', 'Singapore', '新加坡', '新加坡', 'シンガポール', '싱가포르', NULL, NULL, NULL, NULL),
(156, 'Slovakia', 'Slovakia', '斯洛伐克', '斯洛伐克', 'スロバキア', '슬로바키아', NULL, NULL, NULL, NULL),
(157, 'Slovenia', 'Slovenia', '斯洛文尼亚', '斯洛文尼亞', 'スロベニア', '슬로베니아', NULL, NULL, NULL, NULL),
(158, 'Solomon Islands', 'Solomon Islands', '所罗门群岛', '所羅門群島', 'ソロモン諸島', '솔로몬 제도', NULL, NULL, NULL, NULL),
(159, 'Somalia', 'Somalia', '索马里', '索馬里', 'ソマリア', '소말리아', NULL, NULL, NULL, NULL),
(160, 'Nam Phi', 'South Africa', '南非', '南非', '南アフリカ', '남아프리카', NULL, NULL, NULL, NULL),
(161, 'Hàn Quốc', 'South Korea', '南韩', '南韓', '韓国', '대한민국', NULL, NULL, NULL, NULL),
(162, 'Nam Sudan', 'South Sudan', '南苏丹', '南蘇丹', '南スーダン', '남 수단', NULL, NULL, NULL, NULL),
(163, 'Tây Ban Nha', 'Spain', '西班牙', '西班牙', 'スペイン', '스페인', NULL, NULL, NULL, NULL),
(164, 'Sri Lanka', 'Sri Lanka', '斯里兰卡', '斯里蘭卡', 'スリランカ', '스리랑카', NULL, NULL, NULL, NULL),
(165, 'St. Vincent & Grenadines', 'St. Vincent & Grenadines', '圣文森特和格林纳丁斯', '聖文森特和格林納丁斯', 'セントビンセントおよびグレナディーン諸島', '세인트 빈센트 그레나딘', NULL, NULL, NULL, NULL),
(166, 'State of Palestine', 'State of Palestine', '巴勒斯坦国', '巴勒斯坦國', 'パレスチナ', '팔레스타인', NULL, NULL, NULL, NULL),
(167, 'Sudan', 'Sudan', '苏丹', '蘇丹', 'スーダン', '수단', NULL, NULL, NULL, NULL),
(168, 'Suriname', 'Suriname', '苏里南', '蘇里南', 'スリナム', '수리남', NULL, NULL, NULL, NULL),
(169, 'Thụy Điển', 'Sweden', '瑞典', '瑞典', 'スウェーデン', '스웨덴', NULL, NULL, NULL, NULL),
(170, 'Thụy Sĩ', 'Switzerland', '瑞士', '瑞士', 'スイス', '스위스', NULL, NULL, NULL, NULL),
(171, 'Syria', 'Syria', '叙利亚', '敘利亞', 'シリア', '시리아', NULL, NULL, NULL, NULL),
(172, 'Tajikistan', 'Tajikistan', '塔吉克斯坦', '塔吉克斯坦', 'タジキスタン', '타지키스탄', NULL, NULL, NULL, NULL),
(173, 'Tanzania', 'Tanzania', '坦桑尼亚', '坦桑尼亞', 'タンザニア', '탄자니아', NULL, NULL, NULL, NULL),
(174, 'Thái Lan', 'Thailand', '泰国', '泰國', 'タイ', '태국', NULL, NULL, NULL, NULL),
(175, 'Đông Timo', 'Timor-Leste', '东帝汶', '東帝汶', '東ティモール', '동 티모르', NULL, NULL, NULL, NULL),
(176, 'Togo', 'Togo', '多哥', '多哥', 'トーゴ', '토고', NULL, NULL, NULL, NULL),
(177, 'Tonga', 'Tonga', '汤加', '湯加', 'トンガ', '통가', NULL, NULL, NULL, NULL),
(178, 'Trinidad and Tobago', 'Trinidad and Tobago', '特立尼达和多巴哥', '特立尼達和多巴哥', 'トリニダード・トバゴ', '트리니다드 토바고', NULL, NULL, NULL, NULL),
(179, 'Tunisia', 'Tunisia', '突尼斯', '突尼斯', 'チュニジア', '튀니지', NULL, NULL, NULL, NULL),
(180, 'Thổ Nhĩ Kỳ', 'Turkey', '火鸡', '火雞', '七面鳥', '터키', NULL, NULL, NULL, NULL),
(181, 'Turkmenistan', 'Turkmenistan', '土库曼斯坦', '土庫曼斯坦', 'トルクメニスタン', '투르크 메니스탄', NULL, NULL, NULL, NULL),
(182, 'Tuvalu', 'Tuvalu', '图瓦卢', '圖瓦盧', 'ツバル', '투발루', NULL, NULL, NULL, NULL),
(183, 'Uganda', 'Uganda', '乌干达', '烏干達', 'ウガンダ', '우간다', NULL, NULL, NULL, NULL),
(184, 'Ukraine', 'Ukraine', '乌克兰', '烏克蘭', 'ウクライナ', '우크라이나', NULL, NULL, NULL, NULL),
(185, 'United Arab Emirates', 'United Arab Emirates', '阿拉伯联合酋长国', '阿拉伯聯合酋長國', 'アラブ首長国連邦', '아랍 에미리트', NULL, NULL, NULL, NULL),
(186, 'Anh', 'United Kingdom', '英国', '英國', 'イギリス', '영국', NULL, NULL, NULL, '2020-07-23 04:12:54'),
(187, 'Mỹ', 'United States', '美国', '美國', 'アメリカ', '미국', NULL, 'checked', NULL, '2021-06-16 03:37:35'),
(188, 'Uruguay', 'Uruguay', '乌拉圭', '烏拉圭', 'ウルグアイ', '우루과이', NULL, NULL, NULL, NULL),
(189, 'Uzbekistan', 'Uzbekistan', '乌兹别克斯坦', '烏茲別克斯坦', 'ウズベキスタン', '우즈베키스탄', NULL, NULL, NULL, '2020-07-23 03:26:12'),
(190, 'Vanuatu', 'Vanuatu', '瓦努阿图', '瓦努阿圖', 'バヌアツ', '바누아투', NULL, NULL, NULL, NULL),
(191, 'Venezuela', 'Venezuela', '委内瑞拉', '委內瑞拉', 'ベネズエラ', '베네수엘라', NULL, NULL, NULL, '2020-07-22 04:25:52'),
(192, 'Việt Nam', 'VietNam', '越南', '越南', 'ベトナム', '베트남', NULL, 'checked', NULL, '2021-09-10 08:27:36'),
(193, 'Yemen', 'Yemen', '也门', '也門', 'イエメン', '예멘', NULL, NULL, NULL, NULL),
(194, 'Zambia', 'Zambia', '赞比亚', '贊比亞', 'ザンビア', '잠비아', NULL, NULL, NULL, NULL),
(195, 'Zimbabwe', 'Zimbabwe', '津巴布韦', '津巴布韋', 'ジンバブエ', '짐바브웨', NULL, NULL, NULL, NULL),
(196, 'Đài Loan', 'Taiwan', '台湾', '台灣', '台湾', '대만', NULL, 'checked', NULL, '2021-10-04 09:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `od_id` int(10) UNSIGNED NOT NULL,
  `od_user_id` int(11) NOT NULL DEFAULT 0,
  `od_user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `od_total` int(11) NOT NULL DEFAULT 0,
  `od_ship` int(11) DEFAULT NULL,
  `od_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `od_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `od_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `od_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`od_id`, `od_user_id`, `od_user_name`, `od_total`, `od_ship`, `od_note`, `od_address`, `od_phone`, `od_status`, `created_at`, `updated_at`) VALUES
(24, 49, NULL, 200000, 0, 'Khách hàng ghi chú', '112/28 Tây Hóa, Q9, TpHCM', '0933953192', 0, '2020-02-18 17:00:00', '2020-04-13 20:39:30'),
(25, 49, NULL, 621000, 0, 'Khách hàng ghi chú', '112/28 Tây Hóa, Q9, TpHCM', '0933953192', 2, '2020-03-10 21:45:26', '2020-04-19 11:03:27'),
(26, 49, NULL, 2000000, 0, 'Khách hàng ghi chú', '112/28 Tây Hóa, Q9, TpHCM', '0933953192', 4, '2020-03-24 21:47:03', '2020-04-19 11:21:53'),
(27, 49, NULL, 21000, 0, 'Khách hàng ghi chú', '112/28 Tây Hóa, Q9, TpHCM', '0933953192', 3, '2020-04-19 10:13:05', '2020-04-19 11:21:44'),
(29, 49, 'Tuấn Anh', 0, 0, 'Khách hàng ghi chú', '112/28 Tây Hóa, Q9, TpHCM', '0933953192', 0, '2020-04-19 11:20:17', '2020-04-19 11:20:17'),
(30, 49, 'Tuấn Anh', 0, 0, 'Khách hàng ghi chú', '112/28 Tây Hóa, Q9, TpHCM', '0933953192', 0, '2020-04-22 04:57:42', '2020-04-22 04:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `odd_id` int(10) UNSIGNED NOT NULL,
  `odd_od_id` int(11) NOT NULL DEFAULT 0,
  `odd_product_id` int(11) NOT NULL DEFAULT 0,
  `odd_product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `odd_product_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `odd_product_price` int(11) DEFAULT NULL,
  `odd_qty` int(11) NOT NULL DEFAULT 0,
  `odd_price` int(11) NOT NULL DEFAULT 0,
  `odd_sale` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_order_detail`
--

INSERT INTO `tb_order_detail` (`odd_id`, `odd_od_id`, `odd_product_id`, `odd_product_name`, `odd_product_img`, `odd_product_price`, `odd_qty`, `odd_price`, `odd_sale`, `created_at`, `updated_at`) VALUES
(40, 24, 146, 'đã xóa', '15866868371586168420thiet-bi-ho-boi-emaux.jpg', 0, 1, 0, 0, '2020-04-13 20:39:30', '2020-04-13 20:39:30'),
(41, 24, 149, 'GHẾ MÂY NHỰA TẮM NẮNG | GIƯỜNG TẮM NẮNG NHỰA GIẢ MÂY', '15866873661579406675ghe-tam-nang-nhu-may.jpg', 0, 1, 0, 0, '2020-04-13 20:39:30', '2020-04-13 20:39:30'),
(42, 24, 154, 'GẠCH MOSAIC HỒ BƠI - GẠCH MOSAIC GỐM SỨ TRÁNG MEN', '15867202211577152729gach-op-ho-boi-4.jpg', 200000, 1, 200000, 0, '2020-04-13 20:39:30', '2020-04-13 20:39:30'),
(43, 25, 152, 'MÁI CHE BẠT KÉO XẾP', '15867197631581607011mai-che-bat-di-dong-0.jpg', 21000, 1, 21000, 0, '2020-04-18 21:45:27', '2020-04-18 21:45:27'),
(44, 25, 154, 'GẠCH MOSAIC HỒ BƠI - GẠCH MOSAIC GỐM SỨ TRÁNG MEN', '15867202211577152729gach-op-ho-boi-4.jpg', 200000, 3, 200000, 0, '2020-04-18 21:45:27', '2020-04-18 21:45:27'),
(45, 26, 154, 'GẠCH MOSAIC HỒ BƠI - GẠCH MOSAIC GỐM SỨ TRÁNG MEN', '15867202211577152729gach-op-ho-boi-4.jpg', 2000000, 1, 2000000, 0, '2020-04-18 21:47:03', '2020-04-18 21:47:03'),
(46, 27, 152, 'MÁI CHE BẠT KÉO XẾP', '15867197631581607011mai-che-bat-di-dong-0.jpg', 21000, 1, 21000, 0, '2020-04-19 10:13:05', '2020-04-19 10:13:05'),
(48, 29, 147, 'MÁY BƠM HỒ BƠI GIÁ TỐT INTELLI PRO XF HÃNG PENTAIR', '15866870161582212969may-bom-pentair-0.jpg', 0, 1, 0, 0, '2020-04-19 11:20:17', '2020-04-19 11:20:17'),
(49, 30, 147, 'MÁY BƠM HỒ BƠI GIÁ TỐT INTELLI PRO XF HÃNG PENTAIR', '15866870161582212969may-bom-pentair-0.jpg', 0, 1, 0, 0, '2020-04-22 04:57:42', '2020-04-22 04:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `pro_id` int(10) UNSIGNED NOT NULL,
  `pro_ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_ten_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_ten_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_ten_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_ten_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_ten_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_owner_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_owner_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_owner_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_owner_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_nation` int(11) DEFAULT NULL,
  `pro_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_area` int(11) DEFAULT NULL,
  `pro_land_area` int(11) DEFAULT NULL,
  `pro_time_work` date DEFAULT NULL,
  `pro_induspark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_location_id` int(11) DEFAULT NULL,
  `pro_contractor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_scope_work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_3d_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_3d_video_private` tinyint(1) DEFAULT NULL,
  `pro_4d_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_4d_video_private` tinyint(1) DEFAULT NULL,
  `pro_progress_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_progress_video_private` tinyint(1) DEFAULT NULL,
  `pro_building_grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_iframe_youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_youtube_public_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_youtube_public_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_youtube_public_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_youtube_public_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_youtube_public_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_youtube_private_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_youtube_private_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_youtube_private_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_youtube_private_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_youtube_private_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_noibat` tinyint(1) DEFAULT 0,
  `pro_banchay` tinyint(1) DEFAULT 0,
  `pro_hienthi` tinyint(1) DEFAULT 0,
  `pro_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'productimg.png',
  `pro_thumb_hover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_background_cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_catalouge_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_catalouge_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_catalouge_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_catalouge_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_catalouge_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_catalouge_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_catalouge_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_catalouge_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_thongtin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_thongtin_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_thongtin_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_thongtin_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_thongtin_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_thongtin_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_thongtin_private_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_thongtin_private_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_thongtin_private_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_thongtin_private_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_thongtin_private_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_major_id` int(11) DEFAULT NULL,
  `pro_major_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_major_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_major_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_major_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_major_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_info_tech` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_info_tech_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_schoolarship` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_schoolarship_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_edu_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_edu_level_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_edu_lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_edu_lang_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_edu_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_edu_city_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_giaban` double DEFAULT 0,
  `pro_giakhuyenmai` double DEFAULT 0,
  `pro_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_editor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_trangthai` tinyint(4) DEFAULT 1,
  `pro_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_mgd_team` tinyint(1) DEFAULT 1,
  `pro_procatid` int(10) UNSIGNED DEFAULT NULL,
  `pro_procat_child` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`pro_id`, `pro_ten`, `pro_ten_vi`, `pro_ten_en`, `pro_ten_zh`, `pro_ten_ja`, `pro_ten_kr`, `pro_owner_en`, `pro_owner_zh`, `pro_owner_ja`, `pro_owner_kr`, `pro_nation`, `pro_status`, `pro_area`, `pro_land_area`, `pro_time_work`, `pro_induspark`, `pro_location_id`, `pro_contractor`, `pro_scope_work`, `pro_3d_video`, `pro_3d_video_private`, `pro_4d_video`, `pro_4d_video_private`, `pro_progress_video`, `pro_progress_video_private`, `pro_building_grade`, `pro_iframe_youtube`, `pro_youtube_public_1`, `pro_youtube_public_2`, `pro_youtube_public_3`, `pro_youtube_public_4`, `pro_youtube_public_5`, `pro_youtube_private_1`, `pro_youtube_private_2`, `pro_youtube_private_3`, `pro_youtube_private_4`, `pro_youtube_private_5`, `pro_slug`, `pro_level`, `pro_noibat`, `pro_banchay`, `pro_hienthi`, `pro_thumb`, `pro_thumb_hover`, `pro_background`, `pro_background_cover`, `pro_catalouge_1`, `pro_catalouge_2`, `pro_catalouge_3`, `pro_catalouge_4`, `pro_catalouge_5`, `pro_catalouge_6`, `pro_catalouge_7`, `pro_catalouge_8`, `pro_thongtin`, `pro_thongtin_vi`, `pro_thongtin_en`, `pro_thongtin_zh`, `pro_thongtin_ja`, `pro_thongtin_kr`, `pro_thongtin_private_vi`, `pro_thongtin_private_en`, `pro_thongtin_private_zh`, `pro_thongtin_private_ja`, `pro_thongtin_private_kr`, `pro_major_id`, `pro_major_vi`, `pro_major_en`, `pro_major_zh`, `pro_major_ja`, `pro_major_kr`, `pro_info_tech`, `pro_info_tech_en`, `pro_schoolarship`, `pro_schoolarship_en`, `pro_edu_level`, `pro_edu_level_en`, `pro_edu_lang`, `pro_edu_lang_en`, `pro_edu_city`, `pro_edu_city_en`, `pro_giaban`, `pro_giakhuyenmai`, `pro_title`, `pro_mota`, `pro_keyword`, `pro_author`, `pro_editor`, `pro_trangthai`, `pro_type`, `pro_mgd_team`, `pro_procatid`, `pro_procat_child`, `created_at`, `updated_at`) VALUES
(161, NULL, NULL, 'Achievement 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 1, '15947560231222.jpg', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, NULL, NULL, NULL, 'Tuấn Anh', 'quang', 1, 'achievement', 1, NULL, NULL, '2020-07-09 15:05:53', '2020-07-23 08:38:06'),
(163, NULL, NULL, 'Achievement 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 1, '15944350011594367963480px-JIS_mark.svg.png', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, NULL, NULL, NULL, 'Tuấn Anh', 'quang', 1, 'achievement', 1, NULL, NULL, '2020-07-09 15:21:08', '2020-07-23 08:39:48'),
(164, NULL, NULL, 'Achievement 4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 1, '15944350221594366984FIDIC.jpg', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, NULL, NULL, NULL, 'Tuấn Anh', 'quang', 1, 'achievement', 1, NULL, NULL, '2020-07-09 15:21:30', '2020-07-23 08:40:00'),
(165, NULL, NULL, 'Achievement 5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 1, '15944350381594367083782px-ISO_Logo_(Red_square).svg.png', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, NULL, NULL, NULL, 'Tuấn Anh', 'quang', 1, 'achievement', 1, NULL, NULL, '2020-07-09 15:23:07', '2020-07-27 03:17:50'),
(166, NULL, NULL, 'Achievement 6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 1, '1594435109Capture.PNG', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, NULL, NULL, NULL, 'Tuấn Anh', 'quang', 1, 'achievement', 1, NULL, NULL, '2020-07-09 15:23:20', '2020-07-23 08:40:19'),
(169, NULL, NULL, 'Achievement 7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 1, '15944351221594367704491px-U.S._Green_Building_Council_logo.svg.png', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, NULL, NULL, NULL, 'Tuấn Anh', 'quang', 1, 'achievement', 1, NULL, NULL, '2020-07-09 15:26:16', '2020-08-10 03:20:34'),
(209, NULL, 'NHÀ MÁY DIC VIỆT NAM MỞ RỘNG', 'DIC (VIETNAM) EXPANSION FACTORY', 'DIC(越南) 扩充工厂', 'DIC(ベトナム) 拡張工場', 'DIC 베트남 공장 증축', 'DIC (VIETNAM) CO.,LTD', NULL, NULL, NULL, 86, 'finished', 0, NULL, '2020-08-01', 'VISIP 1', 6, NULL, 'Design & Build Contractor', NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'dic-vietnam-expansion-factory', NULL, 0, 0, 1, '1602307565DIC3.jpg', NULL, '1603425750DF2.jpg', NULL, '1601610769DICF.jpg', '1601613317DIC.png', '1601610769Hoanthien5.jpg', '1602822550DIC6.jpg', '16312615231601610769San9.jpg', '1602822407DIC4.jpg', '1601610769Hoanthien8.jpg', '16312623401601610769Hoanthien2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'DIC (VIETNAM) EXPANSION FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2020-09-30 08:38:37', '2021-09-10 08:25:41'),
(210, NULL, 'NHÀ MÁY HAPPY SMART', 'HAPPY SMART FURNISHINGS FACTORY', '快乐智能摆设工厂', 'HAPPY SMART備品工場', 'HAPPY 스마트 가구공장', 'HAPPY SMART FURNISHINGS (VIETNAM) CO. LTD', NULL, NULL, NULL, 36, 'finished', 57000, NULL, '2019-01-01', 'VISIP 2A', 6, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-1', NULL, '', '', '', '', '', '', '', '', '', '', 'happy-smart-furnishings-factory', NULL, 0, 0, 0, '1602576052HPT.png', NULL, '16033695962.png', NULL, '16033699271.jpg', '16021498452Happy.jpg', '16033699273.png', '16033699274.png', '16033699275.jpg', '16033699276.png', '1601610305Picture55.png', '16016102463D.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'HAPPY SMART FURNISHINGS FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 08:40:23', '2021-06-16 03:33:33'),
(211, NULL, 'NHÀ KHO CÔNG TY CỔ PHẦN GON SA', 'GONSA JSC. WAREHOUSE', 'GONSA联合股份公司仓库', 'GONSA合資会社倉庫', 'GONSA 창고', 'GON SA JSC.', NULL, NULL, NULL, 192, 'finished', 13000, NULL, '2019-01-01', 'HIỆP PHƯỚC', 4, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'gonsa-jsc-warehouse', NULL, 0, 0, 0, '1603364774DD.png', NULL, '1603436894Banner.jpg', NULL, '16018672631.jpg', '16018669182.jpg', '16018669183.jpg', '16018669186.jpg', '16018669187.jpg', '16018669184.jpg', '16018669185.jpg', '16033647748.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'GONSA JSC. WAREHOUSE', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 08:42:33', '2021-06-16 03:33:52'),
(214, NULL, 'NHÀ MÁY PHÚC LONG', 'PHUC LONG FACTORY', 'PHUC LONG工厂', 'PHUC LONG工場', 'PHUC LONG 공장', 'PHUC LONG TRADING PRODUCTION CO., LTD.', NULL, NULL, NULL, 192, 'finished', NULL, NULL, '2018-10-19', 'MỸ PHƯỚC 3', 6, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'phuc-long-factory', NULL, 0, 0, 0, '1602575898PLGa.png', NULL, '1603437620Banner.jpg', NULL, '16018654731.jpg', '1601865473z2080618726477_e9440a20f4e2dee9ff57851d12110426.jpg', '16018654733.jpg', '16018654734.jpg', '16018654735.jpg', '16018654736.jpg', '16018654737.jpg', '16018654738.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'PHUC LONG FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 08:47:41', '2021-06-16 03:35:49'),
(215, NULL, 'NHÀ MÁY KG GIAI ĐOẠN 2', 'KG FACTORY PHASE 2', 'KG工厂 阶段2', 'KG工場 フェーズ2', 'KG 2차 공장', 'KOATSU GAS KOGYO VIETNAM CO., LTD.', NULL, NULL, NULL, 86, 'finished', NULL, NULL, '2018-08-11', 'NHƠN TRẠCH 6', 5, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-1', NULL, '', '', '', '', '', '', '', '', '', '', 'kg-factory-phase-2', NULL, 0, 0, 0, '1602576082KG2a.png', NULL, '1603437708Banner.jpg', NULL, '16021462281.jpg', '16021462282.jpg', '16021462283.jpg', '16021462284.jpg', '16033638305.png', '16021462286.jpg', '16021462287.jpg', '16021462288.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'KG FACTORY PHASE 2', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 08:51:04', '2021-06-16 03:36:08'),
(216, NULL, 'NHÀ MÁY THỰC PHẨM THỌ PHÁT', 'THO PHAT FOOD FACTORY', 'TPT FOOD FACTORY', 'TPT FOOD FACTORY', 'THO PHAT 식품공장', 'THO PHAT CO. LTD', NULL, NULL, NULL, 192, 'finished', 23000, NULL, '2018-07-20', 'HIỆP PHƯỚC', 4, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'tho-phat-food-factory', NULL, 0, 0, 0, '1602575881TPTa.png', NULL, '1603437981Banner.jpg', NULL, '16018800741.jpg', '16033672163.jpg', '16018800743.png', '16057617494.jpg', '16033672167.png', '16057617496.jpg', '16057617497.jpg', '16021499878.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'THO PHAT FOOD FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 08:52:43', '2021-06-16 03:36:38'),
(217, NULL, 'NHÀ MÁY RENAISSANCE', 'RENAISSANCE FACTORY', 'RENAISSANCE工厂', 'RENAISSANCE工場', 'RENAISSANCE 공장', 'RENAISSANCE FASHION CLOTHING CO. LTD.', NULL, NULL, NULL, 78, 'finished', 15000, NULL, '2018-01-06', 'LONG GIANG', 5, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'renaissance-factory', NULL, 0, 0, 0, '1602575860RSNa.png', NULL, '1603438198Banner.jpg', NULL, '16033679051.jpg', '16033676822.jpg', '16033679053.jpg', '16033679054.png', NULL, NULL, '16033679057.jpg', '16033676828.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'RENAISSANCE FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 08:54:35', '2021-06-16 03:36:57'),
(218, NULL, 'NHÀ MÁY UCHIYAMA GIAI ĐOẠN 2', 'UCHIYAMA FACTORY PHASE 2', '内山工厂 阶段2', '内山工場 フェーズ2', 'UCHIY 2차 공장', 'UCHIYAMA VIETNAM INC.', NULL, NULL, NULL, 86, 'finished', 24310, NULL, '2018-01-01', 'MỸ PHƯỚC 3', 6, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-2', NULL, '', '', '', '', '', '', '', '', '', '', 'uchiyama-factory-phase-2', NULL, 0, 0, 0, '1602575837UCYa.png', NULL, '1601625201Picture43.png', NULL, '1601609795Picture47.jpg', '1601609795Picture43.png', '1601609795Picture50.jpg', '16033681174.png', '16033681175.jpg', '1601609795Picture51.jpg', '1603368117z2139430895897_72edd37c95ef7b3cc60b0f9908c519d7.jpg', '1601609795Picture49.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'UCHIYAMA FACTORY PHASE 2', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 08:56:18', '2021-06-16 03:37:17'),
(219, NULL, 'NHÀ MÁY SAITEX', 'SAITEX FACTORY', 'SAITEX 工厂', 'SAITEX 工場', 'SAITEX 공장', 'SAITEX INTERNATIONAL (VIETNAM) CO. LTD.', NULL, NULL, NULL, 187, 'unknow', 65000, NULL, '2018-01-01', 'NHƠN TRẠCH 6', 5, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-1', NULL, '', '', '', '', '', '', '', '', '', '', 'saitex-factory', NULL, 0, 0, 0, '1602575816SAITEXa.png', NULL, '1603438584SAITEX-3D.jpg', NULL, '1601609549DJI_0055.jpg', '1601609549DJI_0064.jpg', '1601609549Picture11.jpg', '1601609549Picture4.jpg', '1601609549Picture2.jpg', '1601609549Picture6.jpg', '1601609613Picture7.jpg', '1601609549DJI_0083.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'SAITEX FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 08:58:03', '2021-06-16 03:37:35'),
(220, NULL, 'NHÀ MÁY BỘT THỰC PHẨM TÀI KÝ', 'TAKYFOOD FOOD FACTORY', 'TAKYFOOD食品工厂', 'TAKYFOOD食品工場', 'TAKYFOOD 식품공장', 'TAI KY FOOD - FLOUR JOINT STOCK COMPANY', NULL, NULL, NULL, 192, 'finished', 10000, NULL, '2018-11-01', 'TÂN PHÚ TRUNG', 4, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-1', NULL, '', '', '', '', '', '', '', '', '', '', 'tai-ky-food-factory', NULL, 0, 0, 1, '1602576116TKFb.png', NULL, '16022183948.png', NULL, '16018875031.jpg', '16018690212.jpg', '16018690213.png', '16033652474.jpg', '160186902155.jpg', '16018690216.png', '16018690217.png', '16018690218.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'TAKYFOOD FOOD FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:03:23', '2021-06-16 03:35:28'),
(221, NULL, 'NHÀ MÁY FAR EASTERN APPAREL', 'FAR EASTERN APPAREL FACTORY', '远东服装工厂', '極東服工場', 'FAR EASTERN APPAREL 공장', 'FAR EASTERN APPAREL (VIETNAM) LTD.', NULL, NULL, NULL, 196, 'finished', 60000, NULL, '2018-01-01', 'VISIP 2A', 6, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-2', NULL, '', '', '', '', '', '', '', '', '', '', 'far-eastern-apparel-factory', NULL, 0, 0, 0, '1602575791FEa.png', NULL, '1603438729Banner.jpg', NULL, '16033686271.jpg', '1602144918FE2.png', '16033686273.png', '16033686274.jpg', '1602145103FE5.png', '16033686276.png', '16033686277.png', '1602145103FE88.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'FAR EASTERN APPAREL FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:05:08', '2021-06-16 03:37:59'),
(222, NULL, 'NHÀ MÁY VICTORY INTERNATIONAL', 'VICTORY INTERNATIONAL FACTORY', '胜利国际工厂', 'ビクトリアインターナショナル工場', 'VICTORY INTERNATIONAL 공장', 'VICTORY INTERNATIONAL (VIETNAM) CO., LTD', NULL, NULL, NULL, 196, 'finished', 33540, NULL, '2018-01-01', 'KHU KINH TẾ CỬA KHẨU LONG AN', 8, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-2', NULL, '', '', '', '', '', '', '', '', '', '', 'victory-international-factory', NULL, 0, 0, 0, '1602575771VIa.png', NULL, '1603438797Banner.jpg', NULL, '16033693971.jpg', '16021456022.jpg', '16033693973.png', '16033691564.jpg', '16033692395.jpg', '16033691566.jpg', '16033691567.png', '16021456028.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'VICTORY INTERNATIONAL FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:06:46', '2021-06-16 03:39:05'),
(223, NULL, 'NHÀ MÁY SAKURA', 'SAKURA FACTORY', '樱花彩色笔工厂', 'サクラクレパス工場', 'SAKURA 공장', 'SAKURA COLOR PRODUCTS OF VIETNAM CO., LTD', NULL, NULL, NULL, 86, 'finished', NULL, NULL, '2017-01-01', 'LONG ĐỨC', 5, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'sakura-factory', NULL, 0, 0, 0, '1602575749SKAb.png', NULL, '1603438855Banner.jpg', NULL, '16034189061.png', NULL, '16034189063.png', '16034189064.png', NULL, NULL, '16034189067.png', '16034189068.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'SAKURA FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:09:57', '2021-06-16 03:44:17'),
(224, NULL, 'NHÀ MÁY NIPPON RIKA', 'NIPPON RIKA FACTORY', '日本里卡工厂', '日本理化工場', 'NIPPON RIKA 공장', 'NIPPON RIKA VIETNAM CO. LTD.', NULL, NULL, NULL, 86, 'finished', 10500, NULL, '2017-01-01', 'VISIP 2A', 6, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'nippon-rika-factory', NULL, 0, 0, 0, '1602575730NPRa.png', NULL, '16014571051597130901NPRBia.png', NULL, NULL, '16021493362.jpg', NULL, '16021493364.jpg', NULL, NULL, '16021493367.jpg', '16021493368.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'NIPPON RIKA FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:11:45', '2021-06-16 03:44:34'),
(225, NULL, 'NHÀ MÁY NIPPON KONPO', 'NIPPON KONPO FACTORY', '日本梱包工厂', '日本梱包工場', 'NIPPON KONPO 공장', 'NIPPON KONPO VIETNAM CO.,LTD', NULL, NULL, NULL, 86, 'finished', 31000, NULL, '2016-01-01', 'TÂN ĐÔNG HIỆP', 4, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-2', NULL, '', '', '', '', '', '', '', '', '', '', 'nippon-konpo-factory', NULL, 0, 0, 0, '1602575672NKOa.png', NULL, '1602212756NKO.png', NULL, NULL, '16021497622Nippon Konpo.jpg', NULL, NULL, NULL, NULL, NULL, '1602149762Nippon Konpo.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'NIPPON KONPO FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:13:38', '2021-06-16 03:45:13'),
(226, NULL, 'NHÀ MÁY TAINAN', 'TAINAN ENTERPRISE FACTORY', '台南企业工厂', '台南企業工場', 'TAINAN ENTERPRISE 공장', 'TAINAN ENTERPRISES (VIETNAM) CO., LTD', NULL, NULL, NULL, 196, 'finished', 38675, NULL, '2016-01-01', NULL, 8, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-2', NULL, '', '', '', '', '', '', '', '', '', '', 'tainan-enterprise-factory', NULL, 0, 0, 1, '1602575652TNNa.png', NULL, '1603438924Banner.jpg', NULL, '1601609296HINH THUC TE (5).jpg', '16018695472.jpg', '16018695473.jpg', '16018699154a.jpg', '1601609094HINH THUC TE (6).jpg', '16018699926.jpg', '1601609094HINH THUC TE (4).jpg', '16018695478.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'TAINAN ENTERPRISE FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:15:44', '2021-06-16 03:45:35'),
(227, NULL, 'NHÀ MÁY ASTI', 'ASTI FACTORY', 'ASTI工厂', 'ASTI工場', 'ASTI 공장', 'ASTI ELECTRONICS CORPORATION', NULL, NULL, NULL, 86, 'finished', 25500, NULL, '2016-01-01', 'TÂN ĐÔNG HIỆP', 6, NULL, 'Civil Construction', NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'asti-factory', NULL, 0, 0, 0, '1603452333ASTIa.png', NULL, '1603438991Banner.jpg', NULL, NULL, '16034523332.jpg', NULL, NULL, '16034234935.png', '16034234936.png', NULL, '16034523338.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'ASTI FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:17:50', '2021-06-16 03:45:57'),
(228, NULL, 'NHÀ MÁY LC', 'LC FACTORY', 'LC工厂', 'LC工場', 'LC 공장', 'LC VIETNAM CO. LTD.', NULL, NULL, NULL, 196, 'finished', NULL, NULL, '2016-01-01', 'ASCENDAS', 6, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'lc-factory', NULL, 0, 0, 0, '1602575588LCCa.png', NULL, '1603439071Banner.jpg', NULL, '16034246821.png', NULL, '16034246823.png', '16034246824.png', NULL, NULL, '16034246825.png', '16016088752.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'LC FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:19:23', '2021-06-16 03:46:16'),
(229, NULL, 'NHÀ MÁY PONTEX', 'PONTEX FACTORY', 'PONTEX工厂', 'PONTEX工場', 'PONTEX FACTORY 공장', 'VIETNAM PONTEX POLYBLEND CO.,LTD.', NULL, NULL, NULL, 196, 'finished', 16289, NULL, '2016-01-02', 'MỸ PHƯỚC 2', 6, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'pontex-factory', NULL, 0, 0, 0, '1602575705PTXa1.png', NULL, '1603422302Banner.png', NULL, NULL, '16034226542.png', NULL, NULL, '16034226545.png', NULL, '16034226547.png', '16034226548.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'PONTEX FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:21:36', '2021-06-16 03:44:53'),
(230, NULL, 'NHÀ MÁY TAKAZONO', 'TAKAZONO FACTORY', 'TAKAZONO 工厂', 'TAKAZONO 工場', 'TAKAZONO 공장', 'TAKAZONO VIETNAM CO., LTD', NULL, NULL, NULL, 86, 'finished', NULL, NULL, '2015-01-01', 'LONG HẬU', 4, NULL, 'Civil Construction', NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'takazono-factory', NULL, 0, 0, 0, '1602575554TKOa.png', NULL, '1602212029TKO.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'TAKAZONO FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:23:29', '2021-06-16 03:46:38'),
(231, NULL, 'NHÀ MÁY UCHIYAMA GIAI ĐOẠN 1', 'UCHIYAMA FACTORY PHASE 1', '内山工厂 阶段1', '内山工場 フェーズ1', 'UCHIYAMA 1차 공장', 'UCHIYAMA VIETNAM INC.', NULL, NULL, NULL, 86, 'finished', 56100, NULL, '2015-01-01', 'MỸ PHƯỚC 3', 6, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-2', NULL, '', '', '', '', '', '', '', '', '', '', 'uchiyama-factory-phase-1', NULL, 0, 0, 0, '1602575536UCAa.png', NULL, '1602211934UCA.png', NULL, '1603435005Blank.png', '1603435005Blank.png', '1603435005Blank.png', NULL, '1603435005Blank.png', NULL, '1603435005Blank.png', '1603435005Blank.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'UCHIYAMA FACTORY PHASE 1', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:25:06', '2021-06-16 03:47:07'),
(232, NULL, 'NHÀ MÁY OJITEX', 'OJITEX FACTORY', 'OJITEX工厂', 'OJITEX工場', 'OJITEX 공장', 'OJITEX (VIETNAM) CO., LTD', NULL, NULL, NULL, 86, 'finished', 33500, NULL, '2015-01-01', 'VISIP 2A', 6, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-2', NULL, '', '', '', '', '', '', '', '', '', '', 'ojitex-factory', NULL, 0, 0, 0, '1602575497IJXa.png', NULL, '1602211850Banner.jpg', NULL, '1601608638IMG_0630.JPG', '1601608638IMG_2741.JPG', '1601608638IMG_0636.JPG', '1601608638IMG_2736.JPG', '1601608638IMG_0652.JPG', '1601608638IMG_0643.JPG', '1601608638IMG_0637.JPG', '1601608638IMG_0658.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'OJITEX FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:26:34', '2021-06-16 03:47:26'),
(233, NULL, 'NHÀ MÁY M2 GIAI ĐOẠN 1', 'M2 FACTORY PHASE 1', 'M2工厂 阶段1', 'M2工場 フェーズ1', 'M2 1차 공장', 'M2 GLOBAL CO.,LTD', NULL, NULL, NULL, 196, 'finished', 13000, NULL, '2015-01-01', 'RẠCH BẮP', 6, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'm2-factory-phase-1', NULL, 0, 0, 0, '1602575468MMa.png', NULL, '1602211774MM.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'M2 FACTORY PHASE 1', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:28:04', '2021-06-16 03:47:42'),
(234, NULL, 'NHÀ MÁY LOVETEX', 'LOVETEX FACTORY', 'LOVETEX 工厂', 'LOVETEX 工場', 'LOVETEX 공장', 'LOVETEX INDUSTRIAL VIETNAM CO., LTD.', NULL, NULL, NULL, 196, 'finished', 11400, NULL, '2014-01-31', 'AMATA', 5, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'lovetex-factory', NULL, 0, 0, 0, '1602575435LVXa.png', NULL, '1602211684LVX.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'LOVETEX FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:29:51', '2021-06-16 03:47:57'),
(235, NULL, 'NHÀ MÁY KG GIAI ĐOẠN 1', 'KG FACTORY PHASE 1', 'KG 工厂 阶段1', 'KG 工場 フェーズ1', 'KG 1차 공장', 'KOATSU GAS KOGYO VIETNAM CO., LTD.', NULL, NULL, NULL, 86, 'finished', NULL, NULL, '2014-01-02', 'LONG ĐỨC', 5, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'kg-factory-phase-1', NULL, 0, 0, 0, '1602575415KGU1a.png', NULL, '1602211568KGU1.png', NULL, '1603434954Blank.png', NULL, '1603434954Blank.png', '1603434954Blank.png', NULL, NULL, '1603434954Blank.png', '1603434954Blank.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'KG FACTORY PHASE 1', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:32:52', '2021-06-16 03:48:16'),
(236, NULL, 'NHÀ MÁY LIXIL', 'LIXIL FACTORY', 'LIXIL 工厂', 'LIXIL 工場', 'LIXIL 공장', 'LIXIL GLOBAL MANUFACTURING VIETNAM CO., LTD.', NULL, NULL, NULL, 86, 'finished', 14000, NULL, '2013-01-01', 'LONG ĐỨC', 5, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'lixil-factory', NULL, 0, 0, 0, '1602575385LXLa.png', NULL, '1601458456159677330601. LXL tong the.jpg', NULL, NULL, NULL, NULL, '16016071263D1.png', '16016071263D2.png', NULL, NULL, '1601606819he-thong-camera-giam-sat-nha-may-lixil-1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'LIXIL FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:34:16', '2021-06-16 03:48:33'),
(237, NULL, 'NHÀ MÁY NISSEY', 'NISSEY FACTORY', 'NISSEY 工厂', 'NISSEY 工場', 'NISSEY 공장', 'NISSEY (VIET NAM) CO., LTD', NULL, NULL, NULL, 86, 'finished', NULL, NULL, '2013-01-01', 'TÂN THUẬN', 4, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'nissey-factory', NULL, 0, 0, 0, '1602575368NSYa.png', NULL, '1602211476NSY tong the.jpg', NULL, NULL, NULL, NULL, '1601608279NSY6.png', '1601608303NSY5.png', NULL, NULL, '1601608392NSY4.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'NISSEY FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2020-09-30 09:35:47', '2021-06-16 03:48:52'),
(238, NULL, 'NHÀ KHO & KÝ TÚC XÁ CÔNG NHÂN CÔNG TY HẠO THĂNG', 'HAOSHENG CO. WAREHOUSE & DORMITORY', '浩升公司新建仓库和宿舍', 'ハオシェン会社の新倉庫＆ドミトリー', 'HAO SHENG 창고 및 기숙사', 'HaoSheng Co. Ltd', NULL, NULL, NULL, 36, 'ongoing', NULL, NULL, '2020-10-31', NULL, 6, NULL, 'Design & Build General Contractor', NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'haosheng-co-warehouse', NULL, 0, 0, 1, '162244183116194951217.png', '16023066541602305033HTX.png', '1610615307z2278405234201_d9c5a0177508d5688e27e712f68800de.jpg', NULL, '1631259713Untitled.png', '1631259713Untitled.png', '1631259713Untitled.png', '1631259713Untitled.png', '1631259713Untitled.png', '1631259713Untitled.png', '1631259713Untitled.png', '1631259713Untitled.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'HAOSHENG CO. WAREHOUSE & DORMITORY', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2020-10-01 09:40:11', '2021-09-10 07:41:53'),
(239, NULL, 'NHÀ MÁY ĐỒ CHƠI LATOYS', 'LATOYS TOY FACTORY', 'LATOYS玩具厂', 'LATOYS玩具工場', '라토이스 장난감 공장', 'Long An Toys Co. Ltd.', NULL, NULL, NULL, 192, 'ongoing', 11966, NULL, '2020-12-18', NULL, 8, NULL, 'Design & Build General Contractor', NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'latoys-toy-factory', NULL, 0, 0, 1, '1602669950DDD.jpg', NULL, '1602669950DDD.jpg', NULL, '1602669950LA1.jpg', '16026699503.jpg', '16026707152.jpg', '16026699504.jpg', '16026699505a.jpg', '16026705116.jpg', '16026699507.jpg', '16026699508.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'LATOYS TOY FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2020-10-14 10:04:28', '2021-06-16 03:26:05'),
(241, NULL, 'KHO LẠNH 66 HỒ TÙNG MẬU', '66 HO TUNG MAU ST.COLD STORAGE', '何東茂街66號 冷藏室', '66 HO TUNG MAU通り 冷蔵倉庫', '66 HO TUNG MAU 냉동창고', 'WINDSOR PROPERTY MANAGEMENT GROUP CORP.', NULL, NULL, NULL, 192, 'finished', NULL, NULL, '2020-11-01', NULL, 4, NULL, 'Cold Storage construction', NULL, 0, NULL, 0, NULL, 0, 'grade-4', NULL, '', '', '', '', '', '', '', '', '', '', '66-ho-tung-mau-st-cold-storage', NULL, 0, 0, 0, '1605761282FP.jpg', NULL, '1605761282FP.jpg', NULL, '16057612821.jpg', '16057612822.jpg', '16057612823.jpg', '16057612824.jpg', '16057612825.jpg', '16057612826.jpg', '16057612827.jpg', '16057612828.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '66 HO TUNG MAU ST.COLD STORAGE', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2020-11-19 04:48:02', '2021-06-16 03:32:01'),
(242, NULL, 'NHÀ XƯỞNG MINH AN', 'MINH AN FACTORY', '明安工程', '明安工程', 'MINH AN 공장', 'ADVANCED MULTITECH (VIETNAM) CO. LTD.', NULL, NULL, NULL, 196, 'ongoing', NULL, NULL, '2020-11-01', 'NHƠN TRẠCH', 5, NULL, 'Design', NULL, 0, NULL, 0, NULL, 0, 'grade-4', NULL, '', '', '', '', '', '', '', '', '', '', 'minh-an-factory', NULL, 0, 0, 1, '1605780870FD.jpg', NULL, '1605780870FD.jpg', NULL, '16057808701.jpg', NULL, '16057808703.jpg', '16057808704.jpg', NULL, NULL, '16057808707.jpg', '16057808708.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'MINH AN FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2020-11-19 10:14:30', '2021-06-16 03:32:19'),
(243, NULL, 'NHÀ MÁY SẢN XUẤT ĐỒ GỖ NỘI THẤT TỪ GỖ TÁI CHẾ', 'RECLAIMED WOOD FURNITURE FACTORY', '再生木家具厂', '再生木材家具工場', '재활용 목재 가구 공장', 'PGT-RECLAIMED (VIETNAM) COMPANY LIMITED', NULL, NULL, NULL, 9, 'ongoing', 73000, 80000, '2021-08-07', 'Nam Tan Uyen', 6, NULL, 'Design & Build General Contractor', 'https://youtu.be/ZD3KiFFcGbc', 0, NULL, 0, NULL, 0, 'grade-2', NULL, '', '', '', '', '', '', '', '', '', '', 'reclaimed-wood-furniture-factory', NULL, 0, 0, 1, '1610517960Cover.jpg', '1614832463WFF.webp', NULL, NULL, '16196626478.jpg', '1624518606a174bef30984fcdaa595.jpg', '1625131210vlcsnap-2021-07-01-16h16m34s516.jpg', '16232335204.jpg', '1625125719DJI_0667.JPG', '1625126118z2463227097188_5885271fe188f30313f783fe34770b05.jpg', '1624502805DJI_0429 (1).JPG', '1625125441DJI_0656.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'RECLAIMED WOOD FURNITURE FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2021-01-13 06:06:00', '2021-07-01 09:20:10'),
(246, NULL, 'KHU CĂN HỘ GREENFIELD 686', 'GREENFIELD 686 APARTMENT', 'GREENFIELD 686公寓', 'GREENFIELD 686アパート', 'GREENFIELD 686 아파트', 'ACSC', NULL, NULL, NULL, 192, 'finished', 32000, 3601, '2017-01-19', NULL, 4, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-1', NULL, '', '', '', '', '', '', '', '', '', '', 'greenfield-686-appartment', NULL, 0, 0, 0, '1614843481686.jpg', NULL, '16148434811.jpg', NULL, '16148434811.jpg', NULL, '16148434813.jpg', '16148434814.jpg', '16148434815.jpg', '16148434816.jpg', '16148434817.jpg', '16148434818.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'GREENFIELD 686 APARTMENT', NULL, NULL, NULL, NULL, 1, 'project', 1, NULL, NULL, '2021-03-04 07:38:01', '2021-06-16 03:39:30'),
(247, NULL, 'LAVITA CHARM', 'LAVITA CHARM', 'LAVITA CHARM', 'LAVITA CHARM', '라비타 참', 'THUAN THANH PHAT CO. LTD', NULL, NULL, NULL, 192, 'ongoing', 56000, 14852, '2021-01-06', NULL, 4, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-1', NULL, '', '', '', '', '', '', '', '', '', '', 'lavita-charm', NULL, 0, 0, 0, '1614845895Lavita.jpg', NULL, '16148458958.jpg', NULL, '16148458951.jpg', '16148458963.jpg', '16148458962.jpg', '16148462396.jpg', '16148458967.jpg', '16148462394.jpg', '16148462395.jpg', '16148458968.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'LAVITA CHARM', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2021-03-04 08:18:16', '2021-06-16 03:25:46'),
(248, NULL, 'BICONSI TOWER', 'BICONSI TOWER', 'BICONSI TOWER', 'BICONSI TOWER', 'BICONSI 타워', 'BICONSI', NULL, NULL, NULL, 192, 'finished', 48381, 7984, '2020-02-15', NULL, 6, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-1', NULL, '', '', '', '', '', '', '', '', '', '', 'biconsi-tower', NULL, 0, 0, 0, '1614847568Biconsi.jpg', NULL, '16148475688.jpg', NULL, '16148475681.jpg', '16148475682.jpg', '16148475683.jpg', '16148475684.jpg', '16148475685.jpg', '16148475686.jpg', '16148475687.jpg', '16148475688.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'BICONSI TOWER', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2021-03-04 08:46:08', '2021-06-16 03:33:17'),
(249, NULL, 'BCONS MIỀN ĐÔNG', 'BCONS MIEN DONG', 'BCONS MIEN DONG', 'BCONS MIEN DONG', '비콘스 미엔동', 'BCONS CONSTRUCTION INVESTMENT JSC.', NULL, NULL, NULL, 192, 'ongoing', 66500, 8853, '2021-04-15', NULL, 6, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 'grade-1', NULL, '', '', '', '', '', '', '', '', '', '', 'bcons-mien-dong', NULL, 0, 0, 0, '1614848610Bcons.jpg', NULL, '16148486108.jpg', NULL, '16148486101.jpg', '16148498262.jpg', '16148486103.jpg', '16148486104.jpg', '16148486105.jpg', '16148486106.jpg', '16148486107.jpg', '16148486108.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'BCONS MIEN DONG', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2021-03-04 09:03:30', '2021-06-16 03:25:27'),
(250, NULL, 'NHÀ MÁY LÚA GẠO', 'RICE FACTORY', '大米工廠', 'ライスファクトリー', '쌀 공장', 'CH Ltd.', NULL, NULL, NULL, 192, 'ongoing', NULL, NULL, '2021-04-30', NULL, 8, NULL, 'Design', NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'rice-factory', NULL, 0, 0, 1, '1616764968Untitled-2.jpg', '1616764968Untitled-1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '1616764968Untitled-3.jpg', NULL, '1616764968Capture.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'RICE FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2021-03-26 13:22:48', '2021-06-16 03:25:05'),
(251, NULL, 'KHO BẢO QUẢN DƯỢC PHẨM, VẬT TƯ Y TẾ THEO TIÊU CHUẨN GSP', 'PHARMACEUTICAL WAREHOUSE IN COMPLIANCE WITH GSP', 'GSP标准的药品医材保管仓库', 'GSPに準拠した医薬品倉庫', 'GSP를 준수하는 제약 창고', 'ASIA PACIFIC PHARMACEUTICAL LIMITED COMPANY', NULL, NULL, NULL, 192, 'ongoing', NULL, NULL, '2021-10-20', 'DONG XOAI 3', 10, NULL, 'General Contractor', NULL, 0, NULL, 0, NULL, 0, 'grade-3', NULL, '', '', '', '', '', '', '', '', '', '', 'pharmaceutical-warehouse-in-compliance-with-gsp', NULL, 0, 0, 1, '162125145402a.jpg', '162125140601a.jpg', NULL, NULL, '162125170906a.jpg', '162125170907a.jpg', '1622173484185458114_10219197710482513_1210688202073580347_n.jpg', '16225352440601_4.jpg', '16225330320601_2.jpg', '16225352440601_5.jpg', '16225330320601_3.jpg', '16225329190601_1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'PHARMACEUTICAL WAREHOUSE IN COMPLIANCE WITH GSP', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2021-05-17 11:36:09', '2021-09-10 08:27:36'),
(254, NULL, 'NHÀ MÁY TA HSING ELECTRIC WIRE & CABLE (VIET NAM)', 'TA HSING ELECTRIC WIRE & CABLE (VIET NAM) FACTORY', '越南大兴电线电缆工厂', 'ベトナム大興ワイヤーおよびケーブル工場', '베트남 Daxing 전선 및 케이블 공장', 'TA HSING ELECTRIC WIRE & CABLE (VIET NAM) CO., LTD', NULL, NULL, NULL, 196, 'ongoing', 11500, 22000, '2021-12-30', 'VSIP II', 6, NULL, NULL, 'https://youtu.be/1ouZIxW2AeE', 0, NULL, 0, NULL, 0, 'grade-2', NULL, '', '', '', '', '', '', '', '', '', '', 'ta-hsing-electric-wire-cable-viet-nam-factory', NULL, 0, 0, 1, '16259681905.jpg', '163333974716262282582 (1).jpg', '16259681901.jpg', NULL, '16259684482.jpg', '16259684483.jpg', '1626228188ta.jpg', '1625968871DJI_0327（1）.JPG', '16262282576.jpg', '16262280813.jpg', '16262282582.jpg', '1625968733DJI_0321(1).JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'TA HSING ELECTRIC WIRE & CABLE (VIET NAM) FACTORY', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2021-07-11 01:49:51', '2021-10-04 09:29:07'),
(255, NULL, 'SLP LONG AN', 'SLP LONG AN', 'SLP LONG AN', 'SLP LONG AN', 'SLP LONG AN', 'SLP LONG HAU LOGISTICS CO,. LTD', NULL, NULL, NULL, 36, 'ongoing', 65000, 61000, '2021-12-31', NULL, 8, 'UP-MGD J.V', 'General Contractor', NULL, 0, NULL, 0, NULL, 0, 'grade-1', NULL, '', '', '', '', '', '', '', '', '', '', 'slplh', NULL, 0, 0, 1, '1633337124z2816498358843_c5b278a4daf69fa3421e91bc57f2afdd.jpg', '1633339043z2816498369825_f64277e2951c6e2ee55f44495a98929a.jpg', '163333712451a191f47cfab5a4eceb.jpg', NULL, '163333705051a191f47cfab5a4eceb.jpg', '1633337050z2816498330202_7b740abb61525bf1d9231aa003741be2.jpg', '1633337050z2816498423563_cef2beef2f7cb3c79723a5fe1d4599a3.jpg', '1633339043z2816498450160_05ef37d24d8bf402e2f7b483c6ea46d7.jpg', '1633337050z2816498391346_89ace20b596ec135051b5f01b51a20cb.jpg', '1633339043z2816523129229_c0c4dfea4106b359c69c116289932036.jpg', '1633337668z2816498369825_f64277e2951c6e2ee55f44495a98929a.jpg', '1633337668be96d2d84eb287ecdea3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'SLP LONG AN', NULL, NULL, NULL, NULL, 1, 'project', 0, NULL, NULL, '2021-10-04 08:44:10', '2021-10-04 09:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_productcat`
--

CREATE TABLE `tb_productcat` (
  `procat_id` int(10) UNSIGNED NOT NULL,
  `procat_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procat_ten_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procat_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procat_prio` int(11) DEFAULT NULL,
  `pro_thongtin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_thongtin_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procat_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procat_mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `procat_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procat_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procat_staff_id` int(11) DEFAULT NULL,
  `procat_thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'productcat.png',
  `procat_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procat_editor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procat_hienthi` tinyint(1) NOT NULL DEFAULT 1,
  `procat_noibat` tinyint(1) NOT NULL DEFAULT 0,
  `procat_piority` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_productcat`
--

INSERT INTO `tb_productcat` (`procat_id`, `procat_ten`, `procat_ten_en`, `procat_slug`, `procat_prio`, `pro_thongtin`, `pro_thongtin_en`, `procat_title`, `procat_mota`, `procat_keyword`, `procat_icon`, `procat_staff_id`, `procat_thumb`, `procat_author`, `procat_editor`, `procat_hienthi`, `procat_noibat`, `procat_piority`, `created_at`, `updated_at`) VALUES
(26, 'Canada', 'Canada', 'canada', 1, '<p><strong>Lợi thế khi du học tại Canada</strong><br />Về m&ocirc;i trường học tập, Canada thuộc top đầu c&aacute;c quốc gia đầu tư rất lớn cho gi&aacute;o dục. Mỗi năm ch&iacute;nh phủ Canada d&agrave;nh 20% ng&acirc;n s&aacute;ch cho gi&aacute;o dục, tương đương với 10000 euros/ sinh vi&ecirc;n mỗi năm. Kh&ocirc;ng chỉ vậy, cơ sở hạ tầng của Canada rất hiện đại v&agrave; tiện nghi, với hệ thống giao th&ocirc;ng như t&agrave;u điện ngầm, t&agrave;u si&ecirc;u tốc, airbus&hellip; v&agrave; những thư viện hay ph&ograve;ng nghi&ecirc;n cứu bậc nhất.</p>\r\n<p>Về cơ hội việc l&agrave;m, từ năm 1990, luật M&ocirc;i trường tại Canada được th&ocirc;ng qua, c&aacute;c tổ chức phi ch&iacute;nh phủ, c&aacute;c c&ocirc;ng ty chuy&ecirc;n về m&ocirc;i trường đang ng&agrave;y c&agrave;ng nhiều. Ch&iacute;nh v&igrave; vậy, cơ hội việc l&agrave;m cho c&aacute;c bạn sinh vi&ecirc;n theo học ng&agrave;nh n&agrave;y rất đa dạng v&agrave; phong ph&uacute;, c&oacute; thể l&agrave;m tại nhiều doanh nghiệp v&agrave; tổ chức kh&aacute;c nhau.&nbsp;</p>\r\n<p><strong>C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường tại Canada</strong><br />Đ&acirc;y l&agrave; chương tr&igrave;nh đ&agrave;o tạo kỹ thuật vi&ecirc;n c&oacute; khả năng chuy&ecirc;n m&ocirc;n cao trong c&aacute;c lĩnh vực ph&aacute;t triển bền vững, năng lượng t&aacute;i tạo v&agrave; tự nhi&ecirc;n.<br />C&oacute; nhiều lựa chọn chương tr&igrave;nh đ&agrave;o tạo cho sinh vi&ecirc;n chuy&ecirc;n ng&agrave;nh n&agrave;y.</p>\r\n<p>Bac pro &ndash; 3 năm Trung học &ndash; Ng&agrave;nh Quản l&iacute; tự nhi&ecirc;n<br />BTS M&ocirc;i trường (Bac +2) &ndash; C&aacute;c trường trung học hoặc trường Chuy&ecirc;n.<br />Bachelor (Bac +3) &ndash; Trường tư<br />Cử nh&acirc;n m&ocirc;i trường (Bac +3)<br />Cử nh&acirc;n chuy&ecirc;n nghiệp (k&eacute;o d&agrave;i 1 năm sau Bac+2/Bac+3)<br />Thạc sĩ m&ocirc;i trường (k&eacute;o d&agrave;i 2 năm sau Bac+3), tại c&aacute;c trường đại học hoặc trường chuy&ecirc;n.<br />MBA (k&eacute;o d&agrave;i 2 năm sau Bac+3), chương tr&igrave;nh quốc tế về quản l&iacute; M&ocirc;i trường, tại c&aacute;c trường đại học v&agrave; c&aacute;c trường chuy&ecirc;n ng&agrave;nh n&agrave;y.<br />Thạc sĩ chuy&ecirc;n s&acirc;u (k&eacute;o d&agrave;i 2 năm sau Bac+3), học chuy&ecirc;n ng&agrave;nh tại c&aacute;c trường chuy&ecirc;n.<br />C&aacute;c m&ocirc;n học trong chương tr&igrave;nh đ&agrave;o tạo<br />C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường c&oacute; t&iacute;nh ứng dụng rất cao. Sinh vi&ecirc;n c&oacute; thể được giảng dạy c&aacute;c m&ocirc;n học về ph&aacute;t triển bền vững, quản l&yacute; m&ocirc;i trường, nền kinh tế, quản l&yacute; dự &aacute;n, m&ocirc;i trường chung, &ocirc; nhiễm, xử l&yacute; r&aacute;c thải, luật m&ocirc;i trường, địa chất học&hellip;</p>\r\n<p><strong>Điều kiện du học Canada ng&agrave;nh M&ocirc;i trường</strong><br />&nbsp;Tr&igrave;nh độ tiếng Canada: TCF 400 hoặc tr&igrave;nh độ DELF B2 trở l&ecirc;n.<br />&nbsp;Bằng Tốt nghiệp cấp 3: Loại Kh&aacute; trở l&ecirc;n.<br />&nbsp;Ph&iacute; ghi danh: Phụ thuộc từng trường m&agrave; bạn muốn đăng k&yacute;.&nbsp;<br />T&igrave;m hiểu th&ecirc;m về c&aacute;c trường kh&ocirc;ng &aacute;p dụng ch&iacute;nh s&aacute;ch chi ph&iacute; mới</p>\r\n<p><strong>Quy tr&igrave;nh nộp hồ sơ</strong><br />C&aacute;c ứng vi&ecirc;n cần chuẩn bị hồ sơ gồm CV, thư động lực, kết quả học tập &hellip;. Trong một số trường hợp hoặc văn bằng, bạn cũng sẽ được y&ecirc;u cầu vượt qua một cuộc phỏng vấn hoặc thậm ch&iacute; một kỳ thi tuyển sinh cụ thể.</p>\r\n<p><strong>Cơ hội việc l&agrave;m sau khi tốt nghiệp</strong><br />Sau khi ho&agrave;n th&agrave;nh chương tr&igrave;nh đ&agrave;o tạo, bạn c&oacute; thể chọn tiếp tục học để lấy bằng cấp cao hơn hoặc chuy&ecirc;n m&ocirc;n h&oacute;a hơn. B&ecirc;n cạnh đ&oacute;, bạn cũng c&oacute; thể chọn đi l&agrave;m trong c&aacute;c c&ocirc;ng ty, tổ chức với c&aacute;c c&ocirc;ng việc:<br />Quản l&yacute; dự &aacute;n m&ocirc;i trường hoặc gi&oacute;</p>', '<p><strong>Advantages when studying in the Canada</strong><br />Regarding the learning environment, Canada is among the top countries that invest heavily in education. Each year the French government spends 20% of its budget on education, which is equivalent to 10,000 euros per student per year. Not only that, the French infrastructure is very modern and comfortable, with transportation systems such as subways, high speed trains, airbus ... and the best libraries or research laboratories.</p>\r\n<p>Regarding job opportunities, since 1990, the Environmental Law in Canada has been adopted, non-governmental organizations, environmental companies are increasing. Therefore, the employment opportunities for students studying this field are diverse and plentiful, able to work in many different businesses and organizations.</p>\r\n<p><strong>Training programs for Environment in Canada</strong><br />This is a training program for technicians with high expertise in the fields of sustainable development, renewable energy and natural resources.<br />There are many training program options for this specialized student.</p>\r\n<p>Bac pro - 3 years of High School - Natural Management<br />Environmental BTS (Bac +2) - High schools or Professional schools.<br />Bachelor (Bac + 3) - Private school<br />Bachelor of Environment (Bac +3)<br />Bachelor of Professional Education (lasts 1 year after Bac + 2 / Bac + 3)<br />Master of the Environment (lasts 2 years after Bac + 3), at universities or specialized schools.<br />MBA (lasting 2 years after Bac + 3), the international program for Environmental Management, at these universities and specialized schools.<br />Intensive Master (lasting 2 years after Bac + 3), majoring in specialized schools.<br />Subjects in the training program<br />Training programs on Environment are highly applicable. Students can be taught courses on sustainable development, environmental management, economy, project management, general environment, pollution, waste treatment, environmental law, geology ...</p>\r\n<p><strong>Conditions for studying French in Environment</strong><br />French level: TCF 400 or DELF B2 level or higher.<br />High School Diploma: Good or higher.<br />Enrollment fee: Depending on the school you want to register.<br />Learn more about schools that do not apply the new cost policy</p>\r\n<p><strong>Application process</strong><br />Candidates need to prepare documents including CV, motivation letter, academic results .... In some cases or degrees, you will also be required to pass an interview or even a specific entrance exam.</p>\r\n<p><strong>Employment opportunities after graduation</strong><br />After completing the training program, you can choose to continue studying to get a higher degree or more specialized. Besides, you can also choose to work in companies and organizations with the following jobs:<br />Environmental or wind project management</p>', 'Du học Canada', 'Du học Canada', 'Du học Canada keyword', '1593459857canada.png', 32, 'productcat.png', 'Tuấn Anh', 'Tuấn Anh', 1, 0, 9, '2020-06-05 07:12:43', '2020-06-29 19:44:17'),
(31, 'Mỹ', 'United State', 'my', 1, '<p><strong>Lợi thế khi du học tại Mỹ</strong><br />Về m&ocirc;i trường học tập, Mỹ thuộc top đầu c&aacute;c quốc gia đầu tư rất lớn cho gi&aacute;o dục. Mỗi năm ch&iacute;nh phủ Mỹ d&agrave;nh 20% ng&acirc;n s&aacute;ch cho gi&aacute;o dục, tương đương với 10000 euros/ sinh vi&ecirc;n mỗi năm. Kh&ocirc;ng chỉ vậy, cơ sở hạ tầng của Mỹ rất hiện đại v&agrave; tiện nghi, với hệ thống giao th&ocirc;ng như t&agrave;u điện ngầm, t&agrave;u si&ecirc;u tốc, airbus&hellip; v&agrave; những thư viện hay ph&ograve;ng nghi&ecirc;n cứu bậc nhất.</p>\r\n<p>Về cơ hội việc l&agrave;m, từ năm 1990, luật M&ocirc;i trường tại Mỹ được th&ocirc;ng qua, c&aacute;c tổ chức phi ch&iacute;nh phủ, c&aacute;c c&ocirc;ng ty chuy&ecirc;n về m&ocirc;i trường đang ng&agrave;y c&agrave;ng nhiều. Ch&iacute;nh v&igrave; vậy, cơ hội việc l&agrave;m cho c&aacute;c bạn sinh vi&ecirc;n theo học ng&agrave;nh n&agrave;y rất đa dạng v&agrave; phong ph&uacute;, c&oacute; thể l&agrave;m tại nhiều doanh nghiệp v&agrave; tổ chức kh&aacute;c nhau.&nbsp;</p>\r\n<p><strong>C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường tại Mỹ</strong><br />Đ&acirc;y l&agrave; chương tr&igrave;nh đ&agrave;o tạo kỹ thuật vi&ecirc;n c&oacute; khả năng chuy&ecirc;n m&ocirc;n cao trong c&aacute;c lĩnh vực ph&aacute;t triển bền vững, năng lượng t&aacute;i tạo v&agrave; tự nhi&ecirc;n.<br />C&oacute; nhiều lựa chọn chương tr&igrave;nh đ&agrave;o tạo cho sinh vi&ecirc;n chuy&ecirc;n ng&agrave;nh n&agrave;y.</p>\r\n<p>Bac pro &ndash; 3 năm Trung học &ndash; Ng&agrave;nh Quản l&iacute; tự nhi&ecirc;n<br />BTS M&ocirc;i trường (Bac +2) &ndash; C&aacute;c trường trung học hoặc trường Chuy&ecirc;n.<br />Bachelor (Bac +3) &ndash; Trường tư<br />Cử nh&acirc;n m&ocirc;i trường (Bac +3)<br />Cử nh&acirc;n chuy&ecirc;n nghiệp (k&eacute;o d&agrave;i 1 năm sau Bac+2/Bac+3)<br />Thạc sĩ m&ocirc;i trường (k&eacute;o d&agrave;i 2 năm sau Bac+3), tại c&aacute;c trường đại học hoặc trường chuy&ecirc;n.<br />MBA (k&eacute;o d&agrave;i 2 năm sau Bac+3), chương tr&igrave;nh quốc tế về quản l&iacute; M&ocirc;i trường, tại c&aacute;c trường đại học v&agrave; c&aacute;c trường chuy&ecirc;n ng&agrave;nh n&agrave;y.<br />Thạc sĩ chuy&ecirc;n s&acirc;u (k&eacute;o d&agrave;i 2 năm sau Bac+3), học chuy&ecirc;n ng&agrave;nh tại c&aacute;c trường chuy&ecirc;n.<br />C&aacute;c m&ocirc;n học trong chương tr&igrave;nh đ&agrave;o tạo<br />C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường c&oacute; t&iacute;nh ứng dụng rất cao. Sinh vi&ecirc;n c&oacute; thể được giảng dạy c&aacute;c m&ocirc;n học về ph&aacute;t triển bền vững, quản l&yacute; m&ocirc;i trường, nền kinh tế, quản l&yacute; dự &aacute;n, m&ocirc;i trường chung, &ocirc; nhiễm, xử l&yacute; r&aacute;c thải, luật m&ocirc;i trường, địa chất học&hellip;</p>\r\n<p><strong>Điều kiện du học Mỹ ng&agrave;nh M&ocirc;i trường</strong><br />&nbsp;Tr&igrave;nh độ tiếng Mỹ: TCF 400 hoặc tr&igrave;nh độ DELF B2 trở l&ecirc;n.<br />&nbsp;Bằng Tốt nghiệp cấp 3: Loại Kh&aacute; trở l&ecirc;n.<br />&nbsp;Ph&iacute; ghi danh: Phụ thuộc từng trường m&agrave; bạn muốn đăng k&yacute;.&nbsp;<br />T&igrave;m hiểu th&ecirc;m về c&aacute;c trường kh&ocirc;ng &aacute;p dụng ch&iacute;nh s&aacute;ch chi ph&iacute; mới</p>\r\n<p><strong>Quy tr&igrave;nh nộp hồ sơ</strong><br />C&aacute;c ứng vi&ecirc;n cần chuẩn bị hồ sơ gồm CV, thư động lực, kết quả học tập &hellip;. Trong một số trường hợp hoặc văn bằng, bạn cũng sẽ được y&ecirc;u cầu vượt qua một cuộc phỏng vấn hoặc thậm ch&iacute; một kỳ thi tuyển sinh cụ thể.</p>\r\n<p><strong>Cơ hội việc l&agrave;m sau khi tốt nghiệp</strong><br />Sau khi ho&agrave;n th&agrave;nh chương tr&igrave;nh đ&agrave;o tạo, bạn c&oacute; thể chọn tiếp tục học để lấy bằng cấp cao hơn hoặc chuy&ecirc;n m&ocirc;n h&oacute;a hơn. B&ecirc;n cạnh đ&oacute;, bạn cũng c&oacute; thể chọn đi l&agrave;m trong c&aacute;c c&ocirc;ng ty, tổ chức với c&aacute;c c&ocirc;ng việc:<br />Quản l&yacute; dự &aacute;n m&ocirc;i trường hoặc gi&oacute;</p>', '<p><strong>Advantages when studying in the United State</strong><br />Regarding the learning environment, United State is among the top countries that invest heavily in education. Each year the French government spends 20% of its budget on education, which is equivalent to 10,000 euros per student per year. Not only that, the French infrastructure is very modern and comfortable, with transportation systems such as subways, high speed trains, airbus ... and the best libraries or research laboratories.</p>\r\n<p>Regarding job opportunities, since 1990, the Environmental Law in United State has been adopted, non-governmental organizations, environmental companies are increasing. Therefore, the employment opportunities for students studying this field are diverse and plentiful, able to work in many different businesses and organizations.</p>\r\n<p><strong>Training programs for Environment in United State</strong><br />This is a training program for technicians with high expertise in the fields of sustainable development, renewable energy and natural resources.<br />There are many training program options for this specialized student.</p>\r\n<p>Bac pro - 3 years of High School - Natural Management<br />Environmental BTS (Bac +2) - High schools or Professional schools.<br />Bachelor (Bac + 3) - Private school<br />Bachelor of Environment (Bac +3)<br />Bachelor of Professional Education (lasts 1 year after Bac + 2 / Bac + 3)<br />Master of the Environment (lasts 2 years after Bac + 3), at universities or specialized schools.<br />MBA (lasting 2 years after Bac + 3), the international program for Environmental Management, at these universities and specialized schools.<br />Intensive Master (lasting 2 years after Bac + 3), majoring in specialized schools.<br />Subjects in the training program<br />Training programs on Environment are highly applicable. Students can be taught courses on sustainable development, environmental management, economy, project management, general environment, pollution, waste treatment, environmental law, geology ...</p>\r\n<p><strong>Conditions for studying French in Environment</strong><br />French level: TCF 400 or DELF B2 level or higher.<br />High School Diploma: Good or higher.<br />Enrollment fee: Depending on the school you want to register.<br />Learn more about schools that do not apply the new cost policy</p>\r\n<p><strong>Application process</strong><br />Candidates need to prepare documents including CV, motivation letter, academic results .... In some cases or degrees, you will also be required to pass an interview or even a specific entrance exam.</p>\r\n<p><strong>Employment opportunities after graduation</strong><br />After completing the training program, you can choose to continue studying to get a higher degree or more specialized. Besides, you can also choose to work in companies and organizations with the following jobs:<br />Environmental or wind project management</p>', 'Du học Mỹ', 'Du học Mỹ', 'Du học Mỹ', '1593459279USA.png', 17, 'productcat.png', 'Tuấn Anh', 'Tuấn Anh', 1, 0, 9, '2020-06-13 08:42:18', '2020-06-29 19:34:39'),
(32, 'Úc', 'Australia', 'uc', 1, '<p><strong>Lợi thế khi du học tại &Uacute;c</strong><br />Về m&ocirc;i trường học tập, &Uacute;c thuộc top đầu c&aacute;c quốc gia đầu tư rất lớn cho gi&aacute;o dục. Mỗi năm ch&iacute;nh phủ &Uacute;c d&agrave;nh 20% ng&acirc;n s&aacute;ch cho gi&aacute;o dục, tương đương với 10000 euros/ sinh vi&ecirc;n mỗi năm. Kh&ocirc;ng chỉ vậy, cơ sở hạ tầng của &Uacute;c rất hiện đại v&agrave; tiện nghi, với hệ thống giao th&ocirc;ng như t&agrave;u điện ngầm, t&agrave;u si&ecirc;u tốc, airbus&hellip; v&agrave; những thư viện hay ph&ograve;ng nghi&ecirc;n cứu bậc nhất.</p>\r\n<p>Về cơ hội việc l&agrave;m, từ năm 1990, luật M&ocirc;i trường tại &Uacute;c được th&ocirc;ng qua, c&aacute;c tổ chức phi ch&iacute;nh phủ, c&aacute;c c&ocirc;ng ty chuy&ecirc;n về m&ocirc;i trường đang ng&agrave;y c&agrave;ng nhiều. Ch&iacute;nh v&igrave; vậy, cơ hội việc l&agrave;m cho c&aacute;c bạn sinh vi&ecirc;n theo học ng&agrave;nh n&agrave;y rất đa dạng v&agrave; phong ph&uacute;, c&oacute; thể l&agrave;m tại nhiều doanh nghiệp v&agrave; tổ chức kh&aacute;c nhau.&nbsp;</p>\r\n<p><strong>C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường tại &Uacute;c</strong><br />Đ&acirc;y l&agrave; chương tr&igrave;nh đ&agrave;o tạo kỹ thuật vi&ecirc;n c&oacute; khả năng chuy&ecirc;n m&ocirc;n cao trong c&aacute;c lĩnh vực ph&aacute;t triển bền vững, năng lượng t&aacute;i tạo v&agrave; tự nhi&ecirc;n.<br />C&oacute; nhiều lựa chọn chương tr&igrave;nh đ&agrave;o tạo cho sinh vi&ecirc;n chuy&ecirc;n ng&agrave;nh n&agrave;y.</p>\r\n<p>Bac pro &ndash; 3 năm Trung học &ndash; Ng&agrave;nh Quản l&iacute; tự nhi&ecirc;n<br />BTS M&ocirc;i trường (Bac +2) &ndash; C&aacute;c trường trung học hoặc trường Chuy&ecirc;n.<br />Bachelor (Bac +3) &ndash; Trường tư<br />Cử nh&acirc;n m&ocirc;i trường (Bac +3)<br />Cử nh&acirc;n chuy&ecirc;n nghiệp (k&eacute;o d&agrave;i 1 năm sau Bac+2/Bac+3)<br />Thạc sĩ m&ocirc;i trường (k&eacute;o d&agrave;i 2 năm sau Bac+3), tại c&aacute;c trường đại học hoặc trường chuy&ecirc;n.<br />MBA (k&eacute;o d&agrave;i 2 năm sau Bac+3), chương tr&igrave;nh quốc tế về quản l&iacute; M&ocirc;i trường, tại c&aacute;c trường đại học v&agrave; c&aacute;c trường chuy&ecirc;n ng&agrave;nh n&agrave;y.<br />Thạc sĩ chuy&ecirc;n s&acirc;u (k&eacute;o d&agrave;i 2 năm sau Bac+3), học chuy&ecirc;n ng&agrave;nh tại c&aacute;c trường chuy&ecirc;n.<br />C&aacute;c m&ocirc;n học trong chương tr&igrave;nh đ&agrave;o tạo<br />C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường c&oacute; t&iacute;nh ứng dụng rất cao. Sinh vi&ecirc;n c&oacute; thể được giảng dạy c&aacute;c m&ocirc;n học về ph&aacute;t triển bền vững, quản l&yacute; m&ocirc;i trường, nền kinh tế, quản l&yacute; dự &aacute;n, m&ocirc;i trường chung, &ocirc; nhiễm, xử l&yacute; r&aacute;c thải, luật m&ocirc;i trường, địa chất học&hellip;</p>\r\n<p><strong>Điều kiện du học &Uacute;c ng&agrave;nh M&ocirc;i trường</strong><br />&nbsp;Tr&igrave;nh độ tiếng &Uacute;c: TCF 400 hoặc tr&igrave;nh độ DELF B2 trở l&ecirc;n.<br />&nbsp;Bằng Tốt nghiệp cấp 3: Loại Kh&aacute; trở l&ecirc;n.<br />&nbsp;Ph&iacute; ghi danh: Phụ thuộc từng trường m&agrave; bạn muốn đăng k&yacute;.&nbsp;<br />T&igrave;m hiểu th&ecirc;m về c&aacute;c trường kh&ocirc;ng &aacute;p dụng ch&iacute;nh s&aacute;ch chi ph&iacute; mới</p>\r\n<p><strong>Quy tr&igrave;nh nộp hồ sơ</strong><br />C&aacute;c ứng vi&ecirc;n cần chuẩn bị hồ sơ gồm CV, thư động lực, kết quả học tập &hellip;. Trong một số trường hợp hoặc văn bằng, bạn cũng sẽ được y&ecirc;u cầu vượt qua một cuộc phỏng vấn hoặc thậm ch&iacute; một kỳ thi tuyển sinh cụ thể.</p>\r\n<p><strong>Cơ hội việc l&agrave;m sau khi tốt nghiệp</strong><br />Sau khi ho&agrave;n th&agrave;nh chương tr&igrave;nh đ&agrave;o tạo, bạn c&oacute; thể chọn tiếp tục học để lấy bằng cấp cao hơn hoặc chuy&ecirc;n m&ocirc;n h&oacute;a hơn. B&ecirc;n cạnh đ&oacute;, bạn cũng c&oacute; thể chọn đi l&agrave;m trong c&aacute;c c&ocirc;ng ty, tổ chức với c&aacute;c c&ocirc;ng việc:<br />Quản l&yacute; dự &aacute;n m&ocirc;i trường hoặc gi&oacute;</p>', '<p><strong>Advantages when studying in the Australia</strong><br />Regarding the learning environment, Australia is among the top countries that invest heavily in education. Each year the French government spends 20% of its budget on education, which is equivalent to 10,000 euros per student per year. Not only that, the French infrastructure is very modern and comfortable, with transportation systems such as subways, high speed trains, airbus ... and the best libraries or research laboratories.</p>\r\n<p>Regarding job opportunities, since 1990, the Environmental Law in Australia has been adopted, non-governmental organizations, environmental companies are increasing. Therefore, the employment opportunities for students studying this field are diverse and plentiful, able to work in many different businesses and organizations.</p>\r\n<p><strong>Training programs for Environment in Australia</strong><br />This is a training program for technicians with high expertise in the fields of sustainable development, renewable energy and natural resources.<br />There are many training program options for this specialized student.</p>\r\n<p>Bac pro - 3 years of High School - Natural Management<br />Environmental BTS (Bac +2) - High schools or Professional schools.<br />Bachelor (Bac + 3) - Private school<br />Bachelor of Environment (Bac +3)<br />Bachelor of Professional Education (lasts 1 year after Bac + 2 / Bac + 3)<br />Master of the Environment (lasts 2 years after Bac + 3), at universities or specialized schools.<br />MBA (lasting 2 years after Bac + 3), the international program for Environmental Management, at these universities and specialized schools.<br />Intensive Master (lasting 2 years after Bac + 3), majoring in specialized schools.<br />Subjects in the training program<br />Training programs on Environment are highly applicable. Students can be taught courses on sustainable development, environmental management, economy, project management, general environment, pollution, waste treatment, environmental law, geology ...</p>\r\n<p><strong>Conditions for studying French in Environment</strong><br />French level: TCF 400 or DELF B2 level or higher.<br />High School Diploma: Good or higher.<br />Enrollment fee: Depending on the school you want to register.<br />Learn more about schools that do not apply the new cost policy</p>\r\n<p><strong>Application process</strong><br />Candidates need to prepare documents including CV, motivation letter, academic results .... In some cases or degrees, you will also be required to pass an interview or even a specific entrance exam.</p>\r\n<p><strong>Employment opportunities after graduation</strong><br />After completing the training program, you can choose to continue studying to get a higher degree or more specialized. Besides, you can also choose to work in companies and organizations with the following jobs:<br />Environmental or wind project management</p>', 'Du học Úc', 'Du học Úc', 'Du học Úc', '1593460396australia.png', 17, 'productcat.png', 'Tuấn Anh', 'Tuấn Anh', 1, 0, 9, '2020-06-13 08:43:37', '2020-06-29 19:53:16'),
(33, 'New Zealand', 'New Zealand', 'new-zealand', 1, '<p><strong>Lợi thế khi du học tại New Zealand</strong><br />Về m&ocirc;i trường học tập, New Zealand thuộc top đầu c&aacute;c quốc gia đầu tư rất lớn cho gi&aacute;o dục. Mỗi năm ch&iacute;nh phủ New Zealand d&agrave;nh 20% ng&acirc;n s&aacute;ch cho gi&aacute;o dục, tương đương với 10000 euros/ sinh vi&ecirc;n mỗi năm. Kh&ocirc;ng chỉ vậy, cơ sở hạ tầng của New Zealand rất hiện đại v&agrave; tiện nghi, với hệ thống giao th&ocirc;ng như t&agrave;u điện ngầm, t&agrave;u si&ecirc;u tốc, airbus&hellip; v&agrave; những thư viện hay ph&ograve;ng nghi&ecirc;n cứu bậc nhất.</p>\r\n<p>Về cơ hội việc l&agrave;m, từ năm 1990, luật M&ocirc;i trường tại New Zealand được th&ocirc;ng qua, c&aacute;c tổ chức phi ch&iacute;nh phủ, c&aacute;c c&ocirc;ng ty chuy&ecirc;n về m&ocirc;i trường đang ng&agrave;y c&agrave;ng nhiều. Ch&iacute;nh v&igrave; vậy, cơ hội việc l&agrave;m cho c&aacute;c bạn sinh vi&ecirc;n theo học ng&agrave;nh n&agrave;y rất đa dạng v&agrave; phong ph&uacute;, c&oacute; thể l&agrave;m tại nhiều doanh nghiệp v&agrave; tổ chức kh&aacute;c nhau.&nbsp;</p>\r\n<p><strong>C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường tại New Zealand</strong><br />Đ&acirc;y l&agrave; chương tr&igrave;nh đ&agrave;o tạo kỹ thuật vi&ecirc;n c&oacute; khả năng chuy&ecirc;n m&ocirc;n cao trong c&aacute;c lĩnh vực ph&aacute;t triển bền vững, năng lượng t&aacute;i tạo v&agrave; tự nhi&ecirc;n.<br />C&oacute; nhiều lựa chọn chương tr&igrave;nh đ&agrave;o tạo cho sinh vi&ecirc;n chuy&ecirc;n ng&agrave;nh n&agrave;y.</p>\r\n<p>Bac pro &ndash; 3 năm Trung học &ndash; Ng&agrave;nh Quản l&iacute; tự nhi&ecirc;n<br />BTS M&ocirc;i trường (Bac +2) &ndash; C&aacute;c trường trung học hoặc trường Chuy&ecirc;n.<br />Bachelor (Bac +3) &ndash; Trường tư<br />Cử nh&acirc;n m&ocirc;i trường (Bac +3)<br />Cử nh&acirc;n chuy&ecirc;n nghiệp (k&eacute;o d&agrave;i 1 năm sau Bac+2/Bac+3)<br />Thạc sĩ m&ocirc;i trường (k&eacute;o d&agrave;i 2 năm sau Bac+3), tại c&aacute;c trường đại học hoặc trường chuy&ecirc;n.<br />MBA (k&eacute;o d&agrave;i 2 năm sau Bac+3), chương tr&igrave;nh quốc tế về quản l&iacute; M&ocirc;i trường, tại c&aacute;c trường đại học v&agrave; c&aacute;c trường chuy&ecirc;n ng&agrave;nh n&agrave;y.<br />Thạc sĩ chuy&ecirc;n s&acirc;u (k&eacute;o d&agrave;i 2 năm sau Bac+3), học chuy&ecirc;n ng&agrave;nh tại c&aacute;c trường chuy&ecirc;n.<br />C&aacute;c m&ocirc;n học trong chương tr&igrave;nh đ&agrave;o tạo<br />C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường c&oacute; t&iacute;nh ứng dụng rất cao. Sinh vi&ecirc;n c&oacute; thể được giảng dạy c&aacute;c m&ocirc;n học về ph&aacute;t triển bền vững, quản l&yacute; m&ocirc;i trường, nền kinh tế, quản l&yacute; dự &aacute;n, m&ocirc;i trường chung, &ocirc; nhiễm, xử l&yacute; r&aacute;c thải, luật m&ocirc;i trường, địa chất học&hellip;</p>\r\n<p><strong>Điều kiện du học New Zealand ng&agrave;nh M&ocirc;i trường</strong><br />&nbsp;Tr&igrave;nh độ tiếng New Zealand: TCF 400 hoặc tr&igrave;nh độ DELF B2 trở l&ecirc;n.<br />&nbsp;Bằng Tốt nghiệp cấp 3: Loại Kh&aacute; trở l&ecirc;n.<br />&nbsp;Ph&iacute; ghi danh: Phụ thuộc từng trường m&agrave; bạn muốn đăng k&yacute;.&nbsp;<br />T&igrave;m hiểu th&ecirc;m về c&aacute;c trường kh&ocirc;ng &aacute;p dụng ch&iacute;nh s&aacute;ch chi ph&iacute; mới</p>\r\n<p><strong>Quy tr&igrave;nh nộp hồ sơ</strong><br />C&aacute;c ứng vi&ecirc;n cần chuẩn bị hồ sơ gồm CV, thư động lực, kết quả học tập &hellip;. Trong một số trường hợp hoặc văn bằng, bạn cũng sẽ được y&ecirc;u cầu vượt qua một cuộc phỏng vấn hoặc thậm ch&iacute; một kỳ thi tuyển sinh cụ thể.</p>\r\n<p><strong>Cơ hội việc l&agrave;m sau khi tốt nghiệp</strong><br />Sau khi ho&agrave;n th&agrave;nh chương tr&igrave;nh đ&agrave;o tạo, bạn c&oacute; thể chọn tiếp tục học để lấy bằng cấp cao hơn hoặc chuy&ecirc;n m&ocirc;n h&oacute;a hơn. B&ecirc;n cạnh đ&oacute;, bạn cũng c&oacute; thể chọn đi l&agrave;m trong c&aacute;c c&ocirc;ng ty, tổ chức với c&aacute;c c&ocirc;ng việc:<br />Quản l&yacute; dự &aacute;n m&ocirc;i trường hoặc gi&oacute;</p>', NULL, 'Du học New Zealand', 'Du học New Zealand', 'Du học New Zealand', '1593462442new-zealand.png', 17, 'productcat.png', 'Tuấn Anh', 'Tuấn Anh', 1, 0, 9, '2020-06-13 08:44:47', '2020-06-29 20:27:22'),
(34, 'Anh', 'England', 'anh', 1, NULL, '<p><strong>Advantages when studying in the England</strong><br />Regarding the learning environment, England is among the top countries that invest heavily in education. Each year the French government spends 20% of its budget on education, which is equivalent to 10,000 euros per student per year. Not only that, the French infrastructure is very modern and comfortable, with transportation systems such as subways, high speed trains, airbus ... and the best libraries or research laboratories.</p>\r\n<p>Regarding job opportunities, since 1990, the Environmental Law in England has been adopted, non-governmental organizations, environmental companies are increasing. Therefore, the employment opportunities for students studying this field are diverse and plentiful, able to work in many different businesses and organizations.</p>\r\n<p><strong>Training programs for Environment in England</strong><br />This is a training program for technicians with high expertise in the fields of sustainable development, renewable energy and natural resources.<br />There are many training program options for this specialized student.</p>\r\n<p>Bac pro - 3 years of High School - Natural Management<br />Environmental BTS (Bac +2) - High schools or Professional schools.<br />Bachelor (Bac + 3) - Private school<br />Bachelor of Environment (Bac +3)<br />Bachelor of Professional Education (lasts 1 year after Bac + 2 / Bac + 3)<br />Master of the Environment (lasts 2 years after Bac + 3), at universities or specialized schools.<br />MBA (lasting 2 years after Bac + 3), the international program for Environmental Management, at these universities and specialized schools.<br />Intensive Master (lasting 2 years after Bac + 3), majoring in specialized schools.<br />Subjects in the training program<br />Training programs on Environment are highly applicable. Students can be taught courses on sustainable development, environmental management, economy, project management, general environment, pollution, waste treatment, environmental law, geology ...</p>\r\n<p><strong>Conditions for studying French in Environment</strong><br />French level: TCF 400 or DELF B2 level or higher.<br />High School Diploma: Good or higher.<br />Enrollment fee: Depending on the school you want to register.<br />Learn more about schools that do not apply the new cost policy</p>\r\n<p><strong>Application process</strong><br />Candidates need to prepare documents including CV, motivation letter, academic results .... In some cases or degrees, you will also be required to pass an interview or even a specific entrance exam.</p>\r\n<p><strong>Employment opportunities after graduation</strong><br />After completing the training program, you can choose to continue studying to get a higher degree or more specialized. Besides, you can also choose to work in companies and organizations with the following jobs:<br />Environmental or wind project management</p>', 'Du học Anh', 'Du học Anh', 'Du học Anh', '1593462320england.png', 17, 'productcat.png', 'Tuấn Anh', 'Tuấn Anh', 1, 0, 9, '2020-06-13 08:45:42', '2020-06-29 20:25:20'),
(35, 'Ireland', 'Ireland', 'ireland', 1, '<p><strong>Lợi thế khi du học tại Ireland</strong><br />Về m&ocirc;i trường học tập, Ireland thuộc top đầu c&aacute;c quốc gia đầu tư rất lớn cho gi&aacute;o dục. Mỗi năm ch&iacute;nh phủ Ireland d&agrave;nh 20% ng&acirc;n s&aacute;ch cho gi&aacute;o dục, tương đương với 10000 euros/ sinh vi&ecirc;n mỗi năm. Kh&ocirc;ng chỉ vậy, cơ sở hạ tầng của Ireland rất hiện đại v&agrave; tiện nghi, với hệ thống giao th&ocirc;ng như t&agrave;u điện ngầm, t&agrave;u si&ecirc;u tốc, airbus&hellip; v&agrave; những thư viện hay ph&ograve;ng nghi&ecirc;n cứu bậc nhất.</p>\r\n<p>Về cơ hội việc l&agrave;m, từ năm 1990, luật M&ocirc;i trường tại Ireland được th&ocirc;ng qua, c&aacute;c tổ chức phi ch&iacute;nh phủ, c&aacute;c c&ocirc;ng ty chuy&ecirc;n về m&ocirc;i trường đang ng&agrave;y c&agrave;ng nhiều. Ch&iacute;nh v&igrave; vậy, cơ hội việc l&agrave;m cho c&aacute;c bạn sinh vi&ecirc;n theo học ng&agrave;nh n&agrave;y rất đa dạng v&agrave; phong ph&uacute;, c&oacute; thể l&agrave;m tại nhiều doanh nghiệp v&agrave; tổ chức kh&aacute;c nhau.&nbsp;</p>\r\n<p><strong>C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường tại Ireland</strong><br />Đ&acirc;y l&agrave; chương tr&igrave;nh đ&agrave;o tạo kỹ thuật vi&ecirc;n c&oacute; khả năng chuy&ecirc;n m&ocirc;n cao trong c&aacute;c lĩnh vực ph&aacute;t triển bền vững, năng lượng t&aacute;i tạo v&agrave; tự nhi&ecirc;n.<br />C&oacute; nhiều lựa chọn chương tr&igrave;nh đ&agrave;o tạo cho sinh vi&ecirc;n chuy&ecirc;n ng&agrave;nh n&agrave;y.</p>\r\n<p>Bac pro &ndash; 3 năm Trung học &ndash; Ng&agrave;nh Quản l&iacute; tự nhi&ecirc;n<br />BTS M&ocirc;i trường (Bac +2) &ndash; C&aacute;c trường trung học hoặc trường Chuy&ecirc;n.<br />Bachelor (Bac +3) &ndash; Trường tư<br />Cử nh&acirc;n m&ocirc;i trường (Bac +3)<br />Cử nh&acirc;n chuy&ecirc;n nghiệp (k&eacute;o d&agrave;i 1 năm sau Bac+2/Bac+3)<br />Thạc sĩ m&ocirc;i trường (k&eacute;o d&agrave;i 2 năm sau Bac+3), tại c&aacute;c trường đại học hoặc trường chuy&ecirc;n.<br />MBA (k&eacute;o d&agrave;i 2 năm sau Bac+3), chương tr&igrave;nh quốc tế về quản l&iacute; M&ocirc;i trường, tại c&aacute;c trường đại học v&agrave; c&aacute;c trường chuy&ecirc;n ng&agrave;nh n&agrave;y.<br />Thạc sĩ chuy&ecirc;n s&acirc;u (k&eacute;o d&agrave;i 2 năm sau Bac+3), học chuy&ecirc;n ng&agrave;nh tại c&aacute;c trường chuy&ecirc;n.<br />C&aacute;c m&ocirc;n học trong chương tr&igrave;nh đ&agrave;o tạo<br />C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường c&oacute; t&iacute;nh ứng dụng rất cao. Sinh vi&ecirc;n c&oacute; thể được giảng dạy c&aacute;c m&ocirc;n học về ph&aacute;t triển bền vững, quản l&yacute; m&ocirc;i trường, nền kinh tế, quản l&yacute; dự &aacute;n, m&ocirc;i trường chung, &ocirc; nhiễm, xử l&yacute; r&aacute;c thải, luật m&ocirc;i trường, địa chất học&hellip;</p>\r\n<p><strong>Điều kiện du học Ireland ng&agrave;nh M&ocirc;i trường</strong><br />&nbsp;Tr&igrave;nh độ tiếng Ireland: TCF 400 hoặc tr&igrave;nh độ DELF B2 trở l&ecirc;n.<br />&nbsp;Bằng Tốt nghiệp cấp 3: Loại Kh&aacute; trở l&ecirc;n.<br />&nbsp;Ph&iacute; ghi danh: Phụ thuộc từng trường m&agrave; bạn muốn đăng k&yacute;.&nbsp;<br />T&igrave;m hiểu th&ecirc;m về c&aacute;c trường kh&ocirc;ng &aacute;p dụng ch&iacute;nh s&aacute;ch chi ph&iacute; mới</p>\r\n<p><strong>Quy tr&igrave;nh nộp hồ sơ</strong><br />C&aacute;c ứng vi&ecirc;n cần chuẩn bị hồ sơ gồm CV, thư động lực, kết quả học tập &hellip;. Trong một số trường hợp hoặc văn bằng, bạn cũng sẽ được y&ecirc;u cầu vượt qua một cuộc phỏng vấn hoặc thậm ch&iacute; một kỳ thi tuyển sinh cụ thể.</p>\r\n<p><strong>Cơ hội việc l&agrave;m sau khi tốt nghiệp</strong><br />Sau khi ho&agrave;n th&agrave;nh chương tr&igrave;nh đ&agrave;o tạo, bạn c&oacute; thể chọn tiếp tục học để lấy bằng cấp cao hơn hoặc chuy&ecirc;n m&ocirc;n h&oacute;a hơn. B&ecirc;n cạnh đ&oacute;, bạn cũng c&oacute; thể chọn đi l&agrave;m trong c&aacute;c c&ocirc;ng ty, tổ chức với c&aacute;c c&ocirc;ng việc:<br />Quản l&yacute; dự &aacute;n m&ocirc;i trường hoặc gi&oacute;</p>', '<p><strong>Advantages when studying in the Ireland</strong><br />Regarding the learning environment, Ireland is among the top countries that invest heavily in education. Each year the French government spends 20% of its budget on education, which is equivalent to 10,000 euros per student per year. Not only that, the French infrastructure is very modern and comfortable, with transportation systems such as subways, high speed trains, airbus ... and the best libraries or research laboratories.</p>\r\n<p>Regarding job opportunities, since 1990, the Environmental Law in Ireland has been adopted, non-governmental organizations, environmental companies are increasing. Therefore, the employment opportunities for students studying this field are diverse and plentiful, able to work in many different businesses and organizations.</p>\r\n<p><strong>Training programs for Environment in Ireland</strong><br />This is a training program for technicians with high expertise in the fields of sustainable development, renewable energy and natural resources.<br />There are many training program options for this specialized student.</p>\r\n<p>Bac pro - 3 years of High School - Natural Management<br />Environmental BTS (Bac +2) - High schools or Professional schools.<br />Bachelor (Bac + 3) - Private school<br />Bachelor of Environment (Bac +3)<br />Bachelor of Professional Education (lasts 1 year after Bac + 2 / Bac + 3)<br />Master of the Environment (lasts 2 years after Bac + 3), at universities or specialized schools.<br />MBA (lasting 2 years after Bac + 3), the international program for Environmental Management, at these universities and specialized schools.<br />Intensive Master (lasting 2 years after Bac + 3), majoring in specialized schools.<br />Subjects in the training program<br />Training programs on Environment are highly applicable. Students can be taught courses on sustainable development, environmental management, economy, project management, general environment, pollution, waste treatment, environmental law, geology ...</p>\r\n<p><strong>Conditions for studying French in Environment</strong><br />French level: TCF 400 or DELF B2 level or higher.<br />High School Diploma: Good or higher.<br />Enrollment fee: Depending on the school you want to register.<br />Learn more about schools that do not apply the new cost policy</p>\r\n<p><strong>Application process</strong><br />Candidates need to prepare documents including CV, motivation letter, academic results .... In some cases or degrees, you will also be required to pass an interview or even a specific entrance exam.</p>\r\n<p><strong>Employment opportunities after graduation</strong><br />After completing the training program, you can choose to continue studying to get a higher degree or more specialized. Besides, you can also choose to work in companies and organizations with the following jobs:<br />Environmental or wind project management</p>', 'Du học Ireland', 'Du học Ireland', 'Du học Ireland', '1593462004Ireland.png', 17, 'productcat.png', 'Tuấn Anh', 'Tuấn Anh', 1, 0, 9, '2020-06-13 08:46:52', '2020-06-29 20:20:04'),
(36, 'Singapore', 'Singapore', 'singapore', 1, '<p><strong>Lợi thế khi du học tại Singapore</strong><br />Về m&ocirc;i trường học tập, Singapore thuộc top đầu c&aacute;c quốc gia đầu tư rất lớn cho gi&aacute;o dục. Mỗi năm ch&iacute;nh phủ Singapore d&agrave;nh 20% ng&acirc;n s&aacute;ch cho gi&aacute;o dục, tương đương với 10000 euros/ sinh vi&ecirc;n mỗi năm. Kh&ocirc;ng chỉ vậy, cơ sở hạ tầng của Singapore rất hiện đại v&agrave; tiện nghi, với hệ thống giao th&ocirc;ng như t&agrave;u điện ngầm, t&agrave;u si&ecirc;u tốc, airbus&hellip; v&agrave; những thư viện hay ph&ograve;ng nghi&ecirc;n cứu bậc nhất.</p>\r\n<p>Về cơ hội việc l&agrave;m, từ năm 1990, luật M&ocirc;i trường tại Singapore được th&ocirc;ng qua, c&aacute;c tổ chức phi ch&iacute;nh phủ, c&aacute;c c&ocirc;ng ty chuy&ecirc;n về m&ocirc;i trường đang ng&agrave;y c&agrave;ng nhiều. Ch&iacute;nh v&igrave; vậy, cơ hội việc l&agrave;m cho c&aacute;c bạn sinh vi&ecirc;n theo học ng&agrave;nh n&agrave;y rất đa dạng v&agrave; phong ph&uacute;, c&oacute; thể l&agrave;m tại nhiều doanh nghiệp v&agrave; tổ chức kh&aacute;c nhau.&nbsp;</p>\r\n<p><strong>C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường tại Singapore</strong><br />Đ&acirc;y l&agrave; chương tr&igrave;nh đ&agrave;o tạo kỹ thuật vi&ecirc;n c&oacute; khả năng chuy&ecirc;n m&ocirc;n cao trong c&aacute;c lĩnh vực ph&aacute;t triển bền vững, năng lượng t&aacute;i tạo v&agrave; tự nhi&ecirc;n.<br />C&oacute; nhiều lựa chọn chương tr&igrave;nh đ&agrave;o tạo cho sinh vi&ecirc;n chuy&ecirc;n ng&agrave;nh n&agrave;y.</p>\r\n<p>Bac pro &ndash; 3 năm Trung học &ndash; Ng&agrave;nh Quản l&iacute; tự nhi&ecirc;n<br />BTS M&ocirc;i trường (Bac +2) &ndash; C&aacute;c trường trung học hoặc trường Chuy&ecirc;n.<br />Bachelor (Bac +3) &ndash; Trường tư<br />Cử nh&acirc;n m&ocirc;i trường (Bac +3)<br />Cử nh&acirc;n chuy&ecirc;n nghiệp (k&eacute;o d&agrave;i 1 năm sau Bac+2/Bac+3)<br />Thạc sĩ m&ocirc;i trường (k&eacute;o d&agrave;i 2 năm sau Bac+3), tại c&aacute;c trường đại học hoặc trường chuy&ecirc;n.<br />MBA (k&eacute;o d&agrave;i 2 năm sau Bac+3), chương tr&igrave;nh quốc tế về quản l&iacute; M&ocirc;i trường, tại c&aacute;c trường đại học v&agrave; c&aacute;c trường chuy&ecirc;n ng&agrave;nh n&agrave;y.<br />Thạc sĩ chuy&ecirc;n s&acirc;u (k&eacute;o d&agrave;i 2 năm sau Bac+3), học chuy&ecirc;n ng&agrave;nh tại c&aacute;c trường chuy&ecirc;n.<br />C&aacute;c m&ocirc;n học trong chương tr&igrave;nh đ&agrave;o tạo<br />C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường c&oacute; t&iacute;nh ứng dụng rất cao. Sinh vi&ecirc;n c&oacute; thể được giảng dạy c&aacute;c m&ocirc;n học về ph&aacute;t triển bền vững, quản l&yacute; m&ocirc;i trường, nền kinh tế, quản l&yacute; dự &aacute;n, m&ocirc;i trường chung, &ocirc; nhiễm, xử l&yacute; r&aacute;c thải, luật m&ocirc;i trường, địa chất học&hellip;</p>\r\n<p><strong>Điều kiện du học Singapore ng&agrave;nh M&ocirc;i trường</strong><br />&nbsp;Tr&igrave;nh độ tiếng Singapore: TCF 400 hoặc tr&igrave;nh độ DELF B2 trở l&ecirc;n.<br />&nbsp;Bằng Tốt nghiệp cấp 3: Loại Kh&aacute; trở l&ecirc;n.<br />&nbsp;Ph&iacute; ghi danh: Phụ thuộc từng trường m&agrave; bạn muốn đăng k&yacute;.&nbsp;<br />T&igrave;m hiểu th&ecirc;m về c&aacute;c trường kh&ocirc;ng &aacute;p dụng ch&iacute;nh s&aacute;ch chi ph&iacute; mới</p>\r\n<p><strong>Quy tr&igrave;nh nộp hồ sơ</strong><br />C&aacute;c ứng vi&ecirc;n cần chuẩn bị hồ sơ gồm CV, thư động lực, kết quả học tập &hellip;. Trong một số trường hợp hoặc văn bằng, bạn cũng sẽ được y&ecirc;u cầu vượt qua một cuộc phỏng vấn hoặc thậm ch&iacute; một kỳ thi tuyển sinh cụ thể.</p>\r\n<p><strong>Cơ hội việc l&agrave;m sau khi tốt nghiệp</strong><br />Sau khi ho&agrave;n th&agrave;nh chương tr&igrave;nh đ&agrave;o tạo, bạn c&oacute; thể chọn tiếp tục học để lấy bằng cấp cao hơn hoặc chuy&ecirc;n m&ocirc;n h&oacute;a hơn. B&ecirc;n cạnh đ&oacute;, bạn cũng c&oacute; thể chọn đi l&agrave;m trong c&aacute;c c&ocirc;ng ty, tổ chức với c&aacute;c c&ocirc;ng việc:<br />Quản l&yacute; dự &aacute;n m&ocirc;i trường hoặc gi&oacute;</p>', '<p><strong>Advantages when studying in the Singapore</strong><br />Regarding the learning environment, Singapore is among the top countries that invest heavily in education. Each year the French government spends 20% of its budget on education, which is equivalent to 10,000 euros per student per year. Not only that, the French infrastructure is very modern and comfortable, with transportation systems such as subways, high speed trains, airbus ... and the best libraries or research laboratories.</p>\r\n<p>Regarding job opportunities, since 1990, the Environmental Law in Singapore has been adopted, non-governmental organizations, environmental companies are increasing. Therefore, the employment opportunities for students studying this field are diverse and plentiful, able to work in many different businesses and organizations.</p>\r\n<p><strong>Training programs for Environment in Singapore</strong><br />This is a training program for technicians with high expertise in the fields of sustainable development, renewable energy and natural resources.<br />There are many training program options for this specialized student.</p>\r\n<p>Bac pro - 3 years of High School - Natural Management<br />Environmental BTS (Bac +2) - High schools or Professional schools.<br />Bachelor (Bac + 3) - Private school<br />Bachelor of Environment (Bac +3)<br />Bachelor of Professional Education (lasts 1 year after Bac + 2 / Bac + 3)<br />Master of the Environment (lasts 2 years after Bac + 3), at universities or specialized schools.<br />MBA (lasting 2 years after Bac + 3), the international program for Environmental Management, at these universities and specialized schools.<br />Intensive Master (lasting 2 years after Bac + 3), majoring in specialized schools.<br />Subjects in the training program<br />Training programs on Environment are highly applicable. Students can be taught courses on sustainable development, environmental management, economy, project management, general environment, pollution, waste treatment, environmental law, geology ...</p>\r\n<p><strong>Conditions for studying French in Environment</strong><br />French level: TCF 400 or DELF B2 level or higher.<br />High School Diploma: Good or higher.<br />Enrollment fee: Depending on the school you want to register.<br />Learn more about schools that do not apply the new cost policy</p>\r\n<p><strong>Application process</strong><br />Candidates need to prepare documents including CV, motivation letter, academic results .... In some cases or degrees, you will also be required to pass an interview or even a specific entrance exam.</p>\r\n<p><strong>Employment opportunities after graduation</strong><br />After completing the training program, you can choose to continue studying to get a higher degree or more specialized. Besides, you can also choose to work in companies and organizations with the following jobs:<br />Environmental or wind project management</p>', 'Du học Singapore', 'Du học Singapore', 'Du học Singapore', '1593461314sing.png', 17, 'productcat.png', 'Tuấn Anh', 'Tuấn Anh', 1, 0, 9, '2020-06-13 08:48:18', '2020-06-29 20:08:34');
INSERT INTO `tb_productcat` (`procat_id`, `procat_ten`, `procat_ten_en`, `procat_slug`, `procat_prio`, `pro_thongtin`, `pro_thongtin_en`, `procat_title`, `procat_mota`, `procat_keyword`, `procat_icon`, `procat_staff_id`, `procat_thumb`, `procat_author`, `procat_editor`, `procat_hienthi`, `procat_noibat`, `procat_piority`, `created_at`, `updated_at`) VALUES
(37, 'Philippines', 'Philippines', 'philippines', 1, '<p><strong>Lợi thế khi du học tại Philippines</strong><br />Về m&ocirc;i trường học tập, Philippines thuộc top đầu c&aacute;c quốc gia đầu tư rất lớn cho gi&aacute;o dục. Mỗi năm ch&iacute;nh phủ Philippines d&agrave;nh 20% ng&acirc;n s&aacute;ch cho gi&aacute;o dục, tương đương với 10000 euros/ sinh vi&ecirc;n mỗi năm. Kh&ocirc;ng chỉ vậy, cơ sở hạ tầng của Philippines rất hiện đại v&agrave; tiện nghi, với hệ thống giao th&ocirc;ng như t&agrave;u điện ngầm, t&agrave;u si&ecirc;u tốc, airbus&hellip; v&agrave; những thư viện hay ph&ograve;ng nghi&ecirc;n cứu bậc nhất.</p>\r\n<p>Về cơ hội việc l&agrave;m, từ năm 1990, luật M&ocirc;i trường tại Philippines được th&ocirc;ng qua, c&aacute;c tổ chức phi ch&iacute;nh phủ, c&aacute;c c&ocirc;ng ty chuy&ecirc;n về m&ocirc;i trường đang ng&agrave;y c&agrave;ng nhiều. Ch&iacute;nh v&igrave; vậy, cơ hội việc l&agrave;m cho c&aacute;c bạn sinh vi&ecirc;n theo học ng&agrave;nh n&agrave;y rất đa dạng v&agrave; phong ph&uacute;, c&oacute; thể l&agrave;m tại nhiều doanh nghiệp v&agrave; tổ chức kh&aacute;c nhau.&nbsp;</p>\r\n<p><strong>C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường tại Philippines</strong><br />Đ&acirc;y l&agrave; chương tr&igrave;nh đ&agrave;o tạo kỹ thuật vi&ecirc;n c&oacute; khả năng chuy&ecirc;n m&ocirc;n cao trong c&aacute;c lĩnh vực ph&aacute;t triển bền vững, năng lượng t&aacute;i tạo v&agrave; tự nhi&ecirc;n.<br />C&oacute; nhiều lựa chọn chương tr&igrave;nh đ&agrave;o tạo cho sinh vi&ecirc;n chuy&ecirc;n ng&agrave;nh n&agrave;y.</p>\r\n<p>Bac pro &ndash; 3 năm Trung học &ndash; Ng&agrave;nh Quản l&iacute; tự nhi&ecirc;n<br />BTS M&ocirc;i trường (Bac +2) &ndash; C&aacute;c trường trung học hoặc trường Chuy&ecirc;n.<br />Bachelor (Bac +3) &ndash; Trường tư<br />Cử nh&acirc;n m&ocirc;i trường (Bac +3)<br />Cử nh&acirc;n chuy&ecirc;n nghiệp (k&eacute;o d&agrave;i 1 năm sau Bac+2/Bac+3)<br />Thạc sĩ m&ocirc;i trường (k&eacute;o d&agrave;i 2 năm sau Bac+3), tại c&aacute;c trường đại học hoặc trường chuy&ecirc;n.<br />MBA (k&eacute;o d&agrave;i 2 năm sau Bac+3), chương tr&igrave;nh quốc tế về quản l&iacute; M&ocirc;i trường, tại c&aacute;c trường đại học v&agrave; c&aacute;c trường chuy&ecirc;n ng&agrave;nh n&agrave;y.<br />Thạc sĩ chuy&ecirc;n s&acirc;u (k&eacute;o d&agrave;i 2 năm sau Bac+3), học chuy&ecirc;n ng&agrave;nh tại c&aacute;c trường chuy&ecirc;n.<br />C&aacute;c m&ocirc;n học trong chương tr&igrave;nh đ&agrave;o tạo<br />C&aacute;c chương tr&igrave;nh đ&agrave;o tạo ng&agrave;nh M&ocirc;i trường c&oacute; t&iacute;nh ứng dụng rất cao. Sinh vi&ecirc;n c&oacute; thể được giảng dạy c&aacute;c m&ocirc;n học về ph&aacute;t triển bền vững, quản l&yacute; m&ocirc;i trường, nền kinh tế, quản l&yacute; dự &aacute;n, m&ocirc;i trường chung, &ocirc; nhiễm, xử l&yacute; r&aacute;c thải, luật m&ocirc;i trường, địa chất học&hellip;</p>\r\n<p><strong>Điều kiện du học Philippines ng&agrave;nh M&ocirc;i trường</strong><br />&nbsp;Tr&igrave;nh độ tiếng Philippines: TCF 400 hoặc tr&igrave;nh độ DELF B2 trở l&ecirc;n.<br />&nbsp;Bằng Tốt nghiệp cấp 3: Loại Kh&aacute; trở l&ecirc;n.<br />&nbsp;Ph&iacute; ghi danh: Phụ thuộc từng trường m&agrave; bạn muốn đăng k&yacute;.&nbsp;<br />T&igrave;m hiểu th&ecirc;m về c&aacute;c trường kh&ocirc;ng &aacute;p dụng ch&iacute;nh s&aacute;ch chi ph&iacute; mới</p>\r\n<p><strong>Quy tr&igrave;nh nộp hồ sơ</strong><br />C&aacute;c ứng vi&ecirc;n cần chuẩn bị hồ sơ gồm CV, thư động lực, kết quả học tập &hellip;. Trong một số trường hợp hoặc văn bằng, bạn cũng sẽ được y&ecirc;u cầu vượt qua một cuộc phỏng vấn hoặc thậm ch&iacute; một kỳ thi tuyển sinh cụ thể.</p>\r\n<p><strong>Cơ hội việc l&agrave;m sau khi tốt nghiệp</strong><br />Sau khi ho&agrave;n th&agrave;nh chương tr&igrave;nh đ&agrave;o tạo, bạn c&oacute; thể chọn tiếp tục học để lấy bằng cấp cao hơn hoặc chuy&ecirc;n m&ocirc;n h&oacute;a hơn. B&ecirc;n cạnh đ&oacute;, bạn cũng c&oacute; thể chọn đi l&agrave;m trong c&aacute;c c&ocirc;ng ty, tổ chức với c&aacute;c c&ocirc;ng việc:<br />Quản l&yacute; dự &aacute;n m&ocirc;i trường hoặc gi&oacute;</p>', '<p><strong>Advantages when studying in the Philippines</strong><br />Regarding the learning environment, Philippines is among the top countries that invest heavily in education. Each year the French government spends 20% of its budget on education, which is equivalent to 10,000 euros per student per year. Not only that, the French infrastructure is very modern and comfortable, with transportation systems such as subways, high speed trains, airbus ... and the best libraries or research laboratories.</p>\r\n<p>Regarding job opportunities, since 1990, the Environmental Law in Philippines has been adopted, non-governmental organizations, environmental companies are increasing. Therefore, the employment opportunities for students studying this field are diverse and plentiful, able to work in many different businesses and organizations.</p>\r\n<p><strong>Training programs for Environment in Philippines</strong><br />This is a training program for technicians with high expertise in the fields of sustainable development, renewable energy and natural resources.<br />There are many training program options for this specialized student.</p>\r\n<p>Bac pro - 3 years of High School - Natural Management<br />Environmental BTS (Bac +2) - High schools or Professional schools.<br />Bachelor (Bac + 3) - Private school<br />Bachelor of Environment (Bac +3)<br />Bachelor of Professional Education (lasts 1 year after Bac + 2 / Bac + 3)<br />Master of the Environment (lasts 2 years after Bac + 3), at universities or specialized schools.<br />MBA (lasting 2 years after Bac + 3), the international program for Environmental Management, at these universities and specialized schools.<br />Intensive Master (lasting 2 years after Bac + 3), majoring in specialized schools.<br />Subjects in the training program<br />Training programs on Environment are highly applicable. Students can be taught courses on sustainable development, environmental management, economy, project management, general environment, pollution, waste treatment, environmental law, geology ...</p>\r\n<p><strong>Conditions for studying French in Environment</strong><br />French level: TCF 400 or DELF B2 level or higher.<br />High School Diploma: Good or higher.<br />Enrollment fee: Depending on the school you want to register.<br />Learn more about schools that do not apply the new cost policy</p>\r\n<p><strong>Application process</strong><br />Candidates need to prepare documents including CV, motivation letter, academic results .... In some cases or degrees, you will also be required to pass an interview or even a specific entrance exam.</p>\r\n<p><strong>Employment opportunities after graduation</strong><br />After completing the training program, you can choose to continue studying to get a higher degree or more specialized. Besides, you can also choose to work in companies and organizations with the following jobs:<br />Environmental or wind project management</p>', 'Du học Philippines', 'Du học Philippines', 'Du học Philippines', '1593461755phillipines.png', 17, 'productcat.png', 'Tuấn Anh', 'Tuấn Anh', 1, 0, 9, '2020-06-13 08:49:31', '2020-06-29 20:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_productcat_lv2`
--

CREATE TABLE `tb_productcat_lv2` (
  `procat2_id` int(10) UNSIGNED NOT NULL,
  `procat2_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procat2_ten_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procat2_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procat2_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procat2_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procat2_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procat2_procat_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_productcat_lv2`
--

INSERT INTO `tb_productcat_lv2` (`procat2_id`, `procat2_ten`, `procat2_ten_en`, `procat2_slug`, `procat2_title`, `procat2_description`, `procat2_keyword`, `procat2_procat_id`, `created_at`, `updated_at`) VALUES
(7, 'Đá Hoa Cương', 'Granite', 'da-hoa-cuong', 'ĐÁ HOA CƯƠNG | ĐÁ HOA CƯƠNG CAO CẤP HỒ CHÍ MINH - SAITHANHPOOL', 'Đá Hoa cương ☑️Chất lượng cao cấp ☑️Mẫu mã luôn cập nhật mới, đẳng cấp hiện đại ☑️Giá thấp, ổn định ☑️Giao hành nhanh ☑️ Tư vấn tận tình, phục vụ chuyên nghiệp. Hotline 0977 33 55 62 - Sài Thành Pool.', 'Đá hoa cương giá rẻ, đá hoa cương cao cấp, đá hoa cương quận 9, đá hoa cương tự nhiên, đá hoa cương hồ chí minh, đá hoa cương giá rẻ nhất,', 10, '2019-12-18 09:32:41', '2020-04-12 09:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_location`
--

CREATE TABLE `tb_product_location` (
  `locate_id` int(10) UNSIGNED NOT NULL,
  `locate_name_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locate_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locate_name_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locate_name_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locate_name_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_product_location`
--

INSERT INTO `tb_product_location` (`locate_id`, `locate_name_vi`, `locate_name_en`, `locate_name_zh`, `locate_name_ja`, `locate_name_kr`, `created_at`, `updated_at`) VALUES
(4, 'TP Hồ Chí Minh', 'Ho Chi Minh City', '胡志明市', 'ホーチミン市', '호치민시', '2020-07-22 15:46:25', '2021-06-16 03:18:14'),
(5, 'Đồng Nai', 'Dong Nai', '同奈', 'ドンナイ', '동 나이', '2020-07-22 17:11:44', '2021-06-16 03:18:27'),
(6, 'Bình Dương', 'Binh Duong', '平陽', 'ビンズオン', '빈증', '2020-07-23 03:07:15', '2021-06-16 03:18:39'),
(7, 'Tiền Giang', 'Tien Giang', '前江', 'ティエンザン', '티엔 장', '2020-07-23 03:16:13', '2021-06-16 03:18:58'),
(8, 'Long An', 'Long An', '隆安', 'ロンアン', '롱안', '2020-07-23 03:19:14', '2021-06-16 03:19:10'),
(9, 'Bà Rịa - Vũng Tàu', 'Ba Ria - Vung Tau', '巴地頭頓', 'バリア＝ブンタウ', '바리 아-붕따우', '2020-07-23 03:20:01', '2021-06-16 03:19:23'),
(10, 'Bình Phước', 'Binh Phuoc', '平福', 'ビンフオック', '빈 푸옥', '2020-07-23 03:20:39', '2021-06-16 03:19:35'),
(11, 'Tây Ninh', 'Tay Ninh', '西寧', 'タイニン', '타이닌', '2020-07-23 03:21:24', '2021-06-16 03:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_photo`
--

CREATE TABLE `tb_product_photo` (
  `photo_id` int(10) UNSIGNED NOT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_product_photo`
--

INSERT INTO `tb_product_photo` (`photo_id`, `photo_url`, `photo_type`, `product_id`, `created_at`, `updated_at`) VALUES
(71, '1585060157Artboard 2.png', NULL, 76, '2020-03-24 14:29:18', '2020-03-24 14:29:18'),
(76, '1585143620Artboard 3.png', NULL, 124, '2020-03-25 13:40:20', '2020-03-25 13:40:20'),
(79, '1585144440Artboard 1.png', NULL, 124, '2020-03-25 13:54:00', '2020-03-25 13:54:00'),
(120, '1585163788Artboard 1.png', NULL, 125, '2020-03-25 19:16:28', '2020-03-25 19:16:28'),
(136, '1585517973Artboard 1.png', NULL, 136, '2020-03-29 21:39:33', '2020-03-29 21:39:33'),
(137, '1585517973Artboard 2.png', NULL, 136, '2020-03-29 21:39:33', '2020-03-29 21:39:33'),
(138, '1585517973Artboard 3.png', NULL, 136, '2020-03-29 21:39:33', '2020-03-29 21:39:33'),
(141, '1585518134Artboard 2.png', NULL, 125, '2020-03-29 21:42:14', '2020-03-29 21:42:14'),
(142, '1585518134bussiness card-03.png', NULL, 125, '2020-03-29 21:42:14', '2020-03-29 21:42:14'),
(143, '1585518134front.png', NULL, 125, '2020-03-29 21:42:14', '2020-03-29 21:42:14'),
(147, '1585668867300.jpg', NULL, 137, '2020-03-31 15:34:27', '2020-03-31 15:34:27'),
(148, '1585668867hinge-marketing-squarelogo-1461267380374.png', NULL, 137, '2020-03-31 15:34:27', '2020-03-31 15:34:27'),
(151, '1585680668logoroy.png', NULL, 138, '2020-03-31 18:51:08', '2020-03-31 18:51:08'),
(152, '1585680668office-indoor-outdoor-mockup-6-104794.jpeg', NULL, 138, '2020-03-31 18:51:08', '2020-03-31 18:51:08'),
(153, '1585680668Office-Reception-3D-Logo-Mockup.jpg', NULL, 138, '2020-03-31 18:51:08', '2020-03-31 18:51:08'),
(154, '1585680668Schneider-logo.jpg', NULL, 138, '2020-03-31 18:51:08', '2020-03-31 18:51:08'),
(155, '1585680802logoroy.png', NULL, 139, '2020-03-31 18:53:22', '2020-03-31 18:53:22'),
(156, '1585680802office-indoor-outdoor-mockup-6-104794.jpeg', NULL, 139, '2020-03-31 18:53:22', '2020-03-31 18:53:22'),
(157, '1585680802Office-Reception-3D-Logo-Mockup.jpg', NULL, 139, '2020-03-31 18:53:22', '2020-03-31 18:53:22'),
(158, '1585680802Schneider-logo.jpg', NULL, 139, '2020-03-31 18:53:22', '2020-03-31 18:53:22'),
(178, '1587380509Artboard 1.png', NULL, 147, '2020-04-20 11:01:49', '2020-04-20 11:01:49'),
(179, '1587380509Artboard 2.png', NULL, 147, '2020-04-20 11:01:49', '2020-04-20 11:01:49'),
(180, '1587380509Artboard 3.png', NULL, 147, '2020-04-20 11:01:49', '2020-04-20 11:01:49'),
(181, '1587380509Artboard 4.png', NULL, 147, '2020-04-20 11:01:49', '2020-04-20 11:01:49'),
(317, '1595497543Picture4.jpg', NULL, 169, '2020-07-23 09:45:43', '2020-07-23 09:45:43'),
(319, '1595819870MGD_ISO 9001-2015_2.png', NULL, 165, '2020-07-27 03:17:50', '2020-07-27 03:17:50'),
(320, '15967761771000105328_GREENFIELD 686 APARTMENT BUILDING_Certificate (3)_2.png', NULL, 169, '2020-08-07 04:56:17', '2020-08-07 04:56:17'),
(321, '15967762581000108938_BUSINESS LOCATION of FAR EASTERN APPAREL Certificate (2)_2.png', NULL, 169, '2020-08-07 04:57:38', '2020-08-07 04:57:38'),
(322, '1597029634Picture3.png', NULL, 169, '2020-08-10 03:20:34', '2020-08-10 03:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_project_major`
--

CREATE TABLE `tb_project_major` (
  `major_id` int(10) UNSIGNED NOT NULL,
  `major_name_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major_name_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major_name_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major_name_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_project_major`
--

INSERT INTO `tb_project_major` (`major_id`, `major_name_vi`, `major_name_en`, `major_name_zh`, `major_name_ja`, `major_name_kr`, `created_at`, `updated_at`) VALUES
(1, 'LINH KIỆN OTO', 'AUTOMOBILES AND COMPONENTS', '汽車和零部件', '自動車や部品', '자동차 및 부품', NULL, '2021-06-16 03:20:06'),
(2, 'HÀNG HÓA', 'CAPITAL GOODS', '资本货物', '資本財', '자본 상품', NULL, '2021-06-16 03:20:18'),
(3, 'HÓA CHẤT', 'CHEMICAL', '化工', '化学品', '화학', NULL, '2021-06-16 03:20:33'),
(4, 'ĐIỆN TỬ', 'ELECTRONIC', '電子', '電子', '전자', NULL, '2021-06-16 03:20:48'),
(5, 'THỰC PHẨM', 'FOOD & BEVERAGE', '食品与饮料', '食料と飲料', '음식 및 음료', NULL, '2021-06-16 03:20:59'),
(6, 'NĂNG LƯỢNG', 'ENERGY', '能源', 'エネルギー', '에너지', NULL, '2021-06-16 03:21:17'),
(7, 'DỆT SỢI', 'FABRIC', '面料', 'ファブリック', '구조', NULL, '2021-06-16 03:21:33'),
(8, 'DỆT MAY', 'GARMENT', '服装', '衣服', '외피', NULL, '2021-06-16 03:21:48'),
(9, 'ĐỒ GIA DỤNG', 'HOUSEHOLD & PERSONAL PRODUCT', '家用及个人用品', '家庭用および個人用製品', '가정용 및 개인용 제품', NULL, '2021-06-16 03:22:03'),
(10, 'VẬT LIỆU', 'MATERIAL', '材料', '材料', '재료', NULL, '2021-06-16 03:22:16'),
(11, 'CƠ KHÍ', 'MECHANICAL', '机械', '機械的', '기계적', NULL, '2021-06-16 03:22:29'),
(12, 'THIẾT BỊ Y TẾ', 'MEDICAL EQUIPMENT', '医用器材', '医療機器', '의료 장비', NULL, '2021-06-16 03:22:44'),
(13, 'DƯỢC PHẨM', 'PHARMACY', '医药产品', '医薬品', '조제', NULL, '2021-06-16 03:22:56'),
(14, 'CƠ KHÍ CHÍNH XÁC', 'PRECISION MECHANICAL', '精密機械', '精密機械', '정밀 기계', NULL, '2021-06-16 03:23:09'),
(15, 'LOGISTIC', 'LOGISTICS', '物流', '物流', '물류 센터', '2020-10-16 09:06:00', '2021-06-16 03:23:21'),
(16, 'CHUNG CƯ & OFFICETEL', 'APARTMENT & OFFICETEL', '公寓和办公电话', 'アパート&オフィステル', '아파트 및 사무실', '2021-03-04 06:54:34', '2021-06-16 03:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_qna`
--

CREATE TABLE `tb_qna` (
  `qna_id` int(10) UNSIGNED NOT NULL,
  `qna_ques` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qna_ques_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qna_ans` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qna_ans_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qna_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qna_editor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_qna`
--

INSERT INTO `tb_qna` (`qna_id`, `qna_ques`, `qna_ques_en`, `qna_ans`, `qna_ans_en`, `qna_author`, `qna_editor`, `created_at`, `updated_at`) VALUES
(6, 'Có được phép ở lại Canada sau khi tốt nghiệp không ?', 'Can I stay in Canada after graduation ?', '<p><span style=\"font-weight: 400;\">Ch&iacute;nh s&aacute;ch nhập cư Canada cho ph&eacute;p du học sinh c&oacute; nhiều h&igrave;nh thức ở lại v&agrave; định cư tại đất nước n&agrave;y sau khi tốt nghiệp. Một lựa chọn phổ biến của nhiều du học sinh l&agrave; xin Giấy ph&eacute;p ở lại l&agrave;m việc sau khi tốt nghiệp (Post-Graduation Work Permit Program (PGWPP)). Nhờ c&oacute; PGWPP, bất cứ du học sinh n&agrave;o đ&atilde; học full-time tại một trường thuộc DLI đều c&oacute; thể nộp đơn xin PGWP.</span></p>\r\n<p><span style=\"font-weight: 400;\">Việc c&oacute; được kinh nghiệm l&agrave;m việc tại Canada sau khi tốt nghiệp c&oacute; thể gi&uacute;p du học sinh đủ điều kiện trở th&agrave;nh thường tr&uacute; nh&acirc;n tại Canada th&ocirc;ng qua nhiều chương tr&igrave;nh nhập cư hiện c&oacute;. Th&ocirc;ng thường, PGWP được cấp bằng với thời gian học của du học sinh, tối thiểu l&agrave; 8 th&aacute;ng v&agrave; tối đa l&agrave; 3 năm.</span></p>', '<p>Immigration policy in Canada allows international students to stay and settle in this country after graduation. A popular option for many international students is to apply for a Post-Graduation Work Permit Program (PGWPP). Thanks to PGWPP, any student who has studied full-time at a DLI school can apply for PGWP.<br />Getting work experience in Canada after graduation can help international students who are eligible to become permanent residents of Canada through many of the existing immigration programs. For more information about PGWP. Normally, PGWP is granted a degree with an international student\'s duration of study, a minimum of 8 months and a maximum of 3 years.</p>', 'Tuấn Anh', 'Tuấn Anh', '2020-06-25 09:02:45', '2020-06-25 09:02:45'),
(7, 'Học từ xa có cần xin study permit không ?', 'Do distance learning need a study permit ?', '<p><span style=\"font-weight: 400;\">Việc học từ xa c&oacute; thể được thực hiện th&ocirc;ng qua e-learning, thư từ, hoặc c&aacute;c kh&oacute;a học trực tuyến. Việc học từ xa l&agrave; một qu&aacute; tr&igrave;nh m&agrave; nhờ v&agrave;o c&ocirc;ng nghệ, học sinh kh&ocirc;ng cần phải hiện diện về mặt vật l&yacute; trong lớp học - nơi việc giảng dạy diễn ra. Một kh&oacute;a học từ xa th&igrave; kh&ocirc;ng cần phải xin study permit.</span></p>\r\n<p><span style=\"font-weight: 400;\">Tuy nhi&ecirc;n, nếu trong chương tr&igrave;nh học từ xa c&oacute; bao gồm một học phần ở Canada, v&agrave; thời gian học d&agrave;i hơn s&aacute;u th&aacute;ng th&igrave; học sinh c&oacute; thể nộp đơn v&agrave; được cấp study permit cho học phần tại Canada. Thời gian của study permit thường chỉ tương ứng với thời gian học phần tại Canada diễn ra.</span></p>', '<p>Distance learning can be done through e-learning, letters, or online courses. Distance learning is a process base on&nbsp; technology, students do not need to be physically present at classroom - where teaching takes place. A distance course does not require study permit.<br />However, if the distance learning program includes a module in Canada, and the duration of study is longer than six months, the student may apply and be granted a study permit for the module in Canada. The duration of the study permit usually corresponds only to the length of time the study module in Canada takes place.</p>', 'Tuấn Anh', 'Tuấn Anh', '2020-06-25 08:48:35', '2020-06-25 08:48:35'),
(8, 'Có cần phải nộp chứng chỉ IELTS hay CELPIP khi nộp hồ sơ xin study permit không ?', 'Do I need to submit IELTS or CELPIP when applying for study permit ?', '<p><span style=\"font-weight: 400;\">Xin lưu &yacute; rằng hầu hết c&aacute;c trường đại học v&agrave; cao đẳng Canada c&oacute; thể y&ecirc;u cầu IELTS hoặc chứng nhận về tr&igrave;nh độ ngoại ngữ để được nhận v&agrave;o học. Tuy nhi&ecirc;n, đ&acirc;y l&agrave; một y&ecirc;u cầu để nhập học từ ph&iacute;a trường v&agrave; kh&ocirc;ng phải l&agrave; một y&ecirc;u cầu để cấp study permit. Do đ&oacute;, bạn c&ograve;n c&oacute; sự x&aacute;c nhận với trường m&agrave; bạn muốn theo học để x&aacute;c định xem IELTS c&oacute; bắt buộc kh&ocirc;ng v&agrave; điểm số cần thiết để được theo học tại trường.</span></p>', '<p>Please note that most Canadian universities and colleges may require IELTS or a certificate of language proficiency to gain admission. However, this is a requirement for admission from the school and not a requirement for a study permit. Therefore, you also have a confirmation with the school you want to study to determine if IELTS is required and the score needed to study at the school.</p>', 'Tuấn Anh', 'Tuấn Anh', '2020-06-25 08:49:40', '2020-06-25 08:49:40'),
(9, 'Có những chương trình nhập cư nào dành cho du học sinh muốn định cư lâu dài tại Canada ?', 'What immigration programs are available for international students who want to settle permanently in Canada?', '<p><span style=\"font-weight: 400;\">Ng&agrave;nh gi&aacute;o dục tại Canada c&oacute; thể cung cấp cho du học sinh một lộ tr&igrave;nh để trở th&agrave;nh thường tr&uacute; nh&acirc;n tại Canada. C&oacute; nhiều chương tr&igrave;nh của c&aacute;c li&ecirc;n bang v&agrave; tỉnh bang d&agrave;nh cho du học sinh nộp đơn xin nhập cư, v&agrave; trong một số trường hợp, điều n&agrave;y c&oacute; thể được thực hiện m&agrave; kh&ocirc;ng cần lời mời l&agrave;m việc. Những ai theo học v&agrave; c&oacute; kinh nghiệm l&agrave;m việc tại Canada c&oacute; khả năng được cộng th&ecirc;m điểm trong Hệ thống Xếp hạng To&agrave;n diện (Comprehensive Ranking System) của chương tr&igrave;nh nhập cư Express Entry.</span></p>', '<p>Education in Canada can provide international students a roadmap to becoming a permanent resident in Canada. There are many federal and provincial programs for international students applying for immigration, and in some cases this can be done without any job offer. Those who study and have experience working in Canada are likely to gain points in the Comprehensive Ranking System of the Immigration Express Entry program.</p>', 'Tuấn Anh', 'Tuấn Anh', '2020-06-25 08:50:55', '2020-06-25 08:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting`
--

CREATE TABLE `tb_setting` (
  `st_id` int(10) UNSIGNED NOT NULL,
  `st_tencongty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_tencongty_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_tencongty_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_tencongty_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_tencongty_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_tencongty_kr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_hotline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_hotline_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_hotline_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_hotline_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_hotline_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_diachi_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_diachi_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_diachi_zh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_diachi_ja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_diachi_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_diachi_office_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_diachi_office_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_diachi_office_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_diachi_office_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_diachi_office_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_fanpage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_name_bot_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_hotline_bot_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_name_bot_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_hotline_bot_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_name_bot_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_hotline_bot_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_name_bot_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_hotline_bot_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_social_insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_social_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_social_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_social_pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_social_zalo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_branch_name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_branch_name_1_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_branch_add_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_branch_add_1_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_branch_hotline_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_branch_email_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_branch_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_branch_name_2_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_branch_add_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_branch_add_2_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_branch_hotline_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_branch_email_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_permission_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_permission_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_permission_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_codehead` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_codebody` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_codefoot` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_setting`
--

INSERT INTO `tb_setting` (`st_id`, `st_tencongty`, `st_tencongty_vi`, `st_tencongty_en`, `st_tencongty_zh`, `st_tencongty_ja`, `st_tencongty_kr`, `st_email`, `st_hotline`, `st_hotline_en`, `st_hotline_zh`, `st_hotline_ja`, `st_hotline_kr`, `st_diachi`, `st_diachi_vi`, `st_diachi_en`, `st_diachi_zh`, `st_diachi_ja`, `st_diachi_kr`, `st_diachi_office_vi`, `st_diachi_office_en`, `st_diachi_office_zh`, `st_diachi_office_ja`, `st_diachi_office_kr`, `st_fanpage`, `st_skype`, `st_github`, `st_twitter`, `st_youtube`, `st_insta`, `st_linkedin`, `st_pinterest`, `st_name_bot_1`, `st_hotline_bot_1`, `st_name_bot_2`, `st_hotline_bot_2`, `st_name_bot_3`, `st_hotline_bot_3`, `st_name_bot_4`, `st_hotline_bot_4`, `st_social_insta`, `st_social_twitter`, `st_social_youtube`, `st_social_pinterest`, `st_social_zalo`, `st_branch_name_1`, `st_branch_name_1_en`, `st_branch_add_1`, `st_branch_add_1_en`, `st_branch_hotline_1`, `st_branch_email_1`, `st_branch_name_2`, `st_branch_name_2_en`, `st_branch_add_2`, `st_branch_add_2_en`, `st_branch_hotline_2`, `st_branch_email_2`, `st_permission_code`, `st_permission_date`, `st_permission_place`, `st_website`, `st_title`, `st_mota`, `st_keyword`, `st_codehead`, `st_codebody`, `st_codefoot`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Minh Global | Design, Build & Development', 'Minh Global | Design, Build & Development', 'Minh Global | 设计，建筑及发展', 'Minh Global | 設計、構築 & 開発', 'Minh Global | 디자인, 구축 및 개발', 'contact@minhglobal.com', '(+84-0)979.660.055', NULL, NULL, NULL, NULL, NULL, 'Phòng 301, Lầu 3, 140 Nguyễn Văn Thủ , Phường Đa Kao , Quận 1, Tp. HCM, Vietnam', 'Room 301, Level 3, 140 Nguyen Van Thu St., Dakao ward, District 1, HCMC, Vietnam', 'Room 301, Level 3, 140 Nguyen Van Thu St., Dakao ward, District 1, HCMC, Vietnam', 'Room 301, Level 3, 140 Nguyen Van Thu St., Dakao ward, District 1, HCMC, Vietnam', 'Room 301, Level 3, 140 Nguyen Van Thu St., Dakao ward, District 1, HCMC, Vietnam', 'Số 31 Đường GH2, phường Hòa Phú, Tp. Thủ Dầu Một, Bình Dương', 'No 31 GH2 Street, Quarter 2, Hoa Phu Ward, Thu Dau Mot City, Binh Duong', 'No 31 GH2 Street, Quarter 2, Hoa Phu Ward, Thu Dau Mot City, Binh Duong', 'No 31 GH2 Street, Quarter 2, Hoa Phu Ward, Thu Dau Mot City, Binh Duong', 'No 31 GH2 Street, Quarter 2, Hoa Phu Ward, Thu Dau Mot City, Binh Duong', 'https://www.facebook.com/minhglobaldevelopment', NULL, NULL, 'https://www.twitter.com/', NULL, 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://www.youtube.com/channel/UCFQukT62fWq95sfWJxBt9dw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Minh Global | Design, Build & Development', 'Minh Global | Design, Build & Development', 'Minh Global | Design, Build & Development', NULL, NULL, NULL, '2019-10-03 06:53:05', '2021-06-16 07:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_static_page`
--

CREATE TABLE `tb_static_page` (
  `static_id` int(10) UNSIGNED NOT NULL,
  `static_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `static_ten_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `static_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `static_noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `static_noidung_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `static_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `static_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `static_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_static_page`
--

INSERT INTO `tb_static_page` (`static_id`, `static_ten`, `static_ten_en`, `static_slug`, `static_noidung`, `static_noidung_en`, `static_type`, `static_title`, `static_description`, `static_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu', 'About', 'gioi-thieu', '<p>M&igrave;nh l&agrave; Tuấn Anh. Hiện tại đang l&agrave; 1 lập tr&igrave;nh vi&ecirc;n website.</p>\r\n<p>Bản th&acirc;n m&igrave;nh trước đ&acirc;y khi l&agrave;m việc với kh&aacute;ch h&agrave;ng chủ yếu qua k&ecirc;nh facebook, zalo hoặc gặp mặt trực tiếp. Với c&aacute;ch l&agrave;m gần như thủ c&ocirc;ng vậy chỉ c&oacute; thể tiếp cận v&agrave; l&agrave;m việc với 1 số lượng kh&aacute;ch h&agrave;ng rất &iacute;t, chất lượng th&ocirc;ng tin truyền đạt rất kh&oacute; khăn v&agrave; kh&ocirc;ng chất lượng.</p>\r\n<p>Với trang blog c&aacute; nh&acirc;n n&agrave;y:</p>\r\n<ul>\r\n<li>Đ&acirc;y sẽ l&agrave; nơi tập hợp những th&ocirc;ng tin của bản th&acirc;n m&igrave;nh: Kh&aacute;ch h&agrave;ng cần th&ocirc;ng tin của lập tr&igrave;nh vi&ecirc;n để tạo niềm tin khi l&agrave;m việc. Đ&acirc;y sẽ l&agrave; nơi cung cấp th&ocirc;ng tin.</li>\r\n<li>Show ra những g&igrave; m&igrave;nh đ&atilde; v&agrave; đang l&agrave;m việc đến thời điểm hiện tại, tiếp cận những kh&aacute;ch h&agrave;ng online mới.</li>\r\n<li>Những b&agrave;i viết hướng dẫn, hỗ trợ khi sử dụng web. Kể cả web do m&igrave;nh l&agrave;m hay của những b&ecirc;n cung cấp web kh&aacute;c trong tầm hiểu biết của m&igrave;nh.</li>\r\n<li>Cập nhật những th&ocirc;ng b&aacute;o mới, n&acirc;ng cấp web.</li>\r\n<li>...</li>\r\n</ul>\r\n<p>Mục đ&iacute;ch l&agrave; đơn giản v&agrave; dễ hiểu nhất, l&agrave;m sao ngay cả những người kh&ocirc;ng biết nhiều về c&ocirc;ng nghệ cũng c&oacute; thể hiểu v&agrave; l&agrave;m theo.</p>\r\n<p>&nbsp;</p>\r\n<p>Bản chất l&agrave; 1 trang blog c&aacute; nh&acirc;n n&ecirc;n k&egrave;m theo đ&oacute; sẽ c&oacute; những b&agrave;i viết về m&igrave;nh v&agrave; c&ocirc;ng nghệ đ&uacute;ng với ng&ocirc;n từ v&agrave; c&aacute;ch viết của m&igrave;nh nhất. M&igrave;nh kh&ocirc;ng muốn qu&aacute; phụ thuộc v&agrave;o facebook v&igrave; những rủi ro k&egrave;m theo khi phụ thuộc v&agrave;o n&oacute; qu&aacute; nhiều. Rủi đ&acirc;u 1 ng&agrave;y đẹp trời, t&agrave;i khoản facebook bị hack mất th&igrave; m&igrave;nh đ&atilde; chuẩn bị sẵn s&agrave;ng tinh thần, kh&ocirc;ng sợ anh Mark xoăn.</p>\r\n<p>Cứ ngồi chờ v&agrave; chuẩn bị ph&ograve;ng khi ng&agrave;y đẹp trời đ&oacute; tới.</p>', NULL, 'gioi-thieu', 'TuanAnhDinh - Lý lịch', 'Sài Thành Pool ra đời với mong muốn cung cấp các sản phẩm chất lượng, dịch vụ đến với quý khách hàng ở Việt Nam và khu vực. Công ty sẽ nổ lực luôn nổ lực cố gắng để mang lại cho quý khách hàng giá trị hơn những gì khách hàng mong đợi.', 'thiết bị hồ bơi, thiết bị bể bơi, thi công hồ bơi trọn gói, dịch vụ thi công hồ bơi,', NULL, '2020-05-06 09:25:41'),
(2, 'Tuyển dụng', 'Recruit', 'tuyen-dung', '<h1><span style=\"color: #ba372a;\">NH&Acirc;N VI&Ecirc;N CONTENT MARKETING</span></h1>\r\n<h2><span style=\"color: #0018ff;\">C&Aacute;C PH&Uacute;C LỢI D&Agrave;NH CHO BẠN</span></h2>\r\n<p>Được hưởng đầy đủ c&aacute;c chế độ theo quy định của nh&agrave; nước, bao gồm: BHXH, ph&eacute;p năm, lương th&aacute;ng 13, thưởng KPI,&hellip;</p>\r\n<p>Được đào tạo nghi&ecirc;̣p vụ theo vị trí c&ocirc;ng vi&ecirc;̣c và các khóa đào tạo kỹ năng m&ecirc;̀m</p>\r\n<p>Du lịch h&agrave;ng năm</p>\r\n<p>M&ocirc;i trường năng động, chuy&ecirc;n nghiệp tại hệ thống nhượng quyền huấn luyện doanh nghiệp to&agrave;n cầu ActionCOACH.<br />Cơ hội được mở rộng mối quan hệ v&agrave; tiếp cận với c&aacute;c CEO, diễn giả nổi tiếng tại Việt Nam c&ugrave;ng với đội ngũ c&aacute;c nh&agrave; Huấn Luyện chuy&ecirc;n nghiệp tại c&ocirc;ng ty, Việt Nam v&agrave; to&agrave;n cầu.</p>\r\n<h2><span style=\"color: #0018ff;\">M&Ocirc; TẢ C&Ocirc;NG VIỆC</span></h2>\r\n<p>1. Quản trị nội dung website: Title, h&igrave;nh ảnh, b&agrave;i viết, chủ đề, chuy&ecirc;n mục,&hellip;<br />+ Viết b&agrave;i tối ưu chuẩn SEO về thiết bị hồ bơi, c&ocirc;ng tr&igrave;nh, ngoại thất hồ bơi. <br />+ Chăm s&oacute;c, theo d&otilde;i, khắc phục c&aacute;c lỗi ph&aacute;t sinh website, x&acirc;y dung tối ưu cấu tr&uacute;c Website (c&oacute; IT hỗ trợ)<br />+ Nghi&ecirc;n cứu, Bi&ecirc;n tập, viết nội dung Website, Blog, Forum, Google+, Facebook&hellip;<br />2. X&acirc;y dựng, triển khai v&agrave; đ&aacute;nh gi&aacute; hiệu quả, tỷ lệ chuyển đổi của c&aacute;c chiến dịch email v&agrave; social marketing.<br />3. Đề xuất c&aacute;c kế hoạch, đề t&agrave;i b&agrave;i viết hoặc thực hiện viết b&agrave;i theo chủ đề hoắc y&ecirc;u cầu của BGĐ.<br />4. Tương t&aacute;c với c&aacute;c bộ phận li&ecirc;n quan để đảm bảo y&ecirc;u cầu về số lượng, chất lượng b&agrave;i viết.<br />5. Kết hợp với team thiết kế l&ecirc;n &yacute; tưởng thiết kế ấn phẩm ch&egrave;n trong c&aacute;c b&agrave;i viết, video để tải l&ecirc;n c&aacute;c trang MXH v&agrave; trang web.<br />6. Tham gia x&acirc;y dựng c&aacute;c chiến dịch Marketing, đ&oacute;ng g&oacute;p c&aacute;c &yacute; tưởng s&aacute;ng tạo nội dung s&aacute;ng tạo, thường xuy&ecirc;n cập nhật mới cho chiến dịch Digital Marketing.<br /><br />Mức lương:<br />Thỏa thuận: t&ugrave;y theo năng lực v&agrave; kinh nghiệp.</p>\r\n<h2><span style=\"color: #0018ff;\">Y&Ecirc;U CẦU C&Ocirc;NG VIỆC</span></h2>\r\n<p>1. Độ tuổi: Nam, Nữ tr&ecirc;n 20 tuổi.<br />2. Tốt nghiệp cao đẳng, đại học chuy&ecirc;n ng&agrave;nh Marketing, Quản trị kinh doanh, Thương Mại, Truyền Th&ocirc;ng B&aacute;o Ch&iacute;, CNTT, hoặc c&oacute; đam m&ecirc; trong lĩnh vực.<br />3. C&oacute; kinh nghiệm Content Marketing<br />4. Khả năng sản xuất nội dung tốt.<br />5. Năng động v&agrave; s&aacute;ng tạo, c&oacute; tr&aacute;ch nhiệm trong c&ocirc;ng việc.<br />6. C&oacute; ch&iacute; tiến thủ, l&agrave;m việc c&oacute; t&acirc;m.</p>\r\n<h2><span style=\"color: #0018ff;\">TH&Ocirc;NG TIN LI&Ecirc;N HỆ:</span></h2>\r\n<p>C&Ocirc;NG TY TNHH X&Acirc;Y DỰNG SẢN XUẤT THƯƠNG MẠI S&Agrave;I TH&Agrave;NH POOL</p>\r\n<p>Ứng vi&ecirc;n gửi CV về email: saithanhpool.com hoặc nộp hồ sơ trực tiếp tại địa chỉ:</p>\r\n<p>Địa chỉ: H63/15, Đường số 2, Phương Tăng Nhơn Ph&uacute; B, Quận 9, Hồ Ch&iacute; Minh.</p>\r\n<p>Số ĐT:&nbsp;0977 335 562</p>\r\n<p>Website:<a href=\"../../\">&nbsp;saithanhpool.com</a></p>', '<h1><span style=\"color: #ba372a;\">CONTENT MARKETING STAFF</span></h1>\r\n<h2><span style=\"color: #0018ff;\">BENEFITS FOR YOU</span></h2>\r\n<p>Fully enjoy the regimes prescribed by the state, including: social insurance, annual leave, 13th month salary, KPI bonus, ...</p>\r\n<p>Trained professionally by job position and soft skills training courses</p>\r\n<p>Annual travel</p>\r\n<p>Dynamic, professional environment at ActionCOACH global business training franchise system.<br />Opportunities to expand relationships and reach with famous CEOs, speakers in Vietnam with a team of professional coaches at the company, Vietnam and globally.</p>\r\n<h2><span style=\"color: #0018ff;\">JOB DESCRIPTION</span></h2>\r\n<p>1. Content management website: Title, images, articles, topics, categories, ...<br />+ Writing optimal SEO standard articles about pool equipment, construction works, outdoor furniture.<br />+ Take care, monitor, fix website errors, build optimal Website structure (with IT support)<br />+ Research, Editing, Writing content Website, Blog, Forum, Google+, Facebook ...<br />2. Develop, deploy and evaluate the effectiveness and conversion rate of email and social marketing campaigns.<br />3. Proposing plans, topics or writing articles on topics or requirements of the Board of Directors.<br />4. Interact with relevant sections to ensure the requirements for the quantity and quality of articles.<br />5. Collaborate with the design team to get ideas of designing publications to be included in articles and videos for uploading to social networking sites and websites.<br />6. Participate in building marketing campaigns, contribute ideas for creative content creation, regularly update new campaigns for Digital Marketing.</p>\r\n<p>Wage:<br />Agreement: depending on ability and experience.</p>\r\n<h2><span style=\"color: #0018ff;\">JOB REQUIREMENTS</span></h2>\r\n<p>1. Age: Male, Female over 20 years old.<br />2. Graduated college, university major in Marketing, Business Administration, Commerce, Media Press, IT, or have passion in the field.<br />3. Experienced in Content Marketing<br />4. Ability to produce good content.<br />5. Dynamic and creative, responsible at work.<br />6. Have the will to proceed, work with heart.</p>\r\n<h2><span style=\"color: #0018ff;\">CONTACT INFORMATION:</span></h2>\r\n<p>SAI THANH POOL CONSTRUCTION PRODUCTION TRADING CO., LTD</p>\r\n<p>Candidates send CV to email: saithanhpool.com or submit application directly at:</p>\r\n<p>Address: H63 / 15, Đường số 2, Phương Tăng Nhơn Ph&uacute; B, District 9, Hồ Ch&iacute; Minh.</p>\r\n<p>Phone number: 0977 335 562</p>\r\n<p>Website:<a href=\"../../\">&nbsp;saithanhpool.com</a></p>', 'tuyen-dung', 'Trang tuyển dụng', 'Trang tuyển dụng công ty Sài Thành Pool\r\nĐược hưởng đầy đủ các chế độ theo quy định của nhà nước, bao gồm: BHXH, phép năm, lương tháng 13, thưởng KPI,…Được đào tạo nghiệp vụ theo vị trí công việc và các khóa đào tạo kỹ năng mềm, du lịch.', 'tuyển dụng Sài Thành pool, tuyển dụng content marketing, tuyển nhân viên viết bài, tuyển viết bài chuẩn SEO', NULL, '2020-04-10 12:35:18'),
(3, 'Chính sách bảo mật', 'Policy', 'chinh-sach-bao-mat', '<p><span style=\"font-family: \'times new roman\', times, serif; color: #0014ff; font-size: 18px;\"><strong>CH&Iacute;NH S&Aacute;CH BẢO MẬT</strong></span></p>\r\n<p><strong style=\"color: #236fa1; font-family: \'times new roman\', times, serif; font-size: 18px;\">QUY ĐỊNH VỀ PHẠM VI ĐƯỢC PH&Eacute;P SỬ DỤNG TH&Ocirc;NG TIN</strong></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Thu thập th&ocirc;ng tin c&aacute; nh&acirc;n kh&aacute;ch h&agrave;ng qua Website ch&iacute;nh thức của<strong> <a title=\"S&agrave;i Th&agrave;nh Pool thiết kế thi c&ocirc;ng hồ bơi\" href=\"../../\">S&Agrave;I TH&Agrave;NH POOL</a></strong>&nbsp;gi&uacute;p c&ocirc;ng ty tư vấn hỗ trợ, giải đ&aacute;p, đ&aacute;p ứng nhu cầu mua hang, sử dụng dịch cụ của qu&yacute; kh&aacute;ch kịp thời hơn.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Khi bạn đặt h&agrave;ng hoặc để lại c&acirc;u hỏi th&ocirc;ng qua website <a title=\"S&agrave;i Th&agrave;nh Pool\" href=\"../../\">saithanhpool.com</a>, Qu&yacute; kh&aacute;ch &nbsp;sẽ được y&ecirc;u cầu đăng k&yacute; th&ocirc;ng tin bao gồm: Họ t&ecirc;n, số điện thoại địa chỉ, email, nhu cầu sản phẩm, dịch vụ&hellip; Tất cả th&ocirc;ng tin được khai b&aacute;o tại Website phải đảm bảo ch&iacute;nh x&aacute;c. S&Agrave;I TH&Agrave;NH POOL kh&ocirc;ng chịu mọi tr&aacute;ch nhiệm li&ecirc;n quan đến ph&aacute;p luật về th&ocirc;ng tin kh&aacute;ch hang.</span><br /><br /><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">S&agrave;i Th&agrave;nh Pool c&oacute; thể thu thập dữ liệu về số lần truy cập, bao gồm c&aacute;c trang kh&aacute;ch h&agrave;ng xem, số li&ecirc;n kết kh&aacute;ch h&agrave;ng truy cập v&agrave; những th&ocirc;ng tin kh&aacute;c li&ecirc;n quan đến việc kết nối đến&nbsp;<strong>s</strong>aithanhpool.com.&nbsp;S&agrave;i Th&agrave;nh Pool cũng thu thập c&aacute;c th&ocirc;ng tin m&agrave; tr&igrave;nh duyệt Web qu&yacute; kh&aacute;ch đang sử dụng để truy cập v&agrave;o website của c&ocirc;ng ty, bao gồm: địa chỉ IP, địa phương, ng&ocirc;n ngữ sử dụng, thời gian,&hellip;</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../public/admin/images/bao-mat-thong-tin.jpg\" alt=\"bảo mật th&ocirc;ng tin\" width=\"897\" height=\"373\" /><strong style=\"color: #236fa1;\">NHỮNG CAM KẾT VỀ MỤC Đ&Iacute;CH THU THẬP TH&Ocirc;NG TIN:</strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\"><strong>S&Agrave;I TH&Agrave;NH POOL&nbsp;</strong>cam kết sử dụng to&agrave;n bộ th&ocirc;ng tin kh&aacute;ch h&agrave;ng với mục đ&iacute;ch: l&agrave;m hợp đồng, giao hang, hỗ trợ, tư vấn,&hellip;, kh&ocirc;ng vi phạm quy định ph&aacute;p luật v&agrave; tr&ecirc;n hết l&agrave; tu&acirc;n thủ quy định về ch&iacute;nh s&aacute;ch bảo mật th&ocirc;ng tin đối với kh&aacute;ch h&agrave;ng. Những khi cần thiết, c&ocirc;ng ty c&oacute; thể sử dụng c&aacute;c th&ocirc;ng tin n&agrave;y để li&ecirc;n hệ với kh&aacute;ch h&agrave;ng dưới c&aacute;c h&igrave;nh thức như: gửi email th&ocirc;ng b&aacute;o, gọi điện x&aacute;c nhận đơn h&agrave;ng, thư điện tử, qu&yacute; kh&aacute;ch c&oacute; thể nhận được thư về việc cung cấp th&ocirc;ng tin sản phẩm, c&aacute;c chương tr&igrave;nh ưu đ&atilde;i, khuyến m&atilde;i, dịch vụ mới,&hellip;</span></p>\r\n<p><strong style=\"color: #236fa1; font-family: \'times new roman\', times, serif; font-size: 18px;\">QUY ĐỊNH VỀ THỜI GIAN LƯU TH&Ocirc;NG TIN KH&Aacute;CH H&Agrave;NG</strong></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\"><a title=\"S&Agrave;I TH&Agrave;NH POOL\" href=\"../../\">S&Agrave;I TH&Agrave;NH POOL</a> sẽ lưu c&aacute;c th&ocirc;ng tin kh&aacute;ch h&agrave;ng cung cấp tr&ecirc;n hệ thống nội bộ của c&ocirc;ng ty ch&uacute;ng t&ocirc;i, trong qu&aacute; tr&igrave;nh cung cấp c&aacute;c sản phẩm, dịch vụ cho kh&aacute;ch h&agrave;ng hoặc cho đến khi ho&agrave;n tất giao dịch hoặc khi kh&aacute;ch h&agrave;ng c&oacute; y&ecirc;u cầu hủy th&ocirc;ng tin đ&atilde; cung cấp tr&ecirc;n hệ thống.</span></p>\r\n<p><strong style=\"color: #236fa1; font-family: \'times new roman\', times, serif; font-size: 18px;\">TH&Ocirc;NG TIN ĐƠN VỊ THU THẬP, QUẢN L&Yacute; TH&Ocirc;NG TIN KH&Aacute;CH H&Agrave;NG</strong></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; color: #0014ff; font-size: 18px;\">C&Ocirc;NG TY TNHH X&Acirc;Y DỰNG SẢN XUẤT THƯƠNG MẠI S&Agrave;I TH&Agrave;NH POOL</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Địa chỉ: H63/15, Đường số 2, Phương Tăng Nhơn Ph&uacute; B, Quận 9, Hồ Ch&iacute; Minh.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Số ĐT:&nbsp;0977 335 562</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Website:<a href=\"../../\"> Saithanhpool.com</a></span></p>\r\n<p><strong style=\"color: #0014ff; font-family: \'times new roman\', times, serif; font-size: 18px;\">C&Aacute;C CAM KẾT VỀ VIỆC BẢO MẬT TH&Ocirc;NG TIN KH&Aacute;CH H&Agrave;NG</strong></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">S&agrave;i Th&agrave;nh Pool sẽ kh&ocirc;ng chia sẻ th&ocirc;ng tin của qu&yacute; kh&aacute;ch với bất kỳ b&ecirc;n thứu ba n&agrave;o, &nbsp;ngoại trừ c&aacute;c đại l&yacute;, nh&agrave; cung cấp c&oacute; li&ecirc;n quan đến việc cung cấp sản phẩm dịch vụ cho qu&yacute; kh&aacute;ch h&agrave;ng. S&agrave;i Th&agrave;nh Pool cam kết tu&acirc;n thủ luật Bảo Mật v&agrave; c&aacute;c Nguy&ecirc;n tắc Bảo mật Quốc gia.</span></p>\r\n<p>&nbsp;</p>', NULL, 'chinh-sach-bao-mat', 'Chính sách bảo mật', 'Chính sách bảo mật', 'Chính sách bảo mật', NULL, '2019-12-26 05:17:09'),
(4, 'Hướng dẫn mua hàng', 'Purchase', 'huong-dan-mua-hang', '<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #0014ff;\"><strong>HƯỚNG DẪN MUA H&Agrave;NG</strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Khi lựa chọn thiết bị hồ bơi ph&ugrave; hợp, bạn h&atilde;y lưu lại th&ocirc;ng tin sản phẩm, kết nối với ch&uacute;ng t&ocirc;i qua zalo, facebook, email hoặc gọi trực tiếp 0977 33 55 62 gặp nh&acirc;n vi&ecirc;n sẽ được tư vấn kỹ hơn v&agrave; b&aacute;o gi&aacute; sớm nhất. Hoặc nếu bạn đang cần tư vấn sử dụng dịch vụ, v&agrave; lựa chọn thiết bị ph&ugrave; hợp, qu&yacute; kh&aacute;ch cũng thực hiện theo c&aacute;ch tr&ecirc;n, hoặc để lại th&ocirc;ng tin: T&ecirc;n, số điện thoại, email, của qu&yacute; kh&aacute;ch ở g&oacute;c b&ecirc;n phải ph&iacute;a dưới Website, sẽ c&oacute; nh&acirc;n vi&ecirc;n li&ecirc;n hệ sớm nhất để hỗ trợ bạn.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Hoặc qu&yacute; kh&aacute;ch hang c&oacute; thể đến trực tiếp tại VP c&ocirc;ng ty <a title=\"c&ocirc;ng ty S&agrave;i Th&agrave;nh Pool\" href=\"../../\">S&agrave;i Th&agrave;nh Pool</a> để tham khảo sản phẩm v&agrave; được nh&acirc;n vi&ecirc;n hỗ trợ trực tiếp:</span></p>\r\n<p><strong><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #169179;\">TH&Ocirc;NG TIN LI&Ecirc;N HỆ</span></strong></p>\r\n<p><strong><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #0014ff;\">C&Ocirc;NG TY TNHH X&Acirc;Y DỰNG SẢN XUẤT THƯƠNG MẠI S&Agrave;I TH&Agrave;NH POOL</span></strong></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Địa chỉ: H63/15, Đường số 2, Phương Tăng Nhơn Ph&uacute; B, Quận 9, Hồ Ch&iacute; Minh.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Số ĐT:&nbsp;0977 335 562</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Email: saithanhpool@gmail.com</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Website:<a href=\"../../\">&nbsp;Saithanhpool.com</a></span></p>', NULL, 'huong-dan-mua-hang', 'Hướng dẫn mua hàng', 'Hướng dẫn mua hàng', 'hướng dẫn mua hàng', NULL, '2019-12-26 05:41:55'),
(5, 'Chính sách vận chuyển', 'Transport', 'chinh-sach-van-chuyen', '<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #0014ff;\"><strong>CH&Iacute;NH S&Aacute;CH VẬN CHUYỂN</strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Dưới đ&acirc;y l&agrave; một số ch&iacute;nh s&aacute;ch vận chuyển giao nhận của C&Ocirc;NG TY TNHH X&Acirc;Y DỰNG SẢN XUẤT THƯƠNG MẠI S&Agrave;I TH&Agrave;NH POOL về việc cung cấp dịch vụ vận chuyển h&agrave;ng h&oacute;a cho qu&yacute; kh&aacute;ch h&agrave;ng được &aacute;p dụng ch&iacute;nh thức từ ng&agrave;y 1/1/2020 cụ thể:</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #169179;\"><strong>NHỮNG KH&Aacute;CH H&Agrave;NG ĐƯỢC &Aacute;P DỤNG CH&Iacute;NH S&Aacute;CH</strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\"><a title=\"c&ocirc;ng ty S&agrave;i Th&agrave;nh Pool\" href=\"../../\">S&Agrave;I TH&Agrave;NH POOL</a> &aacute;p dụng ch&iacute;nh s&aacute;ch vận chuyển giao nhận n&agrave;y cho tất cả kh&aacute;ch h&agrave;ng mua sản phẩm của c&ocirc;ng ty, c&aacute;c nh&agrave; ph&acirc;n phối, c&aacute;c đại l&yacute; qua tất cả c&aacute;c k&ecirc;nh b&aacute;n h&agrave;ng.<strong><br /><span style=\"color: #169179;\">PHẠM VI VẬN CHUYỂN</span></strong></span><br /><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">S&agrave;i Th&agrave;nh Pool phục vụ tất cả c&aacute;c y&ecirc;u cầu vận chuyển của kh&aacute;ch h&agrave;ng tr&ecirc;n phạm vi to&agrave;n quốc, kễ cả c&aacute;c tỉnh xa.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #169179;\"><strong>VỂ H&Igrave;NH THỨC VẬN CHUYỂN</strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">S&agrave;i Th&agrave;nh Pool &aacute;p dụng ch&iacute;nh s&aacute;ch giao h&agrave;ng tận nơi cho tất cả y&ecirc;u cầu vận chuyển giao nhận của qu&yacute; kh&aacute;ch h&agrave;ng.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">S&agrave;i Th&agrave;nh Pool hợp t&aacute;c, phối hợp với c&aacute;c c&ocirc;ng ty đối t&aacute;c vận chuyển uy t&iacute;n để đảm bảo h&agrave;ng h&oacute;a đến kh&aacute;ch h&agrave;ng 1 c&aacute;ch nhanh ch&oacute;ng, an to&agrave;n nhất.<strong><br /><span style=\"color: #169179;\">&nbsp;VỀ THỜI GIAN VẬN CHUYỂN H&Agrave;NG H&Oacute;A</span></strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">- Cam kết giao tận nh&agrave; trong ng&agrave;y đối với kh&aacute;ch h&agrave;ng nội th&agrave;nh.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">- Đối với kh&aacute;ch h&agrave;ng ngoại th&agrave;nh: thời gian giao từ 1-3 ng&agrave;y.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #169179;\"><strong>TH&Ocirc;NG TIN LI&Ecirc;N HỆ</strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #0014ff;\"><strong>C&Ocirc;NG TY TNHH X&Acirc;Y DỰNG SẢN XUẤT THƯƠNG MẠI S&Agrave;I TH&Agrave;NH POOL</strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Địa chỉ: H63/15, Đường số 2, Phương Tăng Nhơn Ph&uacute; B, Quận 9, Hồ Ch&iacute; Minh.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\"><span class=\"text\">M&atilde; số thuế:&nbsp;</span><a class=\"text-is-phone-number\">0315696630</a></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Số ĐT:&nbsp;0977 335 562</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Email: saithanhpool@gmail.com</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Website:<a href=\"../../\">&nbsp;Saithanhpool.com</a></span></p>\r\n<p>&nbsp;</p>', NULL, 'chinh-sach-van-chuyen', 'Chính sách vận chuyển', 'Chính sách vận chuyển', 'Chính sách vận chuyển', NULL, '2019-12-26 05:56:51'),
(6, 'Chính sách bảo hành', 'Guarantee', 'chinh-sach-bao-hanh', '<p><span style=\"color: #0014ff;\"><strong><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH</span></strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\"><a title=\"c&ocirc;ng ty S&agrave;i Th&agrave;nh Pool\" href=\"../../\">S&Agrave;I TH&Agrave;NH POOL</a> với mục đ&iacute;ch mang đến cho kh&aacute;ch h&agrave;ng sự an t&acirc;m nhất khi mua hang v&agrave; sử dụng sản phẩm tại saithanhpool.com, ch&uacute;ng t&ocirc;i lu&ocirc;n nổ lực cố gắng mang đến cho qu&yacute; kh&aacute;ch h&agrave;ng sự h&agrave;i l&ograve;ng nhất c&oacute; thể. Trong thời gian sử dụng, vận h&agrave;nh nếu gặp bất kỳ lỗi kỹ thuật g&igrave;, H&atilde;y li&ecirc;n hệ trực tiếp tới c&ocirc;ng ty để được tư vấn v&agrave; bảo h&agrave;nh sản phẩm. Kh&aacute;ch h&agrave;ng đến bảo h&agrave;nh tại c&ocirc;ng ty vui l&ograve;ng mang theo phiếu mua h&agrave;ng, h&oacute;a đơn v&agrave; bảo h&agrave;nh. Ch&iacute;nh s&aacute;ch bảo h&agrave;nh, bảo tr&igrave; sản phẩm &aacute;p dụng tương tự như khi mua sản phẩm trực tiếp tại showroom, hoặc trong hệ thống của c&ocirc;ng ty: nh&agrave; ph&acirc;n phối, đại l&yacute;,&hellip;</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">C&aacute;c sản phẩm được bảo h&agrave;nh: Sản phẩm, thiết bị, phụ kiện đi k&egrave;m, c&aacute;c thiết bị ngoại vi,... do kh&aacute;ch h&agrave;ng mua của <a title=\"S&agrave;i Th&agrave;nh Pool\" href=\"../../\">C&ocirc;ng ty S&agrave;i Th&agrave;nh Pool.</a></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">S&agrave;i Th&agrave;nh Pool chỉ bảo h&agrave;nh miễn ph&iacute; c&aacute;c trục trặc do lỗi của nh&agrave; sản xuất, lưu &yacute;: kh&ocirc;ng bảo h&agrave;nh miễn ph&iacute; đối với trường hợp lỗi do sử dụng sai quy định, do kẻ gian ph&aacute; hoại, hoặc do c&aacute;c nguy&ecirc;n nh&acirc;n bất khả kh&aacute;ng như thi&ecirc;n tại v&agrave; c&aacute;c sự cố ph&aacute;t sinh kh&aacute;c&hellip;</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Đối với <strong>dịch vụ lắp đặt trọn g&oacute;i thiết bị</strong>, sau khi to&agrave;n bộ thiết bị được lắp đặt ho&agrave;n thiện, vận h&agrave;nh theo đ&uacute;ng hồ sơ thiết kế ban đầu, hai b&ecirc;n nhất tr&iacute; b&agrave;n giao tiến h&agrave;nh nghiệm thu c&ocirc;ng tr&igrave;nh, đưa v&agrave;o sử dụng v&agrave; giao phiếu bảo h&agrave;nh.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #0014ff;\"><strong>TH&Ocirc;NG TIN LI&Ecirc;N HỆ</strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #34495e;\"><strong>C&Ocirc;NG TY TNHH X&Acirc;Y DỰNG SẢN XUẤT THƯƠNG MẠI S&Agrave;I TH&Agrave;NH POOL</strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Địa chỉ: H63/15, Đường số 2, Phương Tăng Nhơn Ph&uacute; B, Quận 9, Hồ Ch&iacute; Minh.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">M&atilde; số thuế:&nbsp;0315696630</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Số ĐT:&nbsp;0977 335 562</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Email: saithanhpool@gmail.com</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Website:<a href=\"../../\">&nbsp;Saithanhpool.com</a></span></p>\r\n<p>&nbsp;</p>', NULL, 'chinh-sach-bao-hanh', 'Chính sách bảo hành', 'Chính sách bảo hành', 'Chính sách bảo hành', NULL, '2019-12-26 06:15:21'),
(7, 'Hướng dẫn thanh toán', 'Payment', 'huong-dan-thanh-toan', '<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 24px; color: #0014ff;\"><strong>HƯỚNG DẪN THANH TO&Aacute;N</strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Hiện tại S&agrave;i Th&agrave;nh Pool &aacute;p dụng 3 phương thức thanh to&aacute;n:</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #236fa1;\"><strong>H&Igrave;NH THỨC THANH TO&Aacute;N TRỰC TIẾP TẠI VP</strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">H&igrave;nh thức thanh to&aacute;n n&agrave;y &aacute;p dụng đối với kh&aacute;ch h&agrave;ng c&oacute; nhu cầu mua h&agrave;ng trực tiếp tại C&Ocirc;NG TY TNHH X&Acirc;Y DỰNG SẢN XUẤT THƯƠNG MẠI S&Agrave;I TH&Agrave;NH POOL, Địa chỉ: H63/15, Đường số 2, Phương Tăng Nhơn Ph&uacute; B, Quận 9, Hồ Ch&iacute; Minh.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #236fa1;\"><strong>H&Igrave;NH THỨC THANH TO&Aacute;N BẰNG TIỀN MẶT:</strong></span><br /><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Quy tr&igrave;nh thanh to&aacute;n theo h&igrave;nh thức n&agrave;y: Kh&aacute;ch đặt h&agrave;ng qua điện thoại, zalo, facebook, email,... Nh&acirc;n vi&ecirc;n sẽ tiến h&agrave;nh li&ecirc;n hệ x&aacute;c nhận đơn h&agrave;ng, kiểm tra hang, xuất h&agrave;ng v&agrave; x&aacute;c nhận thời gian giao h&agrave;ng với kh&aacute;ch h&agrave;ng sau khi hang được xuất kho.</span><br /><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Kh&aacute;ch h&agrave;ng thanh to&aacute;n đầy đủ gi&aacute; trị đơn h&agrave;ng cho Nh&acirc;n vi&ecirc;n giao nhận hoặc Nh&acirc;n vi&ecirc;n giao h&agrave;ng của c&ocirc;ng ty khi ho&agrave;n tất kiểm tra h&agrave;ng h&oacute;a, nhận h&oacute;a đơn thanh to&aacute;n, hoặc y&ecirc;u cầu thanh to&aacute;n. Kh&aacute;ch h&agrave;ng thanh to&aacute;n đ&uacute;ng số tiền tr&ecirc;n h&oacute;a đơn đ&atilde; ghi, li&ecirc;n hệ cho ch&uacute;ng t&ocirc;i nếu thắc mắc về bất cứ th&ocirc;ng tin g&igrave; tr&ecirc;n h&oacute;a đơn.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #236fa1;\"><strong>H&Igrave;NH THỨC CHUYỂN KHOẢN</strong></span><br /><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">&Aacute;p dụng với những kh&aacute;ch h&agrave;ng c&oacute; nhu cầu sử dụng phương thức thanh to&aacute;n n&agrave;y:</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #236fa1;\"><strong>TH&Ocirc;NG TIN CHỦ T&Agrave;I KHOẢN</strong></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Th&ocirc;ng tin t&agrave;i khoản ng&acirc;n hang của C&ocirc;ng ty:</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Chủ t&agrave;i khoản:&nbsp;<span style=\"color: #0014ff;\">C&Ocirc;NG TY TNHH X&Acirc;Y DỰNG SẢN XUẤT THƯƠNG MẠI S&Agrave;I TH&Agrave;NH POOL</span></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">M&atilde; số thuế:&nbsp;0315696630</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Số t&agrave;i khoản:&nbsp;98877776<a href=\"https://ebanking.vietinbank.vn/efast/account/detail.do?a=Wm9R-T1jaj_eLnVj1EXBSg\"><strong><br /></strong></a></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Chi Nh&aacute;nh: Ng&acirc;n h&agrave;ng TMCP &Aacute; CH&Acirc;U &ndash; Ph&ograve;ng Giao Dịch H&agrave;m Tử.</span></p>', NULL, 'huong-dan-thanh-toan', 'Hướng dẫn thanh toán', 'Hướng dẫn thanh toán', 'Hướng dẫn thanh toán', NULL, '2019-12-26 08:22:10'),
(8, 'Câu hỏi thường gặp', 'Q & A', 'cau-hoi-thuong-gap', '<p><strong><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #0014ff;\">C&Acirc;U HỎI THƯỜNG GẶP</span></strong></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #ff1f00;\">Bộ dụng cụ vệ sinh bể bơi gồm những thiết bị g&igrave;?</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Vệ sinh hồ bơi l&agrave; rất cần thiết cho việc l&agrave;m sạch nước hồ bơi sau một thời gian sử dụng. V&agrave; vệ sinh hồ bơi gồm nhiều c&ocirc;ng việc kh&aacute;c nhau như việc vệ sinh th&agrave;nh hồ, cạo r&ecirc;u, ch&agrave; đ&aacute;y, l&agrave;m sạch c&aacute;c m&aacute;y m&oacute;c thiết bị v&agrave; quan trọng l&agrave; lọc nước hồ bơi.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Để vệ sinh bể bơi gia đ&igrave;nh cần trang bị bộ dụng cụ dưới đ&acirc;y:</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">B&agrave;n chải hồ bơi: bao gồm b&agrave;n chải ch&agrave; trong l&ograve;ng hồ, ch&agrave; đ&aacute;y, ch&agrave; rong r&ecirc;u.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Vợt vớt r&aacute;c: gồm vợt vớt l&aacute; v&agrave; vợt vớt r&aacute;c. Vợt để &nbsp;l&agrave;m sạch bề mặt nước, tr&aacute;nh trường hợp nghẽn nước trong hồ bơi.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Đầu h&uacute;t đ&aacute;y: dung để h&uacute;t chất cặn b&atilde; dưới đ&aacute;y hồ.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">S&agrave;o nh&ocirc;m: d&ugrave;ng để gắn b&agrave;n chải, vợt, đầu h&uacute;t đ&aacute;y, gi&uacute;p vệ sinh hồ bơi gia đ&igrave;nh ở những vị tr&iacute; s&acirc;u v&agrave; xa hơn. S&agrave;o nh&ocirc;m được thiết kế gồm hai hoặc nhiều đoạn c&oacute; tăng giảm ph&ugrave; hợp k&iacute;ch thước sử dụng.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">- Ống c&aacute;c loại: để nối v&agrave;o đầu h&uacute;t, c&oacute; chiều d&agrave;i 9-15m c&oacute; thể điều chỉnh với nhiều diện t&iacute;ch hồ bơi.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">- Hộp test nước: để đo nồng độ ph, clo,&hellip; nhằm đảm bảo nguồn nước c&oacute; đạt chuẩn an to&agrave;n trong qu&aacute; tr&igrave;nh sử dụng hồ bơi gia đ&igrave;nh.</span></p>\r\n<p><strong><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #0014ff;\">C&Aacute;C C&Acirc;U HỎI VỀ ĐỔI TRẢ SẢN PHẨM</span></strong></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #0014ff;\">Nếu sản phẩm S&agrave;i Th&agrave;nh Pool giao kh&ocirc;ng đ&uacute;ng đơn đặt h&agrave;ng?</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Nếu sản phẩm giao cho bạn kh&ocirc;ng đ&uacute;ng so với đơn đặt h&agrave;ng? Q&uacute;y kh&aacute;ch h&agrave;ng h&atilde;y li&ecirc;n hệ ngay ch&uacute;ng t&ocirc;, nh&acirc;n viện của ch&uacute;ng t&ocirc;i sẽ kiểm tra hệ thống nếu h&agrave;ng của bạn bị gửi nhầm. Trong trường hợp đ&oacute;, c&ocirc;ng ty sẽ đổi đ&uacute;ng mặt hang kh&aacute;ch h&agrave;ng y&ecirc;u cầu.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #0014ff;\">Nếu sản phẩm mua bị lỗi?</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Lưu &yacute;: Qu&yacute; kh&aacute;ch h&agrave;ng vui l&ograve;ng kiểm tra đầy đủ sản phẩm trước khi thanh to&aacute;n. Trường hợp sản phẩm bị hư hỏng trong qu&aacute; tr&igrave;nh vận chuyển, qu&yacute; kh&aacute;ch vui l&ograve;ng từ chối nhận h&agrave;ng v&agrave; gửi lại sản phẩm cho S&agrave;i Th&agrave;nh Pool. Đồng thời li&ecirc;n hệ ngay cho ch&uacute;ng t&ocirc;i, c&ocirc;ng ty sẽ gửi cho qu&yacute; kh&aacute;ch h&agrave;ng mặt h&agrave;ng thay thế.</span><br /><br /><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\"><a title=\"Coong ty S&agrave;i Th&agrave;nh Pool\" href=\"../../\">S&Agrave;I TH&Agrave;NH POOL</a>&nbsp;cam kết đổi trả sản phẩm miễn ph&iacute; đối với c&aacute;c thiết bị c&oacute; lỗi của nh&agrave; sản xuất, kh&ocirc;ng đổi trả h&agrave;ng với c&aacute;c trường hợp lỗi do sử dụng sai quy định.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #0014ff;\">Điều kiện đổi trả sản phẩm?</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Thời gian: trong v&ograve;ng 7 ng&agrave;y kể từ khi kh&aacute;ch h&agrave;ng nhận được h&agrave;ng.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">H&agrave;ng h&oacute;a c&ograve;n nguy&ecirc;n vẹn, đầy đủ bao b&igrave;, linh kiện, phụ kiện nếu c&oacute;.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Giấy tờ đầy đủ bao gồm h&oacute;a đơn GTGT, h&oacute;a đơn mua h&agrave;ng, phiếu bảo h&agrave;nh, tem tr&ecirc;n sản phẩm.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">H&agrave;ng h&oacute;a kh&ocirc;ng bị trầy xướt, nứt vỡ, ẩm ướt, d&iacute;nh h&oacute;a chất, hoặc đ&atilde; can thiệp sửa chữa.</span><br /><br /><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Cam kết sản phẩm chưa qua sử dụng (trừ trường hợp đổi trả do lỗi thuộc về nh&agrave; sản xuất)</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #236fa1;\">TH&Ocirc;NG TIN LI&Ecirc;N HỆ:</span></p>\r\n<p><span class=\"text\" style=\"font-family: \'times new roman\', times, serif; font-size: 18px; color: #0014ff;\">C&Ocirc;NG TY TNHH X&Acirc;Y DỰNG SẢN XUẤT THƯƠNG MẠI S&Agrave;I TH&Agrave;NH POOL</span></p>\r\n<p><span class=\"text\" style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Địa chỉ: H63/15, Đường số 2, Phương Tăng Nhơn Ph&uacute; B, Quận 9, Hồ Ch&iacute; Minh.</span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\"><span class=\"text\">M&atilde; số thuế:&nbsp;</span><a class=\"text-is-phone-number\">0315696630</a></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\"><span class=\"text\">Số ĐT:&nbsp;</span><a class=\"text-is-phone-number\">0977 335 562</a></span></p>\r\n<p><span style=\"font-family: \'times new roman\', times, serif; font-size: 18px;\">Website:<a title=\"Thiết kế thi c&ocirc;ng hồ bơi\" href=\"../../\">&nbsp;saithanhpool.com</a></span></p>\r\n<p>&nbsp;</p>', NULL, 'cau-hoi-thuong-gap', 'Câu hỏi thường gặp', 'Câu hỏi thường gặp', 'Câu hỏi thường gặp', NULL, '2019-12-26 11:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_reset_password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phanquyen` tinyint(4) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `project_share_1` int(11) DEFAULT NULL,
  `project_share_2` int(11) DEFAULT NULL,
  `project_share_3` int(11) DEFAULT NULL,
  `project_share_4` int(11) DEFAULT NULL,
  `project_share_5` int(11) DEFAULT NULL,
  `project_share_6` int(11) DEFAULT NULL,
  `project_share_7` int(11) DEFAULT NULL,
  `project_share_8` int(11) DEFAULT NULL,
  `project_share_9` int(11) DEFAULT NULL,
  `project_share_10` int(11) DEFAULT NULL,
  `code_active` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_active` timestamp NULL DEFAULT NULL,
  `xacnhan` tinyint(1) DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `email`, `password`, `code_reset_password`, `phone`, `diachi`, `phanquyen`, `avatar`, `project_share_1`, `project_share_2`, `project_share_3`, `project_share_4`, `project_share_5`, `project_share_6`, `project_share_7`, `project_share_8`, `project_share_9`, `project_share_10`, `code_active`, `time_active`, `xacnhan`, `remember_token`, `created_at`, `updated_at`) VALUES
(37, 'Đinh Tuấn Anh', 'saithanhpool@gmail.com', 'admin123', NULL, '122454654765767', '112/28 Tây Hóa, Q9, TpHCM', 4, 'avatar.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'actived', '2019-10-29 14:04:47', 1, 'YbNMU20ygdWj30NH7F1DfYQtxJdt9crlSC5Nk8hUYHybaKCNb0pkD9hh2RIM', '2019-10-29 14:04:23', '2019-10-29 18:37:47'),
(49, 'Tuấn Anh', 'tuananhdinh.vn@gmail.com', '$2y$10$yjOC9Z2QtILPUA.f2REYLui9fCEIR6e3yzNGwByPz5hSlKIBSK0DG', NULL, '0933953192', '112/28 Tây Hòa, Q9, TpHCM', 1, '1592208905logo_tad.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'actived', '2019-12-22 21:19:34', 1, 'rJOOIEkfRP2iXEqggP9UDBiCZF5Degdqcokb0Dqcs7dIzvBAWLLBx4MnxUZQ', '2019-12-22 21:18:52', '2020-07-11 03:59:01'),
(70, 'Ngọc', 'ngoc.ttp@minhglobal.com', '$2y$10$WuX2qrvkEnT6sSBIXK7sEOYulJkX.Z9k0mC5.peTtNMiIgMkavec6', NULL, '01234568', 'abc', 2, 'avatar.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'e7RtjdBxfAuO4UqDrIKXc3A3BXkMaqYNA1zD2O75OJzmENQpokF4eCWAMfxe', '2021-01-14 08:00:05', '2021-01-14 08:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_whyus_process`
--

CREATE TABLE `tb_whyus_process` (
  `whyus_process_id` int(10) UNSIGNED NOT NULL,
  `whyus_process_title_vi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_process_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_process_title_zh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_process_title_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_process_title_kr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whyus_process_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_whyus_process`
--

INSERT INTO `tb_whyus_process` (`whyus_process_id`, `whyus_process_title_vi`, `whyus_process_title_en`, `whyus_process_title_zh`, `whyus_process_title_ja`, `whyus_process_title_kr`, `whyus_process_thumb`, `created_at`, `updated_at`) VALUES
(11, 'Công tác chuẩn bị', 'Preliminary Works', '前期工作', '予備作業', '일반 수행 절차', '1601604811Khoicong2.jpg', '2020-10-02 02:13:31', '2021-06-16 07:07:02'),
(12, 'Ép cọc', 'Pileworks', '桩工', 'パイルワークス', '파일 워크', '1601604932Epcoc.jpg', '2020-10-02 02:15:32', '2021-06-16 07:06:47'),
(13, 'Công tác nền móng', 'Foundation works', '基础工作', '基礎工事', '재단 작품', '1601605010Mong4.jpg', '2020-10-02 02:16:50', '2021-06-16 07:07:16'),
(14, 'Kết cấu thép', 'Steel structure', '钢材结构', '鉄骨構造', '강철 구조', '1601605062keothep2.jpg', '2020-10-02 02:17:42', '2021-06-16 07:07:33'),
(17, 'Công tác sàn nền', 'Floor, ground works', '地面工程', '床上工事', '바닥, 바닥 작업', '1601605677sdasjfhajfh.jpg', '2020-10-02 02:27:57', '2021-06-16 07:07:50'),
(18, 'Công tác hoàn thiện', 'Finishing works', '完善工作', '仕上げ作業', '마무리 작업', '1603077471Step6.jpg', '2020-10-02 02:29:54', '2021-06-16 07:08:05'),
(19, 'MEP', 'MEP', 'MEP', 'MEP', '기전', '1601605816Hoanthien5.jpg', '2020-10-02 02:30:16', '2021-06-16 07:08:21'),
(20, 'Vệ sinh & Bàn giao', 'Cleanup & Handover', '清理和移交', 'クリーンアップとハンドオーバー', '정리 및 양도', '1601605894DICF.jpg', '2020-10-02 02:31:34', '2021-06-16 07:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `tb_blog_blog_blogcatid_foreign` (`blog_blogcatid`);

--
-- Indexes for table `tb_blogcat`
--
ALTER TABLE `tb_blogcat`
  ADD PRIMARY KEY (`blogcat_id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tb_image`
--
ALTER TABLE `tb_image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tb_layout_contact`
--
ALTER TABLE `tb_layout_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tb_layout_footer`
--
ALTER TABLE `tb_layout_footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `tb_layout_homepage`
--
ALTER TABLE `tb_layout_homepage`
  ADD PRIMARY KEY (`homepage_id`);

--
-- Indexes for table `tb_layout_lylich`
--
ALTER TABLE `tb_layout_lylich`
  ADD PRIMARY KEY (`lylich_id`);

--
-- Indexes for table `tb_layout_product`
--
ALTER TABLE `tb_layout_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tb_layout_service`
--
ALTER TABLE `tb_layout_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tb_nation`
--
ALTER TABLE `tb_nation`
  ADD PRIMARY KEY (`nation_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`od_id`),
  ADD KEY `tb_order_od_user_id_index` (`od_user_id`),
  ADD KEY `tb_order_od_status_index` (`od_status`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD PRIMARY KEY (`odd_id`),
  ADD KEY `tb_order_detail_odd_od_id_index` (`odd_od_id`),
  ADD KEY `tb_order_detail_odd_product_id_index` (`odd_product_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `tb_product_pro_procatid_foreign` (`pro_procatid`);

--
-- Indexes for table `tb_productcat`
--
ALTER TABLE `tb_productcat`
  ADD PRIMARY KEY (`procat_id`);

--
-- Indexes for table `tb_productcat_lv2`
--
ALTER TABLE `tb_productcat_lv2`
  ADD PRIMARY KEY (`procat2_id`);

--
-- Indexes for table `tb_product_location`
--
ALTER TABLE `tb_product_location`
  ADD PRIMARY KEY (`locate_id`);

--
-- Indexes for table `tb_product_photo`
--
ALTER TABLE `tb_product_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tb_project_major`
--
ALTER TABLE `tb_project_major`
  ADD PRIMARY KEY (`major_id`);

--
-- Indexes for table `tb_qna`
--
ALTER TABLE `tb_qna`
  ADD PRIMARY KEY (`qna_id`);

--
-- Indexes for table `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tb_static_page`
--
ALTER TABLE `tb_static_page`
  ADD PRIMARY KEY (`static_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_whyus_process`
--
ALTER TABLE `tb_whyus_process`
  ADD PRIMARY KEY (`whyus_process_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tb_blogcat`
--
ALTER TABLE `tb_blogcat`
  MODIFY `blogcat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `cust_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `event_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_image`
--
ALTER TABLE `tb_image`
  MODIFY `img_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;

--
-- AUTO_INCREMENT for table `tb_layout_contact`
--
ALTER TABLE `tb_layout_contact`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_layout_footer`
--
ALTER TABLE `tb_layout_footer`
  MODIFY `footer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_layout_homepage`
--
ALTER TABLE `tb_layout_homepage`
  MODIFY `homepage_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_layout_lylich`
--
ALTER TABLE `tb_layout_lylich`
  MODIFY `lylich_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_layout_product`
--
ALTER TABLE `tb_layout_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_layout_service`
--
ALTER TABLE `tb_layout_service`
  MODIFY `service_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_nation`
--
ALTER TABLE `tb_nation`
  MODIFY `nation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `od_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  MODIFY `odd_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `pro_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `tb_productcat`
--
ALTER TABLE `tb_productcat`
  MODIFY `procat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_productcat_lv2`
--
ALTER TABLE `tb_productcat_lv2`
  MODIFY `procat2_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_product_location`
--
ALTER TABLE `tb_product_location`
  MODIFY `locate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_product_photo`
--
ALTER TABLE `tb_product_photo`
  MODIFY `photo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT for table `tb_project_major`
--
ALTER TABLE `tb_project_major`
  MODIFY `major_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_qna`
--
ALTER TABLE `tb_qna`
  MODIFY `qna_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `st_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_static_page`
--
ALTER TABLE `tb_static_page`
  MODIFY `static_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tb_whyus_process`
--
ALTER TABLE `tb_whyus_process`
  MODIFY `whyus_process_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD CONSTRAINT `tb_blog_blog_blogcatid_foreign` FOREIGN KEY (`blog_blogcatid`) REFERENCES `tb_blogcat` (`blogcat_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_pro_procatid_foreign` FOREIGN KEY (`pro_procatid`) REFERENCES `tb_productcat` (`procat_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
