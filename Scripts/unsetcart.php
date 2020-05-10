<?php
require 'Connect.php';
session_start();

    $one=1;
    $sql_qunt="UPDATE productdb SET Quantity='$one'";
    if($conn->query($sql_qunt)===TRUE)
    {
    unset($_SESSION['cart']);
    echo "<script>alert('Your cart is Empty...!')</script>";
    header("Refresh:.5; url=cart.php");
    }
    else
    echo"ERROR!!!!!!!".$sql_qunt."<br>".$conn->error;

    ?>
