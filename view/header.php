<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The faceshop</title>

    <!-- Link fontawesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/../view/css/font-awesome.min.css"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../view/css/bootstrap.min.css">

    <!-- Link css tự viết -->
    <link rel="stylesheet" href="../view/css/style.css">
</head>

<body>
    <!-- Start header  -->
    <header>
        <div class="container-fluid bgg">
            <div class="container">
                <div class="row">
                    <div class="boxLeft">
                        <p>Hotline: 0000000000
                            <span>Email: hieudmpd05565@fpt.edu.vn</span>
                        </p>
                    </div>
                    <div class="boxMid">
                        <form action="index.php?page=search" method="post">
                            <div class="input-group mb-2">
                                <input type="text" name="tim" class="form-control" placeholder="Bạn cần tìm gì?..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <input type="submit" value="Tìm kiếm" name="search">
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php
                    if (isset($_SESSION['sid']) && ($_SESSION['sid']) > 0) {
                    ?>
                        <div class="boxRight logout mt-2">
                            <ul>
                                <li><a href="index.php?page=userinfo"><?=$_SESSION['suser']?></a></li>
                                <li><a href="index.php?page=user&logout=1">Thoát</a></li>
                            </ul>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="boxRight login mt-2">
                            <ul>
                                <li><a href="index.php?page=user">Đăng nhập</a></li>
                                <li><a href="index.php?page=dangki">Đăng kí</a></li>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <i style="font-weight:bold; font-size: 30px;">SHOP MINH HIẾU</i>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active mr-2">
                                <a class="nav-link homePage" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown buttonPage">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Khuyến mãi
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">HỖ TRỢ TRẢ GÓP</a>
                                        <a class="dropdown-item" href="#">SẢN PHẨM HOT & KHUYẾN MÃI</a>
                                        <a class="dropdown-item" href="#">COMBO HOT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bán chạy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Hàng mới về</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown buttonPage">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Danh mục sản phẩm
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Tai nghe Gaming</a>
                                        <a class="dropdown-item" href="#">Bàn phím Gaming</a>
                                        <a class="dropdown-item" href="#">Màn hình Gaming</a>
                                        <a class="dropdown-item" href="#">Ghế Gaming</a>
                                        <a class="dropdown-item" href="#">Dòng sản phẩm Gaming</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Linh kiện</a>
                            </li>
                            <li class="nav-item cart">
                                <a class="nav-link" href="#"><img src="../view/img/cart.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Finish header -->