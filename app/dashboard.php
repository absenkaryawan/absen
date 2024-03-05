<h3>PERHARI</h3>
<?php
include "boot.php";
$date = date("Y-m-d");
echo $date;
?>

<div class="row">
<div class="col-md-3">
<div class="card" style="width: 13rem;">
  <img src="../images/wink-emoji.png" class="card-img-top" alt="..." width="200">
  <div class="card-body bg-warning">
    <p class="card-text">Absen Hari ini
        <?php
        include "koneksi.php";
        $lihat = $konek->query("select keterangan from karyawan where keterangan like 'Hadir' and waktu like '%$date%'");
        $jumlah = $lihat->num_rows;
        echo $jumlah;
        ?>
    </p>
  </div>
</div>
</div>

<div class="col-md-3">
<div class="card" style="width: 13rem;">
  <img src="../images/sick.png" class="card-img-top" alt="..."  width="200">
  <div class="card-body bg-warning">
    <p class="card-text">Sakit 
    <?php
        include "koneksi.php";
        $lihat = $konek->query("select keterangan from karyawan where keterangan like 'Sakit' and waktu like '%$date%'");
        $jumlah = $lihat->num_rows;
        echo $jumlah;
        ?>
    </p>
  </div>
</div>
</div>

<div class="col-md-1">
<div class="card" style="width: 13rem;">
  <img src="../images/images.png" class="card-img-top" alt="..."  width="200">
  <div class="card-body bg-warning">
    <p class="card-text">izin 
    <?php
        include "koneksi.php";
        $lihat = $konek->query("select keterangan from karyawan where keterangan like 'izin' and waktu like '%$date%'");
        $jumlah = $lihat->num_rows;
        echo $jumlah;
        ?>
    </p>
  </div>
</div>
</div>
</div>


<h3>PERBULAN</h3>
<?php
include "boot.php";
$date = date("Y-m");
echo $date;
?>

<div class="row">
<div class="col-md-3">
<div class="card" style="width: 13rem;">
  <img src="../images/wink-emoji.png" class="card-img-top" alt="..." width="200">
  <div class="card-body">
    <p class="card-text">Absen perbulan
        <?php
        include "koneksi.php";
        $lihat = $konek->query("select keterangan from karyawan where keterangan like 'Hadir'");
        $jumlah = $lihat->num_rows;
        echo $jumlah;
        ?>
    </p>
  </div>
</div>
</div>

<div class="col-md-3">
<div class="card" style="width: 13rem;">
  <img src="../images/sick.png" class="card-img-top" alt="..."  width="200">
  <div class="card-body">
    <p class="card-text">Sakit 
    <?php
        include "koneksi.php";
        $lihat = $konek->query("select keterangan from karyawan where keterangan like 'Sakit'");
        $jumlah = $lihat->num_rows;
        echo $jumlah;
        ?>
    </p>
  </div>
</div>
</div>

<div class="col-md-1">
<div class="card" style="width: 13rem;">
  <img src="../images/images.png" class="card-img-top" alt="..."  width="200">
  <div class="card-body">
    <p class="card-text">izin 
    <?php
        include "koneksi.php";
        $lihat = $konek->query("select keterangan from karyawan where keterangan like 'izin'");
        $jumlah = $lihat->num_rows;
        echo $jumlah;
        ?>
    </p>
  </div>
</div>
</div>
</div>


