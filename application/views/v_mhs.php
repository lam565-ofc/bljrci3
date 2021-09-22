<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h2>Daftar Mahasiswa</h2>
	<hr>
	<table border="1px solid black">
		<tr>
			<th>NIM</th>
			<th>NAMA</th>
			<th>ALAMAT</th>			
		</tr>

		<?php foreach ($mahasiswa as $mhs) : ?>

			<tr>
				<td><?= $mhs['nim']; ?></td>
				<td><?= $mhs['nama']; ?></td>
				<td><?= $mhs['alamat'] ?></td>
			</tr>

		<?php endforeach; ?>

	</table>

</body>
</html>