<?php
session_start();
$pick=$_POST['pick'];


if($pick=="pick_up")
{
    header("Location:/MainPage/pick_up_Cash.php");
}

elseif($pick=="Delivary")
{
    header("Location:/MainPage/Dilv_Cash.php");
}



