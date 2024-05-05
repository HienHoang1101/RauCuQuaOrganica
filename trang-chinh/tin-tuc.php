<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../RauCuQuaOrganica/css/chi-tiet-sp/products.css">
    <link rel="stylesheet" href="../../RauCuQuaOrganica/css/tin-tuc/tintuc.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../RauCuQuaOrganica/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../RauCuQuaOrganica/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
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
            <div class="col-md-4">
                <div class="row" style="margin-top: 50px;">
                    <div class="baiviet">
                        <h5>BÀI VIẾT MỚI</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="out">

                        <table>
                            <tr>
                                <td>
                                    <img src="../../RauCuQuaOrganica/css/tin-tuc/img/baiviet1.png" alt="">
                                </td>
                                <td>
                                    <p>Organica tham gia Ngày hội xanh Phú Mỹ Hưng lần 5 - 2022</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../RauCuQuaOrganica/css/tin-tuc/img/baiviet2.jpg" alt="">
                                </td>
                                <td>
                                    <p>Organica áp dụng chương trình tặng quà hấp dẫn cho khách hàng mới</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../RauCuQuaOrganica/css/tin-tuc/img/baiviet3.jpg" alt="">
                                </td>
                                <td>
                                    <p>Chương trình “Rau đồng giá - Mua thả ga” chỉ 15K tại Organica Hà Nội</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="card" style="width: 14rem;">
                        <img src="../../RauCuQuaOrganica/css/tin-tuc/img/tintuc1.png" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">
                            <p class="card-text">ORGANICA TRÊN BÁO STRAITSTIMES SINGAPORE</p>
                            <p class="gach"></p>
                            <p class="nho">ORGANICA TRÊN BÁO STRAITSTIMES CỦA SINGAPORE!!!
                            </p>
                            <p class="ngay"> <img src="../../RauCuQuaOrganica/css/tin-tuc/img/organic.png" alt=""> </p>
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../RauCuQuaOrganica/css/tin-tuc/img/tintuc2.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">
                            <p class="card-text">THẢO ORGANICA VÀ CÂU CHUYỆN TRUYỀN CẢM HỨNG VỀ SỨC MẠNH NỘI LỰC</p>
                            <p class="gach"></p>
                            <p class="nho">Với thành công của chuỗi cửa hàng thực phẩm hữu cơ, Thảo Organica được Asus mời làm nhân vật truyền cảm hứng cho phụ nữ Việt vượt qua giới hạn và thực hiện ước mơ của mình.</p>
                            <p class="ngay"> <img src="../../RauCuQuaOrganica/css/tin-tuc/img/organic.png" alt=""> </p>
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../RauCuQuaOrganica/css/tin-tuc/img/tintuc3.png" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">
                            <p class="card-text">ORGANICA TRÊN CHƯƠNG TRÌNH CÀ PHÊ KHỞI NGHIỆP HTV ĐẦU NĂM 2017</p>
                            <p class="gach"></p>
                            <p class="nho">Mời các bạn cùng xem để hiểu hơn về những khó khăn, thách thức khi khởi nghiệp trong lĩnh vực nông nghiệp hữu cơ.</p>
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../RauCuQuaOrganica/css/tin-tuc/img/tintuc4.png" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">
                        <p class="card-text">THẢO “ORGANIC” KỂ CHUYỆN LÀM NÔNG NGHIỆP HỮU CƠ</p>
                        <p class="gach"></p>
                        <p class="nho">“Cần có một hệ sinh thái những người làm nông nghiệp hữu cơ nhằm tăng sản lượng, hạ giá thành để người dân Việt Nam nào cũng có thể sử dụng nguồn thực phẩm sạch, đạt tiêu chuẩn quốc tế”.</p>
                        <p class="ngay"> <img src="../../RauCuQuaOrganica/css/tin-tuc/img/organic.png" alt=""> </p>   
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../RauCuQuaOrganica/css/tin-tuc/img/tintuc5.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">
                        <p class="card-text">CHUYỆN CỦA "THẢO ORGANIC"</p>
                        <p class="gach"></p>
                        <p class="nho">Từ một khởi đầu kinh doanh không suôn sẻ, lối rẽ sang nông nghiệp hữu cơ như một cơ duyên đã đưa Thảo trở thành một trong những người đầu tiên đạt được tiêu chuẩn nông sản Organic quốc tế tại Việt Nam.</p>
                        <p class="ngay"> <img src="../../RauCuQuaOrganica/css/tin-tuc/img/organic.png" alt=""> </p>
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../RauCuQuaOrganica/css/tin-tuc/img/xakho.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">
                        <p class="card-text">XẢ KHO LỚN NHẤT NĂM CÙNG BITEX NHA</p>
                        <p class="gach"></p>
                        <p class="nho">Ngập tràn balo xịn giá chất cùng máy tính cầm tay giá xịn!</p>
                        <p class="ngay"> <img src="../../RauCuQuaOrganica/css/tin-tuc/img/organic.png" alt=""> </p>
                        </div>
                    </div>
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
                                    Nhiệm vụ của chúng tôi là mang đến những sản phẩm chất lượng với giá cả tốt nhất cho khách hàng. Được hỗ trợ khách hàng là niềm vinh dự của chúng tôi.<br>
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