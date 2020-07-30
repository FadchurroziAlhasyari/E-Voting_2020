<?php
include "koneksi_data_pemilih.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Kandidat</title>
</head>
<body>
	<center><form method="post">
		<input type="text" name="no" placeholder="NO">
		<br>
		<input type="text" name="nama" placeholder="Nama">
		<br>
		<input type="text" name="nim" placeholder="Nim">
		<br>
		<input type="text" name="status" placeholder="Status">
		<br>
		<input type="submit" name="simpan" value="Simpan"> <input type="reset" name="reset" value="Reset">
	</form>
	<?php
	if (isset($_POST['simpan'])) {
		$no = $_POST['no'];
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$status = $_POST['status'];
		$tambah = mysqli_query($koneksi,"INSERT INTO tb_pemilih(no,nama,nim,status)VALUES('$no','$nama','$nim','$status')");
		if ($tambah) {
			echo "Berhasil Menambahkan Data Baru";
		}else {
			echo "Gagal Menambahkan Data";
		}
	}
	?>
</center>
</body>
</html>