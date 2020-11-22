<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>



    <!--bootstrap CDN................-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--fontawesome CDN....................................-->
    <script src="https://kit.fontawesome.com/01bfbc5c41.js" crossorigin="anonymous"></script>


    <!-------------------------------slick slider---------->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


    <!--custom styles`heet.....................................-->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <!---------------------------------------header section--->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 text-left"></div>
                
                <div class="col-md-4 col-12 text-center">
                    <h2 class="my-md-3 site-title">MY TOLL TAX</h2>
                </div>
                <div class=" col-md-4 col-12 text-right">
                    <p class="my-md-4 ">
                    <a href="logout.php" class="btn btn-info btn-lg fa fa-sign-out">
            <span class="glyphicon glyphicon-log-out"></span> Log out
          </a>
                       
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-success">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                        <a class="nav-item nav-link" href="index.html">HOME<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link active" href="dashboard.html">PROFILE</a>
                        <a class="nav-item nav-link" href="#">FEATURES</a>
                        <a class="nav-item nav-link" href="logout.php">LOGIN ANOTHER ACCOUNT</a>
                        <a class="nav-item nav-link" href="Wallet.php">WALLET</a>
                        
                    </div>
                </div>
               
            </nav>
        </div>
    </header>

    <!-------------------------------------main section--------------------->
   
    <main id="dash">
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="assets/image1111.jpg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                    <!----------------------------------------------->                    <?php
                                                echo $_SESSION["username"];
?>
                                    </h5>
                                
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="vehicle-tab" data-toggle="tab" href="#vehicle" role="tab" aria-controls="vehicle" aria-selected="false">VEHICLE DETAILS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            
                            <a href="index.html">HOME PAGE</a><br/>
                            <a href="#vehicle">OUR FEATURES</a><br/>
                            <a href="logout.php">LOGIN ANOTHER ACCOUNT</a><br/>
    
                            <a href="wallet.php">WALLET</a><br/>
                            
                        </div>
                    </div>
                     <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php 
                                                 echo $_SESSION['name']." ".$_SESSION['lname'];
?>

                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php
   echo  $_SESSION["email"];
    ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php
   echo  $_SESSION["phoneno"];
    ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php
   echo  $_SESSION["gender"];
    ?>
                                            </div>
                                        </div>
									
                            </div>
                            <div class="tab-pane fade" id="vehicle" role="tabpanel" aria-labelledby="vehicle-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>COMPANY NAME</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>honda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>VEHICLE MODEL</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Honda Civic</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>VEHICLE COLOR</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>red</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>VEHICLE TYPE</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>CAR</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Manufactured date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>2019</p>
                                            </div>
                                        </div>
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>Fuel type</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Diesel</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>OTHER DETAILS</label><br/>
                                        <p>Vehicle detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

    </main>
    <!--------------------------------------------------footer------------------------------------------>
    <footer class="page-footer bg-dark text-white">

        <div class="bg-success ">
          <div class="container">
            <div class="row py-4 d-flex align-items-center ">
             
              <div class="col-md-12 text-center " > 
                  <a href="#"><i class="fab fa-facebook-square mr-4"></i></a>         
                  <a href="#"><i class="fab fa-twitter-square mr-4"></i></a>
                  <a href="#"><i class="fab fa-google-plus-square mr-4"></i></a>
                  <a href="#"><i class="fab fa-linkedin mr-4"></i></a>
                  <a href="#"><i class="fab fa-instagram-square mr-4"></i></a> 
                 </div> 
      
           </div>
          </div>
        </div>
      
        <div class="container text-center text-md-left mt-5">
          <div class="row">
      
            <div class="col-md-3 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">About Us</h6>
              <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
              <p class="mt-2">I am darksoul and i am working with john the do of motu patlu.</p>
            </div>
      
            <div class="col-md-2 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Features</h6>
              <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">
             
               <ul class="list-unstyled">
                  <li class="my-2"><a href="User signin.html">Sign in</a></li>        
                  <li class="my-2"><a href="#">create account</a></li>
                  <li class="my-2"><a href="#">recharge account</a></li>
                          
                </ul>
            </div>
        
            <div class="col-md-2 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Useful links</h6>
              <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px">
                <ul class="list-unstyled">
                  <li class="my-2"><a href="#">Home</a></li>        
                  <li class="my-2"><a href="#">About</a></li>
                  <li class="my-2"><a href="#">Services</a></li>
                  <li class="my-2"> <a href="#">Contact</a></li>         
                </ul>
            </div>
      
            <div class="col-md-3 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Contact</h6>
              <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 75px; height: 2px">
                <ul class="list-unstyled">
                  <li class="my-2"><i class="fas fa-home mr-3"></i> Butwal, traffic chowk, Nepal</li>
                  <li class="my-2"><i class="fas fa-envelope mr-3"></i> mytolltax@gmail.com</li>
                  <li class="my-2"><i class="fas fa-phone mr-3"></i> +977 9854622222</li>
                  
                </ul>
            </div>
          </div>
        </div>
      
        <div class="footer-copyright text-center py-3 bg-dark">
          <p>&copy; Copyright
          <a href="#">tolltax.com</a></p>
          <p>Designed by S&S</p>
        </div>
      </footer>
<!-------------------------------------------------------/footer----------------------------------------->

    <!-------------------------------------------bootstrap.......................-->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="./js/main.js"></script>
</body>

</html>
