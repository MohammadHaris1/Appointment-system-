<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "as";
$conn = mysqli_connect($server, $username, $password,$database);
if(!$conn){
//     echo "success";    
// } 
// else{
     die("Could not connect database" . mysqli_connect_error() );
    }
?>