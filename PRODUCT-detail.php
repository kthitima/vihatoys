<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
$i=0;
$product_id = array();
$product_quantity = array();
$result = $mysqli->query("SELECT * FROM products WHERE id  LIKE '".$_GET['id']."' AND status = true");
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products || Dochoimebe</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <style>body{font-family: 'Prompt', sans-serif;}</style>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
      
      <style type="text/css">
           ::-webkit-scrollbar { height: 15px; width: 12px; background: #c1d82e; }
           ::-webkit-scrollbar-thumb:vertical { background-color: #6fa400; height: 5px; border: 1px dashed #8aca04;box-shadow: 0px 0px 15px dc9a7d;color: b71007 }
           ::-webkit-scrollbar-thumb:hover{background:#f9e551;border: 1px dashed #fae96e;box-shadow: 0px 0px 15px 000000;color: 000000 }</style>
        <style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/food/foo-3/foo258.ani), url(http://cur.cursors-4u.net/food/foo-3/foo258.png), progress;}</style><a href="http://www.cursors-4u.com/cursor/2011/11/15/happy-apple.html" target="_blank" title="Happy Apple"></a>
    
  </head>
  <body>

    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Dochoimebe</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      
        <ul class="right">
          <li class='active'><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">'.$_SESSION['fname'].'</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav> -->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <div class="carousel-img " style="background-image: url('http://www.localhost/toy_shop/images/head2.jpg');">
                    <!-- <div class="blackscreen"></div> -->
                </div>   
                <div class="carousel-caption text-white ">
                    <h1 class="display-4">Detail</h1>
                </div>  
            </div>
        </div>
    </section>
    


    <div class="row" style="margin-top:10px;max-width: 81.5rem;min-height: 500px;">
      
      <div class="col-12 margin-auto text-left" style="margin-top:50px;">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();
          $result = $mysqli->query("SELECT * FROM products WHERE id  LIKE '".$_GET['id']."' AND status = true");
          if($result === FALSE){
            
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {

              echo '<div class="large-6 columns">';
              
              echo '<img src="Admin/pages/product/upload/'.$obj->product_img_name.'"/>';
              echo '</div>';
              echo '<div class="large-6 columns">';
              echo '<p><h3 style="color:#000;">'.$obj->product_name.'</h3></p>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p style="word-break:break-all;"><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p style="float:left;margin-right: 30px;"><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<p><strong>Price (Per Unit)</strong>: '.number_format($obj->price,2).' VNĐ</p>';
              echo '<p><strong>Price (Per Unit)(USD)</strong>: '.ViToUsd($obj->price).' USD</p>';
              
              
              if($obj->qty > 0){
                  echo '<span><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear: both;
                  background: #c8d929;
                  border: none;
                  color: #fff;
                  font-size: 1em;
                  padding: 10px 30px;" /></a></span>';
                }
                else {
                    echo 'Out Of Stock!';
                }
                echo '</div>';
                
                $i++;
            }
            echo '</div>';
        }
        
        $_SESSION['product_id'] = $product_id;
        
        
        echo '</div>';
        echo '</div>';
        ?>
        
        







        




        <?php include_once('includes/footer.php') ?>

  




    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcPIeXddlFIZmsRcAzYWTdfyBtY83Yl9c&callback=initMap"></script>
    <script src="assets/js/main.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
