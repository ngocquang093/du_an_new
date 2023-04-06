<?php
if(is_array($cmt)){
    extract($cmt);
}
?>
<div class="boxx"></div>
<div class="del">
    <form action="index.php?act=deletecmt" method="POST" enctype="multipart/form-data">
        <div class="box">
            <input class="hidden" type="hidden" name="id" value="<?php echo $ma_binh_luan ?>">
            <h2>Bạn chắc chắn muốn xóa? </h2>
            <input type="submit" value="Yes" name="delete">
            <input type="submit" value="No">

        </div>
    </form>
</div>