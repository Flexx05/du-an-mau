<?php
    require_once "../../Models/binhluan.php";
    require_once "../../Models/thongke.php";
    require_once "../../global.php";

    extract($_REQUEST);
    if (exist_param("chart")) {
        $thongke = new thongke();
        $thongke_hh = $thongke->thongke_hanghoa();
        $VIEW_NAME = "chart.php";
    }
    else{
        $thongke = new thongke();
        $thongke_hh = $thongke->thongke_hanghoa();
        $VIEW_NAME = "list.php";
    }

    require_once "../layout.php";
?>