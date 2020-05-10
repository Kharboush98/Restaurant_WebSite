<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Log in</title>
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
    <h1>Log in</h1>
    
    <?php 
        if($_GET)
        if($_GET['error'] =='wrongusernamepass')
        echo '<p style="color:red">Wrong Username or Password</p>';
	?>
	<form id="login" method="post" action="processLog.php">
	
	<input type="name" class="input-box"  placeholder="Name Or Email..." name="name"
	value="<?php if($_GET)echo $_SESSION['name1'];?>"/required/>
	<input type="password" class="input-box"  placeholder="Password... "name="password"/required/>

	<td><button id="log" type="submit" class="signbtn">Log in</button>

	</form>
    
	<hr>
	<p class="or"></p>
	<p>First Time ? <a style="color:white" href="reg.php">Sign up!</a></p>

    </div>
	</body>
</html>