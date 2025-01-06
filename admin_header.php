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

   <div class="flex">

      <a href="admin_page.php" class="logo">Trang Quản Trị</a>

      <nav class="navbar">
         <a href="admin_page.php">Trang Chủ</a>
         <a href="admin_products.php">Kho Hàng</a>
         <a href="admin_orders.php">Đơn Hàng</a>
         <a href="admin_users.php">Người Dùng</a>
         <a href="admin_contacts.php">Tin Nhắn</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>Tên Người Dùng : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>Email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">Thoát</a>
         <div>Mới <a href="login.php">Đăng Nhập</a> | <a href="register.php">Đăng Ký</a></div>
      </div>

   </div>

</header>