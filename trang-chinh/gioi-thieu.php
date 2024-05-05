<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../RauCuQuaOrganica/css/chi-tiet-sp/products.css">
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
    
    <div class="container" style="margin-top: 80px;">
        <div class="row">
        <div class="col-sm-4">
            <img src="../css/trang-chu/img/banner.jpg" alt="" style = "width:100%;">
        </div>
        <div class="col-sm-8">

        <h2><strong>GIỚI THIỆU ORGANICA</strong></h2>

        <div class="row">
            <div class="col-sm-12">
                <h4><br>Về ORGANICA</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <p style = "text-align:justify">Organica là hệ thống phát triển và phân phối thực phẩm hữu cơ được thành lập vào đầu năm 2013 với mục tiêu giúp người tiêu dùng Việt Nam có một cuộc sống khỏe mạnh hơn thông qua những loại thực phẩm hữu cơ có chứng nhận, thực phẩm tự nhiên và không có nguồn gốc biến đổi gene (GMO).<br><br>
                <strong>Thực phẩm hữu cơ Organica có chứng nhận quốc tế, hoàn hảo cho sức khỏe của mẹ và bé cũng như gia đình bạn.</strong><br><br>
                Vào năm 2015, sau nhiều nỗ lực tự phát triển và sản xuất, trang trại Organica tại Long Thành, Đồng Nai đã được cấp chứng nhận hữu cơ của Mỹ (USDA) và Liên minh châu Âu (EU), trở thành trang trại rau nhiệt đới hữu cơ đầu tiên ở Việt Nam. Tiếp nối sau đó, năm 2017 vườn Organica Ba Vì cũng đã được tổ chức Control Union đánh giá đạt tiêu chuẩn hữu cơ của Mỹ và châu Âu. Organica còn sử dụng Traceverified, dịch vụ truy xuất nguồn gốc điện tử duy nhất của Việt Nam, với mong muốn minh bạch thông tin và cam kết quá trình canh tác hữu cơ của mình với người tiêu dùng.<br><br>
                Ngoài các trang trại hữu cơ tự đầu tư, hiện Organica cũng đang liên kết và hỗ trợ nông dân ở nhiều địa phương chuyển đổi sang canh tác hữu cơ tiến tới lấy chứng nhận hữu cơ quốc tế để bao tiêu sản phẩm.<br><br>
                Bên cạnh các sản phẩm phát triển tại các trang trại, Organica cũng phối hợp với các đơn vị khác có chứng nhận hữu cơ để phân phối các sản phẩm đến tay người tiêu dùng VN và nhập khẩu các sản phẩm hữu cơ để phân phối trong nước. Đến nay, Organica đã có gần 1.000 mặt hàng có chứng nhận hữu cơ các loại bao gồm các loại thực phẩm tươi, thực phẩm khô, các loại gia vị hữu cơ, mỹ phẩm hữu cơ, sản phẩm chăm sóc gia đình đến các sản phẩm chăm sóc cá nhân làm từ bông (cotton) có chứng nhận hữu cơ quốc tế. Hiện Organica đang làm việc với các đối tác tại Mỹ và EU để đưa về VN các sản phẩm hữu cơ còn thiếu tại VN để hoàn thiện các chủng loại sản phẩm hữu cơ đáp ứng yêu cầu của khách hàng.<br><br>
            </p>
            </div>
            <div><img src="../css/trang-chu/img/gioithieu.jpg" alt="" style = "width:100%;"><br><br></div>
        </div>

        <div class="row">
            <div class="col-sm-6">
            <h4>Tầm nhìn</h4>
            <p style = "text-align:justify; margin-top:10px">Chúng tôi lựa chọn kinh doanh ở phân khúc Thực phẩm hữu cơ (Organic Foods) và Thực phẩm tự nhiên (Natural Foods) bởi chúng tôi thực sự đam mê với lĩnh vực này. Chúng tôi hoàn toàn tin tưởng rằng những sản phẩm tạo ra từ quá trình canh tác và sản xuất theo phương thức hữu cơ và tự nhiên tốt cho cơ thể mọi người, tốt hơn cho cộng đồng và tốt hơn cho hành tinh mà chúng ta đang sống.<br><br>
            Chúng tôi cũng hiểu rằng, ăn thực phẩm sạch là quyền lợi của mỗi người tiêu dùng. Tuy nhiên trong điều kiện hiện tại của Việt Nam, thực phẩm an toàn đang là điều xa xỉ thì thực phẩm hữu cơ lại càng khó tiếp cận cả về nguồn cung cấp lẫn giá cả.
            </p>
            </div>
            <div class="col-sm-6">
            <h4>Sứ mệnh</h4>
            <p style = "text-align:justify; margin-top:10px">Sứ mệnh của Organica đó là giúp mọi người dễ dàng tiếp cận hơn với các loại thực phẩm hữu cơ, thực phẩm tự nhiên.<br>Không chỉ cung cấp các sản phẩm hữu cơ, chúng tôi còn đem đến những thông tin hữu ích về sức khỏe mà thực phẩm hữu cơ đem lại cho con người và cộng đồng.
            <br>Mỗi người có nhu cầu và cách tiếp cận với thực phẩm hữu cơ, thực phẩm tự nhiên theo một cách khác nhau, vì vậy, chúng tôi có mặt ở đây để hỗ trợ bạn bằng cách:
            <ul>
                <li>Chỉ cung cấp những loại thực phẩm hữu cơ, thực phẩm tự nhiên đạt những chứng nhận uy tín nói chung và được kiểm chứng bởi Organica nói riêng.</li>
                <li>Khởi tạo những mối quan hệ tích cực, lâu dài và tin tưởng giữa Organica với khách hàng, nhân viên, nhà cung cấp và cộng đồng.</li>
                <li>Hỗ trợ phát triển các trang trại, cộng đồng nhỏ vùng sâu vùng xa, vùng dân tộc ít người và các đối tượng dễ bị tổn thương trong xã hội canh tác theo phương thức hữu cơ, phương thức tự nhiên để có cuộc sống tốt đẹp hơn.</li>
            <ul>
            </p>
            <div><img src="../css/trang-chu/img/gioithieu1.jpg" alt="" style = "width:100%;"></div>
            </div>
        </div>
        </div>
        </div><br><br>
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
                                    <p>Nhập vào email của bạn để đăng ký nhận tin khuyến mãi...</p>
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