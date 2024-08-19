<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                    Thống kê hàng hóa từng loại
                </div>
                <div class="card-header text-uppercase font-weight-bold">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1">
                                STT
                            </div>
                            <p class="col-lg-4">Loại hàng</p>
                            <p class="col-lg-1">Số lượng</p>
                            <p class="col-lg-2">Giá cao nhất</p>
                            <p class="col-lg-2">Giá thấp nhất</p>
                            <p class="col-lg-2">Giá trung bình</p>
                        </div>
                    </div>
                </div>
                <?php
                        $count = 0;
                        foreach ($thongke_hh as $key => $hanghoa) {
                            $STT = ++$count;
                    ?>
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-1 font-weight-bold">
                            <?php echo $STT ?>
                        </div>
                        <p class="col-lg-4"><?php echo $hanghoa->ten_loai ?></p>
                        <p class="col-lg-1"><?php echo $hanghoa->so_luong ?></p>
                        <p class="col-lg-2"><?php echo number_format($hanghoa->gia_min) ?> VND</p>
                        <p class="col-lg-2"><?php echo number_format($hanghoa->gia_max) ?> VND</p>
                        <p class="col-lg-2"><?php echo number_format($hanghoa->gia_avg,2) ?> VND</p>

                    </div>
                </div>
                <?php
                        }
                    ?>
            </div>
            <form action="">
                <div class=" form-group d-flex w-25 mx-auto mt-3">
                    <a href="index.php?chart" style="text-decoration: none;"><input type="button" name="" id=""
                            class="form-control" value="Xem biểu đồ"></a>
                </div>
            </form>
        </div>
    </div>
</div>