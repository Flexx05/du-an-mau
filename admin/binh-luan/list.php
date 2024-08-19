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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-uppercase font-weight-bold bg-dark text-white">
                        <div class="container">
                            <div class="row">
                                <p class="col-lg-5">Hàng hóa</p>
                                <p class="col-lg-2">Số bình luận</p>
                                <p class="col-lg-2">Mới nhất</p>
                                <p class="col-lg-2">Cũ nhất</p>
                                <p class="col-lg-1"></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-text">
                        <?php
                            foreach ($thongke_bl as $binhluan) {
                        ?>
                        <div class="container">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-5"><?php echo $binhluan->ten_hh ?></div>
                                <div class="col-lg-2"><?php echo $binhluan->so_luong ?></div>
                                <div class="col-lg-2"><?php echo $binhluan->cu_nhat ?></div>
                                <div class="col-lg-2"><?php echo $binhluan->moi_nhat ?></div>
                                <a href="index.php?ma_hh=<?php echo $binhluan->ma_hh ?>" class="col-lg-1"><button
                                        class="btn btn-default btn-outline-dark">Xem</button></a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
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

</html>