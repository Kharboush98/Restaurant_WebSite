<?php
require 'Connect.php';
$no=$_GET['id'];

$table=$_POST['table'];

$sql="UPDATE reserve SET table='$table'";
if($conn->query($sql)===TRUE)
{           
    header("Location:/MainPage/main.php");
}else{
    echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
}

