<?php
require 'Connect.php';
session_start();
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
      <table>
         <tr>
         <th>id</th>
         <th>Category</th>
         <th>ProductName</th>
         <th>Discription</th>
         <th>Price</th>
         <th>Edit</th>
         <th>Delete</th>
         </tr>
         <?php
         $sql = "SELECT * FROM productdb";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             {
                $id=$row["id"];
         echo "<tr><td>" . $row["id"]."&nbsp</td><td>".$row["Category"]."</td><td>".$row["foodProducts"]. "</td><td>"
         . $row["Discription"]."</td><td>".$row["product_price"].
         "</td><td>"."<a href='EditProduct.php?id=$id' style='color:red'>".'<i style="font-size:24px"  class="fa">&#xf044;</i></a> '.
         "</td><td>"."<a href='DeleteProduct.php?id=$id' style='color:red'>".'<i style="font-size:24px"  class="fa">&#xf2ed;</i></a>
         '."</td></tr>";
             }
         }
         echo "</table>";
         } else { echo "0 results"; }
         $conn->close();
         ?>
           
        </table>
        <table>
         <tr>
         <th>Category</th>
         <th>ProductName</th>
         <th>Discription</th>
         <th>Price</th>
         <th>ADD</th>
         </tr>
         <br>
         <form method="post" action="ProcessMenu.php">
         <?php

        echo "<tr><td>".
        "<select name='Category'>
        <option value='APPETIZER'>APPETIZER</option>
        <option value='SPECIAL'>SPECIAL</option>
        <option value='BAKED'>BAKED</option>
        <option value='PASTA'>PASTA</option>
        <option value='MAIN'>MAIN</option>
        <option value='SEEFOOD'>SEEFOOD</option>
        <option value='PIZZA'>PIZZA</option>
        <option value='DESSERT'>DESSERT</option>
        <option value='BEVERAGES'>BEVERAGES</option>

        
        </select>"."</td><td>".
        "<input type='name' class='input-box' name='ProductName'"."</td><td>"
        ."<textarea rows='4' cols='50' name='Discription'></textarea>"."</td><td>"
        ."<input type='Float' class='input-box' name='Price'>"."</td><td>".'<button type="submit" class="signbtn">Confirm</button> '."</td></tr>";
    
         ?>
         </table>
        </form>
</div>
</body>
</html>

