<?php 
	include'koneksi.php';
	$nama = $_POST['nama-rak'];
	$kr = $_POST['kode-buku'];
	$id = $_GET['id'];

	$statement = "UPDATE Perpustakaan.RAK SET 
					NAMA_RAK = '$nama',
					KODE_BUKU = '$kr' WHERE KODE_RAK = '$id'";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);

	if( $sql != null){
		header("location:rak.php");
	}
?>