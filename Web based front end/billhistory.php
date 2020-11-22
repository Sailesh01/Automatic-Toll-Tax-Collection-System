<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paybill</title>



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
                      <a class="nav-item nav-link" href="dashboar.php">PROFILE<span class="sr-only">(current)</span></a>
                      <a class="nav-item nav-link" href="#">FEATURES</a>
                      <a class="nav-item nav-link" href="logout.php">LOGIN ANOTHER ACCOUNT</a>
                      <a class="nav-item nav-link " href="Wallet.php">WALLET</a>
                      <a class="nav-item nav-link" href="index.html">VISIT WEB SITE</a>
                      <a class="nav-item nav-link active" href="#">MY BILL</a>
                    </div>
                </div>
               
            </nav>
        </div>
    </header>

    <!-------------------------------------main section--------------------->
    <main id="bill" style="background-color:skyblue">
        <div class="container-fluid  text-black">
            <div class="row justify-content-md-center">
            <?php
             $host = "localhost";  
             $user = "root";  
             $password = '';  
             $db_name = "registration";  
               
             $con = mysqli_connect($host, $user, $password, $db_name);  
             if(mysqli_connect_errno()) {  
                 die("Failed to connect with MySQL: ". mysqli_connect_error());  
             }  
            $vehicleno=$_SESSION["vehicle_no"];
            $Bill_no=170001;
            $amt=50;
            $result2 = mysqli_query($con,"SELECT * FROM wallet where licenseno = '$vehicleno'");
            echo "<table border='2' table-striped>
<tr>
<th>Bill no</th>
<th>Toll Booth Name</th>
<th>Date</th>
<th>Time</th>
<th>Amount</th>
<th>Payment</th>
<th>View Bill</th>

</tr>";

while($row2 = mysqli_fetch_array($result2))
{
echo "<tr>";
echo "<td>" . $Bill_no. "</td>";
echo "<td>yamuna express toll booth</td>";

echo "<td>" . $row2['date'] . "</td>";
echo "<td>" . $row2['time'] . "</td>";
echo "<td>Rs.50 only/-</td>";
echo "<td>" . $row2['payment'] . "</td>";

if($row2['payment']=='Due'){
echo "<td><a href='paybill1.php?bill=".$Bill_no." &dat=".$row2['date']."'>View Details</a></td>";
}
else{
  echo "<td><a href='paybill2.php?bill=".$Bill_no." &dat=".$row2['date']."'>View Details</a></td>";
}
echo "</tr>";
$Bill_no=$Bill_no+1;

}
echo "</table>";


            ?>
                </div>
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
                  <li class="my-2"><a href="#">Sign in</a></li>        
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
</body>

</html>