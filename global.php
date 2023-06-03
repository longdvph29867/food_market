<?php
    $url="/xshop";
    $url_content="$url/content";
    $url_site="$url/site";
    $url_admin="$url/admin";
    $image_dir = $_SERVER['DOCUMENT_ROOT']."$url/content/images";
    function exsist_param($fieldName){
        return array_key_exists($fieldName,$_REQUEST);
    }
    
    function save_file($fieldname, $target_dir) {
        $file_uploaded = $_FILES[$fieldname];
        $file_name = basename($file_uploaded['name']);
        $target_path = $target_dir.$file_name;
        move_uploaded_file($file_uploaded['tmp_name'], $target_path);
        return $file_name;
    }
?>