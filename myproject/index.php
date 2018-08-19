<?php include'header.php'?>

    <div class="top">
        <img src="img/cover2.jpg" alt="">
        <div class="logo" id="top-left">
            <p>Trần Nhật Minh</p>
        </div>
    </div>
    <div class="sidenav">
        <a href="#">Home</a>
        <a href="#baiviet">Bài viết</a>
        <a href="#subject">Môn học</a>
        <a href="login.php">Đăng nhập</a>
        <a href="register.php">Đăng kí</a>
    </div>

    <div class="main">
        <div id="left">
            <div id="baiviet" name="baiviet">
                <h1>Các bài viết:</h1>
                <hr>
                <?php
                include_once("connection.php") ;
             $baiviet= 'select * from baiviet';
             $sql=mysqli_query($conn,$baiviet);
             while($row= mysqli_fetch_array($sql))
             {
                 ?>
                  <h3>
                  <?php echo($row['tenbaiviet']) ?>:
                  <?php echo($row['theloai']) ?>
                  </h3>
                  <p> <?php echo($row['noidung'])?></p>
            <?php
             }
            ?>
            </div>

            <div id="subject" name="subject">
                <h1>Các môn học:</h1>
                <hr>
                <?php
                include_once("connection.php") ;
             $monhoc= 'select * from monhoc';
             $sql=mysqli_query($conn,$monhoc);
             while($row= mysqli_fetch_array($sql))
             {
                 ?>
                  <h3>
                  <?php echo($row['tenmonhoc']) ?>:
                  <?php echo($row['mamonhoc']) ?>
                  </h3>
                  <p> <?php echo($row['noidung'])?></p>
            <?php
             }
            ?>
            </div>
        </div>
        <div id="right">
            <img src="img/avata.jpg" alt="ảnh đại diện">
            <p style="font-size:23px">Tôi là: Trần Nhật Minh</p>
            <p style="font-size: 18px">Tôi là sinh viên khoa công nghệ thông tin trường Đại Học Thủy Lợi, đồng thời là Học viên học viện An ninh mạng FPT-JetKing.<br> Đây là blog của tôi nơi tôi chia sẻ các bài viết và bài giảng các môn tôi đã học và nghiên cứu.</p>
            <p style="font-size:16px">Liên hệ: <br>-Phone: 0967607040 <br>-Email: vnuser2016@gmail.com
            </p>
        </div>

    </div>
<?php include 'footer.php' ?>