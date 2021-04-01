<?php 
	include'koneksi.php';
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perpustakaan SOON</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body class="bg-light">
<div class="container Tambah">
	<main>
		<div class="py-5 text-start " >
			<h2>Tambah Data</h2>
		</div>
		<div class="row g-3">
			<div class="col-md-8 col-lg-10">
				<form action="proses-tambah.php" method="post" class="needs-validation">
					
						<div class="col-sm-12">
							<label for="nama" class="form-label">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
						</div>
						<div class="col-sm-12">
							<label for="jbtn" class="form-label">Jabatan</label>
							<input type="text" class="form-control" id="jbtn" name="jbtn" placeholder="Jabatan" required>
						</div>
						<div class="col-sm-12">
							<label for="telp" class="form-label">No.telephone</label>
							<input type="text" class="form-control" id="telp" name="telp" placeholder="No.telephone Pribadi" required>
						</div>
						<div class="col-sm-12">
							<label for="alamat" class="form-label">Alamat</label>
							<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
						</div>
						<div class="col-md-5">
							<label for="jk" class="form-label">Jenis Kelamin</label>
							<select name="jk" id="jk" class="form-select" >
								<option selected=>Chosee...</option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
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
