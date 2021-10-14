<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Mahasiswa</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Data Mahasiswa</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<section class="content">
		<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			<i class="fa fa-plus"></i> Tambah Mahasiswa
		</button>
		<table class="table">
			<tr>
				<th>No</th>
				<th>NAMA MAHASISWA</th>
				<th>NIM</th>
				<th>TANGGAL LAHIR</th>
				<th>JURUSAN</th>
				<th>AKSI</th>
			</tr>

			<?php 
			$no=1;
			foreach ($mahasiswa as $mhs) { 
				?>
				<tr>
					<td> <?= $no; ?> </td>
					<td> <?= $mhs->nama; ?> </td>
					<td> <?= $mhs->nim; ?> </td>
					<td> <?= $mhs->tgl_lahir; ?> </td>
					<td> <?= $mhs->jurusan; ?> </td>
					<td> <?= anchor('mahasiswa/detail/'.$mhs->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>'); ?></td>
					<td onclick="javascript: return confirm('Anda yakin akan menghapus data?')"> <?= anchor('mahasiswa/hapus/'.$mhs->id, '<div class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></div>'); ?> </td>
					<td> <?= anchor('mahasiswa/edit/'.$mhs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?> </td>

				</tr>
				<?php
				$no++;	
			}
			?>
		</table>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?= form_open_multipart('mahasiswa/tambah_aksi'); ?>

						<div class="form-group">
							<label for="nama"> Nama </label>
							<input type="text" name="nama" id="nama" class="form-control">
						</div>
						<div class="form-group">
							<label for="nim"> Nim </label>
							<input type="text" name="nim" id="nim" class="form-control">
						</div>
						<div class="form-group">
							<label for="tgl_lahir"> Tanggal Lahir </label>
							<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
						</div>
						<div class="form-group">
							<label for="jurusan"> Jurusan </label>
							<select name="jurusan" id="jurusan" class="form-control">
								<option value="Teknik Informatika">Teknik Informatika</option>
								<option value="Sistem Informasi">Sistem Informasi</option>
								<option value="Manajemen Informatika">Manajemen Informatika</option>
								
							</select>
						</div>
						<div class="form-group">
							<label for="alamat"> Alamat </label>
							<input type="text" name="alamat" id="alamat" class="form-control">
						</div>
						<div class="form-group">
							<label for="email"> Email </label>
							<input type="email" name="email" id="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="no_telp"> No Telpon </label>
							<input type="text" name="no_telp" id="no_telp" class="form-control">
						</div>
						<div class="form-group">
							<label for="uploadf"> Upload Foto </label>
							<input type="file" name="uploadf" id="uploadf" class="form-control">
						</div>

						<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
						<button type="submit" class="btn btn-primary">Simpan</button>

					<?= form_close(); ?>
				</div>

			</div>
		</div>
	</div>

</div>