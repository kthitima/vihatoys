<?php 
if ($_SESSION["lang"] == "EN") {
    include("en.php");
} else {
    include("vi.php");
}
$file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php"); ?>
    <style>
        .li.nav-item{
            text-transform: capitalize;
        }
        ul.navbar-nav > li {
            padding-left: 20px;
        }
    </style>
    <nav id=navbar class="navbar  fixed-top navbar-expand-md navbar-dark bg-alpha ">  <!-- sticky-top fixed-top -->
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/navbar/logo.png" width="36" height="36" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavkey" aria-controls="navbarNavkey" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavkey">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item <?php echo $file_name == 'index' ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php"><?php echo $strHome; ?> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'products' || $file_name == 'PRODUCT-detail' ? 'active' : '' ?>">
                        <a class="nav-link" href="products.php"><?php echo $strProduct; ?></a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'Payment' ? 'active' : '' ?>">
                        <a class="nav-link " href="Payment.php"><?php echo $strPayment; ?></a>
                    </li> 
                    <li class="nav-item <?php echo $file_name == 'orders' ? 'active' : '' ?>">
                        <a class="nav-link " href="orders.php"><?php echo $strMyorder; ?></a>
                    </li> 
                    <!-- <li class="nav-item <?php echo $file_name == 'about' ? 'active' : '' ?>">
                        <a class="nav-link " href="about.php">BLOG</a>
                    </li> -->
                    <li class="nav-item <?php echo $file_name == 'contact' ? 'active' : '' ?>">
                        <a class="nav-link " href="contact.php"><?php echo $strContact; ?></a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'questionnaire' ? 'active' : '' ?>">
                        <a class="nav-link " href="questionnaire.php"><?php echo $strQues; ?></a>
                    </li>
                </ul>
                <!-- ไอคอน เปลี่ยนภาษา -->
            
                <ul class="navbar-nav " >
                    <li style="position:relative;" class="menu-item menu-item-gtranslate">
                        <a href="change.php?lang=EN" onclick="doGTranslate('vi|en');return false;" title="English" class="glink nturl notranslate">
                        <img src="//dochoimebe.com/wp-content/plugins/gtranslate/flags/24/en.png" height="24" width="24" alt="English" /></a>
                    </li>
                    <!-- <li style="position:relative;" class="menu-item menu-item-gtranslate">
                        <a href="change.php?lang=TH" onclick="doGTranslate('vi|th');return false;" title="Thai" class="glink nturl notranslate">
                        <img src="//dochoimebe.com/wp-content/plugins/gtranslate/flags/24/th.png" height="24" width="24" alt="Thai" /></a>
                    </li> -->
                    <li style="position:relative;" class="menu-item menu-item-gtranslate">
                        <a href="change.php?lang=VI" onclick="doGTranslate('vi|vi');return false;" title="Vietnamese" class="glink nturl notranslate">
                        <img src="//dochoimebe.com/wp-content/plugins/gtranslate/flags/24/vi.png" height="24" width="24" alt="Vietnamese" /></a>
                    </li>
                    <style type="text/css">
                        #goog-gt-tt {display:none !important;}
                        .goog-te-banner-frame {display:none !important;}
                        .goog-te-menu-value:hover {text-decoration:none !important;}
                        .goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
                        body {top:0 !important;}
                        #google_translate_element2 {display:none!important;}
                    </style>
                </ul>
                
                <ul class="navbar-nav">
                    <?php

                    if (isset($_SESSION['username'])) {
                        echo '<li><a href="account.php">Hi  ' . $_SESSION['fname'] . '</a></li>';
                        echo '<li><a href="account.php">.  .</a></li>';
                        echo '<li><a href="logout.php">Log Out</a></li>';

                    } else {
                        echo '<li><a href="login.php">Login</a></li>';
                        
                        // echo '<li><a href="register.php">Register</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
        
