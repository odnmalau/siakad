<div class="card-header">
    <div class="card-title">
        <h3 class="card-label"><?= $page_header; ?>
    </div>
    <div class="card-toolbar">
        <a href="<?= base_url().'prodi'; ?>" class="btn btn-light-primary font-weight-bolder mr-2">
        <i class="ki ki-long-arrow-back icon-sm"></i>Kembali</a>
    </div>
</div>
<div class="card-body">
	<?= form_open('prodi/edit/'.$prodi->id_prodi); ?>
		<?= form_hidden('id_prodi', $prodi->id_prodi); ?>
		<div class="row">
			<div class="col-xl-2"></div>
			<div class="col-xl-8">
				<div class="my-5">
					<div class="form-group row">
						<label class="col-3">Kode Prodi</label>
						<div class="col-9">
							<input type="text" class="form-control" name="kode_prodi" value="<?= $prodi->kode_prodi ;?>">
							<span class="text-danger"><?= form_error('kode_prodi'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Nama Prodi</label>
						<div class="col-9">
							<input type="text" class="form-control" name="nama_prodi" value="<?= $prodi->nama_prodi ;?>">
							<span class="text-danger"><?= form_error('nama_prodi'); ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Nama Jurusan</label>
						<div class="col-9">
							<select name="nama_jurusan" class="form-control" id="kt_select2_1" data-placeholder="--Pilih Jurusan">
								<option value="<?= $prodi->nama_jurusan; ?>"><?= $prodi->nama_jurusan; ?></option>
								<?php foreach ($jurusan as $value) : ?>
									<option value="<?= $value->nama_jurusan ?>"><?= $value->nama_jurusan ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<input type="submit" class="btn btn-primary btn-block" value="Update">
				</div>
			</div>
		</div>
	<?= form_close(); ?>
</div>
