<?php 
	include'koneksi.php';
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$jrsn = $_POST['jrsn'];
	$angkatan = $_POST['angkatan'];
	$alamat = $_POST['alamat'];
	$id = $_GET['id'];

	$statement = "UPDATE Perpustakaan.ANGGOTA SET 
					NAMA = '$nama',
					JENIS_KELAMIN = '$jk',
					JURUSAN = '$jrsn',
					ANGKATAN = '$angkatan',
					ALAMAT = '$alamat' WHERE ID_ANGGOTA = '$id'";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);

	if( $sql != null){
		header("location:anggota.php");
	}
?>