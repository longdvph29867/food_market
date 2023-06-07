<section class="our_products py-8 bg-[#f3f6f5]">
    <div class="container mx-auto">
        <div class="title font-['Berkshire_Swash']">
            <h2>Sản Phẩm đặc biệt của chúng tôi</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <?php
        $stt = 0;
        foreach ($dac_biet as $item) {
            $stt += 1;
            $link = $url_site . "/hang-hoa/chi-tiet.php?ma_hh=" . $item['ma_hh'];
        ?>
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
                </div>
        </a>
        <?php
        }
        ?>
        </div>


    </div>
</section>