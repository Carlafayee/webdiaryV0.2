<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

    <title>Register Now!</title>
  </head>
<body>
<div class="wrapper mt-sm-5" style="background-color: #ff9aa2">
    <h4 class="pb-4 border-bottom" style="color: #343a40">Fill out the form</h4>
    <div class="py-2">
        <div class="row py-2 pink">
            <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" class="bg-light form-control" value="" required> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" class="bg-light form-control" value="" required> </div>
        </div>
        <div class="row py-2 pink">
            <div class="col-md-6"> <label for="uname">User Name</label> <input type="text" class="bg-light form-control" value="" required> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Email Address</label> <input type="email" class="bg-light form-control" value="" required=""> </div>
        </div>
          <div class="row py-2 pink">
            <div class="col-md-6"> <label for="number">Phone Number</label> <input type="tel" class="bg-light form-control" value="" required> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="password">Password</label> <input type="password" class="bg-light form-control" value="" required> </div>
        </div>
       

        <div class="py-3 pb-4 border-bottom pink"> <button type="submit" class="btn mr-3">Sign Up</button></div>
        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            <div> <b style="color: #343a40">Have an account already?  </b><a href="login.php">Login Here</a></div>
        </div>
    </div>
</div>
</body>
</html>