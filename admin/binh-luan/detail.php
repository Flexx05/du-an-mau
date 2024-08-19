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
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Sản phẩm:
                    <?php 
                        echo $bl_by_hh[0]->ten_hh;
                    ?>
                </h3>
            </div>
            <div class="card-header text-uppercase font-weight-bold bg-dark text-white">
                <div class="container">
                    <div class="row">
                        <p class="col-lg-1"></p>
                        <p class="col-lg-5">Nội dung</p>
                        <p class="col-lg-3">Ngày bình luận</p>
                        <p class="col-lg-3">Người bình luận</p>
                    </div>
                </div>
            </div>
            <div class="card-text">
                <?php
                    foreach ($bl_by_hh as $binhluan) {
                ?>
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-1">
                            <form action="" method="post">
                                <input type="checkbox" class="form-check-input" name="ma_bl">
                            </form>
                        </div>
                        <div class="col-lg-5"><?php echo $binhluan->noi_dung ?></div>
                        <div class="col-lg-3"><?php echo $binhluan->ngay_bl ?></div>
                        <div class="col-lg-3"><?php echo $binhluan->ma_kh ?></div>
                        <?php
                    }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="">
        <div class=" form-group d-flex w-25 mx-auto mt-3">
            <input type="button" name="" id="" class="form-control" value="Chọn tất cả">
            <input type="button" name="" id="" class="form-control" value="Bỏ chọn tất cả">
            <a href="index.php" style="text-decoration: none;"><input type="button" name="" id="" class="form-control"
                    value="Danh sách"></a>
        </div>
    </form>
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

</html>