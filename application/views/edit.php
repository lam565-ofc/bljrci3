<div class="content-wrapper">
	<section class="content">

		<?php foreach ( $mahasiswa as $mhs ) { ?>

			<form method="post" action="<?= base_url(); ?>mahasiswa/update">

				<div class="form-group">
					<label for="nama"> Nama </label>
					<input type="hidden" name="id" id="id" class="form-control" value="<?= $mhs->id; ?>">
					<input type="text" name="nama" id="nama" class="form-control" value="<?= $mhs->nama; ?>">
				</div>
				<div class="form-group">
					<label for="nim"> Nim </label>
					<input type="text" name="nim" id="nim" class="form-control" value="<?= $mhs->nim; ?>">
				</div>
				<div class="form-group">
					<label for="tgl_lahir"> Tanggal Lahir </label>
					<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $mhs->tgl_lahir; ?>">
				</div>
				<div class="form-group">
					<label for="jurusan"> Jurusan </label>
					<select name="jurusan" id="jurusan" class="form-control" value="<?= $mhs->jurusan; ?>">
						<option value="Teknik Informatika">Teknik Informatika</option>
						<option value="Sistem Informasi">Sistem Informasi</option>
						<option value="Manajemen Informatika">Manajemen Informatika</option>
						
					</select>
				</div>
				<div class="form-group">
							<label for="alamat"> Alamat </label>
							<input type="text" name="alamat" id="alamat" class="form-control" value="<?= $mhs->alamat; ?>">
						</div>
						<div class="form-group">
							<label for="email"> Email </label>
							<input type="email" name="email" id="email" class="form-control" value="<?= $mhs->email; ?>">
						</div>
						<div class="form-group">
							<label for="no_telp"> No Telpon </label>
							<input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= $mhs->no_telp; ?>">
						</div>

				<a href="<?= base_url(); ?>mahasiswa/index" class="btn btn-warning">Kembali</a>
				<button type="submit" class="btn btn-primary">Simpan</button>

			</form>

		<?php } ?>
	</section>
</div>	