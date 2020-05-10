<?php
session_start();

require 'Connect.php';
include 'product.php';

$product=new product($_POST["Category"],$_POST['ProductName'],$_POST['Quantity'],$_POST['Price'],$_POST['Discription']);
$ProductName=$product->get_ProductName();


$sqlPname = "SELECT * FROM productdb WHERE foodProducts='$ProductName'";
$resultname = $conn->query($sqlPname);

if ($resultname->num_rows > 0) 
   {
      header("Location: /MainPage/MenuReg.php?error=Product already exists");
      exit(); 
   }
else{
        $sql=$product->insert($product->get_category(),$product->get_ProductName(),$product->get_ProductDisc(),$product->get_Quantity(),$product->get_Price());
        if($conn->query($sql)===TRUE)
        {           
          header("Location: /MainPage/Menu.php");
        }
        else
           echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
           $conn->close(); 
     }
?>