<?php 
  include_once('../authen.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM `products` WHERE `id` = '".$id."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Product</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <!-- <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png"> -->
  <!-- <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png"> -->
  <!-- <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png"> -->
  <!-- <link rel="manifest" href="../../dist/img/favicons/site.webmanifest"> -->
  <!-- <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5"> -->
  <!-- <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico"> -->
  <!-- <meta name="msapplication-TileColor" content="#da532c"> -->
  <!-- <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml"> -->
  <!-- <meta name="theme-color" content="#ffffff"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="../articles">Edit Product</a></li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit  Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="update.php" method="post" enctype="multipart/form-data">
          <div class="card-body">
          <div class="form-group">
              <label for="subject">Product ID</label>
              <input type="hidden" name="product_id" value="<?php echo $row['id']?>"><?php echo $row['id']?>
            </div>

              <div class="form-group">              
              <p>Upload your file</p>
              <input type="file" name="uploaded_file" required >
              </div>

            <div class="form-group">
              <label for="subject">Product Name</label>
              <input type="text" class="form-control" id="subject" name="product_name" placeholder="<?php echo $row['product_name'] ?>" value="<?php echo $row['product_name'] ?>" required>
            </div>

            <div class="form-group">
              <label for="sub_title">Product Code</label>
              <input type="text" class="form-control" id="sub_title" name="product_code" placeholder="<?php echo $row['product_code'] ?>" value="<?php echo $row['product_code'] ?>" required>
            </div>

            <div class="form-group">
              <label for="sub_title">Price (VND)</label>
              <input type="number" class="form-control" id="sub_title" name="price" placeholder="<?php echo $row['price'] ?>" value="<?php echo $row['price'] ?>" required>
            </div>

            <div class="form-group">
              <label for="sub_title">Quantity of products</label>
              <input type="number" class="form-control" id="sub_title" name="Quantity of products" placeholder="<?php echo $row['qty'] ?>" value="<?php echo $row['qty'] ?>" required>
            </div>

           <div class="form-group">
                <label for="sub_title">Product Desc</label>
                  <textarea rows="6" cols="100" name="product_desc" placeholder="<?php echo $row['product_desc'] ?>" value="<?php echo $row['product_desc'] ?>" required></textarea>
            </div>
            
            
            <div class="form-group">
              <label>Select a Tags</label>
              <select class="form-control select2" multiple="multiple"  data-placeholder="Select a Tags" style="width: 100%;" name="tag[]">
                <option value="all">all product</option>
                <option value="1">Toys for education</option>
                <option value="2">Toys for intelligence development</option>
                <option value="3">Toys for career development</option>
                <option value="4">Toys for exercise</option>
                <option value="5">Toys for remote control</option>
                <option value="6">Toys for babies</option>
                <option value="7">Toys for boys</option>
                <option value="8">Toys for girls</option>
                <option value="9">Music toys</option>
                <option value="10">Other products</option>
              </select>
            </div>

          </div>
          <div class="card-footer">
              <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
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
  
  function readURL(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
        reader.onload = function (e) {
          $('#profile-img-tag').attr('src', e.target.result);
             }
           reader.readAsDataURL(input.files[0]);
          }
        }
      $("#profile-img").change(function(){
             readURL(this);
  });
</script>

</body>
</html>
