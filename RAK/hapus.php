<?php 
include'koneksi.php';
	//ambil id dalam url
	$kode = $_GET['id'];


	$statement = "DELETE Perpustakaan.RAK WHERE KODE_RAK = '$kode'";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);
	header("location:rak.php");


?>