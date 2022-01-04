<?php

require("controller/user.php");
 $user = new User();

$result = "";
if(isset($_REQUEST['submit'])){
    $userName = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $contact = $_REQUEST['contact'];
    $address = $_REQUEST['address'];
    $password = $_REQUEST['password'];
  
   
    if(strlen($userName) > 0 && strlen($email) > 0 && strlen($contact) > 0 && strlen($address) > 0 && strlen($password) > 0){


      if($user->userAuthentication($userName, $password)){
            $result =  "User Already Exit";
            
        }else{
            if($user->addNewUser($userName, $email, $contact, $address, $password)){

                header('Location: index.php');
            }else{
                $result =  "try again"; 
            }
            
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
    <link href="assets/public/css/bootstrap.css" rel="stylesheet">

    <title>Registration</title>
</head>
<body style="background: #e3e665; padding: 150px;">
<div class="container d-flex justify-content-center">
    <div class="bg-white rounded-3 shadow-sm p-5">
        <h2 style="color: aqua;" class="d-flex justify-content-center">Registration</h2>
        <?php
        if(strlen($result) > 0){
            echo '<div class="alert alert-danger" role="alert">'.$result.'</div>';
            $result = "";
        }
    ?>
        <form class="row mt-5" action="" method="post">
            <div class="mb-3 col-md-12">
                <label for="nameField" class="form-label"> User Name</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Name">
            </div>

            <div class="mb-3 col-md-12">
                <label for="emailField" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="mb-3 col-md-12">
                <label for="contactField" class="form-label">Contact</label>
                <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter contact number">
            </div>
            <div class="mb-3 col-md-12">
                <label for="addressField" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="Enter your address"></textarea>
            </div>
            <div class="mb-3 col-md-12">
                <label for="passwordField" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="mb-3 form-check col-md-12">
                <label class="form-check-label">If you already have an account than <a href="login.php">Login</a> .</label>
            </div>
            <input type="submit" id="submit" name="submit" class="btn btn-primary mt-lg-5 p-2 fs-3" value="Register"></input>
        </form>

    </div>

</div>






<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="assets/public/js/bootstrap.bundle.min.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>