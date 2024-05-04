<?php
require('essential.php');
adminLogin();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - DashBoard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:ital,wght@0,400;0,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
          *{
            font-family: 'Poppins', sans-serif;
        }
        .h-front{
            font-family: 'Merienda', cursive;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        display: none;
        }
        .custom-bg{
            background-color:#2ec;
        }
        .custom-bg:hover{
            background-color: #279e8c;
        }
        .h-line{
            width: 150px;
            margin:0 auto;
            height:1.7px;
        }
        #dashboard-menu{
            position: fixed;
            height: 100%;
        }
        .custom-alert{
            position: fixed;
            top: 80px;
            right: 25px;
            background-color:#279e8c;
        }


    </style>
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>
<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">Settings</h3>

            <!-- General_setting_section-->

            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">General Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                            <i class="bi bi-pencil-square"></i>Edit
                    </button>
                    </div>
                    <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                    <p class="card-text " id="site_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold">Site About</h6>
                    <p class="card-text" id="site_about"></p>
                </div>
            </div>
            <!--general setting model-->
            <div class="modal fade" id="general-s" tabindex="-1" aria-labelledby="general-s" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form id="general_s_form"> 
                        <div class="modal-content">                       
                            <div class="modal-header">
                                <h5 class="modal-title" id="general-s">Edit Contact Settings</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Site Title</label>
                                                <input type="text" name="site_title"id="site_title_inp" class="form-control shadow-none"  required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">About</label>
                                                <textarea type="text" name="site_about" id="site_about_inp" class="form-control shadow-none" row="6"  required></textarea>
                                            </div>                  
                                        </div>                                   
                                    </div>
                                </div>                           
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about">Close</button>
                                <button type="button" onclick="upd_general(site_title.value,site_about.value)" class="btn btn-primary">Save changes</button>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>                                           
        

<!--Shutdown setting-->
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Shutdown</h5>
                        <div class="form-check form-switch">
                            <form>
                                <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                            </form>
                            
                        </div>   
                    </div>
                    <p class="card-text">
                        No User will be allowed to book court ,when shutdown mode is turned on.
                    </p>
                </div>
            </div>

<!--Contact Settings-->
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Contact Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                            <i class="bi bi-pencil-square"></i>Edit
                    </button>
                    </div>
                    <!-- Contact Settings Display -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                <p class="card-text" id="address"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                <p class="card-text" id="gmap"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="card-subtitle mb-1 fw-bold">Phone number</h6>
                            <p class="card-text mb-1">
                                <i class="bi bi-telephone"></i>
                                <span id="pn1"></span>
                            </p>
                            <p class="card-text mb-4">
                                <i class="bi bi-telephone"></i>
                                <span id="pn2"></span>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="card-subtitle mb-1 fw-bold">Email</h6>
                            <p class="card-text" id="email"></p>
                        </div>
                        <div class="col-lg-4 p-4">
                        <h5 class="mb-3">Follow us</h5>
                        <p>
                            <i class="bi bi-twitter me-1"></i>Twitter
                            <span id="tw"></span>
                        </p>
                        <p>
                            <i class="bi bi-facebook me-1"></i>Facebook
                            <span id="fb"></span> 
                        </p>
                        <p>          
                            <i class="bi bi-instagram me-1"></i>Instagram 
                            <span id="insta"></span> 
                        </p>          
                        </div>
                        <div class="mb-4">
                            <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                            <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                        </div>   
                    </div> 
                </div>
                </div>

 <!-- Admin Contact Settings Edit Modal-->
            <div class="modal fade" id="contacts-s" tabindex="-1" aria-labelledby="contacts-s" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form id="contacts_s_form"> 
                        <div class="modal-content">                       
                            <div class="modal-header">
                                <h5 class="modal-title" id="contacts-s">Edit Contact Settings</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Address</label>
                                                <input type="text" name="address" class="form-control shadow-none" id="address_inp" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Google Map</label>
                                                <input type="text" name="gmap" class="form-control shadow-none" id="gmap_inp" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Phone Number</label>
                                                <div class="input-group-text mb-3">
                                                    <span class="input-group-text">@</span>
                                                    <input type="text" name="pn1" class="form-control shadow-none" id="pn1_inp" required>
                                                </div> 
                                                <div class="input-group-text mb-3">
                                                    <span class="input-group-text">@</span>
                                                    <input type="text" name="pn2" class="form-control shadow-none" id="pn2_inp" required>
                                                </div>                                           
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Email</label>
                                                <input type="text" name="email" class="form-control shadow-none" id="email_inp" required>
                                            </div>                                      
                                        </div>                                   
                                    </div>
                                </div>                           
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick=contacts_inp(contacts_data)>Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>                                           
        
        </div>
    </div>
