<?php 
include'koneksi.php';
	//ambil id dalam url
	$kode = $_GET['id'];


	$statement = "DELETE Perpustakaan.BUKU WHERE KODE_BUKU = '$kode'";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);
	header("location:buku.php");
?>