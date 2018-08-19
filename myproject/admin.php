<?php
session_start();
if(isset($_SESSION["username"]))
{
?>
<?php include 'header.php'
?>
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
        <a href="logout.php" name ="logout">Đăng xuất</a>
    </div>
    
    <div class="main">
    <div id="left">
        <div id="top-main">
            <input id="searchbox" class="timkiem" type="text" placeholder="tìm kiếm">
        
        </div>
        <div class="noidung">
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
            <tr>
                  <h3>
                  <?php echo($row['tenmonhoc']) ?>:
                  <?php echo($row['mamonhoc']) ?>
                  </h3>
                  <p> <?php echo($row['noidung'])?></p>
             </tr>
            <?php
             }
            ?>
            </div>
        </div>
        </div>
        <div id="right">
           <?php include 'forminsert.php' ?>
        </div>

    </div>
<?php include 'footer.php' ?>
<?php }
  else  {
  header('location: login.php');
 } ?>