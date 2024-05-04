<?php
require('Admin/db_config.php');
require('Admin/essential.php');

if(isset($_POST['register'])){
    $data = filteration($_POST);

//Match Password and Confirm Password

if($data['pass'] != $data['cpass'] ){
    echo 'pass_mismatched';
    exit;
}

//Chech User Exist or Not

$u_exist = select("SELECT * FROM `user_creds` WHERE 'eamil' = ? AND 'phonenum' = ?  LIMIT 1",
[$data['email'],$data['phonenum']],"ss");

if(mysqli_num_rows($u_exist)!=0){
    $u_exist_fetch = mysqli_fetch_assoc($u_exist);
    echo ($u_exist_fetch['email']== $data['email']) ? 'email_already' : 'phone_already';
    exit;
}

//Upload Image To Server

$img =   uploadUserImage($_FILES['profile']);
if($img == 'inv_img'){
   echo 'inv_img';
   exit; 
}
else if($img == 'upd_failed'){
    echo 'upd_failed';
    exit;
}


$query =" INSERT INTO `user_creds`( `name`, `email`, `address`, `phonenum`, `profile`, `password`) VALUES (?,?,?,?,?,?)";
$values = [$data['name'],$data['email'],$data['address'],$data['phonenum'],$img,$enc_pass];
   if(insert($query,$values," ssssss"))
   {
    echo 1;
   }
    else{
        echo 'ins_failed';
    }
 

}
