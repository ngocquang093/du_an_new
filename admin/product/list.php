<?php
$results = get_all_san_pham();
?>

<div style="margin-left: 350px">
<div>
    <div class="alert alert-success" role="alert">
        <h2>QUẢN LÝ SẢN PHẨM</h2>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">STT</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Đơn Giá</th>
            <th scope="col">Mã Loại</th>
            <th scope="col">  Hình ảnh</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Ngày tạo</th>
            <th scope="col">Giá Khuyến Mại</th>
            <th scope="col">Số Lượng</th>
            <th scope="col">Chức Năng</th>
            
            
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php foreach ($results as $key => $value){ ?>
            <tr>
                <th scope="row"><input type="checkbox"></th>
                <td><?php echo $value['ma_san_pham'] ?></td>
                <td style="width: 200px;"><?php echo $value['ten_san_pham'] ?></td>
                <td><?php echo $value['don_gia'] ?></td>
                <td><?php echo $value['ma_loai'] ?></td>
                <td><img src="../media/product/<?php echo $value['anh_san_pham'];?>" style=" width: 150px;height: 100px;border-radius: 50%;" alt="ảnh sp"></td>              
                <td><?php echo $value['mo_ta_tom_tat']; ?></td>
                <td><?php echo $value['ngay_tao'] ?></td>
                <td><?php echo $value['gia_khuyen_mai'] ?></td>
                <td><?php echo $value['so_luong_san_pham'] ?></td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="location.href='index.php?act=update_product&editId=<?php echo $value['ma_san_pham']; ?>'">Sửa</button>
                    <!-- <button type="button" class="btn btn-primary" onclick="location.href='index.php?act=edit_san_pham&editId=<?php echo $value['ma_loai']; ?>'">Sửa</button> -->

                    <button type="button" class="btn btn-danger" onclick="
                        const result = confirm('Bạn có chắc chắn muốn xóa không?');
                        if(result){
                            location.href='index.php?act=list_products&deleteId=<?php echo $value['ma_san_pham']; ?>'
                    }">Xóa</button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="actions" style="margin-left: 10px;">
        <a href="index.php?act=product-add" type="button" class="btn btn-outline-secondary">Thêm mới</a>
    </div>
</div>



</div>