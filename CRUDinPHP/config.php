<?php

$hostname = 'localhost';
$username = 'root';
$password = "";
$dbname = "crudoperation";

$con = new mysqli($hostname,$username,$password,$dbname);

if(!$con){
    echo "404" . mysqli_error($con);
}
?>