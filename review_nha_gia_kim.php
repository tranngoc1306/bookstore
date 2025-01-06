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
         <h3>Nhà Giả Kim-một cuốn sách đi để trở về </h3>
      
            <p>
            Cuốn sách "Nhà Giả Kim" của tác giả Paulo Coelho đã từng được mệnh danh là "bản tình ca về cuộc đời" và trở thành một trong những tác phẩm văn học được yêu thích nhất mọi thời đại.
            </p>
            <p>
            Bản thân tôi đã từng đọc cuốn sách này vào thời đại học. Nhưng tại thời điểm non trẻ và chưa có nhiều trải nghiệm trong đời, tôi mới chỉ nhìn
            nhận được một khía cạnh nhỏ trong cuốn sách: đó là sự cố gắng không ngừng nghỉ để thực hiện mục tiêu.
            </p>
            <p>
            Tuy nhiên, ở thời điểm hiện tại, tôi cho rằng đây là cuốn sách mà một người nên đọc đi đọc lại nhiều lần trong đời bởi có thể ở mỗi thời điểm, nó lại cho chúng ta một góc nhìn khác.
            Đối với tôi bây giờ, cuốn sách chính là câu chuyện hành trình “đi để trở về” của nhân vật Paulo Coelho cả về mặt vật lý và tinh thần. Anh ta đã trở về từ một cuộc phiêu lưu qua nhiều vùng
            đất khác nhau, đồng thời cũng trở về sâu thẳm trong tâm hồn để cảm nhận kho báu thật sự.
            </p>
            <h4>Kho báu thật sự ở đâu?</h4>
            <p>
            "Mỗi người đều có một kho báu riêng. Và kho báu đó không nằm ở những địa điểm xa xôi hay những nơi khác biệt, mà lại nằm trong chính con người đó."
            </p>
            <p>
            Đó là thông điệp chính của cuốn sách "Nhà Giả Kim". Paulo Coelho đã giúp chúng ta hiểu rõ hơn về việc tìm kiếm kho báu thật sự trong cuộc đời.
            </p>
            <p>
            Trong cuốn sách, nhân vật chính là Santiago đã rời bỏ cuộc sống bình thường của mình để tìm kiếm kho báu ở đất nước Ai Cập. Sau nhiều khó khăn và thử thách,
            Santiago đã nhận ra rằng kho báu thật sự không phải là những đồng tiền vàng, mà là sự trưởng thành, sự hiểu biết và sự tìm thấy chính mình.
            </p>
            <p>
            Đây cũng là thông điệp mà Santiago đã học được từ hành trình của mình. Kho báu thật sự của mỗi người nằm trong trái tim của họ và chỉ khi ta biết lắng nghe và tin vào trái tim của mình, chúng ta mới có thể tìm thấy kho báu đó.
            </p>
            <blockquote>"The treasure lies where your heart belongs" - Trái tim của bạn đặt ở đâu thì kho báu sẽ nằm ở đó.</blockquote>
            <img src="uploaded_img/blogs/rw-nha-gia-kim-1.jpg" alt="">
            <p>
            Ngoài ra, Paulo Coelho cũng nhấn mạnh rằng, chúng ta không thể tìm kiếm kho báu thật sự của mình bằng cách đứng yên tại chỗ, mà phải đối mặt với những thử thách và rủi ro của cuộc đời.
            </p>
            <p>
            "Tell your heart that the fear of suffering is worse than the suffering itself, and that no heart has ever suffered when it goes in search of its dreams." - "Nói với trái tim mình rằng
            nỗi sợ đau đớn còn tồi tệ hơn chính sự đau đớn. Và rằng không trái tim nào phải khổ ải tìm kiếm những giấc mơ, vì mỗi một giây tìm kiếm là cuộc gặp gỡ Thượng đế cùng sự vĩnh cửu".
            </p>
            <h4>Lắng nghe trái tim mỗi khi vấp ngã</h4>
            <p>
            Trong cuốn sách "Nhà Giả Kim", Paulo Coelho đã khuyên chúng ta nên lắng nghe trái tim của mình và đón nhận những bất ngờ trong cuộc sống.
            </p>
            <p>
            Nhân vật chính của cuốn sách, Santiago, đã trải qua nhiều khó khăn và thử thách trên hành trình tìm kiếm kho báu của mình. Tuy nhiên, Santiago không từ bỏ mà luôn lắng nghe trái tim của mình và tin rằng mình đang đi đúng đường.
            </p>   
            <p>
            "Listen to your heart. It knows all things, because it came from the Soul of the World, and it will one day return there." - "Hãy lắng nghe trái tim mình.
            Nó biết hết mọi điều vì nó tử tâm linh vũ trụ mà ra và một ngày kia sẽ trở về đó. Trái tim cậu ở đâu thì kho báu cậu tìm cũng ở đó."
            </p>
            <p>
            Đôi khi, chúng ta vấp ngã và gặp những thất bại trong cuộc đời. Tuy nhiên, đó không phải là điều đáng sợ, bởi vì như Paulo Coelho đã viết, "There is only one thing that makes
            a dream impossible to achieve: the fear of failure". Chỉ có một điều khiến giấc mơ không thể đạt được, đó là sợ thất bại.
            </p>
            <p>
            Vì vậy, chúng ta cần phải lắng nghe trái tim của mình và tin rằng mình có thể vượt qua những thử thách và rủi ro để đạt được mục tiêu.
            </p>
            <p>
            "The secret of life, though, is to fall seven times and to get up eight times." - Bí mật của cuộc đời là rơi xuống bảy lần và đứng dậy tám lần. Chỉ cần
            chúng ta luôn lắng nghe trái tim của mình và không bỏ cuộc thì mọi thứ đều có thể trở thành hiện thực.
            </p>
            <p>
            Vì vậy, lắng nghe trái tim của mình và đón nhận những bất ngờ trong cuộc sống là những bài học quý giá mà chúng ta có thể học được từ cuốn sách "Nhà Giả Kim".
            </p>
            <img src="uploaded_img/blogs/rw-nha-gia-kim-2.jpg" alt="">
            <h4>Cuộc sống đích thực là vừa chinh phục vừa tận hưởng</h4>
            <p>
            Mục tiêu chính của Santiago trên hành trình tìm kho báu là để có thể thực hiện ước mơ của mình. Nhưng đối với Paulo Coelho, thực hiện ước mơ không phải là mục đích
            cuối cùng của cuộc sống. Cuộc sống đích thực là một sự kết hợp giữa việc chinh phục những ước mơ và tận hưởng những khoảnh khắc đẹp nhất trong đời.
            </p>
            <p>"Remember that wherever your heart is, there you will find your treasure." - Hãy nhớ rằng bất cứ nơi nào trái tim của bạn ở đó, bạn sẽ tìm thấy kho báu của mình.
            Kho báu không phải chỉ là một khối vàng hay một tài sản có giá trị, mà đó còn là cảm giác thỏa mãn khi chúng ta thực hiện được điều mình mong muốn.
            </p>
            <p>Một cách để đạt được sự thỏa mãn đó là tận hưởng những khoảnh khắc đẹp nhất trong cuộc sống. Santiago đã tìm thấy tình yêu của mình và đón nhận niềm vui khi thấy được rằng tình yêu là kho báu thực sự của cuộc đời mình.</p>
            <p>"The simple things are also the most extraordinary things, and only the wise can see them." - Những điều đơn giản là những điều đặc biệt nhất, chỉ có những người khôn ngoan
            mới có thể thấy được điều đó. Cuộc sống đích thực không phải là việc luôn luôn tìm kiếm những thứ xa xỉ, mà đó là việc hưởng thụ những điều đơn giản, tình yêu, gia đình, bạn bè, sự tự do,...
            </p>
            <p>"The secret is here in the present. If you pay attention to the present, you can improve upon it. And, if you improve on the present, what comes later will also be better."
            - Bí mật nằm ở hiện tại. Nếu bạn chú ý đến hiện tại, bạn có thể cải thiện nó. Và nếu bạn cải thiện hiện tại, những gì đến sau cũng sẽ tốt hơn.
            Cuộc sống đích thực là việc đón nhận và tận hưởng mỗi khoảnh khắc của cuộc đời, cùng với việc xây dựng và phát triển cho tương lai.
            </p>
            <p>Sau khi Santiago đã đi qua những thử thách và học được những bài học quý giá từ cuộc hành trình của mình, ông đã tìm được kho báu thật sự của đời người.
            Nhưng không chỉ dừng lại ở đó, Santiago còn nhận ra rằng cuộc sống đích thực là sự kết hợp giữa việc chinh phục những ước mơ và tận hưởng những khoảnh khắc trong cuộc sống.
            </p>
            <p>Trong cuộc hội thoại cuối cùng với Alchemist, Santiago nhận ra rằng kho báu thật sự của cuộc đời không phải là kho báu bằng vàng, mà chính là "khả năng đánh thức
            những điều tốt đẹp nhất trong chúng ta". Alchemist đã dạy Santiago rằng: "Khi bạn muốn cái gì đó, toàn bộ vũ trụ liên kết với bạn để giúp bạn đạt được điều đó".
            </p>
            <p>Còn về việc chinh phục và tận hưởng cuộc sống, Santiago đã học được rằng không phải lúc nào chúng ta cũng có thể có được những điều mình muốn. Thay vào đó, chúng ta cần học cách tận hưởng những gì đang có và học
            cách hạnh phúc với những gì chúng ta đang làm. Khi Santiago được hỏi về việc quay trở lại thế giới hiện tại, ông trả lời rằng ông muốn trở về với cuộc sống của mình trước đây, nhưng với tâm trạng mới và những bài học quý giá mà ông đã học được trên đường đi.
            </p>
           
            <p>Với tất cả những bài học này, Nhà giả kim thực sự là một cuốn sách rất ý nghĩa và đáng đọc. Không chỉ giúp ta tìm được kho báu thật sự của cuộc đời mà còn giúp ta hiểu rõ hơn về bản thân, về cách tận hưởng cuộc sống một cách đích thực.</p>
            <p>“Đôi khi người ta phải đi cả một cuộc hành trình dài vượt qua bao hiểm nguy vất chỉ để hiểu rằng: hạnh phúc ở ngay dưới chân ta, nơi mà ta đã từng bước qua. Chúng ta phải đi để đến, không có đường tắt nào cho hạnh phúc.”</p>
         <a href="contact.php" class="btn">Liên Hệ Với Chúng Tôi!</a>
      </div>

   </div>

</section>


<?php include 'footer.php'; ?>

<!-- JS link -->
<script src="js/script.js"></script>

</body>
</html>