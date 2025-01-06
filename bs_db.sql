-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2024 lúc 03:32 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bs_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(3, 0, 'Thiên tài bên trái, kẻ điên bên phải', 80000, 1, 'ThienTaiKeDien.webp'),
(8, 2, 'Demian-Tuổi trẻ băn khoăn', 80000, 1, 'demian.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `cate_id` int(100) NOT NULL,
  `cate_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cate_id`, `cate_name`) VALUES
(1, 1, 'Manga-Comic'),
(2, 2, 'Tiểu thuyết-Văn học'),
(3, 3, 'Kinh tế'),
(4, 4, 'Self-help'),
(5, 5, 'Anh-Việt'),
(6, 6, 'Trung-Việt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `number` int(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(1, 2, 'Trần Hải Ngọc', 'tranhaingoc1306@gmail.com', 356277901, 'Tôi thích các bài viết mà shop chia sẻ, có vẻ chúng ta có nhiều chủ đề tương đồng. Mong shop chia sẻ thêm các bài viết hay thêm.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `number` int(10) NOT NULL,
  `email` varchar(500) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'chưa giải quyết'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(2, 2, 'Trần Hải Ngọc', 356277901, 'tranhaingoc1306@gmail.com', 'Thanh Toán Khi Nhận Hàng', 'Thôn Trực Tầm, Xã Trà Giang, Thái Bình, Việt Nam - không', ', Thiên tài bên trái, kẻ điên bên phải (1) , Nhà giả kim (1) ', 110000, '26-Dec-2024', 'hoàn thành'),
(3, 2, 'Trần Hải Ngọc', 356277901, 'tranhaingoc1306@gmail.com', 'VN Pay', 'Thôn Trực Tầm, Xã Trà Giang, Thái Bình, Việt Nam - không', ', Thám tử lừng danh Conan - Tập 90 (1) , Thám tử lừng danh Conan - Tập 89 (1) ', 20000, '26-Dec-2024', 'Chưa giải quyết');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `cate_id` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `cate_id`, `price`, `image`, `description`) VALUES
(1, 'Thám tử lừng danh Conan - Tập 89', 1, 10000, 'Conan_89.jpg', 'Tác giả: Gosho Aoyama\r\nĐối tượng: Thiếu niên\r\nKhuôn khổ: 11.3x17.6 cm\r\nSố trang: 184\r\nĐịnh dạng: Bìa mềm\r\nTrọng lượng: 120 gram\r\nGiới thiệu tập 89\r\nLộ diện danh sách nạn nhân APTX4869, độc dược của Tổ chức Áo Đen. Nhân vật không ngờ tới xuất hiện sau tên của Kudo Shinichi hai dòng là ai!?\r\nTập 89 hứa hẹn mang đến nhiều câu chuyện hấp dẫn như “Vụ án ở trung tâm mua sắm”, “Vụ án tìm đồ thất lạc của yumi” với sự tham gia tích cực của nhóm thám tử nhí, chương cuối “Vụ án sát hại thành viên girlband” dẫn dắt người đọc trở về quá khứ của Amuro và Sera, và “Vụ án uFo” do Chiba phụ trách… Thật đáng xem phải không nào!?'),
(2, 'Thám tử lừng danh Conan - Tập 90', 1, 10000, 'Conan_90.jpg', 'Tác giả: Gosho Aoyama \r\nĐối tượng: Thiếu niên \r\nKhuôn khổ: 11.3x17.6 cm \r\nSố trang: 184 \r\nĐịnh dạng: Bìa mềm \r\nTrọng lượng: 120 gram  \r\nGiới thiệu tập 90 \r\nSáng tỏ sự thật đằng sau mối bất hòa giữa hai con người phục vụ công lí ở hai vị thế khác nhau - mật vụ FBI Akai và cảnh sát Amuro!! Cuộc phiêu lưu mới sẽ đưa độc giả đến gần hơn với tổ chức Áo Đen, tiết lộ mối quan hệ giữa Sera và \"em gái ngoài lãnh địa\"!! Cuối cùng, chuyện tình cảm giữa Heiji và Kazuha cũng có chuyển biến...?!'),
(3, 'Tam thể - Tập 1', 2, 85000, 'TamThe.jpg\"', 'Tác giả: Lưu Từ Hân\r\nKích thước: 15x24 cm\r\nLoại bìa: Bìa mềm\r\nSố trang: 365\r\n\r\nGiới thiệu về sách\r\nUông Diểu, vị giáo sư về vật liệu nano ngày nào cũng đăng nhập vào “Tam Thể”. Tại trò chơi online đó, anh đắm chìm trong một thế giới khác, nơi một nền văn minh có thể chỉ kéo dài vài ngày, bầu trời có thể xuất hiện ba mặt trời cùng lúc và con người còn phải biến thành xác khô để sinh tồn.\r\nNhưng anh không thể ngờ, thế giới khắc nghiệt trong Tam Thể là có thực, chỉ cách trái đất chừng bốn năm ánh sáng, và trò chơi ảo kia lại là một cánh cửa để những sinh vật của thế giới ấy bước đến xâm chiếm địa cầu này. Kinh hoàng, Uông Diểu tìm mọi cách ngăn chặn điều đó. Nhưng anh, cũng như cả địa cầu, không biết rằng, cánh cửa nọ đã được mở toang, từ mấy chục năm về trước.\r\nHùng tráng, kịch tính, triết lý, nên thơ, với những tri thức khoa học thú vị, Tam thể là phần mở đầu mang cảm hứng sử thi cho tam bộ khúc của Lưu Từ Hân. Sau tất cả những mưu toan ly kỳ, nham hiểm, những nỗ lực tưởng chừng tuyệt vọng để sinh tồn, câu hỏi còn đọng lại, không phải \'Loài người nên làm gì để đối phó với sự xâm lăng của Tam Thể?\', mà là \'Loài người đã làm gì chính mình?\'\r\n'),
(4, 'Điều kỳ diệu của tiệm tạp hóa Namiya', 2, 60000, 'TiemTapHoa_B.webp', 'Tác giả: Higashino Keigo\r\nKích thước: 14x20.5 cm\r\nLoại bìa: Bìa mềm\r\nSố trang: 358\r\n\r\nGiới thiệu về sách\r\nMột đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với biển hiệu cũ kỹ bám đầy bồ hóng, khiến người ta khó lòng đọc được trên đó viết gì. Định bụng nghỉ tạm một đêm rồi sáng hôm sau chuồn sớm, cả ba không ngờ chờ đợi cả bọn sẽ là một đêm không ngủ, với bao điều kỳ bí bắt đầu từ một phong thư bất ngờ gửi đến…\r\nTài kể chuyện hơn người đã giúp Keigo khéo léo thay đổi các mốc dấu thời gian và không gian, chắp nối những câu chuyện tưởng chừng hoàn toàn riêng rẽ thành một kết cấu chặt chẽ, gây bất ngờ từ đầu tới cuối.'),
(5, 'Nhà giả kim', 2, 30000, 'NhaGiaKim.webp', 'Tác giả: Paulo Coelho\r\nKích thươc: 13x20.5cm\r\nLoại bìa: Bìa mềm\r\nSố trang: 228\r\n\r\nGiới thiệu về sách:\r\nTất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người.\r\niểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.\r\n“Nhưng nhà luyện kim đan không quan tâm mấy đến những điều ấy. Ông đã từng thấy nhiều người đến rồi đi, trong khi ốc đảo và sa mạc vẫn là ốc đảo và sa mạc. Ông đã thấy vua chúa và kẻ ăn xin đi qua biển cát này, cái biển cát thường xuyên thay hình đổi dạng vì gió thổi nhưng vẫn mãi mãi là biển cát mà ông đã biết từ thuở nhỏ. Tuy vậy, tự đáy lòng mình, ông không thể không cảm thấy vui trước hạnh phúc của mỗi người lữ khách, sau bao ngày chỉ có cát vàng với trời xanh nay được thấy chà là xanh tươi hiện ra trước mắt. ‘Có thể Thượng đế tạo ra sa mạc chỉ để cho con người biết quý trọng cây chà là,’ ông nghĩ.”'),
(6, 'Thiên tài bên trái, kẻ điên bên phải', 2, 80000, 'ThienTaiKeDien.webp', 'Tác giả: Cao Minh\r\nKích thước: 16x24 cm\r\nLoại bìa: Bìa mềm\r\nSố trang: 424\r\n\r\nGiới thiệu về sách\r\nNẾU MỘT NGÀY ANH THẤY TÔI ĐIÊN, THỰC RA CHÍNH LÀ ANH ĐIÊN ĐẤY!\r\nHỡi những con người đang oằn mình trong cuộc sống, bạn biết gì về thế giới của mình? Là vô vàn thứ lý thuyết được các bậc vĩ nhân kiểm chứng, là luật lệ, là cả nghìn thứ sự thật bọc trong cái lốt hiển nhiên, hay những triết lý cứng nhắc của cuộc đời?\r\nLại đây, vượt qua thứ nhận thức tẻ nhạt bị đóng kín bằng con mắt trần gian, khai mở toàn bộ suy nghĩ, để dòng máu trong bạn sục sôi trước những điều kỳ vĩ, phá vỡ mọi quy tắc. Thế giới sẽ gọi bạn là kẻ điên, nhưng vậy thì có sao? Ranh giới duy nhất giữa kẻ điên và thiên tài chẳng qua là một sợi chỉ mỏng manh: Thiên tài chứng minh được thế giới của mình, còn kẻ điên chưa kịp làm điều đó. Chọn trở thành một kẻ điên để vẫy vùng giữa nhân gian loạn thế hay khóa hết chúng lại, sống mãi một cuộc đời bình thường khiến bạn cảm thấy hạnh phúc hơn?\r\nThiên tài bên trái, kẻ điên bên phải là cuốn sách dành cho những người điên rồ, những kẻ gây rối, những người chống đối, những mảnh ghép hình tròn trong những ô vuông không vừa vặn… những người nhìn mọi thứ khác biệt, không quan tâm đến quy tắc. Bạn có thể đồng ý, có thể phản đối, có thể vinh danh hay lăng mạ họ, nhưng điều duy nhất bạn không thể làm là phủ nhận sự tồn tại của họ. Đó là những người luôn tạo ra sự thay đổi trong khi hầu hết con người chỉ sống rập khuôn như một cái máy. Đa số đều nghĩ họ thật điên rồ nhưng nếu nhìn ở góc khác, ta lại thấy họ thiên tài. Bởi chỉ những người đủ điên nghĩ rằng họ có thể thay đổi thế giới mới là những người làm được điều đó.'),
(7, 'Ngành kinh tế có gì?', 3, 90000, 'NganhKinhTe.webp', 'Tác giả: Nhóm tác giả Spiderum\r\n\r\nGiới thiệu về sách:\r\n\"Người Trong Muôn Nghề: Ngành Kinh Tế Có Gì?\" giúp bạn hiểu ngành Kinh tế không chỉ dừng ở những ngành nghề “truyền thống” như Kế toán, Kiểm toán, Tài chính ngân hàng, Sales, Marketing, Nhân sự, Xuất nhập khẩu,... mà còn thật nhiều những công việc thú vị khác: Tư vấn quản trị, Chuyên viên đầu tư, Thương mại điện tử, Nghiên cứu, Làm chính sách, Khởi nghiệp,... \r\nCuốn sách đầu tiên “giải ảo” các quan niệm như: Làm kinh tế, kinh doanh chẳng cần học những thứ lý thuyết mơ hồ trong trường hay Ra trường mà không làm đúng ngành, đúng nghề thì… chết. Bạn sẽ thấy: Các môn học đều có lý do để tồn tại; Ngành Kinh tế có thể phân loại được rõ ràng; Dân Kinh tế ai cũng từng ít nhiều… mông lung, ít nhiều làm trái ngành, trái nghề. \r\nLà cuốn sách hướng nghiệp đầu tiên về chuyên ngành Kinh tế, “Người Trong Muôn Nghề: Ngành Kinh Tế Có Gì?” giúp bạn có được bức tranh toàn cảnh về các vị trí công việc thông qua hơn 200 trang sách tập hợp bài viết của nhiều tác giả. Ba phần của cuốn sách sẽ đi sâu vào từng chủ đề:\r\nPhần 1: Một thoáng kinh tế sẽ cho bạn cái nhìn toàn cảnh về ngành: “Kinh tế Việt Nam đã và đang phát triển như thế nào?”, “Học Kinh tế xong mình có thể có lựa chọn gì?”, “Mức lương cho các vị trí công việc ra sao?”,...\r\nPhần 2: Muôn nẻo đường nghề sẽ đem tới trải nghiệm chân thực nhất của những người trong ngành, về đặc điểm, vai trò của từng loại công việc; Các kiến thức, kỹ năng các bạn cần chuẩn bị và những bài học, kỷ niệm vui, buồn trong nghề.\r\nPhần 3: Câu chuyện và góc nhìn là những câu chuyện thật, “rất đời, rất người” của những doanh nhân, chuyên gia dày dạn kinh nghiệm. Thông qua đó, bạn sẽ biết ở góc nhìn của một người chủ, một người quản lý, họ mong đợi gì ở các nhân viên? Bên cạnh đó, bản thân cần chuẩn bị gì về mặt thái độ, tâm lý lẫn kiến thức để phát huy tối đa khả năng trong hành trình xây dựng sự nghiệp.'),
(8, 'Mặc kệ nó, làm tới đi!', 3, 35000, 'MacKeNo_B.jpg', 'Tác giả: Richard Branson\r\n\r\nGiới thiệu về sách:\r\nMặc kệ nó, làm tới đi! là cuốn sách giúp bạn tự tin, sáng tạo và có cái nhìn lạc quan hơn về mọi vấn đề thông qua những câu chuyện và trải nghiệm đầy mới mẻ, thú vị của một trong những tỷ phú hàng đầu nước Anh.\r\nCuốn sách cho người đọc thấy được cách Richard Branson đạt được tất cả những thành tích phi thường đó trong hoàn cảnh là một người mắc bệnh khó đọc từ nhỏ và buộc phải thôi học năm 16 tuổi do khả năng học tập rất hạn chế. Trong Mặc kệ nó, làm tới đi! bạn sẽ nhận thấy một cái nhìn mới mẻ về cuộc sống cũng như kinh doanh thông qua những trải nghiệm, những bài học ông học được từ lúc còn nhỏ, từ khi khởi nghiệp vào năm 16 tuổi, cho đến nay khi đã trở thành 1 trong 4 doanh nhân được đánh giá là vĩ đại nhất hiện nay trên thế giới.\r\nNhững điều giá trị mà bạn có thể tìm thấy trong cuốn sách:\r\n-Cứ làm đi: Có mục tiêu, Luôn tin tưởng vào bản thân, Không ngừng cố gắng\r\n-Hãy vui vẻ: Làm việc chăm chỉ, Nắm bắt các cơ hội, Suy nghĩ tích cực\r\n-Hãy táo bạo: Tính toán rủi ro, Theo đuổi những mục tiêu và mơ ước, Không hối tiếc\r\n-Thách thức bản thân: Luôn vươn tới những mục tiêu cao hơn, Cố gắng thử sức những điều mới mẻ\r\n-Đứng trên đôi chân của chính mình: Dựa vào bản thân, Mơ ước thực tế\r\n-Sống trong hiện tại: Yêu cuộc sống và sống hết mình, Tận hưởng hiện tại\r\n-Trân trọng gia đình, bạn bè: Đặt gia đình và bạn bè lên hàng đầu, Lựa chọn đúng người và trọng thưởng nhân tài\r\n-Tôn trọng mọi người: Lịch sự và tôn trọng người khác, Làm những việc đúng đắn, Giữ gìn tên tuổi, Công bằng trong mọi mối quan hệ\r\n-Hãy đổi mới: Suy nghĩ sáng tạo, Phá vỡ các quy tắc thông thường\r\n-Suy nghĩ trẻ trung: Thách thức những điều lớn lao, Bình tĩnh trước mọi thử thách, Luôn có một người bình thường.'),
(9, 'Tư duy nhanh và chậm', 3, 100000, 'ThinkingFastAndSlow_B.webp', 'Tác giả: Daniel Kahneman\r\nKích thước: 16x24 cm\r\nLoại bìa: Bìa mềm\r\nSố trang: 612\r\n\r\nGiới thiệu về sách:\r\nChúng ta thường tự cho rằng con người là sinh vật có lý trí mạnh mẽ, khi quyết định hay đánh giá vấn đề luôn kĩ lưỡng và lý tính. Nhưng sự thật là, dù bạn có cẩn trọng tới mức nào, thì trong cuộc sống hàng ngày hay trong vấn đề liên quan đến kinh tế, bạn vẫn có những quyết định dựa trên cảm tính chủ quan của mình. “Tư duy nhanh và chậm”, cuốn sách nổi tiếng tổng hợp tất cả nghiên cứu được tiến hành qua nhiều thập kỷ của nhà tâm lý học từng đạt giải Nobel Kinh tế Daniel Kahneman sẽ cho bạn thấy những sư hợp lý và phi lý trong tư duy của chính bạn. Cuốn sách được đánh giá là “kiệt tác” trong việc thay đổi hành vi của con người, Tư duy nhanh và chậm đã dành được vô số giải thưởng danh giá, lọt vào Top 11 cuốn sách kinh doanh hấp dẫn nhất năm 2011. \r\nĐã có rất nhiều cuốn sách nói về tính hợp lý và phi lý của con người trong tư duy, trong việc đánh giá và ra quyết định, nhưng Tư duy nhanh và chậm được Tạp chí Tài chính Mỹ đánh giá là “kiệt tác”.\r\nBạn nghĩ rằng bạn tư duy nhanh, hay chậm? Bạn tư duy và suy nghĩ theo lối “trông mặt bắt hình dong”, đánh giá mọi vật nhanh chóng bằng cảm quan, quyết định dựa theo cảm xúc hay tư duy một cách cẩn thận, chậm rãi nhưng logic hợp lý về một vấn đề. Tư duy nhanh và chậm sẽ đưa ra và lý giải hai hệ thống tư duy tác động đến con đường nhận thức của bạn. Kahneman gọi đó là: hệ thống 1 và hệ thống 2. Hệ thống 1, còn gọi là cơ chế nghĩ nhanh, tự động, thường xuyên được sử dụng, cảm tính, rập khuôn và tiềm thức. Hệ thống 2, còn gọi là cơ chế nghĩ chậm, đòi hỏi ít nỗ lực, ít được sử dụng, dùng logic có tính toán và ý thức. Trong một loạt thí nghiệm tâm lý mang tính tiên phong, Kahneman và Tversky chứng minh rằng, con người chúng ta thường đi đến quyết định theo cơ chế nghĩ nhanh hơn là ghĩ chậm. Phần lớn nội dung của cuốn sách chỉ ra những sai lầm của con người khi suy nghĩ theo hệ thống 1. Kahneman chứng minh rằng chúng ta tệ hơn những gì chúng ta tưởng: đó là chúng ta không biết những gì chúng ta không biết!\r\nCuốn sách đặc biệt đã dành được vô số giải thưởng danh giá: Sách khoa học hay nhất của Học viện Khoa học Quốc gia năm 2012, được tạp chí The New York Times bình chọn là sách hay nhất năm 2011, một trong những cuốn sách kinh tế xuất sắc năm 2011, chiến thắng giải thưởng cuốn sách được quan tâm nhất năm 2011 của tạp chí Los Algeles… Tư duy nhanh và chậm đáp ứng hai tiêu chí của một cuốn sách hay, thứ nhất nó thách thức quan điểm của người đọc, thứ hai, nó không phải là những trang sách với những con chữ khô cứng mà nó vô cùng vui nhộn và hấp dẫn. '),
(10, 'Cà phê cùng Tony', 4, 30000, 'CaPheTony_B.jpg', 'Tác giả: Tony Buổi Sáng\r\nLoại bìa: Bìa mềm\r\nSố trang: 266\r\n\r\nGiới thiệu về sách:\r\nTập bài viết truyền cảm hứng của tác giả Tony Buổi Sáng gửi cho các bạn trẻ. Những câu chuyện đời, chuyện làm người, lập nghiệ kể bằng giọng văn trào phúng.'),
(11, '999 lá thư gửi cho chính mình - 2 tập', 4, 35000, 'lathuguiminh.jpg', 'Tác giả: Miêu Công Tử\r\nKích thước: 12.5x18 cm\r\nDịch giả: Quỳnh Nhi\r\nLoại bìa: Bìa mềm\r\nSố trang: 432\r\n\r\nGiới thiệu về sách:\r\n“999 lá thư gửi cho chính mình” là một tác phẩm đặc biệt đầy cảm hứng đến từ tác giả văn học mạng nổi tiếng Miêu Công Tử, mang một màu sắc riêng biệt qua những lời thư nhỏ nhắn nhủ đến người đọc về giá trị cuộc sống, tình yêu, tuổi trẻ, tương lai… đã làm lay động trái tim của hàng vạn độc giả trẻ. Cầm trên tay cuốn sách “999 lá thư gửi cho chính mình” – bạn sẽ hiểu rằng: tuổi trẻ của chúng ta dù có mong manh đến đâu thì cũng sẽ thành công vượt qua mọi khó khăn một cách mạnh mẽ ngoài sức tưởng tượng. Một ngày nào đó, bạn sẽ cảm nhận được hạnh phúc, tự tin của chính bản thân và học được cách mỉm cười trước những nỗi đau của quá khứ. Bạn sẽ biết cách nói lời cảm ơn với những ai đã rời bỏ bạn, hiểu ra rằng họ không phải người thích hợp để cùng đồng hành với bạn trên đoạn đường chông gai đi tới tương lai. Đôi lúc bạn có thể yếu đuối mỏi mệt rơi nước mắt, thế nhưng khi bất chợt nhìn lại, bạn sẽ thấy thì ra mình đã rất mạnh mẽ, dũng cảm đi hết cả một quãng đường dài.\r\n“999 lá thư gửi cho chính mình” – Mong bạn trở thành phiên bản hoàn hảo nhất và cũng là phiên bản hạnh phúc nhất của bản thân. Hãy để cuốn sách trở thành “kim chỉ nam” của bạn trong cuộc sống, giúp bạn luôn nhớ và khẳng định rằng việc nỗ lực quan trọng như thế nào trong cuộc sống, để bạn giống như một đóa hướng dương kiên cường hướng về phía mặt trời, hấp thu những năng lượng tích cực, sống tốt một cuộc sống mà mình hằng mong ước.'),
(12, 'Tin vào chính mình(Song ngữ Anh-Việt)', 5, 25000, 'tinvaochinhminh.jpg', 'Tác Giả: Louise L. Hay\r\nKích thước: 14.5x20.5 cm\r\nSố trang: 160\r\n\r\nGiới thiệu về sách:\r\nĐây là sách song ngữ Anh-Việt, bạn có thể tìm đọc để giúp  cải thiện thêm tiếng Anh.\r\nTin Vào Chính Mình hướng dẫn bạn tập trung vào thái độ sống và sử dụng sức mạnh của sự tự khẳng định để vượt qua những khó khăn, hàn gắn những vết thương và vươn lên trong cuộc sống. Cuốn sách còn giúp bạn nhìn nhận rõ bản thân mình hơn để định hướng suy nghĩ đối với mọi vấn đề trong cuộc sống.\r\nDù cuộc sống vẫn đang gặp nhiều khó khăn, thất bại, chưa được như bạn mong muốn; nhưng ngay từ bây giờ, từ giây phút hiện tại này bạn có thể thay đổi tất cả bằng những suy nghĩ hoặc ngôn từ mà bạn diễn đạt. Khi làm được như thế, bạn sẽ thấy mọi thứ trong cuộc sống của bạn cũng sẽ thay đổi theo vì đây là điểm bắt đầu của mọi con đường dẫn đến sự thay đổi.\r\nKhoảnh khắc bạn đang thực sự sống chính là khoảnh khắc của hiện tại. Đó là thời điểm duy nhất mà bạn có quyền và có thể kiểm soát mọi thứ. “Ngày hôm qua đã là lịch sử, ngày mai vẫn còn là điều bí ẩn, chỉ có hôm nay mới là một món quà, đó là lý do vì sao chúng ta gọi hiện tại là quà tặng của cuộc sống.” Hãy bắt đầu bằng cách cảm nhận những điều tốt đẹp ngay vào lúc này, bạn sẽ có được những giây phút tươi sáng và tràn đầy niềm vui trong tương lai.\r\nĐây là một cuốn sách hay, ý nghĩa và hữu ích cho bạn đọc mọi lứa tuổi, như một người bạn chia sẻ với bạn mọi khía cạnh trong cuộc sống, và bạn sẽ có thêm điểm tựa cho cuộc đời mình. Đây được gọi là cuốn sách có thể làm thay đổi cuộc sống của bạn.\r\nMột khi bạn thay đổi suy nghĩ theo chiều hướng tích cực hơn, chắc chắn bạn sẽ tạo được thay đổi lớn trong mọi lĩnh vực của cuộc sống.'),
(13, 'Hoàng tử bé(Song ngữ Anh-Việt)', 5, 50000, 'HoangTuBe_EV_B.webp', 'Tác giả: Antoine de Saint-exupéry\r\n\r\nGiới thiệu về sách:\r\nHoàng tử bé được xuất bản lần đầu năm 1943 của nhà văn, phi công người Pháp Antoine de Saint-exupéry là một trong những cuốn tiểu thuyết kinh điển nổi tiếng nhất mọi thời đại. Câu chuyện ngắn gọn về cuộc gặp gỡ diệu kỳ giữa viên phi công bị rơi máy bay và Hoàng tử bé giữa sa mạc Sa-ha-ra hoang vu. Hành tinh quê hương và các mối quan hệ của hoàng tử bé dần hé lộ: Tình bạn, tình yêu thương của Hoàng tử bé dành cho bông hồng duy nhất, tình cảm sâu sắc dành cho chú cáo.\r\nKhông những vậy, thông qua các cuộc gặp gỡ trong chuyến du ngoạn tới các hành tinh khác nhau của hoàng tử bé cũng chứa đựng triết lý nhân sinh sâu sắc về các kiểu người trong xã hội hiện đại.\r\nThật không ngoa khi khẳng định, mỗi câu chữ trong cuốn sách này đều đầy triết lý và mỗi người, mỗi lứa tuổi và mỗi hoàn cảnh khi đọc sẽ có những cảm nhận riêng.\r\nĐiểm khác biệt của phiên bản song ngữ Việt-Anh này so với các phiên bản khác có trên thị trường:\r\nPhần tiếng Anh là bản dịch của Katherine Wood – một bản dịch vô cùng được yêu thích bởi những người nói tiếng Anh trên khắp thế giới.\r\nĐây là phiên bản Hoàng tử bé song ngữ Anh-Việt duy nhất có kết hợp chọn từ vựng tiếng Anh giúp các em nhỏ học tiếng Anh, giải trí, tăng vốn từ vựng với những đoạn hội thoại đậm chất văn học, nuôi dưỡng và rèn luyện trí thông m.ình cảm xúc (EQ) và cảm nhận tác phẩm kinh điển này bằng cả hai thứ tiếng.\r\nTrình bày song song hai ngôn ngữ giúp học tiếng Anh (hoặc người nước ngoài học tiếng Việt) một cách dễ dàng cùng phần ghi chú từ vựng vô cùng sáng tạo, độc đáo.'),
(14, '999 lá thư gửi cho chính mình(Song ngữ Trung-Việt)', 6, 60000, 'LaThu_CV_B.webp', 'Tác giả: Miêu Công Tử\r\nKích thước: 12.5 x 18 cm\r\nDịch giả: Quỳnh Nhi\r\nLoại bìa: Bìa mềm\r\nSố trang: 164\r\n\r\nGiới thiệu về sách:\r\nBạn có đang cảm thấy bị “quá tải” với cuộc sống hiện tại không?\r\nHay là đang loay hoay chữa lành giữa những bộn bề không thể gác lại, chỉ trực chờ để cuốn mình đi?\r\nĐã bao lâu rồi bạn chưa ngồi xuống viết những dòng nhật ký, đã bao lâu rồi bạn chưa tự gửi cho mình một lá thư viết ra những điều bạn mong muốn, viết ra những ước mơ còn dang dở, viết ra những khó khăn bạn đã hoặc đang phải trải qua và cũng không quên động viên, cổ vũ chính mình của hiện tại, nhắn nhủ đến chính mình của tương lai…\r\nTheo dòng chảy hối hả của cuộc sống hiện nay – khi mỗi một ngày đều trôi qua nhanh chóng nhưng chẳng đọng lại được điều gì thì việc viết lách hay nhắn nhủ những lời tâm tình cho nhau càng trở thành một điều xa xỉ, dường như chẳng mấy ai nguyện làm. Nhưng không sao hết, đã có “999 lá thư gửi cho chính mình” – với Phiên bản chọn lọc, tổng hợp lại những lá thư hay nhất, những lá thư ý nghĩa nhất, chất chứa nội hàm, khả năng chữa lành cao sẽ thay những lá thư tay nói lên những điều bạn muốn giãi bày mà không thể cất tiếng, những điều trong lòng bạn chẳng biết thổ lộ với ai, cùng banj tìm lại ý nghĩa cuộc sống, tìm lại bản thân, tìm lại cả ước mơ và nhiệt huyết mà bạn đã lỡ đánh rơi trên con đường trưởng thành vội vã.\r\nVà cũng không chỉ dừng lại ở việc mang nội dung ý nghĩa, sâu sắc nhất, những lá thư được chọn lọc kỹ càng trong sách còn được trình bày dưới phương thức song ngữ Trung – Việt như một cách biểu đạt trọn vẹn tâm tư và tình cảm của tác giả đến với độc giả, để cuốn sách không chỉ là một phương thuốc chữa lành hữu hiệu cho tâm hồn mà còn là một ấn phẩm tuyệt vời cho việc trau dồi ngoại ngữ, bổ sung kiến thức, để bạn không chỉ có một vẻ ngoài rạng rỡ mà còn tỏa sáng cả trong nội tâm, làm một người không chỉ mạnh mẽ còn có tài hoa, giúp bạn nở rộ, làm chủ sinh mệnh của chính mình.'),
(17, 'Demian-Tuổi trẻ băn khoăn', 2, 80000, 'demian.jpg\"', 'Tác giả: Hermann Hesse\r\nDịch giả: Cao Vân Anh\r\nKích thước: 13x20cm\r\nSố trang: 270\r\n\r\nGiới thiệu về sách:\r\nNhững băn khoăn trăn trở của tuổi trẻ về con người và thế giới, dù ở thời đại nào cũng có điểm tương tự. Thời điểm chuyển từ thiếu niên sang trưởng thành là lúc người ta đặt nhiều câu hỏi nhất cho chính mình và thế giới. Những hình ảnh, nhân vật, diễn biến trong truyện đều mang tính đại diện, phản ánh cảm nhận về thế giới của nhân vật: tốt và xấu, cám dỗ, tội lỗi, sự tự do...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'user', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_cate_id` FOREIGN KEY (`cate_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
