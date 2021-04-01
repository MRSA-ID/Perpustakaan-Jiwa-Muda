<?php 
	include'koneksi.php';
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$jbtn = $_POST['jbtn'];
	$telp = $_POST['telp'];
	$alamat = $_POST['alamat'];
	$id = $_GET['id'];

	$statement = "UPDATE Perpustakaan.PETUGAS SET 
					NAMA = '$nama',
					JENIS_KELAMIN = '$jk',
					JABATAN = '$jbtn',
					NO_TELP = '$telp',
					ALAMAT = '$alamat' WHERE ID_PETUGAS = '$id'";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);

	if( $sql != null){
		header("location:petugas.php");
	}
?>