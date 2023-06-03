<?php
    require "../../global.php";
    require "../../dao/loginregister.php";
    
    extract($_REQUEST);
    if(exsist_param("btn_login")){
        $view_name="login.php";
    }
    else if(exsist_param("btn_insert")) {
        $ma_kh = $_POST['ma_kh'];
        $mat_khau = $_POST['mat_khau'];
        $ho_ten = $_POST['ho_ten'];
        // $hinh = $_POST('hinh');
        $hinh = 'image';
        $email = $_POST['email'];
        user_add($ma_kh, $mat_khau, $ho_ten, $hinh, $email);

        $view_name="login.php";
    }
    else {
        $view_name="register.php";
    }
    require "./layout.php";
?>