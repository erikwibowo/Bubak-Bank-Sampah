<?php if ($content == 'profil-website'){ ?>
	<div class="row">
        <div class="col-12">
        	<div class="card">
	            <div class="card-body table-responsive">
	            	<form role="form" action="<?= site_url('sysadmin/profil-website/update') ?>" class="form-horizontal" data-toggle="validator" method="post" accept-charset="utf-8">
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
								</div>
				    			<div class="col-md-9">
									<img style="background: grey" class="profile-user-img img-fluid img-circle" src="<?= base_url() ?>files/<?= web_info('logo_website') ?>" alt="User profile picture">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>LOGO WEBSITE</label>
								</div>
								<div class="col-md-9">
									<input type="text" value="<?= web_info('logo_website') ?>" id="logo" name="logo" placeholder="LOGO WEBSITE" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>NAMA WEBSITE</label>
				    			</div>
				    			<div class="col-md-9">
									<input type="text" value="<?= web_info('nama_website') ?>" id="nama_singkat" name="nama_singkat" required placeholder="NAMA WEBSITE" class="form-control">
									<input type="hidden" value="<?= web_info('id_informasi_website') ?>" name="id_profil" id="id_profil">
				    			</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>NAMA LENGKAP WEBSITE</label>
								</div>
				    			<div class="col-md-9">
									<input type="text" value="<?= web_info('nama_lengkap_website') ?>" id="nama" name="nama" placeholder="NAMA LENGKAP WEBSITE" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>DESKRIPSI WEBSITE</label>
								</div>
				    			<div class="col-md-9">
									<textarea id="deskripsi" name="deskripsi" placeholder="DESKRIPSI" class="form-control" rows="4"><?= web_info('deskripsi') ?></textarea>
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>ALAMAT WEBSITE</label>
								</div>
				    			<div class="col-md-9">
									<textarea id="alamat" name="alamat" placeholder="ALAMAT" class="form-control" rows="3"><?= web_info('alamat') ?></textarea>
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>TELEPON WEBSITE</label>
								</div>
				    			<div class="col-md-9">
									<input type="text" value="<?= web_info('telepon') ?>" id="telepon" name="telepon" placeholder="TELEPON WEBSITE" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>EMAIL WEBSITE</label>
								</div>
				    			<div class="col-md-9">
									<input type="text" value="<?= web_info('email') ?>" id="email" name="email" placeholder="EMAIL WEBSITE" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>FACEBOOK WEBSITE</label>
								</div>
				    			<div class="col-md-9">
									<input type="text" value="<?= web_info('facebook') ?>" id="facebook" name="facebook" placeholder="FACEBOOK WEBSITE" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>INSTAGRAM WEBSITE</label>
								</div>
				    			<div class="col-md-9">
									<input type="text" value="<?= web_info('instagram') ?>" id="instagram" name="instagram" placeholder="INSTAGRAM WEBSITE" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>TWITTER WEBSITE</label>
								</div>
				    			<div class="col-md-9">
									<input type="text" value="<?= web_info('twitter') ?>" id="twitter" name="twitter" placeholder="TWITTER WEBSITE" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
								</div>
								<div class="col-md-9">
									<button class="btn btn-success" type="submit">SIMPAN</button>
								</div>
							</div>
						</div>
					</form>
	            </div>
	        </div>
	    </div>
	</div>
<?php } ?>
<?php if ($content == 'tambah-blog'){ ?>
	<div class="row">
        <div class="col-12">
        	<div class="card">
	            <div class="card-body table-responsive">
	            	<form role="form" action="<?= site_url('sysadmin/blog/create') ?>" class="form-horizontal" data-toggle="validator" method="post" accept-charset="utf-8" enctype="multipart/form-data">
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>JUDUL</label>
								</div>
								<div class="col-md-9">
									<input type="text" required value="" name="judul_blog" placeholder="JUDUL BLOG" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>KATEGORI</label>
								</div>
								<div class="col-md-9">
									<select name="id_kategori_blog" class="form-control select2" style="width: 100%;">
										<?php foreach ($kategori as $key): ?>
										<option value="<?= $key->id_kategori_blog ?>"><?= $key->kategori_blog ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>FOTO</label>
				    			</div>
				    			<div class="col-md-9">
									<div class="input-group">
										<div class="custom-file">
											<input type="file" required name="foto">
										</div>
									</div>
									<p style="color: blue; font-weight: bold;">Ukuran foto maks. 5 MB dan resolusi maks. 5000px x 5000px</p>
				    			</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>ISI BLOG</label>
								</div>
				    			<div class="col-md-12">
									<textarea name="isi_blog" id="summernote"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>PUBLISH?</label>
								</div>
				    			<div class="col-md-12">
									<input type="radio" checked value="1" name="publish"> Ya
									<input type="radio" value="0" name="publish"> Tidak
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
								</div>
								<div class="col-md-9">
									<button class="btn btn-success" type="submit">SIMPAN</button>
								</div>
							</div>
						</div>
					</form>
	            </div>
	        </div>
	    </div>
	</div>
<?php } ?>

<?php if ($content == 'edit-blog'){ ?>
	<div class="row">
        <div class="col-12">
        	<div class="card">
	            <div class="card-body table-responsive">
	            	<form role="form" action="<?= site_url('sysadmin/blog/update') ?>" class="form-horizontal" data-toggle="validator" method="post" accept-charset="utf-8" enctype="multipart/form-data">
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>JUDUL</label>
								</div>
								<div class="col-md-9">
									<input type="text" required value="<?= $blog['judul_blog'] ?>" name="judul_blog" placeholder="JUDUL BLOG" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>KATEGORI</label>
								</div>
								<div class="col-md-9">
									<select name="id_kategori_blog" class="form-control select2" style="width: 100%;">
										<?php foreach ($kategori as $key): ?>
										<option <?= $blog['id_kategori_blog'] == $key->id_kategori_blog ? "selected":"" ?> value="<?= $key->id_kategori_blog ?>"><?= $key->kategori_blog ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>FOTO</label>
				    			</div>
				    			<div class="col-md-9">
				    				<img class="img img-responsive" src="<?= base_url() ?>files/blog/thumb/<?= $blog['thumb_blog'] ?>">
									<div class="input-group">
										<div class="custom-file">
											<input type="file" name="foto">
										</div>
									</div>
									<p style="color: blue; font-weight: bold;">Ukuran foto maks. 5 MB dan resolusi maks. 5000px x 5000px</p>
									<input type="hidden" name="id_blog" value="<?= $blog['id_blog'] ?>">
									<input type="hidden" name="foto_blog" value="<?= $blog['foto_blog'] ?>">
									<input type="hidden" name="thumb_blog" value="<?= $blog['thumb_blog'] ?>">
				    			</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>ISI BLOG</label>
								</div>
				    			<div class="col-md-12">
									<textarea name="isi_blog" id="summernote"><?= $blog['isi_blog'] ?></textarea>
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
									<label>PUBLISH?</label>
								</div>
				    			<div class="col-md-12">
									<input type="radio" <?= $blog['publish'] == 1 ? "checked":"" ?> value="1" name="publish"> Ya
									<input type="radio" <?= $blog['publish'] == 0 ? "checked":"" ?> value="0" name="publish"> Tidak
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 5px">
							<div class="col-md-12">
								<div class="col-md-3">
								</div>
								<div class="col-md-9">
									<button class="btn btn-success" type="submit">SIMPAN</button>
								</div>
							</div>
						</div>
					</form>
	            </div>
	        </div>
	    </div>
	</div>
<?php } ?>