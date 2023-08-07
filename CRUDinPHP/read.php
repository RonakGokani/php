<?php 

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="insert.php">Add user</a></button>
    <table border=2>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>OPERATION</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            $sql = "SELECT * FROM `user`";

            $result = mysqli_query($con,$sql);

            if($result){
                while($row = mysqli_fetch_assoc($result)){

                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $password = $row['password'];

                echo '<tr>
                   <th>'.$id.'</th>
                   <th>'.$name.'</th>
                   <th>'.$email.'</th>
                   <th>'.$password.'</th>
                   <td>
                     <button><a href="update.php?id='.$id.'">UPDATE</a><button>
                     <button><a href="delete.php?id='.$id.'">DELETE</a><button>
                   </td>
                </tr>';
            }
        }
            ?>
        </tbody>
    </table>
</body>
</html>