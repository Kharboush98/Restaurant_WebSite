<?php


function component($productCat,$productname,$productDisc, $productprice, $productid){
    
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div class=\"card-body\">
                        <h5 class=\"card-title\" style=\"color:red\">$productCat</h5>
                            <h4 class=\"card-title\">$productname</h4>
                            <h6 class=\"card-title\">$productDisc</h6>
                           
                            <h5>
                                <span class=\"price\">$productprice EGP</span>
                            </h5>

                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div> ";
    echo $element;
}

function cartElement($productCat,$productname, $productDisc, $productprice, $productid,$productQunt){
    $element = "
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-6\">
                            <h5 class=\"pt-2\" style=\"color:red\">$productCat</h5>
                                <h5 class=\"pt-2\">$productname</h5>
                                <h6 class=\"card-title\">$productDisc</h6>
                                <h5 class=\"pt-2\">$productprice EGP</h5>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\"><a href=\"cart.php?action=remove&id=$productid\" style=\"color:white\">remove</a></button>                            
                            </div>
                            "

                            ."<form action=\"SetQunt.php?id=$productid\" method=\"post\" class=\"cart-items\">
                              <br><br>
                              <input type=\"text\" class=\"form-control\" value=\"$productQunt\" name=\"qunt\">
                              <br><br>
                            <button type=\"submit\" class=\"btn btn-outline-primary mx-2\" >SetQunt</button>
                             </form>

                             <br>
                            </div>
                            </div>";

               
    echo  $element;
}
function usepoints($points)
{
    return (int)($points/10);
}
















