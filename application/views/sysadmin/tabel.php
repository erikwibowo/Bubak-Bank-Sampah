<?php if ($content == "tabel") { ?>
	<div class="row">
        <div class="col-12">
        	<div class="card">
	            <div class="card-header">
					<div class="btn-group pull-right">
						<a href="#" tooltip class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i> Tambah</a>
						<a href="#" tooltip class="btn btn-sm btn-info"><i class="fas fa-print"></i> Print</a>
						<a href="#" tooltip class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
					</div>
	            </div>
	            <!-- Modal Tambah Data -->
	            <div class="modal" id="modal-default">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Tambah Data</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form role="form">
									<div class="form-group">
										<label>Email address</label>
										<input type="email" class="form-control" placeholder="Enter email">
									</div>
									<div class="form-group">
				                        <label>Default</label>
				                        <input class="form-control icp icp-auto" value="" type="text"/>
				                    </div>
									<div class="form-group">
										<label>Alamat</label>
										<textarea class="form-control"></textarea>
									</div>
									<div class="form-group">
									<label>Minimal</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected">Alabama</option>
											<option>Alaska</option>
											<option>California</option>
											<option>Delaware</option>
											<option>Tennessee</option>
											<option>Texas</option>
										<option>Washington</option>
										</select>
									</div>
									<div class="form-group">
										<label>File</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file">
											</div>
										</div>
									</div>
							</div>
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
								</form>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.Modal Tambah Data -->
            	<!-- /.card-header -->
            	<div class="card-body table-responsive">
            		<table class="table datatable table-bordered table-hover">
	                	<thead>
			                <tr>
								<th>Rendering engine</th>
								<th>Browser</th>
								<th>Platform(s)</th>
								<th>Engine version</th>
								<th>CSS grade</th>
			                </tr>
	                	</thead>
	                	<tbody>
			                <tr>
								<td>Trident</td>
								<td>Internet
								Explorer 4.0
								</td>
								<td>Win 95+</td>
								<td> 4</td>
								<td>X</td>
			                </tr>
	                	</tbody>
              		</table>
            	</div>
            	<!-- /.card-body -->
          	</div>
          	<!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
<?php } ?>

