<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 my-2">
            <div class="card">
                <h5 class="card-header bg-dark text-white">
                    Thông tin cá nhân
                </h5>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <?php
                            foreach ($id_tk as $tk) {
                        ?>
                        <div class="form-group">
                            <label for="">Tên của bạn: </label>
                            <input type="text" name="ten_kh" value="<?=$tk->ten_kh?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Avatar:</label>
                            <input type="file" class="form-control-file" name="hinh_anh">
                        </div>
                        <div class="form-group">
                            <label for="">Email: </label>
                            <input type="email" name="email_kh" value="<?=$tk->email_kh?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ: </label>
                            <input type="text" name="dia_chi" value="<?=$tk->dia_chi?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại: </label>
                            <input type="text" name="sdt" value="<?=$tk->sdt?>" class="form-control">
                        </div>
                        <?php
                            }
                        ?>
                        <button type="submit" class="btn btn-outline-dark" name="capnhat">Cập nhật</button>
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