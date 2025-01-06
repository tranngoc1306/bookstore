<?php

include 'conn.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('Query Failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Tin Nhắn Đã Được Gửi!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('Query Failed');
      $message[] = 'Tin Nhắn Đã Gửi Thành Công!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Liên Hệ | BookStories</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" type="image/x-icon" href="images/logo.png">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3 style="color: white;">Liên Hệ Với Chúng Tôi</h3>
</div>

<section class="contact">

   <form action="" method="post">
      <h3>Chúng Tôi Có Thể Giúp Gì Cho Bạn?</h3>
      <input type="text" name="name" required placeholder="Nhập Tên Của Bạn" class="box">
      <input type="email" name="email" required placeholder="Email" class="box">
      <input type="number" name="number" required placeholder="Số Điện Thoại" class="box">
      <textarea name="message" class="box" placeholder="Tin Nhắn" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="Gửi Tin Nhắn" name="send" class="btn">
   </form>

</section>








<?php include 'footer.php'; ?>
<script src="js/script.js"></script>

</body>
</html>