<?php
session_start();
$user=$_SESSION['user'];

if($user == ""){
  ?>
  <script>
    document.location ='../index.php';
  </script>
  <?php
}else{
  include "boot.php";
?>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-warning mt-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <form class="d-flex" action="search.php" methode="GET" target="wadah" >
        <input class="form-control me-2" type="search" placeholder="Search" name="id" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit">Ok</button>
      </form>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="row">
    <div class="col col-3 mt-2">
    <ul class="list-group">
    <a href="dashboard.php" target="wadah">
  <li class="list-group-item"><i class="bi bi-house-fill"></i></i> Dashboard</li>
  <a href="absen.php" target="wadah">
  <li class="list-group-item"><i class="bi bi-journal-check"></i>  absen</li>
  <a href="tampilabsen.php" target="wadah">
  <li class="list-group-item"></i> <i class="bi bi-journal-text"></i>   Data absen</li>
  <a href="input.php" target="wadah">
  <li class="list-group-item"><i class="bi bi-journal-plus"></i>  Input karyawan </li>
  </a>
  <a href="tampil.php" target="wadah">
  <li class="list-group-item"></i> <i class="bi bi-journal-text"></i>   Data karyawan </li>
  </a>
  <a href="rekap.php" target="wadah">
  <li class="list-group-item"> <i class="bi bi-journal-bookmark"></i>  Rekap</li>
  </a>
  <a href="logout.php">
  <li class="list-group-item"><i class="bi bi-box-arrow-in-left"></i>  Log Out</li>
</a>
</ul>
</div>
<div class="col mt-2">
  <iframe src="dashboard.php" name="wadah" frameborder="0" width=100% height=800></iframe>
</div>
</div>
    </div>
  </body>

<?php
}
?>