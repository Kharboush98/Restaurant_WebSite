<?php
require 'Connect.php';
session_start();
$id=$_GET["id"];
$_SESSION["id"]=$id;
?>

<!DOCTYPE html>
<html>
<head>
 <title>Reservations</title>
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
       <form method="post" action="Deleterserve.php">
      <table>
         <tr>
         <th>id</th>
         <th>first name</th>
         <th>Last name</th>
         <th>Email</th>
         <th>No of people</th>
         <th>phone</th>
         <th>date</th>
         <th>time</th>
         <th>isUser</th>
         <th>Delete</th>
         </tr>
         <?php
         $sql = "SELECT * FROM reserve WHERE id='$id'";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
         $row = $result->fetch_assoc();
             {
                $id=$row["id"];
         echo "<tr><td>". $row["id"]. "</td><td>" . $row["fname"]. "</td><td>" . $row["lname"] . "</td><td>"
         . $row["email"]."</td><td>".$row["npeople"]."</td><td>".$row["phone"]."</td><td>".$row["date"]."</td><td>"
         .$row["time"] ."</td><td>".$row["isUser"] ."</td><td>"."<a href='Deleterserve.php?id=$id' style='color:red'>".'<i style="font-size:24px"  class="fa">&#xf2ed;</i></a>
         '."</td></tr>";
             } 
             echo "</table>"."</br>";
             echo "Are You Sure You want To delete This Reservation";
             echo '</br><td><button type="submit" class="signbtn" >Yes</button></form><button type="submit" class="signbtn"><a href="reserv.php" style="color:black">No</button></a></td>';
              } else { echo "0 results"; }
         $conn->close();
         ?>
         </table>    
       </form>
    </div>
</body>
</html>

