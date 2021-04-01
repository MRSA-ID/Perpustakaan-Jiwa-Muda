<?php 
	include'koneksi.php';
	$jdl = $_POST['jdl'];
	$penulis = $_POST['penulis'];
	$penerbit = $_POST['penerbit'];
	$thn = $_POST['thn'];
	$id = $_GET['id'];

	$statement = "UPDATE Perpustakaan.BUKU SET 
					JUDUL = '$jdl',
					PENULIS = '$penulis',
					PENERBIT = '$penerbit',
					TAHUN_TERBIT = '$thn'
					WHERE KODE_BUKU = '$id'";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);

	if( $sql != null){
		header("location:buku.php");
	}
?>