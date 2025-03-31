<?php
    //frontend purpose data
    define('SITE_URL','http://127.0.0.1/booking-hotel-php/');
    define('ABOUT_IMG_PATH', SITE_URL.'/img/about/');
    define('FACILITIES_IMG_PATH', SITE_URL.'/img/facilities/');

    //backend upload process needs this data
    define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'].'/booking-hotel-php/img/');
    define('ABOUT_FOLDER', 'about/');
    define('FACILITIES_FOLDER', 'facilities/');


    function adminLogin() {
        session_start();
        if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
            echo "<script>
                window.location.href='index.php'
            </script>";
            exit;
        }
        // session_regenerate_id(true);
        
    }

    function redirect($url) {
        echo "<script>
            window.location.href='$url'
        </script>";
        exit;
    }

    function alert($type, $msg) {
        $bs_class = ($type == 'success') ? "alert-success" : "alert-danger";

        echo <<<ALERT
            <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">$msg</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ALERT;
    }

    function uploadImage($image, $folder) {
        $valid_mime = ['image/jpeg','image/png', 'image/webp'];
        $img_mime = $image['type'];

        if(!in_array($img_mime, $valid_mime)) {
            return 'inv_img';
        } else if(($image['size']/(1024*1024)) > 2) {
            return 'inv_size';
        } else {
            $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
            $rname = 'IMG_'.random_int(11111,99999).".$ext";

            $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
            if(move_uploaded_file($image['tmp_name'], $img_path)) {
                return $rname;
            } else {
                return 'upd_failed';
            }
        }

    }
    
    function uploadSVGImage($image, $folder) {
        $valid_mime = ['image/svg+xml'];
        $img_mime = $image['type'];

        if(!in_array($img_mime, $valid_mime)) {
            return 'inv_img';
        } else if(($image['size']/(1024*1024)) > 2) {
            return 'inv_size';
        } else {
            $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
            $rname = 'IMG_'.random_int(11111,99999).".$ext";

            $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
            if(move_uploaded_file($image['tmp_name'], $img_path)) {
                return $rname;
            } else {
                return 'upd_failed';
            }
        }

    }

    function deleteImage($image, $folder) {
        if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)) {
            return true;
        } else {
            return false;
        }
    }


?>