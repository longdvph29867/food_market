<?php

    // echo "<pre>";
    // print_r($user);
    // echo "</pre>";

    session_start();
    $url="/food_market_10-diem";
    $url_content="$url/content";
    $url_site="$url/site";
    $url_admin="$url/admin";
    $image_dir = $_SERVER['DOCUMENT_ROOT']."$url/content/images";
    $MESSAGE = "";
    $MESSAGE_CHILD = "";
    $MESSAGE_SUCCESS = "";
    $MESSAGE_ERROR = "";
    $errors = [];
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

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $TODAY = date('Y-m-d');


    function add_cookie($name, $value, $day) {
        setcookie($name, $value, time() + (84600 * $day), '/');
    }

    function delete_cookie($name) {
        add_cookie($name, '', -1);
    }

    function get_cookie($name) {
        return $_COOKIE[$name] ?? '';
    }

    function check_login() {
        global $url_site;
        if(isset($_SESSION['user'])) {
            if($_SESSION['user']['vai_tro'] == 1) {
                return;
            }
            if(strpos($_SERVER['REQUEST_URI'], '/admin/') == false) {
                return;
            }
        }
        // $_SESSION['request_url'] = $_SERVER['REQUEST_URI'];
        header("location: $url_site/tai-khoan/index.php?btn_form_login");
    }

    if(get_cookie('info-user')) {
        $_SESSION['user'] = unserialize(get_cookie('info-user'));
    }

// if (isset($_SESSION['user']['ma_kh'])) {
//     $sessionStartTime = intval($_SESSION['user']['ma_kh']);
//     $currentTime = time();
//     $sessionDuration = $currentTime - $sessionStartTime;

//     //Chuyển đổi thời gian thành định dạng bạn muốn (ví dụ: giờ:phút:giây)
//     $formattedDuration = gmdate("H:i:s", $sessionDuration);

//     echo "Thời gian phiên làm việc: " . $formattedDuration;
// } else {
//     echo "Không có phiên làm việc hiện tại.";
// }

?>
