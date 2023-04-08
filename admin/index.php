<?php
session_start();

require "../model/pdo.php";
require "../model/product.php";
require "../model/category.php";
require "../model/user.php";
require "../global.php";


include "view/header.php";

if (isset($_GET['act'])) {

    $act = $_GET['act'];

    switch ($act) {
        case "listPro":
            if (isset($_POST['st'])) {
                $st = $_POST['st'];
                $step = $_POST['step'];
            } else {
                $st = 0;
                $step = 8;
            }
            $listPro = get_list_product($st, $step);
            echo_json($listPro);
            break;

        case "getPro":
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $pro = get_product($id);
                echo_json($pro);
            }
            break;

        case "addCart":
            if ($_POST['id']) {
                $cart = $_SESSION['cart'];
                $qtt = $_POST['qtt'];
                $id = $_POST['id'];
                $add = 1;
                foreach ($cart as $index => $item) {
                    if ($item['id'] == $id) {
                        $add = 0;
                        $_SESSION['cart'][$index]['qtt'] += $qtt;
                        break;
                    }
                }
                if ($add == 1) {
                    $sp = [
                        'id' => $id,
                        'qtt' => $qtt,
                    ];
                    $_SESSION['cart'][] = $sp;
                }
            }
            break;

        case "loadCart":
            $cart = $_SESSION['cart'];
            $listPro = [];
            foreach ($cart as $item) {
                $id = $item['id'];
                $qtt = $item['qtt'];
                $pro = get_product($id);
                $name = $pro['ten_san_pham'];
                $img = explode(", ", $pro['anh_san_pham'])[0];
                $price = ($pro['gia_khuyen_mai'] == -1) ? $pro['don_gia'] : $pro['gia_khuyen_mai'];
                $proLoad = [
                    'id' => $id,
                    "name" => $name,
                    'qtt' => $qtt,
                    'img' => $img,
                    'price' => $price,
                ];
                $listPro[] = $proLoad;
            }
            echo_json($listPro);
            break;

        case "removeCart":
            $cart = $_SESSION['cart'];
            $id = $_POST['id'];

            foreach ($cart as $index => $item) {
                if ($item['id'] == $id) {
                    unset($_SESSION['cart'][$index]);
                }
                break;
            }
            break;


//            Use----------------------------------     //
        case "list_user":
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw = $_POST['kyw'];
            }else{
                $kyw = "";
            }
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id = $_GET['id'];
            }else{
                $id =  0;
            }
            $list_user = user_all($kyw, $id);
            include 'user/list.php';
            break;
        case 'add_user':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_khach_hang = $_POST['ten_khach_hang'];
                $so_dt = $_POST['so_dt'];
                $email = $_POST['email'];
                $chuc_nang = $_POST['chuc_nang'];
                $mat_khau = $_POST['mat_Khau'];
                $dia_chi = $_POST['dia_chi'];

                insert_user($ten_khach_hang, $so_dt, $email, $chuc_nang, $mat_khau, $dia_chi);
                $thongbao = "Thêm thành công";
            }

            $list_user = user_all("",0);
            include 'user/add.php';
            break;
        case 'update_user':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $user= loadone_user($_GET['id']);
            }
            include 'user/update.php';
            break;
        case 'updateuser':
            if(isset($_POST['update_user'])&&($_POST['update_user'])){
                $id = $_POST['id'];
                $ten_khach_hang = $_POST['ten_khach_hang'];
                $so_dt = $_POST['so_dt'];
                $email = $_POST['email'];
                $chuc_nang = $_POST['chuc_nang'];
                $mat_khau = $_POST['mat_Khau'];
                $dia_chi = $_POST['dia_chi'];

                $update = update_user($id,$ten_khach_hang, $so_dt,$email, $chuc_nang, $mat_khau,$dia_chi);
                $thongbao = "Update thành công";
                $list_user = user_all("",0);
            }
            include 'user/list.php';
            break;

        case 'delete_user':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $user = loadone_user($_GET['id']);
            }
            include 'user/delete.php';
            break;
        case 'deleteuser':
            if(isset($_POST['delete']) && ($_POST['delete'])){
                $id = $_POST['id'];
                delete_user($id);
            }
            $list_user = user_all("",0);
            include 'user/list.php';
            break;
          // Category
          case 'btn-add':
            if(isset($_POST['btn-add']) && ($_POST['btn-add'])){
                $ten_loai =$_POST['ten_loai'];
                add_loai_sp($ten_loai);
            }
             include 'category/add.php';
            break;
            
            case 'btn-edit':
                if(isset($_GET['editId'])) {
                    $id = $_GET['editId'];
                    $row = get_one_loai_sp($id);
                }
            $categories = get_all_loai_sp();
            include "category/edit.php";
            break;
        case 'list_category':
            if (isset($_GET['deleteId'])) {
                $id = $_GET['deleteId'];
                delete_loai_sp($id);
            }
            $results = get_all_loai_sp();
            include 'category/list.php';
            break;
            
        // default:
        //     $categories = get_all_loai_sp();
        //     include "category/add.php";
        //     break;
        
        // product
        case 'product-add':
            $loai_sp = get_all_loai_sp();
            if(isset($_POST["them_product"])){
                $ten_san_pham = $_POST["ten_san_pham"];
                $don_gia = $_POST["don_gia"];
                $ma_loai = $_POST["ma_loai"];
                $anh_san_pham = $_FILES['anh_san_pham']['name'];
                $mo_ta_tom_tat = $_POST["mo_ta_tom_tat"];
                $ngay_tao = $_POST["ngay_tao"];
                $gia_khuyen_mai = $_POST["gia_khuyen_mai"];
                $so_luong = $_POST["so_luong"];
        
                 if(isset($_FILES["anh_san_pham"])){
                     $target_dir = "../media/product/";
                     $nameImg = $_FILES["anh_san_pham"]["name"];
                     $target_file = $target_dir.$nameImg;
                     $maxFileSize = 800000;
                     $allowUpload = true;
                     $allowTypes = ["jpg","png","jpeg","gif"];
                     $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                     
             
                     if($_FILES["anh_san_pham"]["size"] > $maxFileSize){
                         $error["img_size"] = "Khong duoc upload anh > ".$maxFileSize."(Byte)";
                         $allowUpload = false;
                     }
             
                     if(!in_array($imageFileType,$allowTypes)){
                         $error["img_type"] = "Chi duoc upload cac dinh dang jpg,png,jbeg,gif";
                         $allowUpload = false;
                     }
             
                     if($allowUpload == true){
                         move_uploaded_file($_FILES["anh_san_pham"]["tmp_name"],$target_file);
                     }
                     add_san_pham($ten_san_pham, $don_gia, $ma_loai, $anh_san_pham, $mo_ta_tom_tat, $ngay_tao, $gia_khuyen_mai, $so_luong);
                     $message = "Thêm thành công";
                    }
                }
                include 'product/add.php';
                break;

        case "update_product":
            $loai_sp = get_all_loai_sp();
                    // $id = $_GET['editId'];
                    // $product = get_one_san_pham($id);

                    $error = [];
                    if(isset($_POST["edit_san_pham"])){
                        $ma_sp = $_POST["ma_sp"];
                    $ten_san_pham = $_POST["ten_san_pham"];
                    $don_gia = $_POST["don_gia"];
                    $ma_loai = $_POST['loai_sp'];
                    $anh_san_pham = $_FILES['anh_san_phama']['name'];
                    $mo_ta_tom_tat = $_POST["mo_ta_tom_tat"];
                    $ngay_tao = $_POST["ngay_tao"];
                    $gia_khuyen_mai = $_POST["gia_khuyen_mai"];
                    $so_luong = $_POST["so_luong"];
                    
                    


                        if(isset($_FILES["anh_san_phama"])){
                            $target_dir = "../media/product/";
                            $nameImg = $_FILES["anh_san_phama"]["name"];
                            $target_file = $target_dir.$nameImg;
                            $maxFileSize = 800000;
                            $allowUpload = true;
                            $allowTypes = ["jpg","png","jpeg","gif"];
                            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                            

                            if($_FILES["anh_san_phama"]["size"] > $maxFileSize){
                                $error["img_size"] = "Khong duoc upload anh > ".$maxFileSize."(Byte)";
                                $allowUpload = false;
                            }

                            if(!in_array($imageFileType,$allowTypes)){
                                $error["img_type"] = "Chi duoc upload cac dinh dang jpg,png,jbeg,gif";
                                $allowUpload = false;
                            }

                            if($allowUpload == true){
                                move_uploaded_file($_FILES["anh_san_phama"]["tmp_name"],$target_file);
                            }
                            edit_san_pham( $ma_san_pham, $ten_san_pham, $don_gia, $anh_san_pham, $mo_ta_tom_tat, $ngay_tao, $gia_khuyen_mai, $so_luong);
                            $message = "update thành công";

                        }
                    }
                   
             include 'product/edit.php';
            break;
        case 'list_products':
            if (isset($_GET['deleteId'])) {
                $id = $_GET['deleteId'];
                delete_san_pham($id);
            }
            $results = get_all_san_pham();
            include 'product/list.php';
            break;
            
        default:
            $categories = get_all_san_pham();
            include "product/add.php";
            break;
        
    }
} else {
}

