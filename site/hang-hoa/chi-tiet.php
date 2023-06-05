<?php
    require '../../global.php';
    require '../../dao/pdo.php';
    require '../../dao/danhmuc.php';
    require '../../dao/binhLuan.php';
    require '../../dao/hanghoa.php';

    extract($_REQUEST);
    $hang_hoa = hanghoa_select_by_id($ma_hh);
    extract($hang_hoa);

    hang_hoa_tang_so_luot_xem ($ma_hh);
    $hh_cung_loai = hang_hoa_select_loai($ma_loai);

    
    
    $binh_luan_list = binhLuan_select_by_hh_ngay_giam($ma_hh);

    

    $dsloai = danhMuc_selectAll();
    $view_name = "hang-hoa/chi-tiet-ui.php";
    require '../layout.php';
?>