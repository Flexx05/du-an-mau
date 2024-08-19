<div class="container-fluid">
    <div class="row">
        <?php 
            foreach ($hh_search as $hh) {   
                $link = "index.php?act=hanghoact&ma_hh=". $hh->ma_hh; 
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
                        <div class="d-flex flex-colum align-item-center">
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