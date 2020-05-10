<?php
require 'Connect.php';
session_start();
$id=$_GET["id"];

$sql="DELETE FROM `productdb` WHERE `id`='$id'";
if($conn->query($sql)===TRUE)
{           
    header("Location:/MainPage/menu.php");
}else{
    echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
}