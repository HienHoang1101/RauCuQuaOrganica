<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../RauCuQuaOrganica/css/lien-he/products.css">
    <link rel="stylesheet" href="../../RauCuQuaOrganica/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../RauCuQuaOrganica/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../RauCuQuaOrganica/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Liên Hệ</title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../RauCuQuaOrganica/css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="background-color: #17594A;text-align: center">
                <div class="login">
                  <!-- CODE CHECK ĐĂNG NHẬP -->
                  <?php 
                    session_start();
                    if(!isset($_SESSION['user'])){
                  ?>
                  <a href="../../RauCuQuaOrganica/tai-khoan/dang-nhap.php"><p><strong>ĐĂNG NHẬP / ĐĂNG KÍ</strong></p></a> 
                    <?php }else{ ?>
                  <a href="../../RauCuQuaOrganica/tai-khoan/thong-tin-tk.php"><p><strong>XIN CHÀO <?=$_SESSION['user']['ho_ten']?></strong></p></a>
                  <?php } ?>
                </div>
            </div>
            <div class="col-md-4" style="background-color: #17594A;text-align: center">
            </div>
            <div class="col-md-4" style="background-color: #17594A;text-align: center">
                <!-- MÃ CODE PHP CHECK SỐ LƯỢNG SẢN PHẨM THÊM VÀO GIỎ HÀNG  -->

                <div class="giohang" style = "position: reletive;">
               
                    <?php
                            $sll = 0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $item){
                                    extract($item);
                                    $sll+= $sl;
                                }
                            }
                        ?>
                    <span style = "position: absolute;padding:3px 8px;background-color:#fff;border-radius:50px;left:295px;top:25px;" ><?=$sll?></span>
                <ul>
                    <a href="danh-sach-sp.php"><li><i class="fa fa-search" style="font-size:20px;color:rgb(226, 226, 226)"></i></li></a> 
                    <a href="danh-sach-gio-hang.php"><li><p style="color: rgb(212, 212, 212);font-size: 14px;">GIỎ HÀNG</p></li></a> 
                    <a href="danh-sach-gio-hang.php"><li><i class="fa fa-shopping-basket" style="font-size:28px;color:rgb(255, 255, 255)"></i></li></a> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: rgb(211, 211, 211);">
                <div class="nav">
                    <ul>
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="danh-sach-sp.php">SẢN PHẨM</a></li>
                            <li><a href="gioi-thieu.php">GIỚI THIỆU</a></li>
                            <li><a href="tin-tuc.php">TIN TỨC</a></li>
                            <li><a href="lien-he.php">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-6">
                <div style="color : #17594A">
                    <h3> <strong>THÔNG TIN LIÊN HỆ</strong></h3>
                    <table class="tus">
                        <tr>
                            <td> <img src="../../RauCuQuaOrganica/css/lien-he/img/a.png" alt=""> </td>
                            <td>60 - 62 Lê Lợi, Quận 1, TP Hồ Chí Minh</td>
                        </tr>
                        <tr>
                            <td><img src="../../RauCuQuaOrganica/css/lien-he/img/f.png" alt=""></td>
                            <td>1900636467</td>
                        </tr>
                        <tr>
                            <td><img src="../../RauCuQuaOrganica/css/lien-he/img/s.png" alt=""></td>
                            <td>cskh@fahasa.com.vn</td>
                        </tr>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form">
                    <table>
                        <tr>
                            <td><input type="text" placeholder="Họ và tên"></td>
                            <td><input type="text" placeholder="Email"></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Số điện thoại"></td>
                            <td><input type="text" placeholder="Địa chỉ"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea name="" placeholder="Lời nhắn" id="" cols="62" rows="4"></textarea> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> <button>GỬI</button> </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-12">
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.487899701265!2d106.69794031526038!3d10.773894262185443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f475ec42b0b%3A0xbcc64335770d221d!2zNjIsIDYwIEzDqiBM4bujaSwgQuG6v24gTmdow6ksIFF14bqtbiAxLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmggNzEwMjAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1671018493454!5m2!1svi!2sus" width = 100% height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                        <img src="../css/trang-chu/img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <h5>Shop</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>Hỗ trợ</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Tin khuyến mãi</h5>
                    </div>
                </div>

                <div class="row" style="margin-top: 0px;">
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                <p>
                                Nhiệm vụ của chúng tôi là mang đến những sản phẩm chất lượng với giá cả tốt nhất cho khách hàng. Được hỗ trợ khách hàng là niềm vinh dự của chúng tôi<br>
                                Xin cám ơn!
                                </p>
                                </li>
                                <li><i class="fa fa-facebook "></i>
                                    <i class="fa fa-firefox"></i>
                                    <i class="fa fa-pinterest-p"></i>
                                    <i class="fa fa-youtube"></i>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li><p>Trang chủ</p></li>
                                <li><p>Cửa hàng</p></li>
                                <li><p>Giới thiệu</p></li>
                                <li><p>Liên hệ</p></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li><p>Ưu đãi</p></li>
                                <li><p>Giao nhận</p></li>
                                <li><p>Đổi trả</p></li>
                                <li><p>Bảo mật</p></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>Nhập vào email của bạn để đăng ký nhận tin khuyến mãi ...</p>
                                </li>
                                <li>
                                    <input type="text" placeholder="You@gmail.com">
                                    <a href="#">Đăng ký</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </>
    <script type="text/javascript">
        const nextIcon = ' <i class="fa fa-chevron-left" style="font-size:36px;color:black"></i>';
        const preIcon = ' <i class="fa fa-chevron-right" style="font-size:36px;color:black"></i>';
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            navText: [
                nextIcon,
                preIcon
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1200: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>

    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>

</body>
</html>