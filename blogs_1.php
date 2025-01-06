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
   <h3 style="color: white;">Từ Sách Đến Đời</h3>
</div>

<section class="blogs">

   <div class="flex">

      <div class="content">
         <h3>ChatGPT rất giỏi trong việc tóm tắt sách. Nhưng liệu AI có bao giờ viết được một tác phẩm văn học đích thực? </h3>
      
            <p>
            Bất kỳ ai đã sử dụng các chương trình AI như ChatGPT trong vài tháng gần đây đều biết rằng chúng rất giỏi trong việc tóm tắt sách và viết các thư xin việc theo mẫu, nhưng liệu chúng có thể tạo ra những tác phẩm khiến chúng ta xúc động và chạm đến tâm hồn hay không?
            </p>
            
            <p>
            Tính đến năm 2024, tác giả George R.R. Martin đã chính thức dành 12 năm để viết “The Winds of Winter”, phần thứ sáu được chờ đợi từ lâu trong loạt phim ăn khách Game of Thrones của HBO. Vẫn chưa có ngày phát hành cụ
            thể, nhưng một người hâm mộ am hiểu công nghệ đã quyết định tự viết tiếp câu chuyện, hay nói đúng hơn là anh ấy đã nhờ ChatGPT viết hộ mình. Với dữ liệu đầu vào là dàn ý cho mỗi chương, và từ dàn ý ấy phát triển thành những đoạn văn, AI
            đã tạo ra một cuốn sách dài 683.276 từ có chất lượng đáng ngạc nhiên.
            Đáng ngạc nhiên vì mặc dù phiên bản “Winds of Winter” “do người hâm mộ tạo ra” này không đáp ứng được tiêu chuẩn trong tác phẩm của Martin, nhưng nó lại
            chứa đựng những tình tiết bất ngờ đã khiến bộ sử thi giả tưởng của ông thành công. Martin cũng đã đọc cuốn sách này, và sau khi biết về sự tồn tại cua nó, ông không chỉ đã kiện fan mà còn kiện cả nhà phát triển của ChatGPT, OpenAI.
            </p>
            
            <p>
            Cùng với John Grisham và Jonathan Franzen, cuộc chiến không ngừng của Martin với các mô hình ngôn ngữ lớn, vốn được đào tạo trên tác phẩm của họ, cùng với vô số nguồn khác, đặt ra một câu hỏi quan trọng về khả năng sáng tạo của học
            máy. Bất kỳ ai đã sử dụng các chương trình AI như ChatGPT trong vài tháng gần đây đều biết rằng chúng rất giỏi trong việc tóm tắt sách và viết các thư xin việc theo mẫu, nhưng liệu chúng có thể tạo ra những tác phẩm khiến chúng ta xúc động và chạm đến tâm hồn hay không?
            </p>
            <img src="images/read1.jpg" alt="">
            <h4>Đào tạo dữ liệu</h4>
            <p>
            Nhà báo Vauhini Vara cho rằng câu trả lời là có. Trong một bài viết có tựa đề “Lời thú tội của một nhà văn AI gây bão”, cô kể lại rằng vào năm 2020, OpenAI đã cấp cho cô quyền truy cập vào GPT-3. Khi định nghĩa viết sáng tạo chủ yếu là “chờ từ
            ngữ phù hợp”, cô nghi ngờ rằng AI tổng quát, với khả năng truy cập tức thời vào mọi danh từ và tính từ trong từ điển tiếng Anh, có thể là một công cụ hữu ích, đặc biệt là cho những chủ đề mà cô khó viết về.
            </p>
            <p>
            Một trong những chủ đề đó là cái chết của chị gái Vara, người được chẩn đoán mắc một dạng ung thư hiếm gặp khi còn học trung học. Ban đầu, nỗ lực viết một câu chuyện dựa trên tiền đề này của GPT-3 không đạt yêu cầu. AI thường thay thế
            số phận thực tế của chị gái cô bằng một sự hồi phục kỳ diệu, thậm chí trong một bản thảo, AI đã biến Vara thành một vận động viên chạy đường dài chạy đua vì mục đích từ thiện. Mãi cho đến khi cô chuyển sang một quy trình viết mang tính
            cộng tác hơn, khi GPT-3 học hỏi và thích ứng với thông tin đầu vào của chính cô, nó mới tạo ra được một dòng văn bản khiến cô thực sự cảm động:
            </p>
            <blockquote>“Chúng tôi đang lái xe về nhà từ Bãi biển Clarke, khi dừng lại ở đèn đỏ, chị ấy nắm lấy tay tôi và giữ chặt. Bàn tay mà chị ấy đã nắm là bàn tay mà tôi dùng để viết, bàn tay mà tôi đang viết bằng nó.”</blockquote>
            
            <p>
            Mặc dù ChatGPT đã được lập trình để viết theo cách dễ hiểu và nhạt nhẽo, nó có thể học cách bắt chước các phong cách khác nếu có đủ dữ liệu đào tạo.
            </p>
            <p>Tác giả Sean Michaels chia sẻ rằng: “Tôi nghĩ có một quan niệm sai lầm rằng các mô hình ngôn ngữ lớn như ChatGPT không giỏi viết theo phong cách văn xuôi trữ tình. Trên thực tế, chúng có thể làm điều đó một cách dễ dàng và khá tốt, giống
            như tất cả các phần mềm tạo hình ảnh đều có thể làm những việc như tạo ra những bức ảnh theo phong cách của Wes Anderson hay David Lynch.” 
            </p>
            <p>Trong cuốn tiểu thuyết “Do You Remember Being Born”, kể về một nhà thơ được một công ty công nghệ tiếp cận để cùng viết một bộ sưu tập thơ với AI của họ, Michaels đã tạo ra một phiên bản tùy chỉnh của ChatGPT mà anh gọi là
            "Moorebot." Qua quá trình huấn luyện, Moorebot đã học cách viết theo phong cách của nhà thơ ngoài đời thực Marianne Moore, làm mờ thêm ranh giới giữa con người và máy móc.
            </p>
            <h4>AI: Sáng tạo và Kết nối</h4>
            <p>Mặc dù một số nhà văn phản đối sự trỗi dậy của AI vì lo ngại về việc làm của họ, những người khác đã đưa cuộc tranh luận vào một bối cảnh rộng hơn và lâu dài hơn về ý nghĩa và mục đích của nghệ thuật. Nhà biên kịch từng đoạt giải Oscar
            Charlie Kaufman, người có phong cách viết độc đáo đến mức các nhà phê bình đã tạo ra thuật ngữ "Kaufmanesque" để miêu tả nó, có lẽ là người lên tiếng nhiều nhất về sự không thích của cá nhân mình đối với việc học máy. Nhìn xa hơn định nghĩa
            tiêu chuẩn về sự sáng tạo, tạo ra điều gì đó mới và độc đáo, Kaufman mô tả nghệ thuật là bất kỳ hình thức biểu đạt nào tạo ra sự kết nối cảm xúc giữa con người.
            </p>
            <p>Trong một bài giảng tại BAFTA báo trước những bình luận được đưa ra trong cuộc đình công SAG năm 2023, ông nói rằng: “Hãy nói bạn là ai, nói ra một cách thực sự, trong cuộc sống của bạn và trong công việc của bạn. Hãy nói với ai đó ngoài
            kia, ai đó đang lạc lối, ai đó chưa được sinh ra, ai đó sẽ không được sinh ra trong 500 năm nữa. Tác phẩm của bạn sẽ ghi lại thời đại bạn sống. Điều đó không thể tránh được. Nhưng nếu bạn chân thành, bạn sẽ giúp người đó cảm thấy bớt cô đơn hơn trong thế giới của họ."  
            </p>
            <p>Ngay cả khi AI có khả năng viết ra thứ gì đó đầy cảm xúc hoặc sâu sắc, điều mà Vara và Michaels khẳng định là có thể, Kaufman sẽ từ chối công nhận đây là nghệ thuật vì nó không thể thiết lập mối liên kết giữa người đọc và tác giả. Trong một bài
            phát biểu về AI gần đây, ông đã nói rằng: “Nếu tôi đọc một bài thơ, và bài thơ đó làm tôi cảm động, tôi yêu người đã viết nó. Tôi không thể yêu một chương trình máy tính được. Tôi không thể, bởi vì nó chẳng là gì cả.”
            </p>
            
            <p>
            Quan điểm của Kaufman nên được đánh giá cùng với quan điểm của Michaels, người thông qua công việc của mình với AI, đã đưa ra một kết luận khác: Khả năng sáng tạo của con người không đặc biệt như những gì chúng ta muốn tin. Ông giải thích: 
            </p>
            <blockquote>Hãy tưởng tượng tôi viết, ‘Mặt trăng trông như một lát chanh.’ Bạn đọc và nghĩ, ‘Đó là một hình ảnh thú vị.’ Nhưng khi AI làm điều đó, bạn lại nghĩ, ‘Liệu điều đó có thú vị không? Vì nó có vẻ hoàn toàn ngẫu nhiên.’Con người có khả năng tạo ra ý nghĩa
            từ mọi thứ và tìm ra những mối liên hệ ở những điều tưởng chừng không có mối liên hệ hoặc mục đích đằng sau chúng. Tôi thấy thật khó chịu khi AI có thể nghĩ ra những câu thoại mà tôi thấy hay, mà còn khiến tôi tự hỏi liệu AI đang làm điều gì đó
            thành công với tư cách là một nhà văn hay tôi đang làm điều gì đó thành công với tư cách là người đọc.”
            </blockquote>
            <p>
            Về việc liệu AI có khả năng sáng tạo ‘thực sự’ hay không:
            </p>
            <blockquote>“Nghệ thuật đích thực của con người dựa trên ký ức, cơ thể, giấc mơ và những mối liên kết có ý nghĩa nào đó giữa những suy nghĩ trừu tượng, siêu thực. ChatGPT không có điều nào trong số đó, ít nhất là không theo nghĩa đen. Nhưng
            mặt khác, có một điều gì đó kỳ lạ liên quan đến những cơ thể giả tạo, những giấc mơ giả tạo, những trải nghiệm sống giả tạo. Chẳng hạn, nếu bạn đọc một câu chuyện hiện đại về một thương gia Hà Lan thế kỷ 17, đó không phải là dựa trên trải
            nghiệm thực tế của ai đó với tư cách là một thương gia thế kỷ 17. Tương tự, chỉ vì những mô hình ngôn ngữ lớn này không có những gì chúng ta có, không có nghĩa là tác phẩm của chúng không có những phẩm chất giống như tác phẩm của chúng ta. Nó không dễ dàng như vậy đâu.”
            </blockquote>
            <h4>Tương lai của viết lách</h4>
            <p>
            Theo Michaels, việc tăng cường sử dụng các mô hình ngôn ngữ lớn ​​sẽ dẫn đến “sự hội tụ nhất định về phong cách, khiến lối viết trở nên kém đa dạng và có tỉ lệ giống nhau nhiều hơn khi chúng ta sử dụng cùng một thuật toán”.
            </p>
            
            <p>
            Florent Vinchon, một nghiên cứu sinh Tiến sĩ tại Đại học Paris Cité đang nghiên cứu về kỹ năng sáng tạo của AI tổng quát, cho rằng học máy “có thể có tác động tương tự đến việc viết lách như nhiếp ảnh đối với hội họa”, một quan điểm được
            chia sẻ bởi các chuyên gia khác trong lĩnh vực này. Cũng giống như máy ảnh đã đẩy các họa sĩ từ chủ nghĩa hiện thực sang trừu tượng sinh ra các phong trào nghệ thuật quan tâm đến cách chúng ta nhận thức thay vì những gì chúng ta nhìn
            thấy, AI có thể truyền cảm hứng cho các thế hệ tác giả mới thử nghiệm với văn phong của họ.
            </p>
            <p>
            Vì các chương trình như ChatGPT cho phép bất kỳ ai cũng có thể tạo ra những đoạn văn trôi chảy, những cuốn tiểu thuyết và truyện ngắn của tương lai có thể sẽ ít được trau chuốt hơn, đầy những lỗi ngữ pháp và sự khác biệt ngôn ngữ chỉ ra
            giới hạn của bộ não con người và tính độc đáo trong quan điểm cá nhân. Thay vì là mối đe dọa đối với sự tồn tại của sáng tác văn học hay sự sáng tạo của con người nói chung, AI, giống như các công nghệ tiên tiến trước đó, có thể trở thành
            một động lực của sự thay đổi và là nguồn cảm hứng.
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