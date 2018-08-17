<?php
$server_username ="root";
    $server_password = "";
    $server_host=   "localhost";
    $database = 'final';

    $conn= mysqli_connect($server_host,$server_username,$server_password,$database)
    or die ("không thể kết nối với cơ sở dữ liệu");
    mysqli_query($conn,"SET NAMES 'UTF8'");
?>