</div>
    
<script>
   let general_data;
  
    
    function get_general(){       
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');

        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let shutdown_toggle = document.getElementById('shutdown-toggle');

        
        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        xhr.onload = function(){
            general_data = JSON.parse(this.responseText);
            
            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about;

            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;

            if(general_data.shutdown == 0){
                shutdown_toggle.checked = false;
                shutdown_toggle.value = 0;
            }
            else{
                shutdown_toggle.checked = true;
                shutdown_toggle.value = 1;
            }
        }

        xhr.send('get_general');
    }
    function upd_general(site_title_val,site_about_val){

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        xhr.onload = function(){
            //general_data = JSON.parse(this.responseText);

            var myModal = document.getElementById("general-s");
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();
            if(this.responseText==1){
                alert('success','Changes Save!');
                get_general();
            }
            else{
                alert('Error','No Changes!');
            }
        }

        xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
    }
   
   function upd_shutdown(value){
        console.log(value);

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        
        xhr.onload = function(){
            if(this.responseText == 1 && general_data.shutdown == 0){
                alert('success','TBMS is Up');
                
            }
            else{
                alert('error','TBMS is Down');
            }
            get_general();
        }


        xhr.send('upd_shutdown='+value);

    }

    //Taking form input and apply JS operations.
    let contacts_s_form = document.getElementById("contacts_s_form");

    contacts_s_form.addEventListener("submit", function(e){
        e.preventDefault();
        update_contacts_detail();
    })

    function get_contacts()
    {
       let contacts_p_id = ['address','gmap','pn1','pn2','email','tw','fb','insta'];
       let iframe = document.getElementById('iframe')

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        

        xhr.onload = function(){
            contacts_data = JSON.parse(this.responseText);
            contacts_data = Object.values(contacts_data);
            console.log(contacts_data);
            for(i=0;i<contacts_p_id.length;i++){
                document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
            }
            iframe.src = contacts_data[9];
            
            contacts_inp(contacts_data);
        
        }

        xhr.send('get_contacts')
    }
    
    //Function to store default data when reset
    function contacts_inp(contacts_data){
        let contacts_p_id = ['address_inp','gmap_inp','pn1_inp','pn2_inp','email_inp'];        
        for(i=0;i<contacts_p_id.length;i++){
            document.getElementById(contacts_p_id[i]).value = contacts_data[i+1];
        }
    }

    function update_contacts_detail(){

        let contacts_id = ['address','gmap','pn1','pn2','email'];
        let contacts_inp_id = ['address_inp','gmap_inp','pn1_inp','pn2_inp','email_inp']; 
        
        let data_arg = "";

        for(i=0;i<contacts_id.length;i++){
            data_arg += contacts_id[i] + "=" + document.getElementById(contacts_inp_id[i]).value + "&";
        }
        data_arg += "update_contacts_detail";
        console.log(data_arg);
        
        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        xhr.onload = function(){
            var myModal = document.getElementById("contacts-s");
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();
            if(this.responseText == 1){
                alert("success","Changes Save!");
                get_contacts();
                
            }
            else{
                alert("Error","No Changes Save!");
            }
        }

        xhr.send(data_arg);
    }

    window.onload = function(){
        get_contacts();
        get_general();
    }

    
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--Alert Function-->
<script>
    function alert(type,msg){
        let bs_class = (type == "success") ? "alert_success" : "alert_danger";
        let element = document.createElement('div');
        element.innerHTML = `
        <div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
            <strong>${msg}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        `;
        document.body.append(element);
    }
</script>
</body>
</html>