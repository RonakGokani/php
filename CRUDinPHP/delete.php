<?php 

include 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "delete from `user` WHERE id=$id";

    $result = mysqli_query($con,$sql);

    if($result){
        header('location:read.php');
    }
}

?>