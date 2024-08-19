<div class="card">
    <div class="card-header bg-secondary text-white">Sản phẩm bán chạy</div>
    <div class="card-text">
        <div class="list-group">
            <?php
                foreach ($ds_top10 as $hh) {
                    $link = "index.php?act=hanghoact&ma_hh=".$hh->ma_hh;
            ?>
            <a href="<?=$link?>" class="list-group-item list-group-item-action"><img src="<?=substr($hh->hinh_anh, 6)?>"
                    alt="" width="50px"> <?=$hh->ten_hh?></a>
            <?php
                }
            ?>
        </div>
    </div>
</div>
</div>
</div>
</div>