<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
//if(session_id() == '' || !isset($_SESSION)){session_start();}
session_start();
if ($_SESSION["lang"] == "EN") {
    include("en.php");
} else {
    include("vi.php");
}

include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dochoimebe</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <style>body{font-family: 'Prompt', sans-serif;}
    #borderimg3 { 
        border: 15px solid transparent;
        padding: 15px;
        border-image-source: url(border.png);
        border-image-repeat: stretch;    
        border-image-slice: 100%;
    }
    .card-text:last-child {
    margin-bottom: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    height: 120px;
    }
    </style> 
          <style id="klao" type="text/css">
   * { box-sizing: border-box; }
.video-background {
  background: #000;
  position: fixed;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: -99;
}
.video-foreground,
.video-background iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
#vidtop-content {
	top: 0;
	color: #fff;
}
.vid-info { position: absolute; top: 0; right: 0; width: 33%; background: rgba(0,0,0,0.3); color: #fff; padding: 1rem; font-family: Avenir, Helvetica, sans-serif; }
.vid-info h1 { font-size: 2rem; font-weight: 700; margin-top: 0; line-height: 1.2; }
.vid-info a { display: block; color: #fff; text-decoration: none; background: rgba(0,0,0,0.5); transition: .6s background; border-bottom: none; margin: 1rem auto; text-align: center; }
@media (min-aspect-ratio: 16/9) {
  .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground { width: 300%; left: -100%; }
}
@media all and (max-width: 600px) {
.vid-info { width: 50%; padding: .5rem; }
.vid-info h1 { margin-bottom: .2rem; }
}
@media all and (max-width: 500px) {
.vid-info .acronym { display: none; }
}
    </style>
       <style type="text/css">
           ::-webkit-scrollbar { height: 15px; width: 12px; background: #c1d82e; }
           ::-webkit-scrollbar-thumb:vertical { background-color: #6fa400; height: 5px; border: 1px dashed #8aca04;box-shadow: 0px 0px 15px dc9a7d;color: b71007 }
           ::-webkit-scrollbar-thumb:hover{background:#f9e551;border: 1px dashed #fae96e;box-shadow: 0px 0px 15px 000000;color: 000000 }</style>
        <style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/food/foo-3/foo258.ani), url(http://cur.cursors-4u.net/food/foo-3/foo258.png), progress;}</style><a href="http://www.cursors-4u.com/cursor/2011/11/15/happy-apple.html" target="_blank" title="Happy Apple"></a>
  </head>
  <body>


    <?php include_once('includes/navbar.php') ?>
<!--     
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
      </a>
      <ul class="right">
          
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

            if (isset($_SESSION['username'])) {
                echo '<li><a href="account.php">' . $_SESSION['fname'] . '</a></li>';
                echo '<li><a href="logout.php">Log Out</a></li>';
            } else {
                echo '<li><a href="login.php">Log In</a></li>';
                echo '<li><a href="register.php">Register</a></li>';
            }
            ?>
        </ul>
    </nav> -->
<!--     
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Dochoimebe</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section"> -->
      <!-- Right Nav Section -->
        <!-- <ul class="right">
          
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

            if (isset($_SESSION['username'])) {
                echo '<li><a href="account.php">' . $_SESSION['fname'] . '</a></li>';
                echo '<li><a href="logout.php">Log Out</a></li>';
            } else {
                echo '<li><a href="login.php">Log In</a></li>';
                echo '<li><a href="register.php">Register</a></li>';
            }
            ?>
        </ul>
      </section>
    </nav> -->




    <!-- Section carousel slide -->
<section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> -->
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                
                <div class="carousel-img " style="background-image: url('http://localhost/toy_shop/images/headbarr.jpg');">
                    
                </div>
                
                <div class="carousel-caption">
                    
                </div>
                
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('http://localhost/toy_shop/images/head2.jpg');">
               
                </div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="carousel-item">
                    <div class="carousel-img" style="background-image: url('http://localhost/toy_shop/images/head3.jpg');">
                       
                    </div> 
                    <div class="carousel-caption">
                        
                    </div>
            </div>
            
            <div class="carousel-item">
                    <div class="carousel-img" style="background-image: url('http://localhost/toy_shop/images/category.jpg');">
                       
                    </div> 
                    <div class="carousel-caption">
                       
                    </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"><?php echo $strPrevious; ?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"><?php echo $strNext; ?></span>
        </a>
    </section>
<!-- Section Hope -->
    <section class="container py-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-lg-6 ">
                
                <div   class="embed-responsive embed-responsive-16by9">
                 
                 <div class="video-wrapper" data-video-id="Y323EULhQAY" data-video-youtube-link="y" data-video-start="1" data-video-end="140" data-video-width-add="100" data-video-height-add="100" style="height: 20px; ">
  <div class="video-overlay" style="background-color: #; opacity: "></div>
					  <div class="tv">
						    <div class="screen mute" id="tv"></div>
					  </div>
				</div>
                    
                </div>
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-lg-6 py-3 p-lg-0 text-center">
                <br>
                <img src="http://localhost/toy_shop/images/line.gif" /><br><br>
                
                <h2><?php echo $strAbout; ?></h2><br>
                 <?php echo $strTitle; ?>
                 <p><?php echo $strlorem; ?></p>
                <br>
                <!-- <h3><?php  echo $strExpectations; ?></h3>
                <p><?php echo $strTextExpectations; ?></p> -->
                <img src="http://localhost/toy_shop/images/doll.png" />
            </div>
            <div class="col-3"></div>
        </div>
    </section>

<!-- Section  -->
    <!-- <section class="page jarallax " data-speed="0.5"  style="background-image: url('https://images.unsplash.com/photo-1528227153184-d310240280ed?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=51547cc386bf31bb6870e6a34bd9cb07&auto=format&fit=crop&w=753&q=80');">
        <div class="container ">
            <div class="row">
                <div class=" col-12 text-center text-white">
                    <img src="assets/images/logook1.png" class="img-fluid" width="300" alt="">
                    <p class=" lead ">**************************************</p> 
                </div>
            </div>
        </div>
        <br>
    </section> -->
<!-- BLOG -->
   
    <section class="container">
            <!-- ชื่อสินค้า -->
        <h1 class="display-5 py-4  "><?php echo $strCategory; ?></h1>
        <div class="row"  >
          <section class="col-sm-6 col-md-3 col-lg-3 mb-3">
                  <div class="carousel-caption">
                      <a href="products.php?tag=all" class="text-white"><?php echo $strProducttoy; ?></a>
                  </div>
                  <div class="card  ">
                      <a href="products.php?tag=all" class="warpper-card-img">
                          <img class="card-img-top"src="http://localhost/toy_shop/images/ca1.jpg" alt="Card image cap">
                           
                      </a>
              </div>
          </section>
          <section class="col-sm-6 col-md-3 col-lg-3 mb-3">
              <div class="carousel-caption">
                  <a href="products.php?tag=2" class="text-white"><?php echo $strProducttoyintellect; ?></a>
              </div>
              <div class="card  ">
                  <a href="products.php?tag=2" class="warpper-card-img">
                      <img class="card-img-top"src="http://localhost/toy_shop/images/ca2.jpg" alt="Card image cap">
                  </a>
              </div>
          </section>  
          <section class="col-sm-6 col-md-3 col-lg-3 mb-3">
              <div class="carousel-caption">
                  <a href="products.php?tag=3" class="text-white"><?php echo $strProfessionaltoys; ?></a>
              </div>
              <div class="card  ">
                  <a href="products.php?tag=3" class="warpper-card-img">
                      <img class="card-img-top"src="http://localhost/toy_shop/images/ca3.jpg" alt="Card image cap">
                  </a>
              </div>
          </section>  
          <section class="col-sm-6 col-md-3 col-lg-3 mb-3">
                  <div class="carousel-caption">
                      <a href="products.php?tag=4" class="text-white"><?php echo $strFitnesstoys; ?></a>
                  </div>
                  <div class="card  ">
                      <a href="products.php?tag=4" class="warpper-card-img">
                          <img class="card-img-top"src="http://localhost/toy_shop/images/ca4.jpg" alt="Card image cap">
                      </a>
              </div>
          </section>
          <section class="col-sm-6 col-md-3 col-lg-3 mb-3">
              <div class="carousel-caption">
                  <a href="products.php?tag=5" class="text-white"><?php echo $strRemoteControl; ?></a>
              </div>
              <div class="card  ">
                  <a href="products.php?tag=5" class="warpper-card-img">
                      <img class="card-img-top"src="http://localhost/toy_shop/images/ca5l.jpg" alt="Card image cap">
                  </a>
              </div>
          </section>  
          <section class="col-sm-6 col-md-3 col-lg-3 mb-3">
              <div class="carousel-caption">
                  <a href="products.php?tag=6" class="text-white"><?php echo $strBabytoys; ?></a>
              </div>
              <div class="card  ">
                  <a href="products.php?tag=6" class="warpper-card-img">
                      <img class="card-img-top"src="http://localhost/toy_shop/images/ca6.jpg" alt="Card image cap">
                  </a>
              </div>
          </section>  
          <section class="col-sm-6 col-md-3 col-lg-3 mb-3">
                  <div class="carousel-caption">
                      <a href="products.php?tag=7" class="text-white"><?php echo $strToysforboys; ?></a>
                  </div>
                  <div class="card  ">
                      <a href="products.php?tag=7" class="warpper-card-img">
                          <img class="card-img-top"src="http://localhost/toy_shop/images/ca7.jpg" alt="Card image cap">
                      </a>
              </div>
          </section>
          <section class="col-sm-6 col-md-3 col-lg-3 mb-3">
              <div class="carousel-caption">
                  <a href="products.php?tag=8" class="text-white"><?php echo $strToysforgirl; ?></a>
              </div>
              <div class="card  ">
                  <a href="products.php?tag=8" class="warpper-card-img">
                      <img class="card-img-top"src="http://localhost/toy_shop/images/ca8.jpg" alt="Card image cap">
                  </a>
              </div>
          </section>  
            
            
          <section class="offset-md-3 col-sm-6 col-md-3 col-lg-3 mb-3">
              <div class="carousel-caption">
                  <a href="products.php?tag=9" class="text-white"><?php echo $strLikeMusic; ?></a>
              </div>
              <div class="card  ">
                  <a href="products.php?tag=9" class="warpper-card-img">
                      <img class="card-img-top"src="http://localhost/toy_shop/images/ca9.jpg" alt="Card image cap">
                  </a>
              </div>
          </section>  
            
            
          <section class=" col-sm-6 col-md-3 col-lg-3 mb-3">
                  <div class="carousel-caption">
                      <a href="products.php?tag=10" class="text-white"><?php echo $strOtherproduct; ?></a>
                  </div>
                  <div class="card  ">
                      <a href="products.php?tag=10" class="warpper-card-img">
                          <img class="card-img-top"src="http://localhost/toy_shop/images/ca10.jpg" alt="Card image cap">
                      </a>
              </div>
          </section>
            
            
          <br>
    </section>
           
    <section class="container" >
        <h1 class="border-short-bottom2 display-5 py-4 "><?php echo $strPopular; ?></h1>
        <!-- <h5 class=" display-4 text-center">บทความ</h5> -->
        <div class="row" >
            <?php 
            $i = 0;
            $product_id = array();
            $product_quantity = array();
            $result = $mysqli->query('SELECT * FROM products WHERE status = true ORDER BY RAND()  LIMIT 6');
            while ($row = $result->fetch_assoc()) { ?>
            <section class="col col-sm-6 col-md-4 col-lg-4 mb-4">
                <div class="card  " >
                    <a href="PRODUCT-Detail.php?id=<?php echo $row['id'] ?> " class="warpper-card-img">
                        <img class="card-img-top"src="<?php echo $base_path_products . $row['product_img_name'] ?>" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['product_name'] ?></h5>
                        <p class="card-text"><?php echo $row['product_desc'] ?></p>
                    </div>
                </div>
            </section>  
            <?php 
        } ?>
        </div>
    </section>



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
    <script>    
        // Grab data attributes from video-wrapper
var videoID = $(".video-wrapper").data("video-id");
var videoYouTubeLink = $(".video-wrapper").data("video-youtube-link");
var videoStart = $(".video-wrapper").data("video-start");
var videoEnd = $(".video-wrapper").data("video-end");
var videoWidthAdd = $(".video-wrapper").data("video-width-add");
var videoHeightAdd = $(".video-wrapper").data("video-height-add");

// Create video script element
var tag = document.createElement('script');
  tag.src = 'https://www.youtube.com/player_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// Prepend expander if data attr is yes
if (videoYouTubeLink === 'y') {
  $(".video-wrapper").prepend('<a href="https://www.youtube.com/watch?v=' + videoID + '" class="video-expand" target="_blank">View on Youtube</a>');
}

// Setup the Youtube TV with player defaults
var tv,
  playerDefaults = {autoplay: 0, autohide: 1, modestbranding: 1, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3};
var vid = {'videoId': videoID, 'startSeconds': videoStart, 'endSeconds': videoEnd, 'suggestedQuality': 'hd720'};

function onYouTubePlayerAPIReady(){
  tv = new YT.Player('tv', {events: {'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}, playerVars: playerDefaults});
}

function onPlayerReady(){
  tv.loadVideoById(vid);
  tv.mute();
}

function onPlayerStateChange(e) {
  if (e.data === 1){
    $('#tv').addClass('active');
  } else if (e.data === 0){
    tv.seekTo(vid.startSeconds)
  }
}

function vidRescale(){
  var w = $(window).width() + videoWidthAdd,
    h = $(window).height() + videoHeightAdd;
  if (w/h > 16/9){
    tv.setSize(w, w/16*9);
    $('.tv .screen').css({'left': '0px'});
  } else {
    tv.setSize(h/9*16, h);
    $('.tv .screen').css({'left': -($('.tv .screen').outerWidth()-w)/2});
  }
}

$(window).on('load resize', function(){
  vidRescale();
});
        </script>
        
        
        
  </body>
</html>
