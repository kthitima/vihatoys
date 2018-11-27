<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Orders || Dochoimebe</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
             <style type="text/css">
           ::-webkit-scrollbar { height: 15px; width: 12px; background: #ffffff; }
           ::-webkit-scrollbar-thumb:vertical { background-color: #000000; height: 5px; border: 1px dashed #3a3a3a;box-shadow: 0px 0px 15px dc9a7d;color: b71007 }
           ::-webkit-scrollbar-thumb:hover{background:#434343;border: 1px dashed #3a3a3a;box-shadow: 0px 0px 15px 000000;color: 000000 }</style>
      <style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/others/oth-6/oth626.cur), progress !important;}</style>
      <style type="text/css"> 
body { background:url(http://localhost/toy_shop/images/bg.jpg) repeat fixed; !important; }
 </style>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php"><img src="assets/images/navbar/logo.png" width="36" height="36" class="d-inline-block align-top" alt="">&nbsp;&nbsp;Vi Ha Toys Dochoimebe</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li class="active"><a href="orders.php">My Orders</a></li>
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
    </nav>




    <div class="row" style="margin-top:10px;">
      <div class="large-12">
          <center>
        <p><b><img src="http://localhost/toy_shop/images/orderboy.jpg" /><br><font size="10"><?php echo 'Hi ' .$_SESSION['fname'] .''; ?></font></b></p>

         
          <p><font size="7">❖─ Show all orders ─❖</font></p>
          </center>
        <center><img src="http://localhost/toy_shop/images/lineyellow.jpg" /><img src="http://localhost/toy_shop/images/lineyellow.jpg" /><img src="http://localhost/toy_shop/images/lineyellow.jpg" /></center>
          <center><p><b>Order list&nbsp;<br><img src="http://localhost/toy_shop/images/oa.gif" /><img src="http://localhost/toy_shop/images/oa2.gif" /><img src="http://localhost/toy_shop/images/oa3.gif" /></b></p></center>  
          
<center>
        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              //echo '<div class="large-6">';
              echo '<font color="#e03131"><p><b>Order ID ->'.$obj->id.'</b></p></font>';
              echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Price Per Unit(VND)</strong>: '.number_format($obj->price,2).'</p>';
              echo '<p><strong>Price Per Unit(USD)</strong>: '.ViToUsd($obj->price).'</p>';
              echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
              //echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
              //echo '</div>';
              //echo '<div class="large-6">';
              //echo '<img src="images/products/sports_band.jpg">';
              //echo '</div>';
              echo '<p><img src="http://image.dek-d.com/26/2550822/112521031" /><img src="http://image.dek-d.com/26/2550822/112521031" /> </p>';

            }
          }
        ?>
      </div>
    </div>
</center>

<center><img src="http://localhost/toy_shop/images/cat.gif" /></center>
      <center><?php include_once('includes/footer.php') ?></center>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
