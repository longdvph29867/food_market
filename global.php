<?php
    $url="/xshop";
    $url_content="";
    $url_site="";
    $url_admin="$url/admin";

    function exsist_param($fieldName){
        return array_key_exists($fieldName,$_REQUEST);
    }
    
    
?>