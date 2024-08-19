<!-- banner -->
<div id="demo" class="carousel slide mb-5" data-ride="carousel" data-interval="2000">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <?php
            $stt = 1;
            foreach ($ds_top5 as $hh) {
                $stt++;
        ?>
        <li data-target="#demo" data-slide-to="<?=$stt?>"></li>
        <?php
            }
        ?>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/1722783214452054000_1222323455854300_3134614398275204420_n.jpg" width="1100" height="500"
                style="object-fit: contain;">
            <div class="carousel-caption">
                <h3 style="text-shadow: 0 0 10px black;">The Original Hair Tonic</h3>
            </div>
        </div>
        <?php
            foreach ($ds_top5 as $hh) {
            ?>
        <div class="carousel-item">
            <img src="<?=substr($hh->hinh_anh, 6) ?>" width="1100" height="500" style="object-fit: contain;">
            <div class="carousel-caption">
                <h3 style="text-shadow: 0 0 10px black;"><?=$hh->ten_hh ?></h3>
            </div>
        </div>
        <?php
                }
            ?>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<hr>
<!-- sản phẩm -->
<div class="container-fluid">
    <div class="row">
        <?php 
            foreach ($hh_home as $hh) {    
                $link = "index.php?act=hanghoact&ma_hh=".$hh->ma_hh;
        ?>
        <div class="col-lg-3 my-2">
            <a href="<?=$link?>" class="text-dark" style="text-decoration: none;">
                <div class="card" style="width: 17rem;">
                    <img src="<?=substr($hh->hinh_anh, 6)?>
                                " height="250px" style="object-fit: cover;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title ellipsis">
                            <?php echo $hh->ten_hh ?>
                        </h5>
                        <div class="price d-flex flex-colum align-item-center">
                            <p class=" h3 text-danger px-2"><?php echo $hh->giam_gia ?></p>
                            <del><?php echo $hh->don_gia ?></del>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php
            }
        ?>
    </div>
</div>
</div>