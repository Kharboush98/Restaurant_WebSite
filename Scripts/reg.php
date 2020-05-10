<?php
session_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registration</title>
	<link href="css/stylereg.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
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
 
	<div class="sign_up_form">
    <h1>Sign up</h1>
    
    <?php 
        if($_GET)
        if($_GET['error'] =='WrongUserNameFormat')
        echo '<p style="color:red">Wrong Username Format</p>';
        elseif($_GET['error'] =='UserNameTaken')
        echo '<p style="color:red">Username Already Taken</p>';
        elseif($_GET['error'] =='EmailTaken')
        echo '<p style="color:red">Email Already Taken</p>';
        elseif($_GET['error'] =='MobileTaken')
		    echo '<p style="color:red">Mobile Already Taken</p>';
        elseif($_GET['error'] =='PasswordsDontMatch')
        echo '<p style="color:red">Passwords Do not Match</p>';
        elseif($_GET['error']=='Mobiledigit')
        echo '<p style="color:red">Mobile must be 11 digits</p>'
  ?>
  
	<form method="post" action="processReg.php">
	<input type="name" class="input-box"  placeholder="Your Name..." name="name"maxlength="8"minlength="4" 
	value="<?php if($_GET)echo $_SESSION['name1'];?>" /required/>
	<input type="password" class="input-box"  placeholder="Password... "name="password" minlength="8" maxlength="16"/required/>
	<input type="password" class="input-box"  placeholder="Confirm Password..."name="cpassword" minlength="8" maxlength="16"/required/>
	<input type="email" class="input-box"  placeholder="E-mail..."name="email" minlength="11" 
	value="<?php if($_GET)echo $_SESSION['email'];?>"/required/>
	<input type="number" class="input-box"  placeholder="Mobile..."name="mobile" 
	value="<?php if($_GET)echo $_SESSION['mobile'];?>"/required/>
	<input type="address" class="input-box"  placeholder="Address..."name="address" minlength="15"
	value="<?php if($_GET)echo $_SESSION['address'];?>"/required/>
  
	<td>
	Male<input type="radio" name="Gender" value="male"/required/>
  Female<input type="radio" name="Gender" value="female"/required/>
  </td>



	<p><input type="checkbox"/required/></span>I agree on <a style="color:white" href="#" onclick="MyWindow=window.open('terms.html','MyWindow','width=400,hight=300');return false;"><u> Terms and conditions!</u></a></p>
	<td><button type="submit" class="signbtn">Sign up</button>
		

	<hr>
	<p class="or"></p>
	<p>Already have an account ? <a href="log.php" style="color:white"><u>Sign in!</u></a></p>

	</form>
	</div>

	</body>
</html>