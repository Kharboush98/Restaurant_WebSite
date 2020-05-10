<?php
require 'Connect.php';
session_start();
$id=$_GET['id'];
$_SESSION["id"]=$id;
?>
<!DOCTYPE html>
<html>
<head>
 <title>Edit User</title>
    <link href="sidenavbar.css" rel="stylesheet" type="text/css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

 </head>
<body>
 <div id="sidebar">
     <h2>Mamma Mia</h2>
  <ul>
   <li><a href="menu.php"> Menu </a></li>
   <li><a href="reserv.php">Reservations</a></li>
   <li><a href="Orders.php">Orders</a></li>
   <li><a href="users.php">Users</a></li>
   <li><a href="logout.php">Log-out</a></li>
  </ul>
 </div>
    <div class="mainpage">
        <style>table {
  border-collapse: collapse;
  width: 100%;
  color: #588c7e;
  font-family: cursive;
  font-size: 25px;
  text-align: center;
  }
  th {
  background-color: #588c7e;
  color: white;
  }
  tr:nth-child(even) {background-color: #f2f2f2}</style>
   <form method="post" action="UpdatebyAdmin.php">
      <table>
         <tr>
         <th>Id</th>
         <th>Username</th>
         <th>Email</th>
         <th>Mobile</th>
         <th>Gender</th>
         <th>Ponits</th>
         </tr>
         <?php
         $sql="SELECT * FROM productdb WHERE id=$id";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
             {
                 $Uname=$row["Username"];
                 $Email=$row["Email"];
                 $Mobile=$row["Mobile"];
                 $gender=$row["Gender"];
                 $points=$row["Points"];

         echo "<tr><td>" . $row["id"]. "</td><td>" ."<input type='name' class='input-box' name='name' maxlength='8'minlength='4'value=$Uname "."</td><td>"
         . "<input type='name' class='input-box' name='email' minlength='10'value=$Email "."</td><td>"."<input type='number' class='input-box' name='mobile' maxlength='11'minlength='11'value=$Mobile "."</td><td>"
         ."<input type='name' class='input-box' name='gender' value=$gender "."</td><td>"."<input type='number' class='input-box' name='points' maxlength='8'minlength='4'value=$points "."</td><td>".'<button type="submit" class="signbtn">Confirm</button> '."</td></tr>";
             }
         
         }
         echo "</table>";
         } else { echo "0 results"; }
         $conn->close();
         ?>
         </table>    
   </form>
    </div>
</body>
</html>


</HTML>



