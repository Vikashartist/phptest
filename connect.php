<?php
$servername="localhost";
$username="root";
$password="";
$database="lib";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die("error detected".mysqli_error($con));
}else{
    echo"connected sucessfully !";
}


?>