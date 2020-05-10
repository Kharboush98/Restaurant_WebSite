<?php
require 'Connect.php';
session_start();
$id=$_GET["id"];
$_SESSION["id"]=$id;
?>
<!DOCTYPE html>
<html>
<head>
 <title>Menu</title>
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
     <form method="post" action="DeleteByAdmin.php">
      <table>
         <tr>
         <th>Id</th>
         <th>Username</th>
         <th>Email</th>
         <th>Mobile</th>
         <th>Address</th>
         <th>Gender</th>
         <th>Reser Num</th>
         <th>Ponits</th>
         </tr>
<?php
         $sql="SELECT * FROM register WHERE id=$id";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
         $row = $result->fetch_assoc() ;
             { echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Username"] . "</td><td>"
                . $row["Email"]."</td><td>".$row["Mobile"]."</td><td>".$row["Address"]."</td><td>"
                .$row["Gender"]."</td><td>".$row["NReservations"]."</td><td>".$row["Points"]."</td></tr>";
                    }
                
            echo "</table>"."</br>";
            echo "Are You Sure You want To delete This User";
            echo '</br><td><button type="submit" class="signbtn" >Yes</button></form><a href="users.php"><button type="submit" class="signbtn">No</button></a></td>';
            
             } else { echo "0 results"; }
         $conn->close();
         ?>
      
     
    </div>
</body>
</html>
