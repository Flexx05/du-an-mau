<?php
    require_once "../../Models/hanghoa.php";
    require_once "../../Models/loaihang.php";
    require_once "../../global.php";
    extract($_REQUEST);
    if (exist_param("btn_list")) {
        $hanghoa = new hanghoa();
        $list_hh = $hanghoa->hanghoa_all();
        $VIEW_NAME = "list.php";
    } 
    elseif (exist_param(("btn_edit"))) {
        if (isset($_GET['id'])) {
            $hanghoa = new hanghoa();
            $id_hh = $hanghoa->hanghoa_ID($_GET['id']);
            if (isset($_POST['btn_submit'])) {
                if ($_FILES['hinh_anh']['name'] != '') {
                    $image_dir = "../../images/";
                    $image_name = time().$_FILES['hinh_anh']['name'];
                    $image_path = $image_dir.$image_name;
                    move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $image_path);
                }
                else {
                    $image_path = $id_hh->hinh_anh;
                }
                $hanghoa = new hanghoa();
                $edit_hh = $hanghoa->hanghoa_update($_POST['ten_hh'], $_POST['don_gia'], $_POST['giam_gia'], $image_path, $_POST['ngay_nhap'], $_POST['mo_ta'], $_POST['dac_biet'], null, $_POST['ma_loai'], $_GET['id']);
                if (!$edit_hh) {
                    header('location:index.php?btn_add');
                }
            }
        }
        $loaihang = new loaihang();
        $list_lh = $loaihang->loaihang_all();
        $VIEW_NAME = "edit.php";
    } 
    elseif (exist_param("btn_add")) {
        if (isset($_POST["btn_submit"])) {
            $images_dir = "../../images/";
            $image_name = time().$_FILES['hinh_anh']['name'];
            $image_path = $images_dir.$image_name;
            move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $image_path);
            
            $hanghoa = new hanghoa();
            $add_hh = $hanghoa->hanghoa_insert(null, $_POST['ten_hh'], $_POST['don_gia'], $_POST['giam_gia'], $image_path, $_POST['ngay_nhap'], $_POST['mo_ta'], $_POST['dac_biet'], null, $_POST['ma_loai']);
            if (!$add_hh) {
                header("location:index.php?btn_add");
            }
        }
        $loaihang = new loaihang();
        $list_lh = $loaihang->loaihang_all();
        $VIEW_NAME = "add.php";
    }
     elseif (exist_param("btn_del")) {
        if (isset($_GET['id'])) {
            $hanghoa = new hanghoa();
            $id_hh = $hanghoa->hanghoa_del($_GET['id']);
            if (!$id_hh) {
                header('location:index.php?btn_add');
            }
        }
        
    }
    else {
        $loaihang = new loaihang();
        $list_lh = $loaihang->loaihang_all();
        $VIEW_NAME = "add.php";
    }
    require_once "../layout.php";
?>