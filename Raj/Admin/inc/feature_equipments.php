<?php
require('db_config.php');
require('essential.php');
adminLogin();

if(isset($_GET['seen']))
{
    $frm_data = filteration($_GET);

    if($frm_data['seen']=='all'){

    }
    else{
        $q = "UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
        $value = [1,$frm_data['seen']];
        if(update($q,$value,'ii')){
            alert('success','Mark as read');
        }
        
    }
}
if(isset($_GET['del']))
{
    $frm_data = filteration($_GET);

    if($frm_data['del']=='all'){

    }
    else{
        $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
        $value = [$frm_data['del']];

        if(delete( $q, $value, 'i')){
            alert('success','Data Deleted');
        } 
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature And Equipments Queries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:ital,wght@0,400;0,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .h-front {
            font-family: 'Merienda', cursive;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            display: none;
        }

        .custom-bg {
            background-color: #2ec;
        }

        .custom-bg:hover {
            background-color: #279e8c;
        }

        .h-line {
            width: 150px;
            margin: 0 auto;
            height: 1.7px;
        }

        #dashboard-menu{
            position: fixed;
            height: 100%;
        }

        .custom-alert{
            position: fixed;
            top: 80px;
            right: 25px;
        }
    </style>

</head>
<body class="bg-light">
<?php require('inc/header.php') ;?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">Feature And Equipments Queries</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-item-corner justify-content-between mb-3">
                        <h5 class="card-title m-0" >Features</h5>
                       
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s">
               <i class="bi bi-plus-square"></i>Add</button>
    </div>

            <div class="table-responsive-md" style="height: 450px; overflow-y: scroll;">
                <table class="table table-hover border">
                    <thead class="sticky-top">
                        <tr class="bg-dark text-light">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col"width="15%">Subject</th>
                            <th scope="col"width="20%">Message</th>
                            <th scope="col">Date </th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                            $q = "SELECT * FROM `user_queries` ORDER BY `sr_no` DESC";
                            $data = mysqli_query($con,$q);
                            $i=1;

                            while($row = mysqli_fetch_assoc($data)){
                                $seen='';
                                if($row['seen']!=1){
                                    $seen = "<a href='?seen=$row[sr_no]' class ='btn btn-sm rounded-pill btn-primary'>Mark as read</a>";    
                                }
                                $seen.="<a href='?del=$row[sr_no]' class ='btn btn-sm rounded-pill btn-danger'>Delete</a";
                                echo<<<query
                                    <tr>
                                        <td>$i</td>
                                        <td>$row[name]</td>
                                        <td>$row[email]</td>
                                        <td>$row[subject]</td>
                                        <td>$row[message]</td>
                                        <td>$row[date]</td>
                                        <td>$seen</td>

                                    </tr>
                                query;
                                $i++;
                            }


                        ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

<div class="modal fade" id="feature-s" data-bs-backdrop="static" tabindex="-1" aria-labelledby="general-s" aria-hidden="true">
                <div class="modal-dialog ">
                    <form id="feature_s_form"> 
                        <div class="modal-content">                       
                            <div class="modal-header">
                                <h5 class="modal-title" id="general-s">Add Feature</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="modal-body">
                                            <div class="mb-3 ">
                                                <label class="form-label fw-bold">Name</label>
                                                <input type="text" name="feature_name" class="form-control shadow-none"  required>
                                            </div>
                                            </div>                
                                        </div>                                   
                                    </div>
                                </div>                           
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal" >CANCEL</button>
                                <button type="submit"  class="btn custom-bg text-white shadow-none">SUBMIT</button>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>                                           
        
<script>
let feature_s_form = document.getElementById('feature_s_form');
feature_s_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_feature();
});

function add_feature(){

let data= new FormData();
data.append('name',feature_s_form.elements['feature_name'].value);
data.append('add_feature','');

let xhr=new XMLHttpRequest();
xhr.open("POST","ajax/feature_equipment.php",true);
xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

xhr.onload = function (){
    var myModal = document.getElementById('feature-s');
    var modal =  bootstrap.Modal.getInstance(myModal);
    modal.hide();

    if(this.responceText==1){
        alert('sucesss','new feature added!');
        feature_s_form.elements['feature_name'].value='';
        //get_member();
    }
    else{
        alert('error','Server Down!');
    }
}
xhr.send(data);

}


</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>