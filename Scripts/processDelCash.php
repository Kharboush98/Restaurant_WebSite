<?php
require 'Connect.php';
session_start();
$type="Delivery";

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{

$total=$_SESSION['order'][0];
$totalAdisc=$_SESSION['order'][1];
$points=$_SESSION['order'][2];
$name=$_SESSION['order'][3];
$Fname=$_POST["name"];
$phone=$_POST["phone"];
$Address=$_POST["address"];
$points+=$totalAdisc;
$isUser="True";
$sql="UPDATE register SET Points='$points' WHERE Username='$name'";
if($conn->query($sql)===TRUE)
{
    $one=1;
    $sql_qunt="UPDATE productdb SET Quantity='$one'";
    if($conn->query($sql_qunt)===TRUE)
    {

        $sql_order="INSERT INTO `order` (`id`, `typeoforder`, `Fname`, `total`, `totalAdisc`, `isUser`, `username`, `phone`, `Address`) VALUES (NULL, '$type', '$Fname', '$total', '$totalAdisc', '$isUser', '$name', '$phone', '$Address')";
        if($conn->query($sql_order)==TRUE)
        {

        
    unset($_SESSION['order']);
    unset($_SESSION['cart']);
    echo "<script>alert('Your Order has been Sumbited...!')</script>";
    header("Refresh:.5; url=main.php");
        }
        else
echo"ERROR!!!!!!!".$sql_order."<br>".$conn->error;

    }
    
else
echo"ERROR!!!!!!!".$sql_qunt."<br>".$conn->error;

}
else
echo"ERROR!!!!!!!".$sql."<br>".$conn->error;

}
else
{
$total=$_SESSION['order'][0];
    
$Fname=$_POST['name'];
$phone=$_POST['phone'];
$name=$Fname;
$totalAdisc=$total;
$Address=$_POST["addresss"];
$isUser="False";

$one=1;
    $sql_qunt="UPDATE productdb SET Quantity='$one'";
    if($conn->query($sql_qunt)===TRUE)
    {
$sql_order="INSERT INTO `order` (`id`, `typeoforder`, `Fname`, `total`, `totalAdisc`, `isUser`, `username`, `phone`, `Address`) VALUES (NULL, '$type', '$Fname', '$total', '$total', '$isUser', '', '$phone', '$Address')";
if($conn->query($sql_order)==TRUE)
{


unset($_SESSION['order']);
unset($_SESSION['cart']);
echo "<script>alert('Your Order has been Sumbited...!')</script>";
header("Refresh:.5; url=main.php");


}
else
echo"ERROR!!!!!!!".$sql_order."<br>".$conn->error;
 }

else
echo"ERROR!!!!!!!".$sql_qunt."<br>".$conn->error;
}
?>


