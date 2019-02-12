<html>
	<head>
		<title>Data Peminjaman Majalah</title>
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<style type="text/css">
		body {
			font-family: 'Source Sans Pro', sans-serif;
		}
		table {
			border: 1px solid black;
			border-collapse: collapse;
		}
		tr,td {
			border: 1px solid black;
			padding: 5px;
		}
		</style>
	</head>
	<body>
		<a href="tambah.php">Tambah Data</a>
		<table>
			<tr>
				<td>No</td>
				<td>Id Pinjam Majalah</td>
				<td>Id Anggota</td>
				<td>ISBN</td>
				<td>Tanngal Pinjam</td>
				<td>Tanggal Kembali</td>
				<td>Status</td>
				<td>Petugas</td>
				<td>Action</td>
			</tr>
			<?php
			include '../config/koneksi.php';
			$nomor  = 1;
			$sql    = "SELECT * FROM pinjam_buku";
			$result = mysqli_query($connect,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['id_pinjam_majalah']."</td>
						<td>".$row['id_anggota']."</td>
						<td>".$row['isbn']."</td>
						<td>".$row['tgl_pinjam_majalah']."</td>
						<td>".$row['tgl_kembali_majalah']."</td>
						<td>".$row['status_pinjam_majalah']."</td>
						<td>".$row['id_petugas']."</td>
						<td>
							<a href='edit.php?no=".$row['id_pinjam_majalah']."'>Edit</a>
							<a href='delete.php?no=".$row['id_pinjam_majalah']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>