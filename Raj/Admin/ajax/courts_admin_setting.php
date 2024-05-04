<?php 
    require('../essential.php');
    require('../db_config.php');
    adminLogin();

    
    if(isset($_POST['add_courts'])){
        $frm_data = filteration($_POST);

       $flag = 0;
    
        $q1 = "INSERT INTO `courts`( `name`, `isAvailable`) VALUES (?,?)";
        $values = [$frm_data["name"], $frm_data["isAvailable"]];
    
       // if(insert($q1,$values,'si')){
          //  $flag = 1;

        //}
        $res =  insert($q1,$values,'si');
        echo $res;

    }
    if(isset($_POST['user_queries']))
    {
        $frm_data = filteration($_POST);
        echo"hello";
        $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
        $value = [$frmData["name"], $frmData["email"], $frmData["subject"], $frmData["message"]];

        $res = insert($q,$value,'ssss');
        echo $res;
    }

    
?>
