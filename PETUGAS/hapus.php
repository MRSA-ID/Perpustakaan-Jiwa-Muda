<?php 
include'koneksi.php';
	//ambil id dalam url
	$kode = $_GET['id'];


	$statement = "DELETE Perpustakaan.PETUGAS WHERE ID_PETUGAS = '$kode'";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);
	header("location:petugas.php");
?>