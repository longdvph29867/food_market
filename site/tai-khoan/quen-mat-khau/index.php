<?php
    require "../../../global.php";
    require "../../../dao/taikhoan.php";
    
    extract($_REQUEST);
    if(exsist_param("btn_login")){
    }
    else {
        $view_name="quen-mat-khau/quen-mat-khau.php";
    }
    require "../layout.php";
?>