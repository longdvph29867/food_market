<?php
    require '../../global.php';
    require "../../dao/pdo.php";
    require '../../dao/hanghoa.php';
    require '../../dao/danhmuc.php';

    extract($_REQUEST);
    if(exsist_param("ma_loai")) {
        $items = hang_hoa_select_loai($ma_loai);
    }
    else if(exsist_param("keywords")) {
        echo $keywords;
        $items = hang_hoa_select_keyword($keywords);
    }
    else {
        $items = hanghoa_selectAll();
    }
    
    $list = 'liet-ke-ui.php';
    $MESSAGE = 'Sản phẩm';
    $view_name = '../content-layout.php';
    $dsloai = danhMuc_selectAll();

    require '../layout.php'
?>

