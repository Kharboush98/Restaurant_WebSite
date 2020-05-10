<?php
require 'Connect.php';
session_start();
$id=$_SESSION["id"];

$sql="DELETE FROM register WHERE id='$id'";
if($conn->query($sql)===TRUE)
{           
    header("Location:/MainPage/users.php");
}else{
    echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
}