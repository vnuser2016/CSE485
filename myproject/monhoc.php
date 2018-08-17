<?php 
    include 'header.php';
?>
<form action="">
    <p>nhập vào tên môn học:</p>
    <input type="text" id="subjectname" name="subjectname">
    <p>Nhập vào mã môn học</p>
    <input type="text" id="mamonhoc" name="subjectname">
    <p>Nội dung</p>
    <input type="text" id="gioithieu" name="about">
    <button type="submit" name="them">thêm</button>
    <button type="reset" name="reset">Làm lại</button>
</form>
<?php 
    include 'footer.php';
?>