<?php if ($content == "menu") { ?>
	<div class="row">
        <div class="col-12">
        	<div class="card">
	            <div class="card-header">
					<div class="btn-group pull-right">
						<a href="#" tooltip class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i> Tambah</a>
						<a href="#" tooltip class="btn btn-sm btn-info"><i class="fas fa-print"></i> Print</a>
						<a href="#" tooltip class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
					</div>
	            </div>
	            <!-- Modal Tambah Data -->
	            <div class="modal" id="modal-default">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Tambah Data</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" action="<?= site_url('sysadmin/menu/create') ?>">
									<div class="form-group">
										<input type="text" name="nama_menu" class="form-control" autofocus required placeholder="Nama Menu">
									</div>
									<div class="form-group">
				                        <input type="text" name="icon_menu" class="form-control" required placeholder="Icon Menu">
				                    </div>
									<div class="form-group">
				                        <input type="text" name="url_menu" class="form-control" required placeholder="URL Menu">
				                    </div>
									<div class="form-group">
										<select id="tipe_menu" name="type_menu" class="form-control select2" required style="width: 100%;">
											<option value="P">Parent</option>
											<option value="S">Single</option>
											<option value="C">Child</option>
										</select>
										<script type="text/javascript">
											$(document).ready(function(){
												$('#parent').hide();
												$('#tipe_menu').on('change', function() {
													var val = $(this).val();
													if (val == "C") {
														$('#parent').show(400);
													}else{
														$('#parent').hide(400);
													}
												});
											});
										</script>
									</div>
									<div class="form-group" id="parent">
										<select class="form-control select2" name="parent" style="width: 100%;">
											<option value="0">-- Pilih Parent --</option>
											<?php foreach ($data as $men){ ?>
												<option value="<?= $men->id_menu ?>"><?= $men->nama_menu ?></option>
											<?php } ?>
										</select>
									</div>
							</div>
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
								</form>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.Modal Tambah Data -->
            	<!-- /.card-header -->
            	<div class="card-body table-responsive">
            		<table class="table table-bordered table-hover">
	                	<thead>
			                <tr>
								<th>MENU</th>
								<th>ICON</th>
								<th>URL</th>
								<th>TIPE</th>
								<th>PARENT</th>
								<th>AKSI</th>
			                </tr>
	                	</thead>
	                	<tbody>
	                		<?php foreach ($data as $key){ ?>
				                <tr style="font-weight: bold;">
									<td><?= $key->nama_menu ?></td>
									<td><i class="<?= $key->icon_menu ?>"></i></td>
									<td><?= $key->url_menu ?></td>
									<td>
										<?php if ($key->type_menu == "P"){ ?>
											Parent
										<?php }elseif ($key->type_menu == "S") { ?>
											Single
										<?php }elseif ($key->type_menu == "C") { ?>
											Child
										<?php } ?>
									</td>
									<td>-</td>
									<td>
										<div class="btn-group pull-right">
											<a href="javascript:;" class="btn btn-sm btn-info item-edit" data="<?= $key->id_menu ?>"><i class="fas fa-eye"></i></a>
											<a href="javascript:;" class="btn btn-sm btn-danger item-delete" data="<?= $key->id_menu ?>" row="<?= $key->nama_menu ?>"><i class="fas fa-trash"></i></a>
										</div>
									</td>
				                </tr>
				                <?php if ($key->type_menu == "P"){ ?>
				                	<?php foreach ($this->Mmenu->readChild($key->id_menu)->result() as $sub){ ?>
				                		<tr style="padding-left: 20px">
											<td><?= $sub->nama_menu ?></td>
											<td><i class="far fa-circle"></i></td>
											<td><?= $sub->url_menu ?></td>
											<td>
												<?php if ($sub->type_menu == "P"){ ?>
													Parent
												<?php }elseif ($sub->type_menu == "S") { ?>
													Single
												<?php }elseif ($sub->type_menu == "C") { ?>
													Child
												<?php } ?>
											</td>
											<td><?= $key->nama_menu ?></td>
											<td>
												<div class="btn-group pull-right">
													<a href="javascript:;" class="btn btn-sm btn-info item-edit" data="<?= $sub->id_menu ?>"><i class="fas fa-eye"></i></a>
													<a href="javascript:;" class="btn btn-sm btn-danger item-delete" data="<?= $sub->id_menu ?>" row="<?= $key->nama_menu ?>"><i class="fas fa-trash"></i></a>
												</div>
											</td>
						                </tr>
				                	<?php } ?>
				                <?php } ?>
	                		<?php } ?>
	                	</tbody>
              		</table>
              		<script type="text/javascript">
              			$(document).ready(function(){
              				$('.item-delete').on('click', function() {
								var id = $(this).attr('data');
								var data = $(this).attr('row');
								var link = '<?= site_url('sysadmin/menu/delete/') ?>'+id;
								$('#modal-delete').modal({backdrop: 'static', keyboard: false});
					            $('#modal-delete').modal('show');
					            $('.modal-body.delete').text('Apakah anda yakin akan menghapus menu "'+data+'"? Jika menu memiliki child akan terhapus juga.');
					            $('#link-delete').attr('href', link);
							});

							$('.item-edit').on('click', function() {
								var id = $(this).attr('data');
								$.ajax({
					                type : "POST",
					                url  : "<?= site_url('sysadmin/menu/data-menu') ?>",
					                dataType : "JSON",
					                data : {id:id},
					                success: function(data){
					                	//console.log(data);
					                	console.log(data[0].type_menu);
					                	$('#modal-edit').modal({backdrop: 'static', keyboard: false});
					                	$('#modal-edit').modal('show');
					                	$('#nama_menu').val(data[0].nama_menu);
					                	$('#icon_menu').val(data[0].icon_menu);
					                	$('#url_menu').val(data[0].url_menu);
					                	$('#nama_menu').val(data[0].nama_menu);
					                	$('#id_menu').val(data[0].id_menu);
					                	if (data[0].type_menu == "C") {
					                		$('#parent2').show(400);
					                	}else{
					                		$('#parent2').hide(400);
					                	}
					                	$('#tipe_menu2').val(data[0].type_menu);
					                	$('#parentt').val(data[0].parent);
					                }
					            });
							});
						});
					var id = $(this).attr('data');
              		</script>
              		<!-- Modal Hapus Data -->
		            <div class="modal" id="modal-delete">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Hapus Data</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body delete">
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
									<a href="" id="link-delete" class="btn btn-danger">Hapus</a>
									</form>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.Modal Hapus Data -->
              		<!-- Modal Edit Data -->
		            <div class="modal" id="modal-edit">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit Data</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form method="POST" action="<?= site_url('sysadmin/menu/update') ?>">
										<div class="form-group">
											<input type="text" id="nama_menu" name="nama_menu" class="form-control" autofocus required placeholder="Nama Menu">
											<input type="hidden" id="id_menu" name="id_menu" class="form-control" required placeholder="ID Menu">
										</div>
										<div class="form-group">
					                        <input type="text" id="icon_menu" name="icon_menu" class="form-control" required placeholder="Icon Menu">
					                    </div>
										<div class="form-group">
					                        <input type="text" id="url_menu" name="url_menu" class="form-control" required placeholder="URL Menu">
					                    </div>
										<div class="form-group">
											<select id="tipe_menu2" name="type_menu" class="form-control" required style="width: 100%;">
												<option value="P">Parent</option>
												<option value="S">Single</option>
												<option value="C">Child</option>
											</select>
											<script type="text/javascript">
												$(document).ready(function(){
													$('#tipe_menu2').on('change', function() {
														var val = $(this).val();
														if (val == "C") {
															$('#parent2').show(400);
														}else{
															$('#parent2').hide(400);
														}
													});
												});
											</script>
										</div>
										<div class="form-group" id="parent2">
											<select class="form-control" id="parentt" name="parent" style="width: 100%;">
												<option value="0">-- Pilih Parent --</option>
												<?php foreach ($data as $men){ ?>
													<option value="<?= $men->id_menu ?>"><?= $men->nama_menu ?></option>
												<?php } ?>
											</select>
										</div>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
									<button type="submit" class="btn btn-primary">Simpan</button>
									</form>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.Modal Edit Data -->
            	</div>
            	<!-- /.card-body -->
          	</div>
          	<!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
<?php } ?>

