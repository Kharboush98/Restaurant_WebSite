<?php

session_start();

require 'connect.php';
require_once ('component.php');
if(isset($_SESSION['name1']))
$uname=$_SESSION['name1'];
if (isset($_POST['add'])){
    echo "<script>alert('Product has been Added...!')</script>";

    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");
        
    

        if(in_array($_POST['product_id'], $item_array_id)){

            $id=$_POST['product_id'];
            $sql ="SELECT * FROM productdb WHERE id='$id'";
            $result = $conn->query($sql);
            if($result->num_rows > 0)
          {
              
           $row = $result->fetch_assoc();
           $quantity=$row["Quantity"]+1;

           $sqlincress ="UPDATE productdb SET Quantity='$quantity' WHERE id='$id'";
           if($conn->query($sqlincress)===TRUE)
            {   
            header("Location:/MainPage/index.php");
         }else{
            echo"ERROR!!!!!!!".$sqlincress."<br>".$conn->error;
            }
          }
          else
          echo "ERROR!!!!!!!!!!!".$sql;
        
        }
        else
        {
            $count=count($_SESSION['cart']);
            $item_array = array('product_id' => $_POST['product_id']);
            $_SESSION['cart'][$count]= $item_array;
            $_SESSION['count']=$count;
            
}    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order online</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style1.css">
</head>
<body>


<?php require_once ("header.php"); ?>
<div class="container">
        <div class="row text-center py-5">
        <?php
         $sql = "SELECT * FROM productdb";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
                    component($row['Category'],$row['foodProducts'],$row['Discription'], $row['product_price'], $row['id'],$row['Quantity']);
                }
            }
            ?>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>