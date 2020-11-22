<?php   
session_start(); 
session_destroy(); 
header("location:user signin.php"); 
exit();
?>