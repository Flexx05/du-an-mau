<div class="container-fluid">
    <div class="row">
        <?php 
            foreach ($hh_one as $hh) {    
        ?>
        <div class="col-lg-12 my-2">
            <div class="card">
                <h5 class="card-header bg-dark text-white h1">
                    <?php echo $hh->ten_hh ?>
                </h5>
                <img src="<?=substr($hh->hinh_anh, 6)?>" style="object-fit: cover;" class="card-img-top w-50 mx-auto"
                    alt="...">
                <div class="card-body h4 mx-auto">
                    ---------------------------------------------------------------------------------------
                </div>
                <div class="card-body w-75 mx-3 h4">
                    -- Tên sản phẩm: <?=$hh->ten_hh?><br>
                    -- Mã sản phẩm: <?=$hh->ma_hh?>
                </div>
                <div class="card-body w-75 mx-3" id="myTextarea">
                    <p class="h2">-- Mô tả:</p> <br><?=$hh->mo_ta?>
                </div>
                <div class="card-body">
                    <div class="w-50 d-flex flex-colum align-items-center">
                        <p class="h2 text-danger px-2"><?php echo $hh->giam_gia ?> VND</p>
                        <del><?php echo $hh->don_gia ?> VND</del>
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-header">
                    Bình luận
                </div>
                <div class="card-body">

                </div>
            </div>
            <div class="card my-3">
                <div class="card-header">
                    Sản phẩm cùng loại
                </div>
                <?php 
                    foreach ($hh_loai as $hh) {
                    $link = "index.php?act=hanghoact&ma_hh=".$hh->ma_hh;
                ?>
                <div class="card-body">
                    <a href="<?=$link?>" class="text-dark" style="text-decoration: none;"><?=$hh->ten_hh?></a>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>
</div>