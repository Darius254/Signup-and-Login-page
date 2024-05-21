<?php
$server="localhost";
$user= "root";
$password="";
$db = "kiep";
$con=mysqli_connect($server,$user,$password,$db);
if(!$con)
    {
        echo "Connection to the server failed: ";
        
    }
?>