
<?php

$dbconnect=mysqli_coonnct("localhost","root","","registration1")

if(mysqli_connect_errno($dbconnect)){
echo"failed to connect";
}
else
{
echo"connection success";}
?>

