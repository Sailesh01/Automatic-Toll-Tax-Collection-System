
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$txtfname = $_POST['firstName'];
$txtlname = $_POST['lastName'];
$txtuname = $_POST['username'];
$txtemail = $_POST['email'];
$txtpassword = $_POST['password'];
$txtdob = $_POST['birthDate'];
$txtphnno = $_POST['phoneNumber'];
$txtlicenseno = $_POST['liscenceid']; 
$txtgender = $_POST['sel1'];

$sql = "INSERT INTO `register1` (`fname`,`lname`,`uname`,`email`,`password`,`dob`,`phnno`,`licenseno`,`gender`)
VALUES ('$txtfname','$txtlname','$txtuname','$txtemail','$txtpassword','$txtdob','$txtphnno','$txtlicenseno','$txtgender')";

if ($conn->query($sql) === TRUE) {
  header("Location:User signin.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>




