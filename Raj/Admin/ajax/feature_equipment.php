<?php 
    require('../essential.php');
    require('../db_config.php');
    adminLogin();
    

        $q = "SELECT * FROM `setting` WHERE `sr_no`=?";
        $value = [1];
        $res = select($q,$value,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    
    if(isset($_POST['add_feature'])){
        $frm_Data = filteration($_POST);
        $q="INSERT INTO `features`( `name`) VALUES (?)" ;
        $value = [$frm_Data["name"]];
        $res = insert($q,$value,"s");
        echo $res;

    }

   