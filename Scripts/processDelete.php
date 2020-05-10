<?php
session_start();
require 'Connect.php';
$name=$_SESSION['name1'];

$sql="DELETE FROM register WHERE Username='$name'";
if($conn->query($sql)===TRUE)

{   session_unset();
    session_destroy();
    header("Location:/MainPage/main.php");
}else{
    echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
}