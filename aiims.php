<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIIMS BHOPAL</title>
</head>
<body>
    <center><h1>AIIMS BHOPAL</h1></center>
    <!--Getting IP ADDRESS-->
<?php

    $ip=$_SERVER['REMOTE_ADDR'];
    echo "Your IP Address is :" .$ip;

    $con=mysqli_connect('localhost','root','','aiims');

    $query="INSERT INTO aiims_tables(ip) values ('$ip')";
    mysqli_query($con, $query,)
?>
</body>
</html>