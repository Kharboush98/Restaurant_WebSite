<?php
session_start();
if(isset($_SESSION['name1']))
$name=$_SESSION['name1'];
?>
<html>
  <head>
        <title>In Resturant</title>
        <link href="css/selectTable.css" rel="stylesheet" type="text/css">
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
                      if(isset($_SESSION['loggedin']) && isset($_SESSION['loggedin'])==true)
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
                      <li class="nav-item"><a href="selecttable.php"class="nav-link">In Restaurant</a></li>
                    </ul>
                  </div>
                </div>
			  </nav>	
<div class="selecttable">
<?php if(!isset($_SESSION["loggedin"]))
 echo '<h1>Please Enter Your Name</h1><br>
<input type="name" class="input-box"  placeholder="Your Name..." name="name"maxlength="8"minlength="4" /required/>
<br><br>';?> 
<h1>Please Select The Table you are setting at</h1><br>

<form action="table.php" method="POST" >
<select name="table">
<option value="1">Table 1</option>
<option value="2">Table 2</option>
<option value="3">Table 3</option>
<option value="4">Table 4</option>
<option value="5">Table 5</option>
<option value="6">Table 6</option>
<option value="7">Table 7</option>
<option value="8">Table 8</option>
<option value="9">Table 9</option>
<option value="10">Table 10</option>
<option value="11">Table 11</option>
<option value="12">Table 12</option>
<option value="13">Table 13</option>
<option value="14">Table 14</option>
<option value="15">Table 15</option>
<option value="16">Table 16</option>
</select><br><br><br>


 
<td><button type="submit" class="submit">Submit</button></td>
<?php if(!isset($_SESSION["loggedin"]))
 echo '
<br><br>
<p>First Time ? Register With Us and Enjoy 50 points  <a style="color:white" href="reg.php">Sign up!</a></p>
<p>Already have an account <a style="color:white" href="log.php">Log in!</a></p>';?>
</form>
</div>
</body>
</html>


