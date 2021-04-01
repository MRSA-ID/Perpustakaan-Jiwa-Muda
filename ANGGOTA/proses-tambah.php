<?php 
	include'koneksi.php';
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$jrsn = $_POST['jrsn'];
	$angkatan = $_POST['angkatan'];
	$alamat = $_POST['alamat'];

	$statement = "INSERT INTO ANGGOTA values(ID_ANGGOTA.nextval,'$nama','$jk','$jrsn','$angkatan','$alamat')";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);

	if( $sql != null){
		header("location:anggota.php");
	}
?>