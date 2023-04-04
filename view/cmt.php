<?php
session_start();
include '../model/pdo.php';
include '../model/comment.php';
$ma_san_pham = $_REQUEST['ma_san_pham'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
</head>

<body>
<div>
    <table class="cmt">
        <tr>
            <td width="10%">Nội dung</td>
            <td width="10%">ID người dùng</td>
            <td width="10%">Thời gian</td>
        </tr>
        <?php
        $dscmt = loai_cmt($ma_san_pham);
        foreach ($dscmt as $cmt) {
            extract($cmt);
            echo '
                        <tr>
                            <td width="10%">'.$noi_dung.'</td>
                            <td width="10%">'.$ma_khach_hang.'</td>
                            <td width="10%">'.$ngay_binh_luan.'</td>
                        </tr>
                    ';
        }

        ?>
    </table>
</div>
<?php
if(isset($_SESSION['user'])){
    ?>
    <form class="flex" action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
        <input type="hidden" name="ma_san_pham" value="<?=$ma_san_pham?>">
        <input style="width:50%;height:30px;margin:10px 0px;border-radius:20px; padding:0px 20px" type="text" name="noi_dung">
        <input style="width:30%;height:30px;margin:10px 0px;border-radius:20px" type="submit" name="send" value="Gửi ">
    </form>
    <?php
}
?>
<?php
if(isset($_POST['send'])&&($_POST['send'])){
    $noi_dung = $_POST['noi_dung'];
    $ma_san_pham = $_POST['ma_san_pham'];
    $ten_khach_hang = $_SESSION['user']['ma_khach_hang'];
    $date = date("d-m-y",time());
    binh_luan_insert($noi_dung,$ten_khach_hang,$ma_khach_hang,$date);
    header("Location: ".$_SERVER['HTTP_REFERER']);
}

?>
</body>
</html>