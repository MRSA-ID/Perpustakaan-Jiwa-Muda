<?php 
	include'koneksi.php';
	// tanggal peminjaman
	 $tgl_pinjam = Date('Y-m-d'); 
	 
	 //+7hari dari tanggal peminjaman
	 $tgl_kembali = strtotime("+7 day", strtotime($tgl_pinjam));
	 //format tanggal peinjaman tahun bulan hari
	 $tgl_kembali = date('y-m-d',$tgl_kembali);
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
							<label for="pinjam" class="form-label">Tanggal Peminjaman</label>
							<input type="text" class="form-control" id="pinjam" readonly name="pinjam"  value="<?= $tgl_pinjam; ?>" required>
						</div>
						<div class="col-sm-12">
							<label for="kmbl" class="form-label">Tanggal Pengembalian</label>
							<input type="text" class="form-control" id="kmbl" name="kmbl" readonly value="<?= $tgl_kembali; ?>" required>
						</div>
						<div class="col-sm-12">
							<label for="ptgs" class="form-label">ID Petugas</label>
							<input type="text" class="form-control" id="ptgs" name="ptgs" placeholder="Masukkan ID Petugas" required>
						</div>
						<div class="col-sm-12">
							<label for="anggota" class="form-label">ID Anggota</label>
							<input type="text" class="form-control" id="anggota" name="anggota" placeholder="Masukkan ID Anggota" required>
						</div>
						<div class="col-md-5">
							<label for="buku" class="form-label">Kode Buku</label>
							<input type="text" class="form-control" id="buku" name="buku" placeholder="Masukkan Kode Buku" required>
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

