<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- sửa -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        CHỈNH SỬA HÀNG HÓA
                    </div>
                    <form class="p-4" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" name="ten_hh" value="<?php echo $id_hh->ten_hh ?>">
                        </div>
                        <div class="form-group">
                            <label>Đơn giá</label>
                            <input type="text" class="form-control" name="don_gia"
                                value="<?php echo $id_hh->don_gia ?>">
                        </div>
                        <div class="form-group">
                            <label>Giảm giá</label>
                            <input type="text" class="form-control" name="giam_gia"
                                value="<?php echo $id_hh->giam_gia ?>">
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" class="form-control" name="hinh_anh">
                            <img src="<?php echo $id_hh->hinh_anh ?>" alt="" width="100px">
                        </div>
                        <div class="form-group">
                            <label>Ngày nhập</label>
                            <input type="date" class="form-control" name="ngay_nhap"
                                value="<?php echo $id_hh->ngay_nhap ?>">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea name="mo_ta" id="myTextarea" class="form-control"><?=$id_hh->mo_ta?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Đặc biệt</label>
                            <input type="text" class="form-control" name="dac_biet"
                                value="<?php echo $id_hh->dac_biet ?>">
                        </div>
                        <div class="form-group">
                            <label>Loại hàng</label>
                            <select name="ma_loai" class="form-control">
                                <?php
                                    foreach ($list_lh as $loaihang) {
                                        if ($loaihang->ma_loai == $id_hh->ma_loai) {
                                ?>
                                <option selected value="<?php echo $loaihang->ma_loai ?>">
                                    <?php echo $loaihang->ten_loai ?>
                                </option>
                                <?php
                                        }
                                        else {
                                ?>
                                <option value="<?php echo $loaihang->ma_loai ?>"><?php echo $loaihang->ten_loai ?>
                                    <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <button type="submit" name="btn_submit" class="btn btn-outline-dark">Sửa</button>
                        <button type="reset" class="btn btn-outline-dark">Nhập lại</button>
                        <a href="index.php?btn_list"><button type="button" class="btn btn-outline-dark">Danh
                                sách</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
<script>
document.getElementById("myTextarea").addEventListener("keydown", function(event) {
    if (event.key === "Enter" && !event.shiftKey) {
        event.preventDefault();
    }
});
</script>

</html>