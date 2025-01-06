<?php

include 'conn.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog | BookStories</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/mystyle.css">
   <link rel="icon" type="image/x-icon" href="images/logo.png">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3 style="color: white;">Review</h3>
</div>

<section class="blogs">

   <div class="flex">

      <div class="content">
         <h3>ĐIỀU KỲ DIỆU CỦA TIỆM TẠP HÓA NAMIYA – Higashino Keigo </h3>
      
            <p>
            Sau “Bạch Dạ Hành”, “Phía Sau Nghi Can X”, “Bí Mật Của Naoko”, Higashino Keigo được biết đến là nhà văn viết truyện trinh thám xuất sắc của nền văn học Nhật Bản. “Điều Kỳ Diệu Của
            Tiệm Tạp Hóa Namiya”, khác với những tác phẩm trinh thám trước của ông, là một câu chuyện bình dị, ấm áp nhưng ẩn chứa một nỗi buồn man mác.
            </p>
            <p>
            Câu chuyện bắt đầu với Atsuya, Shota và Kouhei là ba tên thất học, vô công rỗi nghề đang bỏ chạy sau một phi vụ trộm cắp. Chúng tạm lánh vào tiệm tạp hóa cũ đã bị bỏ hoang từ lâu. Định chỉ ở đây một đêm rồi sáng mai rời đi, nào ngờ,
            những bức thư tư nhờ tư vấn được gửi tới, dù tiệm tạp hóa đã bị bỏ hoang từ hơn ba mươi năm trước. Đó quả là một điều kỳ diệu phải không nào? Những người đưa thư đều là những người từ quá khứ, thì tại sao họ lại có thể đến năm 2012 để gửi những bức thư đến được?
            </p>
            <img src="images/review-tam-the.jpg" alt="">
            <p>
            Trước đây, tiệm tạp hóa Namiya là một tiệm của một ông cụ chuyên nhận trả lời những bức thư tư vấn, gỡ rối. Ban đầu, cứ ngỡ là một trò đùa, những bức thư với nội dung tào lao, nghịch ngợm của bọn trẻ con được gửi đến nhằm châm chọc
            ông cụ. Tuy nhiên, ông cụ vẫn trả lời một cách nghiêm túc và tốt nhất có thể. Cách trả lời nghiêm túc, chân thành và có tâm khiến tiệm tạp hóa Namiya ngày càng được nhiều người biết đến rộng rãi hơn, và những bức thư nhờ tư vấn nghiêm túc cũng dần nhiều hơn.
            </p>
            
            <p>
            Một bức thư gửi đến từ “Nhạc sĩ cửa hàng cá” Matsuoka Katsuro. Anh là con trai của một gia đình có cửa hàng cá truyền thống, tuy nhiên, anh lại có một niềm đam mê lớn với âm nhạc. Katsuro say mê âm nhạc, thuyết phục cha mình để ông
            ấy cho đi học đàn guitar. Tuy nhiên, nghề chọn mình chứ mình không chọn nghề. Anh không có tiếng tăm, cũng như không có thành công nào khi làm nhạc sĩ. Cha lâm bệnh nặng vì đến mức phải sắp đóng cửa tiệm. Hay tiếp tục kiên trì theo
            đuổi giấc mơ nghệ thuật, hay trở về quê nhà tiếp nối truyền thống ba đời của gia đình, anh sẽ lựa chọn như thế nào?
            </p>
            <p>
            “Thỏ Ngọc cung trăng” Kitazawa Shizuko là một trong số những vận động viên sẽ được cử để tham gia Thế Vận Hội sắp tới. Thế Vận Hội là ước mơ lớn nhất của đời cô. Nhưng bỗng dưng, cô nghe được tin dữ là người yêu của mình cũng là
            huấn luyện viên của mình mắc bệnh ung thư vô phương cứu chữa. Cô rất muốn từ bỏ để chăm sóc người yêu của mình, nhưng đồng thời cô cũng rất muốn tham gia Thế Vận Hội và đạt được huy chương vàng làm rạng danh cả nước. Shizuko sẽ lựa chọn như thế nào?
            </p>
            <p>
            Kousuke là con trai của một gia đình giàu có, từ nhỏ đến lớn cậu không thiếu thốn bất cứ thứ gì. Tuy nhiên, cha của cậu làm ăn thua lỗ, bị tịch thu hết tài sản để trả nợ. Đến mức, cha của cậu bảo cả gia đình bỏ trốn. Kousuke không muốn
            bỏ trốn, cậu muốn gia đình mình xây dựng lại từ đầu, dù đó là mong ước rất khó để có thể trở thành hiện thực. Cậu ghét người cha mình từng rất ngưỡng mộ bây giờ. Và cuối cùng, trong một phút giây thiếu suy nghĩ, cậu đã tự mình đưa ra
            quyết định mà không ai có thể nghĩ đến. "Một mình bỏ trốn, bỏ lại gia đình".
            </p>
            <p>
            Cậu đã mất tích trong suốt bốn mươi năm trời. Chỉ vì một phút lầm lỡ, Kousuke đã đánh mất tất cả. Mất gia đình. Mất đi tình yêu thương. Câu chuyện của Kousuke có lẽ là câu chuyện đau lòng và chân thật nhất. Con người cũng vậy, chỉ
            vì một phút nhất thời không suy nghĩ mà có thể để lại một hậu quả to lớn mà ta không thể ngờ đến. Kousuke đã làm trái với lời khuyên của cụ Namiya, cho đến bốn mươi năm sau cậu mới hiểu được những gì cụ đã khuyên bảo, nhưng có lẽ
            tất cả đã quá muộn màng. Cả đời, Kousuke sẽ phải sống trong sự hối hận. Nếu lúc đó, cậu không bỏ trốn, thì có lẽ bây giờ cả gia đình đã có thể làm lại từ đầu.
            </p>
            
            <p>
            “Điều Kỳ Diệu Của Tiệm Tạp Hóa Namiya” là một câu chuyện kỳ ảo nhưng lại rất chân thật. Kỳ ảo vì những bức thư tay nhờ tư vấn từ hơn ba mươi năm trước bỗng dưng được gửi đến, nhưng lại chân thật vì nó đã phản ánh chân thật về
            những rắc rối và tính cách của con người. Khi đọc “Điều Kỳ Diệu Của Tiệm Tạp Hóa Namiya”, người đọc sẽ thấy chính bản thân của mình trong đó. Cũng như Katsuro, ta thấy ta vẫn đang chơi vơi trên con đường đời phải chọn giữa ước mơ
            hay về quê tiếp tục truyền thống của gia đình. Cũng như Kousuke, ta cũng đã từng vì một phút lầm lỡ mà đã đánh mất đi một mối quan hệ bền vững, để rồi phải hối hận. Atsuya, Shota và Kouhei, dù phải hành nghề trộm cắp, nhưng họ
            vẫn trả lời những bức thư tư vấn một cách rất có tâm và chân thành. Những lời tư vấn ấy phần nào đã giúp những người đang cần tư vấn cảm thấy nhẹ lòng hơn và có thể tìm ra được những hướng đi đúng đắn của cuộc đời mình.
            </p>
            <p>
            Với tài năng viết văn xuất sắc, Higashino Keigo đã khéo léo lồng ghép các câu chuyện tưởng chừng như không liên quan gì với nhau được kết nối chặt chẽ với nhau một cách đầy bất ngờ. Quá khứ, hiện tại, cả không gian và thời gian đều có
            mối liên hệ chặt chẽ, lối viết logic đưa người đọc đi từ bất ngờ này đến bất ngờ khác. Khi bạn có chuyện gì đó khó khăn, hãy cứ nói ra mọi tâm sự trong lòng bạn, cho dù đó là người lạ. Bạn sẽ nhận được những lời khuyên, những lời tư vấn chân thành. 
            Để biết rằng, bạn không cô đơn.
            </p>
           
            <p>
            Có bạn đùa rằng hôm nay ông Keigo yêu đời nên viết truyện cũng vui vẻ và nhẹ nhàng hơn. Có lẽ là như vậy, “Điều Kỳ Diệu Của Tiệm Tạp Hóa Namiya” không ám
            ảnh hay tăm tối như những tác phẩm trước, nhưng nó ấm áp, chân thật và sẽ giúp bạn cảm thấy hạnh phúc và nhẹ lòng hơn sau khi lật đến trang cuối cùng.
            </p>
            
         <a href="contact.php" class="btn">Liên Hệ Với Chúng Tôi!</a>
      </div>

   </div>

</section>


<?php include 'footer.php'; ?>

<!-- JS link -->
<script src="js/script.js"></script>

</body>
</html>