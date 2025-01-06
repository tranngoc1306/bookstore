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
   <h3 style="color: white;">Bài Viết</h3>
</div>

<section class="blog">

   <div class="flex">

      <div class="content">
        <div class="row">
            <div class="col">
                <div class="img_col">
                    <a href="review_nha_gia_kim.php" target="_blank"><img src="images/review-sach-nha-gia-kim-ve.png" alt=""></a>
                </div>
                <div class="blog_col">
                    <a href="review_nha_gia_kim.php" target="_blank">
                        <h4>Nhà Giả Kim - một cuốn sách đi để trở về</h4>
                    </a>
                    <i>By Hà Minh Thư - 31/3/2023</i>
                    <p >Cuốn sách "Nhà Giả Kim" của tác giả Paulo Coelho đã từng được mệnh danh là "bản tình ca về cuộc đời" và trở thành một trong những tác phẩm văn học được yêu thích nhất mọi thời đại. 
                        Bản thân tôi đã từng đọc cuốn sách này vào thời đại học. Nhưng tại thời điểm non trẻ và chưa có nhiều trải nghiệm trong đời, tôi mới chỉ nhìn nhận được một khía cạnh nhỏ trong cuốn 
                        sách: đó là sự cố gắng không ngừng nghỉ để thực hiện mục tiêu. <a href="review_nha_gia_kim.php" target="_blank" title="Xem Thêm">Xem Thêm</a>
                    </p>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="img_col">
                <a href="review-tiem-tap-hoa.php" target="_blank"><img src="images/review-tiem-tap-hoa.webp" alt=""></a>
                </div>
                <div class="blog_col">
                    <a href="review-tiem-tap-hoa.php" target="_blank">
                        <h4>Điều Kỳ Diệu Của Tiệm Tạp Hóa Namiya-Higashino Keigo</h4>
                    </a>
                    <i>By Hà Thu - 15/09/2023</i>
                    <p >Sau “Bạch Dạ Hành”, “Phía Sau Nghi Can X”, “Bí Mật Của Naoko”, Higashino Keigo được biết đến là nhà văn viết truyện trinh thám xuất sắc của nền văn học Nhật Bản.  
                        “Điều Kỳ Diệu Của Tiệm Tạp Hóa Namiya”, khác với những tác phẩm trinh thám trước của ông, là một câu chuyện bình dị, ấm áp nhưng ẩn chứa một nỗi buồn man mác.    
                    <a href="review-tiem-tap-hoa.php" target="_blank" title="Xem Thêm">Xem Thêm</a>
                    </p>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="img_col">
                    <a href="" target="_blank"><img src="images/review-tam-the.jpg" alt=""></a>
                </div>
                <div class="blog_col">
                    <a href="" target="_blank">
                        <h4>Tam Thể (toàn bộ trilogy)-biên niên sử tương lai của vũ trụ</h4>
                    </a>
                    <i>15/03/2021</i>
                    <p >Tam Thể là tên cuốn đầu tiên trong bộ trilogy tiểu thuyết của Lưu Từ Hân. Đây là một series Hard Sci Fi Trung Quốc, lấy nền tảng là Nghịch lí Fermi (nếu người ngoài hành tinh có tồn tại thì sao mãi chẳng thấy ai thò mặt ra vậy?) 
                    và cuộc tiếp xúc lần đầu giữa con người và một nền văn minh tiên tiến ngoài hành tinh. Từ đấy, 
                    Tam Thể phát triển lên thành cả một bộ biên niên sử đồ sộ phi thường, chiêm nghiệm về tương lai của nhân loại nói riêng và vũ trụ nói chung.
                    <a href="" target="_blank" title="Xem Thêm">Xem Thêm</a>
                    </p>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="img_col">
                    <a href="review-tu-duy-nhanh-cham.php" target="_blank"><img src="images/review-tu-duy-nhanh-cham.jpg" alt=""></a>
                </div>
                <div class="blog_col">
                    <a href="review-tu-duy-nhanh-cham.php" target="_blank">
                        <h4>Tư Duy Nhanh Và Chậm-Daniel Kahneman</h4>
                    </a>
                    <i>15/10/2023</i>
                    <p >Nếu bạn đang trên đường tìm hiểu về tư duy và tâm lý con người, thì cuốn sách Tư duy nhanh và chậm của Daniel Kahneman sẽ mang đến cho bạn những kiến thức rất hay và bổ ích.
                    Tuy nội dung của cuốn sách chỉ xoay quanh về chủ đề tâm lí và kinh tế học hành vi, thế nhưng nó không hề mang lại cảm giác nhàm chán mà còn tạo nên sự thu hút với người đọc.
                    Tư duy nhanh và chậm ra mắt lần đầu vào năm 2011. Là cuốn sách dành được vô số giải thưởng danh giá và được tạp chí The New York Times bình chọn là sách hay nhất năm 2011, là một trong những đầu sách kinh tế xuất sắc 2011.
                    <a href="review-tu-duy-nhanh-cham.php" target="_blank" title="Xem Thêm">Xem Thêm</a>
                    </p>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="img_col">
                    <a href="blogs_1.php" target="_blank"><img src="images/read1.jpg" alt=""></a>
                </div>
                <div class="blog_col">
                    <a href="blogs_1.php" target="_blank">
                        <h4>Chat GPT rất giỏi trong việc tóm tắt sách. Nhưng liệu AI có bao giờ viết được một tác phẩm văn học dích thực?</h4>
                    </a>
                    <i>By Trạm Đọc</i>
                    <p >Bất kỳ ai đã sử dụng các chương trình AI như ChatGPT trong vài tháng gần đây đều biết rằng chúng rất giỏi trong việc tóm tắt sách và viết các thư xin việc theo mẫu, nhưng liệu chúng có thể tạo ra những 
                        tác phẩm khiến chúng ta xúc động và chạm đến tâm hồn hay không?
                    <a href="blogs_1.php" target="_blank" title="Xem Thêm">Xem Thêm</a>
                    </p>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="img_col">
                    <a href="" target="_blank"><img src="images/haruki_murakami.jpg" alt=""></a>
                </div>
                <div class="blog_col">
                    <a href="" target="_blank">
                        <h4>10 cuốn sách xuất sắc của Haruki Murakami</h4>
                    </a>
                    <i>By Matthew Carl Strecher-Trạm Đọc</i>
                    <p >Ta biết gì thêm về Haruki Murakami, bên cạnh "Rừng Nauy" hay "Phía Nam biên giới, phía Tây mặt trời"? Matthew Carl Strecher, 
                        tác giả của ba cuốn sách nghiên cứu về Haruki Murakami, đưa ra 10 cuốn sách xuất sắc nhất trong sự nghiệp tiểu thuyết đầy tiếng vang của vị tác giả nổi tiếng này.
                    <a href="" target="_blank" title="Xem Thêm">Xem Thêm</a>
                    </p>
                    
                </div>
            </div>
        </div>
      
            
         <a href="contact.php" class="btn">Liên Hệ Với Chúng Tôi!</a>
      </div>

   </div>

</section>


<?php include 'footer.php'; ?>

<!-- JS link -->
<script src="js/script.js"></script>

</body>
</html>