<?php

include 'conn.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_users.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Người Dùng | BookStories</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/admin_style.css">
   <link rel="icon" type="image/x-icon" href="images/logo.png">

</head>
<body>

<?php include 'admin_header.php'; ?>   

<section class="users">
   <h1 class="title"> Người Dùng</h1>

   <div class="box-container">
      <?php 
         $select_user = mysqli_query($conn, "SELECT * FROM `users`") or die ('query failed');
         if(mysqli_num_rows($select_user) > 0){
            while($fetch_user = mysqli_fetch_assoc($select_user)){
      
      ?>
      <div class="box">
         
         <p> Tên : <span><?php echo $fetch_user['name']; ?></span> </p>
         
         <p> Email : <span><?php echo $fetch_user['email']; ?></span> </p>
         <p> Kiểu Người Dùng : <span><?php echo $fetch_user['user_type']; ?></span> </p>
         <a href="admin_contacts.php?delete=<?php echo $fetch_user['id']; ?>" onclick="return confirm('Bạn Chắc Chắn?');" class="delete-btn">Xóa </a>
      </div>
      <?php
         };
      }else{
         echo '<p class="empty">Chưa Có Người Dùng!</p>';
      }
      ?>
   </div>
</section>

<script src="js/admin_script.js"></script>

</body>
</html>