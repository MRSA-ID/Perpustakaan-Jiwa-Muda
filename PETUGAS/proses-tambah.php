<?php 
	include'koneksi.php';
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$jbtn = $_POST['jbtn'];
	$telp = $_POST['telp'];
	$alamat = $_POST['alamat'];

	$statement = "INSERT INTO PETUGAS values(ID_PETUGAS.nextval,'$nama','$jk','$jbtn','$telp','$alamat')";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);

	if( $sql != null){
		header("location:petugas.php");
	}
?>