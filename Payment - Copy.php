
<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
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
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <style>body{font-family: 'Prompt', sans-serif;}</style>
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">

    <title>PAYMENT</title>
  
</head>
<body>
  
<!-- Section navbar -->
    <?php include_once('includes/navbar.php')?>

<!-- Section Page-Title -->
    <header class="jarallax" data-speed="0.5"  style="background-image: url('https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=667&q=804');">
        <div class="page-image">
            <h1 class="display-4">PAYMENT</h1>
            <p class=" lead">   </p>
        </div>
    </header>


<!-- Section PAYMENT -->
<div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>PAYMENT</h2>
        <p class="lead"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora commodi impedit tenetur beatae quibusdam sed, ab aperiam, blanditiis alias enim porro quis repudiandae magnam debitis eum accusamus temporibus labore corporis!
        Vel saepe esse sapiente exercitationem ab labore temporibus assumenda cupiditate id beatae? Nostrum rerum accusantium reiciendis vitae architecto ipsa officia odio. Nesciunt veritatis distinctio et doloremque eveniet illo numquam repudiandae.
        Neque harum animi totam corporis sint rerum porro repellat nesciunt corrupti soluta. Odio cumque consequuntur officia alias beatae, nulla saepe exercitationem ut! Excepturi nam numquam nisi soluta doloribus aperiam aspernatur. </p>
      </div>
        
      <div class="row">
        
        <div class="col-md-8 order-md-1 ">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <tr>
                        <td valign="top">ธนาคารที่ชำระเงิน</td>
                    <td> 
                        <table width="100%" border="0" cellspacing="0" cellpadding="7">
                            <tr style="background-image:url(images/menu_white.png);">
                                <td width="25" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <input name="bank_pay" type="radio" value="ธนาคารไทยพาณิชย์ ###-######-#" >
                                </td>
                                <td width="186" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                                    <img src="http://www.sktwebdesign.com/images/icon_scb.gif" width="20" height="20" style="vertical-align:middle;"/>ธนาคารไทยพาณิชย์ 
                                </td>
                                <td width="151" style="border-top:solid 1px #E8E8E8;" align="left">###-######-#</td>
                                <td width="204" style="border-top:solid 1px #E8E8E8;border-right:solid 1px #E8E8E8;" align="left">ชื่อบัญชี</td>
                            </tr>
                            <tr style="background-image:url(images/menu_white.png);">
                        <td width="25" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                        <input name="bank_pay" type="radio" value="ธนาคารกสิกรไทย 025-8-426347" >
                            </td>
                            <td width="186" style="border-top:solid 1px #E8E8E8;border-left:solid 1px #E8E8E8;">
                            <img src="http://www.sktwebdesign.com/images/icon_ksb.gif" width="20" height="20" style="vertical-align:middle;"/>
                        ธนาคารกสิกรไทย    </td>
                            <td width="151" style="border-top:solid 1px #E8E8E8;" align="left">###-######-#</td>
                            <td width="204" style="border-top:solid 1px #E8E8E8;border-right:solid 1px #E8E8E8;" align="left">ชื่อบัญชี</td>
                        </tr>
                        </table>
                        </td>
                    </tr>
                    <br>
                </div>
                <div class="custom-control custom-radio">
                    <tr>
                        <td valign="top">วันที่โอน</td>
                        <td>
	                        <input type="text" id="datepicker" name="payment_date" placeholder="YYYY-DD-MM" required style="width:200px;" >
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">เวลาที่โอน</td>
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
                            </select>&nbsp;&nbsp;นาฬิกา
                    </td>
                </tr>
              </div>
            </div>
            
            <div class="form-group">
              <label>Upload Image</label>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="file" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
              <figure class="figure text-center d-none mt-2">
                  <img id="imgUpload" class="figure-img img-fluid rounded" alt="">
              </figure>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block " type="submit">Continue to checkout</button>
            <br>
          </form>
        </div>
        
      </div>
    </div>


    
 
      


<!-- Section Abous -->
<!-- Section footer -->
    <?php include_once('includes/footer.php')?>
<!-- section on to top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>


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





     

