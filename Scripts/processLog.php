<?php
session_start();
require 'Connect.php';

$name=strtolower($_POST['name']);
$pass= $_POST['password'];
$email=strtolower($_POST['name']);

if(strlen($_POST['name'])<8)
$_SESSION["name1"]=$name;
else

{
  $sql = "SELECT Username FROM register WHERE Email='$email' ";
  $result = $conn->query($sql);
 
  if ($result->num_rows > 0) {
     $row = $result->fetch_assoc();
     }
    $_SESSION["name1"]=$row['Username'];
}

 $sql = "SELECT * FROM register WHERE Username='$name' OR Email='$email'";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
 }
 if($row['Username']=="admin" && $row['Password']=="00000000")
        {
         header("Location: /MainPage/users.php");

      }
  else  if($row['Username']==$name && $row['Password']==$pass || $row['Email']==$email && $row['Password']==$pass){

   include ('unsetcart.php');

      $_SESSION["loggedin"]=true;
      header("Location: /MainPage/main.php");
    }
    
    else {
    header("Location: /MainPage/log.php?error=wrongusernamepass");

    }
$conn->close();
    