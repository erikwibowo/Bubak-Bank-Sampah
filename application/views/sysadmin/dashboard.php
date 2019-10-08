<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $jnasabah ?></h3>

        <p>Nasabah</p>
      </div>
      <div class="icon">
        <i class="fa fa-users"></i>
      </div>
      <a href="<?= site_url('sysadmin/nasabah') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3><?= $jtransaksi ?></h3>

        <p>Transaksi</p>
      </div>
      <div class="icon">
        <i class="fa fa-exchange-alt"></i>
      </div>
      <a href="<?= site_url('sysadmin/transaksi') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?= $jdebet ?></h3>

        <p>Debet</p>
      </div>
      <div class="icon">
        <i class="fa fa-download"></i>
      </div>
      <a href="<?= site_url('sysadmin/transaksi') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3><?= $jkredit ?></h3>

        <p>Kredit</p>
      </div>
      <div class="icon">
        <i class="fa fa-upload"></i>
      </div>
      <a href="<?= site_url('sysadmin/transaksi') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->
<div class="row">
   <div class="col-lg-6 col-md-6 col-6">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Form Transaksi Bank Sampah</h3>
         </div>
         <div class="card-body table-responsive">
            <form role="form" method="post" action="<?= site_url('sysadmin/transaksi/create') ?>">
               <div class="form-group">
                  <label>Nasabah</label>
                  <select name="id_nasabah" class="form-control select2" style="width: 100%;">
                     <?php foreach ($nasabah as $key): ?>
                        <option value="<?= $key->id_nasabah ?>"><?= $key->nik_nasabah.' - '.$key->nama_nasabah ?></option>
                     <?php endforeach ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>Jenis Transaksi</label>
                  <select name="jenis_transaksi" class="form-control select2" style="width: 100%;">
                     <option value="Debet">Debet</option>
                     <option value="Kredit">Kredit</option>
                  </select>
               </div>
               <div class="form-group">
                  <label>Jenis Sampah</label>
                  <select name="id_jenis_sampah" id="id_jenis_sampah" class="form-control select2" style="width: 100%;">
                     <?php foreach ($jenis_sampah as $key): ?>
                        <option data="<?= $key->harga_per_kilo ?>" value="<?= $key->id_jenis_sampah ?>"><?= $key->nama_jenis_sampah.' - '.$key->harga_per_kilo ?></option>
                     <?php endforeach ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>Berat Sampah (Kg)</label>
                  <input required id="jumlah_sampah" name="jumlah_sampah" placeholder="Berat Sampah dalam Kg" class="form-control icp icp-auto" value="" type="text"/>
               </div>
               <div class="form-group">
                  <label>Nominal Transaksi</label>
                  <input required id="nominal_transaksi" name="nominal_transaksi" placeholder="Nominal Transaksi" readonly class="form-control icp icp-auto" value="" type="text"/>
               </div>
               <script type="text/javascript">
                  $(document).ready(function() {
                     $("#jumlah_sampah").on('input', function() {
                        var harga = $('#id_jenis_sampah').find(':selected').attr('data');
                        var berat = $('#jumlah_sampah').val();
                        console.log(harga);
                        hitung_nominal(harga, berat);
                     });

                     function hitung_nominal(jenis_sampah, berat) {
                        $('#nominal_transaksi').val(jenis_sampah*berat);
                     }
                 });
               </script>
               <div class="form-group">
                  <label>Deskripsi transaksi</label>
                  <textarea required name="deskripsi_transaksi" placeholder="Ketikkan deskripsi transaksi di sini" class="form-control"></textarea>
                  <input type="hidden" name="id_admin" value="<?= $this->session->userdata('id_admin'); ?>">
               </div>
         </div>
         <div class="card-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
         </form>
         </div>
      </div>
   </div>
   <div class="col-lg-6">
      <div class="card">
        <div class="card-header no-border">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Transaksi</h3>
            <a href="javascript:void(0);">Lihat Laporan</a>
          </div>
        </div>
        <div class="card-body">
            <div class="chart">
               <canvas id="barChart" style="height: 165px; width: 360px;" width="360" height="165"></canvas>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js" integrity="sha256-qSIshlknROr4J8GMHRlW3fGKrPki733tLq+qeMCR05Q=" crossorigin="anonymous"></script>
            <script>
            var ctx = document.getElementById('barChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['jan', 'feb', 'mar', 'apr'],
                    datasets: [{
                        label: '# Tahun 2019',
                        data: ['21', '27', '54', '32'],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>
        </div>
      </div>
      <!-- /.card -->

      <div class="card">
        <div class="card-header no-border">
          <h3 class="card-title">Online Store Overview</h3>
          <div class="card-tools">
            <a href="#" class="btn btn-sm btn-tool">
              <i class="fas fa-download"></i>
            </a>
            <a href="#" class="btn btn-sm btn-tool">
              <i class="fas fa-bars"></i>
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
            <p class="text-success text-xl">
              <i class="ion ion-ios-refresh-empty"></i>
            </p>
            <p class="d-flex flex-column text-right">
              <span class="font-weight-bold">
                <i class="ion ion-android-arrow-up text-success"></i> 12%
              </span>
              <span class="text-muted">CONVERSION RATE</span>
            </p>
          </div>
          <!-- /.d-flex -->
          <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
            <p class="text-warning text-xl">
              <i class="ion ion-ios-cart-outline"></i>
            </p>
            <p class="d-flex flex-column text-right">
              <span class="font-weight-bold">
                <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
              </span>
              <span class="text-muted">SALES RATE</span>
            </p>
          </div>
          <!-- /.d-flex -->
          <div class="d-flex justify-content-between align-items-center mb-0">
            <p class="text-danger text-xl">
              <i class="ion ion-ios-people-outline"></i>
            </p>
            <p class="d-flex flex-column text-right">
              <span class="font-weight-bold">
                <i class="ion ion-android-arrow-down text-danger"></i> 1%
              </span>
              <span class="text-muted">REGISTRATION RATE</span>
            </p>
          </div>
          <!-- /.d-flex -->
        </div>
      </div>
   </div>
</div>