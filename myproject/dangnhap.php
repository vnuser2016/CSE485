<?php
session_start();
//đăng nhập
    require_once("connection.php");
    if (isset($_POST["login"]))
    {//kiểm tra rỗng
        $email = $_POST["uname"];
        $pass = $_POST["pass"];
        if($email =="" || $pass==""){
            echo"<script>alert('Bạn phải nhập tài khoản và mật khẩu');
            window.location.href='login.php';
            </script>";
        }
        else
        {//kiem tra co la admin khong
            $sqladmin= "select*from admin where email='$email' and pass='$pass'";
            $queryadmin =mysqli_query($conn,$sqladmin);
            $checkadmin = mysqli_num_rows($queryadmin);
            if($checkadmin > 0 )
            {
                $_SESSION["username"]= $email;
                echo"<script>
                        alert('xin chao admin');
                        window.location.href='admin.php';
                </script>";  
            }
            
            else{
                  //kiểm tra tìm kiếm tài khoản thuong
            $sqllogin = "select*from account where email='$email'
            and pass='$pass'";
            $querylogin = mysqli_query($conn,$sqllogin);
            $kiemtra=mysqli_num_rows($querylogin);
            if($kiemtra == 0)
            {
                echo"<script>alert('tên tài khoản hoặc mật khẩu không đúng');
                    window.location.href='login.php';
                </script>";
            }
            else
            { $_SESSION["username"] = $email;
               
                echo"<script>
                alert('xin chào, bạn đã đăng nhập thành công.');
                window.location.href='user.php';
                </script>";
               
            }
            }
        }

    }
?>