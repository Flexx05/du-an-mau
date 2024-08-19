<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 my-2">
            <div class="card">
                <h5 class="card-header bg-dark text-white">
                    Đăng ký
                </h5>
                <div class="card-body">
                    <form action="index.php?act=dangky" method="post">
                        <div class="form-group">
                            <label for="">Tên của bạn: </label>
                            <input type="text" name="ten_kh" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email: </label>
                            <input type="email" name="email_kh" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tên đăng nhập</label>
                            <input type="text" name="ten_dang_nhap" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" name="mat_khau" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-outline-dark" name="dangky">Đăng ký</button>
                        <button type="reset" class="btn btn-outline-dark">Nhập lại</button>
                    </form>
                    <?php
                        if (isset($thongbao) && $thongbao !== '') {
                            echo "<script>alert('$thongbao')</script>";
                            echo '<script>window.location.href = "index.php"</script>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>