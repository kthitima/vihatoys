<?php include_once('../authen.php'); 
  $sql = "SELECT * FROM `questionnaire` order by questionnaire_id desc";
  $result = $conn->query($sql);
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
            <h1>Questionnaire</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Questionnaire</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title d-inline-block">Questionnaire</h3>
          <!-- <a href="form-create.php" class="btn btn-primary float-right ">Add Articles +</a href=""> -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
<TABLE border="0" width="100%" style="display: block;overflow-x:auto;"><tr><td>
<BR><table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th rowspan="4">No.</th>
              <th rowspan="2" colspan="4">Section 1</th>
              <th colspan="14">Section 2</th>
            </tr>
            <tr>
              <th colspan="8">Section 2.1</th>
              <th colspan="5">Section 2.2</th>
              <th>Section 2.3</th>
            </tr>
            <tr>
              <th>Gender</th>
              <th>Age</th>
              <th>Education</th>
              <th>Salary</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>6</th>
              <th>7</th>
              <th>8</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>1</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetch_assoc()) { 
              //echo print_r($base_path_products);
              ?>
              <tr>
                <td><?php echo $row['questionnaire_id'] ?>&nbsp;
				<a href="#" onclick="deleteItem(<?php echo $row['questionnaire_id']; ?>);" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i> Delete
                </a></td>
                <td><?php echo $row['a_1'] ?></td>
                <td><?php echo $row['a_2'] ?></td>
                <td><?php echo $row['a_3'] ?></td>
                <td><?php echo $row['a_4'] ?></td>
                <td><?php echo $row['a_5'] ?></td>
                <td><?php echo $row['a_6'] ?></td>
                <td><?php echo $row['a_7'] ?></td>
                <td><?php echo $row['a_8'] ?></td>
                <td><?php echo $row['a_9'] ?></td>
                <td><?php echo $row['a_10'] ?></td>
                <td><?php echo $row['a_11'] ?></td>
                <td><?php echo $row['a_12'] ?></td>
                <td><?php echo $row['a_13'] ?></td>
                <td><?php echo $row['a_14'] ?></td>
                <td><?php echo $row['a_15'] ?></td>
                <td><?php echo $row['a_16'] ?></td>
                <td><?php echo $row['a_17'] ?></td>
                <td><?php echo $row['a_18'] ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
</TD></TR></TABLE>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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
  });

  function deleteItem (id) { 
    if( confirm('Are you sure, you want to delete this item?') == true){
      window.location=`delete.php?id=${id}`;
      // window.location='delete.php?id='+id;
    }
  };

</script>

</body>
</html>
