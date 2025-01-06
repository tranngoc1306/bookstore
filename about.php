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
   <title>Giới Thiệu | BookStories</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" type="image/x-icon" href="images/logo.png">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3 style="color: white;">Về BookStories</h3>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-us.jpg" alt="img">
      </div>

      <div class="content">
         <h3>BookStories </h3>
         <i style="font-size: 14px;">Thế Giới Của Sách - Câu Chuyện Của Bạn</i>
                     <p>
                        Xin chào bạn, chào mừng bạn đến với <strong>BookStories</strong> - không gian dành cho những người yêu sách, nơi bạn có thể tìm những cuốn sách hay
                        và khám phá những bài viết truyền cảm hứng về sách.
                     </p>
                     <h2>Sứ Mệnh Của Chúng Tôi</h2>
                     <p>
                        Với niềm đam mê và tình yêu sâu sắc dành cho sách, <strong>BookStories</strong> ra đời với 
                        mục tiêu mang đến cho độc giả:
                     </p>

                     <ul>
                           <li>Kho tàng sách phong phú: Nhiều thể loại sách được sưu tầm.</li>
                           <li>Nội dung chia sẻ giá trị: Những bài viết, cảm nhận, review sách giúp bạn lựa chọn được cuốn sách phù 
                              hợp và khơi nguồn đam mê đọc sách.
                           </li>
                     </ul>

                     <h2>Tại Sao Bạn Nên Chọn BookStories</h2>
                     <ol>
                        <li>Dễ dàng tìm kiếm và mua sách: Với giao diện thân thiện và tiện lợi,
                           bạn có thể tìm thấy sách yêu thích chỉ trong vài cú nhấp chuột.
                        </li>
                        <li>Nội dung chất lượng, đa dạng: Chúng tôi chia sẻ những bài viết chọn lọc về sách,
                           từ đánh giá sách, giới thiệu tác giả, đến các câu chuyện thú vị đằng sau những tác phẩm hay.
                        </li>
                        <li>Sách cho mọi lứa tuổi: Chúng tôi tin rằng sách là người bạn đồng hành quý giá cho tất cả mọi người,
                           từ trẻ em, học sinh, sinh viên cho đến người đi làm.
                        </li>
                     </ol>

                     <h2>Hãy Cùng Lan Tỏa Niềm Đam Mê Đọc Sách</h2>
                     <p>
                        <strong>BookStories</strong> không chỉ là nơi mua sách mà còn là ngôi nhà chung của cộng đồng yêu sách.
                        Tại đây bạn có thế:
                     </p>
                     <ul>
                        <li><strong>Khám phá kiến thức mới</strong> qua từng trang sách.</li>
                        <li><strong>Trao đổi và chia sẻ cảm nhận</strong> cùng những người có chung niềm đam mê.</li>
                        <li><strong>Khơi dậy cảm hứng đọc sách</strong> trong nhịp sống hiện đại với tràn ngập thiết bị điện tử.</li>
                     </ul>

                     <p>Hãy để <strong>BookStories</strong> đồng hành cùng bạn trên hành trình khám phá tri thức và nuôi dưỡng tâm hồn qua những cuốn sách ý nghĩa.</p>
         <a href="contact.php" class="btn">Chạm Với Chúng Tôi!</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Trích Dẫn Hay</h1>

   <div class="box-container">

      <div class="box">
         <p>"Nếu bạn chỉ đọc những cuốn sách mà tất cả mọi người đều đọc, bạn chỉ có thể nghĩ tới điều mà tất cả mọi người đều nghĩ tới."</p>
         <h3>SHaruki Murakami</h3>
      </div>

      <div class="box">
         <p>"Hãy tiếp tục đọc sách, nhưng hãy nhớ rằng một cuốn sách chỉ là một cuốn sách và bạn nên học cách nghĩ cho bản thân."</p>
         <h3>Maxim Gorky</h3>
      </div>

      <div class="box">
         <p>"Những người khôn ngoan tìm được sự an ủi khỏi những rắc rối của cuộc đời chính từ sách"</p>
         <h3>Victor Hugo</h3>
      </div>

      <!--<div class="box">
         <p>"Tất cả những gì con người làm, nghĩ hoặc trở thành: được bảo tồn một cách kỳ diệu trên những trang sách"</p>
         <h3>Thomas Carlyle</h3>
      </div>-->

   </div>

</section>


<?php include 'footer.php'; ?>

<!-- JS link -->
<script src="js/script.js"></script>

</body>
</html>