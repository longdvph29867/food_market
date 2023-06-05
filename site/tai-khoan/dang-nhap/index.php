<?php
    require "../../../global.php";
    require "../../../dao/taikhoan.php";
    
    extract($_REQUEST);
    if(exsist_param("btn_login")){
    }
    else {
        $view_name="dang-nhap/login.php";
    }
    require "../layout.php";
?>