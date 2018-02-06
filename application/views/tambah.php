<script>
	function jreng()
	{
		$("#tambah").modal('show');
	}
	
</script>	
<div class="row">
	<div class="col-md-12">
		<div class="panel pnael-default">
			<div class="panel-heading" align="right">
				<button type="button" class="btn btn-success" data_toggle="modal" onclick="jreng()">Tambah Data</button>
			</div>
			<div class="panel-body">
				<table class="table table-bordered datatable">
	
	<div id="tambah" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div>
					<div class="modal-header">
						<button type="button" class="close" data-dismis="modal"></button>
						<h4 class="model-tittle">Tambah Data Mahasiswa</h4>
					<form method="POST" action="<?php echo base_url('index.php/control_crud/tambah_data/') ?>">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="nama">NIM :</label>
										<input type="text" name="nim" placeholder="nim" class="form-control" required>
									</div>
									<div class="form-group">
										<label class="control-label" for="nama">Nama :</label>
										<input type="text" name="nama" placeholder="Nama" class="form-control" required>
									</div>
									<div class="form-group">
										<label class="control-label" for="nama">Tanggal Lahir :</label>
										<input type="date" name="tanggal_lahir" placeholder="Tanggal_lahir (yyyy/mm/dd)" class="form-control" required>
									</div>
									<div class="form-group">
										<label class="control-label" for="nama">Jurusan :</label>
										<input type="text" name="jurusan" placeholder="Jurusan" class="form-control" required>
									</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">Jenis Kelamin :</label>
									<select class="form-control" name="jenis_kelamin">
										<option value="">==pilih==</option>
										<option>Laki-laki</option>
										<option>Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label" for="nama">Alamat :</label>
									<input type="text" name="alamat" placeholder="Alamat" class="form-control" required><br>
									<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-book"></span> tambah</button>
								</div>	
								</div>
							</div>
						</div>
						</div>
						</div>
					</form>
				</div>
				</div>
			</div>
</div>
