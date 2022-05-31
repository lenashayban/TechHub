<?php
session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">CleanXCare</a>
                  <a class = "active" href ="indProfile.php"> <i  class ="far fa-user-circle fa-2x"></i></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Reservations">Reservations</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#FavList">Favourite List</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Complaints">Complaints</a></li>
                         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Comments">Comments</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Contact">Contact</a></li>                     
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Welcome <?php echo ($_SESSION['user']); ?>!</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5"> Hire Housekeepers in Your Neighborhood. Our workers are meant to help making the houses cleaner!</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="searchOptions.php">Find My House-Keeper</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="Reservations">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Check Your Reservations</h2>
                        <hr class="divider light my-4" />
                        <p class="text-black-50 mb-4"> Upcoming And Past Reservations</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="indReservations.php">Reservations</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section bg-wheat" id="FavList">
            <div class="container">
                <h2 class="text-center mt-0">Shortlist Your Favorites </h2>
                <hr class="divider my-4" />
                  <p class="text-center mt-0"> Here Where You Can View And Edit Your Favourit List!</p>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center">
             <p> <a class="btn btn-light btn-xl js-scroll-trigger" href="FavoriteList.php">Favourite List</a> </p>
                    </div>
                </div>
            </div>
        </section>
<section class="page-section bg-dark text-white" id="Complaints">
            <div class="container">
                <h3 class="text-center mt-0">Issue and view your complaints </h3>
                <hr class="divider my-4" />
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center">
         <p> <a class="btn btn-light btn-xl js-scroll-trigger" href="RetrieveindComplaints.php">Complaints</a> </p>
                    </div>
                </div>
            </div>
        </section>
         <section class="page-section bg-primary" id="Comments">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">View Your Comments</h2>
                        <hr class="divider light my-4" />
                        <p class="text-black-50 mb-4"> Recent And Past Comments</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="RetrieveComments.php">Comments</a>
                    </div>
                </div>
            </div>
        </section>      
        <!-- Contact-->
        <section class="page-section" id="Contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Need Help? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:contact@yourwebsite.com">contact@CleanXCare.com</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - CleanXCare</div></div>
        </footer>
    </body>
</html>