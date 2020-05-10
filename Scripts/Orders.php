<?php
require 'Connect.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
 <title>Orders</title>
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
      <table>
         <tr>
         <th>Id</th>
         <th>type</th>
         <th>Name</th>
         <th>total</th>
         <th>total After discount</th>
         <th>isUser</th>
         <th>username</th>
         <th>phone</th>
         <th>Address</th>
         <th>Delete</th>


         </tr>
         <?php
         $sql = "SELECT * FROM `order`";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             {
                $id=$row["id"];
         echo "<tr><td>" . $row["id"]. "</td><td>". $row["typeoforder"]. "</td><td>" . $row["Fname"] . "</td><td>"
         . $row["total"]."</td><td>".$row["totalAdisc"]."</td><td>".$row["isUser"]."</td><td>"
         .$row["username"]."</td><td>".$row["phone"]."</td><td>".$row["Address"]
         ."</td><td>"."<a href='DeleteOrder.php?id=$id' style='color:red'>".'<i style="font-size:24px"  class="fa">&#xf2ed;</i></a>
         '."</td></tr>";
             }
         
         }
         echo "</table>";
         } else { echo "0 results"; }
         $conn->close();
         ?>
         </table>    
    </div>
</body>
</html>


 </div>
</body>

</html>

