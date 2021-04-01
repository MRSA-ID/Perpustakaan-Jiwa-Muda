<?php 
		include'koneksi.php';



		$perintahSQL="SELECT * FROM BUKU ORDER BY KODE_BUKU ASC";
		//Menyiapkan pernyataan Oracle untuk dieksekusi
		$query = oci_parse($conn,$perintahSQL);
		//jalankan pernyataan
		oci_execute($query);

   

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">

      <link rel="shortcut icon" href="favicon.ico">
      <link rel="apple-touch-icon" sizes="57x57" href="../ico/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="../ico/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="../ico/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="../ico/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="../ico/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="../ico/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="../ico/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="../ico/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="../ico/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="../ico/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="../ico/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="../ico/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="../ico/favicon-16x16.png">
      <link rel="manifest" href="../ico/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">

    <title>Perpustakaan SOON</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Perpustakaan SOON</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../ANGGOTA/index1.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>  
              </svg>
               Dashboard
            </a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Prosedur
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="../PEMINJAMAN/peminjaman.php">Peminjaman</a></li>
              <li><a class="dropdown-item" href="../PENGEMBALIAN/kembali.php">Pengembalian</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../PETUGAS/petugas.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
              Petugas
            </a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
              </svg>
              Data Buku
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="../BUKU/buku.php">Buku</a></li>
              <li><a class="dropdown-item" href="../Rak/rak.php">Rak</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../ANGGOTA/anggota.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
              Anggota
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Buku</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a class="btn btn-sm btn-outline-secondary" href="tambah.php" role="button">Tambah Data</a>
          </div>
        </div>
      </div>
   <!-- DAFAR DATA ANGGOTA -->
      <div class="table-responsive">
        <table class="table  table-sm table-hover">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Kode Buku</th>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>action</th>
            </tr>
          </thead>
          <?php $i = 1; ?>
          <?php 
            while ($data = oci_fetch_array($query,OCI_BOTH)) {
          ?>
          <tbody>
            <tr class="align-middle">
              <td style="font-weight: bold;"><?= $i; ?></td>
              <td><?= $data['KODE_BUKU'];?></td>
              <td><?= $data['JUDUL']; ?></td>
              <td><?= $data['PENULIS'];?></td>
              <td><?= $data['PENERBIT']; ?></td>
              <td><?= $data['TAHUN_TERBIT']; ?></td>
              <td>
                <div class="btn-group me-2 " id="action" >
                  <a class="btn btn-outline-success btn-sm" href="edit.php?id=<?= $data['KODE_BUKU']; ?>" role="button">Edit</a>
                  <a class="btn btn-outline-danger btn-sm" href="hapus.php?id=<?= $data['KODE_BUKU'];?>" role="button">Hapus</a>
                </div>
              </td>
            </tr>
          </tbody>
          <?php $i++; ?>
          <?php } ?>
        </table>
      </div>
    <!-- AKHIR -->
    </main>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>