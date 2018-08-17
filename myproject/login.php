<!DOCTYPE html>
<?php session_start(); 
if(isset($_SESSION["username"]))
{
    header('location:user.php');
}
?>
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

            <button type="submit" name="login"> Đăng nhập </button>
            <button type="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Đăng kí thành viên</button>

            <div id="id01" class="modal">
                <form class="modal-content" action="register.php">
                    <div class="container">
                        <h1>Đăng kí thành viên</h1>
                        <hr>
                        <label for="email"><b>username</b></label>
                        <input type="email" placeholder="Enter Email" name="email">

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw">

                        <label for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat">

                        <label for="name"><b>Họ và tên</b></label>
                        <input type="text" placeholder="Nhập vào họ tên đầy đủ của bạn" name="hovaten">
                        <div class="clearfix">
                            <button type="submit" class="signupbtn">Đăng kí</button>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
            <script src="login.js"></script>
</body>

</html>