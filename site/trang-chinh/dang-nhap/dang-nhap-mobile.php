<?php
if (!isset($_SESSION['user'])) {
?>  
    <div class="user_header">
        <img src="<?= $url_content ?>/image-layout/user.png" alt="">
    </div>
    <button class="btn2 ml-2">Thông tin</button>
    <button class="btn2 mx-2 ">Quản lý</button>
    <button class="btn2 ">Đăng xuất</button>
<?php
} else {
?>
    <a href="<?= $url_site ?>/tai-khoan/dang-nhap" class="btn1 mx-2 ">Đăng nhập</a>
    <a href="<?= $url_site ?>/tai-khoan/dang-ky" class="btn1 ">Đăng Ký</a>
<?php
}
?>