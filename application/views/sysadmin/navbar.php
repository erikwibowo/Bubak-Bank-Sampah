<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li><!-- 
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= site_url() ?>" class="nav-link" style="font-weight: bold">LUWAKODE MEDIA UTAMA</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
         <a href="<?= site_url() ?>" target="_blank" class="nav-link" style="color: #7f7f7f; font-weight: bold">LUWAKODE MEDIA UTAMA</a>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="<?= base_url() ?>files/admin/thumb/<?= $this->session->userdata('foto_admin_thumb') ?>" alt="User profile picture">
            </div>

            <p class="profile-username text-center"><?= strtoupper($this->session->userdata('nama_admin')) ?></p>
            <p class="text-muted text-center" style="margin-top: -8px"><?= $this->session->userdata('level_admin'); ?></p>
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>PROJECT</b> <a class="float-right">1,322</a>
              </li>
            </ul>
            <center>
              <a href="<?= site_url('sysadmin/profil') ?>" class="btn btn-primary"><b>Profil</b></a>
              <a href="<?= site_url('sysadmin/logout') ?>" class="btn btn-danger pull-right"><b>Keluar</b></a>
            </center>
          </div>
          <!-- /.card-body -->
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="<?= base_url() ?>assets/admin/#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>