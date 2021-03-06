<?php 
include"./includes/otherlinks.php";
include "./stock/data-resource.php";
include "./web-service/brain.php";
include "./includes/font.php";
include "./includes/boot.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>We R Shoes</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header>
            <h1>We R Shoes!</h1>
           <nav class="navbar navbar-inverse">
               <div class="container-fluid">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li class="dropdown">
                            <a href="index.php">Shoes</a>
                            <ul>
                                <li><a href="./index.php?prod-id=womens">Women's</a></li>
                                <li><a href="./index.php?prod-id=mens">Men's</a></li>
                                <li><a href="./index.php?prod-id=unisex">Unisex</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <p>Welcome to We R Shoes. We have tried to make our site easier so you can find what your looking for faster! We offer various brands that everyone loves at amazing prices. We want our customers to leave satisfied and hope you can find what you are looking for.</p>
            <img src="img/manyshoes.jpg" class="img-fluid" alt="many shoes">
        </main>
          <footer>
              <div class="row">
                  <div class="col-sm-4 col-sm-4 col-sm-4">
                      <img src="img/highglow-sm.jpg" class="img-fluid" alt="Footer Image">
                  </div>
                  <div class="col-sm-4 col-sm-4 col-sm-4">
                      <p>Come Visit in Los Angelas, CA. 956-237-1954</p>
                      <?php include "./includes/social.php" ?>
                  </div>
                  <div class="col-sm-4 col-sm-4 col-sm-4">
                      <img src="img/yellowboots.jpg" class="img-fluid" alt="Yellow Boots">
                  </div>
              </div>
          </footer>
     </body>

     </html>