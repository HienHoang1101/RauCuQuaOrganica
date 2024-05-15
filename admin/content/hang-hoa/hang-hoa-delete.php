<?php
require_once('../../dao/hang-hoa.php');

extract($_REQUEST);

$result = hang_hoa_delete($ma_hh);

if ($result === true) {
    echo "Xóa sản phẩm thành công.";
} else {
    echo "Không thể xóa sản phẩm. Có thể sản phẩm đang tồn tại trong các hóa đơn khác.";
}

?>
