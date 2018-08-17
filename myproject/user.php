<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TranNhatMinh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="guess.css" />
    <script src="guess.js"></script>
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
    </div>
    <div class="sidenav">
        <a href="#">Home</a>
        <a href="#baiviet">Bài viết</a>
        <a href="#subject">Môn học</a>
        <a href="logout.php" name ="logout">Đăng xuất</a>
    </div>

    <div class="main">
        <div id="left">
            <div id="baiviet" name="baiviet">
                <h3>Các bài viết của tôi.</h3>
                <p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                        </li>
                        <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        </li>
                        <li>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</li>
                        <li>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</li>
                    </ul>

                </p>
            </div>

            <div id="subject" name="subject">
                <h1>Các môn học</h1>
                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and
                    divided by arches into stiff sections. The bedding was hardly able to cover
                    <strong>strong</strong> it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him,
                    <a class="external ext" href="#">link</a> waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar
                    walls.
                </p>


            </div>
        </div>
        <div id="right">
            <img src="img/avata.jpg" alt="ảnh đại diện">
            <p style="font-size:23px">Tôi là: Trần Nhật Minh</p>
            <p style="font-size: 18px">Tôi là sinh viên khoa công nghệ thông tin trường Đại Học Thủy Lợi, đồng thời là Học viên học viện An ninh mạng FPT-JetKing. Đây là blog của tôi nơi tôi chia sẻ các bài viết và bài giảng các môn tôi đã học và nghiên cứu.</p>
            <p style="font-size:16px">Liên hệ: <br>-Phone: 0967607040 <br>-Email: vnuser2016@gmail.com
            </p>
        </div>

    </div>
</body>
</html>