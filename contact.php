<?php
session_start();
include 'config.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/js/main.js">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <style>body{font-family: 'Prompt', sans-serif;}</style>
    <title>CONTACT</title>
       <style type="text/css">
           ::-webkit-scrollbar { height: 15px; width: 12px; background: #c1d82e; }
           ::-webkit-scrollbar-thumb:vertical { background-color: #6fa400; height: 5px; border: 1px dashed #8aca04;box-shadow: 0px 0px 15px dc9a7d;color: b71007 }
           ::-webkit-scrollbar-thumb:hover{background:#f9e551;border: 1px dashed #fae96e;box-shadow: 0px 0px 15px 000000;color: 000000 }</style>
        <style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/food/foo-3/foo258.ani), url(http://cur.cursors-4u.net/food/foo-3/foo258.png), progress;}</style><a href="http://www.cursors-4u.com/cursor/2011/11/15/happy-apple.html" target="_blank" title="Happy Apple"></a>
  
</head>
<body>
  
<!-- Section navbar -->
    <?php include_once('includes/navbar.php') ?>

<!-- Section Page-Title -->
    <header class="jarallax" data-speed="0.5"  style="background-image: url('toy_shop/images/headbarr.jpg');">
        <div class="page-image">
            <h1 class="display-4"><?php echo $strContact ?></h1>
            <p class=" lead"></p>
        </div>
    </header>
         <?php 
                 $result = $mysqli->query("SELECT * FROM contact");
                 $row = $result->fetch_assoc();
            ?>
<!-- Section contact -->
    <section class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="border-short-bottom"><?php echo $strDetailContact; ?></h2>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-address-card py-2 fa-4x text-info" aria-hidden="true"></i>
                        <h4 class="card-title"><img src="toy_shop/images/earth.jpg" /><br><?php echo $strAddressContact; ?></h4>
                        <p class="card-text"><?php echo $row['name'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-phone-square py-2 fa-4x text-info" aria-hidden="true"></i>
                        <h4 class="card-title"><img src="toy_shop/images/phone.png" /><br><?php echo $strPhoneContact; ?></h4>
                        <p class="card-text"><img src="toy_shop/images/pushpink.jpg" />&nbsp;<?php echo $row['phone'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-envelope py-2 fa-4x text-info" aria-hidden="true"></i>
                        <h4 class="card-title"><img src="toy_shop/images/letter.jpg" /><br><?php echo $strEmailContact; ?></h4>
                        <p class="card-text"><?php echo $row['email'] ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php  echo $strFormcontactus; ?></h5>
                        <form method="post" action="php/contact.php">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name"><?php echo $strName; ?></label>
                                    <input type="text" id="name" name="name" class="form-control" required placeholder="<?php echo $strName; ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone"><?php echo $strPhoneContact; ?></label>
                                    <input type="text" id="phone" name="phone" class="form-control" required placeholder="<?php echo $strPhoneContact; ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Email"><?php echo $strEmailContact; ?></label>
                                    <input type="email" id="email" name="email" class="form-control" required placeholder="example@email.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message"><?php  echo $strTextarea;?></label>
                                <textarea  id="message" name="message" rows="5" class="form-control" required placeholder="<?php  echo $strTextarea;?>"></textarea>
                            </div>
                            <!-- <div id="recaptcha-wrapper" class="text-center my-2">
                                <div class="g-recaptcha d-inline-block" data-callback="callback" data-sitekey="6LfLEW0UAAAAAAQRaVZawKHWuOYokiJzqvdKf3u7"></div>
                            </div> -->
                            <button type="submit" id="btn-submit" name="btn-submit" class="btn btn-primary d-block mx-auto" ><?php  echo $strSendMessage; ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

<!-- Section Abous -->
<!-- Section footer -->
  
<!-- section on to top -->
    <!-- <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div> -->
    <?php include_once('includes/footer.php') ?>


<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/jarallax/dist/jarallax.min.js"></script>
<script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcPIeXddlFIZmsRcAzYWTdfyBtY83Yl9c&callback=initMap"></script>
<script src="assets/js/main.js"></script>
<script>
    $(function(){
            // global variables
            captchaResized = false;
            captchaWidth = 304;
            captchaHeight = 78;
            captchaWrapper = $('#recaptcha-wrapper');
            captchaElements = $('#rc-imageselect, .g-recaptcha');

            $(window).on('resize', function() {
                resizeCaptcha();
            });

            resizeCaptcha();
        });

        function resizeCaptcha() {
            if (captchaWrapper.width() >= captchaWidth) {
                if (captchaResized) {
                    captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
                    captchaWrapper.height(captchaHeight);
                    captchaResized = false;
                }
            } else {
                var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05/15));
                captchaElements.css('transform', 'scale('+scale+')').css('-webkit-transform', 'scale('+scale+')').css('-ms-transform', 'scale('+scale+')').css('-o-transform', 'scale('+scale+')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
                captchaWrapper.height(captchaHeight * scale);
                if (captchaResized == false) captchaResized = true;
            }
        }
        // resizeCaptcha();
        function callback (){
            $('#btn-submit').removeAttr('disabled'); 
        }
</script>

</body>
</html>