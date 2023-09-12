<?php
echo form_open(base_url('admin/kategori/edit/' . $kategori['id_kategori']));
echo csrf_field();
?>

<div class="form-group row">
	<label class="col-3">Nama Kategori</label>
	<div class="col-9">
		<input type="text" name="nama_kategori" class="form-control" placeholder="Nama kategori" value="<?php echo $kategori['nama_kategori'] ?>" required>
	</div>
</div>

<div class="d-flex justify-content-center py-2">
	<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
</div>

<?php echo form_close(); ?>