<?php
    require '../../global.php';
    require '../../dao/pdo.php';
    require '../../dao/danhmuc.php';
    require '../../dao/hanghoa.php';


    extract($_REQUEST);

    if(exsist_param('tin-tuc')) {
        $view_name = 'tin-tuc.php';

    }
    else if(exsist_param('san-pham')) {
        $list = 'items-content/list-products.php';
        $view_name = "../content-layout.php";

    }
    else {
        $dac_biet = hang_hoa_dac_biet();
        $view_name = 'trang-chinh/home/home.php';
    }
    $top10 = hang_hoa_top_10();
    $dsloai = danhMuc_selectAll();
    require "../layout.php";
?>