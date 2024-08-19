<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 my-2">
            <div class="card">
                <h5 class="card-header bg-dark text-white">
                    Thay đổi thông tin đăng nhập
                </h5>
                <div class="card-body">
                    <form method="post">
                        <?php
                            foreach ($id_tk as $tk) {
                        ?>
                        <div class="form-group">
                            <label for="">Tên đăng nhập: </label>
                            <input type="text" name="ten_dang_nhap" value="<?=$tk->ten_dang_nhap?>" class="form-control"
                                disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu: </label>
                            <input type="password" name="mat_khau" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu mới: </label>
                            <input type="password" name="matkhaumoi" class="form-control">
                        </div>
                        <?php
                            }
                        ?>
                        <button type="submit" class="btn btn-outline-dark" name="capnhat">Cập nhật</button>
                        <button type="reset" class="btn btn-outline-dark">Nhập lại</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>