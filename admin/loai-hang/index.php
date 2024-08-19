<?php
    require_once "../../Models/loaihang.php";
    require_once "../../global.php";
    extract($_REQUEST);
    if (exist_param("btn_list")) {
        $loaihang = new loaihang();
        $list_lh = $loaihang->loaihang_all();
        $VIEW_NAME = "list.php";
    } 
    elseif (exist_param(("btn_edit"))) {
        if (isset($_GET['id'])) {
            $loaihang = new loaihang();
            $id_lh = $loaihang->loaihang_ID($_GET['id']);
            if (isset($_POST['btn_submit'])) {
                $loaihang = new loaihang();
                $edit_lh = $loaihang->loaihang_update($_POST['ten_loai'], $_GET['id']);
                if (!$edit_lh) {
                    header('location:index.php?btn_add');
                }
            }
        }
        $VIEW_NAME = "edit.php";
    } 
    elseif (exist_param("btn_add")) {
        if (isset($_POST["btn_submit"])) {            
            $loaihang = new loaihang();
            $add_lh = $loaihang->loaihang_insert(null, $_POST['ten_loai']);
            if (!$add_lh) {
                header("location:index.php?btn_add");
            }
        }
        $VIEW_NAME = "add.php";
    }
     elseif (exist_param("btn_del")) {
        if (isset($_GET['id'])) {
            $loaihang = new loaihang();
            $id_lh = $loaihang->loaihang_del($_GET['id']);
            if (!$id_lh) {
                header('location:index.php?btn_add');
            }
        }
        
    }
    else {
        $VIEW_NAME = "add.php";
    }
    require_once "../layout.php";
?>