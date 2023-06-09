<?php
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/danhmuc.php";

    check_login();
    extract($_REQUEST);
    if(exsist_param("add")){
        $view_name="add.php";
    }
    else if(exsist_param("btn-insert")){
        $ten_loai = $_POST['ten-loai'];
        danhMuc_add($ten_loai);

        $items = danhMuc_selectAll();
        $view_name="list.php";
    }
    else if(exsist_param("btn-edit")){
        $id_loai=$_GET['maloai'];
        $danhMuc=danhMuc_select_by_id($id_loai);

        $view_name="edit.php";
    }
    else if(exsist_param("btn-update")){

        $id_loai=$_POST['ma-loai'];
        $ten_loai=$_POST['ten-loai'];
        danhMuc_update($id_loai,$ten_loai);

        $items = danhMuc_selectAll();
        $view_name="list.php";
    }
    else if(exsist_param("btn-delete")){
        $id_loai=$_GET['maloai'];
        danhMuc_delete($id_loai);

        $items = danhMuc_selectAll();
        $view_name="list.php";
    }
    else if(exsist_param("btn-delete-all")){
        echo "<pre>";
        print_r($_GET['ma_loai']);
        echo "</pre>";
        $items = danhMuc_selectAll();

        $view_name="list.php";
    }
    else{
        $items = danhMuc_selectAll();
        $view_name="list.php";
    }
    require "../layout.php";
?>