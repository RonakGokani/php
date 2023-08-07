<?php 
 include 'config.php';

 $id = $_GET['id'];

 $sql = "select * from `user` where id=$id";

 $result = mysqli_query($con,$sql);

 $row = mysqli_fetch_assoc($result);
 
 $name = $row['name'];
 $email = $row['email'];
 $password = $row['password'];

 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "update `user` set id=$id, name='$name',email='$email',password='$password' where id=$id";

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
</head>
<body>
<form method="post" class="form-control my-5">
        Name : <input type="text" Name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name ?>"><br>
        Email : <input type="text" Name="email" placeholder="Enter Email" class="form-control" value="<?php echo $email ?>"><br>
        Password : <input type="text" Name="password" placeholder="Enter Password" class="form-control" value="<?php echo $password ?>"><br>
        <input type="submit" name="submit" class="btn btn-primary">
    </form>
</body>
</html>