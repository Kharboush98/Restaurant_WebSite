<?php
require 'Connect.php';
include 'user.php';
$uname=$_SESSION['name1'];
$sql = "SELECT * FROM register WHERE Username = '$uname'";
$result = $conn->query($sql);

$user=new user();

if($result->num_rows>0)
{
    $row = $result->fetch_assoc();
    $user->userCons($row['Username'],$row['Password'],$row['Email'],$row['Mobile'],$row['Address'],$row['Gender'],$row['NReservations'],$row['Points']);
}
$oldpassword=$user->get_password();
$opassword=$_POST['oldpassword'];
if($oldpassword!=$opassword)
{
    header("refresh:1;url=updateprofile.php?error=WrongoldPassword");
        exit();
}
else{

    $newpassword=$_POST['newpassword'];
    $cnewpassword=$_POST['cpassword'];

    if($newpassword != $cnewpassword)
    {
        header("refresh:1;url=updateprofile.php?error=Passwordsdontmatch");
        exit();
    }
    else
    {
        $sql="UPDATE register SET Password='$newpassword' WHERE Username='$uname' ";

if($conn->query($sql)===TRUE)
{           
    header("Location:/MainPage/main.php");
}else{
    echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
}
    }
}
