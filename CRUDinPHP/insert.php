<?php 

include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `user` (`name`,`email`,`password`) values ('$name','$email','$password')";

    $result = mysqli_query($con,$sql);

    if($result){
        header("location:read.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form method="post" class="form-control my-5">
        Name : <input type="text" Name="name" placeholder="Enter Name" class="form-control"><br>
        Email : <input type="text" Name="email" placeholder="Enter Email" class="form-control"><br>
        Password : <input type="text" Name="password" placeholder="Enter Password" class="form-control"><br>
        <input type="submit" name="submit" class="btn btn-primary">
    </form>
</body>
</html>