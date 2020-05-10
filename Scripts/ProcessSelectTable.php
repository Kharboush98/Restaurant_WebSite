<?php
require 'Connect.php';
session_start();
$rando=$_SESSION['rando'];
$table=$_POST['table'];

$sql="UPDATE reserve SET tableno='$table' WHERE rando='$rando'";
if($conn->query($sql)===TRUE)
{           
    header("Location:/MainPage/ask4food.php");
}else{
    echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
}

