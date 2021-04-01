<?php 
	include'koneksi.php';
	//ambil id dalam url
	$id = $_GET['id'];
	
	// query data berdasarkan id
	$statement="SELECT * FROM ANGGOTA WHERE ID_ANGGOTA = $id";
	$query = oci_parse($conn,$statement);
	oci_execute($query);

	$data = oci_fetch_array($query,OCI_BOTH);

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perpustakaan SOON</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="dashboard.css">


	<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
	<meta name="theme-color" content="#7952b3">


</head>
<body class="bg-light">
<div class="container Tambah">
	<main>
		<div class="py-5 text-start " >
			<h2>Update Data</h2>
		</div>
		<div class="row g-3">
			<div class="col-md-8 col-lg-10">
				<form action="proses-edit.php?id=<?= $data['ID_ANGGOTA'];?>" method="post" class="needs-validation">
					
						<div class="col-sm-12">
							<label for="nama" class="form-label">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama" name="nama" required value="<?= $data['NAMA'];?>">
						</div>
						<div class="col-sm-12">
							<label for="jrsn" class="form-label">Jurusan</label>
							<input type="text" class="form-control" id="jrsn" name="jrsn" required value="<?= $data['JURUSAN'];?>">
						</div>
						<div class="col-sm-12">
							<label for="angkatan" class="form-label">Angkatan</label>
							<input type="text" class="form-control" id="angkatan" name="angkatan" required value="<?= $data['ANGKATAN'];?>">
						</div>
						<div class="col-sm-12">
							<label for="alamat" class="form-label">Alamat</label>
							<input type="text" class="form-control" id="alamat" name="alamat" required value="<?= $data['ALAMAT'];?>">
						</div>
						<div class="col-md-5">
							<label for="jk" class="form-label">Jenis Kelamin</label>
							<input type="text" class="form-control" id="jk" name="jk" required value="<?= $data['JENIS_KELAMIN'];?>">
						</div>
					
						<hr class="my-4">
					<button class="w-100 btn btn-primary btn-lg" type="submit">Submit Data</button>
				</form>
			</div>
		</div>
	</main>
</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	    
	    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>
</html>