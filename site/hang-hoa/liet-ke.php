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
    
    $view_name = 'liet-ke-ui.php';
    $dsloai = danhMuc_selectAll();

    require '../layout2.php'
?>

