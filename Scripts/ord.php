<?php
session_start();

 if(isset($_GET['points'])){
    $Order=array($_GET['total'],$_GET['totalAdis'],$_GET['points'],$_GET['uname']);
 }
else
{
    $Order=array($_GET['total']);

}
$_SESSION['order']=$Order;

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delivery and Payment</title>
	<link rel="stylesheet" href="ord.css">
   
</head>     
<body>

<div class="wrapper">
  <div class="container">
    <div class="title">Delivery and Payment</div>
 <form method="post" action="processOrd.php?id=$id">

      <div class="section-1">

        <h2> Choose how to get your food </h2>
          <div class="rb1">
 

        Pick up <input type="radio" name="pick" value="pick_up"/required/>
        Delivary <input type="radio" name="pick" value="Delivary"/required/>
    </div>
      </div>
    <div style="text-align: center"><button type="submit" class="btn">Procced</button></div>
    </form>
  </div>
</div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
</body>
</html>

        