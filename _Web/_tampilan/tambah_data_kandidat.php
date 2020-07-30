<?php
include "koneksi_data_kandidat.php";
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
		<textarea name="visi" placeholder="Visi"></textarea>
		<br>
		<textarea name="misi" placeholder="Misi"></textarea>
		<br>
		<input type="submit" name="simpan" value="Simpan"> <input type="reset" name="reset" value="Reset">
	</form>
	<?php
	if (isset($_POST['simpan'])) {
		$no = $_POST['no'];
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$visi = $_POST['visi'];
		$misi = $_POST['misi'];
		$tambah = mysqli_query($koneksi,"INSERT INTO tb_kandidat(no,nama,nim,visi,misi)VALUES('$no','$nama','$nim','$visi','$misi')");
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