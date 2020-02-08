<?php 
include"./includes/otherlinks.php";
include "./includes/db-connect.php";
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
            <p>Welcome to our store. We R Shoes is a new place to find great shoes! We have carious styles for your liking. Don't see what you are looking for? Be patient since we are new, our collection is growing. We will have a lot more in stock soon!</p> 
            <div class="container">
                <div class="row">
                 <?php
                printHTML();
            ?>   
                </div>
            </div>
            
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