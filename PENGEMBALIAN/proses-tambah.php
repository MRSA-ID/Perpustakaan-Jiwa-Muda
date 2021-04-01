<?php 
	include'koneksi.php';
	$kode = $_POST['kodePinjam'];
	$tglKembali = $_POST['kmbl'];
	$ptgs = $_POST['ptgs'];
	$denda = $_POST['denda'];
	$anggota = $_POST['anggota'];
	$kodeBuku = $_POST['buku'];

	$statement = "INSERT INTO PENGEMBALIAN values(KODE_KEMBALI.nextval,'$tglKembali','$kode','$denda','$ptgs','$anggota','$kodeBuku')";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);

	if( $sql != null){
		header("location:kembali.php");
	}
?>