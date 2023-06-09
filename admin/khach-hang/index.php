<?php
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/khachHang.php";

    check_login();
    extract($_REQUEST);
    if(exsist_param("add")){
        $view_name="add.php";
    }
    else if(exsist_param("btn-insert")){
        $up_hinh = save_file('img-kh', "$image_dir/image_user/");
        $hinh =  $up_hinh;

        $ma_kh=$_POST['ma-kh'];
        $ho_ten=$_POST['ten-kh'];
        $mat_khau=$_POST['password-kh'];
        $confim_password=$_POST['password-confirm'];
        $email=$_POST['email-kh'];
        $kich_hoat=$_POST['kich-hoat'];
        $vai_tro=$_POST['vai-tro'];
        if($mat_khau==$confim_password){
            khachHang_add($ma_kh,$mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro);
            
            $list_khachHang=khachhang_selectAll();
            $view_name="list.php";
        }
        else {
            $view_name="add.php";
        }
    }
    else if(exsist_param("edit")){
        $id_kh=$_GET['makh'];
        $khachHang=khachHang_select_by_id($id_kh);
        // echo "<pre>";
        // print_r($khachHang);
        // echo "</pre>";
        $view_name="edit.php";
    }
    else if(exsist_param("btn-update")  ) {
        $ma_kh=$_POST['ma-kh'];
        $ho_ten=$_POST['ten-kh'];
        $mat_khau=$_POST['password-kh'];
        $confim_password=$_POST['password-confirm'];
        $email=$_POST['email-kh'];
        $kich_hoat=$_POST['kich-hoat'];
        $vai_tro=$_POST['vai-tro'];
        if($mat_khau==$confim_password){
            $up_hinh = save_file('img-kh', "$image_dir/image_user/");
            $hinh =  strlen($up_hinh) > 0 ? $up_hinh : $_POST['old_img-kh'];
            khachHang_update($ma_kh, $mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro);

            $list_khachHang=khachhang_selectAll();
            $view_name="list.php";
        }
        else {
            $view_name="add.php";
        }

    }
    else if(exsist_param("btn_delete")){
        $id_kh=$_GET['makh'];
        khachHang_delete($id_kh);

        $list_khachHang=khachhang_selectAll();
        $view_name="list.php";
    }
    else{
        $list_khachHang=khachhang_selectAll();
        $view_name="list.php";
    }
    require "../layout.php";
?>