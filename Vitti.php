<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname = "vitti";

$con =  mysqli_connect($server, $username ,$password ,$dbname);


 if(!$con){
     die("connection fail :" .mysqli_connect_error());
 }

// else{
//     echo "conn";
// }


?>