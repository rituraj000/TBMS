<?php 
    require('../essential.php');
    require('../db_config.php');
    adminLogin();
    

    if(isset($_POST['get_general']))
    {
        $q = "SELECT * FROM `setting` WHERE `sr_no`=?";
        $value = [1];
        $res = select($q,$value,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }
    if(isset($_POST['upd_general'])){
        $frm_Data = filteration($_POST);
        $q = "UPDATE `setting` SET `site_title`= ?,`site_about`= ? WHERE `sr_no`= ?";
        $value = [$frm_Data["site_title"], $frm_Data["site_about"],1];
        $res = update($q,$value,"ssi");
        echo $res;
    }

    if(isset($_POST['get_contacts']))
    {
        $q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
        $value = [1];
        $res = select($q,$value,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if(isset($_POST['update_contacts_detail']))
    {
        $frmData = filteration($_POST);
        $q = "UPDATE `contact_details` SET `address`= ?,`gmap`= ?,`pn1`= ?,`pn2`= ?,`email`= ? WHERE `sr_no`= ?";
        $value = [$frmData["address"], $frmData["gmap"], $frmData["pn1"], $frmData["pn2"], $frmData["email"], 1];
        $res = update($q,$value,"sssssi");
        echo $res;
    }
    if(isset($_POST['upd_shutdown']))
    {
        $frmData = ($_POST['upd_shutdown']==0) ? 1:0;
        $q = "UPDATE `setting` SET `shutdown`=? WHERE `sr_no`= ?";
        $value = [$frmData, 1];
        $res = update($q,$value,"ii");
        echo $res;
    }
    

 
?>