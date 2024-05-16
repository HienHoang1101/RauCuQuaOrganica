<?php
// Khai báo các biến và hàm cần thiết
$so_hang_hoa_tren_trang = 10; // Số lượng hàng hóa trên mỗi trang
$trang_hien_tai = isset($_GET['page']) ? $_GET['page'] : 1; // Lấy trang hiện tại từ tham số truy vấn URL
$offset = ($trang_hien_tai - 1) * $so_hang_hoa_tren_trang; // Tính toán OFFSET cho truy vấn SQL

// Truy vấn cơ sở dữ liệu với OFFSET và LIMIT
require_once ('../../dao/hang-hoa.php');
$items = hang_hoa_select_all_limit($so_hang_hoa_tren_trang, $offset);

// Tính tổng số hàng hóa
$tong_so_hang_hoa = hang_hoa_count_all();
$tong_so_trang = ceil($tong_so_hang_hoa / $so_hang_hoa_tren_trang);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>ADMIN</title>
    <link href="../../../css/admin/css/bootstrap.css" rel="stylesheet" />
    <link href="../../../css/admin/css/font-awesome.css" rel="stylesheet" />
    <link href="../../../css/admin/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../../../RauCuQuaOrganica/trang-chinh/"><strong style = "margin-left: 40px;">ORGANICA</strong></a>
            </div>
           
    <!-- Nav bar-->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Cài đặt</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../../../../RauCuQuaOrganica/tai-khoan/dang-xuat.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>

        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="../thong-ke/thong-ke-list.php"><i class="fa fa-dashboard"></i>TRANG CHỦ</a>
                    </li>
                    <li>
                        <a href="../loai-hang/loai-hang-list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>LOẠI HÀNG</a>
                    </li>
                    <li>
                        <a href="../hang-hoa/hang-hoa-list.php"><i class="fa fa-qrcode"></i>HÀNG HÓA</a>
                    </li>
                    
                    <li>
                        <a href="../khach-hang/khach-hang-list.php"><i class="fa fa-user"></i>KHÁCH HÀNG</a>
                    </li>
                    <li>
                        <a href="../binh-luan/binh-luan-list.php"><i class="fa fa-comment-o" aria-hidden="true"></i>BÌNH LUẬN</a>
                    </li>
                    <li>
                        <a href="../hoa-don/hoa-don-list.php"><i class="fa fa-edit"></i>ĐƠN HÀNG</a>
                    </li>       
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ HÀNG HÓA</h1>
                            <p>Dưới đây là danh sách các hàng hóa đã được thêm vào: </p>

                            <!-- /. XỬ LÝ CODE PHP  -->
                            <!-- /. CONTENT  -->
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>MÃ HH</th>
                                    <th>TÊN HH</th>
                                    <th>HÌNH ẢNH</th>
                                    <th>ĐƠN GIÁ</th>
                                    <th>GIẢM GIÁ</th>
                                    <th>HÀNH ĐỘNG</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php foreach($items as $item){ //lấy tt của mảng
                                     extract($item);
                                    ?> 
                                  <tr>
                                    <td><?=$ma_hh?></td>
                                    <td><?=$ten_hh?></td>
                                    <td><img src="/RauCuQuaOrganica/css/admin/images/products/<?=$hinh?>" alt="" style="width:80px;"></td>
                                    <td><?=number_format($don_gia)?> <sup>đ</sup></td>
                                    <td><?=$giam_gia?> <sup>%</sup></td>
                                    <td> 
                                        <a href="hang-hoa-update.php?ma_hh=<?=$ma_hh?>"><button class="btn btn-primary">Sửa</button></a>
                                        <a onclick = "return confirm('Bạn có chắc chắn muốn xóa ?')" href="hang-hoa-delete.php?action=delete&ma_hh=<?=$ma_hh?>"><button class="btn btn-danger">Xóa</button></a>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                              </table>
                              <div>
                              <a href="hang-hoa-new.php"><button class="btn btn-danger">Thêm mới</button></a>

                                </div>
                              <ul class="pagination justify-content-center">
    <?php for ($i = 1; $i <= $tong_so_trang; $i++): ?>
        <li <?php if ($i == $trang_hien_tai) echo 'class="active"'; ?>>
            <a href="?page=<?= $i ?>"><?= $i ?></a>
        </li>
    <?php endfor; ?>
</ul>

                           
                        </div>
		</div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../../../css/admin/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../../../css/admin/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../../../css/admin/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="../../../css/admin/js/custom-scripts.js"></script>
    
   
</body>
</html>
