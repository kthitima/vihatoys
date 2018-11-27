<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}
include 'config.php';

?>
<?php if(@$_POST["save"]=="1"){
$file_name=@$_FILES["file"]["name"];
$file=@$_FILES["file"]["tmp_name"];
		if(@$file){
$path = "./upload/";
$fileType = explode('.', $file_name);
$fileName = date('YmdHis');
$fileName = $fileName.".".$fileType[1];
$uploadFile = $path."".$fileName;
copy($file, $uploadFile);
$slip = "$fileName";
		}
$sql = "insert into payment (firstName,lastName,username,email,address,address2,country,state,zip,sameaddress,saveinfo,bank_pay,payment_date,hour,minute,slip)values('".$_POST["firstName"]."','".$_POST["lastName"]."','".$_POST["username"]."','".$_POST["email"]."','".$_POST["address"]."','".$_POST["address2"]."','".$_POST["country"]."','".$_POST["state"]."','".$_POST["zip"]."','".$_POST["same-address"]."','".$_POST["save-info"]."','".$_POST["bank_pay"]."','".$_POST["payment_date"]."','".$_POST["hour"]."','".$_POST["minute"]."','".$slip."')";
$mysqli->set_charset("utf8");
        $query = $mysqli->query($sql);
        if($query){ 
echo "<meta http-equiv='refresh' content='0 ;url=index.php'>" ;
		}
			exit;
}?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <!-- css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <style>body{font-family: 'Prompt', sans-serif;}</style>
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">

    <title>PAYMENT</title>
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
    <header class="jarallax" data-speed="0.5"  style="background-image: url('http://localhost/toy_shop/images/head2.jpg');">
        <div class="page-image">
            <h1 class="display-4"><?php echo $strPayment; ?></h1>
            <p class=" lead">   </p>
        </div>
    </header>


<!-- Section PAYMENT -->
<div class="container">
      <div class="row" style="justify-content:center;">
        
        <div class="col-md-8 order-md-1 ">
            <br>
            <h4 class="mb-3"><b><?php echo $strBilling; ?></b></h4>
          <form class="needs-validation" novalidate method="post" name="form" id="demo-form2" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6 mb-3">
                  <label for="firstName"><b><?php echo $strFirstname; ?></b></label>
                <input type="text" class="form-control" name="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                  <label for="lastName"><b><?php echo $strLastname; ?></b></label>
                <input type="text" class="form-control" name="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
                <label for="username"><b><?php echo $strUsername; ?></b></label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" name="username" placeholder="Fill your Username (Email)" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
                <label for="email"><b><?php echo $strEmail; ?></b><span class="text-muted"></span></label>
              <input type="email" class="form-control" name="email" placeholder="Fill your Backup Email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
                <label for="address"><b><?php echo $strAddress; ?></b></label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Fill your Address" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
                <label for="address2"><b><?php echo $strAddress2; ?></b><span class="text-muted"></span></label>
              <input type="text" class="form-control" name="address2" id="address2" placeholder="Fill your Address 2, such as Apartment or Office">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                  <label for="country"><b><?php echo $strCountry; ?></b></label>
                <select class="custom-select d-block w-100" name="country" required>
                  <option value="">Choose...</option>
                  <option>Vietnam</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                  <label for="state"><b><?php echo $strState; ?></b></label>
                <select class="custom-select d-block w-100" name="state" required>
                  <option value="">Choose...</option>
    
                    <option>Bac Giang City</option>
                    <option>Bac Ha</option>
                    <option>Bac Ninh City</option>
                    <option>Bien Hoa</option>
                    <option>Buon Ma Thuot </option>
                    <option>Can Tho</option>
                    <option>Chau Doc</option>
                    <option>Ca Mau City </option>
                    <option>Cẩm Phả </option>
                    <option>Da Lat</option>
                    <option>Da Nang </option>
                    <option>Dien Bien Phu</option>
                    <option>Dong Hoi </option>
                    <option>Dong Van </option>
                    <option>Ha Giang City </option>
                    <option>Ha Long </option>
                    <option>Ha Tien</option>
                    <option>Ha Tinh City </option>
                    <option>Hai Duong City</option>
                    <option>Haiphong </option>
                    <option>Hanoi </option>
                    <option>Ho Chi Minh City </option>
                    <option>Hoa Binh City </option>
                    <option>Hoi An </option>
                    <option>Hu </option>
                    <option>Lang Son City </option>
                    <option>Lao Cai City </option>
                    <option>Long Xuyen </option>
                    <option>Meo Vac </option>
                    <option>Mong Cai </option>
                    <option>Montages of cities in Vietnam </option>
                    <option>My Tho </option>
                    <option>Nam Dinh City </option>
                    <option>Nghia Lo </option>
                    <option>Nha Trang </option>
                    <option>Ninh Binh City </option>
                    <option>Phan Rang-Thap Cham </option>
                    <option>Phan Thiet </option>
                    <option>Phu Khe </option>
                    <option>Phu Ly </option>
                    <option>Phu Quoc </option>
                    <option>Pleiku </option>
                    <option>Quang Ngai City </option>
                    <option>Quy Nhon </option>
                    <option>Rach Gia </option>
                    <option>Sa Dec </option>
                    <option>Soc Trang City </option>
                    <option>Tam Ky </option>
                    <option>Tan An </option>
                    <option>Tay Ninh City </option>
                    <option>Thai Nguyen City </option>
                    <option>Thanh Hoa City </option>
                    <option>Thu Dau Mot </option>
                    <option>Tuy Hoa </option>
                    <option>Uông Bí </option>
                    <option>Vi Thanh </option>
                    <option>Viet Tri </option>
                    <option>Vinh</option>
                    <option>Vinh Long City </option>
                    <option>Vung Tau </option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                  <label for="zip"><b><?php echo $strZip; ?></b></label>
                <input type="text" class="form-control" name="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address" name="same-address" value="same-address" onclick="copy();">
              <label class="custom-control-label" for="same-address"><?php echo $strShippingaddress; ?></label>
            </div>
