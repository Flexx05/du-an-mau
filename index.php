<?php
    session_start();
    include_once "Models/hanghoa.php";
    include_once "Models/loaihang.php";
    include_once "Models/taikhoan.php";
    include_once "Views/header.php";

    $hh = new hanghoa();
    $hh_home = $hh->hanghoa_all_home();
    $ds_top10 = $hh->hanghoa_top10();
    $ds_top5 = $hh->hanghoa_top5();
    $loai = new loaihang();
    $ds_loai = $loai->loaihang_all();
    
    if (isset($_GET['act']) && $_GET['act'] !== '') {
        $act = $_GET['act'];
        switch ($act) {
            case 'dangky':
                if (isset($_POST['dangky'])) {
                    $tk = new taikhoan();
                    $add_tk = $tk->taikhoan_insert($_POST['ten_kh'], $_POST['email_kh'], $_POST['ten_dang_nhap'], $_POST['mat_khau']);
                    $thongbao = "Đăng ký thành công. Hãy đăng nhập để có trải nghiệm tốt hơn!";
                }
                include_once "Views/taikhoan/dangky.php";
                break;
                
            case 'dangnhap':
                if (isset($_POST['dangnhap'])) {
                    $tk = new taikhoan();
                    $check_tk = $tk->taikhoan_one($_POST['ten_dang_nhap'], $_POST['mat_khau']);
                    if (is_array($check_tk)) {
                        $_SESSION['check'] = $check_tk;
                        foreach ($check_tk as $tk) {
                            $_SESSION['user'] = $tk->ten_dang_nhap;
                            $_SESSION['pass'] = $tk->mat_khau;
                            $_SESSION['hinh_anh'] = $tk->hinh_anh;
                            $_SESSION['ten_kh'] = $tk->ten_kh;
                            $_SESSION['ma_kh'] = $tk->ma_kh;
                            $tk = new taikhoan();
                            $id_tk = $tk->taikhoan_ID($_SESSION['ma_kh']);
                        }
                        header('location:index.php');
                    }
                    else{
                        $thongbao = "Tài khoản không tồn tại";
                    }
                }
                include_once "Views/dangnhap.php";
                break;
                
            case 'edittaikhoan':
                if (isset($_GET['ma_kh'])) {
                    $tk = new taikhoan();
                    $id_tk = $tk->taikhoan_ID($_GET['ma_kh']);
                    if (isset($_POST['capnhat'])) {
                        if ($_FILES['hinh_anh']['name'] != '') {
                            $image_dir = "images/";
                            $image_name = time().$_FILES['hinh_anh']['name'];
                            $image_path = $image_dir.$image_name;
                            move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $image_path);
                        }
                        else {
                            $image_path = $id_hh->hinh_anh;
                        }
                        $tk = new taikhoan();
                        $edit_tk = $tk->taikhoan_update($_POST['ten_kh'], $_POST['email_kh'], $image_path, $_POST['dia_chi'], $_POST['sdt'], $_GET['ma_kh']);
                        if (!$edit_tk) {
                            header('location:index.php');
                        }
                    }
                }
                include_once "Views/taikhoan/edittaikhoan.php";
                break;
            
            case 'dangnhapIF':
                if (isset($_GET['ma_kh'])) {
                    $tk = new taikhoan();
                    $id_tk = $tk->taikhoan_ID($_GET['ma_kh']);
                    if (isset($_POST['capnhat'])) {
                        if ($id_tk[0]->mat_khau === $_POST['mat_khau'] && $id_tk[0]->mat_khau !== $_POST['matkhaumoi']) {
                        $tk = new taikhoan();
                        $edit_mk = $tk->taikhoan_update_MK($_POST['matkhaumoi'], $_GET['ma_kh']);
                            if (!$edit_mk) {
                                echo '<script>alert("Đổi mật khẩu thành công")</script>';
                                echo '<script>window.locaiton.href = index.php</script>';
                            }
                        }
                        elseif ($id_tk[0]->mat_khau !== $_POST['mat_khau'] || $id_tk[0]->mat_khau === $_POST['matkhaumoi']) {
                            echo '<script>alert("Đổi mật khẩu thất bại")</script>';
                            echo '<script>window.locaiton.href = index.php?act=dangnhapIF</script>';
                        }
                    }
                }
                include_once "Views/taikhoan/dangnhapIF.php";
                break;
                
            case 'gioithieu':
                include_once "Views/gioithieu.php";
                break;
                
            case 'lienhe':
                include_once "Views/lienhe.php";
                break;
                
            case 'thoat':
                include_once "Views/thoat.php";
                break;
                
            case 'hanghoa':
                if (isset($_POST['keyword']) && $_POST['keyword'] !== "") {
                    $kyw = $_POST['keyword'];
                }
                else {
                    $kyw = "";
                }
                if (isset($_GET['ma_loai']) && $_GET['ma_loai'] > 0) {
                    $ma_loai = $_GET['ma_loai'];
                }
                else {
                    $ma_loai = 0;
                }
                $hh_loai = $hh->hanghoa_all_by_loai($ma_loai);
                $hh_search = $hh->hanghoa_all_search($kyw, $ma_loai);
                include_once "Views/hanghoa.php";
                break;
                
            case 'hanghoact':
                if (isset($_GET['ma_hh']) && $_GET['ma_hh'] > 0) {
                    $hh_one = $hh->hanghoa_one($_GET['ma_hh']);                  
                    $hh_loai = $hh->hanghoa_cungloai($hh_one[0]->ma_loai, $_GET['ma_hh']);
                    include_once "Views/hanghoact.php";
                }
                else {
                    include_once "Views/home.php";
                }
                break;
                
            default:
                include_once "Views/home.php";
                break;    
        }
    }
    else {
        include_once "Views/home.php";
    }
    include_once "Views/dangnhap.php";
    include_once "Views/danhmuc.php";
    include_once "Views/top10.php";
    include_once "Views/footer.php";
?>