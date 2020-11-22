<?php      

    include('connection.php'); 
	session_start();	
    $username = $_POST['vehicle_no'];  
    $password = $_POST['pass'];
    $error = "username/password incorrect"; 
    
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from register1 where licenseno = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
		
          
        if($count == 1){  
			$_SESSION['name'] = $row["fname"];
			$_SESSION['lname'] = $row["lname"];
			$_SESSION["username"] = $row["uname"];
			$_SESSION['email'] = $row["email"];
			$_SESSION["vehicle_no"] = $row["licenseno"];
            $_SESSION["amt"] = $row["amount"];
            $_SESSION["phoneno"] = $row["phnno"];
            $_SESSION["gender"] = $row["gender"];
           
			header("Location: dashboar.php");
              
        }  
        else{  
            header("Location:user signin.php");
            $_SESSION["error"] = $error;
            
             
        }  
    
           
?>  