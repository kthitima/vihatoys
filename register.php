<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register || Dochoimebe</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
         <style type="text/css">
           ::-webkit-scrollbar { height: 15px; width: 12px; background: #ffffff; }
           ::-webkit-scrollbar-thumb:vertical { background-color: #000000; height: 5px; border: 1px dashed #3a3a3a;box-shadow: 0px 0px 15px dc9a7d;color: b71007 }
           ::-webkit-scrollbar-thumb:hover{background:#434343;border: 1px dashed #3a3a3a;box-shadow: 0px 0px 15px 000000;color: 000000 }</style>
      <style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/others/oth-6/oth626.cur), progress !important;}</style>
        <style type="text/css"> 
     body { background:url(http://localhost/toy_shop/images/bg2.jpg) repeat fixed; !important; }
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
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">'.$_SESSION['fname'].'</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li class="active"><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>





    <form method="POST" action="insert.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">First Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Fill your First name" name="fname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Last Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Fill your Last name" name="lname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Address</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Fill your Address" name="address">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">City</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Fill your City" name="city">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Pin Code</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="right-label" placeholder="...Ho Chi Minh City 700071..." name="pin">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">E-Mail</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" placeholder="Fill your Email" name="email">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" name="pwd">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; Dochoimebe. All Rights Reserved.</p>
        </footer>

      </div>
    </div>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
