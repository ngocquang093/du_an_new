<?php

function get_top10_luotxem() {
    $sql = "SELECT  san_pham.ten_san_pham, luot_xem FROM san_pham ".
    "ORDER BY san_pham.luot_xem DESC LIMIT 10";
    $list = pdo_query($sql);

    return $list;
}

function get_top10_banchay() {
    $sql = "SELECT san_pham.ten_san_pham ,SUM(don_hang_chi_tiet.so_luong) as so_luong FROM don_hang_chi_tiet 
    INNER JOIN san_pham ON don_hang_chi_tiet.ma_san_pham = san_pham.ma_san_pham GROUP BY don_hang_chi_tiet.ma_san_pham
    ORDER BY so_luong DESC";
    $list = pdo_query($sql);

    return $list;
}