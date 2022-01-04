<?php

require("controller/user.php");
 $user = new User();

$result = "";
if(isset($_REQUEST['submit'])){
    $userName = $_REQUEST['username'];
    $password = $_REQUEST['password'];
   
    if(strlen($userName) > 5 && strlen($password) > 3){
      if($user->userAuthentication($userName, $password)){
            $result =  "successfull";
            header('Location: index.php');
        }
    }else{
        $result =  "Please insert the right information";  
    }
    unset($_REQUEST['submit']);
  }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/public/css/bootstrap.css" rel="stylesheet" >

    <title>login</title>
  </head>
  <body style="background: #096f8f; padding: 150px;">
    <div class="container d-flex justify-content-center">
      <div class="bg-white rounded-3  shadow-sm p-5">
        <h2 style="color: aqua;" class="d-flex justify-content-center ">Login Form</h2>
        <?php
        if(strlen($result) > 0){
            echo '<div class="alert alert-danger" role="alert">'.$result.'</div>';
            $result = "";
        }
    ?>
        <form class="row mt-5" action="" method="GET">
          <div class="mb-3 col-md-12">
            <label for="username" class="form-label">Username:</label>
                            <input type="text" name="username" id="username" class="form-control">
            
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" id="password"
                                   class="form-control">
          </div>
          <div class="mb-3 form-check col-md-12">
            <label class="form-check-label">If you don,t have an account than <a href="registration.html">Registration First</a> .</label>
          </div>
          <input type="submit" name="submit" id="submit" class="btn btn-primary" value="submit"></input>
        </form>

      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
 
    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="assets/public/js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>