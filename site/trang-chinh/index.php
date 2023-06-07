<?php
    require '../../global.php';
    require '../../dao/pdo.php';
    require '../../dao/danhmuc.php';


    extract($_REQUEST);

    if(exsist_param('tin-tuc')) {
        $view_name = 'tin-tuc.php';

    }
    else if(exsist_param('san-pham')) {
        $list = 'items-content/list-products.php';
        $view_name = "../content-layout.php";

    }
    else {
        $view_name = 'trang-chinh/home/home.php';

    }
    $dsloai = danhMuc_selectAll();
    require "../layout.php";
?>