<?php

include 'conn.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['order_btn'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $number = $_POST['number'];
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $method = mysqli_real_escape_string($conn, $_POST['method']);
   $address = mysqli_real_escape_string($conn, ''. $_POST['flat'].', '. $_POST['street'].', '. $_POST['city'].', '. $_POST['country'].' - '. $_POST['note']);
   $placed_on = date('d-M-Y');

   $cart_total = 0;
   $cart_products[] = '';

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('Query Failed');
   if(mysqli_num_rows($cart_query) > 0){
      while($cart_item = mysqli_fetch_assoc($cart_query)){
         $cart_products[] = $cart_item['name'].' ('.$cart_item['quantity'].') ';
         $sub_total = ($cart_item['price'] * $cart_item['quantity']);
         $cart_total += $sub_total;
      }
   }

   $total_products = implode(', ',$cart_products);

   $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE name = '$name' AND number = '$number' AND email = '$email' AND method = '$method' AND address = '$address' AND total_products = '$total_products' AND total_price = '$cart_total'") or die('Query Failed');

   if($cart_total == 0){
      $message[] = 'Giỏ Hàng Của Bạn Trống!';
   }else{
      if(mysqli_num_rows($order_query) > 0){
         $message[] = 'Đơn Hàng Đã Được Đặt!'; 
      }else{
         mysqli_query($conn, "INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price, placed_on) VALUES('$user_id', '$name', '$number', '$email', '$method', '$address', '$total_products', '$cart_total', '$placed_on')") or die('Query Failed');
         $message[] = 'Đặt Hàng Thành Công!';
         mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('Query Failed');
      }
   }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thanh Toán | BookStories</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" type="image/x-icon" href="images/logo.png">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3 style="color: white;">Thanh Toán</h3>
</div>

<section class="display-order">

   <?php  
      $grand_total = 0;
      $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('Query Failed');
      if(mysqli_num_rows($select_cart) > 0){
         while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total += $total_price;
   ?>
   <p> <?php echo $fetch_cart['name']; ?> <span>(<?php echo $fetch_cart['price'].' '.'VNĐ'.' '.' x '. $fetch_cart['quantity']; ?>)</span> </p>
   <?php
      }
   }else{
      echo '<p class="empty">Giỏ Hàng Của Bạn Đang Trống!</p>';
   }
   ?>
   <div class="grand-total"> Tổng Cộng : <span><?php echo $grand_total; ?></span> VNĐ</div>

</section>

<section class="checkout">

   <form action="" method="post">
      <h3>Thông Tin Đặt Hàng Của Bạn</h3>
      <div class="flex">
         <div class="inputBox">
            <span>Tên :</span>
            <input type="text" name="name" required placeholder="Nhập Tên Của Bạn">
         </div>
         <div class="inputBox">
            <span>Số Điện Thoại :</span>
            <input type="text" name="number" required placeholder="Nhập Số Điện Thoại Của Bạn">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" name="email" required placeholder="Nhập Email Của Bạn">
         </div>
         <div class="inputBox">
            <span>Phương Thức Thanh Toán :</span>
            <select name="method">
               <option value="Thanh Toán Khi Nhận Hàng">Thanh Toán Khi Nhận Hàng</option>
               <option value="VN Pay">VN Pay</option>
            
            </select>
         </div>
         <div class="inputBox">
            <span>Địa Chỉ:</span>
            <input type="text" name="flat" required placeholder="VD. Số Nhà/Thôn">
         </div>
         <div class="inputBox">
            <span>Địa Chỉ:</span>
            <input type="text" name="street" required placeholder="VD. Tên Đường/Xã">
         </div>
         <div class="inputBox">
            <span>Quận/Huyện:</span>
            <input type="text" name="district" required placeholder="VD. Cầu Giấy/Kiến Xương">
         </div>
         <div class="inputBox">
            <span>Thành Phố/Tỉnh:</span>
            <input type="text" name="city" required placeholder="VD. Hà Nội/Thái Bình">
         </div>
         <div class="inputBox">
            <span>Quốc Gia:</span>
            <input type="text" name="country" required placeholder="VD. Việt Nam">
         </div>
         <div class="inputBox">
            <span>Ghi Chú:</span>
            <input type="text" name="note" required placeholder="Lưu Ý Dành Cho Người Bán">
         </div>
      </div>
      <input type="submit" value="Đặt Hàng Ngay" class="btn" name="order_btn">
   </form>

</section>


<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>