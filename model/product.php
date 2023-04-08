<?php

function get_list_product($st, $step)
{
    $sql = "SELECT * FROM san_pham ORDER BY san_pham.ma_san_pham DESC LIMIT $st,$step";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function get_product($id)
{
    $sql = "SELECT * FROM san_pham WHERE san_pham.ma_san_pham = $id";
    $pro = pdo_query_one($sql);
    return $pro;
}
// loai san pham
    function add_san_pham($ten_san_pham, $don_gia, $ma_loai, $anh_san_pham, $mo_ta_tom_tat, $ngay_tao, $gia_khuyen_mai, $so_luong) {
        $sql = "INSERT INTO san_pham VALUES (null, '$ten_san_pham', '$don_gia', '$ma_loai', '$anh_san_pham', '$mo_ta_tom_tat', 
            '$ngay_tao', '$gia_khuyen_mai', '$so_luong');";
        pdo_execute($sql);
    }

    function get_all_san_pham() {
        $sql = "SELECT * FROM san_pham";
        $results =pdo_query($sql);
        return $results;
    }
    function delete_san_pham($id) {
        $sql = "DELETE FROM san_pham WHERE ma_san_pham='$id';ALTER TABLE san_pham AUTO_INCREMENT= '$id';";
        pdo_execute($sql);
    }
    function get_one_san_pham($id) {
        $sql = "SELECT * FROM san_pham WHERE ma_san_pham=". $id;
        $product =  pdo_query_one($sql);
        return $product;
    }
    function edit_san_pham( $ma_san_pham, $ten_san_pham, $don_gia, $anh_san_pham, $mo_ta_tom_tat, $ngay_tao, $gia_khuyen_mai, $so_luong){
        $sql = "UPDATE san_pham SET ma_san_pham='$ma_san_pham', ten_san_pham='$ten_san_pham', don_gia='$don_gia', anh_san_pham='$anh_san_pham', 
            mo_ta_tom_tat='$mo_ta_tom_tat', ngay_tao='$ngay_tao', gia_khuyen_mai='$gia_khuyen_mai', so_luong='$so_luong',  WHERE id='$id'";
       pdo_execute($sql);
    }
?>



