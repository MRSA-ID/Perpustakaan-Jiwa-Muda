<?php 
	include'koneksi.php';
	$nama = $_POST['nama-rak'];
	$kr = $_POST['kode-buku'];

	$statement = "INSERT INTO RAK values(KODE_RAK.nextval,'$nama','$kr')";
	$sql = oci_parse($conn,$statement);
	oci_execute($sql);

	if( $sql != null){
		header("location:rak.php");
	}
?>