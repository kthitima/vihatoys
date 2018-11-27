<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';

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
    
  <?php include_once('includes/navbar.php') ?>

    <!-- <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Dochoimebe</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section"> -->
      <!-- Right Nav Section -->
        <!-- <ul class="right">
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
    <style>
        .card-body{
            min-height: 162px;
            height: 162px;
        }
    </style>
    
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <div class="carousel-img " style="background-image: url('http://localhost/toy_shop/images/category.jpg');">
                    <div class="blackscreen"></div>
                   
                </div>   
                <div class="carousel-caption text-white ">
                    <h1 class="display-4"><?php echo $strProduct; ?></h1>
                </div>  
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="btn-group-custom">
                  <a href="products.php?tag=all">
                      <button class="btn btn-primary <?php echo $tag == 'all' ? 'active':'' ?> "><?php echo $strProductAll; ?></button>
                  </a>
                  <a href="products.php?tag=1">
                      <button class="btn btn-primary <?php echo $tag == '1' ? 'active':'' ?>"> <?php echo $strProducttoy; ?></button>
                  </a>
                  <a href="products.php?tag=2">
                      <button class="btn btn-primary <?php echo $tag == '2' ? 'active':'' ?>"><?php echo $strProducttoyintellect; ?></button>
                  </a>
                  <a href="products.php?tag=3">
                      <button class="btn btn-primary <?php echo $tag == '3' ? 'active':'' ?>"><?php echo $strProfessionaltoys; ?></button>
                  </a>
                  <a href="products.php?tag=4">
                      <button class="btn btn-primary <?php echo $tag == '4' ? 'active':'' ?>"><?php echo $strFitnesstoys; ?></button>
                  </a>
                  <a href="products.php?tag=5">
                      <button class="btn btn-primary <?php echo $tag == '5' ? 'active':'' ?>"><?php echo $strRemoteControl; ?></button>
                  </a>
                  <a href="products.php?tag=6">
                      <button class="btn btn-primary <?php echo $tag == '6' ? 'active':'' ?>"><?php echo $strBabytoys; ?></button>
                  </a>
                  <a href="products.php?tag=7">
                      <button class="btn btn-primary <?php echo $tag == '7' ? 'active':'' ?>"><?php echo $strToysforboys; ?></button>
                  </a>
                  <a href="products.php?tag=8">
                      <button class="btn btn-primary <?php echo $tag == '8' ? 'active':'' ?>"><?php echo $strToysforgirl; ?></button>
                  </a>
                  <a href="products.php?tag=9">
                      <button class="btn btn-primary <?php echo $tag == '9' ? 'active':'' ?>"><?php echo $strLikeMusic; ?></button>
                  </a>
                  <a href="products.php?tag=10">
                      <button class="btn btn-primary <?php echo $tag == '10' ? 'active':'' ?>"><?php echo $strOtherproduct; ?></button>
                  </a>
                </div>
            </div>
        <div class="col-lg-9 py-3 p-lg-0">
            <div class="row">
            <?php 
                $i=0;
                $product_id = array();
                $product_quantity = array();
                $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
                $result = $mysqli->query("SELECT * FROM products WHERE tag LIKE '%".$tag."%' AND status = true");
                if($result->num_rows){
                while($row = $result->fetch_assoc()) { 
            ?>
            <section class="col col-sm-6 col-md-4 col-lg-4 mb-4">
                <div class="card  ">
                    <a href="PRODUCT-Detail.php?id=<?php echo $row['id']?>" class="warpper-card-img">
                        <img class="card-img-top"src="<?php echo $base_path_products.$row['product_img_name']?>" alt="Card image cap">
                    </a>
                    <div class="card-body" style="    margin-bottom: 0;
                    overflow: hidden;
                    text-overflow: ellipsis;">
                        <h5 class="card-title" style="color:#000;"><?php echo $row['product_name']?></h5>
                        <p class="card-text"><?php echo $row['product_desc']?></p>
                    </div>
                    <!-- <div class="p-3 ">
                        <a href="PRODUCT-Detail.php?id=<?php echo $row['id']?>" class="btn btn-dark w-100 ">อ่านเพิ่มเติม</a>
                    </div> -->
                </div>
            </section>
            <?php 
                }
            }else{
            ?>
                
            <section class="col-12">
                <p class="text-center">ไม่มีข้อมูล</p>
            </section>
            <?php
            }
            ?>
        </div>
            </div>
        </div>
    </section>

    <!-- <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();
          $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
          $result = $mysqli->query("SELECT * FROM products WHERE tag LIKE '%".$tag."%' AND status = true");
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {

              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<p><strong>Price (Per Unit)</strong>: '.$obj->price.' VNĐ</p>';



              if($obj->qty > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['product_id'] = $product_id;


          echo '</div>';
          echo '</div>';
          ?>







        <div class="row" style="margin-top:10px;">
          <div class="small-12">




        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; Dochoimebe. All Rights Reserved.</p>
        </footer>

      </div>
    </div> -->
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
