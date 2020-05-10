<?php
require 'Connect.php';
include 'user.php';
session_start();
$id=$_SESSION["id"];
$sql_name="SELECT * FROM reserve WHERE id='$id'";
$rse_name=$conn->query($sql_name);
{
    if ($rse_name->num_rows > 0) 
    {
    $row_name = $rse_name->fetch_assoc();
    if($row_name['isUser']=="True")
    {
        $uname=$row_name['fname'];
        $user=new user();
        $user->DeleteResByAdmin($uname);
       
    }}}
$sql="DELETE FROM reserve WHERE id='$id'";
if($conn->query($sql)===TRUE)
{           
    header("Location:/MainPage/reserv.php");
}else{
    echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
}
 

