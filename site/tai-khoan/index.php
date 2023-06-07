<?php
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/khachHang.php";
    
    extract($_REQUEST);
    if(exsist_param("btn_insert")){
        $up_hinh = save_file('hinh', "$image_dir/image_user/");
        $hinh = $up_hinh;

        $ma_kh = $_POST['ma_kh'];
        $mat_khau = $_POST['mat_khau'];
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        user_register($ma_kh, $mat_khau, $ho_ten, $hinh, $email);
        $MESSAGE = "Đăng ký thành công";

        $view_name="login.php";
    }
    else if (exsist_param("btn_get_password")) {
        $user = khachHang_select_by_id($ma_kh);
        if($user) {
            if($user['email'] == $email) {
                $MESSAGE = "Mật khẩu cảu bạn là: $user[mat_khau]";
                $view_name="login.php";
            }
            else {
                $errors['email'] = "Sai địa chỉ email!";
                $view_name="quen-mat-khau.php";
            }
        }
        else {
            $errors['ma_kh'] = "Sai tên đăng nhập!";
            $view_name="quen-mat-khau.php";
        }
    }
    else if (exsist_param("btn_login")) {
        $user = khachHang_select_by_id($ma_kh);
        if($user) {
            if($user['mat_khau'] == $mat_khau) {
                // 
                if(exsist_param("ghi_nho")) {
                    // add_cookie('ma_kh', $ma_kh, 30);
                    // add_cookie('mat_khau', $mat_khau, 30);
                    add_cookie('info-user', serialize($user), 30);
                }
                // else {
                //     delete_cookie('ma_kh');
                //     delete_cookie('mat_khau');
                // }
                $_SESSION['user'] = $user;
                header("location: $url_site/trang-chinh");
            }
            else {
                $errors['mat_khau'] = 'Sai mật khẩu!';
                $view_name="login.php";
            }
        }
        else {
            $errors['ma_kh'] = 'Sai tài khoản!';
            $view_name="login.php";
        }
    }
    else if (exsist_param("btn_form_login")) {
        $view_name="login.php";
    }
    else if (exsist_param("btn_forgot")) {
        $view_name="quen-mat-khau.php";
    }
    else {
        $view_name="register.php";
    }
    require "layout.php";
?>