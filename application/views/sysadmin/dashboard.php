<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>150</h3>

        <p>New Orders</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="<?= base_url() ?>assets/admin/#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>53<sup style="font-size: 20px">%</sup></h3>

        <p>Bounce Rate</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="<?= base_url() ?>assets/admin/#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>44</h3>

        <p>User Registrations</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="<?= base_url() ?>assets/admin/#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>65</h3>

        <p>Unique Visitors</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="<?= base_url() ?>assets/admin/#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
            <form role="form">
               <div class="form-group">
                  <label>Nasabah</label>
                  <select class="form-control select2" style="width: 100%;">
                     <option>Nama Nasabah</option>
                  </select>
               </div>
               <div class="form-group">
                  <label>Jenis Transaksi</label>
                  <select class="form-control select2" style="width: 100%;">
                     <option value="Debet">Debet</option>
                     <option value="Kredit">Kredit</option>
                  </select>
               </div>
               <div class="form-group">
                  <label>Jenis Sampah</label>
                  <select class="form-control select2" style="width: 100%;">
                     <option>Jenis Sampah</option>
                  </select>
               </div>
               <div class="form-group">
                  <label>Berat Sampah (Kg)</label>
                  <input placeholder="Berat Sampah dalam Kg" class="form-control icp icp-auto" value="" type="text"/>
               </div>
               <div class="form-group">
                  <label>Nominal Transaksi</label>
                  <input placeholder="Nominal Transaksi" readonly class="form-control icp icp-auto" value="" type="text"/>
               </div>
               <div class="form-group">
                  <label>Deskripsi transaksi</label>
                  <textarea placeholder="Ketikkan deskripsi transaksi di sini" class="form-control"></textarea>
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