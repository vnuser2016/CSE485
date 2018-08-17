<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="admin.css" />
    <script src="main.js"></script>
</head>

<body>
    <div class="top">
        <img src="img/cover2.jpg" alt="">
        <div class="logo" id="top-left">
            <p>Trần Nhật Minh</p>
        </div>
        <div class="search" id="top-right">
            <input id="searchbox" type="text" placeholder="tìm kiếm">
            <button id="search" name="search">Search</button>
        </div>
        <div class="nav" id="bottom-left" name="nav">
            <a href="">Bài viết</a>
            <a href="">Môn học</a>
            <a href="">Đăng xuất</a>
        </div>
    </div>
    <div class="main">
        <div id="left" name="left">

        </div>
        <div id="right" name="right">
            <?php include 'monhoc.php'; ?>
        </div>
    </div>

</body>

</html>