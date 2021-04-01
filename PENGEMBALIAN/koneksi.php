<?php 
$username = "Perpustakaan";
$password = "admin";
$dbname = "localhost/XE";

$conn = oci_connect($username, $password, $dbname);

if (!$conn) {
	$m = oci_error();
	echo $m['message'], "\n";
	exit;
}
// else{
// 	print"connected to oracle";
// 	echo "
// 			 <script >
// 			 	window.alert('connected to oracle');
// 			 </script>
// 		 ";
// }

?>