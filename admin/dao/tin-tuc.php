<?php
// Kết nối đến cơ sở dữ liệu
require_once('pdo.php');

// Hàm thêm tin tức mới
function tin_tuc_insert($tieu_de, $noi_dung, $ngay_dang) {
    $sql = "INSERT INTO tin_tuc(tieu_de, noi_dung, ngay_dang) VALUES (?, ?, ?)";
    pdo_execute($sql, $tieu_de, $noi_dung, $ngay_dang);
}

// Hàm cập nhật tin tức
function tin_tuc_update($ma_tt, $tieu_de, $noi_dung, $ngay_dang) {
    $sql = "UPDATE tin_tuc SET tieu_de=?, noi_dung=?, ngay_dang=? WHERE ma_tt=?";
    pdo_execute($sql, $tieu_de, $noi_dung, $ngay_dang, $ma_tt);
}

// Hàm xóa tin tức theo mã tin tức
function tin_tuc_delete($ma_tt) {
    $sql = "DELETE FROM tin_tuc WHERE ma_tt=?";
    if (is_array($ma_tt)) {
        foreach ($ma_tt as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_tt);
    }
}

// Hàm lấy tất cả tin tức từ cơ sở dữ liệu
function tin_tuc_select_all() {
    $sql = "SELECT * FROM tin_tuc ORDER BY ngay_dang DESC";
    return pdo_query($sql);
}

// Hàm lấy tin tức theo mã tin tức
function tin_tuc_select_by_id($ma_tt) {
    $sql = "SELECT * FROM tin_tuc WHERE ma_tt=?";
    return pdo_query_one($sql, $ma_tt);
}
?>
