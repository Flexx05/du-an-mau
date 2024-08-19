<div class="col-lg-3">
    <!-- Tài khoản -->
    <div class="card mb-5">
        <div class="card-header bg-secondary text-white">Tài khoản</div>
        <?php
            if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {
        ?>
        <div class="card-body d-flex flex-column align-items-center">
            <img src="<?=$_SESSION['hinh_anh'] ?>" class="w-50"><br>
            <?=$_SESSION['ten_kh']?>
        </div>
        <div class="card-body w-75 mx-auto">
            <a href="index.php?act=edittaikhoan&ma_kh=<?=$_SESSION['ma_kh']?>" style="text-decoration:
                none;">
                <div class="text-info">Thông tin cá nhân</div>
            </a>
            <a href="admin/trang-chinh" style="text-decoration: none;">
                <div class="text-info">Quản trị web - Admin</div>
            </a>
            <a href="index.php?act=dangnhapIF&ma_kh=<?=$_SESSION['ma_kh']?>" style="text-decoration: none;">
                <div class="text-info">Thay đổi thông tin đăng nhập</div>
            </a>
            <a href="index.php?act=thoat" style="text-decoration: none;">
                <div class="text-info">Đăng xuất</div>
            </a>
        </div>
        <?php
            }else {
        ?>
        <div class="card-body">
            <form action="index.php?act=dangnhap" method="post">
                <div class="form-group">
                    <label for="">Tên đăng nhập</label>
                    <input type="text" class="form-control" placeholder="Nhập tên đăng nhập" name="ten_dang_nhap">
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="mat_khau">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Ghi nhớ tài khoản
                    </label>
                </div>
                <button type="submit" class="btn btn-outline-dark" name="dangnhap">Đăng nhập</button>
            </form>
            <a href="#" style="text-decoration: none;">
                <div class="text-info">Quên mật khẩu</div>
            </a>
            <a href="index.php?act=dangky" style="text-decoration: none;">
                <div class="text-info">Đăng ký thành viên</div>
            </a>
        </div>
        <?php
            }
        ?>
    </div>