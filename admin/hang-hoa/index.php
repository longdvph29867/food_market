<?php
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/danhmuc.php";
    require "../../dao/hanghoa.php";

    extract($_REQUEST);
    if(exsist_param("add")){
        $lisDanhMuc = danhMuc_selectAll();
        $view_name="add.php";
    }
    else if(exsist_param("btn-insert")){
        $up_hinh = save_file('file', "$image_dir/image_products/");
        $hinh =  $up_hinh;
        
        $ten_hh = $_POST['ten_hh'];
        $don_gia =  $_POST['don_gia'];
        $giam_gia =  $_POST['giam_gia'];
        $ngay_nhap = $TODAY;
        $mo_ta =  $_POST['mo_ta'];
        $dac_biet =  $_POST['dac_biet'];
        $ma_loai =  $_POST['ma_loai'];
        hanghoa_add($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai);

        $items = hanghoa_selectAll();
        $view_name="list.php";
    }
    else if(exsist_param("btn_edit")){
        $lisDanhMuc = danhMuc_selectAll();
        $idHangHoa = $_GET['ma_hh'];
        $thisHangHoa = hanghoa_select_by_id($idHangHoa);

        $view_name="edit.php";
    }
    else if(exsist_param("btn-update")){
        $up_hinh = save_file('file', "$image_dir/image_products/");
        $hinh =  strlen($up_hinh) > 0 ? $up_hinh : $_POST['old_hinh'];

        $ma_hh = $_POST['ma_hh'];
        $ten_hh = $_POST['ten_hh'];
        $don_gia =  $_POST['don_gia'];
        $giam_gia =  $_POST['giam_gia'];
        $ngay_nhap =  $TODAY;
        $mo_ta =  $_POST['mo_ta'];
        $dac_biet =  $_POST['dac_biet'];
        $ma_loai =  $_POST['ma_loai'];
        hanghoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai);

        $items = hanghoa_selectAll();
        $view_name="list.php";
    }
    else if(exsist_param("btn-delete")){
        $id_hh=$_GET['ma_hh'];
        hanghoa_delete($id_hh);

        $items = hanghoa_selectAll();
        $view_name="list.php";
    }
    else{
        $items = hanghoa_selectAll();
        $view_name="list.php";
    }
    require "../layout.php";
?>