<!--
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="save-info" value="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
-->
			<hr class="mb-4">
<script>function copy(){
document.getElementById('address2').value=document.getElementById('address').value
					}
</script>
            <h4 class="mb-3"><?php echo $strPaymentnaja; ?></h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <tr>
                        <td valign="top"><?php echo $strNameofBank; ?></td>
                    <td> 
                        <table width="100%" border="0" cellspacing="0" cellpadding="7">
                            <tr style="background-image:url(images/menu_white.png);">
                                <td width="25" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <input name="bank_pay" type="radio" value="Vietcombank "  required="required">
                                </td>
                                <td width="186" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <img src="images/bank1.png" width="20" height="20" style="vertical-align:middle;"/>Vietcombank
                                </td>
                                <td width="151" style="border-top:solid 1px #E8E8E8;" align="left">0071000787105</td>
                                <td width="204" style="border-top:solid 1px #E8E8E8;border-right:solid 1px #E8E8E8;" align="left">Transaction Office No. 3, HCM </td>
                            </tr>
                            <tr style="background-image:url(images/menu_white.png);">
                        <td width="25" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                        <input name="bank_pay" type="radio" value="BIDV 025-8-426347"  required="required">
                            </td>
                            <td width="186" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                            <img src="images/bank2.png" width="20" height="20" style="vertical-align:middle;"/>
                        BIDV   </td>
                            <td width="151" style="border-top:solid 1px #E8E8E8;" align="left">13,510,000,451,673</td>
                            <td width="204" style="border-top:solid 1px #E8E8E8;border-right:solid 1px #E8E8E8;" align="left">Gia Dinh Branch</td>
                        </tr>
                            
                             <tr style="background-image:url(images/menu_white.png);">
                                <td width="25" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <input name="bank_pay" type="radio" value="Vietinbank "  required="required">
                                </td>
                                <td width="186" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <img src="images/bank3.png" width="20" height="20" style="vertical-align:middle;"/>Vietinbank 
                                </td>
                                <td width="151" style="border-top:solid 1px #E8E8E8;" align="left">104005700615</td>
                                <td width="204" style="border-top:solid 1px #E8E8E8;border-right:solid 1px #E8E8E8;" align="left">Branch 8 HCM  </td>
                            </tr>
                            
                             <tr style="background-image:url(images/menu_white.png);">
                                <td width="25" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <input name="bank_pay" type="radio" value="Asia Commercial Bank "  required="required">
                                </td>
                                <td width="186" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <img src="images/bank4.jpg" width="20" height="20" style="vertical-align:middle;"/>Asia Commercial Bank
                                </td>
                                <td width="151" style="border-top:solid 1px #E8E8E8;" align="left">ACB : 25,710,319</td>
                                <td width="204" style="border-top:solid 1px #E8E8E8;border-right:solid 1px #E8E8E8;" align="left">Branches Binh Thanh District, HCM  </td>
                            </tr>
                            
                             <tr style="background-image:url(images/menu_white.png);">
                                <td width="25" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <input name="bank_pay" type="radio" value="Sacombank "  required="required">
                                </td>
                                <td width="186" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <img src="images/bank5.jpg" width="20" height="20" style="vertical-align:middle;"/>Sacombank
                                </td>
                                <td width="151" style="border-top:solid 1px #E8E8E8;" align="left">060 044 935 001</td>
                                <td width="204" style="border-top:solid 1px #E8E8E8;border-right:solid 1px #E8E8E8;" align="left">Transaction office Trang Long  </td>
                            </tr>
                            
                             <tr style="background-image:url(images/menu_white.png);">
                                <td width="25" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <input name="bank_pay" type="radio" value="Techcombank "  required="required">
                                </td>
                                <td width="186" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <img src="images/bank6.jpg" width="20" height="20" style="vertical-align:middle;"/>Techcombank
                                </td>
                                <td width="151" style="border-top:solid 1px #E8E8E8;" align="left">14,024,198,210,012</td>
                                <td width="204" style="border-top:solid 1px #E8E8E8;border-right:solid 1px #E8E8E8;" align="left">PGD Ap Bac</td>
                            </tr>
                            
                             <tr style="background-image:url(images/menu_white.png);">
                                <td width="25" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <input name="bank_pay" type="radio" value="Bank of East Asia  "  required="required">
                                </td>
                                <td width="186" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <img src="images/bank7.png" width="20" height="20" style="vertical-align:middle;"/>Bank of East Asia 
                                </td>
                                <td width="151" style="border-top:solid 1px #E8E8E8;" align="left">0107978453 </td>
                                <td width="204" style="border-top:solid 1px #E8E8E8;border-right:solid 1px #E8E8E8;" align="left">HCM Exchange </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    <br>
                </div>
                <div class="custom-control custom-radio">
                    <tr>
                        <td valign="top"><?php echo $strDate; ?></td>
                        <td>
	                        <input type="text" id="datepicker" name="payment_date" placeholder="YYYY-DD-MM" required style="width:200px;" >
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><?php echo $strTime; ?></td>
                    <td>
                    <select name="hour">
                            <option value="00">00</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            </select> :
                    <select name="minute">
                            <option value="00">00</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                            </select>&nbsp;&nbsp; <?php echo $strMinute; ?>
                    </td>
                </tr>
              </div>
            </div>
            
            <div class="form-group">
                <label><b><?php echo $strUploadImage; ?></b></label>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="file" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
              <figure class="figure text-center d-none mt-2">
                  <img id="imgUpload" class="figure-img img-fluid rounded" alt="">
              </figure>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block " type="submit"><?php echo $strContinue; ?></button>
            <br>
