<?php
require_once("connection.php");
$data = $_POST['data'];
$sql ="select * from baiviet where tenbaiviet like '%$data%'";
$query = mysqli_query($conn,$sql);
$check = mysqli_num_rows($query);
if($check>0){
    while ($row = mysqli_fetch_array($query)){
?>
<h1>Các bài viết:</h1>

         <h3>
        <?php echo($row['tenbaiviet']) ?>:
        <?php echo($row['theloai']) ?>
        </h3>
        <p> <?php echo($row['noidung'])?></p>
<?php
    }
}

?>
<?php
require_once("connection.php");
$data = $_POST['data'];
$sql ="select * from monhoc where tenmonhoc like '%$data%'";
$query = mysqli_query($conn,$sql);
$check = mysqli_num_rows($query);
if($check>0){
    while ($row = mysqli_fetch_array($query)){
?> <h1>môn học:</h1>

         <h3>
        <?php echo($row['tenmonhoc']) ?>:
        <?php echo($row['mamonhoc']) ?>
        </h3>
        <p> <?php echo($row['noidung'])?></p>
<?php
    }
}

?>