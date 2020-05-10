<?php
session_start();
require 'Connect.php';
if(!isset($_SESSION['loggedin']))
{
$fname=$_POST["fname"];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['mphone'];
$isuser="False";
}
else
{
    $uname=$_SESSION['name1'];
    $sql = "SELECT * FROM register WHERE Username='$uname' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
        $row = $result->fetch_assoc();
        
    $fname=$row['Username'];
    $lname=" ";
    $email=$row['Email'];
    $phone=$row['Mobile'];
    $isuser="True";
    
    $user=new user();
    $user->updatepoints4res($uname);
   
}
$npeople=$_POST['people'];
$date=$_POST['mdate'];
$time=$_POST['mtime'];


$sql="INSERT INTO reserve(fname,lname,email,npeople,phone,date,time,isUser) VALUES('$fname','$lname','$email','$npeople','$phone','$date','$time','$isuser')";
           if($conn->query($sql)===TRUE)
           {           
               header("Location:/MainPage/main.php");
           }else{
               echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
           }

$conn->close();