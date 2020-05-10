<?php
require 'Connect.php';
include 'product.php';
session_start();
$id=$_GET['id'];
$_SESSION["id"]=$id;
?>
<!DOCTYPE html>
<html>
<head>
 <title>Edit Product</title>
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
   <form method="post" action="UpdateProduct.php">
      <table>
         <tr>
         <th>id</th>
         <th>Category</th>
         <th>ProductName</th>
         <th>Discription</th>
         <th>Price</th>
         <th>confirm</th>
         </tr>
         <?php
         $sql="SELECT * FROM productdb WHERE id=$id";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
         $row = $result->fetch_assoc();
             
                $product=new product($row["Quantity"],$row["foodProducts"],$row["Quantity"],$row["product_price"],$row["Discription"]);
                $name=$product->get_ProductName();$quantity=$product->get_Quantity();$price=$product->get_Price();$disc=$product->get_ProductDisc();
         echo "<tr><td>" . $id."</td><td>". "<select name='Category'>
         <option value='APPETIZER'>APPETIZER</option>
         <option value='SPECIAL'>SPECIAL</option>
         <option value='BAKED'>BAKED</option>
         <option value='PASTA'>PASTA</option>
         <option value='MAIN'>MAIN</option>
         <option value='SEEFOOD'>SEEFOOD</option>
         <option value='PIZZA'>PIZZA</option>
         <option value='DESSERT'>DESSERT</option>
         </select>"."</td><td>"."<textarea rows='4' cols='50' name='ProductName'>$name</textarea>".
         "</td><td>"."<textarea rows='4' cols='50' name='Discription'>$disc</textarea>".
         "</td><td>"."<input type='number' class='input-box' name='Price' value=$price>".
         "</td><td>".'<button type="submit" class="signbtn">Confirm</button>'."</td></tr>";
             
         echo "</table>";
            }
         else { echo "0 results"; }
         $conn->close();
         ?>
         </table>    
   </form>
    </div>
</body>
</html>


</HTML>



