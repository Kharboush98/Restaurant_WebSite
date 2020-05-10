<?php
session_start();
if(isset($_SESSION['name1']))
$name=$_SESSION['name1'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <title>Mamma Mia restaurant</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login.css">

  </head>

  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
        <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
                <div class="container">
                  <a class="navbar-brand" href="main.php">Mamma Mia</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu</button>
          
                  <div class="collapse navbar-collapse" id="site-nav">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
                      <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
                      <li class="nav-item"><a href="#section-specials" class="nav-link">Specials</a></li>
                      <li class="nav-item"><a href="index.php" class="nav-link">Menu</a></li>
                      <?php 
                      if(isset($_SESSION['loggedin']) &&$_SESSION['loggedin']==true)
                      {
                        echo "<li class='nav-item'><a href='logout.php' class='nav-link'>Log Out</a></li>";
                        echo "<li class='nav-item'><a href='profile.php' class='nav-link'>$name</a></li>";    
                      }
                      else
                      {
                        echo "<li class='nav-item'><a href='#section-register'class='nav-link'>Register</a></li>";
                        echo "<li class='nav-item'><a href='log.php'class='nav-link'>Log in</a></li>";
                      }
                      ?>
                      <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
                      <li class="nav-item"><a href="InResturant.php"class="nav-link">In Restaurant</a></li>
                    </ul>
                  </div>
                </div>
              </nav>

              <section class="site-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
                <div class="container">
                  <div class="row align-items-center justify-content-center text-center site-vh-100">
                    <div class="col-md-12">
                      <h1 class="site-heading site-animate mb-3">Welcome To Mamma Mia restaurant</h1>
                      <h2 class="h5 site-subheading mb-5 site-animate">Enjoy our classic italian recipes here with us!</h2>    
                      <p><a target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">Reservation</a></p>
                    </div>
                  </div>
                </div>
              </section>


              <section class="site-section" id="section-about">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-5 site-animate mb-5">
                          <h4 class="site-sub-title">Who are we?</h4>
                          <h2 class="site-primary-title display-4">Welcome to Mamma Mia Restaurant</h2>
                          <p>WE’RE ALL ABOUT ITALIAN FOOD . BUT WE’RE ALSO ABOUT OUR COMMUNITY AND THE ENVIRONMENT, WE LEAD WITH OUR HEARTS, WE BELIEVE IN GIVING BACK LOCALLY AND BEING ENVIRONMENTALLY RESPONSIBLE.</p>
              
                          <p class="mb-4">WE HOPE TO SEE YOU SOON AT MAMMA MIA!</p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
                          <img src="images/about_img_1.jpg" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </section>

                  <section class="site-section bg-light" id="section-specials">
                        <div class="container">
                          
                          <div class="row">
                            <div class="col-md-12 text-center mb-5 site-animate">
                              <h4 class="site-sub-title">Mamma Mia Specials!</h4>
                              <h2 class="display-4">Check out these amazing specials in our restaurant</h2>
                            </div>
                            <div class="col-md-12">
                              <div class="owl-carousel site-owl">
                  
                                <div class="item">
                                  <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                    <img src="images//S1.jpg" class="img-fluid">
                                    <div class="media-body p-md-5 p-4">
                                      <h5 class="text-primary">65 EGP</h5>
                                      <h5 class="mt-0 h4">CHICKEN FIORENTINO</h5>
                                      <p class="mb-4">Lightly Battered Chicken Cooked in Marinara Sauce, White Wine & ‘topped with Spinach & Mozzarella.</p>
                  
                                      <p class="mb-0"><a href="index.php" class="btn btn-primary btn-sm">Order Now!</a></p>
                                    </div>
                                  </div>
                                </div>
                  
                                <div class="item">
                                  <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                    <img src="images//S2.jpg" class="img-fluid">
                                    <div class="media-body p-md-5 p-4">
                                      <h5 class="text-primary">70 EGP</h5>
                                      <h5 class="mt-0 h4">GNOCCHI BOLOGNESE</h5>
                                      <p class="mb-4">Gnocchi Pasta in a Hearty Bolognese Sauce, Parmigiana with just a touch of cream. Definitely for the carnivore!</p>
                  
                                      <p class="mb-0"><a href="index.php" class="btn btn-primary btn-sm">Order Now!</a></p>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="item">
                                  <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                    <img src="images//S3.jpg" class="img-fluid">
                                    <div class="media-body p-md-5 p-4">
                                      <h5 class="text-primary">65 EGP</h5>
                                      <h5 class="mt-0 h4">PALM CHICKEN</h5>
                                      <p class="mb-4">Boneless Chicken Sautéed in with Mushrooms, Hearts of Palm in Cream Wine Sauce.</p>
                  
                                      <p class="mb-0"><a href="index.php" class="btn btn-primary btn-sm">Order Now!</a></p>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div> 
                          </div>
                        </div>
                      </section>

                      <section class="site-section" id="section-menu">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-12 text-center mb-5 site-animate">
                                  <h2 class="display-4">Delicious Menu</h2>
                                  <div class="row justify-content-center">
                                    <div class="col-md-7">
                                      <p class="lead">Take a look at our delicious menu!</p>
                                    </div>
                                  </div>
                                </div>
                      
                                <div class="col-md-12 text-center">
                      
                                  <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                                    <li class="nav-item site-animate">
                                      <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Appetizers</a>
                                    </li>
                                    <li class="nav-item site-animate">
                                      <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Assorted Main dishes</a>
                                    </li>
                                    <li class="nav-item site-animate">
                                      <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Desserts</a>
                                    </li>
                                  </ul>
                      
                                  <div class="tab-content text-left">
                                    <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                                      <div class="row">
                                        <div class="col-md-6 site-animate">
                                        
                                        <div class="media menu-item">
                                            <img class="mr-3" src="images//M11.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">MOZZARILLA STICKS</h5>
                                              <p>Generous portion of fresh cut mozzarella, breaded in our own breadcrumbs.</p>
                                              <h6 class="text-primary menu-price">25 EGP</h6>
                                            </div>
                                          </div>
                                          </div>
                                         
                                          <div class="col-md-6 site-animate">
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images//M22.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">CAPRESE SALAD</h5>
                                              <p>Fresh Tomatoes and sliced Mozzarella served with basil and drizzle of balsamic dressing.</p>
                                              <h6 class="text-primary menu-price">30 EGP</h6>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                                      <div class="row">
                                        <div class="col-md-6 site-animate">
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images//M33.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">SPAGHETTI WITH MEATBALLS</h5>
                                              <p>Four Large House Made Meatballs in a Simmering Marinara Sauce.</p>
                                              <h6 class="text-primary menu-price">50 EGP</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images//M44.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">LINGUINE WITH BROCCOLI, GARLIC & OIL</h5>
                                              <p>Broccoli Sauteed in Garlic & Oil and Tossed with your Pasta.</p>
                                              <h6 class="text-primary menu-price">55 EGP</h6>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6 site-animate">
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images//M55.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">VEAL PICATTA</h5>
                                              <p>Tender Veal Sautéed in White Vineger Sauce Lemon Butter & Capers.</p>
                                              <h6 class="text-primary menu-price">70 EGP</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images//M66.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">PEPPERONI PIZZA</h5>
                                              <p>Pepperoni pizza is a classic favorite. The whole wheat crust has more fiber and nutrients than a white flour crust, and using part-skim mozzarella saves on calories without compromising any flavor.</p>
                                              <h6 class="text-primary menu-price">45 EGP</h6>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                                      <div class="row">
                                        <div class="col-md-6 site-animate">
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images//M77.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">TIRAMISU</h5>
                                              <p>From a Specialty Italian Bakery we feature this creamy Traditional Dessert.</p>
                                              <h6 class="text-primary menu-price">25 EGP</h6>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-md-6 site-animate">
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images//M88.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">NEW YORK CHEESECAKE</h5>
                                              <p>Cool and Creamy New York Cheesecake with a Traditional Graham Cracker Crust. Drizzled with Chocolate. You Might Have to Fight Others Off!</p>
                                              <h6 class="text-primary menu-price">35 EGP</h6>
                                            </div>
                                          </div>
                      
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                      
                                </div>
                              </div>
                            </div>
                          </section>
                          <?php
                      if(!isset($_SESSION['loggedin']))
                      echo '
                          <section class="site-section bg-light" id="section-register">
                                <div class="container">
                          
                                  <div class="row">
                                    <div class="col-md-12 text-center mb-5 site-animate">
                                      <h2 class="display-4">Register and gain points!</h2>
                                      <div class="row justify-content-center">
                                        <div class="col-md-7">
                                          <p class="lead">Register and be a part of our family now!</p>
                                          <a href="reg.php">Click here to go to the registration form.</a>
                                        </div>
                                      </div>
                                    </div>
                                   
                                  </div>
                                </div>
                              </section>';
                                    ?>
                              <section class="site-section bg-light" id="section-contact">
                                    <div class="container">
                                      <div class="row">
                              
                                        <div class="col-md-12 text-center mb-5 site-animate">
                                          <h2 class="display-4">Get In Touch</h2>
                                          <div class="row justify-content-center">
                                            <div class="col-md-7">
                                              <p class="lead">We try to be the best in everything we do. It would be nice to see how do you feel about us and try to make you get the best experience in our restaurant. </p>
                                            </div>
                                          </div>
                                        </div>
                              
                                        <div class="col-md-7 mb-5 site-animate">
                                          <form action="" method="post">
                                            <div class="form-group">
                                              <label for="name" class="sr-only">Name</label>
                                              <input type="text" class="form-control" id="name" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                              <label for="email" class="sr-only">Email</label>
                                              <input type="text" class="form-control" id="email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                              <label for="message" class="sr-only">Message</label>
                                              <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
                                            </div>
                                            <div class="form-group">
                                              <input type="submit" class="btn btn-primary btn-lg" value="Send Message" disabled>
                                            </div>
                                          </form>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4 site-animate">
                                          <p><img src="images//Last.jpg" alt="" class="img-fluid"></p>
                                          <p class="text-black">
                                            Address: <br> Mohammed Nagib, Sidi Bisher <br> Alexandria, Egypt <br> <br>
                                            Phone: <br> 69420 <br> <br>
                                            Email: <br> <a href="mammamiares@gmail.com">mammamiares@gmail.com</a>
                                          </p>
                              
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </section>
                                  <footer class="site-footer site-bg-dark site-section">
                                        <div class="container">
                                          <div class="row mb-5">
                                            <div class="col-md-12">
                                              <div class="row">
                                                <div class="col-md-4 site-animate">
                                                  <h2 class="site-heading-2">Thank you!</h2>
                                                  <p>This site was made and perfected by  Amr Mostafa Elnagar,Omar ElSayed Abo AlFotoh, Mohammed Adel Salah, Abdelrahman Rafaat Kharboush and Mohammed Mohammed Mostafa.</p>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3 site-animate">
                                                  <div class="site-footer-widget mb-4">
                                                    <h2 class="site-heading-2">Navigate to our sections</h2>
                                                    <ul class="list-unstyled">
                                                      <li><a href="#section-about" class="py-2 d-block">About Us</a></li>
                                                      <li><a href="#section-specials" class="py-2 d-block">Specials</a></li>
                                                      <li><a href="#section-menu" class="py-2 d-block">Menu</a></li>
                                                      <li><a href="#section-contact" class="py-2 d-block">Contact</a></li>
                                                    </ul>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                           
                                          </div>
                                          <div class="row site-animate">
                                             <div class="col-md-12 text-center">
                                              <div class="site-footer-widget mb-4">
                                                <ul class="site-footer-social list-unstyled ">
                                                  <li class="site-animate"><a href="https://www.twitter.com/MammaMiaRestau1"><span class="icon-twitter"></span></a></li>
                                                  <li class="site-animate"><a href="https://www.facebook.com/MammaMia-Restaurant-110294933815271/"><span class="icon-facebook"></span></a></li>
                                                  <li class="site-animate"><a href="https://www.instagram.com/mammamiares/"><span class="icon-instagram"></span></a></li>
                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </footer>



                                      <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                              <div class="modal-content">
                                                <div class="modal-body">
                                                  <div class="row">
                                                    <div class="col-lg-12">
                                                      <div class="bg-image" style="background-image: url(images/reservation_1.jpg);"></div>
                                                    </div>
                                                    <div class="col-lg-12 p-5">
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <small>CLOSE </small><span aria-hidden="true">&times;</span>
                                                      </button>
                                                      <h1 class="mb-4">Reserve A Table</h1>  
                                                      <form method="post" action="Ask4Table.php">
                                                        <div class="row">
                                                        <?php
                                                          if(!isset($_SESSION['loggedin']))
                                                       {
                                                         echo '<div class="col-md-6 form-group">'
                                                            .'<label for="m_fname">First Name</label>'
                                                            .'<input type="text" class="form-control" name="fname"/required/>
                                                          </div>'
                                                        
                                                        
                                                          .'<div class="col-md-6 form-group">
                                                            <label for="m_lname">Last Name</label>
                                                            <input type="text" class="form-control" name="lname"/required/>
                                                          </div>
                                                        

                                                          <div class="col-md-6 form-group">
                                                            <label for="m_email">Email</label>
                                                            <input type="email" class="form-control" name="email"/required/>
                                                          </div>
                                                        
                                                        <div class="col-md-6 form-group">
                                                            <label for="m_phone">Phone</label>
                                                            <input type="number" class="form-control" name="mphone"/required/>
                                                        </div>';
                                                       }?>
                                                         
                                                          <div class="col-md-12 form-group">
                                                            <label for="m_people">How Many People</label>
                                                            <select name="people" id="m_people" class="form-control"/required/>
                                                              <option value="1">1 People</option>
                                                              <option value="2">2 People</option>
                                                              <option value="3">3 People</option>
                                                              <option value="4+">4+ People</option>
                                                            </select>
                                                          </div>
                                                          

                                                          <div class="col-md-6 form-group">
                                                            <label for="m_date">Date</label>
                                                            <input type="date" class="form-control" name="mdate" min="<?php echo date('2019-12-31'); ?>" /required/>
                                                          </div>

                                                          <div class="col-md-6 form-group">
                                                            <label for="m_time">Time</label>
                                                            <input type="time" class="form-control" name="mtime"/required/>
                                                          </div>

                                                         
                                                          <div class="col-md-12 form-group">
                                                         <button  type="submit" class="btn btn-primary btn-lg btn-block">Reserve Now</button>
                                                        </div>

                                                        

                                                      <?php  if(!isset($_SESSION['loggedin']) &&!isset($_SESSION['loggedin'])==true) 
                                                      echo  '<div class="col-md-12 form-group">                    
                                                        <p>First Time ? Register With Us and Enjoy 50 points  <a style="color:black" href="reg.php">Sign up! </a></p>
                                                        <p> Already have an account <a style="color:black" href="log.php">Log in!</a></p>
                                                        </div>';
                                                       ?>


                                                      </form>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                         
                  <script src="js/jquery.min.js"></script>
                  <script src="js/popper.min.js"></script>
                  <script src="js/bootstrap.min.js"></script>
                  <script src="js/jquery.easing.1.3.js"></script>
                  <script src="js/jquery.waypoints.min.js"></script>
                  <script src="js/owl.carousel.min.js"></script>
                  <script src="js/jquery.magnific-popup.min.js"></script>
              
                  <script src="js/bootstrap-datepicker.js"></script>
                  <script src="js/jquery.timepicker.min.js"></script>
                  
                  <script src="js/jquery.animateNumber.min.js"></script>
                  <script src="js/main.js"></script>

  </body>