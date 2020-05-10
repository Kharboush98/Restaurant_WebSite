
<?php
session_start();

require 'Connect.php';
include 'user.php';
$user1=new user();
$user1->set_uname(strtolower($_POST['name']));
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
if($pass==$cpass)
$user1->set_password($pass);
$user1->set_email($_POST['email']);
$user1->set_mobile($_POST['mobile']);
$user1->set_address($_POST['address']);
$user1->set_gender($_POST['Gender']);

$uname=$user1->get_uname();
$email=$user1->get_email();
$mobile=$user1->get_mobile();

$_SESSION['name1']=$uname;
$_SESSION['email']=$email;
$_SESSION['mobile']=$mobile;
$_SESSION['address']=$user1->get_address();


if(!preg_match("/^[a-z-A-Z-0-9]*$/",$user1->get_uname()))
	{
        header("refresh:1;url=reg.php?error=WrongUserNameFormat");
        exit();
    }

$sqlname = "SELECT * FROM register WHERE Username='$uname'";
$resultname = $conn->query($sqlname);

$sqlemail = "SELECT * FROM register WHERE Email='$email'";
$resultemail = $conn->query($sqlemail);

$sqlmob = "SELECT * FROM register WHERE Mobile='$mobile'";
$resultmob = $conn->query($sqlmob);


   if ($resultname->num_rows > 0) 
   {
      header("Location: /MainPage/reg.php?error=UserNameTaken");
      exit();
    
    }
    elseif($resultemail->num_rows > 0) 
    {
       header("Location: /MainPage/reg.php?error=EmailTaken");
          exit();
    }
        
    elseif($resultmob->num_rows > 0) 
    {
       header("Location: /MainPage/reg.php?error=MobileTaken");
         exit();
    }
    elseif($pass!=$cpass) 
    {
        header("Location: /MainPage/reg.php?error=PasswordsDontMatch");
        exit();
    }
    elseif(strlen($mobile) != 11 )
    {
      header("Location: /MainPage/reg.php?error=Mobiledigit");
      exit();
    }
    else{
        $sql=$user1->insert($user1->get_uname(),$user1->get_password(),$user1->get_email(),$user1->get_mobile(),$user1->get_address(),$user1->get_gender(),$user1->get_points());
        if($conn->query($sql)===TRUE)
        {           
         include ('unsetcart.php');

          $_SESSION["loggedin"]=true;
          header("Location: /MainPage/main.php");
        }
        else
           echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
           $conn->close(); 
        }
