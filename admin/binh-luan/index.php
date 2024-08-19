<?php
    require_once "../../Models/binhluan.php";
    require_once "../../Models/thongke.php";
    require_once "../../global.php";
    
    extract($_REQUEST);
    if (exist_param("ma_hh")) {
        $binhluan = new binhluan();
        $bl_by_hh = $binhluan->binhluan_all_by_hanghoa($ma_hh);
        $VIEW_NAME = "detail.php";
    }
    else{
        $binhluan = new thongke();
        $thongke_bl = $binhluan->thongke_binhluan();
        $VIEW_NAME = "list.php";
    }

    require_once "../layout.php";
?>