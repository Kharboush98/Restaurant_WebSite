<?php

session_start();
require 'connect.php';
require 'component.php';
$count=0;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)  
{
$uname=$_SESSION['name1'];
$sql="SELECT * FROM register WHERE Username='$uname'";
$result = $conn->query($sql);
if( $result->num_rows > 0)
$row = $result->fetch_assoc();
$points=$row['Points'];
}
if (isset($_GET['action']) == 'remove'){
  {
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
            $id=$_GET['id'];
            $sql ="SELECT * FROM productdb WHERE id='$id'";
            $result = $conn->query($sql);
            if($result->num_rows > 0)
          {
           $row = $result->fetch_assoc();
           $quantity=$row["Quantity"]-1;

           if($row["Quantity"] == 1) 
             {
                $quantity=1;
            $sqlincress ="UPDATE productdb  SET Quantity='$quantity' WHERE id='$id'";
           if($conn->query($sqlincress)===TRUE)
            {           
            header("Location:/MainPage/cart.php");
            }else{
            echo"ERROR!!!!!!!".$sqlincress."<br>".$conn->error;
            }
             unset($_SESSION['cart'][$key]);
             }
             }

           $sqlincress ="UPDATE productdb  SET Quantity='$quantity' WHERE id='$id'";
           if($conn->query($sqlincress)===TRUE)
            {           
            header("Location:/MainPage/cart.php");
            }else{
            echo"ERROR!!!!!!!".$sqlincress."<br>".$conn->error;
            }
          }
    }
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
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style1.css">
</head>
<body class="bg-light">

<?php
    require_once ('header.php');
?>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
               <br> <h1 style="text-align: center">My Cart</h1>
                <hr>

                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $sql = "SELECT * FROM productdb";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            foreach ($product_id as $id){

                                if ($row['id'] == $id){
                                    cartElement($row['Category'],$row['foodProducts'],$row['Discription'], $row['product_price'], $row['id'],$row["Quantity"]);
                                    $total = $total + ($row['product_price']*$row["Quantity"]);
                                    $count+=1*$row['Quantity'];
                                    $_SESSION['count']=$count;
                    
                                }
                            }
                        }
                    }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php

                            if (isset($_SESSION['cart'])){

                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)  
                       echo
                       "<h6>Points</h6>";
?>
                        <hr>
                        <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)  
                       echo
                        "<h6>Discount</h6>
                        
                        <h6>Remaning Points</h6>";?>

                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6><?php echo $total; ?> EGP </h6>
        
                        <h6 class="text-success">FREE</h6>
                       <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)  
                       
                        echo "<h6> $points </h6>"; ?>
                        <hr>

                        <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)  
                       {
                       if($total!=0)
                       {
                        $discount=usepoints($points);
                        
                        echo "<h6>   $discount  </h6>";
                       
                        $totalAdiscount=($total-$discount);
                        if($totalAdiscount == 0)
                        {   $npoints=0;
                            echo "<h6>  $npoints  </h6>";
                        echo "<h6 class='text-success'>FREE</h6>";
                        }
                        elseif($totalAdiscount < 0)
                        {
                            $points=($points-$discount*10);
                            echo "<h6>$points</h6>";
                            echo "<h6 class='text-success'>FREE</h6>";

                        }
                        else
                        {
                            $npoints=($points-$discount*10);
                            echo "<h6>  $npoints  </h6>";
                        echo "<h6>  $totalAdiscount EGP </h6>";
                        }
                       }
                       else
                       {
                       echo "<h6>  $total EGP </h6>";
                       
                       }
                    }
                    else
                    {
                        echo "<h6>  $total EGP </h6>";
                    }
                    
                      ?>
                    </div>
                    
                </div>
            </div>
            <br><br>
            <div style="text-align: center">
            <?php
            if(isset($_SESSION['inres'])&&$_SESSION['inres']==True)
            echo "<button type=submit><a href='processPUCash.php?total=$total'>Sumbit</a></button>";

           elseif(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)  
               {
                if(isset($npoints)&&isset($totalAdiscount))
{
                 echo "  
                 <button type=submit><a href='ord.php?total=$total&points=$points&totalAdis=$total&uname=$uname'>Check-Out</a></button>";
               echo "  <button type=submit><a href='ord.php?total=$total&points=$npoints&totalAdis=$totalAdiscount&uname=$uname'>Check-Out W/Points</a></button>";
}
                }
                else
                {
                if($total!=0)
                echo "<button type=submit><a href='ord.php?total=$total'>Check-Out</a></button>";
                }
                echo "<button type=submit><a href='unsetcart.php'>EmptyCart</a></button>";

                ?>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>