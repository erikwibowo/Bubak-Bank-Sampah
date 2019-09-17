<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/fontawesome-free/css/all.css">
  <!-- Font Awesome Picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/fontawesomepicker/css/fontawesome-iconpicker.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/datatables/dataTables.bootstrap4.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/sweetalert2/sweetalert2.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/select2/css/select2.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- jQuery -->
  <script src="<?= base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url() ?>assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('sysadmin/navbar'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('sysadmin/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $subtitle ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
              <?php
                if (@$jumlah >= 1) {
                  for ($i=1; $i <= $jumlah ; $i++) {
                    if ($i == 1) { ?>
                      <li class="breadcrumb-item <?= $jumlah == $i ? "active":"" ?>"><a href="<?= $b1a ?>"> <?= $b1 ?></a></li>
                  <?php }elseif($i == 2){ ?>
                      <li class="breadcrumb-item <?= $jumlah == $i ? "active":"" ?>"><a href="<?= $b2a ?>"> <?= $b2 ?></a></li>
                  <?php }elseif($i == 3){ ?>
                      <li class="breadcrumb-item <?= $jumlah == $i ? "active":"" ?>"><a href="<?= $b3a ?>"> <?= $b3 ?></a></li>
                  <?php }elseif($i == 4){ ?>
                      <li class="breadcrumb-item <?= $jumlah == $i ? "active":"" ?>"><a href="<?= $b4a ?>"> <?= $b4 ?></a></li>
                  <?php }elseif($i == 5){ ?>
                      <li class="breadcrumb-item <?= $jumlah == $i ? "active":"" ?>"><a href="<?= $b5a ?>"> <?= $b5 ?></a></li>
                  <?php }elseif($i == 6){ ?>
                      <li class="breadcrumb-item <?= $jumlah == $i ? "active":"" ?>"><a href="<?= $b6a ?>"> <?= $b6 ?></a></li>
                  <?php }elseif($i == 7){ ?>
                      <li class="breadcrumb-item <?= $jumlah == $i ? "active":"" ?>"><a href="<?= $b7a ?>"> <?= $b7 ?></a></li>
                  <?php } } } ?>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php $this->load->view('sysadmin/content'); ?>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('sysadmin/footer'); ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- DataTables -->
<script src="<?= base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- Font Awesome Picker -->
<script src="<?= base_url() ?>assets/admin/plugins/fontawesomepicker/js/fontawesome-iconpicker.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url() ?>assets/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/admin/plugins/select2/js/select2.full.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>assets/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/admin/plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/admin/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>assets/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/admin/dist/js/demo.js"></script>
<?php if (!empty($this->session->flashdata('notif'))) { ?>
  <script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
      });
      Toast.fire({
          type: '<?= $this->session->flashdata('type') ?>',
          title: '<?= $this->session->flashdata('notif') ?>'
        });
    });
  </script>
<?php } ?>
<script type="text/javascript">
    $('.icp-auto').iconpicker();
    $(function() {
      $(".datatable").DataTable();
      $('.select2').select2();
    });
</script>
<script>
    /** tambah class active jika di klik */
    var url = window.location;
    // ini untuk menambahkan class active pada menu yg tidak memiliki anak atau single link
    $('ul.sidebar-menu a').filter(function() {
     return this.href == url;
    }).parent().addClass('active');
    // ini untuk menu beranak, jadi otomatis akan terbuka sesuai dengan link tujuan
    $('ul.treeview-menu a').filter(function() {
     return this.href == url;
    }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
</script>
</body>
</html>
