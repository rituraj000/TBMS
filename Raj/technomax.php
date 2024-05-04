<?php
require('Admin/db_config.php');
require('Admin/essential.php');
require('Admin/inc/footers.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Turf Booking and Management System home</title>
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

        .availability-form {
            margin-top: -50px;
            z-index: 5;
            position: relative;
        }

        .custom-alert {
            position: fixed;
            top: 80px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            z-index: 1;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            min-width: 200px;
        }

        .dropdown-menu label {
            display: block;
            margin-bottom: 5px;
        }

        .dropdown-menu input[type="checkbox"] {
            margin-right: 5px;
        }

        .show {
            display: block;
        }
    </style>
</head>

<body class="bg-light">
    <?php
    $q = "SELECT * FROM `setting` WHERE `sr_no`=?";
    $value = [1];
    $res = select($q, $value, "i");
    $setting_r = mysqli_fetch_assoc($res);
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow -sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="technomax.php">TBMS</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-t.oggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="technomax.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="court.php">Court</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="equipments.php">Equipments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="contact_Me.php">Contact Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#LoginModel">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#RegisterModel">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- Image -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://cdn.pixabay.com/photo/2016/05/31/23/21/badminton-1428046_960_720.jpg" width="1500" height="600" />
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1531415074968-036ba1b575da?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1167&q=80" width="1500" height="600" />
                </div>
                <div class="swiper-slide" style="display: flex; justify-content: center; align-items: center;">
                    <img src="https://cdn.pixabay.com/photo/2013/03/14/14/06/haikou-city-93546_960_720.jpg" width="1500" height="600" />
                </div>
            </div>
        </div>
    </div>
    <!-- check availability -->
    <br>
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow-p4-rounded">
                <h5 class="mb-4">Check Slot Available</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Book Slot</label><br>
                            <input type="datetime-local" class="form-control shadow-none" placeholder="Select DateTime">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Time Out</label><br>
                            <input type="datetime-local" class="form-control shadow-none" placeholder="Select DateTime">
                        </div>
                        <div class="col-lg-3 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Facilities-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Courts</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style=" max-width: 350px;margin:auto;">
                    <img src="https://www.tutorialspoint.com/badminton/images/badminton_racket.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5>Badminton Court</h5>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                2 Courts
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                2 Nets
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                2 Lights
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style=" max-width: 350px;margin:auto;">
                    <img src="https://media.istockphoto.com/id/177427917/photo/close-up-of-red-cricket-ball-and-bat-sitting-on-grass.jpg?s=612x612&w=0&k=20&c=DcorerbBUeDNTfld3OclgHxCty4jih2yDCzipffX6zw=" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5>Cricket Ground</h5>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                1 Ground
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                Bats
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                Balls
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                Cricket Kit
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                Couch
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book</a>
                            <a href="#" class="btn btn-sm btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style=" max-width: 350px;margin:auto;">
                    <img src="https://media.istockphoto.com/id/1178074437/photo/3d-rendering-of-a-basketball-in-the-net-on-a-dark-background.jpg?s=612x612&w=0&k=20&c=wVod1DvQ5pihsHAdLefCjxbfRdejOySNl4czUaqSndw=" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5>BasketBall Court</h5>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                1 Court
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                Basketball
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                2 hoops
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book</a>
                            <a href="#" class="btn btn-sm btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Equipments-->
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Equipments</h2>
            <div class="container">
                <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="https://5.imimg.com/data5/UE/OR/MY-19880050/white-shuttle-cock-500x500.jpg" width="80px">
                        <h5 class="mt-3">shuttlecock</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Basketball.png" width="80px">
                        <h5 class="mt-3">Basketball</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="https://t4.ftcdn.net/jpg/04/35/96/41/360_F_435964170_igiRmKD50Tyq8HVL4iDUS7xHvAPolKfK.jpg" width="100px">
                        <h5 class="mt-3">Cricket Kit</h5>
                    </div>
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">View More</a>
                </div>
            </div>
            <!--Testimonials-->
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
            <div class="container">
                <div class="swiper swiper-testimonials">
                    <div class="swiper-wrapper mb-5">
                        <div class="swiper-slide bg-white mb-3">
                            <div class="profile d-flex align-items-center p-4">
                                <i class="bi bi-person-circle"></i><!--Profile Image-->
                                <h6 class="m-0 ms-2">Random user1</h6>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Magni mollitia tempore id quos odio? Perferendis sit quos maiores corporis. Et provident cupiditate qui adipisci pariatur aspernatur nisi, possimus facilis sunt.
                            </p>
                            <div>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        <div class="swiper-slide bg-white mb-3">
                            <div class="profile d-flex align-items-center p-4">
                                <i class="bi bi-person-circle"></i><!--Profile Image-->
                                <h6 class="m-0 ms-2">Random user1</h6>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Magni mollitia tempore id quos odio? Perferendis sit quos maiores corporis. Et provident cupiditate qui adipisci pariatur aspernatur nisi, possimus facilis sunt.
                            </p>
                            <div>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        <div class="swiper-slide bg-white mb-3">
                            <div class="profile d-flex align-items-center p-4">
                                <i class="bi bi-person-circle"></i><!--Profile Image-->
                                <h6 class="m-0 ms-2">Random user1</h6>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Magni mollitia tempore id quos odio? Perferendis sit quos maiores corporis. Et provident cupiditate qui adipisci pariatur aspernatur nisi, possimus facilis sunt.
                            </p>
                            <div>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <!--Contact Us-->
            <!-- <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
     <div class="container">
        <div class="col-lg-8 col-md-8 bg-white rounded">
            <iframe  class="w-100 rounded" height="450" src="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           
        </div>
        <div class="col-lg-8 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
                <h5>Call Us</h5>
                <a href="tel:7355054286" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone"></i>+91 
                </a>
                <a href="tel:7355054286" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone"></i>+91 
                </a>
            </div>
        </div>
     </div>-->
            <!--Footer-->
            <div class="container-fluid bg-white mt-5">
                <div class="row">
                    <div class="col-lg-4 p-4">
                        <h3 class="h-font fw-bold fs-3 mb-2">TBMS</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Eveniet quidem recusandae consequuntur nam blanditiis dolores iure excepturi molestias inventore totam quibusdam,
                            quia eos officia voluptate libero soluta, tempora, sunt animi.</p>
                    </div>
                    <div class="col-lg-4 p-4">
                        <h5 class="mb-3">Links</h5>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Court</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Equipments</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
                    </div>
                    <div class="col-lg-4 p-4">
                        <h5 class="mb-3">Follow us</h5>
                        <a href="#" class="d-inline-block  text-dark text-decoration-none mb-2">
                            <i class="bi bi-twitter me-1"></i>Twitter
                        </a><br>
                        <a href="#" class="d-inline-block  text-dark text-decoration-none mb-2">
                            <i class="bi bi-facebook me-1"></i>Facebook
                        </a><br>
                        <a href="#" class="d-inline-block  text-dark text-decoration-none mb-2">
                            <i class="bi bi-instagram me-1"></i>Instagram
                        </a>
                    </div>
                    <h6 class="text-center bg-dark text-white p-3">Designed and Developed by Ritu Raj</h6>

                    <div class="modal fade" id="LoginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">
                                        <h5 class="modal-title d-flex align-items-center">
                                            <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                                        </h5>
                                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Email address</label>
                                            <input type="email" class="form-control shadow-none">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control shadow-none">
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row col-md-6 col-md-offset-3">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center">
                                    <h1>Registration Form</h1>
                                </div>
                                <div class="panel-body">
                                    <form method="post" action="connect.php">

                                        <div class="form-group">
                                            <label for="firstName">First Name</label>
                                            <input type="text" class="form-control" id="firstName" name="firstname">
                                        </div>

                                        <div class="form-group">
                                            <label for="lastName">Last Name</label>
                                            <input type="text" class="form-control" id="lastName " name="lastname">
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <div>
                                                <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male"> Male</label>

                                                <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="female"> Female</label>

                                                <label for="others" class="radio-inline"><input type="radio" name="gender" value="o" id="others"> Others</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text" class="form-control" id="password" name="password">
                                        </div>

                                        <div class="form-group">
                                            <label for="number">Phone Number</label>
                                            <input type="text" class="form-control" id="number" name="number">
                                        </div>
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                                <div class="panel-footer text-right">
                                    <small>&copy; Technical Babaji</small>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

                    <script>
                        var swiper = new Swiper(".swiper-container", {
                            effect: "fade",
                            loop: true,
                            autoplay: {
                                display: 2500,
                                disableOnInteraction: false,
                            }
                        });
                    </script>
                    <script>
                        var swiper = new Swiper(".swiper-testimonials", {
                            effect: "coverflow",
                            grabCursor: true,
                            centeredSlides: true,
                            slidesPerView: "auto",
                            slidesPerView: "3",
                            loop: true,
                            coverflowEffect: {
                                rotate: 50,
                                stretch: 0,
                                depth: 100,
                                modifier: 1,
                                slideShadows: false,
                            },
                            pagination: {
                                el: ".swiper-pagination",
                            },
                            breakpoint: {
                                320: {
                                    slidesPerView: 1,
                                },
                                640: {
                                    slidesPerView: 1,
                                },
                                768: {
                                    slidesPerView: 2,
                                },
                                1024: {
                                    slidesPerView: 3,
                                },
                            }
                        });
                    </script>

                    <script>
                        config = {
                            enableTime: true,
                            dateFormat: "Y-m-d H:i",
                            altInput: true,
                            altFormat: "F,j,Y(h:S K)"
                        }
                        flatpickr("input[type=datetime-local]", config);
                    </script>
                    <!--
<script>

    function show_shutdown(){
        let xhr = new XMLHttpRequest();
        xhr.open("POST","admin/ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        //console.log(setting_data[3]);
        xhr.onload = function(){
            setting_data = JSON.parse(this.responseText);
            setting_data = Object.values(setting_data);
            console.log(setting_data[3]);
            
            if(setting_data[3]==1){
                console.log("success");
                alert('success','TBMS is Down');         
            }
        }
        xhr.send("get_general");

    }

    window.onload = function(){
        show_shutdown();
    }

</script>-->

                    <!--Alert Function-->
                    <script>
                        function alert(type, msg) {
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
                    <!--   
<script>
    let check_slots_form = document.getElementById("check_slots");
    console.log(check_slots_form);

    check_slots_form.addEventListener("submit", function(e){
        console.log("check_slots");
        e.preventDefault();
        check_slots();
    })

    function check_slots(){
        let check_slot = ["book_from", "book_to", "cricket", "basketball", "badminton"];
        let check_slot_inp = ["book_from_inp", "book_to_inp", "cricket_inp", "basketball_inp", "badminton_inp"];
        let check_court = [];
        let data_arg = "";

        for(i=0;i<check_slot.length;i++){
            data_arg += check_slot[i] + "=" + document.getElementById(check_slot_inp[i]).value + "&";
        }
        console.log(data_arg);

        // Add selected courts to check_court array
        if (document.getElementById("cricket_inp").checked) {
            check_court.push("Cricket");
        }
        if (document.getElementById("basketball_inp").checked) {
            check_court.push("BasketBall");
        }
        if (document.getElementById("badminton_inp").checked) {
            check_court.push("Badminton");
        }
        console.log(check_court);
    }
</script>
<script>
document.addEventListener("dropdownMenuButton", function() {
  let dropdownButton = document.getElementById("dropdownMenuButton");
  let dropdownMenu = document.getElementById("myDropdown");

  dropdownButton.addEventListener("click", function() {
    dropdownMenu.classList.toggle("show");
  });

  window.addEventListener("click", function(event) {
    if (!event.target.matches(".dropdown-toggle")) {
      if (dropdownMenu.classList.contains("show")) {
        dropdownMenu.classList.remove("show");
      }
    }
  });
});

</script>

-->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


                    <script>
                        function alert(type, msg, position = 'body') {
                            let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
                            let element = document.createElement('div');
                            element.innerHTML = `
<div class-"alert ${bs_class} alert-dismissible fade show " role - "alert">
<strong class = "me-3">${msg}</strong>
<button type ="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
</div>

`;

                            if (position = 'body') {
                                document.body.append(element);
                                element.classList.add('custom-alert');
                            } else {
                                document.getElementById(position).appendChild(element);
                            }

                            setTimeout(remAlert, 4000);
                        }

                        function remAlert() {
                            document.getElementsByClassName('alert')[0].remove();
                        }




                        let registerform = document.getElementById('register_form');
                        if (registerform) {
                            registerform.addEventListener('submit', (e) => {
                                e.preventDefault();
                            });
                            let data = new FormData();
                            data.append('name', registerform.elements['name'].value);
                            data.append('email', registerform.elements['email'].value);
                            data.append('phonenum', registerform.elements['phonenum'].value);
                            data.append('address', registerform.elements['address'].value);
                            data.append('pass', registerform.elements['pass'].value);
                            data.append('cpass', registerform.elements['cpass'].value);
                            data.append('profile', registerform.elements['profile'].file[0]);
                            data.append('register', '');

                            var myModal = document.getElementById('registerModal');
                            var modal = bootstrap.Modal.getInstance(myModal);
                            modal.hide();

                            let xhr = new XMLHttpRequest();
                            xhr.open("POST", "ajax/login_register.php", true);

                            xhr.onload = function() {
                                if (his.responseText == 'pass_mismatch') {
                                    alert('error', 'Password Mismatch');
                                } else if (this.responseText == 'email_already') {
                                    alert('error', 'Email is already registred');
                                } else if (this.responseText == 'phone_already') {
                                    alert('error', 'Phone Number is already registred');
                                } else if (this.responseText == 'inv_img') {
                                    alert('error', 'Only JPG,WEBP & PNG images are allowed');
                                } else if (this.responseText == 'upd_failed') {
                                    alert('error', 'Image Upload Failed');
                                } else if (this.responseText == 'ins_failed') {
                                    alert('error', 'Registration Failed! Server Down!');
                                } else {
                                    alert('success', "Registration Successful. ");
                                    register_form.reset();
                                }
                            }

                            xhr.send(data);


                        }
                    </script>


                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
</body>

</html>