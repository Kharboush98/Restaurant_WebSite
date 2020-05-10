<?php
require 'Connect.php';
session_start();
$Taken=array();
$sql="SELECT * FROM `reserve` ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        {
            $Taken[]=$row['tableno'];
        }
}
}
?>
<html>
<head>
    <title>Table reservation</title>
    <link href="reserve.css" rel="stylesheet" type="text/css">
    
</head>
<body>
<form method='post' action='ProcessSelectTable.php'>
    <div class="map">
           
        <br>
        <?php
        if (in_array('1', $Taken)) {
        echo "<input type='radio' id=10 >
        <label for='t1'style='background-color: red' >
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 1</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='1' id=t1 /required/>
        <label for='t1'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 1</a></p>
        </label>";
        }
        ?>
        
        
        <?php
        if (in_array('2', $Taken)) {
        echo 
        "<label for='t2'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 2</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='2' id=t2 /required/>
        <label for='t2'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 2</a></p>
        </label>";
        }
        ?>
       <br>
    
       <?php
        if (in_array('3', $Taken)) {
        echo "
        <label for='t3'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 3</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='3' id=t3 /required/>
        <label for='t3'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 3</a></p>
        </label>";
        }
        ?>
    
        <?php
        if (in_array('4', $Taken)) {
        echo "<input type='radio' id=40 >
        <label for='t4'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 4</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='4' id=t4 /required/>
        <label for='t4'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 4</a></p>
        </label>";
        }
        ?>
    
    <?php
        if (in_array('5', $Taken)) {
        echo 
        "<label for='t5'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 5</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='5' id=t5 /required/>
        <label for='t2'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 5</a></p>
        </label>";
        }
        ?>
    
    <?php
        if (in_array('6', $Taken)) {
        echo 
        "<label for='t6'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 6</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='6' id=t6 /required/>
        <label for='t6'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 6</a></p>
        </label>";
        }
        ?>
    <?php
        if (in_array('7', $Taken)) {
        echo 
        "<label for='t7'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 7</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='7' id=t7 /required/>
        <label for='t7'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 7</a></p>
        </label>";
        }
        ?>
    
    <?php
        if (in_array('8', $Taken)) {

        echo 
        "<label for='t8'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 8</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='8' id=t8 /required/>
        <label for='t8'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 8</a></p>
        </label>";
        }
        ?>
    
    <?php
        if (in_array('9', $Taken)) {
        echo 
        "<label for='t9'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 9</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='9' id=t9 /required/>
        <label for='t9'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 9</a></p>
        </label>";
        }
        ?>
    <?php
        if (in_array('10', $Taken)) {
        echo 
        "<label for='t10'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 10</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='10' id=t10 /required/>
        <label for='t10'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 10</a></p>
        </label>";
        }
        ?>
        <?php
        if (in_array('11', $Taken)) {
        echo 
        "<label for='t11'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 11</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='11' id=t11 /required/>
        <label for='t11'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 11</a></p>
        </label>";
        }
        ?>
    
    <?php
        if (in_array('12', $Taken)) {
        echo 
        "<label for='t12'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 12</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='12' id=t12 /required/>
        <label for='t12'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 12</a></p>
        </label>";
        }
        ?>
    
    <?php
        if (in_array('13', $Taken)) {
        echo 
        "<label for='t13'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 13</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='13' id=t13 /required/>
        <label for='t13'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 13</a></p>
        </label>";
        }
        ?>
    
         <?php
        if (in_array('14', $Taken)) {
        echo 
        "<label for='t14'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 14</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='14' id=t14 /required/>
        <label for='t14'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 14</a></p>
        </label>";
        }
        ?>
    
        <?php
        if (in_array('15', $Taken)) {
        echo 
        "<label for='t15'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 15</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='15' id=t15 /required/>
        <label for='t15'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 15</a></p>
        </label>";
        }
        ?>
    
        <?php
        if (in_array('16', $Taken)) {
        echo 
        "<label for='t16'style='background-color: red'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 16</a></p>
        </label>";
        }
        else
        {
        echo "<input type='radio' name='table' value='16' id=t16 /required/>
        <label for='t16'>
        <img src='https://img.icons8.com/ios/50/000000/restaurant-table.png'>
        <p><a class='la'>Table 16</a></p>
        </label>";
        }
        ?>
    

        <div class="rsvbtn">
        <button type="submit" class="reserve">Reserve Now</button>
        </div>
        
             </div>
        </form>
    </body>
</html>
