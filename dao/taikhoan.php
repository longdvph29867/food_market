<?php
    require "pdo.php";
    function user_add($ma_kh, $mat_khau, $ho_ten, $hinh, $email){
        $sql="INSERT INTO `khach_hang`(`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES ( ?, ?, ?, '0', ?, ?, '0')";
        pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $hinh, $email);
    }
?>