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
