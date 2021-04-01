<?php 
include'koneksi.php';
	//ambil id dalam url
	$kode = $_GET['id'];


	$statement = "DELETE Perpustakaan.PEMINJAMAN WHERE KODE_PINJAM = '$kode'";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);
	header("location:peminjaman.php");
?>