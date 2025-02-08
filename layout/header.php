<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css? v=<?php echo time() ?>">
    <title>M-Watch Store</title>
</head>
<body style="position: relative;" id="bd">
    <div class="loading">
        <span class="loader"></span>
    </div>
    <div class="container" id="ctn">
        <header>
            <div class="header">
                <div class="first-header">
                    <div class="address-header">
                        <i class='bx bxs-home-smile'></i>
                        <span>Shop: 65 Phạm Như Xương, Hòa Khánh Nam, Liên Chiểu, Đà Nẵng</span>
                    </div>
                    <div class="contact-header">
                        <div class="admin">
                            <a class="admin" href=""></a>
                        </div>
                        <div class="first-contact">
                            <i class='bx bxs-phone-call'></i>
                            <span>Hotline: 036.293.1719</span>
                        </div>
                        <div class="second-contact">
                            <i class='bx bxs-user'></i>
                            <span class="login login-header">
                                <ul>
                                    <li>
                                        
                                        <ul class="logout tranform-logout ">
                                            <li><a href="index.php?route=my-account">My Account</a></li>
                                            <li><a href="index.php?route=logout">Log Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="second-hd-contai">
                    <div class="second-header">
                        
                        <div class="menu">
                            <ul>
                                <li><a  href="">TRANG CHỦ</a></li>
                                <li><a  href="">GIỚI THIỆU</a></li>
                                <li><a  href="">SẢN PHẨM</a></li>
                                <li><a  href="">TIN TỨC</a></li>
                                <li><a  href="">LIÊN HỆ</a></li>
                            </ul>
                        </div>
                        <div class="img-header">
                            <img src="http://donghotuandt.vnn.mn/userfiles/img/604453/logomwatch02.png" alt="">
                        </div>
                        <div class="search">
                            <form action="index.php?route=search-product" method="POST">
                            <button type="submit" name="search-product"><i id="kt" class='bx bx-search'></i></button>
                                <input type="text" name="product-insearch" placeholder="Tìm kiếm sản phẩm">
                                <i id="kj" class='bx bx-x'></i>
                            </form>
                        </div>
                        <div class="search-header">
                            <p>TÌM KIẾM</p>
                            <i class='bx bx-search' id="sr"></i>
                        </div>
                        <div class="cart-header">
                            <div class="cart">
                                <form action="../../controller/index.php?url=cart" method="post">
                                    <button type="submit" value="cart">
                                        <span>GIỎ HÀNG</span>
                                        <i class='bx bxs-cart-alt'></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        