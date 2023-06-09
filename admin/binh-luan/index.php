<?php
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/binhLuan.php";
    require "../../dao/hanghoa.php";

    extract($_REQUEST);
    if(isset($_REQUEST['detial'])){
        $id_hh=$_GET['mahh'];
        $binh_luan=binhLuan_select_ma_hh($id_hh);
        $ten_hh= hanghoa_select_by_id($id_hh);

        $view_name="chi_tiet.php";
    }
    else if(isset($_REQUEST['delete'])){
        $id_bl=$_GET['mabl'];
        binhLuan_delete($id_bl);

        $id_hh=$_GET['mahh'];
        $binh_luan=binhLuan_select_ma_hh($id_hh);
        $ten_hh= hanghoa_select_by_id($id_hh);
        // $ten_hh= binhLuan_select_ten_hh($id_hh);
        $view_name="chi_tiet.php";
    }
    else{
        $list_binhLuan = thong_ke_binh_luan();
        $view_name="list.php";
    }
    
    require "../layout.php";
?>