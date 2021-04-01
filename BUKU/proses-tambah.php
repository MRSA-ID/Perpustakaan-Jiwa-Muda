<?php 
	include'koneksi.php';
	$jdl = $_POST['jdl'];
	$penulis = $_POST['penulis'];
	$penerbit = $_POST['penerbit'];
	$thn = $_POST['thn'];

	$statement = "INSERT INTO BUKU values(KODE_BUKU.nextval,'$jdl','$penulis','$penerbit','$thn')";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);

	if( $sql != null){
		header("location:buku.php");
	}
?>