-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 17, 2020 lúc 05:40 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop-quan-ao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cate_name`) VALUES
(240, 'Bag'),
(238, 'Men'),
(242, 'Shoes'),
(239, 'Watches'),
(241, 'Women');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `star` int(11) NOT NULL,
  `star_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `content`, `id_product`, `id_user`, `updated_at`, `star`, `star_total`) VALUES
(112, 'ok', 165, 263, '2020-08-04 00:32:09', 5, 0),
(113, 'đây là bl', 167, 263, '2020-08-04 00:38:31', 3, 0),
(114, 'hay', 165, 263, '2020-08-07 10:37:25', 5, 0),
(115, 'ok ok', 165, 263, '2020-08-07 10:47:28', 2, 0),
(116, 'ok nhá\r\n', 166, 263, '2020-08-12 05:37:59', 5, 0),
(117, 'uk ok', 166, 263, '2020-08-12 05:38:12', 4, 0),
(118, 'ko ok', 166, 263, '2020-08-12 05:38:21', 1, 0),
(119, 'chán', 166, 263, '2020-08-12 05:38:29', 0, 0),
(120, '12', 165, 263, '2020-08-12 10:41:15', 2, 0),
(121, 'ok tyệt', 166, 263, '2020-08-14 10:40:17', 5, 0),
(122, '', 166, 263, '2020-08-14 10:49:09', 3, 0),
(123, 'ok ok', 166, 263, '2020-08-14 10:50:32', 3, 0),
(124, 'ngon', 166, 263, '2020-08-14 10:52:29', 5, 21),
(125, 'ko', 166, 263, '2020-08-14 10:58:04', 5, 0),
(126, 'ok', 168, 263, '2020-08-14 11:14:28', 3, 0),
(127, 'ok fren\r\n', 168, 263, '2020-08-14 11:14:58', 5, 0),
(128, 'ok', 168, 263, '2020-08-14 11:15:12', 1, 0),
(129, 'ok', 166, 263, '2020-08-14 11:18:33', 5, 0),
(130, 'đẹp quá', 169, 274, '2020-08-14 11:59:43', 5, 0),
(131, 'đẹp tyuệt', 169, 274, '2020-08-14 12:00:08', 5, 0),
(132, 'nice ', 169, 274, '2020-08-14 12:00:39', 5, 0),
(133, 'chám', 169, 274, '2020-08-14 12:01:04', 3, 0),
(134, 'ok  đẹp', 173, 263, '2020-08-15 01:22:47', 5, 0),
(135, 'tyệt vời', 173, 263, '2020-08-15 01:22:57', 5, 0),
(136, 'haha', 167, 263, '2020-08-15 01:23:23', 5, 0),
(137, 'đẹp quá', 167, 263, '2020-08-15 01:23:33', 5, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_blog`
--

CREATE TABLE `comment_blog` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `content` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comment_blog`
--

INSERT INTO `comment_blog` (`id`, `id_user`, `id_blog`, `content`, `updated_at`) VALUES
(22, 263, 4, 'ok', '2020-08-04 00:32:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `number` int(11) NOT NULL,
  `notepad` text NOT NULL,
  `statu_id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` char(11) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `method_invoice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `invoices`
--

INSERT INTO `invoices` (`id`, `id_product`, `id_user`, `updated_at`, `number`, `notepad`, `statu_id`, `total_price`, `address`, `phone_number`, `address_2`, `method_invoice`) VALUES
(44, 168, 274, '2020-08-03 10:04:36', 1, '', 5, 100, 'hà nam', '0965029062', 'Select a country...', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  `note` text NOT NULL,
  `total` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `statu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_updated`, `statu_id`) VALUES
(54, '274', '0965029062', 'hà nam', '', 225, 1597425370, 1597425370, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `detail` text NOT NULL,
  `short_desc` text NOT NULL,
  `comment` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `updated_at`, `detail`, `short_desc`, `comment`, `image`, `tags`) VALUES
(4, '8 Inspiring Ways to Wear Dresses in the Winter', '2020-08-06 06:10:00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat. Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor <img src=\"https://www.prepostseo.com/assets/pps-frontend/lib/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" />ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate<img src=\"https://www.prepostseo.com/assets/pps-frontend/lib/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"https://www.prepostseo.com/assets/pps-frontend/lib/tinymce/plugins/emoticons/img/smiley-embarassed.gif\" alt=\"embarassed\" /><img src=\"https://www.prepostseo.com/assets/pps-frontend/lib/tinymce/plugins/emoticons/img/smiley-cry.gif\" alt=\"cry\" /><img src=\"https://www.prepostseo.com/assets/pps-frontend/lib/tinymce/plugins/emoticons/img/smiley-foot-in-mouth.gif\" alt=\"foot-in-mouth\" /></p>', 'n posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.', '', 'public/uploads/products/5f145e0d21d56-blog-01.jpg', 'bài viết số 1'),
(5, 'The Great Big List of Men’s Gifts for the Holidays', '2020-08-04 05:21:04', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.\r\n\r\nPraesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu variu', '', 'public/uploads/products/5f145e627cf19-blog-02.jpg', 'bài viết số 2'),
(6, '5 Winter-to-Spring Fashion Trends to Try Now', '2020-08-04 05:21:14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.\r\n\r\nPraesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu variu', '', 'public/uploads/products/5f145e910488a-blog-03.jpg', 'bài viết số 3'),
(7, 'Inceptos himenaeos. Fusce eget dictum', '2020-08-15 06:20:34', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat. Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate</p>', '<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius</p>', '', 'public/uploads/products/5f146521d470f-blog-05.jpg', 'bài viết số 4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_id` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `price` float NOT NULL DEFAULT 0,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star_total` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 1,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `more_information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `cate_id`, `price`, `short_desc`, `detail`, `star_total`, `updated_at`, `views`, `comment`, `more_information`, `number`) VALUES
(165, 'Lightweight Jacket', 'public/uploads/products/5f13fda118e49-product-02.jpg', 239, 25, '<p>Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.</p>', '<p>Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.</p>', 5, '2020-07-18 17:00:00', 10, '', '<ol>\r\n<li>Weight 0.79 kg&nbsp;&nbsp;</li>\r\n<li>Dimensions 110 x 33 x 100 cm</li>\r\n<li>Materials 60% cotton Color Black, Blue, Grey, Green, Red, White</li>\r\n<li>Size XL, L,</li>\r\n</ol>', '20'),
(166, 'Herschel supply', 'public/uploads/products/5f1ba336be5c5-product-04.jpg', 241, 90, 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.', 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.', 31, '0000-00-00 00:00:00', 11, '', 'Weight 0.79 kg Dimensions 110 x 33 x 100 cm Materials 60% cotton Color Black, Blue, Grey, Green, Red, White Size XL, L,', '20'),
(167, 'Only Check Trouser', 'public/uploads/products/5f1ba37545fef-product-05.jpg', 240, 100, 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.', 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.', 8, '2020-07-25 17:00:00', 1, '', 'Weight 0.79 kg Dimensions 110 x 33 x 100 cm Materials 60% cotton Color Black, Blue, Grey, Green, Red, White Size XL, L,', '12'),
(168, 'Classic Trench Coat', 'public/uploads/products/5f376f526a0f8-product-10.jpg', 239, 100, '<p>ok</p>', '<p>ok</p>', 8, '2020-07-25 17:00:00', 10, '', '<p>ok</p>', '20'),
(169, 'Front Pocket Jumper', 'public/uploads/products/5f1d82bb1c24c-product-07.jpg', 239, 100, 'ko', 'ko', 15, '2020-07-25 17:00:00', 10, '', 'ko', '80'),
(170, 'Herschel hachre', 'public/uploads/products/5f1d905453873-product-08.jpg', 241, 100, '<p>ok</p>', '<p>kko</p>', 0, '2020-07-26 09:16:25', 1, '', '<p>ko</p>', '12'),
(172, 'T-Shirt with Sleeve', 'public/uploads/products/5f37706fb5ea7-product-13.jpg', 241, 150, '<p>Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.</p>', '<p>Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.</p>', 0, '2020-08-15 00:19:36', 1, '', '<ul class=\"p-lr-28 p-lr-15-sm\">\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Weight</span><span class=\"stext-102 cl6 size-206\">0.79 kg</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Dimensions</span><span class=\"stext-102 cl6 size-206\">110 x 33 x 100 cm</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Materials</span><span class=\"stext-102 cl6 size-206\">60% cotton</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Color</span><span class=\"stext-102 cl6 size-206\">Black, Blue, Grey, Green, Red, White</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Size</span><span class=\"stext-102 cl6 size-206\">XL, L, M, S</span></li>\r\n</ul>', '20'),
(173, 'Square Neck Back', 'public/uploads/products/5f3770b9933ac-product-16.jpg', 241, 100, '<p>Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat</p>', '<p>Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.</p>', 5, '2020-08-15 00:20:03', 1, '', '<ul class=\"p-lr-28 p-lr-15-sm\">\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Weight</span><span class=\"stext-102 cl6 size-206\">0.79 kg</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Dimensions</span><span class=\"stext-102 cl6 size-206\">110 x 33 x 100 cm</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Materials</span><span class=\"stext-102 cl6 size-206\">60% cotton</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Color</span><span class=\"stext-102 cl6 size-206\">Black, Blue, Grey, Green, Red, White</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Size</span><span class=\"stext-102 cl6 size-206\">XL, L, M, S</span></li>\r\n</ul>', '20'),
(174, 'FemmeT-Shirt ', 'public/uploads/products/5f37715d49ceb-product-10.jpg', 241, 50, '<p>Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat</p>', '<p>Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.</p>', 0, '2020-08-15 00:22:47', 1, '', '<ul class=\"p-lr-28 p-lr-15-sm\">\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Weight</span><span class=\"stext-102 cl6 size-206\">0.79 kg</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Dimensions</span><span class=\"stext-102 cl6 size-206\">110 x 33 x 100 cm</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Materials</span><span class=\"stext-102 cl6 size-206\">60% cotton</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Color</span><span class=\"stext-102 cl6 size-206\">Black, Blue, Grey, Green, Red, White</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Size</span><span class=\"stext-102 cl6 size-206\">XL, L, M, S</span></li>\r\n</ul>', '20'),
(175, 'Converse All Star Hi', 'public/uploads/products/5f3771b4cf7ba-product-09.jpg', 240, 123, '<p>Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.</p>', '<p>Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.</p>', 0, '2020-08-15 00:25:01', 1, '', '<ul class=\"p-lr-28 p-lr-15-sm\">\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Weight</span><span class=\"stext-102 cl6 size-206\">0.79 kg</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Dimensions</span><span class=\"stext-102 cl6 size-206\">110 x 33 x 100 cm</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Materials</span><span class=\"stext-102 cl6 size-206\">60% cotton</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Color</span><span class=\"stext-102 cl6 size-206\">Black, Blue, Grey, Green, Red, White</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Size</span><span class=\"stext-102 cl6 size-206\">XL, L, M, S</span></li>\r\n</ul>', '50'),
(176, 'Shirt in Stretch Cotton', 'public/uploads/products/5f37722499a57-product-11.jpg', 240, 1111, '<p>Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.</p>', '<p>Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.</p>', 0, '2020-08-15 00:26:39', 1, '', '<ul class=\"p-lr-28 p-lr-15-sm\">\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Weight</span><span class=\"stext-102 cl6 size-206\">0.79 kg</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Dimensions</span><span class=\"stext-102 cl6 size-206\">110 x 33 x 100 cm</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Materials</span><span class=\"stext-102 cl6 size-206\">60% cotton</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Color</span><span class=\"stext-102 cl6 size-206\">Black, Blue, Grey, Green, Red, White</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Size</span><span class=\"stext-102 cl6 size-206\">XL, L, M, S</span></li>\r\n</ul>', '80'),
(177, 'Vintage Inspired Classic', 'public/uploads/products/5f37738bb8c02-product-15.jpg', 239, 100, '<p>Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.</p>', '<p>Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.</p>', 0, '2020-08-15 00:31:44', 1, '', '<ul class=\"p-lr-28 p-lr-15-sm\">\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Weight</span><span class=\"stext-102 cl6 size-206\">0.79 kg</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Dimensions</span><span class=\"stext-102 cl6 size-206\">110 x 33 x 100 cm</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Materials</span><span class=\"stext-102 cl6 size-206\">60% cotton</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Color</span><span class=\"stext-102 cl6 size-206\">Black, Blue, Grey, Green, Red, White</span></li>\r\n<li class=\"flex-w flex-t p-b-7\"><span class=\"stext-102 cl3 size-205\">Size</span><span class=\"stext-102 cl6 size-206\">XL, L, M, S</span></li>\r\n</ul>', '80');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `name_promotion` varchar(255) NOT NULL,
  `promotion` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id_role` int(10) UNSIGNED NOT NULL,
  `name_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id_role`, `name_role`) VALUES
(1, 'khách'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `addres`, `phone_number`, `email`) VALUES
(1, '19 nguyễn cơ thạch - nam từ liêm - hà nội', '0999999999', 'hacker69.nn@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `name`, `image`, `content`) VALUES
(4, 'NEW SEASON', 'public/uploads/products/5f13e407c23fd-slide-01.jpg', 'Women Collection 2018'),
(5, 'Jackets & Coats', 'public/uploads/products/5f13e44551247-slide-02.jpg', 'Men New-Season'),
(6, 'New arrivals', 'public/uploads/products/5f13e45b90687-slide-03.jpg', 'Men Collection 2018'),
(7, 'Bán hàng free', 'public/uploads/products/5f13e720da3b9-slide-04.jpg', 'vì đam mê :)');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Chờ thanh toán'),
(2, 'Chờ lấy hàng'),
(3, 'Đang giao'),
(4, 'Đã giao'),
(5, 'Hủy đơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_number` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `role`, `password`, `updated_at`, `phone_number`, `address`) VALUES
(263, 'thangg', 'public/uploads/users/5f13e7ccbdc97-avatar-01.jpg', 'thangdvph08801@fpt.edu.vn', 2, '1', '2020-07-18 17:00:00', '0965029062', 'hà nam'),
(274, 'lovethu', 'public/uploads/users/5f1aae70bd97d-021d769efdf79c04ba951e782a4ab105.jpg', 'hacker69.nn@gmail.com', 1, '1', '2020-07-23 17:00:00', '', 'hà nam'),
(286, 'thu1234', 'public/uploads/users/5f2303e3260cd-021d769efdf79c04ba951e782a4ab105.jpg', 'thang@gmail.com', 1, '1', '2020-07-30 12:30:53', '0965029062', ''),
(287, 'lovethang000', 'public/uploads/users/5f23057587d49-8709a536089645.570eae1558730.jpg', 'pppppp@gamil.com', 1, '1', '2020-07-30 12:37:38', '0965029062', 'hà nam'),
(288, 'lolololo', 'public/uploads/users/5f2309363340f-021d769efdf79c04ba951e782a4ab105.jpg', 'aaa@fpt.edu.vn', 1, '1', '0000-00-00 00:00:00', '0965029062', 'đơn nguyên 5 khu kí túc xá mĩ đình, 19 nguyễn cơ thạch'),
(289, 'aaaaaaaaaaa', 'public/uploads/users/5f230990bee2c-b38498a5830bd61ccef1b54d35a7de22.jpg', 'thu@gmail.com', 1, '1', '2020-07-29 17:00:00', '0965029062', 'đơn nguyên 5 khu kí túc xá mĩ đình, 19 nguyễn cơ thạch'),
(290, 'đỗ việt thắng', '', 'xuanthanh2k.nn@gmail.com', 1, '1', '2020-08-03 17:00:00', '0965029062', 'đơn nguyên 5 khu kí túc xá mĩ đình, 19 nguyễn cơ thạch');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`cate_name`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment_blog`
--
ALTER TABLE `comment_blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Chỉ mục cho bảng `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT cho bảng `comment_blog`
--
ALTER TABLE `comment_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT cho bảng `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role` FOREIGN KEY (`role`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
