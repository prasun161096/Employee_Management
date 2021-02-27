<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "regs_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

if($conn){
    echo"Connection successful";
    } 
    else
    
    echo "Connected is not successfully";
?>