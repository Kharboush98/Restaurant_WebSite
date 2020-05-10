<?php
require 'Connect.php';
include 'user.php';

if(isset($_SESSION['name1']))
$name=$_SESSION['name1'];

$sql = "SELECT * FROM register WHERE Username = '$name'";
$result = $conn->query($sql);

$user=new user();

if($result->num_rows>0)
{
    $row = $result->fetch_assoc();
    $user->userCons($row['Username'],$row['Password'],$row['Email'],$row['Mobile'],$row['Address'],$row['Gender'],$row['NReservations'],$row['Points']);
}
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
                        echo "<li class='nav-item'><a href='profile.php' class='nav-link'>$name</a></li>";    
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
 
    <div class="container">
        <div class="info">
            <h4 class="h4"style="color:red">UserName</h4>
            <p class="h4"style="color:White"><?php echo $user->get_uname(); ?></p>
            <br>
            <h4 class="h4"style="color:red">Password</h4>
           <p class="h4"style="color:White"><?php  echo '********'  ; ?> </p>	
           <p><a href="updatePassword.php"> <u> Change</u></a></p>
            <br>
            <h4 class="h4"style="color:red">Email</h4>
            <p class="h4"style="color:White"><?php echo $user->get_email(); ?></p>
            <br>
            <h4 class="h4"style="color:red">Mobile</h4>
            <td> <p class="h4"style="color:White"><?php echo $user->get_mobile(); ?></p> 
            <br>
            <h4 class="h4"style="color:red">Adress</h4>
            <p class="h4"style="color:White"><?php echo $user->get_address(); ?></p>
            <br>
            <h4 class="h4"style="color:red">Points</h4>
            <p class="h4"style="color:White"><?php echo $user->get_points(); ?></p>
            <hr>
            <div style="text-align:center">
            <td><button type="submit"><a href="updateprofile.php" >Edit Info</a></button></div>
            <p style="text-align:right"><a href="DeleteByUser.php" style="color:red"><u>Delete Account<i class='fas'>&#xf2ed;</i></u></a></p>


        </div>
        </div>
</body>
</html>