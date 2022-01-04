<?php

require("controller/user.php");
 $user = new User();
 
     if(!$user->checkLogin()){
        header('Location: login.php');
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

    <title>login</title>
</head>
<body style="background: #6fa052;">
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Student Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a style="color: black;" class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a style="color: black;" class="nav-link" href="registration.php">Registration</a>
                  </li>
                  <li class="nav-item">
                    <a style="color: black;" class="nav-link" href="login.php">Login</a>
                  </li>
            

                <li class="nav-item">
                    <a class="nav-link" href="search.html">Search</a>
                </li>
            </ul>

            <div class="d-flex">
                <ul class="navbar-nav me-2">
                    <li class="nav-item">
                        <a style="color: black;" class="nav-link" href="login.html">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
        <div class="col">
            <div class="card h-100">
                <img src="assets/images/vasily-koloda-8CqDvPuo_kI-unsplash.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="color: aqua;" class="card-title">Saikat Ghosh</h5>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="assets/images/vasily-koloda-8CqDvPuo_kI-unsplash.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="color: aqua;" class="card-title">Saikat Ghosh</h5>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="assets/images/vasily-koloda-8CqDvPuo_kI-unsplash.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="color: aqua;" class="card-title">Saikat Ghosh</h5>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="assets/images/vasily-koloda-8CqDvPuo_kI-unsplash.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="color: aqua;" class="card-title">Saikat Ghosh</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="assets/images/vasily-koloda-8CqDvPuo_kI-unsplash.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="color: aqua;" class="card-title">Saikat Ghosh</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="assets/images/vasily-koloda-8CqDvPuo_kI-unsplash.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="color: aqua;" class="card-title">Saikat Ghosh</h5>
                </div>
            </div>
        </div>
    </div>



</div>


<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="mt-5">

    <footer class="text-center text-lg-start" style="background-color: #000000;">

        <!-- Copyright -->
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
           
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

</div>
<!-- End of .container -->






<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="assets/public/js/bootstrap.bundle.min.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>