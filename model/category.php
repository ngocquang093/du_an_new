<?php
function add_loai_sp($ten_loai)
{
    $sql = "INSERT INTO loai_sp VALUES ('$ten_loai',null)";
    pdo_execute($sql);
}

function delete_loai_sp($id)
{
    $sql = "DELETE FROM loai_sp WHERE ma_loai=" . $id;
    pdo_execute($sql);
}

function get_all_loai_sp()
{
    $sql = "SELECT * FROM loai_sp";
    $results = pdo_query($sql);
    return $results;
}
function get_one_loai_sp($id)
{
    $sql = "SELECT * FROM loai_sp WHERE ma_loai=" . $id;
    $result = pdo_query_one($sql);
    return $result;
}

function edit_loai_sp($id,$ten_loai)
{
    $sql = "UPDATE loai_sp SET ten_loai='$ten_loai' WHERE ma_loai='$id'"  ;
    pdo_execute($sql);
}
