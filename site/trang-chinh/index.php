<?php
    require '../../global.php';
    require '../../dao/pdo.php';
    require '../../dao/danhmuc.php';


    extract($_REQUEST);
    $dsloai = danhMuc_selectAll();
    if(exsist_param('tin-tuc')) {
        $view_name = 'tin-tuc.php';
        require "../layout.php";
    }
    else if(exsist_param('san-pham')) {
        $list = 'items-content/list-products.php';
        $view_name = "../content-layout.php";

        require "../layout.php";
    }
    else {
        $view_name = 'trang-chinh/home/home.php';
        require "../layout.php";
    }
?>