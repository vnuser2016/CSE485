<?php
//đăng nhập
    require_once("connection.php");
    if (isset($_POST["login"]))
    {
        $email = $_POST["uname"];
        $pass = $_POST["pass"];
        if($email =="" || $pass==""){
            echo"<script>alert('Bạn phải nhập tài khoản và mật khẩu')</script>";

        }
        else{
            $sqllogin = "select*from account where email='$email'
            and pass='$pass'";
            $querylogin = mysqli_query($conn,$sqllogin);
            $kiemtra=mysqli_num_rows($querylogin);
            if($kiemtra == 0)
            {
                echo"<script>alert('tên tài khoản hoặc mật khẩu không đúng')</script>";
            }
            else
            {
                $_SESSION["username"] = $email;
                header('location:user.php');
            }

        }

    }
?>