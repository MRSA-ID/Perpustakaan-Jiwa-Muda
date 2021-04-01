<?php 
include'koneksi.php';
	//ambil id dalam url
	$kode = $_GET['id'];


	$statement = "DELETE Perpustakaan.ANGGOTA WHERE ID_ANGGOTA = '$kode'";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);
	header("location:anggota.php");
?>