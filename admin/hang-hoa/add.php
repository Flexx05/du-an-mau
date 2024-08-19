<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- thêm mới -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="card">
                    <div class="card-header">
                        THÊM MỚI HÀNG HÓA
                    </div>
                    <form class="p-4" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="ten_hh" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Đơn giá</label>
                            <input type="text" class="form-control" name="don_gia" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giảm giá</label>
                            <input type="text" class="form-control" name="giam_gia" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh</label>
                            <input type="file" class="form-control" name="hinh_anh">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày nhập</label>
                            <input type="date" class="form-control" name="ngay_nhap" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả</label>
                            <textarea name="mo_ta" id="myTextarea" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Đặc biệt</label>
                            <input type="text" class="form-control" name="dac_biet">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Loại hàng</label>
                            <select name="ma_loai" class="form-control">
                                <option value="0">--Chọn loại hàng--</option>
                                <?php
                                    foreach ($list_lh as $loaihang) {
                                ?>
                                <option value="<?php echo $loaihang->ma_loai ?>"><?php echo $loaihang->ten_loai ?>
                                </option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <button name="btn_submit" class="btn btn-outline-dark">Thêm mới</button>
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