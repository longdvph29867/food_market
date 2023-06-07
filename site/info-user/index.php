<?php
    require '../../global.php';
    require "../../dao/pdo.php";
    require '../../dao/danhmuc.php';
    require '../../dao/khachHang.php';


    
    extract($_REQUEST);
    if(exsist_param("btn_change_info")) {
        $list = 'change_info_form.php';
    }
    else if(exsist_param("btn_update_info")) {
        $up_hinh = save_file('file', "$image_dir/image_products/");
        $hinh =  strlen($up_hinh) > 0 ? $up_hinh : $_POST['old_hinh'];

        $ma_kh = $_POST['ma_kh'];
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];

        user_update($ma_kh, $ho_ten, $hinh, $email);
        $MESSAGE_SUCCESS = "Cập nhật thành công!";
        $_SESSION['user'] = khachHang_select_by_id($ma_kh);
        if(get_cookie('info-user')) {
            add_cookie('info-user', serialize(khachHang_select_by_id($ma_kh)), 30);
        }
        $list = 'info-user.php';
    }
    else if(exsist_param("btn_change_pass")) {
        $list = 'change_pass_form.php';
    }
    else if(exsist_param("btn_update_pass")) {
        if($mat_khau2 != $mat_khau3) {
            $MESSAGE_ERORR = "Xác nhận mật khẩu mới không đúng!";
            $list = 'change_pass_form.php';
        }
        else {
            $user = khachHang_select_by_id($ma_kh);
            if($user) {
                if($user['mat_khau'] == $mat_khau) {
                    try {
                        user_change_password($ma_kh, $mat_khau2);
                        $MESSAGE_SUCCESS = "Đổi mật khẩu thành công!";
                        $list = 'info-user.php';
                    }
                    catch (Exception $exc) {
                        $MESSAGE_ERORR = "Đổi mật khẩu thất bại!";
                        $list = 'info-user.php';
                    }
                }
                else {
                    $MESSAGE_ERORR = "Sai mật khẩu!";
                    $list = 'change_pass_form.php';
                }
            }
            else {
                $MESSAGE_ERORR = "Sai mã đăng nhập!";
                $list = 'change_pass_form.php';
            }
        }

    }
    else {
        $list = 'info-user.php';
    }

    $user = $_SESSION['user'];

    
    $MESSAGE = "Thông tin tài khoản";
    $view_name = '../content-layout.php';
    $dsloai = danhMuc_selectAll();
    require '../layout.php'
?>