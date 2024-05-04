<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Turf Booking and Management System Court</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:ital,wght@0,400;0,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
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
    </style>

</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow -sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="technomax.php">TBMS</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
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
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Courts</h2>
        <div class="h-line bg-dark"> </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded-shadow">
                    <div class="container-fluid flex-lg-column align-text-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-text-stretch mt-2" id="filterdropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb=3" style="font-size: 18px;">Booking turf</h5>
                                <label class="form-label" style="font-weight: 500">Book Slot</label><br>
                                <input type="datetime-local" class="form-control shadow-none" placeholder="Select DateTime">
                                <label class="form-label" style="font-weight: 500">Time out</label><br>
                                <input type="datetime-local" class="form-control shadow-none" placeholder="Select DateTime">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb=3" style="font-size: 18px;">Court/Field</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-label" for="f1" style="font-weight: 500">Badminton</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-label" for="f2" style="font-weight: 500">Cricket Ground</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-label" for="f3" style="font-weight: 500">Basketball</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-8 col-md-12  px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <img src="https://images.pexels.com/photos/3660204/pexels-photo-3660204.jpeg?cs=srgb&dl=pexels-eric-anada-3660204.jpg&fm=jpg" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Badminton Court</h5>
                            <div class="facilities">
                                <h6 class="mb-2">Facilities</h6>
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
                        </div>
                        <div class="col-md-2">
                            <div class="card-body align-text-center">
                                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book</a>
                                <a href="#" class="btn btn-sm w-100  btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <img src="https://media.istockphoto.com/id/1292401641/photo/orange-basketball-ball-on-wooden-parquet-close-up-image-of-basketball-ball-over-floor-in-the.jpg?s=612x612&w=0&k=20&c=Z1w1_emnpzTzuT1H-u6BP19YWaJMR8vXr6qtcXqbH0E=" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Basketball Court</h5>
                            <div class="facilities">
                                <h6 class="mb-2">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                    1 Courts
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                    2 hoops
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                    Basketball
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-body align-text-center">
                                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book</a>
                                <a href="#" class="btn btn-sm w-100  btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <img src="https://cdn.siasat.com/wp-content/uploads/2023/01/Cricket.jpg" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Cricket Ground</h5>
                            <div class="facilities">
                                <h6 class="mb-2">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                    1 Ground
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                    Cricket Kit
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                                    Couch
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-body align-text-center">
                                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book</a>
                                <a href="#" class="btn btn-sm w-100  btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
            <h6 class="text-center bg-dark text-white p-3">Designed and Developed by Ritu Raj </h6>

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
            <div class="modal fade" id="RegisterModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h5 class="modal-title d-flex align-items-center">
                                    <i class="bi bi-person-add fs-3 me-2"></i>
                                    User Registration
                                </h5>
                                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                                    Note:Your Details Must Match With Your ID(College ID)
                                    that will be required for booking.
                                </span>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 ps-0 mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 p-0">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 ps-0 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 p-0 mb-3">
                                            <label class="form-label">Image</label>
                                            <input type="file" class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-12 p-0 mb-3">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control shadow-none" row="1"></textarea>
                                        </div>
                                        <div class="col-md-6 ps-0 mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 p-0 mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control shadow-none">
                                        </div>
                                    </div>
                                    <div class="text-center my-1">
                                        <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                                    </div>
                                    <!-- <div class="mb-3">
                            <label  class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                    </div> -->
                                </div>
                        </form>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>

</html>