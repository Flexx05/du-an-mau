<div class="card mb-2">
    <div class="card-header bg-secondary text-white">Danh mục</div>
    <div class="card-text">
        <div class="list-group">
            <?php
                foreach ($ds_loai as $loai) {
                    $link = "index.php?act=hanghoa&ma_loai=".$loai->ma_loai;
            ?>
            <a href="<?php echo $link ?>"
                class="list-group-item list-group-item-action"><?php echo $loai->ten_loai ?></a>
            <?php
                }
            ?>
        </div>
    </div>
    <!-- search-->
    <form method="post" action="index.php?act=hanghoa">
        <div class="form-group mx-3 my-3 d-flex">
            <input type="text" name="keyword" class="form-control w-75" placeholder="Từ khóa tìm kiếm">
            <input type="submit" value="Tìm kiếm" name="timkiem" class="form-control w-25">
        </div>
    </form>
</div>