<?php
require 'Connect.php';
$id=$_GET["id"];
$Qunt=$_POST["qunt"];

if ($Qunt <=0)
$Qunt=1;

$sqlincress ="UPDATE productdb  SET Quantity='$Qunt' WHERE id='$id'";
if($conn->query($sqlincress)===TRUE)
{           
header("Location:/MainPage/cart.php");
}else{
echo"ERROR!!!!!!!".$sqlincress."<br>".$conn->error;
}

?>