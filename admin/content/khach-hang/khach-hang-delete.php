<?php
    require_once ('../../dao/khach-hang.php');
    $db = new mysqli('localhost', 'root', '', 'staffcoffee');

    $ma_khach_hang = $_GET['ma_kh'];
    $sql = "select * from khach_hang where ma_kh = '$ma_khach_hang'";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();

    if ($row['trang_thai'] == 0){
        $sql = "update khach_hang SET trang_thai = 1 where ma_kh = '$ma_khach_hang'";
        $result = $db->query($sql);
        if($result){
            echo '<script language="javascript">;
            alert("Mo khoa thanh cong");
            window.location.replace("khach-hang-list.php");
            </script>';
        }
    }
    else{
        $sql = "update khach_hang SET trang_thai = 0 where ma_kh = '$ma_khach_hang'";
        $result = $db->query($sql);
        if($result){
            echo '<script language="javascript">;
            alert("Khoa thanh cong");
            window.location.replace("khach-hang-list.php");
            </script>';

        }
    }


?>