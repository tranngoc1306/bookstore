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
         <h3>Tư duy nhanh và chậm-Daniel Kahneman </h3>
      
            <p>
            Nếu bạn đang trên đường tìm hiểu về tư duy và tâm lý con người, thì cuốn sách Tư duy nhanh và chậm của Daniel Kahneman sẽ mang đến cho bạn những kiến thức rất hay và bổ ích.Tuy nội dung
            của cuốn sách chỉ xoay quanh về chủ đề tâm lí và kinh tế học hành vi, thế nhưng nó không hề mang lại cảm giác nhàm chán mà còn tạo nên sự thu hút với người đọc. Sự thành công của cuốn sách này đến từ đâu?
            </p>
            <h4>Cha đẻ của cuốn sách "Tư duy nhanh và chậm"</h4>
            <p>
            Daniel Kahneman là một nhà tiến sĩ và cũng chính là cha đẻ của cuốn sách tâm lí nổi tiếng này, ông từng công tác với vai trò là một học giả và nhà tâm lý học ở
            nhiều ngôi trường danh tiếng: Wooodrow Wilson, đại học Princeton... Ông được trao giải thưởng Nobel Kinh tế vào năm 2012.
            </p>
            <p>
            Trong công tác sự nghiệp của mình, ông được nhiều người biết dến thông qua cuốn sách "Tư duy nhanh và chậm"( Thinking fast and slow). Cuốn sách này chứa
            đựng nhiều nghiên cứu liên quan đến tâm lý học được tiến sĩ Daniel Kahneman nghiên cứu và tìm hiểu trong suốt hàng chục năm qua.
            </p>
            <h4>Tác phẩm Tư duy nhanh và chậm</h4>
            <p>
            Tư duy nhanh và chậm ra mắt lần đầu vào năm 2011. Là cuốn sách dành được vô số giải thưởng danh giá và được tạp chí The New York Times bình chọn là sách hay nhất năm 2011, là một trong những đầu sách kinh tế xuất sắc 2011....
            </p>
            <p>
            Cuốn sách đã ghi chép, tóm gọn lại hàng thập niên nghiên cức về lĩnh vực tâm lí và kinh tế học hành của ông.
            </p>
            <h4>Review sách " Tư duy nhanh và chậm"</h4>
            <img src="uploaded_img/ThinkingFastAndSlow_B.webp" alt="">
            <p>
            Tư duy nhanh và chậm được chia thành 5 phần, gồm có:
            </p>
            <p>Phần 1: Hai hệ thống</p>
            <p>Phần 2: Suy nghiệm và sai lệch</p>
            <p>Phần 3: Niềm tin thái quá</p>
            <p>Phần 4: Những lựa chọn</p>
            <p>Phần 5: Hai bản thể</p>
            <h4>Phần 1: Hai hệ thống</h4>
            <p>
            Trong khoảng vài thập kỉ trở về đây các nhà tâm lí học đã dành rất nhiều thời gian và công sức để nghiên cứu về hai hình thức tư duy của con người. Từ đó đưa ra luận điểm là tư duy có hai hệ thống tạm gọi là hệ thống 1 và hệ thống 2:
            </p>
            
            <p>
            -Hệ thống 1 hoạt động dựa trên cơ chế tự động, nhanh nhẹn và mau lẹ, với rất ít hoặc hầu như không cần cố gắng và không tự kiểm soát được
            </p>
            <p>
            -Hệ thống 2 sẽ huy động sự chú ý tới những hoạt động tư duy đòi hỏi sự nỗ lực, bao gồm những phép tính mang tính phức tạp. Cơ chế hoạt động của hệ thống 2
            thường sẽ đính kèm những kinh nghiệm chủ quan, đòi hỏi sự phân chia và lựa chọn của chủ thể.
            </p>
            <h4>Phần 2: Suy nghiệm và sai lệch</h4>
            <p>
            Hệ thống 1 không đa nghi, nó sẽ loại bỏ sự mơ hồ và tạo ra câu chuyện mạch lạc, rõ ràng nhất có thể. Nếu thông điệp mà nó đưa ra bị phủ nhận, các liên tưởng mà nó gợi ra sẽ được truyền đi như thể thông điệp đó là sự thật.
            </p>
            <p>
            Trái ngược với sự không đa nghi của hệ thống 1, hệ thống 2 lại mang chiều hướng hoài nghi, bởi nó có thể duy trì những khả năng xung đột lật nhau trong cùng 1
            thời điểm. Tuy vậy hoạt động duy trì sự hoài nghi này sẽ khó khăn hơn việc chuyển nó vào trạng thái chắc chắn.
            </p>  
            <h4>Phần 3: Niềm tin thái quá</h4> 
            <p>
            Bản chất thật sự của ảo tưởng chính là việc mà chúng ta tin tưởng rằng mình là một người có sư hiểu biết rất rõ quá khứ vì vậy mà chúng ta hoàn toàn có cơ sở để
            đưa ra những tiên đoán về tương lai. Nhưng trong thực tế thì không phải như thế, đại đa số chúng ta đều không hiểu hoặc nếu có thì rất ít hiểu biết về quá khứ.
            </p>
            <p>
            Ngoài "biết" thì "trực giác" và " linh cảm, linh tính" cũng được sử dụng để diễn tả những suy đoán, suy diễn trong quá khứ đã biến thành sự thực. Để suy nghĩ một
            cách rõ hơn về tương lai, ta cần loại bỏ hoàn toàn những ngôn từ mà mình sử dụng trong việc gán định những niềm tin mà chúng ta có trong quá khứ.
            </p>
            <h4>Phần 4:Những lựa chọn</h4>
            <p>
            Tất cả những lựa chọn mà chúng ta đưa ra trong cuộc sống sẽ luôn đi kèm với những bất trắc, rủi ro. Hầu hết con người ta không muốn mạo hiểm, nếu được cho
            một lựa chọn giữa trò may rủi và một điều chắc chắn thì co người ta thường có xu hướng chọn những gì chắc ăn để tránh những rủi ro không đáng gặp.
            </p>
            <h4>Phần 5: Hai bản thể</h4>
            <p>
            Bản thể trải nghiệm là đáp án cho câu hỏi:" Bây giờ có đau không?, bản thể hồi tưởng lại giải đáp cho câu :" Nó như thế nào?". Ký ức là tất cả những thứ ta thu
            nhận để cất giữ từ những trải nghiệp về cuộc sống và sự hồi tưởng duy nhất có thể chấp nhận khi ta nghĩ về cuộc sống của mình là bản hồi tưởng.
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