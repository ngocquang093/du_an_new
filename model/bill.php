<?php
    function add_bill($ten_nguoi_nhan, $so_dien_thoai, $dia_chi, $ngay_dat_hang, $pttt, $pt_ship, $don_gia, $chu_thich, $ma_khach_hang) {
        $sql = "INSERT INTO `duan`.`don_hang` (`ma_khach_hang`, `ten_nguoi_nhan`, `dia_chi`, `so_dien_thoai`, `ngay_dat_hang`, `pttt`, `trang_thai`, `don_gia`, `chu_thich`, `pt_ship`) " 
        . "VALUES ($ma_khach_hang, '$ten_nguoi_nhan', '$dia_chi', '$so_dien_thoai', '$ngay_dat_hang', $pttt, '1', $don_gia, '$chu_thich', $pt_ship);";
        $id_bill = pdo_execute_lastInsertId($sql);
        return $id_bill;
    }

    function add_bill_detail($ma_don_hang, $ma_san_pham, $so_luong, $don_gia) {
        $sql = "INSERT INTO `duan`.`don_hang_chi_tiet` (`ma_don_hang`, `ma_san_pham`, `so_luong`, `don_gia`) " 
        . "VALUES ($ma_don_hang, $ma_san_pham, $so_luong, $don_gia);";
        pdo_execute($sql);
    }

    function get_bill($id, $ma_don_hang) {
        $sql = "SELECT * FROM don_hang ".
        "INNER JOIN pttt ON don_hang.pttt = pttt.ma_pttt ".
        "INNER JOIN pt_ship ON don_hang.pt_ship = pt_ship.ma_pt ".
        "INNER JOIN trang_thai_don_hang ON don_hang.trang_thai = trang_thai_don_hang.ma_trang_thai ".
        "WHERE don_hang.ma_don_hang = $ma_don_hang AND don_hang.ma_khach_hang = $id";

        $don_hang = pdo_query_one($sql);
        return $don_hang;
    }

    function get_bill_detail($ma_don_hang) {
        $sql = "SELECT san_pham.ten_san_pham, don_hang_chi_tiet.don_gia, don_hang_chi_tiet.so_luong, loai_sp.ten_loai FROM don_hang_chi_tiet ".
        "INNER JOIN san_pham ON don_hang_chi_tiet.ma_san_pham = san_pham.ma_san_pham ".
        "INNER JOIN loai_sp ON san_pham.ma_loai = loai_sp.ma_loai ".
        "WHERE don_hang_chi_tiet.ma_don_hang = $ma_don_hang";

        $list_san_pham = pdo_query($sql);
        return $list_san_pham;
    }
