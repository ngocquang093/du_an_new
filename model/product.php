<?php

function get_list_product($st, $step)
{
    $sql = "SELECT * FROM san_pham ORDER BY san_pham.ma_san_pham DESC LIMIT $st,$step";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function get_product($id)
{
    $sql = "SELECT * FROM san_pham INNER JOIN loai_sp ON loai_sp.ma_loai = san_pham.ma_loai WHERE san_pham.ma_san_pham = $id";
    $pro = pdo_query_one($sql);
    return $pro;
}

function get_list_cate()
{
    $sql = "SELECT loai_sp.ten_loai, loai_sp.ma_loai, COUNT(san_pham.ma_loai) as so_luong " .
        "FROM san_pham INNER JOIN loai_sp ON san_pham.ma_loai = loai_sp.ma_loai " .
        "GROUP BY san_pham.ma_loai";
    $listCate = pdo_query($sql);

    return $listCate;
}

function get_list_pro_shop($ma_loai, $page, $sort)
{
    $st = 9 * ($page - 1);
    switch ($sort) {
        case 0:
            $sql = "SELECT * FROM san_pham " .
                "WHERE san_pham.ma_loai = $ma_loai " .
                "ORDER BY san_pham.ma_san_pham DESC LIMIT $st, 9";
            break;

        case 1:
            $sql = "SELECT * FROM san_pham " .
                "WHERE san_pham.ma_loai = $ma_loai " .
                "ORDER BY san_pham.don_gia ASC LIMIT $st, 9";
            break;

        case 2:
            $sql = "SELECT * FROM san_pham " .
                "WHERE san_pham.ma_loai = $ma_loai " .
                "ORDER BY san_pham.don_gia DESC LIMIT $st, 9";
            break;
    }

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function get_count_cate($ma_loai)
{
    $sql = "SELECT san_pham.ma_loai, COUNT(san_pham.ma_loai) as so_luong FROM san_pham WHERE san_pham.ma_loai = $ma_loai GROUP BY san_pham.ma_loai ";
    $so_luong = pdo_query_one($sql);
    return $so_luong['so_luong'];
}

function flus_luot_xem($id) {
    $sql = "UPDATE `duan`.`san_pham` SET `luot_xem` = `luot_xem` + 1 WHERE san_pham.ma_san_pham = $id;";
    pdo_execute($sql);
}

function get_avg_rate($id) {
    $sql = "SELECT AVG(binh_luan.rate) as rate_avg FROM binh_luan WHERE binh_luan.ma_san_pham = $id";
    $rate = pdo_query_one($sql)["rate_avg"];
    if($rate == null) $rate = 0;
    return $rate;
}

function get_qty($id) {
    $sql = "SELECT ten_san_pham ,so_luong_san_pham FROM san_pham WHERE ma_san_pham = $id";
    $item = pdo_query_one($sql);

    return $item;
}

function minus_qty($id, $qty) {
    $sql = "UPDATE `duan`.`san_pham` SET `so_luong_san_pham` = `so_luong_san_pham` - $qty WHERE `ma_san_pham` = $id;";
    pdo_execute($sql);
}