<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
        $servername="localhost";
        $username="root";
        $password=""; 
        $database="database1";
        $con=mysqli_connect($servername,$username,$password,$database);
        if(!$con)
        {
            die("error detected".mysqli_error($con));
        }
    ?>
</html>