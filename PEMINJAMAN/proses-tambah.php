<?php 
	include'koneksi.php';
	$pinjam = $_POST['pinjam'];
	$kembali = $_POST['kmbl'];
	$petugas = $_POST['ptgs'];
	$anggota = $_POST['anggota'];
	$buku = $_POST['buku'];

	$statement = "INSERT INTO PEMINJAMAN values(KODE_PINJAM.nextval,'$pinjam','$kembali','$petugas','$anggota','$buku')";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);

	if( $sql != null){
		header("location:peminjaman.php");
	}
?>