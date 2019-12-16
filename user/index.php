<!DOCTYPE html>
<html>

<head>
  <?php
  include '../layout/head.php';
  ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <?php
    include '../layout/header.php'
    ?>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <?php include '../layout/leftsidebar.php' ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data User
          <small>Manajemen data user</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="../index.php"><i class="fa fa-home"></i> Beranda</a></li>
          <li class="active"><i class="fa fa-user"></i>User</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <a href="create.php" class="btn btn-sm btn-primary">
              <i class="fa fa-plus"> Tambah</i>
            </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-striped">
              <tr>
                <th style="width: 10px">No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
              <?php
              include '../koneksi.php';
              $nomor = 1;
              $sql = "SELECT * FROM users";
              $results = mysqli_query($connect, $sql);
              if (mysqli_num_rows($results)) {
                while ($row = mysqli_fetch_assoc($results)) {
              ?>
                  <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                      <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-info btn-s">Edit</a>
                      <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-s" onclick="javascript:return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                  </tr>
              <?php
                                          }
                                        }
              ?>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.18
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <?php include '../layout/controlsidebar.php' ?>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="../adminlte/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="../adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../adminlte/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../adminlte/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../adminlte/dist/js/demo.js"></script>
  <script>
    $(document).ready(function() {
      $('.sidebar-menu').tree()
    })
  </script>
</body>

</html>