<INPUT TYPE="hidden" NAME="save" value="1">
          </form>
        </div>
        
      </div>
          <center><img src="http://localhost/toy_shop/images/dollpayment.png" /></center>
          <article class="show post-105 page type-page status-publish hentry" style="color:black;">
                <h1 class="page-heading">
                    <img src="http://localhost/toy_shop/images/line.gif" /><img src="http://localhost/toy_shop/images/line.gif" />
                      <span class="page-heading-title2"><br><img src="http://localhost/toy_shop/images/bird0.png" /><?php echo $strPAYMENTGUIDe; ?><img src="http://localhost/toy_shop/images/bird.png" /></span>
                  </h1>
            <div class="entry-content">
      <p><strong><?php echo $strPaymentByinternet; ?></strong></p>
        <?php echo  $strPaymentHowto; ?>
        <?php echo $strPaymentCOD; ?>
      Email: <a href="mailto:songdep@sachkhaitam.com">songdep@sachkhaitam.com</a></p>
      <p>Telephone:&nbsp; <a href="tel:0873019777">08.7301.9777</a>- <a href="tel:0873016777">
      08.7301.6777</a></p>
              <img src="http://localhost/toy_shop/images/line.gif" /><img src="http://localhost/toy_shop/images/line.gif" /
			</div><!-- .entry-content -->
	</article>
    </div>


    
 
      


<?php include_once('includes/footer.php') ?>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcPIeXddlFIZmsRcAzYWTdfyBtY83Yl9c&callback=initMap"></script>
    <script src="assets/js/main.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- CK Editor -->
    <script src="../../plugins/ckeditor/ckeditor.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/select2.full.min.js"></script>

    <script>
    $(function () {
        $('#dataTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
        });

        $('.custom-file-input').on('change', function(){
            var fileName = $(this).val().split('\\').pop()
            $(this).siblings('.custom-file-label').html(fileName)
            if (this.files[0]) {
                var reader = new FileReader()
                $('.figure').addClass('d-block')
                reader.onload = function (e) {
                    $('#imgUpload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0])
            }
        })

        ClassicEditor
        .create(document.querySelector('#detail'))
        .then(function (editor) {
            // The editor instance
        })
        .catch(function (error) {
            console.error(error)
        })

        //Initialize Select2 Elements
        $('.select2').select2()

    });
    
    </script>




</body>
</html>





     

