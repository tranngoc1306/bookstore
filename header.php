<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">BookStories</a>

         <nav class="navbar">
            <a href="home.php">Trang Chủ</a>
            <a href="shop.php">Sách</a>
            <a href="blog.php">Blog</a>
            <a href="orders.php">Đơn Hàng</a>
            <a href="about.php">Giới Thiệu</a>
            <a href="login.php">Đăng Nhập</a> 
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('Query Failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
               <a href="cart.php"> <i class="fas fa-shopping-cart" style="display: inline-block;"></i> <span class="order-number"><?php echo $cart_rows_number; ?></span> </a>
         </div>

         <div class="user-box">
            <p>Username: <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>
      </div>
   </div>

</header>