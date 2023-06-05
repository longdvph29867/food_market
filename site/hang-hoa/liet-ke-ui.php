<h3 class="text-2xl font-['Berkshire_Swash'] mb-4"><?=count($items)?> Sản phẩm</h3>
<div class="grid gap-7 md:grid-cols-3 sm:grid-cols-2 grid-cols-1">
    <!--  -->
    <div class="product_item">
        <div class="product_img">
            <img src="<?= $url_content ?>/image-layout/product-1.webp" alt="">
        </div>
        <div class="product_content">
            <h3>Condimen food</h3>
            <hr>
            <p><span>$ 110.00</span>/1kg</p>
        </div>
    </div>
    <!--  -->
    <?php
        foreach($items as $item) {
            $link = $url_site."/hang-hoa/chi-tiet.php?ma_hh=".$item['ma_hh'];
    ?>
        <a href="<?=$link?>">
            <div class="product_item">
                <div class="product_img">
                    <img src="<?php echo "$url_content/images/image_products/".$item['hinh'] ?>" alt="">
                </div>
                <div class="product_content">
                    <h3><?=$item['ten_hh']?></h3>
                    <hr>
                    <p><span>$ <?=$item['don_gia']?></span>/1kg</p>
                </div>
            </div>
        </a>
    <?php
        }
    ?>

</div>