<script>
	function jreng()
	{
		$("#tambah").modal('show');
	}
	function edit()
	{
		$("#edit").modal('show');
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
	<caption><h2>data mahasiswa</h2>
		</caption>
	<thead>
		<tr class="info">
			<th>no</th>
			<th>nim</th>
			<th>nama</th>
			<th>kota asal</th>
			<th>tgl lahir</th>
			<th>jurusan</th>
			<th>jenis kelamin</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no=1;
		foreach ($tabelnya as $x) {
		 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $x['nim']; ?></td>
			<td><?php echo $x['nama']; ?></td>
			<td><?php echo $x['jenis_kelamin']; ?></td>
			<td><?php echo $x['tanggal_lahir']; ?></td>
			<td><?php echo $x['jurusan']; ?></td>
			<td><?php echo $x['alamat']; ?></td>
			<td>
				<button type="button" class="btn btn-success btn-edit-data" onclick="edit()" data-id="<?php echo $x['id']; ?>" data-nama="<?php echo $x['nama'] ?>" data-kota_asal="<?php echo $x['jenis_kelamin'] ?>" data-tanggal_lahir="<?php echo $x['tanggal_lahir']; ?>" data-jurusan="<?php echo $x['jurusan'] ?>" data-jenis_kelamin="<?php echo $x['alamat'] ?>"><i class="fa fa-edit"></i></button> <a href="<?php echo base_url('index.php/control_crud/delete/'.$x['id']); ?>" onclick="return confirm('Apakah anda yakin !');" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
			</td>
		</tr>
		<?php  } ?>
	</tbody>
	</table>
			</div>
		</div>
	</div>
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
									<label class="control-label">Kota Asal :</label>
									<select class="form-control" name="jenis_kelamin">
										<option value="">==pilih==</option>
										<option>Jember</option>
										<option>Lumajang</option>
										<option>Probolinggo</option>
										<option>Situbondo</option>
										<option>Bondowoso</option>
										<option>Malang</option>
										<option>Surabaya</option>
										<option>Madiun</option>
										<option>Magetan</option>
										<option>Kediri</option>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label">Jenis Kelamin :</label>
									<select class="form-control" name="alamat">
										<option value="">==pilih==</option>
										<option>Laki-laki</option>
										<option>Perempuan</option>
									</select><br>
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

<div id="edit" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div>
				<div class="modal-header">
					<button type="button" class="close" data-dismis="modal"></button>
					<h4 class="model-tittle">Edit Data Mahasiswa</h4>
				<form method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/control_crud/edit_data/') ?>">
					<input type="hidden" class="id" name="id">
					<div class="row">
						<div class="col-md-6">
						<div class="form-group">
							<label class="control-label" for="nama">Nama :</label>
							<input type="text" name="jeneng" placeholder="jeneng" class="form-control" id="nama" required>
						</div>
						<div class="form-group">
							<label class="control-label" for="nama">Tanggal Lahir :</label>
							<input type="date" name="tgl" placeholder="Tanggal_lahir (yyyy/mm/dd)" class="form-control" id="tanggal_lahir">
						</div>
						<div class="form-group">
							<label class="control-label" for="nama">Jurusan :</label>
							<input type="text" name="jur" placeholder="Jurusan" class="form-control" id="jurusan">
						</div>	
						</div>
						<div class="col-md-6">
							<div class="form-group">
									<label class="control-label">Kota Asal :</label>
									<select class="form-control" name="jenis_kelamin" id="kota_asal">
										<option value="">==pilih==</option>
										<option>Jember</option>
										<option>Lumajang</option>
										<option>Probolinggo</option>
										<option>Situbondo</option>
										<option>Bondowoso</option>
										<option>Malang</option>
										<option>Surabaya</option>
										<option>Madiun</option>
										<option>Magetan</option>
										<option>Kediri</option>
									</select>
								</div>
						<div class="form-group">
									<label class="control-label">Jenis Kelamin :</label>
									<select class="form-control" name="al" id="jenis_kelamin">
										<option value="">==pilih==</option>
										<option>Laki-laki</option>
										<option>Perempuan</option>
									</select><br>
									<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-book"></span> edit</button>
								</div>
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