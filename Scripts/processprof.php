<?php 
require 'Connect.php';
include 'user.php';
$uname=$_SESSION['name1'];

$user=new user();
$user->set_uname($_POST['name']);
$user->set_email($_POST['email']);
$user->set_mobile($_POST['mobile']);
$user->set_address($_POST['address']);

$password=$_POST['password'];
$name=strtolower($user->get_uname());
$email=strtolower($user->get_email());
$address=$user->get_address();
$mobile=$user->get_mobile();

$sql = "SELECT * FROM register WHERE Username = '$uname'";
$result = $conn->query($sql);
if($result->num_rows>0)
{
    $row = $result->fetch_assoc();
}


if(!preg_match("/^[a-z-A-Z-0-9]*$/",$user->get_uname()))
	{
        header("refresh:1;url=updateprofile.php?error=WrongUserNameFormat");
        exit();
    }

$sqlname = "SELECT * FROM updateprofileister WHERE Username='$uname'";
$resultname = $conn->query($sqlname);

$sqlemail = "SELECT * FROM updateprofileister WHERE Email='$email'";
$resultemail = $conn->query($sqlemail);

$sqlmob = "SELECT * FROM updateprofileister WHERE Mobile='$mobile'";
$resultmob = $conn->query($sqlmob);


   if ($resultname->num_rows > 0) 
   {
      header("Location: /MainPage/updateprofile.php?error=UserNameTaken");
      exit();
    
    }
    elseif($resultemail->num_rows > 0) 
    {
       header("Location: /MainPage/updateprofile.php?error=EmailTaken");
          exit();
    }
        
    elseif($resultmob->num_rows > 0) 
    {
       header("Location: /MainPage/updateprofile.php?error=MobileTaken");
         exit();
    }
    elseif($password != $row['Password'])
    {
        header("Location: /MainPage/updateprofile.php?error=PasswordError");
         exit();
    }


$sql="UPDATE register SET Username='$name',Password='$password',Email='$email',Mobile='$mobile',Address='$address' WHERE Username='$uname' ";

if($conn->query($sql)===TRUE)
{           
    header("Location:/MainPage/profile.php");
}else{
    echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
}