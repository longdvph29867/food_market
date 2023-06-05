<?php
    require "../../../global.php";
    require "../../../dao/taikhoan.php";
    
    extract($_REQUEST);
    if(exsist_param("btn_register")){
        $up_hinh = save_file('hinh', "$image_dir/image_user/");
        $hinh = $up_hinh;


        $ma_kh = $_POST['ma_kh'];
        $mat_khau = $_POST['mat_khau'];
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        user_add($ma_kh, $mat_khau, $ho_ten, $hinh, $email);

        $view_name="dang-nhap/login.php";
    }
    else {
        $view_name="dang-ky/register.php";
    }
    require "../layout.php";
?>