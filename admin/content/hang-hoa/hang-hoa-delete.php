<?php
require_once('../../dao/hang-hoa.php');
$conn = new mysqli('localhost','root','','staffcoffee');

extract($_REQUEST);

if (isset($_GET['action'])){
    $ma_hh = $_GET['ma_hh'];
    $sql = "SELECT * FROM hoa_don_chi_tiet WHERE ma_hh = '$ma_hh'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // There are related records, so update trang_thai to 0
        $sql = "UPDATE hang_hoa SET trang_thai = 0 WHERE ma_hh = '$ma_hh'";
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Ẩn thành công");
            window.location.href = "hang-hoa-list.php"
    
</script>';
        }
    } else {
        // No related records, so safe to delete
        $sql = "DELETE FROM hang_hoa WHERE ma_hh = '$ma_hh'";
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Xóa thành công");
            window.location.href = "hang-hoa-list.php"
</script>';
        }
    }
}

?>
