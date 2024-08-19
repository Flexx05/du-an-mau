<!doctype html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- main -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                        Danh sách loại hàng hóa
                    </div>
                    <div class="card-header text-uppercase font-weight-bold">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-1">
                                    STT
                                </div>
                                <div class="col-lg-1">

                                </div>
                                <p class="col-lg-2">ID</p>
                                <p class="col-lg-6">Tên loại</p>
                                <p class="col-lg-2">Hành động</p>
                            </div>
                        </div>
                    </div>
                    <?php
                        $count = 0;
                        foreach ($list_lh as $key => $loaihang) {    
                            $STT = ++$count;
                    ?>
                    <div class="container-fluid">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-1 font-weight-bold">
                                <?php echo $STT ?>
                            </div>
                            <div class="col-lg-1">
                                <form action="">
                                    <div class="form-group">
                                        <input type="checkbox" name="" id="" class="form-check-inline">
                                    </div>
                                </form>
                            </div>
                            <p class="col-lg-2"><?php echo $loaihang->ma_loai ?></p>
                            <p class="col-lg-6"><?php echo $loaihang->ten_loai ?></p>
                            <div class="col-lg-2">
                                <form action="">
                                    <div class="form-group d-flex">
                                        <a href="index.php?btn_edit&id=<?php echo $loaihang->ma_loai ?>"
                                            style="text-decoration: none;"><input type="button" name="" id=""
                                                class="form-control btn-outline-dark" value="Sửa"></a>
                                        <input onclick="delCF('index.php?btn_del&id=<?php echo $loaihang->ma_loai?>')"
                                            type="button" name="" id="" class="form-control btn-outline-dark"
                                            value="Xóa">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <form action="">
                    <div class=" form-group d-flex w-25 mx-auto mt-3">
                        <input type="button" name="" id="" class="form-control" value="Chọn tất cả">
                        <input type="button" name="" id="" class="form-control" value="Bỏ chọn tất cả">
                        <a href="index.php?btn_add" style="text-decoration: none;"><input type="button" name="" id=""
                                class="form-control" value="Nhập thêm"></a>
                    </div>
                </form>
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
function delCF(dellUrl) {
    if (confirm('Bạn chắc chứ?')) {
        document.location = dellUrl
    }
}
</script>

</html>