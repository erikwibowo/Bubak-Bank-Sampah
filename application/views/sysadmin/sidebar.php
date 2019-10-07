<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url() ?>assets/admin/index3.html" class="brand-link">
    <img src="<?= base_url() ?>files/<?= web_info('logo_website') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-bold"><?= web_info('nama_website') ?></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>files/admin/thumb/<?= $this->session->userdata('foto_admin_thumb') ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="<?= site_url('sysadmin') ?>" class="d-block"><?= strtoupper($this->session->userdata('nama_admin')) ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= site_url('sysadmin') ?>" class="nav-link <?= @$dashboard ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="<?= base_url('sysadmin/dashboard/tabel') ?>" class="nav-link <?= @$tabel ?>">
            <i class="nav-icon fas fa-table"></i>
            <p>Tabel</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('sysadmin/dashboard/form') ?>" class="nav-link <?= @$form ?>">
            <i class="nav-icon fas fa-edit"></i>
            <p>Form</p>
          </a>
        </li> -->
        <?php foreach ($this->Mmenu->readParentHakAkses($this->session->userdata('id_level_admin'))->result() as $key){
          if ($key->type_menu == "S") { ?>
            <li class="nav-item">
              <a href="<?= site_url('sysadmin/'.$key->url_menu) ?>" class="nav-link <?= $this->uri->segment(2) == $key->url_menu ? 'active':'' ?>">
                <i class="nav-icon <?= $key->icon_menu ?>"></i>
                <p><?= $key->nama_menu ?></p>
              </a>
            </li>
        <?php }else{ ?>
          <li class="nav-item has-treeview-<?= $key->url_menu ?> <?= $this->uri->segment(3) == $key->url_menu ? 'menu-open':'' ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas <?= $key->icon_menu ?>"></i>
              <p>
                <?= $key->nama_menu ?>
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right"><?= $this->Mmenu->readChild($key->id_menu)->num_rows() ?></span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php foreach ($this->Mmenu->readChildHakAkses($this->session->userdata('id_level_admin'), $key->id_menu)->result() as $sub): ?>
                <li class="nav-item">
                  <?php if ($this->uri->segment(2) == $sub->url_menu){
                    $active = "active"; ?>
                    <script type="text/javascript">
                      $('.has-treeview-<?= $key->url_menu ?>').addClass('menu-open');
                    </script>
                  <?php }else{
                    $active = ""; ?>
                  <?php } ?>
                  <a href="<?= site_url('sysadmin/'.$sub->url_menu) ?>" class="nav-link <?= $active ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?= $sub->nama_menu ?></p>
                  </a>
                </li>
              <?php endforeach ?>
            </ul>
          </li>
        <?php } } ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>