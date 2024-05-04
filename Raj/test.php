<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
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
</body>
</html>