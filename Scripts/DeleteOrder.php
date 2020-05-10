<?php
require 'Connect.php';
session_start();
$id=$_GET["id"];

$sql="DELETE FROM `order` WHERE `id`='$id'";
if($conn->query($sql)===TRUE)
{           
    header("Location:/MainPage/orders.php");
}else{
    echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
}