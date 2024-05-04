<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBMS</title>
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

<body>

</body>

</html>
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




    let register_form = document.getElementById('register-form');
    if (register_form) {
        register_form.addEventListener('submit', (e) => {
            e.preventDefault();
        });
        let data = new FormData();
        data.append('name', register_form.elements['name'].value);
        data.append('email', register_form.elements['email'].value);
        data.append('phonenum', register_form.elements['phonenum'].value);
        data.append('address', register_form.elements['address'].value);
        data.append('pass', register_form.elements['pass'].value);
        data.append('cpass', register_form.elements['cpass'].value);
        data.append('profile', register_form.elements['profile'].file[0]);
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