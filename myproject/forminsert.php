<?php 
    include 'header.php';
?>
<form action="">
    <p>hãy chọn kiểu mà bạn muốn nhập vào</p>
    <input type="checkbox" id="subjectname" name="subjectname">
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