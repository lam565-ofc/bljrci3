<div class="content-wrapper">
	<section class="content">
		<h4><strong>DETAIL MAHASISWA</strong></h4>
		<table class="table">
			<tr>
				<th>Nama Lengkap</th>
				<td> : <?= $detail->nama; ?></td>
			</tr>
			<tr>
				<th>NIM</th>
				<td> : <?= $detail->nim; ?></td>
			</tr>
			<tr>
				<th>Tanggal Lahir</th>
				<td> : <?= $detail->tgl_lahir; ?></td>
			</tr>
			<tr>
				<th>Jurusan</th>
				<td> : <?= $detail->jurusan; ?></td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td> : <?= $detail->alamat; ?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td> : <?= $detail->email; ?></td>
			</tr>
			<tr>
				<th>No Telepon</th>
				<td> : <?= $detail->no_telp; ?></td>
			</tr>
			
		</table>
		<a href="<?= base_url(); ?>mahasiswa/index" class="btn btn-warning">Kembali</a>
	</section>
</div>