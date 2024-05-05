<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/trang-chu/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/trang-chu/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/trang-chu/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../RauCuQuaOrganica/css/danh-sach-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../RauCuQuaOrganica/css/danh-sach-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../RauCuQuaOrganica/css/danh-sach-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/ihover-gh-pages/src/ihover.css">
    <link rel="stylesheet" href="../css/ihover-gh-pages/src/ihover.min.css">

</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../RauCuQuaOrganica/css/danh-sach-sp/plugin/js/owl.carousel.min.js"></script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="background-color: #17594A; text-align: center">
                <div class="login">
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
            <div class="col-md-4" style="background-color: #17594A;
            text-align: center">
            </div>
            <div class="col-md-4" style="background-color: #17594A;
            text-align: center">

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
            <div class="col-md-12">
                <div class="caption" style = "color : #17594A">
                    <h1><strong>TIN TỪ CHẤT - SẠCH TỪ TÂM</strong><br><br></h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-6">
                <div class="anhmoi">
                    <img src="../css/trang-chu/img/546c3f166600357.641b012054907.gif" alt="">
                </div>
                <div class="caption">
                    <p><h4><strong>Organica</strong> cung cấp rau, củ, quả, trái cây hữu cơ trong và ngoài nước có chứng nhận hữu cơ quốc tế</h4></p>
                </div> 
            </div>
            <div class="col-md-6">
                <div class="row">
                <div class="caption">
                    <p><h4>Cùng <strong>Organica</strong> ăn ngon sống khỏe</h4></p>
                </div> 
                    <div class="anhmoi">
                        <img src="../css/trang-chu/img/08593e166600357.641b012053859.gif" alt="">
                    </div>
                    
                </div>
                <div class="row" style="margin-top: 30px;">
                <div class="col-md-6">
                    <div class="caption">
                    <p><h4>Phong cách ẩm thực</h4></p>
                    </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="anhmoi">
                            <img src="../css/trang-chu/img/oniongif.gif" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <?php
        require_once ('../admin/dao/hang-hoa.php');
        $items = hang_hoa_select_all_cafe();
    ?>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme ">
                <?php 
                    foreach($items as $item){
                        extract($item);
                ?>
                    <div class="item">
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img style="width: 200px" src="../../RauCuQuaOrganica/css/admin/images/products/<?=$hinh?>" alt="ds"></a>
                    </div>
                <?php }?>
                </div>
            </div>
        </div>
    </div>

    <div class="container now1">
        <div class="row" >
            <div class="col-md-4" >
                <div class="pick">
                    <ul>
                        <li>
                            <p><i class="fa fa-shopping-bag"></i></p>
                        </li>
                        <li>
                            <p><span>Miễn phí</span> vận chuyển <br> dành cho các hóa đơn trên 200K</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="pick">
                    <ul>
                        <li>
                            <p>
                                <i class="fa fa-heartbeat"></i>
                            </p>
                        </li>
                        <li>
                            <p>Đội ngũ tư vấn <span>nhiệt tình</span> <br> và hỗ trợ 24/7</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="pick">
                    <ul>
                        <li>
                            <p><i class="fa fa-gift"></i></p>
                        </li>
                        <li>
                            <p><span>Ưu đãi</span> quà tặng hấp <br> dành cho khách hàng thân thiết</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption" style = "color : #17594A">
                    <h1> SẢN PHẨM NỔI BẬT </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 50px;">
    <?php
        $items = hang_hoa_sale_9();
    ?>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme ">
                <?php foreach($items as $item){
                    extract($item);
                    ?>
                    <div class="item">
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img style="width: 200px" src="../../RauCuQuaOrganica/css/admin/images/products/<?=$hinh?>" alt="ds"></a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

    <?php
        $items = hang_hoa_select_all_tratraicay();
    ?>

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <?php foreach($items as $item){ 
                extract($item);
                ?>
            <div class="col-md-3">
                <div class="card">
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img class="card-img-top" src="../../RauCuQuaOrganica/css/admin/images/products/<?=$hinh?>" alt="Card image top"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?=$ten_hh?></h5>
                        <p class="card-subtitle"><?=number_format($don_gia-($don_gia*$giam_gia/100)) ?> VNĐ</p>
                    </div>
                </div>
            </div>
            <?php } ?>         

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
    </div>

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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>