<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
</head>

<body>
    <form class="loginform" action="dangnhap.php" method="POST">
        <p><strong>Welcome to my blog</strong></p>
        <div class="loginform">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter your email" name="uname">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass">
            <button type="submit" name="login">Đăng nhập </button>
            <button type="button" name="cancle" onclick="register()">Đăng ký</button>
</form>
            <script src="login.js"></script>
</body>

</html>