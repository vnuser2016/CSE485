<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang đăng ký</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
</head>

<body>
    <form class="registerform" action="dangky.php" method="POST">
        <p><strong>Welcome to my blog</strong></p>
        <div class="registerform">
            <label for="uide"><b>Username</b></label>
            <input type="email" placeholder="Enter your email" name="email" require  pattern="[a-z]{1,15}">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass">

            <label for="repsw"><b>Repeat Password</b></label>
            <input type="password" placeholder="Enter Password again" name="repass">

            <label for="name"><b>Họ và tên</b></label>
            <input type="text" placeholder="Enter yourname" name="name">
            <button type="submit" name="register" style="width:auto;">Đăng kí </button>  
    </form>
             <button type="reset" name="reset" style="width:auto;">Làm lại</button>
            <button type ="cancel" name="cancel" style="width:auto;" onclick="cancel()">Hủy bỏ</button>
            
            <script src="login.js"></script>
</body>

</html>