<?php if ($content == "level-admin") { ?>
	<div class="row">
        <div class="col-12">
        	<div class="card">
	            <div class="card-header">
					<div class="btn-group pull-right">
						<a href="#" tooltip class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus"></i> Tambah</a>
						<a href="#" tooltip class="btn btn-sm btn-info"><i class="fas fa-print"></i> Print</a>
						<a href="#" tooltip class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
					</div>
	            </div>
	            <!-- Modal Tambah Data -->
	            <div class="modal" id="modal-tambah">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Tambah Data</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" action="<?= site_url('sysadmin/level-admin/create') ?>">
									<div class="form-group">
										<input type="text" name="nama_level_admin" class="form-control" autofocus required placeholder="Level Admin">
									</div>
							</div>
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
								</form>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.Modal Tambah Data -->
            	<!-- /.card-header -->
            	<div class="card-body table-responsive">
            		<table class="table datatable table-bordered table-hover">
	                	<thead>
			                <tr>
								<th>No.</th>
								<th>MENU</th>
								<th>AKSI</th>
			                </tr>
	                	</thead>
	                	<tbody>
	                		<?php $no = 1; foreach ($data as $key){ ?>
				                <tr>
				                	<td><?= $no++ ?></td>
									<td><?= $key->nama_level_admin ?></td>
									<td>
										<div class="btn-group pull-right">
											<a href="javascript:;" class="btn btn-sm btn-info item-edit" data="<?= $key->id_level_admin ?>"><i class="fas fa-eye"></i></a>
											<a href="javascript:;" class="btn btn-sm btn-danger item-delete" data="<?= $key->id_level_admin ?>" row="<?= $key->nama_level_admin ?>"><i class="fas fa-trash"></i></a>
										</div>
									</td>
				                </tr>
	                		<?php } ?>
	                	</tbody>
              		</table>
              		<script type="text/javascript">
              			$(document).ready(function(){
              				$('.item-delete').on('click', function() {
								var id = $(this).attr('data');
								var data = $(this).attr('row');
								var link = '<?= site_url('sysadmin/level-admin/delete/') ?>'+id;
								$('#modal-delete').modal({backdrop: 'static', keyboard: false});
					            $('#modal-delete').modal('show');
					            $('.modal-body.delete').text('Apakah anda yakin akan menghapus level admin "'+data+'"?');
					            $('#link-delete').attr('href', link);
							});

							$('.item-edit').on('click', function() {
								var id = $(this).attr('data');
								$.ajax({
					                type : "POST",
					                url  : "<?= site_url('sysadmin/level-admin/data-level') ?>",
					                dataType : "JSON",
					                data : {id:id},
					                success: function(data){
					                	//console.log(data);
					                	$('#modal-edit').modal({backdrop: 'static', keyboard: false});
					                	$('#modal-edit').modal('show');
					                	$('#nama_level_admin').val(data[0].nama_level_admin);
					                	$('#id_level_admin').val(data[0].id_level_admin);
					                }
					            });
							});
						});
					var id = $(this).attr('data');
              		</script>
              		<!-- Modal Hapus Data -->
		            <div class="modal" id="modal-delete">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Hapus Data</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body delete">
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
									<a href="" id="link-delete" class="btn btn-danger">Hapus</a>
									</form>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.Modal Hapus Data -->
              		<!-- Modal Edit Data -->
		            <div class="modal" id="modal-edit">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit Data</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form method="POST" action="<?= site_url('sysadmin/level-admin/update') ?>">
										<div class="form-group">
											<input type="text" id="nama_level_admin" name="nama_level_admin" class="form-control" autofocus required placeholder="Level Admin">
											<input type="hidden" id="id_level_admin" name="id_level_admin" class="form-control" required placeholder="ID Level Admin">
										</div>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
									<button type="submit" class="btn btn-primary">Simpan</button>
									</form>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.Modal Edit Data -->
            	</div>
            	<!-- /.card-body -->
          	</div>
          	<!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
<?php } ?>

