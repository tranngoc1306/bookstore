<?php

include 'conn.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'Đã Được Thêm Vào Giỏ Hàng!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'Thêm Vào Giỏ Hàng Thành Công!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thế giới của sách - Câu chuyện của bạn</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" type="image/x-icon" href="images/logo.png">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Chào mừng đến với BookStories</h3>
      <p>Khám Phá Những Cuốn Sách Yêu Thích!</p>
      <p>Hiểu cách sống, hành động và lý do đằng sau được thể hiện qua niềm đam mê đọc sách.</p>
      <a href="shop.php" class="white-btn">Khám Phá Ngay</a>
   </div>

</section>

<section class="products">

   <h1 class="title">Sách Mới</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products`ORDER BY id DESC LIMIT 6") or die('Query Failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">&nbsp;<?php echo $fetch_products['price']; ?> VNĐ</div>
      <a href="details.php?id=<?php echo $fetch_products['id']; ?>" target="_blank">Xem Chi Tiết</a>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="Thêm vào giỏ hàng" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">Chưa có sách thêm vào!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">Xem Thêm</a>
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



<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/slide/slide4.jpg" alt="">
      </div>

      <div class="content">
         <h3>Giới thiệu về BookStories</h3>
         <p>
            <strong>BookStories</strong> - không gian dành cho những người yêu sách, nơi bạn có thể tìm những cuốn sách hay và
            khám phá những bài viết truyền cảm hững về sách.
         </p>
         <p>
            <strong>BookStories</strong> đồng hành cùng bạn trên hành trình khám phá tri thức và nuôi dưỡng tâm hồn qua những cuốn sách ý nghĩa.
         </p>
         <a href="about.php" class="btn">Đọc Thêm</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>Chia Sẻ Với Chúng Tôi?</h3>
      <p>Chúng tôi ở đây để hỗ trợ bạn theo bất kỳ cách nào bạn muốn!</p>
      <a href="contact.php" class="white-btn">LIên Hệ Với Chúng Tôi</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>