<?php

//Backend upload process needs this data
define('USERS_FOLDER','users/'); 




function adminLogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        echo "
        <script>
        window.location.href ='index.php';</script>";
        exit;
    }
    
}

function redirect($url){
    echo "
    <script>
    window.location.href ='$url';</script>";
    exit;
}


function alert($type,$msg){
 $bs_class =   ($type =="sucess" ) ?"alert-success" : "alert-danger";
    echo <<<alert
    <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
        <strong>$msg</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    alert;
}
function uploadUserImage($image)
{
    $valid_mime = ['image/jpeg', 'image/png','image.webp'];
    $img_mime = $image['type'];

    if(!in_array($img_mime,$valid_mime)){
        return 'inv_img';
    }
    else{
  $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
  $rname = 'IMG_'.random_int(11111,99999).".jpeg";

$img_path = USERS_FOLDER.$rname;
if($ext == 'png' || $ext == 'PNG'){
  $img =  imagecreatefrompng($image['tmp_name']);
}
else if($ext == 'webp' || $ext == 'WEBP'){
  $img =  imagecreatefromwebp($image['tmp_name']);
}
else{
    $img = imagecreatefromjpeg($image['tmp_name']);
}



if(imagejpeg($img,$img_path,75)){
    return $rname;
}
else{
    return 'upd_failed';
}

    }

}






?>