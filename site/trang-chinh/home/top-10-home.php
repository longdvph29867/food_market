<section class="top_products py-8">
    <div class="container mx-auto">
        <div class="title font-['Berkshire_Swash']">
            <h2>Top Sản Phẩm Hot</h2>
        </div>
        <div class="top_products_carousel">
            <?php
            $stt = 0;
            foreach ($top10 as $item) {
                $stt+=1;
                $link = $url_site."/hang-hoa/chi-tiet.php?ma_hh=".$item['ma_hh'];
            ?>
                <div class="px-3">
                    <a href="<?=$link?>">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="<?=$url_content?>/images/image_products/<?=$item['hinh']?>" alt="">
                            </div>
                            <div class="product_content">
                                <h3><?=$item['ten_hh']?></h3>
                                <hr>
                                <p><span><?=number_format($item['don_gia'])?> đ</span>/1kg</p>
                            </div>
                            <div class="top_order_number">
                                <span>Top</span>
                                <p><?=$stt?></p>
                            </div>
                            <p class="view"><span>Đã xem </span><?=$item['so_luot_xem']?></p>
                        </div>
                    </a>
                </div>
            <?php

            }
            ?>


        </div>
    </div>
</section>