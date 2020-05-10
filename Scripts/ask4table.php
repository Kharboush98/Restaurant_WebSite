<?php
require 'Connect.php';
include 'user.php';
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



$tableno=0;
$rando=random_int(1,20000);
$sqlno="SELECT * FROM reserve WHERE rando='$rando'";
while($conn->query($sqlno)===TRUE){
{
    $rando=random_int(1,2000000);
}
}
$_SESSION["rando"]=$rando;
$sql="INSERT INTO reserve(fname,lname,email,npeople,phone,date,time,isUser,tableno,rando) VALUES('$fname','$lname','$email','$npeople','$phone','$date','$time','$isuser','$tableno','$rando')";
           if($conn->query($sql)===False)
           {
               echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
            }

$conn->close();

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Profile</title>
    <link href="style.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  </head>
  <body >
  <nav class="navbar navbar-expand-lg navbar-dark site_navbar site-navbar-light" id="site-navbar">
                <div class="container">
				<a class="navbar-brand" href="main.php"><font size="5">MAMMA MIA</font></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                  </button>
          
                  <div class="collapse navbar-collapse" id="site-nav">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active"><a href="main.php#section-home" class="nav-link">Home</a></li>
                      <li class="nav-item"><a href="main.php#section-about" class="nav-link">About</a></li>
                      <li class="nav-item"><a href="main.php#section-specials" class="nav-link">Specials</a></li>
                      <li class="nav-item"><a href="index.php" class="nav-link">Menu</a></li>
                      <?php 
                      if(isset($_SESSION['loggedin']) &&isset($_SESSION['loggedin'])==true)
                      {
                        echo "<li class='nav-item'><a href='logout.php' class='nav-link'>Log Out</a></li>";
                        echo "<li class='nav-item'><a href='profile.php' class='nav-link'>$uname</a></li>";    
                      }
                      else
                      {
                        echo "<li class='nav-item'><a href='main.php#section-register'class='nav-link'>Register</a></li>";
                        echo "<li class='nav-item'><a href='log.php'class='nav-link'>Log in</a></li>";
                      }
                      ?>
                      <li class="nav-item"><a href="main.php#section-contact" class="nav-link">Contact</a></li>
                      <li class="nav-item"><a href="InResturant.php"class="nav-link">In Restaurant</a></li>
                    </ul>
                  </div>
                </div>
              </nav>	
              <form method='post' action='SelectATable.php'>
              <div class="container">
             <div class="info">
             <div style="text-align:center">
            <h4 class="h4"style="color:white">Would you like to choose your table</h4>
            <br><td><button type="submit" class="signbtn" >Yes</button></form>
            <form method='post' action='main.php'> <br>
            <button type="submit" class="signbtn">No</button></td></form>
            </div>
        
</html>