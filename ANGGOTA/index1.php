<?php 
  include'koneksi.php';
//DATA BUKU
    $perintahSQL="SELECT * FROM BUKU";
    //Menyiapkan pernyataan Oracle untuk dieksekusi
    $query = oci_parse($conn,$perintahSQL);
    //jalankan pernyataan
    oci_execute($query);

while (oci_fetch_array($query,OCI_BOTH)) {
    $buku = oci_num_rows($query);
  }
//data ANGGOTA
  $perintahSQL="SELECT * FROM ANGGOTA";
    //Menyiapkan pernyataan Oracle untuk dieksekusi
    $query1 = oci_parse($conn,$perintahSQL);
    //jalankan pernyataan
    oci_execute($query1);
    
while ( oci_fetch_array($query1,OCI_BOTH)) {
    $anggota = oci_num_rows($query1);
  }
//DATA PETUGAS 
    $perintahSQL="SELECT * FROM PETUGAS";
    //Menyiapkan pernyataan Oracle untuk dieksekusi
    $query2 = oci_parse($conn,$perintahSQL);
    //jalankan pernyataan
    oci_execute($query2);
  
while ( oci_fetch_array($query2,OCI_BOTH)) {
    $petugas = oci_num_rows($query2);
  }
  //RAK BUKU 
    $perintahSQL="SELECT * FROM RAK";
    //Menyiapkan pernyataan Oracle untuk dieksekusi
    $query3 = oci_parse($conn,$perintahSQL);
    //jalankan pernyataan
    oci_execute($query3);
  
while ( oci_fetch_array($query3,OCI_BOTH)) {
    $rak = oci_num_rows($query3);
  }
   //peminjaman
    $perintahSQL="SELECT * FROM PEMINJAMAN";
    //Menyiapkan pernyataan Oracle untuk dieksekusi
    $query4 = oci_parse($conn,$perintahSQL);
    //jalankan pernyataan
    oci_execute($query4);
  
while ( oci_fetch_array($query4,OCI_BOTH)) {
    $peminjaman = oci_num_rows($query4);
  }
     //pengembalian
    $perintahSQL="SELECT * FROM PENGEMBALIAN";
    //Menyiapkan pernyataan Oracle untuk dieksekusi
    $query5 = oci_parse($conn,$perintahSQL);
    //jalankan pernyataan
    oci_execute($query5);
  
while ( oci_fetch_array($query5,OCI_BOTH)) {
    $pengembalian = oci_num_rows($query5);
  }
?>
<!doctype html>
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

    <title>Perpustakaan Jiwa Muda</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

   

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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Perpustakaan Jiwa Muda</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index1.php">
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
            <a class="nav-link" href="anggota.php">
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
        <h1 class="h2">Dashboard</h1>
      </div>
    <div class="row " id="card">
      <div class="col-sm">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-book fa-4x"></i>
              </div>
              <h5 class="card-title">JUMLAH BUKU</h5>
              <div class="card-text display-2">
                  <?= number_format($buku,'0',",",".");?>
              </div>
              <a href="../BUKU/buku.php"><p class="card-text text-white">Lihat Detail</p></a>
            </div>
          </div>
      </div>
       <div class="col-sm">
          <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-address-card fa-4x"></i>
              </div>
              <h5 class="card-title">DATA ANGGOTA</h5>
              <div class="card-text display-2">
                <?= number_format($anggota,'0',",",".");?>
              </div>
              <a href="anggota.php"><p class="card-text text-white">Lihat Detail</p></a>
            </div>
          </div>
      </div>
       <div class="col-sm">
          <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-group fa-4x"></i>
              </div>
              <h5 class="card-title">DATA PETUGAS</h5>
              <div class="card-text display-2">
                <?= number_format($petugas,'0',",",".");?>
              </div>
              <a href="../PETUGAS/petugas.php"><p class="card-text text-white">Lihat Detail</p></a>
            </div>
          </div>
      </div>
      <div class="col-sm">
          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-database fa-4x"></i>
              </div>
              <h5 class="card-title">JUMLAH RAK BUKU</h5>
              <div class="card-text display-2">
                <?= number_format($rak,'0',",",".");?>
              </div>
              <a href="../RAK/rak.php"><p class="card-text text-white">Lihat Detail</p></a>
            </div>
          </div>
      </div>
    </div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>PROSEDUR</h5>
      </div>
    <div class="row " id="card">
      <div class="col-sm-3">
          <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-folder-open-o fa-4x"></i>
              </div>
              <h5 class="card-title">PEMINJAMAN</h5>
              <div class="card-text display-2">
                <?= number_format($peminjaman,'0',",",".");?>
              </div>
              <a href="../PEMINJAMAN/peminjaman.php"><p class="card-text text-white">Lihat Detail</p></a>
            </div>
          </div>
      </div>
      <div class="col-sm-3">
          <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-folder-o fa-4x"></i>
              </div>
              <h5 class="card-title">PENGEMBALIAN</h5>
              <div class="card-text display-2">
                <?= number_format($pengembalian,'0',",",".");?>
              </div>
              <a href="../PENGEMBALIAN/kembali.php"><p class="card-text text-white">Lihat Detail</p></a>
            </div>
          </div>
      </div>
    </div>
    </main>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