<?php if ($content == "admin") { ?>
	<div class="row">
        <div class="col-12">
        	<div class="card">
	            <div class="card-header">
					<div class="btn-group pull-right">
						<a href="#" tooltip class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus"></i> Tambah</a>
						<a href="#" tooltip class="btn btn-sm btn-info"><i class="fas fa-print"></i> Print</a>
						<a href="#" tooltip class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
					</div>
	            </div>
	            <!-- Modal Tambah Data -->
	            <div class="modal" id="modal-tambah">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Tambah Data</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" action="<?= site_url('sysadmin/admin/create') ?>">
									<div class="form-group">
										<input type="text" name="nama_admin" class="form-control" autofocus required placeholder="Nama Admin">
									</div>
									<div class="form-group">
										<input type="text" name="username_admin" class="form-control" required placeholder="Username Admin">
									</div>
									<div class="form-group">
										<input type="password" name="password_admin" class="form-control" required placeholder="Password Admin">
									</div>
									<div class="form-group">
										<select class="form-control select2" name="id_level_admin" style="width: 100%">
											<?php foreach ($level as $lev): ?>
												<option value="<?= $lev->id_level_admin ?>"><?= $lev->nama_level_admin ?></option>
											<?php endforeach ?>
										</select>
									</div>
							</div>
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
								</form>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.Modal Tambah Data -->
            	<!-- /.card-header -->
            	<div class="card-body table-responsive">
            		<table class="table datatable table-bordered table-hover">
	                	<thead>
			                <tr>
								<th>No.</th>
								<th>NAMA</th>
								<th>USERNAME</th>
								<th>LEVEL</th>
								<th>STATUS</th>
								<th>AKSI</th>
			                </tr>
	                	</thead>
	                	<tbody>
	                		<?php $no = 1; foreach ($data as $key){ ?>
				                <tr>
				                	<td><?= $no++ ?></td>
									<td><?= $key->nama_admin ?></td>
									<td><?= $key->username_admin ?></td>
									<td><?= $key->nama_level_admin ?></td>
									<td>
										<?php if ($key->aktif == 1){ ?>
											Aktif
										<?php }else{ ?>
											Non Aktif
										<?php } ?>
									</td>
									<td>
										<div class="btn-group pull-right">
											<a href="javascript:;" class="btn btn-sm btn-info item-edit" data="<?= $key->id_admin ?>"><i class="fas fa-eye"></i></a>
										<?php if ($key->aktif == 1){ ?>
											<a href="javascript:;" class="btn btn-sm btn-warning item-nonaktif" data="<?= $key->id_admin ?>" row="<?= $key->nama_admin ?>"><i class="fas fa-lock"></i></a>
										<?php }else{ ?>
											<a href="javascript:;" class="btn btn-sm btn-warning item-aktif" data="<?= $key->id_admin ?>" row="<?= $key->nama_admin ?>"><i class="fas fa-unlock"></i></a>
										<?php } ?>
											<a href="javascript:;" class="btn btn-sm btn-danger item-delete" data="<?= $key->id_admin ?>" row="<?= $key->nama_admin ?>"><i class="fas fa-trash"></i></a>
										</div>
									</td>
				                </tr>
	                		<?php } ?>
	                	</tbody>
              		</table>
              		<script type="text/javascript">
              			$(document).ready(function(){
              				$('.item-delete').on('click', function() {
								var id = $(this).attr('data');
								var data = $(this).attr('row');
								var link = '<?= site_url('sysadmin/admin/delete/') ?>'+id;
								$('#modal-delete').modal({backdrop: 'static', keyboard: false});
					            $('#modal-delete').modal('show');
					            $('.modal-body.delete').text('Apakah anda yakin akan menghapus admin "'+data+'"?');
					            $('.modal-title.delete').text('Hapus Data');
					            $('#link-delete').attr('href', link);
							});

              				$('.item-nonaktif').on('click', function() {
								var id = $(this).attr('data');
								var data = $(this).attr('row');
								var link = '<?= site_url('sysadmin/admin/nonaktifkan/') ?>'+id;
								$('#modal-delete').modal({backdrop: 'static', keyboard: false});
					            $('#modal-delete').modal('show');
					            $('.modal-body.delete').text('Apakah anda yakin akan menonaktifkan admin "'+data+'"?');
					            $('.modal-title.delete').text('Nonaktifkan Admin');
					            $('#link-delete').attr('href', link);
							});

              				$('.item-aktif').on('click', function() {
								var id = $(this).attr('data');
								var data = $(this).attr('row');
								var link = '<?= site_url('sysadmin/admin/aktifkan/') ?>'+id;
								$('#modal-delete').modal({backdrop: 'static', keyboard: false});
					            $('#modal-delete').modal('show');
					            $('.modal-body.delete').text('Apakah anda yakin akan mengaktifkan admin "'+data+'"?');
					            $('.modal-title.delete').text('Aktifkan Admin');
					            $('#link-delete').attr('href', link);
							});

							$('.item-edit').on('click', function() {
								var id = $(this).attr('data');
								$.ajax({
					                type : "POST",
					                url  : "<?= site_url('sysadmin/admin/data-admin') ?>",
					                dataType : "JSON",
					                data : {id:id},
					                success: function(data){
					                	//console.log(data);
					                	$('#modal-edit').modal({backdrop: 'static', keyboard: false});
					                	$('#modal-edit').modal('show');
					                	$('#nama_admin').val(data[0].nama_admin);
					                	$('#id_admin').val(data[0].id_admin);
					                	$('#username_admin').val(data[0].username_admin);
					                	$('#id_level_admin').val(data[0].id_level_admin);
					                }
					            });
							});
						});
					var id = $(this).attr('data');
              		</script>
              		<!-- Modal Hapus Data -->
		            <div class="modal" id="modal-delete">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title delete"></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body delete">
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
									<a href="" id="link-delete" class="btn btn-danger">OK</a>
									</form>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.Modal Hapus Data -->
              		<!-- Modal Edit Data -->
		            <div class="modal" id="modal-edit">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit Data</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form method="POST" action="<?= site_url('sysadmin/admin/update') ?>">
										<div class="form-group">
											<input type="text" id="nama_admin" name="nama_admin" class="form-control" autofocus required placeholder="Nama Admin">
											<input type="hidden" id="id_admin" name="id_admin" class="form-control" required placeholder="ID Admin">
										</div>
										<div class="form-group">
											<input type="text" id="username_admin" name="username_admin" class="form-control" required placeholder="Username Admin">
										</div>
										<div class="form-group">
											<input type="password" id="password_admin" name="password_admin" class="form-control" placeholder="Password Admin">
										</div>
										<div class="form-group">
											<select class="form-control" id="id_level_admin" name="id_level_admin" style="width: 100%">
												<?php foreach ($level as $lev): ?>
													<option value="<?= $lev->id_level_admin ?>"><?= $lev->nama_level_admin ?></option>
												<?php endforeach ?>
											</select>
										</div>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
									<button type="submit" class="btn btn-primary">Simpan</button>
									</form>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.Modal Edit Data -->
            	</div>
            	<!-- /.card-body -->
          	</div>
          	<!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
<?php } ?>