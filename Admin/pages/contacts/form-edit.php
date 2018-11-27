<?php 
  include_once('../authen.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM `contact` WHERE `id` = '".$id."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Articles Management</title>
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
            <h1>Articles Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="../articles">Articles Management</a></li>
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
        <h3 class="card-title">Create Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="update.php" method="post">
          <div class="card-body">
          <div class="form-group">
              <!-- <label for="subject">Product ID</label> -->
              <input type="hidden" name="contact_id" value="<?php echo $row['id']?>"><?php echo $row['id']?>
            </div>
            
            <div class="form-group">
              <label for="subject">Address</label>
              <input type="text" class="form-control"  name="name" placeholder="<?php echo $row['name'] ?>" value="<?php echo $row['name'] ?>">
            </div>

            <div class="form-group">
              <label for="sub_title">Phone</label>
              <input type="text" class="form-control"  name="phone" placeholder="<?php echo $row['phone'] ?>" value="<?php echo $row['phone'] ?>">
            </div>

            
            <div class="form-group">
              <label for="sub_title">Email</label>
              <input type="text" class="form-control"  name="email" placeholder="<?php echo $row['email'] ?>" value="<?php echo $row['email'] ?>">
            </div>

            <div class="form-group">
              <label for="sub_title">Detail</label>
              <input type="text" class="form-control"  name="detail" placeholder="<?php echo $row['datail'] ?>" value="<?php echo $row['datail'] ?>">
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
  
</script>

</body>
</html>
