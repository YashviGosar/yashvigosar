<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Store</title>

<!--Bootstrap CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Font Awesome CDN-->
<script src="https://kit.fontawesome.com/ba915cb919.js" crossorigin="anonymous"></script>

<!-- Custom Stylesheet-->
<link rel="stylesheet" href="style1.css" />

<!--Slick Slider-->
<link rel="stylesheet" type="text/css" href="./slick-1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="./slick-1.8.1/slick/slick-theme.css"/>

</head>
<body>
    
    <!-- Header-->
    <header class="bg-orange">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="btn-group">
                        <button class="btn border-dark bg-info dropdown-toggle my-md-3 my-2" 
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">INR</button>
                        <div class="dropdown-menu bg-warning">
                            <a href="#" class="dropdown-item bg-warning">INR - Rupees</a>
                            <a href="#" class="dropdown-item bg-warning">USD - Dollar</a>
                            <a href="#" class="dropdown-item bg-warning">ERU - Euro</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <h2 class="my-md-3 site-title font-nosifer">ONLINE STORE</h2>
                </div>
                <div class="col-md-4 col-12 text-right">
                    <p class="my-md-4 header-links">
                        <a href="profile.php" class="border px-2 py-2 border-dark bg-info rounded black"><i class="fas fa-user-circle"></i>Profile</a>
                        <a href="logout.php" class="border px-2 py-2 border-dark ml-md-3 rounded bg-info black"><i class="fas fa-sign-out-alt"></i>Logout</a>
                  
                  	
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-black bg-pink">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link navbar-black" href="#">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link navbar-black" href="#">FEATURES</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link navbar-black" href="#">COLLECTION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-black" href="#">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-black" href="#">ABOUT US</a>
                    </li>
                  </ul>
                </div>
                <div class="navbar-nav">
                    <li class="nav-item mx-2 search-icon">
                        <i class="fas fa-search p-2"> Search </i>
                    </li>
                    <li class="nav-item border rounded-circle mx-2 border-dark basket-icon"></li>
                        <i class="fas fa-shopping-basket p-2"> Cart </i>                        
                    </li>    
                </div>
              </nav>
        </div>
        
    </header>

    <!-- /Header-->


<!--Main Section-->

    <main>

        <!--First Slider-->
        <div class="container-fluid p-0">
            <div class="site-slider">
                <div class="slider-one active">
                    <div>
                        <img src="./assets/2.5 x 2.5 (1).jpg" class="img-fluid mx-auto d-block" alt="Banner1">
                    </div>
                    <div>
                        <img src="./assets/2.5 x 2.5 (2).jpg" class="img-fluid mx-auto d-block" alt="Banner2">
                    </div>
                    <div>
                        <img src="./assets/2.5 x 2.5 (3).jpg" class="img-fluid mx-auto d-block" alt="Banner3">
                    </div>    
                </div>
            </div>
        </div>
        <!--/First Slider-->

        <!--Second Slider-->
        <div class="container-fluid p-0">
            <div class="site-slider-two px-md-4">
                <div class="row slider-two text-center">
                                <div class="col-md-2 product pt-md-5 pt-4">
                               
                                    <img src="./assets/2.5 x 2.5 (1).jpg" class="img-fluid mx-auto d-block" alt="Banner1">
                                    <span class="border site-btn">SOFAS</span>
                                </div>
                                <div class="col-md-2 product pt-md-5 pt-4">
                                    <img src="./assets/2.5 x 2.5 (2).jpg" class="img-fluid mx-auto d-block" alt="Banner2">
                                    <span class="border site-btn">SOFAS</span>
                                </div>
                                <div class="col-md-2 product pt-md-5 pt-4">
                                    <img src="./assets/2.5 x 2.5 (3).jpg" class="img-fluid mx-auto d-block" alt="Banner3">
                                    <span class="border site-btn">SOFAS</span>
                                </div> 
                                <div class="col-md-2 product pt-md-5 pt-4">
                                    <img src="./assets/2.5 x 2.5 (4).jpg" class="img-fluid mx-auto d-block" alt="Banner4">
                                    <span class="border site-btn">SOFAS</span>
                                </div>
                                <div class="col-md-2 product pt-md-5 pt-4">
                                    <img src="./assets/2.5 x 2.5 (5).jpg" class="img-fluid mx-auto d-block" alt="Banner5">
                                    <span class="border site-btn">SOFAS</span>
                                </div>
                                <div class="col-md-2 product pt-md-5 pt-4">
                                    <img src="./assets/2.5 x 2.5 (6).jpg" class="img-fluid mx-auto d-block" alt="Banner6">
                                    <span class="border site-btn">SOFAS</span>
                                </div> 
                       
                </div>
            </div>
        </div>
        <!--/Second Slider-->

    </main>

<!--/Main Section-->



    <footer></footer>







<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="./slick-1.8.1/slick/slick.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>