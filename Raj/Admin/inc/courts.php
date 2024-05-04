<?php
require('db_config.php');
require('essential.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courts and Field</title>
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
            top: 25px;
            right: 25px;
        }
    </style>

</head>
<body class="bg-light">
<?php require('inc/header.php') ;?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">Courts</h3>
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="text-end mb-4">
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-courts">
                        <i class="bi bi-plus-square"></i>add
                        </button>
                    </div>
                    <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                        <table class="table table-hover broder">
                            <thead>
                                <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">isAvailable</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
    <!--Add_Model_Court-->
                <div class="modal fade" id="add-courts" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="add_court_form">   
                                <div class="modal-header">
                                    <h5 class="modal-title d-flex align-items-center">Add Court</h5>
                                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label  class="form-label">Name</label>
                                            <input type="text" class="form-control shadow-none" name="name" id="name_inp">


                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">isAvailable</label>
                                            <input type="number" class="form-control shadow-none" name="isAvailable" id="isAvailable_inp">
                                        </div>
                                    </div>   
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <button type="reset" class="btn btn-dark shadow-none">Close</button>
                                    <button type="submit" class="btn btn-dark shadow-none">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
       let add_court_form = document.getElementById('add_court_form');

        add_court_form.addEventListener('submit',function(e){
            e.preventDefault();
            add_court();
        });
        console.log('input');
        function add_court()
        {   
           
            let data = new FormData();
            data.append('add_court','');
            data.append('name',add_court_form.elements["name"].value);
            data.append('isAvailable',add_court_form.elements["isAvailable"].value);
            

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/courts_admin_setting.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            xhr.onload = function(){
               
                var myModal = document.getElementById("add-courts");
                var modal = bootstrap.Modal.getInstance(myModal);
                 modal.hide();
               
                if(this.responseText == 1){
                    alert('success','New court added');
                    add_court_form.reset();
                   
                                     
                }
                else{
                    alert('error','Server Down');
                }

            }
            xhr.send(data);
        } 



        
        
    </script>
</body>