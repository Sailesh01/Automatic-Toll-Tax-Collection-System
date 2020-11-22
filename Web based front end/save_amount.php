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

session_start();
$vehicle_no = $_SESSION["vehicle_no"];
$txtamount = $_POST['amount'];



$sql = "UPDATE `register1`
SET `amount` = `amount` + $txtamount
WHERE `licenseno` = '$vehicle_no'";

$txtamount = $_POST['amount'] + $_SESSION["amt"];

if ($conn->query($sql) === TRUE) {
  $_SESSION["amt"] = $txtamount;
  header("Location:Wallet.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>