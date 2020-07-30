<?php

	include_once("koneksi_data_pemilih.php");
	$no=$_GET['no'];

	$query = "SELECT * FROM tb_pemilih WHERE no = " . $no;

	$hasil = mysqli_query($koneksi, $query);

?>